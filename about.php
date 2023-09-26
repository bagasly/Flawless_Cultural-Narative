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
    <section class="about">
      <div class="content">
        <h2>Edukasi</h2>
        <p>
          Selamat datang di Edutur! Kami adalah platform pendidikan yang inovatif, didedikasikan untuk mengajak Anda dalam perjalanan eksplorasi mendalam ke dalam beragam budaya di
          Indonesia. Melalui penggabungan teknologi modern dan kekayaan budaya tradisional, kami menghadirkan pengalaman belajar yang unik dan mendalam, memungkinkan Anda untuk memahami,
          menghargai, dan merasakan keindahan warisan budaya lokal.
        </p>
        <h3> Misi Kami</h3>
        <p>
          Misi utama Edutur adalah mengatasi batasan fisik dan memungkinkan siapa pun, di mana pun, untuk terlibat dalam pembelajaran lintas budaya yang mendalam.
          Kami percaya bahwa dengan memahami dan menghargai perbedaan budaya, kita dapat membangun jembatan harmoni, menginspirasi kreativitas, dan meningkatkan toleransi pada diri kita masing-masing.
        </p>
        <h3>Hubungi Kami</h3>
        <p>
          Jika Anda memiliki pertanyaan, saran, atau ingin berbagi pengalaman Anda dengan Edutur, jangan ragu untuk menghubungi tim kami. Kami senang mendengar dari Anda!
          Terima kasih atas minat dan dukungan Anda terhadap perjalanan belajar lintas budaya bersama Edutur. Mari kita bersama-sama menjalajahi Indonesia melalui lensa budaya yang berwarna-warni!
        </p>

      </div>
      <div class="about-founder">
        <h2>Founder</h2>
        <div class="founder">
          <div class="container3">
            <div class="card front-face">
              <img src="./img/borobudur.jpg">
            </div>
            <div class="card back-face">
              <img src="./img/borobudur.jpg">
              <div class="desk">
                <div class="title">
                  Dimas Aji N.
                </div>
              </div>
              <ul>
                <li class="icon">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-github"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="container3">
            <div class="card front-face">
              <img src="./img/borobudur.jpg">
            </div>
            <div class="card back-face">
              <img src="./img/borobudur.jpg">
              <div class="desk">
                <div class="title">
                  Bagas Yuli P.
                </div>
              </div>
              <ul>
                <li class="icon">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-github"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="container3">
            <div class="card front-face">
              <img src="./img/borobudur.jpg">
            </div>
            <div class="card back-face">
              <img src="./img/borobudur.jpg">
              <div class="desk">
                <div class="title">
                  Hendri Setyadi D.
                </div>
              </div>
              <ul>
                <li class="icon">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-github"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="icon">
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
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
</body>

</html>