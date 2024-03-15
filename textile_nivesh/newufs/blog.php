<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/user-class.php';?>
<?php include 'manage/app/action/class/blog-class.php';?>
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

    <title>Varion Advisors | Blog</title>
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
                    <h1 class="innerpage-title">Blog</h1>
                  
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="index"><i class="ti-home"></i> Home</a></li>
                            <li class="breadcrumb-item">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- =======================
    Banner innerpage -->

    <!-- =======================
    blog -->
    <section class="blog-page pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 blog-grid blog-grid-3 portfolio-wrap" data-isotope='{ "itemSelector": ".post-item", "layoutMode": "fitRows" }'>
                    <!-- Post item  with image-->
                    <?php
                        $blog  = new Blog();
                        $result   = $blog->get_blog_active();
                         if($result->rowCount()>0){
                            
                        foreach($result as $row)
                        {
                            $dateValue = $row['blog_date'];
                            $time=strtotime($dateValue);
                            $day=date("d",$time);
                            $month=date("F",$time);
                            $year=date("Y",$time);
                    ?>
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="blog-details.php?blog-details=<?php echo $row['blog_slug'];  ?>"> <img src="manage/app/upload/blog/<?php echo $row['blog_image']; ?>" alt=""> </a>
                                <span class="post-meta-category bg-grad"><a href="blog-details.php?blog-details=<?php echo $row['blog_slug'];  ?>"><?php echo $row['blog_category'];  ?></a></span>
                            </div>
                            <div class="post-item-desc">
                                 <span class="post-meta"><?php echo $month; echo ' '; echo $day; echo ', '; echo $year?></span>
                                 <!-- <span class="post-meta"><a href="#">Admin</a></span> -->
                                <!-- <span class="post-meta"><a href="#"><i class="ti-comment-alt"></i>06 Comments</a></span> -->
                                <h4><a href="blog-details.php?blog-details=<?php echo $row['blog_slug'];  ?>"><?php echo $row['blog_title'];?></a></h4>
                                <p><?php echo substr($row['blog_description'],0,220).'....';?></p>
                                <!-- <a href="blog-details.php?blog-details=<?php echo $row['blog_slug'];?>" class="btn btn-outline-primary">Continue reading<i class="ti-minus"></i></a> -->
                                <a href="blog-details.php?blog-details=<?php echo $row['blog_slug'];?>" class="btn btn-outline-primary">Continue reading</i></a>
                            </div>
                        </div>
                    </div>
                    <?php }

                        }
                        else{
                        echo "<h3>Blog not Found</h3>";
                        }
                     ?>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    blog -->


    <!-- =======================
    pagination -->
    <!-- <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"> <span class="page-link">Prev</span> </li>
                            <li class="page-item active"> <span class="page-link bg-grad"> 1 </span> </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =======================
    pagination -->

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
    <script src="assets/vendor/fitvids/jquery.fitvids.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <!--Template Functions-->
    <script src="assets/js/functions.js"></script>

</body>
</html>