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
    <section class="Help">
      <h2>Help</h2>
      <div class="content-Help">
        <div class="text">
          <p>
            kami siap memberikan panduan dan solusi untuk memastikan
            pengalaman belajar budaya Anda berjalan deSelamat datang di Pusat
            Bantuan Edutur! Di sini, ngan lancar dan memuaskan. Kami mengerti
            bahwa dalam perjalanan eksplorasi lintas budaya, mungkin ada
            pertanyaan atau kendala yang muncul. Kami siap membantu Anda
            menavigasi melalui setiap tahap perjalanan Anda.
          </p>
          <h3>Pertanyaan Umum yang Dapat Diatasi:</h3>
          <div class="question" id="question1" onmouseover="answer1()" onmouseout="dAnswer1()">
            <p>Bagaimana cara mendaftar di Edutur?</p>
            <p>Jawab :</p>
          </div>
          <div class="question" id="question2" onmouseover="answer2()" onmouseout="dAnswer2()">
            <p>Bagaimana cara mengakses konten budaya?</p>
            <p>Jawab :</p>
          </div>
          <div class="question" id="question3" onmouseover="answer3()" onmouseout="dAnswer3()">
            <p>
              Bagaimana cara menghubungi panduan untuk pertanyaan tambahan?
            <p>Jawab :</p>
            </p>
          </div>
          <h3>Hubungi Tim Dukungan:</h3>
          <p>
            Jika Anda memerlukan bantuan yang lebih mendalam atau pertanyaan
            khusus yang belum terjawab di Pusat Bantuan, jangan ragu untuk
            menghubungi tim dukungan kami. Kami berkomitmen untuk membantu
            Anda mengeksplorasi budaya dengan nyaman dan penuh kebahagiaan.
          </p>
          <p>
            Terima kasih telah memilih Edutur sebagai teman perjalanan Anda
            dalam menjelajahi kekayaan budaya Indonesia. Mari bersama-sama
            merayakan perbedaan, memahami tradisi, dan mengembangkan pemahaman
            lintas budaya yang lebih dalam.
          </p>
        </div>
        <div class="contact">
          <h2>Contact</h2>
          <div class="sosmed">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="" class="sosmed-text">Facebook</a>
          </div>
          <div class="sosmed">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="" class="sosmed-text">Twitter</a>
          </div>
          <div class="sosmed">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="" class="sosmed-text">Instagram</a>
          </div>
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
  <script>
    const quest1 = document.getElementById("question1");
    const quest2 = document.getElementById("question2");
    const quest3 = document.getElementById("question3");

    const p1 = document.createElement("p");
    p1.textContent =
      "Klik gambar profil(gambar orang) pada pojok kanan atas, setelah itu akan diarahkan ke form pendaftaran";
    const p2 = document.createElement("p");
    p2.textContent =
      "Klik gambar profil(gambar orang) pada pojok kanan atas, setelah itu akan diarahkan ke form pendaftaran";
    const p3 = document.createElement("p");
    p3.textContent =
      "Klik gambar profil(gambar orang) pada pojok kanan atas, setelah itu akan diarahkan ke form pendaftaran";

    function answer1() {
      p1.style.marginLeft = "10px"
      quest1.append(p1);
    }

    function answer2() {
      p2.style.marginLeft = "10px"
      quest2.append(p2);
    }

    function answer3() {
      p3.style.marginLeft = "10px"
      quest3.append(p3);
    }

    function dAnswer1() {
      p1.remove();
    }

    function dAnswer2() {
      p2.remove();
    }

    function dAnswer3() {
      p3.remove();
    }
  </script>
</body>

</html>