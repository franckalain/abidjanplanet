@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if($query= request('query'))
                <div class="alert alert-info">
                    <p>Search Results for: <strong>{{$query}}</strong></p>
                </div>
            @endif
            <div class="box space-30">
                @foreach($posts as $post)
                    <div class="post-item ver6">
                        <a class="images" href="#" title="images"><img class="img-responsive" src="{{$post->image_url}}" alt="images"></a>
                        <div class="text">
                            <h2><a href="{{route('show', $post->slug)}}" title="title">{{$post->title}}</a></h2>
                            <p style="text-align:justify; color: white;"><a style="text-decoration: none; color:white" href="{{route('show', $post->slug)}}">{!! Str::limit($post->excerpt, 100, ' ...') !!}</a></p>
                            <p class="date" style="color:white"><i class="fa fa-clock-o"></i> {{$post->created_at->diffForHumans()}}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-4">
        @include('layouts.sidebar')
            <aside class="widget">
                <div class="banner">
                <img class="img-responsive" src="{{asset('images/widget-wather.jpg')}}" alt="banner">
                </div>
            </aside>
                <aside class="widget popular">
                <h3 class="widget-title">ARTICLES RELATIFS</h3>
                    <div class="content">

                        <!-- End item -->
                        @if(isset($relatedPosts))
                        @foreach($relatedPosts as $post)
                        <div class="post-item ver2">

                        <a class="images" href="#" title="images">
                        @if($post->image_url)
                        <img class='img-responsive' src="{{$post->image_url }}" alt="images"></a>
                        @endif
                            <div class="text">
                            <h2 style="margin-top: 10px"><a href="{{route('show', $post->slug)}}"><h6>{{$post->title}}</h6></a></h2>
                                <div class="tag">
                                <p class="date"><i class="fa fa-clock-o"></i>{{$post->created_at->diffForHumans()}}</p>

                                </div>
                            </div>

                        </div>
                        @endforeach
                        @endif
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<!-- End container -->
<div id="back-to-top">
    <i class="fa fa-long-arrow-up"></i>
</div>

@endsection



