<?php 

$host="localhost";
$port=3307;
$socket="";
$user="root";
$password="123456";
$dbname="bearsnetwork";

$conn = new mysqli($host, $user, $password, $dbname, $port);

if($conn->connect_error) {
	echo $conn->connect_error;
} 

$conn->set_charset('utf8');
//$con->close();

?>
