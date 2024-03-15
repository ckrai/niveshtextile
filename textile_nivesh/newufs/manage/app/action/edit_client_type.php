<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if(isset($_POST['client_name']) AND $_POST['token']== $_SESSION['token'])
       {

        $image = '';
        $location = '../upload/clients/';
        $clientid              = test_input($_POST['clientid']);
        $client_name           = test_input($_POST['client_name']);
        $pic                   = $_POST['image'];
         
        $u_id          = test_input($_SESSION['u_id']);
        $u_name        = test_input($_SESSION['name']);
 
        $activity_msg  = "Client has been updated by ".$u_name.".";
        $activity_type = "Client Update.";

        if($_FILES["file"]["name"] != '')
        {
            $image = upload_image($location);
        }
        else
        {
          $image = $pic;
        }


        $property = new Property();
        $row = $property->update_client_type($u_id, $u_name, $activity_type, $activity_msg, $clientid,$client_name,$image);
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
       else
       {
          echo json_encode(array(
            "valid"=>0,
            "message" => "Error."
        ));
       }
   
   
   ?>