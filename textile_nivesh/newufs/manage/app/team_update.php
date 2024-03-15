<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php $team_id = $_GET['team']; ?>
<?php is_logged_in(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Team Update</title>
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
               <div class="page-title">Team Update</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Team Update</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card card-box">
               <div class="card-head">
                  <header>Update Member</header>
               </div>
                <?php
                $team   = new Property();
                $result = $team->get_team_details($team_id);
                $i=0;
                foreach($result as $row)
                {

                $active      = $row['team_status'];
                $id          = $row['team_id'];

                ?>
               <div class="card-body">
                  <form id="teamupdate" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?php echo $row['team_name']; ?>">
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Position</label>
                          <input type="text" class="form-control" name="position" id="position" placeholder="Enter Position" value="<?php echo $row['team_position']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Experience</label>
                          <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter Experiance" value="<?php echo $row['team_experience']; ?>">
                        </div>
                    </div>
                    
                    <div class="row">
                       <div class="form-group col-md-12">
                          <label for="articles_discreption">Team Image</label>
                          <input type="file" class="form-control" name="file" id="file">
                          </textarea>
                       </div>
                    </div> 

                      <div class="row">
                       <div class="form-group col-md-12">
                          <label for="articles_discreption">Team Description</label>
                          <textarea class="form-control" name="team_description" id="team_description"><?php echo $row['team_description']; ?></textarea>
                          </textarea>
                       </div>
                    </div>
                     <input type="hidden" name="image" id="image" value="<?php echo $row['team_image'];?>">
                    <input type="hidden" name="token" id="" value="<?php echo $token; ?>">
                    <input type="hidden" name="teamid" id="teamid" value="<?php echo $row['team_id']; ?>">
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
    $('#teamupdate')[0].reset();
       $(document).on('submit', '#teamupdate', function(e){
           e.preventDefault();
           e.preventDefault();
            $elm=$(".btn-primary");
           $elm.hide();
           $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
           var teamid            = $('#teamid').val();
           var name              = $('#name').val();
           var position          = $('#position').val();
      
         $.ajax({
             url:"action/edit_team_type",
             method:'POST',
             data:new FormData(this),
             contentType:false,
             processData:false,
                 success: function (data)
               {
                $(".submit-loading").remove();
                       $elm.show();
                var data = jQuery.parseJSON(data);

                 if( data.valid == 1)
                {
                 success_noti(data.message);
                 setTimeout(function(){
                   location.href = 'add_team';
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