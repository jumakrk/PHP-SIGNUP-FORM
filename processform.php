<?php
require 'connection.php';

// Debugging: Check if form data is received
// var_dump($_POST); //commented to prevent display

if(isset($_POST["username"], $_POST["email"], $_POST["password"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $query = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $query->bindParam(':username', $username);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $password);
    
    if ($query->execute()) {
        echo '<script>alert("Data inserted successfully")</script>';
    } else {
        echo '<script>alert("Failed to insert data")</script>';
        // Debugging: Check for SQL errors
        var_dump($query->errorInfo());
    }
}
?>
