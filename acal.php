<?php
$title = "Academic Calender";
$btitle = "Academic Calender";

include('admin/connection.php');

$q_acal = "select * from tbl_acal order by acal_id desc";
$res_acal = mysqli_query($dbCon, $q_acal);

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
                               <span class="pre-title">Academic Calender</span>
                               <h3 class="title">Academic Calender</h3>
                           </div>
                       </div>
                   </div>

                   <div class="row g-5 mt-3">

                   <?php
                   $i=1;
                    while($row_acal = mysqli_fetch_assoc($res_acal)){
                   ?>
                    <!-- Start Event List  -->
                    <div class="col-lg-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-list radius-small">
                            <div class="inner">

                                <div class="content">
                                    <div class="content-left">
                                        <h5 class="title"><a href="admin/<?php echo $row_acal['acal_file']; ?>" target="_blank"> <?php echo $i. ". " . $row_acal['session']; ?> (Click here to view)</a></h5>
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

                   <!-- <div class="row g-5 mt--20">
                       <div class="col-lg-12">
                           <div class="contact-info pr--70 pr_lg--0 pr_md--0 pr_sm--0">
                               <div class="row g-5">

                                
                                   <div class="col-lg-12 col-md-12 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                     <table class="my-tbl">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>File</th>
                                                <th>Session</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1. </td>
                                                <td><a href="#" target="_blank">Click here to view</a></td>
                                                <td>2020-21</td>
                                            </tr>
                                        </tbody>
                                     </table>
                                   </div>

                           
                               </div>
                           </div>
                       </div>
                   </div> -->

                 
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
