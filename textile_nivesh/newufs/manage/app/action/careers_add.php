<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/careers-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if($_POST['token']== $_SESSION['token'])
       {
    
        $title         = test_input($_POST['careers_title']); 
        $content       = htmlspecialchars_decode($_POST['careers_description']) ;
        $location      = test_input($_POST['careers_location']);
        $slug          = slugify($title);

        $u_id          = test_input($_SESSION['u_id']);
        $u_name        = test_input($_SESSION['name']);

        $activity_msg  = "Careers has been added by ".$u_name;
        $activity_type = "Add New careers " .$title;

        
       $careers = new Careers();
       $row  = $careers->add_new_careers($title, $content, $slug, $location, $u_id, $u_name, $activity_msg, $activity_type);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Careers has been added successfully."
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