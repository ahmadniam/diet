-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2020 pada 10.46
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_menu`
--

CREATE TABLE `data_menu` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_menu`
--

INSERT INTO `data_menu` (`id`, `judul`, `gambar`, `isi`) VALUES
(3, 'Salad', 'https://www.ndtv.com/cooks/images/tossed-mixed-salad-620.jpg', 'Salad adalah merupakan sejenis makanan yang terdiri dari campuran sayur-sayuran atau buah-buahan.'),
(4, 'Oatmeal', 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/11/1.-Oatmeal.jpg', 'Oatmeal adalah salah satu makanan superfood yang biasa disantap ketika sarapan. Kandungan serat yang tinggi dalam oatmeal sangat baik untuk sistem pencernaan.'),
(5, 'Semangkuk biji-bijian', 'https://www.vitnuts.com/wp-content/uploads/2018/05/Post-and-Blog-1.jpg', 'Untuk membuat menu diet sehat yang satu ini, cukup masak quinoa atau beras merah kemudian taburi dengan ayam, atau protein lain.'),
(6, 'Sup', 'https://akcdn.detik.net.id/community/media/visual/2018/10/16/ca5c66e5-efa5-4ce1-867e-9ed0661ed18b.jpeg?w=700&q=90', 'Sup juga baik lho dikonsumsi sebagai makanan untuk diet sehat. Kamu bisa memasukkan daging atau seafood, sayuran, kacang-kacangan, atau lentil.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tips`
--

CREATE TABLE `data_tips` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tips`
--

INSERT INTO `data_tips` (`id`, `judul`, `gambar`, `isi`) VALUES
(1, 'Makan secara perlahan', 'https://doktersehat.com/wp-content/uploads/2016/06/doktersehat-pria-makan-bergizi-sehat-sayur-864x400.jpg', 'Kecepatan makan akan memengaruhi seberapa banyak makanan yang masuk sehingga memungkinkan bertambahnya berat badan.'),
(2, 'Tingkatkan asupan protein', 'https://www.wowkeren.com/display/images/photo/2019/08/27/00270222s2.jpg', 'Sebuah studi menunjukkan bahwa meningkatkan asupan protein menjadi 30% dapat membuat orang makan lebih sedikit.'),
(3, 'Minum air yang cukup', 'https://asset.kompas.com/crops/4xYEDAWloxhePFvqyIJiTtAyUzc=/0x0:762x508/750x500/data/photo/2018/05/22/1232069257.jpg', 'Banyak penelitian yang menunjukkan jika air minum dapat memberi manfaat bagi penurunan berat badan.'),
(4, 'Rebus makanan daripada digoreng', 'https://bebaspedia.com/wp-content/uploads/2020/01/rebus-atau-kukus-758x546.jpg', 'Metode populer untuk menyiapkan daging dan ikan, salah satunya adalah dengan digoreng.'),
(5, 'Konsumsi omega-3 dan vitamin D', 'https://cdn-2.tstatic.net/tribunnewswiki/foto/bank/images/makanan-tinggi-vitamin-d.jpg', 'Vitamin D sendiri merupakan vitamin yang larut dalam lemak. Vitamin ini sangat penting untuk kesehatan tulang dan meningkatkan sistem kekebalan pada tubuh.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_diet`
--

CREATE TABLE `jadwal_diet` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `info_tambahan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_diet`
--

INSERT INTO `jadwal_diet` (`id`, `id_user`, `jenis`, `detail`, `info_tambahan`, `tanggal`, `waktu`) VALUES
(1, 2, 'makanan', 'pasta', 'makan malam', '2020-11-27', '19:41:00'),
(2, 2, 'olahraga', 'lari', '200 m', '2020-11-27', '07:58:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `progres_diet`
--

CREATE TABLE `progres_diet` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kalori` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `progres_diet`
--

INSERT INTO `progres_diet` (`id`, `id_user`, `tanggal`, `kalori`) VALUES
(1, 2, '2020-11-10', 120),
(2, 2, '2020-11-13', 80),
(3, 2, '2020-11-22', 150),
(6, 2, '2020-11-26', 1.23),
(7, 2, '2020-11-26', 1614.01),
(8, 2, '2020-11-26', 1659.91);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, '', ''),
(2, 'vania', 'vania123'),
(3, 'coba', 'coba1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_menu`
--
ALTER TABLE `data_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_tips`
--
ALTER TABLE `data_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_diet`
--
ALTER TABLE `jadwal_diet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `progres_diet`
--
ALTER TABLE `progres_diet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_menu`
--
ALTER TABLE `data_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_tips`
--
ALTER TABLE `data_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jadwal_diet`
--
ALTER TABLE `jadwal_diet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `progres_diet`
--
ALTER TABLE `progres_diet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
