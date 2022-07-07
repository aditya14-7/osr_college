<?php
$title = "Gallery";
$btitle = "Gallery";

include('admin/connection.php');

$qgal="SELECT * FROM tbl_gallery order by gal_id desc";
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





        <!-- body will go here (start) -->



                <!-- breadcrumb start -->
                <?php include 'home_include/breadcrumd.php'; ?>
                <!-- brandcrumd end -->

                
                <div class="edu-gallery-grid-area masonary-wrapper-activation edu-section-gap bg-image bg-image--25 overflow-hidden">
                    <div class="wrapper">
                        <div class="container">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-start">
                                        <span class="pre-title">Gallery</span>
                                        <h3 class="title">Our Gallery</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                  
                                </div>
                            </div>

                            <div class="row g-5 mt--5">
                                <div class="col-12">
                                    <div class="gallery-grid-wrapper grid-metro3 mesonry-list overflow-hidden" id="animated-thumbnials">
                                        <div class="resizer"></div>

                                        <?php
                                        while($row_gal = mysqli_fetch_array($resgal)){
                                        ?>
                                        <!-- Start Gallery Grid  -->
                                        <a href="admin/gallery/<?php echo $row_gal['pic']; ?>" class="edu-gallery-grid-item grid-metro-item cat--1 cat--3">
                                            <div class="edu-gallery-grid">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <img class="w-100" style="height: 350px;" src="admin/gallery/<?php echo $row_gal['pic']; ?>" alt="Portfolio Images">
                                                    </div>
                                                </div>

                                                <div class="zoom-icon">
                                                    <i class="icon-zoom-in-line"></i>
                                                </div>
                                                <div class="hover-action">
                                                    <div class="hover-content">
                                                        <div class="hover-text">
                                                            <h6 class="title"><?php echo $row_gal['text1']; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </a>
                                        <!-- End Gallery Grid  -->
                                        <?php
                                        }
                                        ?>


                                    </div>
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
