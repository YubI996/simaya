-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 02:10 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `mem`
--

CREATE TABLE `mem` (
  `mem_id` int(50) NOT NULL,
  `mem_` varchar(80) NOT NULL,
  `mem_pess` varchar(80) NOT NULL,
  `mem_nmpp` varchar(80) NOT NULL,
  `mem_conpe` char(20) DEFAULT NULL,
  `mem_conma` varchar(50) DEFAULT NULL,
  `mem_lgpp` varchar(50) DEFAULT NULL,
  `sttus` char(20) NOT NULL DEFAULT 'orange',
  `created_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `modified_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mem`
--

INSERT INTO `mem` (`mem_id`, `mem_`, `mem_pess`, `mem_nmpp`, `mem_conpe`, `mem_conma`, `mem_lgpp`, `sttus`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(2020, 'sudo', '$2y$10$Y.HEvvdq.qFsSzEHhDRX5.iPDTAnDg6fKYXOSAbQ4qlchmO5gxXwu', '', NULL, 'superadmin@mail.com', NULL, 'rainbow', 'anonim', 'anonim', '2020-06-18 06:55:07', '2020-06-20 12:55:55'),
(2021, 'kesbang', '$2y$10$bsClZDR1hqDD43lvSgDy5uD0EklOWjxiZOVbw4rv4kesHdpVXmaxi', 'kesbang kota bontang', NULL, 'bakesbangpol@bontangkota.go.id', NULL, 'blue', 'anonim', 'sudo', '2020-06-20 13:11:27', '2020-06-22 01:51:34'),
(2022, 'iwansetiawan', '$2y$10$bsClZDR1hqDD43lvSgDy5uD0EklOWjxiZOVbw4rv4kesHdpVXmaxi', 'Iwan Setiawan', '000000000000', 'mail@gmail', '3a824154b16ed7dab899bf000b80eeee.png', 'green', 'anonim', 'iwansetiawan', '2020-06-23 06:00:13', '2020-11-25 01:39:07'),
(2023, 'pdiperjuangan', '$2y$10$p6fPDs/QdY7WdlcI6ykkIu80JDiBnvv5EdXJEIV/Izh6k6EBpZ57e', 'PDI Perjuangan', '', 'pdipbontang@gmail.com', '5531a5834816222280f20d1ef9e95f69.jpg', 'green', 'anonim', 'pdiperjuangan', '2020-07-30 01:39:22', '2020-11-26 08:39:14'),
(2024, 'golkarbontang', '$2y$10$GxR7FBOH.DuZwywte4la/.2.tAPiQ84uYwfgmwpU1uI6VDMzfzEX.', 'PARTAI GOLKAR KOTA BONTANG', '(0548) 25429', 'dpdpartaigolkarkotabontang@gmail.com', '07811dc6c422334ce36a09ff5cd6fe71.png', 'green', 'anonim', 'GOLKAR BONTANG', '2020-07-30 01:41:27', '2020-11-29 01:42:51'),
(2025, 'pkskotabontang', '$2y$10$GarcVsmLWZORBxYnQ./rN.cHry5s.SRkIROIesMvLefOsErrz7V.S', 'PKS KOTA BONTANG', '', 'said1207@gmail.com', '312351bff07989769097660a56395065.png', 'green', 'anonim', 'pkskotabontang', '2020-07-30 01:42:58', '2020-11-30 00:55:21'),
(2026, 'nasdembontang', '$2y$10$pVvPhYpfbXPxN2GhRa080Ok/RoTv1yNHB/.0Z0q1RVSjBHJdOtXsy', 'NASDEM', '', 'dpdnasdembontang@gmail.com', 'c92a10324374fac681719d63979d00fe.png', 'green', 'anonim', 'nasdembontang', '2020-07-30 01:43:56', '2020-11-26 02:16:34'),
(2027, 'Anugrah', '$2y$10$M55KxODqboD8QXRaH7ub1e3/K0ycF4ccx5zt8WI9WlWSgm9dg/xee', 'Partai Beringin Karya (Berkarya)', '0812-5136-7659', 'berkarya.bontang@yahoo.com', '9f62b8625f914a002496335037e9ad97.jpg', 'green', 'anonim', 'Anugrah', '2020-07-30 01:44:18', '2020-11-29 06:02:22'),
(2028, 'hanurabontang', '$2y$10$bhzE/NmsrVEMEZA8xgcBeead.TSt9i2j0PH7Qjx4xrNS00OULILoK', 'hanura', '', 'luckypribadi88.gmail.com', 'd860edd1dd83b36f02ce52bde626c653.png', 'green', 'anonim', 'hanurabontang', '2020-07-30 01:44:48', '2020-11-29 06:08:47'),
(2029, 'pkbbontang', '$2y$10$sQCU7.wnS7GcV4Ck3pwhL.f4KhgRnWGRxD8OrQyFtLX806kitCKPy', 'PKB', '081258347542', 'farreldebu@gmail.com', '093b60fd0557804c8ba0cbf1453da22f.jpeg', 'green', 'anonim', 'pkbbontang', '2020-07-30 01:45:22', '2020-11-26 02:19:54'),
(2030, 'gerindrabontang', '$2y$10$41c.PmAyRErmw9DmHqC5XuJOLUjRKvqzKGgpA96kqqeJFM2VJIJIO', 'gerindra bontang', NULL, 'dpcgerindrabtg@gmail.com', NULL, 'green', 'anonim', 'kesbang', '2020-07-30 01:45:32', '2020-11-26 06:13:07'),
(2031, 'DPCPPPBONTANG', '$2y$10$wXpguZTrpH4pEuzKNuDf3.ez5IpBo.XRakzoceL7sAUirAfweGTNa', 'Partai Persatuan Pembangunan', '0811583356', 'dpcpppbtg10@gmail.com', '88ef51f0bf911e452e8dbb1d807a81ab.png', 'green', 'anonim', 'DPCPPPBONTANG', '2020-07-30 01:45:39', '2020-11-26 02:17:09'),
(2034, 'pan bontang', '$2y$10$dgLm0QCgm4RF11Trxv5rH.tpsk4Y3xqwft2UM7HcsUnC.7H4MZmxW', 'PAN ', NULL, 'pankotabontang@gmail.com', NULL, 'orange', 'anonim', 'anonim', '2020-07-30 01:46:44', '2020-07-30 01:46:44'),
(2038, 'panbontang', '$2y$10$jfrnN4Hz3OKCgoxCr9BN2OQyPhpFhxI6N0hlo/NVoPr.jdyFFCSRy', 'PAN ', '085250374567', 'panbontang@gmail.com', '2557911c1bf75c2b643afb4ecbfc8ec2.jpg', 'green', 'anonim', 'panbontang', '2020-07-30 01:49:34', '2020-11-26 02:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `pile`
--

CREATE TABLE `pile` (
  `pile_id` int(50) NOT NULL,
  `prpdt_id` int(50) NOT NULL,
  `pcnfg_id` int(50) NOT NULL,
  `pile_` varchar(80) NOT NULL,
  `sttus` char(20) DEFAULT 'temp',
  `created_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `modified_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pile`
--

INSERT INTO `pile` (`pile_id`, `prpdt_id`, `pcnfg_id`, `pile_`, `sttus`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(46, 1, 1, 'pkskotabontang-1-1-6667c7665d935703a1c3af73ddc33dbf.pdf', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:37:58', '2020-12-08 02:40:40'),
(47, 11, 1, 'iwansetiawan-1-11-6501d7846141550ab58bc5b92d9d6e0f.pdf', 'publish', 'iwansetiawan', 'iwansetiawan', '2020-07-30 02:38:14', '2020-07-30 02:38:14'),
(48, 11, 2, 'iwansetiawan-2-11-a374dcf85eff8c67087125cfa6d1c781.pdf', 'publish', 'iwansetiawan', 'iwansetiawan', '2020-07-30 02:38:23', '2020-07-30 02:38:23'),
(49, 3, 1, 'pdiperjuangan-1-3-1ef369a523dec4bdf3225a2a321cb59d.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:38:28', '2020-07-30 02:38:28'),
(50, 1, 2, 'pkskotabontang-2-1-728cb092f08667d4969ac5c2cf4eba50.pdf', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:38:32', '2020-12-08 02:40:43'),
(51, 1, 3, 'pkskotabontang-3-1-0dc968bbeb60c2b2b3e98cda89cf65e9.pdf', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:38:55', '2020-12-08 02:40:46'),
(52, 3, 2, 'pdiperjuangan-2-3-1ef369a523dec4bdf3225a2a321cb59d.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:38:59', '2020-07-30 02:38:59'),
(53, 4, 1, 'panbontang-1-4-fc12a3450b0e80ff69395503c75dc2f3.pdf', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:39:01', '2020-07-30 02:39:01'),
(54, 4, 1, 'panbontang-1-4-fc12a3450b0e80ff69395503c75dc2f3.pdf', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:39:01', '2020-07-30 02:39:01'),
(55, 3, 3, 'pdiperjuangan-3-3-4515cd960867d1716da26a9ca2b7ee00.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:39:14', '2020-07-30 02:39:14'),
(56, 1, 4, 'pkskotabontang-4-1-476866106e8b34810445a707f07b552d.pdf', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:39:19', '2020-12-08 02:40:50'),
(57, 1, 5, 'pkskotabontang-5-1-47772d03fd0c0c9b81931e1781a8b0dc.pdf', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:39:36', '2020-12-08 02:40:54'),
(58, 1, 6, 'pkskotabontang-6-1-e21783f0dd0ce376346033676e6ecc3e.pdf', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:39:51', '2020-12-08 02:40:58'),
(59, 1, 7, 'pkskotabontang-7-1-04b989a60353607a7e89adf98d09ffde.pdf', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:40:08', '2020-12-08 02:41:03'),
(60, 1, 8, 'pkskotabontang-8-1-476866106e8b34810445a707f07b552d.pdf', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:40:24', '2020-12-08 02:41:08'),
(61, 3, 4, 'pdiperjuangan-4-3-42fa20c2c0f2a19682d8fe76dcc3d20f.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:41:57', '2020-07-30 02:41:57'),
(62, 3, 5, 'pdiperjuangan-5-3-024b56a08ca73531a38261df201a0f81.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:42:10', '2020-07-30 02:42:10'),
(63, 4, 3, '(TRASH)panbontang-3-4-ffc1accb2c54a11e863ace266708848d.pdf', 'delete', 'panbontang', 'panbontang', '2020-07-30 02:43:03', '2020-07-30 03:05:51'),
(64, 4, 4, 'panbontang-4-4-ffc1accb2c54a11e863ace266708848d.pdf', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:43:29', '2020-07-30 02:43:29'),
(65, 4, 5, 'panbontang-5-4-b0cc7d064d6ded726a9891ed9f793b37.pdf', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:44:03', '2020-07-30 02:44:03'),
(66, 4, 6, '(TRASH)panbontang-6-4-1c6fecfc7d23123a1b59eb30b14941bc.pdf', 'delete', 'panbontang', 'panbontang', '2020-07-30 02:44:27', '2020-12-15 13:22:22'),
(67, 4, 7, 'panbontang-7-4-dd226db515f1c4e6735b6a6787a9b2d3.pdf', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:44:49', '2020-07-30 02:44:49'),
(68, 2, 1, 'golkarbontang-1-2-857e642e689e77059650d565b3213069.pdf', 'publish', 'GOLKAR BONTANG', 'GOLKAR BONTANG', '2020-07-30 02:44:54', '2020-12-08 02:34:43'),
(69, 4, 8, 'panbontang-8-4-78c10127587049d88a3f9606ef31aeb3.pdf', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:45:11', '2020-07-30 02:45:11'),
(70, 2, 3, 'golkarbontang-3-2-0dc968bbeb60c2b2b3e98cda89cf65e9.pdf', 'publish', 'GOLKAR BONTANG', 'GOLKAR BONTANG', '2020-07-30 02:45:35', '2020-12-08 02:34:48'),
(71, 2, 4, 'golkarbontang-4-2-a7e930e1b5d445fadb999b14e452f17d.pdf', 'publish', 'GOLKAR BONTANG', 'GOLKAR BONTANG', '2020-07-30 02:45:54', '2020-12-08 02:34:52'),
(72, 3, 6, 'pdiperjuangan-6-3-ba354d34f9e0e81ccde68f0413f1b6f0.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:46:06', '2020-07-30 02:46:06'),
(73, 2, 5, 'golkarbontang-5-2-b000f6557d80364ce3f586fb96c491ff.pdf', 'publish', 'GOLKAR BONTANG', 'GOLKAR BONTANG', '2020-07-30 02:46:10', '2020-12-08 02:34:57'),
(74, 2, 6, '(TRASH)GOLKAR BONTANG-6-2-8c30037462d8172d5575444a3954ecc5.pdf', 'delete', 'GOLKAR BONTANG', 'GOLKAR BONTANG', '2020-07-30 02:46:32', '2020-07-30 03:06:22'),
(75, 2, 7, 'golkarbontang-7-2-8c30037462d8172d5575444a3954ecc5.pdf', 'publish', 'GOLKAR BONTANG', 'GOLKAR BONTANG', '2020-07-30 02:48:51', '2020-12-08 02:35:02'),
(76, 2, 8, 'golkarbontang-8-2-bec66dd09eb4fa47f77baf12494e203f.pdf', 'publish', 'GOLKAR BONTANG', 'GOLKAR BONTANG', '2020-07-30 02:49:08', '2020-12-08 02:35:06'),
(78, 12, 1, 'nasdembontang-1-12-e1d26b3acc55bf29fe2b7f687a4225ce.pdf', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-12-08 02:21:59'),
(79, 12, 2, 'nasdembontang-2-12-1ef369a523dec4bdf3225a2a321cb59d.pdf', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-12-08 02:22:04'),
(80, 12, 3, 'nasdembontang-3-12-4515cd960867d1716da26a9ca2b7ee00.pdf', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-12-08 02:22:09'),
(81, 12, 4, 'nasdembontang-4-12-42fa20c2c0f2a19682d8fe76dcc3d20f.pdf', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-12-08 02:22:14'),
(82, 12, 5, 'nasdembontang-5-12-024b56a08ca73531a38261df201a0f81.pdf', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-12-08 02:22:17'),
(83, 12, 6, 'nasdembontang-6-12-ba354d34f9e0e81ccde68f0413f1b6f0.pdf', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-12-08 02:22:25'),
(84, 12, 7, 'nasdembontang-7-12-9d6648a6a1efdbd10c78ed3aaaaf079d.pdf', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-12-08 02:23:34'),
(85, 12, 8, 'nasdembontang-8-12-4ddb86ba3f2aed5c35a67e78186adcdd.pdf', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-12-08 02:23:38'),
(89, 3, 8, 'pdiperjuangan-8-3-9f75e4268ff1c9a67362b6d95c1a4a53.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:50:19', '2020-07-30 02:50:19'),
(90, 3, 8, 'pdiperjuangan-8-3-9f75e4268ff1c9a67362b6d95c1a4a53.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:50:20', '2020-07-30 02:50:20'),
(92, 7, 3, 'Anugrah-3-7-b1a0d92497cb40bb944d06f30eb801bc.pdf', 'publish', 'Anugrah ', 'Anugrah ', '2020-07-30 02:51:43', '2020-12-08 02:20:29'),
(95, 2, 2, '(TRASH)GOLKAR BONTANG-2-2-de2049189251e6144baccd318c86432e.pdf', 'delete', 'GOLKAR BONTANG', 'golkarbontang', '2020-07-30 02:55:32', '2020-11-29 04:56:46'),
(96, 3, 7, 'pdiperjuangan-7-3-9d6648a6a1efdbd10c78ed3aaaaf079d.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:55:46', '2020-07-30 02:55:46'),
(97, 4, 2, 'panbontang-2-4-a2420d0ddd331e4d614ac1401bcf2eae.pdf', 'publish', 'panbontang', 'panbontang', '2020-07-30 03:01:32', '2020-07-30 03:01:32'),
(98, 7, 2, '(TRASH)Anugrah -2-7-588689fe18ad4563fce5f18a663ada51.pdf', 'delete', 'Anugrah ', 'Anugrah', '2020-07-30 03:04:40', '2020-12-04 07:27:33'),
(99, 7, 2, 'Anugrah-2-7-588689fe18ad4563fce5f18a663ada51.pdf', 'publish', 'Anugrah ', 'Anugrah ', '2020-07-30 03:04:41', '2020-12-08 02:20:27'),
(100, 4, 3, 'panbontang-3-4-3514af5bdd447ce37c86f62e4999ac13.pdf', 'publish', 'panbontang', 'panbontang', '2020-07-30 03:05:51', '2020-07-30 03:05:51'),
(101, 2, 6, '(TRASH)golkarbontang-6-2-e21783f0dd0ce376346033676e6ecc3e.pdf', 'delete', 'GOLKAR BONTANG', 'golkarbontang', '2020-07-30 03:06:22', '2020-12-23 02:17:32'),
(104, 17, 3, 'DPCPPPBONTANG-3-17-d551a0433f43d5772c44032e0259d99f.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:15:04', '2020-07-30 03:15:04'),
(105, 17, 4, 'DPCPPPBONTANG-4-17-5f547c1393634d8cef3694411418edfa.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:15:04', '2020-07-30 03:15:04'),
(106, 17, 5, 'DPCPPPBONTANG-5-17-b33927fd47c02ded260a28d6be0b1577.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:15:04', '2020-07-30 03:15:04'),
(107, 17, 6, 'DPCPPPBONTANG-6-17-df54f3d8c756c99a9b1eaa74a3d88964.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:15:04', '2020-07-30 03:15:04'),
(108, 17, 7, 'DPCPPPBONTANG-7-17-aa49cc3bc610ee15a3da2deb03da08c7.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:15:04', '2020-07-30 03:15:04'),
(109, 17, 8, 'DPCPPPBONTANG-8-17-1d9dfcb13068b4308dfc33ba4385ec04.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:15:04', '2020-07-30 03:15:04'),
(110, 14, 1, 'hanurabontang-1-14-857e642e689e77059650d565b3213069.pdf', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 03:22:08', '2020-12-08 02:36:17'),
(111, 16, 3, 'gerindrabontang-3-16-0dc968bbeb60c2b2b3e98cda89cf65e9.pdf', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 03:33:07', '2020-12-08 02:29:40'),
(112, 16, 2, 'gerindrabontang-2-16-29ab9c050d8fa94a56f654357683a3fa.pdf', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 03:33:53', '2020-12-08 02:29:44'),
(113, 13, 1, 'pkbbontang-1-13-cab1c0d61c89234a7a18093e25c3a82d.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 03:35:51', '2020-07-30 03:35:51'),
(114, 14, 2, 'hanurabontang-2-14-ea032f909fe1fedd6d6f0d3e02d27d77.pdf', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 04:44:46', '2020-12-08 02:36:20'),
(115, 16, 1, 'gerindrabontang-1-16-5557c2490c2cb17ccb1211dd8fab7b85.pdf', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 04:58:20', '2020-12-08 02:29:48'),
(116, 14, 3, '(TRASH)hanurabontang-3-14-0dc968bbeb60c2b2b3e98cda89cf65e9.pdf', 'delete', 'hanura bontang', 'hanura bontang', '2020-07-30 05:02:02', '2020-12-08 02:37:41'),
(117, 14, 3, 'hanurabontang-3-14-0dc968bbeb60c2b2b3e98cda89cf65e9.pdf', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 05:02:03', '2020-12-08 02:36:27'),
(118, 16, 8, '(TRASH)GERINDRA BONTANG-8-16-4ddb86ba3f2aed5c35a67e78186adcdd.pdf', 'delete', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 05:02:22', '2020-07-30 05:04:48'),
(122, 16, 8, 'gerindrabontang-8-16-4ddb86ba3f2aed5c35a67e78186adcdd.pdf', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 05:04:48', '2020-12-08 02:29:53'),
(123, 14, 4, 'hanurabontang-4-14-f2e6bb425d824c11a61ee8e2d6a37449.pdf', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 05:05:26', '2020-12-08 02:36:32'),
(124, 14, 5, 'hanurabontang-5-14-47772d03fd0c0c9b81931e1781a8b0dc.pdf', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 05:05:47', '2020-12-08 02:36:37'),
(125, 14, 6, '(TRASH)hanura bontang-6-14-1efaee36c4b12736a245815084de3621.pdf', 'delete', 'hanura bontang', 'hanurabontang', '2020-07-30 05:06:09', '2020-11-29 12:54:38'),
(128, 14, 8, '(TRASH)hanurabontang-8-14-0bbd03f94bad5cf5b373844b7f2ddd0c.pdf', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 05:07:21', '2020-12-08 02:37:52'),
(129, 14, 8, 'hanurabontang-8-14-0bbd03f94bad5cf5b373844b7f2ddd0c.pdf', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 05:07:22', '2020-12-08 02:37:57'),
(130, 14, 7, 'hanurabontang-7-14-8ba54a77b8dbbb0264d5c3c4368892c2.pdf', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 05:07:47', '2020-12-08 02:38:02'),
(131, 16, 5, 'gerindrabontang-5-16-219a0509cb15fd7adaa821208ce7798a.pdf', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 05:07:51', '2020-12-08 02:29:57'),
(132, 16, 4, 'gerindrabontang-4-16-f7f1109348450b9f351d4d21346d89b1.pdf', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 05:18:34', '2020-12-08 02:30:00'),
(133, 18, 1, 'DPCPPPBONTANG-1-18-cd1f127ce0175dd06f2ccd2e4fa8db7d.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 05:20:57', '2020-07-30 05:20:57'),
(135, 18, 3, 'DPCPPPBONTANG-3-18-d551a0433f43d5772c44032e0259d99f.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 05:23:08', '2020-07-30 05:23:08'),
(137, 18, 4, 'DPCPPPBONTANG-4-18-5f547c1393634d8cef3694411418edfa.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 05:23:53', '2020-07-30 05:23:53'),
(138, 18, 5, 'DPCPPPBONTANG-5-18-b33927fd47c02ded260a28d6be0b1577.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 05:24:30', '2020-07-30 05:24:30'),
(139, 18, 6, 'DPCPPPBONTANG-6-18-df54f3d8c756c99a9b1eaa74a3d88964.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 05:25:28', '2020-07-30 05:25:28'),
(140, 18, 7, 'DPCPPPBONTANG-7-18-aa49cc3bc610ee15a3da2deb03da08c7.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 05:26:12', '2020-07-30 05:26:12'),
(141, 18, 8, 'DPCPPPBONTANG-8-18-1d9dfcb13068b4308dfc33ba4385ec04.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 05:26:51', '2020-07-30 05:26:51'),
(143, 16, 6, 'gerindrabontang-6-16-8efbbfc7631a68cc40964d2fd55f3deb.pdf', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 05:28:10', '2020-12-08 02:30:04'),
(145, 16, 7, 'gerindrabontang-7-16-38134eee7afaeded369caffc2a724db2.pdf', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 05:30:07', '2020-12-08 02:30:08'),
(146, 18, 2, 'DPCPPPBONTANG-2-18-7d6a849e193a36fc0a028f8c3568d7ca.pdf', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 05:47:10', '2020-07-30 05:47:10'),
(147, 13, 3, 'pkbbontang-3-13-0dc968bbeb60c2b2b3e98cda89cf65e9.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 07:41:57', '2020-07-30 07:41:57'),
(148, 13, 4, 'pkbbontang-4-13-354ad54ff67981d58264ba3db7d9ec0f.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 07:45:35', '2020-07-30 07:45:35'),
(149, 13, 5, 'pkbbontang-5-13-11dc2fc4a5e178ff0f41b5f16391990e.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 07:50:02', '2020-07-30 07:50:02'),
(150, 13, 6, '(TRASH)pkbbontang-6-13-c6f2403976a767dddc508b580d25a2e5.pdf', 'delete', 'pkbbontang', 'pkbbontang', '2020-07-30 07:57:07', '2020-11-29 07:45:40'),
(151, 13, 8, 'pkbbontang-8-13-9f75e4268ff1c9a67362b6d95c1a4a53.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 07:58:33', '2020-07-30 07:58:33'),
(152, 13, 7, 'pkbbontang-7-13-f605f9a8cb380209963cf06194b4570f.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 08:00:57', '2020-07-30 08:00:57'),
(153, 13, 2, 'pkbbontang-2-13-2f6323b856d3ccfe572fb8994d6f9424.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 08:09:42', '2020-07-30 08:09:42'),
(154, 7, 1, 'Anugrah-1-7-e1d26b3acc55bf29fe2b7f687a4225ce.pdf', 'publish', 'Anugrah ', 'Anugrah ', '2020-08-01 08:14:50', '2020-12-08 02:20:24'),
(155, 7, 4, 'Anugrah-4-7-b7bb2854dd85c4a3fbf122daa4583213.pdf', 'publish', 'Anugrah ', 'Anugrah ', '2020-08-01 09:16:39', '2020-12-08 02:20:22'),
(156, 7, 5, 'Anugrah-5-7-024b56a08ca73531a38261df201a0f81.pdf', 'publish', 'Anugrah ', 'Anugrah ', '2020-08-01 09:22:59', '2020-12-08 02:20:20'),
(157, 7, 6, '(TRASH)Anugrah -6-7-c490efbd84eb2251ab6a710aad4e5556.pdf', 'delete', 'Anugrah ', 'Anugrah', '2020-08-01 09:33:42', '2020-12-04 07:30:05'),
(158, 7, 7, 'Anugrah-7-7-9d6648a6a1efdbd10c78ed3aaaaf079d.pdf', 'publish', 'Anugrah ', 'Anugrah ', '2020-08-01 09:42:19', '2020-12-08 02:20:18'),
(159, 7, 8, '(TRASH)Anugrah-8-7-9f75e4268ff1c9a67362b6d95c1a4a53.pdf', 'delete', 'Anugrah ', 'Anugrah', '2020-08-01 09:45:35', '2020-12-22 17:12:07'),
(160, 2, 2, '(TRASH)golkarbontang-2-2-ea032f909fe1fedd6d6f0d3e02d27d77.pdf', 'delete', 'golkarbontang', 'golkarbontang', '2020-11-29 04:56:46', '2020-11-29 05:31:01'),
(161, 2, 2, 'golkarbontang-2-2-46f87558dbaf95c563348847bc8160df.pdf', 'publish', 'golkarbontang', 'golkarbontang', '2020-11-29 05:31:01', '2020-11-29 05:31:01'),
(162, 13, 6, '(TRASH)pkbbontang-6-13-c6f2403976a767dddc508b580d25a2e5.pdf', 'delete', 'pkbbontang', 'pkbbontang', '2020-11-29 07:45:40', '2020-11-29 07:47:40'),
(163, 13, 6, '(TRASH)pkbbontang-6-13-c6f2403976a767dddc508b580d25a2e5.pdf', 'delete', 'pkbbontang', 'pkbbontang', '2020-11-29 07:48:14', '2020-11-29 07:50:56'),
(164, 13, 6, '(TRASH)pkbbontang-6-13-c6f2403976a767dddc508b580d25a2e5.pdf', 'delete', 'pkbbontang', 'pkbbontang', '2020-11-29 07:51:20', '2020-11-29 08:19:34'),
(165, 13, 6, '(TRASH)pkbbontang-6-13-c6f2403976a767dddc508b580d25a2e5.pdf', 'delete', 'pkbbontang', 'pkbbontang', '2020-11-29 08:21:43', '2020-11-29 08:23:38'),
(166, 13, 6, 'pkbbontang-6-13-c6f2403976a767dddc508b580d25a2e5.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-11-29 08:24:06', '2020-11-29 08:24:06'),
(167, 14, 6, 'hanurabontang-6-14-cc27555e6cd6fe03722c99068c4e2d47.pdf', 'publish', 'hanurabontang', 'hanurabontang', '2020-11-29 12:54:38', '2020-11-29 12:54:38'),
(169, 7, 6, '(TRASH)Anugrah-6-7-75f2e11fb6fccdb7b6201de8bbbb6595.pdf', 'delete', 'Anugrah', 'Anugrah', '2020-12-04 07:34:47', '2020-12-15 14:35:34'),
(170, 13, 18, 'pkbbontang-18-13-0e2f7226e25b066078145bddf1043986.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-05 00:44:00', '2020-12-05 00:44:00'),
(171, 13, 18, 'pkbbontang-18-13-0e2f7226e25b066078145bddf1043986.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-05 00:44:05', '2020-12-05 00:44:05'),
(172, 1, 18, 'pkskotabontang-18-1-d1165cbb2b686d3749ab5ade4ef0fb07.pdf', 'publish', 'pkskotabontang', 'pkskotabontang', '2020-12-05 03:43:15', '2020-12-05 03:43:15'),
(173, 1, 13, 'pkskotabontang-13-1-eecb67d23324d5c8556374fee45d90e4.pdf', 'publish', 'pkskotabontang', 'pkskotabontang', '2020-12-05 03:53:29', '2020-12-05 03:53:29'),
(174, 1, 12, 'pkskotabontang-12-1-2125ad58ae1fb1ccb6c2ad484e9c6bef.pdf', 'publish', 'pkskotabontang', 'pkskotabontang', '2020-12-05 03:59:49', '2020-12-05 03:59:49'),
(175, 1, 16, 'pkskotabontang-16-1-58dffde7983c8a9e05b797efbd9b67a5.pdf', 'publish', 'pkskotabontang', 'pkskotabontang', '2020-12-05 04:02:48', '2020-12-05 04:02:48'),
(176, 1, 15, '(TRASH)pkskotabontang-15-1-b17d1b3ba03377b584e34eee881a1364.pdf', 'delete', 'pkskotabontang', 'pkskotabontang', '2020-12-05 04:16:49', '2020-12-05 04:40:22'),
(177, 1, 15, '(TRASH)pkskotabontang-15-1-b17d1b3ba03377b584e34eee881a1364.pdf', 'delete', 'pkskotabontang', 'pkskotabontang', '2020-12-05 04:40:22', '2020-12-05 04:41:17'),
(178, 1, 15, '(TRASH)pkskotabontang-15-1-b17d1b3ba03377b584e34eee881a1364.pdf', 'delete', 'pkskotabontang', 'pkskotabontang', '2020-12-05 04:41:17', '2020-12-05 04:41:35'),
(179, 1, 15, 'pkskotabontang-15-1-b17d1b3ba03377b584e34eee881a1364.pdf', 'publish', 'pkskotabontang', 'pkskotabontang', '2020-12-05 04:41:57', '2020-12-05 04:41:57'),
(180, 1, 17, 'pkskotabontang-17-1-bedd187d053a651ce957aa3ffd2ac763.pdf', 'publish', 'pkskotabontang', 'pkskotabontang', '2020-12-05 04:43:38', '2020-12-05 04:43:38'),
(181, 1, 14, 'pkskotabontang-14-1-bedd187d053a651ce957aa3ffd2ac763.pdf', 'publish', 'pkskotabontang', 'pkskotabontang', '2020-12-05 04:54:09', '2020-12-05 04:54:09'),
(182, 1, 11, 'pkskotabontang-11-1-1436786aeb357a03ed0478264721a0c8.pdf', 'publish', 'pkskotabontang', 'pkskotabontang', '2020-12-05 06:05:36', '2020-12-05 06:05:36'),
(184, 16, 14, '(TRASH)gerindrabontang-14-16-af9ba4a81135123dbec917d646250a3b.pdf', 'delete', 'gerindrabontang', 'gerindrabontang', '2020-12-11 18:04:41', '2020-12-19 13:43:36'),
(185, 16, 16, 'gerindrabontang-16-16-3649ab6db697c0966760a769623a5318.pdf', 'publish', 'gerindrabontang', 'gerindrabontang', '2020-12-11 18:06:58', '2020-12-11 18:06:58'),
(186, 16, 11, '(TRASH)gerindrabontang-11-16-afd0e53c45a6d81527a7867d73d73cc5.pdf', 'delete', 'gerindrabontang', 'gerindrabontang', '2020-12-11 18:30:24', '2020-12-11 18:32:00'),
(187, 16, 11, '(TRASH)gerindrabontang-11-16-3485596989a2c98d8c1d5c751dcaf20b.pdf', 'delete', 'gerindrabontang', 'gerindrabontang', '2020-12-11 18:32:00', '2020-12-11 18:33:56'),
(188, 16, 11, '(TRASH)gerindrabontang-11-16-afd0e53c45a6d81527a7867d73d73cc5.pdf', 'delete', 'gerindrabontang', 'gerindrabontang', '2020-12-11 18:33:56', '2020-12-11 18:35:28'),
(189, 4, 6, 'panbontang-6-4-da650aefa073aff3343b87922cb85b2d.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-15 13:22:22', '2020-12-15 13:22:22'),
(190, 7, 6, 'Anugrah-6-7-1abb7fdbe8047aa9899dc61352b28fb7.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-15 14:36:09', '2020-12-15 14:36:09'),
(191, 4, 18, 'panbontang-18-4-065c7661fad424df1f9c508907d16472.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-16 04:00:27', '2020-12-16 04:00:27'),
(192, 4, 13, 'panbontang-13-4-eecb67d23324d5c8556374fee45d90e4.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-16 04:01:27', '2020-12-16 04:01:27'),
(193, 4, 14, 'panbontang-14-4-3b7870704c2875e4c268778f1251c105.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-16 04:02:03', '2020-12-16 04:02:03'),
(194, 4, 17, 'panbontang-17-4-0e78b16d7a22bd23d2ff4db4e74e032b.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-16 04:02:52', '2020-12-16 04:02:52'),
(195, 4, 12, 'panbontang-12-4-2125ad58ae1fb1ccb6c2ad484e9c6bef.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-16 04:03:16', '2020-12-16 04:03:16'),
(196, 4, 15, 'panbontang-15-4-3f4535a9094682b101f0029ed0cce686.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-16 05:27:40', '2020-12-16 05:27:40'),
(197, 4, 11, '(TRASH)panbontang-11-4-2711c917ac95221bc61da05549af98b1.pdf', 'delete', 'panbontang', 'panbontang', '2020-12-17 10:19:34', '2020-12-17 10:29:40'),
(198, 4, 16, 'panbontang-16-4-0e78b16d7a22bd23d2ff4db4e74e032b.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-17 10:22:13', '2020-12-17 10:22:13'),
(199, 4, 11, 'panbontang-11-4-0e78b16d7a22bd23d2ff4db4e74e032b.pdf', 'publish', 'panbontang', 'panbontang', '2020-12-17 10:29:40', '2020-12-17 10:29:40'),
(200, 16, 17, '(TRASH)gerindrabontang-17-16-b3b0cc065566b3c741c714faa46f8f54.pdf', 'delete', 'gerindrabontang', 'gerindrabontang', '2020-12-18 06:47:30', '2020-12-19 13:40:49'),
(204, 14, 11, '(TRASH)hanurabontang-11-14-ff2cc76e05aebd41b1557bd46ee1a9f6.pdf', 'delete', 'hanurabontang', 'hanurabontang', '2020-12-19 06:54:23', '2020-12-19 08:29:02'),
(205, 14, 14, 'hanurabontang-14-14-40f9ffa9062d575bdc1347f7c9e8ae14.pdf', 'publish', 'hanurabontang', 'hanurabontang', '2020-12-19 07:10:52', '2020-12-19 07:10:52'),
(206, 14, 15, 'hanurabontang-15-14-706743768442a20b9f5e2fc6ede42557.pdf', 'publish', 'hanurabontang', 'hanurabontang', '2020-12-19 07:11:32', '2020-12-19 07:11:32'),
(207, 14, 16, '(TRASH)hanurabontang-16-14-ae5e62dfbb88cead442c0245c2bbee68.pdf', 'delete', 'hanurabontang', 'hanurabontang', '2020-12-19 07:14:31', '2020-12-19 08:29:43'),
(208, 14, 17, '(TRASH)hanurabontang-17-14-64206fc595765f5bdeb71af086216f33.pdf', 'delete', 'hanurabontang', 'hanurabontang', '2020-12-19 07:14:54', '2020-12-23 03:08:03'),
(209, 14, 18, '(TRASH)hanurabontang-18-14-ae5e62dfbb88cead442c0245c2bbee68.pdf', 'delete', 'hanurabontang', 'hanurabontang', '2020-12-19 07:19:11', '2020-12-19 08:28:23'),
(210, 14, 18, 'hanurabontang-18-14-b92918ed4e527b4dcbfc96698be47368.pdf', 'publish', 'hanurabontang', 'hanurabontang', '2020-12-19 08:28:46', '2020-12-19 08:28:46'),
(211, 14, 11, '(TRASH)hanurabontang-11-14-75bf600efb54ac68dd023ac7c25751bc.pdf', 'delete', 'hanurabontang', 'hanurabontang', '2020-12-19 08:29:25', '2020-12-23 03:07:30'),
(212, 14, 16, 'hanurabontang-16-14-b92918ed4e527b4dcbfc96698be47368.pdf', 'publish', 'hanurabontang', 'hanurabontang', '2020-12-19 08:30:05', '2020-12-19 08:30:05'),
(213, 16, 17, 'gerindrabontang-17-16-e4bf10113af531c67d83d2f98d28bb5a.pdf', 'publish', 'gerindrabontang', 'gerindrabontang', '2020-12-19 13:40:49', '2020-12-19 13:40:49'),
(214, 16, 14, 'gerindrabontang-14-16-b3824e1196fda988daff5939bf70d484.pdf', 'publish', 'gerindrabontang', 'gerindrabontang', '2020-12-19 13:43:36', '2020-12-19 13:43:36'),
(215, 16, 11, 'gerindrabontang-11-16-c4fa921ac7304a5ed32d9b0ca3c4642b.pdf', 'publish', 'gerindrabontang', 'gerindrabontang', '2020-12-19 13:46:50', '2020-12-19 13:46:50'),
(216, 16, 13, 'gerindrabontang-13-16-9265e59ab902d947074a98692273e19e.pdf', 'publish', 'gerindrabontang', 'gerindrabontang', '2020-12-19 13:49:38', '2020-12-19 13:49:38'),
(217, 16, 15, 'gerindrabontang-15-16-86a5b70c8ab19128b418eccd8e0bb7a9.pdf', 'publish', 'gerindrabontang', 'gerindrabontang', '2020-12-19 13:52:29', '2020-12-19 13:52:29'),
(218, 16, 12, '(TRASH)gerindrabontang-12-16-ed38189a330e9d0767d7298827a43d2c.pdf', 'delete', 'gerindrabontang', 'gerindrabontang', '2020-12-19 15:03:49', '2020-12-23 07:14:55'),
(219, 12, 18, 'nasdembontang-18-12-05903baf436d5d97c438acd68ca38030.pdf', 'publish', 'nasdembontang', 'nasdembontang', '2020-12-20 13:03:37', '2020-12-20 13:03:37'),
(220, 7, 11, 'Anugrah-11-7-13c1479dcab1470c5d046ec97e83c76c.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-22 06:40:17', '2020-12-22 06:40:17'),
(221, 7, 13, 'Anugrah-13-7-eecb67d23324d5c8556374fee45d90e4.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-22 15:12:15', '2020-12-22 15:12:15'),
(222, 7, 14, 'Anugrah-14-7-3b7870704c2875e4c268778f1251c105.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-22 15:19:56', '2020-12-22 15:19:56'),
(223, 7, 15, 'Anugrah-15-7-9bb90ecfc300304459cb34f01e52bcc4.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-22 15:43:12', '2020-12-22 15:43:12'),
(224, 7, 17, 'Anugrah-17-7-0e78b16d7a22bd23d2ff4db4e74e032b.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-22 15:58:03', '2020-12-22 15:58:03'),
(225, 7, 8, 'Anugrah-8-7-9f75e4268ff1c9a67362b6d95c1a4a53.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-22 17:14:43', '2020-12-22 17:14:43'),
(226, 3, 18, 'pdiperjuangan-18-3-b4850577c89fb25c133bb576b5917bd5.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-12-23 02:16:01', '2020-12-23 02:16:01'),
(227, 2, 6, 'golkarbontang-6-2-7d4f4d6678ba8905eb6f99fb187dcf27.pdf', 'publish', 'golkarbontang', 'golkarbontang', '2020-12-23 02:17:32', '2020-12-23 02:17:32'),
(228, 12, 17, '(TRASH)nasdembontang-17-12-2f8f4f419e5f974430711c3e6c4d2530.pdf', 'delete', 'nasdembontang', 'nasdembontang', '2020-12-23 02:17:52', '2020-12-23 02:18:37'),
(229, 12, 17, '(TRASH)nasdembontang-17-12-a97e9379c9084dce97f1c8c644a3e1d5.pdf', 'delete', 'nasdembontang', 'nasdembontang', '2020-12-23 02:18:37', '2020-12-23 02:19:18'),
(230, 13, 15, 'pkbbontang-15-13-b373739ca5a16b2d6684bfc4d8ff9694.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-23 02:24:35', '2020-12-23 02:24:35'),
(231, 3, 11, 'pdiperjuangan-11-3-f71216d86c6ffd8d0af89f86074aa068.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-12-23 02:25:46', '2020-12-23 02:25:46'),
(232, 3, 12, 'pdiperjuangan-12-3-f71216d86c6ffd8d0af89f86074aa068.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-12-23 02:26:57', '2020-12-23 02:26:57'),
(233, 3, 13, 'pdiperjuangan-13-3-f71216d86c6ffd8d0af89f86074aa068.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-12-23 02:27:11', '2020-12-23 02:27:11'),
(234, 3, 14, 'pdiperjuangan-14-3-f71216d86c6ffd8d0af89f86074aa068.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-12-23 02:27:24', '2020-12-23 02:27:24'),
(235, 2, 17, 'golkarbontang-17-2-0e78b16d7a22bd23d2ff4db4e74e032b.pdf', 'publish', 'golkarbontang', 'golkarbontang', '2020-12-23 02:27:41', '2020-12-23 02:27:41'),
(236, 3, 15, 'pdiperjuangan-15-3-f71216d86c6ffd8d0af89f86074aa068.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-12-23 02:27:58', '2020-12-23 02:27:58'),
(237, 2, 15, 'golkarbontang-15-2-9bb90ecfc300304459cb34f01e52bcc4.pdf', 'publish', 'golkarbontang', 'golkarbontang', '2020-12-23 02:28:05', '2020-12-23 02:28:05'),
(238, 3, 16, 'pdiperjuangan-16-3-f71216d86c6ffd8d0af89f86074aa068.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-12-23 02:28:15', '2020-12-23 02:28:15'),
(239, 3, 17, 'pdiperjuangan-17-3-f71216d86c6ffd8d0af89f86074aa068.pdf', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-12-23 02:28:30', '2020-12-23 02:28:30'),
(240, 2, 14, 'golkarbontang-14-2-3b7870704c2875e4c268778f1251c105.pdf', 'publish', 'golkarbontang', 'golkarbontang', '2020-12-23 02:30:41', '2020-12-23 02:30:41'),
(241, 7, 18, 'Anugrah-18-7-8ba54a77b8dbbb0264d5c3c4368892c2.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-23 02:32:52', '2020-12-23 02:32:52'),
(242, 2, 16, 'golkarbontang-16-2-e00138ca39a206572e12fda10ad2caa2.pdf', 'publish', 'golkarbontang', 'golkarbontang', '2020-12-23 02:34:04', '2020-12-23 02:34:04'),
(243, 13, 17, 'pkbbontang-17-13-30d23a48bb461c6e21ea741e9939469d.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-23 02:35:54', '2020-12-23 02:35:54'),
(244, 13, 11, 'pkbbontang-11-13-3642b1326c2bd1f71ad0f6bf6c94a338.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-23 02:37:49', '2020-12-23 02:37:49'),
(245, 13, 12, 'pkbbontang-12-13-30d23a48bb461c6e21ea741e9939469d.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-23 02:38:31', '2020-12-23 02:38:31'),
(246, 12, 13, 'nasdembontang-13-12-eecb67d23324d5c8556374fee45d90e4.pdf', 'publish', 'nasdembontang', 'nasdembontang', '2020-12-23 02:41:05', '2020-12-23 02:41:05'),
(247, 7, 16, '(TRASH)Anugrah-16-7-8ba54a77b8dbbb0264d5c3c4368892c2.pdf', 'delete', 'Anugrah', 'Anugrah', '2020-12-23 02:43:23', '2020-12-23 02:45:23'),
(248, 13, 16, 'pkbbontang-16-13-3a19c73e7b930225927d5c33e6211335.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-23 02:43:36', '2020-12-23 02:43:36'),
(249, 13, 13, 'pkbbontang-13-13-7d6307e33f0693f4d94f2af3e5c756e8.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-23 02:44:11', '2020-12-23 02:44:11'),
(250, 13, 14, 'pkbbontang-14-13-45305cd34cc3298f320adb3dafa80dfb.pdf', 'publish', 'pkbbontang', 'pkbbontang', '2020-12-23 02:44:49', '2020-12-23 02:44:49'),
(251, 7, 16, 'Anugrah-16-7-3b7870704c2875e4c268778f1251c105.pdf', 'publish', 'Anugrah', 'Anugrah', '2020-12-23 02:51:16', '2020-12-23 02:51:16'),
(252, 2, 11, 'golkarbontang-11-2-660db25cb1f22e8b7e426c3d79d3a08d.pdf', 'publish', 'golkarbontang', 'golkarbontang', '2020-12-23 02:53:02', '2020-12-23 02:53:02'),
(253, 12, 11, 'nasdembontang-11-12-6698424f95b20e13daf2f783e9433d9d.pdf', 'publish', 'nasdembontang', 'nasdembontang', '2020-12-23 02:53:16', '2020-12-23 02:53:16'),
(254, 12, 14, 'nasdembontang-14-12-fa722ed0f18064e654c4466964bb23b5.pdf', 'publish', 'nasdembontang', 'nasdembontang', '2020-12-23 02:53:36', '2020-12-23 02:53:36'),
(255, 12, 15, 'nasdembontang-15-12-2f8f4f419e5f974430711c3e6c4d2530.pdf', 'publish', 'nasdembontang', 'nasdembontang', '2020-12-23 02:53:52', '2020-12-23 02:53:52'),
(256, 12, 17, 'nasdembontang-17-12-a1bea425cb0d3d79401d129e7134ecae.pdf', 'publish', 'nasdembontang', 'nasdembontang', '2020-12-23 02:54:09', '2020-12-23 02:54:09'),
(257, 16, 18, '(TRASH)gerindrabontang-18-16-ed38189a330e9d0767d7298827a43d2c.pdf', 'delete', 'gerindrabontang', 'gerindrabontang', '2020-12-23 02:54:59', '2020-12-23 03:47:46'),
(258, 2, 18, 'golkarbontang-18-2-065c7661fad424df1f9c508907d16472.pdf', 'publish', 'golkarbontang', 'golkarbontang', '2020-12-23 02:57:03', '2020-12-23 02:57:03'),
(259, 14, 11, 'hanurabontang-11-14-b905c9951715b99ecd0d674cd656efe5.pdf', 'publish', 'hanurabontang', 'hanurabontang', '2020-12-23 03:07:30', '2020-12-23 03:07:30'),
(260, 14, 17, 'hanurabontang-17-14-0e78b16d7a22bd23d2ff4db4e74e032b.pdf', 'publish', 'hanurabontang', 'hanurabontang', '2020-12-23 03:08:03', '2020-12-23 03:08:03'),
(261, 16, 18, 'gerindrabontang-18-16-8ba54a77b8dbbb0264d5c3c4368892c2.pdf', 'publish', 'gerindrabontang', 'gerindrabontang', '2020-12-23 03:47:46', '2020-12-23 03:47:46'),
(262, 16, 12, 'gerindrabontang-12-16-5561797ea9552cab2ef0e5138dfa983f.pdf', 'publish', 'gerindrabontang', 'gerindrabontang', '2020-12-23 07:14:55', '2020-12-23 07:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `pile_cnfg`
--

CREATE TABLE `pile_cnfg` (
  `pcnfg_id` int(255) NOT NULL,
  `pcnfg_nm` varchar(255) NOT NULL,
  `type` char(255) NOT NULL DEFAULT 'notype'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pile_cnfg`
--

INSERT INTO `pile_cnfg` (`pcnfg_id`, `pcnfg_nm`, `type`) VALUES
(1, 'surat permohonan bantuan keuangan', 'rab'),
(2, 'surat keputusan DPP', 'rab'),
(3, 'foto copy NPWP', 'rab'),
(4, 'surat keterangan hasil pemilu', 'rab'),
(5, 'nomor rekening kas umum parpol', 'rab'),
(6, 'rencana penggunaan dana bantuan keuangan', 'rab'),
(7, 'realisasi pertanggung jawaban sebelumnya', 'rab'),
(8, 'surat pernyataan ketua parpol', 'rab'),
(11, 'kwitansi dan nota', 'lpj'),
(12, 'SPT', 'lpj'),
(13, 'notulen', 'lpj'),
(14, 'daftar hadir', 'lpj'),
(15, 'dokumentasi', 'lpj'),
(16, 'laporan', 'lpj'),
(17, 'pajak', 'lpj'),
(18, 'laporan realisasi', 'realisasi');

-- --------------------------------------------------------

--
-- Table structure for table `prpdt`
--

CREATE TABLE `prpdt` (
  `prpdt_id` int(50) NOT NULL,
  `mem_id` int(50) NOT NULL,
  `prpdt_nmpp` varchar(80) DEFAULT NULL,
  `prpdt_drss` varchar(80) DEFAULT NULL,
  `prpdt_nmld` varchar(80) DEFAULT NULL,
  `prpdt_xch` varchar(80) DEFAULT NULL,
  `prpdt_scrt` varchar(80) DEFAULT NULL,
  `prpdt_dtprv` date NOT NULL,
  `prpdt_npwp` varchar(80) DEFAULT '0',
  `prpdt_prvlst` char(20) NOT NULL DEFAULT 'waiting',
  `sttus` char(20) NOT NULL DEFAULT 'draft',
  `created_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `modified_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prpdt`
--

INSERT INTO `prpdt` (`prpdt_id`, `mem_id`, `prpdt_nmpp`, `prpdt_drss`, `prpdt_nmld`, `prpdt_xch`, `prpdt_scrt`, `prpdt_dtprv`, `prpdt_npwp`, `prpdt_prvlst`, `sttus`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(1, 2025, 'PKS KOTA BONTANG', 'JL. BHAYANGKARA NO.21 RT14 KEL. GUNUNG ELAI, KEC. BONTANG UTARA', 'MOHAMMAD HARIS ANSYORY', 'SAID AFANDI', 'DRS. SUHARNO', '2019-05-19', '02.160.809.6-724.001', 'waiting', 'publish', 'PKS KOTA BONTANG', 'pkskotabontang', '2020-07-30 02:00:42', '2020-12-03 06:50:21'),
(2, 2024, 'Partai GOLKAR', 'Jl. Pattimura RT. 33 No. 28 Kel. Api-Api, Bontang Utara', 'Andi Faizal Sofyan Hasdam, SH', 'H. Deny Akil', 'H. Muslimin, SM', '2020-08-31', '021214846724002', 'waiting', 'publish', 'GOLKAR BONTANG', 'golkarbontang', '2020-07-30 02:09:40', '2020-11-29 04:17:43'),
(3, 2023, 'PDI PERJUANGAN', 'JL MH. THAMRIN NO.02 RT 17, BONTANG BARU, BONTANG UTARA', 'H. MAMING, SH., MM', 'DENI ARIFIN', 'H. AGUS SUHADI, SH', '2019-07-16', '0', 'waiting', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:09:53', '2020-07-30 02:09:53'),
(4, 2038, 'PARTAI AMANAT NASIONAL', 'JL.PATTIMURA RT.41 Kel.API -API Kel.BONTANG UTARA BONTANG', 'H. ANDI ADE LEPU, SE.M.Si', 'KARISMA DEWI, S.T', 'H.RIDWAN KARIM, S.E', '2017-05-30', '018666172724001', 'waiting', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:12:41', '2020-11-26 02:18:21'),
(7, 2027, 'Beringin Karya (Berkarya)', 'Jl. Pattimura RT. 27, Kel. Api-Api, Kota Bontang', 'H. Abd. Hakim', 'Tri Ismawaty, SE, ME', 'Suharto Nasran Basry', '2020-08-29', '85.942.026.7.724.000', 'waiting', 'publish', 'Anugrah ', 'Anugrah', '2020-07-30 02:18:55', '2020-11-28 23:35:02'),
(11, 2022, 'AAA', 'AAA', 'AAA', 'AA', 'AAA', '2020-07-01', '0', 'waiting', 'delete', 'iwansetiawan', 'iwansetiawan', '2020-07-30 02:38:14', '2020-07-30 02:39:32'),
(12, 2026, 'DPD Partai NasDem Kota Bontang', 'Jl. RE Martadinata NO 04 RT 06 Kel. Loktuan', 'JONI', 'FAISAL', 'BAKHTIAR WAKKANG', '2016-10-27', '0', 'waiting', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-07-30 02:49:48'),
(13, 2029, 'PARTAI KEBANGKITAN BANGSA', 'Jl. Ir.H Juanda RT 33. Kel tanjung laut kec bontang selatan', 'BASRI RASE', 'SYAFI\'I', 'MOH SUBUDI,S.Sos ', '2018-04-04', '02.185.371.8-724.001', 'waiting', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 02:55:15', '2020-12-02 08:33:11'),
(14, 2028, 'HANURA', 'Jl. Kapt. Piere Tendean', 'Hendra Wijaya', 'Ina Wulandari', 'Teguh Adhi Putra', '2018-06-29', '0', 'waiting', 'publish', 'hanura bontang', 'hanura bontang', '2020-07-30 02:58:28', '2020-07-30 02:58:28'),
(16, 2030, 'GERINDRA BONTANG', 'JL. MH.THAMRIN RT 21 BONTANG BARU', 'AGUS HARIS, SH', 'Drs. SUWARDI', 'HERI KESWANTO, S.Kom', '2017-09-30', '02.795.303.3-724.001', 'waiting', 'publish', 'GERINDRA BONTANG', 'gerindrabontang', '2020-07-30 03:11:10', '2020-11-30 11:53:46'),
(18, 2031, 'Partai Persatuan Pembangunan', 'JL. IR. JUANDA NOMOR 16 BUKIT INDAH , TANJUNG LAUT BONTANG SELATAN ', 'Abbas Patiroi', 'Ramelan', 'Sulhan', '2017-03-27', '0', 'waiting', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:33:13', '2020-07-30 03:33:13'),
(22, 2022, 'proposal uji cob', 'alamat', 'ketua', 'bendahara', 'sekretaris', '2020-11-01', '000000', 'waiting', 'delete', 'iwansetiawan', 'iwansetiawan', '2020-11-26 01:49:15', '2020-11-26 01:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `prpdt_opskdt`
--

CREATE TABLE `prpdt_opskdt` (
  `opskdt_id` int(50) NOT NULL,
  `prpdt_id` int(50) NOT NULL,
  `opskdt_atk` char(80) DEFAULT '0',
  `opskdt_fc` char(80) DEFAULT '0',
  `opskdt_ln` char(80) DEFAULT '0',
  `opskdt_hnr` char(80) DEFAULT '0',
  `opskdt_sewa` char(80) DEFAULT '0',
  `opskdt_sda` char(80) DEFAULT '0',
  `opskdt_mdl` char(80) DEFAULT '0',
  `opskdt_prpl` char(80) DEFAULT '0',
  `opskdt_pmkpn` char(80) DEFAULT '0',
  `opskdt_pmltn` char(80) DEFAULT '0',
  `opskdt_trns` char(80) DEFAULT '0',
  `sttus` char(20) NOT NULL DEFAULT 'draft',
  `created_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `modified_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prpdt_opskdt`
--

INSERT INTO `prpdt_opskdt` (`opskdt_id`, `prpdt_id`, `opskdt_atk`, `opskdt_fc`, `opskdt_ln`, `opskdt_hnr`, `opskdt_sewa`, `opskdt_sda`, `opskdt_mdl`, `opskdt_prpl`, `opskdt_pmkpn`, `opskdt_pmltn`, `opskdt_trns`, `sttus`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(1, 1, '0', '11.250', '850.000', '0', '0', '3.708.600', '22.560.000', '', '', '0', '0', 'publish', 'PKS KOTA BONTANG', 'pkskotabontang', '2020-07-30 02:00:42', '2020-11-30 00:59:43'),
(2, 2, '900.000', '10.000', '3.271.000', '12.000.000', '0', '0', '7.000.000', '', '', '515.000', '0', 'publish', 'GOLKAR BONTANG', 'golkarbontang', '2020-07-30 02:09:40', '2020-12-23 02:45:51'),
(3, 3, '4.684.000', '0', '6.045.000', '0', '2.083.000', '8.920.500', '0', '', '600.000', '', '0', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:09:53', '2020-11-26 08:51:18'),
(4, 4, '465.000', '0', '1.800.000', '20.000.000', '0', '3.300.000', '0', '', '0', '0', '0', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:12:41', '2020-12-15 13:25:41'),
(7, 7, '120.000', '', '', '13.665.000', '', '2.308.983', '', '', '', '', '875.000', 'publish', 'Anugrah ', 'Anugrah', '2020-07-30 02:18:55', '2020-12-15 14:01:19'),
(8, 8, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:25:53', '2020-07-30 02:25:53'),
(9, 9, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:26:01', '2020-07-30 02:26:01'),
(10, 10, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:26:03', '2020-07-30 02:26:03'),
(11, 11, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'delete', 'iwansetiawan', 'iwansetiawan', '2020-07-30 02:38:14', '2020-07-30 02:39:32'),
(12, 12, '625.000', '100.000', '5.164.000', '15.000.000', '0', '0', '0', '0', '0', '261.000', '0', 'publish', 'DPD NASDEM BONTANG', 'nasdembontang', '2020-07-30 02:49:48', '2020-11-26 02:21:56'),
(13, 13, '4.421.000', '81.000', '6.750.000', '12.000.000', '', '5.283.000', '990.000', '', '115.000', '', '4.350.000', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 02:55:15', '2020-12-02 10:45:27'),
(14, 14, '', '', '210.000', '6.000.000', '', '2.100.000', '', '8.500.000', '', '2.000.000', '', 'publish', 'hanura bontang', 'hanurabontang', '2020-07-30 02:58:28', '2020-12-02 12:27:38'),
(16, 16, '3.145.000', '', '17.950.000', '10.200.000', '', '0', '0', '0', '0', '350.000', '', 'publish', 'GERINDRA BONTANG', 'gerindrabontang', '2020-07-30 03:11:10', '2020-11-28 05:19:51'),
(17, 17, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:15:04', '2020-07-30 03:15:04'),
(18, 18, '1.500.000', '0', '3.975.000', '10.000.000', '0', '0', '0', '0', '0', '0', '0', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:33:13', '2020-07-30 03:33:13'),
(22, 22, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'delete', 'iwansetiawan', 'iwansetiawan', '2020-11-26 01:49:15', '2020-11-26 01:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `prpdt_pnpldt`
--

CREATE TABLE `prpdt_pnpldt` (
  `pnpldt_id` int(50) NOT NULL,
  `prpdt_id` int(50) NOT NULL,
  `pnpldt_nm` varchar(225) DEFAULT NULL,
  `pnpldt_atk` char(80) DEFAULT '0',
  `pnpldt_ctk` char(80) DEFAULT '0',
  `pnpldt_mkmn` char(80) DEFAULT '0',
  `pnpldt_sppd` char(80) DEFAULT '0',
  `pnpldt_hnr` char(80) DEFAULT '0',
  `pnpldt_trns` char(80) DEFAULT '0',
  `pnpldt_swa` char(80) DEFAULT '0',
  `pnpldt_sku` char(80) DEFAULT '0',
  `pnpldt_ln` char(80) DEFAULT '0',
  `sttus` char(20) NOT NULL DEFAULT 'draft',
  `created_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `modified_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prpdt_pnpldt`
--

INSERT INTO `prpdt_pnpldt` (`pnpldt_id`, `prpdt_id`, `pnpldt_nm`, `pnpldt_atk`, `pnpldt_ctk`, `pnpldt_mkmn`, `pnpldt_sppd`, `pnpldt_hnr`, `pnpldt_trns`, `pnpldt_swa`, `pnpldt_sku`, `pnpldt_ln`, `sttus`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(1, 1, 'RAPAT KOORDINASI DAERAH', '0', '0', '30.000.000', '0', '0', '0', '0', '0', '580.000', 'publish', 'PKS KOTA BONTANG', 'pkskotabontang', '2020-07-30 02:00:42', '2020-12-02 05:36:50'),
(2, 1, 'SEMINAR PERAN WANITA DALAM POLITIK INDONESIA', '0', '0', '10.000.000', '0', '0', '0', '0', '0', '505.000', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:00:42', '2020-07-30 02:02:23'),
(3, 1, 'HALAL BI HALAL DPW PKS KALIMANTAN TIMIR', '0', '0', '5.000.000', '0', '0', '0', '0', '0', '0', 'publish', 'PKS KOTA BONTANG', 'PKS KOTA BONTANG', '2020-07-30 02:00:43', '2020-07-30 02:00:43'),
(4, 2, 'MUSYAWARAH DAERAH VII PARTAI GOLKAR BONTANG', '4.232.000', '2.340.000', '53.445.782', '0', '0', '0', '0', '26.536.131', '12.000.000', 'publish', 'GOLKAR BONTANG', 'golkarbontang', '2020-07-30 02:09:40', '2020-12-23 02:39:57'),
(5, 3, 'SEMINAR ', '600.000', '2.750.000', '15.000.000', '0', '0', '0', '0', '0', '0', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:09:53', '2020-11-26 02:36:30'),
(6, 3, 'SARASEHAN (KONSOLIDASI)', '0', '0', '14.000.000', '0', '0', '0', '0', '0', '0', 'publish', 'pdiperjuangan', 'pdiperjuangan', '2020-07-30 02:09:53', '2020-11-26 02:38:07'),
(7, 4, 'PENGKADERAN MASA BIMBINGAN ANGGOTA', '0', '474.000', '5.000.000', '0', '4.850.000', '0', '0', '4.000.000', '240.000', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:12:41', '2020-12-03 00:35:47'),
(8, 4, 'RAPAT KERJA DAERAH', '0', '593.500', '6.500.000', '0', '5.950.000', '0', '0', '5.500.000', '240.000', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:12:41', '2020-12-03 00:45:01'),
(9, 7, 'Dialog Pengurus Partai dan Temu Kader ', '975.000', '672.000', '7.075.000', '0', '1.200.000', '350.000', '3.800.000', '0', '766.500', 'publish', 'Anugrah ', 'Anugrah', '2020-07-30 02:18:55', '2020-12-15 13:25:34'),
(10, 8, 'kegiatan partai', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:25:53', '2020-07-30 02:25:53'),
(11, 9, 'kegiatan partai', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:26:01', '2020-07-30 02:26:01'),
(12, 10, 'kegiatan partai', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'publish', 'panbontang', 'panbontang', '2020-07-30 02:26:03', '2020-07-30 02:26:03'),
(13, 11, 'kegiatan partai', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'delete', 'iwansetiawan', 'iwansetiawan', '2020-07-30 02:38:14', '2020-07-30 02:39:32'),
(14, 12, 'Seminar Pembekalan Saksi Partai NasDem', '900.000', '0', '4.500.000', '0', '0', '0', '0', '0', '12.150.000', 'publish', 'DPD NASDEM BONTANG', 'DPD NASDEM BONTANG', '2020-07-30 02:49:48', '2020-07-30 03:00:02'),
(15, 13, 'Seminar', '5.610.000', '900.000', '21.150.000', '0', '12.950.000', '18.700.000', '0', '0', '0', 'publish', 'pkbbontang', 'pkbbontang', '2020-07-30 02:55:15', '2020-12-02 10:49:34'),
(16, 13, 'lokakarya', '0', '0', '4.000.000', '4.350.000', '0', '0', '0', '0', '0', 'delete', 'pkbbontang', 'pkbbontang', '2020-07-30 02:55:15', '2020-11-28 14:29:01'),
(17, 13, 'peningkatan partisifasi politik', '2.690.000', '0', '5.900.000', '10.600.000', '0', '0', '0', '0', '0', 'delete', 'pkbbontang', 'pkbbontang', '2020-07-30 02:55:15', '2020-11-28 14:29:24'),
(18, 14, 'Penyerahan SK DPP Dukungan Paslon dan Pengarahan Politik', '0', '8.118.000', '6.450.000', '0', '7.500.000', '3.400.000', '0', '0', '3.414.000', 'publish', 'hanura bontang', 'hanurabontang', '2020-07-30 02:58:28', '2020-12-02 12:55:28'),
(19, 12, 'PENGKADERAN DAN PEMBEKALAN KEPENGURUSAN TINGKAT DPC PARTAI NasDem Se-KOTA BONTANG', '0', '750.000', '7.500.000', '0', '5.550.000', '0', '7.500.000', '0', '0', 'publish', 'DPD NASDEM BONTANG', 'nasdembontang', '2020-07-30 03:01:29', '2020-11-26 02:27:24'),
(20, 16, 'Pendidikan Politik Perempuan Partai Gerindra Tahun 2020 se-Kalimantan Timur di Samarinda', '0', '0', '0', '0', '0', '0', '0', '0', '5.400.000', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 03:11:10', '2020-07-30 03:15:36'),
(21, 17, 'kegiatan partai', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:15:04', '2020-07-30 03:15:04'),
(22, 16, 'Rapat Kerja Daerah Kaukus Perempuan Politik Indonesia se-Kalimantan Timur di Samarinda', '0', '0', '0', '0', '0', '0', '0', '0', '2.700.000', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 03:16:44', '2020-07-30 03:16:44'),
(23, 16, 'Rapat Koordinasi  Daerah HUT Partai GERINDRA se-Kalimantan Timur di Samarinda', '0', '0', '0', '0', '0', '0', '0', '0', '10.500.000', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 03:17:48', '2020-07-30 03:17:48'),
(24, 16, 'Rapat Koordinasi  Daerah Finalisasi Pilkada Kaltim Partai GERINDRA se-Kalimantan Timur di Samarinda', '0', '0', '0', '0', '0', '0', '0', '0', '5.400.000', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 03:18:55', '2020-07-30 03:18:55'),
(25, 16, 'Temu Kader Partai GERINDRA Kota Bontang Tahun 2020', '2.000.000', '0', '10.000.000', '0', '0', '0', '0', '0', '16.475.000', 'publish', 'GERINDRA BONTANG', 'GERINDRA BONTANG', '2020-07-30 03:22:43', '2020-07-30 03:22:43'),
(26, 18, 'Rapat sesuai tugasnya', '0', '0', '9.900.000', '5.500.000', '0', '0', '0', '0', '14.125.000', 'publish', 'DPCPPPBONTANG', 'DPCPPPBONTANG', '2020-07-30 03:33:13', '2020-07-30 03:33:13'),
(27, 22, 'kegiatan partai', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'delete', 'iwansetiawan', 'iwansetiawan', '2020-11-26 01:49:15', '2020-11-26 01:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `prpdt_rea_opskdt`
--

CREATE TABLE `prpdt_rea_opskdt` (
  `reaops_id` int(50) NOT NULL,
  `prpdt_id` int(50) NOT NULL,
  `reaops_atk` char(80) DEFAULT '0',
  `reaops_fc` char(80) DEFAULT '0',
  `reaops_ln` char(80) DEFAULT '0',
  `reaops_hnr` char(80) DEFAULT '0',
  `reaops_sewa` char(80) DEFAULT '0',
  `reaops_sda` char(80) DEFAULT '0',
  `reaops_mdl` char(80) DEFAULT '0',
  `reaops_prpl` char(80) DEFAULT '0',
  `reaops_pmkpn` char(80) DEFAULT '0',
  `reaops_pmltn` char(80) DEFAULT '0',
  `reaops_trns` char(80) DEFAULT '0',
  `sttus` char(20) NOT NULL DEFAULT 'draft',
  `created_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `modified_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prpdt_rea_pnpldt`
--

CREATE TABLE `prpdt_rea_pnpldt` (
  `reapnd_id` int(50) NOT NULL,
  `prpdt_id` int(50) NOT NULL,
  `reapnd_atk` char(80) DEFAULT '0',
  `reapnd_ctk` char(80) DEFAULT '0',
  `reapnd_mkmn` char(80) DEFAULT '0',
  `reapnd_sppd` char(80) DEFAULT '0',
  `reapnd_hnr` char(80) DEFAULT '0',
  `reapnd_trns` char(80) DEFAULT '0',
  `reapnd_swa` char(80) DEFAULT '0',
  `reapnd_sku` char(80) DEFAULT '0',
  `reapnd_ln` char(80) DEFAULT '0',
  `sttus` varchar(20) NOT NULL DEFAULT 'draft',
  `created_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `modified_by` varchar(20) NOT NULL DEFAULT 'anonim',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mem`
--
ALTER TABLE `mem`
  ADD PRIMARY KEY (`mem_id`),
  ADD UNIQUE KEY `mem_` (`mem_`),
  ADD UNIQUE KEY `mem_conma` (`mem_conma`);

--
-- Indexes for table `pile`
--
ALTER TABLE `pile`
  ADD PRIMARY KEY (`pile_id`);

--
-- Indexes for table `pile_cnfg`
--
ALTER TABLE `pile_cnfg`
  ADD PRIMARY KEY (`pcnfg_id`);

--
-- Indexes for table `prpdt`
--
ALTER TABLE `prpdt`
  ADD PRIMARY KEY (`prpdt_id`);

--
-- Indexes for table `prpdt_opskdt`
--
ALTER TABLE `prpdt_opskdt`
  ADD PRIMARY KEY (`opskdt_id`);

--
-- Indexes for table `prpdt_pnpldt`
--
ALTER TABLE `prpdt_pnpldt`
  ADD PRIMARY KEY (`pnpldt_id`);

--
-- Indexes for table `prpdt_rea_opskdt`
--
ALTER TABLE `prpdt_rea_opskdt`
  ADD PRIMARY KEY (`reaops_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mem`
--
ALTER TABLE `mem`
  MODIFY `mem_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2039;

--
-- AUTO_INCREMENT for table `pile`
--
ALTER TABLE `pile`
  MODIFY `pile_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `pile_cnfg`
--
ALTER TABLE `pile_cnfg`
  MODIFY `pcnfg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `prpdt`
--
ALTER TABLE `prpdt`
  MODIFY `prpdt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `prpdt_opskdt`
--
ALTER TABLE `prpdt_opskdt`
  MODIFY `opskdt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `prpdt_pnpldt`
--
ALTER TABLE `prpdt_pnpldt`
  MODIFY `pnpldt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `prpdt_rea_opskdt`
--
ALTER TABLE `prpdt_rea_opskdt`
  MODIFY `reaops_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
