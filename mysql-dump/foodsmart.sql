-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Jun 14, 2021 at 02:59 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `recipeId` int(255) NOT NULL,
  `star` int(1) NOT NULL,
  `rateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `userId`, `recipeId`, `star`, `rateDate`) VALUES
(1, 4, 1, 3, '2021-06-13 20:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `recipeTitle` varchar(250) NOT NULL,
  `recipeText` text NOT NULL,
  `images` varchar(15) NOT NULL,
  `recipeIngredients` text NOT NULL,
  `postDate` datetime NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `userId`, `recipeTitle`, `recipeText`, `images`, `recipeIngredients`, `postDate`, `status`) VALUES
(1, 4, 'Vegetarian cheese salad', '\r\n01.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n02.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n03.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n04.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n', 'sr1.jpg', '', '2021-06-13 16:06:10', 'published'),
(2, 4, 'Sushi Easy Receipy', '\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>01.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>02.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>03.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>04.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                    ', 'sr2.jpg', '', '2021-06-14 01:38:43', 'published'),
(4, 4, 'Homemade italian pasta', '\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>01.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>02.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>03.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>04.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                    ', 'sr3.jpg', '', '2021-06-14 01:38:43', 'published'),
(5, 4, 'Baked Bread', '\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>01.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>02.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>03.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>04.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                    ', 'sr4.jpg', '', '2021-06-14 01:38:43', 'published'),
(6, 4, 'Scalops on salt', '\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>01.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>02.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>03.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                        <!-- Single Preparation Step -->\r\n                        <div class=\"single-preparation-step d-flex\">\r\n                            <h4>04.</h4>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\r\n                        </div>\r\n                    ', 'sr5.jpg', '', '2021-06-14 01:38:43', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fulName` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `usrName` varchar(50) NOT NULL,
  `usrPass` text NOT NULL,
  `regDate` datetime NOT NULL,
  `userStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fulName`, `email`, `dob`, `usrName`, `usrPass`, `regDate`, `userStatus`) VALUES
(4, 'ankur', 'chowdhuryankur@yahoo.com', '2021-06-16', 'chowdhuryanku', '$2y$10$kl2BGAnjIauAEz/QH/G.0eiw1.LPMT5AVwp5YD5lg.2AEAZ5nWGmO', '2021-06-13 16:06:00', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userrt_id` (`userId`),
  ADD KEY `fk_rcp_id` (`recipeId`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rcp_id` FOREIGN KEY (`recipeId`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userrt_id` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
