@extends("layouts.main")
@section("container")

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
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
            <a href="/posts"class="d-block mt-3">Back to post</a>
        </div>
    </div>
</div>


@endsection
