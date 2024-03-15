<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/user-class.php';?>
<?php include 'manage/app/action/class/property-class.php';?>
<!doctype html>
<html lang="en">
<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GJY65FRW6X"></script>
    <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());

       gtag('config', 'G-GJY65FRW6X');
    </script>

    <title>Varion Advisors | Team</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="Creative Multipurpose Bootstrap Template">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CPlayfair+Display:400,400i,700,700i%7CRoboto:400,400i,500,700" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/themify-icons/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>

<body>
    <div class="preloader">
        <img src="assets/images/preloader.svg" alt="Pre-loader">
    </div>

    <!-- =======================
    header Start-->
    <?php include 'web_include/web_navbar.php';?>
    <!-- =======================
    header End-->

    <!-- =======================
    Banner innerpage -->
    <div class="bg-overlay-dark-2 parallax-bg pt-7 pb-10" style="background:url(assets/images/bg/08.jpg) no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center text-center">
                    <h1 class="font-weight-bold display-4 display-md-2 pt-4 pb-8 mb-8 mt-2">We're Superheroes</h1>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 left-0 w-100 mb-n3">
            <svg width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
                <path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z" fill="white" />
            </svg>
        </div>
    </div>
    <!-- =======================
    Banner innerpage -->

    <!-- =======================
    Team -->
    <section class="team social-hover team-overlay">
        <div class="container">
            <div class="row">
                <!-- Team item -->
                <?php
                $team    = new Property();
                $result  = $team->get_team_frnt();
                while($row = $result->fetch(PDO::FETCH_ASSOC))
                {
                ?>
                <!-- <div class="col-12 col-sm-3 col-md-3"> -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="team-item text-center">
                        <div class="team-avatar" style="height: 320px;">
                            <img src="manage/app/upload/team/<?php echo $row['team_image']; ?>" alt="<?php echo $row['team_image']; ?>">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name"><?php echo $row['team_name']; ?></h5>
                            <span class="team-position"><?php echo $row['team_position']; ?></span>
                            <p><?php echo $row['team_description']; ?></p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link" href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php  } ?>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center mt-5">
                    <h6>We are hiring! Join our team and shape the future with us!</h6>
                    <a class="btn btn-grad" href="careers">Apply now!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Team -->


    <!-- =======================
    footer  -->
    <?php include 'web_include/web_footer.php';?>
    <!-- =======================
    footer  -->

    <div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>

    <!--Global JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!--Vendors-->
    <script src="assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendor/jarallax/jarallax.min.js"></script>

    <!--Template Functions-->
    <script src="assets/js/functions.js"></script>

</body>
</html>