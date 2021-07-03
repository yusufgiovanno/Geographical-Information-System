-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 06:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelas_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `aksesuser_login` varchar(20) CHARACTER SET latin1 NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `aksesuser_login`, `transaksi_id`, `komentar`, `tanggal`) VALUES
(1, 'vann', 3, 'jajal heb', '2021-01-02 19:13:21'),
(2, 'vann', 3, 'Tempat yang menarik, penuh warna, sejuk sekali', '2021-01-02 19:57:58'),
(3, 'vann', 4, 'Woah iki suangar seh', '2021-01-02 20:00:07'),
(4, 'vann', 4, 'ciamik rek.. kok iso ngunu?', '2021-01-02 20:00:20'),
(5, 'vann', 4, 'Woah iki suangar seh', '2021-01-02 20:02:12'),
(6, 'root', 1, 'halooo bang', '2021-01-27 08:16:50'),
(7, 'root', 4, 'haloo bang', '2021-01-27 08:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `log_akses`
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
-- Dumping data for table `log_akses`
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
(3, 'Batman', '2020-12-19', '2020-12-25', '18:23:47', '14:44:45', 2),
(1, 'root', '2020-12-20', '2020-12-20', '09:27:18', '09:42:26', 2),
(1, 'root', '2020-12-20', '2020-12-20', '09:48:49', '10:02:10', 2),
(5, 'Superm', '2020-12-20', '2020-12-20', '10:02:16', '10:05:30', 2),
(1, 'root', '2020-12-20', '2020-12-20', '15:00:51', '15:01:47', 2),
(1, 'root', '2020-12-20', '2020-12-20', '15:02:00', '15:03:03', 2),
(1, 'root', '2020-12-20', '2020-12-20', '15:03:30', '15:04:11', 2),
(8, 'alan', '2020-12-20', '2020-12-20', '15:04:17', '15:04:49', 2),
(6, 'dodi', '2020-12-20', '2020-12-20', '15:06:05', '15:46:03', 2),
(1, 'root', '2020-12-20', '2020-12-25', '15:48:28', '11:07:22', 2),
(1, 'root', '2020-12-21', '2020-12-25', '16:43:12', '11:07:22', 2),
(1, 'root', '2020-12-21', '2020-12-25', '17:42:11', '11:07:22', 2),
(1, 'root', '2020-12-23', '2020-12-25', '09:35:57', '11:07:22', 2),
(1, 'root', '2020-12-25', '2020-12-25', '09:50:08', '11:07:22', 2),
(1, 'root', '2020-12-25', '2020-12-25', '11:07:49', '14:30:30', 2),
(3, 'Batman', '2020-12-25', '2020-12-25', '14:30:36', '14:44:45', 2),
(6, 'dodi', '2020-12-25', '2020-12-25', '14:44:49', '14:48:25', 2),
(1, 'root', '2020-12-25', '2020-12-26', '14:48:30', '12:46:47', 2),
(1, 'root', '2020-12-26', '2020-12-26', '12:45:12', '12:46:47', 2),
(1, 'root', '2020-12-26', '2020-12-26', '12:46:51', '13:09:07', 2),
(1, 'root', '2020-12-26', '2020-12-26', '13:10:09', '13:18:39', 2),
(3, 'Batman', '2020-12-26', '2020-12-26', '13:18:58', '13:30:31', 2),
(1, 'root', '2020-12-26', '2020-12-26', '13:30:35', '15:21:07', 2),
(3, 'Batman', '2020-12-26', '2020-12-26', '15:21:28', '15:21:59', 2),
(1, 'root', '2020-12-26', '2020-12-27', '15:22:03', '16:11:06', 2),
(8, 'alan', '2020-12-27', '0000-00-00', '16:10:27', '00:00:00', 1),
(1, 'root', '2020-12-27', '2020-12-27', '16:10:57', '16:11:06', 2),
(1, 'root', '2020-12-27', '2020-12-27', '16:11:20', '16:26:25', 2),
(6, 'dodi', '2020-12-27', '2020-12-27', '16:26:58', '16:39:42', 2),
(1, 'root', '2020-12-27', '0000-00-00', '18:14:39', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_aksesuser`
--

CREATE TABLE `master_aksesuser` (
  `aksesuser_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `aksesuser_login` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kota_kelahiran` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` char(2) NOT NULL,
  `aksesuser_password` varchar(12) NOT NULL,
  `aksesuser_hakakses` int(1) NOT NULL,
  `aksesuser_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_aksesuser`
--

INSERT INTO `master_aksesuser` (`aksesuser_id`, `foto`, `aksesuser_login`, `nama_lengkap`, `kota_kelahiran`, `tanggal_lahir`, `no_tlp`, `email`, `alamat`, `gender`, `aksesuser_password`, `aksesuser_hakakses`, `aksesuser_status`) VALUES
(9, '', '', '', '', '0000-00-00', '', '', '', '', '', 3, 0),
(12, '', '----12dd', '', '', '0000-00-00', '', '', '', '', 'dodo--04', 3, 0),
(8, '', 'alan', '', '', '0000-00-00', '', '', '', '', '1234', 3, 1),
(3, '', 'Batman', '', '', '0000-00-00', '', '', '', '', '123', 2, 1),
(15, '', 'dedi', 'Dedi GUnawan', 'Malang', '2020-12-12', '0203482095', 'firmanwisnu432@gmail.com', 'Cendrawasih', '', 'dodondut04', 2, 0),
(6, '', 'dodi', '', '', '0000-00-00', '', '', '', '', '12', 2, 1),
(10, '', 'fadhila', '', '', '0000-00-00', '', '', '', 'P', 'dodo322838', 3, 1),
(7, '', 'fifa', '', '', '0000-00-00', '', '', '', '', '123', 3, 0),
(14, '', 'george', 'George Geovanni', 'Malang', '2020-12-11', '0203482095', 'firmanwisnu432@gmail.com', 'Cendrawasih', 'L', 'dodondut04', 2, 0),
(11, '', 'kukuh1', '', '', '0000-00-00', '', '', '', '', 'dodo123', 3, 0),
(13, '', 'ridho05', '', '', '0000-00-00', '', '', '', '', 'dodo--04', 3, 0),
(4, '', 'Robin', '', '', '0000-00-00', '', '', '', '', 'dodond', 3, 0),
(1, 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-7496370/bandai_bandai_figure_kamen_rider_shadowmoon_full02_ppjk7hyj.jpg', 'root', 'Richi Kyle', '', '0000-00-00', '', '', '', '', 'admin', 1, 1),
(5, '', 'Superman', '', '', '0000-00-00', '', '', '', '', '12345', 3, 1),
(16, 'https://0.academia-photos.com/35165274/14526056/15403223/s200_yusuf.giovanno.jpg', 'vann', 'Yusuf Giovanno', 'Situbondo', '2021-01-01', '081357907526', 'yusufgioov@nno.coom', 'Sesame', 'L', '123', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_kecamatan`
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
-- Dumping data for table `master_kecamatan`
--

INSERT INTO `master_kecamatan` (`kecamatan_id`, `kecamatan_kode`, `kecamatan_nama`, `kecamatan_alamat`, `kecamatan_status`, `datecreated`, `dateupdated`, `usercreated`, `userupdated`) VALUES
(1, '65123', 'Blimbing', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148 CV21', 2, '2020-12-13', '2020-12-13', 'root', 'root'),
(4, '65148', 'Kecamatan Klojen', 'Jl. Surabaya No.3A, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115', 2, '2020-12-14', '2020-12-14', 'root', 'root'),
(1, '65149', 'Sukun', 'Sukun', 2, '0000-00-00', '0000-00-00', '', ''),
(5, '653327', 'kecamatan Dau', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 23 CV', 1, '2020-12-14', '2020-12-14', 'root ', 'root '),
(3, 'alsndlasnd', 'lkasndlsan', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148 CV', 2, '2020-12-14', '2020-12-14', 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelurahan`
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
-- Dumping data for table `master_kelurahan`
--

INSERT INTO `master_kelurahan` (`kelurahan_id`, `kelurahan_kode`, `kecamatan_kode`, `kelurahan_nama`, `kelurahan_alamat`, `kelurahan_status`, `datecreated`, `dateupdated`, `usercreated`, `userupdated`) VALUES
(3, '65146', '65148', 'Kelurahan Klojen', 'Jl. Patimura No.51, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111', 2, '2020-12-14', '2020-12-14', 'root', 'root'),
(1, '65149', '65149', 'Karang Besuki', 'Jalan Raya Candi', 2, '0000-00-00', '0000-00-00', '', ''),
(4, '653123', '653327', 'Kelurahan Dau', 'Jl. Patimura No.51, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111 CV', 1, '2020-12-14', '2020-12-14', 'root ', 'root '),
(1, 'jdlansldnl', '65123', 'haodhasid', 'oisahdnasnd', 2, '2020-12-13', '2020-12-13', 'root', 'root'),
(2, 'wawedfa345', '65149', 'haodhasid', 'oisahdnasnd', 2, '2020-12-13', '2020-12-13', 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `master_transaksi`
--

CREATE TABLE `master_transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_nama` varchar(300) NOT NULL,
  `transaksi_tipe` varchar(20) NOT NULL,
  `transaksi_status` int(1) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `transaksi_alamat` text NOT NULL,
  `kelurahan_kode` varchar(30) NOT NULL,
  `latitude` varchar(300) NOT NULL,
  `longitude` varchar(300) NOT NULL,
  `datecreated` date NOT NULL,
  `dateupdated` date NOT NULL,
  `usercreated` varchar(10) NOT NULL,
  `userupdated` varchar(10) NOT NULL,
  `foto` varchar(10000) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_transaksi`
--

INSERT INTO `master_transaksi` (`transaksi_id`, `transaksi_nama`, `transaksi_tipe`, `transaksi_status`, `no_telepon`, `transaksi_alamat`, `kelurahan_kode`, `latitude`, `longitude`, `datecreated`, `dateupdated`, `usercreated`, `userupdated`, `foto`, `deskripsi`) VALUES
(1, 'Go Camp', 'persewaan', 2, '01111111111111', 'Jl. Kembang Kertas No.1, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '65149', '-7.9525963', '112.6079458', '2020-12-25', '2020-12-25', 'Batman', 'Batman', 'https://img.traveltriangle.com/blog/wp-content/uploads/2019/03/Denali.jpg', ''),
(3, 'Batu Camping Ground', 'Camping', 1, '0819872354', 'Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65313', '65146', '-7.9731906', '112.5655935', '2020-12-14', '2020-12-14', 'root', 'root', 'https://img.traveltriangle.com/blog/wp-content/uploads/2019/03/Denali.jpg', 'Batu Camping Ground merupakan sebuah camping ground yang biasa digunakan oleh manusia, binatang, tumbuhan, djinn, hingga syaitonnirrojim untuk berkemah.'),
(4, 'Klojen', 'Camping', 1, '0341322838', 'Jl. Surabaya No.3A, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115', '65146', '-7.9660969', '112.6158821', '2020-12-21', '2020-12-21', 'root', 'root', 'https://img.traveltriangle.com/blog/wp-content/uploads/2019/03/Denali.jpg', ''),
(5, 'Do-Rent', 'persewaan', 1, '081939571236', 'Jl. Kedawung XV No.91C, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '653123', '-7.9670104', '112.6101742', '2020-12-25', '2020-12-25', 'root', 'root', 'https://img.traveltriangle.com/blog/wp-content/uploads/2019/03/Denali.jpg', ''),
(6, 'Rent Rover', 'persewaan', 1, '0341322838', 'Jalan Bareng Raya, Gg. 2G No. 83, Bareng, Kec. Klojen, Kota Malang, Jawa Timur 65111', '65149', '-7.982083', '112.60349423', '2020-12-25', '2020-12-25', 'root', 'root', 'https://img.traveltriangle.com/blog/wp-content/uploads/2019/03/Denali.jpg', ''),
(7, 'Ciliwungcamp Rental Alat Camping', 'persewaan', 1, '0819872354', 'Jl. Ciliwung I No.76, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65126', '65146', '-7.9520047', '112.6348378', '2020-12-25', '2020-12-25', 'dodi', 'root', 'https://img.traveltriangle.com/blog/wp-content/uploads/2019/03/Denali.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `komentar` (`komentar`(191)),
  ADD KEY `aksesuser_id` (`aksesuser_login`,`transaksi_id`),
  ADD KEY `transaksi_id` (`transaksi_id`);

--
-- Indexes for table `master_aksesuser`
--
ALTER TABLE `master_aksesuser`
  ADD PRIMARY KEY (`aksesuser_login`);

--
-- Indexes for table `master_kecamatan`
--
ALTER TABLE `master_kecamatan`
  ADD PRIMARY KEY (`kecamatan_kode`),
  ADD KEY `kecamatan_kode` (`kecamatan_kode`);

--
-- Indexes for table `master_kelurahan`
--
ALTER TABLE `master_kelurahan`
  ADD PRIMARY KEY (`kelurahan_kode`),
  ADD KEY `kecamatan_kode` (`kecamatan_kode`);

--
-- Indexes for table `master_transaksi`
--
ALTER TABLE `master_transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `kelurahan_kode` (`kelurahan_kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `master_transaksi` (`transaksi_id`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`aksesuser_login`) REFERENCES `master_aksesuser` (`aksesuser_login`);

--
-- Constraints for table `master_kelurahan`
--
ALTER TABLE `master_kelurahan`
  ADD CONSTRAINT `master_kelurahan_ibfk_1` FOREIGN KEY (`kecamatan_kode`) REFERENCES `master_kecamatan` (`kecamatan_kode`);

--
-- Constraints for table `master_transaksi`
--
ALTER TABLE `master_transaksi`
  ADD CONSTRAINT `master_transaksi_ibfk_1` FOREIGN KEY (`kelurahan_kode`) REFERENCES `master_kelurahan` (`kelurahan_kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
