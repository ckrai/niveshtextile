<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php $project_id = $_GET['project']; ?>
<?php is_logged_in(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Project Update</title>
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
               <div class="page-title">Project Update</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Project Update</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card card-box">
               <div class="card-head">
                  <header>Project Update</header>
               </div>
               <?php
      $role = new Property();
      $result = $role->get_articles_details($project_id);
      $i=0;
     foreach($result as $row)
      {
        
        $active      = $row['project_status'];
        $id          = $row['project_id'];
     
  ?>
               <div class="card-body">
                  <form id="update_articles" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Project Type</label>
                          <select class="form-control" name="project_tp" id="project_tp">
                            <option value="<?php echo $row['project_type']; ?>"><?php echo $row['project_type']; ?></option>
                            <option value="website">Website</option>
                            <option value="app">App</option>

                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Project Title</label>
                          <input type="text" class="form-control" name="edit_art_name" id="edit_art_name" placeholder="Enter project title" value="<?php echo $row['project_title']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Project Title</label>
                          <input type="text" class="form-control" name="edit_art_discreption" id="editor" placeholder="Enter Project Link" value="<?php echo $row['project_link']; ?>">
                        </div>
                    </div>
                     
                    <div class="row">
                       <div class="form-group col-md-12">
                          <label for="articles_discreption">Project Image</label>
                          <input type="file" class="form-control" name="file" id="file">
                          </textarea>
                       </div>
                    </div> 

                     <input type="hidden" name="image" id="image" value="<?php echo $row['project_image'];?>">
                    <input type="hidden" name="token" id="" value="<?php echo $token; ?>">
                    <input type="hidden" name="art_type_id" id="art_type_id" value="<?php echo $row['project_id']; ?>">
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
    $('#update_articles')[0].reset();
       $(document).on('submit', '#update_articles', function(e){
           e.preventDefault();
           e.preventDefault();
            $elm=$(".btn-primary");
           $elm.hide();
           $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
           var art_type_id           = $('#art_type_id').val();
           var edit_art_name         = $('#edit_art_name').val();
           var edit_art_discreption  = $('#edit_art_discreption').val();
      
         $.ajax({
             url:"action/edit_articles_type",
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
                   location.href = 'add_project';
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