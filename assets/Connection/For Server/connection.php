<?php
//1. เชื่อมต่อ database: 
$serverName = "localhost";
$userName = "pronetserm_c";
$userPassword = "0853166969";
$dbName = "pronetserm_pro";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

if ($conn->connect_errno) {
    die( "Failed to connect to MySQL : (" . $conn->connect_errno . ") " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>