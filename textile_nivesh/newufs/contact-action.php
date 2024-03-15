<?php include "manage/app/app_include/session.php";?>
<?php include "manage/app/app_include/function.php";?>
<?php include 'manage/app/action/class/user-class.php';?>
<?php 
 if(isset($_POST['name']))
    {
        $name     = test_input($_POST['name']);
        $email    = test_input($_POST['email']);
        $subject  = test_input($_POST['subject']);
        $message  = test_input($_POST['message']);
       
       $reg = new User();
       $row  = $reg->add_contact($name, $email, $subject, $message);
    }

       if($row !=null)
       {

        echo 'Thanks for contacting us! We will be in touch with you shortly.';  

        
      }
     
   ?>