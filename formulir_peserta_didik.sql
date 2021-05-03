-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 07:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulir_peserta_didik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `jenis_pendaftaran` varchar(10) NOT NULL,
  `tanggal_masuk_sekolah` date NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nomor_peserta_ujian` varchar(15) NOT NULL,
  `pernah_paud` varchar(10) NOT NULL,
  `pernah_tk` varchar(10) NOT NULL,
  `no_seri_skhun` varchar(15) NOT NULL,
  `no_seri_ijazah` varchar(15) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `cita_cita` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `berkebutuhan_khusus` varchar(20) NOT NULL,
  `alamat_jalan` varchar(50) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `kelurahan_desa` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `tempat_tinggal` varchar(20) NOT NULL,
  `moda_transportasi` varchar(20) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email_pribadi` varchar(30) NOT NULL,
  `penerima_kps_kks_pkh_kip` varchar(10) NOT NULL,
  `no_kps_kks_pkh_kip` varchar(15) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `jenis_pendaftaran`, `tanggal_masuk_sekolah`, `nis`, `nomor_peserta_ujian`, `pernah_paud`, `pernah_tk`, `no_seri_skhun`, `no_seri_ijazah`, `hobi`, `cita_cita`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama`, `berkebutuhan_khusus`, `alamat_jalan`, `rt`, `rw`, `dusun`, `kelurahan_desa`, `kecamatan`, `kode_pos`, `tempat_tinggal`, `moda_transportasi`, `nomor_hp`, `nomor_telepon`, `email_pribadi`, `penerima_kps_kks_pkh_kip`, `no_kps_kks_pkh_kip`, `kewarganegaraan`) VALUES
(1, 'siswa_baru', '2021-05-01', '167271', '127127', 'ya', 'ya', '1273031', '24643', 'memasak', 'chef', 'Ajeng Laras Wangi Ajeng Laras Wangi', 'perempuan', '1537', '19172651', 'lamongan', '2021-04-09', 'islam', 'tidak', 'jl. mawar', '07', '04', 'lawan', 'kedungwangi', 'sambeng', '60294', 'bersama_orang_tua', 'kendaraan_pribadi', '082257364033', '082257364033', '19082010058@student.upnjatim.a', 'ya', '7281', 'WNI'),
(2, 'siswa_baru', '2021-04-04', '12346', '123459', 'ya', 'ya', '12730314', '2464323', 'memasak', 'chef', 'ajeng wangi', 'perempuan', '0010454862', '127127127127127', 'lamongan', '2021-04-15', 'kristen', 'tidak', 'jl. mawar', '7', '4', 'lawan', 'kedungwangi', 'sambeng', '60294', 'wali', 'kereta_api', '082257364033', '082257364033', '19082010058@student.upnjatim.a', 'ya', '728134', 'WNA'),
(3, 'siswa_baru', '2021-04-03', '12345', '234556', 'ya', 'ya', '738542', '833618', 'renang', 'dokter', 'sabha paramartha', 'laki-laki', '61375', '93735173174', 'lamongan', '2021-04-14', 'kristen', 'tidak', 'jl. melati', '07', '05', 'pataan', 'berjo', 'sambeng', '62284', 'bersama_orang_tua', 'jalan_kaki', '0822546382722', '018297634232', 'ajenglaras6@gmail.com', 'ya', '53161839', 'WNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
