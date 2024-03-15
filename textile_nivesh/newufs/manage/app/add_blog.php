<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>
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
                  <header>Add Blog</header>
               </div>
               <div class="card-body">
                  <form id="blog_add" enctype="multipart/form-data">
                    <div class="row">
                         <div class="form-group col-md-12">
                          <label for="pt_type">Articles Title</label>
                          <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="Enter Articles Title ">
                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group col-md-4">
                          <label for="pt_type">Project Type</label>
                         <select class="select2 form-control block" name="blog_category" id="blog_category">
                           <option value="Technology">Technology</option>
                           <option value="Trending">Trending</option>
                           <option value="News">News</option>
                        </select>
                        </div>
                         <div class="form-group col-md-4">
                          <label for="pt_type">Research Analyst</label>
                           <input type="text" id="blog_author" class="form-control" placeholder="Analyst" name="blog_author">
                        </div>
                         <div class="form-group col-md-4">
                          <label for="pt_type">Select File</label>
                         <input type="file" class="form-control" id="blog_file" name="file">
                        </div>
                     
                    </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Articles Description</label>
                           <textarea id="Ck" name="blog_description"></textarea>
                        </div>
                    </div>
                

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
    $('#articesadd')[0].reset();
       $(document).on('submit', '#articesadd', function(e){
           e.preventDefault();
           e.preventDefault();
            $elm=$(".btn-primary");
           $elm.hide();
           $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');

           var project_tp       = $('#project_tp').val();
           var articles_title   = $('#articles_title').val();
           var articles_discreption  = $('#content').val();
           
           var extension             = $('#file').val().split('.').pop().toLowerCase();


           if(extension != '')
        {
            if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)
            {
                info_noti("Invalid file please choosen image file!");
                $('#file').val('');
                return false;
            }
        }
          
           if(articles_title != '' && articles_discreption !='')
           {
               $.ajax({
                   url:"action/add_project",
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
<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
   
    $('#blog_add')[0].reset();
       $(document).on('submit', '#blog_add', function(e){
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
                    info_noti("Invalid image file");
                    $('#blog_file').val('');
                    return false;
                }
            }
   
           if(blog_title != '')
           {
               $.ajax({
                   url:"action/blog_add",
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
<script>
  
  // Enable/Disable Tender.
    $('.active').click(function(){
        var id         = this.id;
        var split_id   = id.split("_");
        var status     = split_id[1];
        var articles_id       = split_id[0];
        // Get active state
        var active = 0;
        if(status == 1){
            active = 0;
        }else{
            active = 1;
        }
        // AJAX request
        $.ajax({
            url: 'action/articles_status_update',
            type: 'post',
            data: {articles_id: articles_id, active: active, request: 1},
        

      success: function (data)
      {
        alert(data);
       var data = jQuery.parseJSON(data);

       if( data.valid == 1)
       {
        success_noti(data.message);

          setTimeout(function(){
          location.reload();
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
</script>

<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
 

       // delete news
      $('.delete').click(function(){
        if(confirm('This action will delete this record. Are you sure?')){
          var articles_id   = this.id;
              // AJAX request
          $.ajax({
              url: 'action/articles_status_update',
              type: 'post',
              data: {articles_id: articles_id, request: 2},
                
              success: function (data)
              {
              
               var data = jQuery.parseJSON(data);

               if( data.valid == 1)
               {
                success_noti(data.message);

                  setTimeout(function(){
                  location.reload();
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
      }});
   }); 
</script>
</body>
</html>