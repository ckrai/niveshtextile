<?php include_once 'db-connect.php'; ?>
<?php 
class Activity extends Database{
//Get category for a list.
  public function get_activity()
  {
      //$u_id = $_SESSION['u_id'];
      $stmt = $this->con->prepare("SELECT * FROM tech_activity ORDER BY date ASC ");
      $stmt->execute(); 
      $row = $stmt->fetchAll(); 
      return $row;
  }

  //Get category for a list.
  public function get_login_log()
  {
      $r_id = $_SESSION['r_id'];
     
      $stmt = $this->con->prepare("SELECT * FROM tech_login_log ORDER BY date ASC ");
      $stmt->execute(); 
      $row = $stmt->fetchAll(); 
      return $row;
  }

}
?>