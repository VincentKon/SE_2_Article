<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use PhpParser\Node\Stmt\Catch_;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->guest() || auth()->user()->is_author !== 1){
            abort(403);
        }
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->guest() || auth()->user()->is_author !== 1){
            abort(403);
        }
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(auth()->guest() || auth()->user()->is_author !== 1){
            abort(403);
        }
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'slug' => ['unique:posts'],
            'category_id' => ['required'],
            'body' => ['required'],
            'image' => ['image', 'file', 'max:1024']
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        
        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New Post Has Been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if(auth()->guest() || auth()->user()->is_author !== 1){
            abort(403);
        }
        if($post->author->id!==auth()->user()->id){
            abort(403);
        }
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if(auth()->guest() || auth()->user()->is_author !== 1){
            abort(403);
        }
        if($post->author->id!==auth()->user()->id){
            abort(403);
        }
        return view('dashboard/posts/edit', [
            'post' => $post,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if(auth()->guest() || auth()->user()->is_author !== 1){
            abort(403);
        }
        $rules = [
            'title' => ['required', 'max:255'],
            'category_id' => ['required'],
            'image' => ['image', 'file', 'max:1024'],
            'body' => ['required']
        ];

        
        if($request->slug != $post->slug){
            $rules['slug'] = ['unique:posts']; 
        }
        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        
        Post::where('id', $post->id)->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Post Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(auth()->guest() || auth()->user()->is_author !== 1){
            abort(403);
        }
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post Has Been Deleted!');
    }
    public function checkSlug(Request $request){
        if(auth()->guest() || auth()->user()->is_author !== 1){
            abort(403);
        }
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]);
    }
}
