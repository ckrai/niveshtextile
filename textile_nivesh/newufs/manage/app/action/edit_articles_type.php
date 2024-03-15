<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if(isset($_POST['edit_art_name']) AND $_POST['token']== $_SESSION['token'])
       {

        $image = '';
        $location = '../upload/project/';
        $art_type_id           = test_input($_POST['art_type_id']);
        $project_tp            = test_input($_POST['project_tp']);
        $edit_art_name         = test_input($_POST['edit_art_name']);

        $edit_art_discreption  = test_input($_POST['edit_art_discreption']);
        $pic                   = $_POST['image'];
         
        $u_id          = test_input($_SESSION['u_id']);
        $u_name        = test_input($_SESSION['name']);
 
        $activity_msg  = "Project has been updated by ".$u_name.".";
        $activity_type = "Project Update.";

        if($_FILES["file"]["name"] != '')
        {
            $image = upload_image($location);
        }
        else
        {
          $image = $pic;
        }


        $property = new Property();
        $row = $property->update_articles_type($u_id, $u_name, $activity_type, $activity_msg, $art_type_id,$project_tp, $edit_art_name, $edit_art_discreption,$image);
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
       else
       {
          echo json_encode(array(
            "valid"=>0,
            "message" => "Error."
        ));
       }
   
   
   ?>