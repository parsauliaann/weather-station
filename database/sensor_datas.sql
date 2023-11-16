-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 01:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weather_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensor_datas`
--

CREATE TABLE `sensor_datas` (
  `id` int(11) NOT NULL,
  `parameter` varchar(255) DEFAULT NULL,
  `value` double DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sensor_datas`
--

INSERT INTO `sensor_datas` (`id`, `parameter`, `value`, `time`) VALUES
(2, 'wind_speed', 0.8, '2023-11-15 17:00:00'),
(3, 'wind_speed', 1.2, '2023-11-15 18:00:00'),
(4, 'wind_speed', 0.5, '2023-11-15 19:00:00'),
(5, 'wind_speed', 1.5, '2023-11-15 20:00:00'),
(6, 'wind_speed', 1.1, '2023-11-15 21:00:00'),
(7, 'wind_speed', 1.2, '2023-11-15 22:00:00'),
(8, 'wind_speed', 0.8, '2023-11-15 23:00:00'),
(9, 'wind_speed', 0.8, '2023-11-16 00:00:00'),
(10, 'wind_speed', 0.7, '2023-11-16 01:00:00'),
(11, 'wind_speed', 0.6, '2023-11-16 02:00:00'),
(12, 'wind_speed', 0.8, '2023-11-16 03:00:00'),
(13, 'wind_speed', 0.9, '2023-11-16 04:00:00'),
(14, 'wind_direction', 0.8, '2023-11-16 08:09:03'),
(15, 'wind_direction', 1.3, '2023-11-16 08:31:15'),
(16, 'wind_direction', 1.4, '2023-11-16 08:36:40'),
(17, 'wind_direction', 1.5, '2023-11-16 08:36:40'),
(18, 'wind_direction', 1, '2023-11-16 08:36:40'),
(19, 'wind_direction', 1.7, '2023-11-16 08:36:40'),
(20, 'wind_direction', 1.7, '2023-11-16 08:36:40'),
(21, 'wind_direction', 1.9, '2023-11-16 08:36:40'),
(22, 'wind_direction', 1.3, '2023-11-16 08:36:40'),
(23, 'wind_direction', 2.4, '2023-11-16 08:36:40'),
(24, 'wind_direction', 2.1, '2023-11-16 08:36:40'),
(25, 'wind_direction', 2.9, '2023-11-16 08:36:40'),
(26, 'wind_direction', 1.8, '2023-11-16 08:36:40'),
(27, 'wind_direction', 2.5, '2023-11-16 08:36:40'),
(28, 'wind_direction', 2.1, '2023-11-16 08:36:40'),
(29, 'wind_direction', 2.7, '2023-11-16 08:36:40'),
(30, 'temperature', 29.5, '2023-11-16 08:43:59'),
(31, 'temperature', 32, '2023-11-16 08:43:59'),
(32, 'temperature', 31, '2023-11-16 08:43:59'),
(33, 'temperature', 30.4, '2023-11-16 08:43:59'),
(34, 'temperature', 29.9, '2023-11-16 08:43:59'),
(35, 'temperature', 31, '2023-11-16 08:43:59'),
(36, 'temperature', 30.1, '2023-11-16 08:43:59'),
(37, 'temperature', 29.4, '2023-11-16 08:43:59'),
(38, 'temperature', 29.7, '2023-11-16 08:43:59'),
(39, 'temperature', 29.5, '2023-11-16 08:43:59'),
(40, 'temperature', 30.3, '2023-11-16 08:43:59'),
(41, 'temperature', 30.1, '2023-11-16 08:43:59'),
(42, 'temperature', 31, '2023-11-16 08:43:59'),
(43, 'temperature', 31.7, '2023-11-16 08:43:59'),
(44, 'temperature', 31.2, '2023-11-16 08:43:59'),
(45, 'temperature', 32.4, '2023-11-16 08:43:59'),
(46, 'temperature', 32.1, '2023-11-16 08:43:59'),
(47, 'temperature', 31.8, '2023-11-16 08:43:59'),
(48, 'temperature', 31.5, '2023-11-16 08:43:59'),
(49, 'temperature', 31.4, '2023-11-16 08:43:59'),
(50, 'humidity', 91.2, '2023-11-16 08:55:29'),
(51, 'humidity', 93.3, '2023-11-16 08:55:29'),
(52, 'humidity', 92.6, '2023-11-16 08:55:29'),
(53, 'humidity', 89.7, '2023-11-16 08:55:29'),
(54, 'humidity', 90.2, '2023-11-16 08:55:29'),
(55, 'humidity', 98.2, '2023-11-16 08:55:29'),
(56, 'humidity', 95.2, '2023-11-16 08:55:30'),
(57, 'humidity', 95.8, '2023-11-16 08:55:30'),
(58, 'humidity', 92.2, '2023-11-16 08:55:30'),
(59, 'humidity', 91.2, '2023-11-16 08:55:30'),
(60, 'humidity', 91.8, '2023-11-16 08:55:30'),
(61, 'humidity', 88.9, '2023-11-16 08:55:30'),
(62, 'humidity', 89.4, '2023-11-16 08:55:30'),
(63, 'humidity', 91.2, '2023-11-16 08:55:30'),
(64, 'humidity', 93.6, '2023-11-16 08:55:30'),
(65, 'humidity', 91.4, '2023-11-16 08:55:30'),
(66, 'humidity', 91.2, '2023-11-16 08:55:30'),
(67, 'humidity', 95.9, '2023-11-16 08:55:30'),
(68, 'humidity', 96.1, '2023-11-16 08:55:30'),
(69, 'humidity', 93.2, '2023-11-16 08:55:30'),
(70, 'pressure', 0.9724, '2023-11-16 08:58:32'),
(71, 'pressure', 0.9734, '2023-11-16 08:58:32'),
(72, 'pressure', 0.9539, '2023-11-16 08:58:32'),
(73, 'pressure', 0.9287, '2023-11-16 08:58:32'),
(74, 'pressure', 0.9398, '2023-11-16 08:58:32'),
(75, 'pressure', 0.9359, '2023-11-16 08:58:32'),
(76, 'pressure', 0.9724, '2023-11-16 08:58:32'),
(77, 'pressure', 0.9974, '2023-11-16 08:58:32'),
(78, 'pressure', 0.9712, '2023-11-16 08:58:32'),
(79, 'pressure', 0.9287, '2023-11-16 08:58:32'),
(80, 'pressure', 0.9763, '2023-11-16 08:58:32'),
(81, 'pressure', 0.9742, '2023-11-16 08:58:32'),
(82, 'pressure', 0.9724, '2023-11-16 08:58:32'),
(83, 'pressure', 0.9872, '2023-11-16 08:58:32'),
(84, 'pressure', 0.9746, '2023-11-16 08:58:32'),
(85, 'pressure', 0.9973, '2023-11-16 08:58:32'),
(86, 'pressure', 0.9135, '2023-11-16 08:58:32'),
(87, 'pressure', 0.9625, '2023-11-16 08:58:32'),
(88, 'pressure', 0.9927, '2023-11-16 08:58:32'),
(89, 'pressure', 0.9847, '2023-11-16 08:58:32'),
(90, 'rainfall', 0.04, '2023-11-16 09:04:00'),
(91, 'rainfall', 0.02, '2023-11-16 09:04:00'),
(92, 'rainfall', 0.16, '2023-11-16 09:04:00'),
(93, 'rainfall', 0.25, '2023-11-16 09:04:00'),
(94, 'rainfall', 0.71, '2023-11-16 09:04:00'),
(95, 'rainfall', 1.04, '2023-11-16 09:04:00'),
(96, 'rainfall', 0.24, '2023-11-16 09:04:00'),
(97, 'rainfall', 2.35, '2023-11-16 09:04:00'),
(98, 'rainfall', 0.06, '2023-11-16 09:04:00'),
(99, 'rainfall', 0.23, '2023-11-16 09:04:00'),
(100, 'rainfall', 0.29, '2023-11-16 09:04:00'),
(101, 'rainfall', 1.74, '2023-11-16 09:04:00'),
(102, 'rainfall', 2.34, '2023-11-16 09:04:00'),
(103, 'rainfall', 2.53, '2023-11-16 09:04:00'),
(104, 'rainfall', 0.46, '2023-11-16 09:04:00'),
(105, 'rainfall', 1.24, '2023-11-16 09:04:00'),
(106, 'rainfall', 0.46, '2023-11-16 09:04:00'),
(107, 'rainfall', 0.2, '2023-11-16 09:04:00'),
(108, 'rainfall', 2.03, '2023-11-16 09:04:00'),
(109, 'rainfall', 2.21, '2023-11-16 09:04:00'),
(110, 'solar_radiation', 537, '2023-11-16 09:10:12'),
(111, 'solar_radiation', 522, '2023-11-16 09:10:12'),
(112, 'solar_radiation', 515, '2023-11-16 09:10:12'),
(113, 'solar_radiation', 525, '2023-11-16 09:10:12'),
(114, 'solar_radiation', 517, '2023-11-16 09:10:12'),
(115, 'solar_radiation', 519, '2023-11-16 09:10:12'),
(116, 'solar_radiation', 526, '2023-11-16 09:10:12'),
(117, 'solar_radiation', 537, '2023-11-16 09:10:12'),
(118, 'solar_radiation', 527, '2023-11-16 09:10:12'),
(119, 'solar_radiation', 594, '2023-11-16 09:10:12'),
(120, 'solar_radiation', 556, '2023-11-16 09:10:12'),
(121, 'solar_radiation', 529, '2023-11-16 09:10:12'),
(122, 'solar_radiation', 549, '2023-11-16 09:10:12'),
(123, 'solar_radiation', 528, '2023-11-16 09:10:12'),
(124, 'solar_radiation', 534, '2023-11-16 09:10:12'),
(125, 'solar_radiation', 562, '2023-11-16 09:10:12'),
(126, 'solar_radiation', 528, '2023-11-16 09:10:12'),
(127, 'solar_radiation', 511, '2023-11-16 09:10:12'),
(128, 'solar_radiation', 551, '2023-11-16 09:10:12'),
(129, 'solar_radiation', 574, '2023-11-16 09:10:12'),
(130, 'par_sensor', 1120, '2023-11-16 09:16:08'),
(131, 'par_sensor', 1208, '2023-11-16 09:16:08'),
(132, 'par_sensor', 1427, '2023-11-16 09:16:08'),
(133, 'par_sensor', 1308, '2023-11-16 09:16:08'),
(134, 'par_sensor', 1020, '2023-11-16 09:16:08'),
(135, 'par_sensor', 1408, '2023-11-16 09:16:08'),
(136, 'par_sensor', 976, '2023-11-16 09:16:08'),
(137, 'par_sensor', 830, '2023-11-16 09:16:08'),
(138, 'par_sensor', 1120, '2023-11-16 09:16:08'),
(139, 'par_sensor', 1752, '2023-11-16 09:16:08'),
(140, 'par_sensor', 1742, '2023-11-16 09:16:08'),
(141, 'par_sensor', 1064, '2023-11-16 09:16:08'),
(142, 'par_sensor', 1000, '2023-11-16 09:16:08'),
(143, 'par_sensor', 1407, '2023-11-16 09:16:08'),
(144, 'par_sensor', 1142, '2023-11-16 09:16:08'),
(145, 'par_sensor', 1302, '2023-11-16 09:16:08'),
(146, 'par_sensor', 1329, '2023-11-16 09:16:08'),
(147, 'par_sensor', 1200, '2023-11-16 09:16:08'),
(148, 'par_sensor', 1325, '2023-11-16 09:16:08'),
(149, 'par_sensor', 1244, '2023-11-16 09:16:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensor_datas`
--
ALTER TABLE `sensor_datas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sensor_datas`
--
ALTER TABLE `sensor_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
