<?php require_once("app_include/session.php");?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php require_once("app_include/function.php");?>
<?php include 'action/class/dashboard-class.php';?>

<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>
<meta name="description" content="" />
<meta name="author" content="Varion Advisors" />
<title>Varion Advisors | Home</title>
<!-- start page content -->
<div class="page-content-wrapper">
   <div class="page-content" style="min-height: 700px !important;">
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Dashboard</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Dashboard</li>
            </ol>
         </div>
      </div>
      <!-- start widget -->
      <div class="state-overview">
         <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
               
               <a href="add_project"><div class="info-box bg-success">
                  <span class="info-box-icon push-bottom"><i class="material-icons">gavel</i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">Projects Web</span>
                     <span class="info-box-number">
                         <?php 
                          $projects  = new Dashboard();
                          $result    = $projects->get_total_project_web();
                          echo $result;
                          ?>
                     </span>
                     <div class="progress">
                        <div class="progress-bar width-100"></div>
                     </div>
                     <span class="progress-description">
                      10%
                     </span>
                  </div>
                  <!-- /.info-box-content -->
               </div>
               </a>
               <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
             
               <a href="#"><div class="info-box bg-orange">
                  <span class="info-box-icon push-bottom"><i class="material-icons">library_books</i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">Projects App</span>
                     <span class="info-box-number"> <?php 
                          $projects  = new Dashboard();
                          $result    = $projects->get_total_project_app();
                          echo $result;
                          ?></span>
                     <div class="progress">
                        <div class="progress-bar width-100"></div>
                     </div>
                     <span class="progress-description">
                     52%
                     </span>
                  </div>
                  <!-- /.info-box-content -->
               </div>
            </a>
               <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
              
               <a href="add_team"><div class="info-box bg-info">
                  <span class="info-box-icon push-bottom"><i class="material-icons">feedback</i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">Team</span>
                     <span class="info-box-number"><?php 
                          $team  = new Dashboard();
                          $result    = $team->get_team_number();
                          echo $result;
                          ?></span>
                     <div class="progress">
                        <div class="progress-bar width-100"></div>
                     </div>
                     <span class="progress-description">
                     10%
                     </span>
                  </div>
                  <!-- /.info-box-content -->
               </div>
            </a>
               <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-xl-3 col-md-6 col-12">
              
               <a href="ss_activity"><div class="info-box bg-danger">
                  <span class="info-box-icon push-bottom"><i class="material-icons">feedback</i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">Blog</span>
                     <span class="info-box-number"><?php 
                          $blog  = new Dashboard();
                          $result    = $blog->get_blog_number();
                          echo $result;
                          ?></span>
                     <div class="progress">
                        <div class="progress-bar width-100"></div>
                     </div>
                     <span class="progress-description">
                     120%
                     </span>
                  </div>
                  <!-- /.info-box-content -->
               </div>
            </a>
               <!-- /.info-box -->
            </div>
            <!-- /.col -->
         </div>

      <!-- end widget -->
      <div class="row">
         <div class="col-md-4 col-sm-12 col-12">
            <div class="card  card-box">
               <div class="card-head">
                  <header>Contact/Message</header>
               </div>
               <div class="card-body no-padding height-9">
                   <div class="row">
                     <div class="noti-information notification-menu">
                        <div class="notification-list mail-list not-list small-slimscroll-style">
                           <?php
                              $contact  = new Dashboard();
                              $result = $contact->get_msg_home();
                              if($result->rowCount() > 0)
                              { 
                                $i=0;
                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                                 $c_date        = $row['con_date'];
                                 $con_date  = date('d/m/Y',strtotime($c_date));
                                 
                                
                              ?>
                           <a href="javascript:;" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-globe"></i>
                           </span> <span class="text-purple"><?php echo $row['con_subject']; ?></span> <?php echo $con_date; ?>
                           <span class="notificationtime">
                           <small>  </small>
                           </span>
                           </a>
                           <?php } } else{ ?>
                           <a href="javascript:;" class="single-mail"> <span class="icon bg-warning"> <i class="fa fa-warning"></i>
                           </span> <strong>No Contact Available!</strong>
                           </a>
                           <?php } ?>
                        </div>
                        <div class="full-width text-center p-t-10" >
                           <a href="contact_list" class="btn purple btn-outline btn-circle margin-0">View All</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-12">
            <div class="card  card-box">
               <div class="card-head">
                  <header>Team</header>
               </div>
               <div class="card-body no-padding height-9">
                  <div class="row">
                     <div class="noti-information notification-menu">
                        <div class="notification-list mail-list not-list small-slimscroll-style">
                           <?php
                              $team  = new Dashboard();
                              $result = $team->get_team_home();
                              if($result->rowCount() > 0)
                              { 
                                $i=0;
                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                                 $u_name        = $row['team_name'];
                                 $team_position = $row['team_position'];
                              ?>
                           
                           <a href="javascript:;" class="single-mail"> 
                           <span class="icon" style="width: 26%;height: 10%;"> 
                           <img src="upload/team/<?php echo $row['team_image'];?>" class="img-circle" alt="User Image" style="height: 50px;width: 50px;">
                           </span>
                           <span class="text-purple"><?php echo $u_name; ?></span> <?php echo $team_position; ?>
                           <span class="notificationtime">
                           </span>
                           </a>
                           <?php } } else{ ?>
                           <a href="javascript:;" class="single-mail"> <span class="icon bg-warning"> <i class="fa fa-warning"></i>
                           </span> <strong>No Team Available!</strong>
                           </a>
                          <?php } ?>
                        </div>
                        <div class="full-width text-center p-t-10" >
                           <a href="add_team" class="btn purple btn-outline btn-circle margin-0">View All</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-12">
            <div class="card  card-box">
               <div class="card-head">
                  <header>Project</header>
               </div>
               <div class="card-body no-padding height-9">
                  <div class="row">
                     <div class="noti-information notification-menu">
                        <div class="notification-list mail-list not-list small-slimscroll-style">
                           <?php
                              $project  = new Dashboard();
                              $result = $project->get_project_home();
                              if($result->rowCount() > 0)
                              { 
                                $i=0;
                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                                
                              ?>
                           
                           <a href="javascript:;" class="single-mail"> 
                           <span class="icon" style="width: 26%;height: 10%;"> 
                           <img src="upload/project/<?php echo $row['project_image'];?>" class="img-circle" alt="User Image" style="height: 50px;width: 50px;">
                           </span>
                           <span class="text-purple"><?php echo $row['project_title'] ?></span> <?php echo $row['project_type'] ?>
                           <span class="notificationtime">
                           <small>
                          
                           </small>
                           </span>
                           </a>
                            <?php } } else{ ?>
                          
                           <a href="javascript:;" class="single-mail"> <span class="icon bg-warning"> <i class="fa fa-warning"></i>
                           </span> <strong>No Project Available!</strong>
                           </a>
                           <?php } ?>
                          
                        </div>
                        <div class="full-width text-center p-t-10" >
                           <a href="add_project" class="btn purple btn-outline btn-circle margin-0">View All</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require_once("app_include/app_footer.php"); ?>
