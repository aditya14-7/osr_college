<?php
$title = "Contact";
$btitle = "Contact Us";
 ?>

<!doctype html>
<html class="no-js" lang="en">


<head>

    <!-- header_link start -->
    <?php include 'home_include/header_link.php'; ?>
    <!-- header_link end -->

    <style>

    </style>
</head>

<body>
    <div class="main-wrapper">



      <!--  menu start -->
      <?php include 'home_include/navbar.php'; ?>
      <!--  menu end -->



        <!-- mobile menu start -->
        <?php include 'home_include/mobile_navbar.php'; ?>
        <!-- mobile menu end -->



        <!-- breadcrumb start -->
        <?php include 'home_include/breadcrumd.php'; ?>
        <!-- brandcrumd end -->



        <!-- body will go here (start) -->


        <div class="edu-contact-us-area eduvibe-contact-us edu-section-gap bg-color-white">
               <div class="container eduvibe-animated-shape">
                   <div class="row g-5">
                       <div class="col-lg-12">
                           <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                               <span class="pre-title">Need Help?</span>
                               <h3 class="title">Get In Touch With us</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row g-5 mt--20">
                       <div class="col-lg-6">
                           <div class="contact-info pr--70 pr_lg--0 pr_md--0 pr_sm--0">
                               <div class="row g-5">


                                

                                   <!-- Start Contact Info  -->
                                   <div class="col-lg-12 col-md-12 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                       <div class="contact-address-card-1 email">
                                           <div class="inner">
                                               <div class="icon">
                                                   <i class="icon-mail-open-line"></i>
                                               </div>
                                               <div class="content">
                                                   <h6 class="title">Email Us</h6>
                                                   <p><a href="mailto:eduvibe@example.com" target="_blank">eduvibe@example.com</a></p>
                                                   <p><a href="mailto:contact@eduvibe.com" target="_blank">contact@eduvibe.com</a></p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                                   <!-- End Contact Info  -->

                                   <!-- Start Contact Info  -->
                                   <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                       <div class="contact-address-card-1 phone">
                                           <div class="inner">
                                               <div class="icon">
                                                   <i class="icon-Headphone"></i>
                                               </div>
                                               <div class="content">
                                                   <h6 class="title">Call Us On</h6>
                                                   <p><a href="tel:+2763(388)2930">+2763 (388) 2930</a></p>
                                                   <p><a href="tel:+4875(356)2568">+4875 (356) 2568</a></p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- End Contact Info  -->

                                   <!-- Start Contact Info  -->
                                   <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                                       <div class="contact-address-card-1 location">
                                           <div class="inner">
                                               <div class="icon">
                                                   <i class="icon-map-pin-line"></i>
                                               </div>
                                               <div class="content">
                                                   <h6 class="title">Our Location</h6>
                                                   <p>486 Normana Avenue Morningtide, 4223</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- End Contact Info  -->

                               </div>
                           </div>
                       </div>

                       <div class="col-lg-6">
                           <form class="rnt-contact-form row" method="POST" action="contact_code.php">
                               <div class="col-lg-12">
                                   <div class="form-group">
                                       <input name="fname" id="fname" type="text" class="form-control form-control-lg" placeholder="First Name*">
                                   </div>
                               </div>

                               <div class="col-lg-12">
                                   <div class="form-group">
                                       <input name="lname" id="lname" type="text" class="form-control form-control-lg" placeholder="Last Name*">
                                   </div>
                               </div>

                               <div class="col-lg-12">
                                   <div class="form-group">
                                       <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email*">
                                   </div>
                               </div>

                               <div class="col-lg-12">
                                   <div class="form-group">
                                       <input type="text" class="form-control form-control-lg" maxlength="10" minlength="10" name="mobno" id="mobno" placeholder="Phone*">
                                   </div>
                               </div>

                               <div class="col-lg-12">
                                   <div class="form-group">
                                       <textarea class="form-control" name="msg" id="msg" placeholder="Your Message"></textarea>
                                   </div>
                               </div>
                               <div class="col-lg-12">
                                   <button class="rn-btn edu-btn w-100" type="submit">
                                       <span>Submit Now</span><i class="icon-arrow-right-line-right"></i>
                                   </button>
                               </div>
                           </form>
                       </div>
                   </div>

                  
               </div>
           </div>

           <div class="edu-contact-map-area edu-section-gapBottom">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="google-map alignwide" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                               <iframe class="radius-small" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14211.06360923132!2d81.0485844!3d27.0691363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ea0a0262ee567ad!2sOSR%20Group%20Of%20College!5e0!3m2!1sen!2sin!4v1656921891394!5m2!1sen!2sin" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                           </div>
                       </div>
                   </div>
               </div>
           </div>


        <!-- body will go here (end) -->




        <!-- footer start -->
        <?php include 'home_include/footer.php'; ?>
        <!-- footer end -->

    </div>







    <!-- JS
============================================ -->


<?php include 'home_include/footer_link.php'; ?>


</body>


</html>
