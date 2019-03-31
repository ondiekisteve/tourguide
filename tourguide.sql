-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 03:30 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(255) NOT NULL,
  `fromdate` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `todate` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `days` int(255) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fromdate`, `place`, `todate`, `price`, `days`, `userId`) VALUES
(1, '05-05-2018', '07-05-2018', '', 0, 0, 0),
(2, '05-05-2018', '07-05-2018', '', 0, 0, 0),
(3, '05-05-2018', '07-05-2018', '10752', 2, 0, 0),
(4, '05-05-2018', '', '06-05-2018', 5376, 1, 0),
(5, '05-05-2018', 'Love.Fish', '07-05-2018', 9000, 2, 0),
(6, '13-05-2018', 'Love.Fish', '15-05-2018', 9000, 2, 9),
(7, '14-05-2018', 'Love.Fish', '16-05-2018', 9000, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `place_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `place_id`, `image`, `caption`) VALUES
(2, 6, 'IMG_20171117_170408.jpg', 'Beatiful Water falls'),
(3, 6, 'IMG_20171117_171226.jpg', 'Yes am uploading agian'),
(4, 8, 'IMG-20171117-WA0039.jpg', 'Oooh yes'),
(5, 6, 'beach29.jpg', 'Welcome Visitors'),
(6, 6, 'lock-screen-background.jpg', 'Awesome and Cool place to Bliz'),
(7, 6, 'beach29.jpg', 'Clean and cool swimming pool'),
(8, 1, 'beach29.jpg', 'Beautiful'),
(9, 1, 'beach9.jpg', 'Felix testing');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `longtude` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `latitude`, `longtude`, `type`) VALUES
(1, 'Love.Fish', '580 Darling Street, Rozelle, NSW', -33.861034, 151.171936, 'Mountain'),
(2, 'Young Henrys', '76 Wilford Street, Newtown, NSW', -33.898113, 151.174469, 'bar'),
(3, 'Hunter Gatherer', 'Greenwood Plaza, 36 Blue St, North Sydney NSW', -33.840282, 151.207474, 'bar'),
(4, 'The Potting Shed', '7A, 2 Huntley Street, Alexandria, NSW', -33.910751, 151.194168, 'bar'),
(5, 'Nomad', '16 Foster Street, Surry Hills, NSW', -33.879917, 151.210449, 'bar'),
(6, 'Three Blue Ducks', '43 Macpherson Street, Bronte, NSW', -33.906357, 151.263763, 'restaurant'),
(7, 'Single Origin Roasters', '60-64 Reservoir Street, Surry Hills, NSW', -33.881123, 151.209656, 'restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `idno` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `membership_status` int(10) NOT NULL,
  `activation_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `idno`, `mobile`, `residence`, `email`, `pwd`, `membership_status`, `activation_code`) VALUES
(9, 'Stephen', 'Ondieki', 31089042, 700837637, 'Nairobi', 'ondiekistephen5@gmail.com', '9daea24b3b4d8bd1f0b2038e77212d99', 0, '1281250232');

-- --------------------------------------------------------

--
-- Table structure for table `place_description`
--

CREATE TABLE `place_description` (
  `id` int(255) NOT NULL,
  `place_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `actual_price` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `surrounding_amenities` varchar(255) NOT NULL,
  `guide_assistant` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `recreation_activities` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_description`
--

INSERT INTO `place_description` (`id`, `place_id`, `image`, `actual_price`, `discount`, `description`, `surrounding_amenities`, `guide_assistant`, `email`, `phone`, `recreation_activities`) VALUES
(1, 1, 'beach9.jpg', 5000, 10, '                                                                This is a beataiful and lovely place to stay                                                        ', 'Police Station', 'Single Origin Roasters', 'ondiekistephen5@gmail.com', '0700837637', 'Mountain Climbing'),
(2, 6, 'beach29.jpg', 5600, 4, 'This is a nice and well This is a nice and well  This is a nice and well  This is a nice and well This is a nice and well This is a nice and well  This is a nice and well  This is a nice and well This is a nice and well This is a nice and well  This is a ', 'Secondary School', 'Cynthia Chebet', 'chebet@gmail.com', '0700837637', 'Scating'),
(3, 1, 'beach9.jpg', 7800, 4, 'This is pretty cool and awesome This is pretty cool and awesome This is pretty cool and awesome This is pretty cool and awesome This is pretty cool and awesome This is pretty cool and awesome This is pretty cool and awesome This is pretty cool and awesome', 'Secondary School', 'Kennedy Kemboi', 'kemboi@gmail.com', '070007373737', 'Scating'),
(4, 6, 'beach6.jpg', 7800, 10, 'This is also a nice place to be This is also a nice place to be This is also a nice place to be This is also a nice place to be This is also a nice place to be This is also a nice place to be This is also a nice place to be This is also a nice place to be', 'Secondary School', 'Benson Chacha', 'benson@gmail.com', '078227282828', 'Horse Racing'),
(5, 7, 'photo-landscape.jpg', 45600, 7, 'Also this a cool and secure place to be Also this a cool and secure place to beAlso this a cool and secure place to beAlso this a cool and secure place to beAlso this a cool and secure place to beAlso this a cool and secure place to beAlso this a cool and', 'Primary School', 'Sharon Momanyi', 'sharon@gmail.com', '070083737373', 'Sports');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_description`
--
ALTER TABLE `place_description`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `place_description`
--
ALTER TABLE `place_description`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
