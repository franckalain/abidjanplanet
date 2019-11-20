@extends('layouts.main')

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <a href="{{route('show', $post->slug)}}">{{ $post->title }}</a>

                                <img src="{{$post->image_url}}" alt="image" width="400" height="250">


    @endforeach
</div>

{{ $posts->links() }}

@endsection

