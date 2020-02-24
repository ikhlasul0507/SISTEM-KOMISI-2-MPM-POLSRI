-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Des 2011 pada 18.07
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_komisi2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kalenderormawa`
--

CREATE TABLE `tbl_kalenderormawa` (
  `nama_ormawa` varchar(100) NOT NULL,
  `jenis_kegiatan` varchar(100) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `estimasi` int(100) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kalenderormawa`
--

INSERT INTO `tbl_kalenderormawa` (`nama_ormawa`, `jenis_kegiatan`, `nama_kegiatan`, `estimasi`, `tanggal_pelaksanaan`) VALUES
('Majelis Permusyawatan Mahasiswa', 'Program Kerja', 'MPM RESHING', 2000000, '2018-10-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lpj`
--

CREATE TABLE `tbl_lpj` (
  `nama_ormawa` varchar(100) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tgl_diterima` date NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `nilai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_lpj`
--

INSERT INTO `tbl_lpj` (`nama_ormawa`, `nama_kegiatan`, `tgl_diterima`, `tgl_pelaksanaan`, `pengirim`, `penerima`, `nilai`) VALUES
('Badan Eksekutif Mahasiswa', 'MPM RESHING', '2018-10-04', '2018-10-02', 'kevin', 'okti', 4),
('HMJ Teknik Sipil', 'w', '2018-10-06', '2018-10-06', 'iKHLASUL AMAL', 'okti', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `nama` varchar(100) NOT NULL,
  `tgl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`nama`, `tgl`) VALUES
('ikhlasulamal0507@gmail.com', '2018-10-11'),
('ikhlasulamal0507@gmail.com', '2018-10-12'),
('ikhlasulamal0507@gmail.com', '2018-10-12'),
('ikhlasulamal0507@gmail.com', '2018-10-12'),
('ikhlasulamal0507@gmail.com', '2018-10-12'),
('ikhlasulamal0507@gmail.com', '2018-10-12'),
('ikhlasulamal0507@gmail.com', '2018-10-12'),
('ikhlasulamal0507@gmail.com', '2018-10-20'),
('ikhlasulamal0507@gmail.com', '2018-10-20'),
('ikhlasulamal0507@gmail.com', '2018-10-20'),
('ikhlasulamal0507@gmail.com', '2018-10-20'),
('ikhlasulamal0507@gmail.com', '2018-10-20'),
('ikhlasulamal0507@gmail.com', '2018-10-20'),
('ikhlasulamal0507@gmail.com', '2018-10-05'),
('amaltambaktiuh@gmail.com', '2018-10-20'),
('ikhlasulamal0507@gmail.com', '2018-10-04'),
('ikhlasulamal0507@gmail.com', '2018-10-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_proposal`
--

CREATE TABLE `tbl_proposal` (
  `nama_ormawa` varchar(100) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tgl_diterima` date NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `nilai` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_proposal`
--

INSERT INTO `tbl_proposal` (`nama_ormawa`, `nama_kegiatan`, `tgl_diterima`, `tgl_pelaksanaan`, `pengirim`, `penerima`, `nilai`) VALUES
('HMJ Teknik Kimia', 'EFFECT', '2018-10-04', '2018-10-04', 'iKHLASUL AMAL', 'MIFTAHUL', 2),
('HMJ Manajemen Informatika', 'IT FEST 2018', '2018-10-07', '2018-10-05', 'kevin', 'okti', 3),
('Majelis Permusyawatan Mahasiswa', 'MPM RESHING', '2018-10-11', '2018-10-05', 'amal', 'endar', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_struktur`
--

CREATE TABLE `tbl_struktur` (
  `nim` int(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`nim`, `nama`, `jenis_kelamin`, `jurusan`, `jabatan`, `tgl_lahir`) VALUES
(2147483647, 'KEVIN OLIVIA INDRI PUTRI', 'Laki-laki', 'Teknik Sipil', 'Ketua', '2018-10-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kalenderormawa`
--
ALTER TABLE `tbl_kalenderormawa`
  ADD PRIMARY KEY (`tanggal_pelaksanaan`);

--
-- Indexes for table `tbl_lpj`
--
ALTER TABLE `tbl_lpj`
  ADD PRIMARY KEY (`nama_kegiatan`);

--
-- Indexes for table `tbl_proposal`
--
ALTER TABLE `tbl_proposal`
  ADD PRIMARY KEY (`nama_kegiatan`);

--
-- Indexes for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
