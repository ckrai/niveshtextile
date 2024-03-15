<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/user-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if(isset($_POST['name']) AND $_POST['token']== $_SESSION['token'])
       {
        
        $name     = $_POST['name'];
        $mobile   = $_POST['mobile'];
        $email    = $_POST['email'];
        $district = $_POST['district'];
        $type     = $_POST['type'];

        $pieces = explode("_", $type);

        $typeid   = $pieces[0]; // type id
        $typename = $pieces[1]; // type name

    
        $u_id     = $_SESSION['u_id'];
        $u_name   = $_SESSION['name'];


        $activity_msg = "New User ".$name." added by ".$u_name;
        $activity_type= "Create New User"; 
      
       $user = new User();
       $row = $user->add_new_user($u_id, $u_name, $name, $mobile, $email, $district, $typeid, $typename, $activity_msg, $activity_type);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "User has been added successfully."
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