-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2021 at 07:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpcanon_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_log`
--

CREATE TABLE `account_log` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `kode` int(10) NOT NULL,
  `saldo_awal` bigint(100) NOT NULL,
  `saldo_akhir` bigint(100) NOT NULL,
  `selisih` bigint(100) NOT NULL,
  `tutup_buku` enum('T','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_log`
--

INSERT INTO `account_log` (`id`, `tanggal`, `kode`, `saldo_awal`, `saldo_akhir`, `selisih`, `tutup_buku`) VALUES
(1, '13-03-2021', 100, 821623159, 3000000, 0, 'Y'),
(2, '13-03-2021', 110, 2147483647, 3000000, 0, 'Y'),
(3, '13-03-2021', 130, 0, 3000000, 0, 'Y'),
(4, '13-03-2021', 140, 0, 3000000, 0, 'Y'),
(5, '13-03-2021', 150, 0, 3000000, 0, 'Y'),
(6, '13-03-2021', 200, 4500000, 5500000, -1000000, 'Y'),
(7, '13-03-2021', 201, 0, 3000000, 0, 'Y'),
(8, '13-03-2021', 202, 0, 3000000, 0, 'Y'),
(9, '13-03-2021', 203, 0, 3000000, 0, 'Y'),
(10, '13-03-2021', 502, 0, 3000000, 0, 'Y'),
(11, '13-03-2021', 600, 0, 3000000, 0, 'Y'),
(12, '13-03-2021', 807, 80550000, 3000000, 0, 'Y'),
(13, '13-03-2021', 808, 161100000, 3000000, 0, 'Y'),
(15, 'up', 100, 0, 500000, -500000, 'T'),
(16, 'up', 110, 2147483647, 3000000, 0, 'T'),
(17, 'up', 130, 0, 3000000, 0, 'T'),
(18, 'up', 140, 0, 3000000, 0, 'T'),
(19, 'up', 150, 0, 3000000, 0, 'T'),
(20, 'up', 200, 5000000, 4500000, -500000, 'T'),
(21, 'up', 201, 0, 3000000, 0, 'T'),
(22, 'up', 202, 0, 3000000, 0, 'T'),
(23, 'up', 203, 0, 3000000, 0, 'T'),
(24, 'up', 502, 0, 3000000, 0, 'T'),
(25, 'up', 600, 0, 3000000, 0, 'T'),
(26, 'up', 807, 80550000, 3000000, 0, 'T'),
(27, 'up', 808, 161100000, 3000000, 0, 'T'),
(48, 'up', 90147, 20000000, 20000000, 0, 'T');

-- --------------------------------------------------------

--
-- Table structure for table `akun_pembayaran`
--

