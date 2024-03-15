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
    
    <title>Varion Advisors | Project</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Creative Multipurpose Bootstrap Template">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CPlayfair+Display:400,400i,700,700i%7CRoboto:400,400i,500,700" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/themify-icons/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/fancybox/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/owlcarousel/css/owl.carousel.min.css" />

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
    <div class="innerpage-banner center bg-overlay-dark-7 py-7" style="background:url(assets/images/bg/04.jpg) no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center">
                    <h1 class="innerpage-title">Project</h1>
                    <!-- <h6 class="subtitle">Show your awesome work in 3 columns grid style</h6> -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="index"><i class="ti-home"></i> Home</a></li>
                            <li class="breadcrumb-item">Project</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- =======================
    Banner innerpage -->

    <!-- =======================
    Portfolio -->
    <section class="portfolio portfolio-style-2 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="nav justify-content-center">
                        <ul class="nav-tabs nav-tabs-style-3 text-center px-2 p-md-0 m-0 mb-4">
                            <li class="nav-filter active" data-filter="*">All Works</li>
                            <li class="nav-filter" data-filter=".app">App</li>
                            <li class="nav-filter" data-filter=".website">Website</li>
                            <!-- <li class="nav-filter" data-filter=".photo">Photography</li> -->
                        </ul>
                    </div>
                    <div class="portfolio-wrap grid items-4 items-padding">
    <!-- portfolio-card -->
    <?php
    $project = new Property();
    $result = $project->get_project_web();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <div class="portfolio-card isotope-item website col-6 col-md-3">
        <div class="pricing-box h-100 shadow no-border box">
            <div class="portfolio-card-header">
                <img src="manage/app/upload/project/<?php echo $row['project_image']; ?>" alt="" style="height: 100%; width: 100%; object-fit: cover;">
            </div>
            <div class="portfolio-card-footer">
                <a class="full-screen" href="manage/app/upload/project/<?php echo $row['project_image']; ?>" data-fancybox="portfolio" data-caption="<?php echo $row['project_title']; ?>"><i class="ti-fullscreen"></i></a>
                <h6 class="info-title"><a href="<?php echo $row['project_link']; ?>" title=""><?php echo $row['project_title']; ?></a></h6>
                <p><a href="<?php echo $row['project_link']; ?>" title="">See details</a></p>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- portfolio-card -->
    <?php
    $project = new Property();
    $result = $project->get_project_app();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <div class="portfolio-card isotope-item app col-6 col-md-3">
        <div class="pricing-box h-100 shadow border box">
            <div class="portfolio-card-header">
                <img src="manage/app/upload/project/<?php echo $row['project_image']; ?>" alt="" style="height: 100%; width: 100%; object-fit: cover;">
            </div>
            <div class="portfolio-card-footer">
                <a class="full-screen" href="manage/app/upload/project/<?php echo $row['project_image']; ?>" data-fancybox="portfolio" data-caption="<?php echo $row['project_title']; ?>"><i class="ti-fullscreen"></i></a>
                <h6 class="info-title"><a href="<?php echo $row['project_link']; ?>" title=""><?php echo $row['project_title']; ?></a></h6>
                <p><a href="<?php echo $row['project_link']; ?>" title="">See details</a></p>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

                    <!-- portfolio wrap -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Portfolio -->

    <!-- =======================
    call to action-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 text-center text-md-left align-self-center">
                    <h4 class="m-0">Start a new project with us and start adventure together!</h4>
                </div>
                <div class="col-md-3 text-center text-md-right mt-3 mt-md-0 align-self-center ">
                    <a class="btn btn-outline-light mb-0" href="contact.php">Let's Discuss </a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    call to action-->


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
    <script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <!--Template Functions-->
    <script src="assets/js/functions.js"></script>

</body>

</html>