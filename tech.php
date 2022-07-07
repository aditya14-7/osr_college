<?php
$title = "Teaching Staff";
$btitle = "Teaching Staff";

include('admin/connection.php');

$qteacher="select * from tbl_teacher order by tech_id desc";
$resteacher=mysqli_query($dbCon,$qteacher);


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
                               <span class="pre-title">Teaching Staff</span>
                               <h3 class="title">Teaching Staff</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row g-5 mt--20">

                   <?php
                   while($row_tech = mysqli_fetch_assoc($resteacher)){
                   ?>
                    <!-- Start Instructor Grid  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                            <div class="edu-instructor">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="instructor-profile.html">
                                            <img src="admin/teacher/<?php echo $row_tech['pic']; ?>" style="height: 300px;" alt="team images">
                                        </a>
                                    </div>
                                    <div class="edu-instructor-info">
                                        <h5 class="title"><?php echo $row_tech['name']; ?></h5>
                                        <span class="desc"><?php echo $row_tech['designation']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Instructor Grid  -->
                    <?php
                   }
                    ?>

                

                </div>

                   <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                       <div class="shape-image scene shape-image-1">
                           <span data-depth="-2.2">
                               <img src="assets/images/shapes/shape-04-01.png" alt="Shape Thumb">
                           </span>
                       </div>
                       <div class="shape-image shape-image-2">
                           <img src="assets/images/shapes/shape-02-08.png" alt="Shape Thumb">
                       </div>
                       <div class="shape-image shape-image-3">
                           <img src="assets/images/shapes/shape-15.png" alt="Shape Thumb">
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
