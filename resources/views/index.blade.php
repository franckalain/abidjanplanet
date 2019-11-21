@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            @foreach($webdesign->posts()->orderBy('created_at', 'desc')->take(4)->get() as $post)
                    <div class="post-item ver1 overlay video" data-videourl="{{$post->excerpt}}" data-videosite="youtube">
                    @if($post->image_url)
                        <div class="images">
                            <div class="post-item-image">
                                <img src="{{$post->image_url}}" alt="image" width="400" height="250">

                            </div>
                        </div>
                    @endif
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


