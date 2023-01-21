<?php
// echo get_template_directory_uri();
get_header();
?>
<div class="back_re">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <h2>Blog</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
      <!-- pricing -->
   <div class="pricing_main">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
               </div>
            </div>
            <?php while(have_posts()){
               the_post();
               $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
            
            ?>
            <div class="col-md-4">
               <div class="pricing">
                  <h4><?php the_title(); ?></h4>
                  <img src="<?php echo $imagepath[0] ?>" alt="">
                  <!-- <h3><span>$</span>60</h3> -->
                  <p>Content </p>
                  <a class="read_more dark_bg" href="Javascript:void(0)">Author Name <span><?php echo get_the_date()?></span></a>    
               </div>
            </div>
            <?php
            }
            ?>
         </div>
      </div>
      <?php echo wp_pagenavi(); ?>
   </div>
   <?php get_footer() ?>
</body>

</html>