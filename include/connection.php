<?php

$servername = "localhost";
$serverUsername = "root";
$password = "";
$database = "code_pari_na";

$conn = mysqli_connect($servername,$serverUsername,$password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*echo "Connected successfully";*/