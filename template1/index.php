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

 ?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="DynamicLayers">
<title><?php echo $row['name'] ?></title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/themify-icons.css">

<link rel="stylesheet" href="css/elegant-font-icons.css">

<link rel="stylesheet" href="css/elegant-line-icons.css">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/venobox/venobox.css">

<link rel="stylesheet" href="css/owl.carousel.css">

<link rel="stylesheet" href="css/slicknav.min.css">

<link rel="stylesheet" href="css/css-animation.min.css">

<link rel="stylesheet" href="css/nivo-slider.css">

<link rel="stylesheet" href="css/main.css">

<link rel="stylesheet" href="css/responsive.css">
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="site-preloader-wrap">

<header id="header" class="header-section">
</div>
</div>
</div>
<div class="bottom-header">
<div class="container">
<div class="bottom-content-wrap row">
<div class="col-sm-4">
<div class="site-branding">
<a href="#"><img src="../user/<?php echo $row['emailID']?>/<?php echo $row['logo']?>" alt="Brand" class="logo" style=" width: 178px;
    height: 80px;"></a>
</div>
</div>
<div class="col-sm-8 text-right">
<ul id="mainmenu" class="nav navbar-nav nav-menu">
<li class="active"> <a href="#">Home</a>

</li>
<li><a href="#about">About Us</a></li>
<li><a href="#donars">Donars</a></li>
<li><a href="#founders">Founders</a></li>
</ul>
<a href="#donation" class="default-btn">Donate Now</a>
</div>
</div>
</div>
</div>
</header>
<div class="header-height">
</div>


<section class="slider-section">
<div class="slider-wrapper">
<div id="main-slider" class="nivoSlider">
<img src="../user/<?php echo $row['emailID']?>/<?php echo $row['face_bg']?>" alt="" title="#slider-caption-1" />

</div>
<div id="slider-caption-1" class="nivo-html-caption slider-caption">
<div class="display-table">
<div class="table-cell">
<div class="container">
<div class="slider-text">
<a href="volunteer.php?emailID=$emailID">
<h5 class="wow cssanimation fadeInBottom">Join Us Today</h5></a>
<h1 class="wow cssanimation leFadeInRight sequence"><?php echo $row['title']?></h1>
<p class="wow cssanimation fadeInTop" data-wow-delay="1s"><?php echo $row['S_describe']?></p>
<a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
<a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate Now</a>
</div>
</div>
</div>
</div>
</div> 

</section>


<section class="promo-section bd-bottom">
<div class="promo-wrap">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6 xs-padding">
<div class="promo-content">
<img src="image/icon-1.png" alt="prmo icon">
<h3>Make Donation</h3>
<p></p>
<a href="#donation">Read More</a>
</div>
</div>

<div class="col-md-4 col-sm-6 xs-padding">
<div class="promo-content">
<img src="image/icon-3.png" alt="prmo icon">
<h3>Become A Volunteer</h3>
<p></p>
<a href="#volunteer">Read More</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section  id="about" class="about-section bg-grey bd-bottom padding">
  <div class="container">
  <div class="row about-wrap">
  <div class="col-md-6 xs-padding">
  <div class="about-image">
  <img src="../user/<?php echo $row['emailID']?>/<?php echo $row['face_bg']?>" alt="Brand" >
  </div>
  </div>
  <div class="col-md-6 xs-padding">
  <div class="about-content">
  <h2><?php echo $row['title']?></h2>
  <p><?php echo $row['aboutNgo']?></p>
  </div>
  </div>
  </div>
  </div>
  </section>

<?php
$sql1="SELECT * from donars where emailID='$emailID'";
$result1 = mysqli_query($con,$sql1); 
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>

  
<section id="donars" class="causes-section bg-grey bd-bottom padding">
<div class="container">
<div class="section-heading text-center mb-40">
<h2>Our 3 Major Donars</h2>
<span class="heading-border"></span>
</div>
<div class="causes-wrap row">
<div class="col-md-4 xs-padding">
<div class="causes-content">
<div class="causes-thumb">
<img src="../user/<?php echo $row['emailID']?>/<?php echo $row1['donar1_pic']?>" style="width:350; height:330px;" alt="causes">

<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">25%</span></div>
</div>
</div>
<div class="causes-details">
<h3><?php echo $row1['donar1_name']?></h3>
<p><?php echo $row1['donar1_describe']?></p>
<div class="donation-box">
<p><i class="ti-bar-chart"></i>Rs. <?php echo $row1['donar1_amount']?></p>

</div>
</div>
</div>
</div>
<div class="col-md-4 xs-padding">
<div class="causes-content">
<div class="causes-thumb">
<img src="../user/<?php echo $row['emailID']?>/<?php echo $row1['donar2_pic']?>" style="width:350; height:330px;" alt="causes">
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
</div>
</div>
<div class="causes-details">
<h3><?php echo $row1['donar2_name']?></h3>
<p><?php echo $row1['donar2_describe']?></p>
<div class="donation-box">
<p><i class="ti-bar-chart"></i>Rs. <?php echo $row1['donar2_amount']?></p>

