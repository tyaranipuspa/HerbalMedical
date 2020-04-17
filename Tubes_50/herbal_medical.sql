-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2020 pada 12.51
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herbal_medical`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `disease`
--

CREATE TABLE `disease` (
  `code` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `prevention` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `disease`
--

INSERT INTO `disease` (`code`, `name`, `description`, `prevention`) VALUES
('BTK', 'Batuk', 'Batuk adalah respon alami dari tubuh sebagai sistem pertahanan untuk mengeluarkan zat dan partikel dari dalam saluran pernapasan, serta mencegah benda', 'cara mencegah atau mengobati penyakit batuk: Jahe dan madu sangat baik untuk membantu untuk mengobati batuk karena dapat mengurangi dahak.'),
('DBS', 'Diabetes', 'Diabetes adalah penyakit kronis yang ditandai dengan ciri-ciri berupa tingginya kadar gula (glukosa) darah. Glukosa merupakan sumber energi utama bagi', 'cara mencegah atau mengobati diabetes dengan menggunakan bahan-bahan alami ini , bawang putih , lidah buaya ,kayu manis ,pare , jahe , gingseng ,pepaya. Bahan-bahan ini sangat bagus untuk mengobatasi diabetes.'),
('DMM', 'Demam', 'Demam adalah kondisi meningkatnya suhu tubuh hingga lebih dari 380C. Demam menandakan adanya penyakit atau kondisi lain di dalam tubuh.', 'Cara mencegah atau mengobati Penyakit demam : Jahe ,kunyit , Bawang merah , air kelapa muda. Bahan-bahan itu sangat bagus untuk demam .'),
('DRE', 'Diare', 'Diare adalah penyakit yang membuat penderitanya menjadi sering buang air besar, dengan kondisi tinja yang encer. Pada umumnya, diare terjadi akibat ma', 'cara mencegah atau mengobati penyakit diare dengan cara menggunakan bahan-bahan alami ini , Daun sirih , Wortel , Yoghurt ,Jahe  , Teh , Air kelapa, Kunyit dan madu. Bahan-bahan ini sangat bagus untuk mengobati penyakit diare.'),
('NYS', 'Nyeri Sendi', 'Nyeri sendi adalah rasa sakit pada bagian tubuh yang menghubungkan tulang dengan tulang, menyebabkan pergerakan dan kualitas hidup penderitanya menjad', 'Cara mencegah atau mengobati penyakit nyeri sendi : Jahe ,Teh hijau ,Kayu putih , kunyit ,Nanas . Bahan-bahan alami ini dapat mencegah atau mengobati nyeri sendi karena mengandung antiperedang dan kandungan lainnya yang bagus untuk tubuh'),
('PLK', 'Pilek', 'Pilek adalah kondisi ketika hidung mengeluarkan ingus atau lendir, baik sesekali maupun terus-menerus. Lendir yang keluar dapat terlihat bening, hijau', 'Cara mencegah atau mengobati penyakit pilek : Jahe ,Madu ,Peppermint ,Bang putih . Bahan-bahan alami ini sangat bagus untuk melawan pilek karena dapat membuat otot saluran pernapasan lebih rileks dan merangsang sistem kekebalan tubuh lebih aktif'),
('PSG', 'pusing', 'pusing adalah seperti melayang ,berputar ,kliyengan atau merasa akan pingsan', 'cara mencegah atau mengobati penyakit pusing : Minuman jahe karena jahe mengandung molekul antioksida dan senyawa antiradang jadi bagus untuk mengurangi nyeri migran.'),
('SGG', 'Sakit Gigi', 'Sakit gigi adalah kondisi ketika muncul rasa nyeri di dalam atau di sekitar gigi dan rahang. Tingkat keparahan nyeri tersebut bisa bervariasi, mulai d', 'cara mencegah atau mengobati penyakit gigi : Garam , Cengkeh , Daun jambu, Bawang putih karena dapat membunuh kuman yang ada dimulut.'),
('SPG', 'Sakit Pingang', 'sakit pinggang adalah sakit pada punggung bagian bawah. Penderita sakit pinggang bisa mengalami rasa sakit yang hilang timbul maupun terus menerus, pa', 'cara mencegah dan mengobati penyakit pinggang dengan menggunakan bahan-bahan alami Daun sirsak , Jahe , Bawa merah. Kunyit dapat mengobati penyakit Pinggang karena mengadung antiperedangan untuk mengurangi nyeri.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `drugs`
--

CREATE TABLE `drugs` (
  `code_drugs` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `usability` varchar(50) NOT NULL,
  `making` longtext NOT NULL,
  `code` varchar(5) NOT NULL,
  `foto_drugs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `drugs`
--

INSERT INTO `drugs` (`code_drugs`, `name`, `description`, `usability`, `making`, `code`, `foto_drugs`) VALUES
(2901, 'Jahe', 'Jahe adalah tanaman rimpang yang sangat populer sebagai rempah-rempah dan bahan obat.', 'meredakan pusing', 'parut jahe, tuangkan pada panci, beri air satu gelas, bisa di beri perasan jeruk nipis, aduk hingga mendidih menggunakan api yang kecil.', 'PSG', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(12) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nickname`, `password`, `email`, `role`) VALUES
('isi', 'Isaw kuantum', '123456', 'isawkuantum@gmail.con', 0),
('jk12', 'Joko Wiliam', '123', 'joko@gmail.com', 1),
('nym1998', 'Yoga Saputra', '1234', 'yoga@gmail.com', 0),
('th12', 'Thea asriwati', '123', 'th@gmail.com', 0),
('wawan', 'Wawan Spur', '123456', 'wawan2222@gamil.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`code`);

--
-- Indeks untuk tabel `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`code_drugs`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
