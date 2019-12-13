@if(Session::has('success'))
	<div class="alert alert-success">
	{{ Session::get('success') }}
	</div>
@endif

@extends('layouts.main')

@section('title', '| Homepage')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="single-post">
                <div class="blog-post-item cat-1 box">
                    <div class="blog-post-images">
                        <a class="hover-images" href="#" title="Post"><a href="#">
                        @if($post->image_url)
                        <img class='img-responsive' src="{{$post->image_url }} "></a></a>
                        @endif
                    </div>
                        <div class="content">
                            <h3>{{$post->title}}</h3>
                            <div class="tag">

                                <p class="date"><i class="fa fa-clock-o"> Publié </i>{{$post->created_at->diffForHumans()}}</p>

                            </div>


                            <!-- End content-text -->
                            <p>{!!$post->body!!}</p>
                        </div>


                </div>
            </div><!-- End signle-post -->

            <hr>
            <div class="col-md-12">
        <div class="single-post">
            <div class="blog-post-item cat-1 box">
                <!-- End title -->
                <div class="row">
                @if(isset($relatedPosts))
                    @foreach($relatedPosts as $post)
                    <div class="col-md-6 col-sm-6">
                        <div class="post-item ver3 overlay space-30">
                            <div class="wrap-images">
                            <a class="images" href="#" title="images"><img class="img-responsive" src="{{$post->image_url}}" alt="images"></a>
                            </div>
                            <div class="text">
                            <h2><a href="{{route('show', $post->slug)}}" title="title">{{$post->title}}</a></h2>

                            <p><a style="text-decoration: none; color: grey" href="{{route('show', $post->slug)}}">{!! Str::limit($post->excerpt, 100, ' ...') !!}</a><br><a style="text-decoration: none; color: black" href="{{route('show', $post->slug)}}" title="title">Lire la suite...</a></p>
                            <p class="date" style="color:white"><i class="fa fa-clock-o"></i> {{$post->created_at->diffForHumans()}}</p>

                            </div>
                        </div>
                        <!-- End item -->
                    </div>
                    @endforeach
                @endif
                </div>

             </div>
            </div>
        </div>
    </div>



                <div class="col-md-4">
                @include('layouts.sidebar')
                <aside class="widget popular">
                            <h3 class="widget-title">GAZOIL</h3>
                            <div class="content">
                            <!--
                                <div class="post-item ver1 overlay">
                                    <a class="images" href="#" title="images"><img class='img-responsive' src="{{asset('app/assets/images/post/popular/1.jpg')}}" alt="images"></a>
                                    <div class="text">
                                        <h2><a href="" title="title">Flames top Jets in long shootout</a></h2>
                                        <div class="tag">
                                            <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                            <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                        </div>
                                    </div>
                                </div>
                                End item -->
                                @foreach($gazoil->posts()->orderBy('created_at', 'desc')->take(4)->get() as $post)
                                <div class="post-item ver2">
                                    <a class="images" href="#" title="images">
                                    @if($post->image_url)
                                    <img class='img-responsive' src="{{$post->image_url}}" alt="images"></a>
                                    @endif
                                    <div class="text">
                                        <h2 style="margin-top: 8px"><a href="{{route('show', $post->slug)}}" style="text-decoration: none;">{{$post->title}}</a></h2>
                                        <div class="tag">
                                            <p class="date"><i class="fa fa-clock-o"></i>{{$post->created_at->diffForHumans()}}</p>
                                            <!-- <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>-->
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </aside>
                    <aside class="widget">
                        <div class="banner">
                        <img class="img-responsive" src="{{asset('/images/zino.jpg')}}" alt="banner">
                        </div>
                    </aside>
                    <!--
                    <aside class="widget popular">
                <h3 class="widget-title">ARTICLES RELATIFS</h3>
                <div class="content">


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
                -->

                </div>

            </div>
        </div>
        <!-- End container -->
        <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </div>

@endsection




