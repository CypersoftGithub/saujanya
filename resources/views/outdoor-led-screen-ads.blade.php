@section('title','Outdoor-LED-Screen-Ads')
@include('layout.header')

<section>
		<div class="video-section d-flex justify-content-center align-items-center h-50">
			<video autoplay muted playsinline loop id="video" style="width:100%;">
			  <source src="{{URL::asset('public/web_assets/images/video.mp4')}}" type="video/mp4">
			</video>
		</div>
	</section>

	<!-- <span class="text-white">Our services</span> -->
	<!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
          </ul> -->





	<section class="section about-page">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-sm-6">
					<div class="about-img">
						<img src="{{URL::asset('public/web_assets/images/service/outdoor-advertisement.jpg')}}" alt="" class="img-fluid">

					</div>
				</div>

				<div class="col-lg-6">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<!-- <h2 class="title-color">ABOUT CHITRA PUBLICITY</h2> -->
						<p class="mt-1 text-sm-left" style="color:#555">At Saujanya Platforms, we believe in
							the power of visual
							impact. Our state-of-the-art outdoor LED screen advertising services are designed to
							captivate your audience, engage passersby, and make your brand shine bright in the bustling
							cityscape.</p>
						<p class="mt-1 text-sm-left" style="color:#555">
							Outdoor LED screen advertising is more than just a medium—it's a movement. It transforms
							ordinary spaces into extraordinary visual experiences. With Saujanya Platforms, your message
							won't just be seen; it will be remembered.</p>
						<p class="mt-1 text-sm-left" style="color:#555">
							Dynamic Content Display: From high-definition videos to scrolling text and interactive
							content, we help you leverage the full potential of LED technology.</p>
						<p class="mt-1 text-sm-left" style="color:#555">
							Content Creation and Management: Our creative team works with you to develop compelling
							content that resonates with your audience.</p>
						<p class="mt-1 text-sm-left" style="color:#555">
							Flexible Scheduling: Advertise during peak times or continuously, depending on your strategy
							and budget.</p>
						<p class="mt-1 text-sm-left" style="color:#555">
							Contact Saujanya Platforms today to learn more about how our outdoor LED screen advertising
							services can elevate your brand's presence. Let's create visual stories that captivate and
							inspire.</p>

						<!-- <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Read More<i class="icofont-simple-right ml-3"></i></a> -->
					</div>
				</div>
			</div>
		</div>
@include('layout.footer')