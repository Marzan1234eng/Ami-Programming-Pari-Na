<?php
 include "connection.php";

$str_json = file_get_contents('php://input');
$newStr = "";
$data = json_decode($str_json, true)["inputString"];
for ($i = 0; $i < sizeof($data); $i++){
    $newStr .= $data[$i] . ( $i < sizeof($data) - 1 ? "," : "");
}
var_dump($newStr);
$sql = "INSERT INTO `input`(`input`) VALUES ('{$newStr}')";
if($conn->query($sql) === TRUE){
    //header("location:./book_update.php?msg=Book Updated.");
    print ("Database Updated.");
}