<?php
$title = "Fee Structure";
$btitle = "Fee Structure";

include('admin/connection.php');

$q_fee = "select * from fee_str order by fee_str_id desc";
$res_fee = mysqli_query($dbCon, $q_fee);

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
                               <span class="pre-title">Fee Structure</span>
                               <h3 class="title">Fee Structure</h3>
                           </div>
                       </div>
                   </div>


                   
                   <div class="row g-5 mt-3">

                   <?php
                   $i=1;
                   while($row_fee = mysqli_fetch_assoc($res_fee)){
                   ?>
                    <!-- Start Event List  -->
                    <div class="col-lg-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-list radius-small">
                            <div class="inner">

                                <div class="content">
                                    <div class="content-left">
                                        <h5 class="title"><a href="admin/<?php echo $row_fee['fee_str_file']; ?>" target="_blank"><?php echo $i .". ". $row_fee['session']; ?> (Click here to view)</a></h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Event List  -->

                    <?php
                    $i++;
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
