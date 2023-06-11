-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 08:50 AM
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
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_akses`
--

CREATE TABLE `admin_akses` (
  `id_user` int NOT NULL,
  `akses_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE= utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_akses`
--

INSERT INTO `admin_akses` (`id_user`, `akses_id`) VALUES
(2, 'admin'),
(2, 'user'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int NOT NULL,
  `gambar` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indikasi_umum` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komposisi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosis` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aturan_pakai` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perhatian` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontra_indikasi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `efek_samping` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan_produk` varchar(100) DEFAULT NULL,
  `kemasan` varchar(100) DEFAULT NULL,
  `manufaktur` varchar(100) DEFAULT NULL,
  `no_registrasi` varchar(100) DEFAULT NULL,
  `kategori_obat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE= utf8mb4_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `gambar`, `nama`, `deskripsi`, `indikasi_umum`, `komposisi`, `dosis`, `aturan_pakai`, `perhatian`, `kontra_indikasi`, `efek_samping`, `golongan_produk`, `kemasan`, `manufaktur`, `no_registrasi`, `kategori_obat`) VALUES
(1, '647895fe8e596.jpg', 'Balsem Lang', '-', 'Membantu meredakan pusing, masuk angin, pegal-pegal, nyeri sendi, keseleo, melegakan pernapasan, mabuk perjalanan dan gatal-gatal karena gigitan serangga.', 'L-menthol 155 mg', '', 'Dioleskan pada bagian tubuh yang diinginkan, dapat diulangi seperlunya', 'Hipersensitif terhadap komponen obat, hanya untuk pemakaian luar', '-', 'Reaksi alergi', 'Produk Konsumen', 'Pot 10 G Dalam Dus', 'Eagle Indo Pharma', '-', 'balsem dan minyak esensial'),
(2, '64789643c05fc.jpg', 'Sladex', 'SILADEX FLU mengandung zat aktif paracetamol, guaifenesin, bromheksin hcl,chlorpeniramine maleat, dan pseudoefedrin HCl. Obat ini berfungsi untuk meringankan gejala - gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin - bersin serta sebagai mukolitik-ekspektoran (mengencerkan dahak sehingga mudah dikeluarkan) dalam meredakan batuk berdahak.', 'Meringankan gejala - gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin - bersinyang disertai batuk berdahak.', 'Tiap sendok takar (5 ml) mengandung : Paracetamol 250 mg, Guaifenesin 50 mg, Bromhexine HCl 4 mg, Chlorphenamine Maleate 1 mg, Pseudoephedrine HCl 15 mg.', '', 'Sesudah makan', 'Hati-hati penggunaan pada penderita tekanan darah tinggu atau yang mempunyai potensi tekanan darah tinggi atau stroke, seperti pada penderita obesitas/overweight dan usia lanjut. Bila dalam 3 hari gejala flu tidak berkurang segera hubungi dokter atau unit pelayanan kesehatan. Hentikan penggunaan obat ini jika terjadi susah tidur, jantung berdebar dan pusing. Selama minum obat ini tidak boleh mengendarai kendaraan bermotor atau menjalankan mesin. Hati-hati pada penderita tukak lambung. Tidak dianjurkan penggunaan pada anak usia dibawah 6 tahun, wanita hamil dan menyusui.', 'Tidak boleh diberikan pada penderita yang peka terhadap obat simpatomimetik lain (misal ephedrine, phenylprepanolamine HCL, phenylephrine), penderita tekanan darah tinggu berat dan yang mendapat terapi antidepresan tipe MAO.', 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Efek samping yang mungkin terjadi dalam penggunaan obat adalah: Mengantuk, gangguan pencernaan, gangguan psikomotorik, takikardia, aritmia, mulut kering, palpitasi, retensi urin, sakit kepala, insomnia, gelisah, eksitasi, tremor. Penggunaan dosis besar dan jangka panjang menyebabkan kerusakan hati.', 'Obat Bebas Terbatas (Biru)', 'Dus, Botol @ 60 ml', 'Konimex Pharmaceutical', 'BPOM: DTL1913027337A1', 'batuk dan flu'),
(3, '6478966289f0e.png', 'Betadine Cold Defence Nasal Spray', 'BETADINE COLD DEFENCE ADULT NASAL SPRAY merupakan semprotan rongga hidung dengan kandungan alami Carragelose (Iota Carageenan) untuk dewasa dan anak usia 1 tahun ke atas. Produk ini digunakan untuk membantu mengurangi durasi dan keparahan gejala pilek dan flu yang bekerja pada area di rongga hidung di mana kuman penyebab pilek pertama menempel dengan membentuk lapisan pelindung yang melembabkan selaput lendir hidung dan sebagai penghalang terhadap pengaruh eksternal seperti penyebab pilek, polusi udara, dan kelembaban udara yang rendah.', 'Membantu mengurangi durasi gejala pilek dan flu.', 'Larutan garam dengan 1,2mg/mL Carragelose (Carrageenan', '', 'Gunakan saat gejala awal pilek dan flu muncul sedini mungkin. 1. Bersihkan rongga hidung sebelum menggunakan. 2. Lepaskan tutup pelindung sebelum digunakan dan pompa beberapa kali jika perlu sampai dapat disemprotkan. 3. Atur posisi duduk tegak dan kepala agak menunduk. Sebisa mungkin, pegang botol dengan tegak saat menyemprotkan. Semprotkan sebanyak 1 semprotan ke setiap lubang hidung lalu bernapaslah perlahan. Gunakan sebanyak 3 kali sehari. 4. Pasang kembali tutup pelindung setelah digunakan.', 'Jangan gunakan jika alergi terhadap salah satu bahannya. Jika terjadi reaksi yang tidak diinginkan, hentikan pemakaian dan konsultasikan pada dokter atau apoteker. Jauhkan dari pandangan dan jangkauan anak-anak. Untuk menghindari kontaminasi jangan gunakan produk ini untuk lebih dari 1 orang. Hindari kontak dengan mata. Jangan simpan di lemari es atau dibekukan. Simpan di bawah 30 C.', '-', '-', 'Alat Kesehatan &amp; Medis Habis Pakai', 'Dus, Botol @ 20 ml.', 'Mundipharma Healthcare Indonesia', 'Kemenkes RI: AKL20704811822', 'nasal spray dan deskongestan'),
(4, '647896717f74b.webp', 'Hufargrip flu dan batuk sirup', 'HUFAGRIP FLU &amp; BATUK merupakan obat yang mengandung Paracetamol, Chlorpeniramin Maleat, Pseudoefedrin HCl dan Guaifenesin. Obat ini digunakan untuk meringankan gejala-gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin disertai batuk berdahak', 'Untuk meringankan gejala- gejala flu seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin disertai batuk berdahak.', 'Tiap 5 ml mengandung Paracetamol 120 mg, Pseudoephedrine HCL 7.5 mg, Chlorpheniramine maleate 0.5 mg, dan Gliceryl Guaiacolate 50 mg.', '', 'Dikonsumsi sesudah makan', 'Tidak boleh melebihi dosis yang dianjurkan. Hati-hati penggunaan pada penderita tekanan darah tinggi, atau stroke, seperti penderita dengan berat badan berlebih atau usia lanjut. Bila dalam 3 hari gejala flu tidak berkurang segera hubungi dokter. Hentikan penggunaan obat ini jika terjadi susah tidur, jantung berdebar dan pusing. Simpan pada suhu kamar 25-30 C, kering dan tertutup rapat.', 'Tidak boleh diberikan pada pasien yang peka terhadap obat simpatomimetik lain (misal efedrin, Fenilpropanolamin,fenilefrin). Pasien dengan tekanan darah tinggi berat', 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Efek samping yang mungkin terjadi dalam penggunaan obat adalah: mengantuk', 'Obat Bebas Terbatas (Biru).', 'Dus, Botol @ 60 ml', 'Gratia Husada Farma', 'BPOM: DTL1007810533A1', 'untuk bayi dan anak');

-- --------------------------------------------------------

--
-- Table structure for table `master_akses`
--

CREATE TABLE `master_akses` (
  `akses_id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE= utf8mb4_unicode_ci;

