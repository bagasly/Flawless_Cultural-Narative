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
    <section class="description">
      <div class="container">
        <h2>Legends</h2>
        <p>
          Legenda adalah bentuk cerita rakyat yang tersebar luas di masyarakat dan bersifat melegenda. Cerita legenda sering diartikan sebagai cerita tentang asal usul suatu daerah, tempat, pusaka, atau sesuatu yang bernilai sejarah. Lalu apa yang dimaksud dengan legenda, struktur teks, dan apa saja contohnya? simak penjelasan lengkapnya berikut ini:
        </p>
        <br>
        <h3>
          Legenda Adalah Cerita Rakyat
        </h3>
        <p>
          Menurut Kamus Besar Bahasa Indonesia (KBBI), Legenda adalah cerita rakyat pada zaman dahulu yang berkaitan dengan peristiwa sejarah. Cerita legenda menyerupai mitos dan dianggap semi-imajiner. Namun, legenda tidak memiliki nilai sakral atau tidak dianggap sakral oleh sebagian masyarakat layaknya mitos.
        </p>
        <p>
          Cerita Legenda diwariskan melalui tradisi lisan dari mulut ke mulut sebelum ditulis dan dipercayai sebagai cerita yang mungkin terjadi di masa lalu, tetapi dengan unsur-unsur fantastis yang melebih-lebihkan atau mengubah detail aslinya. Oleh karena itu, sebagian besar legenda tidak jelas siapa yang menciptakannya.
        </p>
        <p>
          Karena penyebarannya yang umumnya melalui cerita-cerita lisan, setiap kawasan atau budaya bisa memiliki legenda yang berbeda-beda meskipun berdasarkan inti yang serupa. Legenda sangat berperan dalam menyampaikan nilai-nilai budaya, kearifan lokal, dan identitas suatu masyarakat.
        </p>
        <p>
          Jadi, Legenda adalah cerita atau narasi yang berasal dari masa lampau dan cenderung dicampurkan dengan fakta dan unsur mitos atau fantasi. Legenda biasanya berkisah tentang tokoh-tokoh heroik, kejadian luar biasa, atau peristiwa yang dianggap penting oleh suatu kelompok masyarakat tertentu. Meskipun terkait dengan peristiwa sejarah atau kebudayaan, legenda sering kali memiliki elemen-elemen supernatural atau tak terbukti secara ilmiah, yang dapat membuatnya menjadi lebih menarik dan misterius.
        </p>
        <br>
        <h3>
          Pengertian Legenda Menurut Para Ahli
        </h3>
        <ul>
          <li>
            Koentjaraningrat
            <p>
              Legenda adalah cerita rakyat yang berisi cerita mengenai tokoh-tokoh heroik, dewa-dewi, leluhur, atau makhluk gaib lainnya. Cerita ini seringkali berlatar belakang sejarah atau tempat-tempat tertentu yang dianggap suci oleh masyarakat. Legenda berkembang dari lisan ke lisan dan berfungsi sebagai sarana untuk menyampaikan nilai-nilai budaya, norma, dan hiburan bagi masyarakat.
            </p>
          </li>
          <li>
            Koester Soenario
            <p>
              Legenda adalah cerita yang berkembang dari zaman kuno, memiliki asal usul sejarah dan biasanya berisi unsur-unsur magis atau mitologi. Legenda mengandung pesan moral, nilai-nilai kehidupan, dan cerita heroik dari masa lalu yang diwariskan dari generasi ke generasi.
            </p>
          </li>
          <li>
            James Danadjaja
            <p>
              Beliau mendefinisikan legenda sebagai cerita rakyat yang memperlihatkan kebesaran suatu tokoh atau kejadian pada masa lalu yang dianggap berpengaruh dalam menciptakan kondisi atau situasi pada masa kini. Legenda mengandung unsur-unsur kebenaran sejarah dan unsur fiksi atau mitologi.
            </p>
          </li>
        </ul>
        <br>
        <h3>Jenis-jenis Legenda</h3>
        <p>
          Menurut buku “Pengantar Ilmu Sosial dan Budaya Dasar”, legenda dapat diklasifikasikan menjadi empat jenis: agama, gaib, pribadi atau perorangan, dan lokal.
        </p>
        <ul>
          <li>
            Legenda Keagamaan
            <p>
              Keagamaan berisi kisah-kisah kehidupan beragama. Legenda ini berbicara tentang orang-orang tertentu. Misalnya, kisah penyebar Islam di Jawa, Wali songo, dan sebagainya. Mereka adalah orang-orang biasa dan mereka benar-benar ada. Namun, dalam deskripsi naratif, mereka dihadirkan sebagai karakter dengan kekuatan super yang melampaui batas manusia.
            </p>
          </li>
          <li>
            Legenda Kegaiban
            <p>
              Ilmu Gaib biasanya berupa cerita-cerita yang diyakini pernah terjadi dan dialami oleh seseorang. Fungsi dari legenda jenis ini adalah untuk mengkonfirmasi kebenaran takhayul dan kepercayaan masyarakat. Singkatnya, legenda supranatural adalah cerita tentang pengalaman seseorang dengan makhluk gaib, roh, setan, fenomena gaib, dan sebagainya.
            </p>
            <p>
              Contoh legenda supranatural adalah mandor Kebun Raya Bogor menghilang saat bekerja di kebun. Menurut warga setempat, peristiwa itu terjadi karena seorang polisi menginjak tumpukan batu bata bekas gerbang Kerajaan Pajajaran.
            </p>
          </li>
          <li>
            Legenda Perseorangan
            <p>
              Pribadi Atau Perorangan adalah cerita tentang tokoh tertentu yang diyakini benar-benar terjadi. Contoh legenda individu Indonesia adalah legenda Lutung Kasarung di Jawa Barat, Rara Mendut dan Jaka Tingkir di Jawa Tengah, Si Pahit Lida di Sumatera, Njai Dasima di Jakarta, dan Jayaprana di Bali.
            </p>
          </li>
          <li>
            Legenda lokal
            <p>
              Lokal adalah legenda yang dikaitkan dengan nama-nama tempat terjadinya gunung, bukit, danau dan benda alam lainnya. Misalnya, legenda Danau Toba di Sumatera, legenda Sangkuriang di Jawa Barat (legenda Gunung Tangkuban Perahu), Grand Lorojon di Jawa Tengah, dan Desa Trunyan di Bali.
            </p>
          </li>
        </ul>
        <br>
        <h3>
          Ciri-ciri Cerita Legenda
        </h3>
        <ul>
          <li>
            Campuran fakta dan mitos; campuran antara fakta sejarah dengan unsur-unsur fantasi atau dibuat-buat.
          </li>
          <li>
            Tokoh heroik; pahlawan yang melakukan tidakan luar biasa.
          </li>
          <li>
            Penyebaran lisan; Disampaikan secara lisan dari generasi ke generasi sebelum ditulis.
          </li>
          <li>
            Nilai-nilai dan ajaran; Mengandung pesan moral atau ajaran yang disampaikan ke pendengar/pembaca.
          </li>
          <li>
            Unsur supernatural atau ghaib; Dewa-dewi, roh, makhluk mitologis yang memberikan warna dan misteri pada cerita tersebut.
          </li>
          <li>
            Menghibur dan menginspirasi; Sebagai hiburan karena kisah-kisahnya menarik dan penuh petualangan.
          </li>
          <li>
            Identitas budaya; Menggambarkan keyakinan, kepercayaan, dan nilai-nilai budaya suatu masyarakat.
          </li>
        </ul>
        <br>
        <h3>Struktur Cerita Legenda</h3>
        <ul>
          <li>Pendahuluan, latar belakang cerita dan perkenalan tokok-tokoh yang akan terlibat.</li>
          <li>
            Konflik awal, peristiwa pemicu yang menarik terjadi nantinya akan mendorong cerita maju dan menjadi fokus utama.
          </li>
          <li>
            Komplikasi, titik di mana konflik mencapai tingkat maksimum dan menentukan nasib tokoh, momen klimaks juga menentukan arah cerita.
          </li>
          <li>
            Penyelesaian, bagian masalah mulai dipecahkan atau diatasi, keadaan akhir cerita mulai muncul dan semua rintangan atau pertanyaan pada cerita mulai mendapatkan jawaban.
          </li>
          <li>
            Pesan, penyampaian pesan moral, nilai-nilai kehidupan, atau ajaran yang ingin disampaikan kepada pendengar atau pembaca. Pesan juga berisi pemikiran yang ingin dihargai oleh masyarakat agar dapat terwariskan.
          </li>
        </ul>
        <br>
        <h3>Unsur-Unsur Cerita Legenda</h3>
        <ul>
          <li>
            Tema
            <p>
              Ide dasar yang mendukung ciri-iri sastra dan mengalir ke dalam teks.
            </p>
          </li>
          <li>
            Tokoh
            <p>
              Karakter penting dalam cerita legenda, orang-orang yang berperan dalam peristiwa dan tindakan heroik yang menjadi pusat cerita.
            </p>
            <p>Tokoh dibagi menjadi tiga jenis:</p>
            <ul>
              <li>
                Tokoh utama; karakter utama yang diceritakan dalam cerita, sebagian besar rangkaian cerita dari awal sampai akhir.
              </li>
              <li>
                Tokoh antagonis; karakter yang berlawanan dengan tokoh utama dan menciptakan konflik dalam cerita.
              </li>
              <li>
                Tokoh pendamping, peran ketiga atau tokoh sekunder dalam cerita.
              </li>
            </ul>
          </li>
          <li>
            Latar
            <p>
              Setting yang menjelaskan di mana dan kapan cerita legenda terjadi.
              Setting dibagi menjadi tiga bagian:
            </p>
            <ul>
              <li>
                Latar tempat, menjelaskan tempat terjadinya cerita.
              </li>
              <li>
                Latar waktu, yaitu waktu terjadinya peristiwa pada cerita tersebut.
              </li>
              <li>
                Latar suasana, menggambarkan suasana peristiwa dalam cerita.
              </li>
            </ul>
          </li>
          <li>
            Plot
            <p>
              Susunan peristiwa-peristiwa yang terjadi berdasarkan kausalitas historis, umumnya plot ada tiga, yaitu: maju, mundur, campuran.
            </p>
          </li>
          <li>
            Perspektif
            <p>
              Sudut pandang di mana cara pengarang menceritakan peristiwa yang terdapat pada cerita, biasanya menggunakan sudut pandang orang pertama atau orang ketiga.
            </p>
          </li>
          <li>
            Pesan
            <p>
              Amanat atau pesan yang ingin disampaikan pengarang kepada pembaca.
            </p>
          </li>
        </ul>
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
                  <h2><a href="story.php?id=35">Nyi Roro Kidul</a></h2>
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
                  <h2><a href="story.php?id=34">Roro Jonggrang</a></h2>
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
                  <h2>Nyi Roro Kidul</h2>
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