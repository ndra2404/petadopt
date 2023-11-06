-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 12:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_petadopt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `content`, `images`) VALUES
(1, 'Benarkah Hidup Pemilik Hewan Lebih Sehat?', 'Hidup bersama hewan peliharaan memang menyenangkan, tapi siapa sangka manfaatnya berpengaruh juga ke kesehatan? Hal ini sudah dibuktikan oleh penelitian di bidang kesehatan fisik maupun mental.\r\nSalah satu teori yang kuat soal ini adalah keberadaan hewan peliharaan menjadi dukungan sosial yang sangat membantu manusia secara mental. Para pemilik hewan terbukti memiliki respons yang lebih sehat saat mengalami tekanan, tampak dari tekanan darah dan detak jantung yang lebih rendah, serta lebih cepat pulih saat terpicu stres ringan.\r\n', 'thumbs/np01.png'),
(2, 'Manfaat Merawat Hewan Peliharaan Sebagai Metode Ed', '<p style=\'margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:\"Calibri\",sans-serif;\'><span style=\'font-size:17px;line-height:107%;font-family:\"Arial\",sans-serif;color:#555555;background:white;\'>Merawat hewan peliharaan di rumah ternyata punya manfaat yang banyak. Hewan peliharaan bukan hanya sebagai satwa lucu yang mendiami rumah saja, tetapi sekaligus teman bagi anak untuk belajar kemandirian. Namun, orang tua mesti pintar memilih hewan yang tepat bagi si buah hati.&nbsp;</span><span style=\'font-size:17px;line-height:107%;font-family:\"Arial\",sans-serif;color:#555555;\'><br>&nbsp;<br> <span style=\"background:white;\">Dengan memiliki hewan peliharaan, anak bisa terdorong untuk belajar tentang dunia binatang. Rasa ketertarikan yang muncul juga melatih anak untuk mengamati dan mengobservasi hewan peliharaan. Dari bentuknya, bulunya, suaranya, tingkah lakunya, sampai makanan apa yang dikonsumsi.</span><br>&nbsp;<br> <span style=\"background:white;\">Oleh karena itu, merawat hewan bisa jadi salah satu komponen pendukung perkembangan anak. Hal ini membuat si kecil jadi terlatih untuk belajar dari lingkungannya sendiri. Lantas apa saja manfaat merawat hewan peliharaan sebagai metode edukasi pada anak? Simak ulasan berikut ini.&nbsp;</span></span></p>\n<h2 style=\'margin-top:0cm;margin-right:0cm;margin-bottom:11.25pt;margin-left:0cm;font-size:17px;font-family:\"Calibri Light\",sans-serif;color:#2E74B5;font-weight:normal;background:white;\'><strong><span style=\'font-family:\"Arial\",sans-serif;color:#0C0C0C;\'>1.&nbsp;Melatih Tanggung Jawab</span></strong></h2>\n<p style=\'margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:\"Calibri\",sans-serif;\'><span style=\'font-size:17px;line-height:107%;font-family:\"Arial\",sans-serif;color:#555555;background:white;\'>hewan peliharaan bisa menjadi sarana bagi anak belajar tanggung jawab. Jika anak memiliki ketertarikan dengan hewan peliharaan, sebaiknya orang tua tidak melarang merawatnya di rumah. Orang tua justru bisa memanfaatkan momen tersebut untuk melatih tanggung jawab. Sebab, merawat hewan butuh ketekunan dan keseriusan.&nbsp;</span></p>\n<h2 style=\'margin-top:0cm;margin-right:0cm;margin-bottom:11.25pt;margin-left:0cm;font-size:17px;font-family:\"Calibri Light\",sans-serif;color:#2E74B5;font-weight:normal;text-align:justify;background:white;\'><strong><span style=\'font-family:\"Arial\",sans-serif;color:#0C0C0C;\'>2. Pastikan hewan peliharaan tidak stres dan jaga kebersihan saat bermain</span></strong></h2>\n<p style=\'margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:\"Calibri\",sans-serif;background:white;\'><span style=\'font-size:17px;line-height:107%;font-family:\"Arial\",sans-serif;color:#555555;\'>Agar anabul tetap nyaman di rumah, jangan lupa untuk ajak dia bermain. Bermain bisa menjadi kegiatan menyenangkan dan menyehatkan serta mendekatkan Genhype dan anabul lho. Setidaknya luangkan waktu selama 30 menit sebanyak dua kali sehari untuk bermain sambil belajar dan berlatih.<br>&nbsp;Akan tetapi, ada masa tertentu di mana bulu-bulu hewan peliharaan Genhype berada dalam masa kerontokan, sehingga seringkali bulu-bulu itu berserakan di berbagai tempat. Dengan risiko kesehatan bagi Genhype, pastikan pembersihan dilakukan secara berkala.</span></p>\n<p style=\'margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:\"Calibri\",sans-serif;\'><span style=\'font-size:18px;line-height:107%;font-family:\"Arial\",sans-serif;color:#333333;\'>Ciri-ciri &nbsp;hewan rabies<br>&nbsp;Anda tidak bisa tahu pasti apa hewan di dekat Anda terinfeksi rabies. Namun hewan dengan rabies bakal menunjukkan tingkah polah aneh.<br>&nbsp;<br>&nbsp;Ada yang menyebut ciri hewan rabies pasti banyak mengeluarkan air liur. Namun tidak semua hewan menunjukkan ciri seperti ini.<br>&nbsp;<br>&nbsp;Secara umum, berikut ciri hewan rabies.<br>&nbsp;<br>&nbsp;1. Hewan tidak dalam kondisi sehat<br>&nbsp;2. Sulit menelan<br>&nbsp;3. Air liur berlebihan<br>&nbsp;4. Sangat agresif<br>&nbsp;5. Perilaku menggigit objek imajinatif (fly biting)<br>&nbsp;6. Lebih jinak dari yang diperkirakan<br>&nbsp;7. Sulit bergerak atau lumpuh<br>&nbsp;8. Pada kelelawar, hewan ini lebih banyak di tanah ketimbang bergelantung di pohon atau objek yang tinggi</span></p>', 'thumbs/np02.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
