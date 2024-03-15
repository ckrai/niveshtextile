<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php is_logged_in(); ?>
<?php
$request = $_POST['request'];

if($request == 1) 
{
   $status    = $_POST['active'];
   $team_id   = $_POST['team_id'];

   $u_id     = $_SESSION['u_id'];
   $u_name   = $_SESSION['name'];

   $activity_msg = "Team has been updated by ".$u_name.".";
   $activity_type= "Team Status Update.";

   $role  = new Property();
   $row   = $role->update_team_status($u_id, $u_name, $activity_msg, $activity_type, $team_id, $status);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Team has been updated successfully."
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
   $team_id       = $_POST['team_id'];
   $u_id          = $_SESSION['u_id'];
   $u_name        = $_SESSION['name'];

   $activity_msg = "Team has been deleted by ".$u_name.".";
   $activity_type= "Delete Team.";
   $role  = new Property();
   $row   = $role->delete_team_type($u_id, $u_name, $activity_msg, $activity_type, $team_id);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Team been deleted successfully."
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