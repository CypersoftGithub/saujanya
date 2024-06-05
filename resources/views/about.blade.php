@section('title','About')
@include('layout.header')

<section class="page-title bg-1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">

						<h1 class="bc text-capitalize text-lg">About Us</h1>

						<!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
          </ul> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section about-page">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="about-img">
						<img src="{{URL::asset('public/web_assets/images/about/about-2.jpg')}}" alt="" class="img-fluid">

					</div>
				</div>

				<div class="col-lg-6">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<h2 class="title-color home-title">ABOUT SAUJANYA PLATFORMS</h2>
						<p class="mt-4 mb-5 text-sm-left" style="color:#555">Welcome to Saujanya Platforms, where we transform
							outdoor spaces into vibrant led screen marketing canvases. As a leading outdoor led screen
							marketing agency, we specialize in creating impactful and innovative led screen advertising
							solutions that capture the essence of your brand and captivate your target audience. With a
							team of creative strategists, designers, and marketing experts, we blend art with strategy
							to deliver campaigns that not only stand out but also drive results.Our extensive portfolio
							spans a variety of industries, and we pride ourselves on our ability to tailor each campaign
							to meet the unique needs of our clients. From billboards and transit advertising to
							guerrilla marketing and experiential events, we leverage the power of outdoor led screen
							media to boost your brand visibility and engagement.</p>

						<!-- <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Read More<i class="icofont-simple-right ml-3"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="fetaure-page ">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="{{URL::asset('public/web_assets/images/about/vision.png')}}" alt="" class="img-fluid w-100">
						<h4 class="mt-3 d-flex justify-content-center justify-content-md-start" style="color:#223a66">
							Our Vision</h4>
						<p style="color:#555" class=" text-sm-left">Our vision is to be the premier outdoor led screen marketing agency known
							for our creative excellence and strategic insight execution. We aim to set new standards in
							the industry by continuously evolving with the latest trends, ultimately becoming the go-to
							partner for brands seeking outdoor ads solutions.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="{{URL::asset('public/web_assets/images/about/mission.png')}}" alt="" class="img-fluid w-100">
						<h4 class="mt-3 d-flex justify-content-center justify-content-md-start" style="color:#223a66">
							Our Mission</h4>
						<p style="color:#555" class=" text-sm-left">At Saujanya Platforms, our mission is to elevate brands through dynamic
							and memorable outdoor led screen marketing experiences. We strive to push the boundaries of
							creativity and innovation, ensuring that every campaign we produce resonates with audiences
							and delivers measurable success for our clients.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="{{URL::asset('public/web_assets/images/about/values.png')}}" alt="" class="img-fluid w-100">
						<h4 class="mt-3 d-flex justify-content-center justify-content-md-start" style="color:#223a66">
							Values</h4>
						<p style="color:#555" class=" text-sm-left">We believe in the power of creativity to transform ordinary spaces into
							extraordinary experiences. Our team is dedicated to bringing fresh, innovative ideas to
							every project. We operate with honesty and transparency, building trust with our clients
							through open communication and ethical practices.</p>
					</div>
				</div>

			</div>
		</div>
	</section>
    @include('layout.footer')