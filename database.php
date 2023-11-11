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

    $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
    $password =  mysqli_real_escape_string($conn, $_REQUEST['password']);
    $email = isset($email) ? mysqli_real_escape_string($conn, $_REQUEST['email']) : null;
    $sql = "INSERT INTO info (username, email, password)   
    VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
