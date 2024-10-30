-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3406
-- Generation Time: Oct 30, 2024 at 04:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2`
--

-- --------------------------------------------------------

--
-- Table structure for table `respuesta`
--

CREATE TABLE `respuesta` (
  `id` int NOT NULL,
  `id_tema` int NOT NULL,
  `respuesta` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `autor` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `respuesta`
--

INSERT INTO `respuesta` (`id`, `id_tema`, `respuesta`, `autor`, `fecha`) VALUES
(1, 20, 'eso es verdad', 'carlos', '2024-10-29'),
(2, 20, 'creo que la harina pan no tiene la misma calidad de antes', 'jose', '2024-10-29'),
(3, 21, 'eso es verdad', 'ramos', '2024-10-29'),
(4, 23, 'pienso que vinicius fue el mejor a nivel tecnico, pero le falta hulmidad como deportista', 'xavi', '2024-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE `tema` (
  `id` int NOT NULL,
  `titulo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tema` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `autor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tema`
--

INSERT INTO `tema` (`id`, `titulo`, `tema`, `autor`, `fecha`, `hora`) VALUES
(20, 'hacer arepas', 'necesitamos harina pan', 'chef carlos', '2024-10-29', '20:05:08'),
(21, 'jugar futbol', 'para jugar futbol solo hace falta un balon', 'messi', '2024-10-29', '20:30:46'),
(22, 'hacer ejercicio', '20 flexiones, 20 abdominales', 'terminator', '2024-10-29', '21:02:48'),
(23, 'balon de oro', 'el ganador del balon de oro es rodri', 'el chiringuito', '2024-10-30', '15:56:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
