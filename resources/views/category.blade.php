@extends('layouts.main')

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <a href="{{route('show', $post->slug)}}">{{ $post->title }}</a>
    @endforeach
</div>

{{ $posts->links() }}

@endsection

