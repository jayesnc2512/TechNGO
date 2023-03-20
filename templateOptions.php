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
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates</title>
    <link rel="shortcut icon" href="assets/images/favicon1.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;500;600&family=Kumbh+Sans:wght@400;500;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-5.14.0.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Type Writer -->
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section id="project" class="project-area-three py-130 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg10">
                    <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Templates</span>
                        <h2>Look at our latest works </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-three-active">
            <div class="project-item style-two wow fadeInUp delay-0-2s">
                <div class="project-iamge">
                    <img src="template1/templateHead.png" style="width:382px;height:260px;" alt="Project">
                    <div class="project-over">
                        <a class="details-btn" href="template1/index.php?emailID=<?php echo $emailID?>"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <h4><a href="">Template 1</a></h4>
                    <span class="category">Get Your URL From Search Bar</span>
                </div>
            </div>
            <div class="project-item style-two wow fadeInUp delay-0-4s">
                <div class="project-iamge">
                    <img src="template2/templateHead.png"  style="width:382px;height:260px;" alt="Project">
                    <div class="project-over">
                        <a class="details-btn" href="template2/index.php?emailID=<?php echo $emailID?>"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <h4><a href="">Template 2</a></h4>
                    <span class="category">Get Your URL From Search Bar</span>
                </div>
            </div>
            <div class="project-item style-two wow fadeInUp delay-0-6s">
                <div class="project-iamge">
                    <img src="" style="width:382px;height:260px;"  alt="Project">
                    <div class="project-over">
                        <a class="details-btn" href=""><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <h4><a href="project-details.html">Template 3</a></h4>
                    <span class="category">Get Your URL From Search Bar</span>
                </div>
            </div>
             
            
        </div>
    </section>

        <!-- Jquery -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Appear Js -->
        <script src="assets/js/appear.min.js"></script>
        <!-- Slick -->
        <script src="assets/js/slick.min.js"></script>
        <!-- Magnific Popup -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Image Loader -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- Type Writer -->
        <script src="assets/js/jquery.animatedheadline.min.js"></script>
        <!-- Circle Progress -->
        <script src="assets/js/circle-progress.min.js"></script>
        <!-- Isotope -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--  WOW Animation -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Custom script -->
        <script src="assets/js/script.js"></script>
</body>
</html>