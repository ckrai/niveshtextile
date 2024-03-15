<?php include_once 'db-connect.php'; ?>
<?php 
class Payment extends Database{
//Add New Payment
public function add_new_payment($u_id, $uid, $u_name, $amount, $mode, $remark, $activity_msg, $activity_type)
{

    $stmt = $this->con->prepare("INSERT INTO vaaf_payment_recived (u_id, payrec_amount, payrec_remark, payrec_mode) VALUES (?,?,?,?)");

    $stmt_acti = $this->con->prepare("INSERT INTO vaaf_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");

    $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

    if($stmt->execute(array($uid, $amount, $remark, $mode)))
        return $this->con->lastInsertId();
    else
        return false;

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
   $stmt = $this->con->prepare("UPDATE aiims_users SET u_name = :u_name, u_email = :u_email, u_mobile = :u_mobile,  u_address = :u_address, u_profile_pic = :image WHERE u_id = :u_id");
   
   $stmt->execute(array(':u_name' => $u_name, ':u_email'=>$u_email, ':u_mobile'=>$u_mobile, ':u_address'=>$address, ':image'=>$image, ':u_id'=>$u_id));
   return true;
}




//Get User info....
// public function get_user()
// {
//     $u_id = $_SESSION['u_id'];
//     $stmt = $this->con->prepare("SELECT * FROM vaaf_users WHERE  u_id = :u_id ORDER BY u_id DESC");
//     $stmt->execute(array(':u_id' => $u_id)); 
//     $row = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $row;
// }


//Get User info....
public function get_user()
{
   
    $u_id = $_SESSION['u_id'];
    $stmt = $this->con->prepare("SELECT * FROM vaaf_users WHERE  u_id = :u_id ORDER BY u_id DESC");
    $stmt->execute(array(':u_id' => $u_id));  
    return $stmt;
}

//Get User info....
public function get_payment_list()
{
   
    $stmt = $this->con->prepare("SELECT * FROM vaaf_payment_recived RIGHT JOIN vaaf_users ON vaaf_users.u_id = vaaf_payment_recived.u_id WHERE vaaf_users.u_id != 1 AND vaaf_payment_recived.payrec_amount !=0 ORDER BY vaaf_payment_recived.u_id DESC");
    $stmt->execute(); 
    return $stmt;
}
//Get User info....
public function get_payment_list2()
{
   
    $stmt = $this->con->prepare("SELECT * FROM vaaf_payment_recived RIGHT JOIN vaaf_users ON vaaf_users.u_id = vaaf_payment_recived.u_id WHERE vaaf_users.u_id != 1 AND vaaf_payment_recived.payrec_amount !=0 ORDER BY vaaf_payment_recived.u_id DESC LIMIT 10");
    $stmt->execute(); 
    return $stmt;
}


//Get login user info....
public function get_login_user($id)
{
  
    $stmt = $this->con->prepare("SELECT * FROM aiims_users WHERE u_id ='$id'");
    $stmt->execute(); 
    return $stmt;
}


//Delete user.....
public function delete_user($u_id, $u_name, $activity_msg, $activity_type, $user_id)
{
    $stmt = $this->con->prepare("DELETE  FROM aiims_users WHERE u_id = :user_id");
    $stmt->execute(array(':user_id' => $user_id));

    $stmt_acti = $this->con->prepare("INSERT INTO aiims_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
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
   $stmt = $this->con->prepare("UPDATE aiims_users SET role_id =:role WHERE u_id = :u_id ");
   $stmt->execute(array(':u_id' => $user_id, ':role'=>$user_role));

   $stmt_acti = $this->con->prepare("INSERT INTO aiims_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
   $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type));

   return true;  
}

public function get_user_role()
{

    $stmt = $this->con->prepare("SELECT * FROM vaaf_role ");
    $stmt->execute(); 
    return $stmt;
    
}

//Update user password....
public function update_user_password($cu_pass, $n_pass, $c_pass)
{
   $u_id = $_SESSION['u_id'];

   $stmt = $this->con->prepare("SELECT u_password FROM aiims_users WHERE u_id = :u_id");
    $stmt->execute(array(':u_id' => $u_id));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount()==1)
    {
      if(password_verify($cu_pass, $row['u_password']))
      {
        if($n_pass == $c_pass)
        {
          $hash_pass = password_hash($n_pass, PASSWORD_DEFAULT);
            $stmt1 = $this->con->prepare("UPDATE aiims_users SET u_password =:hash_pass WHERE u_id = :u_id");
            $stmt1->execute(array(':u_id' => $u_id, ':hash_pass'=>$hash_pass));
            return true;

        }
      }
    }
}
}
?>