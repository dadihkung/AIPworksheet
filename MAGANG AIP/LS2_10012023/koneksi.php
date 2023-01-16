<?php
$servername = "localhost";
$database = "usercreation";
$username = "root";
$password = "";
// Create connection
$coinn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$coinn) {
    die("Connection failed: " . mysqli_connect_error());
}
