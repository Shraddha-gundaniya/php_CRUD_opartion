<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_project";
$conn = mysqli_connect($servername, $username, $password,$db);

if(!$conn)

{
    die("connn isfailed:".mysqli_connect_error());
}
echo "connection successfully";


?>