<?php
require_once 'koneksi.php';

// Mengambil data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Role default
$role = 'user';

// Menyimpan data ke database
$query = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($query);

try {
    $stmt->execute([$username, $email, $password, $role]);
    header('Location: ../masuk.html');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
