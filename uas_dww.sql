-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 03:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_dww`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `jenis_film` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `ref` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `genre`, `jenis_film`, `gambar`, `ref`) VALUES
(1, 'Doctor Strange: in the Multiverse of Madness', 'Action, Adventure, Fantasy', 'Movies, popular', 'multivers of madnes.jpg', 'multivers.php'),
(2, 'Avengers: Infinity War', 'Action, Adventure, Sci-Fi', 'Movies, popular', 'infinity war.jpg', 'infinity-war.php'),
(3, 'Avatar: The Way of Water', 'Action, Adventure, Fantasy', 'Movies, popular', 'avatar.jpg', 'Avatar The Way of Water.php'),
(4, 'Captain Marvel', 'Action, Adventure, Sci-Fi', 'Movies, popular', 'Captain Marvel.jpg', 'Captain Marvel.php'),
(5, 'Pacific Rim: Uprising', 'Action, Adventure, Fantasy', 'Movies', 'Pacific Rim Uprising.jpg', 'Pacific Rim Uprising.php'),
(6, 'Thor: Love and Thunder', 'Action, Adventure, Comedy', 'Movies, popular', 'love and thunder.jpg', 'love and thunder.php'),
(7, 'Eternals', 'Action, Adventure, Fantasy', 'Movies', 'Eternals.jpg', 'Eternals.php'),
(8, 'Pacific Rim (2013)', 'Action, Adventure, Sci-Fi', 'Movies', 'Pacific Rim 2013.jpg', 'Pacific Rim.php'),
(9, 'Loki', 'Action, Adventure, Fantasy', 'Series, popular', 'Loki.jpg', 'loki.php'),
(10, 'Moon Knight', 'Action, Adventure, Fantasy', 'Series, popular', 'moon knight.jpg', 'mk.php'),
(11, 'Ms. Marvel', 'Action, Adventure, Comedy', 'Series', 'Ms. Marvel.jpg', 'mm.php'),
(12, 'The Falcon and the Winter Soldier', 'Action, Adventure, Drama', 'Series', 'The Falcon and the Winter Soldier.jpg', 'winter.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$T2ZcgFCjiZmesEciC/kqn.3TRKX8XsUlahfj99oHVRr6vCOb6fqvm'),
(4, 'user', '$2y$10$oSBi8gWId.szcxcVRgvFtObIOmU6o7EBO3JufCDkzQvlWjXCZm.S6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
