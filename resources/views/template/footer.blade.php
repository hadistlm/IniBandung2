		

					<!-- Footer Logo -->
					<div class="footer-logo marg">
						<a href="#"><img src="{{asset('assets')}}/images/logo-1.png" alt=""></a>
						<p>Meriahkan Setiap Festival & Event Yang Di Adakan Di Bandung.</p>
					</div>
					<!-- Footer Logo -->

					<!-- Seprater -->
					<div class="seprater-line"></div>
					<!-- Seprater -->

					<!-- Nav Link -->
					<div class="footer-link">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Timeline</a></li>
						</ul>
					</div>
					<!-- Nav Link -->

					<!-- Sub Footer -->
					<div class="footer-link">
						<p><span>Copyrights</span> © 2017</p>
					</div>
					<!-- Sub Footer -->

				</div>
			</div>
			<!-- Footer Inner -->

		</footer>
		<!-- Footer -->

	</div>
	<!-- Wrapper -->

	<!-- back To Button -->
	<span id="scrollup" class="scrollup"><i class="icon-angle-up"></i></span>
	<!-- back To Button -->
<!-- Login Modal -->
	<div class="modal fade" id="login" role="dialog">
  		<div class="login-form position-center-center overlay-dark">
  			<a href="#"><img src="{{asset('assets')}}/images/logo-5.png" alt=""></a>
			
			@include('template.feedback')
			
  			<form action="{{ url('login')}}" method="post">
			{{csrf_field()}}
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Username" name="username">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="password" placeholder="Password" name="password">
  				</div>
  				<button type="submit" class="btn full-width mb-30">Login Account</button>
  			</form>
  			<a class="border-bottom" href="#">Forgot Password?</a>
  			<div class="tc-social-icons style-2">
				<ul>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="facebook" href="#"><i class="icon-facebook2"></i></a></li>
					<li><a class="google-plus" href="#"><i class="icon-google-plus2"></i></a></li>
					<li><a class="globe" href="#"><i class="icon-globe"></i></a></li>
				</ul>
			</div>
			<span class="close" data-dismiss="modal" aria-label="Close"><i class="icon-times"></i></span>
  		</div>
	</div>
	<!-- Login Modal -->

	<!-- Signup Modal -->
	<div class="modal fade" id="signup" role="dialog">
  		<div class="login-form position-center-center overlay-dark">
  			<a href="#"><img src="{{asset('assets')}}/images/logo-5.png" alt=""></a>
  			<form>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Your Name">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Email">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Username">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Password">
  				</div>
  				<div class="form-group">
  					<input class="form-control" type="text" placeholder="Confirm Password">
  				</div>
  				<button class="btn full-width mb-30">Login Account</button>
  			</form>
			<span class="close" data-dismiss="modal" aria-label="Close"><i class="icon-times"></i></span>
  		</div>
	</div>
	<!-- Signup Modal -->

	<!-- Java Script -->
	<script src="{{asset('assets')}}/scripts/jquery.js"></script>
	<script src="{{asset('assets')}}/scripts/bootstrap.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="{{asset('assets')}}/scripts/gmap3.min.js"></script>
	<script src="{{asset('assets')}}/scripts/menu.js"></script>
	<script src="{{asset('assets')}}/scripts/contact-form.js"></script>
	<script src="{{asset('assets')}}/scripts/slick.js"></script>
	<script src="{{asset('assets')}}/scripts/countdown.js"></script>
	<script src="{{asset('assets')}}/scripts/video-popup.js"></script>
	<script src="{{asset('assets')}}/scripts/appear.js"></script>
	<script src="{{asset('assets')}}/scripts/hoverdir.js"></script>
	<script src="{{asset('assets')}}/scripts/sticky.js"></script>
	<script src="{{asset('assets')}}/scripts/prettyPhoto.js"></script>
	<script src="{{asset('assets')}}/scripts/isotope.pkgd.js"></script>
	<script src="{{asset('assets')}}/scripts/wow-min.js"></script>
	<!-- Put all Functions in functions.js -->
	<script src="{{asset('assets')}}/scripts/functions.js"></script>
	</body>

<!-- Mirrored from techlinqs.com/html/event-0.1/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2017 12:41:49 GMT -->
</html>