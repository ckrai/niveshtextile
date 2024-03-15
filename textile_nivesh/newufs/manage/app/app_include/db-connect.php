<?php
// error_reporting(0);
class Database
{
public $con;
public function __construct(){

 
$hostname = "localhost";
$username = "u920553048_vaa_use";
$password = "P@55word";
$this->con = new PDO("mysql:host=$hostname;dbname=u920553048_vaa",$username,$password);

    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
if (!$this->con) {
 echo "Error in Connecting ".mysqli_connect_error();
}
}
}
?>