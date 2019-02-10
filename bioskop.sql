-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Agu 2018 pada 12.51
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `id_kategori` varchar(50) DEFAULT NULL,
  `judul_film` varchar(50) NOT NULL,
  `jam1` varchar(5) NOT NULL,
  `jam2` varchar(5) NOT NULL,
  `jam3` varchar(5) NOT NULL,
  `studio` varchar(15) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar_film` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `id_kategori`, `judul_film`, `jam1`, `jam2`, `jam3`, `studio`, `sinopsis`, `gambar_film`) VALUES
(1, 'R', 'Transformers The Last Knight', '10:00', '15:20', '20:20', 'Theatre One', 'Cerita tentang robot alien yang dibagi dalam dua kubu. Kubu baik (Autobots) dan kubu jahat (Decepticons) bertarung di bumi. Autobots berusaha melindungi bumi sedangkan Decepticons berusaha merusaknya.', 'T5.jpg'),
(2, 'D', 'Pirates of the Caribbean 5', '12:15', '17:45', '22:30', 'Theatre One', 'Petualangan Kapten Jack Sparrow berlanjut. Kali ini Jack harus dihadapkan dengan musuh barunya yaitu Capitan Salazar yang ingin membalas dendam. Dibantu oleh Barbossa, Jack Sparrow berpetualang untuk mengalahkan Salazar.', 'P5.jpg'),
(3, 'R', 'Thor: Ragnarok', '13:15', '19:00', '21:10', 'Theatre Two', 'Thor kembali ke Asgard untuk menjaga kedamaian Sembilan Dunia. Namun Thor harus menghadapi berbagai rintangan. Hulk pun kembali muncul untuk membantu Thor menghadapi rintangannya.', 'TR.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('D', 'Dewasa 17'),
('R', 'Remaja Bimbingan Orangtua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_penonton` int(11) DEFAULT NULL,
  `tgl_beli` date NOT NULL,
  `grandtotal` int(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id_nota`, `id_penonton`, `tgl_beli`, `grandtotal`, `status`, `bukti`) VALUES
(60, 12, '2018-04-06', 45000, '', 'bukti60.png'),
(61, 12, '2018-04-06', 45000, '', 'bukti61.png'),
(62, 12, '2018-04-06', 45000, '', 'bukti62.png'),
(63, 12, '2018-04-06', 90000, '', 'bukti63.jpg'),
(66, 12, '2018-04-06', 135000, '', 'bukti66.png'),
(68, NULL, '2018-04-08', 45000, '', 'bukti68.png'),
(69, 12, '2018-04-27', 45000, '', 'bukti69.png'),
(70, NULL, '2018-04-27', 90000, '', 'bukti70.png'),
(71, NULL, '2018-04-28', 90000, '', 'bukti71.png'),
(72, 12, '2018-05-13', 45000, '', ''),
(73, 12, '2018-08-10', 135000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_nota` int(11) DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `id_nota`, `id_film`, `jumlah`) VALUES
(67, 60, 2, 1),
(68, 61, 3, 1),
(69, 62, 3, 1),
(70, 63, 1, 2),
(73, 66, 2, 1),
(74, 66, 1, 2),
(76, 68, 3, 1),
(77, 69, 1, 1),
(78, 70, 3, 2),
(79, 71, 3, 2),
(80, 72, 3, 1),
(81, 73, 3, 2),
(82, 73, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penonton`
--

CREATE TABLE `penonton` (
  `id_penonton` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penonton`
--

INSERT INTO `penonton` (`id_penonton`, `nama`, `username`, `password`) VALUES
(12, 'Dian F. Arif', 'dian', '911f6332e7f90b94b87f15377263995c'),
(15, 'M. Rasyad Bisma Wiratara', 'bisma', '227cee183f9b009e2f81f2f8339e281b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_penonton` (`id_penonton`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `penonton`
--
ALTER TABLE `penonton`
  ADD PRIMARY KEY (`id_penonton`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `penonton`
--
ALTER TABLE `penonton`
  MODIFY `id_penonton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_penonton`) REFERENCES `penonton` (`id_penonton`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
