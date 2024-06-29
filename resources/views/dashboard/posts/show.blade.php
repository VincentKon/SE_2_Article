@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit"  class="btn btn-warning"><i class="bi-pencil-square"></i> Edit</a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi-x-circle-fill"></i> Delete</button>
              </form>
              @if($post->image)
              <div style="max-height: 400px; max-width: 1200px; overflow: scroll;">
                <img src="{{ asset('storage/'.$post->image) }}"  alt="{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
              @else
                  <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"  alt="{{ $post->category->name }}" class="img-fluid mt-3" style="width: 1200px; height: 400px">
                @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection