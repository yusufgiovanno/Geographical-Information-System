-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 18.21
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelas_sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_tempat`
--

CREATE TABLE `kategori_tempat` (
  `id_kategori` int(1) NOT NULL,
  `id_jkategori` varchar(20) NOT NULL,
  `nama_jkategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_tempat`
--

INSERT INTO `kategori_tempat` (`id_kategori`, `id_jkategori`, `nama_jkategori`) VALUES
(1, '101', 'Gunung'),
(1, '102', 'Bukit'),
(1, '103', 'Pantai'),
(1, '104', 'Hutan'),
(1, '105', 'Air Terjun'),
(2, '201', 'Tenda'),
(2, '202', 'Kompor'),
(2, '203', 'Gas'),
(2, '204', 'Senter'),
(2, '205', 'Sleeping Bed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_akses`
--

CREATE TABLE `log_akses` (
  `idpengguna` int(11) NOT NULL,
  `username` varchar(6) NOT NULL,
  `datelogin` date NOT NULL,
  `datelogout` date NOT NULL,
  `timelogin` time NOT NULL,
  `timelogout` time NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_akses`
--

INSERT INTO `log_akses` (`idpengguna`, `username`, `datelogin`, `datelogout`, `timelogin`, `timelogout`, `status`) VALUES
(1, 'root', '2020-12-13', '2020-12-13', '05:35:56', '06:57:51', 2),
(1, 'root', '2020-12-13', '2020-12-13', '06:58:08', '11:44:45', 2),
(1, 'root', '2020-12-13', '2020-12-14', '11:45:11', '07:21:42', 2),
(1, 'root', '2020-12-13', '2020-12-14', '14:17:08', '07:21:42', 2),
(1, 'root', '2020-12-14', '2020-12-14', '04:49:44', '07:21:42', 2),
(1, 'root', '2020-12-14', '2020-12-14', '05:41:04', '07:21:42', 2),
(1, 'root', '2020-12-14', '2020-12-14', '05:42:18', '07:21:42', 2),
(1, 'root ', '2020-12-14', '2020-12-14', '07:16:15', '07:21:42', 2),
(1, 'root', '2020-12-14', '2020-12-19', '07:22:36', '18:04:24', 2),
(1, 'root', '2020-12-14', '2020-12-19', '08:01:31', '18:04:24', 2),
(1, 'root', '2020-12-19', '2020-12-19', '06:59:41', '18:04:24', 2),
(1, 'root', '2020-12-19', '2020-12-19', '16:14:17', '18:04:24', 2),
(1, 'root', '2020-12-19', '2020-12-19', '18:04:51', '18:05:11', 2),
(3, 'Batman', '2020-12-19', '2020-12-19', '18:05:17', '18:06:12', 2),
(3, 'Batman', '2020-12-19', '2020-12-19', '18:06:51', '18:08:19', 2),
(4, 'Robin', '2020-12-19', '2020-12-19', '18:08:40', '18:09:02', 2),
(1, 'root', '2020-12-19', '2020-12-19', '18:10:23', '18:23:33', 2),
(3, 'Batman', '2020-12-19', '0000-00-00', '18:23:47', '00:00:00', 1),
(1, 'root', '2020-12-20', '2020-12-20', '09:27:18', '09:42:26', 2),
(1, 'root', '2020-12-20', '2020-12-20', '09:48:49', '10:02:10', 2),
(5, 'Superm', '2020-12-20', '2020-12-20', '10:02:16', '10:05:30', 2),
(1, 'root', '2020-12-20', '2020-12-20', '15:00:51', '15:01:47', 2),
(1, 'root', '2020-12-20', '2020-12-20', '15:02:00', '15:03:03', 2),
(1, 'root', '2020-12-20', '2020-12-20', '15:03:30', '15:04:11', 2),
(8, 'alan', '2020-12-20', '2020-12-20', '15:04:17', '15:04:49', 2),
(6, 'dodi', '2020-12-20', '2020-12-20', '15:06:05', '15:46:03', 2),
(1, 'root', '2020-12-20', '2020-12-22', '15:48:28', '15:08:55', 2),
(1, 'root', '2020-12-22', '2020-12-22', '15:08:51', '15:08:55', 2),
(6, 'dodi', '2020-12-22', '2020-12-22', '15:09:55', '15:09:59', 2),
(8, 'alan', '2020-12-22', '2020-12-22', '15:10:23', '15:12:29', 2),
(1, 'root', '2020-12-22', '2020-12-22', '15:12:52', '15:30:39', 2),
(1, 'root', '2020-12-22', '2020-12-22', '15:29:26', '15:30:39', 2),
(1, 'root', '2020-12-22', '0000-00-00', '15:30:42', '00:00:00', 1),
(1, 'root', '2020-12-23', '0000-00-00', '03:15:40', '00:00:00', 1),
(1, 'root', '2020-12-23', '0000-00-00', '03:35:05', '00:00:00', 1),
(1, 'root', '2020-12-26', '0000-00-00', '07:59:31', '00:00:00', 1),
(1, 'root', '2020-12-26', '0000-00-00', '10:07:59', '00:00:00', 1),
(1, 'root', '2020-12-26', '0000-00-00', '14:26:21', '00:00:00', 1),
(1, 'root', '2020-12-27', '0000-00-00', '17:25:51', '00:00:00', 1),
(1, 'root', '2020-12-27', '0000-00-00', '17:38:10', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_aksesuser`
--

CREATE TABLE `master_aksesuser` (
  `aksesuser_id` int(11) NOT NULL,
  `aksesuser_login` varchar(20) NOT NULL,
  `aksesuser_password` varchar(12) NOT NULL,
  `aksesuser_hakakses` int(1) NOT NULL,
  `aksesuser_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_aksesuser`
--

INSERT INTO `master_aksesuser` (`aksesuser_id`, `aksesuser_login`, `aksesuser_password`, `aksesuser_hakakses`, `aksesuser_status`) VALUES
(8, 'alan', '1234', 3, 1),
(3, 'Batman', '123', 2, 1),
(6, 'dodi', '12', 2, 1),
(7, 'fifa', '123', 3, 0),
(9, 'kamisama', '12', 3, 1),
(4, 'Robin', 'dodond', 3, 0),
(1, 'root', 'admin', 1, 1),
(5, 'Superman', '12345', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kecamatan`
--

CREATE TABLE `master_kecamatan` (
  `kecamatan_id` int(11) NOT NULL,
  `kecamatan_kode` varchar(30) NOT NULL,
  `kecamatan_nama` varchar(300) NOT NULL,
  `kecamatan_alamat` text NOT NULL,
  `kecamatan_status` int(1) NOT NULL,
  `datecreated` date NOT NULL,
  `dateupdated` date NOT NULL,
  `usercreated` varchar(10) NOT NULL,
  `userupdated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_kecamatan`
--

INSERT INTO `master_kecamatan` (`kecamatan_id`, `kecamatan_kode`, `kecamatan_nama`, `kecamatan_alamat`, `kecamatan_status`, `datecreated`, `dateupdated`, `usercreated`, `userupdated`) VALUES
(1, '65123', 'Blimbing', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148 CV21', 2, '2020-12-13', '2020-12-13', 'root', 'root'),
(4, '65148', 'Kecamatan Klojen', 'Jl. Surabaya No.3A, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115', 2, '2020-12-14', '2020-12-14', 'root', 'root'),
(1, '65149', 'Sukun', 'Sukun', 2, '0000-00-00', '0000-00-00', '', ''),
(5, '653327', 'kecamatan Dau', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 23 CV', 1, '2020-12-14', '2020-12-14', 'root ', 'root '),
(3, 'alsndlasnd', 'lkasndlsan', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148 CV', 2, '2020-12-14', '2020-12-14', 'root', 'root');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kelurahan`
--

CREATE TABLE `master_kelurahan` (
  `kelurahan_id` int(11) NOT NULL,
  `kelurahan_kode` varchar(30) NOT NULL,
  `kecamatan_kode` varchar(30) NOT NULL,
  `kelurahan_nama` varchar(300) NOT NULL,
  `kelurahan_alamat` text NOT NULL,
  `kelurahan_status` int(1) NOT NULL,
  `datecreated` date NOT NULL,
  `dateupdated` date NOT NULL,
  `usercreated` varchar(10) NOT NULL,
  `userupdated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_kelurahan`
--

INSERT INTO `master_kelurahan` (`kelurahan_id`, `kelurahan_kode`, `kecamatan_kode`, `kelurahan_nama`, `kelurahan_alamat`, `kelurahan_status`, `datecreated`, `dateupdated`, `usercreated`, `userupdated`) VALUES
(3, '65146', '65148', 'Kelurahan Klojen', 'Jl. Patimura No.51, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111', 1, '2020-12-14', '2020-12-14', 'root', 'root'),
(1, '65149', '65149', 'Karang Besuki', 'Jalan Raya Candi', 2, '0000-00-00', '0000-00-00', '', ''),
(4, '653123', '653327', 'Kelurahan Dau', 'Jl. Patimura No.51, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111 CV', 1, '2020-12-14', '2020-12-14', 'root ', 'root '),
(1, 'jdlansldnl', '65123', 'haodhasid', 'oisahdnasnd', 2, '2020-12-13', '2020-12-13', 'root', 'root'),
(2, 'wawedfa345', '65149', 'haodhasid', 'oisahdnasnd', 1, '2020-12-13', '2020-12-13', 'root', 'root');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_transaksi`
--

CREATE TABLE `master_transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_nama` varchar(300) NOT NULL,
  `id_jkategori` varchar(20) NOT NULL,
  `id_kategori` int(1) NOT NULL,
  `transaksi_status` int(1) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `transaksi_alamat` text NOT NULL,
  `kelurahan_kode` varchar(30) NOT NULL,
  `latitude` varchar(300) NOT NULL,
  `longitude` varchar(300) NOT NULL,
  `datecreated` date NOT NULL,
  `dateupdated` date NOT NULL,
  `usercreated` varchar(10) NOT NULL,
  `userupdated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_transaksi`
--

INSERT INTO `master_transaksi` (`transaksi_id`, `transaksi_nama`, `id_jkategori`, `id_kategori`, `transaksi_status`, `no_telepon`, `transaksi_alamat`, `kelurahan_kode`, `latitude`, `longitude`, `datecreated`, `dateupdated`, `usercreated`, `userupdated`) VALUES
(1, 'Pantai Clungup', '103', 1, 1, '+6281233339881', 'Sendang Biru, Area Sawah/Kebun, Tambakrejo, Sumbermanjing, Malang, Jawa Timur', '65146', '-8.4035849', '112.3875653', '2020-12-26', '2020-12-26', 'root', 'root'),
(2, 'Go-Camp Malang', '201,202,203', 2, 1, '+6285790909064', 'Jl. Kembang Kertas No.1, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '65146', '-7.9668054', '112.5897494', '2020-12-26', '2020-12-26', 'root', 'root'),
(3, 'Pantai Kuncaran', '103', 1, 1, '+6282231059326', 'Area Gn., Sidurejo, Gedangan, Malang, Jawa Timur 65178', '65149', '-8.414738', '112.5789477', '2020-12-26', '2020-12-26', 'root', 'root');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kategori`
--

CREATE TABLE `tipe_kategori` (
  `id_kategori` int(1) NOT NULL,
  `kategori_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_kategori`
--

INSERT INTO `tipe_kategori` (`id_kategori`, `kategori_nama`) VALUES
(1, 'Camping Ground'),
(2, 'Persewaan Alat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_tempat`
--
ALTER TABLE `kategori_tempat`
  ADD PRIMARY KEY (`id_jkategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `master_aksesuser`
--
ALTER TABLE `master_aksesuser`
  ADD PRIMARY KEY (`aksesuser_login`);

--
-- Indeks untuk tabel `master_kecamatan`
--
ALTER TABLE `master_kecamatan`
  ADD PRIMARY KEY (`kecamatan_kode`),
  ADD KEY `kecamatan_kode` (`kecamatan_kode`);

--
-- Indeks untuk tabel `master_kelurahan`
--
ALTER TABLE `master_kelurahan`
  ADD PRIMARY KEY (`kelurahan_kode`),
  ADD KEY `kecamatan_kode` (`kecamatan_kode`);

--
-- Indeks untuk tabel `master_transaksi`
--
ALTER TABLE `master_transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `kelurahan_kode` (`kelurahan_kode`),
  ADD KEY `id_kategori` (`id_jkategori`);

--
-- Indeks untuk tabel `tipe_kategori`
--
ALTER TABLE `tipe_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kategori_tempat`
--
ALTER TABLE `kategori_tempat`
  ADD CONSTRAINT `kategori_tempat_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tipe_kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `master_kelurahan`
--
ALTER TABLE `master_kelurahan`
  ADD CONSTRAINT `master_kelurahan_ibfk_1` FOREIGN KEY (`kecamatan_kode`) REFERENCES `master_kecamatan` (`kecamatan_kode`);

--
-- Ketidakleluasaan untuk tabel `master_transaksi`
--
ALTER TABLE `master_transaksi`
  ADD CONSTRAINT `master_transaksi_ibfk_1` FOREIGN KEY (`kelurahan_kode`) REFERENCES `master_kelurahan` (`kelurahan_kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
