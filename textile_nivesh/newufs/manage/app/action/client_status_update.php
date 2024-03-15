<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php is_logged_in(); ?>
<?php
$request = $_POST['request'];

if($request == 1) 
{
   $status = $_POST['active'];
   $client_id   = $_POST['client_id'];

   $u_id     = $_SESSION['u_id'];
   $u_name   = $_SESSION['name'];

   $activity_msg = "Client has been updated by ".$u_name.".";
   $activity_type= "Client Status Update.";

   $role  = new Property();
   $row   = $role->update_client_status($u_id, $u_name, $activity_msg, $activity_type, $client_id, $status);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Client has been updated successfully."
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
   $client_id     = $_POST['client_id'];
   $u_id          = $_SESSION['u_id'];
   $u_name        = $_SESSION['name'];

   $activity_msg = "Client has been deleted by ".$u_name.".";
   $activity_type= "Delete Client.";
   $role  = new Property();
   $row   = $role->delete_client_type($u_id, $u_name, $activity_msg, $activity_type, $client_id);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Client been deleted successfully."
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