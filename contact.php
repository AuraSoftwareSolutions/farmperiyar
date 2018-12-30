<?php

  include 'header.php';
?>
<!--Start mainmenu area-->


			<!-- CONTENT -->
			<!-- Intro Section -->
			<div class="page-header parallax">
				<div class="container">
					<h1 class="title">CONTACT US</h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									CONTACT US
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<!-- Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-60">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-8 offset-md-2 text-center">
							<div class="heading-box pb-30">
								<h2>Contact Us</h2>
								<span class="b-line"></span>
							</div>
							<p class="lead">
								You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone. You can also use a quick contact form located on this page to ask a question about our services. We would be happy to answer your questions or offer any help.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 contact pb-60 pt-30">
							<div class="row text-center">
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-android-call icon-circle pos-s"></i>
									<!--<a href="#" class="mt-15 i-block">+91 9562262638</a><br/>
									<a href="#" class="mt-15 i-block">+91 9744046007</a><br/>
									<a href="#" class="mt-15 i-block">+91 9745925143</a><br/>-->
									<a href="#" class="mt-15 i-block">+91 9072846005</a>
								</div>
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-ios-location icon-circle pos-s"></i>
									<p  class="mt-15">
										Near Periyar Hospital,Kollampattada,
										<br />
										Kumily,Kerala - 685509.
									</p>
								</div>
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-ios-email icon-circle pos-s"></i>
									   <a href="mailto:support@farmperiyar.com"  class="mt-15 i-block">support@farmperiyar.com</a>
									   <br/>
									   <a href="mailto:farmperiyar@gamil.com"  class="mt-15 i-block">farmperiyar@gmail.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Map Section -->
				<div class="map">
					<div id="map"></div>
				</div>
				<!-- Map Section -->
				<div class="container contact-form text-center pt-80 pt-xs-60 mt-up">
					<div class="row">
						<div class="col-sm-12">
							<div class="headeing pb-20">
								<h2>Get In Touch</h2>
								<span class="b-line"></span>
							</div>							
							<!-- Contact FORM -->
							<form class="contact-form mt-45" id="contact">
								<!-- IF MAIL SENT SUCCESSFULLY -->
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong>Your message has been sent.
									</div>
								</div>
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
									<div class="col-md-12 col-lg-6">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" >
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message" ></textarea>
										</div>
									</div>
									<div class="col-sm-12 mt-30">
										<button class="newsletter-btn btn btn-xs btn-color" type="submit" id="submit" name="button">
											Send Message
										</button>
									</div>
								</div>
							</form>							
						</div>
					</div>
				</div>
			</section>			
<?php include 'footer.php' ?>