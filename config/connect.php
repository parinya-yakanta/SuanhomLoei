<?php
date_default_timezone_set("Asia/Bangkok");
$servername = "localhost";
$username = "xxxxx"; 
$password = "xxxxxxxxx"; 
$dbname = "xxxxxxxxxxxx";


$conn = new mysqli($servername,$username,$password,$dbname) or die('not connect to sql');
 mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
