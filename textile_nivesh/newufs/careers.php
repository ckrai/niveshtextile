<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/user-class.php';?>
<?php include 'manage/app/action/class/careers-class.php';?>
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

    <title>Varion Advisors | Careers</title>
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
                    <h1 class="innerpage-title">Careers</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="index"><i class="ti-home"></i> Home</a></li>
                            <li class="breadcrumb-item">Careers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- =======================
    Banner innerpage -->

    <!-- =======================
    Benefits -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 align-self-center ">
                    <div class="title text-left">
                        <h2>What you can expect?</h2>
                        <p class="p-0 mb-0">Benefits are the rewards that go beyond the paycheck. We offer a selection of benefits that meet our employees’ needs and expectations at different life stages. Examples of benefits at Varion Advisors Analytics are retirement benefits, health care, and accident insurance. This is a great opportunity to work with a leading organization in the construction industry! </p>
                    </div>
                    <div class="list-group-inline list-group-number list-unstyled mb-5 mb-lg-0">
                        <a href="#" class="list-group-item list-group-item-action"><span>1</span> Career Development</a>
                        <a href="#" class="list-group-item list-group-item-action"><span>2</span> Future Provision</a>
                        <a href="#" class="list-group-item list-group-item-action"><span>3</span> Flexible Working Hours </a>
                        <a href="#" class="list-group-item list-group-item-action"><span>4</span> Health & Fitness </a>
                        <a href="#" class="list-group-item list-group-item-action"><span>5</span> Employee Gifts </a>
                        <a href="#" class="list-group-item list-group-item-action"><span>6</span> Welcome Aboard </a>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 mx-md-auto align-self-center ">
                    <img class="rounded" src="assets/images/service/vaa_careers.jpg" alt="">
                    <div class="position-absolute left-0 bottom-0 ml-4 ml-md-n2 mb-3">
                        <a class="btn btn-grad" data-fancybox="" href="https://youtu.be/n_Cn8eFo7u8"> <i class="fa fa-play text-white"></i>Play Video </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Benefits -->

    <hr class="mb-0">

    <!-- =======================
    careers -->
    <section>
        <div class="container">
            <div class="row">
                <!-- Job positions -->
                <div class="col-md-8">
                    <h2 class="mb-2">Job positions</h2>
                    <p>like what you saw? If you're ready to test your earning potential, join us today and become the latest member of team Varion Advisors Analytics.</p>
                    <div class="accordion accordion-line toggle-icon-left toggle-icon-round" id="accordion1">
                        <?php
                        $careers    = new Careers();
                        $result     = $careers->get_careers_web();
                        $i=0;
                        while($row = $result->fetch(PDO::FETCH_ASSOC))
                        {
                            $cId = $row['career_id'];

                            if ($i==1) {
                               $a='show';
                               $collapsed='';
                            }
                            else{
                                $a='';
                                $collapsed='collapsed';
                            }

                        ?>
                        <!-- item -->
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <h6><a class="<?php echo $collapsed;?>" data-toggle="collapse" href="#collapse-<?php echo $row['career_id']; ?>"><?php echo $row['career_title']; ?></a></h6></div>
                            <div class="collapse <?php echo $a;?>" id="collapse-<?php echo $row['career_id']; ?>" data-parent="#accordion1">
                                <div class="accordion-content">
                                    <p class="pt-2"><?php echo $row['career_description']; ?></p>
                                    <h6 class="mb-2">Location: <?php echo $row['career_location']; ?></h6>
                                    <a class="d-block" href="contact.php">Apply</a>
                                </div>
                            </div>
                        </div>
                      <?php } ?>
                        <!-- item -->
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-6">Other</a>
                            </div>
                            <div class="collapse" id="collapse-6" data-parent="#accordion1">
                                <div class="accordion-content">
                                    <p class="pt-2">Join a Varion Advisors Analytics start up in the IT industry. We provide a number of services to our clients in both England and Australia. Our services ensures our clients achieves energy efficiencies, accurate reporting whilst saving time. </p>
                                    <h6 class="mb-2">Location: Kanpur</h6>
                                    <a class="d-block" href="contact.php">Apply</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4 sidebar">
                    <!-- <h2>Refine your search</h2> -->
                    <div class="widget widget-newsletter border-0 p-0">
                        <ul class="list-group border-0 mb-4">
                            <!--<li class="d-flex align-items-center font-weight-bold text-light-gray">Available jobs <span class="badge bg-light badge-pill ml-2"></span>-->
                            <!--</li>-->
                        </ul>
                        <!-- <form>
                            <div class="input-group mb-3">
                                <input class="form-control border-radius-right-0 border-right-0" type="text" name="search" placeholder="Search">
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-grad border-radius-left-0 mb-0"><i class="ti-search m-0"></i></button>
                            </span>
                            </div>
                        </form>
                        <select class="custom-select select-big mb-3">
                        <option selected="">All locations</option>
                        <option value="location1">Chicago, US</option>
                        <option value="location2">New York, US</option>
                        <option value="location3">Seattle/Kirkland, US</option>
                        <option value="location4">Los Angles, US</option>
                        <option value="location5">Moscow, Russia</option>
                        <option value="location6">Sydney, Australia</option>
                        <option value="location7">Birmingham, UK</option>
                        <option value="location7">Manchester, UK</option>
                        <option value="location8">Beijing, China</option>
                    </select>
                        <select class="custom-select select-big">
                        <option selected="">All locations</option>
                        <option value="location1">Chicago, US</option>
                        <option value="location2">New York, US</option>
                        <option value="location3">Seattle/Kirkland, US</option>
                        <option value="location4">Los Angles, US</option>
                        <option value="location5">Moscow, Russia</option>
                        <option value="location6">Sydney, Australia</option>
                        <option value="location7">Birmingham, UK</option>
                        <option value="location7">Manchester, UK</option>
                        <option value="location8">Beijing, China</option>
                    </select> -->
                    </div>
                    <div class="widget bg-light border-0 p-3 border-radius-3">
                        <h4>Have any question? </h4>
                        <p>If you need to send us mail regarding job opportunities, please write to us at <a class="text-primary" href="#">hr@varionadvisors.com</a></p> or call us <a class="display-8 text-dark primary-hover" href="#">+91- 965 130 4049</a>
                    </div>
                </div>
                <!-- Sidebar end-->

            </div>
        </div>
    </section>
    <!-- =======================
    careers -->

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

    <!--Template Functions-->
    <script src="assets/js/functions.js"></script>

</body>
</html>