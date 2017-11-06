<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "api_master";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
?>
