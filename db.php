<?php
$user = "id1534147_admin";
$password = "2cickaPRO";
$database = "id1534147_moja_galerija_online";
$hostname = "localhost";

$conn = new mysqli($hostname, $user, $password);

mysqli_select_db($conn, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


error_reporting(0);
?>