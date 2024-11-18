<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

    try {
        $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
        echo "Registration successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>
