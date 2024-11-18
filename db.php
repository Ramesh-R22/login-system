<?php
// db.php
$dsn = 'pgsql:host=localhost;port=5432;dbname=mydb';
$username = 'postgres';
$password = 'postgres';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
