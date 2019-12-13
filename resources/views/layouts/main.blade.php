<!doctype html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
	<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>ABIDJAN PLANET</title>


    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">



	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/test.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-slider.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/settings.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/custombox.min.css')}}"/>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">

</head>
<body  class="page header-fixed no-sidebar site-layout-full-width header-style-2 has-topbar topbar-style-2 menu-has-search menu-has-cart">

		@include('layouts.top')

		@include('layouts.header')

		@yield('content')

        @include('layouts.footer')

		<script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.themepunch.plugins.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/engo-plugins.js')}}"></script>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js'"></script>
		<script type="text/javascript" src="{{asset('js/map-icons.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/custombox.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/legacy.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/store.js')}}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js"></script>
		<script>
			$('.flexslider').flexslider({
			animation: "slide",
			controlNav: false
		});
		</script>

</body>
</html>
