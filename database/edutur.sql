-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 10:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edutur`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(3) NOT NULL,
  `categories` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories`) VALUES
(1, 'Legenda'),
(2, 'Mitos'),
(3, 'Budaya');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id_story` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar_sampul` longblob NOT NULL,
  `konten` text NOT NULL,
  `konten_2` text NOT NULL,
  `gambar_1` longblob NOT NULL,
  `dialog_1` text NOT NULL,
  `gambar_2` longblob NOT NULL,
  `dialog_2` text NOT NULL,
  `categories_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id_story`, `judul`, `gambar_sampul`, `konten`, `konten_2`, `gambar_1`, `dialog_1`, `gambar_2`, `dialog_2`, `categories_id`) VALUES
(24, 'bjawd', 0x2e2f75706c6f6164732f363465333431373465313839645f53637265656e73686f74202834292e706e67, 'ajwkdm', '', 0x2e2f75706c6f6164732f363465333431373465316266385f53637265656e73686f74202834292e706e67, 'ahwjdbaw', 0x2e2f75706c6f6164732f363465333431373465316437315f53637265656e73686f7420283130292e706e67, 'ahwjdkn', 1),
(30, 'adaasd', 0x2e2e2f75706c6f6164732f363465333239373037626537395f53637265656e73686f74202834292e706e67, 'asda', 'asda', 0x2e2e2f75706c6f6164732f363465333239373037626537655f53637265656e73686f74202834292e706e67, 'asda', 0x2e2e2f75706c6f6164732f363465333239373037626538305f53637265656e73686f74202834292e706e67, 'asda', 3),
(32, 'asdasd', 0x2e2e2f75706c6f6164732f363465333264633132386532345f53637265656e73686f74202839292e706e67, 'sad', 'asd', 0x2e2e2f75706c6f6164732f363465333264633132386532395f53637265656e73686f7420283130292e706e67, 'asdd', 0x2e2e2f75706c6f6164732f363465333264633132386532615f53637265656e73686f7420283131292e706e67, 'fgs', 3),
(34, 'Roro Jonggrang', 0x2e2f75706c6f6164732f363465333764653333363736385f7072616d62616e616e2e6a706567, 'Setelah sekian lama, perang akhirnya berakhir dengan kemenangan di pihak Kerajaan Pengging. Bandung Bondowoso yang sudah lelah melihat pasukannya mati satu-persatu dan rakyatnya menderita akhirnya mau tak mau menghabisi Prabu Boko di peperangan. \r\n\r\nRoro Jonggrang yang mendengar berita kekalahan kerajaannya hanya bisa menangis dan bersedih setiap harinya di istananya. Terlebih saat ia mengetahui kematian ayahnya, ia semakin tak berniat hidup dan hanya bisa bersedih. Namun, apa daya ia hanya seorang putri yang tak bisa ikut turun ke?medan?perang.\r\n\r\nKesedihan Roro Jonggrang yang berlarut-larut itu akhirnya berubah menjadi dendam dan kemarahan yang tak terbendung setelah mengetahui bahwa Bandung Bondowosolah yang membunuh ayahnya sendiri, ia tak menyangka orang yang ia kagumi dan berkata mencintainya tega membunuh ayahnya sendiri.\r\n\r\nKetika pasukan Kerajaan Pengging datang ke Kerajaan Baka untuk mengambil rampasan perang, disitulah Roro Jonggrang dan Bandung Bondowoso bertemu kembali. Kesempatan itu tak Bandung Bondowoso sia-siakan, ia segera meminang Roro Jonggrang untuk menjadi istrinya.\r\n\r\nRoro Jonggrang yang diliputi kemarahan sungguh merasa bahwa Bandung Bondowoso tak punya hati. Ia dengan berani melamar anak dari orang ya ia bunuh, terlebih saat masih dalam keadaan berduka. Sejak itulah Roro Jonggrang ingin menghabisi Bandung Bondowoso.', '1. Sikap serakah ingin mengambil sesuatu yang bukan milik kita hanya akan merugikan banyak pihak. Pandai-pandailah bersyukur terhadap apa yang kita miliki. Keserakahan Prabu Boko ingin menaklukkan kerajaan lain hanya membawa banyak korban berjatuhan, menyulitkan putrinya dengan kisah asmaranya serta membawa kematian untuk dirinya sendiri.\r\n\r\n2. Perang hanya menyebabkan kerugian di kedua pihak. Bandung Bondowoso yang telah lelah melihat korban berjatuhan dan rakyatnya menderita akhirnya berusaha mengakhiri perang yang terjadi. \r\n\r\n3. Sebaiknya jangan mengambil keputusan ketika amarah sedang menguasai kita. Roro Jonggrang yang terlanjur dipenuhi amarah mengambil keputusan yang kurang tepat untuk balas dendam. Keputusan ini akhirnya hanya merugikan ia dan para pengikutnya.\r\n\r\n4. Jangan suka berbohong dan melakukan tipu muslihat. Tipu muslihat yang dilakukan Roro Jonggrang untuk mengelabuhi Bandung Bondowoso berakhir dengan murkanya Bandung Bondowoso hingga mengutuk Roro Jonggrang.', 0x2e2f75706c6f6164732f363465333764623832336463665f53637265656e73686f7420323032332d30382d3039203231303735332e706e67, '\" Tentu saja, apapun syarat yang kau ajukan akan kupenuhi. Aku pasti sanggup melakukannya jika?demi?dirimu.\"', 0x2e2f75706c6f6164732f363465333764623832336565345f53637265656e73686f7420323032332d30382d3039203231303832362e706e67, '\" Buatlah sumur yang sangat dalam untukku, beri nama sumur itu Sumur Jalatunda. Kemudian buatkanlah seribu candi untukku dalam satu malam.\"\r\n', 2),
(35, 'Nyi Roro Kidul', 0x2e2f75706c6f6164732f363465333765616361303463635f6e79692d726f726f2d6b6964756c2e6a7067, 'Nyi Roro Kidul adalah sosok dalam mitologi Jawa yang sering dianggap sebagai ratu penguasa laut selatan Pulau Jawa, yang meliputi pantai dari Yogyakarta hingga Jawa Barat dan memiliki cerita berbeda-beda tiap versinya', '1. Sikap serakah ingin mengambil sesuatu yang bukan milik kita hanya akan merugikan banyak pihak. Pandai-pandailah bersyukur terhadap apa yang kita miliki. Keserakahan Prabu Boko ingin menaklukkan kerajaan lain hanya membawa banyak korban berjatuhan, menyulitkan putrinya dengan kisah asmaranya serta membawa kematian untuk dirinya sendiri.\r\n\r\n2. Perang hanya menyebabkan kerugian di kedua pihak. Bandung Bondowoso yang telah lelah melihat korban berjatuhan dan rakyatnya menderita akhirnya berusaha mengakhiri perang yang terjadi. \r\n\r\n3. Sebaiknya jangan mengambil keputusan ketika amarah sedang menguasai kita. Roro Jonggrang yang terlanjur dipenuhi amarah mengambil keputusan yang kurang tepat untuk balas dendam. Keputusan ini akhirnya hanya merugikan ia dan para pengikutnya.\r\n\r\n4. Jangan suka berbohong dan melakukan tipu muslihat. Tipu muslihat yang dilakukan Roro Jonggrang untuk mengelabuhi Bandung Bondowoso berakhir dengan murkanya Bandung Bondowoso hingga mengutuk Roro Jonggrang.', 0x2e2f75706c6f6164732f363465333765616361303666325f53637265656e73686f7420323032332d30382d3039203231303735332e706e67, 'Apa Kabar?', 0x2e2f75706c6f6164732f363465333765616361303837335f53637265656e73686f7420323032332d30382d3039203231303832362e706e67, 'Baik, baik saja', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `foto` longblob NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `foto`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(42, 0x2e2f75706c6f6164732f363465333562333636613636335f53637265656e73686f74202831292e706e67, 'dimas', 'bagas@gmail.com', '12345', 'admin', '2023-08-15 21:38:14'),
(82, '', 'dimas', 'dimas@gmail.com', '123', 'admin', '2023-08-17 22:44:51'),
(86, '', 'hendri', 'hendri@gmail.com', '123', 'admin', '2023-08-21 18:58:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id_story`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id_story` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `story_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
