<?php require_once('manage/app/app_include/session.php'); ?>
<?php include 'manage/app/action/class/user-class.php';?>
<?php 
    if(isset($_POST['submit']))
       {

          $email    = $_POST['email'];
          $password = $_POST['password'];
         

       $user = new User();
       $row = $user->vaildate_loginf($email, $password);
       if($row !=null)
       {
            $_SESSION['fvaaf_session_id'] = $row['u_name'] . mt_rand(1000, 10000);

            $_SESSION['fu_id']  = $row['u_id'];
            $_SESSION['fname']  = $row['u_name'];
            $_SESSION['femail'] = $row['u_email'];

            $_SESSION['frole'] = $row['u_type'];

            $_SESSION['fprofile_pic'] = $row['u_profile_pic'];
            
            $_SESSION['fsince'] = $row['date'];
            $_SESSION['ftype']  = $row['u_type'];

            $_SESSION['frname'] = $row['role_name'];

            echo '<script language="javascript">';
            echo 'alert("Login successfully.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "dashboard-user.php";</script>  ';
       }
       else
       {
        
            echo '<script language="javascript">';
            echo 'alert("Something went wrong.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "dashboard-login.php";</script>';
       }
       }
       else
       {
            echo '<script language="javascript">';
            echo 'alert("Something went wrong.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "dashboard-login.php";</script>';
       }
   
   
   ?>