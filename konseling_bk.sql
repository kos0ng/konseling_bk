-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2020 at 09:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konseling_bk`
--

-- --------------------------------------------------------

--
-- Table structure for table `Alumni`
--

CREATE TABLE `Alumni` (
  `idAlumni` int(10) NOT NULL,
  `idSiswa` int(10) NOT NULL,
  `namaAlumni` varchar(50) NOT NULL,
  `institusiAlumni` varchar(50) NOT NULL,
  `angkatanAlumni` int(4) NOT NULL,
  `emailAlumni` varchar(50) NOT NULL,
  `teleponAlumni` varchar(15) NOT NULL,
  `alamatAlumni` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Alumni`
--

INSERT INTO `Alumni` (`idAlumni`, `idSiswa`, `namaAlumni`, `institusiAlumni`, `angkatanAlumni`, `emailAlumni`, `teleponAlumni`, `alamatAlumni`) VALUES
(1, 1234, 'Halawatu syifa', 'UMY', 5, 'syfa.saafia@gmail.com', '081936123322', 'Yogyakarta'),
(2, 1234, 'Halawatu syifa1', 'UMY', 5, 'syfa.saafia@gmail.com', '081936123322', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `KasusSiswa`
--

CREATE TABLE `KasusSiswa` (
  `idKasus` int(10) NOT NULL,
  `idSiswa` int(10) NOT NULL,
  `tanggalKasus` date NOT NULL,
  `statusKasus` int(1) NOT NULL,
  `jenisKasus` varchar(40) NOT NULL,
  `gradeKasus` int(1) NOT NULL,
  `idBK` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `KasusSiswa`
--

INSERT INTO `KasusSiswa` (`idKasus`, `idSiswa`, `tanggalKasus`, `statusKasus`, `jenisKasus`, `gradeKasus`, `idBK`) VALUES
(1, 1, '2019-08-19', 3, 'Ketidakhadiran', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Konseling`
--

CREATE TABLE `Konseling` (
  `idKonseling` int(10) NOT NULL,
  `idSiswa` int(10) NOT NULL,
  `tanggalKonseling` datetime NOT NULL,
  `hasilKonseling` text DEFAULT NULL,
  `statusKonseling` int(1) NOT NULL,
  `idBK` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Konseling`
--

INSERT INTO `Konseling` (`idKonseling`, `idSiswa`, `tanggalKonseling`, `hasilKonseling`, `statusKonseling`, `idBK`) VALUES
(1, 1, '2020-12-22 13:01:00', 'Mantap', 1, 1),
(2, 1, '2020-12-15 13:01:00', 'Semakin baik', 1, 1),
(3, 1, '2020-12-22 01:01:00', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `PerkembanganSiswa`
--

CREATE TABLE `PerkembanganSiswa` (
  `idSiswa` int(10) NOT NULL,
  `nilaiSiswaSmt1` double DEFAULT NULL,
  `nilaiSiswaSmt2` double DEFAULT NULL,
  `nilaiSiswaSmt3` double DEFAULT NULL,
  `nilaiSiswaSmt4` double DEFAULT NULL,
  `nilaiSiswaSmt5` double DEFAULT NULL,
  `nilaiSiswaSmt6` double DEFAULT NULL,
  `minatSiswa` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PerkembanganSiswa`
--

INSERT INTO `PerkembanganSiswa` (`idSiswa`, `nilaiSiswaSmt1`, `nilaiSiswaSmt2`, `nilaiSiswaSmt3`, `nilaiSiswaSmt4`, `nilaiSiswaSmt5`, `nilaiSiswaSmt6`, `minatSiswa`) VALUES
(1, 12, NULL, NULL, NULL, NULL, NULL, 'ga minat');

-- --------------------------------------------------------

--
-- Table structure for table `PrestasiSiswa`
--

CREATE TABLE `PrestasiSiswa` (
  `idPrestasi` int(10) NOT NULL,
  `idSiswa` int(10) NOT NULL,
  `namaPrestasi` varchar(50) NOT NULL,
  `tanggalPrestasi` date NOT NULL,
  `jenisPrestasi` varchar(50) NOT NULL,
  `tingkatPrestasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PrestasiSiswa`
--

INSERT INTO `PrestasiSiswa` (`idPrestasi`, `idSiswa`, `namaPrestasi`, `tanggalPrestasi`, `jenisPrestasi`, `tingkatPrestasi`) VALUES
(1, 1, 'Juara 2 Tilawatil Quran', '2019-07-15', 'Non Akademik', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Siswa`
--

CREATE TABLE `Siswa` (
  `idSiswa` int(10) NOT NULL,
  `nisnSiswa` varchar(10) NOT NULL,
  `namaSiswa` varchar(50) NOT NULL,
  `kelasSiswa` varchar(10) NOT NULL,
  `emailSiswa` varchar(50) NOT NULL,
  `angkatanSiswa` int(4) NOT NULL,
  `tanggalLahirSiswa` date NOT NULL,
  `tempatLahirSiswa` varchar(50) NOT NULL,
  `idWali` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Siswa`
--

INSERT INTO `Siswa` (`idSiswa`, `nisnSiswa`, `namaSiswa`, `kelasSiswa`, `emailSiswa`, `angkatanSiswa`, `tanggalLahirSiswa`, `tempatLahirSiswa`, `idWali`) VALUES
(1, '12341', 'Rizaldia', '10 IPA A', 'rizaldi@gmail.com', 19, '2000-01-07', 'Kalimantan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `TimBK`
--

CREATE TABLE `TimBK` (
  `idBK` int(10) NOT NULL,
  `namaBK` varchar(50) NOT NULL,
  `noBK` varchar(13) NOT NULL,
  `emailBK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TimBK`
--

INSERT INTO `TimBK` (`idBK`, `namaBK`, `noBK`, `emailBK`) VALUES
(1, 'Mahrus Afif', '08457896321', 'mahrusafif@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `WaliSiswa`
--

CREATE TABLE `WaliSiswa` (
  `idWali` int(10) NOT NULL,
  `namaWali` varchar(50) NOT NULL,
  `pekerjaanWali` varchar(50) NOT NULL,
  `noWali` varchar(15) NOT NULL,
  `gajiWali` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `WaliSiswa`
--

INSERT INTO `WaliSiswa` (`idWali`, `namaWali`, `pekerjaanWali`, `noWali`, `gajiWali`) VALUES
(1, 'Abiyyia', 'Programmer1', '0871231239112', 1231231231);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Alumni`
--
ALTER TABLE `Alumni`
  ADD PRIMARY KEY (`idAlumni`);

--
-- Indexes for table `KasusSiswa`
--
ALTER TABLE `KasusSiswa`
  ADD PRIMARY KEY (`idKasus`),
  ADD KEY `idBK` (`idBK`),
  ADD KEY `idSiswa` (`idSiswa`);

--
-- Indexes for table `Konseling`
--
ALTER TABLE `Konseling`
  ADD PRIMARY KEY (`idKonseling`);

--
-- Indexes for table `PerkembanganSiswa`
--
ALTER TABLE `PerkembanganSiswa`
  ADD PRIMARY KEY (`idSiswa`);

--
-- Indexes for table `PrestasiSiswa`
--
ALTER TABLE `PrestasiSiswa`
  ADD PRIMARY KEY (`idPrestasi`);

--
-- Indexes for table `Siswa`
--
ALTER TABLE `Siswa`
  ADD PRIMARY KEY (`idSiswa`),
  ADD KEY `idWali` (`idWali`);

--
-- Indexes for table `TimBK`
--
ALTER TABLE `TimBK`
  ADD PRIMARY KEY (`idBK`);

--
-- Indexes for table `WaliSiswa`
--
ALTER TABLE `WaliSiswa`
  ADD PRIMARY KEY (`idWali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Alumni`
--
ALTER TABLE `Alumni`
  MODIFY `idAlumni` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `KasusSiswa`
--
ALTER TABLE `KasusSiswa`
  MODIFY `idKasus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Konseling`
--
ALTER TABLE `Konseling`
  MODIFY `idKonseling` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `PrestasiSiswa`
--
ALTER TABLE `PrestasiSiswa`
  MODIFY `idPrestasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Siswa`
--
ALTER TABLE `Siswa`
  MODIFY `idSiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `TimBK`
--
ALTER TABLE `TimBK`
  MODIFY `idBK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `WaliSiswa`
--
ALTER TABLE `WaliSiswa`
  MODIFY `idWali` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `KasusSiswa`
--
ALTER TABLE `KasusSiswa`
  ADD CONSTRAINT `KasusSiswa_ibfk_1` FOREIGN KEY (`idBK`) REFERENCES `TimBK` (`idBK`),
  ADD CONSTRAINT `KasusSiswa_ibfk_2` FOREIGN KEY (`idSiswa`) REFERENCES `Siswa` (`idSiswa`);

--
-- Constraints for table `Siswa`
--
ALTER TABLE `Siswa`
  ADD CONSTRAINT `Siswa_ibfk_1` FOREIGN KEY (`idWali`) REFERENCES `WaliSiswa` (`idWali`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
