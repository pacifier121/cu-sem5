<?php

$servername = "localhost";
$username = "pacifire";
$password = "passwd";
$db = "mydb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
