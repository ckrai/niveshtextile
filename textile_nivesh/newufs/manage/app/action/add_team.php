<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 

   if(isset($_POST['name']))
       {
        $name            = test_input($_POST['name']);
        $position        = test_input($_POST['position']);
        $experience      = test_input($_POST['experience']);
        $team_description= test_input($_POST['team_description']);

        $image = '';
        
          if($_FILES["file"]["name"] != '')
        {
            $extension  = explode('.',$_FILES['file']['name']);
            $image    =  rand() . '.' . $extension[1];

            move_uploaded_file($_FILES['file']['tmp_name'],'../upload/team/'.$image);
            
        }
        
        $u_id           = test_input($_SESSION['u_id']);
        $u_name         = test_input($_SESSION['name']);

        $activity_msg   = "Team has been added by ".$u_name;
        $activity_type  = "Add New Team";

        
       $event = new Property();
       $row   = $event->add_new_team($u_id, $u_name, $activity_type, $activity_msg,$name, $position,$experience,$image,$team_description);
     }

       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Team has been added successfully."
        ));
       }
       else
       {
            echo json_encode(array(
            "valid"=>0,
            "message" => "Something went wrong."
        ));
    
       }
       
   
   ?>