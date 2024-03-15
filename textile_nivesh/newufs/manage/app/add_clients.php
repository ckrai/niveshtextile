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
  <title>Clients</title>
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
               <div class="page-title">Certificate</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Certificate</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-4 col-md-12 col-lg-4">
            <div class="card card-box">
               <div class="card-head">
                  <header>Add Certificate</header>
               </div>
               <div class="card-body">
                  <form id="clientsadd" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Name</label>
                          <input type="text" class="form-control" name="client_name" id="client_name" placeholder="Enter Certificate Name ">
                        </div>
                    </div>
                    <div class="row">
                       <div class="form-group col-md-12">
                          <label for="articles_discreption">Image</label>
                          <input type="file" class="form-control" name="file" id="file">
                          </textarea>
                       </div>
                    </div> 

                     <input type="hidden" name="token" id="token" value="<?php echo $token; ?>">
                     <button type="submit" id="submit"  class="btn btn-primary">Submit</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-sm-8 col-md-12 col-lg-8">
            <div class="card card-box">
               <div class="card-head">
                  <header>Certificate List</header>
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
                              <th class="center">Image</th>
                              <th class="center">Name</th>
                              <th class="center"> Status </th>
                              <th class="center"> Action </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                            $client  = new Property();
                            $result  = $client->get_client_list();
                            $i=0;
                           foreach($result as $row)
                            {
                              $i++;
                              $active      = $row['client_status'];
                              $id          = $row['client_id'];
                           
                           ?>
                           <tr class="odd gradeX">
                              <td class="center"><?php echo $i; ?></td>
                              <td class=""> <img style="height: 50px;" src="upload/clients/<?php echo $row['client_image']; ?>" alt=""></td>
                              <td class=""><?php echo $row['client_name'];?></td>
                              <td class="">
                              <label class="switchToggle">
                              <?php
                                  $activeText = ""; 
                                  if($active == 0){
                                  $activeText = " ";
                                  }else{
                                  $activeText = "checked";
                                }
                              ?>
                                  <input type="checkbox" <?php echo $activeText; ?> class="active" id='<?php echo $id.'_'.$active?>'>
                                    <span class="slider green round"></span>
                                </label>
                              </td>
                              <td class="">
                                 <a href="client_update?client=<?php echo $row['client_id']; ?>"   class="btn btn-tbl-edit btn-xs">
                                 <i class="fa fa-pencil"></i>
                                 </a>
                                 <button class="delete btn btn-tbl-delete btn-xs" id="<?php echo $id; ?>">
                                 <i class="fa fa-trash-o "></i>
                                 </button>
                              </td>
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
<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
    $('#clientsadd')[0].reset();
       $(document).on('submit', '#clientsadd', function(e){
           e.preventDefault();
           e.preventDefault();
            $elm=$(".btn-primary");
           $elm.hide();
           $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');

           var client_name       = $('#client_name').val();
           
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
          
           if(client_name != '')
           {
               $.ajax({
                   url:"action/add_clients",
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
        var client_id       = split_id[0];
        // Get active state
        var active = 0;
        if(status == 1){
            active = 0;
        }else{
            active = 1;
        }
        // AJAX request
        $.ajax({
            url: 'action/client_status_update',
            type: 'post',
            data: {client_id: client_id, active: active, request: 1},
        

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
          var client_id   = this.id;
              // AJAX request
          $.ajax({
              url: 'action/client_status_update',
              type: 'post',
              data: {client_id: client_id, request: 2},
                
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