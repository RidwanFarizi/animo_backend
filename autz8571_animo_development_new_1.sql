-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Feb 2021 pada 23.17
-- Versi server: 10.2.36-MariaDB-cll-lve
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autz8571_animo_development`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Bahan`
--

CREATE TABLE `Bahan` (
  `id` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `idUser` varchar(10) NOT NULL,
  `nama` tinytext NOT NULL,
  `kategori` tinytext NOT NULL,
  `satuan` tinytext NOT NULL,
  `subBahan` tinytext NOT NULL,
  `merk` tinytext NOT NULL,
  `suplier` tinytext NOT NULL,
  `linkSuplier` tinytext NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Resep_Detail`
--

CREATE TABLE `Resep_Detail` (
  `id` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `idResep` varchar(10) NOT NULL,
  `idBahan` varchar(10) NOT NULL,
  `jumBahan` tinyint(4) NOT NULL,
  `hargaBahan` tinyint(4) NOT NULL,
  `hargaPerSatuan` tinyint(4) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Resep`
--

CREATE TABLE `Resep` (
  `id` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `idPorsi` varchar(10) NOT NULL,
  `ukuranResep` tinyint(4) NOT NULL,
  `hargaTotal` tinyint(4) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Struktur dari tabel `Pesanan`
--

CREATE TABLE `Pesanan` (
  `id` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `idProduk` varchar(10) NOT NULL,
  `jumlah` tinyint(4) NOT NULL,
  `tglPemesanan` tinytext NOT NULL,
  `statusPembayaran` tinytext NOT NULL,
  `statusPemesanan` tinytext NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Porsi`
--

CREATE TABLE `Porsi` (
  `id` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `idProduk` varchar(10) NOT NULL,
  `jumPorsi` tinyint(4) NOT NULL,
  `totBiaya` tinyint(4) NOT NULL,
  `biayaSatuan` tinyint(4) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Produk`
--

CREATE TABLE `Produk` (
  `id` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `idUser` varchar(10) NOT NULL,
  `nama` tinytext NOT NULL,
  `ukuran` tinytext NOT NULL,
  `harga` tinytext NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Stok`
--

CREATE TABLE `Stok` (
  `id` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `idBahan` varchar(10) NOT NULL,
  `stokAwal` tinyint(4) NOT NULL,
  `stokMasuk` tinyint(4) NOT NULL,
  `stokKeluar` tinyint(4) NOT NULL,
  `stokAkhir` tinyint(4) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `User`
--

CREATE TABLE `User` (
  `id` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `nama` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `token` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `kota` tinytext NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `User`
--

INSERT INTO `User` (`id`, `uniqueCode`, `nama`, `email`, `token`, `password`, `kota`, `createDate`, `updateDate`, `deleteDate`) VALUES
('3', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2021-02-17 15:41:26', '2021-02-17 15:41:26', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Bahan`
--
ALTER TABLE `Bahan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`);
  -- ADD KEY `idResep` (`idResep`);

--
-- Indeks untuk tabel `Pesanan`
--
ALTER TABLE `Pesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indeks untuk tabel `Porsi`
--
ALTER TABLE `Porsi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indeks untuk tabel `Produk`
--
ALTER TABLE `Produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`),
  ADD KEY `idUser` (`idUser`);

--
-- Indeks untuk tabel `Resep`
--
ALTER TABLE `Resep`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`),
  ADD KEY `idPorsi` (`idPorsi`);

--
-- Indeks untuk tabel `Stok`
--
ALTER TABLE `Stok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`),
  ADD KEY `idBahan` (`idBahan`);

--
-- Indeks untuk tabel `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`);

--
-- Indeks untuk tabel `Bahan`
--
ALTER TABLE `Resep_Detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`),
  ADD KEY `idResep` (`idResep`),
  ADD KEY `idBahan` (`idBahan`);
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `Bahan`
--
ALTER TABLE `Resep_Detail`
  ADD CONSTRAINT `Resep_Detail_ibfk_1` FOREIGN KEY (`idResep`) REFERENCES `Resep` (`id`),
  ADD CONSTRAINT `Resep_Detail_ibfk_2` FOREIGN KEY (`idBahan`) REFERENCES `Bahan` (`id`);

--
-- Ketidakleluasaan untuk tabel `Pesanan`
--
ALTER TABLE `Pesanan`
  ADD CONSTRAINT `Pesanan_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `Produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `Porsi`
--
ALTER TABLE `Porsi`
  ADD CONSTRAINT `Porsi_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `Produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `Produk`
--
ALTER TABLE `Produk`
  ADD CONSTRAINT `Produk_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `User` (`id`);

--
-- Ketidakleluasaan untuk tabel `Resep`
--
ALTER TABLE `Resep`
  ADD CONSTRAINT `Resep_ibfk_1` FOREIGN KEY (`idPorsi`) REFERENCES `Porsi` (`id`);

--
-- Ketidakleluasaan untuk tabel `Stok`
--
ALTER TABLE `Stok`
  ADD CONSTRAINT `Stok_ibfk_1` FOREIGN KEY (`idBahan`) REFERENCES `Bahan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