</div>

</div>
</div>
</div>
<div class="col-md-4 xs-padding">
<div class="causes-content">
<div class="causes-thumb">
<img src="../user/<?php echo $row['emailID']?>/<?php echo $row1['donar3_pic']?>"alt="causes" style="width:350; height:330px;">
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
</div>
</div>
<div class="causes-details">
<h3><?php echo $row1['donar3_name']?></h3>
<p><?php echo $row1['donar3_describe']?></p>
<div class="donation-box">
<p><i class="ti-bar-chart"></i><?php echo $row1['donar3_amount']?></p>

</div>
</div>
</div>
 </div>
</div>
</div>
</section>
<?php
$sql2="select*from founders where emailID='$emailID'";
$result2 = mysqli_query($con,$sql2); 
$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC); 
?>

<section id="founders" class="about-section bd-bottom shape circle padding">
<div class="container">
<h2 style="text-align: center; padding-bottom:10px;">Our Founders</h2>
<div class="row">
<div class="col-md-4 xs-padding">
<div class="profile-wrap">
<img class="profile" src="../user/<?php echo $row['emailID']?>/<?php echo $row2['founder1_pic']?>" alt="profile">


<h3><?php echo $row2['founder1_name']?> </h3>
<p><?php echo $row2['founder1_describe']?> </p>
</div>
</div>
<div class="col-md-4 xs-padding">
  <div class="profile-wrap">
  <img class="profile" src="../user/<?php echo $row['emailID']?>/<?php echo $row2['founder2_pic']?>" alt="profile">
  <h3><?php echo $row2['founder1_name']?> </h3>
  <p><?php echo $row2['founder1_describe']?> </p>
  </div>
  </div>
  
</div>
</div>
</div>
</section>
<section id="donation" class="campaigns-section bd-bottom">
<div class="container">
<div class="row">
<div class="col-md-6 xs-padding">
<div class="campaigns-wrap">

<h2 style="color:black;">Donate For Our Cause</h2>
<p style="color: grey;"><?php echo $row['donar_outcome']?></p>

<a href="Donation.html" class="default-btn">Donate Now</a>
</div>
</div>
<div class="col-md-6 xs-padding">

</div>
</div>
</div>
</section>
<section id="volunteer" class="team-section bg-grey bd-bottom circle shape padding">
<div class="container">
<div class="section-heading text-center mb-40">
<h2>Become A Volunteer</h2>
  <span class="heading-border"></span>
</div>
<div class="team-wrapper row">
<div class="col-lg-6 sm-padding">
<div class="team-wrap row">
<div class="col-md-6">
<div class="team-details">
<div class="hover">

</div>
</div>
</div>
<div class="col-md-6">
<div class="team-details">

</div>
</div>
<div class="col-md-6">
<div class="team-details">

</div>
</div>
<div class="col-md-6">
<div class="team-details">

</div>
</div>
</div>
</div>
<div class="col-lg-6 sm-padding">
<div class="team-content">
<h2>Become a Volunteer?</h2>
<h3><?php echo $row['title']?></h3>
<p><?php echo $row['volunteer_outcome']?></p>

<a href="volunteer.php?emailID=<?php echo $row['emailID']?>" class="default-btn">Join With Us</a>
</div>
</div>
</div>
</div>
</section>

<section class="widget-section padding">
<div class="container">
<div class="widget-wrap row">
<div class="col-md-4 xs-padding">
<div class="widget-content">
<img src="../user/" alt="logo">
<p><?php echo $row['S_describe']?></p>
<ul class="social-icon">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
<li><a href="#"><i class="fa fa-instagram"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
<div class="col-md-4 xs-padding">

</div>
<div class="col-md-4 xs-padding">
<div class="widget-content">
<h3><?php echo $row['name']; ?> Location</h3>
<ul class="address">
<li><i class="ti-mobile"></i><?php echo $row['phone']; ?></li>
<li><i class="ti-world"></i><?php echo $row['emailID']; ?></li>
<li><i class="ti-location-pin"></i><?php echo $row['Address']; ?></li>
</ul>
</div>
</div>
</div>
</div>
</section>

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-1.12.4.min.js"></script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/vendor/tether.min.js"></script>

<script src="js/vendor/imagesloaded.pkgd.min.js"></script>

<script src="js/vendor/owl.carousel.min.js"></script>

<script src="js/vendor/jquery.isotope.v3.0.2.js"></script>

<script src="js/vendor/smooth-scroll.min.js"></script>

<script src="js/vendor/venobox.min.js"></script>

<script src="js/vendor/jquery.ajaxchimp.min.js"></script>

<script src="js/vendor/jquery.counterup.min.js"></script>

<script src="js/vendor/jquery.waypoints.v2.0.3.min.js"></script>

<script src="js/vendor/jquery.slicknav.min.js"></script>

<script src="js/vendor/jquery.nivo.slider.pack.js"></script>

<script src="js/vendor/letteranimation.min.js"></script>

<script src="js/vendor/wow.min.js"></script>

<script src="js/contact.js"></script>

<script src="js/main.js"></script>
</body>
</html>