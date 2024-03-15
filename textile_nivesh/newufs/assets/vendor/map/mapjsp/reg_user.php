<?php include 'manage/app/action/class/user-class.php';?>
<?php 
    if(isset($_POST['submit']))
       {
        
         $name      = $_POST['name'];
         $mobile    = $_POST['mobile'];
         $email     = $_POST['email'];
         $district  = $_POST['district'];
         $password  = $_POST['password'];
         $cpassword = $_POST['cpassword'];
         $rol       = 3;
         $type      = "User";
         

       $user = new User();
       $row = $user->add_new_userf($name, $mobile, $email, $district,$password,$rol,$type);
       if($row !=null)
       {
            echo '<script language="javascript">';
            echo 'alert("Registered successfully.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "dashboard-login.php";</script>  ';
       }
       else
       {
        
            echo '<script language="javascript">';
            echo 'alert("Something went wrong.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "dashboard-register.php";</script>';
       }
       }
       else
       {
            echo '<script language="javascript">';
            echo 'alert("Something went wrong.")';
            echo '</script>';
            echo '<script type="text/javascript">window.location = "dashboard-register.php";</script>';
       }
   
   
   ?>