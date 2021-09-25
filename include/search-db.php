<?php
session_start();
if (isset($_SESSION["username"])) {
    include "connection.php";

    $str_json = file_get_contents('php://input');
    $newStr = "";
    $data = json_decode($str_json, true)["inputString"];
    $username = $_SESSION["username"];
    for ($i = 0; $i < sizeof($data); $i++) {
        $newStr .= $data[$i] . ($i < sizeof($data) - 1 ? "," : "");
    }
    var_dump($username);

    $sql = "INSERT INTO `input`(`input`,`username`) VALUES ('{$newStr}','{$username}')";
    if ($conn->query($sql) === TRUE) {
        print ("Database Updated.");
    }

    $conn->close();
}