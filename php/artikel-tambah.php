<?php
session_start();
require_once 'koneksi.php'; // Menghubungkan ke file koneksi

if (isset($_POST['submit'])) {
    $judul = $_POST["judul"];
    $konten = $_POST["konten"];
    $konten_2 = $_POST["konten2"];
    $dialog_1 = $_POST["dialog1"];
    $dialog_2 = $_POST["dialog2"];
    $categories_id = $_POST["kategori"];

    // Menggunakan uniqid() untuk membuat nama unik untuk file gambar
    $gambar_sampul = "../uploads/" . uniqid() . "_" . basename($_FILES["gambar_sampul"]["name"]);
    $gambar_1 = "../uploads/" . uniqid() . "_" . basename($_FILES["gambar1"]["name"]);
    $gambar_2 = "../uploads/" . uniqid() . "_" . basename($_FILES["gambar2"]["name"]);

    // Lakukan proses upload gambar untuk setiap gambar
    move_uploaded_file($_FILES["gambar_sampul"]["tmp_name"], $gambar_sampul);
    move_uploaded_file($_FILES["gambar1"]["tmp_name"], $gambar_1);
    move_uploaded_file($_FILES["gambar2"]["tmp_name"], $gambar_2);

    try {
        // Lakukan operasi SQL untuk memasukkan data artikel ke dalam database
        $query = "INSERT INTO story (judul, konten, konten_2, dialog_1, dialog_2, categories_id, gambar_sampul, gambar_1, gambar_2) VALUES (:judul, :konten, :konten_2, :dialog_1, :dialog_2, :categories_id, :gambar_sampul, :gambar_1, :gambar_2)";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':judul', $judul, PDO::PARAM_STR);
        $stmt->bindParam(':konten', $konten, PDO::PARAM_STR);
        $stmt->bindParam(':konten_2', $konten_2, PDO::PARAM_STR);
        $stmt->bindParam(':dialog_1', $dialog_1, PDO::PARAM_STR);
        $stmt->bindParam(':dialog_2', $dialog_2, PDO::PARAM_STR);
        $stmt->bindParam(':categories_id', $categories_id, PDO::PARAM_INT);
        $stmt->bindParam(':gambar_sampul', $gambar_sampul, PDO::PARAM_STR);
        $stmt->bindParam(':gambar_1', $gambar_1, PDO::PARAM_STR);
        $stmt->bindParam(':gambar_2', $gambar_2, PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location: ../dashboard.php');
            exit();
        } else {
            echo "Terjadi kesalahan saat memasukkan data.";
        }
    } catch (PDOException $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
}