--
-- Dumping data for table `master_akses`
--

INSERT INTO `master_akses` (`akses_id`, `nama`) VALUES
('admin', 'admin'),
('user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE= utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'asd', '$2y$10$f7Lm8bMDGJKXxbiSbY6ee.NjZj.9OXVgvBh8r6uZxnQmmRh.Z2tw2'),
(2, 'admin', '$2y$10$t1ZPswJlxKUSsW38ZeZ6FOzP7lHgVkzF4emr63g80/FCDHC5rf2Du'),
(3, 'user', '$2y$10$N8GGWLqqMke56oDTyATwKus61HF0TLCm8Oj4mQ9IY6El5egtXb3KK'),
(4, 'user1', '$2y$10$enBwXLEcWVjmn.NSSaCSpuocYMmJvsotyhkVhsgz0mXDn/vjttbvS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_akses`
--
ALTER TABLE `admin_akses`
  ADD KEY `akses_id` (`akses_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_akses`
--
ALTER TABLE `master_akses`
  ADD PRIMARY KEY (`akses_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_akses`
--
ALTER TABLE `admin_akses`
  ADD CONSTRAINT `admin_akses_ibfk_1` FOREIGN KEY (`akses_id`) REFERENCES `master_akses` (`akses_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `admin_akses_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
