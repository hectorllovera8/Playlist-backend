<?php

header('Content-Type: application/json');



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "playlist";
//
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "playlist";
*/

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>