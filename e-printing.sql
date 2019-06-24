-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 09:17 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-printing`
--

-- --------------------------------------------------------

--
-- Table structure for table `custorder`
--

CREATE TABLE `custorder` (
  `custorderID` int(10) NOT NULL,
  `warna` int(10) NOT NULL,
  `binding` int(10) NOT NULL,
  `transparent` int(10) NOT NULL,
  `fileprint` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tarikh` date NOT NULL,
  `statusorder` int(10) NOT NULL,
  `amount` int(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `custusername` varchar(50) NOT NULL,
  `staffusername` varchar(50) NOT NULL,
  `mesej` varchar(200) NOT NULL,
  `rombak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custorder`
--

INSERT INTO `custorder` (`custorderID`, `warna`, `binding`, `transparent`, `fileprint`, `nama`, `phone`, `email`, `tarikh`, `statusorder`, `amount`, `price`, `custusername`, `staffusername`, `mesej`, `rombak`) VALUES
(9, 2, 1, 1, '48465-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '4.3', 'hana', 'usri yusra', '', '70841'),
(10, 1, 1, 2, '62822-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '2', 'hana', 'muhammad nabil', '', '31446'),
(11, 2, 1, 2, '13526-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.8', 'hana', 'siti yuliza', '', '49311'),
(12, 2, 2, 2, '72729-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.3', 'hana', 'usri yusra', '', '77331'),
(13, 2, 2, 2, '99694-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.3', 'hana', 'muhammad nabil', '', '91768'),
(14, 2, 1, 1, '66839-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '4.3', 'hana', 'siti yuliza', '', '60610'),
(15, 1, 1, 3, '31065-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '1.5', 'hana', 'usri yusra', '', '2226'),
(16, 1, 1, 2, '65758-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '2', 'anwar', 'siti yuliza', '', '61854'),
(17, 2, 2, 2, '38473-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.3', 'anwar', 'usri yusra', '', '6427'),
(18, 2, 1, 2, '99205-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.8', 'anwar', 'muhammad nabil', '', '45096'),
(19, 1, 1, 2, '46029-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '2', 'anwar', 'siti yuliza', '', '68501'),
(20, 2, 2, 2, '65796-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.3', 'anwar', 'usri yusra', '', '53489'),
(21, 2, 2, 2, '49661-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.3', 'anwar', 'muhammad nabil', '', '62944'),
(22, 1, 1, 2, '3474-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '2', 'anwar', 'siti yuliza', '', '20410'),
(23, 2, 2, 1, '91676-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.8', 'nasrul', 'usri yusra', '', '47082'),
(24, 2, 1, 2, '68362-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.8', 'nasrul', 'muhammad nabil', '', '88733'),
(25, 1, 1, 2, '93333-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '2', 'nasrul', 'siti yuliza', '', '51548'),
(26, 2, 1, 2, '19846-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.8', 'nasrul', 'usri yusra', '', '28177'),
(27, 2, 2, 2, '51517-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.3', 'nasrul', 'muhammad nabil', '', '92596'),
(28, 1, 1, 1, '39344-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '2.5', 'nasrul', 'siti yuliza', '', '81329'),
(29, 2, 1, 2, '72689-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.8', 'nasrul', 'usri yusra', '', '93471'),
(30, 1, 1, 3, '47749-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '1.5', 'nasrul', 'muhammad nabil', '', '87998'),
(31, 2, 1, 1, '34654-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '4.3', 'nasrul', 'siti yuliza', '', '88705'),
(32, 1, 1, 1, '30211-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '2.5', 'ehsan', 'siti yuliza', '', '55666'),
(33, 1, 1, 1, '47970-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '2.5', 'ehsan', 'usri yusra', '', '28115'),
(34, 2, 2, 1, '13194-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '3.8', 'ehsan', 'muhammad nabil', '', '74179'),
(35, 2, 2, 2, '9748-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '3.3', 'ehsan', 'siti yuliza', '', '85822'),
(36, 1, 2, 2, '55738-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '1.5', 'ehsan', 'usri yusra', '', '36261'),
(37, 2, 1, 1, '68750-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '4.3', 'ehsan', 'muhammad nabil', '', '19287'),
(38, 1, 2, 2, '9706-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '1.5', 'ehsan', 'siti yuliza', '', '48589'),
(39, 2, 1, 1, '30820-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '4.3', 'ehsan', 'usri yusra', '', '27546'),
(40, 1, 1, 2, '88864-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '2', 'hana', 'muhammad nabil', '', '81390'),
(41, 2, 2, 1, '24757-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.8', 'hana', 'siti yuliza', '', '38697'),
(42, 2, 2, 2, '60753-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.3', 'hana', 'usri yusra', '', '15167'),
(43, 1, 2, 3, '92682-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '1', 'hana', 'muhammad nabil', '', '28460'),
(44, 2, 2, 2, '83585-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.3', 'hana', 'siti yuliza', '', '13102'),
(45, 2, 2, 2, '19060-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.3', 'hana', 'usri yusra', '', '62255'),
(46, 2, 2, 1, '3406-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.8', 'hana', 'muhammad nabil', '', '15464'),
(47, 1, 2, 2, '39535-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '1.5', 'hana', 'siti yuliza', '', '88416'),
(48, 2, 1, 2, '23921-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.8', 'hana', 'usri yusra', '', '87948'),
(49, 1, 2, 2, '97975-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '1.5', 'hana', 'muhammad nabil', '', '98948'),
(50, 1, 2, 2, '11588-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '1.5', 'hana', 'siti yuliza', '', '96592'),
(51, 2, 1, 2, '65324-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '3.8', 'hana', 'usri yusra', '', '91349'),
(52, 2, 2, 3, '22491-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-27', 5, 1, '2.8', 'hana', 'muhammad nabil', '', '73932'),
(53, 1, 2, 1, '5050-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '2', 'anwar', 'usri yusra', '', '82689'),
(54, 2, 2, 1, '80407-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.8', 'anwar', 'muhammad nabil', '', '96075'),
(55, 2, 1, 1, '45890-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '4.3', 'anwar', 'siti yuliza', '', '77225'),
(56, 2, 1, 1, '35356-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '4.3', 'anwar', 'usri yusra', '', '60232'),
(57, 2, 2, 1, '17597-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.8', 'anwar', 'muhammad nabil', '', '30920'),
(58, 2, 1, 1, '58789-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '4.3', 'anwar', 'siti yuliza', '', '69966'),
(59, 2, 1, 1, '24114-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '4.3', 'anwar', 'usri yusra', '', '42121'),
(60, 1, 1, 2, '98201-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '2', 'anwar', 'muhammad nabil', '', '76027'),
(61, 2, 1, 1, '9686-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '4.3', 'anwar', 'siti yuliza', '', '44469'),
(62, 1, 1, 1, '95982-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '2.5', 'anwar', 'usri yusra', '', '45013'),
(63, 2, 1, 2, '86475-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.8', 'anwar', 'muhammad nabil', '', '1290'),
(64, 1, 1, 2, '90691-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '2', 'anwar', 'siti yuliza', '', '63715'),
(65, 2, 1, 1, '52880-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '4.3', 'anwar', 'usri yusra', '', '46215'),
(66, 1, 2, 2, '52130-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '1.5', 'anwar', 'muhammad nabil', '', '3548'),
(67, 2, 2, 2, '55472-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.3', 'anwar', 'siti yuliza', '', '48767'),
(68, 2, 2, 2, '82311-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '3.3', 'anwar', 'usri yusra', '', '96097'),
(69, 1, 2, 2, '60188-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '1.5', 'anwar', 'muhammad nabil', '', '71486'),
(70, 1, 2, 3, '78494-assigment1_B031710093.pdf', 'khairul anwar', '0149823427', '', '2019-05-27', 5, 1, '1', 'anwar', 'siti yuliza', '', '40831'),
(71, 2, 2, 2, '8534-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.3', 'nasrul', 'usri yusra', '', '30746'),
(72, 1, 1, 2, '7831-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '2', 'nasrul', 'muhammad nabil', '', '95491'),
(73, 2, 2, 1, '49866-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.8', 'nasrul', 'siti yuliza', '', '73174'),
(74, 1, 1, 2, '97657-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '2', 'nasrul', 'usri yusra', '', '53117'),
(75, 2, 2, 2, '38827-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.3', 'nasrul', 'muhammad nabil', '', '75799'),
(76, 1, 1, 1, '99199-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '2.5', 'nasrul', 'siti yuliza', '', '27577'),
(77, 2, 2, 1, '91836-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.8', 'nasrul', 'usri yusra', '', '82485'),
(78, 2, 2, 1, '29023-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.8', 'nasrul', 'muhammad nabil', '', '41691'),
(79, 2, 2, 1, '62181-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.8', 'nasrul', 'siti yuliza', '', '76200'),
(80, 2, 2, 2, '35658-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '3.3', 'nasrul', 'usri yusra', '', '14539'),
(81, 1, 2, 2, '83590-assigment1_B031710093.pdf', 'nasrul hakimi', '0162947534', '', '2019-05-27', 5, 1, '1.5', 'nasrul', 'muhammad nabil', '', '87442'),
(82, 1, 2, 2, '36696-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '1.5', 'ehsan', 'muhammad nabil', '', '4535'),
(84, 2, 1, 1, '11213-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '4.3', 'ehsan', 'siti yuliza', '', '31806'),
(85, 2, 1, 2, '15822-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '3.8', 'ehsan', 'usri yusra', '', '2308'),
(86, 1, 1, 1, '27266-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '2.5', 'ehsan', 'muhammad nabil', '', '43699'),
(87, 2, 1, 2, '85106-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '3.8', 'ehsan', 'siti yuliza', '', '95985'),
(88, 1, 1, 2, '33361-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '2', 'ehsan', 'usri yusra', '', '96699'),
(89, 2, 2, 1, '56421-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '3.8', 'ehsan', 'muhammad nabil', '', '45169'),
(90, 1, 1, 1, '93794-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '2.5', 'ehsan', 'siti yuliza', '', '65742'),
(91, 2, 1, 3, '6582-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '3.3', 'ehsan', 'usri yusra', '', '98709'),
(92, 1, 2, 2, '4222-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 1, '1.5', 'ehsan', 'siti yuliza', '', '32162'),
(93, 1, 1, 2, '27134-assigment1_B031710093.pdf', 'Siti Ehsan', '0172514025', '', '2019-05-27', 5, 5, '10', 'ehsan', 'muhammad nabil', '', '49147'),
(94, 2, 1, 1, '7434-assigment1_B031710093.pdf', 'hana jas', '0176037322', 'abgam56@gmail.com', '2019-05-28', 5, 1, '5.2', 'hana', 'muhammad nabil', '', '53048'),
(95, 1, 1, 1, '27435-assigment1_B031710093.pdf', 'syamsul amri', '0123370917', 'abgam56@gmail.com', '2019-05-28', 5, 1, '2.5', 'amri', 'usri yusra', '', '19518');

-- --------------------------------------------------------

--
-- Table structure for table `paymentcust`
--

CREATE TABLE `paymentcust` (
  `paycustID` int(10) NOT NULL,
  `payID` varchar(50) NOT NULL,
  `payamount` varchar(50) NOT NULL,
  `paycustomer` varchar(50) NOT NULL,
  `tarikh` date NOT NULL,
  `colour` int(50) NOT NULL,
  `binding` int(50) NOT NULL,
  `transparent` int(50) NOT NULL,
  `printamount` int(50) NOT NULL,
  `staff` varchar(50) NOT NULL,
  `rombak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentcust`
--

INSERT INTO `paymentcust` (`paycustID`, `payID`, `payamount`, `paycustomer`, `tarikh`, `colour`, `binding`, `transparent`, `printamount`, `staff`, `rombak`) VALUES
(1, '82psnfb7', '13.00', 'Siti Ehsan', '2019-01-06', 1, 2, 2, 1, 'usri yusra', ''),
(2, '30wmejzw', '13.00', 'Siti Ehsan', '2019-04-06', 2, 1, 1, 1, 'muhammad nabil', ''),
(3, 'k2emx8bp', '9.00', 'Siti Ehsan', '2019-01-11', 1, 2, 3, 1, 'siti yuliza', ''),
(4, '61jm9an9', '7.40', 'Siti Ehsan', '2019-01-11', 2, 1, 2, 1, 'usri yusra', ''),
(5, '57ca7ph0', '2.40', 'maroon 5', '2019-01-12', 1, 2, 1, 1, 'muhammad nabil', ''),
(6, '9hmbr2rj', '14.00', 'Siti Ehsan', '2019-05-14', 2, 1, 3, 1, 'siti yuliza', ''),
(7, 'jej4f9yh', '3.00', 'hana jas', '2019-01-18', 1, 2, 2, 1, 'usri yusra', ''),
(8, 'j0fmhqz1', '13.10', 'hana jas', '2019-02-18', 2, 1, 1, 1, 'muhammad nabil', ''),
(9, 'j8g0jq6p', '2.00', 'hana jas', '2019-01-19', 1, 2, 3, 1, 'siti yuliza', '25195'),
(10, '0gqhkcys', '4.90', 'hana jas', '2019-01-21', 1, 2, 2, 1, 'muhammad nabil', '58084'),
(11, 'jx5y10v1', '3.50', 'hana jas', '2019-01-24', 1, 2, 1, 1, 'usri yusra', '76597'),
(12, 'khzq2wpz', '2.00', 'hana jas', '2019-01-27', 1, 1, 2, 1, 'muhammad nabil', '31446'),
(13, '195r99w9', '1.50', 'hana jas', '2019-01-27', 1, 1, 3, 1, 'usri yusra', '2226'),
(14, 'ave5twje', '2.00', 'hana jas', '2019-01-27', 1, 1, 2, 1, 'muhammad nabil', '81390'),
(15, 'kyh0nmdp', '1.00', 'hana jas', '2019-01-27', 1, 2, 3, 1, 'muhammad nabil', '28460'),
(16, '5xj9ef6f', '1.50', 'hana jas', '2019-01-27', 1, 2, 2, 1, 'siti yuliza', '88416'),
(17, 'a8dtw7vq', '1.50', 'hana jas', '2019-01-27', 1, 2, 2, 1, 'muhammad nabil', '98948'),
(18, 'hvteag4b', '1.50', 'hana jas', '2019-01-27', 1, 2, 2, 1, 'siti yuliza', '96592'),
(19, '6jc2xv1g', '4.30', 'hana jas', '2019-01-28', 2, 1, 1, 1, 'usri yusra', '70841'),
(20, 'aetkjd47', '3.80', 'hana jas', '2019-02-28', 2, 1, 2, 1, 'siti yuliza', '49311'),
(21, 'nct6fhze', '3.30', 'hana jas', '2019-02-28', 2, 2, 2, 1, 'usri yusra', '77331'),
(22, 'kef33g73', '3.30', 'hana jas', '2019-02-28', 2, 2, 2, 1, 'muhammad nabil', '91768'),
(23, 'm3qj6rx2', '4.30', 'hana jas', '2019-02-28', 2, 1, 1, 1, 'siti yuliza', '60610'),
(24, '2g83ktjk', '3.80', 'hana jas', '2019-02-28', 2, 2, 1, 1, 'siti yuliza', '38697'),
(25, 'kqj1ck5e', '3.30', 'hana jas', '2019-02-28', 2, 2, 2, 1, 'usri yusra', '15167'),
(26, 'gt5gkkza', '3.30', 'hana jas', '2019-02-28', 2, 2, 2, 1, 'siti yuliza', '13102'),
(27, '8zq8kbfv', '3.30', 'hana jas', '2019-02-28', 2, 2, 2, 1, 'usri yusra', '62255'),
(28, 'qaetr8z6', '3.80', 'hana jas', '2019-02-28', 2, 2, 1, 1, 'muhammad nabil', '15464'),
(29, 'cgyvyry4', '3.80', 'hana jas', '2019-02-28', 2, 1, 2, 1, 'usri yusra', '87948'),
(30, 'ptr9bfgk', '3.80', 'hana jas', '2019-02-28', 2, 1, 2, 1, 'usri yusra', '91349'),
(31, 'hd5jaxym', '2.80', 'hana jas', '2019-02-28', 2, 2, 3, 1, 'muhammad nabil', '73932'),
(32, 'khrwnbf7', '2.00', 'khairul anwar', '2019-02-28', 1, 1, 2, 1, 'siti yuliza', '61854'),
(33, '99mc1jgt', '2.00', 'khairul anwar', '2019-02-28', 1, 1, 2, 1, 'siti yuliza', '68501'),
(34, 'a1kdb03q', '2.00', 'khairul anwar', '2019-02-28', 1, 1, 2, 1, 'siti yuliza', '20410'),
(35, 'e02g559x', '2.00', 'khairul anwar', '2019-02-28', 1, 2, 1, 1, 'usri yusra', '82689'),
(36, '93v7aatk', '2.00', 'khairul anwar', '2019-02-28', 1, 1, 2, 1, 'muhammad nabil', '76027'),
(37, 'cjkfgbts', '2.50', 'khairul anwar', '2019-02-28', 1, 1, 1, 1, 'usri yusra', '45013'),
(38, 'bvewkd1x', '2.00', 'khairul anwar', '2019-02-28', 1, 1, 2, 1, 'siti yuliza', '63715'),
(39, 'acrfrp2g', '1.50', 'khairul anwar', '2019-03-28', 1, 2, 2, 1, 'muhammad nabil', '3548'),
(40, '9vd1jyzv', '1.50', 'khairul anwar', '2019-03-28', 1, 2, 2, 1, 'muhammad nabil', '71486'),
(41, '5smee98y', '1.00', 'khairul anwar', '2019-03-28', 1, 2, 3, 1, 'siti yuliza', '40831'),
(42, 'a1kpjav4', '3.30', 'khairul anwar', '2019-03-28', 2, 2, 2, 1, 'usri yusra', '6427'),
(43, 'hb3eh6wx', '3.80', 'khairul anwar', '2019-03-28', 2, 1, 2, 1, 'muhammad nabil', '45096'),
(44, '2ypzkbsg', '3.30', 'khairul anwar', '2019-03-28', 2, 2, 2, 1, 'usri yusra', '53489'),
(45, '86qgj98q', '3.30', 'khairul anwar', '2019-03-28', 2, 2, 2, 1, 'muhammad nabil', '62944'),
(46, '5mx97sf1', '3.80', 'khairul anwar', '2019-03-28', 2, 2, 1, 1, 'muhammad nabil', '96075'),
(47, 'r32baa9b', '4.30', 'khairul anwar', '2019-03-28', 2, 1, 1, 1, 'siti yuliza', '77225'),
(48, '1pe6dm8v', '4.30', 'khairul anwar', '2019-03-28', 2, 1, 1, 1, 'usri yusra', '60232'),
(49, 'htszy0bg', '3.80', 'khairul anwar', '2019-03-28', 2, 2, 1, 1, 'muhammad nabil', '30920'),
(50, 'gs4svzb3', '4.30', 'khairul anwar', '2019-03-28', 2, 1, 1, 1, 'siti yuliza', '69966'),
(51, 'nxm9c37a', '4.30', 'khairul anwar', '2019-03-28', 2, 1, 1, 1, 'usri yusra', '42121'),
(52, 'm72www8n', '4.30', 'khairul anwar', '2019-03-28', 2, 1, 1, 1, 'siti yuliza', '44469'),
(53, 'nrnk1ab4', '3.80', 'khairul anwar', '2019-03-28', 2, 1, 2, 1, 'muhammad nabil', '1290'),
(54, 'chkb7cnc', '4.30', 'khairul anwar', '2019-03-28', 2, 1, 1, 1, 'usri yusra', '46215'),
(55, 'qj9tcrye', '3.30', 'khairul anwar', '2019-03-28', 2, 2, 2, 1, 'siti yuliza', '48767'),
(56, '2x22te5e', '3.30', 'khairul anwar', '2019-03-28', 2, 2, 2, 1, 'usri yusra', '96097'),
(57, 'j88e2bpw', '2.00', 'nasrul hakimi', '2019-03-28', 1, 1, 2, 1, 'siti yuliza', '51548'),
(58, '0ad3w4ta', '2.50', 'nasrul hakimi', '2019-04-28', 1, 1, 1, 1, 'siti yuliza', '81329'),
(59, '9xwcrbdy', '1.50', 'nasrul hakimi', '2019-04-28', 1, 1, 3, 1, 'muhammad nabil', '87998'),
(60, '4gh6w2y8', '2.00', 'nasrul hakimi', '2019-04-28', 1, 1, 2, 1, 'muhammad nabil', '95491'),
(61, '4ewa35a6', '2.00', 'nasrul hakimi', '2019-04-28', 1, 1, 2, 1, 'usri yusra', '53117'),
(62, '2vs496py', '2.50', 'nasrul hakimi', '2019-04-28', 1, 1, 1, 1, 'siti yuliza', '27577'),
(63, '0tfkgmef', '1.50', 'nasrul hakimi', '2019-04-28', 1, 2, 2, 1, 'muhammad nabil', '87442'),
(64, 'grampv8f', '3.80', 'nasrul hakimi', '2019-04-28', 2, 2, 1, 1, 'usri yusra', '47082'),
(65, '28m2zt5h', '3.80', 'nasrul hakimi', '2019-04-28', 2, 1, 2, 1, 'muhammad nabil', '88733'),
(66, '7p9xzskz', '3.80', 'nasrul hakimi', '2019-04-28', 2, 1, 2, 1, 'usri yusra', '28177'),
(67, 'r2b0x9bs', '3.30', 'nasrul hakimi', '2019-04-28', 2, 2, 2, 1, 'muhammad nabil', '92596'),
(68, 'fea3ymw5', '3.80', 'nasrul hakimi', '2019-04-28', 2, 1, 2, 1, 'usri yusra', '93471'),
(69, 'pfxk51qw', '4.30', 'nasrul hakimi', '2019-04-28', 2, 1, 1, 1, 'siti yuliza', '88705'),
(70, '4ewkag1k', '3.30', 'nasrul hakimi', '2019-04-28', 2, 2, 2, 1, 'usri yusra', '30746'),
(71, 'r416t66n', '3.80', 'nasrul hakimi', '2019-04-28', 2, 2, 1, 1, 'siti yuliza', '73174'),
(72, 'm68egdem', '3.30', 'nasrul hakimi', '2019-04-28', 2, 2, 2, 1, 'muhammad nabil', '75799'),
(73, 'jyq8xkgd', '3.80', 'nasrul hakimi', '2019-04-28', 2, 2, 1, 1, 'usri yusra', '82485'),
(74, 'gwk9rjdx', '3.80', 'nasrul hakimi', '2019-04-28', 2, 2, 1, 1, 'muhammad nabil', '41691'),
(75, 'jpes0zc3', '3.80', 'nasrul hakimi', '2019-04-28', 2, 2, 1, 1, 'siti yuliza', '76200'),
(76, 'c6zx8s68', '3.30', 'nasrul hakimi', '2019-04-28', 2, 2, 2, 1, 'usri yusra', '14539'),
(77, '340b1vme', '3.80', 'Siti Ehsan', '2019-05-28', 2, 2, 1, 1, 'muhammad nabil', '74179'),
(78, '35n7ts8g', '3.30', 'Siti Ehsan', '2019-05-28', 2, 2, 2, 1, 'siti yuliza', '85822'),
(79, 'hdyqy9gj', '4.30', 'Siti Ehsan', '2019-05-28', 2, 1, 1, 1, 'muhammad nabil', '19287'),
(80, 'h5p81nc8', '4.30', 'Siti Ehsan', '2019-05-28', 2, 1, 1, 1, 'usri yusra', '27546'),
(81, '2s8fzv21', '4.30', 'Siti Ehsan', '2019-05-28', 2, 1, 1, 1, 'siti yuliza', '31806'),
(82, 'ky1n75m8', '3.80', 'Siti Ehsan', '2019-05-28', 2, 1, 2, 1, 'usri yusra', '2308'),
(83, '4mt554v3', '3.80', 'Siti Ehsan', '2019-05-28', 2, 1, 2, 1, 'siti yuliza', '95985'),
(84, '4f8p54hk', '3.80', 'Siti Ehsan', '2019-05-28', 2, 2, 1, 1, 'muhammad nabil', '45169'),
(85, '0tq97vv6', '3.30', 'Siti Ehsan', '2019-05-28', 2, 1, 3, 1, 'usri yusra', '98709'),
(86, '9rcfrs3y', '2.50', 'Siti Ehsan', '2019-05-28', 1, 1, 1, 1, 'siti yuliza', '55666'),
(87, 'hdw1e8q7', '2.50', 'Siti Ehsan', '2019-05-28', 1, 1, 1, 1, 'usri yusra', '28115'),
(88, 'fwafehfw', '1.50', 'Siti Ehsan', '2019-05-28', 1, 2, 2, 1, 'usri yusra', '36261'),
(89, '58w6d6pq', '1.50', 'Siti Ehsan', '2019-05-28', 1, 2, 2, 1, 'siti yuliza', '48589'),
(90, '6d8dbvhy', '1.50', 'Siti Ehsan', '2019-05-28', 1, 2, 2, 1, 'muhammad nabil', '4535'),
(91, 'd5fv5wg2', '2.50', 'Siti Ehsan', '2019-05-28', 1, 1, 1, 1, 'muhammad nabil', '43699'),
(92, 'nnqqq58j', '2.00', 'Siti Ehsan', '2019-05-28', 1, 1, 2, 1, 'usri yusra', '96699'),
(93, 'ew1gwe64', '2.50', 'Siti Ehsan', '2019-05-28', 1, 1, 1, 1, 'siti yuliza', '65742'),
(94, '24w73fas', '1.50', 'Siti Ehsan', '2019-05-28', 1, 2, 2, 1, 'siti yuliza', '32162'),
(95, 'dsamh00t', '10.00', 'Siti Ehsan', '2019-05-28', 1, 1, 2, 5, 'muhammad nabil', '49147'),
(96, 'ka7xb1cp', '5.20', 'hana jas', '2019-05-28', 2, 1, 1, 1, 'muhammad nabil', '53048'),
(97, '97wkcwtv', '2.50', 'syamsul amri', '2019-05-28', 1, 1, 1, 1, 'usri yusra', '19518');

-- --------------------------------------------------------

--
-- Table structure for table `taskprint`
--

CREATE TABLE `taskprint` (
  `taskprintID` int(10) NOT NULL,
  `staffname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fileprint` varchar(50) NOT NULL,
  `tarikh` date NOT NULL,
  `warna` int(10) NOT NULL,
  `binding` int(10) NOT NULL,
  `transparent` int(10) NOT NULL,
  `statusprint` int(10) NOT NULL,
  `amount` int(50) NOT NULL,
  `rombak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskprint`
--

INSERT INTO `taskprint` (`taskprintID`, `staffname`, `email`, `fileprint`, `tarikh`, `warna`, `binding`, `transparent`, `statusprint`, `amount`, `rombak`) VALUES
(13, 'usri yusra', '', '42195-BITU_3973_PSM_1_SEM2_1819_V1.pdf', '2019-01-05', 2, 1, 1, 1, 1, '81622'),
(14, 'siti yuliza', '', '67821-Panduan Pelaksanaan PSM BM.pdf', '2019-01-05', 1, 2, 2, 1, 2, '45599'),
(15, 'muhammad nabil', '', '67821-Panduan Pelaksanaan PSM BM.pdf', '2019-01-06', 2, 2, 2, 1, 2, '45599'),
(16, 'usri yusra', '', '58869-Potential PSM Supervisor-Sem2-20182019.pdf', '2019-01-11', 1, 1, 1, 1, 1, '10453'),
(17, 'siti yuliza', '', '58064-Potential PSM Supervisor-Sem2-20182019.pdf', '2019-01-12', 1, 2, 1, 1, 1, '83013'),
(18, 'muhammad nabil', '', '98323-Thesis Writing Guideline 2018.pdf', '2019-01-14', 2, 2, 2, 1, 2, '75750'),
(19, 'siti yuliza', '', '98323-Thesis Writing Guideline 2018.pdf', '2019-01-14', 2, 2, 2, 1, 2, '75750'),
(20, 'muhammad nabil', '', '70995-Thesis Writing Guideline 2018.pdf', '2019-01-16', 2, 1, 2, 1, 1, '35528'),
(21, 'usri yusra', 'abgam56@gmail.com', '93057-PSM_1_Milestone_Sem_2_2018-2019.pdf', '2019-01-18', 1, 2, 2, 1, 1, '95731'),
(22, 'muhammad nabil', 'abgam56@gmail.com', '46667-Panduan Pelaksanaan PSM BM.pdf', '2019-01-18', 2, 1, 1, 1, 1, '57049'),
(23, 'siti yuliza', 'abgam56@gmail.com', '64730-Taklimat-PSM-BITS-5Dec2018.pdf', '2019-01-19', 1, 2, 3, 1, 1, '25195'),
(24, 'muhammad nabil', 'abgam56@gmail.com', '12684-Taklimat-PSM-BITS-5Dec2018.pdf', '2019-01-21', 1, 2, 2, 1, 1, '58084'),
(25, 'usri yusra', 'abgam56@gmail.com', '15164-assigment1_B031710093.pdf', '2019-01-24', 1, 2, 1, 1, 1, '76597'),
(26, 'usri yusra', 'abgam56@gmail.com', '48465-assigment1_B031710093.pdf', '2019-01-28', 2, 1, 1, 1, 1, '70841'),
(27, 'muhammad nabil', 'abgam56@gmail.com', '62822-assigment1_B031710093.pdf', '2019-01-28', 1, 1, 2, 1, 1, '31446'),
(28, 'siti yuliza', 'abgam56@gmail.com', '13526-assigment1_B031710093.pdf', '2019-01-28', 2, 1, 2, 1, 1, '49311'),
(29, 'usri yusra', 'abgam56@gmail.com', '72729-assigment1_B031710093.pdf', '2019-01-28', 2, 2, 2, 1, 1, '77331'),
(30, 'muhammad nabil', 'abgam56@gmail.com', '99694-assigment1_B031710093.pdf', '2019-01-28', 2, 2, 2, 1, 1, '91768'),
(31, 'siti yuliza', 'abgam56@gmail.com', '66839-assigment1_B031710093.pdf', '2019-01-28', 2, 1, 1, 1, 1, '60610'),
(32, 'usri yusra', 'abgam56@gmail.com', '31065-assigment1_B031710093.pdf', '2019-01-28', 1, 1, 3, 1, 1, '2226'),
(33, 'muhammad nabil', 'abgam56@gmail.com', '88864-assigment1_B031710093.pdf', '2019-02-28', 1, 1, 2, 1, 1, '81390'),
(34, 'siti yuliza', 'abgam56@gmail.com', '24757-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 1, 1, 1, '38697'),
(35, 'usri yusra', 'abgam56@gmail.com', '60753-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 2, 1, 1, '15167'),
(36, 'muhammad nabil', 'abgam56@gmail.com', '92682-assigment1_B031710093.pdf', '2019-02-28', 1, 2, 3, 1, 1, '28460'),
(37, 'siti yuliza', 'abgam56@gmail.com', '83585-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 2, 1, 1, '13102'),
(38, 'usri yusra', 'abgam56@gmail.com', '19060-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 2, 1, 1, '62255'),
(39, 'muhammad nabil', 'abgam56@gmail.com', '3406-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 1, 1, 1, '15464'),
(40, 'siti yuliza', 'abgam56@gmail.com', '39535-assigment1_B031710093.pdf', '2019-02-28', 1, 2, 2, 1, 1, '88416'),
(41, 'usri yusra', 'abgam56@gmail.com', '23921-assigment1_B031710093.pdf', '2019-02-28', 2, 1, 2, 1, 1, '87948'),
(42, 'muhammad nabil', 'abgam56@gmail.com', '97975-assigment1_B031710093.pdf', '2019-02-28', 1, 2, 2, 1, 1, '98948'),
(43, 'siti yuliza', 'abgam56@gmail.com', '11588-assigment1_B031710093.pdf', '2019-02-28', 1, 2, 2, 1, 1, '96592'),
(44, 'usri yusra', 'abgam56@gmail.com', '65324-assigment1_B031710093.pdf', '2019-02-28', 2, 1, 2, 1, 1, '91349'),
(45, 'muhammad nabil', 'abgam56@gmail.com', '22491-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 3, 1, 1, '73932'),
(46, 'siti yuliza', '', '65758-assigment1_B031710093.pdf', '2019-02-28', 1, 1, 2, 1, 1, '61854'),
(47, 'usri yusra', '', '38473-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 2, 1, 1, '6427'),
(48, 'muhammad nabil', '', '99205-assigment1_B031710093.pdf', '2019-02-28', 2, 1, 2, 1, 1, '45096'),
(49, 'siti yuliza', '', '46029-assigment1_B031710093.pdf', '2019-02-28', 1, 1, 2, 1, 1, '68501'),
(50, 'usri yusra', '', '65796-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 2, 1, 1, '53489'),
(51, 'muhammad nabil', '', '49661-assigment1_B031710093.pdf', '2019-02-28', 2, 2, 2, 1, 1, '62944'),
(52, 'siti yuliza', '', '3474-assigment1_B031710093.pdf', '2019-03-28', 1, 1, 2, 1, 1, '20410'),
(53, 'usri yusra', '', '5050-assigment1_B031710093.pdf', '2019-03-28', 1, 2, 1, 1, 1, '82689'),
(54, 'muhammad nabil', '', '80407-assigment1_B031710093.pdf', '2019-03-28', 2, 2, 1, 1, 1, '96075'),
(55, 'siti yuliza', '', '45890-assigment1_B031710093.pdf', '2019-03-28', 2, 1, 1, 1, 1, '77225'),
(56, 'usri yusra', '', '35356-assigment1_B031710093.pdf', '2019-03-28', 2, 1, 1, 1, 1, '60232'),
(57, 'muhammad nabil', '', '17597-assigment1_B031710093.pdf', '2019-03-28', 2, 2, 1, 1, 1, '30920'),
(58, 'siti yuliza', '', '58789-assigment1_B031710093.pdf', '2019-03-28', 2, 1, 1, 1, 1, '69966'),
(59, 'usri yusra', '', '24114-assigment1_B031710093.pdf', '2019-03-28', 2, 1, 1, 1, 1, '42121'),
(60, 'muhammad nabil', '', '98201-assigment1_B031710093.pdf', '2019-03-28', 1, 1, 2, 1, 1, '76027'),
(61, 'siti yuliza', '', '9686-assigment1_B031710093.pdf', '2019-03-28', 2, 1, 1, 1, 1, '44469'),
(62, 'usri yusra', '', '95982-assigment1_B031710093.pdf', '2019-03-28', 1, 1, 1, 1, 1, '45013'),
(63, 'muhammad nabil', '', '86475-assigment1_B031710093.pdf', '2019-03-28', 2, 1, 2, 1, 1, '1290'),
(64, 'siti yuliza', '', '90691-assigment1_B031710093.pdf', '2019-03-28', 1, 1, 2, 1, 1, '63715'),
(65, 'usri yusra', '', '52880-assigment1_B031710093.pdf', '2019-03-28', 2, 1, 1, 1, 1, '46215'),
(66, 'muhammad nabil', '', '52130-assigment1_B031710093.pdf', '2019-03-28', 1, 2, 2, 1, 1, '3548'),
(67, 'siti yuliza', '', '55472-assigment1_B031710093.pdf', '2019-03-28', 2, 2, 2, 1, 1, '48767'),
(68, 'usri yusra', '', '82311-assigment1_B031710093.pdf', '2019-03-28', 2, 2, 2, 1, 1, '96097'),
(69, 'muhammad nabil', '', '60188-assigment1_B031710093.pdf', '2019-03-28', 1, 2, 2, 1, 1, '71486'),
(70, 'siti yuliza', '', '78494-assigment1_B031710093.pdf', '2019-03-28', 1, 2, 3, 1, 1, '40831'),
(71, 'usri yusra', '', '91676-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 1, 1, 1, '47082'),
(72, 'muhammad nabil', '', '68362-assigment1_B031710093.pdf', '2019-04-28', 2, 1, 2, 1, 1, '88733'),
(73, 'siti yuliza', '', '93333-assigment1_B031710093.pdf', '2019-04-28', 1, 1, 2, 1, 1, '51548'),
(74, 'usri yusra', '', '19846-assigment1_B031710093.pdf', '2019-04-28', 2, 1, 2, 1, 1, '28177'),
(75, 'muhammad nabil', '', '51517-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 2, 1, 1, '92596'),
(76, 'siti yuliza', '', '39344-assigment1_B031710093.pdf', '2019-04-28', 1, 1, 1, 1, 1, '81329'),
(77, 'usri yusra', '', '72689-assigment1_B031710093.pdf', '2019-04-28', 2, 1, 2, 1, 1, '93471'),
(78, 'muhammad nabil', '', '47749-assigment1_B031710093.pdf', '2019-04-28', 1, 1, 3, 1, 1, '87998'),
(79, 'siti yuliza', '', '34654-assigment1_B031710093.pdf', '2019-04-28', 2, 1, 1, 1, 1, '88705'),
(80, 'usri yusra', '', '8534-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 2, 1, 1, '30746'),
(81, 'muhammad nabil', '', '7831-assigment1_B031710093.pdf', '2019-04-28', 1, 1, 2, 1, 1, '95491'),
(82, 'siti yuliza', '', '49866-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 1, 1, 1, '73174'),
(83, 'usri yusra', '', '97657-assigment1_B031710093.pdf', '2019-04-28', 1, 1, 2, 1, 1, '53117'),
(84, 'muhammad nabil', '', '38827-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 2, 1, 1, '75799'),
(85, 'siti yuliza', '', '99199-assigment1_B031710093.pdf', '2019-04-28', 1, 1, 1, 1, 1, '27577'),
(86, 'usri yusra', '', '91836-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 1, 1, 1, '82485'),
(87, 'muhammad nabil', '', '29023-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 1, 1, 1, '41691'),
(88, 'siti yuliza', '', '62181-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 1, 1, 1, '76200'),
(89, 'usri yusra', '', '35658-assigment1_B031710093.pdf', '2019-04-28', 2, 2, 2, 1, 1, '14539'),
(90, 'muhammad nabil', '', '83590-assigment1_B031710093.pdf', '2019-05-28', 1, 2, 2, 1, 1, '87442'),
(91, 'siti yuliza', '', '30211-assigment1_B031710093.pdf', '2019-05-28', 1, 1, 1, 1, 1, '55666'),
(92, 'usri yusra', '', '47970-assigment1_B031710093.pdf', '2019-05-28', 1, 1, 1, 1, 1, '28115'),
(93, 'muhammad nabil', '', '13194-assigment1_B031710093.pdf', '2019-05-28', 2, 2, 1, 1, 1, '74179'),
(94, 'siti yuliza', '', '9748-assigment1_B031710093.pdf', '2019-05-28', 2, 2, 2, 1, 1, '85822'),
(95, 'usri yusra', '', '55738-assigment1_B031710093.pdf', '2019-05-28', 1, 2, 2, 1, 1, '36261'),
(96, 'muhammad nabil', '', '68750-assigment1_B031710093.pdf', '2019-05-28', 2, 1, 1, 1, 1, '19287'),
(97, 'siti yuliza', '', '9706-assigment1_B031710093.pdf', '2019-05-28', 1, 2, 2, 1, 1, '48589'),
(98, 'usri yusra', '', '30820-assigment1_B031710093.pdf', '2019-05-28', 2, 1, 1, 1, 1, '27546'),
(99, 'muhammad nabil', '', '36696-assigment1_B031710093.pdf', '2019-05-28', 1, 2, 2, 1, 1, '4535'),
(100, 'siti yuliza', '', '11213-assigment1_B031710093.pdf', '2019-05-28', 2, 1, 1, 1, 1, '31806'),
(101, 'usri yusra', '', '15822-assigment1_B031710093.pdf', '2019-05-28', 2, 1, 2, 1, 1, '2308'),
(102, 'muhammad nabil', '', '27266-assigment1_B031710093.pdf', '2019-05-28', 1, 1, 1, 1, 1, '43699'),
(103, 'siti yuliza', '', '85106-assigment1_B031710093.pdf', '2019-05-28', 2, 1, 2, 1, 1, '95985'),
(104, 'usri yusra', '', '33361-assigment1_B031710093.pdf', '2019-05-28', 1, 1, 2, 1, 1, '96699'),
(105, 'muhammad nabil', '', '56421-assigment1_B031710093.pdf', '2019-05-28', 2, 2, 1, 1, 1, '45169'),
(106, 'siti yuliza', '', '93794-assigment1_B031710093.pdf', '2019-05-28', 1, 1, 1, 1, 1, '65742'),
(107, 'usri yusra', '', '6582-assigment1_B031710093.pdf', '2019-05-28', 2, 1, 3, 1, 1, '98709'),
(108, 'muhammad nabil', '', '4222-assigment1_B031710093.pdf', '2019-05-28', 1, 2, 2, 1, 1, '32162'),
(109, 'siti yuliza', '', '4222-assigment1_B031710093.pdf', '2019-05-28', 1, 2, 2, 1, 1, '32162'),
(110, 'muhammad nabil', '', '27134-assigment1_B031710093.pdf', '2019-05-28', 1, 1, 2, 1, 5, '49147'),
(111, 'muhammad nabil', 'abgam56@gmail.com', '7434-assigment1_B031710093.pdf', '2019-05-28', 2, 1, 1, 1, 1, '53048'),
(112, 'usri yusra', 'abgam56@gmail.com', '27435-assigment1_B031710093.pdf', '2019-05-28', 1, 1, 1, 1, 1, '19518');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usernumber` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullname`, `email`, `usernumber`, `username`, `password`, `account`) VALUES
(10, 'maroon 5', '', '01233947234', 'maroon', '32f6b24d3f9bec18707bca216710c657', 0),
(11, 'james brown', '', '1245421', 'james', 'e99a18c428cb38d5f260853678922e03', 0),
(12, 'amrise tonako', '', '019876623', 'admin', '32f6b24d3f9bec18707bca216710c657', 1),
(16, 'Roberto hog', '', '12397', 'therock', 'abc123', 0),
(17, 'Roberto ', '', '123974', 'therock', 'abc123', 0),
(18, 'Hantu', '', '1111234659', 'Hantu', 'Hantu', 0),
(19, 'Siti Ehsan', '', '0172514025', 'ehsan', '32f6b24d3f9bec18707bca216710c657', 0),
(20, 'syafiqah boroi', '', '60', 'syafiq', '3c204c54c8e3e8e6b972093a40a5d00c', 0),
(21, 'syafiqah boroi', '', '60', 'capiq', '3c204c54c8e3e8e6b972093a40a5d00c', 0),
(22, 'acroi koroi', '', '54', 'acoy', '82babe61c7c9699c7cdd1016c63c6297', 0),
(23, 'roberto hog', '', '2147483647', 'hog', '20ddb2cf700a0e875fa1322fa739f6a0', 0),
(24, 'roberto hog', '', '1231231231', 'fad', '1c475ba005f5ef7e00b7fc867b195e57', 0),
(25, 'siti zalikh', '', '9876543', 'zalikh', '32f6b24d3f9bec18707bca216710c657', 0),
(26, 'siti zalikh', '', '60', 'sitt', '32f6b24d3f9bec18707bca216710c657', 0),
(27, 'siti zalikh', '', '600987654', 'lkjhd', '32f6b24d3f9bec18707bca216710c657', 0),
(28, 'siti zalikh', '', '60123495', 'mnbvasdf', '32f6b24d3f9bec18707bca216710c657', 0),
(29, 'nasrul hakimi', '', '0162947534', 'nasrul', '32f6b24d3f9bec18707bca216710c657', 0),
(30, 'usri yusra', '', '0126437618', 'usri', '32f6b24d3f9bec18707bca216710c657', 2),
(33, 'muhammad nabil', '', '0132105648', 'nabil', '32f6b24d3f9bec18707bca216710c657', 2),
(35, 'siti yuliza', '', '0163688867', 'yuliza', '32f6b24d3f9bec18707bca216710c657', 2),
(36, 'khairul anwar', '', '0149823427', 'anwar', '32f6b24d3f9bec18707bca216710c657', 0),
(37, 'hana jas', 'abgam56@gmail.com', '0176037322', 'hana', '32f6b24d3f9bec18707bca216710c657', 0),
(38, 'syamsul amri', 'abgam56@gmail.com', '0123370917', 'amri', '32f6b24d3f9bec18707bca216710c657', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custorder`
--
ALTER TABLE `custorder`
  ADD PRIMARY KEY (`custorderID`);

--
-- Indexes for table `paymentcust`
--
ALTER TABLE `paymentcust`
  ADD PRIMARY KEY (`paycustID`);

--
-- Indexes for table `taskprint`
--
ALTER TABLE `taskprint`
  ADD PRIMARY KEY (`taskprintID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custorder`
--
ALTER TABLE `custorder`
  MODIFY `custorderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `paymentcust`
--
ALTER TABLE `paymentcust`
  MODIFY `paycustID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `taskprint`
--
ALTER TABLE `taskprint`
  MODIFY `taskprintID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
