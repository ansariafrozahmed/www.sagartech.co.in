-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2023 at 04:17 AM
-- Server version: 10.5.21-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sagartec_sagartech`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `act_id` int(11) NOT NULL,
  `act_name` varchar(244) NOT NULL,
  `act_date` varchar(244) NOT NULL,
  `act_content` varchar(255) NOT NULL,
  `act_org` varchar(244) NOT NULL,
  `act_part` varchar(244) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`act_id`, `act_name`, `act_date`, `act_content`, `act_org`, `act_part`) VALUES
(9, 'Web Development Workshop', '02/10/2020', '5 days Web Development Workshop conducted at AC Patil College of Engineering', '', ''),
(11, 'Imagica', '12/13/2022', 'Trip to imagica', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_username` varchar(244) NOT NULL,
  `ad_password` varchar(244) NOT NULL,
  `ad_token` varchar(244) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_password`, `ad_token`) VALUES
(1, 'sagartec', 'techsagar@backoffice', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(3, 'E-Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `graphic`
--

CREATE TABLE `graphic` (
  `grap_id` int(11) NOT NULL,
  `grap_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `graphic`
--

INSERT INTO `graphic` (`grap_id`, `grap_name`) VALUES
(1, 'logo'),
(2, 'poster'),
(3, 'pamplet'),
(4, 'sticker'),
(5, 'achievement'),
(6, 'intern'),
(7, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `cl_id` int(11) NOT NULL,
  `cl_username` varchar(255) NOT NULL,
  `cl_password` varchar(255) NOT NULL,
  `cl_interest` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`cl_id`, `cl_username`, `cl_password`, `cl_interest`) VALUES
