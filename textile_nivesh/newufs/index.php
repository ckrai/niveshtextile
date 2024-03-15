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

   <title>Varion Advisors | Home</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="Varion Advisors Analytics">
   <meta name="description" content="VAA, vaa, Vaa, VAA Lucknow, vaa lucknow, Vaa Lko, Varion Advisors Analytics, Best data analytics company in Lucknow">

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
   <link rel="stylesheet" type="text/css" href="assets/vendor/swiper/css/swiper.min.css" />

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
   Main Banner -->
   <section class="p-0">
      <div class="swiper-container height-700-responsive swiper-arrow-hover swiper-slider-fade">
         <div class="swiper-wrapper">
            <!-- slide 1-->
            <div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/vaa_banner_one.jpg); background-position: center center; background-size: cover;">
               <div class="container h-100">
                  <div class="row d-flex h-100">
                     <div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
                        <h2 class="animated fadeInUp dealy-500 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Innovative solutions for a smarter future</h2>
                        <h3 class="animated fadeInUp dealy-1000 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Transforming businesses with cutting-edge technology.</h3>
                        <!-- <div class="animated fadeInUp mt-3 dealy-1500"><a href="#" class="btn btn-grad">Purchase Now!</a> <a href="#" class="btn btn-link text-white">Check live demo!</a></div> -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- slide 2-->
            <div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/vaa_banner_two.jpg); background-position: center center; background-size: cover;">
               <div class="container h-100">
                  <div class="row d-flex h-100">
                     <div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
                        <h2 class="animated fadeInUp dealy-500 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Technology that adapts to your needs</h2>
                        <h3 class="animated fadeInUp dealy-1000 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Empowering the businesses with advanced technology</h3>
                        <!-- <div class="animated fadeInUp mt-3 dealy-1500"><a href="#" class="btn btn-grad">Purchase Now!</a> <a href="#" class="btn btn-link text-white">Check live demo!</a></div> -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- slide 3-->
            <div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/vaa_banner_three.jpg); background-position: center center; background-size: cover;">
               <div class="container h-100">
                  <div class="row d-flex h-100">
                     <div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
                        <h2 class="animated fadeInUp dealy-500 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Your partner for digital transformation</h2>
                        <h3 class="animated fadeInUp dealy-1000 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Engineering the future, one solution at a time</h3>
                        <!-- <div class="animated fadeInUp mt-3 dealy-1500"><a href="#" class="btn btn-grad">Purchase Now!</a> <a href="#" class="btn btn-link text-white">Check live demo!</a></div> -->
                     </div>
                  </div>
               </div>
            </div>     
            <!-- slide 4-->
            <div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/vaa_banner_four.jpg); background-position: center center; background-size: cover;">
               <div class="container h-100">
                  <div class="row d-flex h-100">
                     <div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
                        <h2 class="animated fadeInUp dealy-500 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Smart solutions for complex problems</h2>
                        <h3 class="animated fadeInUp dealy-1000 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Creating intelligent solutions to drive your success</h3>
                        <!-- <div class="animated fadeInUp mt-3 dealy-1500"><a href="#" class="btn btn-grad">Purchase Now!</a> <a href="#" class="btn btn-link text-white">Check live demo!</a></div> -->
                     </div>
                  </div>
               </div>
            </div>     
            
            
         </div>
         <!-- Slider buttons -->
         <div class="swiper-button-next"><i class="ti-angle-right"></i></div>
         <div class="swiper-button-prev"><i class="ti-angle-left"></i></div>
         <div class="swiper-pagination"></div>
      </div>
   </section>
   <!-- =======================Main banner -->

   <!-- =======================about us  -->
   <section>
      <div class="container">
         <div class="row justify-content-between align-items-center">
            <!-- left -->
            <div class="col-md-6">
               <div class="row mt-4 mt-md-0">
                  <div class="col-5 offset-1 px-2 mb-3 align-self-end">
                     <img class="border-radius-3 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" src="assets/images/service/vaa_services_one.png" alt="">
                  </div>
                  <div class="col-6 px-2 mb-3">
                     <img class="border-radius-3 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.6s" src="assets/images/service/vaa_services_two.png" alt="">
                  </div>
                  <div class="col-7 px-2 mb-3">
                     <div class="border-radius-3 wow fadeInLeft bg-grad p-2 p-sm-3 p-lg-4 p-xl-5 all-text-white" data-wow-duration="0.8s" data-wow-delay="0s">
                        <span>Our goal:</span>
                        <h4 class="font-weight-bold">"Smart solutions for complex problems"</h4>
                     </div>
                  </div>
                  <div class="col-5 align-self-start pl-2 mb-3">
                     <img class="border-radius-3 wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s" src="assets/images/service/vaa_services_three.png" alt="">
                  </div>
               </div>
            </div>
            <!-- right -->
            <div class="col-md-6 pl-lg-5">
               <h2 class="h1">Unlocking the Power of Technology for Businesses</h2>
               <p class="lead">Our innovative solutions unleash the potential of technology to drive your business forward,  <abbr title="title">empowering you to achieve your goals with ease</abbr></p>
               <p>There is nothing that can stop you from achieving what you want, except yourself. If you devote yourself to it you will achieve your goal.</p>
               <div>
                  <a href="contact" class="btn btn-dark">Contact us</a>
                  <!-- <a href="portfolio" class="btn btn-link">View Portfolio</a> -->
                  <a href="#" class="btn btn-link">View Portfolio</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =======================about us  -->

   <!-- =======================why-us -->
   <section class="why-us p-0">
      <div class="container">
         <div class="row no-gutters">
            <!--why us left-->
            <div class="col-lg-6 d-none d-lg-block bg-light" style="background:url(assets/images/bg/05.jpg) no-repeat; background-size:cover;">
            </div>
            <!--why us right-->
            <div class="col-lg-6 col-md-12 bg-grad px-4 py-5 p-lg-5 all-text-white">
               <div class="h-100">
                  <div class="title text-left p-0">
                     <span class="pre-title">Experience you can trust</span>
                     <h2>We provide the best solutions for your business needs!</h2>
                     <p>Our team of experts leverages the latest technologies to design and implement custom solutions tailored to each client's unique needs. We offer a range of services that empower businesses to stay ahead of the competition and drive success.</p>
                  </div>
                  <div class="row">
                     <div class="col">
                        <ul class="list-group list-group-borderless text">
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>Artificial Intelligence</li>
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>Machine Learning</li>
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>Cloud Computing</li>
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>Data Analytics</li>
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>Blockchain</li>
                        </ul>
                     </div>
                     <div class="col">
                        <ul class="list-group list-group-borderless text">
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>App Development</li>
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>Web Development</li>
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>Cybersecurity</li>
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>VR/AR</li>
                           <li class="list-group-item text-white"><i class="fa fa-check"></i>IoT</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- why-us
   =======================  -->

   <!-- =======================
   service -->
   <section class="service">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
               <div class="title text-center">
                  <span class="pre-title">Transform your business with us</span>
                  <h2>Results-driven technology services</h2>
                  <p class="mb-0">Our cutting-edge technology services are designed to help your business achieve its goals by delivering innovative solutions that are tailored to your unique needs and drive measurable results.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 mt-30">
               <div class="feature-box f-style-2 icon-grad h-100">
                  <div class="feature-box-icon"><i class="ti-agenda"></i></div>
                  <h3 class="feature-box-title">Artificial Intelligence</h3>
                  <p class="feature-box-desc">Artificial Intelligence (AI) is the simulation of human intelligence in machines, enabling them to perform tasks that typically require human cognition, such as learning, problem-solving, decision-making, and language processing. AI has a range of applications, from virtual assistants to self-driving cars and medical diagnosis.</p>
                  <!-- <a class="mt-3" href="#">Know more!</a> -->
               </div>
            </div>
            <div class="col-md-4 mt-30">
               <div class="feature-box f-style-2 icon-grad h-100">
                  <div class="feature-box-icon"><i class="ti-agenda"></i></div>
                  <h3 class="feature-box-title">Machine Learning</h3>
                  <p class="feature-box-desc">Machine learning is a field of Artificial Intelligence that uses statistical algorithms to enable computer systems to improve their performance on specific tasks through experience, without being explicitly programmed. It has a range of applications, from image recognition to natural language processing and predictive analytics.</p>
                  <!-- <a class="mt-3" href="#">Know more!</a> -->
               </div>
            </div>
            <div class="col-md-4 mt-30">
               <div class="feature-box f-style-2 icon-grad h-100">
                  <div class="feature-box-icon"><i class="ti-agenda"></i></div>
                  <h3 class="feature-box-title">Cloud computing</h3>
                  <p class="feature-box-desc">Cloud computing is a technology that allows users to access and store data, applications, and services over the Internet, instead of on local hardware. It provides scalable, flexible, and cost-effective solutions for businesses of all sizes, enabling them to streamline their operations and increase efficiency.</a>
               </div>
            </div>
            <div class="col-md-4 mt-30">
               <div class="feature-box f-style-2 icon-grad h-100">
                  <div class="feature-box-icon"><i class="ti-agenda"></i></div>
                  <h3 class="feature-box-title">Blockchain</h3>
                  <p class="feature-box-desc">Blockchain is a decentralized, distributed ledger technology that provides a secure and transparent way to record and verify transactions without the need for intermediaries. It has the potential to transform industries, from finance and healthcare to logistics and supply chain management, by enabling trust, transparency, and efficiency.</a>
               </div>
            </div>
            <div class="col-md-4 mt-30">
               <div class="feature-box f-style-2 icon-grad h-100">
                  <div class="feature-box-icon"><i class="ti-agenda"></i></div>
                  <h3 class="feature-box-title">App Development</h3>
                  <p class="feature-box-desc">App development involves the creation of mobile applications for various platforms, such as iOS and Android, to meet user needs and provide solutions for businesses across industries. It includes design, coding, testing, and deployment of mobile apps, and requires expertise in programming, user experience design, and quality assurance.</a>
               </div>
            </div>
            <div class="col-md-4 mt-30">
               <div class="feature-box f-style-2 icon-grad h-100">
                  <div class="feature-box-icon"><i class="ti-agenda"></i></div>
                  <h3 class="feature-box-title">Web Development</h3>
                  <p class="feature-box-desc">Web development involves the creation of websites and web applications using various programming languages and frameworks. It includes designing and developing web pages, adding functionality, and ensuring security and performance. Web developers use HTML, CSS, JavaScript, and other technologies to create responsive and user-friendly web experiences.</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =======================
   service -->



   <!-- =======================
   client -->
   <section class="client pt-0 ">
      <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
               <div class="title text-center">
               
                  <h2>Our Certification</h2>
                 
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="owl-carousel owl-grab arrow-hover arrow-gray" data-margin="80" data-arrow="true" data-dots="false" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3" data-items-xs="2" data-autoplay="3000">
                  <?php
                   $client    = new Property();
                   $result    = $client->get_client_frnt();
                   while($row = $result->fetch(PDO::FETCH_ASSOC))
                   {

                   ?>
                  <div class="item"><img src="manage/app/upload/clients/<?php echo $row['client_image']; ?>" alt="<?php echo $row['client_image']; ?>"></div>
               <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =======================
   client -->

   <!-- =======================
   Testimonials -->
   <section class="bg-light">
      <div class="container">
         <div class="owl-carousel owl-grab arrow-hover dots-dark" data-arrow="false" data-dots="true" data-items="1" data-autoplay="5000">
            <!-- item 1 -->
            <div class="item mb-3">
               <div class="row">
                  <div class="col-md-10 col-lg-6 mx-md-auto align-self-center">
                     <div class="text-left">
                        <h2>Leading the way in innovation, growth, and client satisfaction.</h2>
                        <p class="mb-0 lead">"With our unparalleled expertise in cutting-edge technologies, we create captivating and transformative solutions that exceed client expectations and fuel business growth."</p>
                        <div class="d-flex mt-3">
                           <h6 class="align-self-start mr-3"><img class="rounded-circle" src="assets/images/thumbnails/jyotishree-pandey.jpg" alt="avatar"></h6>
                           <div class="align-self-center">
                              <h5 class="mb-2">Dr Jyotishree Pandey</h5>
                              <p>Director, Varion Advisors Analytics</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 col-lg-6 mx-md-auto align-self-center mt-4 mt-lg-0">
                     <img class="rounded" src="assets/images/bg/small/02.jpg" alt="">
                     <div class="position-absolute left-0 bottom-0 ml-4 ml-md-n2 mb-3">
                        <a class="btn btn-grad" data-fancybox href="https://youtu.be/n_Cn8eFo7u8"> <i class="fa fa-play text-white"></i>Play Video </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- item 2 -->
            <div class="item mb-3">
               <div class="row">
                  <div class="col-md-10 col-lg-6 mx-md-auto align-self-center">
                     <div class="text-left">
                        <h2>Inspiring innovation, achieving extraordinary success</h2>
                        <p class="mb-0 lead">"As the director, I am privileged to lead a company that continuously surpasses expectations, drives innovation, and achieves remarkable success."</p>
                        <div class="d-flex mt-3">
                           <h6 class="align-self-start mr-3"><img class="rounded-circle" src="assets/images/thumbnails/jyotishree-pandey.jpg" alt="avatar"></h6>
                           <div class="align-self-center">
                              <h5 class="mb-2">Dr Jyotishree Pandey</h5>
                              <p>Director, Varion Advisors Analytics</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 col-lg-6 mx-md-auto align-self-center mt-4 mt-lg-0">
                     <img class="rounded" src="assets/images/bg/small/01.jpg" alt="">
                     <div class="position-absolute left-0 bottom-0 ml-4 ml-md-n2 mb-3">
                        <a class="btn btn-grad" data-fancybox href="https://youtu.be/n_Cn8eFo7u8"> <i class="fa fa-play text-white"></i>Play Video </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =======================
   Testimonials -->


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
   <script src="assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>
   <script src="assets/vendor/swiper/js/swiper.js"></script>
   <script src="assets/vendor/wow/wow.min.js"></script>

   <!--Template Functions-->
   <script src="assets/js/functions.js"></script>

</body>
</html>