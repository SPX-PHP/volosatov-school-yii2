<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 02.01.2019
	 * Time: 17:43
	 */
?>
<section id="contact" class="dark-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Contact Us</h2>
					<p>If you have some Questions or need Help! Please Contact Us!<br>We make Cool and Clean Design for
						your Business</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="section-text">
					<h4>Our Business Office</h4>
					<p>3422 Street, Barcelona 432, Spain, New Building North, 15th Floor</p>
					<p><i class="fa fa-phone"></i> +101 377 655 22125</p>
					<p><i class="fa fa-envelope"></i> mail@yourcompany.com</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="section-text">
					<h4>Business Hours</h4>
					<p><i class="fa fa-clock-o"></i> <span class="day">Weekdays:</span><span>9am to 8pm</span></p>
					<p><i class="fa fa-clock-o"></i> <span class="day">Saturday:</span><span>9am to 2pm</span></p>
					<p><i class="fa fa-clock-o"></i> <span class="day">Sunday:</span><span>Closed</span></p>
				</div>
			</div>
			<div class="col-md-6">
				<form name="sentMessage" id="contactForm" novalidate="">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Name *" id="name" required=""
								       data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Your Email *" id="email"
								       required="" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Your Message *" id="message" required=""
								          data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
