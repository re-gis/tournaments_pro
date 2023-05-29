<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "progetto";

$conn = mysqli_connect($host, $user, $password, $db);
if(!$conn){
 echo "Error: " . mysqli_connect_error;
}
?>
