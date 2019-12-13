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
        <div class="col-md-12">
            <div class="single-post">
                <div class="blog-post-item cat-1 box">
                    <div class="blog-post-images">
                        <div class="row">
                            <br> <br>
                                <div class="col-md-6">
                                    <div class="wrap-images">
                                       <img class='img-responsive' src="/images/magazine/277.jpg" alt="images">
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 150px">
                                    <div class="text">
                                        <h4 style="color:grey; text-decoration:none">Décembre 2019  | <b>N°277</b></h4>
                                        <p><h2 style="color:grey">Edito</h2></p>
                                        <br>
                                        <p>Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet... Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet...</p>
                                        <p>Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet... Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet...</p>
                                        <br>
                                        <i class="fa fa-book"> <a href="http://online.fliphtml5.com/ffvkc/fvrv/" target="_blank" style="color:#000; text-decoration: none">Lire</a></i>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <img class='img-responsive' src="/images/pub/orange.jpg" alt="images">
                        </div>
                        <div class="col-md-1"></div>
                    </div>

                    <div class="divider" >
                        <br><br>
                        <hr class="left"/> Derniers Numéros</h2><hr class="right" />
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="wrap-images">
                                <a class="images" href="#" title="images"><img class='img-responsive' src="/images/magazine/277.jpg" alt="images"></a>
                            </div>
                            <div class="text">
                                <h4 style="color: grey">Novembre 2019</h4>
                                <p>Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet...</p>
                                <i class="fa fa-book"> <a href="http://online.fliphtml5.com/ffvkc/fvrv/" target="_blank" style="color:#000; text-decoration: none">Lire</a></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wrap-images">
                                <a class="images" href="#" title="images"><img class='img-responsive' src="/images/magazine/277.jpg" alt="images"></a>
                            </div>
                            <div class="text">
                                <h4 style="color: grey">Novembre 2019</h4>
                                <p>Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet...</p>
                                <i class="fa fa-book"> <a href="http://online.fliphtml5.com/ffvkc/fvrv/" target="_blank" style="color:#000; text-decoration: none">Lire</a></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wrap-images">
                                <a class="images" href="#" title="images"><img class='img-responsive' src="/images/magazine/277.jpg" alt="images"></a>
                            </div>
                            <div class="text">
                                <h4 style="color: grey">Novembre 2019</h4>
                                <p>Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet...</p>
                                <i class="fa fa-book"> <a href="http://online.fliphtml5.com/ffvkc/fvrv/" target="_blank" style="color:#000; text-decoration: none">Lire</a></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wrap-images">
                                <a class="images" href="#" title="images"><img class='img-responsive' src="/images/magazine/277.jpg" alt="images"></a>
                            </div>
                            <div class="text">
                                <h4 style="color: grey">Novembre 2019</h4>
                                <p>Praesent posuere libero eu justo tristique, vitae ultricies justo volutpatInte. Ut luctus justo elit, sit amet...</p>
                                <i class="fa fa-book"> <a href="http://online.fliphtml5.com/ffvkc/fvrv/" target="_blank" style="color:#000; text-decoration: none">Lire</a></i>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="wrap-images">
                            <img class='img-responsive' src="/images/pub/heineken.jpg" alt="images">
                        </div>
                        </div>
                </div>
            </div>
            <!-- End signle-post -->
            <hr>
        </div>
        <!-- End col-md-8 -->
    </div>
    <!-- End row -->
</div>
<!-- End container -->
<div id="back-to-top">
    <i class="fa fa-long-arrow-up"></i>
</div>

@endsection




