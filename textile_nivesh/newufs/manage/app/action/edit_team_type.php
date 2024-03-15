<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if(isset($_POST['name']) AND $_POST['token']== $_SESSION['token'])
       {

        $image = '';
        $location = '../upload/team/';
        $teamid                = test_input($_POST['teamid']);
        $name                  = test_input($_POST['name']);
        $position              = test_input($_POST['position']);
        $experience            = test_input($_POST['experience']);
        $team_description      = test_input($_POST['team_description']);
        
        $pic                   = $_POST['image'];
         
        $u_id          = test_input($_SESSION['u_id']);
        $u_name        = test_input($_SESSION['name']);
 
        $activity_msg  = "Team has been updated by ".$u_name.".";
        $activity_type = "Team Update.";

        if($_FILES["file"]["name"] != '')
        {
            $image = upload_image($location);
        }
        else
        {
          $image = $pic;
        }


        $property = new Property();
        $row = $property->update_team_type($u_id, $u_name, $activity_type, $activity_msg, $teamid,$name, $position, $experience,$image,$team_description);
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
       else
       {
          echo json_encode(array(
            "valid"=>0,
            "message" => "Error."
        ));
       }
   
   
   ?>