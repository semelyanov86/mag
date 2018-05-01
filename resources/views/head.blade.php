<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->

<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<!-- BEGIN head -->
<head>

	<!--Meta Tags-->
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
	<!--Title-->
	<title>@yield('title')</title>

	<!--Stylesheets-->
	<link rel="stylesheet" href="/css/superfish.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/style.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="/css/responsive.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="/css/flexslider.css" type="text/css"  media="all" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>

	<!--Favicon-->
	<link rel="shortcut icon" href="favicon.html" type="image/x-icon" />

	<!--JavaScript-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
	<script type='text/javascript' src='/js/jquery.prettyPhoto.js'></script>
	<script type="text/javascript" src="/js/superfish.js"></script>
	<script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="/js/jquery.jcarousel.min.html"></script>
	<script type='text/javascript' src="/js/cloud-zoom.1.0.2.html"></script>
	<script type="text/javascript" src="/js/scripts.js"></script>
	
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="js/selectivizr-min.js"></script>
	<![endif]-->

<!-- END head -->
</head>

<!-- BEGIN body -->
<body>

<!-- BEGIN #background-wrapper -->
<div id="background-wrapper">

	<!-- BEGIN .content-wrapper -->
	<div class="content-wrapper clearfix">
	
		<!-- BEGIN #header-wrapper -->
		<div id="header-wrapper" class="clearfix">
		
			<!-- BEGIN #header-left -->
			<div id="header-left">
			
				<div id="site-title">
					<h2>
                                            <a href="/"><img src="/images/logo.png" width="30px" alt="Кредитная кооперация: сегодня, завтра, всегда!"></a>
					</h2>
					<p id="tagline">Кредитная кооперация: сегодня, завтра, всегда!</p>
				</div>
			
			</div>
			<!-- END #header-left -->
		
			<!-- BEGIN #header-right -->
			<div id="header-right">
				
				<a href="shopping-bag.html" title="You have no items in your shopping bag" class="shopping-bag">0</a>
				
				<ul class="header-menu">
					<li><a href="/articles">Все статьи</a></li>
					<li><a href="/all">Все выпуски</a></li>
					@if (Auth::check())
                                        <li><a href="/users/logout">Выйти</a></li>
                                         <li><a href="/user">{!! $userc->name !!}</a></li>
                                        @else
                                        <li><a href="/users/register">Регистрация</a></li>
                                        <li><a href="/users/login">Авторизация</a></li>
@endif
				</ul>
				
				<div class="clearboth"></div>
				
				<!-- BEGIN .social-icons -->
				<ul class="social-icons">
					<li><a href="#"><span class="twitter_icon"></span></a></li>
					<li><a href="#"><span class="pinterest_icon"></span></a></li>
					<li><a href="#"><span class="facebook_icon"></span></a></li>
					<li><a href="#"><span class="googleplus_icon"></span></a></li>
					<li><a href="#"><span class="tumblr_icon"></span></a></li>
					<li><a href="#"><span class="vimeo_icon"></span></a></li>
					<li><a href="#"><span class="youtube_icon"></span></a></li>
					<li><a href="#"><span class="rss_icon"></span></a></li>
					<li><a href="#"><span class="flickr_icon"></span></a></li>
				<!-- END .social-icons -->
				</ul>
			
			</div>
			<!-- END #header-right -->
		
		</div>
		<!-- END #header-wrapper -->
		
@include('menu')
@yield('content')
