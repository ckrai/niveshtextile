<?php include_once 'db-connect.php'; ?>
<?php 
class Dashboard extends Database{

//************************Dashboard Function*************//////////
    ///////*************************************//////////
public function get_total_payment()
{
$stmt = $this->con->prepare("SELECT SUM(payrec_amount) FROM vaaf_payment_recived");
        $stmt->execute(); 
        return $stmt->fetchColumn();
}

public function get_notice_number()
{
$stmt = $this->con->prepare("SELECT count(*) FROM avlamb_notice");
        $stmt->execute(); 
        return $stmt->fetchColumn();
}

public function get_user_number()
{
$stmt = $this->con->prepare("SELECT count(*) FROM vaaf_users WHERE u_id != 1");
        $stmt->execute(); 
        return $stmt->fetchColumn();
}
public function get_userDeactivate_number()
{
$stmt = $this->con->prepare("SELECT count(*) FROM vaaf_users WHERE u_status=0 AND u_id != 1 ");
        $stmt->execute(); 
        return $stmt->fetchColumn();
}

public function get_district_list()
{
$stmt = $this->con->prepare("SELECT vaaf_users.u_district,vaaf_payment_recived.payrec_amount,vaaf_payment_recived.payrec_pending_amount FROM vaaf_payment_recived LEFT JOIN vaaf_users ON vaaf_users.u_id=vaaf_payment_recived.u_id WHERE vaaf_users.u_id != 1 GROUP BY vaaf_users.u_district");
        $stmt->execute();
         return $stmt;
}


  
}

?>