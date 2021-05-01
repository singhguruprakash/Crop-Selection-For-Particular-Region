-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2019 at 08:36 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crop_detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `crop_details`
--

DROP TABLE IF EXISTS `crop_details`;
CREATE TABLE IF NOT EXISTS `crop_details` (
  `crop_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `crop_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `crop_start` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `crop_end` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `crop_soil` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `crop_water` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`crop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `crop_details`
--

INSERT INTO `crop_details` (`crop_id`, `crop_name`, `crop_start`, `crop_end`, `crop_soil`, `crop_water`) VALUES
(1, 'चावल', 'जुलाई का पहला सप्ताह', 'अक्टूबर का अंतिम सप्ताह', '\r\nचिकनी मिट्टी, दोमट मिट्टी', 'ज्यादा से ज्यादा  पानी'),
(2, '\r\nमक्का', '\r\nअक्टूबर के मध्य', 'नवंबर के मध्य तक', 'प्रकार की मिट्टियों में उगाया जा सकता है तथा बलुई, दोमट मिट्टी', '\r\nमध्यम पानी'),
(3, '\r\nगेहूँ', '\r\nअक्टूबर से दिसंबर तक', 'फरवरी से मई तक।', 'चिकनी मिट्टी और रेतीली  मिट्टी, दोमट मिट्टी\r\n', 'मध्यम पानी'),
(4, 'चना', 'अक्टूबर की शुरुआत से नवंबर  का अंत', 'मई से जुलाई की शुरुआत ', 'चिकनी मिट्टी,रेतीली मिट्टी, दोमट मिट्टी', 'कम पानी'),
(5, 'सोयाबीन', 'जून के अंतिम सप्ताह से जुलाई के पहले सप्ताह तक', '15 फरवरी और 15 मार्च', 'रेतीली मिट्टी, दोमट मिट्टी', 'मध्यम और अधिकतम पानी'),
(6, 'कपास', 'अप्रैल और मई', 'दिसम्बर, जनवरी', '\r\nरेतीली दोमट, मिट्टी या,दोमट बलुई मिट्टी', 'मध्यम पानी'),
(7, 'सरसों', 'सितंबर से अक्टूबर', 'दिसंबर', 'उपजाऊ , पूर्ण सिंचित और चिकनी मिट्टी', 'मध्यम पानी'),
(8, 'पुदीना', 'जनवरी और फरवरी में', 'दो बार अर्थात् जून और अक्टूबर में काटा जाता है', 'अधिकांश,अधिकतम सिंचित मिट्टी', 'मध्यम पानी'),
(9, 'गन्ना', 'जनवरी से मार्च ', 'दिसंबर से मार्च', 'उपजाऊ मिट्टी,पूर्ण सिंचित मिट्टी,नम मिट्टी', 'अधिकतम पानी');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
