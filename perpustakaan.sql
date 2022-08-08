-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 10:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Fajar Rivaldi Chan', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `thn_terbit` varchar(100) NOT NULL,
  `halaman` int(20) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `jumlah_buku` int(20) NOT NULL,
  `sinopsis` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `penerbit`, `penulis`, `thn_terbit`, `halaman`, `genre`, `jumlah_buku`, `sinopsis`, `gambar`) VALUES
(1, 'harry potter', 'gramedia', 'fajar', '2020', 110, 'fiksi', 12, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'tes.png'),
(4, 'RICH DAD POOR DAD', 'Gramedia', 'ROBERT T. KIYOSAKI', '2016', 240, 'BUSINESS/MANAGEMENT', 1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas pariatur culpa iure assumenda rerum adipisci, similique maiores placeat magni quibusdam obcaecati itaque voluptate animi ipsum molestiae aperiam neque id numquam non debitis vitae repellat doloremque.<br></p>', 'Screenshot_(305).png'),
(5, 'WARREN BUFFET', 'esensi', 'Robert Heller', '2008', 111, 'BUSINESS/MANAGEMENT', 3, '<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Ratione saepe, rem. Iusto, nobis ex consequatur ipsum architecto earum inventore at voluptates maxime itaque perferendis, accusamus doloremque? Commodi similique suscipit eos, excepturi accusantium. Assumenda sequi odio tempore modi voluptas ut facilis, quae eum atque nemo quod esse earum doloremque eveniet ipsum.<br></p>', 'Screenshot_(156).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjam`
--

CREATE TABLE `tbl_peminjam` (
  `id` int(11) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjam`
--

INSERT INTO `tbl_peminjam` (`id`, `tgl_pinjam`, `judul`, `nama`, `email`, `alamat`, `hp`) VALUES
(1, '2021-10-31 21:38:31', 'harry poter', 'fajar', 'fajarrivaldi2015@gmail.com', 'medan', '0895611024559'),
(4, '2021-11-01 06:08:45', 'adf', 'wegfww', 'chanofficial2020@gmail.com', 'cadfsd', '255'),
(5, '2021-11-08 11:13:13', 'RICH DAD POOR DAD', 'Brucel', 'samuderaduta@gmail.com', 'Muara Satu', '0888882888'),
(6, '2021-11-30 03:02:21', 'RICH DAD POOR DAD', 'Brucel Duta', 'samudera@gmail.com', 'Bukit Indah', '08888888888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
