<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief_camp";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Connect failed: %s\n".$connect->connect_error);   
}
?>