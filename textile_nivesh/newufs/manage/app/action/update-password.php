<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/user-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if(isset($_POST['currentpassword']) AND (isset($_POST['newpassword']))  AND $_POST['token']== $_SESSION['token'])
       {
      
      
        $cu_pass  = $_POST['currentpassword'];
        $n_pass   = $_POST['newpassword'];
        $c_pass   = $_POST['confirmpassword'];
      


       $user = new User();
       $row = $user->update_user_password($cu_pass, $n_pass, $c_pass);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Password has been updated successfully."
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