<?php
$title = "About Us";
$btitle = "About Us";

include('admin/connection.php');

$qgal="SELECT * FROM tbl_gallery order by gal_id desc limit 10";
$resgal=mysqli_query($dbCon,$qgal);


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

        

        <!-- about - who we are (start) -->
        <div class="home-three-about edu-about-area about-style-4 bg-color-white edu-section-gapBottom">
            <div class="container eduvibe-animated-shape">
                <div class="row g-lg-5 g-md-5 g-sm-5">
                    <div class="col-lg-12 col-xl-6">
                        <div class="gallery-wrapper">
                            <img class="image-1" src="assets/images/other_images/school-2.jpg" alt="About Images">
                            <!-- <img class="image-2" src="" alt="About Images"> -->
                            <!-- <img class="image-3" data-parallax='{"x": 0, "y": -120}' src="assets/images/about/about-05/about-group-03.jpg" alt="About Images"> -->
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="inner mt_mobile--40">
                            <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Who We Are</span>
                                <h3 class="title">About College</h3>
                            </div>
                            <div class="feature-style-6 mt--40">
                                <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                                    <div class="content">
                                        <h6 class="title">We Offer The Best Carrier</h6>
                                        <p class="description">
                                            O.S.R. Group of Colleges Lucknow is located on Mahmudabad Road, 20 km from state capital Lucknow. m., 25 km from district headquarter Barabaki and 30 km from Mahmudabad. m. The important and prestigious town of Barabanki district is situated in Kursi. The college is affiliated to Dr. Ram Manohar Lohia Avadh University. This college has been established for the educational and social development of this area. The college is well equipped with the latest equipment/resources and laboratory. Teaching facility for all subjects of Arts and Science stream is available in the college. Wi-Fi-equipped facilities: There is a well-equipped computer lab and a rich library of art, religion, culture as well as all the subjects being run.
                                        </p>
                                    </div>
                                </div>


                            </div>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- about - who we are (end) -->

        <!-- counter (start) -->
        <div class="container">
                <div class="counterup-style-2 bg-color-primary radius-small ptb--80 ">
                    <div class="row g-5">
                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 line-separator">
                            <div class="edu-counterup-2 text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icon-student-read"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="449">00</span>
                                            <span class="after-icon">+</span>
                                        </h3>
                                        <span class="subtitle">Students Enrolled</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 line-separator">
                            <div class="edu-counterup-2 text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icon-trophy"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="1">00</span>
                                            <span class="after-icon">+</span>
                                        </h3>
                                        <span class="subtitle">Years of Establishment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 line-separator">
                            <div class="edu-counterup-2 text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icon-Open-book"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="12">00</span>
                                            <span class="after-icon">+</span>
                                        </h3>
                                        <span class="subtitle">Course</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 line-separator">
                            <div class="edu-counterup-2 text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icon-account-circle-line"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="12">00</span>
                                            <span class="after-icon">+</span>
                                        </h3>
                                        <span class="subtitle">Staff</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->
                    </div>
                </div>
            </div>
        <!-- counter (end) -->

        <!-- Start Event Area  -->
        <div class="eduvibe-home-three-event edu-event-area bg-color-white edu-section-gap">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Our gallery</span>
                            <h3 class="title">Some picturs to tell our story</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                      <div class="owl-carousel gallery-carousel owl-theme">


                      <?php
                            $resgal=mysqli_query($dbCon,$qgal);
                            while($rowgal=mysqli_fetch_array($resgal))
                            {
                            ?>
                                <div class="item">
                                    <!-- Start Event Grid   -->
                                    <div class="col-lg-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="edu-event event-grid-1 bg-shade radius-small">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="admin/gallery/<?php echo $rowgal['pic']; ?>" class="fancybox" data-fancybox="gallery">
                                                            <img src="admin/gallery/<?php echo $rowgal['pic']; ?>" style="height:250px;" alt="Event Images">
                                                    </a>
                                                    <div class="top-position status-group left-top">
                                                        <span class="eduvibe-status status-06"><?php echo $rowgal['date']; ?> </span>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul class="event-meta">
                                                        <li><i class="icon-arrow-right-line-right"></i><?php echo $rowgal['text1']; ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Event Grid   -->
                                    </div>
                                <?php
                            }
                        ?>


                      

                  

                    </div>
                </div>

               
            </div>
        </div>
        <!-- End Event Area  -->



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
