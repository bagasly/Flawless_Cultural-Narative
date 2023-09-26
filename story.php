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
    <section class="story">
      <div class="container">
        <?php
        require_once "./php/koneksi.php";

        if (isset($_GET['id'])) {
          $id_story = $_GET['id'];
          $query = "SELECT * FROM story WHERE id_story = :id_story";
          $stmt = $pdo->prepare($query);
          $stmt->bindParam(':id_story', $id_story, PDO::PARAM_INT);
          $stmt->execute();

          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <h2><?php echo $row['judul']; ?></h2>
            <img src="<?php echo $row['gambar_sampul']; ?>" alt="Gambar Sampul" width="100">
            <p>
              <?php echo $row['konten']; ?>
            </p>
            <div class="animasi">
              <div class="column4">
                <img src="<?php echo $row['gambar_1']; ?>" alt="Gambar 1" width="100">
              </div>
              <div class="column4">
                <p>
                  <?php echo $row['dialog_1']; ?>
                </p>
              </div>
              <div class="column4">
                <p>
                  <?php echo $row['dialog_2']; ?>
                </p>
              </div>
              <div class="column4">
                <img src="<?php echo $row['gambar_2']; ?>" alt="Gambar 2" width="100">
              </div>
            </div>
            <p>
              <?php echo $row['konten_2']; ?>
            </p>
        <?php
          }
        }
        ?>
      </div>
    </section>




    <section class="recomend">
      <h2>Rekomendasi Story</h2>
      <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousel">
          <div class="column">
            <div class="container2">
              <div class="image">
                <img src="./img/wayang.jpg" />
              </div>
              <div class="content">
                <div class="info">
                  <h2>Wayang Kulit</h2>
                  <p>
                    Wayang kulit adalah sebuah keajaiban seni pertunjukan tradisional Indonesia yang telah mempesona hati penonton selama berabad-abad. Budaya Wayang Kulit merupakan seni pertunjukan tradisional Indonesia
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="container2">
              <div class="image">
                <img src="./img/nyi-roro-kidul.jpg" />
              </div>
              <div class="content">
                <div class="info">
                  <h2>Nyi Roro Kidul</h2>
                  <p>
                    Nyi Roro Kidul adalah sosok dalam mitologi Jawa yang sering dianggap sebagai ratu penguasa laut selatan Pulau Jawa, yang meliputi pantai dari Yogyakarta hingga Jawa Barat dan memiliki cerita berbeda-beda tiap versinya
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="container2">
              <div class="image">
                <img src="./img/prambanan.jpeg" />
              </div>
              <div class="content">
                <div class="info">
                  <h2>Roro Jonggrang</h2>
                  <p>
                    Roro Jonggrang yang mendengar berita kekalahan kerajaannya hanya bisa menangis dan bersedih setiap harinya di istananya. Terlebih saat ia mengetahui kematian ayahnya
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="container2">
              <div class="image">
                <img src="./img/borobudur.jpg" />
              </div>
              <div class="content">
                <div class="info">
                  <h2>Roro Jonggrang</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eligendi veritatis deserunt facilis quia doloribus facere
                    quaerat officia ab odio voluptatum repellendus eum earum
                    eos, accusantium vitae dolorum. Praesentium, cumque ipsa.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="container2">
              <div class="image">
                <img src="./img/borobudur.jpg" />
              </div>
              <div class="content">
                <div class="info">
                  <h2><a href="story.php?id=35">Nyi Roro Kidul</a></h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eligendi veritatis deserunt facilis quia doloribus facere
                    quaerat officia ab odio voluptatum repellendus eum earum
                    eos, accusantium vitae dolorum. Praesentium, cumque ipsa.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="container2">
              <div class="image">
                <img src="./img/borobudur.jpg" />
              </div>
              <div class="content">
                <div class="info">
                  <h2><a href="story.php?id=34">Roro Jonggrang</a></h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eligendi veritatis deserunt facilis quia doloribus facere
                    quaerat officia ab odio voluptatum repellendus eum earum
                    eos, accusantium vitae dolorum. Praesentium, cumque ipsa.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
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
    //slider
    const carousel = document.querySelector(".carousel");
    const columnWidth = document.querySelector(".column").clientWidth;

    let currentIndex = 0;

    const showHideIcons = () => {
      document.getElementById("left").style.display =
        currentIndex === 0 ? "none" : "block";
      document.getElementById("right").style.display =
        currentIndex === 2 ? "none" : "block";
    };

    document.getElementById("left").addEventListener("click", () => {
      currentIndex = Math.max(0, currentIndex - 1);
      carousel.scrollLeft = currentIndex * columnWidth;
      showHideIcons();
    });

    document.getElementById("right").addEventListener("click", () => {
      currentIndex = Math.min(2, currentIndex + 1);
      carousel.scrollLeft = currentIndex * columnWidth;
      showHideIcons();
    });

    carousel.addEventListener("scroll", () => {
      currentIndex = Math.round(carousel.scrollLeft / columnWidth);
      showHideIcons();
    });
  </script>
</body>

</html>