<?php
error_reporting(0);
class Database
{
public $con;
public function __construct(){
$hostname = "localhost";
$username = "root";
$password = "";
$this->con = new PDO("mysql:host=$hostname;dbname=vaa",$username,$password);

    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
if (!$this->con) {
 echo "Error in Connecting ".mysqli_connect_error();
}
}
}
?>