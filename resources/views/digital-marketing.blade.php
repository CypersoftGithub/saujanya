@section('title','Digital-Marketing')
@include('layout.header')
<section class="page-title bg-1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<!-- <span class="text-white">Our services</span> -->
						<h1 class="bc text-capitalize text-lg">Digital Marketing</h1>

						<!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
          </ul> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section about-page">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-sm-6">
					<div class="about-img">
						<img src="{{URL::asset('public/web_assets/images/service/digitalmarketing-service.jpg')}}" alt="" class="img-fluid">

					</div>
				</div>

				<div class="col-lg-6">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<!-- <h2 class="title-color">ABOUT CHITRA PUBLICITY</h2> -->
						<p class="mt-1 text-sm-left" style="color:#555">
							In today's fast-paced digital world, establishing a strong online presence is crucial for
							any business looking to thrive. At Saujanya Platforms, we specialize in crafting bespoke
							digital marketing strategies that propel your brand to new heights. Our comprehensive suite
							of services is designed to enhance your visibility, engage your audience, and drive
							measurable results.</p>
						<p class="mt-1 text-sm-left" style="color:#555">1. Pay-Per-Click (PPC) Advertising
							Maximize your ROI with our expertly managed PPC campaigns. Our team of certified
							professionals will design, implement, and monitor ads across Google, Bing, and social media
							platforms to reach your target audience and drive high-quality leads. </p>
						<p class="mt-1 text-sm-left" style="color:#555">2. Social Media Marketing
							Engage and grow your audience with our dynamic social media strategies. We create compelling
							content and run effective campaigns on platforms like Facebook, Instagram, Twitter, and
							LinkedIn to boost your brand awareness and foster community engagement. </p>
						<!-- <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Read More<i class="icofont-simple-right ml-3"></i></a> -->
					</div>
				</div>
			</div>
		</div>

    @include('layout.footer')