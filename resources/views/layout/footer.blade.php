
<a href="https://api.whatsapp.com/send?phone=+919328552909&text=hello" class="whatsapp-button" target="_blank"
		style="">
		<img src="https://i.ibb.co/VgSspjY/whatsapp-button.png" alt="botão whatsapp">
	</a>


	<!-- footer Start -->
	<footer class="footer section gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mr-auto col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<div class="logo mb-4">
							<img src={{URL::asset('public/web_assets/images/logo.png')}} alt="" class="img-fluid" style="width:190px;">
						</div>
						<p style="color:#555">Saujanya Platforms is one of the leading led screen advertising agency in
							Gujarat in the field of OOH led screen advertising.</p>

						<ul class="list-inline footer-socials mt-4">
							<li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Quick Link</h4>
						<div class="divider mb-4"></div>

						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="{{route('index')}}" style="color:#555">Home </a></li>
							<li><a href="{{route('about')}}" style="color:#555">About</a></li>
							<!-- <li><a href="service.html">Service</a></li> -->
							<!-- <li><a href="team.html">Team</a></li> -->
							<li><a href="{{route('contact')}}" style="color:#555">Contact</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Support</h4>
						<div class="divider mb-4"></div>

						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="#" style="color:#555">Terms & Conditions</a></li>
							<li><a href="#" style="color:#555">Privacy Policy</a></li>

						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget widget-contact mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Get in Touch</h4>
						<div class="divider mb-4"></div>

						<div class="footer-contact-block mb-4">
							<div class="icon d-flex align-items-center">
								<i class="icofont-email mr-3"></i>
								<span class="h6 mb-0" style="color:#555">Support Available for 24/7</span>
							</div>
							<h4 class="mt-2"><a href="mailto:saujanyaplatforms@gmil.com">saujanyaplatforms@gmail.com</a>
							</h4>
						</div>

						<div class="footer-contact-block">
							<div class="icon d-flex align-items-center">
								<i class="icofont-support mr-3"></i>
								<span class="h6 mb-0" style="color:#555">Mon to Sat : 08:30 - 20:00</span>
							</div>
							<h4 class="mt-2"><a href="tel:+919328552909">+91 93285 52909</a></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-btm py-4 mt-5">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="copyright" style="color:#555">
							&copy; Copyright 2024 <span class="text-color">Saujanya Platforms.</span>All Rights
							Reserved. Developed By: <a href="https://jgitsolution.com" target="_blank">JG IT
								Solution</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="subscribe-form text-lg-right mt-5 my-lg-0 mb-4">
					<form action="{{route('subscribe')}}" method="post" class="subscribe">
					    @csrf
								<input type="text" name="email" class="form-control" placeholder="Your Email address"
									style="color:#555">
								<!-- <a href="#">Subscribe</a> -->
								<input type="submit"  class="btn btn-main-2 btn-round-full" value="Subscribe">
							</form>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<a class="backtop js-scroll-trigger" href="#top">
							<i class="icofont-long-arrow-up"></i>
						</a>

						<a href="#" id="scroll" style="display: none;">
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- 
    Essential Scripts
    =====================================-->


	<!-- Main jQuery -->
	<script src="{{URL::asset('public/web_assets/plugins/jquery/jquery.js')}}"></script>
	<!-- Bootstrap 4.3.2 -->
	<script src="{{URL::asset('public/web_assets/plugins/bootstrap/js/popper.js')}}"></script>
	<script src="{{URL::asset('public/web_assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('public/web_assets/plugins/counterup/jquery.easing.js')}}"></script>
	<!-- Slick Slider -->
	<script src="{{URL::asset('public/web_assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>
	<!-- Counterup -->
	<script src="{{URL::asset('public/web_assets/plugins/counterup/jquery.waypoints.min.js')}}"></script>

	<script src="{{URL::asset('public/web_assets/plugins/shuffle/shuffle.min.js')}}"></script>
	<script src="{{URL::asset('public/web_assets/plugins/counterup/jquery.counterup.min.js')}}"></script>
	<!-- Google Map -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js')}}"></script>

	<script src="{{URL::asset('public/web_assets/js/script.js')}}"></script>
	<script src="{{URL::asset('public/web_assets/js/contact.js')}}"></script>
	<script>
		$('#carouselExampleInterval').on('slide.bs.carousel', function () {
			$('.carousel').carousel({
				interval: 2000
			});
		});
	</script>

</body>

</html>