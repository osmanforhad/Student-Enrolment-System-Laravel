-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 06:06 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrolment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'osman', 'osmanforhad93@gmail.com', '817b618be26e9ad1034392949d55309d', '01672880108', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_08_15_010649_create_admin_tbl_table', 1),
(2, '2018_08_18_120123_create_student_tbl_table', 2),
(3, '2018_08_28_085521_create_teachers_tbl', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fathersname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mothersname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_admissionyear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_roll`, `student_fathersname`, `student_mothersname`, `student_email`, `student_phone`, `student_address`, `student_image`, `student_password`, `student_department`, `student_admissionyear`) VALUES
(1, 'Zubayer Sourav', '315548', 'Zubayer', 'Sultana', 'Zubayer@gmaill.com', '0182878868', 'Rangamati', 'image/ODv41uPZfavFP3NXsPOo.jpg', 'c40f62599c8f80f85f575c320b110a73', '1', '2018-08-26'),
(2, 'fokhrul islam', '315540', 'rimon', 'hazera', 'rimon@gmaill.com', '0182878869', 'Dhaka', 'image/45G8aaxOsYi2nSGDPUYj.jpg', '0960', '2', '2018-08-28'),
(4, 'Sojol  Dash', '335597', 'i am not sure', 'i don\'t know', 'sajal@gmail.com', '055764578900', 'DagunBhuiyan Feni', 'image/HHtwN6csvdDglzyniGRM.jpg', 'c40f62599c8f80f85f575c320b110a73', '3', '2018-08-27'),
(6, 'Tajul', '315560', 'i am not sure', 'i don\'t know', 'tajul@gmail.com', '07784578900', 'Cagol naiya', 'image/R3fYWHkQHn8VQHQ6WBfj.jpg', 'c40f62599c8f80f85f575c320b110a73', '5', '2018-08-27'),
(7, 'rajon', '315567', 'i an not sure', 'i don\'t know', 'rajon@gmail.com', '0155531576', 'Dhaka', 'image/9ZHVVrCiH1ut9OqESdYg.jpg', 'c40f62599c8f80f85f575c320b110a73', '5', '2018-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_tbl`
--

CREATE TABLE `teachers_tbl` (
  `teachers_id` int(10) UNSIGNED NOT NULL,
  `teachers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers_tbl`
--

INSERT INTO `teachers_tbl` (`teachers_id`, `teachers_name`, `teachers_phone`, `teachers_address`, `teachers_department`, `teachers_image`, `created_at`, `updated_at`) VALUES
(1, 'Basudeb Mollick', '01929647317', 'Fulgazi Feni', '1', 'image/pvVxQ3YKiJtmJUxmODpe.jpg', NULL, NULL),
(3, 'Mizanur Rahman', '01929647310', 'Cumilla', '3', 'image/WE4XE5QTe9RgWm4RzRlb.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers_tbl`
--
ALTER TABLE `teachers_tbl`
  ADD PRIMARY KEY (`teachers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers_tbl`
--
ALTER TABLE `teachers_tbl`
  MODIFY `teachers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
