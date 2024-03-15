<?php 
include 'class/user-class.php';
class Login extends User{
    public function vaildate_login($email, $password, $bos, $ip, $port, $city, $country)
    {
        $stmt = $this->con->prepare("SELECT * FROM vaaf_users RIGHT JOIN vaaf_role ON vaaf_role.role_id = vaaf_users.role_id WHERE u_email = :u_email OR u_name = :u_name LIMIT 1");
        $stmt->execute(array(':u_email' => $email, ':u_name' => $email));

        if($stmt->rowCount() !=0)
        {
            $row = $stmt->fetch();
          
            if(password_verify($password, $row['u_password']) AND $row['u_status']==1 AND $row['role_id']!=0)
            {   $status = 1;

                $stmt_log = $this->con->prepare("INSERT INTO vaaf_login_log (l_email, l_remote_ip, l_bos, l_port, l_city, l_country, l_status) VALUES (?,?,?,?,?,?,?)");   
                $stmt_log->execute(array($email, $ip, $bos, $port, $city, $country, $status));
               return $row;
            }
            else{

                $status = 0;

                $stmt_log = $this->con->prepare("INSERT INTO vaaf_login_log (l_email, l_remote_ip, l_bos, l_port, l_city, l_country, l_status) VALUES (?,?,?,?,?,?,?)");   
                $stmt_log->execute(array($email, $ip, $bos, $port, $city, $country, $status));
              
                 return null; 
                }
        }
        else
        {

            $status = 0;

            $stmt_log = $this->con->prepare("INSERT INTO vaaf_login_log (l_email, l_remote_ip, l_bos, l_port, l_city, l_country, l_status) VALUES (?,?,?,?,?,?,?)");   
            $stmt_log->execute(array($email, $ip, $bos, $port, $city, $country, $status));
              
            return null; 
        }
        
    }
}