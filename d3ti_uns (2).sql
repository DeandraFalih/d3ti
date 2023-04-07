-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 06:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d3ti_uns`
--

-- --------------------------------------------------------

--
-- Table structure for table `d3ti_post`
--

CREATE TABLE `d3ti_post` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_featured_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_excerpt` varchar(100) NOT NULL,
  `post_category` varchar(32) NOT NULL,
  `post_status` enum('Pending','Draft','Published') NOT NULL,
  `post_date` date DEFAULT NULL,
  `post_author` varchar(64) NOT NULL,
  `post_link` varchar(64) NOT NULL,
  `post_meta` text NOT NULL,
  `post_tags` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d3ti_post`
--

INSERT INTO `d3ti_post` (`post_id`, `post_title`, `post_featured_image`, `post_content`, `post_excerpt`, `post_category`, `post_status`, `post_date`, `post_author`, `post_link`, `post_meta`, `post_tags`, `created_at`, `updated_at`) VALUES
(1, 'Dosen D3TI Sukses Mengikuti NPTC Competency Certification', '27557c6d-1ee1-4f0a-b1a3-cd72620ef7db.png', 'Program Studi D3 Teknik Informatika UNS mengirimkan 1 orang dosen,  M. Asri Safi’Ie, S.Si.,M.Kom untuk mengikuti Hibah Pelatihan dan Sertifikasi Kompetensi dengan Skema A2 yang diadakan oleh Direktorat Kelembagaan Dan Sumber Daya Pendidikan Tinggi Vokasi.\n<br/><br/>\nPelatihan dan Serkom yang diikuti berjudul NPTC Competency Certification Immersion programme in Information Technology.Kegiatan ini diselenggarakan pada tanggal 27 November 2022 – 7 Desember 2022 yang diikuti oleh 10 peserta yang kesemuanya merupakan Dosen PTV dari berbagai daerah di Indonesia.\n<br/><br/>\nBentuk kegiatannya berupa pelatihan dan magang dan materi yang diberikan bervariasi dari pemanfaatan teknologi informasi di bidang pendidikan, pengelolaan perguruan tinggi vokasi, kunjungan industri, kerjasama dengan industri, pengembangan karir, dan lain sebagainya.\n<br/><br/>\nPematerinya memiliki pengalaman lama di dunia kerja yang kemudian memiliki motivasi tinggi untuk menyebarkan pengalaman mereka.', 'Program Studi D3 Teknik Informatika UNS mengirimkan 1 orang dosen,  M. Asri Safi’Ie, S.Si.,M.Kom', 'News', 'Published', '2023-03-14', 'Chirush', 'dosen-d3ti-sukses-mengikuti-nptc-competency-certification', 'Program Studi D3 Teknik Informatika UNS mengirimkan 1 orang dosen,  M. Asri Safi’Ie, S.Si.,M.Kom untuk mengikuti Hibah Pelatihan dan Sertifikasi Kompetensi dengan Skema A2 yang diadakan oleh Direktorat Kelembagaan Dan Sumber Daya Pendidikan Tinggi Vokasi.', 'tes', '2023-03-14', '2023-03-14'),
(4, 'Tes', '5e5042a6-8593-4563-bd41-75663e28764a.png', '**tes**', 'tes', 'News', 'Published', '2023-03-14', 'Chirush', 'dsds', 'tes', 'tes', '2023-03-14', '2023-03-14'),
(5, 'tes', 'c06777e7-3d7e-48ef-ad86-57d928b5259c.png', 'tes', 'tes', 'News', 'Published', '2023-03-20', 'Chirush', 'teet', 'tes', 'tes', '2023-03-20', '2023-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `d3ti_post_categories`
--

CREATE TABLE `d3ti_post_categories` (
  `post_categories_id` int(11) NOT NULL,
  `post_categories_name` varchar(32) NOT NULL,
  `post_categories_description` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d3ti_post_categories`
--

