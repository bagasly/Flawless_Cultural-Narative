<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Akun</title>
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

        <form method="post" action="./php/akun-tambah.php" enctype="multipart/form-data">
            <h2>Tambah Akun</h2>
            <div>
                <label for="gambar1">Foto Profile:</label><br>
                <input type="file" id="foto" name="foto" required><br>
            </div>
            <div>
                <label for="username">Nama</label>
                <input type="text" name="username" placeholder="Username" class="input-control" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="name@example.com" class="input-control" required />
            </div>
            <div>
                <label for="role">Role:</label>
                <input type="text" name="role" placeholder="Role" class="input-control" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" class="input-control" required />
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
        const linkButton = document.querySelector('.btn-logout');
        linkButton.addEventListener('click', function() {
            window.location.href = 'dashboard.php';
        });
    </script>
</body>


</html>