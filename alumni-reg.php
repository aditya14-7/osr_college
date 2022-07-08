<?php
$title = "Alumni Registration";
$btitle = "Alumni Registration";
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

        <!-- alumni-registration (start) -->
        <div class="edu-checkout-area edu-section-gap bg-color-white">
            <div class="container">
                <div class="row row--35">
                    <div class="col-lg-10 mx-auto">
                        <div class="checkout-page-style">
                            <h3 class="title">Add Your Details</h3>
                            <form class="checkout-form" action="#">

                                <div class="input-box mb--20">
                                    <input type="text" placeholder="First name*">
                                </div>

                                <div class="input-box mb--20">
                                    <input type="text" placeholder="Last name*">
                                </div>

                                <div class="input-box mb--20">
                                        <textarea placeholder="Working Details*"></textarea>
                                </div>

                                <div class="input-box mb--20">
                                    <input type="text" placeholder="College Session attended (admission year to passing year)">
                                </div>
                               
                                <div class="input-box mb--20">
                                    <input type="text" placeholder="Phone*">
                                </div>

                                <div class="input-box mb--20">
                                    <input type="email" placeholder="Email Address*">
                                </div>

                                <div class="input-box">
                                        <textarea placeholder="Any memories of your college life (Optional)"></textarea>
                                </div>

                            </form>

                            <div class="read-more-btn mt--60 text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="course-style-1.html">Submit</a>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- alumni-registration (end) -->



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
