<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Smart Aircraft">
	<meta name="keywords" content="Aerospace Smart Solutions, Aircraft, Aerospace, Solutions" /> 
	<meta name="author" content="Smart Aircraft"> 
	<title>Smart Aircraft - Aerospace Smart Solutions</title> 
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet"> 
	<link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet"> 
	<link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet"> 
	<link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="{{ URL::asset('images/ico/favicon.png') }}"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png') }}"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('images/ico/apple-touch-icon-114-precomposed.png') }}"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png') }}"> 
	<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
<body>

	@include('main.preloader')
	
	@include('main.header_navigation')
	
	@include('main.section_home')
	
	@include('main.section_about')

	@include('main.section_services')

	@include('main.section_portofolio')	
	
	@include('main.section_blog')

	@include('main.section_contact')

	@include('main.footer')

	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script> 
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js') }}"></script> 
	<script type="text/javascript" src="{{ URL::asset('js/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script> 
	<script type="text/javascript" src="{{ URL::asset('js/jquery.parallax.js') }}"></script> 
	<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script> 
</body>
</html>