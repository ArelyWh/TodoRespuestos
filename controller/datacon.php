<?php
session_start();

/*
$servername = "sql313.rf.gd";
$username = "rfgd_19651452";
$password = "Gamer2017";
$dbname = "rfgd_19651452_todorepuestos";
*/

/**/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todorepuestos";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>