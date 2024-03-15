<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/user-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if(isset($_POST['u_name']) AND isset($_POST['u_email']) AND isset($_POST['address']) AND $_POST['token']== $_SESSION['token'])
       {

        $image = '';
        $location = '../upload/user/';
        $u_name    = $_POST['u_name'];
        $u_email   = $_POST['u_email']; 
        $address   = $_POST['address'];
        $u_mobile  = $_POST['u_mobile'];
        $pic       = $_POST['image'];


        if($_FILES["file"]["name"] != '')
        {
            $image = upload_image($location);
        }
        else
        {
          $image = $pic;
        }

   
       $user = new User();
       $row = $user->update_user_profile($u_name,$u_email, $address, $u_mobile , $image);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Profile has been updated successfully."
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
            "message" => "Something went wrong."
        ));
       }
   
   
   ?>