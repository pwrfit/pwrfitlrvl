-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 05:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwrfitbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `IdComentario` int(11) NOT NULL,
  `IdVideo` int(11) NOT NULL,
  `Comentario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`IdComentario`, `IdVideo`, `Comentario`) VALUES
(1, 1, 'comentario'),
(2, 1, 'comentario 2'),
(3, 1, 'comentario 3');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `Nombre` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Asunto` varchar(45) NOT NULL,
  `Mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`Nombre`, `Correo`, `Asunto`, `Mensaje`) VALUES
('Wall', 'juan@gmail.com', 'Prueba', 'Prueba'),
('Daniela casita', 'granda.goez@gmail.com', 'Prueba2', 'Prueba2'),
('Juam Camilo', 'juaan@gmail.com', 'Asunto', 'Hola');

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `IdHorario` int(11) NOT NULL,
  `Dia` varchar(11) NOT NULL,
  `Horario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`IdHorario`, `Dia`, `Horario`) VALUES
(1, 'Lunes', '9:00 - 11:00'),
(2, 'Lunes', '7:00 - 9:00'),
(3, 'Lunes', '11:00 - 13:00'),
(4, 'Martes', '7:00 - 9:00'),
(5, 'Martes', '9:00 - 11:00'),
(6, 'Martes', '11:00 - 13:00'),
(7, 'Miércoles', '7:00 - 9:00'),
(8, 'Miércoles', '9:00 - 11:00'),
(9, 'Miércoles', '11:00 - 13:00'),
(10, 'Jueves', '7:00 - 9:00'),
(11, 'Jueves', '9:00 - 11:00'),
(12, 'Jueves', '11:00 - 13:00'),
(13, 'Viernes', '7:00 - 9:00'),
(14, 'Viernes', '9:00 - 11:00'),
(15, 'Viernes', '11:00 - 13:00'),
(16, 'Sábado', '7:00 - 9:00'),
(17, 'Sábado', '9:00 - 11:00'),
(18, 'Sábado', '11:00 - 13:00'),
(19, 'Domingo', '7:00 - 9:00'),
(20, 'Domingo', '9:00 - 11:00'),
(21, 'Domingo', '11:00 - 13:00');

-- --------------------------------------------------------

--
-- Table structure for table `instructorhorario`
--

