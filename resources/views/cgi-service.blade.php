@section('title','CGI-Service')
@include('layout.header')

<section class="page-title bg-1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<!-- <span class="text-white">Our services</span> -->
						<h1 class="bc text-capitalize text-lg cgi">CGI(computer generated imagery)</h1>

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
						<img src="{{URL::asset('public/web_assets/images/service/cgiservice.jpg')}}" alt="" class="img-fluid">

					</div>
				</div>

				<div class="col-lg-6">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<!-- <h2 class="title-color">ABOUT CHITRA PUBLICITY</h2> -->
						<p class="mt-1 text-sm-left" style="color:#555">At Saujanya Platforms, we specialize
							in bringing your ideas
							to life with cutting-edge Computer Generated Imagery (CGI) services. Whether you’re in the
							film industry, architectural design, advertising, or any field that requires high-quality
							visual content, our expert team is here to turn your vision into stunning reality.</p>
						<p class="mt-1 text-sm-left" style="color:#555">
							From character design to intricate environments, our 3D modeling and animation services
							provide lifelike representations of your concepts. We use the latest technology to create
							detailed, realistic models that can be animated to tell your story dynamically.</p>
						<p class="mt-1 text-sm-left" style="color:#555">
							Enhance your project with breathtaking visual effects. Our VFX team excels in creating
							seamless, spectacular effects that elevate your content, making the impossible possible and
							immersing your audience in your narrative.</p>
						<p class="mt-1 text-sm-left" style="color:#555">
							Bring architectural designs to life with our photorealistic renderings. Our CGI services
							provide detailed and accurate visualizations of buildings and interiors, helping architects
							and real estate developers present their projects convincingly to clients and stakeholders.
						</p>

						<!-- <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Read More<i class="icofont-simple-right ml-3"></i></a> -->
					</div>
				</div>
			</div>
		</div>
    @include('layout.footer')