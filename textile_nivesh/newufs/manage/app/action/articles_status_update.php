<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php is_logged_in(); ?>
<?php
$request = $_POST['request'];

if($request == 1) 
{
   $status = $_POST['active'];
   $project_id   = $_POST['articles_id'];

   $u_id     = $_SESSION['u_id'];
   $u_name   = $_SESSION['name'];

   $activity_msg = "Project has been updated by ".$u_name.".";
   $activity_type= "Project Status Update.";

   $role  = new Property();
   $row   = $role->update_project_status($u_id, $u_name, $activity_msg, $activity_type, $project_id, $status);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Project has been updated successfully."
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
   $project_id   = $_POST['articles_id'];
   $u_id          = $_SESSION['u_id'];
   $u_name        = $_SESSION['name'];

   $activity_msg = "Project has been deleted by ".$u_name.".";
   $activity_type= "Delete Project.";
   $role  = new Property();
   $row   = $role->delete_articles_type($u_id, $u_name, $activity_msg, $activity_type, $project_id);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Project been deleted successfully."
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