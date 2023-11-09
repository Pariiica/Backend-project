<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'connect-db';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username =  $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password =  $_REQUEST['password'];
    $sql = "INSERT INTO info (username, email, password)   
    VALUES ('$username', '$email', '$password')";

    $conn->query($sql);
}