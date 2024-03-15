<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/careers-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>
<?php $careerId = $_GET['career']; ?>
<?php
 $careers = new Careers();
 $result   = $careers->get_career_edit($careerId);
 $row = $result->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Career</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
<!-- Date Time item CSS -->
<link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />

<script
   src="https://code.jquery.com/jquery-3.3.1.min.js"
   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
   crossorigin="anonymous"></script>
<meta name="content" content="content" />
<meta name="content" content="content" />
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
               <div class="page-title">Career</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Career</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card card-box">
               <div class="card-head">
                  <header>Edit Career</header>
               </div>
               <div class="card-body">
                  <form id="careers_edit" enctype="multipart/form-data">
                    <div class="row">
                         <div class="form-group col-md-8">
                          <label for="pt_type">Title</label>
                          <input type="text" class="form-control" name="careers_title" id="careers_title" value="<?php echo $row['career_title']; ?>">
                        </div>

                        <div class="form-group col-md-4">
                          <label for="pt_type">Location</label>
                          <input type="text" class="form-control" name="careers_location" id="careers_location" value="<?php echo $row['career_location']; ?>">
                        </div>

                    </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Description</label>
                           <textarea id="Ck" name="careers_description">
                               <?php echo $row['career_description']; ?>
                           </textarea>
                        </div>
                    </div>
                
                      <input type="hidden" name="career_id" id="career_id" value="<?php echo $row['career_id']; ?>">
                     <input type="hidden" name="token" id="token" value="<?php echo $token; ?>">
                     <button type="submit" id="submit"  class="btn btn-primary">Submit</button>
                  </form>
               </div>
            </div>
         </div>
         
        
      </div>
   </div>
   <!-- end page content -->
</div>
<script  src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
<script  src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
<script  src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">CKEDITOR.replace('Ck')</script>
<!--tags input-->
<?php require_once("app_include/app_footer.php"); ?>
<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
   
    $('#careers_edit')[0].reset();
       $(document).on('submit', '#careers_edit', function(e){
           e.preventDefault();
           $elm=$(".sub_btn");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
                var careers_title =$('#careers_title').val();
                var careers_location =$('#careers_location').val();
                var careers_description =$('#careers_description').val();
               
           
   
           if(careers_title != '')
           {
               $.ajax({
                   url:"action/careers_edit",
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
                         location.href = 'careers_list';
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
           }
           else
           {
                info_noti("All fields are required, please complete form before confirm!");
                 setTimeout(function(){
                      location.reload();
                    }, 1000);
                  return false;
               
           }
       });
   }); 
</script>

</body>
</html>