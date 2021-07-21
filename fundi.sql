-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 04:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundi`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `reciver` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `reciver`, `msg`, `time`, `status`) VALUES
(1, 'alpha', 'alpha', 'hellow boys', '2021-07-20 07:07:33', NULL),
(2, 'alpha', 'alpha', 'hellow boys', '2021-07-20 07:11:30', NULL),
(3, 'alpha', 'alpha', 'vp hukooo', '2021-07-20 07:11:43', NULL),
(4, 'alpha', 'alpha', 'leta mpya boss', '2021-07-20 07:12:23', NULL),
(5, 'alpha', 'alpha', 'leta mpya boss', '2021-07-20 07:13:18', NULL),
(6, 'alpha', 'alpha', 'inakuaje mkuu', '2021-07-20 07:13:37', NULL),
(7, 'alpha', 'alpha', 'nakuja hapoo', '2021-07-20 07:14:07', NULL),
(8, 'alpha', 'alpha', 'duhh', '2021-07-20 07:14:27', NULL),
(9, 'alpha', 'alpha', 'duhh', '2021-07-20 07:16:03', NULL),
(10, 'alpha', 'alpha', 'alpha joee', '2021-07-20 07:20:58', NULL),
(11, 'alpha', 'alpha', 'alpha joee', '2021-07-20 07:21:09', NULL),
(12, 'alpha', 'alpha', 'alpha joee', '2021-07-20 07:22:21', NULL),
(13, 'alpha', 'alpha', 'alpha joee', '2021-07-20 07:29:10', NULL),
(14, 'Khan Musa', 'alpha', 'broo vip', '2021-07-20 07:38:50', NULL),
(15, 'Khan Musa', 'alpha', 'utakuja', '2021-07-20 07:38:57', NULL),
(16, 'Khan Musa', 'alpha', 'utakuja', '2021-07-20 07:39:29', NULL),
(17, 'Khan Musa', 'alpha', 'utakuja', '2021-07-20 07:39:34', NULL),
(18, 'Dangua Danse', 'Dangua Danse', 'hello', '2021-07-20 17:45:48', NULL),
(19, 'Dangua Danse', 'Dangua Danse', 'njoo', '2021-07-20 17:46:00', NULL),
(20, 'James maro', 'Nuru Khan', 'fundi Nuru mambo', '2021-07-21 02:05:29', NULL),
(21, 'James maro', 'Nuru Khan', 'fundi Nuru mambo', '2021-07-21 02:05:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fundi`
--

CREATE TABLE `fundi` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `payMean` varchar(15) NOT NULL,
  `accNo` varchar(20) NOT NULL,
  `receipt` varchar(20) NOT NULL,
  `cartegory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundi`
--

