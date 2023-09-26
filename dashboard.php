<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ./index.php");
    exit();
}
?>



<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edutur</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="index.php" class="navbar-logo">EDU <span>TUR</span></a>
            <div class="navbar-nav">
                <a href="profile.php" id="profile">PROFILE</a>

                <?php
                // Cek apakah pengguna sudah login dan memiliki role "admin"
                if (isset($_SESSION['user_id'])) {
                    // Ganti "admin" dengan nilai role yang menandakan admin
                    if ($_SESSION['role'] === "admin") {
                        echo '<a href="dashboard.php">DASHBOARD</a>';
                    }
                }
                ?>

                <a href="about.php">ABOUT</a>
                <a href="help.php">HELP</a>
            </div>
            <?php
            // Cek apakah pengguna sudah login dan memiliki role "admin"
            if (isset($_SESSION['user_id'])) {
                echo '<a href="profile.php"><i class="fa-solid fa-user"></i></a>';
            } else {
                echo '<a href="masuk.html"><i class="fa-solid fa-user"></i></a>';
            }
            ?>
            <div class="navbar-extra">
                <a href="#" id="menu"><i class="fa-solid fa-bars"></i></a>
            </div>
        </nav>
    </header>
    <main>
        <section class="admin">
            <div class="sidebar">
                <div class="main">
                    <h2>DASHBOARD</h2>
                    <div class="list-item">
                        <ul>
                            <li onclick="showContent('akun')" class="active">Data Akun</li>
                        </ul>
                    </div>
                    <br />
                    <h2>STORY</h2>
                    <div class="list-item">
                        <ul>
                            <li onclick="showContent('legends')">Legends</li>
                            <li onclick="showContent('myths')">Myths</li>
                        </ul>
                    </div>
                </div>
            </div>



            <!-- DATA AKUN -->
            <div id="form">
                <div id="akun" class="content-section">
                    <section id="data-akun">
                        <h2>Data Akun</h2>
                        <div class="dashboard">
                            <a href="akun-tambah.php"><button class="btn-add">Tambah Data</button></a>
                            <div class="box-table">
                                <table border="1" cellspacing="0" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto Profile</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once "./php/koneksi.php";
                                        $query = "SELECT * FROM users";
                                        $stmt = $pdo->prepare($query);
                                        $stmt->execute();

                                        $no = 1;
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr>

                                                <td><?php echo $no; ?></td>
                                                <td><img src="<?php echo $row['foto']; ?>" alt="Foto Profile" width="100"></td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['role'] ?></td>
                                                <td><?php echo $row['password'] ?></td>
                                                <td>
                                                    <p>
                                                        <button class="btn-edit" onclick="editAkun(<?php echo $row['id']; ?>)">EDIT</button> ||
                                                        <button class="btn-delete" onclick="confirmDelete(<?php echo $row['id']; ?>)">DELETE</button>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                    </section>
                </div>



                <!-- LEGENDA -->
                <div id="legends" class="content-section">
                    <section id="data-legends">
                        <h2>Cerita Legenda</h2>
                        <div class="dashboard">
                            <a href="tambahArtikel.html"><button class="btn-add">Tambah Data</button></a>
                            <div class="box-table">
                                <table border="1" cellspacing="0" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Gambar Sampul</th>
                                            <th>Konten</th>
                                            <th>Konten 2</th>
                                            <th>gambar 1</th>
                                            <th>Dialog 1</th>
                                            <th>Gambar 2</th>
                                            <th>Dialog 2</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once "./php/koneksi.php";
                                        $query = "SELECT * FROM story WHERE categories_id = 1"; // Ganti 'nama_tabel' dengan nama tabel yang sesuai
                                        $stmt = $pdo->prepare($query);
                                        $stmt->execute();

                                        $no = 1;
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row['judul'] ?></td>
                                                <td><img src="<?php echo $row['gambar_sampul']; ?>" alt="Gambar Sampul" width="100"></td>
                                                <td><?php echo $row['konten'] ?></td>
                                                <td><?php echo $row['konten_2'] ?></td>
                                                <td><img src="<?php echo $row['gambar_1']; ?>" alt="Gambar 1" width="100"></td>
                                                <td><?php echo $row['dialog_1'] ?></td>
                                                <td><img src="<?php echo $row['gambar_2']; ?>" alt="Gambar 2" width="100"></td>
                                                <td><?php echo $row['dialog_2'] ?></td>
                                                <td>
                                                    <p>
                                                        <button class="btn-edit" onclick="editArticle(<?php echo $row['id_story']; ?>)">EDIT</button> ||
                                                        <button class="btn-delete" onclick="confirmDeleteArtikel(<?php echo $row['id_story']; ?>)">DELETE</button>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>



                <!-- MITOS -->
                <div id="myths" class="content-section">
                    <section id="data-myths">
                        <h2>Cerita Mitos</h2>
                        <div class="dashboard">
                            <a href="tambahArtikel.html"><button class="btn-add">Tambah Data</button></a>
                            <div class="box-table">
                                <table border="1" cellspacing="0" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Gambar Sampul</th>
                                            <th>Konten</th>
                                            <th>Konten 2</th>
                                            <th>gambar 1</th>
                                            <th>Dialog 1</th>
                                            <th>Gambar 2</th>
                                            <th>Dialog 2</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once "./php/koneksi.php";
                                        $query = "SELECT * FROM story WHERE categories_id = 2"; // Ganti 'nama_tabel' dengan nama tabel yang sesuai
                                        $stmt = $pdo->prepare($query);
                                        $stmt->execute();

                                        $no = 1;
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row['judul'] ?></td>
                                                <td><img src="<?php echo $row['gambar_sampul']; ?>" alt="Gambar Sampul" width="100"></td>
                                                <td><?php echo $row['konten'] ?></td>
                                                <td><?php echo $row['konten_2'] ?></td>
                                                <td><img src="<?php echo $row['gambar_1']; ?>" alt="Gambar 1" width="100"></td>
                                                <td><?php echo $row['dialog_1'] ?></td>
                                                <td><img src="<?php echo $row['gambar_2']; ?>" alt="Gambar 2" width="100"></td>
                                                <td><?php echo $row['dialog_2'] ?></td>
                                                <td>
                                                    <p>
                                                        <button class="btn-edit" onclick="editArticle(<?php echo $row['id_story']; ?>)">EDIT</button> ||
                                                        <button class="btn-delete" onclick="confirmDeleteArtikel(<?php echo $row['id_story']; ?>)">DELETE</button>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>



    <script src="./javascript/script.js"></script>
    <script>
        function editArticle(id_story) {
            window.location.href = "artikel-update.php?id_story=" + id_story;
        }

        function editAkun(id) {
            window.location.href = "akun-update.php?id=" + id;
        }


        function confirmDelete(id) {
            var shouldDelete = confirm("Are you sure you want to delete this user?");
            if (shouldDelete) {
                window.location.href = "./php/akun-delete.php?id=" + id;
            }
        }

        function confirmDeleteArtikel(id) {
            var shouldDelete = confirm("Are you sure you want to delete this artikel?");
            if (shouldDelete) {
                window.location.href = "./php/artikel-delete.php?id=" + id;
            }
        }

        var activeMenuItem = null;

        function showContent(formId) {
            var contents = document.querySelectorAll("#form .content-section");
            for (var i = 0; i < contents.length; i++) {
                contents[i].classList.remove("show");
            }

            var selectedContent = document.getElementById(formId);
            selectedContent.classList.add("show");

            var menuItems = document.querySelectorAll(".main div");
            for (var i = 0; i < menuItems.length; i++) {
                menuItems[i].classList.remove("active");
            }

            var selectedMenuItem = event.target;
            selectedMenuItem.classList.add("active");

            if (activeMenuItem && activeMenuItem !== selectedMenuItem) {
                activeMenuItem.classList.remove("active");
            }

            activeMenuItem = selectedMenuItem;
        }
    </script>
</body>

</html>