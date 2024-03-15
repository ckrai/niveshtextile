<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/user-class.php';?>
<?php include 'manage/app/action/class/blog-class.php';?>
<?php $blog_id = $_GET['blog-details']; ?>
<?php
$blog  = new Blog();
$result   = $blog->get_blog_front($blog_id);
$row = $result->fetch(PDO::FETCH_ASSOC); ?>
<?php
$dateValue = $row['blog_date'];
$blogId    = $row['blog_id'];
$time      = strtotime($dateValue);
$day       = date("d",$time);
$month     = date("F",$time);
$year      = date("Y",$time);
?>
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

    <title>Varion Advisors | Blog Detail</title>
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
                    <h1 class="innerpage-title"><?php echo $row['blog_title'];?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="index"><i class="ti-home"></i> Home</a></li>
                            <li class="breadcrumb-item">Blog details</li>
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
                <!-- sidebar start -->
                <aside class="col-md-3 sidebar order-last order-md-first">
                    

                    <!-- Posts Widget -->
                    <div class="widget widget-post">
                        <h5 class="widget-title">Recent Posts</h5>
                         <?php
                            $blog      = new Blog();
                            $results   = $blog->get_blog_front3($blogId);
                            while($rows = $results->fetch(PDO::FETCH_ASSOC))
                            {
                                $dateValue = $rows['blog_date'];
                                $time      = strtotime($dateValue);
                                $day       = date("d",$time);
                                $month     = date("F",$time);
                                $year      = date("Y",$time);;
                            ?>
                        <div class="widget-post clearfix">
                            <div class="widget-image">
                                <img class="border-radius-3" src="manage/app/upload/blog/<?php echo $rows['blog_image']; ?>" alt="">
                            </div>
                            <div class="details">
                                <a href="blog-details.php?blog-details=<?php echo $rows['blog_slug'];  ?>"><?php echo $rows['blog_title'];?></a>
                                <span class="post-meta"><?php echo $month; echo ' '; echo $day; echo ', '; echo $year?></span>
                            </div>
                        </div>
                    <?php } ?>
                        
                    </div>

                    <!-- Tag Widget -->
                    <!--<div class="widget">-->
                    <!--    <h5 class="widget-title">Tags</h5>-->
                    <!--    <div class="tags">-->
                    <!--        <a href="#">studio</a>-->
                    <!--        <a href="#">events</a>-->
                    <!--        <a href="#">WordPress</a>-->
                    <!--        <a href="#">gadgets</a>-->
                    <!--        <a href="#">office</a>-->
                    <!--        <a href="#">magazine</a>-->
                    <!--        <a href="#">freebies</a>-->
                    <!--        <a href="#">photograpy</a>-->
                    <!--        <a href="#">updates</a>-->
                    <!--        <a href="#">creative</a>-->
                    <!--        <a href="#">travel</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </aside>
                <!-- sidebar end -->

                <!-- blog start -->
                <div class="col-md-9 mb-6 order-first order-md-first">
                    <!-- Post item  with image-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#"> <img src="manage/app/upload/blog/<?php echo $row['blog_image']; ?>" alt=""> </a>
                                <span class="post-meta-category bg-grad"><a href="#"><?php echo $row['blog_category'];  ?></a></span>
                            </div>
                            <div class="post-item-desc">
                                <span class="post-meta"><?php echo $month; echo ' '; echo $day; echo ', '; echo $year?></span>
                                <!-- <span class="post-meta"><a href="#">Admin</a></span> -->
                                <!-- <span class="post-meta"><a href="#"><i class="ti-comment-alt"></i>06 Comments</a></span> -->
                                <h5 class="mt-3"> <?php echo $row['blog_title'];?></h5>
                                <p><?php echo ($row['blog_description']);?></p>
                            </div>
                        </div>
                    </div>
                    <!-- blog End -->


                    <!-- tag and share -->
                    <div class="divider mb-4"></div>
                   

                   

                </div>
                <!-- blog End -->
            </div>
        </div>
    </section>
    <!-- =======================
    blog -->


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

    <!--Template Functions-->
    <script src="assets/js/functions.js"></script>

</body>
</html>