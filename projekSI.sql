-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2023 at 02:48 PM
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
-- Database: `projekSI`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `kode_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `nama_bobot` varchar(100) NOT NULL,
  `nilai_bobot` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`kode_kriteria`, `nama_kriteria`, `nama_bobot`, `nilai_bobot`) VALUES
('C1', 'Jenis Usaha', 'Mikro', 30),
('C1', 'Jenis Usaha', 'Makro', 70),
('C2', 'Jumlah Pekerja', '<=1', 10),
('C2', 'Jumlah Pekerja', '1-50', 20),
('C2', 'Jumlah Pekerja', '51-100', 30),
('C2', 'Jumlah Pekerja', '>100', 40),
('C3', 'Modal Usaha', '<=1000000', 10),
('C3', 'Modal Usaha', '1000000-2000000', 20),
('C3', 'Modal Usaha', '2000000-3000000', 30),
('C3', 'Modal Usaha', '>3000000', 40);

-- --------------------------------------------------------

--
-- Table structure for table `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `id_alternatif` int NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `C1` int NOT NULL,
  `C2` int NOT NULL,
  `C3` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `data_alternatif`
--

INSERT INTO `data_alternatif` (`id_alternatif`, `nama_usaha`, `C1`, `C2`, `C3`) VALUES
(1, 'Kios Lumintu', 30, 40, 30),
(2, 'UD. Linggar Jati ', 70, 40, 40),
(3, 'Nanda Motor', 30, 10, 10),
(4, 'Zayaka Tailor', 30, 10, 30);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_usaha`
--

CREATE TABLE `jenis_usaha` (
  `kode_jenis_usaha` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `jenis_usaha`
--

INSERT INTO `jenis_usaha` (`kode_jenis_usaha`, `nama`) VALUES
('JU001', 'Apotek'),
('JU002', 'Bengkel'),
('JU003', 'Bengkel Motor'),
('JU004', 'Barang Campuran'),
('JU005', 'Cellular'),
('JU006', 'Jual Kayu Bangunan'),
('JU007', 'Penjahitan'),
('JU008', 'Perdagangan'),
('JU009', 'Toko Meubel'),
('JU010', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `kode_kriteria` varchar(5) CHARACTER SET utf8mb4  NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `nilai_kriteria` double NOT NULL,
  `tipe_kriteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kode_kriteria`, `nama_kriteria`, `nilai_kriteria`, `tipe_kriteria`) VALUES
('C1', 'Jenis Usaha', 0.2, 'Benefit'),
('C2', 'Jumlah Pekerja', 0.4, 'Benefit'),
('C3', 'Modal Usaha', 0.4, 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mhs` int NOT NULL,
  `nim` bigint NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mhs`, `nim`, `nama`, `jurusan`, `alamat`) VALUES
(1, 210605110077, 'Fuaidil', 'Teknik Informatika', 'malang'),
(4, 210605110004, 'Khalif', 'Teknik Informatika', 'Bekasi'),
(7, 123, 'tes', 'Teknik Informatika', 'asd'),
(8, 333, 'Agus', 'Teknik Informatika', 'malang');

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `kode_umkm` varchar(5) NOT NULL,
  `nama_umkm` varchar(100) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `jenis_usaha` varchar(5) CHARACTER SET utf8mb4  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`kode_umkm`, `nama_umkm`, `nama_pimpinan`, `jalan`, `desa`, `kecamatan`, `jenis_usaha`) VALUES
('UM001', 'Kios Lumintu', 'H. Toha Muhiddin', 'Jl. Galunggung', 'Sebani', 'Gadingrejo', 'JU004'),
('UM002', 'UD.Linggar Jati', 'Muhammad Bahrus Salim', 'Jl. Gatot Subroto 45', 'Bukir', 'Purworejo', 'JU006'),
('UM003', 'Nanda Motor', 'Rudi Santoso', 'Jl. Pattimura', 'Pohjentrek', 'Purworejo', 'JU002'),
('UM004', 'Zayaka Tailor', 'Maritza Salim', 'Jl. Mawar 78', 'Krapyak', 'Kraton', 'JU007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD KEY `kode_kriteria` (`kode_kriteria`);

--
-- Indexes for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `jenis_usaha`
--
ALTER TABLE `jenis_usaha`
  ADD PRIMARY KEY (`kode_jenis_usaha`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`kode_umkm`),
  ADD KEY `jenis_usaha` (`jenis_usaha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  MODIFY `id_alternatif` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mhs` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bobot`
--
ALTER TABLE `bobot`
  ADD CONSTRAINT `bobot_ibfk_1` FOREIGN KEY (`kode_kriteria`) REFERENCES `kriteria` (`kode_kriteria`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `umkm`
--
ALTER TABLE `umkm`
  ADD CONSTRAINT `umkm_ibfk_1` FOREIGN KEY (`jenis_usaha`) REFERENCES `jenis_usaha` (`kode_jenis_usaha`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
