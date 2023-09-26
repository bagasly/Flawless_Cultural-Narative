<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edutur</title>

  <!-- font -->
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
    <section class="hero"></section>
    <section class="categories">
      <a href="categories.php?category_id=3">CULTURE</a>
      <a href="categories.php?category_id=2">MYTHS</a>
      <a href="categories.php?category_id=1">LEGENDS</a>
    </section>
    <section id="content1">
      <div class="content1" data-aos="fade-up">
        <h2>CULTURE</h2>
        <p>
          Budaya adalah cara hidup yang berkembang dan dimiliki sebuah kelompok
          orang yang berupa kumpulan nilai-nilai, norma-norma, kepercayaan,
          praktik-praktik, bahasa, seni, adat istiadat, dan pola perilaku yang
          diwariskan dari generasi ke generasi. Budaya mencakup kumpulan
          pola-pola kehidupan yang dipelajari oleh sekelompok manusia untuk
          memahami dunia di sekitarnya dari generasi-generasi sebelumnya dan
          akan diteruskan kepada generasi yang akan datang. simak penjelasan
          lengkapnya.
        </p>
        <a href="descriptionCulture.php" class="detail">
          <i>Selengkapnya</i>
        </a>
      </div>
    </section>

    <section id="content2">
      <div class="content2" data-aos="fade-right">
        <div class="column1">
          <h2>MYTHS</h2>
          <p>
            Mitos adalah sebuah cerita yang berakar dari kepercayaan masyarakat
            tertentu. Cerita Mitos biasanya disampaikan secara lisan dari
            generasii ke generasii dan memainkan peran penting dalam budaya dan
            identtitas suatu masyarakat. Lalu apa yang dimaksud dengan mitos,
            struktur teks, dan apa saja contohnya? simak penjelasan lengkapnya.
          </p>
          <a href="descriptionMyths.php" class="detail">
            <i>Selengkapnya</i>
          </a>
        </div>
        <div class="column2">
          <img src="./img/borobudur.jpg" alt="" />
        </div>
      </div>
    </section>

    <section id="content3">
      <div class="content3" data-aos="fade-left">
        <div class="column1">
          <img src="./img/borobudur.jpg" alt="" />
        </div>
        <div class="column2">
          <h2>LEGEND</h2>
          <p>
            Legenda adalah bentuk cerita rakyat yang tersebar luas di masyarakat
            dan bersifat melegenda. Cerita legenda sering diartikan sebagai
            cerita tentang asal usul suatu daerah, tempat, pusaka, atau sesuatu
            yang bernilai sejarah. Lalu apa yang dimaksud dengan legenda,
            struktur teks, dan apa saja contohnya? simak penjelasan lengkapnya.
          </p>
          <a href="descriptionLegends.php" class="detail">
            <i>Selengkapnya</i>
          </a>
        </div>
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
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>