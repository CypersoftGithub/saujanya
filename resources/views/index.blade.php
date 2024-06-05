@section('title','Home')
@include('layout.header')
<!-- Slider Start -->
<div class="slider">
	<img src="{{URL::asset('public/web_assets/images/bg/slider-bg-1.jpg')}}"  width="100%">
	</div>

	<section class="section about">
		<div class="container">
			<div class="row align-items-center">
				

				<div class="col-md-6">
					<div class="about-content  mt-4 mt-lg-0">
						<h3 class="title-color">What is </h3>
						<h2 class="title-color home-title">SAUJANYA PLATFORMS?</h2>
						<p class="mt-lg-4 mb-lg-5 text-left text-sm-left" style="color:#555">Saujanya Platforms is Gujarat based Out of Home
							(OOH)
							and Outdoor LED Screen Advertising Company. Saujanya Platforms is one of the leading LED
							Screen Advertising Agency in Gujarat in the field of OOH LED Screen advertising.The agency
							has expertise over the industry by owning the most significant assets throughout the state.
						</p>
						<div class="d-flex justify-content-center justify-content-md-start mb-md-0 mb-4">
							<a href="{{route('about')}}" class="btn btn-main-2 btn-round-full btn-icon">Read More<i
									class="icofont-simple-right ml-3"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-12">
					<div class="about-img">
						<img src="{{URL::asset('public/web_assets/images/about/img-1.jpg')}}" alt="" class="img-fluid" >

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section service gray-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>WHY CHOOSE SAUJANYA PLATFORMS ?</h2>
						<div class="divider mx-auto my-4"></div>
						<p style="color:#555" class=" text-sm-left">Outdoor led screen advertising has become an absolute necessity for brands
							doing a 360 degree campaign. Saujanya has spent last many years at the heart of Gujarat
							outdoor led screen advertising industry with its core expertise in outdoor (OOH) led screen
							advertising.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item mb-4" style="height:275px;">
						<div class="icon d-flex align-items-center">
							<i class="icofont-users-social text-lg"></i>
							<h4 class="mt-3 mb-3" style="color:#223a66">30+ EMPLOYEES</h4>
						</div>

						<div class="content">
							<p class="mb-4 text-left" style="color:#555">Our team of 30+ employees works closely and directly with
								clients, outdoor specialists and events companies.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item mb-4" style="height:275px;">
						<div class="icon d-flex align-items-center">
							<i class="icofont-building-alt text-lg"></i>
							<h4 class="mt-3 mb-3" style="color:#223a66">INFRASTRUCTURE</h4>
						</div>
						<div class="content">
							<p class="mb-4 text-left" style="color:#555">We have the best infrastructure to implement campaigns
								swiftly.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item mb-4" style="height:275px;">
						<div class="icon d-flex align-items-center">
							<i class="icofont-handshake-deal text-lg"></i>
							<h4 class="mt-3 mb-3" style="color:#223a66">PRODUCT VISIBILITY</h4>
						</div>
						<div class="content">
							<p class="mb-4 text-left" style="color:#555">We work directly with some of advertising agencies to
								facilitate max visibility for your product or service.</p>
						</div>
					</div>
				</div>


				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item mb-4" style="height:275px;">
						<div class="icon d-flex align-items-center">
							<i class="icofont-bus-alt-3 text-lg"></i>
							<h4 class="mt-3 mb-3" style="color:#223a66">TRANSIT ADVERTISING</h4>
						</div>

						<div class="content">
							<p class="mb-4 text-left" style="color:#555">Transit advertising is a powerful marketing tool that
								utilizes vehicles such as buses and taxis to showcase advertisements to a
								diverse audience.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item mb-4" style="height:275px;">
						<div class="icon d-flex align-items-center">
							<i class="icofont-billboard text-lg"></i>
							<h4 class="mt-3 mb-3" style="color:#223a66">LED SCREEN</h4>
						</div>
						<div class="content">
							<p class="mb-4 text-left" style="color:#555">We have multiple led screen and digital solutions in
								Gujarat.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item mb-4" style="height:275px;">
						<div class="icon d-flex align-items-center">
							<i class="icofont-location-pin text-lg"></i>
							<h4 class="mt-3 mb-3" style="color:#223a66">INFLUENTIAL LOCATIONS</h4>
						</div>
						<div class="content">
							<p class="mb-4 text-left" style="color:#555">We have the best media assets across Gujarat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="section service-2">
		<div class="container">
			<div class="row justify-content-center mt-3">
				<div class="col-lg-8 text-center">
					<div class="section-title">
						<h2>ASSETS</h2>
						<div class="divider mx-auto my-4"></div>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-block mb-5">
						<img src="{{URL::asset('public/web_assets/images/service/service-3.jpg')}}" alt="" class="img-fluid">
						<div class="content">
							<a href="#">
								<h4 class="mt-4 mb-2 title-color">LED Billboard</h4>
							</a>
						</div>
					</div>
				</div>


				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-block mb-5">
						<img src="{{URL::asset('public/web_assets/images/service/service-1.jpg')}}" alt="" class="img-fluid">
						<div class="content">
							<a href="#">
								<h4 class="mt-4 mb-2 title-color">Led Mobile Van</h4>
							</a>

						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-block mb-5">
						<img src="{{URL::asset('public/web_assets/images/service/service-2.jpg')}}" alt="" class="img-fluid">
						<div class="content">
							<a href="#">
								<h4 class="mt-4 mb-2  title-color">Outdoor Led Kiosks</h4>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<section class="section testimonial-2 gray-bg">

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="section-title text-center">
						<h2>What Our Client Says</h2>
						<div class="divider mx-auto my-4"></div>
						<!-- <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p> -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12 testimonial-wrap-2">

					<div id="myCarousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for carousel items -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-sm-12">
										<div class="testimonial-block style-2  gray-bg">
											<i class="icofont-quote-right"></i>

											<div class="testimonial-thumb">
												<img src="{{URL::asset('public/web_assets/images/team/user1.jpg')}}" alt="" class="img-fluid">
											</div>

											<div class="client-info ">
												<h4 style="color:#223a66">Amazing service!</h4>
												<span>John Partho</span>
												<p style="color:#555" class="text-left">
													Working with Saujanya has been a game-changer for our business. From
													the outset, their team demonstrated a deep understanding of our
													brand and target audience, crafting a tailored outdoor marketing
													strategy that exceeded our expectations. The creativity and
													strategic placement of our advertisements have significantly boosted
													our visibility and customer engagement.
												</p>
											</div>
										</div>

									</div>

								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-sm-12">
										<div class="testimonial-block style-2  gray-bg">
											<div class="testimonial-thumb">
												<img src="{{URL::asset('public/web_assets/images/team/user2.jpg')}}" alt="" class="img-fluid">
											</div>

											<div class="client-info">
												<h4 style="color:#223a66">Expert Advertiser!</h4>
												<span>Mullar Sarth</span>
												<p style="color:#555" class="text-left">
													One of the standout aspects of their service is the attention to
													detail and the innovative use of outdoor spaces. Whether it's
													billboards, transit advertising, or street furniture, Saujanya knows
													how to make a lasting impression. Their ability to blend creativity
													with effective marketing tactics has set us apart from our
													competitors.
												</p>
											</div>

											<i class="icofont-quote-right"></i>
										</div>

									</div>

								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-sm-12">
										<div class="testimonial-block style-2  gray-bg">
											<div class="testimonial-thumb">
												<img src="{{URL::asset('public/web_assets/images/team/user3.jpg')}}" alt="" class="img-fluid">
											</div>

											<div class="client-info">
												<h4 style="color:#223a66">Expert Advertiser!</h4>
												<span>Aman Seth</span>
												<p style="color:#555" class="text-left">
													One of the standout aspects of their service is the attention to
													detail and the innovative use of outdoor spaces. Whether it's
													billboards, transit advertising, or street furniture, Saujanya knows
													how to make a lasting impression. Their ability to blend creativity
													with effective marketing tactics has set us apart from our
													competitors.
												</p>
											</div>

											<i class="icofont-quote-right"></i>
										</div>

									</div>

								</div>
							</div>
						</div>
						<!-- Carousel controls -->
						<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
							<i class="icofont-rounded-left"></i>
						</a>
						<a class="carousel-control-next" href="#myCarousel" data-slide="next">
							<i class="icofont-rounded-right"></i>
						</a>
					</div>


				</div>
			</div>
		</div>
	</section>

    @include('layout.footer')