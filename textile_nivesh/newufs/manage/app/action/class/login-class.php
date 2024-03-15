<?php 
include 'class/user-class.php';
class Login extends User{
    public function vaildate_login($email, $password, $bos, $ip, $port, $city, $country)
    {
        $stmt = $this->con->prepare("SELECT * FROM tech_users WHERE u_email = :u_email LIMIT 1");
        $stmt->execute(array(':u_email' => $email));
        if($stmt->rowCount() !=0)
        {
            $row = $stmt->fetch();
          
            if(password_verify($password, $row['u_password']) AND $row['u_status']==1)
            {   $status = 1;

                $stmt_log = $this->con->prepare("INSERT INTO tech_login_log (l_email, l_remote_ip, l_bos, l_port, l_city, l_country, l_status) VALUES (?,?,?,?,?,?,?)");   
                $stmt_log->execute(array($email, $ip, $bos, $port, $city, $country, $status));
               return $row;
            }
            else{

                $status = 0;

                $stmt_log = $this->con->prepare("INSERT INTO tech_login_log (l_email, l_remote_ip, l_bos, l_port, l_city, l_country, l_status) VALUES (?,?,?,?,?,?,?)");   
                $stmt_log->execute(array($email, $ip, $bos, $port, $city, $country, $status));
              
                 return null; 
                }
        }
        else
        {

            $status = 0;

            $stmt_log = $this->con->prepare("INSERT INTO tech_login_log (l_email, l_remote_ip, l_bos, l_port, l_city, l_country, l_status) VALUES (?,?,?,?,?,?,?)");   
            $stmt_log->execute(array($email, $ip, $bos, $port, $city, $country, $status));
              
            return null; 
        }
        
    }
}