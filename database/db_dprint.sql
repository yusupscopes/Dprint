-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Nov 2017 pada 09.52
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dprint`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_percetakan`
--

CREATE TABLE `tbl_percetakan` (
  `id_percetakan` int(11) NOT NULL,
  `nama_percetakan` varchar(100) NOT NULL,
  `website` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_percetakan`
--

INSERT INTO `tbl_percetakan` (`id_percetakan`, `nama_percetakan`, `website`, `alamat`, `telp`, `lat`, `lng`, `foto`, `tgl_daftar`, `id_user`) VALUES
(14, 'CANO DIGITAL PRINT', 'http://canoprint.com/', 'Jl. Margonda Raya No.495', 'Â (021) 7875916', -6.362793, 106.833412, 'cano.jpg', '2017-11-02 23:29:39', 4),
(15, 'ERA COPY & DIGITAL PRINTING', 'http://eraprint.com/', 'Jl. Margonda Raya No.512', 'Â (021) 7863628', -6.359421, 106.833282, 'era.jpg', '2017-11-02 23:33:20', 3),
(16, 'FAST DIGITAL PRINTING', 'http://www.fastdp.com/', 'Jl Parung Serab Raya No.4', '0813-9461-1555', -6.416113, 106.827797, 'fast.jpg', '2017-11-02 23:41:58', 5),
(17, 'COQELAT PRINTING', 'http://coqelatprinting.com/', 'Jl Komjen.Pol.M.Jasin UI No.46\r\n', 'Â (021) 29383242', -6.354723, 106.840607, 'coqelat.jpg', '2017-11-05 03:17:59', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `status`) VALUES
(3, 'yusup@email.com', '$2y$10$h9eAEo0/GOoiYZsA7PLUt.0tfeTI8NWZ2Hz.4SSkLijaxH5U7ZaU6', 0),
(4, 'email@email.com', '$2y$10$3ppHSsjr9xK3pBunmeTVheClR43ON.wsuqZGOl8Uy5VqVwRFmp5Z.', 0),
(5, 'admin@email.com', '$2y$10$tjt5/vHnBtRn5bszBzcAz.pwZz3Yzy9oZZekXz.oA2ZOrJX/A/vcK', 1),
(6, 'maulana@email.com', '$2y$10$FqfgaGZs7jqh33PxGRLjJetJbFQ1CJy/2aBG/Rk50EhzN3Wr50djG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_percetakan`
--
ALTER TABLE `tbl_percetakan`
  ADD PRIMARY KEY (`id_percetakan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_percetakan`
--
ALTER TABLE `tbl_percetakan`
  MODIFY `id_percetakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_percetakan`
--
ALTER TABLE `tbl_percetakan`
  ADD CONSTRAINT `tbl_percetakan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
