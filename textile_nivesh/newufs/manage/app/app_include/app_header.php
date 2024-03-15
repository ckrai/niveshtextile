<?php require_once("session.php");?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <!-- google font -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
      <!-- icons -->
      <link href="../assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!--bootstrap -->
      <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
      <!-- morris chart -->
      <link href="../assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
      <!-- dropzone -->
      <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
       <!-- data tables -->
      <link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
      <!-- Material Design Lite CSS -->
      <link rel="stylesheet" href="../assets/plugins/material/material.min.css">
      <link rel="stylesheet" href="../assets/css/material_style.css">
      <!-- animation -->
      <link href="../assets/css/pages/animate_page.css" rel="stylesheet">
      <!-- Template Styles -->
      <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
      <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
      <link href="../assets/css/theme-color.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="../assets/plugins/jquery-toast/dist/jquery.toast.min.css">
        <!-- Date Time item CSS -->
    <link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
      <!-- favicon -->
      <link rel="shortcut icon" href="../assets/img/logo.png" />
      <script>
         setInterval(function() {
           var currentTime = new Date ( );    
           var cdate = currentTime.getDate();
           var cmonth = currentTime.getMonth()+1; 
           var cyear = currentTime.getFullYear(); 
           var currentHours = currentTime.getHours ( );   
           var currentMinutes = currentTime.getMinutes ( );   
           var currentSeconds = currentTime.getSeconds ( );
               currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
               currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
           var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
               currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
               currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
           var currentTimeString =cdate + "-" + cmonth + "-" + cyear + " | " + currentHours + ":" +  currentMinutes + ":" + currentSeconds + " " + timeOfDay;
           document.getElementById("ch_date").innerHTML = currentTimeString;
         }, 1000);
      </script>
   </head>
   <!-- END HEAD -->
   <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
      <div class="page-wrapper">
      <!-- start header -->
      <div class="page-header navbar navbar-fixed-top">
         <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
               <a href="home">
               <!-- <img alt="" src="../assets/img/logo.png"> -->
               <span class="logo-default" >Varion Advisors</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
               <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>
            <form class="search-form-opened" action="#" method="GET">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search..." name="query">
                  <span class="input-group-btn search-btn">
                  <a href="javascript:;" class="btn submit">
                  <i class="icon-magnifier"></i>
                  </a>
                  </span>
               </div>
            </form>
            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
               <ul class="nav navbar-nav pull-right">
                  <li class="dropdown message-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <span id="ch_date">
                     </span>
                     </a>
                  </li>
                 
                  <!-- start manage user dropdown -->
                  <li class="dropdown dropdown-user">
                     <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <!-- <img alt="" class="img-circle " src="../assets/img/dp.jpg" /> -->
                        <?php
                           if(empty($_SESSION['profile_pic']))
                             {?>
                        <img alt="User Image" class="img-circle" src="upload/user/images.png" />
                        <?php }
                           else
                             {
                               $img = $_SESSION["profile_pic"];
                               echo '<img src="upload/user/' . $img . '"' .' class="img-circle" alt="User Image">';     
                               }
                             ?> 
                        <span class="username username-hide-on-mobile"> <?php echo $_SESSION['name']; ?> </span>
                        <i class="fa fa-angle-down"></i>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-default animated jello">
                        <li>
                           <a href="user_profile">
                           <i class="icon-user"></i> Profile </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                           <a href="logout">
                           <i class="icon-logout"></i> Log Out </a>
                        </li>
                     </ul>
                  </li>
                  <!-- end manage user dropdown -->
               </ul>
            </div>
         </div>
      </div>
      <!-- end header -->