CREATE TABLE `instructorhorario` (
  `HorarioIdInstructor` int(11) NOT NULL,
  `HorarioIdHorario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membresia`
--

CREATE TABLE `membresia` (
  `IdMembresia` int(11) NOT NULL,
  `TipoMembresia` varchar(20) DEFAULT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membresia`
--

INSERT INTO `membresia` (`IdMembresia`, `TipoMembresia`, `Precio`) VALUES
(1, 'Usuario Comprometido', 460000),
(2, 'Usuario Casual', 40000),
(3, 'Usuario Aficionado', 5000),
(4, 'Miembro', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `IdRol` int(11) NOT NULL,
  `Rol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`IdRol`, `Rol`) VALUES
(1, 'Administrador'),
(2, 'Instructor'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `IdTag` int(11) NOT NULL,
  `Tag` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`IdTag`, `Tag`) VALUES
(1, 'Gluteos'),
(2, 'Abdominales'),
(3, 'Full-body'),
(4, 'Yoga'),
(5, 'Aeróbicos'),
(6, 'Espalda'),
(7, 'Calentamiento'),
(8, 'Cardio'),
(9, 'Piernas'),
(10, 'Fuerza'),
(11, 'Resistencia');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Rol` int(11) NOT NULL,
  `NombreCompleto` varchar(100) NOT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Celular` varchar(15) DEFAULT NULL,
  `Contrasenna` varchar(40) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Boletin` varchar(2) NOT NULL,
  `Membresia` int(11) NOT NULL,
  `Pago` varchar(20) NOT NULL,
  `Valido` date DEFAULT NULL,
  `Verificacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Rol`, `NombreCompleto`, `Direccion`, `Telefono`, `Celular`, `Contrasenna`, `Correo`, `Boletin`, `Membresia`, `Pago`, `Valido`, `Verificacion`) VALUES
(1000001, 1, 'Juan', NULL, NULL, NULL, '25d55ad283aa400af464c76d713c07ad', 'jpholguin77@misena.edu.co', 'NO', 4, 'Completo', '2099-12-31', ''),
(1000002, 2, 'Julian', NULL, NULL, NULL, '25d55ad283aa400af464c76d713c07ad', 'jaospino481@misena.edu.co', 'NO', 4, 'Completo', '2099-12-31', ''),
(1000003, 3, 'Juan Andres', 'CR 56 CL 94-12', '5431232', '3215631180', '81dc9bdb52d04dc20036dbd8313ed055', 'juang12@gmail.com', 'SI', 3, 'Completo', '2099-12-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `IdVideo` int(11) NOT NULL,
  `TituloVideo` varchar(45) DEFAULT NULL,
  `DescripcionVideo` varchar(255) DEFAULT NULL,
  `Video` varchar(400) NOT NULL,
  `Miniatura` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`IdVideo`, `TituloVideo`, `DescripcionVideo`, `Video`, `Miniatura`) VALUES
(1, 'TRIKITAKATELAS', 'MI NIÑA BONITA MI DULCE PRINCESA ME SIENTO EN LAS NUBES, CUANDO TU ME BESAS', '1 Minute Timer.mp4', 'adventure-time-bmo-finn-the-human-jake-the-dog-wallpaper-preview.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videospendientes`
--

CREATE TABLE `videospendientes` (
  `IdVideo` int(11) NOT NULL,
  `TituloVideo` varchar(45) DEFAULT NULL,
  `DescripcionVideo` varchar(255) DEFAULT NULL,
  `Video` varchar(200) NOT NULL,
  `Miniatura` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `videotags`
--

CREATE TABLE `videotags` (
  `IdVideo` int(11) NOT NULL,
  `IdTag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`IdComentario`),
  ADD KEY `IdVideo` (`IdVideo`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`IdHorario`);

--
-- Indexes for table `instructorhorario`
--
ALTER TABLE `instructorhorario`
  ADD KEY `HorarioIdInstructor` (`HorarioIdInstructor`),
  ADD KEY `HorarioIdHorario` (`HorarioIdHorario`);

--
-- Indexes for table `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`IdMembresia`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`IdTag`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `Correo` (`Correo`),
  ADD KEY `Membresia` (`Membresia`),
  ADD KEY `Rol` (`Rol`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`IdVideo`);

--
-- Indexes for table `videospendientes`
--
ALTER TABLE `videospendientes`
  ADD PRIMARY KEY (`IdVideo`);

--
-- Indexes for table `videotags`
--
ALTER TABLE `videotags`
  ADD KEY `IdTag` (`IdTag`),
  ADD KEY `IdVideo` (`IdVideo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `IdComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membresia`
--
ALTER TABLE `membresia`
  MODIFY `IdMembresia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `IdVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videospendientes`
--
ALTER TABLE `videospendientes`
  MODIFY `IdVideo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`IdVideo`) REFERENCES `videos` (`IdVideo`);

--
-- Constraints for table `instructorhorario`
--
ALTER TABLE `instructorhorario`
  ADD CONSTRAINT `instructorhorario_ibfk_2` FOREIGN KEY (`HorarioIdHorario`) REFERENCES `horario` (`IdHorario`),
  ADD CONSTRAINT `instructorhorario_ibfk_3` FOREIGN KEY (`HorarioIdInstructor`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Membresia`) REFERENCES `membresia` (`IdMembresia`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`Rol`) REFERENCES `roles` (`IdRol`);

--
-- Constraints for table `videotags`
--
ALTER TABLE `videotags`
  ADD CONSTRAINT `videotags_ibfk_1` FOREIGN KEY (`IdVideo`) REFERENCES `videos` (`IdVideo`),
  ADD CONSTRAINT `videotags_ibfk_2` FOREIGN KEY (`IdTag`) REFERENCES `tags` (`IdTag`),
  ADD CONSTRAINT `videotags_ibfk_3` FOREIGN KEY (`IdVideo`) REFERENCES `videospendientes` (`IdVideo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