(2, 'tester', 'tester123', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `img_act_id` int(11) NOT NULL,
  `img_name` varchar(244) NOT NULL,
  `img_tag` varchar(244) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_act_id`, `img_name`, `img_tag`) VALUES
(41, 7, '', '../images/logo/scanlogo.png'),
(42, 7, '', '../images/logo/hoflogo.jpg'),
(39, 7, '', '../images/logo/elelogo.png'),
(40, 7, '', '../images/logo/kushmushlogo.png'),
(37, 7, '', '../images/logo/saudiwellslogo.png'),
(38, 7, '', '../images/logo/dpclogo.png'),
(35, 6, '', '../images/interns/intern1.jpg'),
(36, 7, '', '../images/logo/asset5.png'),
(33, 6, '', '../images/interns/intern3.jpg'),
(34, 6, '', '../images/interns/intern2.jpg'),
(31, 5, '', '../images/achievements/isoreduced.png'),
(32, 5, '', '../images/achievements/partner.png'),
(22, 4, '', '../images/stickers/sticker2.png'),
(20, 3, '', '../images/pamplets/poster2.jpg'),
(21, 4, '', '../images/stickers/sticker1.png'),
(19, 3, '', '../images/pamplets/poster1.jpg'),
(18, 2, '', '../images/posters/hofposter.jpg'),
(30, 9, 'WhatsApp Image 2020-05-06 at 17.40.44.jpeg', 'images/WhatsApp Image 2020-05-06 at 17.40.44.jpeg'),
(10, 9, 'ACPCOE1.jpeg', 'images/ACPCOE1.jpeg'),
(11, 9, 'ACPCOE2.jpeg', 'images/ACPCOE2.jpeg'),
(43, 7, '', '../images/logo/southlogo.png'),
(44, 7, '', '../images/logo/enrichlogo.png'),
(45, 7, '', '../images/logo/maflogo.png'),
(46, 7, '', '../images/logo/sklogo.png'),
(47, 7, '', '../images/logo/rtmlogo.png'),
(48, 7, '', '../images/logo/rubylogo.png'),
(49, 2, '', '../images/posters/HOP latest.jpeg'),
(50, 5, '', '../images/achievements/Capture.PNG'),
(52, 11, 'WhatsApp Image 2022-12-13 at 18.06.18.jpg', 'images/WhatsApp Image 2022-12-13 at 18.06.18.jpg'),
(53, 5, '', '../images/achievements/WhatsApp Image 2022-12-13 at 18.06.18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `port_id` int(11) NOT NULL,
  `port_pos` int(11) DEFAULT NULL,
  `port_name` varchar(244) NOT NULL,
  `port_img` varchar(244) NOT NULL,
  `port_link` varchar(244) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`port_id`, `port_pos`, `port_name`, `port_img`, `port_link`) VALUES
(1, 10, 'SAUDI WELLS', 'saudiwells_small.png', 'http://saudiwells.com'),
(3, 14, 'DPCSAUDI', 'dpcsaudi_small.png', 'https://dpcsaudi.com'),
(6, 11, 'SCAN2PLAN', 'scan2plan_small.png', 'http://scan2plan.in'),
(14, 7, 'SOUTH FIELD', 'southfield_small.png', 'https://southfield.co.in'),
(9, 15, 'ENRICH KART', 'enrichkart_small.png', 'http://enrichkart.com'),
(19, 12, 'Enrich Eyelets', 'enrich_eyelets_small.png', 'https://enricheyelets.com'),
(31, 1, 'We care Charity', 'wecare_min.png', 'https://wecarecharitable.org'),
(30, 5, 'Techno Ruhez', 'technoruhez screenshot-min.png', 'https://shoptechnoruhez.com'),
(25, 13, 'Ahad Marine Services', 'rsz_1ahad_marine_full_screen_capture.png', 'https://ahadmarine.com'),
(20, 8, 'Mirza Agro Foods', 'mirzaagrofoods_small.png', 'https://mirzaagrofoods.com'),
(21, 9, 'Dunes Laundry', 'duneslaundry_small.png', 'https://duneslaundry.com'),
(32, 19, 'Metal Tech Portable Cabin', 'metal_tech_min.png', 'https://metaltechportablecabin.com/'),
(33, 3, 'Dunes Properties', 'dunes_properties-min.png', 'https://dunesproperties.ae/');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_desc` text NOT NULL,
  `post_content` text NOT NULL,
  `post_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `post_date`, `post_desc`, `post_content`, `post_img`) VALUES
(101, 'Migrate WP Website from One Domain To Another', '2020-07-11', 'Wants to transfer the entire wordpress website from one domain to another domain, here you can do it easily by going through following details.', '<p>Follow the steps for transferring the WordPress website from One Domain to Another:</p>\r\n<p>Step 1: Login to website which we want to transfer.</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"../images/image1.jpg\" alt=\"\" /></p>\r\n<p>Step 2 : Second Image</p>\r\n<p><img src=\"../images/3245654.jpg\" alt=\"\" /></p>', 'migrate_wp_website.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(244) NOT NULL,
  `test_rate` varchar(244) NOT NULL,
  `test_content` varchar(244) NOT NULL,
  `test_gen` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`test_id`, `test_name`, `test_rate`, `test_content`, `test_gen`) VALUES
(7, 'Elham S.', '4.5', 'Putting together a website is a task, finding the right individual or company is even more complex. I did my search around looking for this particular company that has the ability to create, design and optimize my website. I have no words to ex', 'Male'),
(6, 'Shweta Dogra', '4.0', 'It was a great experience. Learnt something new. It was fun. It was exiting to make forms ourself that we only used to fill for years. Enlighted a lot of enthusiasm.', 'Female'),
(8, 'Mohammed Ammar Mungi', '4.5', 'Great platform to create a website and apps. Where in you get numbers of sample templates which will help you to understand the types of web pages can be generated with minimal amount. This templates has help us understand the concept and most ', 'Male'),
(9, 'Shadab Shaikh', '4.5', 'Know this organization. And one can rely on it\'s sustainability, and get assured of quality work no doubt on that!', 'Male'),
(10, 'Musharraf Ansari', '4.5', 'Experienced web designers , quick responses to problems at a very affordable price . I\'m very happy with my website and would definitely suggest them to others.', 'Male'),
(11, 'Imran Ali Sayyed', '4.5', 'Nice work Sagar Tech team. Done excellent work for my construction company build an amazing website. Great work! appreciated!', 'Male'),
(12, 'Washim Waghoo', '4.5', 'It being really good initiatives to be taken by the developer and owner, seems to be beneficial and helpful for whole humanity through out the world. Keep it up and best of luck.', 'Male'),
(13, 'Muzammil Jethwa', '4.5', 'It was a good experience with SagarTech as having great knowledge regarding website development and helpful in terms of co-ordination with Mobile apps as well. good going keep it up.', 'Male'),
(14, 'Danish Mulla', '4.5', 'Best website building work all over Mumbai !!! Excellent job!!! Was a great experience with their customer friendly staff...keep it up guys.', 'Male'),
(15, 'Huda Mungi', '4.5', 'Excellent work, supportive staff and have a very good experience in  pocket friendly price.', 'Female'),
(16, 'Humaira Waghoo', '4.5', 'It\'s a great platform to showcase and enhance your business skills and goals. They share very good team work as they complete their assigned task or project within deadline.', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `thm_id` int(11) NOT NULL,
  `thm_cat_id` int(11) NOT NULL,
  `thm_name` varchar(255) NOT NULL,
  `thm_link` varchar(255) NOT NULL,
  `thm_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`thm_id`, `thm_cat_id`, `thm_name`, `thm_link`, `thm_img`) VALUES
(9, 3, 'Denso - Electronics WooCommerce WordPress Theme', 'https://demoapus.com/landing-page/denso/?storefront=envato-elements', 'Denso.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `graphic`
--
ALTER TABLE `graphic`
  ADD PRIMARY KEY (`grap_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`port_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`thm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `graphic`
--
ALTER TABLE `graphic`
  MODIFY `grap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `port_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `thm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
