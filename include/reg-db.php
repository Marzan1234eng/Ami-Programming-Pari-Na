<?php

include "connection.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if($password == $confirmPassword){
    $query = "SELECT * FROM `register` WHERE `username` = '{$username}'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    if($username == !$row["username"]){
        $sql = "INSERT INTO `register`(`email`, `username`, `password`)
VALUES 
       ('{$email}','{$username}','{$password}')";

        if ($conn->query($sql) === TRUE) {
            header('location:../register.php?msg=You have registered successfully.');
        } else {
            echo "Error creating database: " . $conn->error;
        }
    }
    else{
        header('location:../register.php?msg=User already exist.');
    }

}else{
    header('location:../register.php?msg=Password do not match.');
}

$conn->close();