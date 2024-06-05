@section('title','Guerrilla-Marketing')
@include('layout.header')

<section class="page-title bg-1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<!-- <span class="text-white">Our services</span> -->
						<h1 class="bc text-capitalize text-lg">Guerrilla Marketing</h1>

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
						<img src="{{URL::asset('public/web_assets/images/service/guerrilla-marketing.jpg')}}" alt="" class="img-fluid">

					</div>
				</div>

				<div class="col-lg-6">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<!-- <h2 class="title-color">ABOUT CHITRA PUBLICITY</h2> -->
						<p class="mt-1 text-sm-left" style="color:#555">Welcome to Saujanya Platforms, your ultimate partner in
							revolutionizing your marketing strategy. We specialize in guerrilla marketing, a unique and
							unconventional approach designed to captivate audiences, create buzz, and drive engagement
							without breaking the bank. Our innovative tactics are tailored to fit your brand's unique
							personality, ensuring maximum impact and unforgettable experiences for your target audience.
						</p>
						<p class="mt-1 text-sm-left" style="color:#555">Guerrilla marketing is all about thinking outside the box.
							Unlike traditional marketing methods, guerrilla marketing focuses on low-cost, high-impact
							strategies that generate buzz and excitement. It’s perfect for brands looking to stand out
							in a crowded market, create viral content, and engage with consumers on a deeper level.</p>

						<!-- <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Read More<i class="icofont-simple-right ml-3"></i></a> -->
					</div>
				</div>
			</div>
		</div>
    @include('layout.footer')