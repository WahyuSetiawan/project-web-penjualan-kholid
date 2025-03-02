<!-- Footer #2
		============================================= -->
<footer id="footer" class="footer footer-2">
	{{--
	<!-- Footer Info
			============================================= -->
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel-info">
						<div class="info-icon">
							<i class="icon icon-Truck"></i>
						</div>
						<div class="info-content">
							<h4>Free Shipping</h4>
							<p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel-info">
						<div class="info-icon">
							<i class="icon icon-Dollars"></i>
						</div>
						<div class="info-content">
							<h4>Fair Prices</h4>
							<p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel-info">
						<div class="info-icon">
							<i class="icon icon-Shield"></i>
						</div>
						<div class="info-content">
							<h4>Secure Shopping</h4>
							<p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel-info">
						<div class="info-icon">
							<i class="icon icon-Headset"></i>
						</div>
						<div class="info-content">
							<h4>Customer Support</h4>
							<p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
			</div>
		</div>
		<!-- .container end -->
	</div>
	<!-- .footer-info end --> --}}


	<!-- Footer Widget
			============================================= -->
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 footer-widget-about">
					<div class="footer-widget-title">
						<h5>About Us</h5>
					</div>
					<div class="footer-widget-content">
						<p>{{ (isset($head['setting']['about_us']))? $head['setting']['about_us']->value : "" }}</p>

						<div class="footer-social">
							@if (isset($head['setting']['facebook']))
							<a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
							@endif

							@if (isset($head['setting']['instagram']))
							<a class="share-instagram" href="#"><i class="fa fa-instagram"></i></a>
							@endif

							@if (isset($head['setting']['google-plus']))
							<a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
							@endif

							@if (isset($head['setting']['twitter']))
							<a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
							@endif

							@if (isset($head['setting']['pinterest']))
							<a class="share-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
							@endif

							@if (isset($head['setting']['vimeo']))
							<a class="share-vimeo" href="#"><i class="fa fa-vimeo"></i></a>
							@endif

							@if (isset($head['setting']['rss']))
							<a class="share-rss" href="#"><i class="fa fa-rss"></i></a>
							@endif
						</div>
					</div>
				</div>
				<!-- .col-md-4 end -->

				{{-- <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
					<div class="footer-widget-title">
						<h5>My Account</h5>
					</div>
					<div class="footer-widget-content">
						<ul class="list-unstyled">
							<li>
								<a href="#">My Account</a>
							</li>
							<li>
								<a href="#">Order History</a>
							</li>
							<li>
								<a href="#">Wish List</a>
							</li>
							<li>
								<a href="#">Newsletter</a>
							</li>
						</ul>
					</div>
				</div> --}}
				<!-- .col-md-2 end -->

				{{-- <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
					<div class="footer-widget-title">
						<h5>Information</h5>
					</div>
					<div class="footer-widget-content">
						<ul class="list-unstyled">
							<li>
								<a href="#">About Us</a>
							</li>
							<li>
								<a href="#">Delivery Information</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
							<li>
								<a href="#">Terms & Conditions</a>
							</li>
						</ul>
					</div>
				</div> --}}
				<!-- .col-md-2 end -->

				{{-- <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
					<div class="footer-widget-title">
						<h5>Customer Service</h5>
					</div>
					<div class="footer-widget-content">
						<ul class="list-unstyled">
							<li>
								<a href="#">Contact Us</a>
							</li>
							<li>
								<a href="#">Returns</a>
							</li>
							<li>
								<a href="#">Site Map</a>
							</li>
						</ul>
					</div>
				</div> --}}
				<!-- .col-md-2 end -->
				{{--
				<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
					<div class="footer-widget-title">
						<h5>Extras</h5>
					</div>
					<div class="footer-widget-content">
						<ul class="list-unstyled">
							<li>
								<a href="#">Brands</a>
							</li>
							<li>
								<a href="#">Gift Vouchers</a>
							</li>
							<li>
								<a href="#">Affiliates</a>
							</li>
							<li>
								<a href="#">Specials</a>
							</li>
						</ul>
					</div>
				</div> --}}
				<!-- .col-md-2 end -->
			</div>
		</div>
		<!-- .container end -->
	</div>
	<!-- .footer-widget end -->

	<!-- Footer Bar
			============================================= -->
	<div class="footer-bar">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="powered">
						<p>Car Shop &copy; All Rights Reserved. With Made With Love By
							<a href="http://themeforest.net/user/7oroof/portfolio?ref=7oroof">7oroof.com</a>
						</p>
						<ul class="list-inline mb-0">
							<li>
								<a href="{{base_url("page/privacy_policy")}}">Privacy Policy</a>
							</li>
							<li>
								<a href="{{base_url("page/terms_of_use")}}">Terms of Use</a>
							</li>
							<li>
								<a href="{{base_url("page/stores")}}">Stores</a>
							</li>
							<li>
								<a href="{{base_url("about")}}">About Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="payment-methods text-right">
						<ul class="list-inline mb-0">
							<li><img src="<?php echo base_url('assets/public') ?>/assets/images/footer/visa.png" alt="payment"></li>
							<li><img src="<?php echo base_url('assets/public') ?>/assets/images/footer/mastercard.png" alt="payment"></li>
							<li><img src="<?php echo base_url('assets/public') ?>/assets/images/footer/american-express.png" alt="payment"></li>
							<li><img src="<?php echo base_url('assets/public') ?>/assets/images/footer/delta.png" alt="payment"></li>
							<li><img src="<?php echo base_url('assets/public') ?>/assets/images/footer/cirrus.png" alt="payment"></li>
							<li><img src="<?php echo base_url('assets/public') ?>/assets/images/footer/paypal.png" alt="payment"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- .container end -->
	</div>
	<!-- .footer-copyright end -->
</footer>