INSERT INTO `fundi` (`id`, `username`, `payMean`, `accNo`, `receipt`, `cartegory`) VALUES
(1, 'alpha', 'Visa', 'NHJ32132', '123sxcdsjad', 'Bomba'),
(2, 'Pani Khun', 'NMB', 'BGT23213', 'NHGk23213', 'Bomba'),
(3, 'James Muro', 'NMB', 'JKKJ23213', '5623sdsd', 'Bomba'),
(4, 'Ben Malaki', 'Master Card', 'VBBJBM2132', 'BNBB3213', 'Gari'),
(5, 'Bujo john', 'CRDB', 'HGHJ34234234', '432432', 'Bomba'),
(6, 'Dan Bonge', 'CRDB', 'wqe&3423467', 'BHG432134', 'Bomba'),
(7, 'manase Kaya', 'PayPal', 'BNHFHJ3223', 'sdsa23213', 'Umeme'),
(8, 'Benja Min', 'PayPal', 'sdsad', 'ssad', 'Umeme'),
(9, 'Johnson Uma', 'PayPal', 'sdadsads', 'sadsad', 'Umeme'),
(10, 'Nuru Khan', 'CRDB', 'weqwe', 'sdadsa', 'Umeme'),
(11, 'Jokopae Bin', 'PayPal', 'sdsad', 'erewr34', 'Gari'),
(12, 'Kaparo don', 'CRDB', 'dsadsa321', 'yuyttr34', 'Bomba'),
(13, 'kakulu Boy', 'CRDB', '32131sdad', 'sdsads', 'Gari'),
(14, 'Bash Kan', 'PayPal', 'dsadas3423', '2323', 'Gari'),
(15, 'John Bon', 'Master Card', 'dsadas23213', 'sdsad3213', 'Rangi'),
(16, 'Jafet Kabesa', 'CRDB', 'sdsad23213', 'dsad23121', 'Rangi'),
(17, 'Dunga Bana', 'CRDB', 'sds2323', 'sadwe32', 'Rangi'),
(18, 'banga Boy', 'NMB', 'BNGTRF3213', 'sad342', 'Rangi'),
(19, 'Kipa Bila', 'PayPal', 'sdsd3432', '433432sere', 'TV'),
(20, 'Bonnge Boa', 'NMB', 'sdsad44554', 'sdsad4324', 'Bomba'),
(21, 'Java den', 'CRDB', 'dsas3424', 'dsfds3432', 'TV'),
(22, 'Justn Beb', 'PayPal', 'dsfdd3432', 'df4343fd', 'Bomba'),
(23, 'Dulla Boi', 'PayPal', 'sdsad676', 'ghjhg6757', 'TV'),
(24, 'Panya Makota', 'NMB', 'jhhhgty5654', 'bnvn5435', 'TV'),
(25, 'Chichi Bampa', 'PayPal', 'dsfsd34324', 'kkjl4543', 'Bomba'),
(26, 'Kabarage Bufa', 'PayPal', 'NMJH32324324', 'BMNBM3423432', 'Simu'),
(27, 'Aslay Mucha', 'CRDB', 'dfsf34324', 'dsfds213', 'Simu'),
(28, 'Den Nkuntu', 'PayPal', 'dsfsd34234', 'dsfdsf3432', 'Simu'),
(29, 'Jojo Bonge', 'PayPal', 'fddsf3432', 'dsfsdf23213', 'Simu'),
(30, 'Radio Mbao', 'CRDB', 'NMNJdf4535', 'fds4535', 'Radio'),
(31, 'Pangu Nchele', 'CRDB', 'dsfdsf45435', 'fdsfs435435', 'Radio'),
(32, 'Pania Beni', 'NBC', 'fsdf45325', 'fgdsg345324', 'Radio'),
(33, 'Dunga Radio', 'CRDB', 'fgsdg43345345', 'NHGdfds45435', 'Bomba'),
(34, 'Benko Bampa', 'NMB', 'dfdsf45345', 'dsfdsf4543', 'Radio'),
(35, 'Bonge Maredio', 'Master Card', '4543543', 'fdsgd435345', 'Radio'),
(36, 'Kosi Majuu', 'NMB', '5345dsfsf', 'fdsfds4535', 'Ujenzi'),
(37, 'Eric fegi', 'CRDB', 'fddsf453534', 'dfdsf5345', 'Ujenzi'),
(38, 'Bakoni Gonale', 'NMB', 'dfsdf34324', 'dsfdsfsd4535', 'Ujenzi'),
(39, 'wania Boreka', 'PayPal', 'dfdsfds45353', '34324dsfdfs', 'Bomba'),
(40, 'Bekari Beka', 'CRDB', 'dfdsfds4535', 'dfdsf43535', 'Ujenzi'),
(41, 'Macomputer Don', 'NMB', 'dsfdsf', 'dsfsd34324', 'Computer'),
(42, 'Ferishan Fundee', 'NMB', 'dfdsf324324', 'dfdsf34324', 'Computer'),
(43, 'Kelly Rubango', 'Visa', '534543free', 'sdfsdf234234', 'Computer'),
(44, 'Kassan Hosan', 'Visa', 'dfdsfds3432', 'sdfsd453', 'Computer'),
(45, 'Mapana Mbigo', 'CRDB', 'dfsf45345', 'dsfds', 'Dish'),
(46, 'Besan Makura', 'Visa', 'dsfsd43253', 'dfgdf45435', 'Dish'),
(47, 'Manyama Paul', 'PayPal', 'sd435325', 'sdfsdf34543', 'Dish'),
(48, 'Yasin Mabange', 'PayPal', 'sdfdsf43543', 'dsfds32423', 'Dish'),
(49, 'Mwafua juma', 'CRDB', 'fgg4535', 'fgdf4543', 'Nguo'),
(50, 'Petronia msuli', 'PayPal', 'fgfdg43543', 'fgfd4353', 'Nguo'),
(51, 'Besenga Budo', 'PayPal', 'dgfdsf43534', 'dsfgds4534', 'Nguo'),
(52, 'Dangua Danse', 'PayPal', 'fgdg43534', 'sdsgfg43534', 'Nguo'),
(53, 'James james', 'NMB', 'dfdf343434', 'ffsd4535', 'Friji'),
(54, 'Panasonic Mtwe', 'NBC', 'dsfds43535', 'sdfd435', 'Friji'),
(55, 'Maua Petro', 'PayPal', 'dfds34324', 'dsfds3432', 'Friji'),
(56, 'Msonia Msomali', 'NMB', 'fgfdgdf4543', 'dfdsfsd323', 'Friji'),
(57, 'Mee Bure', 'PayPal', 'NVHsd34324', 'sdfdsf3432', 'Funguo'),
(58, 'Jangu Key', 'Visa', 'dsfdsf4535', 'dfsdf4353', 'Funguo'),
(59, 'Jema Funguo', 'NBC', 'fdsfsd5435', 'dsfds34234', 'Funguo'),
(60, 'Justine mafunguo', 'PayPal', 'dfsd435435', 'sdsf34324', 'Funguo'),
(61, 'James Jackson', 'PayPal', 'fsdfsd45435', 'sdf54324', 'Camera'),
(62, 'Msonia cameras', 'Visa', 'dfdas34324', 'fgd45345', 'Camera'),
(63, 'chirangi Kena', 'PayPal', 'sddff534', 'fdsfs45345', 'Camera'),
(64, 'Jombilai Mdeku', 'Visa', 'sdsad5345', 'dsfsd4543543', 'Camera'),
(65, 'Betto Njumu', 'NMB', 'dfddsf34324', 'fsdfsd45234', 'Battery'),
(66, 'Pampula Dole', 'PayPal', 'dsfds45324', 'sddfds453', 'Battery'),
(67, 'Petro Battery', 'PayPal', 'dfds45234', 'dfsa345324', 'Battery'),
(68, 'Menson Mjumbe', 'NMB', 'fdgfdg435345', 'dsfsd34234', 'Battery'),
(69, 'Mapaipu Ngumu', 'PayPal', 'dfdsf342432', 'dfdsf34324', 'Pipe'),
(70, 'Hamis mapipe', 'PayPal', 'dfds67667', 'dfdsf676', 'Pipe'),
(71, 'Bamboo bycle', 'NMB', 'sdsf343', 'sdfsd4532', 'Bomba'),
(72, 'Kagera Bycle', 'PayPal', 'sfsd43543', 'fgfdg435', 'Baiskeli'),
(73, 'jango baiskeli', 'PayPal', 'fggret4534', 'dfds4535', 'Baiskeli'),
(74, 'Pango Boy', 'PayPal', 'fdsf3432', 'ddfds5434', 'Baiskeli'),
(75, 'Jerad Bonge', 'CRDB', 'fgfd4534', 'dfds5435', 'Bomba'),
(76, 'Paul nungura', 'CRDB', 'ret45', 'fdsff45', 'Baiskeli'),
(77, 'jason Kamara', 'Visa', 'fdsf4324', 'sfdsdf', 'PikiPiki'),
(78, 'Juma kaparato', 'CRDB', 'sdfs43', 'dfds343', 'PikiPiki'),
(79, 'Musa Boda', 'PayPal', 'dfsd3432', 'sdfds34', 'PikiPiki'),
(80, 'Maboda boda', 'Visa', 'dsf4324', 'dsfds43535', 'PikiPiki'),
(81, 'Choma Vyuma', 'CRDB', 'dfdsf4535', 'sdfds4543', 'Welding'),
(82, 'Mageti Design', 'NMB', 'dfds454', 'dsf543', 'Welding'),
(83, 'Hamisa Vyuma', 'Visa', 'dfds34324', 'fds4535', 'Welding'),
(84, 'Wachomereaji Camp', 'PayPal', 'fdgfdg435345', 'fdsff45', 'Welding'),
(85, 'Mitungi Boy', 'Visa', 'dsfds43535', 'ghjhg6757', 'Gas'),
(86, 'Maliko mamba', 'Master Card', 'sd22', 'dsa232', 'Gas'),
(87, 'Gangmala Gas', 'Visa', 'ghhh4324', 'dsfsdf23213', 'Gas'),
(88, 'Orxy Repair', 'NMB', 'HGHJ34234234', 'erer34324', 'Gas'),
(89, 'Viage kwetu', 'PayPal', 'erewdfds', 'cxvxsdf343', 'Vigae'),
(90, 'Karim Vigae', 'NBC', 'fsafsdr3324', 'sadfsa343', 'Vigae'),
(91, 'Kigae kimoja', 'NMB', 'erewr543543', 'dfdsf34324', 'Vigae'),
(92, 'Vigae Limited', 'CRDB', 'dsf43324', 'dsf34324', 'Vigae'),
(93, 'Khan Pipes', 'PayPal', 'dfsadf', 'weer', 'Pipe'),
(94, 'Mirija Pipe', 'NMB', 'fsdf4324', 'dfdsf4324', 'Pipe'),
(95, 'Michael mataa', 'NMB', 'fdsfdsf', 'dfdsfds', 'Taa'),
(96, 'taa limited', 'CRDB', 'fdsfsd435', 'dsfdfsd43', 'Taa'),
(97, 'Jeremia bulbs', 'CRDB', 'fsdf3434', 'dsfdsf43534', 'Taa'),
(98, 'Paniel Jmaes', 'Visa', 'erewr34324', 'fdsfdsf343', 'Taa'),
(99, 'james sofa', 'NMB', 'sasdsadsad', 'q323sdfsf', 'Kochi'),
(100, 'Kochi limited', 'CRDB', 'dsdasd3434', 'fsdfdsfd', 'Kochi'),
(101, 'Mafwele Sofa', 'Master Card', 'sdfdsf4324', 'dsfdsf3443', 'Kochi'),
(102, 'Masofa Bukoba', 'PayPal', 'dfdsf', 'dsdsfsdf', 'Bomba'),
(103, 'Nasoro masofa', 'CRDB', 'xcxc4324543', 'dfsdef4543', 'Kochi'),
(104, 'Juma Mitumbwi', 'NMB', 'dsfdsf', 'fsfdsf', 'Boat'),
(105, 'Masami Boats', 'PayPal', 'dsfsdf434324', 'fds34324', 'Boat'),
(106, 'Tengule Mashua', 'CRDB', 'dssadd', 'sasdsd', 'Boat'),
(107, 'Mpemba Ngarawa', 'PayPal', 'dfsdafs', 'sdsad3213', 'Boat'),
(108, 'Baunsa Cam', 'NMB', 'sdsfdsf343243', 'dfdsf', 'CCTV'),
(109, 'Camera man', 'PayPal', 'sdsfs3434', '3dsfdsf34', 'CCTV'),
(110, 'Mood cameras', 'PayPal', 'dsfdsf', 'dsfsdf23213', 'CCTV'),
(111, 'bunju Boy', 'PayPal', 'fhsdfsd', 'dsdfdsf', 'CCTV'),
(112, 'Basha Mechanic', 'PayPal', 'dfsad343432', 'sdsad', 'ATM'),
(113, 'NMB fund', 'NMB', 'dfdsf', 'dsfds', 'ATM'),
(114, 'Pamela ATM', 'PayPal', 'sdsads', 'sdsad', 'ATM'),
(115, 'CRDB Jango', 'CRDB', 'sadasd', 'sdsad3213', 'ATM'),
(116, 'Roja Malift', 'PayPal', 'dads', 'sdsad', 'Eleveta'),
(117, 'Panda Lifts', 'NMB', 'sdsa', 'sdsad3213', 'Eleveta'),
(118, 'Jongoo Lifter', 'PayPal', 'sdfdsf', 'dfdsf4324', 'Eleveta'),
(119, 'Musa malift', 'CRDB', 'sdsad', 'sdasd', 'Eleveta'),
(120, 'Male mbao', 'Master Card', 'ewrewr', 'erew', 'Mbao'),
(121, 'Sele Mala', 'Visa', 'dfdsf', 'dsfdsf43534', 'Mbao'),
(122, 'Pamo Wooder', 'PayPal', 'dfdf', 'dfdsf4324', 'Mbao'),
(123, 'sungura mambao', 'CRDB', 'sdad', 'sdsad', 'Mbao'),
(124, 'Pengo mapipa', 'Visa', 'dsfds43324', 'dfsdfsf34324', 'Plastic'),
(125, 'Hunga Pambo', 'Master Card', 'rewrer', 'dsfsdf3432', 'Plastic'),
(126, 'Dengo musa', 'NMB', 'dcsf', 'dsfdsf', 'Plastic'),
(127, 'Tembo plastic', 'CRDB', 'sdsadsad', 'sdsad', 'Plastic'),
(128, 'Madaraja Leo', 'Visa', 'dsads', 'sdsad3213', 'Daraja'),
(129, 'Juma Madaraja', 'Visa', 'dsfdsf', 'dfsad', 'Daraja'),
(130, 'Kidumu Bridges', 'NMB', 'sdsadsad', 'sadsad', 'Daraja'),
(131, 'Peter Daraja', 'CRDB', 'sdasdq3213', 'sdsadsad', 'Daraja'),
(132, 'Juma Saa', 'NBC', 'sadsad', 'sadsad', 'Saa'),
(133, 'Hamisa Masaa', 'PayPal', 'sdsad', 'sdsad', 'Saa'),
(134, 'xaa exavery', 'PayPal', 'sasd', 'sdsd', 'Saa'),
(135, 'Kaparoto muee', 'PayPal', 'sdsad44554', 'xcxc', 'Saa'),
(136, 'Konkwa Muno', 'Visa', 'sdsadsa', 'sdsada', 'Viatu'),
(137, 'huruma Kiatu', 'NMB', 'sdfdsf', '3erewr', 'Bomba'),
(138, 'sina Lato', 'PayPal', 'sadsad', 'sdsd', 'Viatu'),
(139, 'Kiatu Maneno', 'PayPal', 'sas', 'asas', 'Viatu'),
(140, 'Boot Repair', 'PayPal', 'qwewqe', 'wewqe', 'Viatu'),
(141, 'Mota mtambo', 'NMB', 'dsfsdf', 'fsdfsdf', 'Mota'),
(142, 'Gongalai guba', 'PayPal', 'fsdfdsf', 'dsdfdsf', 'Mota'),
(143, 'Juma mota', 'PayPal', 'wqewqewe', 'weqw', 'Mota'),
(144, 'Punga Mkomota', 'Master Card', 'sdsasdsad', 'sdsd6788', 'Mota'),
(145, 'Mchimbi choo', 'PayPal', 'sdadsa', 'sdd', 'Choo'),
(146, 'Vyoo Limited', 'PayPal', 'sadsa', 'sadsa', 'Choo'),
(147, 'Mandela Chooni', 'NMB', 'sdfasd', 'sdsad3213', 'Choo'),
(148, 'Paukwa pakawa', 'PayPal', 'ret45', 'sdsad4324', 'Choo'),
(149, 'Majiko jiko', 'PayPal', 'sdad', 'sdsad', 'Jiko'),
(150, 'Alpha jikoPlus', 'PayPal', 'dsfdsfsdf', 'dsdsfsdf', 'Jiko'),
(151, 'Usalam jikoni', 'PayPal', 'dsads', 'sdsd', 'Jiko'),
(152, 'Demo Jiko', 'PayPal', 'dfsfds', 'dsfsdf3432', 'Jiko'),
(153, 'Phili Mashimo', 'PayPal', 'sdad', 'sdasd', 'Shimo'),
(154, 'shimo Choo', 'PayPal', 'dfsdf', 'fsdfsdf', 'Shimo'),
(155, 'Majiko makuu', 'Visa', 'NMNJdf4535', 'ffdsfdsf', 'Jiko'),
(156, 'taka shimoo', 'PayPal', 'dasdsad', 'sdsadsad', 'Shimo'),
(157, 'Mkunya Mashimo', 'PayPal', 'sdadsds', 'sadsad', 'Shimo'),
(158, 'james matank', 'CRDB', 'wqewqe', 'dsadsad', 'Tank'),
(159, 'Biseko Tanks', 'PayPal', 'dfdsfd', 'dsdfdsf', 'Tank'),
(160, 'Tanki Bovu', 'CRDB', 'asdsad', 'wewqe', 'Tank'),
(161, 'Mapasi keko', 'Visa', 'sdsad', 'werrwr', 'Pasi');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `region` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cartegory` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `email`, `phone`, `region`, `district`, `password`, `cartegory`, `img`) VALUES
(1, 'James', 'james@gmail.com', '342323424', 'Dar', 'Ilala', '123', 'member', 'assets/img/avatar.png'),
(2, 'alpha', 'alpha@gmail.com', '0987654321', 'mara', 'kyura', '123', 'Bomba', 'assets/img/avatar.png'),
(3, 'Khan Musa', 'khan@gmail.com', '3232133', 'kigoma', 'kikuyu', '123', 'member', 'assets/img/avatar.png'),
(4, 'Pani Khun', 'pani@gmail.com', '3213213', 'Dar', 'kigamboni', '123', 'Bomba', 'assets/img/avatar.png'),
(5, 'James Muro', 'james@gmail.com', '4343123', 'Mara', 'Kyela', '123', 'Bomba', 'assets/img/avatar.png'),
(6, 'Ben Malaki', 'Ben@gmail.com', '43213', 'mtwara', 'tandahimba', '123', 'Gari', 'assets/img/avatar.png'),
(7, 'Bujo john', 'bujo@gmail.com', '23123213', 'Arusha', 'ngarenaro', '123', 'Bomba', 'assets/img/avatar.png'),
(8, 'Dan Bonge', 'Bonge@gmail.com', '4231412', 'Dodoma', 'marangu', '123', 'Bomba', 'assets/img/avatar.png'),
(9, 'manase Kaya', 'manase@gmail.com', '23213', 'Singida', 'ilongero', '123', 'Umeme', 'assets/img/avatar.png'),
(10, 'Benja Min', 'min@gmail', '321`2M', 'Musoma', 'Jita', '123', 'Umeme', 'assets/img/avatar.png'),
(11, 'Johnson Uma', 'uma@gmail.com', '232312', 'Singida', 'mtewe', '123', 'Umeme', 'assets/img/avatar.png'),
(12, 'Nuru Khan', 'nuru@gmail', '2321323', 'Morogoro', 'Msamvu', '123', 'Umeme', 'assets/img/avatar.png'),
(13, 'Jokopae Bin', 'bin@gmail.com', '23213', 'Morogoro', 'maweni', '123', 'Gari', 'assets/img/avatar.png'),
(14, 'Kaparo don', 'don@gmail.com', '323123', 'Mtwara', 'tandahimba', '123', 'Bomba', 'assets/img/avatar.png'),
(15, 'kakulu Boy', 'boy@gmail.com', '34214324', 'Ruvuma', 'msone', '123', 'Gari', 'assets/img/avatar.png'),
(16, 'Bash Kan', 'kan@gmail.com', '3213213', 'Kigoma', 'kisutu', '123', 'Gari', 'assets/img/avatar.png'),
(17, 'John Bon', 'bon@gmail.com', '3213213', 'Tabora', 'Kimara', '123', 'Rangi', 'assets/img/avatar.png'),
(18, 'Jafet Kabesa', 'kabesa@gmail.com', '23213', 'Njombe', 'kapula', '123', 'Rangi', 'assets/img/avatar.png'),
(19, 'Dunga Bana', 'bana@gmail.com', '32123', 'simiyu', 'kishapu', '123', 'Rangi', 'assets/img/avatar.png'),
(20, 'banga Boy', 'banaga@gmail.com', '232312', 'Kilwa', 'goba', '123', 'Rangi', 'assets/img/avatar.png'),
(21, 'Kipa Bila', 'kipa@gmail.com', '323', 'dar', 'ilala', '123', 'TV', 'assets/img/avatar.png'),
(22, 'Bonnge Boa', 'boa@gmail.com', '321321', 'Iringa', 'mafinga', '123', 'Bomba', 'assets/img/avatar.png'),
(23, 'Java den', 'java@gmail.com', '3424324', 'Iringa', 'mafinga', '123', 'TV', 'assets/img/avatar.png'),
(24, 'Justn Beb', 'beb@gmail.com', '3424324', 'Rukwa', 'uvina', '123', 'Bomba', 'assets/img/avatar.png'),
(25, 'Dulla Boi', 'dulla@gmail.com', '2321312', 'Dar', 'kigamboni', '123', 'TV', 'assets/img/avatar.png'),
(26, 'Panya Makota', 'kota@gmail.com', '3432434', 'Mara', 'kulya', '123', 'TV', 'assets/img/avatar.png'),
(27, 'Chichi Bampa', 'bampa@gmail.com', '23212', 'Babati', 'manyara', '123', 'Bomba', 'assets/img/avatar.png'),
(28, 'Kabarage Bufa', 'kabare@gmail.com', '34324', 'Kagera', 'Bukoba', '123', 'Simu', 'assets/img/avatar.png'),
(29, 'Aslay Mucha', 'mucha@gmail.com', '434234', 'Mara', 'Kulya', '123', 'Simu', 'assets/img/avatar.png'),
(30, 'Den Nkuntu', 'nkuntu@gmail.com', '432424', 'Dar', 'Kariakoo', '123', 'Simu', 'assets/img/avatar.png'),
(31, 'Jojo Bonge', 'jojo@gmail.com', '343243', 'Tanga', 'Kwalee', '123', 'Simu', 'assets/img/avatar.png'),
(32, 'Radio Mbao', 'mbao@gmail.com', '34232434', 'Mtwara', 'Keleee', '1234', 'Radio', 'assets/img/avatar.png'),
(33, 'Pangu Nchele', 'nchele@gmail.com', '4324234', 'Musoma', 'dengua', '123', 'Radio', 'assets/img/avatar.png'),
(34, 'Pania Beni', 'Beni@gmail.com', '34324324', 'Moshi', 'Lombo', '123', 'Radio', 'assets/img/avatar.png'),
(35, 'Dunga Radio', 'dunga@gmail.com', '45435', 'Dar', 'Kariakooo', '123', 'Bomba', 'assets/img/avatar.png'),
(36, 'Benko Bampa', 'bampa@gmail.com', '5435345', 'dar', 'Fire', '123', 'Radio', 'assets/img/avatar.png'),
(37, 'Bonge Maredio', 'bonge@gmail.com', '34324', 'simiyu', 'magu', '1234', 'Radio', 'assets/img/avatar.png'),
(38, 'Kosi Majuu', 'Kosi@gmail.com', '5345345', 'Njombe', 'makuruta', '123', 'Ujenzi', 'assets/img/avatar.png'),
(39, 'Eric fegi', 'fegi@gmail.com', '45324535', 'Simiyu', 'magu', '1234', 'Ujenzi', 'assets/img/avatar.png'),
(40, 'Bakoni Gonale', 'gonale@gmail.com', '4324324', 'Mbeya', 'Kisuma', '1234', 'Ujenzi', 'assets/img/avatar.png'),
(41, 'wania Boreka', 'wania@gmail.com', '453435', 'Moshi', 'Kimara', '123', 'Bomba', 'assets/img/avatar.png'),
(42, 'Bekari Beka', 'Beka@gmail.com', '43242423', 'Tanga', 'mkuranag', '123', 'Ujenzi', 'assets/img/avatar.png'),
(43, 'Macomputer Don', 'don@gmail.com', '432324', 'dar', 'Ilala', '123', 'Computer', 'assets/img/avatar.png'),
(44, 'Ferishan Fundee', 'funde@gmail.com', '4323423', 'Dar', 'Kariakoo', '123', 'Computer', 'assets/img/avatar.png'),
(45, 'Kelly Rubango', 'kelly@gmail.com', '432432', 'Shinyanga', 'mkuluta', '123', 'Computer', 'assets/img/avatar.png'),
(46, 'Kassan Hosan', 'hosan@gmail.com', '4453454', 'Moshi', 'Kuldata34432432', '123', 'Computer', 'assets/img/avatar.png'),
(47, 'Mapana Mbigo', 'mbigo@gmail.com', '435435', 'Shinyanga', 'Kahama', '123', 'Dish', 'assets/img/avatar.png'),
(48, 'Besan Makura', 'besa@gmail.com', '435435', 'Mtwara', 'tandahimba', '123', 'Dish', 'assets/img/avatar.png'),
(49, 'Manyama Paul', 'paul@gmail.com', '435345', 'Singida', 'ilongero', '123', 'Dish', 'assets/img/avatar.png'),
(50, 'Yasin Mabange', 'yasin@gmail.com', '453543', 'Dodoma', 'Ikulu', '123', 'Dish', 'assets/img/avatar.png'),
(51, 'Mwafua juma', 'juma@gmail.com', '5345435', 'Mara', 'Jita', '123', 'Nguo', 'assets/img/avatar.png'),
(52, 'Petronia msuli', 'msuli@gmail.com', '43534543', 'Arusha', 'ngarenaro', '123', 'Nguo', 'assets/img/avatar.png'),
(53, 'Besenga Budo', 'budo@gmail.com', '453453', 'Tabora', 'Jita', '123', 'Nguo', 'assets/img/avatar.png'),
(54, 'Dangua Danse', 'danse@gmail.com', '6546464', 'Mbeya', 'kigamboni', '123', 'Nguo', 'assets/img/avatar.png'),
(55, 'James james', 'james@gmail.com', '433423', 'Mtwara', 'tandahimba', '123', 'Friji', 'assets/img/avatar.png'),
(56, 'Panasonic Mtwe', 'mtwe@gmail.com', '345435', 'Morogoro', 'Kibaugwa', '123', 'Friji', 'assets/img/avatar.png'),
(57, 'Maua Petro', 'maua@gmail.com', '43243445', 'Tabora', 'ngudu', '1234', 'Friji', 'assets/img/avatar.png'),
(58, 'Msonia Msomali', 'msonia@gmail.com', '45345435', 'Tanga', 'dsf454', '123', 'Friji', 'assets/img/avatar.png'),
(59, 'Mee Bure', 'bure@gmail.com', '34324324', 'Dar', 'Kariakoo', '123', 'Funguo', 'assets/img/avatar.png'),
(60, 'Jangu Key', 'jangu@gmail.com', '34234234', 'Mbeya', 'Kisuma', '123', 'Funguo', 'assets/img/avatar.png'),
(61, 'Jema Funguo', 'jema@gmail.com', '4324324', 'Arusha', 'Jita', '123', 'Funguo', 'assets/img/avatar.png'),
(62, 'Justine mafunguo', 'just@gmail.com', '342434234', 'Njombe', 'Kipaula', '123', 'Funguo', 'assets/img/avatar.png'),
(63, 'James Jackson', 'jack@gmail.com', '53243423', 'dar', 'Kimara', '123', 'Camera', 'assets/img/avatar.png'),
(64, 'Msonia cameras', 'msonia@gmail.com', '3324324', 'Dar', 'Kariakooo', '123', 'Camera', 'assets/img/avatar.png'),
(65, 'chirangi Kena', 'kena@gmail.com', '32432423', 'Mbeya', '432432', '123', 'Camera', 'assets/img/avatar.png'),
(66, 'Jombilai Mdeku', 'jombii@gmail.com', '3454355', 'Mbeya', 'Kiugati', '123', 'Camera', 'assets/img/avatar.png'),
(67, 'Betto Njumu', 'njumu@gmail.com', '4342343', 'Morogoro', 'Kimara', '123', 'Battery', 'assets/img/avatar.png'),
(68, 'Pampula Dole', 'dole@gmail.com', '3243432', 'kagera', 'bukoba', '123', 'Battery', 'assets/img/avatar.png'),
(69, 'Petro Battery', 'petro@gmail.com', '345354', 'Simiyu', 'ngudu', '123', 'Battery', 'assets/img/avatar.png'),
(70, 'Menson Mjumbe', 'menso@gmail.com', '423423423', 'Tabora', 'Igunga', '123', 'Battery', 'assets/img/avatar.png'),
(71, 'Mapaipu Ngumu', 'ngumu@gmail.com', '42343243', 'Mbeya', 'Kibaugwa', '123', 'Pipe', 'assets/img/avatar.png'),
(72, 'Hamis mapipe', 'hamis@gmail.com', '34343432', 'Mtwara', 'Njombe', '123', 'Pipe', 'assets/img/avatar.png'),
(73, 'Bamboo bycle', 'bamboo@gmail.com', '434423423', 'Mbeya', 'Magomeni', '123', 'Bomba', 'assets/img/avatar.png'),
(74, 'Kagera Bycle', 'kagera@gmail.com', '4335435', 'Kagera', 'bukoba', '123', 'Baiskeli', 'assets/img/avatar.png'),
(75, 'jango baiskeli', 'jango@gmail.com', '34434', 'Moshi', 'mafinga', '123', 'Baiskeli', 'assets/img/avatar.png'),
(76, 'Pango Boy', 'pango@gmail.com', '4543', 'Njombe', 'bukoba', '123', 'Baiskeli', 'assets/img/avatar.png'),
(77, 'Jerad Bonge', 'jeard@gmail.com', '3434', 'Mtwara', 'ngarenaro', '123', 'Bomba', 'assets/img/avatar.png'),
(78, 'Paul nungura', 'paul@gmail.com', '4543', 'Moshi', 'ngudu', '123', 'Baiskeli', 'assets/img/avatar.png'),
(79, 'jason Kamara', 'jason@gmail.com', '4334324', 'Mara', 'Fire', '123', 'PikiPiki', 'assets/img/avatar.png'),
(80, 'Juma kaparato', 'juma@gmail.com', '432432', 'Mara', 'dengua', '123', 'PikiPiki', 'assets/img/avatar.png'),
(81, 'Musa Boda', 'musa@gmail.com', '32423', 'Moshi', 'mafinga', '123', 'PikiPiki', 'assets/img/avatar.png'),
(82, 'Maboda boda', 'boda@gmail.com', '434', 'Njombe', 'babat', '123', 'PikiPiki', 'assets/img/avatar.png'),
(83, 'Choma Vyuma', 'choma@gmail.com', '43434', 'Kilimanjaro', 'same', '123', 'Welding', 'assets/img/avatar.png'),
(84, 'Mageti Design', 'maageti@gmail.com', '45435', 'Mtwara', 'dengua', '1243', 'Welding', 'assets/img/avatar.png'),
(85, 'Hamisa Vyuma', 'hamisa@gmail.com', '4324324', 'Mara', 'Hai', '123', 'Welding', 'assets/img/avatar.png'),
(86, 'Wachomereaji Camp', 'camp@gmail.com', '32434', 'kigoma', 'kasulu', '123', 'Welding', 'assets/img/avatar.png'),
(87, 'Mitungi Boy', 'mitungi@gmail.com', '4342', 'Musoma', 'kigamboni', '123', 'Gas', 'assets/img/avatar.png'),
(88, 'Maliko mamba', 'mariko@gmail.com', '434', 'Babati', 'dengua', '123', 'Gas', 'assets/img/avatar.png'),
(89, 'Gangmala Gas', 'ganga@gmail.com', '434', 'Ruvuma', 'nyamagana', '123', 'Gas', 'assets/img/avatar.png'),
(90, 'Orxy Repair', 'oryx@gmail.com', '434', 'Njombe', 'goba', '123', 'Gas', 'assets/img/avatar.png'),
(91, 'Viage kwetu', 'vigae@gmail.com', '3424', 'Njombe', 'babat', '123', 'Vigae', 'assets/img/avatar.png'),
(92, 'Karim Vigae', 'Karim@gmail.com', '34324', 'Arusha', 'Fire', '123', 'Vigae', 'assets/img/avatar.png'),
(93, 'Kigae kimoja', 'kigae@gmail.com', '3434', 'Morogoro', 'magu', '123', 'Vigae', 'assets/img/avatar.png'),
(94, 'Vigae Limited', 'limited@gmail.com', '4324324', 'Mtwara', 'ngarenaro', '123', 'Vigae', 'assets/img/avatar.png'),
(95, 'Khan Pipes', 'khan@gmail.com', '3432432', 'Singida', 'same', '123', 'Pipe', 'assets/img/avatar.png'),
(96, 'Mirija Pipe', 'pipe@gmail.com', '5345435', 'Musoma', 'magu', '123', 'Pipe', 'assets/img/avatar.png'),
(97, 'Michael mataa', 'michael@gmail.com', '43432434', 'Njombe', 'Njombe', '123', 'Taa', 'assets/img/avatar.png'),
(98, 'taa limited', 'taa@gmail.com', '343434', 'Mara', 'magu', '123', 'Taa', 'assets/img/avatar.png'),
(99, 'Jeremia bulbs', 'bulbs@gmail.com', '4324324', 'Moshi', 'Fire', '123', 'Taa', 'assets/img/avatar.png'),
(100, 'Paniel Jmaes', 'paniel@gmail.com', '43434', 'Musoma', 'dengua', '123', 'Taa', 'assets/img/avatar.png'),
(101, 'james sofa', 'sofa@gmail.com', '3243434', 'Mara', 'mafinga', '123', 'Kochi', 'assets/img/avatar.png'),
(102, 'Kochi limited', 'koch@gmail.com', '432434', 'Moshi', 'Kisuma', '123', 'Kochi', 'assets/img/avatar.png'),
(103, 'Mafwele Sofa', 'mafee@gmail.com', '434435', 'Babati', 'bukoba', '123', 'Kochi', 'assets/img/avatar.png'),
(104, 'Masofa Bukoba', 'mas@gmail.com', '5345435345', 'Kagera', 'Bukoba', '123', 'Bomba', 'assets/img/avatar.png'),
(105, 'Nasoro masofa', 'nasoro@gmail.com', '5435345', 'Musoma', 'Majita', '123', 'Kochi', 'assets/img/avatar.png'),
(106, 'Juma Mitumbwi', 'jumaa@gmail.com', '4324324', 'tanga', 'maramba', '123', 'Boat', 'assets/img/avatar.png'),
(107, 'Masami Boats', 'masami@gmail.com', '324324324', 'dar', 'kiga', '123', 'Boat', 'assets/img/avatar.png'),
(108, 'Tengule Mashua', 'tengulee@gmail.com', '4324324', 'Mtwara', 'tandahimba', '123', 'Boat', 'assets/img/avatar.png'),
(109, 'Mpemba Ngarawa', 'mpemba@gmail.com', '423423321', 'pemba', 'mafia', '123', 'Boat', 'assets/img/avatar.png'),
(110, 'Baunsa Cam', 'baunsa@gmail.com', '32343243', 'Dar', 'Mbagala', '123', 'CCTV', 'assets/img/avatar.png'),
(111, 'Camera man', 'camera@gmail.com', '3434324', 'Musoma', 'Fire', '123', 'CCTV', 'assets/img/avatar.png'),
(112, 'Mood cameras', 'mood@gmail.com', '4324324', 'Moshi', 'Magomeni', '123', 'CCTV', 'assets/img/avatar.png'),
(113, 'bunju Boy', 'bunju@gmail.com', '43324324', 'Morogoro', 'Darajani', '123', 'CCTV', 'assets/img/avatar.png'),
(114, 'Basha Mechanic', 'basha@gmail.com', '321234', 'Mbeya', 'mafinga', '123', 'ATM', 'assets/img/avatar.png'),
(115, 'NMB fund', 'nmb@gmail.com', '324324', 'Dar', 'kigamboni', '123', 'ATM', 'assets/img/avatar.png'),
(116, 'Pamela ATM', 'pamela@gmail.com', '43434', 'dar', 'Igunga', '123', 'ATM', 'assets/img/avatar.png'),
(117, 'CRDB Jango', 'crdb@gmail.com', '3443', 'dar', 'Fire', '123', 'ATM', 'assets/img/avatar.png'),
(118, 'Roja Malift', 'roja@gmail.com', '43243', 'Dar', 'Kimara', '123', 'Eleveta', 'assets/img/avatar.png'),
(119, 'Panda Lifts', 'panada@gmail.com', '34343', 'Moshi', 'Hai', '123', 'Eleveta', 'assets/img/avatar.png'),
(120, 'Jongoo Lifter', 'jongoo@gmail.com', '43534543', 'simiyu', 'Darajani', '123', 'Eleveta', 'assets/img/avatar.png'),
(121, 'Musa malift', 'musa@gmail.com', '22442', 'Shinyanga', 'Kimara', '123', 'Eleveta', 'assets/img/avatar.png'),
(122, 'Male mbao', 'malee@gmail.com', '432434324', 'Manayara', 'hai', '123', 'Mbao', 'assets/img/avatar.png'),
(123, 'Sele Mala', 'mala@gmail.com', '43434', 'Mara', 'goba', '123', 'Mbao', 'assets/img/avatar.png'),
(124, 'Pamo Wooder', 'pamo@gmail.com', '23434324', 'Musoma', 'sangu', '123', 'Mbao', 'assets/img/avatar.png'),
(125, 'sungura mambao', 'sungura@gmail.com', '54345435', 'Mtwara', 'goba', '123', 'Mbao', 'assets/img/avatar.png'),
(126, 'Pengo mapipa', 'mapipa@gmail.com', '324324', 'Moshi', 'Kisuma', '123', 'Plastic', 'assets/img/avatar.png'),
(127, 'Hunga Pambo', 'pango@gmail.com', '3423434', 'Mbeya', 'hai', '123', 'Plastic', 'assets/img/avatar.png'),
(128, 'Dengo musa', 'dengo@gmail.com', '4324234', 'Kagera', 'Darajani', '123', 'Plastic', 'assets/img/avatar.png'),
(129, 'Tembo plastic', 'tembo@gmail.com', '2323213', 'Morogoro', 'Magomeni', '123', 'Plastic', 'assets/img/avatar.png'),
(130, 'Madaraja Leo', 'leo@gmail.com', '3323', 'Kigoma', 'mafia', '123', 'Daraja', 'assets/img/avatar.png'),
(131, 'Juma Madaraja', 'daraja@gmail.com', '53435435', 'Mbeya', 'hai', '123', 'Daraja', 'assets/img/avatar.png'),
(132, 'Kidumu Bridges', 'kidumu@gmail.com', '3453243', 'Musoma', 'Fire', '123', 'Daraja', 'assets/img/avatar.png'),
(133, 'Peter Daraja', 'peter@gmail.com', '3432434', 'Moshi', 'Fire', '123', 'Daraja', 'assets/img/avatar.png'),
(134, 'Juma Saa', 'juma@gmail.com', '2434324', 'Mbeya', 'sangu', '123', 'Saa', 'assets/img/avatar.png'),
(135, 'Hamisa Masaa', 'masaa@gmail.com', '34234', 'Kilimanjaro', 'Fire', '123', 'Saa', 'assets/img/avatar.png'),
(136, 'xaa exavery', 'xaa@gmail.com', '234324', 'kagera', 'Fire', '123', 'Saa', 'assets/img/avatar.png'),
(137, 'Kaparoto muee', 'muee@gmail.com', '3243423432', 'Musoma', 'hai', '123', 'Saa', 'assets/img/avatar.png'),
(138, 'Konkwa Muno', 'muno@gmail.com', '4234324', 'Babati', 'mafinga', '123', 'Viatu', 'assets/img/avatar.png'),
(139, 'huruma Kiatu', 'kiatu@gmail.com', '4324324', 'kigoma', 'babat', '123', 'Bomba', 'assets/img/avatar.png'),
(140, 'sina Lato', 'lato@gmail.com', '343432', 'Mara', 'ngarenaro', '123', 'Viatu', 'assets/img/avatar.png'),
(141, 'Kiatu Maneno', 'kiatu@gmail.com', '34324343', 'dar', 'Ilala', '123', 'Viatu', 'assets/img/avatar.png'),
(142, 'Boot Repair', 'boot@gmail.com', '32323', 'Babati', 'bukoba', '123', 'Viatu', 'assets/img/avatar.png'),
(143, 'Mota mtambo', 'mota@gmail.com', '324324', 'Mbeya', 'Jita', '123', 'Mota', 'assets/img/avatar.png'),
(144, 'Gongalai guba', 'guba@gmail.com', '3123213', 'Iringa', 'Lombo', '12', 'Mota', 'assets/img/avatar.png'),
(145, 'Juma mota', 'mot@gmail.com', '34324234', 'Njombe', 'ngarenaro', '123', 'Mota', 'assets/img/avatar.png'),
(146, 'Punga Mkomota', 'motaBoy@gmail.com', '334234324', 'Kilwa', 'Darajani', '123', 'Mota', 'assets/img/avatar.png'),
(147, 'Mchimbi choo', 'choo@gmail.com', '434234', 'Musoma', 'babat', '123', 'Choo', 'assets/img/avatar.png'),
(148, 'Vyoo Limited', 'vyoo@gmail.com', '234324', 'Njombe', 'Fire', '123', 'Choo', 'assets/img/avatar.png'),
(149, 'Mandela Chooni', 'choo@gmail.com', '34324', 'Musoma', 'Majita', '123', 'Choo', 'assets/img/avatar.png'),
(150, 'Paukwa pakawa', 'paukwa@gmail.com', '4324324', 'Mtwara', 'Hai', '123', 'Choo', 'assets/img/avatar.png'),
(151, 'Majiko jiko', 'jiko@gmail.com', '34324324', 'Morogoro', 'Magomeni', '123', 'Jiko', 'assets/img/avatar.png'),
(152, 'Alpha jikoPlus', 'jiko@gmail.com', '3435353', 'Njombe', 'nyamagana', '1233', 'Jiko', 'assets/img/avatar.png'),
(153, 'Usalam jikoni', 'jikoni@gmail.com', '434324', 'Shinyanga', 'ngarenaro', '123', 'Jiko', 'assets/img/avatar.png'),
(154, 'Demo Jiko', 'jiko@gmail.com', '432434', 'Babati', 'bukoba', '123', 'Jiko', 'assets/img/avatar.png'),
(155, 'Phili Mashimo', 'shimo@gmail.com', '433232434', 'Mtwara', 'Fire', '123', 'Shimo', 'assets/img/avatar.png'),
(156, 'shimo Choo', 'shimo@gmail.com', '32434324', 'Njombe', 'hai', '123', 'Shimo', 'assets/img/avatar.png'),
(157, 'Majiko makuu', 'makuu@gmail.com', '534545', 'dar', '4343434', '123', 'Jiko', 'assets/img/avatar.png'),
(158, 'taka shimoo', 'taka@gmail.com', '43434', 'Mara', 'darajani', '123', 'Shimo', 'assets/img/avatar.png'),
(159, 'Mkunya Mashimo', 'shimox@gmail.com', '321323', 'Musoma', 'Fire', '123', 'Shimo', 'assets/img/avatar.png'),
(160, 'james matank', 'matank@gmail.com', '324324324', 'Mtwara', 'bukoba', '123', 'Tank', 'assets/img/avatar.png'),
(161, 'Biseko Tanks', 'tank@gmail.com', '5432543', 'Moshi', 'dengua', '123', 'Tank', 'assets/img/avatar.png'),
(162, 'Tanki Bovu', 'tankki@gmail.com', '434324', 'Dar', 'goba', '123', 'Tank', 'assets/img/avatar.png'),
(163, 'Mapasi keko', 'mapasi@gmail.com', '34343', 'dar', 'Fire', '123', 'Pasi', 'assets/img/avatar.png'),
(164, 'James maro', 'james@gmail.com', '0987654321', 'Musoma', 'mafinga', '123', 'member', 'assets/img/avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fundi` varchar(20) NOT NULL,
  `cartegory` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `username`, `phone`, `fundi`, `cartegory`, `location`, `ratings`) VALUES
(3, 'James maro', '4343123', 'James Muro', 'Bomba', 'Mara', 3),
(4, 'James maro', '32123', 'Dunga Bana', 'Rangi', 'simiyu', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fundi`
--
ALTER TABLE `fundi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fundi`
--
ALTER TABLE `fundi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