INSERT INTO `d3ti_post_categories` (`post_categories_id`, `post_categories_name`, `post_categories_description`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', 'is a default category used for posts that don\'t fit into any othis a default category used for posts that don\'t fit into any other existing category.', '2023-03-12', '2023-03-12'),
(2, 'News', 'is a category used for posts related to current events or breaking news.', '2023-03-12', '2023-03-12'),
(8, 'Event', '-', '2023-03-14', '2023-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `d3ti_post_categories_link`
--

CREATE TABLE `d3ti_post_categories_link` (
  `post_categories_link_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_categories_id` int(11) NOT NULL,
  `post_categories_link_is_on` enum('0','1') NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `d3ti_role`
--

CREATE TABLE `d3ti_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d3ti_role`
--

INSERT INTO `d3ti_role` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2023-03-12', '2023-03-12'),
(2, 'admin', '2023-03-12', '2023-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `d3ti_role_permission`
--

CREATE TABLE `d3ti_role_permission` (
  `role_permission_id` int(11) NOT NULL,
  `role_permission_name` enum('access_post','write_post','publish_post','delete_post','review_post','access_event','write_event','publish_event','delete_event','review_event','access_product','write_product','publish_product','review_product','add_user') NOT NULL,
  `role_id` int(11) NOT NULL,
  `role_permission_is_granted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d3ti_role_permission`
--

INSERT INTO `d3ti_role_permission` (`role_permission_id`, `role_permission_name`, `role_id`, `role_permission_is_granted`) VALUES
(1, 'access_post', 1, '1'),
(2, 'write_post', 1, '1'),
(3, 'publish_post', 1, '1'),
(4, 'delete_post', 1, '1'),
(5, 'review_post', 1, '1'),
(6, 'access_event', 1, '1'),
(7, 'write_event', 1, '1'),
(8, 'publish_event', 1, '1'),
(9, 'delete_event', 1, '1'),
(10, 'review_event', 1, '1'),
(11, 'access_product', 1, '1'),
(12, 'write_product', 1, '1'),
(13, 'publish_product', 1, '1'),
(14, 'review_product', 1, '1'),
(15, 'add_user', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `d3ti_user`
--

CREATE TABLE `d3ti_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_username` varchar(32) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `password` text NOT NULL,
  `user_phone` varchar(13) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `user_picture` text DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d3ti_user`
--

INSERT INTO `d3ti_user` (`user_id`, `user_name`, `user_username`, `user_email`, `password`, `user_phone`, `user_role`, `user_picture`, `updated_at`, `created_at`) VALUES
(1, 'Fitrah Firdaus', 'chirush', 'fitrahf87@gmail.com', '$2y$10$nuKwJlhsFyL02XB4MFmq8e77soyi4bossqEI5zQcO37UlBIsrKney', '089501027942', 'superadmin', NULL, '2023-03-12', '2023-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d3ti_post`
--
ALTER TABLE `d3ti_post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_link` (`post_link`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `d3ti_post_categories`
--
ALTER TABLE `d3ti_post_categories`
  ADD PRIMARY KEY (`post_categories_id`);

--
-- Indexes for table `d3ti_post_categories_link`
--
ALTER TABLE `d3ti_post_categories_link`
  ADD PRIMARY KEY (`post_categories_link_id`),
  ADD KEY `post_categories_id` (`post_categories_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `d3ti_role`
--
ALTER TABLE `d3ti_role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `d3ti_role_permission`
--
ALTER TABLE `d3ti_role_permission`
  ADD PRIMARY KEY (`role_permission_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `d3ti_user`
--
ALTER TABLE `d3ti_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_username` (`user_username`),
  ADD KEY `user_role` (`user_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d3ti_post`
--
ALTER TABLE `d3ti_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `d3ti_post_categories`
--
ALTER TABLE `d3ti_post_categories`
  MODIFY `post_categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `d3ti_post_categories_link`
--
ALTER TABLE `d3ti_post_categories_link`
  MODIFY `post_categories_link_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d3ti_role`
--
ALTER TABLE `d3ti_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `d3ti_role_permission`
--
ALTER TABLE `d3ti_role_permission`
  MODIFY `role_permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `d3ti_user`
--
ALTER TABLE `d3ti_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `d3ti_post`
--
ALTER TABLE `d3ti_post`
  ADD CONSTRAINT `d3ti_post_ibfk_1` FOREIGN KEY (`post_author`) REFERENCES `d3ti_user` (`user_username`);

--
-- Constraints for table `d3ti_post_categories_link`
--
ALTER TABLE `d3ti_post_categories_link`
  ADD CONSTRAINT `d3ti_post_categories_link_ibfk_1` FOREIGN KEY (`post_categories_id`) REFERENCES `d3ti_post_categories` (`post_categories_id`),
  ADD CONSTRAINT `d3ti_post_categories_link_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `d3ti_post` (`post_id`);

--
-- Constraints for table `d3ti_role_permission`
--
ALTER TABLE `d3ti_role_permission`
  ADD CONSTRAINT `d3ti_role_permission_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `d3ti_role` (`role_id`);

--
-- Constraints for table `d3ti_user`
--
ALTER TABLE `d3ti_user`
  ADD CONSTRAINT `d3ti_user_ibfk_1` FOREIGN KEY (`user_role`) REFERENCES `d3ti_role` (`role_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
