<?php
require_once 'koneksi.php';
session_start();

// Mengambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Memeriksa kredensial pengguna
$query = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = $pdo->prepare($query);

try {
    $stmt->execute([$email, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['role'] = $user['role'];
        header('Location: ../index.php');
        exit();
    } else {
        echo "Email atau password salah.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
