-- -------------------------------------------------------------
-- TablePlus 5.6.2(516)
--
-- https://tableplus.com/
--
-- Database: weather_station
-- Generation Time: 2023-11-16 15:10:55.8000
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `sensor_datas`;
CREATE TABLE `sensor_datas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(255) DEFAULT NULL,
  `value` double DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;;

INSERT INTO `sensor_datas` (`id`, `parameter`, `value`, `time`) VALUES
(2, 'wind_speed', 0.8, '2023-11-16 00:00:00'),
(3, 'wind_speed', 1.2, '2023-11-16 01:00:00'),
(4, 'wind_speed', 0.5, '2023-11-16 02:00:00'),
(5, 'wind_speed', 1.5, '2023-11-16 03:00:00'),
(6, 'wind_speed', 1.1, '2023-11-16 04:00:00'),
(7, 'wind_speed', 1.2, '2023-11-16 05:00:00'),
(8, 'wind_speed', 0.8, '2023-11-16 06:00:00'),
(9, 'wind_speed', 0.8, '2023-11-16 07:00:00'),
(10, 'wind_speed', 0.7, '2023-11-16 08:00:00'),
(11, 'wind_speed', 0.6, '2023-11-16 09:00:00'),
(12, 'wind_speed', 0.8, '2023-11-16 10:00:00'),
(13, 'wind_speed', 0.9, '2023-11-16 11:00:00'),
(14, 'wind_direction', 0.8, '2023-11-16 15:09:03');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;