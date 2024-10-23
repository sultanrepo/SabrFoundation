-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2024 at 07:06 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21308246_sabrfoundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `charity_start_month_date_time`
--

CREATE TABLE `charity_start_month_date_time` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `date` date NOT NULL,
  `day` varchar(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charity_start_month_date_time`
--

INSERT INTO `charity_start_month_date_time` (`id`, `date_time`, `date`, `day`, `month`, `year`) VALUES
(1, '2023-01-01 16:45:26', '2023-01-01', '01', '01', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date_of_payment` date NOT NULL,
  `month_of` varchar(255) NOT NULL,
  `year_of` varchar(255) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `screenShot` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(25) NOT NULL,
  `modificationReason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `user_id`, `user_username`, `amount`, `date_of_payment`, `month_of`, `year_of`, `payment_method`, `screenShot`, `created_at`, `status`, `modificationReason`) VALUES
(6, '763152', 'hasanraja9529', '99', '2023-10-02', '10', '2023', 'PhonePe', '1696253508-9709-Screenshot_2023-10-02-19-00-22-76_944a2809ea1b4cda6ef12d1db9048ed3.jpg', '2023-10-02 19:01:48', 'Approved', NULL),
(7, '926837', 'mdejaz4950', '100', '2023-10-02', '10', '2023', 'PayTM', '1696253668-7573-1000077556.jpg', '2023-10-02 19:04:28', 'Approved', NULL),
(8, '626911', 'mohammadmerajali4505', '100', '2023-10-02', '10', '2023', 'PhonePe', '1696254558-2141-Screenshot_2023-10-02-19-15-53-50_944a2809ea1b4cda6ef12d1db9048ed3.jpg', '2023-10-02 19:19:18', 'Approved', NULL),
(9, '989275', 'sultanashraf1162', '200', '2023-10-02', '10', '2023', 'PhonePe', '1696256114-4276-1000114404.jpg', '2023-10-02 19:45:14', 'Approved', NULL),
(10, '414216', 'wasimkaiser5391', '100', '2023-10-02', '10', '2023', 'PhonePe', '1696257334-4994-Screenshot_2023-10-02-20-04-53-851_com.phonepe.app.jpg', '2023-10-02 20:05:34', 'Approved', NULL),
(11, '762481', 'shamsherali4731', '100', '2023-10-05', '10', '2023', 'PhonePe', '1696477625-7475-Screenshot_20231005-091634-828.png', '2023-10-05 09:17:05', 'Approved', NULL),
(12, '911909', 'afzalali162', '100', '2023-10-05', '10', '2023', 'GPay', '1696478143-4223-1000009566.png', '2023-10-05 09:25:43', 'Approved', NULL),
(13, '295870', 'mdirfan1239', '100', '2023-10-07', '10', '2023', 'PhonePe', '1696658472-2062-1000089666.png', '2023-10-07 11:31:12', 'Approved', NULL),
(14, '763152', 'hasanraja9529', '100', '2023-11-02', '11', '2023', 'PhonePe', '1698903467-6966-Screenshot_2023-11-02-11-07-19-144_com.whatsapp.jpg', '2023-11-02 11:07:47', 'Approved', NULL),
(15, '425042', 'unknown9772', '100', '2023-11-02', '11', '2023', 'GPay', '1698909327-8320-Screenshot_20231102_124437_GPay.jpg', '2023-11-02 12:45:27', 'Approved', NULL),
(16, '989275', 'sultanashraf1162', '101', '2023-11-02', '11', '2023', 'PhonePe', '1698909440-7213-Screenshot_2023-11-02-12-46-22-661_com.phonepe.app.jpg', '2023-11-02 12:47:20', 'Approved', NULL),
(17, '853735', 'serajali4860', '100', '2023-11-04', '11', '2023', 'PhonePe', '1699075631-7911-Screenshot_2023-11-04-10-55-37-994_com.whatsapp.jpg', '2023-11-04 10:57:11', 'Approved', NULL),
(18, '926837', 'mdejaz4950', '100', '2023-11-02', '11', '2023', 'PhonePe', '1699201475-9539-IMG-20231105-WA0002.jpg', '2023-11-05 21:54:35', 'Approved', NULL),
(19, '295870', 'mdirfan1239', '100', '2023-11-07', '11', '2023', 'PhonePe', '1699274359-2442-WhatsApp Image 2023-11-06 at 13.47.27_603ed052.jpg', '2023-11-06 18:09:19', 'Approved', NULL),
(20, '715432', 'mdaftabalam7490', '200', '2023-11-06', '11', '2023', 'PhonePe', '1699274576-3360-WhatsApp Image 2023-11-06 at 18.11.11_3f97df11.jpg', '2023-11-06 18:12:56', 'Approved', NULL),
(21, '762481', 'shamsherali4731', '100', '2023-11-05', '11', '2023', 'PhonePe', '1699282623-8666-WhatsApp Image 2023-11-04 at 17.20.12_d56fe529.jpg', '2023-11-06 20:27:03', 'Approved', NULL),
(22, '414216', 'wasimkaiser5391', '100', '2023-11-02', '11', '2023', 'PhonePe', '1699344959-2861-Wasim.jpg', '2023-11-07 13:45:59', 'Approved', NULL),
(23, '626911', 'mohammadmerajali4505', '100', '2023-11-02', '11', '2023', 'GPay', '1699345021-3720-Meraj.jpg', '2023-11-07 13:47:01', 'Approved', NULL),
(24, '983165', 'mdzinnurain9113', '100', '2023-11-07', '11', '2023', 'PhonePe', '1699345165-5513-Nurain.jpg', '2023-11-07 13:49:25', 'Approved', NULL),
(25, '425042', 'unknown9772', '100', '2023-12-02', '12', '2023', 'GPay', '1701502108-3140-Screenshot_2023-12-02-12-57-48-145_com.whatsapp.jpg', '2023-12-02 12:58:28', 'Approved', NULL),
(26, '763152', 'hasanraja9529', '100', '2023-12-02', '12', '2023', 'PhonePe', '1701571611-2644-Hasan.jpg', '2023-12-03 08:16:51', 'Approved', NULL),
(27, '989275', 'sultanashraf1162', '100', '2023-12-02', '12', '2023', 'PhonePe', '1701572326-3919-sultan.jpg', '2023-12-03 08:28:46', 'Approved', NULL),
(28, '762481', 'shamsherali4731', '100', '2023-12-05', '12', '2023', 'PhonePe', '1701754211-9720-Shamsher.jpg', '2023-12-05 11:00:11', 'Approved', NULL),
(29, '626911', 'mohammadmerajali4505', '100', '2023-12-02', '12', '2023', 'GPay', '1701754409-6518-Meraj.jpg', '2023-12-05 11:03:29', 'Approved', NULL),
(30, '295870', 'mdirfan1239', '100', '2023-12-07', '12', '2023', 'PhonePe', '1701755735-3559-WhatsApp Image 2023-12-05 at 11.12.53_3d665eae.jpg', '2023-12-05 11:25:35', 'Approved', NULL),
(31, '414216', 'wasimkaiser5391', '100', '2023-12-02', '12', '2023', 'PhonePe', '1701756526-5001-Was.jpg', '2023-12-05 11:38:46', 'Approved', NULL),
(32, '853735', 'serajali4860', '100', '2023-12-04', '12', '2023', 'PhonePe', '1701758028-7034-WhatsApp Image 2023-12-05 at 12.03.00.jpeg', '2023-12-05 12:03:48', 'Approved', NULL),
(33, '926837', 'mdejaz4950', '100', '2023-12-02', '12', '2023', 'PhonePe', '1701787272-6731-ab8fa616-0299-48e3-8b43-c60e64b27783.jpeg', '2023-12-05 20:11:12', 'Approved', NULL),
(34, '244490', 'faizahmad2362', '200', '2023-12-11', '12', '2023', 'PhonePe', '1702297079-4410-WhatsApp Image 2023-12-11 at 17.41.21.jpeg', '2023-12-11 17:47:59', 'Approved', NULL),
(35, '763152', 'hasanraja9529', '100', '2024-01-02', '01', '2024', 'PhonePe', '1704256098-4443-WhatsApp Image 2024-01-03 at 09.33.18_4f02ff16.jpg', '2024-01-03 09:58:18', 'Approved', NULL),
(36, '989275', 'sultanashraf1162', '100', '2024-01-02', '01', '2024', 'PhonePe', '1704256176-2574-WhatsApp Image 2024-01-03 at 09.59.10_9b627dd0.jpg', '2024-01-03 09:59:36', 'Approved', NULL),
(37, '715432', 'mdaftabalam7490', '100', '2023-12-06', '12', '2023', 'PhonePe', '1704256294-5411-WhatsApp Image 2024-01-03 at 10.01.09_3d1d304b.jpg', '2024-01-03 10:01:34', 'Approved', NULL),
(38, '715432', 'mdaftabalam7490', '100', '2024-01-06', '01', '2024', 'PhonePe', '1704256311-2150-WhatsApp Image 2024-01-03 at 10.01.09_3d1d304b.jpg', '2024-01-03 10:01:51', 'Approved', NULL),
(39, '425042', 'unknown9772', '100', '2024-01-02', '01', '2024', 'GPay', '1704256437-8229-WhatsApp Image 2024-01-03 at 10.03.20_d07979eb.jpg', '2024-01-03 10:03:57', 'Approved', NULL),
(40, '762481', 'shamsherali4731', '100', '2024-01-05', '01', '2024', 'PhonePe', '1704256775-8469-WhatsApp Image 2024-01-03 at 09.39.00_bab6fa4b.jpg', '2024-01-03 10:09:35', 'Approved', NULL),
(41, '626911', 'mohammadmerajali4505', '100', '2024-01-02', '01', '2024', 'GPay', '1704257630-6306-WhatsApp Image 2024-01-03 at 10.03.20_d07979eb.jpg', '2024-01-03 10:23:50', 'Approved', NULL),
(42, '853735', 'serajali4860', '100', '2024-01-04', '01', '2024', 'PhonePe', '1704258401-5753-qwqwqw.jpg', '2024-01-03 10:36:41', 'Approved', NULL),
(43, '414216', 'wasimkaiser5391', '100', '2024-01-02', '01', '2024', 'PhonePe', '1704263621-8438-wasim.jpg', '2024-01-03 12:03:41', 'Approved', NULL),
(44, '926837', 'mdejaz4950', '100', '2024-01-02', '01', '2024', 'PhonePe', '1704279985-1256-c76ecd0.jpg', '2024-01-03 16:36:25', 'Approved', NULL),
(45, '295870', 'mdirfan1239', '100', '2024-01-07', '01', '2024', 'PhonePe', '1704280061-5738-vdx9b1e3b.jpg', '2024-01-03 16:37:41', 'Approved', NULL),
(46, '983165', 'mdzinnurain9113', '50', '2023-12-07', '12', '2023', 'PhonePe', '1704282029-8188-128787856767.jpg', '2024-01-03 17:10:29', 'Approved', NULL),
(47, '983165', 'mdzinnurain9113', '50', '2024-01-07', '01', '2024', 'PhonePe', '1704282044-4010-128787856767.jpg', '2024-01-03 17:10:44', 'Approved', NULL),
(48, '414216', 'wasimkaiser5391', '100', '2024-02-02', '02', '2024', 'PhonePe', '1706777930-9377-ww1.jpg', '2024-02-01 14:28:50', 'Approved', NULL),
(49, '989275', 'sultanashraf1162', '100', '2024-02-02', '02', '2024', 'PhonePe', '1706778736-5252-WhatsApp Image 2024-02-01 at 14.40.23_4d586a34.jpg', '2024-02-01 14:42:16', 'Approved', NULL),
(50, '762481', 'shamsherali4731', '100', '2024-02-05', '02', '2024', 'PhonePe', '1706781572-6806-sam11.jpg', '2024-02-01 15:29:32', 'Approved', NULL),
(51, '425042', 'unknown9772', '100', '2024-02-02', '02', '2024', 'GPay', '1706782777-8054-Sabr123456.jpg', '2024-02-01 15:49:37', 'Approved', NULL),
(52, '926837', 'mdejaz4950', '100', '2024-02-02', '02', '2024', 'PhonePe', '1706856196-7362-1235575.jpg', '2024-02-02 12:13:16', 'Approved', NULL),
(53, '626911', 'mohammadmerajali4505', '100', '2024-02-02', '02', '2024', 'GPay', '1707115494-8644-mmmmmm.jpg', '2024-02-05 12:14:54', 'Approved', NULL),
(54, '983165', 'mdzinnurain9113', '100', '2024-02-07', '02', '2024', 'PhonePe', '1707119453-1293-nnn.jpg', '2024-02-05 13:20:53', 'Approved', NULL),
(55, '763152', 'hasanraja9529', '109', '2024-02-02', '02', '2024', 'PhonePe', '1708083761-7984-WhatsApp Image 2024-02-16 at 17.10.59_c72ac7a5.jpg', '2024-02-16 17:12:41', 'Approved', NULL),
(56, '295870', 'mdirfan1239', '100', '2024-02-07', '02', '2024', 'PhonePe', '1708941139-2563-WhatsApp Image 2024-02-21 at 19.38.06.jpeg', '2024-02-26 15:22:19', 'Approved', NULL),
(57, '763152', 'hasanraja9529', '100', '2024-03-02', '03', '2024', 'PhonePe', '1709289744-5104-WhatsApp Image 2024-03-01 at 16.00.35.jpeg', '2024-03-01 16:12:24', 'Approved', NULL),
(58, '989275', 'sultanashraf1162', '100', '2024-03-02', '03', '2024', 'GPay', '1709297956-5287-WhatsApp Image 2024-03-01 at 18.28.47.jpeg', '2024-03-01 18:29:16', 'Approved', NULL),
(59, '926837', 'mdejaz4950', '100', '2024-03-02', '03', '2024', 'PhonePe', '1709303327-9334-WhatsApp Image 2024-03-01 at 19.32.25.jpeg', '2024-03-01 19:58:47', 'Approved', NULL),
(60, '853735', 'serajali4860', '100', '2024-02-04', '02', '2024', 'PhonePe', '1709400362-4566-WhatsApp Image 2024-02-02 at 19.13.11.jpeg', '2024-03-02 22:56:02', 'Approved', NULL),
(61, '853735', 'serajali4860', '100', '2024-03-04', '03', '2024', 'PhonePe', '1709400380-1146-WhatsApp Image 2024-03-02 at 12.43.17.jpeg', '2024-03-02 22:56:20', 'Approved', NULL),
(62, '414216', 'wasimkaiser5391', '100', '2024-03-02', '03', '2024', 'PhonePe', '1709400493-1414-WhatsApp Image 2024-03-02 at 13.02.34.jpeg', '2024-03-02 22:58:13', 'Approved', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `amount` varchar(55) NOT NULL,
  `date_time` datetime NOT NULL,
  `update_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `title`, `desc`, `amount`, `date_time`, `update_date_time`, `status`) VALUES
