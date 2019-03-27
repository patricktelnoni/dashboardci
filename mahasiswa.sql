-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 06:08 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `idkaryawan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nip` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idkaryawan`, `nama`, `nip`, `password`) VALUES
(1, 'asep', '1234', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(255) NOT NULL,
  `nama` text NOT NULL,
  `asal` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` text NOT NULL,
  `nim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `asal`, `tanggal_lahir`, `foto`, `nim`) VALUES
(5, 'adri', 'BKP', '2017-12-11', 'uploads/_DSC0868.jpg', 1234),
(6, 'madmax', 'lonfon', '2017-12-13', 'uploads/_DSC0989.jpg', 4321),
(7, 'PTI', 'CGK', '2017-12-14', 'uploads/_DSC0871.jpg', 0),
(8, 'Budi', 'Bandung', '0000-00-00', '', 0),
(9, 'PTI', 'dasdas', '0000-00-00', '', 0),
(10, 'fdsfdsfs', 'DER$%$#@%#@%#@%#%%#@%$#@%@%', '0000-00-00', '', 43254363),
(11, 'Test', 'set', '0000-00-00', '', 0),
(12, '5345', 'fdsfsd', '0000-00-00', '', 0),
(13, 'satu', 'dua', '0000-00-00', '', 0),
(14, 'Test', 'Perintah set', '0000-00-00', '', 0),
(15, 'abcde', 'Livetime', '0000-00-00', '', 0),
(16, 'abcde', 'Livetime', '0000-00-00', '', 0),
(17, 'asrasr', 'rer', '0000-00-00', '', 0),
(18, 'asrasr', 'rer', '0000-00-00', '', 0),
(19, 'asrasr', 'rer', '0000-00-00', '', 0),
(20, 'asrasr', 'rer', '0000-00-00', '', 0),
(21, 'asrasr', 'rer', '0000-00-00', '', 0),
(22, 'asrasr', 'rer', '0000-00-00', '', 0),
(23, 'asrasr', 'rer', '0000-00-00', '', 0),
(24, 'asrasr', 'rer', '0000-00-00', '', 0),
(25, '', '', '0000-00-00', 'uploads/40-052.pdf', 0),
(26, '', '', '0000-00-00', 'uploads/40-023.pdf', 0),
(27, '', '', '0000-00-00', 'uploads/40-053.pdf', 0),
(28, 'rig', '1234', '0000-00-00', 'uploads/_DSC2292.JPG', 0),
(29, 'axel', '654321', '0000-00-00', 'uploads/_DSC2232.JPG', 0),
(30, '670112', 'Hello', '0000-00-00', 'uploads/PDI_II_2016-compressed.pdf', 0),
(31, 'dsfsdf', '423432', '0000-00-00', 'uploads/PDI_I_2016.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `gambar` text NOT NULL,
  `harga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `gambar`, `harga`) VALUES
(1, 'Sate maranggi', 'https://dailycookingquest.com/img/2015/05/sate_maranggi.jpg', '25000'),
(2, 'Bubur manado', 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/06/Resep-Bubur-manado.jpg?resize=860%2C380&ssl=1', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `idpaket` int(11) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `sasaran` int(255) NOT NULL,
  `penerima` text NOT NULL,
  `isi_paket` text NOT NULL,
  `tanggal_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`idpaket`, `tanggal_datang`, `sasaran`, `penerima`, `isi_paket`, `tanggal_ambil`) VALUES
(1, '2018-02-21', 5, 'asep', 'Makanan', '2018-04-13'),
(2, '2018-03-18', 2, 'asep', '0', '0000-00-00'),
(3, '2018-03-28', 2, 'asep', '0', '0000-00-00'),
(4, '2018-05-16', 3, 'asep', '0', '0000-00-00'),
(5, '2018-05-17', 1, 'asep', 'Mouse', '0000-00-00'),
(6, '2018-05-20', 2, 'asep', 'asem', '0000-00-00'),
(7, '2018-06-10', 4, 'asep', 'handphone', '0000-00-00'),
(8, '2018-06-19', 3, 'asep', 'Buku', '0000-00-00'),
(9, '2018-05-01', 3, 'asep', 'Buku', '0000-00-00'),
(10, '2019-02-10', 2, 'asep', 'Buku', '0000-00-00'),
(11, '2019-02-12', 3, 'asep', 'Buku', '0000-00-00'),
(12, '2019-03-10', 8, 'asep', 'Baju', '2018-03-28'),
(13, '2019-03-26', 1, '1', 'baju', '2018-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `idpenghuni` int(11) NOT NULL,
  `nama` text NOT NULL,
  `unit` text NOT NULL,
  `noktp` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`idpenghuni`, `nama`, `unit`, `noktp`, `foto`) VALUES
(1, 'Reza', '01', 123456, ''),
(2, 'Robbi', '02', 654321, ''),
(3, 'Pramuko', '03', 222222, ''),
(4, 'Patrick', '04', 3333333, ''),
(5, 'Husni', '05', 2147483647, ''),
(6, 'Lisda', '06', 283791, 'uploads/IMG_20170103_180339.jpg'),
(7, 'Dahliar', '08', 2147483647, 'uploads/IMG_20170103_170535.jpg'),
(8, 'Lisda', '06', 1234568, 'uploads/IMG_20170103_175416.jpg'),
(9, 'Dahliar', '08', 1234568, 'uploads/IMG_20170103_172031.jpg'),
(10, 'Asep', 'Melati', 2147483647, 'uploads/IMG_20170103_181822.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `nik` int(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`nik`, `password`) VALUES
(1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idkaryawan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`idpaket`),
  ADD KEY `sasaran` (`sasaran`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`idpenghuni`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idkaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `idpaket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `idpenghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `sasaran` FOREIGN KEY (`sasaran`) REFERENCES `penghuni` (`idpenghuni`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
