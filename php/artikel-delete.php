<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ./index.php");
    exit();
}

if (isset($_GET['id'])) {
    require_once "koneksi.php";
    $id_story = $_GET['id'];

    $query = "DELETE FROM story WHERE id_story = :id_story";
    $stmt = $pdo->prepare($query);

    try {
        $stmt->bindParam(':id_story', $id_story, PDO::PARAM_INT);
        $deleted = $stmt->execute();

        if ($deleted) {
            header('Location: ../dashboard.php'); // Redirect to the page where data is displayed
            exit();
        } else {
            echo "Failed to delete artikel.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
