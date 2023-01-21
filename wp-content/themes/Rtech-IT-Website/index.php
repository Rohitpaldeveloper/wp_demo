<?php
// echo get_template_directory_uri();
get_header();
?>
<!--  -->

    <!--Contents-->
    <main class="blog-page style-5">


        <!-- ====== start blog-slider ====== -->
        <section class="blog-slider pt-50 pb-50 style-1">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> Our <span> Blog </span> </h2>
                    <div class="text color-666">Get the latest articles from our journal, writing, discuss and share
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog-slider ====== -->


        <!-- ====== start Popular Posts ====== -->
        <section class="popular-posts pt-50 pb-100 border-bottom brd-gray">
            <div class="container">
                <h5 class="post-sc-title text-center text-uppercase mb-70">Popular Posts</h5>
                <div class="row gx-5">
                  <?php while(have_posts()){
                  the_post();
                  $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');

                  ?>
                    <div class="col-lg-4 border-end brd-gray">
                        <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                            <div class="img radius-7 overflow-hidden img-cover">
                                <img src="<?php echo $imagepath[0] ?>" class="card-img-top" alt="Blogimg">
                            </div>
                            <div class="card-body px-0">
                                <small class="d-block date mt-10 fs-10px fw-bold">
                                    <i class="bi bi-clock me-1"></i>
                                    <a href="#" class="op-8"><?php echo get_the_date()?></a>
                                </small>
                                <h5 class="fw-bold mt-10 title">
                                    <a href="page-single-post-5.html"><?php the_title(); ?></a>
                                </h5>
                                <p class="small mt-2 op-8 fs-10px">If there’s one way that wireless technology has
                                    changed the way we work, it’s that will everyone is now connected [...]
                                </p>
                                <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                            a
                                        </span>
                                        <a href="Javascript:void(0)" class="mt-1">
                                            By Rohit Pal
                                        </a>
                                    </div>
                                    <div class="r-side mt-1">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        <a href="#">24</a>
                                        <i class="bi bi-eye ms-4 me-1"></i>
                                        <a href="#">774k</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               <?php
               }
               ?>
                </div>
               <?php echo wp_pagenavi(); ?>
            </div>
        </section>
        <!-- ====== end Popular Posts ====== -->
    </main>
    <!--End-Contents-->

<!--  -->
<!--Contents-->
<main class="blog-page style-5">
   
<?php get_footer() ?>
