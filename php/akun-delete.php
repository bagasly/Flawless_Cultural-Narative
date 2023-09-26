<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ./index.php");
    exit();
}

if (isset($_GET['id'])) {
    require_once "koneksi.php";
    $userId = $_GET['id'];

    $query = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($query);

    try {
        $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
        $deleted = $stmt->execute();

        if ($deleted) {
            header('Location: ../dashboard.php'); // Redirect to the page where data is displayed
            exit();
        } else {
            echo "Failed to delete user.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
