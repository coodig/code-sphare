<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "code_sphare";

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error){
    die("connection error: ". mysqli_connect_error()) ;
}
?>