<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/blog-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact/Message</title>
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
               <div class="page-title">Contact/Message</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Contact/Message</li>
            </ol>
         </div>
      </div>
      <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card card-box">
               <div class="card-head">
                  <header>Contact/Message List</header>
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
                              <th class="center">S.No.</th>
                              <th class="center">Name</th>
                              <th class="center">Email</th>
                              <th class="center">Subject </th>
                              <th class="center">Message</th>
                              <th class="center">Date</th>
                            
                        </thead>
                        <tbody>
                          <?php
                              $contact  = new Blog();
                              $result   = $contact->get_msg();
                              $i=0;
                              foreach($result as $row)
                               {
                                 $i++;
                                 $id     = $row['con_id'];
                                 $c_date        = $row['con_date'];
                                 $con_date  = date('d/m/Y',strtotime($c_date));
                            ?>
                           <tr class="odd gradeX">
                             <td><?php echo $i; ?></td>
                                <td><?php echo $row['con_name'];?></td>
                                <td><?php echo $row['con_email'];?></td>
                                <td><?php echo $row['con_subject']; ?></td>
                                <td><?php echo $row['con_message']; ?></td>
                                 <td><?php echo $row['con_message']; ?></td>
                                
                              
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


  

<script  src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
<script  src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
<script  src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
<!--tags input-->
<?php require_once("app_include/app_footer.php"); ?>

</body>
</html>
<script type="text/javascript" language="javascript" >
   // Enable/Disable Tender.
                $('.active').click(function(){
                    var id         = this.id;
                    var split_id   = id.split("_");
                    var status     = split_id[1];
                    var blog_id    = split_id[0];
                    // Get active state
                    var active = 0;
                    if(status == 1){
                        active = 0;
                    }else{
                        active = 1;
                    }
                    // AJAX request
                    $.ajax({
                        url: 'action/blog_status',
                        type: 'post',
                        data: {blog_id: blog_id, active: active, request: 1},
                    
   
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
                });
   
   
</script>


<!-- blog delete query -->

<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
       // delete Album
      $('.delete').click(function(){
           if(confirm('This action will delete this record. Are you sure?')){
          var blog_id   = this.id;
          // AJAX request
          $.ajax({
              url: 'action/blog_status',
              type: 'post',
              data: {blog_id: blog_id, request: 2},
          
              success: function (data)
              {
                // alert(data);
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