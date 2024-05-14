<?php
// Database connection settings
$host = 'localhost'; // or your database host
$dbname = 'phpdatabase'; // your database name
$username = 'root'; // your database username
$password = ''; // your database password

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Connected successfully using the try catch method"; // Uncomment for debugging //commented to not display if working
} catch (PDOException $e) {
    die("Connection failed using the try catch method: " . $e->getMessage());
}
?>