(786, 'मस्जिद में खत में शिरकत!', 'Assalamu alaikum wa Rahmatullah,\r\n\r\n🟢खुशामदीद मेरे अजीज सबर फाउंडेशन के फैमिली मेंबर्स।\r\n\r\n🟢मुझे यह बताते हुए बेहद खुशी हो रही है कि हमारा यह छोटा सा Sabr Foundation की फैमिली इतना काबिल हो चुका है कि किसी जरूरी और जरूरत मन का मदद कर पाए |\r\n\r\n🟢टेढ़ी घाट के पास में शेखपुरा नाम का एक छोटा सा कस्बा है।\r\nउसे मस्जिद में जनाजे की खाट नहीं थी तो उसमें हमारे सबर फाउंडेशन ने सिरकत की।\r\nहमारे फाउंडेशन में जितना भी कलेक्शन हुआ था उसमें से ₹3000 की मदद की गई है उसे मस्जिद में जनाजे के खाट के लिए।\r\n\r\nअल्लाह हमें और कामयाब करें ताकि हम और ज्यादा से ज्यादा जरूरतमंद और जरूरी जगह पर अपना जान और माल दोनों खर्च करें।\r\n\r\n आमीन\r\n\r\nआप का भरोसेमंद सुल्तान', '3000', '2023-12-18 13:03:28', '2023-12-18 07:34:15', 'paid'),
(787, 'For Neendy Person', 'Dear Sabr Foundation Family Members,\r\n\r\nI hope this message finds you in good health and iman.\r\nAlhamdulillah, we are pleased to share the news of a recent\r\ndonation of 1400 rupees made by our generous member, \r\nto assist a person in need.\r\n\r\nMay Allah (SWT) reward Sabr Foundation Family Members abundantly for their compassion\r\nand willingness to help those less fortunate. This act of charity \r\nexemplifies the Islamic principles of kindness, generosity, \r\nand concern for the well-being of others.\r\n\r\nThe funds, insha\'Allah, will be utilized in a manner that aligns\r\nwith our trust\'s mission and the teachings of Islam. We are grateful\r\nfor the opportunity to make a positive impact in someone\'s life and\r\nto uphold the values of our faith.\r\n\r\nIf any trust member wishes to discuss or provide input on the \r\nallocation of these funds, please feel free to share your thoughts.\r\n\r\nJazakAllah Khair for your ongoing support and commitment to our shared mission.\r\n\r\nBest regards,\r\nSultan Ashraf', '1400', '2024-01-06 14:05:58', '2024-02-01 08:57:38', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `donation_images`
--

CREATE TABLE `donation_images` (
  `id` int(10) NOT NULL,
  `donation_id` varchar(55) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_images`
--

INSERT INTO `donation_images` (`id`, `donation_id`, `images`) VALUES
(1, '67', '16960020792219822.png'),
(2, '86', '1702880778WhatsApp Image 2023-12-11 at 17.41.21.jpeg'),
(3, '86', '1702880778WhatsApp Image 2023-12-11 at 09.42.57_be7f9121.jpg'),
(4, '67', '1702880895WhatsApp Image 2023-12-11 at 17.41.21.jpeg'),
(5, '7400', '1702882015WhatsApp Image 2023-12-11 at 17.41.21.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `membership_start_details`
--

CREATE TABLE `membership_start_details` (
  `id` int(100) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `date_time` datetime NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership_start_details`
--

INSERT INTO `membership_start_details` (`id`, `user_id`, `date`, `date_time`, `month`, `year`, `created_at`, `status`) VALUES
(6, '763152', '2023-10-02', '2023-10-02 19:01:48', '10', '2023', '2023-10-02 19:01:48', 'Active'),
(7, '926837', '2023-10-02', '2023-10-02 19:04:28', '10', '2023', '2023-10-02 19:04:28', 'Active'),
(8, '626911', '2023-10-02', '2023-10-02 19:19:18', '10', '2023', '2023-10-02 19:19:18', 'Active'),
(9, '989275', '2023-10-02', '2023-10-02 19:45:14', '10', '2023', '2023-10-02 19:45:14', 'Active'),
(10, '414216', '2023-10-02', '2023-10-02 20:05:34', '10', '2023', '2023-10-02 20:05:34', 'Active'),
(11, '762481', '2023-10-05', '2023-10-05 09:17:05', '10', '2023', '2023-10-05 09:17:05', 'Active'),
(12, '911909', '2023-10-05', '2023-10-05 09:25:43', '10', '2023', '2023-10-05 09:25:43', 'Active'),
(13, '295870', '2023-10-07', '2023-10-07 11:31:12', '10', '2023', '2023-10-07 11:31:12', 'Active'),
(14, '425042', '2023-11-02', '2023-11-02 12:45:27', '11', '2023', '2023-11-02 12:45:27', 'Active'),
(15, '853735', '2023-11-04', '2023-11-04 10:57:11', '11', '2023', '2023-11-04 10:57:11', 'Active'),
(16, '715432', '2023-11-06', '2023-11-06 18:12:56', '11', '2023', '2023-11-06 18:12:56', 'Active'),
(17, '983165', '2023-11-07', '2023-11-07 13:49:25', '11', '2023', '2023-11-07 13:49:25', 'Active'),
(18, '244490', '2023-12-11', '2023-12-11 17:47:59', '12', '2023', '2023-12-11 17:47:59', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `user_id` int(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mob_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_created_at` datetime NOT NULL,
  `user_updated_at` datetime NOT NULL,
  `user_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`user_id`, `user_username`, `user_email`, `user_mob_number`, `password`, `user_type`, `user_created_at`, `user_updated_at`, `user_status`) VALUES
(244490, 'faizahmad2362', 'faizrahaman668@gmail.com', '8340312533', '$2y$10$MA27nmnXpj6bPaFs7C1ZHeXxhLoMt9/877vE2H0uKuESKivxxyhVO', 'member', '2023-10-05 19:53:16', '2023-10-05 19:53:16', '1'),
(295870, 'mdirfan1239', 'ansari.irfan444@gmail.com', '9973204764', '$2y$10$YpwAgpVpau5R09ryjFSqJePVc0RvVtKp0lJYmTrmBfXmFJZQ4JSvK', 'member', '2023-10-06 14:02:33', '2023-10-06 14:02:33', '1'),
(414216, 'wasimkaiser5391', 'wasimkaiser9211@gmail.com', '7782039138', '$2y$10$MA27nmnXpj6bPaFs7C1ZHeXxhLoMt9/877vE2H0uKuESKivxxyhVO', 'member', '2023-10-02 19:59:50', '2023-10-02 19:59:50', '1'),
(425042, 'unknown9772', 'Unknown@gmail.com', '9080706050', '$2y$10$ptjh7IFzWKquxXU9XNS8Xe07HLJrp548xiVjNBt6oUCaKxrD41XYC', 'member', '2023-10-02 20:39:04', '2023-10-02 20:39:04', '1'),
(572446, 'asifali2956', 'drakerasif007@gmail.com', '8282827901', '$2y$10$fA02v0BAisW72f8FT3.uZuEVs.e4T8Py4GNVTONQU.9mNfeG9cqYS', 'member', '2023-10-05 12:27:03', '2023-10-05 12:27:03', '1'),
(626911, 'mohammadmerajali4505', 'mohammadmerajalinet@gmail.com', '7564811486', '$2y$10$MA27nmnXpj6bPaFs7C1ZHeXxhLoMt9/877vE2H0uKuESKivxxyhVO', 'member', '2023-10-02 19:11:36', '2023-10-02 19:11:36', '1'),
(715432, 'mdaftabalam7490', 'mdaftabalam@gmail.com', '7070977338', '$2y$10$R8UeQ9TomU/R0FMMLPbxgeSWMCoa7a6ywU4mvSI5.Zwi2lD92gf8q', 'member', '2023-11-06 18:10:23', '2023-11-06 18:10:23', '1'),
(762481, 'shamsherali4731', 'alishamsher0645@gmail.com', '9852170096', '$2y$10$MA27nmnXpj6bPaFs7C1ZHeXxhLoMt9/877vE2H0uKuESKivxxyhVO', 'member', '2023-10-05 09:09:35', '2023-10-05 09:09:35', '1'),
(763152, 'hasanraja9529', 'hasanraja.sda@gmail.com', '6207691440', '$2y$10$MA27nmnXpj6bPaFs7C1ZHeXxhLoMt9/877vE2H0uKuESKivxxyhVO', 'member', '2023-10-02 18:51:37', '2023-10-02 18:51:37', '1'),
(786786, 'sabr786786', 'sabr786@gmail.com', '0786786786', '$2y$10$YpwAgpVpau5R09ryjFSqJePVc0RvVtKp0lJYmTrmBfXmFJZQ4JSvK', 'admin', '2023-02-18 07:03:31', '2023-02-18 07:03:31', '1'),
(853735, 'serajali4860', 'serajking7808@gmail.com', '8340430927', '$2y$10$MA27nmnXpj6bPaFs7C1ZHeXxhLoMt9/877vE2H0uKuESKivxxyhVO', 'member', '2023-11-03 01:37:06', '2023-11-03 01:37:06', '1'),
(911909, 'afzalali162', 'afzalali7860123@gmail.com', '8521603814', '$2y$10$DlGEoOGwP.vdZAPUj128HeyZXk93kGBznzo.TWgiVoITmb4Wcb/l.', 'member', '2023-10-02 19:29:32', '2023-10-02 19:29:32', '1'),
(926837, 'mdejaz4950', 'mdejaz9090@gmail.com', '7987267502', '$2y$10$YpwAgpVpau5R09ryjFSqJePVc0RvVtKp0lJYmTrmBfXmFJZQ4JSvK', 'member', '2023-10-02 18:50:40', '2023-10-02 18:50:40', '1'),
(983165, 'mdzinnurain9113', 'mdzinnurain786@gmail.com', '9685354526', '$2y$10$aCyUHt/0gH.666yOFq/ozOpCh3hKZWGHLKN/loUYrmEWOwBh3aPjC', 'member', '2023-11-07 13:48:02', '2023-11-07 13:48:02', '1'),
(989275, 'sultanashraf1162', 'sultanashraf14@gmail.com', '8969474964', '$2y$10$MA27nmnXpj6bPaFs7C1ZHeXxhLoMt9/877vE2H0uKuESKivxxyhVO', 'member', '2023-10-02 19:40:41', '2023-10-02 19:40:41', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_curr_address` varchar(500) DEFAULT NULL,
  `user_parm_address` varchar(500) DEFAULT NULL,
  `user_star_donator` varchar(255) DEFAULT NULL,
  `user_profession` varchar(255) DEFAULT NULL,
  `user_marital_status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `user_name`, `user_curr_address`, `user_parm_address`, `user_star_donator`, `user_profession`, `user_marital_status`, `created_at`, `updated_at`, `desc`, `profile_pic`) VALUES
(10, 786786, 'sabr786786', 'Delhi, India', 'Delhi, India', '1', 'Engineer', 'single', '2023-02-18 07:06:31', '2023-02-18 11:39:11', 'I Trust Allah Subhanahu wa ta\'ala', '1676788555-9594-Sabr.png'),
(27, 926837, 'Md Ejaz ', 'Makhdoom Sarai Dakhin Tola Siwan', 'Makhdoom Sarai Dakhin Tola Siwan', '1', 'Engineer', 'single', '2023-10-02 18:50:40', '2023-10-02 18:56:50', '', '1696253501-6568-IMG_20220820_080346.jpg'),
(28, 763152, 'Hasan Raja', 'Makhdoom Sarai Dakhin Tola', 'Makhdoom Sarai Dakhin Tola', '1', 'student', 'single', '2023-10-02 18:51:37', '2023-10-02 18:57:27', 'Make your dream your loyality', '1696253150-8505-Screenshot_2023-10-02-18-55-19-26_6012fa4d4ddec268fc5c7112cbb265e7.jpg'),
(29, 626911, 'Mohammad Meraj Ali', NULL, NULL, '1', NULL, NULL, '2023-10-02 19:11:36', '2023-10-02 19:11:36', NULL, '1696254235-5892-IMG_20230407_001733_913.jpg'),
(30, 911909, 'Afzal Ali', 'Dumdum, kolkata', 'Gopalganj, Bihar ', '1', 'Engineer', 'marride', '2023-10-02 19:29:32', '2023-10-05 09:47:52', '', '1696479412-6425-1000009577.jpg'),
(31, 989275, 'Sultan Ashraf', 'Makhdoom Sarai South Mohalla Siwan', 'Makhdoom Sarai South Mohalla Siwan', '1', 'Engineer', 'single', '2023-10-02 19:40:41', '2023-10-02 19:42:41', 'Allah is The Grestest.', '1696255922-6447-1000105803.jpg'),
(32, 414216, 'Wasim kaiser', 'Makhdoom sarai ', 'Makhdoom sarai ', '1', 'other', 'single', '2023-10-02 19:59:50', '2023-10-02 20:03:27', 'Allah hu Akbar ', '1696257140-5843-IMG-20230928-WA0017.jpg'),
(33, 425042, 'Unknown ', 'Siwan, Bihar', 'Siwan, Bihar', '1', 'Engineer', 'single', '2023-10-02 20:39:04', '2023-11-14 08:32:36', 'Allah is One', '1697743354-8124-LG.png'),
(34, 762481, 'Shamsher ali', NULL, NULL, '1', NULL, NULL, '2023-10-05 09:09:35', '2023-10-05 09:09:35', NULL, '1696477742-5006-Screenshot_20230621-000102.png'),
(35, 572446, 'Asif ali', NULL, NULL, '1', NULL, NULL, '2023-10-05 12:27:03', '2023-10-05 12:27:03', NULL, NULL),
(36, 244490, 'FAIZ AHMAD', 'M.Saray Siwan', 'M.Saray Siwan', '1', 'student', 'single', '2023-10-05 19:53:16', '2023-10-05 19:56:48', ' Myself Faiz', '1696516042-4443-IMG20231004170801.jpg'),
(37, 295870, 'Md Irfan ', 'Makhdoom sarai ', 'Makhdoom sarai ', '1', 'other', 'single', '2023-10-06 14:02:33', '2023-10-06 18:10:32', '', '1696596087-9416-1000084402.jpg'),
(38, 853735, 'Seraj Ali', 'Makhdoom Sarai South Siwan', 'Makhdoom Sarai South Siwan', '1', 'Engineer', 'single', '2023-11-03 01:37:06', '2023-11-03 01:49:24', 'One', '1701758208-9810-Capture142.PNG'),
(39, 715432, 'MD Aftab Alam', 'Makhdoom Sarai South Mohallah Siwan', 'Makhdoom Sarai South Mohallah Siwan', '1', 'Doctor', 'single', '2023-11-06 18:10:23', '2023-11-06 18:14:26', 'Allah is The Greatest....!', '1699274624-1340-WhatsApp Image 2023-11-06 at 18.13.30_91e2b40f.jpg'),
(40, 983165, 'MD Zinnurain', 'Batla House, New Delhi', 'Batla House, New Delhi', '1', 'Engineer', 'single', '2023-11-07 13:48:02', '2024-01-03 17:12:03', 'Allah is The Greatest....!', '1704282082-4781-Logo 512x512.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charity_start_month_date_time`
--
ALTER TABLE `charity_start_month_date_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_images`
--
ALTER TABLE `donation_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_start_details`
--
ALTER TABLE `membership_start_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charity_start_month_date_time`
--
ALTER TABLE `charity_start_month_date_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=788;

--
-- AUTO_INCREMENT for table `donation_images`
--
ALTER TABLE `donation_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `membership_start_details`
--
ALTER TABLE `membership_start_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=999246;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
