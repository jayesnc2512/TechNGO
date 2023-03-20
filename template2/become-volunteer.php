<?php
 $host = "localhost";  
 $user = "root";  
 $password = 'jayesh@2512';  
 $db_name = "hackoverflow";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ".mysqli_connect_error());  
 }

$emailID = $_GET['emailID'];

$sql = "select * from ngoform where emailID='$emailID';";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 


$sql1="SELECT * from donars where emailID='$emailID'";
$result1 = mysqli_query($con,$sql1); 
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 

$sql2="select*from founders where emailID='$emailID'";
$result2 = mysqli_query($con,$sql2); 
$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a volunteer</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Azino Charity HTML Template">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/azino-icons.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/rtl.css">
</head>

<body>
    <

        <div class="stricky-header stricked-menu">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html"><img src="assets/images/logo-light.png" width="101" alt=""></a>
                </div><!-- /.logo-box -->
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.container -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Become a volunteer</h2>
                <ul class="thm-breadcrumb list-unstyled dynamic-radius">
                    <li><a href="index.php?emailID=<?php echo $row['emailID']?>">Home</a></li>
                    <li>-</li>
                    <li><span>Volunteers</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="become-volunteer pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="become-volunteer__content mb-40">
                            <div class="block-title">
                                <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Join Us Now</p>
                                <h3>Register yourself as <br /> our volunteer.</h3>
                            </div><!-- /.block-title -->
                            <p class="block-text mb-40 pr-10"><?php echo $row['volunteer_outcome']?></p>
                           <!-- /.list-unstyled list-style-one -->
                        </div><!-- /.become-volunteer__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7"><p>
                        <form action="mailto:<?php echo $row['emailID']?>" class="contact-form-validated become-volunteer__form form-one mb-40">
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="name" class="sr-only">name</label>
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="email" class="sr-only">email</label>
                                    <input type="text" name="email" id="email" placeholder="Email Address">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="phone" class="sr-only">phone</label>
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="date-of-birth" class="sr-only">date of birth</label>
                                    <input type="text" name="date" id="date-of-birth" placeholder="Date of Birth">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="address" class="sr-only">address</label>
                                    <input type="text" name="address" id="address" placeholder="Address">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="occupation" class="sr-only">occupation</label>
                                    <input type="text" name="occupation" id="occupation" placeholder="Occupation">
                                </div><!-- /.form-control -->
                                <div class="form-control form-control-full">
                                    <label for="message" class="sr-only">message</label>
                                    <textarea name="message" id="message" placeholder="Write a Message"></textarea>
                                </div><!-- /.form-control -->
                                <div class="form-control form-control-full">
                                    <button type="submit" class="thm-btn dynamic-radius">Register Now</button>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.form-control -->
                            </div><!-- /.form-group -->
                        </form><!-- /.become-volunteer__form -->
                        <div class="result"></div><!-- /.result -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.become-volunteer -->
        <div class="client-carousel pt-120 pb-120 client-carousel__has-border-top">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
        <section class="site-footer">
            <div class="main-footer pt-142 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget mb-40 footer-widget__about">
                                <a href="index.html" aria-label="logo image">
                                    <img src="assets/images/logo-light.png" class="footer-widget__logo" width="101" alt="">
                                </a>
                                <p>Lorem ipsum dolor sit amet consect etur adi pisicing elit sed.</p>
                               <!-- /.footer-widget__contact -->
                            </div><!-- /.footer-widget footer-widget__about -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__link mb-40">
                                <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__contact">
                                    <li><a href="#"><i class="azino-icon-telephone"></i>phone no</a></li>
                                    <li><a href="#"><i class="azino-icon-email"></i>e-mail id</a></li>
                                    <li><a href="#"><i class="azino-icon-pin"></i>address</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget footer-widget__link -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer -->
           
        </section><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="101" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="azino-icon-email"></i>
                    <a href="mailto:e-mail id">e-mail id</a>
                </li>
                <li>
                    <i class="azino-icon-telephone"></i>
                    <a href="tel:phone no">phone no</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- template js -->
    <script src="assets/js/theme.js"></script>

    <!-- language swticher feature -->
    <script src="assets/js/lang.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>