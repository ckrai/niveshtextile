<?php include_once 'db-connect.php'; ?>
<?php 
class User extends Database{
//Add New User
public function add_new_user($u_id, $u_name, $name, $mobile, $email, $district, $typeid, $typename, $activity_msg, $activity_type)
{
    $password = "test1234";
    if($this->check_user($email) == 0)
        {
          $hash_pass = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->con->prepare("INSERT INTO vaaf_users (u_name, u_email, u_mobile, role_id, u_type, u_district, u_password) VALUES (?,?,?,?,?,?,?)");

            $stmt_acti = $this->con->prepare("INSERT INTO vaaf_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");

            $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

            if($stmt->execute(array($name, $email, $mobile, $typeid, $typename, $district, $hash_pass)))
                return $this->con->lastInsertId();
            else
                return false;
        }
        else
        {
            return false;
        }
}


public function add_new_userf($name, $mobile, $email, $district,$password,$rol,$type)
{
    if($this->check_user($email) == 0)
        {
          $hash_pass = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->con->prepare("INSERT INTO vaaf_users (u_name, u_email, u_mobile, role_id, u_type, u_district, u_password) VALUES (?,?,?,?,?,?,?)");

            if($stmt->execute(array($name, $email, $mobile, $rol, $type, $district, $hash_pass)))
                return $this->con->lastInsertId();
            else
                return false;
        }
        else
        {
            return false;
        }
}


public function vaildate_loginf($email, $password)
    {
        $stmt = $this->con->prepare("SELECT * FROM vaaf_users RIGHT JOIN vaaf_role ON vaaf_role.role_id = vaaf_users.role_id WHERE u_email = :u_email OR u_name = :u_name LIMIT 1");
        $stmt->execute(array(':u_email' => $email, ':u_name' => $email));

        if($stmt->rowCount() !=0)
        {
            $row = $stmt->fetch();
          
            if(password_verify($password, $row['u_password']) AND $row['u_status']==1 AND $row['role_id']!=0)
            {   
               return $row;
            }
            else{
                 return null; 
                }
        }
        else
        {
            return null; 
        }
        
    }



//Check uniqueness of User....
    public function check_user($email)
    {
         $stmt = $this->con->prepare("SELECT u_email FROM vaaf_users WHERE u_email = :email LIMIT 1");
         $stmt->execute(array(':email' => $email));
         return $stmt->rowCount();
    }


//Update user record...
public function update_user_profile($u_name, $u_email, $address, $u_mobile, $image)
{
   $u_id = $_SESSION['u_id'];
   $stmt = $this->con->prepare("UPDATE vaaf_users SET u_name = :u_name, u_email = :u_email, u_mobile = :u_mobile,  u_address = :u_address, u_profile_pic = :image WHERE u_id = :u_id");
   
   $stmt->execute(array(':u_name' => $u_name, ':u_email'=>$u_email, ':u_mobile'=>$u_mobile, ':u_address'=>$address, ':image'=>$image, ':u_id'=>$u_id));
   return true;
}

//Get User info....
public function get_user()
{
   
    $u_id = $_SESSION['u_id'];
    $stmt = $this->con->prepare("SELECT * FROM vaaf_users WHERE  u_id = :u_id ORDER BY u_id DESC");
    $stmt->execute(array(':u_id' => $u_id));  
    return $stmt;
}


public function get_userf($role_id)
{
   
    $stmt = $this->con->prepare("SELECT * FROM vaaf_users WHERE  u_id = :u_id ORDER BY u_id DESC");
    $stmt->execute(array(':u_id' => $role_id));  
    return $stmt;
}


//Get User info....
public function get_user_list()
{
   
    $stmt = $this->con->prepare("SELECT * FROM vaaf_users WHERE u_id != 1 ORDER BY u_id DESC");
    $stmt->execute(); 
    return $stmt;
}

//Get User info....
public function get_user_list2()
{
   
    $stmt = $this->con->prepare("SELECT * FROM vaaf_users WHERE u_id != 1 ORDER BY u_id DESC LIMIT 5");
    $stmt->execute(); 
    return $stmt;
}


//Get login user info....
public function get_login_user($id)
{
  
    $stmt = $this->con->prepare("SELECT * FROM vaaf_users WHERE u_id ='$id'");
    $stmt->execute(); 
    return $stmt;
}


//Delete user.....
public function delete_user($u_id, $u_name, $activity_msg, $activity_type, $user_id)
{
    $stmt = $this->con->prepare("DELETE  FROM vaaf_users WHERE u_id = :user_id");
    $stmt->execute(array(':user_id' => $user_id));

    $stmt_acti = $this->con->prepare("INSERT INTO vaaf_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
    $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

     return true;
}

//Update User status....
public function update_user_status($u_id, $u_name, $activity_msg, $activity_type, $user_id, $status)
{
   $stmt = $this->con->prepare("UPDATE vaaf_users SET u_status =:status WHERE u_id = :u_id ");
   $stmt->execute(array(':u_id' => $user_id, ':status'=>$status));

   $stmt_acti = $this->con->prepare("INSERT INTO vaaf_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
   $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type));

   return true;  
}

//Update User Role status....
public function add_user_role($u_id, $u_name, $activity_type, $activity_msg, $user_id, $user_role)
{
   $stmt = $this->con->prepare("UPDATE vaaf_users SET role_id =:role WHERE u_id = :u_id ");
   $stmt->execute(array(':u_id' => $user_id, ':role'=>$user_role));

   $stmt_acti = $this->con->prepare("INSERT INTO vaaf_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
   $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type));

   return true;  
}

public function get_user_role()
{

    $stmt = $this->con->prepare("SELECT * FROM vaaf_role WHERE role_id != 1 ");
    $stmt->execute(); 
    return $stmt;
    
}

//Update user password....
public function update_user_password($cu_pass, $n_pass, $c_pass)
{
   $u_id = $_SESSION['u_id'];

   $stmt = $this->con->prepare("SELECT u_password FROM vaaf_users WHERE u_id = :u_id");
    $stmt->execute(array(':u_id' => $u_id));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount()==1)
    {
      if(password_verify($cu_pass, $row['u_password']))
      {
        if($n_pass == $c_pass)
        {
          $hash_pass = password_hash($n_pass, PASSWORD_DEFAULT);
            $stmt1 = $this->con->prepare("UPDATE vaaf_users SET u_password =:hash_pass WHERE u_id = :u_id");
            $stmt1->execute(array(':u_id' => $u_id, ':hash_pass'=>$hash_pass));
            return true;

        }
      }
    }
}
}
?>