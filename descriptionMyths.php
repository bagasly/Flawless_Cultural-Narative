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
                <h2>Myths</h2>
                <p>Mitos adalah sebuah cerita yang berakar dari kepercayaan masyarakat tertentu. Cerita Mitos biasanya disampaikan secara lisan dari generasii ke generasii dan memainkan peran penting dalam budaya dan identtitas suatu masyarakat. Lalu apa yang dimaksud dengan mitos, struktur teks, dan apa saja contohnya? simak penjelasan lengkapnya berikut ini:</p>
                <h3>Mitos</h3>
                <p>Dalam Kamus Besar Bahasa Indonesia (KBBI), mitos adalah cerita suatu bangsa tentang dewa dan pahlawan zaman dahulu, mengandung penafsiran tentang asal-usul semesta alam, manusia, dan bangsa tersebut mengandung arti mendalam yang diungkapkan dengan cara gaib.
                    Mitos bisa ditemukan di berbagai budaya di seluruh dunia, dan memainkan peran yang berbeda dalam kehidupan masyarakat. Beberapa mitos digunakan untuk mengajarkan nilai-nilai moral atau etika, sementara yang lain mungkin dianggap sebagai cerita hiburan atau cara untuk menyatukan komunitas.
                </p>
                <p>Saat ini, dalam masyarakat modern, orang lebih cenderung memahami mitos sebagai cerita-cerita lama yang tidak memiliki dasar ilmiah, dan peran mitos telah berubah seiring perkembangan pengetahuan dan pemahaman manusia tentang dunia. Namun, meskipun tidak dapat dianggap sebagai sumber pengetahuan ilmiah, mitos tetap berharga sebagai bagian dari warisan budaya dan sejarah umat manusia.
                </p>
                <h3>Pengertian Mitos Menurut Para Ahli</h3>
                <ul>
                    <li>William A. Haviland
                        <p>Mitos adalah adanya sebuah kisah tentang peristiwa semi-sejarah yang berhubungan dengan pertanyaan terakhir kehidupan manusia.</p>
                    </li>

                    <li>Webster's Dictionary
                        <p>Mitos adalah perumpamaan atau perumpamaan, yang merupakan satu-satunya ilusi yang tidak dapat dibuktikan.</p>
                    </li>

                    <li>Cremers
                        <p>Mitos adalah kisah sakral simbolis yang menceritakan banyak peristiwa atau realitas atau ide tentang asal mereka serta perubahan di alam semesta dan di dunia, para dewa, kekuatan atas manusia, pahlawan dan bahkan manusia.</p>
                    </li>


                    <li> Bascom
                        <p>Mitos atau mitos adalah cerita prosa populer yang didukung oleh dewa atau dewa yang telah terjadi di dunia lain (di surga) di masa lalu dan dikatakan telah benar-benar terjadi oleh tuan dari cerita mereka atau pengikut mereka. alam semesta, adat istiadat, para dewa, dan bahkan talenta suci.</p>
                    </li>


                    <li>Ahimsa-Putra
                        <p>Mitos adalah kisah aneh yang seringkali sulit dipahami atau bahkan dapat dikendalikan karena cerita di sini tidak memiliki makna atau mungkin tidak sesuai dengan kebutuhan kita sehari-hari.</p>
                    </li>

                    <li>Levi-Strauss
                        <p>Mitos adalah perwujudan cerita tradisi lisan tertentu yang menceritakan para dewa, manusia pertama, hewan, dan lainnya berdasarkan skema mitos logis dan memungkinkan kita untuk mengumpulkan semua masalah yang harus diselesaikan dalam konstruksi sistematis.</p>
                    </li>

                </ul>

                <h3>Jenis-jenis Mitos :</h3>

                <ul>
                    <li>Mitos Penciptaan
                        <p>Cerita mitos yang menggambarkan mengenai penciptaan alam semesta </p>
                    </li>

                    <li>Mitos Kosmogenik
                        <p>Mitos yang menggamarkan penciptaan alam semesta serta asal usul dari dunia</p>
                    </li>

                    <li>Mitos Asal-Usul
                        <p>Jenis mitos yang berfokus pada cerita-cerita tentang bagaimana segala sesuatu di dunia ini bermula atau berasal. </p>
                    </li>

                    <li>Mitos Transformasi
                        <p>Mitos yang berfokus pada kisah-kisah perubahan bentuk dari satu bentuk menjadi bentuk lain yang berbeda.</p>
                    </li>
                    <li>Mitos Theoginik
                        <p>Mitos yang berfokus pada asal-usul dan keturunan dewa-dewi serta makhluk gaib atau entitas supernatural lainnya.</p>
                    </li>
                </ul>

                <h3>Ciri-ciri Mitos</h3>
                <ul>
                    <li class="in">Mitos berasal dari masa lalu dan diceritakan turun temurun dari genersi ke generasi</li>
                    <li class="in">Mitos melibatkan karakter-karakter, contohnya pahlawan dengan kekuatan Ajaib, dewa, dewi, makhluk mitologis</li>
                    <li class="in">Cerita mitos terdengar aneh dan sulit dipahami dnegan logika</li>
                    <li class="in">Dalam cerita mitos memiliki salahsatu kepribadian yaitu berkaitan dengan budaya dan masyarakat setempat</li>
                    <li class="in">Dalam alur cerita mitos melibatkan suatu ritual tertentu</li>
                    <li class="in">Mitos dianggap sesuatu yang keramat atau suci. </li>
                </ul>

                <h3>Fungsi Mitos </h3>
                <ul>
                    <li class="in"> Mitos berfiingsi sebagai sarana Pendidikan untuk mengkomunikasikan dan memperkuat norma social, budaya dan keyakinan tertentu
                    </li>
                    <li class="in"> Berfungsi mengajarkan nilai-nilai penting dan memberikan panduan bagi perilaku yang diinginkan
                    </li>
                    <li class="in"> Mitos juga berfungsi sebagai hiburan dan cara untuk menghibur audiens.
                    </li>
                    <li class="in"> Digunakan sebagai alat yang mengajarkan sejarah dan asal-usul suatu bangsa, suku, atau masyarakat tertentu
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