CREATE TABLE `akun_pembayaran` (
  `id_akun_pembayaran` int(5) NOT NULL,
  `akun_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_pembayaran`
--

INSERT INTO `akun_pembayaran` (`id_akun_pembayaran`, `akun_pembayaran`) VALUES
(1, 'Pembayaran'),
(2, 'transfer');

-- --------------------------------------------------------

--
-- Table structure for table `bukubesar`
--

CREATE TABLE `bukubesar` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `kode` varchar(50) NOT NULL,
  `transaksi` varchar(200) NOT NULL,
  `no_bukti` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL,
  `weekending` varchar(50) DEFAULT NULL,
  `tutup_buku` enum('T','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukubesar`
--

INSERT INTO `bukubesar` (`id`, `tgl`, `kode`, `transaksi`, `no_bukti`, `debit`, `kredit`, `weekending`, `tutup_buku`) VALUES
(6, '2021-03-20', '200', 'Beli Meja Kerja', 'JR/200321/00002', '1000000', '', '2021-03-13,2021-03-20', 'Y'),
(7, '2021-03-20', '100', 'Beli Meja Kerja', 'JR/200321/00002', '', '1000000', '2021-03-13,2021-03-20', 'Y'),
(15, '2021-03-23', '200', 'Beli ATK', 'JR/230321/00003', '1000000', '', '', 'T'),
(16, '2021-03-23', '100', 'Beli ATK', 'JR/230321/00003', '', '1000000', '', 'T'),
(17, '2021-03-23', '200', 'Beli Kursi Kerja', 'JR/230321/00004', '1000000', '', '', 'T'),
(18, '2021-03-23', '100', 'Beli Kursi Kerja', 'JR/230321/00004', '', '1000000', '', 'T'),
(31, '2021-03-23', '100', 'Beli ATK Kantor Cabang', 'JR/230321/00005', '500000', '', '', 'T'),
(32, '2021-03-23', '200', 'Beli ATK Kantor Cabang', 'JR/230321/00005', '', '500000', '', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `chartofaccount`
--

CREATE TABLE `chartofaccount` (
  `id` int(11) NOT NULL,
  `kode` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `saldo_default` bigint(100) NOT NULL,
  `akun_user` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chartofaccount`
--

INSERT INTO `chartofaccount` (`id`, `kode`, `nama`, `jenis`, `nominal`, `saldo_default`, `akun_user`) VALUES
(1, 100, 'Kas', 'Riel', 'Debit', 2000000, 'T'),
(2, 110, 'Persediaan Barang', 'Riel', 'Debit', 0, 'T'),
(3, 130, 'Modal Awal', 'Riel', 'Kredit', 0, 'T'),
(4, 140, 'Pengambilan Private', 'Riel', 'Debit', 0, 'T'),
(5, 150, 'DP Pelanggan', 'Riel', 'Kredit', 0, 'T'),
(6, 200, 'Bank BCA', 'Riel', 'Debit', 3000000, 'T'),
(7, 201, 'Bank Mandiri', 'Riel', 'Debit', 0, 'T'),
(8, 202, 'Bank BRI', 'Riel', 'Debit', 0, 'T'),
(9, 203, 'Bank BNI', 'Riel', 'Debit', 0, 'T'),
(10, 502, 'Hutang Pembelian', 'Riel', 'Kredit', 0, 'T'),
(11, 600, 'Piutang Pelanggan', 'Riel', 'Debit', 0, 'T'),
(12, 807, 'Biaya ADM', 'Riel', 'Debit', 0, 'T'),
(13, 808, 'Biaya Konsultan', 'Riel', 'Debit', 0, 'T'),
(14, 90147, 'Simpanan Budi', 'Riel', 'Debit', 20000000, 'Y'),
(15, 990147, 'Override Budi', 'Riel', 'Debit', 0, 'Y'),
(22, 90148, 'Simpanan Raja', 'Riel', 'Debit', 0, 'Y'),
(23, 990148, 'Override Raja', 'Riel', 'Debit', 0, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `daftarekspedisi`
--

CREATE TABLE `daftarekspedisi` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarekspedisi`
--

INSERT INTO `daftarekspedisi` (`id`, `kode`, `nama`) VALUES
(2, '1101', 'JNE REG'),
(3, '1102', 'Muda Karya Bersama'),
(4, '1103', 'Canon Prima Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `daftarkirim`
--

CREATE TABLE `daftarkirim` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarkirim`
--

INSERT INTO `daftarkirim` (`id`, `nama`, `jenis`, `tarif`, `waktu`) VALUES
(1, 'Epson', 'Bahan Elektronik', '200000', '17-09-2019'),
(2, 'voltage', 'Bahan alat rumah tangga', '100000', '02-02-2020');

-- --------------------------------------------------------

--
-- Table structure for table `daftarmitra`
--

CREATE TABLE `daftarmitra` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `akun_simpanan` varchar(10) NOT NULL,
  `akun_override` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `promoter` varchar(50) NOT NULL,
  `thn_gabung` varchar(50) NOT NULL,
  `gudang` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarmitra`
--

INSERT INTO `daftarmitra` (`id`, `kode_id`, `akun_simpanan`, `akun_override`, `nama`, `tgl_lahir`, `jabatan`, `promoter`, `thn_gabung`, `gudang`, `alamat`, `kota`, `telepon`, `email`) VALUES
(1, '000100', '', '', 'Admin', '', 'Branch Manager', 'HPA', '2017', 'Head Office', 'Tangerang', 'Tangerang', '081234567891', 'admin@email.com'),
(6, '000150', '90147', '990147', 'Budi', '03 Februari 1990', 'Branch Manager', 'HP', '2017', 'Gudang 1', '', 'Jakarta', '081234567891', 'budi@email.com'),
(18, '000151', '90148', '990148', 'Raja', '2021-02-13', 'Administration', 'Budi', '2021', 'Gudang 1', 'Jl. Mawar', 'Jember', '081234567891', 'raja@email.com'),
(2, '001', '', '', ' Vitkom 21', '2000-06-18', 'Programmer', 'HPI', '2014', 'Gudang 1', ' Jl. Pintu Air 101', 'Bahan Kesehatan', '0857777777', ' vitkom1@gmail.com '),
(3, '1103', '', '', 'HP', '1999-06-24', 'Sekretaris', 'HRM', '2016', 'Gudang 3', 'Bogor', 'Elektronik', '0858832456', 'hperp@gmail.com'),
(4, '1106', '', '', 'Kurnia Ayu', '2000-06-11', 'Manager', 'HPO', '2015', 'Gudang 2', 'Jl. Belendung', 'Tangerang', '08788888888', 'admin@mail.com'),
(5, '1107', '', '', 'Ahmad Ali', '2000-06-10', 'Bendahara', 'HP', '2018', 'Gudang 2', 'Jl. Belendung', 'Tangerang', '08788888888', 'member@mail.com');

--
-- Triggers `daftarmitra`
--
DELIMITER $$
CREATE TRIGGER `after_delete_mitra` AFTER DELETE ON `daftarmitra` FOR EACH ROW BEGIN
	DELETE FROM chartofaccount WHERE chartofaccount.kode = old.akun_simpanan;
    
    DELETE FROM chartofaccount WHERE chartofaccount.kode = old.akun_override;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_mitra` AFTER INSERT ON `daftarmitra` FOR EACH ROW BEGIN
	INSERT INTO chartofaccount VALUES(null,NEW.akun_simpanan, CONCAT('Simpanan ', NEW.nama), 'Riel', 'Debit');
    
    INSERT INTO chartofaccount VALUES(null,NEW.akun_override, CONCAT('Override ', NEW.nama), 'Riel', 'Debit'); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `jumlah_deposit` varchar(50) NOT NULL,
  `jumlah_pengeluaran` varchar(50) NOT NULL,
  `total_deposit` varchar(50) NOT NULL,
  `status` enum('N','Y') NOT NULL,
  `kode_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `tgl`, `manager`, `jabatan`, `cabang`, `jumlah_deposit`, `jumlah_pengeluaran`, `total_deposit`, `status`, `kode_id`) VALUES
(1, '11-06-2020', 'Saeful Rahman', '', 'Karang Tengah', '1000000', '100000', '900000', 'Y', '001'),
(2, '19-06-2020', 'Sofia Rahma', '', 'Tangerang', '2000000', '1000000', '1000000', 'Y', ''),
(3, '2020-06-06', 'Iman Hanafi', 'Branch Manager', 'Bandung', '2000000', '100000', '1900000', 'N', ''),
(4, 'up', 'Budi', 'Branch Manager', 'Gudang 1', '7000000', '0', '7000000', 'N', 'MT-000150'),
(6, 'up', 'Budi', '', 'Gudang 1', '2800000', '0', '2800000', '', 'MT-000150'),
(7, 'up', 'Admin', '', 'Head Office', '2100000', '0', '2100000', '', ''),
(8, 'up', 'Admin', '', 'Head Office', '14000000', '0', '14000000', '', 'MT-000100');

-- --------------------------------------------------------

--
-- Table structure for table `distri`
--

CREATE TABLE `distri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `weekending` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distri`
--

INSERT INTO `distri` (`id`, `nama`, `location`, `manager`, `profit`, `weekending`) VALUES
(1, 'CV Fatmawati', 'Serang', 'Saeful Rahman', '3,39%', '01-11-2020'),
(2, 'CV Adikarya', 'Tangerang', 'Sofia Rahma', '2,69%', '01-11-2020'),
(3, 'Ardhy Noviska', 'ghjiouk', 'Iman Hanafi', 'ikkkk', '01-11-2020'),
(4, 'CV Talenta', 'Surabaya', 'Iman Hanafi', '2,5%', '09-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jumlah_anak` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gapok` varchar(50) NOT NULL,
  `tunjangan_jabatan` varchar(50) NOT NULL,
  `gaji_diterima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `nama`, `jabatan`, `jumlah_anak`, `status`, `gapok`, `tunjangan_jabatan`, `gaji_diterima`) VALUES
(1, 'Ahmad Saeful ', 'Manager', '3', 'KAWIN', '3000000', '1000000', '4000000'),
(2, 'Miftahul Jannah', 'Wakil Manager', '1', 'KAWIN', '2700000', '800000', '3500000'),
(3, 'Ismatullah', 'Bendahara', '0', 'LAJANG', '2500000', '500000', '3000000'),
(4, 'Fatimah', 'Sekretaris', '2', 'KAWIN', '2500000', '300000', '2800000'),
(6, 'anis', 'manager', '2', '1', '5000000', '1000000', '6000000');

-- --------------------------------------------------------

--
-- Table structure for table `grosssale`
--

CREATE TABLE `grosssale` (
  `id` int(11) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gross_sale` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `pcs` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grosssale`
--

INSERT INTO `grosssale` (`id`, `manager`, `lokasi`, `gross_sale`, `profit`, `pcs`, `point`) VALUES
(1, 'Saeful Rahman', 'DKI Jakarta', '100', '3,39%', '100', '10'),
(2, 'Sofia Rahma', 'Tangerang Kota', '120', '4,69%', '100', '10'),
(3, 'dd', 'ddd', 'ddd', 'dd', 'dd', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `kode`, `nama`, `alamat`) VALUES
(1, '1100', 'Head Office', 'Tangerang'),
(2, '1101', 'Gudang 1', 'Jakarta'),
(3, '1102', 'Gudang 2', 'Depok'),
(4, '1103', 'Gudang 3', 'Tangerang'),
(5, '1104', 'Gudang 4', 'Serang'),
(7, '1106', 'Gudang 6', 'Makassar');

-- --------------------------------------------------------

--
-- Table structure for table `hotnews`
--

CREATE TABLE `hotnews` (
  `id` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `nama` varchar(50) NOT NULL,
  `gudang` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotnews`
--

INSERT INTO `hotnews` (`id`, `tgl`, `image`, `nama`, `gudang`, `manager`, `subject`) VALUES
(2, '23-01-2021', 'slider3.jpg', 'Karma Ilyas Nur', 'Gudang 2', 'Sofia Rahma', 'Bersabar'),
(3, '23-01-2021', 'caterspot.jpg', 'Anggun Nur', 'Gudang 2', 'Ashabul Kahfi', 'Alhamdulillah'),
(4, 'up', '3865967-wallpaper-full-hd_XNgM7er.jpg', 'Kurnia Ayu', 'Gudang 3', 'Ferdian Nur', 'Alhamdulillah'),
(13, 'up', 'color.png', 'Yeski', 'Gudang 1', 'Budi', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_referensi` varchar(50) NOT NULL,
  `jatuh_tempo` varchar(50) NOT NULL,
  `mata_uang` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL,
  `saldo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hutang`
--

INSERT INTO `hutang` (`id`, `tgl`, `no_referensi`, `jatuh_tempo`, `mata_uang`, `debit`, `kredit`, `saldo`) VALUES
(1, '11-05-2020', '000001', '09/09/2020', 'IDR', '10000', '0', '10000'),
(2, '13-06-2020', '000002', '19-10-2020', 'IDR', '20000', '0', '20000'),
(3, '2020-06-06', '000001', '2020-06-09', 'IDR', '10000', '0', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `inout_manager`
--

CREATE TABLE `inout_manager` (
  `id` int(10) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `no_invoice` varchar(100) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `debit` int(100) NOT NULL,
  `kredit` int(100) NOT NULL,
  `akun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inout_manager`
--

INSERT INTO `inout_manager` (`id`, `tgl`, `no_invoice`, `kode_id`, `keterangan`, `jenis`, `debit`, `kredit`, `akun`) VALUES
(1, 'up', 'INV/201210/00105', 'MT-000150', 'Pinjaman', 'Pengeluaran Simpanan', 0, 500000, 'K-200'),
(14, 'up', 'INV/201210/00105', 'MT-000150', 'Penjualan', 'Pemasukan Simpanan', 1000000, 0, 'K-200');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`) VALUES
(1, 'Divisional Manager'),
(2, 'Branch Manager'),
(3, 'Tenant Manager'),
(4, 'Assistant Manager'),
(5, 'Win-win Manager'),
(6, 'Top Leader'),
(7, 'Leader'),
(8, 'Distributor'),
(9, 'Retrain');

-- --------------------------------------------------------

--
-- Table structure for table `juice`
--

CREATE TABLE `juice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL,
  `omzet` varchar(50) NOT NULL,
  `weekending` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juice`
--

INSERT INTO `juice` (`id`, `nama`, `lokasi`, `point`, `omzet`, `weekending`) VALUES
(1, 'CV Melati', 'Jakarta', '70', '8%', '08-12-2020'),
(2, 'CV Andika', 'Tangerang', '80', '8,5%', '08-12-2020'),
(3, 'CV Mekarsari', 'Surabaya', '90', '9%', '09-12-2020'),
(4, 'Aqilla ', 'Lampung', '90', '5%', '12-01-2021');

-- --------------------------------------------------------

--
-- Table structure for table `jurnalumum`
--

CREATE TABLE `jurnalumum` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `transaksi` varchar(50) NOT NULL,
  `no_bukti` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `kode_debit` varchar(50) DEFAULT NULL,
  `kode_kredit` varchar(50) DEFAULT NULL,
  `nama_akundebit` varchar(50) DEFAULT NULL,
  `didebit` varchar(50) DEFAULT NULL,
  `nama_akunkredit` varchar(50) DEFAULT NULL,
  `dikredit` varchar(50) DEFAULT NULL,
  `weekending` varchar(50) DEFAULT NULL,
  `tutup_buku` enum('T','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurnalumum`
--

INSERT INTO `jurnalumum` (`id`, `tgl`, `transaksi`, `no_bukti`, `jumlah`, `kode_debit`, `kode_kredit`, `nama_akundebit`, `didebit`, `nama_akunkredit`, `dikredit`, `weekending`, `tutup_buku`) VALUES
(57, '20-03-2021', 'Beli Meja Kerja', 'JR/200321/00002', '1000000', '200', '100', 'Bank BCA', '1000000', 'Kas', '1000000', NULL, 'T'),
(61, '23-03-2021', 'Beli ATK', 'JR/230321/00003', '1000000', '200', '100', 'Bank BCA', '1000000', 'Kas', '1000000', NULL, 'T'),
(62, '23-03-2021', 'Beli Kursi Kerja', 'JR/230321/00004', '1000000', '200', '100', 'Bank BCA', '1000000', 'Kas', '1000000', NULL, 'T'),
(63, '23-03-2021', 'Beli ATK Kantor Cabang', 'JR/230321/00005', '1000000', '100', '200', 'Kas', '1000000', 'Bank BCA', '1000000', NULL, 'T');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `thn_gabung` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `thn_gabung`, `alamat`, `kota`, `no_telp`, `email`) VALUES
(2, '001', 'Dedy Baharsyah', '19-01-1995', 'Karyawan', '2018', 'Jl. Pintu Air No.31', 'Jakarta', '0877883238', 'dedy@gmail.com'),
(3, '1102', 'Ekawati', '1999-05-08', 'CS', '2019', 'Jl. Pintu Seribu', 'Tangerang', '0812567321', 'ekawati@gmail.com'),
(4, '1103', 'Nabillah', '2000-05-15', 'Sekretaris', '2017', 'Jl. Pintu Seribu 2', 'Depok', '0857732387', 'nabillah@gmail.com'),
(6, '1105', 'Ahmad Rehan ', '2000-06-11', 'Programmer', '2015', 'Jl. Poris Gaga Cipondoh', 'Tangerang', '0811111111', 'rehan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `labarugi`
--

CREATE TABLE `labarugi` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `komersil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporanmodal`
--

CREATE TABLE `laporanmodal` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `no_invoice` varchar(100) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `otc` varchar(50) NOT NULL,
  `totalotc` varchar(50) NOT NULL,
  `ftc` varchar(50) NOT NULL,
  `totalftc` varchar(50) NOT NULL,
  `telah_diproses` enum('T','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `kode_id`, `tgl`, `no_invoice`, `kode`, `nama`, `qty`, `otc`, `totalotc`, `ftc`, `totalftc`, `telah_diproses`) VALUES
(12, 'MT-000150', 'up', 'INV/201210/00105', 'HP', 'Handphone', '10', '500000', '5000000', '700000', '7000000', 'T'),
(14, 'MT-000150', 'up', 'INV/201210/00105', 'FD', 'Flashdisk', '10', '500000', '5000000', '700000', '7000000', 'T');

--
-- Triggers `manager`
--
DELIMITER $$
CREATE TRIGGER `after_delete_manager` AFTER DELETE ON `manager` FOR EACH ROW BEGIN
    UPDATE produk SET produk.qty = produk.qty + old.qty WHERE produk.nama = old.nama AND produk.kode_id = old.kode_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_manager` AFTER INSERT ON `manager` FOR EACH ROW BEGIN
	UPDATE produk SET produk.qty = produk.qty - NEW.qty WHERE produk.nama = NEW.nama AND produk.kode_id = NEW.kode_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `neraca`
--

CREATE TABLE `neraca` (
  `id` int(11) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `neraca_saldo` varchar(50) NOT NULL,
  `penyesuaian` varchar(50) NOT NULL,
  `neracasaldo_penyesuaian` varchar(50) NOT NULL,
  `rugi_laba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neraca`
--

INSERT INTO `neraca` (`id`, `nama_akun`, `neraca_saldo`, `penyesuaian`, `neracasaldo_penyesuaian`, `rugi_laba`) VALUES
(1, 'Sunengsih', 'Debit 100000', 'Debit 100000', 'Debit 100000', 'Debit 100000'),
(2, 'Irfan Hakim', 'Kredit 200000', 'Kredit 200000', 'Kredit 200000', 'Kredit 200000');

-- --------------------------------------------------------

--
-- Table structure for table `overrides`
--

CREATE TABLE `overrides` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kantor` varchar(50) NOT NULL,
  `summary` varchar(50) NOT NULL,
  `saldo_awal` varchar(50) NOT NULL,
  `masuk` varchar(50) NOT NULL,
  `keluar` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `total_saving` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overrides`
--

INSERT INTO `overrides` (`id`, `nama`, `kantor`, `summary`, `saldo_awal`, `masuk`, `keluar`, `total`, `total_saving`) VALUES
(1, 'Fatimah', 'AL-Madinah 2', 'Simpanan', '1000', '500', '200', '300', '1300'),
(2, 'Badrun Salam', 'MMS Building', 'Summary', '2000', '1000', '500', '1500', '3500');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_akun_pembayaran` int(5) NOT NULL,
  `total_pembelian` varchar(50) NOT NULL,
  `diskon` int(10) NOT NULL,
  `ppn` int(10) NOT NULL,
  `bayar_diskon` int(50) NOT NULL,
  `bayar_ppn` int(50) NOT NULL,
  `total_bayar` int(50) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_akun_pembayaran`, `total_pembelian`, `diskon`, `ppn`, `bayar_diskon`, `bayar_ppn`, `total_bayar`, `tanggal`) VALUES
(1, 0, '1000', 10, 0, 0, 0, 0, ''),
(2, 0, '1000', 10, 0, 0, 0, 0, ''),
(3, 1, '1000', 10, 10, 900, 1100, 2200, '12/14/2020'),
(4, 2, '1000', 10, 0, 900, 0, 0, '12/14/2020'),
(5, 1, '1000', 10, 0, 900, 0, 0, '12/14/2020'),
(6, 1, '1000', 10, 0, 900, 0, 0, '12/14/2020'),
(7, 1, '1000', 10, 0, 900, 0, 0, '12/14/2020'),
(8, 1, '5000', 10, 10, 4500, 5500, 11000, '12/16/2020');

-- --------------------------------------------------------

--
-- Table structure for table `pendapatanlain`
--

CREATE TABLE `pendapatanlain` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `transaksi` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendapatanlain`
--

INSERT INTO `pendapatanlain` (`id`, `tgl`, `no_faktur`, `transaksi`, `jumlah`) VALUES
(1, '2020-06-03', '11/02/AFR/2020', 'Beli Lemari', '2'),
(2, '2020-06-02', '12/02/AFR/2020', 'Beli Meja Bundar', '4'),
(4, '2020-06-27', '11/02/AFR/2020', 'Bayar Kue Donat', '10');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `isi_karton` varchar(50) NOT NULL,
  `total_qty` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `no_sj` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `no_lpb` varchar(20) NOT NULL,
  `no_po` varchar(20) NOT NULL,
  `no_kontiner` varchar(20) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `nama_supir` varchar(50) NOT NULL,
  `no_segel` varchar(20) NOT NULL,
  `gudang` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `kode_id`, `nama`, `qty`, `isi_karton`, `total_qty`, `harga`, `no_sj`, `tanggal`, `no_lpb`, `no_po`, `no_kontiner`, `no_polisi`, `nama_supir`, `no_segel`, `gudang`, `supplier`) VALUES
(5, '1108', 'VGA card', '10', '4', '40', '1000', '8888', '14/12/2020', '14LPB1', '888', '74747', '4y4u4u', 'Jali', 'agagag', 'Gudang 2', 'Ajat'),
(6, '117', 'LCD', '10', '100', '1000', '1000', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(7, '001', 'motor', '3', 'PCS', '4', '1500000', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(8, '0011', 'Printer1', '11', 'Pcs11', '41', '15000001', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(9, '001', 'motor', '3', 'Pcs1', '41', '1500000', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(10, '11061', 'Ardhy Noviska1', '10', '10', '100', '2000000', '8888', '0000-00-00', '13LPB1', '888', '74747', '4y4u4u', 'Jali', 'agagag', 'Gudang 2', 'Ajat'),
(11, '11061', 'Ardhy Noviska1', '10', '10', '100', '20000', '8888', '0000-00-00', '13LPB1', '888', '74747', '4y4u4u', 'Jali', 'agagag', 'Gudang 2', 'Ajat'),
(12, '1109', 'Kabel Data', '10', '10', '100', '100000', '8888', '0000-00-00', '13LPB1', '888', '74747', '4y4u4u', 'Jali', 'agagag', 'Gudang 5', 'Ajat'),
(13, '11061', 'Ardhy Noviska1', '3', '3', '9', '1000', '8888', '0000-00-00', '14LPB1', '888', '74747', '4y4u4u', 'Jali', 'agagag', 'Gudang 2', 'Ajat'),
(14, '001', 'motor', '10', '10', '100', '5000', '001', '14/12/2020', '14LPB1', '001', '11', '11', '11', '11', 'ali', 'Ajat'),
(15, '1108', 'VGA card', '10', '10', '100', '5000', '8888', '16/12/2020', '16LPB1', '888', '74747', '4y4u4u', 'Jali', '123', 'Gudang 2', 'Ajat');

--
-- Triggers `penerimaan`
--
DELIMITER $$
CREATE TRIGGER `bertambah_stok` AFTER INSERT ON `penerimaan` FOR EACH ROW BEGIN
UPDATE produk SET qty=qty+NEW.total_qty
 WHERE kode=New.kode_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `reff` varchar(50) NOT NULL,
  `batasan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `no_akun` varchar(50) NOT NULL,
  `kode_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tgl`, `uraian`, `reff`, `batasan`, `jumlah`, `no_akun`, `kode_id`) VALUES
(1, '2020-06-01', 'Pembelian Meja', '11/AR/K-21/2020', 'Terikat', '50.000', '111767899999', '001'),
(2, '2020-06-05', 'Pembelian Bangku', '11/AR/K-21/2020', 'Tidak Terikat', '40000', '111767899998', ''),
(4, '2020-06-05', 'Membeli Donat', '11/AR/K-21/2020', 'Terikat', '10000', '1176811118', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty_karton` varchar(50) NOT NULL,
  `qty_perkarton` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `gudang_tujuan` varchar(50) NOT NULL,
  `stok` int(10) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `no_do` varchar(15) NOT NULL,
  `manager_gudang` varchar(50) NOT NULL,
  `no_kontainer` varchar(15) NOT NULL,
  `no_segel` varchar(15) NOT NULL,
  `nama_expedisi` varchar(50) NOT NULL,
  `ongkir` varchar(50) NOT NULL,
  `berat_ongkir` varchar(30) NOT NULL,
  `jenis_kendaraan` varchar(30) NOT NULL,
  `no_polisi` varchar(15) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `total_qty` int(10) NOT NULL,
  `total_ongkir` int(50) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `kode_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `kode`, `nama`, `qty_karton`, `qty_perkarton`, `total`, `gudang_asal`, `gudang_tujuan`, `stok`, `kepada`, `alamat`, `kota`, `no_telepon`, `tanggal`, `no_do`, `manager_gudang`, `no_kontainer`, `no_segel`, `nama_expedisi`, `ongkir`, `berat_ongkir`, `jenis_kendaraan`, `no_polisi`, `driver`, `total_qty`, `total_ongkir`, `pembayaran`, `kode_id`) VALUES
(7, 'TPLD004', 'Mouse', '10', '10', '100', 'Gudang 2', 'Gudang 2', 80, 'Kurnia Ayu', 'Jl. Belendung', 'Tangerang', '08788888888', '14/12/2020', '14/PP/7', 'ajat', '123', '123', '', '', '', '', '', '', 0, 0, '', '001'),
(8, 'TPLE11', 'Scanner', '10', '100', '1000', 'Gudang 3', 'Gudang 3', 90, 'Vitkom 2', 'Jl. Pintu Air 10', 'Bahan Kesehatan', '0857777777', '14/12/2020', '14/PP/7', 'ajat', '123', '123', '', '', '', '', '', '', 0, 0, '', '001'),
(9, '001', 'motor', '25', '2', '50', 'ali', 'ali', 101, 'Vitkom 2', 'Jl. Pintu Air 10', 'Bahan Kesehatan', '0857777777', '14/12/2020', '14/PP/7', 'ajat', '123', '123', '', '', '', '', '', '', 0, 0, '', '001'),
(11, '', 'Handphone', '5', '40', '200', 'Head Office', 'Gudang 1', 1400, 'Budi', '', 'Jakarta', '081234567891', '17/01/2021', '17/PP/8', '', '', '', '', '', '', '', '', '', 0, 0, '', '120');

--
-- Triggers `pengiriman`
--
DELIMITER $$
CREATE TRIGGER `berkurang_stok` AFTER INSERT ON `pengiriman` FOR EACH ROW BEGIN
UPDATE produk SET qty=qty-NEW.total
 WHERE kode=New.kode_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product_chart`
--

CREATE TABLE `product_chart` (
  `id` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `gudang` varchar(100) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `omzet_sabtu` varchar(50) NOT NULL,
  `omzet_minggu` varchar(50) NOT NULL,
  `omzet_senin` varchar(50) NOT NULL,
  `omzet_selasa` varchar(50) NOT NULL,
  `omzet_rabu` varchar(50) NOT NULL,
  `omzet_kamis` varchar(50) NOT NULL,
  `omzet_jumat` varchar(50) NOT NULL,
  `total_omzet` varchar(50) NOT NULL,
  `total_poin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_chart`
--

INSERT INTO `product_chart` (`id`, `tgl`, `nama`, `jabatan`, `gudang`, `manager`, `omzet_sabtu`, `omzet_minggu`, `omzet_senin`, `omzet_selasa`, `omzet_rabu`, `omzet_kamis`, `omzet_jumat`, `total_omzet`, `total_poin`) VALUES
(1, '23-01-2021', 'Fatimah', 'Branch Manager', 'Gudang 2', 'Saeful Rahman', '10%', '10%', '10%', '10%', '10%', '10%', '10%', '70%', '75'),
(2, '23-01-2021', 'Khanza Salsabilla', 'Branch Manager', 'Gudang 3', 'Sofia Rahma', '15%', '15%', '15%', '15%', '10%', '10%', '10%', '80%', '90'),
(3, 'up', 'Budi', 'Branch Manager', 'Gudang 1', 'Asima Silalahi', '800000', '0', '400000', '0', '0', '0', '0', '1200000', '300'),
(4, 'up', 'Ratu', 'Tenant Manager', 'Gudang 1', 'Asima Silalahi', '800000', '0', '400000', '0', '0', '0', '0', '1200000', '300');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `gudang` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `unitbagus` varchar(50) NOT NULL,
  `unitrusak` varchar(50) NOT NULL,
  `hpp` varchar(50) NOT NULL,
  `sebelumpajak` varchar(50) NOT NULL,
  `ppn` varchar(50) NOT NULL,
  `setelahpajak` varchar(50) NOT NULL,
  `hargasetoran` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `kode_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `kode`, `kategori`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`, `kode_id`) VALUES
(1, 'Printer', 'MK02', '001', 'Ferdian', 'Gudang 1', '200', '80', '20', '400000', '120000', '10%', '132000', '2000', '268000', 'ApelMerah.jpg', ''),
(3, 'Mouse', 'TPLD004', '001', 'Aman Jujur Simora', 'Gudang 2', '80', '60', '20', '120000', '100000', '10%', '150000', '10000', '300000', 'Alpukat.jpg', ''),
(4, 'Scanner', 'TPLE11', '001', 'Artika Malasari', 'Gudang 3', '90', '70', '20', '140000', '110000', '10%', '100000', '80000', '200000', 'Anggur.jpg', ''),
(6, 'Processor', '1107', '002', 'Saeful', 'Gudang 2', '100', '20', '2', '100000', '10000', '10', '100000', '90000', '100000', 'default.jpg', '001'),
(8, 'VGA card', '1108', '001', 'Ahmad Sofyan', 'Gudang 2', '200', '15', '5', '100000', '10000', '10', '100000', '1000', '100000', 'default.jpg', ''),
(9, 'Kabel Data', '1109', '001', 'Ashabul Kahfi R', 'Gudang 5', '70', '10', '0', '9500', '1000', '10', '10000', '9000', '100000', 'default.jpg', ''),
(10, 'Ardhy Noviska1', '11061', '002', 'Ashabul Kahfi1', 'Gudang 2', '301', '201', '41', '110001', '100001', '101', '1000001', '10001', '1000001', 'default.jpg', '001'),
(11, 'motor', '001', '001', 'ari', 'ali', '41', '1', '1', '1', '400000', '2', '40000', '20000', '1200000', 'default.jpg', '001'),
(12, 'Handphone', 'HP', '001', 'Head', 'Head Office', '1220', '1400', '0', '400000', '500000', '10', '550000', '700000', '560000000', 'default.jpg', 'MT-000100'),
(14, 'Handphone', 'HP', '001', 'Admin', 'Gudang 1', '190', '200', '0', '400000', '500000', '10', '550000', '700000', '0', 'default.jpg', 'MT-000150'),
(15, 'Flashdisk', 'FD', '001', 'Budi', 'Gudang 1', '160', '200', '0', '40000', '50000', '10', '55000', '70000', '56000000', 'default.jpg', 'MT-000150'),
(16, 'Flashdisk', 'FD', '001', 'Admin', 'Head Office', '800', '800', '0', '40000', '50000', '10', '55000', '70000', '56000000', 'default.jpg', 'MT-000100');

-- --------------------------------------------------------

--
-- Table structure for table `return_gudang`
--

CREATE TABLE `return_gudang` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `gudang_tujuan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `kode_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_gudang`
--

INSERT INTO `return_gudang` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `jumlah`, `kode_id`) VALUES
(1, '2020-06-03', '11/FKH/LM/2020', 'Pngembalian Meja Bundar', '1134', 'Meja Budar', 'Gudang 1', 'Gudang 2', '50', ''),
(2, '15-06-2020', '12/FKH/LM/2020', 'Pengembalian Printer', '1106', 'Elektronik', 'Gudang 3', 'Gudang 2', '20', ''),
(4, '2020-06-06', '13/02/AFR/2020', 'Pembelian Kursi Karyawan', '1106', 'Kursi', 'Gudang 3', 'Gudang 5', '50', ''),
(5, '23-12-2020', '11', '11', '001', 'motor', 'ali', 'Gudang 2', '1', '001');

-- --------------------------------------------------------

--
-- Table structure for table `return_supplier`
--

CREATE TABLE `return_supplier` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `supplier_tujuan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `kode_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_supplier`
--

INSERT INTO `return_supplier` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `supplier_tujuan`, `jumlah`, `kode_id`) VALUES
(1, '2020-06-03', '11/FKH/LM/2020', 'Pembelian Lemari Cokelat', '1134', 'Lemari', 'Gudang 1', 'MK-01', '100', ''),
(2, '2020-06-11', '12/02/AFR/2020', 'Pembelian Motherboard', '1106', 'Elektronik', 'Gudang 3', 'MK-04', '20', ''),
(4, '2020-06-03', '13/02/AFR/2020', 'Pembelian Sparepart Motor', '1106', 'Otomotif', 'Gudang 3', 'MK-02', '80', ''),
(5, '2020-06-04', '13/02/AFR/2020', 'Sudah dibayar', '1106', 'Kursi', 'Gudang 3', 'MK-03', '50', ''),
(6, '0000-00-00', '123', 'bagus', '11061', 'Ardhy Noviska1', 'Gudang 2', 'abc', '10', '001');

--
-- Triggers `return_supplier`
--
DELIMITER $$
CREATE TRIGGER `item_rusak` AFTER INSERT ON `return_supplier` FOR EACH ROW BEGIN
UPDATE produk SET unitrusak=unitrusak-NEW.jumlah
 WHERE kode=New.kode;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_manager` varchar(50) NOT NULL,
  `total_pcs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`id`, `kode`, `nama`, `harga_manager`, `total_pcs`) VALUES
(1, '1105', 'Case PC', '2000000', '100'),
(2, '1106', 'Kursi Kerja', '2000000', '50'),
(4, '1106', 'Motherboard', '2000000', '100');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `kode`, `nama`, `alamat`, `telepon`) VALUES
(5, 'MK02', 'Ajat', 'Tangerang', '0216262626266262');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(3) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `kode`, `name`, `description`) VALUES
(1, '001', 'Elektronik', 'Semua yang berhungan tentang elektronik'),
(3, '002', 'ATK', 'Semua yang berhungan tentang alat tulis kantor'),
(4, '003', 'KESEHATAN', 'Alat kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(3) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `id_role` int(3) NOT NULL,
  `hargajual` varchar(128) NOT NULL,
  `hargabeli` varchar(128) NOT NULL,
  `detail` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES
(0, 'Bayam L', 'TPLE11', 2, '100000', '80000', 'Wortel Bayam asal Aceh', '5eb67ab420635.jpg'),
(3, 'Wortel Surabaya', 'TPLD005', 2, '20000', '15000', 'Wortel Orange asal Surabaya', '5eb282618b9ea.jpg'),
(7, 'Alpukat', 'TPLD012', 1, '40000', '20000', 'Alpukat asal Lampung', '5eb67b0ac694d.jpg'),
(8, 'Apel Bandung', 'TPLED10', 1, '4000', '2000', 'Buah Apel Hijau asal Bandung', '.jpg'),
(10, 'Apel Bandung 3', 'TPLE012', 1, '30000', '20000', 'Buah Apel Merah asal Bandung', 'ApelMerah.jpg'),
(11, 'Apel Bandung 3', 'TPLE003', 1, '30000', '20000', 'Buah Apel Hijau asal Bandung', 'ApelMerah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Hak akses Administrator'),
(2, 'Client', 'Hak akses Client');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `tahun_gabung` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota_kec` varchar(100) DEFAULT NULL,
  `no_telpon` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `pin_bb` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tf_gudang`
--

CREATE TABLE `tf_gudang` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_transfer` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `gudang_tujuan` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `kode_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tf_gudang`
--

INSERT INTO `tf_gudang` (`id`, `tgl`, `no_transfer`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `qty`, `kode_id`) VALUES
(1, '2020-06-07', '11/KL/22/2020', 'Pembelian Meja Bundar', '1134', 'Meja', 'Gudang 1', 'Gudang 2', '30', ''),
(2, '2020-06-05', '12/KL/22/2020', 'Pembelian Motherboard', '1106', 'Elektronik', 'Gudang 3', 'Gudang 2', '15', ''),
(4, '2020-06-06', '13/KL/22/2020', 'Pembelian Kursi Karyawan', '1112', 'Kursi', 'Gudang 3', 'Gudang 5', '30', ''),
(5, '23-12-2020', '1011', '11', '001', 'motor', 'ali', 'Gudang 2', '1', '001'),
(6, '23-12-2020', '123', 'www', '001', 'motor', 'ali', 'Gudang 2', '10', '001');

--
-- Triggers `tf_gudang`
--
DELIMITER $$
CREATE TRIGGER `berkurang_gudang` AFTER INSERT ON `tf_gudang` FOR EACH ROW BEGIN
UPDATE produk SET qty=qty-NEW.qty
 WHERE kode=New.kode;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `topasmen`
--

CREATE TABLE `topasmen` (
  `id` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gudang` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `poin_sendiri` varchar(50) NOT NULL,
  `poin_tim` varchar(50) NOT NULL,
  `peringkat_langsung` varchar(50) NOT NULL,
  `peringkat_tidaklangsung` varchar(50) NOT NULL,
  `jumlah_leader` varchar(50) NOT NULL,
  `jumlah_distributor` varchar(50) NOT NULL,
  `jumlah_retrain` varchar(50) NOT NULL,
  `jumlah_observasi` varchar(50) NOT NULL,
  `jumlah_team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topasmen`
--

INSERT INTO `topasmen` (`id`, `tgl`, `nama`, `gudang`, `manager`, `poin_sendiri`, `poin_tim`, `peringkat_langsung`, `peringkat_tidaklangsung`, `jumlah_leader`, `jumlah_distributor`, `jumlah_retrain`, `jumlah_observasi`, `jumlah_team`) VALUES
(1, '23-01-2021', 'Siska', 'Gudang 2', 'Saeful Rahman', '70', '70', 'CS', 'Karyawan', '2', '5', '2', '5', '2'),
(3, 'up', 'Anggun Nur', 'Gudang 3', 'Iman Hanafi', '80', '90', 'Bendahara', 'Karyawan', '2', '3', '2', '2', '3'),
(11, 'up', 'Yeski', 'Gudang 1', 'Budi', '10', '80', '12', '12', '4', '5', '3', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `toplead`
--

CREATE TABLE `toplead` (
  `id` int(11) NOT NULL,
  `faktur` int(10) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gudang` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `poin_sendiri` varchar(50) NOT NULL,
  `poin_team` varchar(50) NOT NULL,
  `peringkat_langsung` varchar(50) NOT NULL,
  `peringkat_tidaklangsung` varchar(50) NOT NULL,
  `jumlah_leader` varchar(50) NOT NULL,
  `jumlah_distributor` varchar(50) NOT NULL,
  `jumlah_retrain` varchar(50) NOT NULL,
  `jumlah_observasi` varchar(50) NOT NULL,
  `jumlah_team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toplead`
--

INSERT INTO `toplead` (`id`, `faktur`, `tgl`, `nama`, `gudang`, `manager`, `poin_sendiri`, `poin_team`, `peringkat_langsung`, `peringkat_tidaklangsung`, `jumlah_leader`, `jumlah_distributor`, `jumlah_retrain`, `jumlah_observasi`, `jumlah_team`) VALUES
(1, 86, '12-10-2020', 'Siska', 'Gudang 2', 'Saeful Rahman', '70', '70', 'CS', 'Karyawan', '2', '5', '2', '6', '2'),
(3, 87, '12-10-2020', 'Anggun Nur', 'Gudang 3', 'Iman Hanafi', '80', '95', 'Bendahara', 'Karyawan', '2', '3', '2', '2', '3'),
(4, 88, 'up', 'Anto', 'Gudang 4', 'Anto', '10', '50', '12', '12', '5', '9', '4', '2', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tutupbuku`
--

CREATE TABLE `tutupbuku` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutupbuku`
--

INSERT INTO `tutupbuku` (`id`, `tgl`, `id_user`) VALUES
(1, '0000-00-00', '1'),
(2, '0000-00-00', '2'),
(3, '2020-12-31', '1'),
(4, '2020-12-30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_reset_key` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT '1526456245974.png',
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_role`, `kode_id`, `username`, `password`, `password_reset_key`, `first_name`, `last_name`, `email`, `phone`, `photo`, `activated`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 1, '000100', 'Admin', '$2y$10$zs2texE.oXa7JfqjSi15AOfo9ABQVte/ufdG3LeG0NdRzDQICIJ7e', NULL, 'Admin', 'ERP', 'admin@gmail.com', '', '1526456245974.png', 1, NULL, '2020-11-14 11:19:46', NULL),
(2, 1, '', 'Admin2', '$2y$10$DVR0CtQjSSbASV9bnVN9aO33ql7mvC3aZwaV3BznVuQFXM7Xy6O2G', NULL, 'Admin2', 'ERP', 'admin2@gmail.com', '', '1526456245974.png', 1, NULL, '2020-11-14 11:19:46', NULL),
(3, 1, '001', 'admin', '$2y$05$OA.OoeNHoEkbGGKazYqPU.UOaI5jmgro8x2pRSV56ClTWlDf0EEn2', '', 'ADMIN', 'MAULANA', 'admin@mail.com', '081906515912', '1526456245974.png', 1, '2020-03-14 22:34:49', '2020-03-14 21:58:17', NULL),
(4, 2, '', 'member', '$2y$05$8GdJw3BVbmhN6x2t0MNise7O0xqLMCNAN1cmP6fkhy0DZl4SxB5iO', '', 'MEMBER', 'MAULANA', 'member@mail.com', '081906515912', '1583991814826.png', 1, '2020-03-14 22:32:04', '2020-03-14 22:00:32', NULL),
(5, 3, '', 'kepala sekolah', '5f4dcc3b5aa765d61d8327deb882cf99', 'password', 'kepala', 'MAULANA', 'kepsek@gmail.com', '08778832387', '1526456245974.png', 1, '2020-05-14 11:42:01', '2020-05-01 11:42:25', NULL),
(6, 4, '', 'pembina', '5f4dcc3b5aa765d61d8327deb882cf99', 'password', 'pembina', 'MAULANA', 'pembina@gmail.com', '08778832388', '1526456245974.png', 1, '2020-05-27 13:26:18', '2020-05-09 13:26:28', NULL),
(7, 2, '', 'rehan', '5f4dcc3b5aa765d61d8327deb882cf99', 'password', 'MEMBER', 'SISWA', 'reyhan@gmail.com', '08778832387', '1526456245974.png', 1, '2020-05-02 15:41:27', '2020-05-01 15:41:27', NULL),
(8, 2, '', 'Hasyim', '$2y$10$zEPYAOXKFRAxSfQeOzJbP.C5biBW4j30L2cihmEe60dKRza/E9u4S', NULL, 'member', 'MURID', 'hasyim@gmail.com', '088778832387', '1526456245974.png', 1, '2020-05-30 16:59:42', '0000-00-00 00:00:00', '2020-05-30 16:59:42'),
(9, 2, '', 'Kinome', '$2y$10$Mchr1qNMpcGCtyNu7KPimOKzXVTAFhHB1fdv.iCSS0ATelfXJDedm', NULL, 'member', 'MURID', 'kinome@gmail.com', '08211176543', '1526456245974.png', 1, '2020-05-30 18:34:18', '2020-05-30 18:34:18', '2020-05-30 18:34:18'),
(10, 2, '', 'Ahmad Hakiki', '$2y$10$iKZOovKXEMEkBIxAWxC26u6fuq/Y/CK8uH2H.DY2ecWXwNQaYwrN6', NULL, 'member', 'MURID', 'kiki@gmail.com', '08223238765', '1526456245974', 1, '2020-05-30 18:39:46', '2020-05-30 18:39:46', '2020-05-30 18:39:46'),
(11, 2, '', 'koko@gmail.com', '$2y$10$3V5hj6jnwL4XTeEtc3H88umzyA3wYo7yx2naWz4mHypuKsFATa0G2', NULL, 'member', 'MURID', 'koko@gmail.com', '08765432189', '1526456245974.png', 1, '2020-05-30 18:48:15', '2020-05-30 18:48:15', '2020-05-30 18:48:15'),
(12, 2, '', 'Mahmur Effendi', '$2y$10$4kJ3LQWz4p.YpcH4ASOk3eisb2WRcZ1tvjcclZz17T1FVvuc18Dvq', NULL, 'Mahmur', 'Effendi', 'member@gmail.com', '', '1526456245974.png', 1, '2020-06-15 08:09:35', '2020-06-15 08:09:35', '2020-06-15 08:09:35'),
(13, 2, '001', 'kiki', '$2y$10$biu2abPRNKGz89AgFhHmluGPG13tm9POjryx2o7WNgMLb/S5m.EpC\r\n', NULL, '', '', 'kiki@email.com', '', '1526456245974.png', 1, NULL, NULL, NULL),
(14, 2, '001', 'test', '$2y$10$3B5KeqdOAhWEmCG/UFhi.OorKOo1wtelgKDyHWByLtmWFnFc7Czeu', NULL, 'Test', 'User', 'test@gmail.com', '', '1526456245974.png', 1, NULL, '2020-11-14 11:46:35', NULL),
(17, 2, '001', 'admin', '202cb962ac59075b964b07152d234b70', NULL, '', '', 'cintacoding@gamil.com', '', '1526456245974.png', 1, NULL, NULL, NULL),
(18, 2, '2', 'adi', '123', NULL, '', '', 'cintacoding@gamail.com', '', '1526456245974.png', 0, NULL, NULL, NULL),
(19, 2, '001', 'test1', '098f6bcd4621d373cade4e832627b4f6', NULL, 'Test', 'User', 'test@gmail.com', '', '1526456245974.png', 1, NULL, '2020-11-14 11:46:35', NULL),
(20, 2, '000150', 'Budi', '$2y$10$H1nrSi9OozCR98CsA.iKPulDMw1AJkalvLv6SRRE0IgoQKX0f.w5u', NULL, 'Budi', 'Purnawarman', 'budi@email.com', '081234567891', '1526456245974.png', 1, NULL, '2021-01-17 21:38:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_log`
--
ALTER TABLE `account_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun_pembayaran`
--
ALTER TABLE `akun_pembayaran`
  ADD PRIMARY KEY (`id_akun_pembayaran`);

--
-- Indexes for table `bukubesar`
--
ALTER TABLE `bukubesar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chartofaccount`
--
ALTER TABLE `chartofaccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `daftarekspedisi`
--
ALTER TABLE `daftarekspedisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarkirim`
--
ALTER TABLE `daftarkirim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarmitra`
--
ALTER TABLE `daftarmitra`
  ADD PRIMARY KEY (`kode_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distri`
--
ALTER TABLE `distri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grosssale`
--
ALTER TABLE `grosssale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotnews`
--
ALTER TABLE `hotnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inout_manager`
--
ALTER TABLE `inout_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `juice`
--
ALTER TABLE `juice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnalumum`
--
ALTER TABLE `jurnalumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kode_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `labarugi`
--
ALTER TABLE `labarugi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporanmodal`
--
ALTER TABLE `laporanmodal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overrides`
--
ALTER TABLE `overrides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pendapatanlain`
--
ALTER TABLE `pendapatanlain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_chart`
--
ALTER TABLE `product_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `return_gudang`
--
ALTER TABLE `return_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_supplier`
--
ALTER TABLE `return_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tf_gudang`
--
ALTER TABLE `tf_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topasmen`
--
ALTER TABLE `topasmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toplead`
--
ALTER TABLE `toplead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutupbuku`
--
ALTER TABLE `tutupbuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_log`
--
ALTER TABLE `account_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `akun_pembayaran`
--
ALTER TABLE `akun_pembayaran`
  MODIFY `id_akun_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bukubesar`
--
ALTER TABLE `bukubesar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `chartofaccount`
--
ALTER TABLE `chartofaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `daftarekspedisi`
--
ALTER TABLE `daftarekspedisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftarkirim`
--
ALTER TABLE `daftarkirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftarmitra`
--
ALTER TABLE `daftarmitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `distri`
--
ALTER TABLE `distri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grosssale`
--
ALTER TABLE `grosssale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hotnews`
--
ALTER TABLE `hotnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inout_manager`
--
ALTER TABLE `inout_manager`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `juice`
--
ALTER TABLE `juice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jurnalumum`
--
ALTER TABLE `jurnalumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `labarugi`
--
ALTER TABLE `labarugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporanmodal`
--
ALTER TABLE `laporanmodal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `neraca`
--
ALTER TABLE `neraca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `overrides`
--
ALTER TABLE `overrides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendapatanlain`
--
ALTER TABLE `pendapatanlain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_chart`
--
ALTER TABLE `product_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `return_gudang`
--
ALTER TABLE `return_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `return_supplier`
--
ALTER TABLE `return_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tf_gudang`
--
ALTER TABLE `tf_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topasmen`
--
ALTER TABLE `topasmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `toplead`
--
ALTER TABLE `toplead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tutupbuku`
--
ALTER TABLE `tutupbuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
