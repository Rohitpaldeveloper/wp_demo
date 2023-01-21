<?php
get_header();
the_post();
?>
<!-- Content -->
<div class="back_re">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <!-- <h2>About Us</h2> -->
                  <h2><?php the_title() ?></h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about -->
   <div class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="titlepage">

                  <?php
                    the_content();
                  ?>
               </div>
               <div class="titlepage">

                  
               </div>
            </div>
            <div class="col-md-12">
               <!-- <div class="about_img">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="#" /></figure>
                  <a class="read_more yoga_btn" href="Javascript:void(0)"> Read More</a>
               </div> -->
            </div>
         </div>
      </div>
   </div>

<?php
get_footer();
?>