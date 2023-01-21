<?php
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
						<h1> Blog </h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li> Blog</li>
						</ul>
					</div>
				</div>
				<div class="britcam-shape">
					<div class="breadcumb-content upp">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li> Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- Start Blog Area -->
	<!--==================================================-->
	<div class="blog-area style-two ">
		<div class="container">
			<div class="row">
                <?php while(have_posts()){
                the_post();
                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box">
						<div class="single-blog-thumb">
							<img src="<?php echo $imagepath[0] ?>" alt="">
						</div>
						<div class="em-blog-content">
							<div class="meta-blog-text">
								<p> <?php echo get_the_date()?> </p>
							</div>
							<div class="em-blog-title">
								<h2> <a href="blog-details.html"> Content </a> </h2>
							</div>
							<div class="em-blog-icon">
								<div class="em-blog-thumb">
									<img src="assets/images/resource/blog-icon.png" alt="">
								</div>
								<div class="em-blog-icon-title">
									<h6> By Rohit Pal </h6>
								</div>
							</div>
							<div class="blog-button">
								<a href="#"> <?php the_title(); ?> </a>
							</div>
						</div>
					</div>
				</div>
                <?php
                }
                ?>
			</div>
			<div class="pagination pt-30">
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#"><i class="fas fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Blog Area -->
	<!--==================================================-->

<?php
get_footer();
?>