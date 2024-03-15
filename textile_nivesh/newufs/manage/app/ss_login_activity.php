<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/property-class.php';?>

<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
<!-- Date Time item CSS -->
<link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
<script
   src="https://code.jquery.com/jquery-3.3.1.min.js"
   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
   crossorigin="anonymous"></script>
<meta name="description" content="IAS" />
<meta name="author" content="Varion Advisors" />
<title>Activity</title>
<!-- start page content -->
<div class="page-content-wrapper">
   <div class="page-content">
      <div class="page-bar">
         <div class="page-title-breadcrumb"> 
            <div class=" pull-left">
               <div class="page-title">Login Activity List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Login Activity List</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card card-box">
               <div class="card-head">
                  <header>List</header>
                  <div class="tools">
                     <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                     <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                     <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                  </div>
               </div>
               <div class="card-body ">
                  <div class="table-scrollable">
                     <table class="table table-hover table-checkable order-column full-width" id="example4">
                        <thead>
                           <tr>
                              <th class="center"> S.No.</th>
                              <th class="center"> Email </th>
                              <th class="center">IP Address</th>
                              <th class="center">Login Device</th>
                              <th class="center">Login City</th>
                              <th class="center">Login Country</th>
                              
                      </tr>
                        </thead>
                        <tbody>
                           <?php
                            $role = new Property();
                            $result = $role->get_login_activity();
                            $i=0;
                           foreach($result as $row)
                            {
                              $i++;
                              $active      = $row['l_status'];
                              $id          = $row['l_id'];
                           
                           ?>
                           <tr class="odd gradeX">
                              <td class="center"><?php echo $i; ?></td>
                              <td class=""><?php echo $row['l_email'];?></td>
                              <td class=""><?php echo $row['l_remote_ip'];?></td>
                              <td class=""><?php echo $row['l_bos'];?></td>
                              <td class=""><?php echo $row['l_city'];?></td>
                              <td class=""><?php echo $row['l_country'];?></td>
                           </tr>
                            <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
        
      </div>
   </div>
   <!-- end page content -->
</div>
<!-- end page container -->

<script  src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
<script  src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
<script  src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
<!--tags input-->
<?php require_once("app_include/app_footer.php"); ?>