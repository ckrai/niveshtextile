<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 

   if(isset($_POST['client_name']))
       {
        $client_name    = test_input($_POST['client_name']) ;

        
        $image = '';
        
          if($_FILES["file"]["name"] != '')
        {
            $extension  = explode('.',$_FILES['file']['name']);
            $image    =  rand() . '.' . $extension[1];

            move_uploaded_file($_FILES['file']['tmp_name'],'../upload/clients/'.$image);
            
        }
        
        $u_id           = test_input($_SESSION['u_id']);
        $u_name         = test_input($_SESSION['name']);

        $activity_msg   = "Clients has been added by ".$u_name;
        $activity_type  = "Add New Clients";

        
       $event = new Property();
       $row   = $event->add_new_clients($u_id, $u_name, $activity_type, $activity_msg,$client_name,$image);
     }

       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Clients has been added successfully."
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