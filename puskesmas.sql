-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 06:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `kode_dokter` varchar(4) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nomor_induk_dokter` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_tinggal` varchar(50) NOT NULL,
  `id_poli` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kode_dokter`, `nama_dokter`, `jenis_kelamin`, `nomor_induk_dokter`, `tempat_lahir`, `tanggal_lahir`, `alamat_tinggal`, `id_poli`) VALUES
('IA-0', 'Fitri', 'Perempuan', '4929029033291', 'CIREBON', '1988-05-05', 'Kalimalang', 4),
('K-02', 'Sunarya', 'Laki-Laki', '71816828738790', 'Majalengka', '1993-05-25', 'Sukaluyu', 2),
('K-12', 'Karsa', 'Laki-Laki', '71816838738718', 'Sidoarjo', '1981-05-11', 'Adiarsa', 1),
('S-23', 'Samsul', 'Laki-Laki', '48916838738757', 'CIimahi', '1990-05-15', 'Ciraos', 1),
('S-24', 'Maryudi', 'Laki-Laki', '71816838888718', 'Cepu', '1980-05-22', 'Santiong', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_praktek_dokter`
--

CREATE TABLE `tbl_jadwal_praktek_dokter` (
  `id_jadwal` int(2) NOT NULL,
  `kode_dokter` varchar(4) NOT NULL,
  `hari` varchar(13) NOT NULL,
  `jam_mulai` varchar(13) NOT NULL,
  `jam_selesai` varchar(13) NOT NULL,
  `id_poli` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal_praktek_dokter`
--

INSERT INTO `tbl_jadwal_praktek_dokter` (`id_jadwal`, `kode_dokter`, `hari`, `jam_mulai`, `jam_selesai`, `id_poli`) VALUES
(6, 'K-02', 'Rabu', '14.30', '16.30', 2),
(7, 'S-23', 'Senin', '07.30', '11.30', 1),
(8, 'S-24', 'Sabtu', '07.30', '11.00', 2),
(9, 'K-12', 'Kamis', '08.00', '11.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kesehatan_ibu_anak`
--

CREATE TABLE `tbl_kesehatan_ibu_anak` (
  `id_kia` int(5) NOT NULL,
  `no_rekamedis` char(6) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `status_pasien` varchar(10) NOT NULL,
  `kode_operasi` varchar(6) NOT NULL,
  `nama_operasi` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `ditangani_oleh` enum('dokter','petugas','dokter dan petugas') NOT NULL,
  `dibayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `keterangan` varchar(13) NOT NULL,
  `tgl_tindakan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kesehatan_ibu_anak`
--

INSERT INTO `tbl_kesehatan_ibu_anak` (`id_kia`, `no_rekamedis`, `nama_pasien`, `no_bpjs`, `status_pasien`, `kode_operasi`, `nama_operasi`, `biaya`, `ditangani_oleh`, `dibayar`, `kembalian`, `keterangan`, `tgl_tindakan`) VALUES
(11, '000004', 'Yulia', 'Yulia', 'Umum', 'IA-383', 'Penanganan Persalinan', 180000, 'dokter', 200000, 20000, 'Berbayar', '2020-05-17'),
(12, '000006', 'Maulida Fitria', 'Maulida Fitria', 'BPJS', 'IA-878', 'Pemeriksaan Ibu Hamil', 0, 'dokter', 0, 0, 'Gratis', '2020-05-18'),
(13, '000004', 'Yulia', 'Yulia', 'BPJS', 'IA-878', 'Pemeriksaan Ibu Hamil', 0, 'dokter', 0, 0, 'Gratis', '2020-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `dosis_aturan_obat` varchar(40) NOT NULL,
  `satuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `dosis_aturan_obat`, `satuan`) VALUES
('A-282', 'Anexsamol', 'Kapsul', '2x1 Sehari', 'Strip'),
('A-989', 'Salicyl', 'Bedak', '3 x 1 sehari', 'Buah'),
('D-118', 'Dextrane', 'Tablet', '3x1 Sehari', 'Strip'),
('MP-29', 'Sun', 'Makanan PG', '-', 'Buah'),
('P-332', 'PoliSaxechon', 'Cairan Alkohol', 'Setiap pakai 10 ml', 'Botol'),
('PG-58', 'Pil Vitamin A', 'Suplemen', '3 x 1 Sehari', 'Strip'),
('SD-65', 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 'Botol '),
('SN-11', 'Alpara', 'Kapsul', '3x1 Sehari', 'Strip');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operasi`
--

CREATE TABLE `tbl_operasi` (
  `kode_operasi` varchar(6) NOT NULL,
  `nama_operasi` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `ditangani_oleh` enum('dokter','petugas','dokter dan petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_operasi`
--

INSERT INTO `tbl_operasi` (`kode_operasi`, `nama_operasi`, `biaya`, `ditangani_oleh`) VALUES
('A-3494', 'Penanganan Luka Memar', 50000, 'dokter'),
('BJ-191', 'Pemeriksaan Katarak', 75000, 'dokter'),
('IA-282', 'Pemeriksaan Polio', 80000, 'dokter'),
('IA-383', 'Penanganan Persalinan', 180000, 'dokter dan petugas'),
('IA-878', 'Pemeriksaan Ibu Hamil', 75000, 'dokter'),
('L-4839', 'Luka Jahit', 95000, 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paramedis`
--

CREATE TABLE `tbl_paramedis` (
  `kode_paramedis` varchar(4) NOT NULL,
  `nama_paramedis` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_izin_paramedis` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `id_poli` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paramedis`
--

INSERT INTO `tbl_paramedis` (`kode_paramedis`, `nama_paramedis`, `jenis_kelamin`, `no_izin_paramedis`, `tempat_lahir`, `tanggal_lahir`, `alamat_tinggal`, `id_poli`) VALUES
('A-12', 'Aulia Mustika Putri', 'Perempuan', '29829822291', 'Bandung', '1980-05-12', 'Klari', 2),
('P-35', 'Lucky Ardi Wijaya', 'Laki-Laki', '29829823991', 'Jogjakarta', '1981-05-03', 'Wadas', 1),
('P-49', 'Marcel Ali Wijaya', 'Laki-Laki', '29829829291', 'Karawang', '1987-05-25', 'Rengas Dengklok', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `no_rekamedis` char(6) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `status_pasien` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`no_rekamedis`, `no_ktp`, `no_bpjs`, `nama_pasien`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `status_pasien`) VALUES
('000001', '3215021831771822', '28287188196112', 'Niko Rahmad', 'L', 'Bandung', '1990-05-05', 'Serang', 'BPJS'),
('000002', '3215021621771800', '28287188196128', 'Oman', 'L', 'Cirebon', '1990-05-26', 'OK', 'BPJS'),
('000003', '3335021831771822', '28287188196156', 'Muhammad Yogi', 'L', 'Surabaya', '1990-05-24', 'okkk', 'BPJS'),
('000004', '3215089831777722', '28287188196139', 'Yulia', 'P', 'Cicaheum', '1990-05-31', 'Serdang', 'BPJS'),
('000005', '3015021831271822', '28287188196145', 'Diana', 'P', 'Sidoarjo', '1990-05-22', 'CKM', 'BPJS'),
('000006', '3015021899271822', '28287134996145', 'Maulida Fitria', 'P', 'Karawang', '1990-05-27', 'Jatirasa', 'BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `no_registrasi` varchar(4) NOT NULL,
  `no_rawat` varchar(18) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `kode_dokter` varchar(4) NOT NULL,
  `id_poli` int(2) NOT NULL,
  `nama_penanggung_jawab` varchar(30) NOT NULL,
  `hubungan_dengan_penanggung_jawab` varchar(30) NOT NULL,
  `alamat_penanggung_jawab` text NOT NULL,
  `status_pasien` varchar(10) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`no_registrasi`, `no_rawat`, `no_rekamedis`, `tanggal_daftar`, `kode_dokter`, `id_poli`, `nama_penanggung_jawab`, `hubungan_dengan_penanggung_jawab`, `alamat_penanggung_jawab`, `status_pasien`, `no_bpjs`) VALUES
('0001', '2018-07-27-0001', '000002', '2018-07-27', 'S-23', 1, 'Suarez', 'Orang Tua', 'Barcelona', 'Umum', '-'),
('0002', '2018-07-27-0002', '000004', '2018-07-27', 'K-12', 2, 'Michelle', 'Saudara Kandung', 'Adiarsa', 'BPJS', '28287188196139');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengadaan_obat`
--

CREATE TABLE `tbl_pengadaan_obat` (
  `id_pengadaan` varchar(6) NOT NULL,
  `no_trans` varchar(15) NOT NULL,
  `kode_supplier` varchar(6) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengadaan_obat`
--

INSERT INTO `tbl_pengadaan_obat` (`id_pengadaan`, `no_trans`, `kode_supplier`, `kode_obat`, `nama_obat`, `jenis_obat`, `harga_beli`, `jumlah`, `satuan`, `keterangan`, `total`, `tgl_transaksi`) VALUES
('0001', 'B-180621-0002', 'B-2827', 'A-989', 'Salicyl', 'Bedak', 320000, 3, 'Buah', 'ok', 960000, '2020-05-01'),
('0002', 'B-180623-0001', 'AW-189', 'SD-65', 'Polivanol', 'Obat Tetes Luka', 679000, 5, 'Botol', 'ok', 3395000, '2020-05-02'),
('0003', 'B-180624-0001', 'AW-189', 'SN-11', 'Alpara', 'Tablet', 565000, 20, 'Strip', 'ok', 11300000, '2020-05-03'),
('0004', 'B-180624-0004', 'AW-189', 'SD-65', 'Polivanol', 'Obat Tetes Luka', 1230000, 25, 'Botol', 'ok', 30750000, '2020-05-04'),
('0005', 'B-180706-0001', 'AW-189', 'SD-65', 'Polivanol', 'Obat Tetes Luka', 479000, 3, 'Botol', 'ok', 1437000, '2020-05-05'),
('0006', 'B-180710-0001', 'AW-189', 'SN-11', 'Alpara', 'Tablet', 190000, 190, 'Botol', 'ok', 36100000, '2020-05-06'),
('0007', 'B-180717-0001', 'AW-189', 'D-118', 'Dextrane', 'Tablet', 3450, 2000, 'Strip', 'Ok', 6900000, '2020-05-07'),
('0008', 'B-180726-0001', 'B-2827', 'P-332', 'PoliSaxechon', 'Cairan Alkohol', 50000, 4, 'Botol', 'ok', 200000, '2020-05-08');

--
-- Triggers `tbl_pengadaan_obat`
--
DELIMITER $$
CREATE TRIGGER `pengadaan_obat` AFTER INSERT ON `tbl_pengadaan_obat` FOR EACH ROW BEGIN
INSERT into tbl_stok_obat SET
kode_obat = NEW.kode_obat, jumlah = New.jumlah
ON DUPLICATE KEY UPDATE jumlah=jumlah+New.jumlah;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran_obat`
--

CREATE TABLE `tbl_pengeluaran_obat` (
  `id_pengeluaran` varchar(6) NOT NULL,
  `no_terima_obat` varchar(15) NOT NULL,
  `no_rekamedis` char(6) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `dosis_aturan_obat` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tgl_serah_obat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengeluaran_obat`
--

INSERT INTO `tbl_pengeluaran_obat` (`id_pengeluaran`, `no_terima_obat`, `no_rekamedis`, `nama_pasien`, `kode_obat`, `nama_obat`, `jenis_obat`, `dosis_aturan_obat`, `jumlah`, `satuan`, `tgl_serah_obat`) VALUES
('0001', 'S-180620-0001', '000002', 'Oman', 'A-282', 'Anexsamol', 'Kapsul', '2x1 Sehari', 5, 'Strip', '2020-05-17'),
('0002', 'S-180620-0002', '000001', 'Niko Rahmad', 'A-989', 'Salicyl', 'Bedak', '3 x 1 sehari', 1, 'Buah', '2020-05-25'),
('0005', 'S-180624-0001', '000003', 'Muhammad Yogi', 'SD-65', 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 3, 'Botol', '2020-05-26');

--
-- Triggers `tbl_pengeluaran_obat`
--
DELIMITER $$
CREATE TRIGGER `pengeluaran_obat` AFTER INSERT ON `tbl_pengeluaran_obat` FOR EACH ROW BEGIN
UPDATE tbl_stok_obat
SET jumlah = jumlah - new.jumlah
WHERE kode_obat= new.kode_obat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poli`
--

CREATE TABLE `tbl_poli` (
  `id_poli` int(2) NOT NULL,
  `nama_poli` varchar(40) NOT NULL,
  `ruang_poli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_poli`
--

INSERT INTO `tbl_poli` (`id_poli`, `nama_poli`, `ruang_poli`) VALUES
(1, 'POLI GIGI', 'RUANG POLI GIGI'),
(2, 'POLI UMUM', 'RUANG POLI UMUM'),
(4, 'POLI KIA', 'RUANG POLI KIA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `kode_supplier` varchar(6) NOT NULL,
  `nama_supplier` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `no_telpon`) VALUES
('AW-189', 'Novita', 'Perum Pemda 1', '082872878219'),
('B-2827', 'Bentoman', 'Johar', '0828728726');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'staff_admin', 'staff_admin', 'staff_admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kode_dokter`),
  ADD KEY `polpol` (`id_poli`);

--
-- Indexes for table `tbl_jadwal_praktek_dokter`
--
ALTER TABLE `tbl_jadwal_praktek_dokter`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `dokter` (`kode_dokter`),
  ADD KEY `poli` (`id_poli`);

--
-- Indexes for table `tbl_kesehatan_ibu_anak`
--
ALTER TABLE `tbl_kesehatan_ibu_anak`
  ADD PRIMARY KEY (`id_kia`),
  ADD KEY `pas` (`no_rekamedis`),
  ADD KEY `op` (`kode_operasi`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tbl_operasi`
--
ALTER TABLE `tbl_operasi`
  ADD PRIMARY KEY (`kode_operasi`);

--
-- Indexes for table `tbl_paramedis`
--
ALTER TABLE `tbl_paramedis`
  ADD PRIMARY KEY (`kode_paramedis`),
  ADD KEY `id_spesialis` (`id_poli`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`no_rekamedis`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`no_registrasi`),
  ADD KEY `kode dok` (`kode_dokter`),
  ADD KEY `poli id` (`id_poli`),
  ADD KEY `pass` (`no_rekamedis`);

--
-- Indexes for table `tbl_pengadaan_obat`
--
ALTER TABLE `tbl_pengadaan_obat`
  ADD PRIMARY KEY (`id_pengadaan`),
  ADD KEY `kode obat` (`kode_obat`),
  ADD KEY `supsup` (`kode_supplier`);

--
-- Indexes for table `tbl_pengeluaran_obat`
--
ALTER TABLE `tbl_pengeluaran_obat`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `pasienn` (`no_rekamedis`),
  ADD KEY `obat kode` (`kode_obat`);

--
-- Indexes for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jadwal_praktek_dokter`
--
ALTER TABLE `tbl_jadwal_praktek_dokter`
  MODIFY `id_jadwal` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kesehatan_ibu_anak`
--
ALTER TABLE `tbl_kesehatan_ibu_anak`
  MODIFY `id_kia` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  MODIFY `id_poli` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD CONSTRAINT `polpol` FOREIGN KEY (`id_poli`) REFERENCES `tbl_poli` (`id_poli`);

--
-- Constraints for table `tbl_jadwal_praktek_dokter`
--
ALTER TABLE `tbl_jadwal_praktek_dokter`
  ADD CONSTRAINT `dokter` FOREIGN KEY (`kode_dokter`) REFERENCES `tbl_dokter` (`kode_dokter`),
  ADD CONSTRAINT `poli` FOREIGN KEY (`id_poli`) REFERENCES `tbl_poli` (`id_poli`);

--
-- Constraints for table `tbl_kesehatan_ibu_anak`
--
ALTER TABLE `tbl_kesehatan_ibu_anak`
  ADD CONSTRAINT `op` FOREIGN KEY (`kode_operasi`) REFERENCES `tbl_operasi` (`kode_operasi`),
  ADD CONSTRAINT `pas` FOREIGN KEY (`no_rekamedis`) REFERENCES `tbl_pasien` (`no_rekamedis`);

--
-- Constraints for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD CONSTRAINT `kode dok` FOREIGN KEY (`kode_dokter`) REFERENCES `tbl_dokter` (`kode_dokter`),
  ADD CONSTRAINT `pass` FOREIGN KEY (`no_rekamedis`) REFERENCES `tbl_pasien` (`no_rekamedis`),
  ADD CONSTRAINT `poli id` FOREIGN KEY (`id_poli`) REFERENCES `tbl_poli` (`id_poli`);

--
-- Constraints for table `tbl_pengadaan_obat`
--
ALTER TABLE `tbl_pengadaan_obat`
  ADD CONSTRAINT `kode obat` FOREIGN KEY (`kode_obat`) REFERENCES `tbl_obat` (`kode_obat`),
  ADD CONSTRAINT `supsup` FOREIGN KEY (`kode_supplier`) REFERENCES `tbl_supplier` (`kode_supplier`);

--
-- Constraints for table `tbl_pengeluaran_obat`
--
ALTER TABLE `tbl_pengeluaran_obat`
  ADD CONSTRAINT `obat kode` FOREIGN KEY (`kode_obat`) REFERENCES `tbl_obat` (`kode_obat`),
  ADD CONSTRAINT `pasienn` FOREIGN KEY (`no_rekamedis`) REFERENCES `tbl_pasien` (`no_rekamedis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
