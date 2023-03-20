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
    <title><?php echo $row['name'] ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Azino Charity HTML Template">

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

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
    <div class="preloader">
        <img class="preloader__image" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div id="home" class="container">
                <div class="inner-container">
                    <div class="row">
                        <!-- /.col-sm-12 -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 d-none d-md-none d-lg-none d-xl-block">
                            
                            <nav class="main-menu dynamic-radius">
                                <ul class="main-menu__list">
                                    <li class="dropdown">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li ><a href="#about">About</a>
                                        <!-- <ul>
                                            <li><a href="about.html">About</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="dropdown">
                                        <a href="#donation">Donation</a>
                                    </li>
                                    
                                </ul>
                                <!-- /.main-menu__list -->
                            </nav>
                            <!-- /.main-menu -->
                            <div class="main-header__info">
                                <ul class="list-unstyled main-header__info-list">
                                    <li>
                                        <i class="azino-icon-email"></i>
                                        <a href="mailto:<?php echo $row['emailID']?>" >e-mail</a>
                                    </li>
                                    <li>
                                        <i class="azino-icon-telephone"></i>
                                        <a href="tel:<?php echo $row['phone'] ?>">phone no</a>
                                    </li>
                                </ul><!-- /.list-unstyled -->
                            </div><!-- /.main-header__info -->
                        </div><!-- /.col-sm-12 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html"><img src="../user/<?php echo $row['emailID']?>/<?php echo $row['logo']?>" width="101" alt="logo"></a>
                </div><!-- /.logo-box -->
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.container -->
        </div><!-- /.stricky-header -->

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "autoplay": {
        "delay": 5000
    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(../user/<?php echo $row['emailID']?>/<?php echo $row['face_bg']?>);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-xl-7 col-lg-12 text-right">
                                    <p><?php echo $row['name']?></p>
                                    <h2><?php echo $row['title']?></h2>
                                    <a href="#" data-target=".donate-options"
                                        class="scroll-to-target thm-btn dynamic-radius">Start Donating</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    
                </div><!-- /.swiper-wrapper -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>
            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="video-card-two">
            <div class="container wow fadeInUp" data-wow-duration="1500ms">
                <div class="inner-container dynamic-radius"
                    style="background-image: url();">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-4">
                            <h3><?php echo $row['title']?></h3>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-5">
                            <p><?php echo $row['S_describe']?> </p>
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.video-card-two -->

        <section class="service-one pt-120 pb-90">
            <div class="container">
                <img src="assets/images/shapes/service-line-1-1.png" alt="" class="service-one__shape-1">
               
                
                    
                    
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <section id="about" class="about-counter pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block-title">
                            <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">What Do We Do</p>
                            <h3><?php echo $row['title']?></h3>
                        </div><!-- /.block-title -->
                        <p class="about-counter__text"><?php echo $row['aboutNgo']?> </p>
                        <!-- /.list-unstyled list-style-one -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 ">
                        <div class="about-counter__image clearfix wow fadeInRight" data-wow-duration="1500ms">
                            <div class="about-counter__image-content">
                                <img src="../user/<?php echo $row['emailID']?>/<?php echo $row['about_img']?>" alt="">
                                
                            </div><!-- /.about-counter__image-content -->
                        </div><!-- /.about-counter__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.containerr -->
        </section><!-- /.about-counter -->


        <section id="founders" class="causes-page causes-home pt-120 pb-120">
            <div class="container">
                <div class="row align-items-start align-items-md-center flex-column flex-md-row mb-60">
                    <div class="col-lg-7">
                        <div class="block-title">
                            <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Our Founders</p>
                            <h3>Kind person<br> around the world.</h3>
                        </div><!-- /.block-title -->
                    </div><!-- /.col-lg-7 -->
                    <div class="col-lg-5 d-flex">
                        
                    </div><!-- /.col-lg-5 -->
                </div>
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 3, "spaceBetween": 30,
        "breakpoints": {
            "0": {
                "slidesPerView": 1,
                "spaceBetween": 30
            },
            "375": {
                "slidesPerView": 1,
                "spaceBetween": 30
            },
            "575": {
                "slidesPerView": 1,
                "spaceBetween": 30
            },
            "768": {
                "slidesPerView": 1,
                "spaceBetween": 30
            },
            "991": {
                "slidesPerView": 2,
                "spaceBetween": 30
            },
            "1199": {
                "slidesPerView": 2,
                "spaceBetween": 30
            },
            "1200": {
                "slidesPerView": 3,
                "spaceBetween": 30
            }
        }
        }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="cause-card">
                                <div class="cause-card__inner">
                                    <div class="cause-card__image">
                                        <img src="../user/<?php echo $row['emailID']?>/<?php echo $row2['founder1_pic']?>" style="width:370px;height:370px"  alt="">
                                    </div><!-- /.cause-card__image -->
                                    <div class="cause-card__content">
                                        <div class="cause-card__top">
                                            <div class="cause-card__progress">
                                            </div><!-- /.cause-card__progress -->
                                            <div class="cause-card__goals">
                                            </div><!-- /.cause-card__goals -->
                                        </div><!-- /.cause-card__top -->
                                        <h3><?php echo $row2['founder1_name']?>
                                        </h3>
                                        <p><?php echo $row2['founder1_describe']?></p>
                                    </div><!-- /.cause-card__content -->
                                </div><!-- /.cause-card__inner -->
                            </div><!-- /.cause-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">

                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cause-card">
                                        <div class="cause-card__inner">
                                            <div class="cause-card__image">
                                                <img src="../user/<?php echo $row['emailID']?>/<?php echo $row2['founder2_pic']?>" style="width:370px;height:370px" alt="">
                                            </div><!-- /.cause-card__image -->
                                            <div class="cause-card__content">
                                                <div class="cause-card__top">
                                                    <div class="cause-card__progress">
                                                    </div><!-- /.cause-card__progress -->
                                                    <div class="cause-card__goals">
                                                    </div><!-- /.cause-card__goals -->
                                                </div><!-- /.cause-card__top -->
                                                <h3><?php echo $row2['founder2_name']?>
                                                </h3>
                                                <p><?php echo $row2['founder2_describe']?></p>
                                            </div><!-- /.cause-card__content -->
                                        </div><!-- /.cause-card__inner -->
                                    </div><!-- /.cause-card -->
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">


                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.causes-col__3 -->
            </div><!-- /.container -->
        </section><!-- /.causes-page -->

        <section id="donation" class="call-to-action-two">

            <div class="call-to-action-two__bg"
                style="background-image: url(assets/images/backgrounds/page-header-1-1.jpg);">
            </div>
            <!-- /.page-header__bg -->
            <div class="container pt-80 pb-80">
                <i class="azino-icon-charity call-to-action-two__icon"></i>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="block-title">
                            <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Help Other People</p>
                            <h3><?php echo $row['title']?></h3>
                        </div><!-- /.block-title -->

                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-5 d-flex justify-content-start justify-content-lg-end">
                        <div class="btn-wrap">
                            <a href="#" data-target=".donate-options"
                                class="scroll-to-target thm-btn dynamic-radius">Start
                                Donating</a><!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.btn-wrap -->
                    </div><!-- /.col-lg-6 d-flex justify-content-end -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action-two -->

        <section class="donate-options pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="donate-options__content">
                            <div class="block-title">
                                <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Donate Now</p>
                        
                            </div><!-- /.block-title -->
                            <p><?php echo $row['donar_outcome']?> </p>
                            <div class="donate-options__call">
                                <i class="azino-icon-telephone"></i>
                                <div class="donate-options__call-content">
                                    <p>Have any question about donation? <br> <span>Call us now:</span> <a
                                            href="tel:<?php echo $row['phone']?>">contact number</a></p>
                                </div><!-- /.donate-options__call-content -->
                            </div><!-- /.donate-option__call -->
                        </div><!-- /.donate-options__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <form  class="donate-options__form wow fadeInUp" data-wow-duration="1500ms">
                            <h3 class="text-center">Start donating now</h3>
                            <p class="text-center"><br></p>
                            <label for="donate-name" class="sr-only"></label><!-- /.sr-only -->
                            <input type="text" id="donate-name" placeholder="Your Name">
                            <label for="donate-name" class="sr-only"></label><!-- /.sr-only -->
                            <input type="email" id="donate-email" placeholder="emailID">
                            <label for="donate-amount" class="sr-only"></label><!-- /.sr-only -->
                            <input type="text" value="" placeholder="Insert Value" id="donate-amount">
                            <label for="donate-name" class="sr-only"></label><!-- /.sr-only -->
                            <input type="text" id="donate-name" placeholder="Payment method">
                            <button type="" class="thm-btn dynamic-radius">Donate Now</button>
                            <!-- /.thm-btn dynamic-radius -->
                        </form><!-- /.donate-options__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.donate-options -->

        <section class="team-about pb-120 pt-120" style="background-image: url(assets/images/team/team-map-1-1.png);">
            <div class="container">
                <div class="team-about__top">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-7">
                            <div class="block-title">
                                <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Our Supporters</p>
                                <h3>Meet our <br> top 2 sponsors.</h3>
                            </div><!-- /.block-title -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-5">
                          
                        </div><!-- /.col-md-12 col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.team-about__top -->
                <div class="team-4-col" style="justify-content: space-between;">
                    <div class="team-card text-center content-bg-1">
                        <div class="team-card__image">
                            <img src="../user/<?php echo $row['emailID']?>/<?php echo $row1['donar1_pic']?>" style="width:270; height:291;" alt="">
                        </div><!-- /.team-card__image -->
                        
                        <div class="team-card__content">
                            <h3><?php echo $row1['donar1_name']?></h3>
                            <p><?php echo $row1['donar1_describe']?></p>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                    <div class="team-card text-center content-bg-2">
                        <div class="team-card__image">
                            <img src="../user/<?php echo $row['emailID']?>/<?php echo $row1['donar2_pic']?>" style="width:270; height:291;" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__social">
                            <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                            <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.team-card__social -->
                        <div class="team-card__content">
                            <h3>N<?php echo $row1['donar2_name']?></h3>
                            <p><?php echo $row1['donar2_describe']?></p>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                    <div class="team-card text-center content-bg-3">
                        <div class="team-card__image">
                            <img src="../user/<?php echo $row['emailID']?>/<?php echo $row1['donar3_pic']?>" style="width:270; height:291;" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__social">
                            <a href="" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                            <a href="" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                            <a href="" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.team-card__social -->
                        <div class="team-card__content">
                            <h3><?php echo $row1['donar3_name']?></h3>
                            <p><?php echo $row1['donar3_describe']?></p>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.team-4-col -->
            </div><!-- /.container -->
        </section><!-- /.team-about -->
       

        <section class="call-to-action">
            <div class="container wow fadeInLeft" data-wow-duration="1500ms">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="call-to-action__content">
                            <div class="call-to-action__icon">
                                <i class="azino-icon-support"></i>
                            </div><!-- /.call-to-action__icon -->
                            <h3><?php echo $row['title']?></h3>
                        </div><!-- /.call-to-action__content -->
                    </div><!-- /.col-lg-9 -->
                    <div
                        class="col-xl-3 col-lg-4 d-flex justify-content-start justify-content-md-center justify-content-xl-end justify-content-lg-end">
                        <a href="become-volunteer.php?emailID=<?php echo $row['emailID']?>" class="thm-btn dynamic-radius">Become a Volunteer</a>
                        <!-- /.thm-btn dynamic-radius -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->
        <div class="client-carousel pt-120 pb-120 client-carousel__has-top-shadow">
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
                                    <img src="assets/images/logo-light.png" class="footer-widget__logo" width="101"
                                        alt="">
                                </a>
                                <p><?php echo $row['S_description']?></p>
                                
                            </div><!-- /.footer-widget footer-widget__about -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__link mb-40">
                                <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__contact">
                                    <li><a href="#"><i class="azino-icon-telephone"></i><?php echo $row['phone']?></a></li>
                                    <li><a href="#"><i class="azino-icon-email"></i><?php echo $row['emailID']?></a></li>
                                    <li><a href="#"><i class="azino-icon-pin"></i><?php echo $row['Address']?></a></li>
                                </ul><!-- /.footer-widget__contact -->
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget footer-widget__link -->
                        </div><!-- /.-3 col-md-6 col-sm-12 -->
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
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="101"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="azino-icon-email"></i>
                    <a href="mailto:e-mail">e-mail</a>
                </li>
                <li>
                    <i class="azino-icon-telephone"></i>
                    <a href="tel:phone no">phone no</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
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