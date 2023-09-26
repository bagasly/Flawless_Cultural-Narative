<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Akun</title>
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
        input[type="email"],
        input[type="password"],
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
            background-color: #0bc455;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            opacity: 0.7;
        }

        button[name="close"] {
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[name="close"]:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <main>





        <?php
        session_start();
        require_once './php/koneksi.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Lakukan query untuk mendapatkan data artikel berdasarkan id_story
            $query = "SELECT * FROM users WHERE id = :id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        if (isset($_POST['submit'])) {
            $id = $_GET['id']; // Mengambil id_story dari parameter URL
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $role = $_POST["role"];

            // Menyiapkan variabel untuk gambar lama
            $foto_lama = $user['foto'];

            try {
                if ($_FILES["foto"]["name"] !== '') {
                    // Hapus gambar sampul lama jika ada
                    if (file_exists($foto_lama)) {
                        unlink($foto_lama);
                    }

                    $foto = "./uploads/" . uniqid() . "_" . basename($_FILES["foto"]["name"]);
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
                } else {
                    $foto = $foto_lama;
                }

                // Lakukan operasi SQL untuk update data artikel dalam database
                $query = "UPDATE users SET foto = :foto, username = :username, email = :email, role = :role, password = :password WHERE id=:id";

                $stmt = $pdo->prepare($query);

                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':foto', $foto, PDO::PARAM_STR);
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                $stmt->bindParam(':role', $role, PDO::PARAM_STR);

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
        if (isset($_POST['close'])) {
            header("Location: ./dashboard.php");
            exit();
        }
        ?>








        <form method="post" enctype="multipart/form-data">
            <h2>Update Akun</h2>
            <div>
                <input type="hidden" name="id" placeholder="Id" value="<?php echo isset($user) ? $user['id'] : ''; ?>" required readonly />
            </div>
            <div>
                <label for="foto">Foto Profile:</label><br>
                <?php if (isset($user['foto'])) : ?>
                    <img id="fotoPreview" src="<?php echo $user['foto']; ?>" alt=" Foto Profile" width="150">
                    <br>
                <?php endif; ?>
                <?php if (isset($user['foto'])) : ?>
                    <input type="hidden" name="old_foto" value="<?php echo $user['foto']; ?>">
                <?php endif; ?>
                <input type="file" id="foto" name="foto" onchange="previewImage(this, 'fotoPreview');">
            </div>
            <div>
                <label for="username">Nama:</label>
                <input type="text" name="username" placeholder="Username" value="<?php echo isset($user) ? $user['username'] : ''; ?>" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="name@example.com" value="<?php echo isset($user) ? $user['email'] : ''; ?>" rowrequired />
            </div>
            <div>
                <label for="role">Role:</label>
                <input type="text" name="role" placeholder="Role" value="<?php echo isset($user) ? $user['role'] : ''; ?>" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" value="<?php echo isset($user) ? $user['password'] : ''; ?>" required />
            </div>
            <div>
                <button type="submit" name="submit" value="submit" class="btn btn-save" required>
                    Save
                </button>
                <button name="close" value="close" class="btn btn-logout">
                    Close
                </button>
            </div>
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