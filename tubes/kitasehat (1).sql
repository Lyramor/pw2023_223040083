-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 05:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitasehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sinopsis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `kategori_id`, `judul`, `isi`, `sinopsis`, `gambar`) VALUES
(13, 11, 'Tidur Sehat: Mengoptimalkan Kualitas Tidur Anda untuk Kesehatan yang Lebih Baik', '<p>Tidur yang cukup dan berkualitas merupakan faktor penting dalam menjaga kesehatan dan kesejahteraan kita. Selama tidur, tubuh dan pikiran kita pulih dan memperbarui diri untuk menghadapi aktivitas sehari-hari. Namun, banyak dari kita seringkali mengabaikan pentingnya tidur yang sehat dan mengalami masalah tidur yang berdampak negatif pada kesehatan kita.</p><p>Ada beberapa langkah yang dapat Anda ambil untuk meningkatkan kualitas tidur Anda dan memastikan Anda mendapatkan tidur yang cukup setiap malam:</p><p><strong>1. Tetapkan Jadwal Tidur yang Konsisten</strong></p><p>Menciptakan rutinitas tidur yang teratur adalah langkah penting dalam meningkatkan kualitas tidur Anda. Cobalah untuk tidur dan bangun pada waktu yang sama setiap hari, termasuk saat akhir pekan. Hal ini membantu mengatur jam biologis tubuh Anda dan memastikan tidur yang lebih nyenyak.</p><p><strong>2. Ciptakan Lingkungan Tidur yang Nyaman</strong></p><p>Pastikan kamar tidur Anda menjadi tempat yang nyaman dan tenang untuk beristirahat. Atur suhu kamar yang nyaman, matikan lampu yang terang, dan kurangi kebisingan yang mengganggu. Gunakan kasur dan bantal yang sesuai dengan preferensi Anda untuk mendukung kenyamanan tidur.</p><p><strong>3. Hindari Stimulan Sebelum Tidur</strong></p><p>Beberapa stimulan seperti kafein, alkohol, dan nikotin dapat mengganggu kualitas tidur Anda. Hindarilah mengonsumsi minuman atau makanan yang mengandung stimulan ini beberapa jam sebelum tidur. Sebagai gantinya, minumlah teh herbal yang menenangkan atau air hangat untuk membantu relaksasi sebelum tidur.</p><p><strong>4. Lakukan Aktivitas Relaksasi Sebelum Tidur</strong></p><p>Sebelum tidur, luangkan waktu untuk melakukan aktivitas relaksasi yang membantu Anda bersantai dan merasa tenang. Anda dapat mencoba meditasi, pernapasan dalam, atau membaca buku yang menenangkan. Hindari menggunakan gadget atau menonton televisi sebelum tidur, karena cahaya biru dari layar dapat mengganggu tidur Anda.</p><p><strong>5. Atur Pola Makan yang Seimbang</strong></p><p>Makanan yang kita konsumsi dapat mempengaruhi kualitas tidur kita. Hindari makan berlebihan atau makan terlalu sedikit sebelum tidur. Sertakan makanan sehat yang mengandung triptofan, seperti kalkun, susu, atau kacang-kacangan, yang dapat membantu meningkatkan produksi hormon tidur.</p><p><strong>6. Batasi Aktivitas yang Mengganggu Tidur</strong></p><p>Hindari melakukan aktivitas yang dapat mengganggu tidur, seperti mengonsumsi minuman berkafein, terlalu banyak minum cairan sebelum tidur, atau terlalu banyak minum alkohol. Selain itu, batasi penggunaan gadget dan televisi di kamar tidur Anda, karena kecanggihan teknologi dapat merangsang pikiran Anda dan mengganggu tidur Anda.</p><p><strong>7. Lakukan Olahraga secara Teratur</strong></p><p>Olahraga secara teratur dapat membantu meningkatkan kualitas tidur Anda. Namun, hindari berolahraga terlalu dekat dengan waktu tidur, karena dapat membuat Anda sulit tidur. Idealnya, lakukan olahraga beberapa jam sebelum tidur agar tubuh memiliki waktu untuk pulih dan merasa tenang sebelum tidur.</p><p>Dengan mengimplementasikan langkah-langkah ini, Anda dapat mengoptimalkan kualitas tidur Anda dan memperbaiki kesehatan Anda secara keseluruhan. Jangan lupakan pentingnya tidur yang sehat dalam menjaga kesejahteraan Anda sehari-hari!</p>', 'Tidur yang cukup dan berkualitas merupakan faktor penting dalam menjaga kesehatan dan kesejahteraan kita. Selama tidur, tubuh dan pikiran kita pulih dan memperbarui diri untuk menghadapi aktivitas sehari-hari.', '3WxBhHwrHfMLWEk.jpg'),
(14, 12, 'Perkembangan Anak: Tahap-tahap Penting dalam Pertumbuhan dan Pembelajaran', '<p>Perkembangan anak merupakan proses yang kompleks dan menarik. Setiap anak mengalami tahap-tahap penting dalam pertumbuhan fisik, kognitif, sosial, dan emosional mereka. Memahami tahap-tahap perkembangan anak dapat membantu orang tua dan pengasuh untuk memberikan dukungan dan stimulus yang sesuai dalam pembelajaran dan pertumbuhan mereka.</p><p><strong>1. Tahap Bayi (0-12 bulan)</strong></p><p>Pada tahap ini, bayi mengalami perkembangan fisik yang pesat. Mereka mulai mengangkat kepala, berguling, merangkak, dan akhirnya belajar berjalan. Kemampuan motorik ini penting untuk eksplorasi dunia sekitar mereka. Selain itu, bayi juga mulai mengembangkan kemampuan bahasa dan sosial melalui tangisan, senyuman, dan kontak mata dengan orang tua.</p><p><strong>2. Tahap Balita (1-3 tahun)</strong></p><p>Pada tahap ini, anak-anak mulai mengembangkan keterampilan motorik halus seperti merangkak, berjalan, dan meraih benda-benda kecil. Mereka juga mulai mengembangkan kemampuan bahasa dengan menggunakan kata-kata sederhana dan mengikuti instruksi sederhana. Selain itu, anak-anak pada tahap ini juga mengalami perkembangan sosial yang pesat, termasuk berinteraksi dengan teman sebaya dan mulai belajar tentang aturan dan norma sosial.</p><p><strong>3. Tahap Pra-Sekolah (3-6 tahun)</strong></p><p>Tahap pra-sekolah merupakan masa di mana anak-anak mulai mengembangkan keterampilan kognitif yang lebih kompleks. Mereka mulai belajar mengenal huruf, angka, dan bentuk. Kemampuan bahasa mereka juga meningkat dengan cepat, dan mereka mampu memahami dan mengungkapkan ide dan perasaan mereka dengan lebih baik. Selain itu, anak-anak pada tahap ini juga mulai belajar bermain dan bekerja sama dengan teman-teman mereka dalam kelompok kecil.</p><p><strong>4. Tahap Sekolah (6-12 tahun)</strong></p><p>Tahap sekolah adalah masa di mana anak-anak mulai memperoleh pengetahuan akademik yang lebih mendalam. Mereka belajar membaca, menulis, dan menghitung dengan lebih kompleks. Kemampuan logika dan pemecahan masalah mereka juga semakin berkembang. Selain itu, anak-anak pada tahap ini juga mengalami perkembangan sosial yang signifikan, termasuk membangun hubungan pertemanan yang lebih stabil dan memahami peran mereka dalam kelompok sosial yang lebih besar.</p><p><strong>5. Tahap Remaja (12-18 tahun)</strong></p><p>Tahap remaja adalah masa di mana anak-anak mengalami perubahan fisik dan emosional yang signifikan. Mereka mengalami pubertas, yang melibatkan perubahan hormon dan perkembangan karakteristik seksual sekunder. Pada tahap ini, remaja juga mengalami perkembangan kognitif yang lebih lanjut, termasuk kemampuan berpikir abstrak dan logis. Mereka mulai membentuk identitas pribadi dan menjalani eksplorasi diri yang lebih dalam.</p><p>Memahami tahap-tahap perkembangan anak membantu orang tua, guru, dan pengasuh dalam merencanakan pendekatan yang tepat dalam mendukung perkembangan dan pembelajaran anak-anak. Dengan memberikan stimulus yang sesuai dan memberikan kesempatan untuk bereksplorasi dan belajar, kita dapat membantu anak-anak mencapai potensi terbaik mereka dalam setiap tahap perkembangan mereka.</p>', 'Perkembangan anak merupakan proses yang kompleks dan menarik. Setiap anak mengalami tahap-tahap penting dalam pertumbuhan fisik, kognitif, sosial, dan emosional mereka.', '2BOZ6DRY9tS5oKJ.jpg'),
(15, 8, 'Pola Makan Vegetarian: Cara Memenuhi Kebutuhan Nutrisi Tanpa Daging', 'Pola makan vegetarian semakin populer di kalangan masyarakat saat ini. Banyak orang yang memilih menjadi vegetarian karena alasan kesehatan, lingkungan, atau kesejahteraan hewan. Namun, menjadi vegetarian berarti menghilangkan daging sebagai sumber utama protein. Bagaimana cara memenuhi kebutuhan nutrisi tanpa daging? Berikut adalah beberapa tips untuk menjalani pola makan vegetarian yang seimbang.</p><br>\r\n<p>1. Konsumsi Sumber Protein Nabati</p><br><p>Meskipun daging dihilangkan, masih banyak sumber protein nabati yang bisa dikonsumsi. Beberapa contohnya adalah kacang-kacangan seperti kedelai, kacang merah, dan kacang-kacangan lainnya. Tahu, tempe, dan produk kedelai lainnya juga merupakan sumber protein nabati yang baik. Selain itu, biji-bijian seperti quinoa, beras, dan gandum juga mengandung protein yang cukup.</p><br><p>2. Perhatikan Keseimbangan Nutrisi</p><br><p>Sebagai vegetarian, penting untuk memperhatikan keseimbangan nutrisi dalam pola makan. Selain protein, pastikan asupan karbohidrat kompleks, lemak sehat, serat, dan juga vitamin dan mineral. Konsumsilah berbagai jenis sayuran, buah-buahan, biji-bijian, dan kacang-kacangan untuk memastikan Anda mendapatkan nutrisi yang cukup.</p><br><p>3. Suplemen Tambahan</p><br><p>Jika diperlukan, Anda juga dapat mempertimbangkan mengonsumsi suplemen tambahan untuk memenuhi kebutuhan nutrisi tertentu. Misalnya, suplemen vitamin B12 sangat penting bagi vegetarian, karena vitamin ini umumnya ditemukan dalam produk hewani. Konsultasikan dengan ahli gizi atau dokter untuk mengetahui jenis suplemen yang sesuai untuk Anda.</p><br><p>4. Variasi dalam Masakan</p><br><p>Agar tidak bosan dengan pola makan vegetarian, cobalah variasi dalam masakan. Eksplorasi berbagai resep vegetarian yang menggunakan berbagai bahan dan rempah-rempah. Dengan variasi dalam masakan, Anda dapat memastikan Anda mendapatkan berbagai nutrisi yang diperlukan dan juga menjaga kepuasan dalam makanan yang dikonsumsi.</p><br><p>5. Konsultasikan dengan Ahli Gizi</p><br><p>Terakhir, sangat disarankan untuk berkonsultasi dengan ahli gizi atau dietisien untuk mendapatkan panduan yang tepat mengenai pola makan vegetarian yang seimbang. Ahli gizi akan membantu Anda merencanakan menu yang sesuai dengan kebutuhan nutrisi Anda dan memberikan saran yang tepat untuk menjaga kesehatan Anda.</p><br><p>Dengan perencanaan yang baik dan pengetahuan mengenai sumber nutrisi nabati, pola makan vegetarian dapat memenuhi kebutuhan nutrisi Anda tanpa mengonsumsi daging. Tetaplah memperhatikan keseimbangan nutrisi dan jangan ragu untuk mencari informasi lebih lanjut mengenai pola makan vegetarian yang sehat dan bergizi.', 'Pola makan vegetarian semakin populer di kalangan masyarakat saat ini. Banyak orang yang memilih menjadi vegetarian karena alasan kesehatan, lingkungan, atau kesejahteraan hewan.', 'WWoL6hI7WkUO2m1.jpg'),
(16, 9, 'Manfaat Olahraga bagi Kesehatan: Meningkatkan Kondisi Fisik dan Mental Anda', '<p>Olahraga adalah kegiatan fisik yang penting untuk menjaga kesehatan tubuh dan pikiran. Manfaat olahraga bagi kesehatan telah terbukti secara ilmiah dan memiliki dampak positif pada kondisi fisik dan mental seseorang. Dengan rutin melakukan olahraga, Anda dapat meningkatkan kualitas hidup dan mengurangi risiko terkena berbagai penyakit serius.</p><p>Salah satu manfaat utama olahraga adalah meningkatkan kondisi fisik. Melalui olahraga, tubuh Anda akan menjadi lebih kuat dan bugar. Aktivitas fisik seperti berlari, berenang, atau bersepeda dapat membantu meningkatkan kekuatan otot dan daya tahan tubuh. Selain itu, olahraga juga membantu meningkatkan fleksibilitas dan keseimbangan tubuh. Dengan memiliki kondisi fisik yang baik, Anda akan lebih mampu menjalani aktivitas sehari-hari dengan energi yang cukup dan mengurangi risiko cedera.</p><p>Tidak hanya itu, olahraga juga memiliki manfaat besar bagi kesehatan mental. Saat Anda berolahraga, tubuh akan mengeluarkan hormon endorfin yang dikenal sebagai \"hormon kebahagiaan\". Hormon ini dapat meningkatkan mood dan mengurangi stres serta gejala depresi. Olahraga juga dapat membantu meningkatkan kualitas tidur Anda, membuat Anda merasa lebih segar dan bugar setelah beristirahat yang cukup. Selain itu, olahraga juga dapat menjadi cara yang efektif untuk mengalihkan pikiran dari masalah sehari-hari dan membantu meningkatkan kepercayaan diri.</p><p>Selain manfaat fisik dan mental, olahraga juga berperan penting dalam mencegah berbagai penyakit. Aktivitas fisik yang teratur dapat membantu menjaga berat badan yang sehat dan mengontrol tekanan darah. Olahraga juga dapat meningkatkan kesehatan jantung dan sistem peredaran darah. Dengan berolahraga, Anda dapat mengurangi risiko terkena penyakit jantung, diabetes, dan stroke. Selain itu, olahraga juga dapat meningkatkan kepadatan tulang, sehingga mengurangi risiko osteoporosis pada usia lanjut.</p><p>Agar dapat merasakan manfaat olahraga secara optimal, penting untuk melakukan olahraga secara teratur dan sesuai dengan kemampuan fisik Anda. Pilihlah jenis olahraga yang Anda nikmati, sehingga Anda akan merasa lebih termotivasi untuk melakukannya. Mulailah dengan intensitas yang ringan dan perlahan tingkatkan seiring waktu. Selalu perhatikan kondisi tubuh Anda dan jangan terlalu memaksakan diri. Jika Anda memiliki masalah kesehatan yang mendasar, konsultasikan dengan dokter sebelum memulai program olahraga.</p><p>Dalam kesimpulan, olahraga memiliki manfaat besar bagi kesehatan fisik dan mental. Dengan rutin berolahraga, Anda dapat meningkatkan kondisi fisik, mengurangi risiko penyakit, dan menjaga kesehatan pikiran. Jadikan olahraga sebagai bagian dari gaya hidup sehat Anda dan rasakan perubahan positif yang membawa kebahagiaan dan kesejahteraan. Mulailah sekarang juga dan jadikan olahraga sebagai investasi terbaik bagi kesehatan Anda di masa depan.</p>', 'Olahraga memiliki peran penting dalam menjaga kesehatan tubuh dan pikiran. Selain dapat membantu meningkatkan kondisi fisik, olahraga juga memiliki manfaat positif bagi kesehatan mental. Berikut adalah beberapa manfaat olahraga yang perlu Anda ketahui.', 's3qgF5fPvI42ziA.jpg'),
(17, 10, 'Penyakit Mental: Mengenali dan Mengatasi Gangguan Kesehatan Mental', '<p>Pada zaman ini, kesehatan mental telah menjadi perhatian utama di seluruh dunia. Penyakit mental atau gangguan kesehatan mental adalah kondisi yang dapat mempengaruhi pikiran, perasaan, dan perilaku seseorang. Gangguan kesehatan mental bisa terjadi pada siapa saja, tanpa memandang usia, gender, atau latar belakang sosial. Dalam artikel ini, kita akan membahas mengenai pentingnya mengenali dan mengatasi penyakit mental.<br>&nbsp;</p><p>Pertama-tama, mengenali tanda dan gejala penyakit mental adalah langkah awal yang penting. Beberapa tanda umum yang mungkin muncul adalah perasaan sedih yang berkepanjangan, kecemasan yang terus-menerus, perubahan drastis dalam pola tidur atau nafsu makan, isolasi sosial, dan kesulitan dalam mengatasi masalah sehari-hari. Selain itu, gejala fisik seperti sakit kepala, nyeri otot, atau gangguan pencernaan juga bisa terkait dengan gangguan kesehatan mental.</p><p>Setelah mengenali gejala-gejala tersebut, langkah selanjutnya adalah mencari bantuan profesional. Konsultasi dengan psikolog atau psikiater dapat membantu mendiagnosis dan merumuskan rencana pengobatan yang tepat. Terapi kognitif perilaku (CBT), terapi obat, dan terapi lainnya dapat menjadi bagian dari perawatan yang direkomendasikan oleh tenaga medis. Penting untuk diingat bahwa mengatasi penyakit mental bukanlah perjuangan yang harus dilakukan sendiri. Mendapatkan dukungan dari orang-orang terdekat, seperti keluarga dan teman, juga merupakan faktor penting dalam pemulihan.</p><p>Selain pengobatan medis, menjaga gaya hidup sehat juga berperan penting dalam mengatasi penyakit mental. Olahraga secara teratur dapat membantu mengurangi tingkat stres dan meningkatkan produksi endorfin yang dapat memperbaiki mood. Pola makan seimbang dengan asupan nutrisi yang cukup juga berdampak positif pada kesehatan mental. Selain itu, tidur yang cukup dan berkualitas juga sangat penting dalam menjaga keseimbangan mental.</p><p>Di era digital ini, kita juga perlu memperhatikan dampak media sosial pada kesehatan mental. Menghabiskan terlalu banyak waktu di media sosial dapat menyebabkan perasaan tidak berdaya, rendah diri, dan merasa kurang puas dengan kehidupan sendiri. Penting untuk mengatur waktu yang dihabiskan di media sosial dan menghindari perbandingan sosial yang tidak sehat.</p><p>Terakhir, penting untuk menciptakan lingkungan yang mendukung bagi individu yang mengalami gangguan kesehatan mental. Mendengarkan dengan empati, memberikan dukungan, dan menghilangkan stigma adalah langkah-langkah yang dapat kita lakukan dalam membantu mereka yang menghadapi tantangan ini.</p><p>Dalam kesimpulan, penyakit mental adalah masalah serius yang mempengaruhi banyak orang di seluruh dunia. Meng</p><p>enali tanda dan gejala, mencari bantuan profesional, menjaga gaya hidup sehat, dan menciptakan lingkungan yang mendukung adalah langkah-langkah penting dalam mengatasi gangguan kesehatan mental. Semoga dengan kesadaran dan upaya bersama, kita dapat menciptakan dunia yang lebih ramah dan peduli terhadap kesehatan mental. Ingatlah, tidak ada yang salah atau lemah dalam meminta bantuan. Kesehatan mental adalah hal yang tak ternilai dan sangat berharga bagi kehidupan kita.</p>', 'Pada zaman ini, kesehatan mental telah menjadi perhatian utama di seluruh dunia. Penyakit mental atau gangguan kesehatan mental adalah kondisi yang dapat mempengaruhi pikiran, perasaan, dan perilaku seseorang.', '3WxAnA6rUtywPFI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(8, 'Diet dan Nutrisi'),
(9, 'Kebugaran dan Olahraga'),
(10, 'Kesehatan Mental'),
(11, 'Gaya Hidup Sehat'),
(12, 'Parenting dan Kesehatan Anak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(4, 'admin1', '$2y$10$4G8Zty.VFsWNEqmPNmHooOJBTUpSYPhMw55ER/IEnTI1RYUhMQ.Ja', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `judul` (`judul`),
  ADD KEY `kategori_artikel` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `kategori_artikel` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
