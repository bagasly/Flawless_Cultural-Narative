<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Artikel</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #e0e0e0;
            text-align: center;
            background-color: #0056b3;
            color: #fff;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fff;
        }

        #kategori {
            width: 99%;
        }

        input[type="file"] {
            margin-bottom: 15px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <main>

        <?php
        session_start();
        require_once './php/koneksi.php';

        if (isset($_GET['id_story'])) {
            $id_story = $_GET['id_story'];

            // Lakukan query untuk mendapatkan data artikel berdasarkan id_story
            $query = "SELECT * FROM story WHERE id_story = :id_story";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':id_story', $id_story, PDO::PARAM_INT);
            $stmt->execute();
            $artikel = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        if (isset($_POST['submit'])) {
            $artikel_id = $_GET['id_story']; // Mengambil id_story dari parameter URL
            $judul = $_POST["judul"];
            $konten = $_POST["konten"];
            $dialog_1 = $_POST["dialog1"];
            $dialog_2 = $_POST["dialog2"];
            $categories_id = $_POST["kategori"];

            // Menyiapkan variabel untuk gambar lama
            $gambar_sampul_lama = $artikel['gambar_sampul'];
            $gambar_1_lama = $artikel['gambar_1'];
            $gambar_2_lama = $artikel['gambar_2'];

            try {
                if ($_FILES["gambar_sampul"]["name"] !== '') {
                    // Hapus gambar sampul lama jika ada
                    if (file_exists($gambar_sampul_lama)) {
                        unlink($gambar_sampul_lama);
                    }

                    $gambar_sampul = "./uploads/" . uniqid() . "_" . basename($_FILES["gambar_sampul"]["name"]);
                    move_uploaded_file($_FILES["gambar_sampul"]["tmp_name"], $gambar_sampul);
                } else {
                    $gambar_sampul = $gambar_sampul_lama;
                }

                if ($_FILES["gambar_1"]["name"] !== '') {
                    // Hapus gambar 1 lama jika ada
                    if (file_exists($gambar_1_lama)) {
                        unlink($gambar_1_lama);
                    }

                    $gambar_1 = "./uploads/" . uniqid() . "_" . basename($_FILES["gambar_1"]["name"]);
                    move_uploaded_file($_FILES["gambar_1"]["tmp_name"], $gambar_1);
                } else {
                    $gambar_1 = $gambar_1_lama;
                }
                if ($_FILES["gambar_2"]["name"] !== '') {
                    // Hapus gambar 2 lama jika ada
                    if (file_exists($gambar_2_lama)) {
                        unlink($gambar_2_lama);
                    }

                    $gambar_2 = "./uploads/" . uniqid() . "_" . basename($_FILES["gambar_2"]["name"]);
                    move_uploaded_file($_FILES["gambar_2"]["tmp_name"], $gambar_2);
                } else {
                    $gambar_2 = $gambar_2_lama;
                }


                // Lakukan operasi SQL untuk update data artikel dalam database
                $query = "UPDATE story SET judul = :judul, konten = :konten, dialog_1 = :dialog_1, dialog_2 = :dialog_2, categories_id = :categories_id, gambar_sampul = :gambar_sampul, gambar_1 = :gambar_1, gambar_2 = :gambar_2 WHERE id_story = :artikel_id";

                $stmt = $pdo->prepare($query);

                $stmt->bindParam(':artikel_id', $artikel_id, PDO::PARAM_INT);
                $stmt->bindParam(':judul', $judul, PDO::PARAM_STR);
                $stmt->bindParam(':konten', $konten, PDO::PARAM_STR);
                $stmt->bindParam(':dialog_1', $dialog_1, PDO::PARAM_STR);
                $stmt->bindParam(':dialog_2', $dialog_2, PDO::PARAM_STR);
                $stmt->bindParam(':categories_id', $categories_id, PDO::PARAM_INT);
                $stmt->bindParam(':gambar_sampul', $gambar_sampul, PDO::PARAM_STR);
                $stmt->bindParam(':gambar_1', $gambar_1, PDO::PARAM_STR);
                $stmt->bindParam(':gambar_2', $gambar_2, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    header('Location: dashboard.php');
                    exit();
                } else {
                    echo "Terjadi kesalahan saat mengupdate data.";
                }
            } catch (PDOException $e) {
                echo "Terjadi kesalahan: " . $e->getMessage();
            }
        }
        ?>




        <form method="post" enctype="multipart/form-data">
            <h2>Update Artikel</h2>

            <input type="text" id="judul" name="judul" value="<?php echo isset($artikel) ? $artikel['id_story'] : ''; ?>" required><br>

            <label for="judul">Judul:</label><br>
            <input type="text" id="judul" name="judul" value="<?php echo isset($artikel) ? $artikel['judul'] : ''; ?>" required><br>

            <label for="gambar_sampul">Gambar Sampul:</label><br>
            <?php if (isset($artikel['gambar_sampul'])) : ?>
                <img id="gambarSampulPreview" src="<?php echo $artikel['gambar_sampul']; ?>" alt="Gambar Sampul" width="150">
                <br>
            <?php endif; ?>
            <?php if (isset($artikel['gambar_sampul'])) : ?>
                <input type="hidden" name="old_gambar_sampul" value="<?php echo $artikel['gambar_sampul']; ?>">
            <?php endif; ?>
            <input type="file" id="gambar_sampul" name="gambar_sampul" onchange="previewImage(this, 'gambarSampulPreview');">

            <label for="konten">Konten:</label><br>
            <textarea id="konten" name="konten" rows="4" cols="50"><?php echo isset($artikel) ? $artikel['konten'] : ''; ?></textarea><br>

            <label for="kategori">Kategori:</label><br>
            <select id="kategori" name="kategori">
                <option value="3" <?php echo (isset($artikel) && $artikel['categories_id'] == 3) ? 'selected' : ''; ?>>Budaya</option>
                <option value="2" <?php echo (isset($artikel) && $artikel['categories_id'] == 2) ? 'selected' : ''; ?>>Mitos</option>
                <option value="1" <?php echo (isset($artikel) && $artikel['categories_id'] == 1) ? 'selected' : ''; ?>>Legenda</option>
            </select><br>

            <label for="gambar1">Gambar Pertama:</label><br>
            <?php if (isset($artikel['gambar_1'])) : ?>
                <img id="gambarPertamaPreview" src="<?php echo $artikel['gambar_1']; ?>" alt="Gambar Pertama" width="150">
                <br>
            <?php endif; ?>
            <?php if (isset($artikel['gambar_1'])) : ?>
                <input type="hidden" name="old_gambar_1" value="<?php echo $artikel['gambar_1']; ?>">
            <?php endif; ?>
            <input type="file" id="gambar1" name="gambar_1" onchange="previewImage(this, 'gambarPertamaPreview');">

            <label for="dialog1">Dialog 1:</label><br>
            <textarea id="dialog1" name="dialog1" rows="4" cols="50"><?php echo isset($artikel) ? $artikel['dialog_1'] : ''; ?></textarea><br>

            <label for="gambar2">Gambar Kedua:</label><br>
            <?php if (isset($artikel['gambar_2'])) : ?>
                <img id="gambarKeduaPreview" src="<?php echo $artikel['gambar_2']; ?>" alt="Gambar Kedua" width="150">
                <br>
            <?php endif; ?>
            <?php if (isset($artikel['gambar_2'])) : ?>
                <input type="hidden" name="gambar_2" value="<?php echo $artikel['gambar_2']; ?>">
            <?php endif; ?>
            <input type="file" id="gambar2" name="gambar_2" onchange="previewImage(this, 'gambarKeduaPreview');">

            <label for="dialog2">Dialog 2:</label><br>
            <textarea id="dialog2" name="dialog2" rows="4" cols="50"><?php echo isset($artikel) ? $artikel['dialog_2'] : ''; ?></textarea><br>

            <button type="submit" name="submit">Update Artikel</button>
        </form>


    </main>

    <script>
        function previewImage(input, previewId) {
            var preview = document.getElementById(previewId);
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '';
            }
        }
    </script>


</body>

</html>