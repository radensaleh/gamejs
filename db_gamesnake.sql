-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 10:05 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gamesnake`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_snake`
--

CREATE TABLE `tb_snake` (
  `id_play` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `score` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tetris`
--

CREATE TABLE `tb_tetris` (
  `id_play` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `score` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(30) NOT NULL,
  `name_user` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `name_user`, `password`, `email`) VALUES
('admin', 'admin web', 'admin', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_snake`
--
ALTER TABLE `tb_snake`
  ADD PRIMARY KEY (`id_play`);

--
-- Indexes for table `tb_tetris`
--
ALTER TABLE `tb_tetris`
  ADD PRIMARY KEY (`id_play`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_snake`
--
ALTER TABLE `tb_snake`
  MODIFY `id_play` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6543;
--
-- AUTO_INCREMENT for table `tb_tetris`
--
ALTER TABLE `tb_tetris`
  MODIFY `id_play` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
