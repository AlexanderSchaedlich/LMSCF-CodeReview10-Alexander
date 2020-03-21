<?php 

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "cr10_alexander_biglibrary";

// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
}

?>