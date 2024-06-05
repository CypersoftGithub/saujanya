<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>@yield('title') |  Saujanya Platforms</title>

	<!-- Favicon -->
	<!--<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />-->
    <link rel="icon" type="{{URL::asset('public/web_assets/image/png')}}" href="{{URL::asset('public/web_assets/images/favicon.png')}}">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{URL::asset('public/web_assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="{{URL::asset('public/web_assets/plugins/icofont/icofont.min.css')}}">
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="{{URL::asset('public/web_assets/plugins/slick-carousel/slick/slick.css')}}">
	<link rel="stylesheet" href="{{URL::asset('public/web_assets/plugins/slick-carousel/slick/slick-theme.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{URL::asset('public/web_assets/css/style.css')}}">
	<style>
		.dropdown .dropdown-item {
			padding: 13px 6px;
		}
	</style>

</head>

<body id="top">

	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="scrolltotop">
					<button id="back-to-top" href="#" class=" btn back-to-top" role="button"><i
							class="icofont-rounded-up"></i></button>
				</div>
				<div class="row align-items-center ">
					<div class="col-6 text-left top-left-bar">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:saujanyaplatforms@gmail.com"
									style="font-size:15px;" class="header-call-text"><i class="fa-solid fa-envelope"></i>
									saujanyaplatforms@gmail.com</a></li>
						</ul>
					</div>
					<div class="col-6 text-center item-center">
						<div class="text-right top-right-bar">
							<a href="tel:+919328552909" style="color:#fff; font-size:15px;" class="header-call-text">
								<i class="fa-solid fa-phone"></i>
								+91 93285 52909
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="{{route('index')}}">
					<img src="{{URL::asset('public/web_assets/images/logo.png')}}" alt="" class="img-fluid hlogo" style="width:190px;">
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
					aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu" style="color:#223A66;"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{route('index')}}" style="font-size:18px;">Home</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{route('about')}}" style="font-size:18px;">About</a>
						</li>
						<li class="nav-item dropdown-toggle">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false" style="font-size:18px;">Services <i
									class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown02"
								style="min-width:250px; padding:10px 0px;">
								<li style="padding:0px;"><a class="dropdown-item"
										href="{{route('outdoor-led-screen-ads')}}">&#x2022; Outdoor LED Screen Ads</a></li>
								<li style="padding:0px;"><a class="dropdown-item" href="{{route('digital-marketing')}}">&#x2022; Digital
										Marketing</a></li>
								<li style="padding:0px;"><a class="dropdown-item"
										href="{{route('guerrilla-marketing')}}">&#x2022; Guerrilla Marketing</a></li>
								<li style="padding:0px;"><a class="dropdown-item" href="{{route('cgi-service')}}">&#x2022; CGI(computer
										generated imagery)</a></li>



							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{route('contact')}}" style="font-size:18px;">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
