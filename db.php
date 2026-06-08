<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kuet_tech_club";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed");
}
?>