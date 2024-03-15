<?php require_once('manage/app/app_include/session.php'); ?>
<?php include 'manage/app/action/class/payment-class.php';?>
<?php 
   if(isset($_POST['name']))
       {
        $name      =$_POST['name'];
        $mobile    =$_POST['mobile'];
        $email     =$_POST['email'];
        $district  =$_POST['district'];
        $amount    =$_POST['amount'];
        $mode      =$_POST['mode'];
        $remark    =$_POST['remark'];
        $uid       =$_POST['uid'];

        $u_id     = $_SESSION['fu_id'];
        $u_name   = $_SESSION['fname'];

        $activity_msg = "New Payment ".$amount." added by ".$u_name;
        $activity_type= "Payment Add"; 
      
       $payment = new Payment();
       $row = $payment->add_new_payment($u_id, $uid, $u_name, $amount, $mode, $remark, $activity_msg, $activity_type);


       if($row !=null)
       {
            echo '<script language="javascript">';
            echo 'alert("Payment has been added successfully.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "index.php";</script>  ';
       }
       else
       {

            echo '<script language="javascript">';
            echo 'alert("Something went wrong.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "dashboard-user.php";</script>  ';

    
       }
       }
       else
       {
            echo '<script language="javascript">';
            echo 'alert("Something went wrong.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "dashboard-user.php";</script>  ';
       }
   
   
   ?>