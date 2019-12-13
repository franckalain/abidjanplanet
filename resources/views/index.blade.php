@if(Session::has('success'))
	<div class="alert alert-success">
	{{ Session::get('success') }}
	</div>
@endif

@extends('layouts.main')

@section('title', '| Homepage')

@section('content')

<div class="wrappage">
        @include('layouts.alert')
        <!-- /header -->
        <div class="container">

        <div class="row">
            <div class="home3-banner box space-30">

            <div class="container">
            <img class="img-responsive" src="{{asset('images/pub/monblanc.jpg')}}" alt="banner">
</div>
</div>
</div>

            <div class="row">
            <div class="home3-banner box space-30">

            <div class="container">

                <div class="row hidden-desktop">
                    <div class="col-md-8">
                        <div class="post-item cat-2 ver1 overlay" >
                        @foreach($zoom->posts()->orderBy('created_at', 'desc')->take(1)->get() as $post)
                            <span class="lable">Zoom</span>
                            <a class="images" href="#" title="images">
                                @if($post->image_url)
                                <img class="img-responsive" src="{{$post->image_url}}" alt="images" style="width: 1200px; height:530px">
                                @endif
                            </a>
                            <div class="text">
                            <h2><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></h2>
                                <div class="tag">
                                <i class="fa fa-arrow-right" style="color:#fff"><a href="{{route('show', $post->slug)}}" style="color:#fff">&nbsp;Lire l'article</a></i>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <!-- End item -->
                    </div>
                    <!-- End col-md-8 -->
                    <div class="col-md-4">
                        <div class="post-item cat-1 ver1 overlay">
                        @foreach($tourisme->posts()->orderBy('created_at', 'desc')->take(1)->get() as $post)
                            <span class="lable">Tourisme</span>
                            <div class="wrap-images">
                                    @if($post->image_url)
                                    <img class='img-responsive' src="{{$post->image_url}}" alt="images" style="width: 500px; height:250px"></a>
                                    @endif
                                 </div>

                            <div class="text">
                            <h2><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></h2>
                                <div class="tag">
                                <i class="fa fa-arrow-right" style="color:#fff"><a href="{{route('show', $post->slug)}}" style="color:#fff">&nbsp;Lire l'article</a></i>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <!-- End item -->
                        <div class="post-item cat-4 ver1 overlay">
                        @foreach($sport->posts()->orderBy('created_at', 'desc')->take(1)->get() as $post)
                            <span class="lable">Sport</span>
                            @if($post->image_url)
                            <img class='img-responsive' src="{{$post->image_url}}" alt="images" style="width: 500px; height:250px"></a>
                            @endif
                            <div class="text">
                            <h2><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></h2>
                                <div class="tag">
                                <i class="fa fa-arrow-right" style="color:#fff"><a href="{{route('show', $post->slug)}}" style="color:#fff">&nbsp;Lire l'article</a></i>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <!-- End item -->
                    </div>
                    <!-- End col-md-4 -->
                </div>
				<div class="slide-owl-mobile home3-slide-owl nav-ver5">
                    <div class="item">
                        <div class="post-item cat-1 ver1 overlay">
                            <span class="lable">Sport</span>
                            <a class="images" href="#" title="images"><img class='img-responsive' src="assets/images/blog/index3/1.jpg" alt="images"></a>
                            <div class="text">
                                <h2><a href="" title="title">Flames top Jets in long shootout</a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                    <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End item -->
                    <div class="item">
                        <div class="post-item cat-2 ver1 overlay">
                            <span class="lable">Social</span>
                            <a class="images" href="#" title="images"><img class='img-responsive' src="assets/images/blog/index3/2.jpg" alt="images"></a>
                            <div class="text">
                                <h2><a href="" title="title">Flames top Jets in long shootout</a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                    <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End item -->
                    <div class="item">
                        <div class="post-item cat-4 ver1 overlay">
                            <span class="lable">Social</span>
                            <a class="images" href="#" title="images"><img class='img-responsive' src="assets/images/blog/index3/1.jpg" alt="images"></a>
                            <div class="text">
                                <h2><a href="" title="title">Flames top Jets in long shootout</a></h2>
                                <div class="tag">
                                    <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                    <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End item -->
                </div>
                <!-- End Slide home3 -->
            </div>
        </div>
            </div>
        </div>
        <!-- End home3-slideshow -->

        <div class="container">
        <div class="row">
                 <div class="col-md-6">

                     <!-- End tile -->
                     <div class="row space-30 size-18">
                         <div class="col-md-6 col-sm-6">
                         <h4>GEEKS</h4>
                             <div class="post-item ver3 overlay">
                             @foreach($geeks->posts()->orderBy('created_at', 'desc')->take(1)->get() as $post)
                                    <a class="images" href="#" title="images">
                                        @if($post->image_url)
                                        <img class="img-responsive" src="{{$post->image_url}}" alt="images" style="width: 500px; height:170px">
                                    </a>
                                    @endif
                                 <div class="text">
                                 <h2><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></h2>
                                 <p style="text-align:left">{!! Str::limit($post->excerpt, 100, ' ...') !!}</p>
                                     <i class="fa fa-arrow-right"><a href="{{route('show', $post->slug)}}" style="text-decoration:none; color: #000">&nbsp;Lire l'article</a></i>
                                 </div>
                                @endforeach
                             </div>
                             <!-- End item -->
                         </div>
                         <!-- end col-md-6 -->
                         <div class="col-md-6 col-sm-6">
                         <h4>PETITES ANNONCES</h4>
                             <div class="post-item ver3 overlay">
                                 <div class="wrap-images">
                                     <a class="images" href="#" title="images"><img class='img-responsive' src="/images/article/annonce.jpg" alt="images"></a>
                                     <div class="tag">

                                     </div>
                                 </div>
                                 <div class="text">
                                     <h2><a href="" title="title">Annonce Emploi</a></h2>
                                     <p>Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet..</p>
                                     <i class="fa fa-arrow-right"><a href="{{route('show', $post->slug)}}" style="text-decoration:none; color: #000">&nbsp;Lire l'article</a></i>                                 </div>
                             </div>
                             <!-- End item -->
                         </div>
                         <!-- end col-md-6 -->
                     </div>
                     <!-- End row -->

                 </div>
                 <div class="col-md-6">

                     <!-- End tile -->
                     <div class="row space-30 size-18">
                         <div class="col-md-6 col-sm-6">
                         <h4>GOURMETS</h4>
                             <div class="post-item ver3 overlay">
                             @foreach($gourmets->posts()->orderBy('created_at', 'desc')->take(1)->get() as $post)
                                <div class="wrap-images">
                                    @if($post->image_url)
                                    <img class='img-responsive' src="{{$post->image_url}}" alt="images"></a>
                                    @endif
                                 </div>
                                 <div class="text">
                                 <h2><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></h2>
                                 <p style="text-align:left">{!! Str::limit($post->excerpt, 100, ' ...') !!}</p>
                                     <i class="fa fa-arrow-right"><a href="{{route('show', $post->slug)}}" style="text-decoration:none; color: #000">&nbsp;Lire l'article</a></i>
                                 </div>
                            @endforeach
                             </div>
                             <!-- End item -->
                         </div>
                         <!-- end col-md-6 -->
                         <div class="col-md-6 col-sm-6">
                         <h4>IMMOBILIER</h4>
                             <div class="post-item ver3 overlay">
                                 <div class="wrap-images">
                                     <a class="images" href="#" title="images"><img class='img-responsive' src="/images/article/immobilier.jpg" alt="images"></a>
                                     <div class="tag">

                                     </div>
                                 </div>
                                 <div class="text">
                                     <h2><a href="" title="title">Annonces immobilières</a></h2>
                                     <p>Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet..</p>
                                     <i class="fa fa-arrow-right"><a href="{{route('show', $post->slug)}}" style="text-decoration:none; color: #000">&nbsp;Lire l'article</a></i>                                 </div>
                             </div>
                             <!-- End item -->
                         </div>
                         <!-- end col-md-6 -->
                     </div>
                     <!-- End row -->

                 </div>

             </div>

         </div>

         <div class="container">

            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                <img class='img-responsive' src="/images/pub/orange.jpg" alt="images">
                </div>
                <div class="col-md-1"></div>

            </div>

        </div>

        <div class="container">
            <!-- End slider -->
            <div class="box">
                <div class="row">
                    <div class="col-md-8">
                    <div class="row">
                 <div class="col-md-12">
                     <div class="title-v1">
                         <h4>MODE</h4>
                     </div>
                     <!-- End tile -->
                     <div class="row space-30 size-18">
                     @foreach($mode->posts()->orderBy('created_at', 'desc')->take(2)->get() as $post)
                         <div class="col-md-6 col-sm-6">
                             <div class="post-item ver3 overlay">
                             <div class="wrap-images">
                                    @if($post->image_url)
                                    <img class='img-responsive' src="{{$post->image_url}}" alt="images"></a>
                                    @endif
                                 </div>
                                 <div class="text">
                                 <h2><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></h2>
                                 <p style="text-align:left">{!! Str::limit($post->excerpt, 100, ' ...') !!}</p>
                                     <i class="fa fa-arrow-right"><a href="{{route('show', $post->slug)}}" style="text-decoration:none; color: #000">&nbsp;Lire l'article</a></i>
                                 </div>
                             </div>

                             <!-- End item -->
                         </div>
                         @endforeach
                         <!-- end col-md-6 -->

                         <!-- end col-md-6 -->
                     </div>
                     <!-- End row -->

                 </div>
                 <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                        <img class='img-responsive' src="/images/pub/cartier.jpg" alt="images">
                        </div>
                    </div>
                </div>

                <div class="row">
                 <div class="col-md-12">
                 <div class="col-md-6">
                 <h4>GAZOIL</h4>
                 <hr>
                        <div class="post-bottom-footer box space-30">
                        @foreach($gazoil->posts()->orderBy('created_at', 'desc')->take(5)->get() as $post)
                            <div class="post-item ver2">
                                    <a class="images" href="#" title="images">
                                        @if($post->image_url)
                                        <img class="img-responsive" src="{{$post->image_url}}" alt="images">
                                    </a>
                                    @endif
                                <div class="text">
                                <h2><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></h2>
                                    <div class="tag">

                                        <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                        <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                         </div>
                         </div>

                         <div class="col-md-6">
                        <h4>CINEMA</h4>
                        <hr>
                        <div class="post-bottom-footer box space-30">

                         <!-- End item -->
                                <div class="post-item ver2 cat-2">
                                    <a class="images" href="#" title="images"><img class='img-responsive' src="/images/slide/9.jpg" alt="images"></a>
                                    <div class="text">
                                        <h2><a href="" title="title">Champions League: Barcelona unstoppable, Manchester United unremarkable</a></h2>
                                        <div class="tag">

                                            <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                            <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-item ver2 cat-1">
                                    <a class="images" href="#" title="images"><img class='img-responsive' src="/images/slide/9.jpg" alt="images"></a>
                                    <div class="text">
                                        <h2><a href="" title="title">Surfing News: Best performance, best movie, best barrel and more up for grabs</a></h2>
                                        <div class="tag">

                                            <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                            <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                        </div>
                                    </div>
                                </div>
                         <!-- End item -->
                                <div class="post-item ver2 cat-2">
                                    <a class="images" href="#" title="images"><img class='img-responsive' src="/images/slide/9.jpg" alt="images"></a>
                                    <div class="text">
                                        <h2><a href="" title="title">Champions League: Barcelona unstoppable, Manchester United unremarkable</a></h2>
                                        <div class="tag">

                                            <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                            <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                        </div>
                                    </div>
                                </div>
                         </div>
                         </div>
                            </div>
                        </div></div>
                        <!-- End gaming -->



                        <div class="gaming box space-30">

                        </div>
                        <!-- End gaming
                        <div class="container">
                            <div class="col-md-12 center box space-60">
                                <img class="img-responsive" src="{{asset('app/assets/images/widget-banner.jpg')}}" alt="banner">

                            </div>
                        </div>
                        -->
                    </div>
                    <!-- End col-md-8 -->

                    <div class="col-md-4">
                    @include('layouts.sidebar')
                    <hr>
                        <aside class="widget banner">
                            <img class="img-responsive" src="{{asset('images/pub/cartier_droit.jpg')}}" alt="banner">
                        </aside>

                    </div>
                    <!-- End col-md-4 -->
                </div>
            </div>
             </div>

              <!-- mode-->

                        <!-- geeks-->
                        <div class="box">
            <div class="container">

            <!-- End row -->

            </div>
            <!-- End container -->
            <div class="wrap-slide-youtube space-30" style="background:#fff">
            <div class="container">


                <img class="img-responsive" src="images/pub/heineken.jpg" alt="images"></div>

            </div>
        </div>
        </div>
        <!-- End container -->


        </div>

        <!-- End box -->
        <div class="container">
             <div class="row">
                 <div class="col-md-8">
                     <div class="title-v1">
                         <h3>VIDEOS</h3>

                     </div>
                     <!-- End title -->
                     <div class="trending box space-30">
                         <div class="row">
                         @foreach($video->posts()->orderBy('created_at', 'desc')->take(4)->get() as $post)
                             <div class="col-md-6 col-sm-6 space-30">

                                 <div class="post-item ver4 overlay-v2 cat-1">

                                 @if($post->image_url)
                        <img class="img-responsive" src="{{$post->image_url}}" alt="images">
                        @endif
                                     <div class="text">

                                     <div class="post-item ver1 overlay video" data-videourl="{{$post->body}}" data-videosite="youtube"></div>

                                     </div>

                                 </div>

                                 <!-- End item -->
                             </div>
                             @endforeach


                         </div>
                     </div>

                     <!-- End tile -->

                     <!-- End gaming -->
                 </div>
                 <!-- End col-md-8 -->
                 <div class="col-md-4">

                     <aside class="widget popular">
                         <h3 class="widget-title" style="text-transformation: uppercase">MAREES</h3>
                         <div class="content">

                             <!-- End item -->
                             <div class="post-item ver2">
                                 <a class="images" href="#" title="images"><img class='img-responsive' src="/images/slide/maree.jpg" alt="images"></a>
                                 <div class="text">
                                     <h2><a href="" title="title">Gravida placerat taciti lacinia netus facilisis quisque</a></h2>
                                     <div class="tag">
                                         <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                         <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                     </div>
                                 </div>
                             </div>
                             <!-- End item -->
                             <div class="post-item ver2">
                                 <a class="images" href="#" title="images"><img class='img-responsive' src="/images/slide/maree.jpg" alt="images"></a>
                                 <div class="text">
                                     <h2><a href="" title="title">How to use a website to then a brand</a></h2>
                                     <div class="tag">
                                         <p class="date"><i class="fa fa-clock-o"></i>May 06,2014</p>
                                         <a class="comments" href="#" title="comments"><i class="fa fa-comments"></i>10</a>
                                     </div>
                                 </div>
                             </div>
                             <!-- End item -->

                         </div>
                     </aside>

                 </div>
                 <!-- End col-md-4 -->

             </div>
         </div>

    <!-- End wrappage -->
    </div>
@endsection



