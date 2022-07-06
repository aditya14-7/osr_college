<?php
$title = "Home";

include('admin/connection.php');

$qslider="select * from tbl_slider order by slider_id desc";
$resslider=mysqli_query($dbCon,$qslider);

$qnotice="select * from tbl_notice order by file_id desc";
$resnotice=mysqli_query($dbCon,$qnotice);

$qteacher="select * from tbl_teacher order by tech_id desc";
$resteacher=mysqli_query($dbCon,$qteacher);

$qgal="SELECT * FROM `tbl_gallery` order by gal_id desc limit 10";
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



        <!-- Start Sldier Area  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <?php
                                $resslide=mysqli_query($dbCon,$qslider);
                                    $c=mysqli_num_rows($resslider);
                                    $i=1;
                                    while($i<$c)
                                    {
                                ?>

                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php  echo $i; ?>" aria-label="Slide <?php  echo $i+1; ?>"></button>

                            <?php


                            $i++; }
                            ?>
                        </div>
                        <div class="carousel-inner mt-3 mt-sm-0">

                        <?php
                            $sc=1;
                            while($rowslider=mysqli_fetch_array($resslider))
                            {
                            if($sc==1)
                            {
                                ?>

                        <div class="carousel-item active">
                            <img src="admin/slider/<?php echo $rowslider['pic']; ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="content text-start">
                                    <h1 class="title text-white" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" ><?php echo $rowslider['text1']; ?></h1>
                                    <a class="edu-btn text-white" href="about.php" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Know More<i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                          </div>


                            <?php
                                    }
                                    else
                                    {
                                        ?>
                                         <div class="carousel-item">
                                                <img src="admin/slider/<?php echo $rowslider['pic']; ?>" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <div class="content text-start">
                                                        <h1 class="title text-white" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><?php echo $rowslider['text1']; ?></h1>
                                                        <a class="edu-btn text-white" href="about.php" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Know More <i class="icon-arrow-right-line-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                <?php
                                    }
                                    $sc=0; 
                                    }
                                ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>


        <div class="sercice-area eduvibe-service-five service-wrapper-5 edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Course Categories</span>
                            <h3 class="title">Course Provided by Us</h3>
                        </div>
                    </div>
                </div>

                <div class="row g-5 mt--25">
                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Hindi</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">English</a></h6>
                                    <!-- <p class="description">24 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Geography</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Home Science</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Political Science</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Sociology</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Urdu</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Botany</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->


                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Chemistry</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->


                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Mathematics</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->


                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Physics</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->


                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Botany</a></h6>
                                    <!-- <p class="description">39 Course</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-19-02.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-21.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>

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
                            <div class="read-more-btn mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="about-us-1.html">Know More About Us <i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1"><img src="assets/images/shapes/shape-03-08.png" alt="Shape Thumb" /></div>
                    <div class="shape-image shape-image-2"><img src="assets/images/shapes/shape-27.png" alt="Shape Thumb" /></div>
                </div>
            </div>
        </div>


        <!-- Start Counterup Area  -->
        <div class="edu-counterup-and-course-area">
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
                                        <h3 class="counter"><span class="odometer" data-count="10">00</span>
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
            <div class="edu-course-area eduvibe-home-three-course counterup-overlay-top bg-image edu-section-gapTop edu-section-gapBottom">
                <div class="container eduvibe-animated-shape">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Our Teachers</span>
                                <h3 class="title">A team of experienced teachers</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row g-5 mt--25">

                        <div class="owl-carousel teacher-carousel owl-theme">

                           
                                    
                            <div class="item">
                                  <!-- Start Single Card  -->
                                    <div class="col-12 col-sm-12 col-xl-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="edu-card card-type-1 bg-white radius-small">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <ul class="edu-meta meta-01">
                                                        <li><i class="icon-Double-arrow"></i>Mentor Name</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                            </div>


                            <div class="item">
                                  <!-- Start Single Card  -->
                                    <div class="col-12 col-sm-12 col-xl-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                        <div class="edu-card card-type-1 bg-white radius-small">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img class="w-100" src="assets/images/course/course-01/course-02.jpg" alt="Course Meta">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <ul class="edu-meta meta-01">
                                                        <li><i class="icon-Double-arrow"></i>Mentor Name</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                            </div>


                            <div class="item">
                                 <!-- Start Single Card  -->
                                <div class="col-12 col-sm-12 col-xl-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-card card-type-1 bg-white radius-small">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img class="w-100" src="assets/images/course/course-01/course-03.jpg" alt="Course Meta">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <ul class="edu-meta meta-01">
                                                    <li><i class="icon-Double-arrow"></i>Mentor Name</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->
                            </div>


                            <div class="item">
                                  <!-- Start Single Card  -->
                                    <div class="col-12 col-sm-12 col-xl-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="edu-card card-type-1 bg-white radius-small">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <ul class="edu-meta meta-01">
                                                        <li><i class="icon-Double-arrow"></i>Mentor Name</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                            </div>
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="load-more-btn mt--60 text-center">
                                <a class="edu-btn" href="course-style-3.html">View All Teachers<i
                                        class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="assets/images/shapes/shape-07.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="assets/images/shapes/shape-04.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="assets/images/shapes/shape-28.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="assets/images/shapes/shape-03-09.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-5">
                            <img src="assets/images/shapes/shape-15-03.png" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counterup Area  -->

        <!-- Start Video Area  -->
        <div class="edu-workshop-area eduvibe-home-three-video workshop-style-1 edu-section-gap bg-image bg-color-primary">
            <div class="container eduvibe-animated-shape">
                <div class="row gy-lg-0 gy-5 row--60 align-items-center">
                    <div class="col-lg-9 order-2 order-lg-1">
                        <div class="workshop-inner">
                            <div class="section-title text-white" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Our Mentor</span>
                                <h3 class="title">From Director's Desk</h3>
                            </div>
                            <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, nostrum harum sint obcaecati facilis deleniti! Dolorum impedit recusandae earum voluptate possimus sed nostrum nihil porro commodi! Veritatis laudantium dolores totam tempore quisquam, animi nostrum id necessitatibus inventore porro ad. Temporibus molestiae laborum, voluptatem asperiores excepturi voluptatum doloribus et sed magni.</p>
                            <!-- <div class="read-more-btn" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn btn-white" href="event-list.html">More Upcomming Workshop<i class="icon-arrow-right-line-right"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3 order-1 order-lg-2">
                        <div class="thumbnail video-popup-wrapper">
                            <img class="radius-small w-100" src="assets/images/other_images/school-2.jpg" alt="About Image">
                            <!-- <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn with-animation position-to-top video-popup-activation color-secondary size-60">
                                <span class="play-icon"></span>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-09-01.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-04-05.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-13-02.png" alt="Shape Thumb" />
                    </div>
                </div>

            </div>
        </div>
        <!-- End Video Area  -->

        <!-- Start Accordion Area  -->
        <div class="edu-accordion-area eduvibe-home-three-accordion accordion-shape-1 edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">
                    <div class="col-lg-6 gallery-wrapper">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="thumbnail" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                                    <img class="radius-small w-100" src="assets/images/other_images/school-3.jpg" alt="Shape Images">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mt--35 mt_sm--15">
                                <div class="thumbnail" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                                    <img class="radius-small w-100" src="assets/images/other_images/school-2.jpg" alt="Shape Images">
                                </div>
                                <div class="thumbnail mt--15" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                                    <img class="radius-small w-100" src="assets/images/other_images/without-tree-2.jpg" alt="Shape Images">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="accordion-style-1">
                            <div class="section-title text-start mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Frequently Asked Questions</span>
                                <h3 class="title">Get Every General Answers From Here</h3>
                            </div>

                            <div class="edu-accordion edu-accordion-01" id="accordionExample1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingOne">
                                        <button class="edu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What does it take become an author?
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Learning management system, combines a wide range of features to present
                                            a class setting without having the students come into a physical classroom. It all depends on the WordPress LMS plugin you go with, but
                                            in general.
                                        </div>
                                    </div>
                                </div>

                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingTwo">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How to Change my Password easily?
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Learning management system, combines a wide range of features to present
                                            a class setting without having the students come into a physical
                                            classroom. It all depends on the WordPress LMS plugin you go with, but
                                            in general.
                                        </div>
                                    </div>
                                </div>

                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingThree">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How to Change my Plan using PayPal?
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Learning management system, combines a wide range of features to present
                                            a class setting without having the students come into a physical
                                            classroom. It all depends on the WordPress LMS plugin you go with, but
                                            in general.
                                        </div>
                                    </div>
                                </div>

                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingFour">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How long it take to create a video course?
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Learning management system, combines a wide range of features to present
                                            a class setting without having the students come into a physical
                                            classroom. It all depends on the WordPress LMS plugin you go with, but
                                            in general.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape shape-1"><span class="shape-dot"></span></div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-11-04.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-25-01.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Accordion Area  -->

        <div class="eduvibe-home-three-testimonial edu-testimonial-area testimonial-four-wrapper edu-section-gap bg-image">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8">
                        <div class="testimonial-activation pr--55 pr_lg--0 pr_md--0 pr_sm--0">

                            <!-- Start Tastimonial Card  -->
                            <div class="testimonial-card-box variation-2">
                                <div class="eduvibe-testimonial-three inner testimonial-card-activation-1 slick-arrow-style-2">
                                    <div class="single-card">
                                        <div class="rating">
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                        </div>
                                        <p class="description">“Lorem ipsum dolor sit amet, consectetur dloril adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.”</p>
                                        <div class="client-info">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonial/testimonial-04/client-04.png" alt="Client Images">
                                            </div>
                                            <div class="content">
                                                <h6 class="title">Michle A. Smith</h6>
                                                <span class="designation">Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-card">
                                        <div class="rating">
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                        </div>
                                        <p class="description">“Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.”</p>
                                        <div class="client-info">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonial/testimonial-04/client-01.png" alt="Client Images">
                                            </div>
                                            <div class="content">
                                                <h6 class="title">David M. Bard</h6>
                                                <span class="designation">Laravel Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-card">
                                        <div class="rating">
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                        </div>
                                        <p class="description">“Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum finibus bonorum.”</p>
                                        <div class="client-info">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonial/testimonial-04/client-03.png" alt="Client Images">
                                            </div>
                                            <div class="content">
                                                <h6 class="title">Lorraine D. Raines</h6>
                                                <span class="designation">WordPress Expert</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tastimonial Card  -->
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="testimonial-four-right-content">
                            <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Testimonials</span>
                                <h3 class="title">Students Feedback</h3>
                            </div>
                            <p class="description mt--25 mb--25" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">We  </p>
                            <h6 class="subtitle" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">People Love To Learn With Us</h6>

                            <div class="row g-5">
                                <!-- Start Single Feature  -->
                                <div class="col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="feature-style-3">
                                        <div class="feature-content">
                                            <h6 class="feature-title">90%</h6>
                                            <p class="feature-description">Students Complete Course Successfully </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Feature  -->

                                <!-- Start Single Feature  -->
                                <div class="col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="feature-style-3">
                                        <div class="feature-content">
                                            <h6 class="feature-title">9/10</h6>
                                            <p class="feature-description">Users reported better learning outcomes.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Feature  -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-04-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-08.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-19-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="assets/images/shapes/shape-16-01.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>


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

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-15.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-13-05.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="assets/images/shapes/shape-05-01.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Event Area  -->





        <!-- footer start -->
        <?php include 'home_include/footer.php'; ?>
        <!-- footer end -->

    </div>




    <!-- JS
============================================ -->


<?php include 'home_include/footer_link.php'; ?>


</body>


</html>
