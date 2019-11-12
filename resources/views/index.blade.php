@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            @foreach($WebProgramming->posts()->orderBy('created_at', 'desc')->take(4)->get() as $post)
                    <div class="post-item ver1 overlay video" data-videourl="{{$post->excerpt}}" data-videosite="youtube">
                        <div class="images">@if($post->image_url)
                    <div class="post-item-image">
                        <img src="{{$post->image_url}}" alt="{{$post->title}}">
                    </div>
                    @endif</div>
                        <div class="text">
                            <h2><span><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></span></h2>
                            <h2><span><a href="{{route('show', $post->slug)}}">{{$post->excerpt}}</a></span></h2>
                        </div>
                    </div>

                    <!-- End item -->
                @endforeach



            </div>

            <div class="row">
            <div class="col-md-8">
            @foreach($WebProgramming->posts()->orderBy('created_at', 'desc')->take(4)->get() as $post)
                    <div class="post-item ver1 overlay video" data-videourl="{{$post->excerpt}}" data-videosite="youtube">
                        <div class="images">@if($post->image_url)
                    <div class="post-item-image">
                        <img src="{{$post->image_url}}" alt="{{$post->title}}">
                    </div>
                    @endif</div>
                        <div class="text">
                            <h2><span><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></span></h2>
                            <h2><span><a href="{{route('show', $post->slug)}}">{{$post->excerpt}}</a></span></h2>
                        </div>
                    </div>

                    <!-- End item -->
                @endforeach



            </div>
            @include('layouts.sidebar')
        </div>
    </div>

@endsection


