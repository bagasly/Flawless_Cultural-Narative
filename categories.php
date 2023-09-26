<?php
require_once "./php/koneksi.php";
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
        session_start();
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

    <section class="categories2">
      <div class="container">
        <?php
        require_once "./php/koneksi.php";

        if (isset($_GET['category_id'])) {
          $category_id = $_GET['category_id'];
          $query = "SELECT * FROM story WHERE categories_id = :category_id";
          $stmt = $pdo->prepare($query);
          $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
          $stmt->execute();

          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="content3" id="content3">
              <div class="column1">
                <img src="<?php echo $row['gambar_sampul']; ?>" alt="Gambar Sampul" width="100">
              </div>
              <div class="column2">

                <a href="story.php?id=<?php echo $row['id_story']; ?>">
                  <h3><?php echo $row['judul']; ?></h3>
                </a>
                <p id="paragraph">
                  <?php echo $row['konten']; ?>
                </p>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </section>

  </main>
  <footer>
    <section class="footer">
      <div class="footer-content">
        <div class="footer-column">
          <div class="navbar-logo">
            <h3>EDU <span>TUR</span></h3>
          </div>
        </div>
        <div class="footer-column">
          <div class="footer-link">
            <a href="about.php">ABOUT</a>
            <a href="help.php">HELP</a>
          </div>
          <h3>Follow Us</h3>
          <div class="social-media">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 EDUTUR. All rights reserved.</p>
      </div>
    </section>
  </footer>
  <script src="./javascript/script.js"></script>
  <script>
    //jumlah kata yang ditampilkan pada paragraf
    const maxChars = 500; // Batas karakter yang diizinkan
    const paragraph = document.querySelector("#paragraph");

    if (paragraph.textContent.length > maxChars) {
      paragraph.textContent =
        paragraph.textContent.slice(0, maxChars) + "...";
    }
  </script>
</body>

</html>