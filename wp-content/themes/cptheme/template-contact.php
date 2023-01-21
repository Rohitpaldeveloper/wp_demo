<?php
// Template Name: Contact

get_header();

?>
</header>
    <div class="back_re">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <!-- <h2>Contact Us</h2> -->
                <h2><?php the_title();?></h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--  contact -->
   <div class="contact">
      <div class="container">
         <div class="back_re">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title">
                        <h2>Location:- XYZ</h2>
                        <h3 style="color:white;">Contact No:- XXXXXXXXXX</h3>
                        <h4 style="color:white;">Email:- xyz@gmail.com</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 padding_right0">
               <?php echo do_shortcode('[ninja_form id=1]'); ?>
               <!-- <form id="request" class="main_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Name" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">Send</button>
                     </div>
                  </div>
               </form> -->
            </div>
            <div class="col-md-6 padding_left0">
               <div class="map_main">
                  <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.648779080928!2d77.31734251503511!3d28.58030758243846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5ae248006e7%3A0xdc94571d8350a53c!2sCodePanda%20Academy!5e0!3m2!1sen!2sin!4v1665483698832!5m2!1sen!2sin" width="600" height="610" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


<?php

get_footer();

?>