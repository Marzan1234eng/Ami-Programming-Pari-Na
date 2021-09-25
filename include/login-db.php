<?php

include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM `register` WHERE `username` = '{$username}' AND `password` = '{$password}'";
$result = $conn->query($sql);

if($result->num_rows == 1){
    header("location:../search.php?");
}
else{
    header('location:../index.php?msg=Wrong Username / Password.');
}

$conn->close();