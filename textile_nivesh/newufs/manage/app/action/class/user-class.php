<?php include_once 'db-connect.php'; ?>
<?php 
class User extends Database{



//Update user record...
public function update_user_profile($u_name, $u_email, $address, $u_mobile, $image)
{
   $u_id = $_SESSION['u_id'];
   $stmt = $this->con->prepare("UPDATE tech_users SET u_name = :u_name, u_email = :u_email, u_mobile = :u_mobile,  u_address = :u_address, u_profile_pic = :image WHERE u_id = :u_id");
   
   $stmt->execute(array(':u_name' => $u_name, ':u_email'=>$u_email, ':u_mobile'=>$u_mobile, ':u_address'=>$address, ':image'=>$image, ':u_id'=>$u_id));
   return true;
}

public function add_contact($name, $email, $subject, $message)
  {
     
    $stmt = $this->con->prepare("INSERT INTO tech_contact (con_name,con_email,con_subject,con_message) VALUES (?,?,?,?)");

    if($stmt->execute(array($name,$email,$subject,$message)))
        return $this->con->lastInsertId();
    else
        return false;
            
  }




//Get User
public function get_user()
{
   
    $u_id = $_SESSION['u_id'];
    $stmt = $this->con->prepare("SELECT * FROM tech_users WHERE  u_id = :u_id ORDER BY u_id DESC");
    $stmt->execute(array(':u_id' => $u_id)); 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}



//Update user password
public function update_user_password($cu_pass, $n_pass, $c_pass)
{
   $u_id = $_SESSION['u_id'];

   $stmt = $this->con->prepare("SELECT u_password FROM tech_users WHERE u_id = :u_id");
    $stmt->execute(array(':u_id' => $u_id));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount()==1)
    {
      if(password_verify($cu_pass, $row['u_password']))
      {
        if($n_pass == $c_pass)
        {
          $hash_pass = password_hash($n_pass, PASSWORD_DEFAULT);
            $stmt1 = $this->con->prepare("UPDATE tech_users SET u_password =:hash_pass WHERE u_id = :u_id");
            $stmt1->execute(array(':u_id' => $u_id, ':hash_pass'=>$hash_pass));
            return true;

        }
      }
    }
}


}
?>