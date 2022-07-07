<?php
$title = "Alumni";
$btitle = "Alumni";

include('admin/connection.php');

$q_alumni = "select * from tbl_alumni where status='N' order by id desc";
$res_alumni = mysqli_query($dbCon, $q_alumni);

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



        <div class="edu-elements-area edu-section-gap bg-color-white">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Skilled Alumni</span>
                            <h3 class="title">Alumni</h3>
                        </div>
                    </div>
                </div>
                <div class="row row--20">

                    <?php
                    while($row_alumni = mysqli_fetch_assoc($res_alumni)){
                    ?>
                    <!-- Start Instructor Grid  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-instructor-grid edu-instructor-1 edu-instructor-1">
                            <div class="edu-instructor">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="instructor-profile.html">
                                            <img src="admin/alumni_pic/<?php echo $row_alumni['pic']; ?>" style="height: 225px;" alt="team images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="edu-instructor-info">
                                <h5 class="title"><a href="instructor-profile.html"><?php echo $row_alumni['name']; ?></a></h5>
                                <span class="desc"><?php echo $row_alumni['designation']; ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Instructor Grid  -->
                    <?php
                    }
                    ?>

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
