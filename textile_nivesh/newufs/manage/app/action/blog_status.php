<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/blog-class.php';?>
<?php is_logged_in(); ?>
<?php
$request = $_POST['request'];
if($request == 1) 
{
   $status    = $_POST['active'];
   $blog_id   = $_POST['blog_id'];

   $u_id     = $_SESSION['u_id'];
   $u_name   = $_SESSION['name'];

   $activity_msg = "Blog status has been updated by ".$u_name.".";
   $activity_type= "Blog Status Updated.";

   $role  = new Blog();
   $row   = $role->update_blog_status($u_id, $u_name, $activity_msg, $activity_type, $blog_id, $status);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Blog status has been updated successfully."
        ));
       }
       else
       {
            echo json_encode(array(
            "valid"=>0,
            "message" => "Something went wrong."
        ));
    
       }
  
}

if($request == 2) 
{

   $blog_id   = $_POST['blog_id'];
   $u_id     = $_SESSION['u_id'];
   $u_name   = $_SESSION['name'];

   $activity_msg = "Blog type has been deleted by ".$u_name.".";
   $activity_type= "Blog type deleted.";
   $role  = new Blog();
   $row   = $role->delete_blog($u_id, $u_name, $activity_msg, $activity_type, $blog_id);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Blog type been deleted successfully."
        ));
       }
       else
       {
            echo json_encode(array(
            "valid"=>0,
            "message" => "Something went wrong."
        ));
    
       }
  
}

?>