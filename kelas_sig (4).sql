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
-- Database: `kelas_sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tempat`
--

CREATE TABLE `kategori_tempat` (
  `id_kategori` int(1) NOT NULL,
  `id_jkategori` varchar(20) NOT NULL,
  `nama_jkategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_tempat`
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
(7, 'root', 4, 'haloo bang', '2021-01-27 08:21:52'),
(8, 'alan', 3, 'haloo bang', '2021-01-27 16:42:34'),
(9, 'alan', 7, 'nais bang', '2021-01-27 16:43:23'),
(10, 'alan', 7, 'nais bang', '2021-01-27 16:43:32');

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
(1, 'root', '2020-12-22', '2020-12-30', '15:30:42', '16:40:52', 2),
(1, 'root', '2020-12-23', '2020-12-30', '03:15:40', '16:40:52', 2),
(1, 'root', '2020-12-23', '2020-12-30', '03:35:05', '16:40:52', 2),
(1, 'root', '2020-12-26', '2020-12-30', '07:59:31', '16:40:52', 2),
(1, 'root', '2020-12-26', '2020-12-30', '10:07:59', '16:40:52', 2),
(1, 'root', '2020-12-26', '2020-12-30', '14:26:21', '16:40:52', 2),
(1, 'root', '2020-12-27', '2020-12-30', '17:25:51', '16:40:52', 2),
(1, 'root', '2020-12-27', '2020-12-30', '17:38:10', '16:40:52', 2),
(1, 'root', '2020-12-30', '2020-12-30', '17:28:26', '17:54:00', 2),
(1, 'root', '2020-12-30', '2021-01-01', '17:58:52', '09:46:22', 2),
(1, 'root', '2021-01-01', '2021-01-01', '07:39:48', '09:46:22', 2),
(1, 'root', '2021-01-01', '2021-01-02', '14:29:46', '16:22:05', 2),
(1, 'root', '2021-01-02', '2021-01-02', '13:33:53', '16:22:05', 2),
(1, 'root', '2021-01-02', '2021-01-02', '13:34:14', '16:22:05', 2),
(1, 'root', '2021-01-02', '2021-01-02', '14:29:18', '16:22:05', 2),
(1, 'root', '2021-01-02', '2021-01-02', '16:12:33', '16:22:05', 2),
(1, 'root', '2021-01-02', '2021-01-02', '16:36:09', '16:36:29', 2),
(1, 'root', '2021-01-02', '2021-01-02', '16:47:39', '17:00:21', 2),
(1, 'root', '2021-01-03', '2021-01-03', '10:36:36', '10:43:30', 2),
(1, 'root', '2021-01-03', '2021-01-03', '10:45:27', '11:01:54', 2),
(1, 'root', '2021-01-03', '2021-01-03', '11:02:11', '14:09:47', 2),
(1, 'root', '2021-01-03', '2021-01-03', '13:04:09', '14:09:47', 2),
(1, 'root', '2021-01-03', '2021-01-03', '14:33:06', '15:44:06', 2),
(1, 'root', '2021-01-03', '2021-01-03', '16:11:16', '16:13:43', 2),
(1, 'root', '2021-01-03', '2021-01-03', '16:16:43', '16:32:45', 2),
(1, 'root', '2021-01-03', '2021-01-03', '16:33:13', '18:14:23', 2),
(10, 'kimihi', '2021-01-03', '2021-01-03', '18:14:30', '18:15:02', 2),
(1, 'root', '2021-01-03', '2021-01-04', '18:15:05', '02:21:46', 2),
(1, 'root', '2021-01-04', '2021-01-04', '02:15:53', '02:21:46', 2),
(1, 'root', '2021-01-04', '2021-01-26', '02:26:12', '19:02:29', 2),
(1, 'root', '2021-01-24', '2021-01-26', '13:53:19', '19:02:29', 2),
(1, 'root', '2021-01-24', '2021-01-26', '14:42:56', '19:02:29', 2),
(1, 'root', '2021-01-24', '2021-01-26', '15:34:12', '19:02:29', 2),
(1, 'root', '2021-01-26', '2021-01-26', '06:01:36', '19:02:29', 2),
(1, 'root', '2021-01-26', '2021-01-26', '07:27:26', '19:02:29', 2),
(1, 'root', '2021-01-26', '2021-01-26', '16:50:34', '19:02:29', 2),
(1, 'root', '2021-01-26', '2021-01-26', '18:38:55', '19:02:29', 2),
(1, 'root', '2021-01-27', '2021-01-27', '06:55:46', '09:11:54', 2),
(1, 'root', '2021-01-27', '2021-01-27', '09:24:00', '09:24:45', 2),
(1, 'root', '2021-01-27', '2021-01-27', '12:38:05', '12:38:09', 2),
(8, 'alan', '2021-01-27', '2021-01-27', '12:38:33', '12:45:08', 2),
(8, 'alan', '2021-01-27', '2021-01-27', '12:54:47', '13:08:11', 2),
(1, 'root', '2021-01-27', '2021-01-27', '13:51:04', '14:52:53', 2),
(1, 'root', '2021-01-27', '2021-01-27', '14:10:37', '14:52:53', 2),
(8, 'alan', '2021-01-27', '2021-01-27', '14:52:57', '15:10:37', 2),
(1, 'root', '2021-01-27', '2021-01-27', '15:10:41', '15:25:29', 2),
(1, 'root', '2021-01-27', '2021-01-27', '15:15:09', '15:25:29', 2),
(8, 'alan', '2021-01-27', '2021-01-27', '15:25:34', '15:26:57', 2),
(1, 'root', '2021-01-27', '2021-01-27', '15:27:02', '16:37:52', 2),
(7, 'alan', '2021-01-27', '2021-01-27', '15:47:15', '16:14:27', 2),
(1, 'root', '2021-01-27', '2021-01-27', '16:14:46', '16:37:52', 2),
(7, 'alan', '2021-01-27', '2021-01-27', '16:37:57', '17:00:55', 2),
(1, 'root', '2021-01-27', '2021-01-27', '17:00:59', '17:02:09', 2),
(1, 'root', '2021-01-27', '2021-01-27', '17:37:56', '17:41:26', 2),
(7, 'alan', '2021-01-27', '2021-01-27', '17:41:31', '17:43:38', 2),
(1, 'root', '2021-01-28', '2021-01-28', '02:50:44', '03:35:27', 2),
(7, 'alan', '2021-01-28', '2021-01-28', '02:51:03', '02:54:30', 2),
(1, 'root', '2021-01-28', '2021-01-28', '02:55:43', '03:35:27', 2),
(1, 'root', '2021-04-16', '2021-04-16', '07:20:41', '07:24:05', 2),
(1, 'root', '2021-04-18', '2021-04-28', '14:12:43', '05:37:18', 2),
(1, 'root', '2021-04-21', '2021-04-28', '04:03:37', '05:37:18', 2),
(1, 'root', '2021-04-21', '2021-04-28', '11:13:21', '05:37:18', 2),
(1, 'root', '2021-04-28', '2021-04-28', '05:33:12', '05:37:18', 2),
(7, 'alan', '2021-04-28', '0000-00-00', '05:38:26', '00:00:00', 1),
(1, 'root', '2021-07-02', '2021-07-02', '18:44:17', '18:44:47', 2);

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
(7, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhITExMVFRUXFRYXGBUYFRcVFxYYGBUYGBkXFRUYHSggGBolGxcZITEhJSktLi4vGCAzODUtOSgtLisBCgoKDg0OGxAQGC0lHSUtLS8tLS0tLS0tLystLS4tLS0tLSstLS0tLS0tMC8tLS0tLS0rLS0tLS0tLS0tLSstLf/AABEIAOwA1gMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABAUDBgcCAQj/xABGEAACAQIDBAcEBgcHAwUAAAABAgMAEQQSIQUxQVEGEyJhcYGRBzKhsSNCUnKCwRRiY6Ky0fAzc5KTs8LhJENTFiWjw/H/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAMBEBAQACAgECBAIJBQAAAAAAAAECEQMxIRJBMlFxkQShEyIzgaKxweHwQlJhgpL/2gAMAwEAAhEDEQA/AOqUpSpClKUClKUClKUClKUClQ0x4M7Q8Qga9+OlxbwKn15VMoa0Ur5fkCfDh4ncK8gk934Wb55bfGo2tMbeo90rG/LOQeGij4EGo5YD3pSfAgfw1Hqi84M6mUqBLLa+SV2bgtkZb95sCf8AFTC41jo6dofYZCD35c1x4a+Jp6oXhznsn0qPhsajllVu0u9CCrjvKsAbd+41IqzIpSlApSlApSlApSlApSlApSlApSlApSlApSvLyBQSdw8/IDie6g55idqlMU04uQkxuB9ZLlSO85Cbd4Fb4s4ZRJmURkBgSbAqRcMTwBGtvU8K5O+ZpDGouzNZVuNT4g2tvub2sCd1dL2NhooYoo1XrXQayBfrE5mys+5bk2y3G6sscr5ep+J4sZMLJ510n/pKkCzFhwCAkeQQWr0zqd9wP1gy/O1ZY8S41MSnxlPyyWrOdpNxUp3jtj1Av8Knw5vVnPZAcRgZgqsSbCwBufGqLC7RLY5omClerYAcMyMtxbnq5vxArYZ4kb6Q2vlJEikA2tvDDRh3G4rluG2k0ckU5uWVg7c2DAq404lWNu+1Vvh0cE/SzLx1HVFiA3C3hoPTdXiZ1vZh8K+4adXUMpBBsQRuIIuCPI19xMOdSN3I8jwNFWLE4NJAL3uPdcGzL4Nv8q+YeRh2JNW4MNA3lwPd6d2HBSnUHeDZh4cqmS2I58amVTl4/U90rwp4HkCD9pTuPjwPeD3V7rVwlKUoFKUoFKUoFKUoFKUoFKUoFKUoFV+OYswRVLb9Pq3AF8x5doC3G7biLiZPJlVmtewJtzsN1ecPCU0JvZQCeZuxY+Z1quVa8WHqqo2TsIZmkKLm1W4A33JYi3urfXKOO+9gBeSrlyRrvILHuUb/AJgfips6b6NO8Bj5i/51jwMoZppDrdgi+CXv+8SPwiqOm7Zq8yJcEc9D4cazQrck8hasEb5pGQcAvqxP5D41CdsGIhsrqmmZHGUbiTG1jbgbga1zLYeyHxMnVi6qLGR+Cra9gd2Yjd611VQd43hrg2uNDy/rfWCPARgEZFsTfKFCrf7o09b0s2vhyZcfq9Pv7o+DwrQkXsI/cUAk5VGkdyd43juJHPSxrAsOUWG43BQ+6bjcB9XTl53rLHe2t/PfvsCbc/zozm/dikis4bmNfEbvh8qyFak4iK8an+tRao0LXAotMtx4yEo1hdojmXmyH3l87eoWvaMCAQbgi4PMGs+G0dT4j1/5tULCpkMsXBHIX7jAOo8AGy/hq+NcvNP1tpFKUq7EpSlApSlApSlApSlApSlApSlB4KZmjXm6/u9s/wAFvOsG2Z8kUzcVRj52NvjUzDf2i9yu3n2R8mNU22+2HTgSt/wK0nzC+tUydPBO0rG4jq4jbWwso5nco8zYV92JEVgiBN2yAsebN2mPmSTVfjLsLcg7nwRGYfvWqzwkn0Y8BVJXTYlqdPGqvY0pZsS5/wDOVX7qxoP4s3rVk7WF+VV+xB2G55gT4mKNj8SaKrFNB4CvCS3RvE/AkVixSlrRje5t4KNWP5edQNkMerlU7wWNuQYH8waHhYzv2VP6yfFgPzrODVdipfoVP60f8a1Kwr3HkKJs8JU8/wBGfvIPVwKg4CS+bxuPA61i2256oKN7yRqPNt/lv8q8xPlnZeB/kKWmGPirSHeKw44WxAP/AJIfjE/zIl/dqRANf65182omsLd7L5FSfmoq+Lm5mKlKVdzlKUoFKUoFKUoFKUoFKUoFKUoER7R+4R6sv8qr8Fh+tmxFyRlBXQ21cAfJPjU9Peb7o/irRVnxU+LmhgkWFesciQJ1juUyIygtottDprrvrPLzXTx/s7V4uHPVzEs6sMO+oJsSwO8m4toPWs2Ck7Ki5PZU3Ntx3bvCuYYja+MwOLlMrM6q5zr1xdim7MQrMsbEa5bg7rg7j07BYTNHDJEcyMqZTa10ZTa44EG2lVss7acfNjlamY2a8ZH6p+VZBaN2X7SCT4BCPgPWoGIvmVbHXf3C6j5mrHbkJEkTi9gkiGwva5RlNuPukedRtfK6ykecDj4+sctmWwCjMjAD6zHNa2t148KjYcr102VgwzjUEG6yqCp05OrLWTZOP6iECbPe7Fmbq1GrHXeOHdWeRsPiCGjeJ2ykGzLmsdRu1BB+BPOo2y3rLauxD/RKv7Rfhr/tqywA7NU4vmZT9VifVTY+rH0q7wgsoqY6cukfHayYYftGbyWJx82WouMNpwfD5Vnxb2xWGHAxzjzPVkfBGrFtBfpL+FTUcd8rvDNof64GvmObsJ3SAfBhWAns+VeZZcypb/yi/h1b/mKtjXNy4+NvdKUrRylKUoFKUoFKUoFKUoFKUoFKUoEfvH7nyZf51RdF4QJJ+Ym65W4hnzKfIhbHxq7VrOBzRx53Q/IGq3o8nam/APjJWPI6+H4KqpuiLXfJFhzmkkZXLMhTrJHa5UIczKHO5lvu031vEKBVAHAf0T31jVa9lrW/rSq3K3tjOLDC24zsMKk3sL18njLCwOXvsCR4X0vWQGvjGi7mntH6MxKiOhnM7FiCq9azKi9rOWcCNLsuqi+6wrUujuxMY2KiRHeIsH7RzE9gMSEayk6rxNiD5Hse1NnLMyMWdXQOEZTa2cAG6kENuGhBGlRcJsFFkaRpJJCVyKGKqEU5cwXqwvvFRc8RYbqvOTGTTHLi5byS78NZ2Hj5nxDxTWd0TK0yDsPZgVzaDK47YNha5tpatzj3f1zqP+jIjFURUVVSwUBR2mN9B3LUuBLlB3i/lr86iO7ckVO0c36UjBSVTqkJ0sGfNfebnSRd1TcSlw/lUTEMCJ5SovnzAmxzZWCrl1NhZRparBx739cKIwtHPZ8qjYZ7ov31/wDsqTiB2G8KgYJuwg/aD5MamdnJ+zqypSlauApSlApSlApSlApSlApSlApSlBgm9+D+8IPnFIB+9ao+wP7WdfukeTOD8x61nxu5DymhP/zJf4E1UT4vqMTn4CRlb7jE5vTKrfhtxrLkdPD5wyjcAK8mMXvx3f16V7U33VrP/qCUTTRlFtG7C99yjVSRpYlbHf4d1NIktuo2UV8YVUw7fSy51ZMxA1GovxYC9lHE30uL2q4tQ1Z2jstfAtZyteWFtarpb1KyE3Mx/aBR4Ki/mxry05DNbeEa3joF+JFNnm8Sn7WZ/wDG5YfAiqLaMobOpFw2S47rs/zjX1rSRpPhZZ8Tp1aEMSQrONVGtikZ4kne3DcNb2uYJMxbxPzt+Va7hfeTkNfAKL+lwB51d7HGi3+sqt6k1EmmmpIm4nSKVuSN8jVTgTog/X/2tVrtqS2GbvKD/FIAaqcNo0Q5sfgjn8qt7xn3hkt6UpWrhKUpQKUpQKUpQKUpQKUpQKUry5OgHvHQePM9w3nwoI21GtGTyKn/AAsG/KqXpEvblPJ2PxP86t3jAZ4izPZt1i7WMa30A0F2Pdw7qgbRwssgYiJyzA6ZbalBxNhvvWWVdnBqSy/JP2DjBGI8OSdI1KE8RqMniMpI7vA1821ZXLGwDAG53aC1rnThu76qdto0cPXSjqhGurMygghyVyAEktciw51c9G+kcWIQ/SJ1iHLIoNrG172OoBGtuGo3g1Wwl1dxHh2Q8wBe6oxHZNgSmh3e8Cx3g20txuDs1QZdrQroZFv9kHMx8FGpqOdr5vcQ+LaDyG/1tUbRZlndrata6UbaKxOsOp3GTgl9CV+0w9BbXkZrSO3vHyGg9KhbXwuaMKPrPGPIyKG/dvTtOOGu0pI8kKqPqoqDyAUVrU7Xmk5Kco8go/2mtq2jIAe5QWPgo/nXET7Q3UgjDq+cZyesK2uTYe6dcoB/FWk7WyymOM26QDZSeYt5DU+p+VbJhI8qxjlEo9FX+Zrl20Omd5o4Vg7M6xdW2fUCayrmTLvBNjrwrqkD3F+8j0NvyqKmZTLpB6UT5YIx9qeIfEfmaxgdvC+Lf6UlYelDXUL9lJZPNVuPiKl5bthjyB/0mH509zrGxYUpStXAUpSgUpSgUpSgUpSgUpWpdKen2HwUyQsrSNvkyW+iUjS9/eY78vLXiAQ2qSQKNfIAEknkANSa+4WJ7lntHcWFyC6ryH1QeJOvwFY9i4qKaJMSjh1YaFCWA5rbfe+8EXuN2gqbN1dzmjv39WWv6A1jllvw1xx01rpT03wOzFszB5W1ESEF34ZnYnQae83LS9Yui3S+THYQ4lVSM5mXIO3azWHaNr6WO7jV9LNhl1MJ8sLIT8Erxmik63q7XyJmAFrHtWDDg1uG/QVEa4fF56fnPpR0rxmIkPXzMSpICr2EXnZV495ua1l3Jqz6RR2xEw/aP8GIqvwUZdwqgsx3KoLMfBRqa1jmvbf/AGJRMcXOBu6kA/5i2+Rru8GC9K597Heh8uGM08y5WkVFCHeqi57XIm404WrqgFZZea6McrjjIirgxzqDMv0ka8mLeSj+bLXrpF0hw+Cj6zESqg+qDqzHkijVj4VrHQ3pWdoPNKsRjiQhI8xu7aZnZraD6gsL7t/JItjd3VZfaDtHqcFiXBszL1a+Lafn8K/P6a2HgB6WFdR9tG0f7GAHnIw+A/OuZbMlyyxMfdVlJ8jWmPTPmu8tNl6LMJtpYQNuiyk31A6oNIfRvlXY+huM63BYaQ75Ez+pvXCujDGJcdPfVMMyKf15mVAfTNXbvZ/hyMFhQeEMajyXU+tRkvw+6s2tt9E2guHcgK8TXJ+rmJQa8tDf/itk2R24MLJzjX1aMH+dcV6V4rrtpzFTpG2QHuTQ+pvXX+h7EYDBAgggFLHeMgKi/kBU66VvJu3/ADpd0oaVdhZqlKUogpSlApSlApSlBrvTfpQmAgz6NK91iTm1tWb9Rd58hxr8/wCJxDyO0kjF3YlmY72J3k1tHtR2qZtoypfswqsajhuzOfHMxH4RWp1Avuh/SqbZ82ePtRsR1kJPZccx9lwNzeRuK/QmyNsrioUnwxR0YcWKlW4owCmxHGvy7V30V6VYjZ7u8BBDLZ42vkY27LW4MOfK4quWO18ctP0ZiJ8SLZYY2HG0xzfhUxgHzYVU7N25HicRiljB+iyRsSCpLDMx0OoAz215GuR4L2v7SzXbqHW+qmIrccgQ2ldN6K9KMPj1eeOMx4hQBKlgS4HFSP7S2tuPC2tU1Y1wym3E+kLiPHTkIknVzscjqGRrMbqyneDuruXs/wBsYHFRXwyRxuAM8IVUaM96gai+5txrgfS9747FOuoMzkEfeO6vOzNoSYSWHExSrnWz2Qm4BOsUuljmHAE2vwI0vcdxn6tWv1YiAbq0/p709hwKMiMsmKK9iPeEvueWx7K8bXubacxyrpD7UMdiMwVxBGdcsdg+W4ADSMbk6j3LceANaVNPa5JJYm5ubkk7ySdSe+qzD5lzSdpY2WeRpsRI0sh3sx4cgNyr3Cwrt3sv2b1OEUkWLdo+YGnlauG7Kw/XTRodzML8AFGrEnhZQTX6C2ljP0fZRltlYwFgOTS6qPLMPSrZL8Pi2uLdOdsCfGTSXuM2VfuroP5+da9mJ3aV9EWpJ1qz2Lsx8RKkUYuWOvcBvJ7gKt0ytuVbD0J2A+IWKHhLN1sh/ZQiwv3Fyw8q7yxWGF2GixoT5AXv8Kpti7MhwMGZiE7K5mOmVFHZW/qT3sa57016aPiUmEIZcKiMmYi3XSP2APAKWNv1b1Tut9enFoGzJy8szkG7hnPiST+dfoeF+zpoFlJHgY42P8Rr8/bFkX3b2uLEHeAeKnj4V3/Z+JjmTNEwKEMBbuLDUbwbBdDV6yw7WhpWLDPdFPdWWkVymqUpSpVKUpQKUpQKg7b2tFhYXnmbKiDzY8FUcWJ0AqdXL/bFBFJAkj4kJIkrCPDEkiRdFZwqi4YMG7Z0tppeg5btjHGeeSe1jJI72vewdy2W/GwIHlWMGsOS9fQcu/dUDLXxmtXwSDmPWsU7bhQIN55V1z2KRXXE3FwSBqLjQXrlKCwrsvsYjy4dm+07/AAVXJrw/E5f0rX/AKvEi2vWvpx1PAVX7Si7eXLGuTKMsdiosAbFhfO1ybkkm99dKvek8WbaD2UsJHRgoOUtmANs31Rfe3DU8KxYDbEMfWCTCwTEmXKyhRHchQmUMlwilNLHUSNcX32imXdU8SHJM2SMjIqEvYsudrDqgT7+h1AJAVt2tRBh+dXW0GjkEjxQZFRYVLZiLMdHcqWIzOwNlXQKCbG1xWE0VXXRrBX3e9M6YVOd5WAkYeCXH4q6n7aMWI8KsS6ZnVQO5R/XrWodEcF/7rgcOBpAM7/3mTrHPkxVfKp3tuxN5sMl9yu1vvMAPlVfdtj4xrmddh9nGzYsFhGxmIIUyai+lkHugeJ19K1joX0ZTPA+JF2mN4Yf1ALtNJyUAaDibVC9ovSM4nEGNDaCElEUaA5dC1vLTuqb58Ix/Vnqq06V+0PrmIijVwDo0gzKDzWM6E97egrSMdtGWY3ldm5A6AfdUaDyFRa8NJSTSmWdy7ey1tf/ANq/6MdMpMLKj2LID20v762IOn2gCSO+tcyk16EYqVX6b2ZOrA5SCps6kbirjMCO7Wptc99km0C+EjVjfq5JIPIZZEHkHA8q6FURrye1+cKUpVmRSlKBSlKBX546W4GWfauLihjaSRpmsijMx0GvcNd50FfoeoWyRh8MMZO/VxfTEyzNZbjq0YZnPABrAVFTHAelHRaXZ5gSdkMsiM7IuojGbKoLfWJ13aC3HfVIRW0+0vpDFjscZoSxjWJIlYjLmys7FgDra7nfY6Vq1EMDYUf8V9eEW3bqzV8fcfCg8wNcV3b2bRCOERj6kSFvvygyH4Mo8q4XgIixRRvZgB4sbCu9dAmB/TWHu/pLxr4RgRj+Gq5N+DtyLHASTHNYmOR1YMcq5AWYMxGuQahgNbaDUiqV2uSdNSToLLqfqjgO6rrGx5cdiLsqBJJmLsMwUC9jksc5uRZeJIvpeqQtfWwB7qtGWXbPEoMUujsQYzpfIgzZS78ySVQffPdWKK2Zc264v4X1+FZoReKXRjYxtp7q9ornc219/KB+0J4VGoq6z7LsEWx+0cU31TIgPfJIWNvJR61WdNnjl2mXl1iw8CO6/aPvLH+Iuo8K2n2eR9Vs0sd75iTzt2PO1iL8gK0DptP/ANTtFf1oB5Kij5kVX3dNmuOJOy9qydVjtoyH6QgQxclzW0UcAoy/GtBxMnqa2npBIYcPhMNzh61/vSMGHoFt51pztdqmMs71GZWJ0FZUS1fIksKsNkbKmxUohgTrJCGIUFVuFFzqxA+NSzQqVabS6O4zD/22FmjH2jGxT/MW6/Gqug6b7Ib9RjLb0ljceaWP8Pwrq8b3AI4i9cw9iMN0xpO4tEvmFcn4MK6LsxuyVO9SRUe7a+eP6f1TKUpVmJSlKBSlKBXGPbeHXFQXZuqaLMEucnWIxVny7s2VkF99hXZ6hDZkM+JR5Y1c4ePMmYXCtKxGYA6XAi0PC9RR+bcfs2aBY2liaMSqWjzDKWUEDNlOoFzxAvUcVv3ts23h8TioFglEnVI6SFdVBLKQA25txvbdWhCgV4m9017rFK2qjv1/Kgs+jyj9JwoO7rof9Ra610Xl6rZrynQmaaU+AkZj8BXHMLLkdHG9WVh+Eg/lXX+kbpDgsNGNFlaRL/3qSWPqwquTfh8brQ+lcfV7SxOqjUspK59WVbFEOjvc2AOgvfhWritt2zMZZcPOCwaTCZbIPpGlS8bIh+qSRq1tFzVqIqYyz+KpOHAKSjK7NZGUL7q5W7UkncFJUcLyX4WOFAbi2++njwtU3ZGGaVmhXMS4FlFgNDfPIx+ooubaXOUcqu+i2xh+nsGYMmFDyu1tD1QuBa/2vkaXKTwnHjyym43j9IMOy8QBuiAw6+KoFY/5hauf9Jnz4/GD7bMB+EKR8FradokjYCsT2pJM5PMtLc1o+2cRfFNIDvKOD4qrfnURpy3xI99O8R/1MijcgSMeCqB871QYWPjUrb83WYqU/adj8a8qtharMsru2vtbr7KtpYfC4mbFYiQIkcBVRvZ3kYWCLvY5UbwvratKr3DEzsqIpZmNlVQWZjyUDUmirdumXtMxOMzRw3w8B0yqfpJB+0cbh+qunMtVD0X6KYnHvlgj7INmla6xp4txP6oufnW/dC/ZITll2gbDQjDKdT/euDp91fXhXWESLDxWUJFDGu4AIiKB6AVG1tbaj0J6MrgIpYlkMhaUlnIC3ZUVCFXWy5lbiatl7MxHB1v5isuBN41PEi58Sbn43rFtLTI/2WF/A0rTj824/OJtKUqzEpSlApSlArjHta6RYgYmXCI5SEpGXC6GTQ6O28rqezu33vXZ60wezpMZjpsZi2zRFwscC3GYRqEJlblmDHKPM8Kipjg8a/8AHhe2nmCPKstdI9uOGhTE4URGMMsBjaJLAxqr5o7oPdBzvbwrm9EBqKefnUiXd46V5KaUHtd1dh2wVbB4CCT3Z4VjDfZcpdDfgbiuOQnSul7axHWbIwhU2kSNWHhE2R/TMD5d1TMvTlKt6fXhljv2Us4bEYRIJGKz4bFRxNqbmOaQIbHubTwqbLgcHJ+lMFyjDmYMB9YNHYN5MrW8KxHHJ1uFxxUGOa0U4tosqEWa3MFQwPJal9jZ6LHJZ/0id85Ov0Oqhj/iUnxat+TDWPqx9vP1+X3l+7i4OWXkmGf+qXH6W3zf+tn2V8WB6uWPFwLeFo0YKWCKGJVSsjcFU9vxWsvR05Nn4+ZvfnWQA8xcX+LPWLpDAcHs6aAvfrJW6vj9GCG+IGve1Y9uYpYmw2Gv2Ew+VzwvKtixHdo3nXm4X1a+v5R73LjOPdvjx18ssvH8lp0kxNtk4OLnGr+rG3yNc/xU1wOeWx77aD4WHlW7dPI8keFXMpAwsSrZgQxDG5FuFide8Voj8TXTHByXy8A5pC/9Xtr8az1iw66VlqWZXZPYLgU6rFTlFz9aI1cgZgAgZgrbwDmF/CuN10vo106i2bsyOKJRLipGkkK/9uLMxVTKRvORVOQa8yKipjrfSPpFh8FF1uIfKNyqNXkP2UXifgOJFcR2x0uxG1sZhoG+jw7YiJVgB0IMijNKfrta55DhzOrbT2jPjJ+slZ5pXIAFrnuSNBuHJQPjXSOiHs7fDdTi8WcsvWxmKEEdg3zXlbibKeyN3EncHSZu3TpWGTKuXkWHoxH5V4xiZo3HcfhWRXGaTuc/vKr/AO6vqDTxHzqUy6u/+XjCPdFPdWaomzPctyYj41LpOjkmsrClKVKhSlKBXL+nftJmw5kwWFUxyI7iSdgCRnYuBCu73XHaPkONdQriXtKwKybZSM3AlXDhiLX7TFCRcEXso38qgaEZCzFmJZibsxJLMTvLE6k95r3XQPbFsKDBHAQYeMIgSck72ds0QzSMdWOnlwtXPxQDwr7Ssc+4DmbUHmFtL8zp4VtWHx5Oz7KR1mFnz2tfNDMCjAjiMx17mFalhdy+B+dbN0J1xkUZAKS5o3U7mUi9vVQfKmtpl02OPCRDDxYAi0k8Tza65JPeQHyBHgnfVRjYHxeGhbXr4HGHkXjZmCoxHcdD58quIHJ2jj5Tq0MLZL7hZQBp6+prNhOxtMhdBNh1kccC3Mct3xPOuvmsx4rl7Tc+3X5z83nfhcLyfiMcPe2X997/AIb94h4yBZ8fFAe1Fhou3m1BsouGvv8Aqb+Rqi6XwDrVxCG8U6BlPIgAFe62mnf3VsXQeMSHGO+rPIVa/I3JH73wFU8EQbA4yM6iCa8fNe1lIvyIv6mvJxvpy+mp9/7vpuXH9Jxb/wB3qy/89T7b/ej4pv0jBwkayQZoyv1jGe0pA421Fa1Pe+XjxrMshF7cfyqNh9SxO+ut5Vu2dBpX2lKIKt+jXRvEY6Xq8Ol7e/IdI4xzdufJRcnlUHZkIeaFG915Y0PDRnVTY8NDX6o2bs6LDxrFBGsca7lUWHeTzJ4k6moqZNte6FdA8Ps8Bh9LiCLNOw17xGv/AG18NTxJqw6RyKQqhhmQh2FxdQwKKSOAJLAc7HlVV7UukM2CwXWQFQ7SLHmK5sob6yg6ZvEEd1Ufsvgz7NxM7lnlnldpJGYszGNsq6ngLfE1GmmN1Wy4SbMzj7SxsfE5kb0EY9asqotkOeuUcDHJfyaK38R9avatj0c01nYiYDfKP1zUuomD96X7/wCVS6TpHJ8RSlKlm//Z', 'alan', 'Allan Ganteng', 'Blitar', '2021-01-12', '2353465346', 'alanganteng@yahoo.com', 'Blitar', 'L', '1234', 3, 1),
(2, '', 'Batman', '', '', '0000-00-00', '', '', '', '', '123', 2, 1),
(5, '', 'dodi', '', '', '0000-00-00', '', '', '', '', '12', 2, 1),
(6, '', 'fifa', '', '', '0000-00-00', '', '', '', '', '123', 3, 1),
(8, '', 'kamisama', '', '', '0000-00-00', '', '', '', '', '12', 3, 1),
(9, '', 'kimihime', 'Ridho Noob', 'Malang', '2020-12-21', '085777645123', 'ridhonob@gmail.com', 'Jalan Kumbang Nomor 1231231', 'L', 'cupu123', 2, 1),
(3, '', 'Robin', '', '', '0000-00-00', '', '', '', '', 'dodond', 3, 1),
(1, 'https://i.pinimg.com/236x/fa/64/dd/fa64ddcdfbd0ea145eda11a1f3bbe354.jpg', 'root', 'Richi Kyle', 'Surabaya', '2020-11-09', '081939571234', 'firmanwisnu432@gmail.com', 'Jl Cendrawasih no.10', 'P', 'admin', 1, 1),
(4, '', 'Superman', '', '', '0000-00-00', '', '', '', '', '12345', 3, 1);

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
(6, '65123', 'Kecamatan Blimbing', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148 CV21', 1, '2020-12-13', '2020-12-13', 'root', 'root'),
(5, '65136', 'Kecamatan Kedungkandang', 'Jl. Mayjen Sungkono No.59, Buring, Kec. Kedungkandang, Kota Malang, Jawa Timur 65136', 1, '2021-01-27', '2021-01-27', 'root', 'root'),
(9, '65141', 'Kecamatan Lowokwaru', 'Jl. Cengger Ayam I No.12, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 1, '2021-01-27', '2021-01-27', 'alan', 'alan'),
(3, '65148', 'Kecamatan Klojen', 'Jl. Surabaya No.3A, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115', 1, '2020-12-14', '2020-12-14', 'root', 'root'),
(2, '65149', 'Kecamatan Sukun', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148', 1, '0000-00-00', '0000-00-00', '', ''),
(8, '65173', 'Kecamatan Bululawang', 'Jl. Suropati Raya No.6, Bululawang, Blayu, Kec. Bululawang, Malang, Jawa Timur 65173', 1, '2021-01-27', '2021-01-27', 'alan', 'alan'),
(7, '65178', 'Kecamatan Gedangan', 'Jl. Raya Hasanudin No.180, Sumbernanas, Gedangan, Malang, Jawa Timur 65178', 1, '2021-01-27', '2021-01-27', 'alan', 'alan'),
(1, '65183', 'Kecamatan Ampel Gading', 'Jl. Raya Tirtomarto, Bahroto, Tirtomarto, Ampelgading, Malang, Jawa Timur 65183', 2, '2021-01-27', '2021-01-27', 'alan', 'alan'),
(4, '653327', 'kecamatan Dau', 'Jl. Keben II, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 23 CV', 1, '2020-12-14', '2020-12-14', 'root ', 'root ');

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
(6, '23423', '65136', 'bekasi', 'bekasi', 1, '2021-04-18', '2021-04-18', 'root', 'root'),
(4, '25345', '65123', 'ahai', 'jalan bet', 1, '2021-04-18', '2021-04-18', 'root', 'root'),
(4, '65111', '65148', 'ahai', 'jalan bet', 1, '2021-01-27', '2021-01-27', 'alan', 'alan'),
(5, '65141', '65141', 'Kelurahan Jatimulyo', 'JL. Simbang Menjangan No.37, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 1, '2021-01-27', '2021-01-27', 'alan', 'alan'),
(3, '65146', '65148', 'Kelurahan Klojen', 'Jl. Patimura No.51, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111', 1, '2020-12-14', '2020-12-14', 'root', 'root'),
(1, '65149', '65149', 'Karang Besuki', 'Jl. TRS. Sigura-Gura Blok D No.174, Karangbesuki, Kec. Sukun, Kota Malang, Jawa Timur 65146', 1, '0000-00-00', '0000-00-00', '', ''),
(2, '653123', '653327', 'Kelurahan Dau', 'Jl. Patimura No.51, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111 CV', 1, '2020-12-14', '2020-12-14', 'root ', 'root '),
(5, '99999', '65123', 'Kelurahan Jatimulyo', 'JL. Simbang Menjangan No.37, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 1, '2021-04-18', '2021-04-18', 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `master_transaksi`
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
  `foto` varchar(1000) NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(300) NOT NULL,
  `longitude` varchar(300) NOT NULL,
  `latlong` varchar(2000) NOT NULL,
  `datecreated` date NOT NULL,
  `dateupdated` date NOT NULL,
  `usercreated` varchar(10) NOT NULL,
  `userupdated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_transaksi`
--

INSERT INTO `master_transaksi` (`transaksi_id`, `transaksi_nama`, `id_jkategori`, `id_kategori`, `transaksi_status`, `no_telepon`, `transaksi_alamat`, `kelurahan_kode`, `foto`, `deskripsi`, `latitude`, `longitude`, `latlong`, `datecreated`, `dateupdated`, `usercreated`, `userupdated`) VALUES
(1, 'Pantai Clungup', '103', 1, 1, '+6281233339881', 'Sendang Biru, Area Sawah/Kebun, Tambakrejo, Sumbermanjing, Malang, Jawa Timur', '65146', 'https://www.pantainesia.com/wp-content/uploads/2018/05/PANTAI-CLUNGUP-1248x703.jpg', 'Ini adlah Pantai Clungup yang berlokasi di Sendang Biru. \r\nPantai terpencil dan alami di ceruk air yang dangkal & berlatar belakang bukit hutan & bakau.', '-8.437202518533033', '112.66854633462535', '-8.440367920601664, 112.66634087114124; -8.435985404870909, 112.66615879676756 ; -8.437051021148095, 112.66934509830682 ; -8.441343473842473, 112.6691326782042', '2020-12-26', '2020-12-26', 'root', 'root'),
(2, 'Go-Camp Malang', '201,202,203,204,205', 2, 1, '+6285790909064', 'Jl. Kembang Kertas No.1, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '65141', 'https://pbs.twimg.com/profile_images/747363037800128513/61XuHNVy.jpg', 'GO CAMP adalah salah satu tempat penyewaan perlengkapan Hiking dan Camping yang terlengkap se-Malang Raya. Dengan harga yang terjangkau, barang yang kami sewakan memiliki kwalitas yang sangat bagus dan terawat. Karena kami memiliki standarisasi dan sudah diuji oleh rekan-rekan komunitas pencinta alam. Itu semua demi kenyamanan dan keamanan anda. Jadi bagi Anda yang ingin menghabiskan waktu liburan Anda untuk hiking namun bingung ingin menyewa perlengkapan camping. Kami adalah solusi yang tepat untuk Anda ', '-7.942001796604576', '112.6164104668066', '-7.941878591383189, 112.61627011992582 ; -7.941911762023348, 112.61674379064846 ; -7.942110785808055, 112.61655081368738 ; -7.942025489912142, 112.61625736111847', '2020-12-26', '2020-12-26', 'root', 'root'),
(3, 'Pantai Kuncaran', '103', 1, 1, '+6282231059326', 'Area Gn., Sidurejo, Gedangan, Malang, Jawa Timur 65178', '653123', 'https://3.bp.blogspot.com/-Ayc9NHtp7FM/WPnxng7sIeI/AAAAAAAAOqY/gOjV_sFA4yoW0jd0thwW9CWzYHzqTQbZwCLcB/s1600/2017-04-20%2B09.15.50%2B1.jpg', 'Pantai Kuncaran, tepi Samudera Hindia yang sangat menawan dan terjaga keindahannya sampai sekarang. Begitu membelalak mata dengan pasir putihnya yang tersapu oleh buih ombak, berpadu bersama cahaya matahari yang seakan â€“ akan memeluk dengan hangat siapa saja yang datang.', '-8.414723995666431', '112.58113662813406', '-8.414036791822067, 112.58035623904388 ; -8.414639210842477, 112.58282371206315 ; -8.415933292977288, 112.58204332297295 ; -8.414786468682726, 112.57945856604417', '2020-12-26', '2020-12-26', 'root', 'root'),
(4, 'Coban Rondo', '105', 1, 1, '+623415025147', 'Jl. Kembang Kertas No.1, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '653123', 'https://www.kangamir.com/wp-content/uploads/2019/07/Air-Terjun-Coban-Rondo-Malang-Jatim.jpg', 'Air terjun alami yang mudah diakses dengan pemandangan tropis, kursi piknik, & sewa sepeda.', '-7.884950479324716', '112.47730826791243', '-7.863369754635548, 112.47033072930488 ; -7.864156210632491, 112.4882300582637 ; -7.890966317708185, 112.4893848536804 ; -7.88953648917103, 112.46354630623176', '2020-12-30', '2020-12-30', 'root', 'root'),
(5, 'Coban Parang Tejo', '105', 1, 1, '-', 'Princi Gading Kulon, Godehan, Kucur, Kec. Dau, Malang, Jawa Timur 65151', '653123', 'https://www.dakatour.com/wp-content/uploads/2017/11/alamat-coban-parang-tejo-malang.jpg', 'Coban Parang Tejo adalah salah satu air terjun di Malang yang lokasi tepatnya adalah di dusun Princi, Desa Gadingkulon, kecamatan Dau. Untuk menuju kesini, anda harus menemph jarak sekitar kurang lebih 20 km dari pusat Kota Malang. Memang agak jauh, tapi dijamin tidak rugi kalau anda main kesana. Dengan ketinggian kurang lebih sekitar seratus meter, Air Terjun Coban Parang Tejo ini memang mempunyai daya tarik tersendiri. Di sini airnya meluncur dengan lembut dari atas melewati bebatuan yang berkilau di bawah paparan sinar matahari, sehingga air terjun ini tidak terkesan terlalu berbahaya. Terlebih lagi lokasinya yang berada di lereng Gunung Butak membuat suasana liburan ke air terjun ini makin sejuk dan adem.', '-7.9319446633339705', '112.51285079674112', '-7.930654262587376, 112.51157664581707; -7.930452074058284, 112.5159146403141 ; -7.932600322097309, 112.51642499260788 ; -7.932398134524976, 112.51134698728488', '2021-01-26', '2021-01-26', 'root', 'root'),
(6, 'Pantai Bantol', '103', 1, 1, '', 'Dusun Sumberceleng, Desa, Banjarejo, Donomulyo, Malang, Jawa Timur 65167', '65111', 'https://www.pantainesia.com/wp-content/uploads/2018/05/pantai-bantol-1248x703.jpg', 'Pantai ini terletak di pesisir selatan kota Malang. Pertama kali diperkenalkan oleh Bayan Diyat, seorang perantauan pada tahun 1950-an.\r\nPantai ini sendiri belum dikenal secara umum oleh masyarakat karena letaknya di perkampungan. Biasanya yang mengunjungi obyek wisata ini adalah kelompok pecinta alam dan para peziarah. Untuk dapat mengunjungi pantai ini harus melewati jalan tanah dan makadam (jalan tanah berbatu) melewati hutan jati.', '-8.395138886628978', '112.4521182319499', ' -8.394738484600476, 112.45117052871957 ; -8.394921505105815, 112.45289934711472 ; -8.395830295302734, 112.45288020890372 ; -8.39527492376851, 112.45111949349021', '2021-01-26', '2021-01-26', 'root', 'root'),
(7, 'Rent Rover-Persewaan Alat Camping di Malang', '201,202,203,204,205', 2, 1, '+6285749414941', 'Jalan Bareng Raya, Gg. 2G No. 83, Bareng, Kec. Klojen, Kota Malang, Jawa Timur 65111', '65146', 'https://scontent-sin6-3.xx.fbcdn.net/v/t1.0-9/10407452_329796037224185_8991374387370023556_n.jpg?_nc_cat=106&ccb=2&_nc_sid=cdbe9c&_nc_eui2=AeG0OKHDUz7MdCjFq_14ez1PVl1J7TzgpmlWXUntPOCmaT7SbGgBsTbMZsSoMFpHW9tP-i64duCkzzE6Dwbtips_&_nc_ohc=1ISvLhlJLugAX_31qIP&_nc_ht=scontent-sin6-3.xx&oh=2276749388f0b23dd987cafec4936d06&oe=603803AE', 'Rental Peralatan Camping di Malang\r\nMelayani jasa antar jemput barang, harga relatif murah.\r\nJl.bareng raya 2g/83', '-7.9820741440894265', '112.62100423175025', '-7.981998193328107, 112.62097464985837 ; -7.9820003633500605, 112.62115871496346 ; -7.9821305646458445, 112.62114337620469 ; -7.982129479635212, 112.62094945046897', '2021-01-27', '2021-01-27', 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kategori`
--

CREATE TABLE `tipe_kategori` (
  `id_kategori` int(1) NOT NULL,
  `kategori_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_kategori`
--

INSERT INTO `tipe_kategori` (`id_kategori`, `kategori_nama`) VALUES
(1, 'Camping Ground'),
(2, 'Persewaan Alat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_tempat`
--
ALTER TABLE `kategori_tempat`
  ADD PRIMARY KEY (`id_jkategori`),
  ADD KEY `id_kategori` (`id_kategori`);

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
  ADD KEY `kelurahan_kode` (`kelurahan_kode`),
  ADD KEY `id_kategori` (`id_jkategori`);

--
-- Indexes for table `tipe_kategori`
--
ALTER TABLE `tipe_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori_tempat`
--
ALTER TABLE `kategori_tempat`
  ADD CONSTRAINT `kategori_tempat_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tipe_kategori` (`id_kategori`);

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
