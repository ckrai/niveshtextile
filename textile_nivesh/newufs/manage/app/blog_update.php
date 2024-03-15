<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/blog-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>
<?php $blogId = $_GET['blog']; ?>
<?php
 $blog  = new Blog();
 $result   = $blog->get_blog_edit($blogId);
 $row = $result->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Blog</title>
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
               <div class="page-title">Blog</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Blog</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card card-box">
               <div class="card-head">
                  <header>Edit Blog</header>
               </div>
               <div class="card-body">
                  <form id="blog_edit" enctype="multipart/form-data">
                    <div class="row">
                         <div class="form-group col-md-12">
                          <label for="pt_type">Articles Title</label>
                          <input type="text" class="form-control" name="blog_title" id="blog_title" value="<?php echo $row['blog_title']; ?>">
                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group col-md-3">
                          <label for="pt_type">Project Type</label>
                         <select class="select2 form-control block" name="blog_category" id="blog_category">
                           <option value="<?php echo $row['blog_category']; ?>"><?php echo $row['blog_category']; ?></option>
                           <option value="Technology">Technology</option>
                           <option value="Trending">Trending</option>
                           <option value="News">News</option>
                        </select>
                        </div>
                         <div class="form-group col-md-3">
                          <label for="pt_type">Research Analyst</label>
                           <input type="text" id="blog_author" class="form-control" value="<?php echo $row['blog_author']; ?>" name="blog_author">
                        </div>
                         <div class="form-group col-md-3">
                          <label for="pt_type">Select File</label>
                         <input type="file" class="form-control" id="blog_file" name="file">
                         <input type="hidden" name="image" id="image" value="<?php echo $row['blog_image'];?>">
                        </div>
                        <div class="form-group col-md-3">
                          <img src="upload/blog/<?php echo $row['blog_image'];?>" alt="Album Image" style="height:80px;width:80px;">
                        </div>
                     
                    </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Articles Description</label>
                           <textarea id="Ck" name="blog_description"><?php echo $row['blog_description']; ?></textarea>
                        </div>
                    </div>
                     <input type="hidden" name="blog_id" id="blog_id" value="<?php echo $row['blog_id']; ?>">
                

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
   
    $('#blog_edit')[0].reset();
       $(document).on('submit', '#blog_edit', function(e){
           e.preventDefault();
           $elm=$(".sub_btn");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
          
                var blog_title    = $('#blog_title').val();
                var blog_tag      = $('#blog_tag').val();
                var blog_category = $('#blog_category').val();
                var blog_author   = $('#blog_author').val();
                var extension     = $('#blog_file').val().split('.').pop().toLowerCase();
               
           if(extension != '')
            {
                if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)
                {
                    alert("Invalid image file");
                    $('#blog_file').val('');
                    return false;
                }
            }
   
           if(blog_title != '')
           {
               $.ajax({
                   url:"action/blog_edit",
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
                         location.href = 'blog_list';
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