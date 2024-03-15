<?php require_once('app_include/session.php'); ?>
<?php require_once('app_include/function.php'); ?>
<?php require_once("app_include/app_header.php");?>
<?php require_once("app_include/app_sidebar.php");?>
<?php include 'action/class/user-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php is_logged_in(); ?>
<meta name="description" content="IAS" />
<meta name="author" content="Varion Advisors" />
<title>User Profile</title>
<!-- start page content -->
<div class="page-content-wrapper">
   <div class="page-content">
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">User Profile</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">User Profile</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
         <?php
         $user     = new User();
         $row   = $user->get_user();
          ?>
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
               <div class="card card-topline-aqua">
                  <div class="card-body no-padding height-9">
                     <div class="row">
                        <div class="profile-userpic">
                           <?php
                              if($row['u_profile_pic']!="")
                              {
                            ?>
                           <img src="upload/user/<?php echo $row['u_profile_pic']; ?>" class="img-responsive" style="height: 150px;width: 150px;">
                            <?php
                              }
                             else
                              {
                             ?>
                           <img src="../assets/img/dp.jpg"  alt="" style="height: 150px;width: 150px;"> 
                           <?php
                             }
                            ?>
                        </div>

                     </div>
                     <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> <?php echo $row['u_name']; ?></div>
                        <div class="profile-usertitle-job"> <?php echo $row['u_type']; ?></div>
                     </div>
                    
                     <!-- END SIDEBAR USER TITLE -->
                     <!-- SIDEBAR BUTTONS -->
                     <div class="profile-userbuttons">
                        <a href="#edit_profile<?php echo $row['u_id'];?>" data-target="#edit_profile<?php echo $row['u_id'];?>"data-toggle="modal"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">Edit Profile</a>
                     </div>
                     <!-- END SIDEBAR BUTTONS -->
                  </div>
               </div>
              </div>


  <!--Profile Edit Modal Box -->
<div id="edit_profile<?php echo $row['u_id']; ?>" class="modal fade" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header" style="border-bottom: 3px solid #008db8;">
            <h5 class="modal-title" id="exampleModalLabel">Profile Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="profile_update" enctype="multipart/form-data">
             
                  <input type="hidden" name="token" id="token" value="<?php echo $token; ?>">
                    <div class="form-row">

                        <div class="form-group col-md-6">
                           <label for="albumname">User name</label>
                              <input type="text" class="form-control" name="u_name" id="u_name" placeholder="Enter album name" value="<?php echo $row['u_name']; ?>">
                        </div>

                        <div class="form-group col-md-6">
                           <label for="albumname">User email</label>
                              <input type="text" class="form-control" name="u_email" id="u_email" placeholder="Enter album name" value="<?php echo $row['u_email']; ?>" readonly>
                        </div>

                        <div class="form-group col-md-6">
                           <label for="albumimg">User Pic</label>
                           <input type="file" name="file" class="form-control" id="file">
                            <input type="hidden" name="image" id="image" value="<?php echo $row['u_profile_pic'];?>">
                        </div>
                      
                         <div class="form-group col-md-6">
                           <label for="albumimg">Contact</label>
                            <input type="number" name="u_mobile" id="u_mobile" value="<?php echo $row['u_mobile'];?>" class="form-control">
                            
                        </div>


                        <div class="form-group col-md-12">
                            <label for="albumimg">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="4"><?php echo $row['u_address']; ?></textarea>
                           
                        </div>


                      </div>

                      <div class="form-group">
                         <input type="submit" id="edit"  class="btn btn-primary" value="Update"> 
                          <input type="reset" id="remove"  class="btn btn-danger" value="Cancel"> 
                     </div>
              </form>
                  
         </div>
      </div>
   </div>
</div>

            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
               <div class="row">
                  <div class="profile-tab-box">
                     <div class="p-l-20">
                        <ul class="nav ">
                           <li class="nav-item tab-all"><a
                              class="nav-link active show" href="#tab1" data-toggle="tab">About Me</a></li>
                         
                           <li class="nav-item tab-all p-l-20"><a class="nav-link"
                              href="#tab3" data-toggle="tab">Settings</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="white-box">
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                           <div id="biography" >
                              <div class="row">

                                 <div class="col-md-4 col-6 b-r">
                                    <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $row['u_name']; ?></p>
                                 </div>
                                 <div class="col-md-4 col-6 b-r">
                                    <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $row['u_mobile']; ?></p>
                                 </div>
                                 <div class="col-md-4 col-6 b-r">
                                    <strong>Email</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $row['u_email']; ?></p>
                                 </div>
                               
                              </div>
                             <hr>
                            </div>
                        </div>
                     
                        <div class="tab-pane" id="tab3">
                           <div class="row">
                              <div class="col-md-12 col-sm-12">
                                 <div class="card-head">
                                    <header>Password Update</header>
                                   
                                 </div>
                                 <div class="card-body " id="bar-parent1">
                                    <form id="update_password">
                                      
                                       <div class="form-group">
                                          <label for="currentpassword">Current Password</label>
                                          <input type="password" class="form-control" id="currentpassword" name="currentpassword" placeholder="Current Password" >
                                       </div>
                                       <div class="form-group">
                                          <label for="newpassword">New Password</label>
                                          <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password">
                                       </div>

                                         <div class="form-group">
                                          <label for="confirmpassword">Confirm Password</label>
                                          <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                                       </div>
                                       <input type="hidden" name="token" id="token" value="<?php echo $token; ?>">
                                       <input type="submit" class="btn btn-primary" value="Update">
                                        <input type="reset" class="btn btn-danger" value="Cancel">
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PROFILE CONTENT -->
         </div>
      </div>
   </div>
</div>
</div>
<!-- end page content -->
<?php require_once("app_include/app_footer.php"); ?>

<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
    $('#update_password')[0].reset();
       $(document).on('submit', '#update_password', function(e){
           e.preventDefault();
           var cu_pass   = $('#currentpassword').val();
           var n_pass    = $('#newpassword').val();
           var c_pass    = $('#confirmpassword').val();
           
           if(cu_pass != '' || n_pass != '' || c_pass != '') 
           {

            if(n_pass==c_pass)
            {
               $.ajax({
                   url:"action/update-password",
                   method:'POST',
                   data:new FormData(this),
                   contentType:false,
                   processData:false,
                       success: function (data)
                     {
                      var data = jQuery.parseJSON(data);
      
                       if( data.valid == 1)
                      {
                       success_noti(data.message);
                       setTimeout(function(){
                         location.href = 'user_profile';
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
            else{
               warning_noti('New password and confirm password are not same!'); 
            }
            }
            else
            {
               warning_noti('All fields are required.'); 
            }
          
       });
   }); 

</script>



<script type="text/javascript" language="javascript" >
   $(document).ready(function(){
    $('#profile_update')[0].reset();
       $(document).on('submit', '#profile_update', function(e){
           e.preventDefault();


           var u_name      = $('#u_name').val();
           var u_email     =  $('#u_email').val()
           var address     =  $('#address').val();
           var u_mobile    =  $('#u_mobile').val();
           var extension   = $('#file').val().split('.').pop().toLowerCase();


           if(extension != '')
        {
            if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)
            {
                info_noti("Invalid image file");
                $('#file').val('');
                return false;
            }
        }
           
               $.ajax({
                   url:"action/update-profile",
                   method:'POST',
                   data:new FormData(this),
                   contentType:false,
                   processData:false,
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
   });

   </script>