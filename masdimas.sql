-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2021 pada 05.09
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masdimas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `ud_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `atasnama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `pembayaran` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('diproses','dikirim','selesai','ditolak') NOT NULL DEFAULT 'diproses',
  `bukti_pembayaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `email`, `nohp`, `password`, `password2`, `alamat`, `kodepos`) VALUES
('a', 'a@gmail.com', '0000000', 'a', 'a', 'aaaaaaa', '11111111'),
('nezarra', 'neza@yahoo.com', '081234567890', 'nezarra', 'nezarra', 'Bojong Gede', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'Garlic Bread 1', 25000, 'birthday.jpg', 'Roti bawang putih terdiri dari roti yang atasnya diberi bawang putih dan minyak zaitun atau mentega, dan meliputi dedaunan tambahan, seperti chives. Makanan tersebut dimasak dengan cara dipanggang atau digoreng, atau dikukus dengan cara konvensional atau pemanggang roti.'),
(2, 'Almond Bread', 20000, 'almond.jpg', 'Almond bread adalah roti yang terbuat dari tepung almond yang dibuat dengan cara dipanggang. Rasa dari almond bread cenderung manis'),
(3, 'Onde-Onde', 2000, 'onde-onde.jpg', 'Onde-onde adalah kue tradisional Indonesia yang terbuat dari campuran tepung ketan dan tepung beras yang atasnya dilumuri biji wijen dan dimasak dengan cara digoreng. Di dalamnya terdapat isian kacang hijau yang di haluskan.'),
(4, 'Cheesy Beer Bread', 30000, 'cheesy-bear-bread.jpg', 'Cheesy beer bread adalah roti yang terbuat dari tepung gandum dan labu yang di campur menjadi satu, dan dimasak dengan cara di panggang di oven. Rasa dari cheesy beer bread cenderung manis.'),
(5, 'Birthday Cake', 50000, 'birthday.jpg', 'Birthday cake adalah roti yang disajikan kepada seseorang pada hari ulang tahunnya. Kue ulang tahun biasanya dihiasi dengan nama seseorang dan lilin diatasnya. Birthday cake terbuat dari campuran tepung, telur, mentega, dll. Di sekelililing kue diberi hiasan butter cream. Kue ini cenderung memiliki rasa yang manis.'),
(6, 'Cupcake', 10000, 'cupcake.jpg', 'Cupcake adalah kue mungil yang dibuat dari adonan kue yang dicetak dalam paper cup atau cup kertas. Bentuk cupcake hampir sama dengan muffin, namun teksturnya lebih ringan. Sebagai variasi olahan cupcake kita dapat menambah isian dalam adonan cupcake. Beraneka ragam hiasan cupcake mulai dari hiasan sederhana hingga hiasan yang memerlukan keterampilan khusus untuk membuatnya.'),
(8, 'Donutz', 5000, 'donat.jpg', 'Donat adalah adalah penganan yang digoreng, dibuat dari adonan tepung terigu, gula, telur, dan mentega. Donat yang paling umum adalah donat berbentuk cincin dengan lubang di tengah dan donat berbentuk bundar dengan isian manis, seperti selai, jelly, krim, dan custard.'),
(9, 'Macaroon', 8000, 'macaroon.jpg', 'Macaroon adalah makanan manis berjenis kue busa yang dibuat dengan putih telur, tepung gula, gula rafinasi, tepung almon, dan pewarna makanan. Rasa macaroon cenderung manis.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `terjual`
--

CREATE TABLE `terjual` (
  `id_terjual` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `terjual`
--

INSERT INTO `terjual` (`id_terjual`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD KEY `ud_pembelian` (`ud_pembelian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `terjual`
--
ALTER TABLE `terjual`
  ADD PRIMARY KEY (`id_terjual`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_ibfk_1` FOREIGN KEY (`ud_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `detail_pembelian_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
