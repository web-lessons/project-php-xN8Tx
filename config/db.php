<?php
$host = "127.0.0.1";
$login = "root";
$password = "";
$database = "ggg";

$mysqli = mysqli_connect($host, $login, $password);

if($mysqli->connect_error){
    die("DB error");
}
?>