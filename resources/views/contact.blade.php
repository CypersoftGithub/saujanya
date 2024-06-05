@section('title','Contact')
@include('layout.header')
<section class="page-title bg-1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">

						<h1 class="bc text-capitalize text-lg">Get in Touch</h1>

						<!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact form start -->

	<section class="section contact-info pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6">
					<div class="contact-block mb-4 mb-lg-0" style="color:#555;">
						<i class="icofont-live-support"></i>
						<h5 style="color:#223a66">Call Us</h5>
						+91 93285 52909
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6">
					<div class="contact-block mb-4 mb-lg-0" style="color:#555;">
						<i class="icofont-support-faq"></i>
						<h5 style="color:#223a66">Email Us</h5>
						<div>saujanyaplatforms@gmail.com</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6">
					<div class="contact-block mb-4 mb-lg-0" style="color:#555;">
						<i class="icofont-location-pin"></i>
						<h5 style="color:#223a66">Registered Address</h5>
						Shop 118,Golden Elita B,Bh. Bahuchar Mataji Temple,Ravapar Road,Morbi-363641
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6">
					<div class="contact-block mb-4 mb-lg-0" style="color:#555;">
						<i class="icofont-location-pin"></i>
						<h5 style="color:#223a66">Corporate Office Location</h5>
						4th Floor,Above Sanket india,Umiya Circle,Sanala Road,Morbi-363641
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-form-wrap section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center">
						<h2 class="text-md mb-2">Contact us</h2>
						<div class="divider mx-auto my-4"></div>
						<p class="mb-5" style="color:#555; text-align: center;">Get in Touch: We’re Here to Help with
							Any Questions, Comments.</p>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-lg-12 col-md-12 col-sm-12">

				<!-- alert message start -->
				@if(Session('success'))
				<div class="alert alert-success alert-dismissible " role="alert">
            		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><h5>{{ Session('success') }}</h5>
				</div>
				@endif

				@if(Session('error'))

				<div class="alert alert-danger alert-dismissible " role="alert">
          			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><h5>{{ Session('error') }}</h5>
				</div>
				@endif

				@if($errors -> any())
				@foreach($errors->all() as $err)
				<div class="alert alert-danger alert-dismissible " role="alert">
            		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><h5>{{ $err }}</h5>
				</div>
				@endforeach
				@endif
				<!--alert message end -->

					<form id="submit_form" class="contact__form" method="post" action="{{route('mail')}}">
						@csrf
						<!-- <div class="row">
							<div class="col-12">
								<div class="alert alert-success contact__msg" style="display: none" role="alert">
									Your message was sent successfully.
								</div>
							</div>
						</div> -->

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input name="name" id="name" type="text" class="form-control"
										placeholder="Your Full Name" style="color:#555;">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="email" id="email" type="email" class="form-control"
										placeholder="Your Email Address" style="color:#555;">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="subject" id="subject" type="text" class="form-control"
										placeholder="Your Query Topic" style="color:#555;">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="phone" id="phone" type="text" class="form-control"
										placeholder="Your Phone Number" style="color:#555;">
								</div>
							</div>
						</div>

						<div class="form-group-2 mb-4">
							<textarea name="message" id="message" class="form-control" rows="8"
								placeholder="Your Message" style="color:#555;"></textarea>
						</div>
						<!-- <input type="submit" class="btn btn-main btn-round-full" value="Send Messege"> -->
						<div class="text-center">
							<!-- <input type="submit" class="btn btn-main btn-round-full" value="Send Messege"> -->
							<input class="btn btn-main btn-round-full" onclick="submitForm()" name="" type="submit"
								value="Send Messege"></input>
						</div>
					</form>
				</div>
			</div>
		</div>  
		<script>
        function submitForm() {
            let form = document.getElementById("submit_form");
            form.submit();
        }
    </script>

@include('layout.footer')