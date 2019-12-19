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
                    <div class="single-post">
                        <div class="blog-post-item cat-1 box">
                    <br><br>
                    <div class="row">
                    @foreach($annonces->posts()->orderBy('created_at', 'desc')->take(3)->get() as $post)
                        <div class="col-md-4">
                        <!--
                            <div class="wrap-images">
                                <a class="images" href="#" title="images"><img class='img-responsive' src="/images/magazine/277.jpg" alt="images"></a>
                            </div>
                        -->
                            <div class="text">
                                <h4 style="color: grey">{{$post->title}}</h4>
                                <p style="text-align:justify">{!!$post->excerpt!!}</p>

                            </div>
                        </div>
                    @endforeach

                    </div>

                        </div>
                    </div>
                    {{ $posts->links() }}
                </div>


        <div class="col-md-4">
        @include('layouts.sidebar')
            <aside class="widget">
                <div class="banner">
                <img class="img-responsive" src="{{asset('images/zino.jpg')}}" alt="banner">
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
