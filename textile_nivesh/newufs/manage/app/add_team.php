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
  <title>Team</title>
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
               <div class="page-title">Team</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Team</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-4 col-md-12 col-lg-4">
            <div class="card card-box">
               <div class="card-head">
                  <header>Add Team Member</header>
               </div>
               <div class="card-body">
                  <form id="teamadd" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name ">
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Team Position</label>
                          <input type="text" class="form-control" name="position" id="position" placeholder="Enter Position ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="pt_type">Experience</label>
                          <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter Experiance ">
                        </div>
                    </div>
                    
                    <div class="row">
                       <div class="form-group col-md-12">
                          <label for="articles_discreption">Image</label>
                          <input type="file" class="form-control" name="file" id="file">
                          
                       </div>
                    </div> 
                     <div class="row">
                       <div class="form-group col-md-12">
                          <label for="articles_discreption">Team Description</label>
                          <textarea class="form-control" name="team_description" id="team_description"></textarea>
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
                  <header>Project List</header>
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
                              <th class="center">Position</th>
                              <th class="center">Experience</th>
                              <th class="center">Status</th>
                              <th class="center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                            $team    = new Property();
                            $result  = $team->get_team_list();
                            $i=0;
                           foreach($result as $row)
                            {
                              $i++;
                              $active      = $row['team_status'];
                              $id          = $row['team_id'];
                           
                           ?>
                           <tr class="odd gradeX">
                              <td class="center"><?php echo $i; ?></td>
                              <td class=""><?php echo $row['team_name'];?></td>
                              <td class=""><?php echo $row['team_position'];?></td>
                              <td class=""><?php echo $row['team_experience'];?></td>

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

                                 <a href="team_update?team=<?php echo $row['team_id']; ?>"   class="btn btn-tbl-edit btn-xs">
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
    $('#teamadd')[0].reset();
       $(document).on('submit', '#teamadd', function(e){
           e.preventDefault();
           e.preventDefault();
            $elm=$(".btn-primary");
           $elm.hide();
           $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');

           var name        = $('#name').val();
           var position    = $('#position').val();
           var experience  = $('#experience').val();
           var extension   = $('#file').val().split('.').pop().toLowerCase();


           if(extension != '')
        {
            if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)
            {
                info_noti("Invalid file please choosen image file!");
                $('#file').val('');
                return false;
            }
        }
          
           if(name != '' && position !='')
           {
               $.ajax({
                   url:"action/add_team",
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
        var team_id    = split_id[0];
        // Get active state
        var active = 0;
        if(status == 1){
            active = 0;
        }else{
            active = 1;
        }
        // AJAX request
        $.ajax({
            url: 'action/team_status_update',
            type: 'post',
            data: {team_id: team_id, active: active, request: 1},
        

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
          var team_id   = this.id;
              // AJAX request
          $.ajax({
              url: 'action/team_status_update',
              type: 'post',
              data: {team_id: team_id, request: 2},
                
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