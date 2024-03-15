<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/careers-class.php';?>
<?php is_logged_in(); ?>
<?php
$request = $_POST['request'];

if($request == 1) 
{
   $status = $_POST['active'];
   $careers_id   = $_POST['careers_id'];

   $u_id     = $_SESSION['u_id'];
   $u_name   = $_SESSION['name'];

   $activity_msg = "Careers has been updated by ".$u_name.".";
   $activity_type= "Careers Status Update.";

   $careers = new Careers();
   $row   = $careers->update_career_status($u_id, $u_name, $activity_msg, $activity_type, $careers_id, $status);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Careers has been updated successfully."
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

    print_r($_POST);
   $careers_id   = $_POST['careers_id'];
   $u_id          = $_SESSION['u_id'];
   $u_name        = $_SESSION['name'];

   $activity_msg = "Careers has been deleted by ".$u_name.".";
   $activity_type= "Delete Careers.";
   $careers = new Careers();
   $row   = $careers->delete_career($u_id, $u_name, $activity_msg, $activity_type, $careers_id);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Careers been deleted successfully."
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