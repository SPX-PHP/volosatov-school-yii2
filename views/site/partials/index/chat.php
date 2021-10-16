<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 02.01.2019
	 * Time: 17:43
	 */
?>
<section id="chat" class="dark-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Chat</h2>
					<p>If you have some Questions or need Help! Please Contact Us!<br>We make Cool and Clean Design for
						your Business</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 chat-result" id="chat-result">
				<form name="" id="" novalidate="">

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
