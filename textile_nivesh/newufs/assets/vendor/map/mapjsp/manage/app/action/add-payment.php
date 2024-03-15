<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/payment-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if(isset($_POST['name']) AND $_POST['token']== $_SESSION['token'])
       {
        $name      =$_POST['name'];
        $mobile    =$_POST['mobile'];
        $email     =$_POST['email'];
        $district  =$_POST['district'];
        $amount    =$_POST['amount'];
        $mode      =$_POST['mode'];
        $remark    =$_POST['remark'];
        $uid       =$_POST['uid'];

        $u_id     = $_SESSION['u_id'];
        $u_name   = $_SESSION['name'];

        $activity_msg = "New Payment ".$amount." added by ".$u_name;
        $activity_type= "Payment Add"; 
      
       $payment = new Payment();
       $row = $payment->add_new_payment($u_id, $uid, $u_name, $amount, $mode, $remark, $activity_msg, $activity_type);


       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Payment has been added successfully."
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