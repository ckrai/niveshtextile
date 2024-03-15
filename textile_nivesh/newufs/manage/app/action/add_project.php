<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/property-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 

   if(isset($_POST['articles_title']))
       {
        $project_tp          = test_input($_POST['project_tp']) ;
        $articles_title      = test_input($_POST['articles_title']) ;

        $articles_discreption    = ($_POST['content']) ;

        
        $image = '';
        
          if($_FILES["file"]["name"] != '')
        {
            $extension  = explode('.',$_FILES['file']['name']);
            $image    =  rand() . '.' . $extension[1];

            move_uploaded_file($_FILES['file']['tmp_name'],'../upload/project/'.$image);
            
        }
        
        $u_id           = test_input($_SESSION['u_id']);
        $u_name         = test_input($_SESSION['name']);

        $activity_msg   = "Project has been added by ".$u_name;
        $activity_type  = "Add New Project";

        
       $event = new Property();
       $row   = $event->add_new_articles($u_id, $u_name, $activity_type, $activity_msg,$project_tp, $articles_title,$articles_discreption,$image);
     }

       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Project has been added successfully."
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