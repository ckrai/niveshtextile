<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php $client_id = $_GET['client']; ?>
<?php is_logged_in(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Certificate Update</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
<!-- Date Time item CSS -->
<link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />

<script
   src="https://code.jquery.com/jquery-3.3.1.min.js"
   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
   crossorigin="anonymous"></script>
<meta name="Dr Vinay Kumar Singh" content="22624" />
<meta name="Dr Vinay Kumar Singh" content="AZ Latest Bloging" />
<style type="text/css">
        .submit-loading{
          font-size: 30px;
          color: green;
        }
      </style>
</head>
<body>
<div class="page-content-wrapper">
   <div class="page-content">
      <div class="page-bar">
         <div class="page-title-breadcrumb"> 
            <div class=" pull-left">
               <div class="page-title">Certificate Update</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Certificate Update</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card card-box">
               <div class="card-head">
                  <header>Certificate Update</header>
               </div>
                <?php
                $client = new Property();
                $result = $client->get_client_details($client_id);
                $i=0;
                foreach($result as $row)
                {

                $active      = $row['client_status'];
                $id          = $row['client_id'];

                ?>
               <div class="card-body">
                  <form id="update_client" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Certificate Name</label>
                          <input type="text" class="form-control" name="client_name" id="client_name" placeholder="Enter Certificate Name" value="<?php echo $row['client_name']; ?>">
                        </div>
                    </div>
                   
                    <div class="row">
                       <div class="form-group col-md-12">
                          <label for="articles_discreption">Certificate Image</label>
                          <input type="file" class="form-control" name="file" id="file">
                          </textarea>
                       </div>
                    </div> 

                     <input type="hidden" name="image" id="image" value="<?php echo $row['client_image'];?>">
                    <input type="hidden" name="token" id="" value="<?php echo $token; ?>">
                    <input type="hidden" name="clientid" id="clientid" value="<?php echo $row['client_id']; ?>">
                     <button type="submit" id="submit"  class="btn btn-primary">Submit</button>
                  </form>
               </div>
            </div>
         </div>
       
        <?php   }?>
      </div>
   </div>
   <!-- end page content -->
</div>


  

<script  src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
<script  src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
<script  src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
<!--tags input-->
<?php require_once("app_include/app_footer.php"); ?>
<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
    $('#update_client')[0].reset();
       $(document).on('submit', '#update_client', function(e){
           e.preventDefault();
           e.preventDefault();
            $elm=$(".btn-primary");
           $elm.hide();
           $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
           var clientid           = $('#clientid').val();
           var client_name        = $('#client_name').val();
         $.ajax({
             url:"action/edit_client_type",
             method:'POST',
             data:new FormData(this),
             contentType:false,
             processData:false,
                 success: function (data)
               {
                alert(data);
                $(".submit-loading").remove();
                       $elm.show();
                var data = jQuery.parseJSON(data);

                 if( data.valid == 1)
                {
                 success_noti(data.message);
                 setTimeout(function(){
                   location.href = 'add_clients';
                 }, 1000);
                
                 return false;  
                }
               else
                {
                 warning_noti(data.message);
                 return false;
                }   
         }
         });
          
       });
   });
   
</script>
</body>
</html>