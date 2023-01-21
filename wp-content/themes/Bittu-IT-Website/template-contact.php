<?php
// Template Name: Contact
get_header();
?>
<!--==================================================-->
	<!-----Start Header Slider Section ----->
	<!--===================================================-->
	<div class="breadcumb-area d-flex align-items-center">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-12">
					<div class="breadcumb-content">
						<h1> Contact Us </h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li> Contact Us </li>
						</ul>
					</div>
				</div>
				<div class="britcam-shape">
					<div class="breadcumb-content upp">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li> Contact Us </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--==================================================-->
	<!-----Start Appoinment Section ----->
	<!--===================================================-->
	<div class="contact-us pt-90 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
					<div class="contact_from_box">
						<div class="contact_title pb-4">
							<h3>Get In Touch</h3>
						</div>
						<form id="contact_form" action="https://formspree.io/f/myyleorq" method="POST"
							id="dreamit-form">
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="email" name="email" placeholder="Email Address">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="phone" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="web" placeholder="Website">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form_box mb-30">
										<textarea name="message" id="message" cols="30" rows="10"
											placeholder="Your Message"></textarea>
									</div>
									<div class="quote_button">
										<button class="btn" type="submit"> <i class="bi bi-gear"></i> Connect With Us
										</button>
									</div>
								</div>
							</div>
						</form>
						<div id="status"></div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
					<div class="cda-content-area">
						<div class="cda-single-content d-flex">
							<div class="cda-icon">
								<i class="flaticon-time"></i>
							</div>
							<div class="cda-content-inner">
								<h4>Company Location</h4>
								<p>qwerty qwerty qwerty <br>qwerty</p>
							</div>
						</div>
						<div class="cda-single-content hr d-flex">
							<div class="cda-icon">
								<i class="flaticon-call"></i>
							</div>
							<div class="cda-content-inner">
								<h4>Telephone Number</h4>
								<p>+91 1234567890, <br>+91 1234567890 </p>
							</div>
						</div>
						<div class="cda-single-content hr d-flex">
							<div class="cda-icon">
								<i class="flaticon-next-1"></i>
							</div>
							<div class="cda-content-inner">
								<h4>Our Email Address</h4>
								<p>yourinfo@gmail.com <br>yourmail@gmail.com</p>
							</div>
						</div>
						<div class="cda-single-content hr d-flex">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-----Start Contact Location Section ----->
	<!--===================================================-->
	<div class="map-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 p-0">
					<iframe src="https://www.google.com/maps/@28.6442977,77.1990325,17z" width="1920" height="350"
						style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
?>