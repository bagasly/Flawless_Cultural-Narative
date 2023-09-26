<?php
session_start();
require_once "koneksi.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    // Menggunakan uniqid() untuk membuat nama unik untuk file gambar
    $foto = "../uploads/" . uniqid() . "_" . basename($_FILES["foto"]["name"]);

    // Lakukan proses upload gambar untuk setiap gambar
    move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
    // Perform validation if needed

    $query = "INSERT INTO users (foto, username, email, role, password) VALUES (:foto,:username, :email, :role, :password)";
    $stmt = $pdo->prepare($query);

    try {
        $stmt->bindParam(':foto', $foto, PDO::PARAM_STR);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $inserted = $stmt->execute();

        if ($inserted) {
            header('Location: ../dashboard.php');
            exit();
        } else {
            echo "Terjadi kesalahan saat memperbarui data.";
        }
    } catch (PDOException $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
}
if (isset($_POST['close'])) {
    header("Location: ./dashboard.php");
    exit();
}
