<?php
$title = "Committee & Cell";
$btitle = "Committee & Cell";

include 'admin/connection.php';
$qc="SELECT * FROM tbl_commitee";
$resqc=mysqli_query($dbCon,$qc);


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


        <div class="edu-contact-us-area bg-color-white">
               <div class="container eduvibe-animated-shape">
                
                           <div class="contact-info pr--70 pr_lg--0 pr_md--0 pr_sm--0">
                               <div class="row g-5">

                                   <!-- Start Contact Info  -->
                                   <div class="col-lg-12 col-md-12 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                    
                                                                           
                                                <?php

                                        $c=1;
                                        while($rowqc=mysqli_fetch_array($resqc))
                                        {
                                        ?>

                                                <!-- faq 1 -->
                                                <div class="row">
                                                    <div class="col-sm-12 pb-4">
                                                    <p>
                                                        <a class="faq-btn d-block p-3 w-100 " id="btn1" data-bs-toggle="collapse" href="#faq<?php echo $c; ?>" role="button" aria-expanded="false" aria-controls="faq<?php echo $c; ?>">
                                                        <?php
                                                    echo $rowqc['committee_name'];
                                                        ?>
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="faq<?php echo $c; ?>">
                                                        <div class="card card-body">
                                                        
                                                            <!-- ======table start====== -->
                                                        <div class="row">
                                                            <div class="col-sm-12 p-5 table-responsive">

                                                            
                                                            <table class="table table-hover table-bordered my-tbl">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">S. No.</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Department</th>
                                                                <th scope="col">Post</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                
                                                        <?php
                                                                        $cid=$rowqc['cc_id'];
                                                                    $q_pcell="select * from tbl_commitee_member left join tbl_department on tbl_commitee_member.dept_id=tbl_department.dept_id  where tbl_commitee_member.cc_id='$cid'";

                                                                    $res_commitee=mysqli_query($dbCon,$q_pcell);
                                                            $sr=1;
                                                                while($row_cm=mysqli_fetch_array($res_commitee))
                                                                {
                                                                    ?>




                                                                <tr class="text-center">
                                                                    <td style="text-align:center"><?php echo $sr; $sr++; ?></td>
                                                                    <td style="text-align:center"><?php echo $row_cm['mem_name']; ?></td>
                                                                    <td style="text-align:center"><?php echo $row_cm['dept_name']; ?></td>
                                                                    <td style="text-align:center"><?php echo $row_cm['mem_deg']; ?></td>
                                                                </tr>
                                                                



                                                                
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                </tbody>
                                                
                                                </table>


                                                
                                            


                                                </div>
                                            </div>
                                            <!-- ======table end====== -->

                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                

                                                <?php
                                                            $c++;  }
                                                        ?>
                                            
                                            
                                                

                                   <!-- End Contact Info  -->


                               </div>
                           </div>
<<<<<<< HEAD
                    
=======
                       </div>
                   </div>

                   
>>>>>>> 455decb23644ca155ca4dd973569a9ff89f5e059
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
