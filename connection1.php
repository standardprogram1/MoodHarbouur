<?php
$servername = "localhost";
$user = "root";
$pass = ""; 
$database = "quiz_app";

$conn = mysqli_connect($servername, $user, $pass,$database);
if(!$conn)
{
    die(mysqli_connect_error());
}

?>