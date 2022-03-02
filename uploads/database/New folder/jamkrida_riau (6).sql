-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 02:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamkrida_riau`
--

-- --------------------------------------------------------

--
-- Table structure for table `block_user`
--

CREATE TABLE `block_user` (
  `blocked_from` varchar(6) NOT NULL,
  `blocked_to` varchar(6) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblbp`
--

CREATE TABLE `tblbp` (
  `BPid` int(11) NOT NULL,
  `BPnama` varchar(255) DEFAULT NULL,
  `BPketerangan` varchar(255) DEFAULT NULL,
  `BPterbilang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbp`
--

INSERT INTO `tblbp` (`BPid`, `BPnama`, `BPketerangan`, `BPterbilang`) VALUES
(1, 'Penjaminan Pembiayaan', 'Pembiayaan', 'Fee Pembiayaan'),
(2, 'Penjaminan Kredit', 'Kredit', 'Fee Bank');

-- --------------------------------------------------------

--
-- Table structure for table `tblcabmitra`
--

CREATE TABLE `tblcabmitra` (
  `mitraID` int(11) NOT NULL,
  `mitraKodeCab` int(5) DEFAULT NULL,
  `mitraNama` varchar(255) DEFAULT NULL,
  `mitraAlamat` varchar(255) DEFAULT NULL,
  `mitraKota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcabmitra`
--

INSERT INTO `tblcabmitra` (`mitraID`, `mitraKodeCab`, `mitraNama`, `mitraAlamat`, `mitraKota`) VALUES
(7, 0, 'KANTOR PUSAT PEKANBARU', 'JL.JEND SUDIRMAN NO.377 PEKANBARU', 'PEKANBARU'),
(8, 100, 'KANTOR PUSAT', 'JL.JEND SUDIRMAN NO.377 PEKANBARU', 'PEKANBARU'),
(9, 101, 'CABANG UTAMA PEKANBARU', 'JL. JENDRAL SUDIRMAN NO. 112', 'PEKANBARU'),
(10, 102, 'CABANG TEMBILAHAN', 'JL. HANG TUAH NO.1', 'TEMBILAHAN'),
(11, 103, 'CABANG TANJUNG PINANG', 'TANJUNG PINANG', 'TANJUNG PINANG'),
(12, 104, 'CABANG DUMAI', 'JL SUTAN SYARIF QASYIM NO.111-112', 'DUMAI'),
(13, 105, 'CABANG SELAT PANJANG', 'JL DIPONEGORO NO.58', 'SELAT PANJANG'),
(14, 106, 'CABANG BATAM', 'JL LAKSAMANA BINTAN SUNGAI PANAS', 'BATAM'),
(15, 107, 'CABANG PASAR PUSAT', 'JL JEND SUDIRMAN PLAZA SUKARAMAI LT.1', 'PEKANBARU'),
(16, 108, 'CABANG BENGKALIS', 'JL PAHLAWAN NO.15A', 'BENGKALIS'),
(17, 109, 'CABANG BANGKINANG', 'JL PROF M YAMIN. SH NO.291', 'BANGKINANG'),
(18, 110, 'CABANG AIR MOLEK', 'JL JEND SUDIRMAN', 'AIR MOLEK'),
(19, 111, 'CABANG TANJUNG BALAI KARIMUN', 'JL PERTAMBANGAN NO23A', 'TANJUNG BALAI KARIMUN'),
(20, 112, 'CABANG PANGKALAN KERINCI', 'JL RAYA LINTAS TIMUR', 'PANGKALAN KERINCI'),
(21, 113, 'CABANG BAGAN SIAPI-API', 'JL PERNIAGAAN', 'BAGAN SIAPI API'),
(22, 114, 'CABANG TELUK KUANTAN', 'JL JEND SUDIRMAN NO.114', 'TELUK KUANTAN'),
(23, 115, 'CABANG PASIR PANGARAIAN', 'JL PASAR SENEN', 'PASIR PANGARAIAN'),
(24, 116, 'CABANG SIAK SRI INDRAPURA', 'JL SULTAN ISMAIL NO.75', 'SIAK SRI INDRAPURA'),
(25, 117, 'CABANG RANAI', 'JL DATUK KAYA WAN MUHAMMAD BENTENG', 'RANAI'),
(26, 118, 'CAPEM TANGKERANG', 'JL H. IMAM MUNANDAR NO.162', 'PEKANBARU'),
(27, 119, 'CAPEM RUMBAI', 'JL SEKOLAH NO.78', 'PEKANBARU'),
(28, 120, 'CAPEM SENAPELAN', 'JL SENAPELAN NO.19', 'PEKANBARU'),
(29, 121, 'CAPEM PERAWANG', 'JL RAYA PERAWANG KM.5', 'PERAWANG'),
(30, 122, 'CAPEM DURI', 'JL HANG TUAH NO.448E', 'DURI'),
(31, 123, 'CAPEM TANJUNG BATU', 'JL MERDEKA NO.14', 'TANJUNG BATU'),
(32, 124, 'CAPEM SEI PAKNING', 'JL JEND SUDIRMAN NO.149', 'SUNGAI PAKNING'),
(33, 125, 'CAPEM DABO SINGKEP', 'JL. PERUSAHAAN', 'DABO SINGKEP'),
(34, 128, 'CAPEM UJUNG BATU', 'JL. JEND SUDIRMAN NO.86', 'UJUNG BATU'),
(35, 129, 'CAPEM BAGAN BATU', 'JL JEND SUDIRMAN BAGAN SINEMBAH', 'BAGAN BATU'),
(36, 130, 'CAPEM SOREK', 'JL RAYA LINTAS TIMUR NO.100', 'PANGKALAN KURAS'),
(37, 132, 'CAPEM LUBUK BAJA', 'JL PEMBANGUNAN NO.1 NAGOYA BATAM', 'BATAM'),
(38, 133, 'CAPEM BELILAS', 'JL LINTAS TIMUR SIMPANG 4 BELILAS', 'BELILAS'),
(39, 134, 'CAPEM PANAM', 'JL H R SUBRANTAS', 'PEKANBARU'),
(40, 135, 'CABANG BINTAN', 'JL. KUALA LUMPUR', 'TANJUNG PINANG'),
(41, 136, 'KEDAI MARPOYAN', 'JL KAHARUDIN NASUTION NO.56B', 'PEKANBARU'),
(42, 137, 'CAPEM KANDIS', 'JL. LINTAS PEKANBARU-DURI', 'KANDIS'),
(43, 138, 'CAPEM LIPAT KAIN', 'JL RAYA PEKANBARU-TELUK KUANTAN', 'LIPAT KAIN'),
(44, 139, 'CAPEM PETAPAHAN', 'JL RAYA PETAPAHAN', 'PETAPAHAN'),
(45, 140, 'KEDAI PASAR SAIL', 'JL. HANG TUAH NO.89B', 'PEKANBARU'),
(46, 141, 'KEDAI SUNGAI APIT', 'JL. HANG TUAH PASAR SUNGAI APIT', 'SUNGAI APIT'),
(47, 142, 'KEDAI PASAR AIR TIRIS', 'JL. RAYA PEKANBARU-BANGKINANG', 'AIR TIRIS'),
(48, 143, 'KEDAI PASAR KUOK', 'JL. RAYA BANGKINANG-PADANG', 'KUOK'),
(49, 144, 'CAPEM TUANKU TAMBUSAI', 'JL. TUANKU TAMBUSAI NO.135B', 'PEKANBARU'),
(50, 145, 'KEDAI JALAN DURIAN', 'JL DURIAN NO.34A', 'PEKANBARU'),
(51, 146, 'CAPEM TANJUNG UBAN', 'JL. PERMAISURI BLOK A NO.2', 'TANJUNG UBANG'),
(52, 147, 'KEDAI PASAR MINAS', 'JL. YOS SUDARSO', 'MINAS'),
(53, 148, 'CAPEM SUNGAI GUNTUNG', 'JL. YOS SUDARSO', 'SUNGAI GUNTUNG'),
(54, 149, 'CAPEM JALAN RIAU', 'JL. RIAU NO.129 B', 'PEKANBARU'),
(55, 150, 'KEDAI PASAR UKUI', 'JL. LINTAS TIMUR PASAR UKUI', 'UKUI'),
(56, 151, 'KEDAI PASAR BUKIT KAPUR', 'JL. SUKARNO HATTA', 'DUMAI'),
(57, 152, 'KEDAI SEDANAU RANAI', 'JL. PELANTAR II (NATO)', 'SEDANAU'),
(58, 153, 'CAPEM DALU-DALU', 'JL RAYA LINTAS PROPINSI RIAU-SUMUT', 'DALU-DALU'),
(59, 154, 'CAPEM KOTO TENGAH', 'PASAR KOTO TENGAH', 'KOTO TENGAH'),
(60, 155, 'CAPEM BASERAH', 'JL. JEND SUDIRMAN', 'BASERAH'),
(61, 156, 'KEDAI PASAR PANGKALAN KERINCI', 'JL. SETIA MAHA RAJA LINTAS TIMUR', 'PANGKALAN KERINCI'),
(62, 157, 'KEDAI PASAR PERANAP', 'PASAR PERANAP', 'PERANAP'),
(63, 158, 'KEDAI PASAR PINGGIR', 'JL. LINTAS DURI PEKANBARU PINGGIR', 'DURI'),
(64, 159, 'KEDAI PASAR SUKARAMAI', 'PASAR SUKARAMAI', 'SUKARAMAI'),
(65, 160, 'CAPEM LUBUK DALAM', 'JL. PERTAMINA DESA RAWANG KAO', 'LUBUK DALAM'),
(66, 161, 'CAPEM BATU AJI BATAM', 'KOMPL PERTOKOAN FANINDO BLOK E NO.3', 'BATAM'),
(67, 162, 'KEDAI PASAR TANJUNG PINANG', 'JL. LORONG PASAR II', ' TANJUNG PINANG'),
(68, 163, 'KEDAI DAYUN', 'JL. PERAWANG SIAK', 'DAYUN'),
(69, 164, 'KEDAI KABUN', 'JL. LINTAS PEKANBARU PASIR-PENGARAYAN', 'PASIR PENGARAYAN'),
(70, 165, 'CAPEM AHMAD YANI PEKANBARU', 'JL. AHMAD YANI NO.60', 'PEKANBARU'),
(71, 166, 'KEDAI PASAR PAGI ARENGKA', 'JL. SOEKARNO HATTA', 'PEKANBARU'),
(72, 167, 'KEDAI TANJUNG SAMAK', 'JL. AHMAD YANI', 'TANJUNG SAMAK'),
(73, 168, 'KEDAI PASAR LUBUK JAMBI', 'JL. LINTAS TIMUR', 'LUBUK JAMBI'),
(74, 169, 'CAPEM UJUNG TANJUNG', 'JL. RIAU', 'UJUNG TANJUNG'),
(75, 170, 'CAPEM TAREMPA', 'JL. HANG TUAH PASAR TAREMPA', 'TAREMPA'),
(76, 171, 'KEDAI PASAR RENGAT', 'JL. YOS SUDARSO', 'RENGAT'),
(77, 172, 'KEDAI SUNGAI LALA', 'JL. LINTAS AIR MOLEK TELUK KUANTAN', 'SUNGAI LALA'),
(78, 173, 'KEDAI PASAR MUARA LEMBU', 'JL. JENDERAL SUDIRMAN ', 'MUARA LEMBU'),
(79, 174, 'CAPEM DAIK LINGGA', 'JL. ISTANA ROBAT DAIK, KEC LINGGA', 'DAIK LINGGA'),
(80, 175, 'CAPEM KOTA BARU', 'JL. AHMAD YANI KEC KERITANG', 'KOTA BARU'),
(81, 176, 'KEDAI KUALA KILAN', 'JL. LINTAS SELATAN NO.60 DESA KUALA KILAN', 'INDRAGIRI HULU'),
(82, 177, 'KEDAI PASAR TANDUN', 'JL. RAYA TANDUN-UJUNG BATU DESA TANDUN', 'TANDUN'),
(83, 178, 'CAPEM FLAMBOYAN', 'JL. RAYA PETAPAHAN - KOTA GARO', 'FLAMBOYAN'),
(84, 179, 'KEDAI RANTAU KASAI', 'JL. SULTAN ZAINAL ABIDIN-RANTAU KASAI', 'PASIR PENGARAIAN'),
(85, 180, 'CAPEM BINTAN CENTER', 'JL. D.I. PANJAITAN KM9', 'TANJUNG PINANG'),
(86, 181, 'KEDAI BATUPANJANG RUPAT', 'JL. PELAJAR RT002 RW12', 'RUPAT'),
(87, 182, 'KEDAI MERAL', 'JL. AHMAD YANI NO.12 RT3 RW8', 'TANJUNG BALAI KARIMUN'),
(88, 183, 'KEDAI MIDAI', 'JL. MERDEKA RT3 RW1 KEL. SABANG BARAT', 'MIDAI'),
(89, 184, 'KEDAI SERASAN', 'JL. KAMPUNG PELIMPAK RT3 RW1', 'SERASAN'),
(90, 185, 'KEDAI TELUK BELITUNG MERBAU', 'JL. JENDERAL SUDIRMAN RT/RQ 03/01', 'BELITUNG'),
(91, 186, 'CAPEM BOTANIA', 'RUKO GRAHA NUSA PERMAI BLOK C NO.1-3', 'BATAM'),
(92, 187, 'KEDAI BANDAR SEI KIJANG', 'JL. RAYA LINTAS TIMUR', 'PANGKALAN KERINCI'),
(93, 188, 'KEDAI PUJUD', 'JL. LINTAS PUJUD. KASANG BANGSAWAN', 'ROHIL'),
(94, 189, 'KEDAI SABAK AUH', 'JL. LINTAS SIAK-SUNGAI PAKNING', 'SIAK'),
(95, 190, 'KEDAI SUNGAI SEMBILAN', 'JL. RAYA LUBUK GAUNG, KEL. LUBUK GAUNG', 'DUMAI'),
(96, 820, 'KCS PEKANBARU', 'JL. JEND SUDIRMAN NO.628', 'PEKANBARU'),
(97, 821, 'KCS TANJUNG PINANG', 'JL. GATOT SUBROTO KM.5', 'TANJUNG PINANG'),
(98, 822, 'CAPEM SYARIAH TEMBILAHAN', 'JL. JEND SUDIRMAN NO.583 B PASAR BARU', 'TEMBILAHAN'),
(99, 823, 'CAPEM SYARIAH DURI', 'JL. JEND SUDIRMAN KELURAHAN AIR JAMBAN', 'DURI'),
(100, 824, 'CAPEM SYARIAH BATAM', 'JL. GAJAH MADA KOMP. RUKO TIBAN IMPIAN', 'BATAM'),
(101, 825, 'CAPEM SYARIAH TELUK KUANTAN', 'JL. JEND SUDIRMAN NO. 114', 'TELUK KUANTAN'),
(102, 826, 'CAPEM SYARIAH PANAM', 'JL. H.R. SOEBRANTAS BLOKK III A NO.5', 'PEKANBARU'),
(1001, NULL, NULL, NULL, NULL),
(1002, NULL, NULL, NULL, NULL),
(1003, NULL, NULL, NULL, NULL),
(1004, NULL, NULL, NULL, NULL),
(1005, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcbc`
--

CREATE TABLE `tblcbc` (
  `CBCid` int(11) NOT NULL,
  `CBCnomormemo` varchar(255) NOT NULL,
  `CBCjenis` varchar(255) NOT NULL,
  `CBCplafondkredit` int(20) NOT NULL,
  `CBCjwk` varchar(255) NOT NULL,
  `CBCangsurankredit` int(20) NOT NULL,
  `CBCsuratpermohonan` text NOT NULL,
  `CBCaspek_kesehatan` text NOT NULL,
  `CBCaspek_agunan` text NOT NULL,
  `CBCaspek_pinjaman` text NOT NULL,
  `CBClegal` text NOT NULL,
  `CBCmr` text NOT NULL,
  `CBCdirektur` text NOT NULL,
  `CBCkesimpulan` text NOT NULL,
  `TRJMid` int(3) NOT NULL,
  `PPid` int(3) NOT NULL,
  `CBCstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcbc`
--

INSERT INTO `tblcbc` (`CBCid`, `CBCnomormemo`, `CBCjenis`, `CBCplafondkredit`, `CBCjwk`, `CBCangsurankredit`, `CBCsuratpermohonan`, `CBCaspek_kesehatan`, `CBCaspek_agunan`, `CBCaspek_pinjaman`, `CBClegal`, `CBCmr`, `CBCdirektur`, `CBCkesimpulan`, `TRJMid`, `PPid`, `CBCstatus`) VALUES
(2, '005/DP/MEMO/JK/VI/2021', 'Kredit Aneka Guna Guna (KAG)  ', 1000000000, '2 tahun (24 bulan)  ', 10000000, 'KR-12/005/121/JK  ', 'Sehat keknya', 'Tanah se hektar', 'Uang ', 'Disetujui', 'Disetujui, Lengkapi Dokumen', 'Disetujui', 'Tanah se hektar', 174, 21, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblcbcp`
--

CREATE TABLE `tblcbcp` (
  `CBCPid` int(11) NOT NULL,
  `CBCPnomormemo` varchar(255) DEFAULT NULL,
  `CBCPprinsipal` varchar(255) DEFAULT NULL,
  `CBCPjenis` varchar(255) DEFAULT NULL,
  `CBCPsifat` varchar(255) DEFAULT NULL,
  `CBCPplafondkredit` int(20) DEFAULT NULL,
  `CBCPrate` varchar(255) NOT NULL,
  `CBCPcoverage` varchar(255) NOT NULL,
  `CBCPjwk` int(2) DEFAULT NULL,
  `CBCPangsurankredit` int(20) DEFAULT NULL,
  `CBCPagunankredit` text NOT NULL,
  `CBCPrencanakredit` text DEFAULT NULL,
  `CBCPcontactperson` varchar(15) DEFAULT NULL,
  `CBCPsuratpermohonan` text DEFAULT NULL,
  `CBCPkeputusan` text DEFAULT NULL,
  `CBCPizinjatuhtempo` text DEFAULT NULL,
  `CBCPdeskripsisumberpendapatan` text NOT NULL,
  `CBCPsumberpendapatan` text DEFAULT NULL,
  `CBCPdeskripsiusaha` text DEFAULT NULL,
  `CBCPanalisadokumenidentitas` text DEFAULT NULL,
  `CBCPangsuranexist` int(11) DEFAULT NULL,
  `CBCPkesimpulan` text DEFAULT NULL,
  `CBCPmr` text NOT NULL,
  `CBCPlegal` text NOT NULL,
  `CBCPdirektur` text NOT NULL,
  `TRJMid` int(11) NOT NULL,
  `PPid` int(11) NOT NULL,
  `CBCPstatus` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcbcp`
--

INSERT INTO `tblcbcp` (`CBCPid`, `CBCPnomormemo`, `CBCPprinsipal`, `CBCPjenis`, `CBCPsifat`, `CBCPplafondkredit`, `CBCPrate`, `CBCPcoverage`, `CBCPjwk`, `CBCPangsurankredit`, `CBCPagunankredit`, `CBCPrencanakredit`, `CBCPcontactperson`, `CBCPsuratpermohonan`, `CBCPkeputusan`, `CBCPizinjatuhtempo`, `CBCPdeskripsisumberpendapatan`, `CBCPsumberpendapatan`, `CBCPdeskripsiusaha`, `CBCPanalisadokumenidentitas`, `CBCPangsuranexist`, `CBCPkesimpulan`, `CBCPmr`, `CBCPlegal`, `CBCPdirektur`, `TRJMid`, `PPid`, `CBCPstatus`) VALUES
(5, '016/DP/MEMO/JR/V/2021', 'Baru', 'Kredit Agribisnis Menengah Modal Kerja', 'Berjadwal', 1500000000, '3.20', '30', 60, 38750000, '1. SHM No.05022 Tgl.27-12-2012 an. BUDI ARTIFUL (Calon terjamin) Diikat APHT Senilai Rp.200.000.000,-<br>\r\n2. SHM No.05027 Tgl.27-12-2012 an. BUDI ARTIFUL (Calon Terjamin) Diikat APHT Senilai Rp.200.000.000,-<br>\r\n3. SHM No.05032 Tgl.27-12-2012 an. BUDI ARTIFUL (Calon Terjamin) Diikat APHT Senilai Rp.170.000.000,-<br>\r\n4. SHM No.05036 Tgl. 27-12-2012 an. Budi ARTIFUL (Calon Terjamin) Diikat APHT Senilai Rp.180.000.000,-<br>\r\n5. SHM No.05035 Tgl.27-12-2012 an. Hj.RATNA MAINAR (Orang Tua Debitur)  APHT Senilai Rp.170.000.000,-<br>\r\n6. SHM No.05037 Tgl.27-12-2012 an. Hj.RATNA MAINAR (Orang Tua Debitur)  APHT Senilai Rp.180.000.000,-<br>\r\n7. SHM No.05020 Tgl.27-12-2012 an. Hj.RATNA MAINAR (Orang Tua Debitur)  APHT Senilai Rp.200.000.000,-<br>\r\n8. SHM No.05026 Tgl.27-12-2012 an. Hj.RATNA MAINAR (Orang Tua Debitur)  APHT Senilai Rp.200.000.000,-<br>\r\n9. SHM No.06471 Tgl.26-07-2018 an. BUDI ARTIFUL (Calon Terjamin) Diikat SKM Notarial (Agunan berupa \r\nAgunan tambahan, karena lahan dalam kawasan lahan gambut, sehingga tidak bisa diikat APHT)<br>\r\n10. SHM No.06472 Tgl.26-07-2018 an. BUDI ARTIFUL (Calon Terjamin) Diikat SKM Notarial (Agunan berupa \r\nAgunan tambahan, karena lahan dalam kawasan lahan gambut, sehingga tidak bisa diikat APHT)\r\n \r\n', 'Perawatan dan pemeliharaan Kebun Kelapa Sawit	\r\n          ', 'Arif Zulkarnain', '129/PGK/2021', '026/AGRI/PGK/2021', 'NIHIL', '1.Dari informasi BRK cabang pangkalan kerinci, calon terjamin memiliki usaha Kebun Kelapa Sawit  lebih kurang seluas 29 Kav (58 Ha),terletak di tanjung putus desa rantau baru pangkalan kerinci , pelelawan.<br> 2.Calon terjamin juga mengelola perkebunan kelapa sawit milik keluarga seluas 80 Kav (160 Ha) di Desa tambak Kec Langgam Kab pelelawan<br> 3.Rata-rata penghasilan Kotor kebun sawit Ybs sebesar Rp. 516.890.452 ,- Per Bulan Sedangkan Pendapatan bersih nya sebesar Rp.223.164.802 per bulan yang dihitung dari penghasilan Tahun 2020 <br> 4.sedangkan hasil Panen kebun kelapa sawit dijual lansung ke PT. Inti indosawit subur karena ybs mempunyai DO di PT. Inti indosawit subur Slip Penghasilan Sudah Tergabung dalam rekening koran Karena duit hasil penjualan sawit lansung di transfer dari PT. Inti indosawit subur <br>', 'Telaah On The Desk (OTD) terhadap dokumen Analisa Permohonan Kredit BRK Cabang pangkalan kerinci, berikut deskripsi yang dapat kami	\r\nsampaikan : 	<br>\r\n1	Dari informasi BRK cabang pangkalan kerinci, calon terjamin memiliki usaha Kebun Kelapa Sawit  lebih kurang seluas 29 Kav (58 Ha), terletak di tanjung putus desa rantau baru pangkalan kerinci , pelelawan.<br>\r\n2	 Calon terjamin juga mengelola perkebunan kelapa sawit milik keluarga seluas 80 Kav (160 Ha)  Desa tambak Kec Langgam Kab pelelawan<br>\r\n3.	Rata-rata penghasilan Kotor kebun sawit Ybs sebesar Rp. 516.890.452 ,- Per Bulan Sedangkan Pendapatan bersih nya sebesar Rp.223.164.802 per bulan  \r\n	yang dihitung dari penghasilan Tahun 2020 <br>\r\n4.	sedangkan hasil Panen kebun kelapa sawit dijual lansung ke PT. Inti indosawit subur karena ybs mempunyai DO di PT. Inti indosawit subur\r\n	Slip Penghasilan Sudah Tergabung dalam rekening koran Karena duit hasil penjualan sawit lansung di transfer dari PT. Inti indosawit subur \r\n	Ke Rekening BUDI ARTIFU(rekening koran terlampir)\r\n', '1.Usaha yang dijalankan calon terjamin adalah Kebun Kelapa Sawit Non Plasma dengan total luas kebun sawit yang dimiliki kurang lebih seluas 218 Ha. <br>\r\n2.Lokasi usaha kebun sawit Ybs mudah dijangkau dan letaknya strategis.<br> \r\n3Lokasi usaha kebun sawit Non Plasma juga mudah dijangkau oleh kendaraan roda 2 dan roda 4 sehingga mobilitas hasil panen TBS menjadi lancar.\r\n<br>\r\n4	Ybs juga tercatat sudah 1 kali menikmati fasilitas kredit pada PT. Bank Riau Kepri Cabang Pangkalan Kerinci dan termasuk dalam kategori \r\n	Debitur lancar. Pinjaman ybs pada Bank Riau Kepri Capem Belilas yang sedang berjalan adalah KI-Agribisnis Menengah dengan\r\n	plafond Rp. 1.500.000.000,- jangka waktu kredit 60 bulan dengan baki debet per Maret 2021 adalah Rp.266.666.652,-\r\n	(Ideb Terlampir)\r\n<br>\r\n5	fasilitas awal akan akan lansung dilunasi setelah pencairan, Baki debet sebesar Rp. 266.666.652,-\r\n', 'Dokumen identitas diri (KTP) yang diserahkan sesuai dengan data identitas diri yang tercantum pada SLIK OJK Calon Terjamin\r\n', 0, '1. diterimanya, sehingga untuk membayar rencana angsuran BRK sebesar Rp. 38.750.000,- mencukupi (84.37%)  		\r\nsebesar Rp. 247.960.891 ,- dengan perolehan IDIR sebesar 15,63%. Hal ini dikarenakan masih ada pinjaman calon terjamin yang masih 		\r\nharus dibayar setiap bulannnya. Sementara untuk pendapatan dari hasil sawit KKPA,  pihak BRK Cab. Belilas tidak bisa memberikan		\r\nbukti pendapatan sawit KKPA tersebut yang seharusnya masuk ke rekening tabungan Debitur. 		\r\n<br>\r\n2.Dari sisi Agunan/Jaminan yang diberikan kepada Penerima Jaminan (BRK Cab. Pangkalan Kerinci) ditaksir cover agunan sebesar 92,79% dari 		\r\nplafond yang diajukan, yang diikat secara APHT Peringkat Pertama.		\r\n<br>		         \r\n3.Dari hasil pemeriksaan kesehatan calon terjamin yang diserahkan berdasarkan Hasil Pemeriksanaan Kesehatan yang dikeluarkan 		\r\nRS Eka Hospital oleh Dr. ADRIANE MARIAWATI kondisi calon terjamin dalam batas normal Kecuali		\r\n1. Obesitas (IMT 28)		\r\n2. Dislipidemia		\r\n3. Hasil laboratorium darah		\r\n     - Trigliserida meningkat 317 mg/DI		\r\n     - Kolesterol total meningkat 278 mg/dL		\r\n     - Monosit meningkat 9%		\r\n4. Hasil Rontgan Thorax : Normal		\r\n5. Hasil EKG : Normal sinus rhythm HR 71 x/menit, Normal EKG		\r\npada pemeriksaaan kesehatan saat ini di dapatkan kesan : Fit With Medical Notes		\r\nfaktor kesehatan saja tidak cukup karena kita tidak bisa hanya melakukan penjaminan untuk jiwa saja. 		\r\n<br>		\r\n4.Sehubungan dengan kesimpulan kami diatas, maka kami sarankan untuk diproses dengan coverage sebesar 30% dari 		\r\nplafond kredit. Selain itu melihat track record pembayaran angsuran terhadap pinjaman termasuk lancar (tergambar pada SLIK OJK). 		\r\ndiikat secara APHT peringkat pertama dan mengcover pinjaman, maka penjaminan kredit+jiwa hanya dapat dijamin sebesar 30% dari  		\r\nplafond kredit. Selain itu melihat track record pembayaran angsuran terhadap pinjaman termasuk lancar (tergambar pada SLIK OJK). 		\r\nSelanjutnya kami serahkan kepada Direktur Utama sebagai pengambil keputusan akhir.  		\r\n<br>		\r\n5.Demikian, dengan memperhatikan point (1) sampai dengan point (5) diatas, maka dapat menjadi bahan pertimbangan Bapak 		\r\nDirektur untuk :		\r\n1	Memberikan Coverage Penjaminan terhadap pengajuan penjaminan Kredit dari Penerima Jaminan sebesar 30%.	\r\n2	Besarnya Tarif IJP yang diberikan untuk Coverage 30% dengan jangka waktu penjaminan 60 bulan adalah sebesar 30,8‰	\r\n              3. Reass ke boare sebesar 93,3% retensi minimal		\r\n', 'Diterima', 'Setuju', 'Setuju', 176, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblcbcpojk`
--

CREATE TABLE `tblcbcpojk` (
  `CBCPojkid` int(11) NOT NULL,
  `CBCPojknamabank` varchar(255) DEFAULT NULL,
  `CBCPojkjwk` int(5) DEFAULT NULL,
  `CBCPojkplafondkredit` int(255) DEFAULT NULL,
  `CBCPojktunggakanpokok` int(255) DEFAULT NULL,
  `CBCPojktunggakanbunga` int(255) DEFAULT NULL,
  `CBCPojkangsuran` int(255) DEFAULT NULL,
  `CBCPojkkualitas` varchar(255) DEFAULT NULL,
  `CBCPojkkondisi` varchar(255) DEFAULT NULL,
  `CBCPid` int(11) DEFAULT NULL,
  `CBCPojkanalisaslikojk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcbcpojk`
--

INSERT INTO `tblcbcpojk` (`CBCPojkid`, `CBCPojknamabank`, `CBCPojkjwk`, `CBCPojkplafondkredit`, `CBCPojktunggakanpokok`, `CBCPojktunggakanbunga`, `CBCPojkangsuran`, `CBCPojkkualitas`, `CBCPojkkondisi`, `CBCPid`, `CBCPojkanalisaslikojk`) VALUES
(5, 'BPD RIAU KEPRI CAB.PKL KERINCI', 31, 1000000000, 16666667, 8339053, 26666667, '2 - Dalam Perhatian Khusus', '266666652-(Baki debet) ', 5, 'Dari telaah SLIK OJK nomor 15757/IDEB/0101119/2021 tanggal 06 April 2021, Calon Terjamin pernah mendapatkan'),
(6, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 'Sedangkan Istri Pemohon (T.KIKI ROSNIKA WANTI)		\r\n'),
(7, 'BPD RIAU KEPRI CAB.PKL ', 31, 1000000000, 16666667, 8339053, 26666667, '2 - Dalam Perhatian Khusus', '266666652-(Baki debet) ', 5, 'Dari telaah SLIK OJK nomor 16967/IDEB/0101119/2021 tanggal 12 April 2021, an. M. HARRIS (Orang Tua Calon Terjamin) pernah mendapatkan		\r\nfasilitas kredit dari ');

-- --------------------------------------------------------

--
-- Table structure for table `tblcbcppendapatan`
--

CREATE TABLE `tblcbcppendapatan` (
  `CBCPpendapatanid` int(11) NOT NULL,
  `CBCPnamapendapatan` varchar(255) NOT NULL,
  `CBCPsumberpendapatan` varchar(255) DEFAULT NULL,
  `CBCPpendapatanbulan` int(255) DEFAULT NULL,
  `CBCPid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcbcppendapatan`
--

INSERT INTO `tblcbcppendapatan` (`CBCPpendapatanid`, `CBCPnamapendapatan`, `CBCPsumberpendapatan`, `CBCPpendapatanbulan`, `CBCPid`) VALUES
(2, 'Kebun Sawit Pribadi Non KKPA', ' Kebun Sawit  108 Kav (218 Ha)', 516890452, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblcbcppengeluaran`
--

CREATE TABLE `tblcbcppengeluaran` (
  `CBCPpengeluaranid` int(11) NOT NULL,
  `CBCPnamapengeluaran` varchar(255) DEFAULT NULL,
  `CBCPpengeluaranbulan` int(255) DEFAULT NULL,
  `CBCPid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcbcppengeluaran`
--

INSERT INTO `tblcbcppengeluaran` (`CBCPpengeluaranid`, `CBCPnamapengeluaran`, `CBCPpengeluaranbulan`, `CBCPid`) VALUES
(2, 'Biaya Pembelian Pupuk', 161262894, 5),
(3, 'Biaya Upah Panen\r\n', 35000000, 5),
(4, 'Biaya Upah Tenaga Kerja\r\n', 26000000, 5),
(5, 'Biaya Beban Penjualan', 10666667, 5),
(6, 'Beban Gaji Karyawan', 20000000, 5),
(7, 'Beban Listrik Dan Telepon', 1500000, 5),
(8, 'Beban Rumah Tangga', 4000000, 5),
(9, 'Beban Pemeliharaan Kendaraan', 4000000, 5),
(10, 'Beban Lain-Lain', 6500000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblcvr`
--

CREATE TABLE `tblcvr` (
  `CVRid` int(11) NOT NULL,
  `CVRsatu` int(255) DEFAULT NULL,
  `CVRdua` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcvr`
--

INSERT INTO `tblcvr` (`CVRid`, `CVRsatu`, `CVRdua`) VALUES
(1, 0, 30),
(2, 31, 50),
(3, 51, 75),
(4, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbldaerah`
--

CREATE TABLE `tbldaerah` (
  `DAERAHid` int(11) NOT NULL,
  `DAERAHnama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldaerah`
--

INSERT INTO `tbldaerah` (`DAERAHid`, `DAERAHnama`) VALUES
(1, 'Pekanbaru'),
(2, 'Kampar'),
(3, 'Pelalawan'),
(4, 'Kuantan Singigi'),
(5, 'Rokan Hulu'),
(6, 'Rokan Hilir'),
(7, 'Indragiri Hulu'),
(8, 'Indragiri Hilir'),
(9, 'Dumai'),
(10, 'Bengkalis'),
(11, 'Batam'),
(12, 'Kepulauan Riau'),
(13, 'Karimun'),
(14, 'Siak Sri Indrapura'),
(15, 'Natuna'),
(16, 'Meranti'),
(17, 'Daek Lingga'),
(18, 'Bintan'),
(19, 'Anambas');

-- --------------------------------------------------------

--
-- Table structure for table `tbldjpd`
--

CREATE TABLE `tbldjpd` (
  `DJPDid` int(11) NOT NULL,
  `DJPDnoreg` varchar(255) DEFAULT NULL,
  `DJPDnoakad` varchar(255) DEFAULT NULL,
  `DJPDtanggalakad` date DEFAULT NULL,
  `DJPDjangkawaktu` int(11) DEFAULT NULL,
  `DJPDtanggalawal` date DEFAULT NULL,
  `DJPDtanggalakhir` date DEFAULT NULL,
  `DJPDplafondkredit` varchar(255) DEFAULT NULL,
  `DJPDcoverage` varchar(255) DEFAULT NULL,
  `DJPDrate` varchar(255) DEFAULT NULL,
  `DJPDnilaipenjaminan` varchar(255) DEFAULT NULL,
  `DJPDtujuankredit` varchar(255) DEFAULT NULL,
  `DJPDjenisagunan` varchar(255) DEFAULT NULL,
  `DJPDcarapengikatan` varchar(255) DEFAULT NULL,
  `DJPDnilaitransaksipasar` varchar(255) DEFAULT NULL,
  `DJPDnilaitransaksilikuidasi` varchar(255) NOT NULL,
  `DJPDimbaljasa` varchar(255) DEFAULT NULL,
  `DJPDfeeadm` varchar(255) NOT NULL,
  `DJPDfeematerai` varchar(255) NOT NULL,
  `DJPDfeebank` varchar(255) NOT NULL,
  `DJPDsu` varchar(255) NOT NULL,
  `DJPDobjekpenjaminan` text NOT NULL,
  `PKRJid` int(11) NOT NULL,
  `TRJMid` int(11) DEFAULT NULL,
  `TRJMnama` varchar(255) DEFAULT NULL,
  `TRJMalamat` varchar(255) DEFAULT NULL,
  `TRJMusia` varchar(255) DEFAULT NULL,
  `DJPid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldjpd`
--

INSERT INTO `tbldjpd` (`DJPDid`, `DJPDnoreg`, `DJPDnoakad`, `DJPDtanggalakad`, `DJPDjangkawaktu`, `DJPDtanggalawal`, `DJPDtanggalakhir`, `DJPDplafondkredit`, `DJPDcoverage`, `DJPDrate`, `DJPDnilaipenjaminan`, `DJPDtujuankredit`, `DJPDjenisagunan`, `DJPDcarapengikatan`, `DJPDnilaitransaksipasar`, `DJPDnilaitransaksilikuidasi`, `DJPDimbaljasa`, `DJPDfeeadm`, `DJPDfeematerai`, `DJPDfeebank`, `DJPDsu`, `DJPDobjekpenjaminan`, `PKRJid`, `TRJMid`, `TRJMnama`, `TRJMalamat`, `TRJMusia`, `DJPid`) VALUES
(1, '07.02.22.00001.01.1.12.0', '9052.1.01.2021.130', '2021-12-17', 60, '2021-12-17', '2026-12-17', '495000000', '50%', '4.19%', '247500000', 'Pinjam ', 'Perkebunan', 'SKHM', '72521400', '72521400', '20740500', '0', '0', '2074050', '--', 'Perkebunan Kelapa Sawit', 0, 191, 'Samsurizal', 'Terangtang Manuk Kec. Pangkalan Kuras', '35', 1),
(2, '07.02.22.00001.01.1.12.0', '9052.1.01.2021.130', '2021-12-08', 48, '2021-12-08', '2025-12-08', '150000000', '50%', '3.65%', '75000000', 'Pinjam', NULL, '--', '190666667', '190666667', '5475000', '0', '0', '547500', '--', 'Perkebunan Kelapa Sawit', 0, 192, 'Satria Sandy Dharma Kusuma', 'Sido Mukti Kec Pangkalan Kuras ', '35', 1),
(3, '07.02.22.00001.01.1.12.0', '9052.1.01.2021.130', '2021-12-22', 60, '2021-12-22', '2026-12-22', '400000000', '50%', '4.19%', '200000000', 'Pinjam', NULL, '--', '501358200', '501358200', '16760000', '0', '0', '1676000', '--', 'Perkebunan Kelapa Sawit', 0, 193, 'M. Anwaruddin', 'Bagan Lima Kec. UKUI', '35', 1),
(4, '07.02.22.00001.01.1.12.0', '9052.1.01.2021.130', '2021-12-22', 48, '2021-12-22', '2025-12-22', '100000000', '50%', '3.65%', '50000000', 'Pinjam', NULL, '--', '132133333', '132133333', '3650000', '0', '0', '365000', '--', 'Perkebunan Kelapa Sawit', 0, 194, 'Siswanto', 'Beringin Indah Kec. Pangkalan Kuras', '35', 1),
(5, '07.02.22.00001.01.1.12.0', '9052.1.01.2021.130', '2021-12-24', 60, '2021-12-24', '2026-12-24', '270000000', '50%', '4.19%', '135000000', 'Pinjam', NULL, '--', '348128667', '348128667', '11313000', '0', '0', '1131300', '--', 'Perkebunan Kelapa Sawit', 0, 195, 'Jumari', 'Beringin Indah Kec. Pangkala Kuras', '35', 1),
(6, '07.02.22.00002.01.1.12.0', 'ADM-AYN/2021', '2021-10-24', 60, '2021-10-24', '2026-10-24', '100000000', '50%', '4.19%', '50000000', '--', '-- ', '--', '280000000', '280000000', '4190000', '0', '0', '419000', '--', 'Perkebunan Kelapa Sawit', 0, 196, 'Samsurizal', 'Jl Perdamaian, Gg Selamat', '27', 2),
(7, '07.02.22.00003.01.1.12.0', '--', '2022-01-21', 60, '2022-01-21', '2027-01-21', '100000000', '50%', '4.19%', '50000000', '--', '-- ', '--', '105000000', '105000000', '4190000', '0', '0', '419000', '--', 'Perkebunan Kelapa Sawit', 0, 197, 'Brocu', 'Jl Perdamaian, Gg Selamat', '27', 3),
(8, '07.02.22.00004.02.1.12.0', '--', '2020-12-28', 12, '2020-12-28', '2021-12-28', '100000000', '50%', '1.37%', '50000000', '--', '--', '--', '--', '--', '1370000', '0', '0', '137000', '--', '--', 0, 198, 'Lisa Novianti', '--', '--', 4),
(9, '07.02.22.00005.02.1.12.0', '--', '2020-12-11', 48, '2020-12-11', '2024-12-11', '50000000', '30%', '1.68%', '15000000', '--', '--', '--', '--', '--', '840000', '0', '0', '84000', '--', '--', 0, 199, 'Suharno', '--', '--', 5),
(10, '07.02.22.00005.02.1.12.0', '--', '2020-12-16', 48, '2020-12-16', '2024-12-16', '100000000', '50%', '2.91%', '50000000', '--', NULL, '--', '--', '--', '2910000', '0', '0', '291000', '--', '--', 0, 200, 'Sukijan', '--', '--', 5),
(11, '07.02.22.00005.02.1.12.0', '--', '2020-12-17', 36, '2020-12-17', '2023-12-17', '85000000', '50%', '2.44%', '42500000', '--', NULL, '--', '--', '--', '2074000', '0', '0', '207400', '--', '--', 0, 201, 'Ponjian', '--', '--', 5),
(12, '07.02.22.00006.02.1.12.0', '--', '2020-12-14', 36, '2020-12-14', '2023-12-14', '40000000', '30%', '1.42%', '12000000', '--', '--', '--', '--', '--', '568000', '0', '0', '56800', '--', '--', 0, 202, 'Herman', '--', '--', 6),
(13, '07.02.22.00006.02.1.12.0', '--', '2020-12-16', 48, '2020-12-16', '2024-12-16', '50000000', '30%', '1.68%', '15000000', '--', NULL, '--', '--', '--', '840000', '0', '0', '84000', '--', '--', 0, 203, 'Fitriani', '--', '--', 6),
(14, '07.02.22.00007.02.1.12.0', '--', '2020-12-02', 60, '2020-12-02', '2025-12-02', '250000000', '30%', '1.89%', '75000000', '--', '--', '--', '--', '--', '4725000', '0', '0', '472500', '--', '--', 0, 204, 'Jumadiyono', '--', '--', 7),
(15, '07.02.22.00008.02.1.12.0', '--', '2020-12-15', 60, '2020-12-15', '2025-12-15', '200000000', '30%', '1.89%', '60000000', '--', '--', '--', '--', '--', '3780000', '0', '0', '378000', '--', '--', 0, 205, 'Herman', '--', '--', 8),
(16, '07.02.22.00009.02.1.12.0', '--', '2020-12-21', 60, '2020-12-21', '2025-12-21', '60000000', '30%', '1.89%', '18000000', '--', '--', '--', '--', '--', '1134000', '0', '0', '113400', '--', '--', 0, 206, 'Daryanto', '--', '--', 9),
(17, '07.02.22.00010.02.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '150000000', '30%', '1.68%', '45000000', '--', '--', '--', '--', '--', '2520000', '0', '0', '252000', '--', '--', 0, 207, 'Suparyandi', '--', '--', 11),
(18, '07.02.22.00010.02.1.12.0', '--', '2020-12-17', 36, '2020-12-17', '2023-12-17', '100000000', '30%', '1.42%', '30000000', '--', NULL, '--', '--', '--', '1420000', '0', '0', '142000', '--', '--', 0, 208, 'Nepfri Rupika', '--', '--', 11),
(19, '07.02.22.00010.02.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '100000000', '30%', '1.68%', '30000000', '--', NULL, '--', '--', '--', '1680000', '0', '0', '168000', '--', '--', 0, 209, 'Joko Suherdi', '--', '--', 11),
(20, '07.02.22.00011.02.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '100000000', '50%', '2.91%', '50000000', '--', '--', '--', '--', '--', '2910000', '0', '0', '0', '--', '--', 0, 210, 'Jasman', '--', '--', 12),
(21, '07.02.22.00011.02.1.12.0', '--', '2020-12-18', 48, '2020-12-18', '2024-12-18', '500000000', '75%', '4.97%', '375000000', '--', NULL, '--', '--', '--', '24850000', '0', '0', '0', '--', '--', 0, 211, 'Abdul Aziz Hasan', '--', '--', 12),
(22, '07.02.22.00012.02.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '35000000', '50%', '2.91%', '17500000', '--', '--', '--', '--', '--', '1018500', '0', '0', '0', '--', '--', 0, 212, 'Suarno', '--', '--', 13),
(23, '07.02.22.00012.02.1.12.0', '--', '2020-12-14', 36, '2020-12-14', '2023-12-14', '95000000', '50%', '2.44%', '47500000', '--', NULL, '--', '--', '--', '2318000', '0', '0', '0', '--', '--', 0, 213, 'Darlina Br Lbn Batu', '--', '--', 13),
(24, '07.02.22.00013.02.1.12.0', '--', '2020-12-07', 36, '2020-12-07', '2023-12-07', '80000000', '75%', '4.72%', '60000000', '--', '--', '--', '--', '--', '3776000', '0', '0', '0', '--', '--', 0, 214, 'Muhayah', '--', '--', 14),
(25, '07.02.22.00013.02.1.12.0', '--', '2020-12-04', 36, '2020-12-04', '2023-12-04', '60000000', '75%', '4.72%', '45000000', '--', NULL, '--', '--', '--', '2832000', '0', '0', '0', '--', '--', 0, 215, 'Sudirman', '--', '--', 14),
(26, '07.02.22.00013.02.1.12.0', '--', '2020-12-07', 48, '2020-12-07', '2024-12-07', '100000000', '75%', '5.71%', '75000000', '--', NULL, '--', '--', '--', '5710000', '0', '0', '0', '--', '--', 0, 216, 'Untung Bangun', '--', '--', 14),
(27, '07.02.22.00013.02.1.12.0', '--', '2020-12-08', 36, '2020-12-08', '2023-12-08', '130000000', '75%', '4.72%', '97500000', '--', NULL, '--', '--', '--', '6136000', '0', '0', '0', '--', '--', 0, 217, 'Imron Rosidi', '--', '--', 14),
(28, '07.02.22.00013.02.1.12.0', '--', '2020-12-15', 36, '2020-12-15', '2023-12-15', '99000000', '75%', '4.72%', '74250000', '--', NULL, '--', '--', '--', '4672800', '0', '0', '0', '--', '--', 0, 218, 'Tukiman', '--', '--', 14),
(29, '07.02.22.00013.02.1.12.0', '--', '2020-12-19', 36, '2020-12-19', '2023-12-19', '50000000', '75%', '4.72%', '37500000', '--', NULL, '--', '--', '--', '2360000', '0', '0', '0', '--', '--', 0, 219, 'Rahman AL-Qodar', '--', '--', 14),
(30, '07.02.22.00013.02.1.12.0', '--', '2020-12-17', 36, '2020-12-17', '2023-12-17', '150000000', '75%', '4.72%', '112500000', '--', NULL, '--', '--', '--', '7080000', '0', '0', '0', '--', '--', 0, 220, 'Rudi Hartono', '--', '--', 14),
(31, '07.02.22.00013.02.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '150000000', '75%', '5.71%', '112500000', '--', NULL, '--', '--', '--', '8565000', '0', '0', '0', '--', '--', 0, 221, 'Juardi', '--', '--', 14),
(32, '07.02.22.00013.02.1.12.0', '--', '2020-12-18', 60, '2020-12-18', '2025-12-18', '70000000', '75%', '6.46%', '52500000', '--', NULL, '--', '--', '--', '4522000', '0', '0', '0', '--', '--', 0, 222, 'Dian Aprilia', '--', '--', 14),
(33, '07.02.22.00014.02.1.12.0', '--', '2020-12-21', 36, '2020-12-21', '2023-12-21', '160000000', '50%', '2.44%', '80000000', '--', '--', '--', '--', '--', '3904000', '0', '0', '390400', '--', '--', 0, 223, 'Risma Fitri Yanti', '--', '--', 15),
(34, '07.02.22.00015.02.1.12.0', '--', '2020-12-04', 48, '2020-12-04', '2024-12-04', '100000000', '50%', '3.65%', '50000000', '--', '--', '--', '--', '--', '3650000', '0', '0', '0', '--', '--', 0, 224, 'Wardison', '--', '--', 16),
(35, '07.02.22.00016.02.1.12.0', '--', '2020-12-07', 36, '2020-12-07', '2023-12-07', '99000000', '30%', '1.42%', '29700000', '--', '--', '--', '--', '--', '1405800', '0', '0', '0', '--', '--', 0, 225, 'Giri Saroyo', '--', '--', 17),
(36, '07.02.22.00016.02.1.12.0', '--', '2020-12-07', 48, '2020-12-07', '2024-12-07', '99000000', '30%', '1.68%', '29700000', '--', NULL, '--', '--', '--', '1663200', '0', '0', '0', '--', '--', 0, 226, 'Sismadi', '--', '--', 17),
(37, '07.02.22.00016.02.1.12.0', '--', '2020-12-08', 60, '2020-12-08', '2025-12-08', '100000000', '30%', '1.89%', '30000000', '--', NULL, '--', '--', '--', '1890000', '0', '0', '0', '--', '--', 0, 227, 'Riado Pardouan Manik', '--', '--', 17),
(38, '07.02.22.00016.02.1.12.0', '--', '2020-12-21', 36, '2020-12-21', '2023-12-21', '50000000', '30%', '1.42%', '15000000', '--', NULL, '--', '--', '--', '710000', '0', '0', '0', '--', '--', 0, 228, 'Hanna H Hermanus', '--', '--', 17),
(39, '07.02.22.00016.02.1.12.0', '--', '2020-12-21', 48, '2020-12-21', '2024-12-21', '99000000', '30%', '1.68%', '29700000', '--', NULL, '--', '--', '--', '1663200', '0', '0', '0', '--', '--', 0, 229, 'Inus', '--', '--', 17),
(40, '07.02.22.00016.02.1.12.0', '--', '2020-12-22', 48, '2020-12-22', '2024-12-22', '99000000', '30%', '1.68%', '29700000', '--', NULL, '--', '--', '--', '1663200', '0', '0', '0', '--', '--', 0, 230, 'Wowon', '--', '--', 17),
(41, '07.02.22.00016.02.1.12.0', '--', '2020-12-23', 36, '2020-12-23', '2023-12-23', '145000000', '30%', '1.42%', '43500000', '--', NULL, '--', '--', '--', '2059000', '0', '0', '0', '--', '--', 0, 231, 'Ella Anjelianna', '--', '--', 17),
(42, '07.02.22.00016.02.1.12.0', '--', '2020-12-23', 36, '2020-12-23', '2023-12-23', '100000000', '30%', '1.42%', '30000000', '--', NULL, '--', '--', '--', '1420000', '0', '0', '0', '--', '--', 0, 232, 'Nanda Selvia', '--', '--', 17),
(43, '07.02.22.00016.02.1.12.0', '--', '2020-12-28', 48, '2020-12-28', '2024-12-28', '130000000', '30%', '1.68%', '39000000', '--', NULL, '--', '--', '--', '2184000', '0', '0', '0', '--', '--', 0, 233, 'Novia Indrawanis', '--', '--', 17),
(44, '07.02.22.00017.02.1.12.0', '--', '2020-12-10', 36, '2020-12-10', '2023-12-10', '100000000', '50%', '3.00%', '50000000', '--', '--', '--', '--', '--', '3000000', '0', '0', '0', '--', '--', 0, 234, 'Mugi Ahmad Mustofa', '--', '--', 18),
(45, '07.02.22.00017.02.1.12.0', '--', '2020-12-21', 36, '2020-12-21', '2023-12-21', '100000000', '50%', '3.00%', '50000000', '--', NULL, '--', '--', '--', '3000000', '0', '0', '0', '--', '--', 0, 235, 'Hariati', '--', '--', 18),
(46, '07.02.22.00018.02.1.12.0', '--', '2020-12-14', 36, '2020-12-14', '2023-12-14', '100000000', '30%', '1.98%', '30000000', '---', '--', '--', '--', '--', '1980000', '0', '0', '0', '--', '--', 0, 236, 'Tiurma Barita Br Silalahi', '--', '--', 19),
(47, '07.02.22.00019.02.1.12.0', '--', '2020-12-10', 36, '2020-12-10', '2023-12-10', '90000000', '30%', '1.98%', '27000000', '--', '--', '--', '--', '--', '1782000', '0', '0', '0', '--', '--', 0, 237, 'Angga Eko Sulistyanto', '--', '--', 20),
(48, '07.02.22.00020.02.1.12.0', '--', '2020-12-07', 60, '2020-12-07', '2025-12-07', '100000000', '30%', '2.80%', '30000000', '--', '--', '--', '--', '--', '2800000', '0', '0', '0', '--', '--', 0, 238, 'Nazaruddin', '--', '--', 21),
(49, '07.02.22.00020.02.1.12.0', '--', '2020-12-07', 24, '2020-12-07', '2022-12-07', '12000000', '30%', '1.48%', '3600000', '--', NULL, '--', '-', '--', '177600', '0', '0', '0', '--', '--', 0, 239, 'Yulikah', '--', '--', 21),
(50, '07.02.22.00020.02.1.12.0', '--', '2020-12-23', 60, '2020-12-23', '2025-12-23', '80000000', '50%', '4.19%', '40000000', '--', NULL, '--', '--', '--', '3352000', '0', '0', '0', '--', '--', 0, 240, 'Samini', '--', '--', 21),
(51, '07.02.22.00020.02.1.12.0', '--', '2020-12-16', 60, '2020-12-16', '2025-12-16', '400000000', '30%', '2.80%', '120000000', '--', NULL, '--', '--', '--', '11200000', '0', '0', '0', '--', '--', 0, 241, 'Risti Setiyani', '--', '--', 21),
(52, '07.02.22.00020.02.1.12.0', '--', '2020-12-23', 60, '2020-12-23', '2025-12-23', '120000000', '50%', '4.19%', '60000000', '--', NULL, '--', '--', '--', '5028000', '0', '0', '0', '--', '--', 0, 242, 'Sutijo', '--', '--', 21),
(53, '07.02.22.00021.02.1.12.0', '--', '2020-12-17', 36, '2020-12-17', '2023-12-17', '150000000', '50%', '3.00%', '75000000', '--', '--', '--', '--', '--', '4500000', '0', '0', '0', '--', '--', 0, 243, 'Haryanto', '--', '--', 22),
(54, '07.02.22.00022.02.1.12.0', '--', '2020-12-28', 60, '2020-12-28', '2025-12-28', '150000000', '75%', '6.46%', '112500000', '--', '--', '--', '--', '--', '9690000', '0', '0', '0', '-', '--', 0, 244, 'Yusuf Hariadi', '--', '--', 23),
(55, '07.02.22.00023.02.1.12.0', '--', '2020-12-10', 60, '2020-12-10', '2025-12-10', '99000000', '30%', '2.80%', '29700000', '--', '--', '--', '--', '--', '2772000', '0', '0', '0', '--', '--', 0, 245, 'Puti Wulandari', '--', '--', 24),
(56, '07.02.22.00023.02.1.12.0', '--', '2020-12-11', 24, '2020-12-11', '2022-12-11', '50000000', '75%', '3.56%', '37500000', '--', NULL, '--', '--', '--', '1780000', '0', '0', '0', '--', '--', 0, 246, 'Adisman Irawan', '--', '--', 24),
(57, '07.02.22.00023.02.1.12.0', '--', '2020-12-14', 48, '2020-12-14', '2024-12-14', '60000000', '75%', '5.71%', '45000000', '--', NULL, '--', '--', '--', '3426000', '0', '0', '0', '--', '--', 0, 247, 'Tribowo H', '--', '--', 24),
(58, '07.02.22.00023.02.1.12.0', '--', '2020-12-16', 60, '2020-12-16', '2025-12-16', '99000000', '75%', '6.46%', '74250000', '--', NULL, '--', '--', '--', '6395400', '0', '0', '0', '--', '--', 0, 248, 'Katno', '--', '--', 24),
(59, '07.02.22.00023.02.1.12.0', '--', '2020-12-16', 48, '2020-12-16', '2024-12-16', '60000000', '75%', '5.71%', '45000000', '--', NULL, '--', '--', '--', '3426000', '0', '0', '0', '--', '--', 0, 249, 'Endang Sucipto', '--', '--', 24),
(60, '07.02.22.00023.02.1.12.0', '--', '2020-12-21', 48, '2020-12-21', '2024-12-21', '75000000', '75%', '5.71%', '56250000', '--', NULL, '--', '--', '--', '4282500', '0', '0', '0', '--', '--', 0, 250, 'Muhammad Imam Subkhi', '--', '--', 24),
(61, '07.02.22.00024.02.1.12.0', '--', '2020-12-08', 48, '2020-12-08', '2024-12-08', '150000000', '30%', '1.68%', '45000000', '--', '--', '--', '--', '--', '2520000', '0', '0', '0', '--', '--', 0, 251, 'Andi Lala Riadi', '--', '--', 25),
(62, '07.02.22.00024.02.1.12.0', '--', '2020-12-10', 36, '2020-12-10', '2023-12-10', '40000000', '50%', '2.44%', '20000000', '--', NULL, '--', '--', '--', '976000', '0', '0', '0', '--', '--', 0, 252, 'Sugeng', '--', '--', 25),
(63, '07.02.22.00024.02.1.12.0', '--', '2020-12-11', 36, '2020-12-11', '2023-12-11', '105000000', '30%', '1.42%', '31500000', '--', NULL, '--', '--', '--', '1491000', '0', '0', '0', '--', '--', 0, 253, 'Siti Cholizah Sitorus', '--', '--', 25),
(64, '07.02.22.00024.02.1.12.0', '--', '2020-12-11', 36, '2020-12-11', '2023-12-11', '75000000', '30%', '1.42%', '22500000', '--', NULL, '--', '--', '--', '1065000', '0', '0', '0', '--', '-', 0, 254, 'Darussamin', '--', '--', 25),
(65, '07.02.22.00024.02.1.12.0', '--', '2020-12-11', 36, '2020-12-11', '2023-12-11', '40000000', '50%', '2.44%', '20000000', '--', NULL, '--', '--', '--', '976000', '0', '0', '0', '--', '--', 0, 255, 'Sriani', '--', '--', 25),
(66, '07.02.22.00024.02.1.12.0', '--', '2020-12-15', 36, '2020-12-15', '2023-12-15', '70000000', '50%', '2.44%', '35000000', '--', NULL, '--', '--', '--', '1708000', '0', '0', '0', '--', '--', 0, 256, 'Dian Pramana Putra', '--', '--', 25),
(67, '07.02.22.00024.02.1.12.0', '--', '2020-12-17', 36, '2020-12-17', '2023-12-17', '50000000', '50%', '2.44%', '25000000', '--', NULL, '--', '--', '--', '1220000', '0', '0', '0', '--', '--', 0, 257, 'Kasunarto', '--', '--', 25),
(68, '07.02.22.00024.02.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '40000000', '50%', '2.91%', '20000000', '--', NULL, '--', '--', '--', '1164000', '0', '0', '0', '--', '--', 0, 258, 'Pono', '--', '--', 25),
(69, '07.02.22.00024.02.1.12.0', '--', '2020-12-28', 48, '2020-12-28', '2024-12-28', '140000000', '30%', '1.68%', '42000000', '--', NULL, '--', '--', '--', '2352000', '0', '0', '0', '--', '--', 0, 259, 'Salman', '--', '--', 25),
(70, '07.02.22.00024.02.1.12.0', '--', '2020-12-22', 36, '2020-12-22', '2023-12-22', '30000000', '50%', '2.44%', '15000000', '--', NULL, '--', '--', '--', '732000', '0', '0', '0', '--', '--', 0, 260, 'Maryadi', '--', '--', 25),
(71, '07.02.22.00024.02.1.12.0', '--', '2020-12-23', 24, '2020-12-23', '2022-12-23', '200000000', '30%', '1.07%', '60000000', '--', NULL, '--', '---', '--', '2140000', '0', '0', '0', '--', '--', 0, 261, 'Murni Astuti', '--', '--', 25),
(72, '07.02.22.00024.02.1.12.0', '--', '2020-12-28', 36, '2020-12-28', '2023-12-28', '40000000', '50%', '2.44%', '20000000', '--', NULL, '--', '--', '--', '976000', '0', '0', '0', '--', '--', 0, 262, 'Rahmad Samudra Kusuma', '--', '--', 25),
(73, '07.02.22.00024.02.1.12.0', '--', '2020-12-28', 24, '2020-12-28', '2022-12-28', '20000000', '50%', '1.85%', '10000000', '--', NULL, '--', '--', '--', '370000', '0', '0', '0', '--', '--', 0, 263, 'Ratna Indriani', '--', '--', 25),
(74, '07.02.22.00024.02.1.12.0', '--', '2020-08-29', 48, '2020-08-29', '2024-08-29', '70000000', '50%', '2.91%', '35000000', '--', NULL, '--', '--', '-', '2037000', '0', '0', '0', '--', '--', 0, 264, 'Fitri Wahyuni', '--', '--', 25),
(75, '07.02.22.00024.02.1.12.0', '--', '2020-12-28', 36, '2020-12-28', '2023-12-28', '40000000', '50%', '2.44%', '20000000', '--', NULL, '--', '-', '--', '976000', '0', '0', '0', '--', '--', 0, 265, 'Sumilah', '--', '--', 25),
(76, '07.02.22.00024.02.1.12.0', '--', '2020-12-28', 48, '2020-12-28', '2024-12-28', '100000000', '50%', '2.91%', '50000000', '--', NULL, '--', '--', '-', '2910000', '0', '0', '0', '--', '--', 0, 266, 'Sarniatik', '--', '--', 25),
(77, '07.02.22.00024.02.1.12.0', '--', '2020-12-08', 36, '2020-12-08', '2023-12-08', '100000000', '50%', '2.44%', '50000000', '--', NULL, '--', '--', '--', '2440000', '0', '0', '0', '--', '--', 0, 267, 'Aly Syahputra', '--', '--', 25),
(78, '07.02.22.00024.02.1.12.0', '--', '2020-12-11', 48, '2020-12-11', '2024-12-11', '150000000', '30%', '1.68%', '45000000', '--', NULL, '--', '--', '--', '2520000', '0', '0', '0', '--', '--', 0, 268, 'Mekarina Br Nainggolan', '--', '--', 25),
(79, '07.02.22.00024.02.1.12.0', '--', '2020-12-17', 60, '2020-12-17', '2025-12-17', '70000000', '50%', '3.28%', '35000000', '--', NULL, '--', '--', '--', '2296000', '0', '0', '0', '--', '--', 0, 269, 'Efrianto', '--', '--', 25),
(80, '07.02.22.00024.02.1.12.0', '--', '2020-12-18', 36, '2020-12-18', '2023-12-18', '130000000', '30%', '1.42%', '39000000', '--', NULL, '--', '--', '--', '1846000', '0', '0', '0', '--', '--', 0, 270, 'Darman', '--', '--', 25),
(81, '07.02.22.00024.02.1.12.0', '--', '2020-12-28', 36, '2020-12-28', '2023-12-28', '55000000', '50%', '2.44%', '27500000', '--', NULL, '--', '--', '--', '1342000', '0', '0', '0', '--', '--', 0, 271, 'Rubini', '--', '--', 25),
(82, '07.02.22.00025.02.1.12.0', '--', '2020-12-21', 60, '2020-12-21', '2025-12-21', '150000000', '30%', '2.80%', '45000000', '--', '--', '--', '--', '--', '4200000', '0', '0', '420000', '--', '--', 0, 272, 'Sarjono', '--', '--', 26),
(83, '07.02.22.00025.02.1.12.0', '--', '2020-12-29', 60, '2020-12-29', '2025-12-29', '200000000', '30%', '2.80%', '60000000', '--', NULL, '--', '--', '--', '5600000', '0', '0', '560000', '--', '--', 0, 273, 'Jumari ', '--', '--', 26),
(84, '07.02.22.00026.02.1.12.0', '--', '2020-12-14', 36, '2020-12-14', '2023-12-14', '55000000', '50%', '2.44%', '27500000', '--', '--', '--', '--', '--', '1342000', '0', '0', '134200', '--', '--', 0, 274, 'Yopi Nopriadi', '--', '--', 27),
(85, '07.02.22.00026.02.1.12.0', '--', '2020-12-23', 36, '2020-12-23', '2023-12-23', '80000000', '30%', '1.42%', '24000000', '--', NULL, '--', '--', '--', '1136000', '0', '0', '113600', '--', '--', 0, 275, 'Erlita', '--', '--', 27),
(86, '07.02.22.00026.02.1.12.0', '--', '2020-11-23', 48, '2020-11-23', '2024-11-23', '150000000', '30%', '1.68%', '45000000', '--', NULL, '--', '--', '--', '2520000', '0', '0', '252000', '--', '--', 0, 276, 'Azman Hadi', '--', '--', 27),
(87, '07.02.22.00026.02.1.12.0', '--', '2020-12-23', 36, '2020-12-23', '2023-12-23', '50000000', '50%', '2.44%', '25000000', '--', NULL, '--', '--', '--', '1220000', '0', '0', '122000', '--', '--', 0, 277, 'Annisa Harni Lestari', '--', '--', 27),
(88, '07.02.22.00026.02.1.12.0', '--', '2020-12-22', 36, '2020-12-22', '2023-12-22', '100000000', '30%', '1.42%', '30000000', '--', NULL, '--', '--', '--', '1420000', '0', '0', '142000', '--', '--', 0, 278, 'Darwis', '--', '--', 27),
(89, '07.02.22.00027.02.1.12.0', '--', '2020-12-15', 48, '2020-12-15', '2024-12-15', '50000000', '30%', '2.42%', '15000000', '--', '--', '--', '--', '--', '1210000', '0', '0', '121000', '--', '--', 0, 279, 'Dwiyono', '--', '--', 28),
(90, '07.02.22.00027.02.1.12.0', '--', '2020-12-21', 36, '2020-12-21', '2023-12-21', '300000000', '50%', '3.00%', '150000000', '--', NULL, '--', '--', '--', '9000000', '0', '0', '900000', '--', '--', 0, 280, 'Tanesa Jaya Pratama', '--', '--', 28),
(91, '07.02.22.00027.02.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '150000000', '75%', '5.71%', '112500000', '--', NULL, '--', '--', '--', '8565000', '0', '0', '856500', '--', '--', 0, 281, 'Mastiri', '--', '--', 28),
(92, '07.02.22.00027.02.1.12.0', '--', '2020-12-17', 36, '2020-12-17', '2023-12-17', '100000000', '75%', '4.72%', '75000000', '--', NULL, '--', '--', '--', '4720000', '0', '0', '472000', '--', '--', 0, 282, 'Abdullah', '--', '--', 28),
(93, '07.02.22.00027.02.1.12.0', '--', '2020-12-15', 36, '2020-12-15', '2023-12-15', '120000000', '30%', '1.98%', '36000000', '--', NULL, '--', '--', '--', '2376000', '0', '0', '237600', '--', '--', 0, 283, 'Sarinah', '--', '--', 28),
(94, '07.02.22.00027.02.1.12.0', '--', '2020-12-15', 36, '2020-12-15', '2023-12-15', '100000000', '30%', '1.98%', '30000000', '--', NULL, '--', '--', '--', '1980000', '0', '0', '198000', '--', '--', 0, 284, 'Suwito', '--', '--', 28),
(95, '07.02.22.00027.02.1.12.0', '--', '2020-12-15', 36, '2020-12-15', '2023-12-15', '150000000', '75%', '4.72%', '112500000', '--', NULL, '--', '--', '--', '7080000', '0', '0', '708000', '--', '--', 0, 285, 'Sampe Hadamean Harahap', '--', '--', 28),
(111, '07.02.22.00029.02.1.12.0', '--', '2020-12-08', 24, '2020-12-08', '2022-12-08', '95000000', '30%', '1.48%', '28500000', '--', '--', '--', '--', '--', '1406000', '0', '0', '140600', '--', '--', 0, 301, 'Marini', '--', '--', 31),
(112, '07.02.22.00030.02.1.12.0', '--', '2021-12-01', 36, '2021-12-01', '2024-12-01', '30000000', '30%', '1.98%', '9000000', '--', '--', '--', '--', '--', '594000', '0', '0', '59400', '--', '--', 0, 302, 'JUFRI', '--', '--', 32),
(113, '07.02.22.00031.02.1.12.0', '--', '2021-01-14', 36, '2021-01-14', '2024-01-14', '60000000', '50%', '2.44%', '30000000', '--', '--', '--', '--', '--', '1464000', '0', '0', '146400', '--', '--', 0, 303, 'SISWO EKO UTRO', '--', '--', 33),
(114, '07.02.22.00031.02.1.12.0', '--', '2021-01-15', 36, '2021-01-15', '2024-01-15', '150000000', '50%', '2.44%', '75000000', '--', NULL, '--', '--', '--', '3660000', '0', '0', '366000', '--', '--', 0, 304, 'ENTONI', '--', '--', 33),
(115, '07.02.22.00031.02.1.12.0', '--', '2021-01-21', 48, '2021-01-21', '2025-01-21', '50000000', '50%', '2.91%', '25000000', '--', NULL, '--', '--', '--', '1455000', '0', '0', '145500', '--', '--', 0, 305, 'BOYMEN', '--', '--', 33),
(116, '07.02.22.00031.02.1.12.0', '--', '2021-01-21', 48, '2021-01-21', '2025-01-21', '120000000', '50%', '2.91%', '60000000', '--', NULL, '--', '--', '--', '3492000', '0', '0', '349200', '--', '--', 0, 306, 'SUYITNO', '--', '--', 33),
(117, '07.02.22.00031.02.1.12.0', '--', '2021-01-21', 60, '2021-01-21', '2026-01-21', '100000000', '50%', '3.28%', '50000000', '--', NULL, '--', '--', '--', '3280000', '0', '0', '328000', '--', '--', 0, 307, 'SUBARIYANTO', '--', '--', 33),
(118, '07.02.22.00031.02.1.12.0', '--', '2021-01-21', 48, '2021-01-21', '2025-01-21', '35000000', '50%', '2.91%', '17500000', '--', NULL, '--', '--', '--', '1018500', '0', '0', '101850', '--', '--', 0, 308, 'IRWAN SYAH', '--', '--', 33),
(119, '07.02.22.00031.02.1.12.0', '--', '2021-01-21', 36, '2021-01-21', '2024-01-21', '75000000', '50%', '2.44%', '37500000', '--', NULL, '--', '--', '--', '1830000', '0', '0', '183000', '--', '--', 0, 309, 'AZLINA', '--', '--', 33),
(120, '07.02.22.00031.02.1.12.0', '--', '2021-01-26', 48, '2021-01-26', '2025-01-26', '200000000', '50%', '2.91%', '100000000', '--', NULL, '--', '--', '--', '5820000', '0', '0', '582000', '--', '--', 0, 310, 'JUNI ISKANDAR', '--', '--', 33),
(121, '07.02.22.00031.02.1.12.0', '--', '2020-11-20', 36, '2020-11-20', '2023-11-20', '30000000', '75%', '4.72%', '22500000', 'uang', '--', '--', '--', '--', '1416000', '0', '0', '141600', '--', '--', 0, 311, 'Asmadi', '--', '--', 35),
(122, '07.02.22.00031.02.1.12.0', '--', '2020-11-12', 36, '2020-11-12', '2023-11-12', '80000000', '75%', '4.72%', '60000000', 'uang', NULL, '--', '--', '--', '3776000', '0', '0', '377600', '--', '--', 0, 312, 'Amiyati', '--', '--', 35),
(123, '07.02.22.00031.02.1.12.0', '--', '2020-12-08', 36, '2020-12-08', '2023-12-08', '100000000', '75%', '4.72%', '75000000', 'uang', NULL, '--', '--', '--', '4720000', '0', '0', '472000', '--', '--', 0, 313, 'Siti Hafsah', '--', '--', 35),
(124, '07.02.22.00033.02.1.12.0', '--', '2021-01-14', 36, '2021-01-14', '2024-01-14', '500000000', '30%', '1.98%', '150000000', '--', '--', '--', '--', '--', '9900000', '0', '0', '990000', '--', '--', 0, 314, 'KASI ANING', '--', '--', 36),
(125, '07.02.22.00032.02.1.12.0', '--', '2020-12-23', 36, '2020-12-23', '2023-12-23', '500000000', '30%', '1.98%', '150000000', '--', '--', '--', '--', '--', '9900000', '0', '0', '990000', '--', '--', 0, 315, 'Teguh Sulistiono', '--', '--', 34),
(126, '07.02.22.00032.02.1.12.0', '--', '2020-12-11', 48, '2020-12-11', '2024-12-11', '99000000', '50%', '3.65%', '49500000', '--', NULL, '--', '--', '--', '3613500', '0', '0', '361350', '--', '--', 0, 316, 'Mansur', '--', '--', 34),
(127, '07.02.22.00032.02.1.12.0', '--', '2020-12-14', 36, '2020-12-14', '2023-12-14', '70000000', '30%', '1.98%', '21000000', '--', NULL, '--', '--', '--', '1386000', '0', '0', '138600', '--', '--', 0, 317, 'Hadi Prayitno', '--', '--', 34),
(128, '07.02.22.00032.02.1.12.0', '--', '2020-12-16', 36, '2020-12-16', '2023-12-16', '99000000', '50%', '3.00%', '49500000', '--', NULL, '--', '--', '--', '2970000', '0', '0', '297000', '--', '--', 0, 318, 'Sukardi', '--', '--', 34),
(129, '07.02.22.00032.02.1.12.0', '--', '2020-12-18', 36, '2020-12-18', '2023-12-18', '50000000', '50%', '3.00%', '25000000', '--', NULL, '--', '--', '--', '1500000', '0', '0', '150000', '--', '--', 0, 319, 'Peri Putra', '--', '--', 34),
(130, '07.02.22.00032.02.1.12.0', '--', '2020-12-22', 60, '2020-12-22', '2025-12-22', '350000000', '30%', '2.80%', '105000000', '--', NULL, '--', '--', '--', '9800000', '0', '0', '980000', '--', '--', 0, 320, 'Tamrin', '--', '--', 34),
(131, '07.02.22.00035.02.1.12.0', '--', '2020-12-17', 60, '2020-12-17', '2025-12-17', '50000000', '75%', '5.55%', '37500000', '--', '--', '--', '--', '--', '2775000', '0', '0', '277500', '--', '--', 0, 321, 'NORMA', '--', '--', 38),
(132, '07.02.22.00035.02.1.12.0', '--', '2020-12-17', 36, '2020-12-17', '2023-12-17', '100000000', '50%', '2.44%', '50000000', '--', NULL, '--', '--', '--', '2440000', '0', '0', '244000', '--', '--', 0, 322, 'ARI SUGIATRO', '--', '--', 38),
(134, '07.02.22.00034.02.1.12.0', '--', '2020-10-12', 24, '2020-10-12', '2022-10-12', '20000000', '75%', '3.56%', '15000000', '--', '--', '--', '--', '--', '712000', '0', '0', '0', '-', '--', 0, 324, 'Mukhtar Lubis', '--', '--', 41),
(135, '07.02.22.00037.02.1.12.0', '--', '2021-01-13', 60, '2021-01-13', '2026-01-13', '80000000', '30%', '1.89%', '24000000', '--', '--', '--', '--', '--', '1512000', '0', '0', '151200', '--', '--', 0, 325, 'AINAL FAHRI', '--', '--', 40),
(136, '07.02.22.00037.02.1.12.0', '--', '2021-01-13', 60, '2021-01-13', '2026-01-13', '80000000', '30%', '1.89%', '24000000', '--', NULL, '--', '--', '--', '1512000', '0', '0', '151200', '--', '--', 0, 326, 'NURHAYATI', '--', '--', 40),
(137, '07.02.22.00037.02.1.12.0', '--', '2021-01-13', 48, '2021-01-13', '2025-01-13', '50000000', '30%', '1.68%', '15000000', '--', NULL, '--', '--', '--', '840000', '0', '0', '84000', '--', '--', 0, 327, 'SAMSIR', '--', '--', 40),
(138, '07.02.22.00037.02.1.12.0', '--', '2021-01-13', 48, '2021-01-13', '2025-01-13', '80000000', '30%', '1.68%', '24000000', '--', NULL, '--', '--', '--', '1344000', '0', '0', '134400', '--', '--', 0, 328, 'AMINAH', '--', '--', 40),
(139, '07.02.22.00037.02.1.12.0', '--', '2021-01-14', 48, '2021-01-14', '2025-01-14', '50000000', '30%', '1.68%', '15000000', '--', NULL, '--', '--', '--', '840000', '0', '0', '84000', '--', '--', 0, 329, 'SUPARDI', '--', '--', 40),
(140, '07.02.22.00037.02.1.12.0', '--', '2021-01-14', 36, '2021-01-14', '2024-01-14', '70000000', '30%', '1.42%', '21000000', '--', NULL, '--', '--', '--', '994000', '0', '0', '99400', '--', '--', 0, 330, 'SUPARJONO', '--', '--', 40),
(141, '07.02.22.00037.02.1.12.0', '--', '2021-01-14', 36, '2021-01-14', '2024-01-14', '70000000', '30%', '1.42%', '21000000', '--', NULL, '--', '--', '--', '994000', '0', '0', '99400', '--', '--', 0, 331, 'RANDI ASRIADI', '--', '--', 40),
(142, '07.02.22.00037.02.1.12.0', '--', '2021-01-14', 48, '2021-01-14', '2025-01-14', '70000000', '30%', '1.68%', '21000000', '--', NULL, '--', '--', '--', '1176000', '0', '0', '117600', '--', '--', 0, 332, 'SUMARNI', '--', '--', 40),
(143, '07.02.22.00037.02.1.12.0', '--', '2021-01-14', 60, '2021-01-14', '2026-01-14', '45000000', '30%', '1.89%', '13500000', '--', NULL, '--', '--', '--', '850500', '0', '0', '85050', '--', '--', 0, 333, 'YUSRA HAYATI', '--', '--', 40),
(144, '07.02.22.00037.02.1.12.0', '--', '2021-01-14', 36, '2021-01-14', '2024-01-14', '80000000', '30%', '1.42%', '24000000', '--', NULL, '--', '--', '--', '1136000', '0', '0', '113600', '--', '--', 0, 334, 'ARDI TIAR', '--', '--', 40),
(145, '07.02.22.00037.02.1.12.0', '--', '2021-01-14', 60, '2021-01-14', '2026-01-14', '45000000', '30%', '1.89%', '13500000', '--', NULL, '--', '--', '--', '850500', '0', '0', '85050', '--', '--', 0, 335, 'ERITA', '--', '--', 40),
(146, '07.02.22.00037.02.1.12.0', '--', '2021-01-14', 36, '2021-01-14', '2024-01-14', '60000000', '30%', '1.42%', '18000000', '--', NULL, '--', '--', '--', '852000', '0', '0', '85200', '--', '--', 0, 336, 'FREDDI PASARIBU', '--', '--', 40),
(147, '07.02.22.00037.02.1.12.0', '--', '2021-01-26', 60, '2021-01-26', '2026-01-26', '55000000', '30%', '1.89%', '16500000', '--', NULL, '--', '--', '--', '1039500', '0', '0', '103950', '--', '--', 0, 337, 'YUNINGSIH', '--', '--', 40),
(148, '07.02.22.00037.02.1.12.0', '--', '2021-01-18', 48, '2021-01-18', '2025-01-18', '95000000', '30%', '1.68%', '28500000', '--', NULL, '--', '--', '--', '1596000', '0', '0', '159600', '--', '--', 0, 338, 'DILA WARTINI', '--', '--', 40),
(149, '07.02.22.00037.02.1.12.0', '--', '2021-01-18', 12, '2021-01-18', '2022-01-18', '75000000', '30%', '0.65%', '22500000', '--', NULL, '--', '--', '--', '487500', '0', '0', '48750', '--', '--', 0, 339, 'SARINA', '--', '--', 40),
(150, '07.02.22.00037.02.1.12.0', '--', '2021-01-18', 36, '2021-01-18', '2024-01-18', '50000000', '30%', '1.42%', '15000000', '--', NULL, '--', '--', '--', '710000', '0', '0', '71000', '--', '--', 0, 340, 'MAK\'RUF', '--', '--', 40),
(151, '07.02.22.00037.02.1.12.0', '--', '2021-01-26', 60, '2021-01-26', '2026-01-26', '80000000', '30%', '1.89%', '24000000', '--', NULL, '--', '--', '--', '1512000', '0', '0', '151200', '--', '--', 0, 341, 'SRI DEVI SAFITRI', '--', '--', 40),
(152, '07.02.22.00038.02.1.12.0', '--', '2021-01-20', 36, '2021-01-20', '2024-01-20', '35000000', '50%', '2.44%', '17500000', '--', '--', '--', '--', '--', '854000', '0', '0', '85400', '--', '--', 0, 342, 'SAMSUL', '--', '--', 43),
(153, '07.02.22.00038.02.1.12.0', '--', '2021-01-25', 24, '2021-01-25', '2023-01-25', '70000000', '30%', '1.07%', '21000000', '--', NULL, '--', '--', '--', '749000', '0', '0', '74900', '--', '--', 0, 343, 'YASNI', '--', '--', 43),
(154, '07.02.22.00039.02.1.12.0', '--', '2021-01-27', 36, '2021-01-27', '2024-01-27', '30000000', '50%', '2.44%', '15000000', '--', '--', '--', '--', '--', '732000', '0', '0', '73200', '--', '--', 0, 344, 'SUHARTATI', '--', '--', 44),
(155, '07.02.22.00040.02.1.12.0', '--', '2020-12-03', 60, '2020-12-03', '2025-12-03', '500000000', '50%', '3.28%', '250000000', '--', '--', '--', '--', '--', '16400000', '0', '0', '1640000', '--', '--', 0, 345, 'SYAHRIL', '--', '--', 45),
(156, '07.02.22.00041.02.1.12.0', '--', '2021-01-08', 48, '2021-01-08', '2025-01-08', '100000000', '50%', '3.65%', '50000000', '--', '--', '--', '--', '--', '3650000', '0', '0', '365000', '--', '--', 0, 346, 'YULIANI', '--', '--', 46),
(157, '07.02.22.00042.02.1.12.0', '--', '2021-01-14', 18, '2021-01-14', '2022-07-14', '50000000', '50%', '1.85%', '25000000', '--', '--', '--', '--', '--', '925000', '0', '0', '92500', '--', '--', 0, 347, 'ANDI MULIANAH', '--', '--', 47),
(158, '07.02.22.00043.02.1.12.0', '--', '2021-01-19', 60, '2021-01-19', '2026-01-19', '50000000', '50%', '3.28%', '25000000', '--', '--', '--', '--', '--', '1640000', '0', '0', '164000', '--', '--', 0, 348, 'HARDANI', '--', '--', 48),
(159, '07.02.22.00043.02.1.12.0', '--', '2021-01-27', 60, '2021-01-27', '2026-01-27', '125000000', '50%', '3.28%', '62500000', '--', NULL, '--', '--', '--', '4100000', '0', '0', '410000', '--', '--', 0, 349, 'PURNOMO', '--', '--', 48),
(160, '07.02.22.00044.02.1.12.0', '--', '2021-01-28', 6, '2021-01-28', '2021-07-28', '490000000', '50%', '1.16%', '245000000', '--', '--', '--', '--', '--', '5684000', '0', '0', '568400', '--', '--', 0, 350, 'CV. PUTRI SIAK KECIL', '--', '--', 49),
(161, '07.02.22.00045.02.1.12.0', '--', '2021-01-15', 48, '2021-01-15', '2025-01-15', '100000000', '30%', '1.68%', '30000000', '--', '--', '--', '--', '--', '1680000', '0', '0', '168000', '--', '--', 0, 351, 'ABDUL HALIM', '--', '--', 50),
(162, '07.02.22.00047.02.1.12.0', '--', '2021-01-11', 36, '2021-01-11', '2024-01-11', '100000000', '75%', '4.72%', '75000000', '--', '--', '--', '--', '--', '4720000', '0', '0', '0', '--', '--', 0, 352, 'Tentrem Suprihatin', '--', '--', 52),
(163, '07.02.22.00047.02.1.12.0', '--', '2021-01-25', 24, '2021-01-25', '2023-01-25', '50000000', '75%', '3.56%', '37500000', '--', NULL, '--', '--', '--', '1780000', '0', '0', '0', '--', '--', 0, 353, 'Zaenal Saputra', '--', '--', 52),
(164, '07.02.22.00047.02.1.12.0', '--', '2021-01-20', 72, '2021-01-20', '2027-01-20', '150000000', '75%', '7.98%', '112500000', '--', NULL, '--', '--', '--', '11970000', '0', '0', '0', '--', '--', 0, 354, 'Samsul Bahri', '--', '--', 52),
(165, '07.02.22.00047.02.1.12.0', '--', '2021-01-19', 48, '2021-01-19', '2025-01-19', '99000000', '75%', '5.71%', '74250000', '--', NULL, '--', '--', '--', '5652900', '0', '0', '0', '--', '--', 0, 355, 'Doni Sinso', '--', '--', 52),
(166, '07.02.22.00047.02.1.12.0', '--', '2021-01-21', 36, '2021-01-21', '2024-01-21', '125000000', '75%', '4.72%', '93750000', '--', NULL, '--', '--', '--', '5900000', '0', '0', '0', '--', '--', 0, 356, 'Partini', '--', '--', 52),
(167, '07.02.22.00047.02.1.12.0', '--', '2021-01-22', 24, '2021-01-22', '2023-01-22', '60000000', '75%', '3.56%', '45000000', '--', NULL, '--', '--', '--', '2136000', '0', '0', '0', '--', '--', 0, 357, 'Lizayani', '--', '--', 52),
(168, '07.02.22.00048.02.1.12.0', '--', '2020-11-25', 48, '2020-11-25', '2024-11-25', '600000000', '50%', '3.65%', '300000000', '--', '--', '--', '--', '--', '21900000', '0', '0', '0', '--', '--', 0, 358, 'DAMTO', '--', '--', 53),
(169, '07.02.22.00049.02.1.12.0', '--', '2020-11-05', 60, '2020-11-05', '2025-11-05', '135000000', '50%', '3.28%', '67500000', '--', '--', '--', '--', '--', '4428000', '0', '0', '442800', '--', '--', 0, 359, 'MARTINIS', '--', '--', 54),
(170, '07.02.22.00050.02.1.12.0', '--', '2020-12-28', 36, '2020-12-28', '2023-12-28', '150000000', '50%', '2.44%', '75000000', '--', '--', '--', '--', '--', '3660000', '0', '0', '366000', '--', '--', 0, 360, 'SABRAN', '--', '--', 56),
(171, '07.02.22.00050.02.1.12.0', '--', '2020-12-02', 60, '2020-12-02', '2025-12-02', '325000000', '50%', '3.28%', '162500000', '--', NULL, '--', '--', '--', '10660000', '0', '0', '1066000', '--', '--', 0, 361, 'SUZI KURNIASARI', '--', '--', 56),
(172, '07.02.22.00049.02.1.12.0', '--', '2021-01-08', 36, '2021-01-08', '2024-01-08', '99000000', '50%', '2.44%', '49500000', '--', '--', '--', '--', '--', '2415600', '0', '0', '0', '--', '--', 0, 362, 'Abdul Basri', '--', '--', 55),
(173, '07.02.22.00049.02.1.12.0', '--', '2021-01-20', 48, '2021-01-20', '2025-01-20', '95000000', '50%', '2.91%', '47500000', '--', NULL, '--', '--', '--', '2764500', '0', '0', '0', '--', '--', 0, 363, 'Eddi Yanto', '--', '--', 55),
(174, '07.02.22.00049.02.1.12.0', '--', '2021-01-20', 36, '2021-01-20', '2024-01-20', '50000000', '50%', '2.44%', '25000000', '--', NULL, '--', '--', '--', '1220000', '0', '0', '0', '--', '--', 0, 364, 'Ondrianto', '---', '--', 55),
(175, '07.02.22.00049.02.1.12.0', '--', '2021-01-21', 48, '2021-01-21', '2025-01-21', '150000000', '50%', '2.91%', '75000000', '--', NULL, '--', '--', '--', '4365000', '0', '0', '0', '--', '--', 0, 365, 'Mangaraja Nasaruddin Siregar', '--', '--', 55),
(176, '07.02.22.00049.02.1.12.0', '--', '2021-01-22', 36, '2021-01-22', '2024-01-22', '35000000', '50%', '2.44%', '17500000', '--', NULL, '--', '--', '--', '854000', '0', '0', '0', '--', '--', 0, 366, 'Jurianto', '--', '--', 55),
(177, '07.02.22.00049.02.1.12.0', '--', '2021-01-26', 36, '2021-01-26', '2024-01-26', '99000000', '50%', '2.44%', '49500000', '--', NULL, '--', '--', '--', '2415600', '0', '0', '0', '--', '--', 0, 367, 'Mesni', '--', '--', 55),
(178, '07.02.22.00051.02.1.12.0', '--', '2021-01-22', 60, '2021-01-22', '2026-01-22', '50000000', '30%', '1.89%', '15000000', '--', '--', '--', '--', '--', '945000', '0', '0', '0', '--', '--', 0, 368, 'Muhammad Rafni', '--', '--', 57),
(179, '07.02.22.00051.02.1.12.0', '--', '2021-01-25', 36, '2021-01-25', '2024-01-25', '80000000', '30%', '1.42%', '24000000', '--', NULL, '--', '--', '--', '1136000', '0', '0', '0', '--', '--', 0, 369, 'Suryani', '--', '--', 57),
(180, '07.02.22.00052.02.1.12.0', '--', '2021-11-10', 48, '2021-11-10', '2025-11-10', '375000000', '30%', '1.68%', '112500000', '--', '--', '--', '--', '--', '6300000', '0', '0', '0', '--', '--', 0, 370, 'Zuheri Tambusai', '--', '--', 58),
(181, '07.02.22.00053.02.1.12.0', '--', '2021-01-14', 36, '2021-01-14', '2024-01-14', '60000000', '30%', '1.42%', '18000000', '--', '--', '--', '--', '--', '852000', '0', '0', '0', '--', '--', 0, 371, 'Iwan Kusnadi', '--', '--', 59),
(182, '07.02.22.00054.02.1.12.0', '--', '2021-01-08', 36, '2021-01-08', '2024-01-08', '80000000', '50%', '2.44%', '40000000', '--', '--', '--', '--', '--', '1952000', '0', '0', '195200', '--', '--', 0, 372, 'Dahlia', '--', '--', 60),
(183, '07.02.22.00054.02.1.12.0', '--', '2021-01-11', 48, '2021-01-11', '2025-01-11', '100000000', '50%', '2.91%', '50000000', '--', NULL, '--', '--', '--', '2910000', '0', '0', '291000', '--', '--', 0, 373, 'Ahmad Sohir Hutami', '--', '--', 60),
(184, '07.02.22.00054.02.1.12.0', '--', '2021-01-08', 36, '2021-01-08', '2024-01-08', '40000000', '50%', '2.44%', '20000000', '--', NULL, '--', '--', '--', '976000', '0', '0', '97600', '--', '--', 0, 374, 'Zainatun', '--', '--', 60),
(185, '07.02.22.00054.02.1.12.0', '--', '2021-01-11', 48, '2021-01-11', '2025-01-11', '50000000', '50%', '2.91%', '25000000', '--', NULL, '--', '--', '--', '1455000', '0', '0', '145500', '--', '--', 0, 375, 'Julianto', '--', '--', 60),
(186, '07.02.22.00054.02.1.12.0', '--', '2021-01-12', 24, '2021-01-12', '2023-01-12', '30000000', '50%', '1.85%', '15000000', '--', NULL, '--', '--', '--', '555000', '0', '0', '55500', '--', '--', 0, 376, 'Suhermanto', '--', '--', 60),
(187, '07.02.22.00054.02.1.12.0', '--', '2021-01-14', 24, '2021-01-14', '2023-01-14', '50000000', '50%', '1.85%', '25000000', '--', NULL, '--', '--', '--', '925000', '0', '0', '92500', '--', '--', 0, 377, 'Moh Rifa\'i', '--', '--', 60),
(188, '07.02.22.00055.02.1.12.0', '--', '2021-01-11', 60, '2021-01-11', '2026-01-11', '150000000', '50%', '3.28%', '75000000', '--', '--', '--', '--', '--', '4920000', '0', '0', '492000', '--', '--', 0, 378, 'Zainal Abidin', '--', '--', 61),
(189, '07.02.22.00055.02.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '50000000', '50%', '2.91%', '25000000', '--', NULL, '--', '--', '--', '1455000', '0', '0', '145500', '-', '--', 0, 379, 'Helmi', '--', '--', 61),
(190, '07.02.22.00055.02.1.12.0', '--', '2020-12-22', 48, '2020-12-22', '2024-12-22', '100000000', '75%', '4.97%', '75000000', '--', NULL, '--', '--', '--', '4970000', '0', '0', '497000', '--', '--', 0, 380, 'Sri Narulita Br Tarigan', '--', '--', 61),
(191, '07.02.22.00055.02.1.12.0', '--', '2020-12-22', 36, '2020-12-22', '2023-12-22', '50000000', '50%', '2.44%', '25000000', '--', NULL, '--', '--', '--', '1220000', '0', '0', '122000', '--', '--', 0, 381, 'Syahputra', '--', '--', 61),
(192, '07.02.22.00055.02.1.12.0', '--', '2020-12-23', 48, '2020-12-23', '2024-12-23', '100000000', '75%', '4.97%', '75000000', '--', NULL, '--', '--', '--', '4970000', '0', '0', '497000', '--', '--', 0, 382, 'Ririn Arianti', '--', '--', 61),
(193, '07.02.22.00056.02.1.12.0', '--', '2021-01-12', 36, '2021-01-12', '2024-01-12', '50000000', '50%', '2.44%', '25000000', '--', '--', '--', '--', '--', '1220000', '0', '0', '0', '--', '--', 0, 383, 'Amat', '--', '--', 62),
(194, '07.02.22.00056.02.1.12.0', '--', '2021-01-21', 36, '2021-01-21', '2024-01-21', '60000000', '50%', '2.44%', '30000000', '--', NULL, '--', '-', '--', '1464000', '0', '0', '0', '--', '--', 0, 384, 'Satrimo', '--', '--', 62),
(195, '07.02.22.00056.02.1.12.0', '--', '2021-01-15', 60, '2021-01-15', '2026-01-15', '150000000', '50%', '3.28%', '75000000', '--', NULL, '--', '--', '--', '4920000', '0', '0', '0', '--', '--', 0, 385, 'Herlina', '--', '--', 62),
(196, '07.02.22.00057.02.1.12.0', '--', '2021-01-25', 36, '2021-01-25', '2024-01-25', '100000000', '30%', '1.42%', '30000000', '--', '--', '--', '--', '--', '1420000', '0', '0', '0', '--', '--', 0, 386, 'Zamri Efrizon', '--', '--', 63),
(197, '07.02.22.00057.02.1.12.0', '--', '2021-01-25', 60, '2021-01-25', '2026-01-25', '99000000', '30%', '1.89%', '29700000', '--', NULL, '--', '--', '--', '1871100', '0', '0', '0', '--', '--', 0, 387, 'Mujiono', '--', '--', 63),
(198, '07.02.22.00058.02.1.12.0', '--', '2020-12-21', 36, '2020-12-21', '2023-12-21', '70000000', '30%', '1.98%', '21000000', '--', '--', '--', '--', '--', '1386000', '0', '0', '138600', '--', '--', 0, 388, 'ERVINA EKOWATI WAHYUNINGSIH', '--', '--', 64),
(199, '07.02.22.00058.02.1.12.0', '--', '2020-12-22', 12, '2020-12-22', '2021-12-22', '500000000', '30%', '0.86%', '150000000', '--', NULL, '--', '--', '--', '4300000', '0', '0', '430000', '--', '--', 0, 389, 'SYADRIWANYONO', '--', '--', 64),
(200, '07.02.22.00058.02.1.12.0', '--', '2020-12-17', 36, '2020-12-17', '2023-12-17', '50000000', '30%', '1.98%', '15000000', '--', NULL, '--', '--', '--', '990000', '0', '0', '99000', '--', '--', 0, 390, 'FAULINA ULFA NASUTION', '--', '--', 64),
(201, '07.02.22.00058.02.1.12.0', '--', '2020-12-16', 48, '2020-12-16', '2024-12-16', '500000000', '30%', '2.42%', '150000000', '--', NULL, '--', '--', '--', '12100000', '0', '0', '1210000', '--', '--', 0, 391, 'MINARSIH', '--', '--', 64),
(202, '07.02.22.00058.02.1.12.0', '--', '2020-12-11', 48, '2020-12-11', '2024-12-11', '100000000', '30%', '2.42%', '30000000', '--', NULL, '--', '--', '--', '2420000', '0', '0', '242000', '--', '--', 0, 392, 'YULI SUWARTO', '--', '--', 64),
(203, '07.02.22.00058.02.1.12.0', '--', '2020-12-11', 48, '2020-12-11', '2024-12-11', '500000000', '30%', '2.42%', '150000000', '--', NULL, '--', '--', '--', '12100000', '0', '0', '1210000', '--', '--', 0, 393, 'RIAMAN ELVANTO', '--', '--', 64),
(204, '07.02.22.00058.02.1.12.0', '--', '2020-03-27', 60, '2020-03-27', '2025-03-27', '353000000', '50%', '4.19%', '176500000', '--', NULL, '--', '--', '--', '14790700', '0', '0', '1479070', '--', '--', 0, 394, 'ALI ZAKIR', '--', '--', 64),
(205, '07.02.22.00059.02.1.12.0', '--', '2020-12-21', 120, '2020-12-21', '2030-12-21', '385000000', '50%', '5.36%', '192500000', '--', '--', '--', '--', '--', '20636000', '0', '0', '2063600', '--', '--', 0, 395, 'Kartina', '--', '--', 66),
(206, '07.02.22.00060.02.1.12.0', '--', '2020-12-10', 36, '2020-12-10', '2023-12-10', '30000000', '50%', '3.00%', '15000000', '--', '--', '--', '--', '--', '900000', '0', '0', '90000', '--', '--', 0, 396, 'Susi Susanti', '--', '--', 67),
(207, '07.02.22.00061.02.1.12.0', '--', '2020-12-21', 36, '2020-12-21', '2023-12-21', '30000000', '30%', '1.42%', '9000000', '--', '--', '--', '--', '--', '426000', '0', '0', '42600', '--', '--', 0, 397, 'Rohayati', '--', '--', 68),
(208, '07.02.22.00063.03.1.12.0', ' --', '2020-12-29', 60, '2020-12-29', '2025-12-29', '50000000', '50%', '3.28%', '25000000', '--', '--', '--', '--', '--', '1640000', '0', '0', '164000', '--', '--', 0, 398, 'Nani Nuraily', '--', '--', 71),
(209, '07.02.22.00063.03.1.12.0', '--', '2020-12-02', 48, '2020-12-02', '2024-12-02', '40000000', '30%', '1.68%', '12000000', '--', NULL, '--', '--', '--', '672000', '0', '0', '67200', '--', '--', 0, 399, 'Yuni Astuti', '--', '--', 71),
(210, '07.02.22.00063.03.1.12.0', '--', '2020-12-16', 36, '2020-12-16', '2023-12-16', '100000000', '50%', '2.44%', '50000000', '--', NULL, '--', '--', '--', '2440000', '0', '0', '244000', '--', '--', 0, 400, 'Andy Wiryanto', '--', '--', 71),
(211, '07.02.22.00063.03.1.12.0', '--', '2020-12-16', 36, '2020-12-16', '2023-12-16', '50000000', '50%', '2.44%', '25000000', '--', NULL, '--', '--', '--', '1220000', '0', '0', '122000', '--', '--', 0, 401, 'Sersanti Lamsarito', '--', '--', 71),
(212, '07.02.22.00063.03.1.12.0', '--', '2020-12-17', 48, '2020-12-17', '2024-12-17', '50000000', '75%', '4.97%', '37500000', '--', NULL, '--', '--', '--', '2485000', '0', '0', '248500', '--', '--', 0, 402, 'Gustini', '--', '--', 71),
(213, '07.02.22.00064.03.1.12.0', '--', '2020-12-15', 36, '2020-12-15', '2023-12-15', '25000000', '30%', '1.98%', '7500000', '--', '--', '--', '--', '--', '495000', '0', '0', '49500', '--', '--', 0, 403, 'Aryani', '--', '--', 72),
(214, '07.02.22.00064.03.1.12.0', '--', '2020-12-18', 48, '2020-12-18', '2024-12-18', '25000000', '50%', '3.65%', '12500000', '--', NULL, '--', '--', '--', '912500', '0', '0', '91250', '--', '--', 0, 404, 'Edi Bambang Triyono', '--', '--', 72),
(215, '07.02.22.00065.03.1.12.0', '--', '0020-12-04', 24, '0020-12-04', '0022-12-04', '20000000', '75%', '3.56%', '15000000', '--', '--', '--', '--', '--', '712000', '0', '0', '71200', '--', '--', 0, 405, 'Jailani', '--', '--', 73),
(216, '07.02.22.00065.03.1.12.0', '--', '2020-12-04', 36, '2020-12-04', '2023-12-04', '50000000', '75%', '4.72%', '37500000', '--', NULL, '--', '--', '--', '2360000', '0', '0', '236000', '--', '--', 0, 406, 'Indra', '--', '--', 73),
(217, '07.02.22.00065.03.1.12.0', '--', '2020-12-17', 60, '2020-12-17', '2025-12-17', '150000000', '75%', '6.46%', '112500000', '--', NULL, '--', '--', '--', '9690000', '0', '0', '969000', '--', '--', 0, 407, 'Riston Simatupang', '--', '--', 73),
(218, '07.02.22.00066.03.1.12.0', '--', '2021-01-11', 36, '2021-01-11', '2024-01-11', '35000000', '75%', '4.72%', '26250000', '--', '--', '--', '--', '--', '1652000', '0', '0', '165200', '--', '--', 0, 408, 'Lio Agustian', '--', '--', 74),
(219, '07.02.22.00066.03.1.12.0', '--', '2021-01-18', 36, '2021-01-18', '2024-01-18', '30000000', '75%', '4.72%', '22500000', '--', NULL, '--', '--', '--', '1416000', '0', '0', '141600', '--', '--', 0, 409, 'Demi', '--', '--', 74),
(220, '07.02.22.00066.03.1.12.0', '--', '2021-01-14', 36, '2021-01-14', '2024-01-14', '40000000', '75%', '4.72%', '30000000', '--', NULL, '--', '--', '--', '1888000', '0', '0', '188800', '--', '--', 0, 410, 'Ilhamuddin', '--', '--', 74),
(221, '07.02.22.00067.03.1.12.0', '--', '2024-08-05', 8, '2024-08-05', '2025-04-05', '37362983', '50%', '1.37%', '18681492', '--', '--', '--', '--', '--', '511873', '0', '0', '51187.3', '--', '--', 0, 411, 'Amrizal Malik', '--', '--', 75),
(222, '07.02.22.00067.03.1.12.0', '--', '2022-11-28', 9, '2022-11-28', '2023-08-28', '36847602', '50%', '1.37%', '18423801', '--', NULL, '--', '--', '--', '504812', '0', '0', '50481.2', '--', '--', 0, 412, ' Siswo Prihatin', '--', '--', 75),
(223, '07.02.22.00067.03.1.12.0', '--', '2024-09-08', 9, '2024-09-08', '2025-06-08', '19610134', '75%', '2.16%', '14707601', '--', NULL, '--', '--', '--', '423579', '0', '0', '42357.9', '--', '--', 0, 413, 'Ahmad Khoiri', '--', '--', 75),
(224, '07.02.22.00067.03.1.12.0', '--', '2024-03-14', 7, '2024-03-14', '2024-10-14', '9237286', '75%', '2.16%', '6927965', '--', NULL, '--', '--', '--', '199525', '0', '0', '19952.5', '--', '--', 0, 414, 'Yulia Apriani', '--', '--', 75);
INSERT INTO `tbldjpd` (`DJPDid`, `DJPDnoreg`, `DJPDnoakad`, `DJPDtanggalakad`, `DJPDjangkawaktu`, `DJPDtanggalawal`, `DJPDtanggalakhir`, `DJPDplafondkredit`, `DJPDcoverage`, `DJPDrate`, `DJPDnilaipenjaminan`, `DJPDtujuankredit`, `DJPDjenisagunan`, `DJPDcarapengikatan`, `DJPDnilaitransaksipasar`, `DJPDnilaitransaksilikuidasi`, `DJPDimbaljasa`, `DJPDfeeadm`, `DJPDfeematerai`, `DJPDfeebank`, `DJPDsu`, `DJPDobjekpenjaminan`, `PKRJid`, `TRJMid`, `TRJMnama`, `TRJMalamat`, `TRJMusia`, `DJPid`) VALUES
(225, '07.02.22.00067.03.1.12.0', '--', '2023-09-20', 11, '2023-09-20', '2024-08-20', '12470712', '75%', '2.16%', '9353034', '--', NULL, '--', '--', '--', '269367', '0', '0', '26936.7', '--', '--', 0, 415, 'Amir Syafawi', '--', '--', 75),
(226, '07.02.22.00067.03.1.12.0', '--', '2024-04-15', 11, '2024-04-15', '2025-03-15', '28574890', '50%', '1.37%', '14287445', '--', NULL, '--', '--', '--', '391476', '0', '0', '39147.6', '--', '--', 0, 416, 'Hendrawati', '--', '--', 75),
(227, '07.02.22.00067.03.1.12.0', '--', '2023-05-21', 16, '2023-05-21', '2024-09-21', '73173539', '50%', '2.26%', '36586770', '--', NULL, '--', '--', '--', '1653722', '0', '0', '165372.2', '--', '--', 0, 417, 'Nurhayati', '--', '--', 75),
(228, '07.02.22.00067.03.1.12.0', '--', '2024-12-08', 6, '2024-12-08', '2025-06-08', '70470898', '50%', '1.37%', '35235449', '--', NULL, '--', '--', '--', '965451', '0', '0', '96545.1', '--', '--', 0, 418, 'Riyaldi', '--', '--', 75),
(229, '07.02.22.00067.03.1.12.0', '--', '2020-10-08', 9, '2020-10-08', '2021-07-08', '51205962', '50%', '1.37%', '25602981', '--', NULL, '--', '--', '--', '701522', '0', '0', '70152.2', '--', '--', 0, 419, 'Azmi Sandoro', '--', '--', 75),
(230, '07.02.22.00067.03.1.12.0', '--', '2021-10-09', 7, '2021-10-09', '2022-05-09', '22022927', '50%', '1.37%', '11011464', '--', NULL, '--', '--', '--', '301714', '0', '0', '30171.4', '--', '--', 0, 420, 'Ardonal', '--', '--', 75),
(231, '07.02.22.00067.03.1.12.0', '--', '2021-03-16', 9, '2021-03-16', '2021-12-16', '14079248', '50%', '1.37%', '7039624', '--', NULL, '--', '--', '--', '192886', '0', '0', '19288.6', '--', '--', 0, 421, 'Nurhayati', '--', '--', 75),
(232, '07.02.22.00067.03.1.12.0', '--', '2024-09-18', 9, '2024-09-18', '2025-06-18', '14960456', '75%', '2.16%', '11220342', '--', NULL, '--', '--', '--', '323146', '0', '0', '32314.6', '-', '--', 0, 422, 'M.Sahid', '--', '--', 75),
(233, '07.02.22.00067.03.1.12.0', '--', '0000-00-00', 8, '2021-11-17', '1970-09-01', '12089928', '50%', '1.37%', '6044964', '--', NULL, '---', '--', '--', '165632', '0', '0', '16563.2', '-', '--', 0, 423, 'Misman', '--', '--', 75),
(234, '07.02.22.00067.03.1.12.0', '--', '2024-02-27', 15, '2024-02-27', '2025-05-27', '35070167', '75%', '3.56%', '26302625', '--', NULL, '--', '-', '-', '1248498', '0', '0', '124849.8', '-', '-', 0, 424, 'Sefrinaldi', '--', '--', 75);

-- --------------------------------------------------------

--
-- Table structure for table `tbldjph`
--

CREATE TABLE `tbldjph` (
  `DJPid` int(11) NOT NULL,
  `DJPnoreg` varchar(255) DEFAULT NULL,
  `DJPnoseri` varchar(255) DEFAULT NULL,
  `DJPnourut` varchar(255) DEFAULT NULL,
  `DJPnodeklarasi` varchar(255) DEFAULT NULL,
  `DJPtanggaldeklarasi` date DEFAULT NULL,
  `DJPperiode` varchar(12) NOT NULL,
  `DJPacuanhitung` varchar(255) DEFAULT NULL,
  `DJPnilaipenjaminan` int(11) NOT NULL,
  `DJPjumlahpk` int(255) DEFAULT NULL,
  `DJPjumlahnilaipk` varchar(255) DEFAULT NULL,
  `DJPjumlahimbaljasa` varchar(255) DEFAULT NULL,
  `PKSratefee` varchar(5) NOT NULL,
  `DJPfeebank` varchar(255) DEFAULT NULL,
  `DJPfeematerai` varchar(255) DEFAULT NULL,
  `DJPfeeadmin` varchar(255) DEFAULT NULL,
  `DJPjumlahbiaya` varchar(255) DEFAULT NULL,
  `DJPjumlahbiayaterbilang` varchar(255) DEFAULT NULL,
  `DJPtanggalentry` date DEFAULT NULL,
  `DJPtanggalverif` date DEFAULT NULL,
  `DJPtanggalcetak` date DEFAULT NULL,
  `DJPuseridentry` int(255) DEFAULT NULL,
  `DJPuseridverif` int(255) DEFAULT NULL,
  `DJPuseridcetak` int(255) DEFAULT NULL,
  `DJPuseridapprove` int(11) NOT NULL,
  `DJPmaxnilai` varchar(255) DEFAULT NULL,
  `DJPtahun` varchar(255) DEFAULT NULL,
  `DJPnoserilama` varchar(255) DEFAULT NULL,
  `GPPid` int(11) DEFAULT NULL,
  `PKSid` int(11) DEFAULT NULL,
  `PKSjenis` varchar(255) DEFAULT NULL,
  `OPKid` int(11) DEFAULT NULL,
  `SPJid` int(11) DEFAULT NULL,
  `JSPid` int(11) DEFAULT NULL,
  `PPid` int(11) DEFAULT NULL,
  `PPnama` varchar(255) DEFAULT NULL,
  `PPalamat` varchar(255) DEFAULT NULL,
  `BPid` int(11) DEFAULT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldjph`
--

INSERT INTO `tbldjph` (`DJPid`, `DJPnoreg`, `DJPnoseri`, `DJPnourut`, `DJPnodeklarasi`, `DJPtanggaldeklarasi`, `DJPperiode`, `DJPacuanhitung`, `DJPnilaipenjaminan`, `DJPjumlahpk`, `DJPjumlahnilaipk`, `DJPjumlahimbaljasa`, `PKSratefee`, `DJPfeebank`, `DJPfeematerai`, `DJPfeeadmin`, `DJPjumlahbiaya`, `DJPjumlahbiayaterbilang`, `DJPtanggalentry`, `DJPtanggalverif`, `DJPtanggalcetak`, `DJPuseridentry`, `DJPuseridverif`, `DJPuseridcetak`, `DJPuseridapprove`, `DJPmaxnilai`, `DJPtahun`, `DJPnoserilama`, `GPPid`, `PKSid`, `PKSjenis`, `OPKid`, `SPJid`, `JSPid`, `PPid`, `PPnama`, `PPalamat`, `BPid`, `status`) VALUES
(1, '07.02.22.00001.01.1.12.0', 'JR.07. 15585', '00001', 'PPR/BRK-APT/2021', '2021-12-28', '12', 'PLAFOND KREDIT', 707500000, 5, '1415000000', '57938500', '10%', '5793850', '0', '0', '52144650', 'Lima Puluh Dua Juta Seratus Empat Puluh Empat Ribu Enam Ratus Lima Puluh', '2022-01-19', '2022-01-24', '2022-01-24', 6, 6, 6, 0, '495000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 26, 'Bank Riau Kepri Cabang Pembantu Sorek', 'Jl. Raya Lintas Timur No. 105 Pangkalan Kuras', NULL, 1),
(2, '07.02.22.00002.01.1.12.0', 'JR.07. 15585', '00002', 'PPR/BRK-APT/2021', '2021-10-20', '10', 'PLAFOND KREDIT', 50000000, 1, '100000000', '4190000', '10%', '419000', '0', '0', '3771000', 'Tiga Juta Tujuh Ratus Tujuh Puluh Satu Ribu', '2022-01-20', '2022-01-24', '2022-01-24', 6, 6, 6, 0, '100000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 92, 'Bank Riau Kepri Butik Mall Ciputra Seraya', 'Mall Ciputra Seraya Lt. 2 Jl. Riau, Pekanbaru', NULL, 1),
(3, '07.02.22.00003.01.1.12.0', 'JR.07. 15585', '00003', 'PPR/BRK-APT/2021', '2016-05-21', '06', 'PLAFOND KREDIT', 50000000, 1, '100000000', '4190000', '10%', '419000', '0', '0', '3771000', 'Tiga Juta Tujuh Ratus Tujuh Puluh Satu Ribu', '2022-01-21', '2022-01-24', '2022-01-24', 6, 6, 6, 0, '100000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 87, 'Bank Riau Kepri Kantor Kas Bupati Bintan', 'Kantor Bupati Bintan, Bandar Seri Bentan KM 42, Bintan Bunyu, Kec. Teluk Bintan, Kab. Bintan, Provinsi Kepulauan Riau', NULL, 1),
(4, '07.02.22.00004.02.1.12.0', '--', '00004', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 50000000, 1, '100000000', '1370000', '10%', '137000', '0', '0', '1233000', 'Satu Juta Dua Ratus Tiga Puluh Tiga Ribu', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '100000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 115, 'Bank Riau Kepri Cabang Pembantu Sungai Pakning', 'Jl. Jend. Sudirman No. 149, Sungai Pakning', NULL, 1),
(5, '07.02.22.00005.02.1.12.0', '--', '00005', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 107500000, 3, '235000000', '5824000', '10%', '582400', '0', '0', '5241600', 'Lima Juta Dua Ratus Empat Puluh Satu Ribu Enam Ratus', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '85000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 58, 'Bank Riau Kepri Kedai Kabun', 'Jl. Lintas Pekanbaru-Pasir Pangarayan Kec. Kabun Rohul', NULL, 1),
(6, '07.02.22.00006.02.1.12.0', '--', '00006', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 27000000, 2, '90000000', '1408000', '10%', '140800', '0', '0', '1267200', 'Satu Juta Dua Ratus Enam Puluh Tujuh Ribu Dua Ratus', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '50000000', '2021', NULL, 1, 2, 'PK', 1, 1, 1, 49, 'Bank Riau Kepri Kedai Pasar Kuok', 'Jl. Raya Bangkinang-Padang', NULL, 1),
(7, '07.02.22.00007.02.1.12.0', '--', '00007', 'JAN', '2020-12-01', '01', 'NILAI PENJAMINAN', 75000000, 1, '250000000', '4725000', '10%', '472500', '0', '0', '4252500', 'Empat Juta Dua Ratus Lima Puluh Dua Ribu Lima Ratus', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '250000000', '2021', NULL, 1, 2, 'PK', 1, 1, 2, 30, 'Bank Riau Kepri Cabang Pembantu Kandis', 'Jl. Lintas Pekanbaru-Duri', NULL, 1),
(8, '07.02.22.00008.02.1.12.0', '--', '00008', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 60000000, 1, '200000000', '3780000', '10%', '378000', '0', '0', '3402000', 'Tiga Juta Empat Ratus Dua Ribu', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '200000000', '2021', NULL, 1, 2, 'PK', 1, 1, 2, 17, 'Bank Riau Kepri Cabang Ranai', 'Jl. Datuk Kaya Wan Muhammad Benteng Natuna', NULL, 1),
(9, '07.02.22.00009.02.1.12.0', '--', '00009', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 18000000, 1, '60000000', '1134000', '10%', '113400', '0', '0', '1020600', 'Satu Juta Dua Puluh  Ribu Enam Ratus', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '60000000', '2022', NULL, 1, 2, 'PK', 1, 1, 2, 37, 'Bank Riau Kepri Cabang Pembantu Kota Tengah', 'RT 02/02 Gelugur Kota Tengah Kel. Kepenuhan – Rohul', NULL, 1),
(11, '07.02.22.00010.02.1.12.0', '--', '00010', 'JAn', '2020-12-01', '01', 'PLAFOND KREDIT', 105000000, 3, '350000000', '5620000', '10%', '562000', '0', '0', '5058000', 'Lima Juta Lima Puluh Delapan Ribu', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '150000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 43, 'Bank Riau Kepri Cabang Pembantu Tarempa', 'Jl. Hang Tuah, Tarempa, Kab. Anambas', NULL, 1),
(12, '07.02.22.00011.02.1.12.0', '--', '00011', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 425000000, 2, '600000000', '27760000', '0%', '0', '0', '0', '27760000', 'Dua Puluh Tujuh Juta Tujuh Ratus Enam Puluh  Ribu', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '500000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 99, 'Bank Riau Kepri Kedai Sungai Sembilan', 'Kab. Bengkalis\"', NULL, 1),
(13, '07.02.22.00012.02.1.12.0', '--', '00012', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 65000000, 2, '130000000', '3336500', '0%', '0', '0', '0', '3336500', 'Tiga Juta Tiga Ratus Tiga Puluh Enam Ribu Lima Ratus', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '95000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 99, 'Bank Riau Kepri Kedai Sungai Sembilan', 'Kab. Bengkalis\"', NULL, 1),
(14, '07.02.22.00013.02.1.12.0', '--', '00013', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 666750000, 9, '889000000', '45653800', '0%', '0', '0', '0', '45653800', 'Empat Puluh Lima Juta Enam Ratus Lima Puluh Tiga Ribu Delapan Ratus', '2022-02-16', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '99000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 8, 'Bank Riau Kepri Cabang Bengkalis', 'Jl. Pahlawan No. 15A Bengkalis', NULL, 1),
(15, '07.02.22.00014.02.1.12.0', '--', '00014', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 80000000, 1, '160000000', '3904000', '10%', '390400', '0', '0', '3513600', 'Tiga Juta Lima Ratus Tiga Belas Ribu Enam Ratus', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '160000000', '2022', NULL, 1, 2, 'PK', 1, 1, 2, 35, 'Bank Riau Kepri Cabang Pembantu Syariah Duri', 'Jl. Sudirman 158 A Kel. Air Jamban - Mandau Duri.', NULL, 1),
(16, '07.02.22.00015.02.1.12.0', '--', '00015', 'JAN', '2020-12-04', '01', 'PLAFOND KREDIT', 50000000, 1, '100000000', '3650000', '0%', '0', '0', '0', '3650000', 'Tiga Juta Enam Ratus Lima Puluh  Ribu', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '100000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 47, 'Bank Riau Kepri Kedai Marpoyan', 'Jl. Kaharudin Nasution No. 56 B Pekanbaru', NULL, 1),
(17, '07.02.22.00016.02.1.12.0', '--', '00016', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 276300000, 9, '921000000', '14658400', '0%', '0', '0', '0', '14658400', 'Empat Belas Juta Enam Ratus Lima Puluh Delapan Ribu Empat Ratus', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '99000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 50, 'Bank Riau Kepri Kedai Minas', 'Jl. Yos Sudarso Kel. Minas Raya Minas', NULL, 1),
(18, '07.02.22.00017.02.1.12.0', '--', '00017', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 100000000, 2, '200000000', '6000000', '0%', '0', '0', '0', '6000000', 'Enam Juta', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '100000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 12, 'Bank Riau Kepri Cabang Pangkalan Kerinci', 'Jl. Maharaja Indra No. 490', NULL, 1),
(19, '07.02.22.00018.02.1.12.0', '--', '00018', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 30000000, 1, '100000000', '1980000', '0%', '0', '0', '0', '1980000', 'Satu Juta Sembilan Ratus Delapan Puluh  Ribu', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '100000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 23, 'Bank Riau Kepri Cabang Pembantu Tanjung Batu', 'Jl. Merdeka No. 14 Tanjung Batu', NULL, 1),
(20, '07.02.22.00019.02.1.12.0', '--', '00019', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 27000000, 1, '90000000', '1782000', '0%', '0', '0', '0', '1782000', 'Satu Juta Tujuh Ratus Delapan Puluh Dua Ribu', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '90000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 33, 'Bank Riau Kepri Cabang Pembantu Tanjung Uban', 'Jl. Permaisuri Blok A No. 2, Kec. Bintan Utara', NULL, 1),
(21, '07.02.22.00020.02.1.12.0', '--', '00020', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 253600000, 5, '712000000', '22557600', '0%', '0', '0', '0', '22557600', 'Dua Puluh Dua Juta Lima Ratus Lima Puluh Tujuh Ribu Enam Ratus', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '80000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 38, 'Bank Riau Kepri Cabang Pembantu Lubuk Dalam', 'Jl. Pertamina, Desa Rawang Kao Kec. Lubuk Dalam Siak Sri Indrapura', NULL, 1),
(22, '07.02.22.00021.02.1.12.0', '--', '00021', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 75000000, 1, '150000000', '4500000', '0%', '0', '0', '0', '4500000', 'Empat Juta Lima Ratus  Ribu', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '150000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 10, 'Bank Riau Kepri Cabang Air Molek', 'Jl. Jend. Sudirman, Air Molek', NULL, 1),
(23, '07.02.22.00022.02.1.12.0', '--', '00022', 'JAN', '2020-12-28', '01', 'PLAFOND KREDIT', 112500000, 1, '150000000', '9690000', '0%', '0', '0', '0', '9690000', 'Sembilan Juta Enam Ratus Sembilan Puluh  Ribu', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '150000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 21, 'Bank Riau Kepri Cabang Pembantu Perawang', 'Jl. Raya Perawang KM. 5', NULL, 1),
(24, '07.02.22.00023.02.1.12.0', '--', '00023', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 287700000, 6, '443000000', '22081900', '0%', '0', '0', '0', '22081900', 'Dua Puluh Dua Juta Delapan Puluh Satu Ribu Sembilan Ratus', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '99000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 1, 'Bank Riau Kepri Cabang Utama', 'Jl. Jend. Sudirman No.377 Pekanbaru 28116', NULL, 1),
(25, '07.02.22.00024.02.1.12.0', '--', '00024', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 667500000, 21, '1715000000', '34057000', '0%', '0', '0', '0', '34057000', 'Tiga Puluh Empat Juta Lima Puluh Tujuh Ribu', '2022-02-17', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '75000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 52, 'Bank Riau Kepri Kedai Bukit Kapur', 'Jl. Sukarno Hatta, Bukit Kapur - Dumai', NULL, 1),
(26, '07.02.22.00025.02.1.12.0', '--', '00025', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 105000000, 2, '350000000', '9800000', '10%', '980000', '0', '0', '8820000', 'Delapan Juta Delapan Ratus Dua Puluh  Ribu', '2022-02-18', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '200000000', '2021', NULL, 1, 2, 'PK', 2, 1, 1, 26, 'Bank Riau Kepri Cabang Pembantu Sorek', 'Jl. Raya Lintas Timur No. 105 Pangkalan Kuras', NULL, 1),
(27, '07.02.22.00026.02.1.12.0', '--', '00026', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 151500000, 5, '435000000', '7638000', '10%', '763800', '0', '0', '6874200', 'Enam Juta Delapan Ratus Tujuh Puluh Empat Ribu Dua Ratus', '2022-02-18', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '80000000', '2021', NULL, 1, 2, 'PK', 1, 1, 1, 60, 'Bank Riau Kepri Kedai Lubuk Jambi', 'Pasar Lubuk Jambi, Jl. Lintas Timur Kec. Kuantan Mudik', NULL, 1),
(28, '07.02.22.00027.02.1.12.0', '--', '00027', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 531000000, 7, '970000000', '34931000', '10%', '3493100', '0', '0', '31437900', 'Tiga Puluh Satu Juta Empat Ratus Tiga Puluh Tujuh Ribu Sembilan Ratus', '2022-02-21', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '50000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 22, 'Bank Riau Kepri Cabang Pembantu Duri', 'Jl. Hang Tuah No. 21-22 Duri', NULL, 1),
(31, '07.02.22.00029.02.1.12.0', '--', '00029', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 28500000, 1, '95000000', '1406000', '10%', '140600', '0', '0', '1265400', 'Satu Juta Dua Ratus Enam Puluh Lima Ribu Empat Ratus', '2022-02-21', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '95000000', '2021', NULL, 1, 2, 'PK', 2, 1, 2, 9, 'Bank Riau Kepri Cabang Bangkinang', 'Jl. Prof. M. Yamin, SH No. 29 Bangkinang', NULL, 1),
(32, '07.02.22.00030.02.1.12.0', '--', '00030', '--', '2021-01-01', '01', 'PLAFOND KREDIT', 9000000, 1, '30000000', '594000', '10%', '59400', '0', '0', '534600', 'Lima Ratus Tiga Puluh Empat Ribu Enam Ratus', '2022-02-21', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '30000000', '2021', NULL, 1, 2, 'PK', 2, 1, 2, 6, 'Bank Riau Kepri Cabang Batam', 'Jl. Laksamana Bintan-Sei Panas Komp. Tana Mas Blok C No. 14 Batam', NULL, 1),
(33, '07.02.22.00031.02.1.12.0', '--', '00031', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 395000000, 8, '790000000', '22019500', '10%', '2201950', '0', '0', '19817550', 'Sembilan Belas Juta Delapan Ratus Tujuh Belas Ribu Lima Ratus Lima Puluh', '2022-02-21', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '75000000', '2021', NULL, 1, 2, 'PK', 1, 1, 1, 101, 'Bank Riau Kepri Kedai Pujud', '\"Komplek Graha Nusa Permai Blok C1 No. 1-3', NULL, 1),
(34, '07.02.22.00032.02.1.12.0', '--', '00032', 'JAN', '2020-12-01', '01', '--Pilih--', 400000000, 6, '1168000000', '29169500', '10%', '2916950', '0', '0', '26252550', 'Dua Puluh Enam Juta Dua Ratus Lima Puluh Dua Ribu Lima Ratus Lima Puluh', '2022-02-21', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '99000000', '2021', NULL, 1, 2, 'PK', 2, 1, 1, 62, 'Bank Riau Kepri Kedai Sei Lala', 'Jl. Lintas air Molek-Taluk Kuantan, Desa Sei Lala Perkebunan, Kec. Sei Lala, Kab Inhu', NULL, 1),
(35, '07.02.22.00031.02.1.12.0', '--', '00031', 'Jan', '2020-11-01', '01', 'PLAFOND KREDIT', 157500000, 3, '210000000', '9912000', '10%', '991200', '0', '0', '8920800', 'Delapan Juta Sembilan Ratus Dua Puluh  Ribu Delapan Ratus', '2022-02-21', NULL, NULL, 9, NULL, NULL, 0, '80000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 20, 'Bank Riau Kepri Cabang Pembantu Senapelan', 'Jl. Senapelan No. 19 Pasar Bawah Pekanbaru', NULL, 0),
(36, '07.02.22.00033.02.1.12.0', '--', '00033', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 150000000, 1, '500000000', '9900000', '10%', '990000', '0', '0', '8910000', 'Delapan Juta Sembilan Ratus Sepuluh Ribu', '2022-02-21', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '500000000', '2021', NULL, 1, 2, 'PK', 2, 1, 2, 46, 'Bank Riau Kepri Cabang Pembantu Flamboyan', 'Jl. Raya Petapahan – Kota Garo No. 48-49 RT/RW 16/06 Desa Tanjung Sawit, Kec. Tapung, Kampar', NULL, 1),
(37, '07.02.22.00034.02.1.12.0', '--', '00034', 'JAN', '2020-01-01', '01', 'PLAFOND KREDIT', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 2, 'PK', 1, 1, 2, 51, 'Bank Riau Kepri Kedai Ukui', 'Jl. Lintas Timur RT 02/01 Pasar Ukui Kec. Ukui Kab. Pelalawan', NULL, 0),
(38, '07.02.22.00035.02.1.12.0', '--', '00035', 'JAN', '2020-01-01', '01', 'PLAFOND KREDIT', 87500000, 2, '150000000', '5215000', '10%', '521500', '0', '0', '4693500', 'Empat Juta Enam Ratus Sembilan Puluh Tiga Ribu Lima Ratus', '2022-02-21', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '50000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 51, 'Bank Riau Kepri Kedai Ukui', 'Jl. Lintas Timur RT 02/01 Pasar Ukui Kec. Ukui Kab. Pelalawan', NULL, 1),
(40, '07.02.22.00037.02.1.12.0', '--', '00037', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 340500000, 17, '1135000000', '18246000', '10%', '1824600', '0', '0', '16421400', 'Enam Belas Juta Empat Ratus Dua Puluh Satu Ribu Empat Ratus', '2022-02-21', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '95000000', '2021', NULL, 1, 2, 'PK', 1, 1, 1, 113, 'KOPERASI KARYAWAN PT. BANK RIAU', 'Jl. Bupati Tulus, No. 07, Rengat, Kab. Indragiri Hulu, Riau', NULL, 1),
(41, '07.02.22.00034.02.1.12.0', '--', '00034', 'Jan', '2020-10-01', '01', 'PLAFOND KREDIT', 15000000, 1, '20000000', '712000', '0%', '0', '0', '0', '712000', 'Tujuh Ratus Dua Belas Ribu', '2022-02-21', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '20000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 45, 'Bank Riau Kepri Cabang Pembantu Kota Baru', 'Pasar Kota Baru Kec. Batang Gansal Kab. Inhil', NULL, 1),
(42, '07.02.22.00037.02.1.12.0', '--', '00037', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 2, 'PK', 2, 1, 2, 32, 'Bank Riau Kepri Cabang Pembantu Tuanku Tambusai', 'Jl. Tuanku Tambusai No. 135 B Pekanbaru', NULL, 0),
(43, '07.02.22.00038.02.1.12.0', '--', '00038', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 38500000, 2, '105000000', '1603000', '10%', '160300', '0', '0', '1442700', 'Satu Juta Empat Ratus Empat Puluh Dua Ribu Tujuh Ratus', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '70000000', '2021', NULL, 1, 2, 'PK', 1, 1, 1, 95, 'Bank Riau Kepri Kedai Meral', 'Jl. A. Yani No. 12 Kel. Meral Kota Kec. Meral Kab. Karimun Kepri', NULL, 1),
(44, '07.02.22.00039.02.1.12.0', '--', '00039', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 15000000, 1, '30000000', '732000', '10%', '73200', '0', '0', '658800', 'Enam Ratus Lima Puluh Delapan Ribu Delapan Ratus', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '30000000', '2021', NULL, 1, 2, 'PK', 1, 1, 2, 96, 'Bank Riau Kepri Kedai Bandar Sei Kijang', 'JL. Lintas Timur KM 34 Kel. Sei Kijang Kec. Bandar Sei Kijang Pelalawan', NULL, 1),
(45, '07.02.22.00040.02.1.12.0', '--', '00040', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 250000000, 1, '500000000', '16400000', '10%', '1640000', '0', '0', '14760000', 'Empat Belas Juta Tujuh Ratus Enam Puluh  Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '500000000', '2020', NULL, 1, 2, 'PK', 1, 1, 2, 11, 'Bank Riau Kepri Cabang Tanjung Balai Karimun', 'Jl. Pertambangan No. 23A Tj. Balai Karimun', NULL, 1),
(46, '07.02.22.00041.02.1.12.0', '--', '00041', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 50000000, 1, '100000000', '3650000', '10%', '365000', '0', '0', '3285000', 'Tiga Juta Dua Ratus Delapan Puluh Lima Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '100000000', '2021', NULL, 1, 2, 'PK', 2, 1, 2, 12, 'Bank Riau Kepri Cabang Pangkalan Kerinci', 'Jl. Maharaja Indra No. 490', NULL, 1),
(47, '07.02.22.00042.02.1.12.0', '--', '00042', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 25000000, 1, '50000000', '925000', '10%', '92500', '0', '0', '832500', 'Delapan Ratus Tiga Puluh Dua Ribu Lima Ratus', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '50000000', '2021', NULL, 1, 2, 'PK', 1, 1, 2, 48, 'Bank Riau Kepri Kedai Sei Apit', 'Jl. Hangtuah, Pasar Sei Apit', NULL, 1),
(48, '07.02.22.00043.02.1.12.0', '--', '00043', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 87500000, 2, '175000000', '5740000', '10%', '574000', '0', '0', '5166000', 'Lima Juta Seratus Enam Puluh Enam Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '50000000', '2021', NULL, 1, 2, 'PK', 1, 1, 1, 15, 'Bank Riau Kepri Cabang Pasir Pangarayan', 'Jl. Pasar Senen Pasir Pangarayan', NULL, 1),
(49, '07.02.22.00044.02.1.12.0', '--', '00044', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 245000000, 1, '490000000', '5684000', '10%', '568400', '0', '0', '5115600', 'Lima Juta Seratus Lima Belas Ribu Enam Ratus', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '490000000', '2021', NULL, 1, 2, 'PK', 1, 1, 2, 115, 'Bank Riau Kepri Cabang Pembantu Sungai Pakning', 'Jl. Jend. Sudirman No. 149, Sungai Pakning', NULL, 1),
(50, '07.02.22.00045.02.1.12.0', '--', '00045', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 30000000, 1, '100000000', '1680000', '10%', '168000', '0', '0', '1512000', 'Satu Juta Lima Ratus Dua Belas Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '100000000', '2021', NULL, 1, 2, 'PK', 1, 1, 2, 43, 'Bank Riau Kepri Cabang Pembantu Tarempa', 'Jl. Hang Tuah, Tarempa, Kab. Anambas', NULL, 1),
(51, '07.02.22.00046.02.1.12.0', '--', '00046', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 2, 'PK', 1, 1, 2, 8, 'Bank Riau Kepri Cabang Bengkalis', 'Jl. Pahlawan No. 15A Bengkalis', NULL, 0),
(52, '07.02.22.00047.02.1.12.0', '--', '00047', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 438000000, 6, '584000000', '32158900', '0%', '0', '0', '0', '32158900', 'Tiga Puluh Dua Juta Seratus Lima Puluh Delapan Ribu Sembilan Ratus', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '99000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 8, 'Bank Riau Kepri Cabang Bengkalis', 'Jl. Pahlawan No. 15A Bengkalis', NULL, 1),
(53, '07.02.22.00048.02.1.12.0', '--', '00048', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 300000000, 1, '600000000', '21900000', '0%', '0', '0', '0', '21900000', 'Dua Puluh Satu Juta Sembilan Ratus  Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '600000000', '2021', NULL, 1, 2, 'PK', 2, 1, 2, 8, 'Bank Riau Kepri Cabang Bengkalis', 'Jl. Pahlawan No. 15A Bengkalis', NULL, 1),
(54, '07.02.22.00049.02.1.12.0', '--', '00049', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 67500000, 1, '135000000', '4428000', '10%', '442800', '0', '0', '3985200', 'Tiga Juta Sembilan Ratus Delapan Puluh Lima Ribu Dua Ratus', '2022-02-22', NULL, NULL, 4, NULL, NULL, 0, '135000000', '2021', NULL, 1, 2, 'PK', 1, 1, 2, 7, 'Bank Riau Kepri Cabang Pasar Pusat', 'Jl. Jend. Sudirman Plaza Sukaramai Lt.1 Blok TA 04, Pekanbaru', NULL, 0),
(55, '07.02.22.00049.02.1.12.0', '--', '00049', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 264000000, 6, '528000000', '14034700', '0%', '0', '0', '0', '14034700', 'Empat Belas Juta Tiga Puluh Empat Ribu Tujuh Ratus', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '99000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 55, 'Bank Riau Kepri Kedai Pasar Sukaramai (Suram)', 'Pasar Sukramai, Desa Sukaramai-Tapung Hulu, Kampar', NULL, 1),
(56, '07.02.22.00050.02.1.12.0', '--', '00050', 'JAN', '2021-01-01', '01', 'PLAFOND KREDIT', 237500000, 2, '475000000', '14320000', '10%', '1432000', '0', '0', '12888000', 'Dua Belas Juta Delapan Ratus Delapan Puluh Delapan Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 4, NULL, 6, 0, '325000000', '2021', NULL, 1, 2, 'PK', 1, 1, 1, 56, 'Bank Riau Kepri Kedai Pasar Tanjung Pinang', 'Jl. Lorong Pelontar II Kel. Tanjung Pinang Kota', NULL, 1),
(57, '07.02.22.00051.02.1.12.0', '--', '00051', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 39000000, 2, '130000000', '2081000', '0%', '0', '0', '0', '2081000', 'Dua Juta Delapan Puluh Satu Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '80000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 58, 'Bank Riau Kepri Kedai Kabun', 'Jl. Lintas Pekanbaru-Pasir Pangarayan Kec. Kabun Rohul', NULL, 1),
(58, '07.02.22.00052.02.1.12.0', '--', '00052', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 112500000, 1, '375000000', '6300000', '0%', '0', '0', '0', '6300000', 'Enam Juta Tiga Ratus  Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '375000000', '2022', NULL, 1, 2, 'PK', 1, 1, 2, 66, 'Bank Riau Kepri Kedai Rantau Kasai', 'Jl. Sultan Zainal Abidin, Rantau Kasai Kec. Tambusai Utara, Kab. Rokan Hulu', NULL, 1),
(59, '07.02.22.00053.02.1.12.0', '--', '00053', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 18000000, 1, '60000000', '852000', '0%', '0', '0', '0', '852000', 'Delapan Ratus Lima Puluh Dua Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '60000000', '2022', NULL, 1, 2, 'PK', 1, 1, 2, 50, 'Bank Riau Kepri Kedai Minas', 'Jl. Yos Sudarso Kel. Minas Raya Minas', NULL, 1),
(60, '07.02.22.00054.02.1.12.0', '--', '00054', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 175000000, 6, '350000000', '8773000', '10%', '877300', '0', '0', '7895700', 'Tujuh Juta Delapan Ratus Sembilan Puluh Lima Ribu Tujuh Ratus', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '80000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 99, 'Bank Riau Kepri Kedai Sungai Sembilan', 'Kab. Bengkalis\"', NULL, 1),
(61, '07.02.22.00055.02.1.12.0', '--', '00055', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 275000000, 5, '450000000', '17535000', '10%', '1753500', '0', '0', '15781500', 'Lima Belas Juta Tujuh Ratus Delapan Puluh Satu Ribu Lima Ratus', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '50000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 64, 'Bank Riau Kepri Kedai Pasar Tandun', 'Jl. Raya Tandun- Ujung Batu, Kec. Tandun, Kab, Rokan Hulu', NULL, 1),
(62, '07.02.22.00056.02.1.12.0', '--', '00056', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 130000000, 3, '260000000', '7604000', '0%', '0', '0', '0', '7604000', 'Tujuh Juta Enam Ratus Empat Ribu', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '60000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 56, 'Bank Riau Kepri Kedai Pasar Tanjung Pinang', 'Jl. Lorong Pelontar II Kel. Tanjung Pinang Kota', NULL, 1),
(63, '07.02.22.00057.02.1.12.0', '--', '00057', 'Jan', '2021-01-01', '01', 'PLAFOND KREDIT', 59700000, 2, '199000000', '3291100', '0%', '0', '0', '0', '3291100', 'Tiga Juta Dua Ratus Sembilan Puluh Satu Ribu Seratus', '2022-02-22', '2022-03-01', '2022-03-01', 9, NULL, 6, 0, '99000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 30, 'Bank Riau Kepri Cabang Pembantu Kandis', 'Jl. Lintas Pekanbaru-Duri', NULL, 1),
(64, '07.02.22.00058.02.1.12.0', '--', '00058', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 692500000, 7, '2073000000', '48086700', '10%', '4808670', '0', '0', '43278030', 'Empat Puluh Tiga Juta Dua Ratus Tujuh Puluh Delapan Ribu Tiga Puluh', '2022-02-23', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '70000000', '2021', NULL, 1, 2, 'PK', 2, 1, 1, 12, 'Bank Riau Kepri Cabang Pangkalan Kerinci', 'Jl. Maharaja Indra No. 490', NULL, 1),
(66, '07.02.22.00059.02.1.12.0', '--', '00059', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 192500000, 1, '385000000', '20636000', '10%', '2063600', '0', '0', '18572400', 'Delapan Belas Juta Lima Ratus Tujuh Puluh Dua Ribu Empat Ratus', '2022-02-24', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '385000000', '2022', NULL, 1, 2, 'PK', 2, 1, 2, 32, 'Bank Riau Kepri Cabang Pembantu Tuanku Tambusai', 'Jl. Tuanku Tambusai No. 135 B Pekanbaru', NULL, 1),
(67, '07.02.22.00060.02.1.12.0', '--', '00060', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 15000000, 1, '30000000', '900000', '10%', '90000', '0', '0', '810000', 'Delapan Ratus Sepuluh Ribu', '2022-02-24', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '30000000', '2021', NULL, 1, 2, 'PK', 2, 1, 2, 8, 'Bank Riau Kepri Cabang Bengkalis', 'Jl. Pahlawan No. 15A Bengkalis', NULL, 1),
(68, '07.02.22.00061.02.1.12.0', '--', '00061', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 9000000, 1, '30000000', '426000', '10%', '42600', '0', '0', '383400', 'Tiga Ratus Delapan Puluh Tiga Ribu Empat Ratus', '2022-02-24', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '30000000', '2022', NULL, 1, 2, 'PK', 1, 1, 2, 97, 'Bank Riau Kepri Cabang Pembantu Bintan Center', 'Jl. DI. Panjaitan KM 9 No. 5-6 Kec. Tanjung Pinang Timur, Tanjung Pinang', NULL, 1),
(70, '07.02.22.00062.02.1.12.0', '--', '00062', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 2, 'PK', 1, 1, 1, 32, 'Bank Riau Kepri Cabang Pembantu Tuanku Tambusai', 'Jl. Tuanku Tambusai No. 135 B Pekanbaru', NULL, 0),
(71, '07.02.22.00063.03.1.12.0', '--', '00063', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 149500000, 5, '290000000', '8457000', '10%', '845700', '0', '0', '7611300', 'Tujuh Juta Enam Ratus Sebelas Ribu Tiga Ratus', '2022-03-01', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '50000000', '2022', NULL, 1, 2, 'PK', 1, 1, 1, 66, 'Bank Riau Kepri Kedai Rantau Kasai', 'Jl. Sultan Zainal Abidin, Rantau Kasai Kec. Tambusai Utara, Kab. Rokan Hulu', NULL, 1),
(72, '07.02.22.00064.03.1.12.0', '--', '00064', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 20000000, 2, '50000000', '1407500', '10%', '140750', '0', '0', '1266750', 'Satu Juta Dua Ratus Enam Puluh Enam Ribu Tujuh Ratus Lima Puluh', '2022-03-01', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '25000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 95, 'Bank Riau Kepri Kedai Meral', 'Jl. A. Yani No. 12 Kel. Meral Kota Kec. Meral Kab. Karimun Kepri', NULL, 1),
(73, '07.02.22.00065.03.1.12.0', '--', '00065', 'JAN', '2020-12-17', '01', 'PLAFOND KREDIT', 165000000, 3, '220000000', '12762000', '10%', '1276200', '0', '0', '11485800', 'Sebelas Juta Empat Ratus Delapan Puluh Lima Ribu Delapan Ratus', '2022-03-01', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '50000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 44, 'Bank Riau Kepri Cabang Pembantu Daik Lingga', 'Jl. Istana Robat Daik, Kec. Lingga, Kab. Lingga Kepri', NULL, 1),
(74, '07.02.22.00066.03.1.12.0', '--', '00066', 'JAN', '2020-12-01', '01', 'PLAFOND KREDIT', 78750000, 3, '105000000', '4956000', '10%', '495600', '0', '0', '4460400', 'Empat Juta Empat Ratus Enam Puluh  Ribu Empat Ratus', '2022-03-01', '2022-03-01', '2022-03-01', 6, NULL, 6, 0, '40000000', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 92, 'Bank Riau Kepri Butik Mall Ciputra Seraya', 'Mall Ciputra Seraya Lt. 2 Jl. Riau, Pekanbaru', NULL, 1),
(75, '07.02.22.00067.03.1.12.0', '--', '00067', 'JAN', '2020-12-12', '01', 'PLAFOND KREDIT', 241425557, 14, '437176732', '7853203', '10%', '7853203', '0', '0', '70678827', 'Tujuh Puluh  Juta Enam Ratus Tujuh Puluh Delapan Ribu Delapan Ratus Dua Puluh Tujuh', '2022-03-01', NULL, NULL, 6, NULL, NULL, 0, '9237286', '2022', NULL, 1, 2, 'PK', 2, 1, 1, 66, 'Bank Riau Kepri Kedai Rantau Kasai', 'Jl. Sultan Zainal Abidin, Rantau Kasai Kec. Tambusai Utara, Kab. Rokan Hulu', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblgpp`
--

CREATE TABLE `tblgpp` (
  `GPPid` int(11) NOT NULL,
  `GPPnama` varchar(255) DEFAULT NULL,
  `GPPkode` varchar(10) DEFAULT NULL,
  `KPPid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgpp`
--

INSERT INTO `tblgpp` (`GPPid`, `GPPnama`, `GPPkode`, `KPPid`) VALUES
(1, 'PT. BANK RIAU KEPRI', 'BRK', 1),
(2, 'PT. SARANA RIAU VENTURA', 'SRV', 2),
(3, 'PT. BANK YUDHA BHAKTI', 'BYB', 1),
(4, 'BPR UNISRITAMA', 'USR', 1),
(5, 'KOPERASI KARYAWAN PT. BANK RIAU', 'KKAR', 2),
(6, 'PT. PERMODALAN EKONOMI RAKYAT', 'PER', 2),
(7, 'PT. BANK PERKREDITAN RAKYAT HARTA MANDIRI', 'HM', 1),
(8, 'PT. BANK PERKREDITAN RAKYAT ARSHAM SEJAHTERA', 'AS', 1),
(9, 'PT. BPR ANUGRAH BINTANG SEJAHTERA', 'ABS', 1),
(10, 'PT. BPR TUNAS MITRA MANDIRI', 'TMM', 1),
(11, 'PT. BPR CEMPAKA WADAH SEJAHTERA', 'CWS', 1),
(12, 'PT. BPR INDRA ARTA', 'IA', 1),
(13, 'PT. BPR PAYUNG NEGERI BESTARI', 'PNB', 1),
(14, 'PT. BPR DUTA PERDANA', 'DP', 1),
(15, 'PT. BPR ARTHA MARGAHAYU', 'AM', 1),
(16, 'PT. BPR UNIVERSAL KARYA MANDIRI', 'UKMQ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblijp`
--

CREATE TABLE `tblijp` (
  `IJPid` int(11) NOT NULL,
  `CVRid` int(11) DEFAULT NULL,
  `JWKid` int(11) NOT NULL,
  `IJPrate` varchar(11) DEFAULT NULL,
  `OPKid` int(11) DEFAULT NULL,
  `PKSid` int(11) DEFAULT NULL,
  `PKRJid` int(11) DEFAULT NULL,
  `IJPumur` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblijp`
--

INSERT INTO `tblijp` (`IJPid`, `CVRid`, `JWKid`, `IJPrate`, `OPKid`, `PKSid`, `PKRJid`, `IJPumur`) VALUES
(1, 1, 1, '0.65', 1, NULL, NULL, NULL),
(2, 1, 2, '1.07', 1, NULL, NULL, NULL),
(3, 1, 3, '1.42', 1, NULL, NULL, NULL),
(4, 1, 4, '1.68', 1, NULL, NULL, NULL),
(5, 1, 5, '1.89', 1, NULL, NULL, NULL),
(6, 1, 6, '2.50', 1, NULL, NULL, NULL),
(7, 2, 1, '1.16', 1, NULL, NULL, NULL),
(8, 2, 2, '1.85', 1, NULL, NULL, NULL),
(9, 2, 3, '2.44', 1, NULL, NULL, NULL),
(10, 2, 4, '2.91', 1, NULL, NULL, NULL),
(11, 2, 5, '3.28', 1, NULL, NULL, NULL),
(12, 2, 6, '4.28', 1, NULL, NULL, NULL),
(13, 3, 1, '1.95', 1, NULL, NULL, NULL),
(14, 3, 2, '3.15', 1, NULL, NULL, NULL),
(15, 3, 3, '4.16', 1, NULL, NULL, NULL),
(16, 3, 4, '4.97', 1, NULL, NULL, NULL),
(17, 3, 5, '5.55', 1, NULL, NULL, NULL),
(18, 3, 6, '6.90', 1, NULL, NULL, NULL),
(19, 1, 1, '0.86', 2, NULL, NULL, NULL),
(20, 1, 2, '1.48', 2, NULL, NULL, NULL),
(21, 1, 3, '1.98', 2, NULL, NULL, NULL),
(22, 1, 4, '2.42', 2, NULL, NULL, NULL),
(23, 1, 5, '2.80', 2, NULL, NULL, NULL),
(24, 1, 6, '3.58', 2, NULL, NULL, NULL),
(25, 2, 1, '1.37', 2, NULL, NULL, NULL),
(26, 2, 2, '2.26', 2, NULL, NULL, NULL),
(27, 2, 3, '3.00', 2, NULL, NULL, NULL),
(28, 2, 4, '3.65', 2, NULL, NULL, NULL),
(29, 2, 5, '4.19', 2, NULL, NULL, NULL),
(30, 2, 6, '5.36', 2, NULL, NULL, NULL),
(31, 3, 1, '2.16', 2, NULL, NULL, NULL),
(32, 3, 2, '3.56', 2, NULL, NULL, NULL),
(33, 3, 3, '4.72', 2, NULL, NULL, NULL),
(34, 3, 4, '5.71', 2, NULL, NULL, NULL),
(35, 3, 5, '6.46', 2, NULL, NULL, NULL),
(36, 3, 6, '7.98', 2, NULL, NULL, NULL),
(37, 4, 1, '5.46', 3, NULL, 1, NULL),
(38, 4, 2, '9.10', 3, NULL, 1, NULL),
(39, 4, 3, '11.50', 3, NULL, 1, NULL),
(40, 4, 4, '15.93', 3, NULL, 1, NULL),
(41, 4, 5, '18.20', 3, NULL, 1, NULL),
(42, 4, 6, '21.84', 3, NULL, 1, NULL),
(43, 4, 7, '25.48', 3, NULL, 1, NULL),
(44, 4, 8, '29.12', 3, NULL, 1, NULL),
(45, 4, 9, '32.76', 3, NULL, 1, NULL),
(46, 4, 10, '36.40', 3, NULL, 1, NULL),
(47, 4, 11, '39.80', 3, NULL, 1, NULL),
(48, 4, 12, '43.20', 3, NULL, 1, NULL),
(49, 4, 13, '46.30', 3, NULL, 1, NULL),
(50, 4, 14, '49.20', 3, NULL, 1, NULL),
(51, 4, 15, '52.80', 3, NULL, 1, NULL),
(52, 4, 1, '4.55', 3, NULL, 2, NULL),
(53, 4, 2, '6.83', 3, NULL, 2, NULL),
(54, 4, 3, '9.10', 3, NULL, 2, NULL),
(55, 4, 4, '11.38', 3, NULL, 2, NULL),
(56, 4, 5, '13.65', 3, NULL, 2, NULL),
(57, 4, 6, '16.38', 3, NULL, 2, NULL),
(58, 4, 7, '18.66', 3, NULL, 2, NULL),
(59, 4, 8, '20.93', 3, NULL, 2, NULL),
(60, 4, 9, '23.21', 3, NULL, 2, NULL),
(61, 4, 10, '25.48', 3, NULL, 2, NULL),
(62, 4, 11, '27.98', 3, NULL, 2, NULL),
(63, 4, 12, '30.46', 3, NULL, 2, NULL),
(64, 4, 13, '32.94', 3, NULL, 2, NULL),
(65, 4, 14, '35.41', 3, NULL, 2, NULL),
(66, 4, 15, '37.52', 3, NULL, 2, NULL),
(67, 4, 1, '9.75', 3, NULL, 3, NULL),
(68, 4, 2, '18.76', 3, NULL, 3, NULL),
(69, 4, 3, '27.40', 3, NULL, 3, NULL),
(70, 4, 4, '36.24', 3, NULL, 3, NULL),
(71, 4, 5, '45.41', 3, NULL, 3, NULL),
(72, 4, 1, '3.18', 3, NULL, 4, NULL),
(73, 4, 2, '4.65', 3, NULL, 4, NULL),
(74, 4, 3, '6.55', 3, NULL, 4, NULL),
(75, 4, 4, '8.56', 3, NULL, 4, NULL),
(76, 4, 5, '10.08', 3, NULL, 4, NULL),
(77, 4, 6, '12.40', 3, NULL, 4, NULL),
(78, 4, 7, '13.99', 3, NULL, 4, NULL),
(79, 4, 8, '15.42', 3, NULL, 4, NULL),
(80, 4, 9, '16.82', 3, NULL, 4, NULL),
(81, 4, 10, '18.11', 3, NULL, 4, NULL),
(82, 4, 11, '20.61', 3, NULL, 4, NULL),
(83, 4, 12, '23.11', 3, NULL, 4, NULL),
(84, 4, 13, '25.61', 3, NULL, 4, NULL),
(85, 4, 14, '28.10', 3, NULL, 4, NULL),
(86, 4, 15, '30.60', 3, NULL, 4, NULL),
(87, 4, 16, '33.10', 3, NULL, 4, NULL),
(88, 4, 17, '35.53', 3, NULL, 4, NULL),
(89, 4, 18, '37.80', 3, NULL, 4, NULL),
(90, 4, 19, '39.70', 3, NULL, 4, NULL),
(91, 4, 20, '42.20', 3, NULL, 4, NULL),
(92, 4, 21, '44.30', 3, NULL, 4, NULL),
(93, 4, 22, '46.60', 3, NULL, 4, NULL),
(94, 4, 23, '48.70', 3, NULL, 4, NULL),
(95, 4, 24, '50.80', 3, NULL, 4, NULL),
(96, 4, 25, '52.70', 3, NULL, 4, NULL),
(97, 4, 1, '6.09', 3, NULL, 5, NULL),
(98, 4, 2, '10.57', 3, NULL, 5, NULL),
(99, 4, 3, '17.88', 3, NULL, 5, NULL),
(100, 4, 4, '24.05', 3, NULL, 5, NULL),
(101, 4, 5, '31.26', 3, NULL, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblja`
--

CREATE TABLE `tblja` (
  `JAid` int(11) NOT NULL,
  `JAjenisagunan` text NOT NULL,
  `JAnilaitasaksi` int(11) NOT NULL,
  `JAnilaidasar` int(11) NOT NULL,
  `JAnilaitasaksitanah` int(255) DEFAULT NULL,
  `JAnilaitasaksibangunan` int(255) DEFAULT NULL,
  `JAnilaidasartanah` int(255) DEFAULT NULL,
  `JAnilaidasarbangunan` int(255) DEFAULT NULL,
  `CBCPid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblja`
--

INSERT INTO `tblja` (`JAid`, `JAjenisagunan`, `JAnilaitasaksi`, `JAnilaidasar`, `JAnilaitasaksitanah`, `JAnilaitasaksibangunan`, `JAnilaidasartanah`, `JAnilaidasarbangunan`, `CBCPid`) VALUES
(5, '1. sebidang tanah kapling perkebunan kelapa sawit seluas 19.922 M2 dengan bukti kepemilikan SHM No.05022						\r\nTgl 27-12-2012  yang terletak di Desa Tambak, Kec Langgam, Kab Pelelawan an. BUDI ARTIFUL (Calon Terjamin)<br><br>					\r\n', 205860667, 164688533, 10333, 0, 0, 0, 5),
(6, '2. sebidang tanah kapling perkebunan kelapa sawit seluas 19.922 M2 dengan bukti kepemilikan SHM No.05027						\r\nTgl 27-12-2012  yang terletak di Desa Tambak, Kec Langgam, Kab Pelelawan an. BUDI ARTIFUL (Calon Terjamin)<br><br>				\r\n', 205860667, 164688533, 10333, 0, 0, 0, 5),
(8, '<br>sebidang tanah kapling perkebunan kelapa sawit seluas 20.000 M2 dengan bukti kepemilikan SHM No.05036', 178731000, 142984800, 9000, 0, 0, 0, 5),
(9, '<br>sebidang tanah kapling perkebunan kelapa sawit seluas 19.987 M2 dengan bukti kepemilikan SHM No.05035', 180000000, 144000000, 9000, 0, 0, 0, 5),
(10, '<br>LDFBOSDLSDNLSNDGKLNWERLG<br>', 179833000, 143866400, 9000, 0, 0, 0, 5),
(11, '<br>LDFBOSDLSDNLSNDGKLNWERLG<br>', 180000000, 144000000, 9000, 0, 0, 0, 5),
(12, '<br>LDFBOSDLSDNLSNDGKLNWERLG<br>', 205299600, 164239680, 10300, 0, 0, 0, 5),
(13, '<br>LDFBOSDLSDNLSNDGKLNWERLG<br>', 202886000, 162308800, 10167, 0, 0, 0, 5),
(14, '<br>LDFBOSDLSDNLSNDGKLNWERLG<br>', 100751667, 80601334, 5083, 0, 0, 0, 5),
(15, '<br>LDFBOSDLSDNLSNDGKLNWERLG<br>', 100497500, 80398000, 5083, 0, 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbljsp`
--

CREATE TABLE `tbljsp` (
  `JSPid` int(11) NOT NULL,
  `JSPjenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljsp`
--

INSERT INTO `tbljsp` (`JSPid`, `JSPjenis`) VALUES
(1, 'Kolektif'),
(2, 'By Person');

-- --------------------------------------------------------

--
-- Table structure for table `tbljwk`
--

CREATE TABLE `tbljwk` (
  `JWKid` int(11) NOT NULL,
  `JWKsatu` int(255) DEFAULT NULL,
  `JWKdua` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljwk`
--

INSERT INTO `tbljwk` (`JWKid`, `JWKsatu`, `JWKdua`) VALUES
(1, 0, 12),
(2, 13, 24),
(3, 25, 36),
(4, 37, 48),
(5, 49, 60),
(6, 61, 72),
(7, 73, 84),
(8, 85, 96),
(9, 97, 108),
(10, 109, 120),
(11, 121, 132),
(12, 133, 144),
(13, 145, 156),
(14, 157, 168),
(15, 169, 180),
(16, 181, 192),
(17, 193, 204),
(18, 205, 216),
(19, 217, 228),
(20, 229, 240),
(21, 241, 252),
(22, 253, 264),
(23, 265, 276),
(24, 277, 288),
(25, 289, 300);

-- --------------------------------------------------------

--
-- Table structure for table `tblklaim`
--

CREATE TABLE `tblklaim` (
  `idKlaim` int(11) NOT NULL,
  `tglmasuk` date DEFAULT NULL,
  `tglberkas` date DEFAULT NULL,
  `tglklaimbayar` date DEFAULT NULL,
  `PPnama` varchar(255) DEFAULT NULL,
  `PPalamat` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `sertifikat` varchar(255) DEFAULT NULL,
  `nmterjamin` varchar(255) DEFAULT NULL,
  `plafond` varchar(255) DEFAULT NULL,
  `nilai_jaminan` varchar(255) DEFAULT NULL,
  `coverage` varchar(255) DEFAULT NULL,
  `nominal_klaim` varchar(255) DEFAULT NULL,
  `subrogasi` varchar(255) DEFAULT NULL,
  `agunan` varchar(255) DEFAULT NULL,
  `taksasi_agunan` varchar(255) DEFAULT NULL,
  `Jkwaktu` varchar(255) DEFAULT NULL,
  `tglawal` date DEFAULT NULL,
  `tglakhir` date DEFAULT NULL,
  `macet` varchar(255) DEFAULT NULL,
  `sektor` varchar(255) DEFAULT NULL,
  `cover_reas` varchar(255) DEFAULT NULL,
  `klaim_reas` varchar(255) DEFAULT NULL,
  `broker` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblklaim`
--

INSERT INTO `tblklaim` (`idKlaim`, `tglmasuk`, `tglberkas`, `tglklaimbayar`, `PPnama`, `PPalamat`, `produk`, `sertifikat`, `nmterjamin`, `plafond`, `nilai_jaminan`, `coverage`, `nominal_klaim`, `subrogasi`, `agunan`, `taksasi_agunan`, `Jkwaktu`, `tglawal`, `tglakhir`, `macet`, `sektor`, `cover_reas`, `klaim_reas`, `broker`, `status`, `no_telp`) VALUES
(691, '2021-02-26', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN 001/005 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00206.05.1.12.0', 'PONIYEM', '99000000', '74250000', '0.75', '58237628', '0', 'TANAH & BANGUNAN', '72000000', '60', '2019-04-04', '2024-04-04', 'BERKURANGNYA KEMAMPUAN BAYAR', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(692, '2021-02-26', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN 001/005 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00363.09.1.12.0', 'SUKARMIN', '99000000', '74250000', '0.75', '62462475', '0', 'TANAH & BANGUNAN', '86400000', '60', '2019-08-22', '2024-08-22', 'BERKURANGNYA KEMAMPUAN BAYAR', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(693, '2021-02-26', NULL, NULL, 'KEDAI PUJUD', 'HULU BANGKO RT 001 RW 001 KEL. PUJUD KEC. PUJUD', 'PRODUKTIF', '07.02.19.00027.02.1.12.0', 'WASDI', '80000000', '60000000', '0.75', '53101886', NULL, NULL, '58344000', '60', '2019-01-07', '2024-01-07', 'BERKURANGNYA KEMAMPUAN BAYAR', 'PERKEBUNAN KELAPA SAWIT', '0', '0', NULL, 0, NULL),
(694, '2021-02-19', NULL, NULL, 'KEDAI TELUK BELITUNG', 'JL. PUSARA RT 03 RW 02 KEL. BAGAN MELIBUR KEC. MERBAU KAB. KEP. MERANTI', 'PRODUKTIF', '07.02.19.00094.03.1.12.0', 'JUMARIAH', '29935010', '22451258', '0.75', '21645885', '0', 'TANAH', '33821600', '60', '2019-02-25', '2024-02-25', 'USAHA TUTUP', 'USAHA PONSEL', NULL, NULL, NULL, 0, NULL),
(695, '2021-02-18', NULL, NULL, 'CABANG PANGKALAN KERINCI', 'JL. HANGTUAH XI RT 002 RW 005 KEL. MAKMUR KEC. PANGKALAN KERINCI KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.20.00171.05.1.12.0', 'RATMAN', '80000000', '24000000', '0.3', '64420884', 'TIDAK ADA', 'TANAH PERKEBUNAN', '208000000', '36', '2020-04-17', '2023-04-17', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.95', '0', NULL, 0, NULL),
(696, '2021-02-17', NULL, NULL, 'CABANG PEMBANTU TANGKERANG', 'JL.UKA PERUM GARUDA PERMAI TP II BLOK A-81 RT 004 RW 009 KEL. SIMPANG TIGA KEC. BUKIT RAYA KOTA PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.02.18.00534.11.1.12.0', 'ELNITA', '125000000', '125000000', '1', '104077940', 'TIDAK ADA', 'SK', '0', '108', '2018-08-08', '2027-08-08', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '98874043', 'BOARE', 0, NULL),
(697, '2021-02-16', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'KUBU DIENAU RT/RW 002/00 KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02a.18.00425.10.1.12.0', 'SISWANTO', '240000000', '240000000', '1', '229101381', '0', 'SK', '0', '180', '2018-10-22', '2033-10-22', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '217646311.95', 'BOARE', 0, NULL),
(698, '2021-02-10', NULL, NULL, 'CABANG PEMBANTU SENAPELAN', 'JL. MANGGA II NO. 16 B RT 004/002 KEL. KAMPUNG TENGAH KEC. SUKAJADI KOTA PEKANBARU', 'PRODUKTIF KUR', '07.02.19.24079.12.4.12.0', 'NINA SARIPITA', '30000000', '22500000', '0.75', '18831345', '0', 'BPKB', '14400000', '36', '2019-12-13', '2022-12-13', 'USAHA TUTUP', 'USAHA JUAL REMPAH-REMPAH', '0.95', '17889777.75', 'BOARE', 0, NULL),
(699, '2021-02-05', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. GERBANG SARI RT 002 RW 003 KEL. PEMATANG REBA KEC. RENGAT BARAT, KAB. INDRAGIRI HULU', 'KONSUMTIF ', '07.02a.18.00532.11.1.12.0', 'ZULKARNAIN', '80000000', '80000000', '1', '58192339', 'TIDAK ADA', 'SK', '0', '60', '2018-11-13', '2023-11-13', NULL, 'PEGAWAI NEGERI SIPIL', '0.95', '55282722.05', 'BOARE', 0, NULL),
(700, '2021-02-05', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'RIMBO KEMPAS RT 009 RW 006 KEL. PASIR AGUNG KEC. BANGUN PURBA KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02c.20.01219.03.1.12.0', 'JUMAWAL', '150000000', '150000000', '1', '139186242', 'TIDAK ADA', 'SK', '0', '84', '2020-03-06', '2027-03-06', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '132226929.9', 'BOARE', 0, NULL),
(701, '2021-02-05', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. SADAR KAMPUNG PADANG RT 001 RW 001 KEL. RAMBAH TENGAH UTARA KEC. RAMBAH KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.04221.07.1.12.0', 'NURBAYA', '110000000', '110000000', '1', '100516550', 'TIDAK ADA', 'SK', '0', '120', '2019-07-11', '2029-07-11', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '95490722.5', 'BOARE', 0, NULL),
(702, '2021-01-29', NULL, NULL, 'KEDAI RANTAU KASAI', 'DUSUN III MOMPA MAHATO RT/RW 004/002 KEL/DESA MAHATO KEC. TAMBUSAI UTARA KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.18.00069.02.4.12.0', 'MOCHAMAD KHOLIK', '80000000', '60000000', '0.75', '21612512', '0', NULL, '0', '36', '2018-02-26', '2021-02-26', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(703, '2021-01-29', NULL, NULL, 'KEDAI RANTAU KASAI', 'MAHATO RT/RW 005/002 KEL/DESA MAHATO KEC. TAMBUSAI UTARA KAB. ROKAN HULU', 'PRODUKTIF', '07.02.18.00396.10.1.12.0', 'JUMALI', '35000000', '17500000', '0.5', '7337966', '0', 'TANAH PERKEBUNAN', '50000000', '36', '2018-09-27', '2021-09-27', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(704, '2021-01-29', NULL, NULL, 'KEDAI RANTAU KASAI', 'MEDANG DAMAI DESA MAHATO KEL/DESA MAHATO KEC. TAMBUSAI UTARA KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.18.19678.11.4.12.0', 'ABU BAKAR SIDDIK', '100000000', '75000000', '0.75', '24989809', '0', 'TANAH PERKEBUNAN', '50000000', '36', '2018-07-26', '2021-07-26', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(705, '2021-01-29', NULL, NULL, 'KEDAI RANTAU KASAI', NULL, 'PRODUKTIF KUR', '07.02.18.00029.01.4.12.0', 'ALPI SYAHRIAL', '100000000', '75000000', '0.75', '14078574', '0', 'TANAH PERKEBUNAN', '135000000', '36', '2018-01-31', '2021-01-31', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '0', 'IGNA ASIA', 0, NULL),
(706, '2021-01-29', NULL, NULL, 'CABANG TELUK KUANTAN', 'JL. PERINTIS KEMERDEKAAN RT 001 RW 001 KEL. KOTO TALUK, KEC. KUANTAN TENGAH, KAB. KUANTAN SENGINGI', 'KONSUMTIF', '07.02.18.00334.07.1.12.0', 'MURSINI', '1500000000', '1500000000', '1', '506681825', 'TIDAK ADA', 'TANAH & BANGUNAN', '627200000', '36', '2018-02-20', '2021-02-20', 'BERKURANGNYA KEMAMPUAN BAYAR', 'KEPALA DAERAH DAN PERKEBUNAN KELAPA SAWIT', '0.5', '253340912.5', 'IGNA ASIA', 0, NULL),
(707, '2021-01-28', NULL, NULL, 'CABANG TEMBILAHAN', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.19.', 'HORMAN', '25000000', '7500000', '0.3', '12991850', 'TIDAK ADA', NULL, '0', '36', '2019-04-01', '2022-04-01', 'MENINGGAL DUNIA', NULL, '0.95', '12342257.5', 'BOARE', 0, NULL),
(708, '2021-01-27', NULL, NULL, 'KEDAI RANTAU KASAI', 'DUSUN XIII MEDANG DAMAI RT/RW 003/002  KEL/DESA MAHATO KEC. TAMBUSAI UTARA KAB. ROKAN HULU', 'PRODUKTIF', '07.02.19.00015.01.1.12.0', 'ANIK ROSITA', '100000000', '50000000', '0.5', '45455372', '0', 'TANAH PERKEBUNAN', '75000000', '120', '2019-01-18', '2029-01-18', NULL, 'PERKEBUNAN KELAPA SAWIT', '0.5', '22727686', 'IGNA ASIA', 0, NULL),
(709, '2021-01-27', NULL, NULL, 'KEDAI RANTAU KASAI', 'DUSUN XIII MEDANG DAMAI RT/RW 003/002  KEL/DESA MAHATO KEC. TAMBUSAI UTARA KAB. ROKAN HULU', 'PRODUKTIF', '07.02.19.00015.01.1.12.1', 'JUNI KURNIAWAN', '100000000', '50000000', '0.5', '45455372', '0', 'TANAH PERKEBUNAN', '77500000', '120', '2019-01-18', '2029-01-18', NULL, 'PERKEBUNAN KELAPA SAWIT', '0.5', '22727686', 'IGNA ASIA', 0, NULL),
(710, '2021-01-27', NULL, NULL, 'KEDAI RANTAU KASAI', 'MAHATO RT/RW 003/002 KEL/DESA MAHATO KEC. TAMBUSAI UTARA KAB. ROKAN HULU', 'PRODUKTIF', '07.02.19.00066.02.1.12.0', 'AHMAD FAUZI', '100000000', '30000000', '0.3', '28250402', NULL, NULL, '70000000', '120', '2019-02-25', '2029-02-25', NULL, 'PERKEBUNAN KELAPA SAWIT', '0.5', '14125201', 'IGNA ASIA', 0, NULL),
(711, '2021-01-27', NULL, NULL, 'KEDAI RANTAU KASAI', 'MAHATO RT/RW 003/002 KEL/DESA MAHATO KEC. TAMBUSAI UTARA KAB. ROKAN HULU', 'PRODUKTIF', '07.02.19.00066.02.1.12.0', 'DENTI', '100000000', '30000000', '0.3', '28040808', NULL, NULL, '0', '120', '2019-02-25', '2029-02-25', NULL, 'PERKEBUNAN KELAPA SAWIT', '0.5', '14020404', 'IGNA ASIA', 0, NULL),
(712, '2021-01-26', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. KANGKUNG NO. 46 LUBUK BAJA KOTA, LUBUK BAJA, KOTA BATAM', 'KONSUMTIF', '07.02b.19.00028.01.1.12.0', 'DIAN RELAWATI', '240000000', '240000000', '1', '223131564', 'TIDAK ADA', 'SK', '0', '120', '2019-01-07', '2029-01-07', 'HILANGNYA KEMAMPUAN BAYAR', 'KARYAWAN PT POS INDONESIA', '0.95', '211974985.8', 'BOARE', 0, NULL),
(713, '2021-01-26', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'DUSUN II 001/003 KEL. SIKIJANG KEC. LOGAS TANAH DARAT', 'KONSUMTIF (meninggal dunia)', '07.02b.19.00681.02.1.12.0', 'SUGIANTO', '340000000', '340000000', '1', '306465809', 'TIDAK ADA', 'SK', '0', '132', '2019-02-14', '2030-02-14', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '291142518.55', 'BOARE', 0, NULL),
(714, '2021-01-22', NULL, NULL, 'CABANG PEMBANTU BELILAS', 'SERESAM 002/001 DESA SERESAM KEC. SEBERIDA, KAB. INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.19.00187.05.1.12.0', 'SUWARDI', '95000000', '71250000', '0.75', '46089800', 'TIDAK ADA', 'TANAH PERKEBUNAN', NULL, '36', '2019-04-25', '2022-04-25', 'MENINGGAL DUNIA', 'TOKO BAHAN BANGUNAN', '0.95', '43785310', 'BOARE', 0, NULL),
(715, '2021-01-20', NULL, NULL, 'CABANG TELUK KUANTAN', 'JL. SISINGAMANGARAJA 005/003 KOTO TALUK KEC. KUANTAN TENGAH, KAB. KUANTAN SINGINGI', 'PRODUKTIF', '07.02.17.00073.04.1.12.0', 'FAHRUDDIN', '250000000', '125000000', '0.5', '20788154', '0', 'TANAH & BANGUNAN', '420000000', '48', '2017-03-02', '2021-03-02', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '10394077', 'IGNA ASIA', 0, NULL),
(716, '2021-01-20', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL. PUTRI HIJAU RT 003 RW 002 KEL. SINTONG KEC. TANAH PUTIH KAB. ROKAN HILIR', 'KONSUMTIF', NULL, 'MAZLAN', '320000000', '320000000', '1', '315229855', 'TIDAK ADA', 'SK', '0', '180', '2018-06-04', '2033-06-04', 'HILANGNYA KEMAMPUAN BAYAR', 'PEGAWAI NEGERI SIPIL', '0.5', '157614927.5', 'APIRE', 0, NULL),
(717, '2021-01-18', NULL, NULL, 'CABANG PEMBANTU FLAMBOYAN', 'DESA KOTO AMAN RT 002 RW 001 TAPUNG HILIR', 'PRODUKTIF (meninggal dunia)', '07.02.17.00461.11.1.12.0', 'SYAMSU AJAR', '150000000', '75000000', '0.5', '70882098', 'TIDAK ADA', 'TANAH PERKEBUNAN', '176000000', '60', '2017-11-14', '2022-11-14', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '63793888.2', 'IGNA ASIA', 0, NULL),
(718, '2021-01-18', NULL, NULL, 'KEDAI PASAR PANGKALAN KERINCI', 'DESA KEMANG RT 002 RW 002 KEC. PANGKALAN KURAS KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.20.00332.07.1.12.0', 'PAHRIAN', '100000000', '75000000', '0.75', '75510694', 'TIDAK ADA', 'TANAH PERKEBUNAN', '0', '51', '2020-05-15', '2024-08-15', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.95', '71735159.3', 'BOARE', 0, NULL),
(719, '2021-01-14', NULL, NULL, 'CABANG PEKANBARU', 'JL. PEPAYA NO. 17 RT 001 RW 003 KEL. PULAU KARAM KEC. SUKAJADI, KOTA PEKANBARU', 'KONSUMTIF', '07.02.17.00291.09.1.12.0', 'HALIMATUSAKDIAH', '100000000', '100000000', '1', '62411197', 'TIDAK ADA', NULL, NULL, '53', '2017-09-08', '2022-02-08', 'KEMAMPUAN BAYAR MENURUN', 'PEGAWAI RS BHAYANGKARA POLDA', '0.5', '31205598.5', 'INARE', 0, NULL),
(720, '2021-01-11', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'KP. BATU PERUK RT 001 RW 001 SUBI', 'KONSUMTIF ', '07.02b.19.01473.03.1.12.0', 'ARFANDI', '255000000', '255000000', '1', '235697778', 'TIDAK ADA', 'SK', '0', '84', '2019-03-19', '2026-03-19', 'HILANGNYA KEMAMPUAN BAYAR', 'PEGAWAI NEGERI SIPIL', '0.95', '223912889.1', 'BOARE', 0, NULL),
(721, '2021-01-11', NULL, NULL, 'KEDAI SEI LALA', NULL, 'PRODUKTIF', '07.02.18.00141.04.1.12.0', 'AMIRUDIN', '55000000', '41250000', '0.75', '32863884', NULL, NULL, NULL, '84', '2018-03-23', '2025-03-23', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(722, '2021-01-10', '2021-01-29', '2021-01-29', 'KEDAI PASAR PANGKALAN KERINCI', 'JL MAHARAJA INDRA Gg. 2000 RT 002 RW 002 KEL. PANGKALAN KERINCI TIMUR KEC. PANGKALAN KERINCI', 'PRODUKTIF KUR', '07.02.18.17450.07.4.12.0', 'IDRUS SYAM', '500000000', '375000000', '0.75', '93263885', '0', '-', '0', '36', '2018-03-28', '2021-03-28', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(723, '2021-01-07', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'KOMP. BIDADARI BLOK B NO. 116 RT 002 RW 017 KEL. MANGSANG, KEC. SUNGAI BEDUK ', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02755.05.1.12.0', 'DANIEL SAHAT MILAN', '200000000', '200000000', '1', '181545930', 'TIDAK ADA', 'SK', NULL, '120', '2019-05-09', '2029-05-09', 'MENINGGAL DUNIA', 'PEGAWAI POLRESTA BATAM', '0.95', '172468633.5', 'BOARE', 0, NULL),
(724, '2021-01-07', NULL, NULL, 'KEDAI PERANAP', 'DESA PUNTI KAYU 008/003 KEC. BATANG PERANAP, KAB. INDRAGIRI HULU', 'PRODUKTIF', '07.02.19.00073.03.1.12.0', 'SUPNIARTI', '75000000', '56250000', '0.75', '39075872', '0', 'TANAH PERKEBUNAN', '90000000', '48', '2019-02-13', '2023-02-13', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '19537936', 'IGNA ASIA', 0, NULL),
(725, '2021-01-07', NULL, NULL, 'KEDAI PERANAP', 'DESA PUNTI KAYU 008/003 KEC. BATANG PERANAP, KAB. INDRAGIRI HULU', 'PRODUKTIF', '07.02.19.00073.03.1.12.0', 'KHAIRUL ALI ROSAHAN', '100000000', '75000000', '0.75', '52101200', '0', 'TANAH PERKEBUNAN', '144000000', '48', '2019-02-13', '2023-02-13', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '26050600', 'IGNA ASIA', 0, NULL),
(726, '2021-01-06', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. PAHLAWAN HULU RT 006 RW 006 KEL. BAGAN HULU KEC. BANGKO KAB. ROKAN HILIR', 'KONSUMTIF (meninggal dunia)', '07.02b.19.00492.02.1.12.0', 'KHAIRUL', '170000000', '170000000', '1', '163604474', 'TIDAK ADA', 'SK', '0', '156', '2019-02-07', '2032-02-07', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '155424250.3', 'BOARE', 0, NULL),
(727, '2021-01-06', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF (meninggal dunia)', '07.02b.19.06225.10.1.12.0', 'SAMSURI', '150000000', '150000000', '1', '128587304', 'TIDAK ADA', 'SK', '0', '72', '2019-10-03', '2025-10-03', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '122157938.8', 'BOARE', 0, NULL),
(728, '2020-12-29', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. JEND. SUDIRMAN RT 005 RW 002 KEL. BABUSSALAM KEC. MANDAU KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.19.00758.02.1.12.0', 'ROSMIA', '295000000', '295000000', '1', '241712018', 'TIDAK ADA', 'SK', '0', '88', '2019-02-18', '2026-06-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '229626417.1', 'BOARE', 0, NULL),
(729, '2020-12-23', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'DUSUN LOBAN MUARO SENTAJO RT 001 RW 011 KEL. TERATAK AIR HITAM KEC. SENTAJO RAYA KAB. KUANTAN SINGINGI', 'KONSUMTIF', '07.02b.19.05629.09.1.12.0', 'ANDI PUTRA', '500000000', '500000000', '1', '423824916', 'TIDAK ADA', 'SK', '0', '54', '2019-09-10', '2024-03-10', 'MENGUNDURKAN DIRI', 'ANGGOTA DPRD KAB. KUANTAN SINGINGI', '0.95', '402633670.2', 'BOARE', 0, NULL),
(730, '2020-12-23', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. ANGGUR MERAH RT 003 RW 006 KEL. AIR JAMBAN KEC. MANDAU KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02956.05.1.12.0', 'MAYUNIATI', '275000000', '275000000', '1', '258735635', 'TIDAK ADA', 'SK', '0', '144', '2019-05-15', '2031-05-15', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '245798853.25', 'BOARE', 0, NULL),
(731, '2020-12-16', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA PADANG LUAS KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.17.00505.12.1.12.0', 'ERWAN', '99000000', '49500000', '0.5', '51277020', 'TIDAK ADA', 'TANAH PERKEBUNAN', '75240000', '60', '2017-12-21', '2022-12-21', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '1', '51277020', 'AL AMIN', 0, NULL),
(732, '2020-12-16', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'KP. BUKIT ATAS RT 004 RW 001 KEL. BARAN KEC. MERAL. KAB. KARUMUN', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00913.06.1.12.0', 'AFRINUS AGUSTIAR', '280000000', '280000000', '1', '259630333', 'TIDAK ADA', 'SK', '0', '144', '2018-06-05', '2030-06-05', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '233667299.7', 'APIRE', 0, NULL),
(733, '2020-12-14', NULL, '2021-02-26', 'PT GLOBAL RISK MANAGEMENT', 'JL. KELUARGA RT 002 RW 001 KEL. BENTENG HILIR KEC. MEMPURA KAB. SIAK', 'KONSUMTIF', '07.02b.19.06224.10.1.12.0', 'SUJARWO', '750000000', '750000000', '1', '631645842', 'TIDAK ADA', 'SK', '0', '54', '2019-10-03', '2024-04-03', 'MENGUNDURKAN DIRI', 'ANGGOTA DPRD KAB. SIAK', '0.95', '600063549.9', 'BOARE', 0, NULL),
(734, '2020-12-14', NULL, NULL, ' KEDAI PASAR SAIL', 'JL. BUDI LUHUR RT 001 RW 018 KEL. SAIL KEC. TENAYAN RAYA KOTA PEKANBARU', 'PRODUKTIF', '07.02.18.00175.06.1.12.0', 'HENDRI', '75000000', '56250000', '0.75', '38871060', '0', 'TANAH PERUMAHAN', '162944000', '60', '2018-05-11', '2023-05-11', 'PROSES PRODUKSI GAGAL', 'USAHA PENGOLAHAN KEMIRI', '0', '0', '0', 0, NULL),
(735, '2020-12-10', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. MANGGA 1 NO. 01 UJUNG BATU KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.03272.05.1.12.0', 'WEDIASTUTI', '310000000', '310000000', '1', '301875820', 'TIDAK ADA', 'SK', '0', '168', '2019-05-20', '2033-05-20', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '286782029', 'BOARE', 0, NULL),
(736, '2020-12-10', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'KAV. SEI-TERING BLOK BANGSAWAN NO. 49 RT/RW 004/019 TANJUNG SENGKUANG - BATU AMPAR, KOTA BATAM', 'KONSUMTIF (meninggal dunia)', '07.02b.19.07815.12.1.12.0', 'EGIA REJEKINTA SINUR', '50000000', '50000000', '1', '28460156', 'TIDAK ADA', 'SK', '0', '24', '2019-12-17', '2021-12-17', 'MENINGGAL DUNIA', 'PEGAWAI POLTABES BALERANG', '0.95', '27037148.2', 'BOARE', 0, NULL),
(737, '2020-12-10', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. MENTENG II NO. 20 C KOMP. PGANRT/RW 004/012 TANJUNG AYUN SAKTI - BUKIT BESTARI', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02375.04.1.12.0', 'MUHAMMAD SYABARI', '250000000', '250000000', '1', '229121534', 'TIDAK ADA', 'SK', '0', '120', '2019-04-25', '2029-04-25', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '217665457.3', 'BOARE', 0, NULL),
(738, '2020-12-08', NULL, NULL, 'KEDAI BATU PANJANG RUPAT', 'JL PELABUHAN 001 / 001 BATU PANJANG RUPAT', 'PRODUKTIF', NULL, 'SUBIYANTI', '100000000', '50000000', '0.5', '84085624', NULL, NULL, '0', '36', '2019-10-04', '2022-10-04', NULL, NULL, NULL, '0', NULL, 0, NULL),
(739, '2020-12-08', NULL, NULL, 'CABANG PEMBANTU LIPAT KAIN', 'SEI KAMPAR KEL SIMALINYANG KEC KAMPAR KIRI TENGAH KAB KAMPAR', 'PRODUKTIF (meninggal dunia)', NULL, 'PAINAM', '25000000', '0', NULL, '1154532', NULL, NULL, '0', '24', '2018-12-10', '2020-12-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(740, '2020-12-08', NULL, NULL, 'KEDAI BANTU PANJANG RUPAT', 'JL H.ABU BAKAR 001 / 001 SUNGAI CINGAM - RUPAT ', 'PRODUKTIF', NULL, 'SITI KOPSAH', '100000000', '75000000', '0.75', '69649767', NULL, NULL, '0', '48', '2018-10-10', '2022-10-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(741, '2020-12-07', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL AIR HITAM PERUM ORCHID RESIDENCE 001 / 030 KEL SIMPANG BARU KEC TANPAN KAB KOTA PEKANBARU', 'KONSUMTIF', NULL, 'RIANERX ANDESVON', '265000000', '265000000', '1', '236080864', NULL, NULL, '0', '120', '2018-05-11', '2028-05-11', NULL, NULL, NULL, '0', NULL, 0, NULL),
(742, '2020-12-04', NULL, NULL, 'KEDA AIR TIRIS', 'AIR TIRIS 001 / 001 KE AIR TIRIS KEC KAMPAR', 'PRODUKTIF KUR', NULL, 'RENDRA HASBI', '50000000', '37500000', '0.75', '21184872', NULL, NULL, '0', '36', '2019-01-25', '2022-01-25', NULL, NULL, NULL, '0', NULL, 0, NULL),
(743, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'JL SONTANG 006 / 003 KEL SONTANG KEC BONAI DARUSSALAM KAB ROKAN HULU', 'PRODUKTIF', NULL, 'MARHANI', '50000000', '15000000', '0.3', '37357493', NULL, NULL, '0', '48', '2018-09-05', '2022-09-05', NULL, NULL, NULL, '0', NULL, 0, NULL),
(744, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SEI EMAS 001 / 001 KEL PENUHAN BARAT KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'FIRMANSYAH ', '400000000', '120000000', '0.3', '338066685', NULL, NULL, '0', '96', '2018-09-07', '2026-09-07', NULL, NULL, NULL, '0', NULL, 0, NULL),
(745, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SOSIAL KAMPUNG PANJANG 001 / 006 KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'TANTI RATNA SARI', '100000000', '30000000', '0.3', '79083718', NULL, NULL, '0', '60', '2018-09-26', '2023-09-26', NULL, NULL, NULL, '0', NULL, 0, NULL),
(746, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SOSIAL KAMPUNG PANJANG 001 / 006 KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'YULIANUS', '100000000', '30000000', '0.3', '81237193', NULL, NULL, '0', '60', '2018-12-05', '2023-12-05', NULL, NULL, NULL, '0', NULL, 0, NULL),
(747, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SOSIAL KAMPUNG PANJANG 001 / 006 KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'YULIANUS', '100000000', '30000000', '0.3', '81257960', NULL, NULL, '0', '60', '2018-12-04', '2023-12-04', NULL, NULL, NULL, '0', NULL, 0, NULL),
(748, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'DESA PENUH HULU 001 / 006 KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'NASARUDIN', '99000000', '29700000', '0.3', '90898323', NULL, NULL, '0', '60', '2019-07-25', '2024-07-25', NULL, NULL, NULL, '0', NULL, 0, NULL),
(749, '2020-11-30', '2021-02-01', NULL, 'KEDAI RANTAU KASAI', NULL, 'PRODUKTIF', NULL, 'ANGGORO SULIANTO', '70000000', '0', NULL, '0', NULL, NULL, '0', NULL, '2018-09-21', '2018-09-21', NULL, NULL, NULL, '0', NULL, 0, NULL),
(750, '2020-11-26', NULL, '2021-02-26', 'KEDAI PASAR SAIL', 'JL SIDOMULYO I NO.146 PEKANBARU', 'PRODUKTIF (meninggal dunia)', NULL, 'AZWAR', '400000000', '120000000', '0.3', '213333324', NULL, NULL, '0', '60', '2018-05-07', '2023-05-07', NULL, NULL, NULL, '0', NULL, 0, NULL),
(751, '2020-11-26', NULL, NULL, 'CABANG PEMBANTU TANJUNG UBAN', 'JL IMAM BONJOL KP.MENTIGI 001/0001 KEL TANJUNG UBAN KOTA KEC BINTAN UTARA KAB BINTAN', 'PRODUKTIF KUR', NULL, 'ARIEF AFANDI', '65000000', '48750000', '0.75', '44347256', NULL, NULL, '0', '48', '2019-11-27', '2023-11-27', NULL, NULL, NULL, '0', NULL, 0, NULL),
(752, '2020-11-23', '2021-01-02', NULL, 'PT ADONAI PIALANG ASURANSI', 'KOTA BANGUN 003/001 KEL KOTA BANGUN KEC TAPUNG HILIR ', 'KONSUMTIF (meninggal dunia)', NULL, 'IRIYANTA', '120000000', '120000000', '1', '82711040', NULL, NULL, '0', '72', '2018-05-23', '2024-05-23', NULL, NULL, '0.9', '74439936', 'APIRE', 0, NULL),
(753, '2020-11-23', '2021-01-01', NULL, 'CABANG PEMBANTU LIPAT KAIN', 'DUSUN BUKIT PERMAI 003/006 BINUANG KEL BANGKINGAN ', 'PRODUKTIF', NULL, 'ERMITA', '380000000', '285000000', '0.75', '275423422', NULL, NULL, '0', '60', '2018-09-26', '2023-09-26', NULL, NULL, NULL, '0', NULL, 0, NULL),
(754, '2020-11-20', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL UKA PERUMAHAN VILA TRILOGI BLOK B KEL AIR PUTIH KEC TAMPAN ', 'KONSUMTIF (meninggal dunia)', NULL, 'BAHRONI ALWI', '190000000', '190000000', '1', '189618264', NULL, NULL, '0', '156', '2019-10-29', '2032-10-29', NULL, NULL, '0.95', '180137350.8', 'BOARE', 0, NULL),
(755, '2020-11-20', '2021-01-01', NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL PEMBANGUNAN III 002/001 KEL SELATPANJANG TIMUR KEC TEBING TINGGI KAB MERANTI ', 'KONSUMTIF (phk)', NULL, 'HERY SAPUTRA ', '390000000', '390000000', '1', '366581317', NULL, NULL, '0', '180', '2018-09-12', '2033-09-12', NULL, NULL, '0.95', '348252251.15', 'BOARE', 0, NULL),
(756, '2020-11-19', '2021-01-22', '2021-01-29', 'CABANG PEMBANTU FLAMBOYAN', 'DUSUN I INDRAPURI 001/001 KEL INDRAPURI KEC TAPUNG ', 'PRODUKTIF (meninggal dunia)', '07.02.19.00295.07.1.12.0', 'SUKUR', '80000000', '24000000', '0.3', '49387880', 'TIDAK ADA', 'TANAH PERKEBUNAN', '178000000', '36', '2019-06-14', '2022-06-14', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '44449092', 'IGNA ASIA', 0, NULL),
(757, '2020-11-17', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL TOWENSITE II BLOK K .05', 'KONSUMTIF (meninggal dunia)', NULL, 'ADE FITIANI', '285000000', '285000000', '1', '281767992', NULL, NULL, '0', '180', '2020-02-24', '2035-02-24', NULL, NULL, '0.95', '267679592.4', 'BOARE', 0, NULL),
(758, '2020-11-12', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. SELAMAT NO. 29 RT 003 REW 009 KEL. LABUH BARU KEC. PAYUNG SEKAKI, KOTA PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.04960.08.1.12.0', 'MARDIAH', '319000000', '319000000', '1', '293998250', 'TIDAK ADA', 'SK', '0', '109', '2019-08-13', '2028-09-13', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '279298337.5', 'BOARE', 0, NULL),
(759, '2020-11-11', NULL, NULL, 'CABANG PASIR PENGARAIAN', 'JL. RIAU NO. 62 RT 002 RW 002 KEL. PASIR PENGARAIAN KEC. RAMBAH KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.17.01182.01.4.12.0', 'RUDI HIDAYAT', '300000000', '225000000', '0.75', '76265625', '0', 'TANAH PERUMAHAN', '197333333', '60', '2016-12-28', '2021-12-28', NULL, NULL, NULL, '0', NULL, 0, NULL),
(760, '2020-11-11', '2021-01-22', '2021-01-29', 'KEDAI PASAR LUBUK JAMBI', 'DESA LUBUK KAMO KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.17.00078.04.1.12.0', 'SUTRI MARHENI', '85000000', '42500000', '0.5', '10101886', '0', 'TANAH', '110000000', '48', '2017-04-20', '2021-04-20', NULL, NULL, '0.5', '5050943', 'IGNA ASIA', 0, NULL),
(761, '2020-11-09', '2021-01-22', '2021-01-29', 'KEDAI KUALA KILAN', 'DESA BUKIT BERSEMI RT 016 RW 005 DESA BUKIT LIPAI KEC. BATANG CENAKU KAB. INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00450.10.1.12.0', 'SLAMET', '70000000', '35000000', '0.75', '35897138', NULL, NULL, '0', '48', '2018-09-10', '2022-09-10', NULL, NULL, '0.95', '34102281.1', 'BOARE', 0, NULL),
(762, '2020-11-09', '2021-01-01', NULL, 'KEDAI KUALA KILAN', 'DESA CENAKU KECIL 002/001 KEC. BATANG CENAKU KAB. INDRAGIRI HULU', 'PRODUKTIF', '07.02.15.00192.11.1.12.0', 'SAMSUDIN', '55000000', '16500000', '0.3', '11745527', NULL, NULL, '0', '60', '2015-11-11', '2020-11-11', NULL, NULL, NULL, '0', NULL, 0, NULL),
(763, '2020-11-03', '2021-01-01', NULL, 'CABANG PEMBANTU PERAWANG', 'JL. GERINGGING RT 003/RW  KEL. TEBING TINGGI OKURA KEC. RUMBAI PESISIR', 'PRODUKTIF (meninggal dunia)', NULL, 'NURAINI', '50000000', '0', NULL, '0', NULL, NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(764, '2020-11-02', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL. ROKAN NO. 74 RT 004 RW 005 KEL. TANJUNG RHU KEC. LIMAPULUH PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00611.05.1.12.0', 'SARNIWATI PASARIBU', '25000000', '25000000', '1', '7003123', 'TIDAK ADA', 'SK', '0', '36', '2018-05-24', '2021-05-24', 'MENINGGAL DUNIA', 'PEGAWAI TIDAK TETAP', '0.9', '6302810.7', 'APIRE', 0, NULL),
(765, '2020-10-19', '2021-01-25', '2021-01-29', 'PT GLOBAL RISK MANAGEMENT', 'JL. KMP. GUDANG RT 002 RW 003 KEL. MINAS TIMUR KEC. MINAS, KAB. SIAK', 'KONSUMTIF (meninggal dunia)', '07.02b.19.06483.10.1.12.0', 'SURYONO', '960000000', '960000000', '1', '811825436', 'TIDAK ADA', 'SK', '0', '54', '2019-10-09', '2024-04-09', 'MENINGGAL DUNIA', 'ANGGOTA DPRD', '0.95', '771234164.2', 'BOARE', 0, NULL),
(766, '2020-10-15', '2021-01-20', NULL, 'KEDAI MARPOYAN', 'JL. PASIR PUTIH NO. 23a RT 001 RW 002 KEL. TANAH MERAH, KEC. SIAK HULU, KAB. KAMPAR', 'PRODUKTIF KUR (meninggal dunia)', '07.02.18.00354.08.1.12.0', 'KHAILISNI', '100000000', '30000000', '0.3', '54166674', 'TIDAK ADA', NULL, '0', '48', '2018-07-20', '2022-07-20', 'MENINGGAL DUNIA', NULL, NULL, '0', NULL, 0, NULL),
(767, '2020-09-30', NULL, NULL, 'CABANG PEMBANTU SUNGAI GUNTUNG', 'JL. KAMPUNG NELAYAN RT. 002 RW. 003 KEL. BANDAR SRI GEMILANG KEC. KATEMAN KAB. INHIL', 'PRODUKTIF', '07.02.18.00327.07.1.12.0', 'DARMADI', '95000000', '28500000', '0.3', '19145890.2', NULL, 'TANAH PERKEBUNAN', '85398000', '48', '2018-07-05', '2022-07-05', NULL, 'NELAYAN', NULL, NULL, NULL, 0, NULL),
(768, '2020-09-30', NULL, NULL, 'CABANG PEKANBARU', NULL, 'PRODUKTIF KUR', NULL, 'ASRUL', '100000000', '50000000', '0.5', '49168350.5', NULL, NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(769, '2020-09-28', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', NULL, 'KONSUMTIF', NULL, 'HUSNALITA, SH, MKN', '235000000', '235000000', '1', '145520575', NULL, NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, '0.9', '130968517.5', 'APIRE', 0, NULL),
(770, '2020-09-28', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'JL. MANGGIS 002/010, KEC. UJUNG BATU', 'PRODUKTIF', '07.02.19.00301.07.1.12.0', 'DARUL NAFIS', '100000000', '50000000', '0.5', '102180780', '0', 'TANAH PERKEBUNAN', '66666667', '96', '2019-06-20', '2027-06-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', NULL, 0, NULL),
(771, '2020-09-28', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'JL. MANGGIS 002/010, KEC. UJUNG BATU', 'PRODUKTIF', '07.02.19.00301.07.1.12.1', 'DARUL NAFIS', '100000000', '50000000', '0.5', '102180780', '0', 'TANAH PERKEBUNAN', '66666667', '96', '2019-06-20', '2027-06-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', NULL, 0, NULL),
(772, '2020-09-25', '2021-01-22', NULL, 'KEDAI KUALA KILAN', 'DESA BUKIT LIPAI 022/006 KEC. BATANG CENAKU KAB. INHU', 'PRODUKTIF', '07.02.14.00119.11.1.12.0', 'ISMIATI UMAYAH', '100000000', '30000000', '0.3', '3899960', NULL, 'TANAH PERKEBUNAN', '240000000', '72', '2014-10-22', '2020-10-22', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(773, '2020-09-22', NULL, NULL, 'CABANG BANGKINANG', 'DUSUN II BERINGIN JAYA RT/RW 001/001 PANGKALAN SERIK SIAK HULU', 'KONSUMTIF', '07.02B.19.05227.08.1.12.0', 'DENDI ZULHERI', '210000000', '210000000', '1', '210000000', NULL, 'SK', '0', '180', '2019-08-22', '2034-08-22', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, '0', NULL, 0, NULL),
(774, '2020-09-21', '2021-01-29', '2021-01-29', 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. SEI SIAK NO. 02 RT/ RW. 014/000 KEL. BULUH KASAP KEC. DUMAI TIMUR KAB/KOTA. DUMAI PROV. RIAU', 'PRODUKTIF KUR', '07.02.19.23299.09.4.12.0', 'MARDIANTO', '500000000', '375000000', '0.75', '327656247', NULL, 'TANAH PERKEBUNAN', '397000000', '36', '2019-09-27', '2022-09-27', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.95', '311273434.65', 'BOARE', 0, NULL),
(775, '2020-09-16', NULL, NULL, 'CABANG TELUK KUANTAN', 'JL. PROKLAMASI 001/001 SUNGAI JERING KEC. KUANTAN TENGAH', 'PRODUKTIF', '07.02.17.00332.09.1.12.0', 'NOFRIZAL', '300000000', '150000000', '0.5', '79068448', NULL, NULL, '0', '60', '2017-09-07', '2022-09-07', NULL, 'PEDAGANG ECERAN', NULL, '0', NULL, 0, NULL),
(776, '2020-09-16', NULL, NULL, 'CABANG TELUK KUANTAN', NULL, 'PRODUKTIF', '07.02.17.00076.05.4.12.0', 'MUHAMMAD ALI', '60000000', '45000000', '0.75', '12589863.75', NULL, NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(777, '2020-09-14', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'HAMILTON FAJAR Z. ERWIN', '210000000', '210000000', '1', '197094740', NULL, NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, '0.95', '187240003', 'BOARE', 0, NULL),
(778, '2020-09-09', '2021-01-25', '2021-01-29', 'CABANG BANGKINANG', 'DUSUN Li METRO LESTARI RT 001 RW 002 KEL. BATU BELAH', 'KONSUMTIF', '07.02a.18.00583.11.1.12.0', 'MASWIR', '200000000', '200000000', '1', '182912090', NULL, 'SK', '0', '120', '2018-11-19', '2028-11-19', 'MENINNGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '173766485.5', 'BOARE', 0, NULL),
(779, '2020-09-03', NULL, NULL, 'CABANG PEMBANTU RUMBAI', 'JL. SELINDIT NO.23 RT. 002 RW. 002 KEL KAMPUNG MELAYU KEC SUKAJADI', 'PRODUKTIF', '07.02.18.00662.12.1.12.0', 'ELLY SIANIPAR', '250000000', '125000000', '0.5', '89157205', NULL, 'TANAH', '1092280000', '60', '2018-08-21', '2023-08-21', NULL, 'RUMAH TANGGA UNTUK KEPERLUAN YANG TIDAK DIKLASFIKASIKAN DI TEMPAT LAIN', NULL, NULL, NULL, 0, NULL),
(780, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDOMULYO DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00118.03.1.12.0', 'AHMAD SUNARTIO', '99000000', '74250000', '0.75', '59423387', '0', 'TANAH PERKEBUNAN', '100000000', '48', '2019-03-26', '2023-03-26', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(781, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN PASIR PUTIH RT 003 RW 007 KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00425.10.1.12.0', 'AGUS SOFIAN', '99000000', '74250000', '0.75', '44236254', '0', 'TANAH PERKEBUNAN', '100000000', '36', '2018-08-29', '2021-08-29', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(782, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI RT 001 RW 001 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00087.04.1.12.0', 'JUNAEDI', '50000000', '25000000', '0.5', '12550867', '0', 'TANAH PERKEBUNAN', '70000000', '36', '2017-03-02', '2020-03-02', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(783, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI RT 003/002 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00206.05.1.12.0', 'KASMINI ', '9900000', '74250000', '0.75', '60767790', '0', 'TANAH PERKEBUNAN', '200000000', '48', '2019-04-29', '2023-04-29', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(784, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI RT 001 RW 001 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00087.04.1.12.0', 'KAMSIAH', '99000000', '49500000', '0.5', '24850782', '0', 'TANAH PERKEBNUNAN', '70000000', '60', '2017-03-02', '2022-03-02', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(785, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI 001/006 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00254.06.1.12.0', 'NURIYANDANI', '99000000', '74250000', '0.75', '62099975', '0', 'TANAH PERKEBUNAN', '200000000', '48', '2019-05-02', '2023-05-02', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(786, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADIDESA LANGKAN KEC. LANGGAM KAB. PELALAWAN ', 'PRODUKTIF', '07.02.18.00207.06.1.12.0', 'SUHERMAN', '99000000', '49500000', '0.5', '23782315', NULL, 'TANAH PERKEBUNAN', '66000000', '36', '2018-05-23', '2021-05-23', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(787, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00433.11.1.12.0', 'DINA PURWANTI', '99000000', '49500000', '0.5', '16883472', NULL, NULL, '0', '36', '2017-11-09', '2020-11-09', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(788, '2020-09-01', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'DUSUN TULANG GAJAH RT 001 RW 002 KEL. PEMATANG BERANGAN, KEC. RAMBAH, KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00879.06.1.12.0', 'YULIZAR', '100000000', '100000000', '1', '79627418', 'TIDAK ADA', 'SK', '0', '84', '2018-05-05', '2025-05-05', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '71664676.2', 'APIRE', 0, NULL),
(789, '2020-08-10', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SONTANG, RT. 007, RW. 002, KEL. SONTANG, KEC. BONAI DARUSSALAM, KAB. ROKAN HULU', 'PRODUKTIF', '07.02.19.00175.05.1.12.0', 'MULYADI', '350000000', '105000000', '0.3', '358115867', '0', 'TANAH PERKEBUNAN', '350000000', '60', '2019-04-12', '2024-04-12', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(790, '2020-08-10', NULL, NULL, 'CABANG PEMBANTU RUMBAI', 'JALAN SEMBILAN NO. 78, RT. 002, RW. 002, KEL. LIMBUNGAN, KEC. RUMBAI, KOTA PEKANBARU', 'PRODUKTIF', '07.02.19.00504.11.1.12.0', 'MASRIAL', '100000000', '30000000', '0.3', '91666668', '0', 'TANAH DAN BANGUNAN', '79410000', '48', '2019-10-24', '2023-10-24', 'PENJUALAN MENURUN', 'PERDAGANGAN', '0.95', '87083334.6', 'BOARE', 0, NULL),
(791, '2020-08-06', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'KEPENUHAN SEJATI, RT. 008, RW. OO1, KEL. KOTA TENGAH, KEC. KEPENUHAN, KAB. ROKAN HULU', 'PRODUKTIF (meninggal dunia)', '07.02.20.00099.03.1.12.0', 'M. YUSUF ', '100000000', '30000000', '0.3', '87805901', 'TIDAK ADA', 'TANAH PERKEBUNAN ', '153083333', '96', '2018-02-21', '2026-02-21', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(792, '2020-08-04', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'Jl. BATANG TUAKA LR. PULAI, RT. 002, RW. 002, KEL. PEKAN ARBA, KEC. TEMBILAHAN, KAB. INDRAGIRI HILIR', 'KONSUMTIF (meninggal dunia)', '07.02B.18.01013.05.1.12.0', 'TUMIN PRAYITNO', '70000000', '70000000', '1', '23385300', 'TIDAK ADA', 'SK', '0', '34', '2018-07-06', '2021-05-06', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '21046770', 'APIRE', 0, NULL),
(793, '2020-07-30', NULL, NULL, 'CAPEM SUNGAI GUNTUNG', 'KALIMANTAN, RT.002, RW.002, KEL. PENJURU, KEC. KATEMAN, KAB. INDRAGIRUI HILIR', 'PRODUKTIF KUR', '07.02.19.20821.05.4.12.0', 'ERMI WATI', '100000000', '75000000', '0.75', '43492185', '0', 'TANAH DAN BANGUNAN', '43025000', '24', '2019-04-09', '2021-04-09', 'KALAH BERSAING', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(794, '2020-07-29', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL. UTAMA SINABOI, RT. 002, RW.001, KEL. SINABOI KOTA, KEC. SINABOI, KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.2b.18.00530.05.1.12.0', 'AGINTA SEMBIRING', '190000000', '190000000', '1', '179258655', 'TIDAK ADA', 'SK', '0', '180', '2018-05-23', '2033-05-23', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '161332789.5', 'APIRE', 0, NULL),
(795, '2020-07-29', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL. PARIT AMAN, RT.001, RW.001, KEL. PARIT AMAN, KEC. BANGKO, KAB. ROKAN HILIR', 'KONSUMTIF (meninggal dunia)', '07.02b.18.01037.05.1.12.0', 'SUPRIYANTI', '250000000', '250000000', '1', '236501920', 'TIDAK ADA', 'SK', '0', '180', '2018-06-07', '2033-06-07', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '212851728', 'APIRE', 0, NULL),
(796, '2020-07-22', NULL, NULL, 'CABANG PEMBANTU PANAM', 'JL. BAMBU KUNING Gg. SURYA I NO. 18 RT 006 RW 013 KEL. REJO SARI KEC. TENAYAN RAYA KOTA PEKANBARU', 'KONSUMTIF (PHK)', '07.02.18.00225.06.1.12.0', 'BIRMAN ALWI', '100000000', '100000000', '1', '53164140', '0', 'SK', '0', '36', '2018-05-04', '2021-05-04', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI RIAU POS', '0.5', '26582070', 'APIRE', 0, NULL),
(797, '2020-07-06', NULL, NULL, 'CABANG PEMBANTU SOREK', 'KAMPUNG TENGAH RT 003 RW 007 SOREK SATU KEC. PANGKALAN KURAS', 'PRODUKTIF', '07.02.18.00297.01.1.12.0', 'MARWANTO', '50000000', '25000000', '0.5', '14212434', '0', 'TANAH & BANGUNAN', '116400000', '36', '2018-06-08', '2021-06-08', 'OMSET MENURUN ', 'PEDAGANG AYAM BAKAR', '0', '0', '0', 0, NULL),
(798, '2020-07-01', NULL, NULL, 'CABANG SELAT PANJANG', 'JL. MAHMUD DESA BANGLA BARAT SELATPANJANG', 'PRODUKTIF ', '07.02.18.00160.05.1.12.0', 'ERJULINA', '100000000', '75000000', '0.75', '50639881', '0', 'TANAH', '112400000', '48', '2018-04-20', '2022-04-20', 'PIUTANG MACET', 'KEDAI KELONTONG DAN CATERING MAKANAN', '0.5', '25319940.5', 'IGNA ASIA', 0, NULL),
(799, '2020-05-06', NULL, NULL, 'CABANG PEMBANTU BAGAN BATU', 'JL. DUSUN II PONDOK KRESEK, RT. 003, RW. 001, KEL. PONDOK KRESEK, KEC. PUJUD, KAB. ROKAN HILIR', 'PRODUKTIF KUR', '07.02.17.00276.08.4.12.0', 'SUYANTO', '100000000', '75000000', '0.75', '43099370', '0', 'TANAH DAN BANGUNAN', '94352000', '60', '2020-08-04', '2025-08-04', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(800, '2020-03-16', NULL, NULL, 'CABANG PEMBANTU JALAN RIAU', 'JL. PADAT KARYA N0.3, RT. 001, RW. 002, KEL TANGKERANG TIMUR, KEC. TENAYAN RAYA, KOTA. PEKANBARU', 'KONSUMTIF ', '07.02.18.00108.04.1.12.0', 'WIDYAH SARI', '25000000', '25000000', '1', '10157020', '0', 'SK', '0', '36', '2018-03-07', '2021-03-07', 'PHK', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(801, '2020-12-29', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. JEND. SUDIRMAN RT 005 RW 002 KEL. BABUSSALAM KEC. MANDAU KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.19.00758.02.1.12.0', 'ROSMIA', '295000000', '295000000', '1', '241712018', 'TIDAK ADA', 'SK', '0', '88', '2019-02-18', '2026-06-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '229626417.1', 'BOARE', 0, NULL),
(802, '2020-12-28', '2020-12-30', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00207.06.1.12.0', 'MIJEM', '99000000', '49500000', '0.5', '31797690', '0', 'TANAH PERKEBUNAN', '76800000', '60', '2018-05-25', '2023-05-25', NULL, NULL, '0', '0', '0', 0, NULL),
(803, '2020-12-28', '2020-12-30', NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI 002/001 DESA PANGKALAN GONDAI KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00206.05.1.12.0', 'SAEPUDDIN', '60000000', '45000000', '0.75', '33842667', '0', 'TANAH PERKEBUNAN', '72000000', '48', '2019-04-05', '2023-04-05', NULL, NULL, '0', '0', '0', 0, NULL),
(804, '2020-12-28', '2020-12-30', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA PANGKALAN GONDAI KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00129.04.1.12.0', 'SUBADI', '99000000', '49500000', '0.5', '30240780', '0', 'TANAH PERKEBUNAN', '75000000', '60', '2018-03-26', '2023-03-26', NULL, NULL, '0', '0', '0', 0, NULL),
(805, '2020-12-28', '1930-12-30', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA PANGKALAN GONDAI KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00129.04.1.12.0', 'YANTO SAHRONI', '80000000', '40000000', '0.5', '24431663', '0', 'TANAH PERKEBUNAN', '75005717', '60', '2018-03-23', '2023-03-23', NULL, NULL, '0', '0', '0', 0, NULL),
(806, '2020-12-23', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'DUSUN LOBAN MUARO SENTAJO RT 001 RW 011 KEL. TERATAK AIR HITAM KEC. SENTAJO RAYA KAB. KUANTAN SINGINGI', 'KONSUMTIF', '07.02b.19.05629.09.1.12.0', 'ANDI PUTRA', '500000000', '500000000', '1', '423824916', 'TIDAK ADA', 'SK', '0', '54', '2019-09-10', '2024-03-10', 'MENGUNDURKAN DIRI', 'ANGGOTA DPRD KAB. KUANTAN SINGINGI', '0.95', '402633670.2', 'BOARE', 0, NULL),
(807, '2020-12-23', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. ANGGUR MERAH RT 003 RW 006 KEL. AIR JAMBAN KEC. MANDAU KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02956.05.1.12.0', 'MAYUNIATI', '275000000', '275000000', '1', '258735635', 'TIDAK ADA', 'SK', '0', '144', '2019-05-15', '2031-05-15', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '245798853.25', 'BOARE', 0, NULL),
(808, '2020-12-16', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA PADANG LUAS KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.17.00505.12.1.12.0', 'ERWAN', '99000000', '49500000', '0.5', '51277020', 'TIDAK ADA', 'TANAH PERKEBUNAN', '75240000', '60', '2017-12-21', '2022-12-21', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '1', '51277020', 'AL AMIN', 0, NULL),
(809, '2020-12-16', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'KP. BUKIT ATAS RT 004 RW 001 KEL. BARAN KEC. MERAL. KAB. KARUMUN', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00913.06.1.12.0', 'AFRINUS AGUSTIAR', '280000000', '280000000', '1', '259630333', 'TIDAK ADA', 'SK', '0', '144', '2018-06-05', '2030-06-05', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '233667299.7', 'APIRE', 0, NULL),
(810, '2020-12-14', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. KELUARGA RT 002 RW 001 KEL. BENTENG HILIR KEC. MEMPURA KAB. SIAK', 'KONSUMTIF', '07.02b.19.06224.10.1.12.0', 'SUJARWO', '750000000', '750000000', '1', '645857893', 'TIDAK ADA', 'SK', '0', '54', '2019-10-03', '2024-04-03', 'MENGUNDURKAN DIRI', 'ANGGOTA DPRD KAB. SIAK', '0.95', '613564998.35', 'BOARE', 0, NULL),
(811, '2020-12-14', NULL, NULL, ' KEDAI PASAR SAIL', 'JL. BUDI LUHUR RT 001 RW 018 KEL. SAIL KEC. TENAYAN RAYA KOTA PEKANBARU', 'PRODUKTIF', '07.02.18.00175.06.1.12.0', 'HENDRI', '75000000', '56250000', '0.75', '38871060', '0', 'TANAH PERUMAHAN', '162944000', '60', '2018-05-11', '2023-05-11', 'PROSES PRODUKSI GAGAL', 'USAHA PENGOLAHAN KEMIRI', '0', '0', '0', 0, NULL),
(812, '2020-12-10', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. MANGGA 1 NO. 01 UJUNG BATU KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.03272.05.1.12.0', 'WEDIASTUTI', '310000000', '310000000', '1', '301875820', 'TIDAK ADA', 'SK', '0', '168', '2019-05-20', '2033-05-20', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '286782029', 'BOARE', 0, NULL),
(813, '2020-12-10', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'KAV. SEI-TERING BLOK BANGSAWAN NO. 49 RT/RW 004/019 TANJUNG SENGKUANG - BATU AMPAR, KOTA BATAM', 'KONSUMTIF (meninggal dunia)', '07.02b.19.07815.12.1.12.0', 'EGIA REJEKINTA SINUR', '50000000', '50000000', '1', '28460156', 'TIDAK ADA', 'SK', '0', '24', '2019-12-17', '2021-12-17', 'MENINGGAL DUNIA', 'PEGAWAI POLTABES BALERANG', '0.95', '27037148.2', 'BOARE', 0, NULL),
(814, '2020-12-10', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. MENTENG II NO. 20 C KOMP. PGANRT/RW 004/012 TANJUNG AYUN SAKTI - BUKIT BESTARI', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02375.04.1.12.0', 'MUHAMMAD SYABARI', '250000000', '250000000', '1', '229121534', 'TIDAK ADA', 'SK', '0', '120', '2019-04-25', '2029-04-25', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '217665457.3', 'BOARE', 0, NULL),
(815, '2020-12-08', NULL, NULL, 'KEDAI BATU PANJANG RUPAT', 'JL PELABUHAN 001 / 001 BATU PANJANG RUPAT', 'PRODUKTIF', NULL, 'SUBIYANTI', '100000000', '50000000', '0.5', '84085624', NULL, NULL, NULL, '36', '2019-10-04', '2022-10-04', NULL, NULL, NULL, '0', NULL, 0, NULL),
(816, '2020-12-08', NULL, NULL, 'CABANG PEMBANTU LIPAT KAIN', 'SEI KAMPAR KEL SIMALINYANG KEC KAMPAR KIRI TENGAH KAB KAMPAR', 'PRODUKTIF (meninggal dunia)', NULL, 'PAINAM', '25000000', NULL, NULL, '1154532', NULL, NULL, NULL, '24', '2018-12-10', '2020-12-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(817, '2020-12-08', NULL, NULL, 'KEDAI BANTU PANJANG RUPAT', 'JL H.ABU BAKAR 001 / 001 SUNGAI CINGAM - RUPAT ', 'PRODUKTIF', NULL, 'SITI KOPSAH', '100000000', '75000000', '0.75', '69649767', NULL, NULL, NULL, '48', '2018-10-10', '2022-10-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(818, '2020-12-07', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL AIR HITAM PERUM ORCHID RESIDENCE 001 / 030 KEL SIMPANG BARU KEC TANPAN KAB KOTA PEKANBARU', 'KONSUMTIF', NULL, 'RIANERX ANDESVON', '265000000', '265000000', '1', '236080864', NULL, NULL, NULL, '120', '2018-05-11', '2028-05-11', NULL, NULL, NULL, '0', NULL, 0, NULL),
(819, '2020-12-07', NULL, '2020-12-23', 'KEDAI MUARA LEMBU', NULL, 'PRODUKTIF', '07.02.18.00015.01.1.12.0', 'EGI YUNDA SULISTIO', '80000000', '40000000', '0.5', '18323821', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(820, '2020-12-07', '2020-12-21', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00505.12.1.12.0', 'DEDI SURYONO', '99000000', '49500000', '0.5', '29731440', '0', 'TANAH PERKEBUNAN', '75044750', '60', '2017-12-19', '2022-12-19', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(821, '2020-12-07', '2020-12-21', NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN BANGUN BARU 001/001 DESA PANGKALAN GONDAI KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00048.02.1.12.0', 'NAFIATUL KHOIRIYAH', '99000000', '74250000', '0.75', '58237628', '0', 'TANAH PERKEBUNAN', '75000000', '60', '2019-01-25', '2024-01-25', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(822, '2020-12-07', '2020-12-21', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', NULL, 'TARNA SUPRIATNA', '99000000', '49500000', '0.5', '28927725', '0', 'TANAH PERKEBUNAN', '75000000', '60', '2017-11-23', '2022-11-23', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(823, '2020-12-04', NULL, NULL, 'KEDA AIR TIRIS', 'AIR TIRIS 001 / 001 KE AIR TIRIS KEC KAMPAR', 'PRODUKTIF KUR', NULL, 'RENDRA HASBI', '50000000', '37500000', '0.75', '21184872', NULL, NULL, NULL, '36', '2019-01-25', '2022-01-25', NULL, NULL, NULL, '0', NULL, 0, NULL),
(824, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'JL SONTANG 006 / 003 KEL SONTANG KEC BONAI DARUSSALAM KAB ROKAN HULU', 'PRODUKTIF', NULL, 'MARHANI', '50000000', '15000000', '0.3', '37357493', NULL, NULL, NULL, '48', '2018-09-05', '2022-09-05', NULL, NULL, NULL, '0', NULL, 0, NULL),
(825, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SEI EMAS 001 / 001 KEL PENUHAN BARAT KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'FIRMANSYAH ', '400000000', '120000000', '0.3', '338066685', NULL, NULL, NULL, '96', '2018-09-07', '2026-09-07', NULL, NULL, NULL, '0', NULL, 0, NULL),
(826, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SOSIAL KAMPUNG PANJANG 001 / 006 KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'TANTI RATNA SARI', '100000000', '30000000', '0.3', '79083718', NULL, NULL, NULL, '60', '2018-09-26', '2023-09-26', NULL, NULL, NULL, '0', NULL, 0, NULL),
(827, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SOSIAL KAMPUNG PANJANG 001 / 006 KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'YULIANUS', '100000000', '30000000', '0.3', '81237193', NULL, NULL, NULL, '60', '2018-12-05', '2023-12-05', NULL, NULL, NULL, '0', NULL, 0, NULL),
(828, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SOSIAL KAMPUNG PANJANG 001 / 006 KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'YULIANUS', '100000000', '30000000', '0.3', '81257960', NULL, NULL, NULL, '60', '2018-12-04', '2023-12-04', NULL, NULL, NULL, '0', NULL, 0, NULL),
(829, '2020-12-03', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'DESA PENUH HULU 001 / 006 KEC KEPENUHAN KAB ROKAN HULU', 'PRODUKTIF', NULL, 'NASARUDIN', '99000000', '29700000', '0.3', '90898323', NULL, NULL, NULL, '60', '2019-07-25', '2024-07-25', NULL, NULL, NULL, '0', NULL, 0, NULL),
(830, '2020-11-30', NULL, NULL, 'KEDAI RANTAU KASAI', NULL, 'PRODUKTIF', NULL, 'ANGGORO SULIANTO', '70000000', NULL, NULL, '0', NULL, NULL, NULL, NULL, '2018-09-21', '2018-09-21', NULL, NULL, NULL, '0', NULL, 0, NULL),
(831, '2020-11-30', '2020-11-27', NULL, 'CABANG PEMBANTU BAGAN BATU', 'DUSUN JAYA MAKMUR 001/ 001 KEP.JAYA AGUNG KEC BAGAN SINEMBAH', 'PRODUKTIF', NULL, 'ARIANSYAH PUTRA', '500000000', '150000000', '0.3', '458464180', NULL, NULL, NULL, '60', '2019-02-15', '2024-02-15', NULL, NULL, NULL, '0', NULL, 0, NULL);
INSERT INTO `tblklaim` (`idKlaim`, `tglmasuk`, `tglberkas`, `tglklaimbayar`, `PPnama`, `PPalamat`, `produk`, `sertifikat`, `nmterjamin`, `plafond`, `nilai_jaminan`, `coverage`, `nominal_klaim`, `subrogasi`, `agunan`, `taksasi_agunan`, `Jkwaktu`, `tglawal`, `tglakhir`, `macet`, `sektor`, `cover_reas`, `klaim_reas`, `broker`, `status`, `no_telp`) VALUES
(832, '2020-11-26', NULL, NULL, 'KEDAI PASAR SAIL', 'JL SIDOMULYO I NO.146 PEKANBARU', 'PRODUKTIF (meninggal dunia)', NULL, 'AZWAR', '400000000', '120000000', '0.3', '213333324', NULL, NULL, NULL, '60', '2018-05-07', '2023-05-07', NULL, NULL, NULL, '0', NULL, 0, NULL),
(833, '2020-11-26', '2020-11-27', NULL, 'CABANG PEMBANTU TANJUNG UBAN', 'PERUM.BATA MAS BLOCK A NO.2 001/ 002 KEL TANJUNG UBAN SELATAN KEC BINTAN UTARA - KAB BINTAN', 'PRODUKTIF KUR', NULL, 'ETI SAPITRI', '325000000', '243750000', '0.75', '100695898', NULL, NULL, NULL, '48', '2017-05-05', '2021-05-05', NULL, NULL, NULL, '0', NULL, 0, NULL),
(834, '2020-11-26', NULL, NULL, 'CABANG PEMBANTU TANJUNG UBAN', 'JL IMAM BONJOL KP.MENTIGI 001/0001 KEL TANJUNG UBAN KOTA KEC BINTAN UTARA KAB BINTAN', 'PRODUKTIF KUR', NULL, 'ARIEF AFANDI', '65000000', '48750000', '0.75', '60369815', NULL, NULL, NULL, '48', '2019-11-27', '2023-11-27', NULL, NULL, NULL, '0', NULL, 0, NULL),
(835, '2020-11-25', NULL, '2020-12-23', 'CABANG PEMBANTU BASERAH', 'DUSUN PENGHIJAUN 027/- PASAR BARU PANGEAN KEC PANGEAN', 'PRODUKTIF KUR', '07.02.19.20073.01.4.12.0', 'JHON HELDANIS', '50000000', '37500000', '0.75', '23171723', NULL, NULL, NULL, '48', '2018-11-12', '2022-11-12', NULL, NULL, NULL, '0', NULL, 0, NULL),
(836, '2020-11-23', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'KOTA BANGUN 003/001 KEL KOTA BANGUN KEC TAPUNG HILIR ', 'KONSUMTIF (meninggal dunia)', NULL, 'IRIYANTA', '120000000', '120000000', '1', '82711040', NULL, NULL, NULL, '72', '2018-05-23', '2024-05-23', NULL, NULL, '0.9', '74439936', 'APIRE', 0, NULL),
(837, '2020-11-23', NULL, NULL, 'CABANG PEMBANTU LIPAT KAIN', 'DUSUN BUKIT PERMAI 003/006 BINUANG KEL BANGKINGAN ', 'PRODUKTIF', NULL, 'ERMITA', '380000000', '285000000', '0.75', '275423422', NULL, NULL, NULL, '60', '2018-09-26', '2023-09-26', NULL, NULL, NULL, '0', NULL, 0, NULL),
(838, '2020-11-23', '2020-12-17', NULL, 'KEDAI TANDUN', 'TANDUN 009/003', 'PRODUKTIF KUR', '07.02.19.21897.08.4.12.0', 'SARIANTO ', '100000000', '75000000', '0.75', '50425338', '0', 'TANAH PERKEBUNAN', '80000000', '36', '2018-11-07', '2021-11-07', 'USAHA MENURUN', 'AKSESORIS HP DAN PULSA', '0', '0', '0', 0, NULL),
(839, '2020-11-23', '2020-12-17', NULL, 'KEDAI TANDUN', 'DESA TANDUN 008/003 KEC TANDUN KAB ROHUL', 'PRODUKTIF', '07.02.19.00031.02.1.12.0', 'BUSTONI', '80.000.000', '60000000', '0.75', '58948096', '0', 'TANAH & BANGUNAN', '180000000', '48', '2019-01-25', '2023-01-25', 'GAGAL PRODUKSI', 'PERKEBUNAN SAWIT', '0', '0', '0', 0, NULL),
(840, '2020-11-23', '2020-12-17', NULL, 'KEDAI TANDUN', 'TANDUN 004/ 001 KEL TANDUN KAB ROHUL', 'PRODUKTIF', '07.02.19.00326.09.1.12.0', 'YUSMARNI', '95000000', '71250000', '0.75', '87504346', '0', 'TANAH PERKEBUNAN', '97833333', '48', '2019-07-23', '2023-07-23', 'GAGAL PRODUKSI', 'PERKEBUNAN SAWIT', '0', '0', '0', 0, NULL),
(841, '2020-11-20', NULL, '2020-12-23', 'KEDAI PRANAP', 'DESA SENCANO JAYA 007/002 KEC BATANG PERNAP INHU ', 'PRODUKTIF (meninggal dunia)', '07.02.19.00465.10.1.12.0', 'SUKARNI', '45000000', '22500000', '0.5', '31751322', NULL, NULL, NULL, '36', '2019-10-07', '2022-10-07', NULL, NULL, '0.95', '30163755.9', 'BOARE', 0, NULL),
(842, '2020-11-20', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL UKA PERUMAHAN VILA TRILOGI BLOK B KEL AIR PUTIH KEC TAMPAN ', 'KONSUMTIF (meninggal dunia)', NULL, 'BAHRONI ALWI', '190000000', '190000000', '1', '184095474', NULL, NULL, NULL, '156', '2019-10-29', '2032-10-29', NULL, NULL, '0.95', '174890700.3', 'BOARE', 0, NULL),
(843, '2020-11-20', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL PEMBANGUNAN III 002/001 KEL SELATPANJANG TIMUR KEC TEBING TINGGI KAB MERANTI ', 'KONSUMTIF (phk)', NULL, 'HERY SAPUTRA ', '390000000', '390000000', '1', '366581317', NULL, NULL, NULL, '180', '2018-09-12', '2033-09-12', NULL, NULL, '0.95', '348252251.15', 'BOARE', 0, NULL),
(844, '2020-11-19', NULL, NULL, 'CABANG PEMBANTU FLAMBOYAN', 'DUSUN I INDRAPURI 001/001 KEL INDRAPURI KEC TAPUNG ', 'PRODUKTIF (meninggal dunia)', NULL, 'SUKUR', '80000000', '24000000', '0.3', '50105705', NULL, NULL, NULL, '36', '2019-06-14', '2022-06-14', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(845, '2020-11-18', NULL, NULL, 'KEDAI MARPOYAN', 'JL PASIR PUTIH NO 2A 001/02 DESA TANAH MERAH KEC SIAK HULU KAB KAMPAR ', 'PRODUKTIF KUR ', NULL, 'KHAILISNI', '100000000', '30000000', '0.3', '54177206', NULL, NULL, NULL, '48', '2018-07-20', '2022-07-20', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(846, '2020-11-17', NULL, '2020-12-23', 'PT GLOBAL RISK MANAGEMENT', 'TANJUNG KELIT 001/001 KEL TANJUNG KELIT KEC SENAYANG ', 'KONSUMTIF (meninggal dunia)', '07.02b.19.00388.01.1.12.0', 'SYAMSURI', '170000000', '170000000', '1', '124685818', 'TIDAK ADA', 'SK', '0', '60', '2019-01-25', '2024-01-25', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '118451527.1', 'BOARE', 0, NULL),
(847, '2020-11-17', NULL, '2020-12-23', 'PT GLOBAL RISK MANAGEMENT', 'JL SRI GADING 007/002 KEL PEMATANG REBAH KEC RENGAT BARAT ', 'KONSUMTIF (meninggal dunia)', '07.02a.18.00861.12.1.12.0', 'HARLELA', '250000000', '250000000', '1', '219334520', 'TIDAK ADA', 'SK', '0', '108', '2018-12-11', '2027-12-11', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '208367794', 'BOARE', 0, NULL),
(848, '2020-11-17', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL TOWENSITE II BLOK K .05', 'KONSUMTIF (meninggal dunia)', NULL, 'ADE FITIANI', '285000000', '285000000', '1', '281767992', NULL, NULL, NULL, '180', '2020-02-24', '2035-02-24', NULL, NULL, '0.95', '267679592.4', 'BOARE', 0, NULL),
(849, '2020-11-16', '2020-11-27', NULL, 'KEDAI PERANAP', 'DESA SENCANO JAYA 007/002 KEC BTANG PERANAP INHU', 'PRODUKTIF', '07.02.19.001119.04.1.12.0', 'BISRON YARONI', '100000000', '50000000', '0.5', '39472434', '0', 'TANAH', '147500000', '48', '2019-03-14', '2023-03-14', 'PENURUNAN PRODUKSI', 'PERKEBUNAN KELAPA SAWIT', '0.95', '37498812.3', 'BOARE', 0, NULL),
(850, '2020-11-16', '2020-11-24', NULL, 'KEDAI PERANAP', 'DUSUN SEI ROTAN 002/001 DESA TALANG TUJUH BUAH KEC RAKIT KULIM -INHU', 'PRODUKTIF', NULL, 'AHMAD LANA HARAPAN', '100000000', '75000000', '0.75', '48719169', NULL, NULL, NULL, '36', '2019-08-02', '2022-08-02', NULL, NULL, NULL, '0', NULL, 0, NULL),
(851, '2020-11-16', '2020-11-27', NULL, 'KEDAI PERANAP', 'DESA KATIPO PURA 007/005 KEC PERANAP -INHU', 'PRODUKTIF', '07.02.18.00454.10.12.0', 'RIAN PUTERA DONITA', '70000000', '52500000', '0.75', '28400948', '0', 'TANAH', '106416000', '36', '2018-09-13', '2021-09-13', 'PENURUNAN PRODUKSI', 'PERKEBUNAN KELAPA SAWIT', '0', '0', 'BOARE', 0, NULL),
(852, '2020-11-16', NULL, '2020-11-23', 'RSUD TELUK KUANTAN', NULL, 'SURETY BOND', NULL, 'RSUD TELUK KUANTAN', '722783800', '722783800', '7', '722783800', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(853, '2020-11-12', NULL, '2020-12-23', 'PT GLOBAL RISK MANAGEMENT', 'JL. INDRAGIRI RT 003 RW 001 KEL. KAMPUNG REMPAK KEC. SIAK KAB. SIAK', 'KONSUMTIF (meninggal dunia)', '07.02b.19.07103.11.1.12.0', 'TARMIZI', '155000000', '155000000', '1', '152370219', 'TIDAK ADA', 'SK', '0', '180', '2019-11-08', '2034-11-08', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '144751708.05', 'BOARE', 0, NULL),
(854, '2020-11-12', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. SELAMAT NO. 29 RT 003 REW 009 KEL. LABUH BARU KEC. PAYUNG SEKAKI, KOTA PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.04960.08.1.12.0', 'MARDIAH', '319000000', '319000000', '1', '293998250', 'TIDAK ADA', 'SK', '0', '109', '2019-08-13', '2028-09-13', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '279298337.5', 'BOARE', 0, NULL),
(855, '2020-11-12', '2020-11-23', NULL, 'CABANG PEMBANTU LIPAT KAIN', 'DUSUN BUKIT PERMAI', 'PRODUKTIF KUR', '07.02.18.18317.10.4.12.0', 'ERMITA', '380000000', '285000000', '0.75', '206221635', '0', 'TANAH PERUMAHAN', '325820250', '60', '2018-09-26', '2023-09-26', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(856, '2020-11-11', NULL, NULL, 'CABANG PASIR PENGARAIAN', 'JL. RIAU NO. 62 RT 002 RW 002 KEL. PASIR PENGARAIAN KEC. RAMBAH KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.17.01182.01.4.12.0', 'RUDI HIDAYAT', '300000000', '225000000', '0.75', '78480000', '0', 'TANAH PERUMAHAN', '197333333', '60', '2016-12-28', '2021-12-28', NULL, NULL, NULL, '0', NULL, 0, NULL),
(857, '2020-11-11', NULL, NULL, 'KEDAI PASAR LUBUK JAMBI', 'DESA LUBUK KAMO KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.17.00078.04.1.12.0', 'SUTRI MARHENI', '85000000', '42500000', '0.5', '12514771', '0', 'TANAH', '110000000', '48', '2017-04-20', '2021-04-20', NULL, NULL, NULL, '0', NULL, 0, NULL),
(858, '2020-11-09', NULL, NULL, 'KEDAI KUALA KILAN', 'DESA BUKIT BERSEMI RT 016 RW 005 DESA BUKIT LIPAI KEC. BATANG CENAKU KAB. INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00450.10.1.12.0', 'SLAMET', '70000000', '35000000', '0.75', '41684406', NULL, NULL, NULL, '48', '2018-09-10', '2022-09-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(859, '2020-11-09', NULL, NULL, 'KEDAI KUALA KILAN', 'DESA CENAKU KECIL 002/001 KEC. BATANG CENAKU KAB. INDRAGIRI HULU', 'PRODUKTIF', '07.02.15.00192.11.1.12.0', 'SAMSUDIN', '55000000', '16500000', '0.3', '11745527', NULL, NULL, NULL, '60', '2015-11-11', '2020-11-11', NULL, NULL, NULL, '0', NULL, 0, NULL),
(860, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'LANGKAN RT 002 RW 002 KEL. LANGKAN KEC. LANGGAM KAB. PELALAWAN ', 'PRODUKTIF', '07.02.17.00433.11.1.12.0', 'MUHAMMAD SETIAWAN', '100000000', '50000000', '0.5', '29112815', '0', NULL, NULL, '60', '2017-11-01', '2022-11-01', NULL, NULL, NULL, '0', NULL, 0, NULL),
(861, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'JL. MELATI I RT 001 RW 001 DESA BUKIT KRATAI KEC. RUMBIO JAYA, KAB. KAMPAR', 'PRODUKTIF', '07.02.17.00505.12.1.12.0', 'SURYANTI', '99000000', '49500000', '0.5', '29451600', NULL, NULL, NULL, '60', '2017-12-19', '2022-12-19', NULL, NULL, NULL, '0', NULL, 0, NULL),
(862, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA PKL. GONDAI KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.000505.12.1.12.0', 'ASRUL', '99000000', '49500000', '0.5', '30527850', NULL, NULL, NULL, '60', '2017-12-21', '2022-12-21', NULL, NULL, NULL, '0', NULL, 0, NULL),
(863, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDOMULYO RT 003 RW 002, DESA LANGKAN, KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00095.03.1.12.0', 'BUDIANTO', '99000000', '49500000', '0.5', '32099040', NULL, NULL, NULL, '60', '2018-02-14', '2023-02-14', NULL, NULL, NULL, '0', NULL, 0, NULL),
(864, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SUKA MULIA RT 02 RW 02 KEC. LANGGAM, KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00095.03.1.12.0', 'MUHAMMAD SUSENO', '99000000', '49500000', '0.5', '32099040', NULL, NULL, NULL, '60', '2018-02-26', '2023-02-26', NULL, NULL, NULL, '0', NULL, 0, NULL),
(865, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN TANJUNG SARI RT 015 RW 005 KAB. SIAK', 'PRODUKTIF', '07.02.18.00095.03.1.12.0', 'SUNARTO', '99000000', '49500000', '0.5', '32099040', NULL, NULL, NULL, '60', '2018-02-26', '2023-02-26', NULL, NULL, NULL, '0', NULL, 0, NULL),
(866, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA TAPUNG LESTARI 017/004 DESA TAPUNG LESTARI KEC. TAPUNG HILIR KAB. KAMPAR', 'PRODUKTIF', '07.02.18.000642.12.1.12.1', 'DESI NURYANTI', '99000000', '49500000', '0.5', '35903805', NULL, NULL, NULL, '60', '2018-07-19', '2023-07-19', NULL, NULL, NULL, '0', NULL, 0, NULL),
(867, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', NULL, 'PRODUKTIF', '07.02.18.00427.10.1.12.0', 'RUSTAM EFENDI', '99000000', '74250000', '0.75', '56066647', NULL, NULL, NULL, '60', '2018-09-24', '2023-09-24', NULL, NULL, NULL, '0', NULL, 0, NULL),
(868, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'PONDOK PKS LIBO 002/007 DESA SAM SAM KEC. KANDIS KAB. SIAK', 'PRODUKTIF', '07.02.18.00507.11.1.12.0', 'WAGIANTO', '99000000', '74250000', '0.75', '37377765', NULL, NULL, NULL, '60', '2018-10-10', '2023-10-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(869, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN LANGKAN 010/005 DESA LANGKAN KEC. LANGKAN KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00507.11.1.12.0', 'KAMINO', '99000000', '74250000', '0.75', '55542712', NULL, NULL, NULL, '60', '2018-10-10', '2023-10-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(870, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'TEBING TINGGI OKURA 003/003 KEC. RUMBAI PESISIR KOTA PEKANBARU', 'PRODUKTIF', NULL, 'BUDI SANTOSO', '99000000', NULL, NULL, '0', NULL, NULL, NULL, '60', '2018-12-10', '2023-12-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(871, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA PADANG LUAS 002/002 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00048.02.1.12.0', 'PONIRIN', '99000000', '74250000', '0.75', '60369322', NULL, NULL, NULL, '60', '2019-01-25', '2024-01-25', NULL, NULL, NULL, '0', NULL, 0, NULL),
(872, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN AIR PUTIH 003/003 DESA PANGKALAN GONDAI KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00056.02.1.12.0', 'YULIA CITRA', '99000000', '74250000', '0.75', '61420680', NULL, NULL, NULL, '60', '2019-02-04', '2024-02-04', NULL, NULL, NULL, '0', NULL, 0, NULL),
(873, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN 002/001 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00056.02.1.12.0', 'TATANG', '99000000', '74250000', '0.75', '61420680', NULL, NULL, NULL, '60', '2019-02-06', '2024-02-06', NULL, NULL, NULL, '0', NULL, 0, NULL),
(874, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN 002/001 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00056.02.1.12.0', 'NINING SARIYAH', '99000000', '74250000', '0.75', '60369322', NULL, NULL, NULL, '60', '2019-02-06', '2024-02-06', NULL, NULL, NULL, '0', NULL, 0, NULL),
(875, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'JALUR 6 DESA JATI SARI 004/004 KEL SIDOMUKTI KEC. PANGKALAN KURAS KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00206.05.1.12.0', 'NUR AJIZAH', '99000000', '74250000', '0.75', '62462475', NULL, NULL, NULL, '60', '2019-04-05', '2024-04-05', NULL, NULL, NULL, '0', NULL, 0, NULL),
(876, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA BUKIT PAYUNG 020/005 KEC. BANGKINANG KAB. KAMPAR', 'PRODUKTIF', '07.02.19.00254.06.1.12.0', 'RASNO', '100000000', '75000000', '0.75', '65169495', NULL, NULL, NULL, '60', '2019-05-07', '2024-05-07', NULL, NULL, NULL, '0', NULL, 0, NULL),
(877, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA PADANG LUAS 002/002 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00254.06.1.12.0', 'RAMADANI', '99000000', '74250000', '0.75', '64517782', NULL, NULL, NULL, '60', '2019-05-24', '2024-05-24', NULL, NULL, NULL, '0', NULL, 0, NULL),
(878, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSIN 1 RINGIN SARI 001/001 KEC BANGKINANG KAB KAMPAR', 'PRODUKTIF', '07.02.19.00268.06.1.12.0', 'SUPRIYONO', '99000000', '74250000', '0.75', '65531452', NULL, NULL, NULL, '60', '2019-06-21', '2024-06-21', NULL, NULL, NULL, '0', NULL, 0, NULL),
(879, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'BALAM SARI 003/002 DESA BALAM SEMPURNA KEC. BAGAN SINEMBAH KAB. ROKAN HILIR', 'PRODUKTIF', '07.02.19.00318.07.1.12.0', 'BUDIMAN', '99000000', '74250000', '0.75', '66535920', NULL, NULL, NULL, '60', '2019-07-04', '2024-07-04', NULL, NULL, NULL, '0', NULL, 0, NULL),
(880, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'KELURAHAN LANGGAM 002/005 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00369.07.1.12.0', 'ANDI HAMDANI', '99000000', '74250000', '0.75', '66535920', NULL, NULL, NULL, '60', '2019-07-10', '2024-07-10', NULL, NULL, NULL, '0', NULL, 0, NULL),
(881, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'JL. KENANGA II 004/001 DESA AIR TERBIT KEC. TAPUNG KAB. KAMPAR', 'PRODUKTIF', '07.02.19.00446.10.1.12.0', 'RUMIYATI', '100000000', '75000000', '0.75', '69209638', NULL, NULL, NULL, '60', '2019-09-04', '2024-09-04', NULL, NULL, NULL, '0', NULL, 0, NULL),
(882, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA BUKIT PAYUNG 022/006 KEC. BANGKINANG KAB. KAMPAR', 'PRODUKTIF', '07.02.19.00446.10.1.12.0', 'DASMEN', '99000000', '74250000', '0.75', '68517540', NULL, NULL, NULL, '60', '2019-09-06', '2024-09-06', NULL, NULL, NULL, '0', NULL, 0, NULL),
(883, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'JL. BANDES OKURA 001/003 KEL. TEBING TINGGI OKURA KEC. RUMBAI PESISIR KOTA PEKANBARU', 'PRODUKTIF', '07.02.19.00446.10.1.12.0', 'YULIASYAH PUTRI', '99000000', '74250000', '0.75', '66903165', NULL, NULL, NULL, '60', '2019-09-06', '2024-09-06', NULL, NULL, NULL, '0', NULL, 0, NULL),
(884, '2020-11-05', '2020-11-16', NULL, 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN 003/005 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00446.10.1.12.0', 'HARIYANSYAH RIZAL', '99000000', '74250000', '0.75', '68517540', NULL, NULL, NULL, '60', '2019-09-25', '2024-09-25', NULL, NULL, NULL, '0', NULL, 0, NULL),
(885, '2020-11-03', NULL, '2020-12-23', 'KEDAI PUJUD', 'HULU BANGKO RT 011/RW 001 KEL. PUJUD, KEC. PUJUD', 'PRODUKTIF', '07.02.19.00161.05.1.12.0', 'ROMADONI', '50000000', '37500000', '0.75', '27103020', '0', 'TANAH PERKEBUNAN', '57181500', '36', '2019-04-10', '2022-04-10', 'TERJAMIN TIDAK DAPAT DIHUBUNGI', 'PERKEBUNAN KELAPA SAWIT', '0.5', '13551510', 'IGNA ASIA', 0, NULL),
(886, '2020-11-03', NULL, NULL, 'CABANG PEMBANTU PERAWANG', 'JL. GERINGGING RT 003/RW  KEL. TEBING TINGGI OKURA KEC. RUMBAI PESISIR', 'PRODUKTIF (meninggal dunia)', NULL, 'NURAINI', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(887, '2020-11-03', '2020-11-11', NULL, 'KEDAI PUJUD', 'HULU BANGKO RT 011/RW 001 KEL. PUJUD, KEC. PUJUD', 'PRODUKTIF', '07.02.19.00027.02.1.12.0', 'WASDI', '80000000', '60000000', '0.75', '51728110', '0', 'TANAH PERKEBUNAN', '58344000', '60', '2019-01-07', '2024-01-07', 'TERJAMIN TIDAK DAPAT DIHUBUNGI', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(888, '2020-11-03', '2020-11-12', NULL, 'KEDAI MUARA LEMBU', 'JL. MANGKUTO SINARO RT 002 RW 004 KEL. MUARA LEMBU', 'PRODUKTIF KUR', '07.02.19.20734.05.4.12.0', 'ARZAN', '400000000', '300000000', '0.75', '291666671', '0', 'TANAH BANGUNAN ', '401486667', '48', '2019-03-27', '2023-03-27', NULL, NULL, NULL, '0', NULL, 0, NULL),
(889, '2020-11-02', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL. ROKAN NO. 74 RT 004 RW 005 KEL. TANJUNG RHU KEC. LIMAPULUH PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00611.05.1.12.0', 'SARNIWATI PASARIBU', '25000000', '25000000', '1', '7003123', 'TIDAK ADA', 'SK', '0', '36', '2018-05-24', '2021-05-24', 'MENINGGAL DUNIA', 'PEGAWAI TIDAK TETAP', '0.9', '6302810.7', 'APIRE', 0, NULL),
(890, '2020-10-27', NULL, '2020-12-23', 'KEDAI DURIAN', 'JL. TANJUNG DATUK NOMOR 158B RT 004 RW 005 KEL. PESISIR, KEC. 50 KOTA PEKANBARU', 'PRODUKTIF', '07.02.20.00066.03.1.12.0', 'JOHNNY HANNY TOMPUNU', '100000000', '50000000', '0.5', '91167395', NULL, 'TANAH & BANGUNAN', '221025000', '60', '2020-02-17', '2025-02-17', 'MENINGGAL DUNIA', 'YAYASAN PENDIDIKAN', '0.95', '86609025.25', 'BOARE', 0, NULL),
(891, '2020-10-22', NULL, '2020-12-23', 'KEDAI BATU PANJANG RUPAT', 'JL. SAHADAN RT 001/RW 001 DESA BARUL AMAN', 'PRODUKTIF KUR', '07.02.18.17992.09.4.12.0', 'SYAIPUL AMRI', '100000000', '75000000', '0.75', '35854154', '0', 'TANAH', '51000000', '36', '2018-09-14', '2021-09-14', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.95', '34061446.3', 'BOARE', 0, NULL),
(892, '2020-10-22', NULL, '2020-12-23', 'KEDAI BATU PANJANG RUPAT', 'JL. MERDEKA RT 005 RW 002 KEL. PERGAM KEC. RUPAT KAB. BENGKALIS', 'PRODUKTIF', '07.02.19.00036.02.1.12.0', 'MUHAMMAD JHONI. S', '50000000', '25000000', '0.5', '16712765', '0', 'TANAH', '47062500', '36', '2019-01-18', '2022-01-18', 'SEPI PEMBELI', 'KEDAI ECERAN', '0.5', '8356382.5', 'IGNA ASIA', 0, NULL),
(893, '2020-10-22', NULL, '2020-12-29', 'CAPEM BELILAS', 'BULUH RAMPAI 008/003 DESA BULUH RAMPAI KEC. SEBERIDA KAB. INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.19.00359.09.1.12.0', 'DEDY PRAYITNO', '80000000', '60000000', '0.75', '56194346', 'TIDAK ADA', 'TANAH', '81440000', '36', '2019-08-12', '2022-08-12', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(894, '2020-10-22', NULL, '2020-12-23', 'PT GLOBAL RISK MANAGEMENT', 'SERESAM RT 011 RW 002 KEL. SERESAM KEC. SEBERIDA KAB. INDRAGIRI HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.01508.03.1.12.0', 'SUNANTO', '120000000', '120000000', '1', '108381033', 'TIDAK ADA', 'SK', '0', '108', '2019-03-20', '2028-03-20', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '102961981.35', 'BOARE', 0, NULL),
(895, '2020-10-22', '2020-11-19', NULL, 'KEDAI TANDUN', 'TANDUN RT 004 RW 001 KEL. TANDUN KEC. TANDUN KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.19.21078.05.4.12.0', 'SASRINI', '100000000', '75000000', '0.75', '89807355', '0', 'TANAH PERKEBUNAN', '75000000', '48', '2019-05-23', '2023-05-23', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.95', '85316987.25', 'BOARE', 0, NULL),
(896, '2020-10-19', NULL, '2020-11-30', 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'ENDRI APRIONO', '250000000', '250000000', '1', '246071771', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.95', '233768182.45', 'BOARE', 0, NULL),
(897, '2020-10-19', NULL, '2020-11-30', 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'DZULFAJRI', '170000000', '170000000', '1', '144375578', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.95', '137156799.1', 'BOARE', 0, NULL),
(898, '2020-10-19', NULL, '2020-12-23', 'PT GLOBAL RISK MANAGEMENT', 'JL. DUMAI SEI PAKNING RT 005 RW KEL. PELINTUNG, KEC. MEDANG KAMPAI, KOTA DUMAI', 'KONSUMTIF', '07.02b.19.04457.07.1.12.0', 'HANAFI', '570000000', '570000000', '1', '80808408', 'TIDAK ADA', 'SK', '0', '168', '2019-07-22', '2033-07-22', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.95', '76767987.6', 'BOARE', 0, NULL),
(899, '2020-10-19', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. KMP. GUDANG RT 002 RW 003 KEL. MINAS TIMUR KEC. MINAS, KAB. SIAK', 'KONSUMTIF (meninggal dunia)', '07.02b.19.06483.10.1.12.0', 'SURYONO', '960000000', '960000000', '1', '811825436', 'TIDAK ADA', 'SK', '0', '54', '2019-10-09', '2024-04-09', 'MENINGGAL DUNIA', 'ANGGOTA DPRD', '0.95', '771234164.2', 'BOARE', 0, NULL),
(900, '2020-10-19', NULL, '2020-12-23', 'KEDAI PASAR SAIL', 'JL. TENAYAN JAYA, Gg. MASJID RT/RW 01/14 KEL. SAIL, KEC. TENAYAN, KOTA PEKANBARU', 'PRODUKTIF', '07.02.18.00116.04.1.12.0', 'WARNI', '50000000', '37500000', '0.75', '12954697', NULL, 'TANAH & BANGUNAN', '50228333', '36', '2018-03-21', '2021-03-21', 'PRODUKSI MENURUN', 'WARUNG BARANG HARIAN', NULL, NULL, NULL, 0, NULL),
(901, '2020-10-15', NULL, NULL, 'KEDAI MARPOYAN', 'JL. PASIR PUTIH NO. 23a RT 001 RW 002 KEL. TANAH MERAH, KEC. SIAK HULU, KAB. KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.18.00354.08.1.12.0', 'KHAILISNI', '100000000', '30000000', '0.3', '54166674', 'TIDAK ADA', NULL, NULL, '48', '2018-07-20', '2022-07-20', 'MENINGGAL DUNIA', NULL, NULL, '0', NULL, 0, NULL),
(902, '2020-10-15', NULL, '2020-12-23', 'PT GLOBAL RISK MANAGEMENT', 'DUSUN PULAU SARAK RT 002 RW 002 KEL. RUMBIO, KEC. KAMPAR RUMBIO, KAB. KAMPAR', 'KONSUMTIF (meninggal dunia)', '07.02a.18.01219.12.1.12.0', 'HASNIMAR', '150000000', '150000000', '1', '94413543', 'TIDAK ADA', 'SK', '0', '48', '2018-12-21', '2022-12-21', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '89692865.85', 'BOARE', 0, NULL),
(903, '2020-10-15', NULL, '2020-12-23', 'KEDAI SUNGAI SEMBILAN', 'JL. ALAH AIR RT 003 KEL. LUBUK GAUNG KEC. SUNGAI SEMBILAN', 'PRODUKTIF', '07.02.19.00578.12.1.12.0', 'ASRUL', '100000000', '50000000', '0.5', '47694274', '0', 'TANAH BANGUNAN', '151500000', '36', '2019-12-18', '2022-12-18', 'PRODUKSI MENURUN', 'TOKO BAHAN BANGUNAN', '0.95', '45309560.3', 'BOARE', 0, NULL),
(904, '2020-10-15', NULL, '2020-12-23', 'KEDAI PASAR PAGI ARENGKA', 'JL. SULTANSYARIF KASIM NO.29 KEL. PESISIR, KEC. LIMA PULUH ', 'PRODUKTIF (meninggal dunia)', '07.02.19.00114.03.1.12.0', 'KASLAN TAMPUBOLON', '200000000', '100000000', '0.5', '124999994', '0', 'BANGUNAN', '243520000', '48', '2019-03-08', '2023-03-08', 'MENINGGAL DUNIA', 'PERDAGANGAN', '0.9', '112499994.6', 'IGNA ASIA', 0, NULL),
(905, '2020-10-06', NULL, '2020-12-23', 'PT GLOBAL RISK MANAGEMENT', 'LABOH RT 02 RW 01 LABOH SENAYANG', 'KONSUMTIF (meninggal dunia)', '07.02.20.01577.03.1.12.0', 'AMIYATI', '199000000', '199000000', '1', '195063055', 'TIDAK ADA', 'SK', '0', '116', '2020-03-20', '2029-11-20', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '185309902.25', 'BOARE', 0, NULL),
(906, '2020-09-30', NULL, '2020-12-23', 'KEDAI PASAR SAIL', 'JL. HANGTUAH RT. 004 RW. 030 KEL. SAIL KEC. TENAYAN RAYA. PEKANBARU', 'PRODUKTIF KUR', '07.02.19.00024.02.1.12.0', 'NURBAYA', '50000000', '37500000', '0.75', '26091146.25', NULL, 'TANAH', '250000000', '36', '2019-01-15', '2022-01-15', 'PRODUKSI MENURUN', 'USAHA TERNAK IKAN', '0.5', '13045573.125', 'IGNA ASIA', 0, NULL),
(907, '2020-09-30', NULL, NULL, 'CABANG PEMBANTU SUNGAI GUNTUNG', 'JL. KAMPUNG NELAYAN RT. 002 RW. 003 KEL. BANDAR SRI GEMILANG KEC. KATEMAN KAB. INHIL', 'PRODUKTIF', '07.02.18.00327.07.1.12.0', 'DARMADI', '95000000', '28500000', '0.3', '19145890.2', NULL, 'TANAH PERKEBUNAN', '85398000', '48', '2018-07-05', '2022-07-05', NULL, 'NELAYAN', NULL, NULL, NULL, 0, NULL),
(908, '2020-09-30', NULL, NULL, 'CABANG PEKANBARU', NULL, 'PRODUKTIF KUR', NULL, 'ASRUL', '100000000', '50000000', '0.5', '49168350.5', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(909, '2020-09-30', NULL, '2020-11-30', 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'ZAMZUNIR', '190000000', '190000000', '1', '182220288', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '0.95', '173109273.6', 'BOARE', 0, NULL),
(910, '2020-09-29', NULL, '2020-12-23', 'CABANG PEMBANTU TAREMPA', 'JL. KAMPUNG TANJUNG KIANU KABUPATEN KEPULAUAN ANAMBAS', 'PRODUKTIF KUR', '07.02.18.00452.12.4.12.0', 'HERMAN', '100000000', '75000000', '0.75', '32464466', NULL, 'TANAH DAN BANGUNAN', '133400000', '48', '2017-12-04', '2021-12-04', 'PRODUKSI MENURUN', 'JASA PERIKANAN', NULL, '0', NULL, 0, NULL),
(911, '2020-09-29', '2020-12-29', NULL, 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'RONI PASLA', '200000000', '200000000', '1', '195880910', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '0.95', '186086864.5', 'BOARE', 0, NULL),
(912, '2020-09-28', NULL, '2020-12-23', 'CABANG PEMBANTU PERAWANG', 'KM6 PERAWANG RT 001 RW 006 KEL. PERAWANG, KEC. TUALANG, KAB. SIAK', 'PRODUKTIF (meninggal dunia)', '07.02.20.00084.03.1.12.0', 'SYAFRI CAN', '30000000', '22500000', '0.75', '27132246', NULL, 'TANAH & BANGUNAN', NULL, '36', '2020-02-18', '2023-02-18', 'MENINGGAL DUNIA', 'PENJAHIT PAKAIAN', '0.95', '25775633.7', 'BOARE', 0, NULL),
(913, '2020-09-28', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', NULL, 'KONSUMTIF', NULL, 'HUSNALITA, SH, MKN', '235000000', '235000000', '1', '145520575', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '0.9', '130968517.5', 'APIRE', 0, NULL),
(914, '2020-09-28', NULL, '2020-12-23', 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. SYECH MUHD. KHOTIB RT 001 RW 001 KEL. SUNGA PINANG, KEC. PUJUD, KAB. ROKAN HILIR', 'PRODUKTIF KUR', '07.02.18.18148.09.4.12.0', 'ANDESWAN', '100000000', '75000000', '0.75', '29494781', NULL, 'TANAH & BANGUNAN', '87600000', '36', '2017-05-17', '2020-05-17', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(915, '2020-09-28', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'JL. MANGGIS 002/010, KEC. UJUNG BATU', 'PRODUKTIF', '07.02.19.00301.07.1.12.0', 'DARUL NAFIS', '100000000', '50000000', '0.5', '102180780', '0', 'TANAH PERKEBUNAN', '66666667', '96', '2019-06-20', '2027-06-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', NULL, 0, NULL),
(916, '2020-09-28', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'JL. MANGGIS 002/010, KEC. UJUNG BATU', 'PRODUKTIF', '07.02.19.00301.07.1.12.1', 'DARUL NAFIS', '100000000', '50000000', '0.5', '102180780', '0', 'TANAH PERKEBUNAN', '66666667', '96', '2019-06-20', '2027-06-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', NULL, 0, NULL),
(917, '2020-09-25', NULL, NULL, 'KEDAI KUALA KILAN', 'DESA BUKIT LIPAI 022/006 KEC. BATANG CENAKU KAB. INHU', 'PRODUKTIF', '07.02.14.00119.11.1.12.0', 'ISMIATI UMAYAH', '100000000', '30000000', '0.3', '3899960', NULL, 'TANAH PERKEBUNAN', '240000000', '72', '2014-10-22', '2020-10-22', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(918, '2020-09-25', '2020-12-02', NULL, 'KEDAI KUALA KILAN', 'DESA BUKIT LIPAI 006/003 KEC CENAKU INHU', 'PRODUKTIF', '07.02.16.00040.02.1.12.0', 'AHMAD FAUZI', '100000000', '30000000', '0.3', '13034392', NULL, 'TANAH PERKEBUNAN', '80000000', '72', '2016-02-09', '2022-02-09', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(919, '2020-09-23', NULL, '2020-12-23', 'KEDAI PASAR PAGI ARENGKA', 'JL. DARU-DARU RT 002 RW 005 PEKANBARU', 'PRODUKTIF', '07.02.18.00397.09.1.12.0', 'AMINAN', '60000000', '45000000', '0.75', '31365562', NULL, 'TANAH DAN BANGUNAN', '162850000', '36', '2018-08-20', '2021-08-20', 'PRODUKSI MENURUN', 'PERCETAKAN', NULL, '0', NULL, 0, NULL),
(920, '2020-09-22', NULL, '2020-12-23', 'CABANG PEMBANTU PERAWANG', 'JL. NENAS NO. 07 RT 008 RW. 002 KEL. PERAWANG BARAT KEC. TUALANG. KAB. SIAK', 'PRODUKTIF (meninggal dunia)', '07.02.19.00516.11.1.12.0', 'SRI DAHLIANA SIAHAAN', '99000000', '74250000', '0.75', '79720826', NULL, 'TANAH PERKEBUNAN', NULL, '36', '2020-10-21', '2023-10-21', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.95', '75734784.7', 'BOARE', 0, NULL),
(921, '2020-09-22', NULL, NULL, 'CABANG BANGKINANG', 'DUSUN II BERINGIN JAYA RT/RW 001/001 PANGKALAN SERIK SIAK HULU', 'KONSUMTIF', '07.02B.19.05227.08.1.12.0', 'DENDI ZULHERI', '210000000', '210000000', '1', '207189167', NULL, 'SK', NULL, '180', '2019-08-22', '2034-08-22', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, '0', NULL, 0, NULL),
(922, '2020-09-21', NULL, NULL, 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. SEI SIAK NO. 02 RT/ RW. 014/000 KEL. BULUH KASAP KEC. DUMAI TIMUR KAB/KOTA. DUMAI PROV. RIAU', 'PRODUKTIF KUR', '07.02.19.23299.09.4.12.0', 'MARDIANTO', '500000000', '375000000', '0.75', '335116035', NULL, 'TANAH PERKEBUNAN', '397000000', '36', '2019-09-27', '2022-09-27', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(923, '2020-09-21', NULL, '2020-12-23', 'CABANG PEMBANTU KOTA TENGAH', 'KOTA TENGAH RT 003 RW 006 KEL. KOTA TENGAH, KEC. KEPENUHAN, KAB. ROKAN HULU', 'PRODUKTIF', '07.02.18.00619.12.1.12.0', 'ISMANTO', '100000000', '30000000', '0.3', '22327221', NULL, 'TANAH & BANGUNAN', '88200000', '48', '2018-12-21', '2022-12-21', 'PRODUKSI MENURUN', 'PENGGILINGAN DAGING BAKSO', '0.5', '11163610.5', 'IGNA ASIA', 0, NULL),
(924, '2020-09-16', '2020-12-11', NULL, 'KEDAI TANJUNG SAMAK', 'JL. SULTAN SYARIF KASIM TELUKSEMAK. KEC. RANGSANG. KAB.KEP.MERANTI', 'PRODUKTIF', '07.02.19.00150.05.1.12.0', 'SYAHRIZAN', '140000000', '105000000', '0.75', '87790209', NULL, NULL, NULL, '48', '2019-03-13', '2023-03-13', 'KALAH BERSAING', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(925, '2020-09-16', NULL, '2020-12-23', 'KEDAI TANJUNG SAMAK', 'DUSUN PELITA JAYA RT. 03/RW. 01 DESA NIPAH SENDANU KEC. TEBING TINGI TIMUR', 'PRODUKTIF', '07.02.19.20362.03.4.12.0', 'SUWANDI', '25000000', '18750000', '0.75', '9181279', NULL, NULL, NULL, '24', '2019-03-08', '2021-03-08', 'KALAH BERSAING', 'PETERNAK AYAM PEDAGING', '0.95', '8722215.05', 'BOARE', 0, NULL),
(926, '2020-09-16', NULL, NULL, 'CABANG TELUK KUANTAN', 'JL. PROKLAMASI 001/001 SUNGAI JERING KEC. KUANTAN TENGAH', 'PRODUKTIF', '07.02.17.00332.09.1.12.0', 'NOFRIZAL', '300000000', '150000000', '0.5', '79068448', NULL, NULL, NULL, '60', '2017-09-07', '2022-09-07', NULL, 'PEDAGANG ECERAN', NULL, '0', NULL, 0, NULL),
(927, '2020-09-16', NULL, NULL, 'CABANG TELUK KUANTAN', NULL, 'PRODUKTIF', '07.02.17.00076.05.4.12.0', 'MUHAMMAD ALI', '60000000', '45000000', '0.75', '12589863.75', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(928, '2020-09-16', NULL, '2020-12-30', 'CABANG PEMBANTU TANJUNG UBAN', NULL, 'PRODUKTIF', '07.01.18.00158.05.1.12.0', 'YANCE OKTAVIANO', '105000000', '105000000', '1', '78641790', NULL, NULL, NULL, '72', '2018-04-11', '2024-04-11', NULL, NULL, NULL, '0', NULL, 0, NULL),
(929, '2020-09-16', '2020-10-09', NULL, 'CABANG PEMBANTU TANJUNG UBAN', 'PERUM SIJORI INDAH BLOK C NO. 4 RT 008 RW 002 KEL. TANJUNG UBAN SELATAN KEC. BINTAN UTARA', 'PRODUKTIF', '07.02.19.00211.05.1.12.0', 'WAHYU ANGGARA', '50000000', '37500000', '0.75', '32332809', '0', 'TANAH PERKEBUNAN', '122092000', '48', '2019-04-10', '2023-04-10', 'PENURUNAN PRODUKSI', 'WARUNG KELONTONG', '0.95', '30716168.55', 'BOARE', 0, NULL),
(930, '2020-09-14', '2020-12-29', NULL, 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'JUNAIDI', '320000000', '320000000', '1', '320000000', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '0.95', '304000000', 'BOARE', 0, NULL),
(931, '2020-09-14', NULL, '2020-11-30', 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'SAID MASHUDI', '567748455', '567748455', '1', '584779605', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '0.95', '555540624.75', 'BOARE', 0, NULL),
(932, '2020-09-14', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'HAMILTON FAJAR Z. ERWIN', '210000000', '210000000', '1', '197094740', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '0.95', '187240003', 'BOARE', 0, NULL),
(933, '2020-09-14', '2020-10-01', NULL, 'PT GLOBAL RISK MANAGEMENT', 'KP. HARAPAN BARU TELUK SASAH SERI KUALA LOBAM', 'KONSUMTIF', '07.02b.19.02411.04.1.12.0', 'MUHAMMAD SALEH', '130000000', '130000000', '1', '116025300', 'TIDAK ADA', 'SK & TANAH', '138880000', '60', '2019-04-26', '2024-04-26', 'BERKURANG KEMAMPUAN BAYAR', 'KARYAWAN SWASTA', '0.95', '110224035', 'BOARE', 0, NULL),
(934, '2020-09-14', '2020-12-07', NULL, 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'ADE PUTRA', '35000000', '35000000', '1', '26397871', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '0.95', '25077977.45', 'BOARE', 0, NULL),
(935, '2020-09-14', '2020-11-10', NULL, 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF', NULL, 'MARLIS', '100000000', '100000000', '1', '96299779', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '0.95', '91484790.05', 'BOARE', 0, NULL),
(936, '2020-09-09', '2020-12-12', NULL, 'KEDAI PASAR MINAS', 'JL. PERAWANG KM 04 RT/RW 001/002 KEL MINAS TIMUR KEC MINAS KAB. SIAK', 'PRODUKTIF', NULL, 'RIWENDI KABAN', '50000000', '25000000', '0.5', '19285970', NULL, 'TANAH PERKEBUNAN', NULL, '36', '2019-02-15', '2022-02-15', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(937, '2020-09-09', NULL, NULL, 'CABANG BANGKINANG', 'DUSUN Li METRO LESTARI RT 001 RW 002 KEL. BATU BELAH', 'KONSUMTIF', NULL, 'MASWIR', '200000000', '200000000', '1', '179802950', NULL, 'SK', NULL, '120', '2018-11-19', '2028-11-19', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(938, '2020-09-03', NULL, NULL, 'CABANG PEMBANTU RUMBAI', 'JL. SELINDIT NO.23 RT. 002 RW. 002 KEL KAMPUNG MELAYU KEC SUKAJADI', 'PRODUKTIF', '07.02.18.00662.12.1.12.0', 'ELLY SIANIPAR', '250000000', '125000000', '0.5', '89157205', NULL, 'TANAH', '1092280000', '60', '2018-08-21', '2023-08-21', NULL, 'RUMAH TANGGA UNTUK KEPERLUAN YANG TIDAK DIKLASFIKASIKAN DI TEMPAT LAIN', NULL, NULL, NULL, 0, NULL),
(939, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDOMULYO DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00118.03.1.12.0', 'AHMAD SUNARTIO', '99000000', '74250000', '0.75', '59423387', '0', 'TANAH PERKEBUNAN', '100000000', '48', '2019-03-26', '2023-03-26', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(940, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN PASIR PUTIH RT 003 RW 007 KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00425.10.1.12.0', 'AGUS SOFIAN', '99000000', '74250000', '0.75', '44236254', '0', 'TANAH PERKEBUNAN', '100000000', '36', '2018-08-29', '2021-08-29', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(941, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI RT 001 RW 001 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00087.04.1.12.0', 'JUNAEDI', '50000000', '25000000', '0.5', '12550867', '0', 'TANAH PERKEBUNAN', '70000000', '36', '2017-03-02', '2020-03-02', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(942, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI RT 003/002 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00206.05.1.12.0', 'KASMINI ', '9900000', '74250000', '0.75', '60767790', '0', 'TANAH PERKEBUNAN', '200000000', '48', '2019-04-29', '2023-04-29', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(943, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI RT 001 RW 001 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00087.04.1.12.0', 'KAMSIAH', '99000000', '49500000', '0.5', '24850782', '0', 'TANAH PERKEBNUNAN', '70000000', '60', '2017-03-02', '2022-03-02', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(944, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI 001/006 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.19.00254.06.1.12.0', 'NURIYANDANI', '99000000', '74250000', '0.75', '62099975', '0', 'TANAH PERKEBUNAN', '200000000', '48', '2019-05-02', '2023-05-02', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(945, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADIDESA LANGKAN KEC. LANGGAM KAB. PELALAWAN ', 'PRODUKTIF', '07.02.18.00207.06.1.12.0', 'SUHERMAN', '99000000', '49500000', '0.5', '23782315', NULL, 'TANAH PERKEBUNAN', '66000000', '36', '2018-05-23', '2021-05-23', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(946, '2020-09-02', NULL, NULL, 'KEDAI BANDAR SEI KIJANG', 'DUSUN SIDODADI DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00433.11.1.12.0', 'DINA PURWANTI', '99000000', '49500000', '0.5', '16883472', NULL, NULL, NULL, '36', '2017-11-09', '2020-11-09', NULL, 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(947, '2020-09-01', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'DUSUN TULANG GAJAH RT 001 RW 002 KEL. PEMATANG BERANGAN, KEC. RAMBAH, KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00879.06.1.12.0', 'YULIZAR', '100000000', '100000000', '1', '79627418', 'TIDAK ADA', 'SK', '0', '84', '2018-05-05', '2025-05-05', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '71664676.2', 'APIRE', 0, NULL),
(948, '2020-08-25', NULL, '2020-11-03', 'PT. GLOBAL RISK MANAGEMENT', 'BUKIT PALEM PERMAI BLOK C-1 NO. 9, RT. 003, RW. 001, KEL. BELIAN, KEC. BATAM KOTA, KOTA BATAM', 'KONSUMTIF (meninggal dunia)', '07.02B.19.00052.01.1.12.0', 'MARLINDA TIRTA SARI', '250000000', '250000000', '1', '228376225', 'TIDAK ADA', 'SK', '0', '120', '2019-01-10', '2029-01-10', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '216957413.75', 'BOARE', 0, NULL),
(949, '2020-08-19', NULL, '2020-12-23', 'CABANG PEMBANTU FLAMBOYAN', 'DUSUN SUMBER MAKMUR, RT. 006, RW. 003, KEL. SUMBER MAKMUR, KEC. TAPUNG, KAB. KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.17.00461.11.1.12.0', 'SUPARDI', '250000000', '75000000', '0.3', '139393648', 'TIDAK ADA', 'TANAH PERKEBUNAN', '327686400', '60', '2017-07-11', '2022-07-11', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '125454283.2', 'IGNA ASIA', 0, NULL),
(950, '2020-08-18', '2020-12-11', NULL, 'CABANG PEMBANTU SUNGAI GUNTUNG', NULL, 'PRODUKTIF ', '07.02.19.00115.04.1.12.0', 'R.S MUHAMMAD IDRIS', '1000000000', '750000000', '0.75', '749657164', '0', NULL, '1448855667', '12', '2019-03-22', '2020-03-22', 'PRODUKSI MENURUN', 'PERDAGANGAN DAN JASA', NULL, '0', NULL, 0, NULL),
(951, '2020-08-13', NULL, '2020-12-23', 'CABANG PEMBANTU DALU-DALU', 'DALU-DALU, RT. 003, RW. 001, KEL.TAMBUSAI TENGAH, KEC. TAMBUSAI, KAB ROKAN HULU', 'PRODUKTIF (meninggal dunia)', '07.0218.00250.06.1.12.0', 'NAHARUDDIN', '25000000', '12500000', '0.5', '13344180', 'TIDAK ADA', 'TANAH DAN BANGUNAN', '96366667', '48', '2018-05-17', '2022-05-17', 'MENINGGAL DUNIA', 'PERDAGANGAN', '1', '13344180', 'AL AMIN', 0, NULL),
(952, '2020-08-13', NULL, '2020-10-27', 'CABANG SIAK ', 'DAYUN, RT. 004, RW. 002, KEL. DAYUN, KEC. DAYUN, KABUPATEN SIAK ', 'PRODUKTIF KUR', '07.02.18.18907.11.4.12.0', 'NGATMINI EKA PRATIWI', '125000000', '93750000', '0.75', '57460925', '0', 'TANAH DAN BANGUNAN', '112938667', '48', '2018-06-26', '2022-06-26', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(953, '2020-08-13', NULL, '2020-09-25', 'CABANG PEMBANTU BASERAH', 'KUANTAN SAKO, RT. 005, RW. 002, KEL. KUANTAN SAKO, KEC. LOGAS TANAH DARAT.', 'PRODUKTIF (meninggal dunia)', '07.02.17.00377.10.1.12.0', 'HARTONO', '150000000', '75000000', '0.5', '50000000', 'TIDAK ADA', 'TANAH PERKEBUNAN', '181666800', '48', '2017-10-20', '2021-10-20', 'MENINGGAL DUNIA', 'PERDAGANGAN DAN PERTANIAN', NULL, '0', NULL, 0, NULL),
(954, '2020-08-11', NULL, '2020-12-23', 'CABANG PEMBANTU RUMBAI', 'JLN. TANJUNG DATUK NO. 158 B, RT. 004, RW. 005, KEL. PESISIR, KEC. LIMA PULUH, KOTA PEKANBARU.', 'PRODUKTIF KUR', '07.02.19.23792.10.4.12.0', 'RITA ANTHONY', '300000000', '225000000', '0.75', '215671871', '0', 'TANAH DAN BANGUNAN', '300000000', '36', '2019-10-30', '2022-10-30', 'PENJUALAN MENURUN', 'PERDAGANGAN', '0.95', '204888277.45', 'BOARE', 0, NULL),
(955, '2020-08-11', NULL, '2020-10-27', 'CABANG PEMBANTU RUMBAI', NULL, 'PRODUKTIF', '07.02.17.00048.04.1.12.0', 'PT. BUDI PERKASA PANCA', '250000000', '125000000', '0.5', '46968605', '0', 'TANAH DAN BANGUNAN', NULL, '60', '2017-03-06', '2022-03-06', 'PENJUALAN MENURUN', 'PERDAGANGAN ', '0.5', '23484302.5', 'IGNA ASIA', 0, NULL),
(956, '2020-08-11', NULL, '2020-10-27', 'CABANG TALUK KUANTAN', 'JALAN. AMAL BAKTI, NO. 15, RT. 004, RW. 007, KEL. LABUH BARU TIMUR, KEC. PAYUNG SEKAKI, KOTA PEKANBARU', 'PRODUKTIF KUR', '07.02.17.00283.10.4.12.0', 'MARIO ARDI', '35000000', '26250000', '0.75', '6698684', '0', 'TANAH DAN BANGUNAN', '69750000', '36', '2017-10-16', '2020-10-16', 'PRODUKSI MENURUN', 'PERIKANAN (BUDIDAYA IKAN TERNAK)', NULL, NULL, NULL, 0, NULL),
(957, '2020-08-11', NULL, '2020-10-27', 'CABANG TALUK KUANTAN', 'DESA KAMPUNG BARU, RT. 009, RW. 005, KEL. KAMPUNG BARU, KEC. CERENTI', 'PRODUKTIF KUR', '07.02.17.00073.05.4.12.0', 'SYAMSURI', '500000000', '375000000', '0.75', '103608597', '0', 'TANAH DAN BANGUNAN', '260500000', '48', '2020-05-12', '2024-05-12', 'PRODUKSI MENURUN', 'PERKEBUNAN KARET', NULL, NULL, NULL, 0, NULL),
(958, '2020-08-10', '2020-11-09', NULL, 'CABANG PEMBANTU KOTA TENGAH', 'JL. AHMAD YANI NO. 18, RT. 003/RW. 003, KEL. TANAH DATAR, KEC. PEKANBARU KOTA, KOTA PEKANBARU', 'PRODUKTIF', '07.02.18.00619.12.1.12.0', 'NOPITA ANDRIYANI', '80000000', '24000000', '0.3', '79649880', '0', 'TANAH PERKEBUNAN', '154583333', '60', '2018-12-20', '2023-12-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(959, '2020-08-10', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'SONTANG, RT. 007, RW. 002, KEL. SONTANG, KEC. BONAI DARUSSALAM, KAB. ROKAN HULU', 'PRODUKTIF', '07.02.19.00175.05.1.12.0', 'MULYADI', '350000000', '105000000', '0.3', '358115867', '0', 'TANAH PERKEBUNAN', '350000000', '60', '2019-04-12', '2024-04-12', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(960, '2020-08-10', NULL, NULL, 'CABANG PEMBANTU RUMBAI', 'JALAN SEMBILAN NO. 78, RT. 002, RW. 002, KEL. LIMBUNGAN, KEC. RUMBAI, KOTA PEKANBARU', 'PRODUKTIF', '07.02.19.00504.11.1.12.0', 'MASRIAL', '100000000', '30000000', '0.3', '91666668', '0', 'TANAH DAN BANGUNAN', '79410000', '48', '2019-10-24', '2023-10-24', 'PENJUALAN MENURUN', 'PERDAGANGAN', '0.95', '87083334.6', 'BOARE', 0, NULL),
(961, '2020-08-06', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'KEPENUHAN SEJATI, RT. 008, RW. OO1, KEL. KOTA TENGAH, KEC. KEPENUHAN, KAB. ROKAN HULU', 'PRODUKTIF (meninggal dunia)', '07.02.20.00099.03.1.12.0', 'M. YUSUF ', '100000000', '30000000', '0.3', '87805901', 'TIDAK ADA', 'TANAH PERKEBUNAN ', '153083333', '96', '2018-02-21', '2026-02-21', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(962, '2020-08-06', NULL, '2020-12-23', 'KEDAI MARPOYAN', 'JALAN. AMAL BAKTI, NO. 15, RT. 004, RW. 007, KEL. LABUH BARU TIMUR, KEC. PAYUNG SEKAKI, KOTA PEKANBARU', 'PRODUKTIF', '07.02.18.00142.04.1.12.0', 'LA ODE ASRUN', '25000000', '18750000', '0.75', '13934280', '0', 'TANAH PERKEBUNAN', '40430000', '60', '2018-04-05', '2023-04-05', 'PENJUALAN MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(963, '2020-08-05', '2020-09-16', NULL, 'CABANG PEMBANTU KOTA TENGAH', 'DUSUN II, RT. 001, RW. 004, KEL. PEKAN TEBIH, KEC. KEPENUHAN HULU, KAB. ROKAN HULU.', 'PRODUKTIF', '07.02.18.18360.10.4.12.0', 'RUDI HARTONO', '200000000', '150000000', '0.75', '159355498', '0', 'TANAH DAN BANGUNAN', '333737333', '60', '2018-09-26', '2023-09-26', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(964, '2020-08-05', NULL, '2020-10-27', 'CABANG PEMBANTU BASERAH', 'PASAR CERENTI, RT. 002, RW. 001, KEL. PASAR CERENTI, KEC. CERENTI, KAB. KUANTAN SINGINGI', 'PRODUKTIF', '07.02.18.00324.07.1.12.0', 'NURLELI', '250000000', '125000000', '0.5', '75115358', '0', 'TANAH DAN BANGUNAN', '320460000', '48', '2018-07-24', '2022-07-24', 'BUAH TREK ', 'PERKEBUNAN KELAPA SAWIT', '0.5', '37557679', 'IGNA ASIA', 0, NULL),
(965, '2020-08-05', NULL, '2020-12-23', 'KEDAI PUJUD', 'KM. 8 SIARANG ARANG, RT. 001, RW. 004, KEL. DESA SIARANG ARANG, KEC. PUJUD, KAB. ROKAN HILIR', 'PRODUKTIF', '07.02.19.00310.08.1.12.0', 'SUGIANTI', '55000000', '41250000', '0.75', '37346616', '0', 'TANAH DAN BANGUNAN', '55800000', '60', '2019-07-08', '2024-07-08', 'PENJUALAN MENURUN', 'PERDAGANGAN ', '0.95', '35479285.2', 'BOARE', 0, NULL),
(966, '2020-08-04', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'Jl. BATANG TUAKA LR. PULAI, RT. 002, RW. 002, KEL. PEKAN ARBA, KEC. TEMBILAHAN, KAB. INDRAGIRI HILIR', 'KONSUMTIF (meninggal dunia)', '07.02B.18.01013.05.1.12.0', 'TUMIN PRAYITNO', '70000000', '70000000', '1', '23385300', 'TIDAK ADA', 'SK', '0', '34', '2018-07-06', '2021-05-06', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '21046770', 'APIRE', 0, NULL),
(967, '2020-08-03', '2020-09-16', NULL, 'CABANG PEMBANTU KOTA TENGAH', 'KEPENUHAN TENGAH , RT. 006, RW. 003, KEL. KOTA TENGAH, KEC. KEPENUHAN, KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.19.22824.09.4.12.0', 'HELMI PUTRI', '450000000', '337500000', '0.75', '389519430', '0', 'TANAH DAN BANGUNAN', '448000000', '60', '2019-03-06', '2024-03-06', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.95', '370043458.5', 'BOARE', 0, NULL),
(968, '2020-07-30', NULL, NULL, 'CAPEM SUNGAI GUNTUNG', 'KALIMANTAN, RT.002, RW.002, KEL. PENJURU, KEC. KATEMAN, KAB. INDRAGIRUI HILIR', 'PRODUKTIF KUR', '07.02.19.20821.05.4.12.0', 'ERMI WATI', '100000000', '75000000', '0.75', '60016954', '0', 'TANAH DAN BANGUNAN', '43025000', '24', '2019-04-09', '2021-04-09', 'KALAH BERSAING', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(969, '2020-07-30', NULL, '2020-12-23', 'CABANG RANAI', 'BATU DUYUNG, RT. 001, RW. 002, KEL. SELADING, KEC. PULAU TIGA BARAT, KAB. NATUNA', 'PRODUKTIF KUR', '07.02.16.00895.12.4.12.0', 'ADNAN', '50000000', '37500000', '0.75', '7917970', '0', 'TANAH DAN BANGUNAN', '38400000', '48', '2016-11-23', '2020-11-23', 'PRODUKSI MENURUN', 'PERIKANAN (BUDIDAYA IKAN TERNAK)', NULL, '0', NULL, 0, NULL),
(970, '2020-07-30', '2020-12-11', NULL, 'CABANG PEMBANTU RUMBAI', 'PT CDSL PLASMA RT 002 RW 012 KEL. UMBAN SARI', 'PRODUKTIF KUR', '07.02.19.21598.07.4.12.0', 'PAHMAN HSB', '15000000', '11250000', '0.75', '7554675', '0', 'BPKB', '96000000', '48', '2019-07-26', '2023-07-26', 'USAHA TIDAK JALAN', 'KEDAI HARIAN', '0', '0', '0', 0, NULL),
(971, '2020-07-29', '2020-11-10', NULL, 'KEDAI RANTAU KASAI', 'KUALA MAHATO RT. 002, RW. 001, KEL. MAHATO, KEC. TAMBUSAI UTARA', 'PRODUKTIF KUR', '07.02.18.19676.11.4.12.0', 'EFREDI JEKSEN', '100000000', '75000000', '0.75', '64846086', '0', 'TANAH DAN BANGUNAN', '100000000', '36', '2018-06-29', '2021-06-29', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(972, '2020-07-29', '2020-11-10', NULL, 'KEDAI RANTAU KASAI', 'RANTAU SAKTI, RT. 012, RW. 005, KEL. RANTAU SAKTI, KEC. TAMBUSAI UTARA', 'PRODUKTIF', '07.02.18.00173.05.1.12.0', 'AGUS SURIANTO', '100000000', '50000000', '0.5', '76772953', '0', 'TANAH PERKEBUNAN', '120000000', '36', '2018-04-20', '2021-04-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '38386476.5', 'IGNA ASIA', 0, NULL),
(973, '2020-07-29', '2020-11-10', NULL, 'KEDAI RANTAU KASAI', 'RANTAU SAKTI, RT. 012, RW. 005, KEL. RANTAU SAKTI, KEC. TAMBUSAI UTARA', 'PRODUKTIF', '07.02.18.00173.05.1.12.0', 'ELDA RITA JANNAH', '100000000', '50000000', '0.5', '73578598', '0', 'TANAH PERKEBUNAN', '125000000', '36', '2018-04-20', '2021-04-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '36789299', 'IGNA ASIA', 0, NULL),
(974, '2020-07-29', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL. UTAMA SINABOI, RT. 002, RW.001, KEL. SINABOI KOTA, KEC. SINABOI, KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.2b.18.00530.05.1.12.0', 'AGINTA SEMBIRING', '190000000', '190000000', '1', '179258655', 'TIDAK ADA', 'SK', '0', '180', '2018-05-23', '2033-05-23', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '161332789.5', 'APIRE', 0, NULL);
INSERT INTO `tblklaim` (`idKlaim`, `tglmasuk`, `tglberkas`, `tglklaimbayar`, `PPnama`, `PPalamat`, `produk`, `sertifikat`, `nmterjamin`, `plafond`, `nilai_jaminan`, `coverage`, `nominal_klaim`, `subrogasi`, `agunan`, `taksasi_agunan`, `Jkwaktu`, `tglawal`, `tglakhir`, `macet`, `sektor`, `cover_reas`, `klaim_reas`, `broker`, `status`, `no_telp`) VALUES
(975, '2020-07-29', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL. PARIT AMAN, RT.001, RW.001, KEL. PARIT AMAN, KEC. BANGKO, KAB. ROKAN HILIR', 'KONSUMTIF (meninggal dunia)', '07.02b.18.01037.05.1.12.0', 'SUPRIYANTI', '250000000', '250000000', '1', '236501920', 'TIDAK ADA', 'SK', '0', '180', '2018-06-07', '2033-06-07', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '212851728', 'APIRE', 0, NULL),
(976, '2020-07-28', NULL, '2020-10-27', 'KEDAI SEI LALA', 'TL. SEI PARIT, RT. 003, RW. 002, KEL. TALANG SEI PARIT, KEC. RAKIT KULIM, KAB. INFRAGIRI HULU', 'PRODUKTIF', '07.02.19.00042.02.1.12.0', 'MASNIANTO', '99000000', '49500000', '0.5', '40283745', '0', 'TANAH PERKEBUNAN', '159800000', '48', '2019-01-25', '2023-01-25', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(977, '2020-07-27', NULL, '2020-10-19', 'CAPEM BELILAS', 'JL. LINTAS SELATAN BANDARPADANG, RT. 001, RW. 001, KEL. BANDAR PADANG, KEC. SEBERIDA, KAB. INDRAGIRI HULU.', 'PRODUKTIF', '07.02.18.00070.02.1.12.0', 'ABDUL MURSYID YANTO', '70000000', '52500000', '0.75', '35406278', NULL, 'TANAH DAN BANGUNAN', '71108000', '60', '2018-02-21', '2023-02-21', 'PENURUNAN PRODUKSI', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(978, '2020-07-27', NULL, '2020-08-31', 'PT. GLOBAL RISK MANAGEMENT', 'MUARA JAYA, RT. 001, RW. 001, KEL. MUARA JAYA, KEC. KEPENUHAN HULU, KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02a.18.00884.12.1.12.0', 'RAKHMAT', '200000000', '200000000', '1', '162349412', 'TIDAK ADA', 'SK', '0', '72', '2018-12-11', '2024-12-11', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '154231941.4', 'BOARE', 0, NULL),
(979, '2020-07-27', NULL, '2020-09-01', 'PT. GLOBAL RISK MANAGEMENT', 'KOMPLEK SATYA INSANI A4, RT. 002, RW. 014, KEL. PANGKALAN KERINCI KOTA, KEC. PANGKALAN KERINCI, KAB. PELALAWAN', 'KONSUMTIF (meninggal dunia)', '07.02b.19.07805.12.1.12.0', 'ASTERLY RIZQANI', '120000000', '120000000', '1', '88232910', 'TIDAK ADA', 'SK', '0', '21', '2019-12-17', '2021-09-17', 'MENINGGAL DUNIA', NULL, '0.95', '83821264.5', 'BOARE', 0, NULL),
(980, '2020-07-27', NULL, '2020-09-23', 'PT. GLOBAL RISK MANAGEMENT', 'DUSUN PASAR BARU, RT.-,RW.-, KEL. SIMPANG GAUNG, KEC. GAUNG, KAB. INDRAGIRI HILIR', 'KONSUMTIF (meninggal dunia)', '07.02c.20.02319.05.1.12.0', 'ANTARA', '290000000', '290000000', '1', '290000000', 'TIDAK ADA', 'SK', '0', '180', '2020-05-08', '2035-05-08', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '275500000', 'BOARE', 0, NULL),
(981, '2020-07-27', NULL, '2020-09-23', 'PT. GLOBAL RISK MANAGEMENT', 'KP. BARU BAWAH, RT. 003, RW. 006, KEL. UJUNG BATU, KEC. UJUNG BATU, KAB ROKAN HULU.', 'KONSUMTIF (meninggal dunia)', '07.2a.18.01077.12.1.12.0', 'SRI NATUNANINGSIH', '250000000', '250000000', '1', '245092834', 'TIDAK ADA', 'SK', '0', '180', '2018-12-19', '2033-12-19', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '232838192.3', 'BOARE', 0, NULL),
(982, '2020-07-27', NULL, '2020-09-23', 'PT. GLOBAL RISK MANAGEMENT', 'JL. GAJAH MADA, RT. 011, RW. 003, KEL. BAGAN BARAT, KEC. BANGKO, KAB. ROKAN HILIR', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02200.04.1.12.0', 'RITA AGUSTINA', '320000000', '320000000', '1', '319738368', 'TIDAK ADA', 'SK', '0', '180', '2019-04-18', '2034-04-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '303751449.6', 'BOARE', 0, NULL),
(983, '2020-07-23', '2020-09-16', NULL, 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. KH KHOSIM RT 001/RW 002 KEL. SUNGAI PINANG KEC. PUJUD', 'PRODUKTIF', '07.02.18.00645.12.1.12.0', 'NORMAN', '250000000', '187500000', '0.75', '144601595', '0', 'TANAH PERUMAHAN', '275800000', '60', '2018-05-25', '2023-05-25', 'OMSET MENURUN ', 'PERKEBUNAN KELAPA SAWIT', '0.5', '72300797.5', 'IGNA ASIA', 0, NULL),
(984, '2020-07-23', NULL, '2020-11-30', 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. ARJUNA, RT. 004, RW. 002. KEL. LABUHAN PAPAN, KEC. TANAH PUTIH TANJUNG MELAWAN, KAB. ROKAN HILIR', 'PRODUKTIF', '07.02.18.00134.04.1.12.0', 'PONIMIN', '100000000', '50000000', '0.5', '27280017', NULL, 'TANAH PERKEBUNAN', '112000000', '48', '2018-03-12', '2022-03-12', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(985, '2020-07-22', NULL, NULL, 'CABANG PEMBANTU PANAM', 'JL. BAMBU KUNING Gg. SURYA I NO. 18 RT 006 RW 013 KEL. REJO SARI KEC. TENAYAN RAYA KOTA PEKANBARU', 'KONSUMTIF (PHK)', '07.02.18.00225.06.1.12.0', 'BIRMAN ALWI', '100000000', '100000000', '1', '53164140', '0', 'SK', '0', '36', '2018-05-04', '2021-05-04', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI RIAU POS', '0.5', '26582070', 'APIRE', 0, NULL),
(986, '2020-07-22', NULL, '2020-12-23', 'KEDAI AIR TIRIS', 'DUSUN KP. BARU NAGA BERALIH RT 02/02 KAMPAR UTARA', 'PRODUKTIF', '07.02.18.00361.08.1.12.0', 'ZAINAL ANDRI', '100000000', '30000000', '0.3', '23667136', '0', 'TANAH PERKEBUNAN', '108880000', '60', '2018-07-25', '2023-07-25', 'PRODUK TIDAK LAKU', 'KEBUN KARET DAN KEBUN KELAPA SAWIT', '0.5', '11833568', 'IGNA ASIA', 0, NULL),
(987, '2020-07-22', NULL, '2020-10-27', 'CABANG PEMBANTU BELILAS', 'JL. LINTAS SELATAN 004/002 DESA BANDAR PADANG KEC. SEBERIDA INHU', 'PRODUKTIF (meninggal dunia)', '07.02.19.00313.08.1.12.0', 'ADRIS', '100000000', '75000000', '0.75', '85514948', 'TIDAK ADA', 'TANAH', '101613600', '60', '2019-07-25', '2024-07-25', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(988, '2020-07-17', NULL, '2020-10-27', 'KEDAI PERANAP', 'DESA KOTA BARU 001/001 KEC. RAKIT KULIM', 'PRODUKTIF KUR', '07.02.18.00039.02.4.12.0', 'HASBUN', '100000000', '75000000', '0.75', '29625336', '0', 'TANAH PERKEBUNAN', '70687750', '36', '2018-02-05', '2021-02-05', 'OMSET KEBUN MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(989, '2020-07-17', '2020-09-16', NULL, 'KEDAI BATU PANJANG RUPAT', 'JL PAHLAWAN RT 03 RW 02 KEL. KADUR KEC. RUPAT UTARA BENGKALIS', 'PRODUKTIF', '07.02.18.00487.11.1.12.0', 'JUPRI', '70000000', '35000000', '0.5', '25120795', '0', 'TANAH', '60480000', '36', '2018-10-09', '2021-10-09', 'PIUTANG MACET', 'PERKEBUNAN KARET', '0', '0', '0', 0, NULL),
(990, '2020-07-15', NULL, '2020-10-27', 'PT ADONAI PIALANG ASURANSI', 'TELUK AIR RT 003 RW 001 KEL. TELUK AIR KEC KARIMUN KAB. KARIMUN', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00898.05.1.12.0', 'SYUMARLIN', '250000000', '250000000', '1', '216348094', 'TIDAK ADA', 'SK', '0', '120', '2018-06-05', '2028-06-05', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '194713284.6', 'APIRE', 0, NULL),
(991, '2020-07-13', '2020-09-16', NULL, 'CABANG AIR MOLEK', 'WONOREJO RT 001 RW 002 DESA AIR MOLEK I KEC. PASIR PENYU KAB. INDRAGIRI HULU', 'PRODUKTIF', '07.02.17.00506.12.1.12.0', 'ZULFIARDI', '160000000', '80000000', '0.5', '61387151', '0', 'TANAH & BANGUNAN', '136000000', '60', '2017-12-08', '2022-12-08', 'PRODUK TIDAK LAKU', 'PERDAGANGAN', '0.5', '30693575.5', 'IGNA ASIA', 0, NULL),
(992, '2020-07-09', '2020-09-16', NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. SM. ALATAS RT 002 RW 001 KEL. KAMPUNG PULAU KEC. RENGAH KAB. INDRAGIRI HULU', 'KONSUMTIF (PHK)', '07.02a.18.00077.05.1.12.0', 'SYAHFRI BENI', '65000000', '65000000', '1', '56988538', '0', 'SK', '0', '84', '2018-05-21', '2025-05-21', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.95', '54139111.1', 'BOARE', 0, NULL),
(993, '2020-07-09', NULL, '2020-11-30', 'PT GLOBAL RISK MANAGEMENT', 'JL. PROF M. YAMIN RT 001 RW 002 KEL. BANGKINANG KEC. BANGKINANG KOTA, KAB KAMPAR', 'KONSUMTIF (meninggal dunia)', '07.02b.19.07302.11.1.12.0', 'SYUHAEDA', '140000000', '140000000', '1', '124552478', 'TIDAK ADA', 'SK', '0', '29', '2019-11-20', '2022-04-20', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '118324854.1', 'BOARE', 0, NULL),
(994, '2020-07-06', NULL, NULL, 'KEDAI MUARA LEMBU', 'JL. SYECH AHMAD BUNDA RT 002 RW 005 KEL. MUARA LEMBU', 'PRODUKTIF', '07.02.17.00167.06.1.12.0', 'MUCHLIS', '140000000', '42000000', '0.3', '7573017', '0', 'TANAH & BANGUNAN', '259300000', '36', '2017-06-12', '2020-06-12', 'HARGA JUAL RENDAH', 'PERKEBUNAN KELAPA SAWIT', '0.5', '3786508.5', 'IGNA ASIA', 0, NULL),
(995, '2020-07-06', NULL, NULL, 'CABANG PEMBANTU SOREK', 'KAMPUNG TENGAH RT 003 RW 007 SOREK SATU KEC. PANGKALAN KURAS', 'PRODUKTIF', '07.02.18.00297.01.1.12.0', 'MARWANTO', '50000000', '25000000', '0.5', '14212434', '0', 'TANAH & BANGUNAN', '116400000', '36', '2018-06-08', '2021-06-08', 'OMSET MENURUN ', 'PEDAGANG AYAM BAKAR', '0', '0', '0', 0, NULL),
(996, '2020-07-02', NULL, '2020-08-25', 'KEDAI PUJUD', 'JL. PUJUD RT 002/RW 004 KEL. PUJUD KEC. PUJUD', 'PRODUKTIF (meninggal dunia)', '07.02.19.00243.06.1.12.0', 'SRI DELIMA', '85000000', '63750000', '0.75', '70223630', 'TIDAK ADA', 'TANAH PERKEBUNAN', '67610000', '48', '2019-05-16', '2023-05-16', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.95', '66712448.5', 'BOARE', 0, NULL),
(997, '2020-07-01', NULL, NULL, 'CABANG SELAT PANJANG', 'JL. MAHMUD DESA BANGLA BARAT SELATPANJANG', 'PRODUKTIF ', '07.02.18.00160.05.1.12.0', 'ERJULINA', '100000000', '75000000', '0.75', '50639881', '0', 'TANAH', '112400000', '48', '2018-04-20', '2022-04-20', 'PIUTANG MACET', 'KEDAI KELONTONG DAN CATERING MAKANAN', '0.5', '25319940.5', 'IGNA ASIA', 0, NULL),
(998, '2020-07-01', NULL, '2020-10-19', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'PARIT 4 UTARA RT 002 RW 002 DESA SUNGAI SIMBAR KEC. KATEMAN KAB. INDRAGIRI HILIR', 'PRODUKTIF', '07.02.18.00161.05.1.12.0', 'ABDUL HAFID', '95000000', '47500000', '0.5', '35603235', '0', 'TANAH', '102000000', '60', '2018-04-18', '2023-04-18', 'KALAH BERSAING', 'PERDAGANGAN', '0', '0', '0', 0, NULL),
(999, '2020-06-30', NULL, '2020-11-03', 'PT ADONAI PIALANG ASURANSI', NULL, 'KONSUMTIF (PHK)', NULL, 'MUSBAR RAHMAN', '290000000', '290000000', '1', '285448432', '0', '0', '0', NULL, NULL, '0000-00-00', NULL, NULL, '0.5', '142724216', 'APIRE', 0, NULL),
(1000, '2020-06-24', NULL, '2020-09-01', 'CABANG PEMBANTU BELILAS', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.17.00341.10.1.12.0', 'MADDARI', '99000000', '74250000', '0.75', '37917586', 'TIDAK ADA', NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(1001, '2020-06-23', NULL, '2020-10-27', 'PT ADONAI PIALANG ASURANSI', NULL, 'KONSUMTIF (meninggal dunia)', '07.02B.18.01340.07.1.12.0', 'DEDI SALMI', '240000000', '240000000', '1', '217921518', 'TIDAK ADA', '0', '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(1002, '2020-06-23', NULL, NULL, 'KEDAI SUKARAMAI', NULL, 'PRODUKTIF', '07.02.16.00276.11.1.12.0', 'MHD ARIF RAMBE', '75000000', '37500000', '0.5', '38220879', '0', NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(1003, '2020-06-22', NULL, NULL, 'KEDAI PERANAP', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.20.00127.04.1.12.0', 'MATJURI', '15000000', '4500000', '0.3', '12741992', 'TIDAK ADA', NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(1004, '2020-06-18', NULL, '2020-08-31', 'KEDAI PASAR PANGKALAN KERINCI', NULL, 'PRODUKTIF', '07.02.16.00230.10.1.12.0', 'ALAINA', '90000000', '45000000', '0.5', '11751038', '0', NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(1005, '2020-06-18', NULL, '2020-08-26', 'KEDAI SUNGAI SEMBILAN', 'JL. PEMATANG DUKU, RT. 015, RW. 000, KEL. TANJUNG PENYEMBAL, KEC. SUNGAI SEMBILAN, KOTA DUMAI', 'PRODUKTIF', '07.02.19.20468.03.4.12.0', 'MISLIYADI', '40000000', '30000000', '0.75', '21851393', '0', 'TANAH & BANGUNAN', '34220000', '36', '2019-03-19', '2022-03-19', 'KALAH BERSAING', 'PERKEBUNAN KELAPA SAWIT', '0.95', '20758823.35', 'BOARE', 0, NULL),
(1006, '2020-06-17', '2020-09-16', NULL, 'CABANG SELAT PANJANG', 'JL. KARTINI GG. IMAMAH RT 002 RW 002 KEL. SELATPANJANG TIMUR KEC. TEBING TINGGI KAB . KEPULAUAN MERANTI', 'PRODUKTIF KUR', '07.02.16.01057.12.4.12.0', 'JAMALUDDIN', '100000000', '75000000', '0.75', '46369665', '0', 'TANAH', '110000000', '60', '2016-10-18', '2021-10-18', 'GAGAL PRODUKSI', 'PETERNAKAN AYAM', NULL, '0', NULL, 0, NULL),
(1007, '2020-06-17', NULL, NULL, 'CABANG SELAT PANJANG', NULL, 'PRODUKTIF', '07.02.18.00251.06.1.12.0', 'NILA WATI', '100000000', '75000000', '0.75', '88437400', 'TIDAK ADA', NULL, '0', NULL, NULL, '0000-00-00', NULL, NULL, NULL, '0', NULL, 0, NULL),
(1008, '2020-06-17', NULL, '2020-08-14', 'KEDAI PASAR  PAGI ARENGKA', 'JLN. SINGGALANG VII PERUM D’ZHAFIYA LAND BL, RT. 001, RW. 011. KEL. TANGKERANG TIMUR, KEC. TENAYAN RAYA, KOTA PEKANBARU', 'PRODUKTIF KUR', '07.02.18.18502.10.4.12.0', 'RIZKY HERIANTO', '130000000', '97500000', '0.75', '72160163', '0', 'TANAH & BANGUNAN', '270250000', '48', '2018-10-25', '2022-10-25', 'KALAH BERSAING', 'PERDAGANGAN', '0', '0', '0', 0, NULL),
(1009, '2020-06-17', NULL, '2020-08-25', 'KEDAI PERANAP', 'PONDOK. V. PT. INDRI PLANT, RT. 005, RW. 004, KEL/DESA PAUH RANAP, KEC. PERANAP, KAB. INDRAGIRI HULU', 'PRODUKTIF', '07.02.18.00338.07.1.12.0', 'SATIYO RIKUH', '80000000', '60000000', '0.75', '42663350', '0', 'TANAH', '90000000', '48', '2018-07-23', '2022-07-23', 'KALAH BERSAING', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1010, '2020-06-09', NULL, '2020-07-30', 'PT GLOBAL RISK MANAGEMENT', 'JL. INDAH SARI NO. 59, RT. 001, RW. 009, KEL. REJO SARI, KEC. TENAYAN RAYA, KOTA PEKANBARU SARI, KEC. TENAYAN RAYA, KOTA PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.03293.05.1.12.0', 'TEDDY HARYANTO', '295000000', '295000000', '1', '295000000', 'TIDAK ADA', '0', '0', '180', '2019-05-20', '2034-05-20', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '280250000', 'BOARE', 0, NULL),
(1011, '2020-06-09', NULL, '2020-07-24', 'PT GLOBAL RISK MANAGEMENT', 'JL. TERATAI BLOK G NO. 16, RT. 004, RW. 007, KEL. PERAWANG BARAT, KEC. TUALANG, KABUPATEN SIAK', 'KONSUMTIF (meninggal dunia)', '07.02.a.18.01378.12.1.12.0', 'DENI PANINGSIH', '200000000', '200000000', '1', '189271174', 'TIDAK ADA', '0', '0', '120', '2018-12-18', '2028-12-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '179807615.3', 'BOARE', 0, NULL),
(1012, '2020-06-09', NULL, '2020-08-14', 'PT GLOBAL RISK MANAGEMENT', 'PERUM BUKIT PALEM PERMAI, RT. 002, RW. 030 KEL. BELIAN, KEC. BATAM KOTA, KOTA BATAM', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02260.04.1.12.0', 'ELVI NILAWATI', '295000000', '295000000', '1', '282640813', 'TIDAK ADA', 'SK', '0', '132', '2019-04-23', '2030-04-23', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '268508772.35', 'BOARE', 0, NULL),
(1013, '2020-06-09', NULL, '2020-08-14', 'PT GLOBAL RISK MANAGEMENT', 'DUSUN SEI RUMBIA RT 017 RW 005 KEL. BANGKO PERMATA DUSUN SEI RUMBIA RT 017 RW 005 KEL. BANGKO PERMATA', 'KONSUMTIF (meninggal dunia)', '07.02b.19.03428.05.1.12.0', 'FIRDAUS ', '280000000', '280000000', '1', '280000000', 'TIDAK ADA', 'SK', '0', '180', '2019-05-22', '2034-05-22', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '266000000', 'BOARE', 0, NULL),
(1014, '2020-06-09', NULL, '2020-07-30', 'PT GLOBAL RISK MANAGEMENT', 'JL. MANGGIS, RT. 001, RW. 010, KEL. SELATPANJANG KOTA KEC. TEBING TINGGI, KAB. KEPULAUAN MERANTI', 'KONSUMTIF (meninggal dunia)', '07.02b.19.06026.09.1.12.0', 'KIMER NELDY', '342000000', '342000000', '1', '342000000', 'TIDAK ADA', '0', '0', '180', '2019-09-24', '2034-09-24', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '324900000', 'BOARE', 0, NULL),
(1015, '2020-06-09', NULL, '2020-08-14', 'PT GLOBAL RISK MANAGEMENT', 'JL. UTAMA RT 007 RW 002 KEL. BAGAN BARAT KEC. BANGKO Kab. Rokan Hilir', 'KONSUMTIF (meninggal dunia)', '07.02c.20.01483.03.1.12.0', 'MISTIANA', '290000000', '290000000', '1', '290000000', 'TIDAK ADA', 'SK', '0', '120', '2020-03-18', '2030-03-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '275500000', 'BOARE', 0, NULL),
(1016, '2020-06-02', NULL, '2020-07-30', 'CABANG PEMBANTU BASERAH', NULL, 'PRODUKTIF KUR', '07.02.19.21458.07.4.12.0', 'PAUZI', '25000000', '18750000', '0.75', '16026577', '0', '0', '0', '36', '2019-06-28', '2022-06-28', NULL, NULL, NULL, '0', NULL, 0, NULL),
(1017, '2020-06-02', NULL, '2020-07-30', 'KEDAI PUJUD', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.19.00243.06.1.12.0', 'NORAINI', '60000000', '45000000', '0.75', '42145764', 'TIDAK ADA', 'TANAH PERKEBUNAN', '70000000', '36', '2019-05-14', '2022-05-14', NULL, NULL, NULL, '0', NULL, 0, NULL),
(1018, '2020-06-02', NULL, '2020-07-30', 'PT GLOBAL RISK MANAGEMENT', 'LINGKUNGAN PASAR LAMA 001/001 TAMBUSAI TENGAH KEC. TAMBUSAI KEC. TAMBUSAI KAB. ROKAN HULU', 'KONSUMTIF', '07.02b.19.07369.11.1.12.0', 'EFNI', '220000000', '220000000', '1', '220000000', 'TIDAK ADA', '0', '0', '144', '2019-11-22', '2031-11-22', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '209000000', 'BOARE', 0, NULL),
(1019, '2020-06-01', NULL, NULL, 'CABANG PEMBANTU PETAPAHAN', 'DUSUN MERBAU RT/RW 001/001 SALO TIMUR KEC. SALO', 'PRODUKTIF', '07.02.18.00136.04.1.12.0', 'HERU HAMDANI', '150000000', '75000000', '0.5', '114575015', '0', 'TANAH DAN BANGUNAN', '0', '60', '2018-03-06', '2023-03-06', 'OMSET MENURUN ', 'BENGKEL BAN', '0.9', '103117513.5', 'IGNA ASIA', 0, NULL),
(1020, '2020-05-26', NULL, NULL, 'KEDAI SUNGAI SEMBILAN', 'JL. MANGGA NO. 08, KEL. RIMBA SEKAMPUNG, KEC. DUMAI BARAT, KOTA DUMAI', 'PRODUKTIF', NULL, 'JANI PANDIANGAN', '150000000', '75000000', '0.5', '65629561', '0', 'TANAH DAN BANGUNAN', '180080000', '60', '2018-12-12', '2023-12-12', 'OMSET MENURUN ', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1021, '2020-05-22', NULL, '2020-12-23', 'CABANG PEMBANTU LIPAT KAIN', 'LINGKUNGAN DARUSSALAM, RT. 002, RW. 001, KEL. SUNGAI PAGAR, KAMPAR KIRI HILIR, KAB KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.19.00090.1.12.0', 'EMI MARLINA', '99000000', '29700000', '0.3', '83283300', 'TIDAK ADA', 'TANAH DAN BANGUNAN', '0', '60', '2019-02-11', '2024-02-11', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '74954970', 'IGNA ASIA', 0, NULL),
(1022, '2020-05-20', NULL, '2020-11-03', 'PT ADONAI PIALANG ASURANSI', 'ALAM RAYA 2 BLOK B NO. 1, RT. 002, RW. 015, KEL. BELIAN, KEC. BATAM KOTA, KOTA BATAM', 'KONSUMTIF (meninggal dunia)', NULL, 'RAHMAWATI ', '200000000', '200000000', '1', '189551071', 'TIDAK ADA', '0', NULL, '144', '2018-06-07', '2030-06-07', 'MENINGGAL DUNIA', NULL, '0.9', '170595963.9', 'APIRE', 0, NULL),
(1023, '2020-05-20', '2020-06-26', '2020-06-30', 'KEDAI KUALA KILAN', 'DESA KUALA GADING, RT. 006, RW. 003, KEL. KUALA GADING, KEC. BATANG CENAKU, KA. INNDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.19.00284.07.1.12.0', 'MUHAMMAD NASIRUN', '50000000', '37500000', '0.75', '36424494', 'TIDAK ADA', 'TANAH PERKEBUNAN', '34800000', '36', '2019-05-14', '2022-05-14', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1024, '2020-05-20', NULL, '2020-07-24', 'CABANG TELUK KUANTAN', 'SIMPANG TIGA, RT. OO1, RW.001, KEL. SIMPANG TIGA, KEC. KUANTAN TENGAH, KAB KUANTAN SINGINGI', 'PRODUKTIF', '07.02.17.00132.06.1.12.0', 'ABRORI', '500000000', '150000000', '0.3', '79612500', '0', 'TANAH DAN BANGUNAN', '493250000', '60', '2017-06-16', '2022-06-16', 'PENJUALAN MENURUN', 'PERDAGANGAN ', '0.5', '39806250', 'IGNA ASIA', 2, NULL),
(1025, '2020-05-18', NULL, '2020-07-24', 'PT GLOBAL RISK MANAGEMENT', 'PERUM DUSUN TOBEK PANJANG, RT. 006, RW. 003, KEL. KOTO TALUK, KEC. KUANTAN TENGAH, KAB. KUANTAN SINGINGI', 'KONSUMTIF (meninggal dunia)', '07.02B.20.01076.02.1.12.0', 'ERNA HARTATI', '250000000', '250000000', '1', '250000000', 'TIDAK ADA', 'SK', '0', '156', '2020-02-18', '2033-02-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '237500000', 'BOARE', 0, NULL),
(1026, '2020-05-15', '2020-06-29', '2020-06-30', 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. SYEKH ZAINUDDIN, RT. 002, RW. 001, KEL. BATU HAMPAR, KEC. TANAH PUTIH TANJUNG MELAWAN, KAB ROKAN HULU', 'PRODUKTIF KUR', '07.02.19.20096.01.4.12.0', 'EFENDI', '100000000', '75000000', '0.75', '52232295', '0', 'TANAH DAN BANGUNAN', '52560000', '36', '2020-01-21', '2023-01-21', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.95', '49620680.25', 'BOARE', 0, NULL),
(1027, '2020-05-15', '2020-06-23', '2020-06-26', 'CABANG SIAK ', 'JL. HANGTUAH RT. 001, RW. 005, KEL. BUNGA RAYA, KEC. BUNGA RAYA, KAB. SIAK.', 'PRODUKTIF KUR', '07.02.18.18905.11.4.12.0', 'RASIM ', '150000000', '112500000', '0.75', '73722660', '0', 'TANAH DAN BANGUNAN', '96000000', '60', '2018-07-08', '2023-07-08', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1028, '2020-05-15', '2020-06-29', '2020-06-30', 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. LINTAS SUMATRA, RT. 011, RW. 004, KEL. CEMPEDAK RAHUK , KEC. TANAH PUTIH, KAB. ROKAN HULU', 'PRODUKTIF', '07.02.19.00012.01.1.12.0', 'AZIMAR', '200000000', '150000000', '0.75', '125683672', '0', 'TANAH DAN BANGUNAN', '205562500', '60', '2018-01-24', '2023-01-24', 'OMSET MENURUN ', 'PERDAGANGAN DAN JASA', NULL, NULL, NULL, 0, NULL),
(1029, '2020-05-11', NULL, '2020-07-24', 'KEDAI DURIAN', 'JL. PURWODADI NO 115, RT. 001, RW. 001, KEL. SIDOMULYO BARAT, KOTA PEKANBARU', 'PRODUKTIF', '07.02.18.00273.07.1.12.0', 'DIMAS RIYANTO', '65000000', '48750000', '0.75', '33979348', '0', 'TANAH DAN BANGUNAN', '0', '48', '2018-06-07', '2022-06-07', 'OMSET MENURUN ', 'PERDAGANGAN DAN JASA', NULL, NULL, NULL, 0, NULL),
(1030, '2020-05-11', '2020-06-24', '2020-06-26', 'CABANG PEMBANTU BELILAS', 'PASAR AIR MOLEK, RT. 002, RW. 001, KEL. AIR MOLEK I, KEC. PASAR PENYU, KAB. INDRAGIRI HULU', 'PRODUKTIF', '07.02.18.00390.09.1.12.0', 'DIAN RAHMI', '350000000', '175000000', '0.5', '145846954', '0', 'TANAH DAN BANGUNAN ', '540000000', '60', '2018-08-30', '2023-08-30', 'PENJUALAN MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1031, '2020-05-11', '2020-06-18', '2020-06-26', 'PT GLOBAL RISK MANAGEMENT', 'JL. TENAGA GANG BUNTU, RT. 002, KEL. DUMAI, KEC. DUMAI KOTA, KOTA DUMAI', 'KONSUMTIF (meninggal dunia)', '07.O2B.19.04800.1.12.0', 'KHAIRUL WALAD', '290000000', '290000000', '1', '290000000', 'TIDAK ADA', 'SK', '0', '180', '2019-08-07', '2034-08-07', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '275500000', 'BOARE', 0, NULL),
(1032, '2020-05-08', NULL, '2020-07-24', 'KEDAI SEI LALA', 'PONTIAN MEKAR, RT. 013, RW. 006, KEL. PONTIAN MEKAR, KEC. LUBUK SATU JAYA, KAB. INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00039.02.1.12.0', 'SIPAH', '99000000', '74250000', '0.75', '30835352', 'TIDAK ADA', 'TANAH PERKEBUNAN', '0', '36', '2018-01-18', '2021-01-18', 'MENINGGAL DUNIA', NULL, '1', '30835352', 'AL AMIN', 0, NULL),
(1033, '2020-05-08', NULL, '2020-08-11', 'CABANG PEMBANTU RUMBAI', 'JL. UTAMA GANG KAKAP, RT. 004, RW. 007, KEL. SRI MERANTI, KEC. RUMBAI, KOTA PEKANBARU', 'PRODUKTIF', '07.02.18.00132.04.1.12.0', 'M. LATIF', '15000000', '7500000', '0.5', '9743786', '0', 'TANAH PERKEBUNAN', '0', '36', '2018-03-16', '2021-03-16', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(1034, '2020-05-06', NULL, '2020-08-31', 'CABANG PEMBANTU BAGAN BATU', 'DUSUN II PONDOK KRESEK, RT. 003, RW. 001, KEL. PONDOK KRESEK, KEC. PUJUO, KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.17.00277.08.4.12.0', 'JULIONO', '100000000', '75000000', '0.75', '41737501', '0', 'TANAH DAN BANGUNAN', '100560000', '60', '2017-08-04', '2022-08-04', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1035, '2020-05-06', NULL, '2020-08-31', 'CABANG PEMBANTU BAGAN BATU', 'JL. TONGKOL, RT.002, RW.001, KEL. GELORA, KEC. BAGAN SINEMBAH, KAB. ROKAN HULU', 'PRODUKTIF ', '07.02.18.00604.12.1.12.0', 'ANGGI NOVIANTO', '200000000', '60000000', '0.3', '51012501', '0', 'TANAH PERKEBUNAN', '271250000', '60', '2018-12-20', '2023-12-20', 'KALAH BERSAING', 'PERDAGANGAN DAN ATAU JASA', '0.5', '25506250.5', 'IGNA ASIA', 0, NULL),
(1036, '2020-05-06', NULL, NULL, 'CABANG PEMBANTU BAGAN BATU', 'JL. DUSUN II PONDOK KRESEK, RT. 003, RW. 001, KEL. PONDOK KRESEK, KEC. PUJUD, KAB. ROKAN HILIR', 'PRODUKTIF KUR', '07.02.17.00276.08.4.12.0', 'SUYANTO', '100000000', '75000000', '0.75', '43099370', '0', 'TANAH DAN BANGUNAN', '94352000', '60', '2020-08-04', '2025-08-04', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1037, '2020-05-06', NULL, '2020-07-30', 'BANK YUDHA BHAKTI', 'JL. KAHARUDDIN NASUTION, RT. 001, RW. 008, KEL. SIMPANG TIGA, KEC. BUKIT RAYA, KOTA PEKANBARU', 'PRODUKTIF (meninggal dunia)', '07.03.17.00013.09.1.12.0', 'FIRDAUS MALIK', '90000000', '90000000', '1', '41006623', 'TIDAK ADA', 'TANAH DAN BANGUNAN', '41003723', '48', '2017-09-11', '2021-09-11', 'MENINGGAL DUNIA', 'PERDAGANGAN DAN JASA', NULL, '0', NULL, 0, NULL),
(1038, '2020-05-05', NULL, '2020-06-01', 'PT GLOBAL RISK MANAGEMENT', 'PERUM. KARTAMA RAYA BLOK G3 NO. 9, RT. 001, RW. 003, KEL. PERHENTIANMARPOYAN, KEC. MARPOYAN DAMAI', 'KONSUMTIF ', '07.02b.19.01696.04.1.12.0', 'MISBAHUDIN', '300000000', '300000000', '1', '300000000', 'TIDAK ADA', 'SK', '0', '120', '2019-04-04', '2029-04-04', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '285000000', 'BOARE', 0, NULL),
(1039, '2020-05-04', '2020-06-24', '2020-06-26', 'KEDAI MERAL', 'SUNGAI RAYA, RT. 002, RW. 002, KEL. SUNGAI RAYA, KEC. MERAL, KAB. MERANTI', 'PRODUKTIF', '07.02.19.00099.03.1.12.0', 'SUHELMI SAHLI', '50000000', '25000000', '0.5', '20596311', '0', 'TANAH DAN BANGUNAN', '39840000', '36', '2019-02-11', '2022-02-11', 'PENJUALAN MENURUN', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(1040, '2020-05-04', '2020-06-23', '2020-06-26', 'PT GLOBAL RISK MANAGEMENT', 'JL. KAMPUNG TANJUNG , RT. 009, RW. 003, KEL. SENAYANG, KEC. SENAYANG. KAB. LINGGA', 'KONSUMTIF (meninggal dunia)', '07.02b.19.00433.01.1.12.0', 'RIZALI', '150000000', '150000000', '1', '105601398', 'TIDAK ADA', 'SK', '0', '36', '2019-01-30', '2022-01-30', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '100321328.1', 'BOARE', 0, NULL),
(1041, '2020-05-04', '2020-06-26', '2020-06-30', 'KEDAI PASAR SAIL', 'JL. TENAYAN JAYA, RT. 001, RW. 014, KEL. SAIL, KEC. TENAYAN RAYA, KOTA PEKANBARU', 'PRODUKTIF', '07.02.18.00400.09.1.12.0', 'FITRIYAH', '40000000', '30000000', '0.75', '22150158', '0', 'TANAH DAN BANGUNAN', '113766667', '48', '2018-08-06', '2022-08-06', 'PENJUALAN MENURUN', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(1042, '2020-05-04', '2020-06-23', '2020-06-26', 'CABANG PEMBANTU BASERAH ', 'JL. DUSUN PENGHIJAUAN, RT. 024, RW.-, KEL. PASAR BARU PANGEAN, KEC. PANGEAN, KAB. KUANTAN SINGINGI', 'PRODUKTIF KUR', '07.02.18.17579.08.4.12.0', 'JHONI HERIANTO', '30000000', '225000000', '0.75', '9967182', '0', 'TANAH DAN BANGUNAN', '100187500', '36', '2018-04-23', '2021-04-23', 'PENJUALAN MENURUN', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(1043, '2020-05-04', NULL, '2020-07-24', 'KEDAI PASAR LUBUK JAMBI', 'DESA SANGSU, RT. 002, RW. 001, KEL/DESA. SANGSU, KEC. KUANTAN MUDIK, KAB. KUANTAN SINGINGI', 'PRODUKTIF', '07.02.17.00222.08.1.12.0', 'ZULFERI', '100000000', '50000000', '0.5', '31942003', '0', 'TANAH DAN BANGUNAN', '104800000', '60', '2017-07-20', '2022-07-20', 'PENJUALAN MENURUN', 'PERDAGANGAN', '0.5', '15971001.5', 'IGNA ASIA', 0, NULL),
(1044, '2020-05-04', NULL, '2020-09-25', 'PT GLOBAL RISK MANAGEMENT', 'DUSUN BATIN PANDAN, RT. 018, RW. 005, KEL. BUATAN II, KEC. KOTO GASIB, KAB. SIAK', 'KONSUMTIF ', '07.02b.19.00486.02.2.12.0', 'YANCE ELFI FERMILA', '294000000', '294000000', '1', '292126680', 'TIDAK ADA', 'SK', '0', '180', '2019-02-06', '2034-02-06', 'PHK', 'PEGAWAI NEGERI SIPIL', '0.95', '277520346', 'BOARE', 0, NULL),
(1045, '2020-04-15', '2020-06-18', '2020-06-19', 'KEDAI PASAR SAIL', 'JL. KESADARAN GG ABDI, RT. 001, RW.011, KEL. TANGKERANG LABUAI, KEC. BUKIT RAYA, KOTA PEKANBARU', 'PRODUKTIF KUR', '07.02.18.17994.09.4.12.0', 'HENDRI YANTO', '15000000', '11250000', '0.75', '5205480', '0', 'BPKB', '14700000', '24', '2018-09-12', '2020-09-12', 'PENJUALAN MENURUN', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(1046, '2020-04-15', '2020-06-18', '2020-06-19', 'KEDAI PASAR SAIL', 'JL. KENANGA GG KENANGA, RT. 003, RW. 005, KEL. PADANG TERUBUK, KECAMATAN SENAPELAN', 'PRODUKTIF', '07.02.18.00476.10.1.12.0', 'SUPARMAN', '75000000', '37500000', '0.5', '16659985', '0', 'TANAH DAN BANGUNAN', '135453333', '24', '2018-09-05', '2020-09-05', 'PENJUALAN MENURUN', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(1047, '2020-04-14', '2020-06-26', '2020-06-30', 'PT PROTEKSI JAYA MANDIRI', 'PULAU BUSUK JAYA, RT. 007, RW. 004, KEL. PULAU BUSUK JAYA, KEC. INUMAN, KAB. KUANTAN SINGINGI', 'KONSUMTIF (meninggal dunia)', '07.02.18.00214.06.1.12.0', 'BUSTAMI', '110000000', '110000000', '1', '93367938', 'TIDAK ADA', 'SK', '0', '94', '2018-05-09', '2026-03-09', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, '0', NULL, 0, NULL),
(1048, '2020-04-14', '2020-05-28', '2020-05-29', 'PT GLOBAL RISK MANAGEMENT', 'JL. TENGKU BAY KOMPLEK KOREM BLOK E-17, RT. 001, RW. 011, KEL. SIMPANG TIGA, KEC. BUKIT RAYA', 'KONSUMTIF (meninggal dunia)', '07.02b.19.05558.09.1.12.0', 'ANWAR SHOLEH HASIBUAN', '30000000', '30000000', '1', '27655338', 'TIDAK ADA', NULL, NULL, '60', '2019-09-06', '2024-09-06', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '26272571.1', 'BOARE', 0, NULL),
(1049, '2020-04-13', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'JL. KUSUMA, RT, 006, RW, 003, KEL. SUNGAI PIRING, KEC. BATANG TUAKA', 'KONSUMTIF ', '07.02b.18.00966.05.1.12.0', 'FADLI SYAR', '250000000', '250000000', '100`%', '249921820', 'TIDAK ADA', 'SK', '0', '180', '2018-06-06', '2033-06-06', 'PHK', 'PEGAWAI NEGERI SIPIL', '0.5', '124960910', 'APIRE', 0, NULL),
(1050, '2020-04-13', '2020-06-23', '2020-06-26', 'CABANG PEMBANTU BASERAH ', 'HULU TESO, RT. 005, RW. 002, KEL. HULU TESO, KEC. LOGAS TANAH DARAT, KAB. KUANTAN SINGINGI', 'PRODUKTIF KUR', '07.02.16.00174.11.4.12.0', 'NGAMINAH', '250000000', '187500000', '0.75', '44731873', '0', 'TANAH DAN BANGUNAN', '225000000', '148', '2016-11-09', '2029-03-09', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1051, '2020-04-13', '2020-05-20', '2020-05-27', 'KEDAI BANDAR SEI KIJANG', 'KAMPUNG TENGAH RT. 002, RW. 002, KEL. MUDA SETIA, KEC. BANDAR SEIKIJANG', 'PRODUKTIF (meninggal dunia)', '07.02.16.00008.01.1.12.0', 'RUSMITA', '99000000', '29700000', '0.3', '30077302', '0', 'TANAH PERKEBUNAN', '166234433', '60', '2016-01-13', '2021-01-13', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1052, '2020-04-09', '2020-06-16', '2020-06-19', 'CABANG TALUK KUANTAN', 'JL. DURIAN NO.001 LK III JAO, RT. 004, RW. 002, KEL. SIMPANG TIGA, KEC, KUANTAN TENGAH, KAB. KUANTAN SINGINGI', 'PRODUKTIF KUR', '07.02.18.00050.01.4.12.0', 'RADEN', '500000000', '375000000', '0.75', '213945317', '0', 'TANAH DAN BANGUNAN', '270120000', '48', '2018-01-22', '2022-01-22', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1053, '2020-04-09', '2020-06-16', '2020-06-19', 'CABANG TALUK KUANTAN', 'KAMPUNG BARU, RT. 010, RW. 005, KEL. KAMPUNG BARU, KEC. CERENTI, KAB. KUANTAN SINGINGI', 'PRODUKTIF', '07.02.18.00022.01.1.12.0', 'SULASTRI', '300000000', '225000000', '0.75', '95468758', '0', 'TANAH DAN BANGUNAN', '154250000', '60', '2018-01-09', '2023-01-09', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '47734379', 'IGNA ASIA', 0, NULL),
(1054, '2020-04-09', '2020-06-16', '2020-06-19', 'CABANG TALUK KUANTAN', 'JLN. CAMAR, RT. 002, RW. 001 KEL. KOTO TALUK, KEC. KUANTAN TENGAH, KAB. KUANTAN SINGINGI', 'PRODUKTIF', '07.02.18.00202.06.1.12.0', 'SUSI ANGGRAINI', '300000000', '90000000', '0.3', '66067503', '0', 'TANAH DAN BANGUNAN', '699375000', '60', '2020-05-30', '2025-05-30', 'KALAH BERSAING', 'PERDAGANGAN', '0.5', '33033751.5', 'IGNA ASIA', 0, NULL),
(1055, '2020-04-08', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. SIDOREJO NO. 03, RT. 002, RW. 001, KEL. TITIAN ANTUI, KEC. PINGGIR, KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.19.01779.04.1.12.0', 'DELFIANTI', '330000000', '330000000', '1', '330000000', 'TIDAK ADA', 'SK', '0', '180', '2019-04-08', '2034-04-08', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '313500000', 'BOARE', 0, NULL),
(1056, '2020-04-06', NULL, NULL, 'CABANG SELAT PANJANG', 'JL. KARTINI NO. 24, RT. 001, RW.001, KEL. SELATPANJANG TIMUR, KEC. TEBING TINGGI, KAB. KEPULAUAN MERANTI', 'PRODUKTIF', '07.02.18.00309.07.1.12.0', 'YUSRI YANO', '50000000', '37500000', '0.75', '32410496', '0', 'TANAH DAN BANGUNAN', '569778000', '30', '2018-06-07', '2020-12-07', 'KALAH BERSAING', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(1057, '2020-04-06', '2020-05-28', '2020-05-29', 'KEDAI SEI LALA', 'KULIM JAYA, RT. 006, RW. 002, KEL. KULIM JAYA, KEC. LUBUK BATU JAYA, KAB. INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.17.00466.11.1.12.0', 'SUHARTAK', '45000000', '33750000', '0.75', '12671376', 'TIDAK ADA', 'TANAH PERKEBUNAN', '172000000', '36', '2017-11-20', '2020-11-20', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1058, '2020-04-06', '2020-06-23', '2020-06-26', 'KEDAI BATU PANJANG RUPAT', 'JL. PELAJAR, RT. 001, RW. 002, KEL. BATUPANJANG RUPAT, KEC. RUPAT, KAB. BENGKALIS ', 'PRODUKTIF KUR', '07.02.18.18332.10.4.12.0', 'ANDIKA', '100000000', '75000000', '0.75', '54498809', '0', 'TANAH PERKEBUNAN ', '55632500', '48', '2018-10-02', '2022-10-02', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1059, '2020-04-06', '2020-06-24', '2020-06-26', 'KEDAI PASAR PANGKALAN KERINCI', 'PERMATA ANDALAN, RT. 003, RW. 008, KEL. PANGKALAN KERINCI TIMUR, KEC. PANGKALAN KERINCI', 'PRODUKTIF (meninggal dunia)', '07.02.15.00219.12.1.12.0', 'ABI AXL', '100000000', '30000000', '0.3', '26357746', '0', 'TANAH PERKEBUNAN ', NULL, '60', '2015-12-23', '2020-12-23', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1060, '2020-04-03', NULL, '2020-04-30', 'KEDAI SUNGAI SEMBILAN', 'JL. MAMPU JAYA RT 024 KEL. LUBUK GAUNG KECAMATAN SUNGAI SEMBILAN, KOTA DUMAI', 'PRODUKTIF', '07.02.19.00057.02.1.12.0', 'MASITA', '200000000', '100000000', '0.5', '93645868', '0', 'TANAH & BANGUNAN', '210940000', '60', '2019-02-07', '2024-02-07', 'USAHA MENURUN', 'BEDENG BATU BATA DAN KANTIN SEKOLAH', '0.5', '46822934', 'IGNA ASIA', 0, NULL),
(1061, '2020-04-02', '2020-05-28', '2020-05-29', 'CABANG PEMBANTU BELILAS', 'DUSUN BUKIT BERSEMI, RT. 016, RW. 005, KELURAHAN BUKIT LIPSI, KECAMATAN BATANG CENAKU, KABUPATEN INDRAGIRI HULU', 'PRODUKTIF', '07.02.13.00018.11.1.12.0', 'SISKA IRMAYANI', '51000000', '15300000', '0.3', '6005192', '0', 'TANAH PERKEBUNAN', '85000000', '96', '2013-11-19', '2021-11-19', 'TERJAMIN TIDAK DAPAT DIHUBUNGI', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1062, '2020-03-31', '2020-05-28', '2020-05-29', 'PT GLOBAL RISK MANAGEMENT', 'DUSUN SETIA, RT. 002, RW. 001. KEL. PAGARAN TAPAH, KEC. PAGARAN TAPAH DARUSSALAM', 'KONSUMTIF (meninggal dunia)', '07.02b.19.05352.08.1.12.0', 'YUPITAR', '235000000', '235000000', '1', '225930832', 'TIDAK ADA', 'SK', '0', '66', '2019-08-28', '2025-02-28', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '214634290.4', 'BOARE', 0, NULL),
(1063, '2020-03-23', '2020-05-15', '2020-05-19', 'KEDAI MARPOYAN', 'PERUM PTPN VSPA, RT. 033, RW. 009, KEL. HANGTUAH, KEC. PERHENTIAN RAJA, KAB. KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.19.00265.06.1.12.0', 'MUKMIN SINAGA', '180000000', '75000000', '0.75', '148708880', 'TIDAK ADA', 'TANAH DAN BANGUNAN', '384550000', '48', '2019-05-28', '2023-05-28', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '133837992', 'IGNA ASIA', 0, NULL),
(1064, '2020-03-23', NULL, '2020-04-30', 'CABANG PEMBANTU KOTA BARU', 'JL. PENUNJANG PRT NO. 13, RT. 001, RW. 001, KEL. PULAU KECIL, KEC. RETEH, KAB. INDRAGIRI HILIR', 'PRODUKTIF KUR', '07.02.18.17511.07.4.12.0', 'TAPSIRUDDIN', '150000000', '112500000', '0.75', '73497660', '0', 'TANAH DAN BANGUNAN', '77064000', '48', '2018-04-17', '2022-04-17', 'KALAH BERSAING', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1065, '2020-03-23', '2020-05-15', '2020-05-19', 'PT GLOBAL RISK MANAGEMENT', 'SEI BANGKAR, RT. 039, RW. 011, KEL. PANGKALAN KASAI, KEC. SEBERIDA', 'KONSUMTIF (meninggal dunia)', '07.02b.19.06802.10.1.12.0', 'MARIKUN', '170000000', '170000000', '1', '168390996', 'TIDAK ADA', 'SK', '0', '120', '2019-10-24', '2029-10-24', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '159971446.2', 'BOARE', 0, NULL),
(1066, '2020-03-23', NULL, '2020-04-30', 'CABANG PEMBANTU SUNGAI PAKNING', 'TANJUNG BELIT, RT. 002, RW. 002, KEC. SIAK KECIL, KAB. BENGKALIS', 'PRODUKTIF KUR', '07.02.19.20380.03.4.12.0', 'HADI PURWANTO', '150000000', '112500000', '0.75', '97595260', '0', 'TANAH DAN BANGUNAN', '108151400', '48', '2019-03-08', '2023-03-08', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.95', '92715497', 'BOARE', 0, NULL),
(1067, '2020-03-20', '2020-05-27', '2020-05-29', 'CABANG PEMBANTU KANDIS', 'JL. BIMA, RT. 004, RW. 003, KEL. TANAH TINGGI, KEC. TAPUNG HILIR, KAB. KAMPAR', 'PRODUKTIF KUR', '07.02.18.17286.06.4.12.0', 'YUNI PERWITA SARI', '300000000', '225000000', '0.75', '137908986', '0', 'TANAH PERKEBUNAN', '158000000', '48', '2018-03-20', '2022-03-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1068, '2020-03-20', '2020-05-27', '2020-05-29', 'CABANG PEMBANTU KANDIS', 'JL. BIMA, RT. 004, RW. 003, KEL. TANAH TINGGI, KEC. TAPUNG HILIR, KAB. KAMPAR', 'PRODUKTIF KUR', '07.02.18.17285.06.4.12.0', 'DARIS', '400000000', '300000000', '0.75', '183878657', '0', 'TANAH PERKEBUNAN', '320000000', '48', '2018-03-20', '2022-03-20', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1069, '2020-03-20', '2020-05-18', '2020-05-19', 'KEDAI KUALA KILAN', 'DESA BUKIT LIPAI, RT. 003, RW. 081, KEL. BUKIT LIPAI, KEC. BATANG CENAKU.', 'PRODUKTIF', '07.02.18.00286.07.1.12.0', 'TAUFIQ KUROHMAN', '100000000', '75000000', '0.75', '54818518', '0', 'TANAH PERKEBUNAN', '70000000', '48', '2018-05-16', '2022-05-16', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '27409259', 'IGNA ASIA', 0, NULL),
(1070, '2020-03-19', '2020-06-26', '2020-06-30', 'KEDAI PASAR PAGI ARENGKA', 'KOMPLEK MELUR PERMAI BLOK P NO. 28, RT.006, RW. 016, KEL. SIDOMULYO BARAT, KEC. TAMPAN, KOTA PEKANBARU', 'PRODUKTIF', '07.02.19.00019.01.1.12.0', 'PARLINDUNGAN SIHITE', '200000000', '100000000', '0.5', '83197913', '0', 'TANAH DAN BANGUNAN', '279193333', '48', '2019-01-14', '2023-01-14', 'KALAH BERSAING', 'PERDAGANGAN', '0.5', '41598956.5', 'IGNA ASIA', 0, NULL),
(1071, '2020-03-17', '2020-05-28', '2020-05-29', 'KEDAI TANDUN', 'SEI KUNING, RT. 013, RW. 007, KEL. SEIKUNING, KEC. TANDUN', 'PRODUKTIF', '07.02.18.00515.11.1.12.0', 'SRI RAHAYU', '99000000', '74250000', '0.75', '52931043', '0', 'TANAH DAN BANGUNAN', '148160000', '36', '2018-10-02', '2021-10-02', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1072, '2020-03-17', '2020-05-28', '2020-05-29', 'KEDAI PASAR PANGKALAN KERINCI', 'RAWA BUANA, RT. 007, RW. 004, KEL. BUANA BHAKTI, KEC. KERINCI KANAN, KAB. SIAK', 'PRODUKTIF', '07.02.18.00322.07.1.12.0', 'YEYET SUSMIATI', '55000000', '27500000', '0.5', '17187673', '0', 'TANAH PERKEBUNAN', '220000000', '36', '2018-07-06', '2021-07-06', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1073, '2020-03-17', '2020-05-12', '2020-05-19', 'KEDAI PASAR PANGKALAN KERINCI', 'DUSUN BABOKO, RT. 001, RW. 001, KEL. LUBUK OGUNG, KEC. BANDAR SEI KIJANG, KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00447.11.1.12.0', 'AHMAD MASKUM', '250000000', '125000000', '0.5', '47511369', '0', 'TANAH DAN BANGUNAN', '528474000', '36', '2017-11-03', '2020-11-03', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '23755684.5', 'IGNA ASIA', 0, NULL),
(1074, '2020-03-16', NULL, NULL, 'CABANG PEMBANTU JALAN RIAU', 'JL. PADAT KARYA N0.3, RT. 001, RW. 002, KEL TANGKERANG TIMUR, KEC. TENAYAN RAYA, KOTA. PEKANBARU', 'KONSUMTIF ', '07.02.18.00108.04.1.12.0', 'WIDYAH SARI', '25000000', '25000000', '1', '10157020', '0', 'SK', '0', '36', '2018-03-07', '2021-03-07', 'PHK', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1075, '2020-03-13', NULL, '2020-07-30', 'PT ADONAI PIALANG ASURANSI', 'KOTA BARU RETEH, RT. 008, RW.-, KEL. KOTABARU RETEH, KEC. KERITANG, KAB. INDRAGIRI HILIR', 'KONSUMTIF (meninggal dunia)', '07.02b.18.01098.05.1.12.0', 'ZUSTROIDA', '80000000', '80000000', '1', '76713320', 'TIDAK ADA', 'SK', '0', '144', '2018-06-08', '2030-06-08', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '69041988', 'APIRE', 0, NULL),
(1076, '2020-03-12', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'TAMAN SARI HIJAU BLOK E6 NO. 30, RT. 007, RW. 003, KEL. TIBAN BARU, KEC. SEKUPANG, KOTA BATAM', 'KONSUMTIF ', '07.02b.19.03663.06.1.12.0', 'JUNAIDI', '320000000', '320000000', '1', '315813400', '0', 'SK', '0', '180', '2019-06-17', '2034-06-17', 'PHK', 'PEGAWAI NEGERI SIPIL', '0.95', '300022730', 'BOARE', 0, NULL),
(1077, '2020-03-11', NULL, '2020-04-24', 'PT GLOBAL RISK MANAGEMENT', 'JL. BINTANG HILIR Gg AMRI, RT. 007, RW. 003, KEL. BAGAN JAWA PESISIR, KEC. BANGKO, KAB. BANGKO', 'KONSUMTIF (meninggal dunia)', '07.02B.19.01682.04.1.12.0', 'TASLAN', '255000000', '255000000', '1', '255000000', 'TIDAK ADA', 'SK', '0', '180', '2019-04-02', '2034-04-02', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '242250000', 'BOARE', 0, NULL),
(1078, '2020-03-06', NULL, '2020-04-24', 'CABANG PEMBANTU UJUNG BATU', 'BUKIT TUNGKU, RT. 004, RW. 003, KEL. UJUNG BATU TIMUR, KEC. UJUNG BATU, KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.17.00419.12.4.12.0', 'NOVARI MURENA', '300000000', '225000000', '0.75', '152953125', '0', 'TANAH DAN BANGUNAN', '181300000', '60', '2017-12-15', '2022-12-15', 'PRODUKSI GAGAL', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1079, '2020-03-06', NULL, '2020-04-30', 'KEDAI PERANAP', 'DESASENCANO JAYA, RT. 007, RW. 002, KEL. SENCANO JAYA, KEC. BATANG PERANAP, KAB. INDAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.19.00119.04.1.12.0', 'TUGIMANTO', '99000000', '49500000', '0.5', '72120497', 'TIDAK ADA', 'TANAH DAN BANGUNAN', '128000000', '36', '2019-03-11', '2022-03-11', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1080, '2020-03-06', NULL, '2020-04-30', 'CABANG TALUK KUANTAN', 'LINGKUNGAN PASAR, RT. 004, RW. 002, KEL. BENAI, KEC. BENAI, KAB. KUANTAN SINGINGI', 'PRODUKTIF ', '07.02.18.00063.03.1.12.0', 'RUSDI', '1100000000', '330000000', '0.3', '231440002', '0', 'TANAH DAN BANGUNAN', '1700000000', '60', '2018-02-27', '2023-02-27', 'PENJUALAN MENURUN', 'TOKO BAHAN BANGUNAN', '0.5', '115720001', 'IGNA ASIA', 0, NULL),
(1081, '2020-03-04', NULL, NULL, 'CABANG SELAT PANJANG', 'JL. SALI MANI TANJUNG, RT. 001, RW. 001, KEL. TANJUNG, KEC. TEBING TINGGI BARAT, KAB. MERANTI', 'PRODUKTIF KUR', '07.02.16.01283.08.4.12.0', 'M. ZAINUDDIN', '150000000', '112500000', '0.75', '56386871', '0', 'TANAH DAN BANGUNAN', '84000000', '60', '2016-08-11', '2021-08-11', 'PRODUKSI MENURUN', 'PERDAGANGAN', NULL, '0', NULL, 0, NULL),
(1082, '2020-03-03', NULL, '2020-04-24', 'PT GLOBAL RISK MANAGEMENT', 'JL. RAWAMANGUN NO. 63 A, RT. 002, RW. 006, KEL. TANGKERANG LABUAI, KEC. BUKIT RAYA, KOTA. PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.06741.10.1.12.0', 'MISWETI', '50000000', '50000000', '1', '50000000', 'TIDAK ADA', 'SK', NULL, '36', '2019-10-22', '2022-10-22', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '45000000', 'BOARE', 0, NULL),
(1083, '2020-03-03', '2020-05-27', '2020-05-29', 'PT GLOBAL RISK MANAGEMENT', 'JL. TUANKU TAMBUSAI, RT. 002, RW. 005, KEL. BALAI MAKAM, KEC. MANDAU, KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.19.03935.06.1.12.0', 'TAUFIK RIZKI', '225000000', '225000000', '1', '222229242', 'TIDAK ADA', 'SK', '0', '180', '2019-06-26', '2034-06-26', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '200006317.8', 'BOARE', 0, NULL),
(1084, '2020-02-24', '2020-03-30', '2020-03-31', 'KEDAI PERANAP', 'PONDOK IV PT. INDRI PLANT 006/004 DESA PAUH RANAP KEC. PERANAP - INHU', 'PRODUKTIF', '07.02.18.00454.10.1.12.0', 'HERNATAL SITANGGANG', '75000000', '56250000', '0.75', '45480946', '0', 'TANAH PERKEBUNAN', '85935000', '48', '2018-09-14', '2022-09-14', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1085, '2020-02-18', '2003-03-26', '2020-03-31', 'KEDAI KUALA KILAN', 'DESA BUKIT INDAH 008 005 KEC. RAKIT KULIM KAB. INHU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00490.11.1.12.0', 'SUNI', '65000000', '48750000', '0.75', '50982362', 'TIDAK ADA', 'TANAH PERKEBUNAN', NULL, '60', '2018-10-24', '2023-10-24', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1086, '2020-02-18', NULL, '2020-04-30', 'CABANG PEMBANTU PETAPAHAN', 'DUSUN I SEI SIBAM RT/RW 014/004 KARYA INDAH KEC. TAPUNG ', 'KONSUMTIF (meninggal dunia)', '07.02.17.000379.10.1.12.0', 'AHMAD RAFLI', '125000000', '125000000', '1', '105030581', 'TIDAK ADA', 'SK', '0', '96', '2017-10-06', '2025-10-06', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.5', '52515290.5', 'INARE', 0, NULL),
(1087, '2020-02-18', '2020-03-30', '2020-03-31', 'KEDAI BANDAR SEI KIJANG', 'KAMPUNG TENGAH 002/002 KEC. BANDAR SEI KIJANG KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.18.00602.12.1.12.0', 'USMAN T', '40000000', '30000000', '0.75', '25983524', '0', 'TANAH PERKEBUNAN', '88837500', '36', '2018-11-23', '2021-11-23', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1088, '2020-02-17', '2020-06-23', '2020-06-26', 'CABANG TELUK KUANTAN', 'LINGKUNGAN SATU 001/001 KEC. BONAI', 'PRODUKTIF', '07.02.17.00073.04.1.12.0', 'AHMAD ZAKI', '100000000', '50000000', '0.5', '21014075', '0', 'TANAH & BANGUNAN', '116000000', '48', '2017-03-15', '2021-03-15', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '10507037.5', 'IGNA ASIA', 0, NULL),
(1089, '2020-02-13', NULL, NULL, 'KEDAI RANTAU KASAI', 'KUALA MAHATO RT/RW 004/002 KEL/DESA MAHATO KEC. TAMBUSAI UTARA KAB. ROKAN HULU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00525.11.1.12.0', 'ROBAINI', '65000000', '32500000', '0.5', '57367568', 'TIDAK ADA', 'TANAH PERKEBUNAN', '50000000', '60', '2018-10-10', '2023-10-10', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1090, '2020-02-03', '2020-03-26', '2020-03-31', 'KEDAI PUJUD', 'JL. PASAR HANDAYANI RT 001/001 KEL. PUJUD KEC. PUJUD', 'PRODUKTIF (meninggal dunia)', '07.02.19.00161.05.1.12.0', 'FAZLI MAZHAR', '100000000', '75000000', '0.75', '86466348', 'TIDAK ADA', 'TANAH PERKEBUNAN', '80000000', '48', '2019-04-23', '2023-04-23', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '77819713.2', 'IGNA ASIA', 0, NULL),
(1091, '2020-01-30', NULL, NULL, 'KEDAI PASAR SAIL', 'JL. ADI SUCIPTO GG PELAJAR BELAKANG SMPN 08 RT 007 RW 009 KEL. MAHARATU KEC. MARPOYAN DAMAI, KOTA PEKANBARU', 'PRODUKTIF KUR', '07.02.19.22760.09.4.12.0', 'JUMINGIN', '25000000', '18750000', '0.75', '18052575', '0', '-', '0', '24', '2018-03-23', '2020-03-23', 'GAGAL PANEN', 'PETANI SAYUR/SEMANGKA', '0', '0', '0', 0, NULL),
(1092, '2020-01-23', '2020-05-13', '2020-05-19', 'CABANG PEMBANTU TANJUNG BATU', 'PERUM TELAGA SURYA REGENCY GG MAS KOI NO C-49 RT 004 RW 004 TANJUNG UBAN UTARA, BINTAN UTARA', 'KONSUMTIF', '07.02.18.00102.04.1.12.0', 'SYAHRIAL OLOAN NASUTION', '80000000', '80000000', '1', '35763792', '0', '-', '0', '36', '2018-03-05', '2021-03-05', NULL, 'KARYAWAN PT BUANA MEGAWISATAMA', '0', '0', '0', 0, NULL),
(1093, '2020-01-20', '2020-05-27', '2020-05-29', 'PT PROTEKSI JAYA MANDIRI', 'PERKANTORAN SUDIRMAN D Li RT 002 RW 016 KEL. TANGKERANG TENGAH KEC MARPOYAN DAMAI', 'KONSUMTIF (PHK)', '07.02.17.00107.05.1.12.0', 'FAJAR SATRIAWAN', '100000000', '100000000', '1', '84517000', '0', '-', '0', '96', '2017-05-02', '2025-05-02', 'PEMUTUSAN HUBUNGAN KERJA', 'KARYAWAN BUMD', '0.9', '76065300', 'IGNA ASIA', 0, NULL),
(1094, '2020-01-14', '2020-03-26', '2020-03-31', 'PT GLOBAL RISK MANAGEMENT', 'RUSUN BIDA KUNING BLOK E2 LT 2 NO 2 RT/RW 002/010 MUKA KUNING SUNGAI BEDUK', 'KONSUMTIF (meninggal dunia)', '07.02b.19.06350.10.1.12.0', 'APRIADI', '500000000', '500000000', '1', '500000000', '0', '-', '0', '135', '2019-10-04', '2031-01-04', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '475000000', 'BOARE', 0, NULL),
(1095, '2020-01-13', '2020-03-30', '2020-03-31', 'KEDAI PASAR LUBUK JAMBI', 'DESA PANTAI 001/001 KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.17.00458.11.1.12.0', 'A H BAKRI', '100000000', '30000000', '0.3', '15701248', '0', '-', '0', '36', '2017-11-17', '2020-11-17', 'HARGA JUAL LEBIH RENDAH', 'PERKEBUNAN KELAPA SAWIT', '0.5', '7850624', 'IGNA ASIA', 0, NULL),
(1096, '2020-01-10', '2020-03-26', '2020-03-31', 'KEDAI AIR TIRIS', 'DUSUN II RANAH RT 002 RW 001 DESA RANAH KEC. KAMPAR', 'PRODUKTIF', '07.02.18.00586.12.1.12.0', 'MURSALIN', '350000000', '105000000', '0.3', '80514585', '0', '-', '0', '36', '2018-11-09', '2021-11-09', 'KALAH BERSAING', 'TOKO SEMBAKO', '0.5', '40257292.5', 'IGNA ASIA', 0, NULL),
(1097, '2020-01-10', NULL, NULL, 'KEDAI PASAR PANGKALAN KERINCI', 'JL MAHARAJA INDRA Gg. 2000 RT 002 RW 002 KEL. PANGKALAN KERINCI TIMUR KEC. PANGKALAN KERINCI', 'PRODUKTIF KUR', '07.02.18.17450.07.4.12.0', 'IDRUS SYAM', '500000000', '375000000', '0.75', '271104495', '0', '-', '0', '36', '2018-03-28', '2021-03-28', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1098, '2019-12-30', '2020-03-30', '2020-03-31', 'CABANG PEMBANTU DURI', 'JL DELIMA RT 016 RW 005 DESA/KEL KOTA BARU KEC. TAPUNG HILIR KAB. KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.19.00193.05.1.12.0', 'MUNTINGAH', '40000000', '12000000', '0.3', '32210438', '0', 'TANAH PERKEBUNAN', '207792000', '36', '2019-04-09', '2022-04-09', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1099, '2019-12-23', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'KEPENUHAN SEJATI 002/001', 'PRODUKTIF (meninggal dunia)', NULL, 'M. YUSUF ', '100000000', '0', NULL, '88068890', 'TIDAK ADA', '-', '0', '96', '2018-02-21', '2026-02-21', 'MENINGGAL DUNIA', NULL, NULL, '0', NULL, 0, NULL),
(1100, '2019-12-23', '2020-05-04', '2020-05-19', 'PT ADONAI PIALANG ASURANSI', 'CENTER PARK BLOK K NO 19', 'KONSUMTIF', '07.02b.18.01621.07.1.12.0', 'DEWI KUMALA SARI', '250000000', '250000000', '1', '234416200', 'TIDAK ADA', 'SK', '0', '96', '2018-07-20', '2026-07-20', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI KARYAWAN SWASTA', '0.5', '117208100', 'APIRE', 0, NULL);
INSERT INTO `tblklaim` (`idKlaim`, `tglmasuk`, `tglberkas`, `tglklaimbayar`, `PPnama`, `PPalamat`, `produk`, `sertifikat`, `nmterjamin`, `plafond`, `nilai_jaminan`, `coverage`, `nominal_klaim`, `subrogasi`, `agunan`, `taksasi_agunan`, `Jkwaktu`, `tglawal`, `tglakhir`, `macet`, `sektor`, `cover_reas`, `klaim_reas`, `broker`, `status`, `no_telp`) VALUES
(1101, '2019-12-23', '2020-02-14', '2020-02-18', 'PT GLOBAL RISK MANAGEMENT', 'JL TUANKU TAMBUSAI RT 009 KEL BUKIT TIMAH KEC. DUMAI SELATAN DUMAI', 'KONSUMTIF (meninggal dunia)', '07.02b.19.06000.09.1.12.0', 'MUS MULYADI', '320000000', '320000000', '1', '320000000', 'TIDAK ADA', 'SK', '0', '180', '2019-09-24', '2034-09-24', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '304000000', 'BOARE', 0, NULL),
(1102, '2019-12-20', NULL, NULL, 'CABANG TELUK KUANTAN', 'JL RAFLESIA NO 34 LK I 001/002 KEL. SUNGAI JERING KAB. KUANSING', 'PRODUKTIF', '07.02.18.00062.02.1.12.0', 'SHAHIRAH RAHMAWATI', '500000000', '250000000', '0.5', '185012497', '0', 'TANAH & BANGUNAN', '1044875000', '60', '2018-02-07', '2023-02-07', 'PRODUKSI MENURUN', 'PERKEBUNAN SAWIT', '0.5', '92506248.5', 'IGNA ASIA', 0, NULL),
(1103, '2019-12-19', '2020-03-26', '2020-03-31', 'PT PROTEKSI JAYA MANDIRI', 'JL KINA GG KINA I NO. 2 PEKANBARU', 'KONSUMTIF', '07.02.17.00115.05.1.12.0', 'YOHANIS', '130000000', '130000000', '1', '56756890', 'TIDAK ADA', 'SK', '0', '48', '2017-05-16', '2021-05-16', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.5', '28378445', 'IGNA ASIA', 0, NULL),
(1104, '2019-12-17', '2020-02-24', '2020-02-26', 'KEDAI PUJUD', 'NAGARI GADANG KEL. SARIAK LAWEH KEC. AKABILURU', 'PRODUKTIF', '07.02.17.00462.11.1.12.0', 'ARLIO NOSKI', '99000000', '74250000', '0.75', '50256795', '0', 'TANAH PERKEBUNAN', '69750000', '48', '2017-11-21', '2021-11-21', 'KALAH BERSAING', 'USAHA KEDAI KELONTONG', '0', '0', '0', 0, NULL),
(1105, '2019-12-11', '2020-02-24', '2020-02-26', 'KEDAI PASAR MINAS', 'JL. YOS SUDARSO RT/RW 003/007 KEL.MINAS JAYA KEC. MINAS KAB. SIAK', 'PRODUKTIF', '07.02.18.00374.08.1.12.0', 'MISWARNI', '40000000', '12000000', '0.3', '10179875', '0', 'TANAH & BANGUNAN', '32559750', '60', '2018-08-21', '2023-08-21', 'KALAH BERSAING', 'KEDAI HARIAN', '0', '0', '0', 0, NULL),
(1106, '2019-12-11', '2020-01-16', '2020-02-10', 'PT PROTEKSI JAYA MANDIRI', 'JL. GURITA GG. KAYANGAN NO. 06 RT 002 RW 007 KEL. TANGKERANG BARAT KEC. MARPOYAN DAMAI', 'KONSUMTIF (meninggal dunia)', '07.02.18.00225.06.1.12.0', 'ALIMUDDIN', '100000000', '100000000', '1', '76750370', 'TIDAK ADA', 'SK', '0', '60', '2018-05-08', '2023-05-08', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '69075333', 'APIRE', 0, NULL),
(1107, '2019-12-11', '2020-02-06', '2020-02-10', 'CABANG PEMBANTU BASERAH', 'DUSUN II 004/002 KOTO TUO KEC. KUANTAN HILIR KAB. KUANSING', 'PRODUKTIF (meninggal dunia)', '07.02.19.00064.02.1.12.0', 'DARWIS', '20000000', '15000000', '0.75', '13813604', 'TIDAK ADA', 'TANAH PERUMAHAN', '49935000', '24', '2019-02-07', '2021-02-07', 'MENINGGAL DUNIA', 'WARUNG MAKAN', '0', '0', '0', 0, NULL),
(1108, '2019-12-09', '2020-02-21', '2020-02-24', 'KEDAI LUBUK JAMBI', 'DESA SEBERANG PANTAI 001/001 KEC. KUANTAN MUDIK', 'PRODUKTIF ', '07.02.18.00304.07.1.12.0', 'YOSE RIZAL', '200000000', '100000000', '0.5', '80425825', '0', 'TANAH & BANGUNAN', '267000000', '48', '2018-05-25', '2022-05-25', 'KALAH BERSAING', 'BENGKEL', '0.5', '40212912.5', 'IGNA ASIA', 0, NULL),
(1109, '2019-12-05', NULL, '2020-11-30', 'PT GLOBAL RISK MANAGEMENT', 'JL. IMAM H ISMAIL 003/005 RANAI DARAT KECAMATAN BUNGURAN TIMUR KAB NATUNA', 'KONSUMTIF (meninggal dunia)', '07.02b.19.03075.05.1.12.0', 'SUKUR', '90000000', '90000000', '1', '88990440', 'TIDAK ADA', 'SK', '0', '120', '2019-05-15', '2029-05-15', 'PEMUTUSAN HUBUNGAN KERJA', ' PEGAWAI PDAM TIRTA NUSA KAB. NATUNA', '0.95', '84540918', 'BOARE', 0, NULL),
(1110, '2019-12-04', '2020-02-06', '2020-02-10', 'CABANG BAGAN BATU', 'DUSUN SIMPANG PUJUD  KEPENGHULUAN BAHTERA MAKMUR KEC BAGAN SINEMBAH', 'PRODUKTIF KUR', '07.02.18.18440.10.4.12.0', 'RAMONO', '100000000', '75000000', '0.75', '67445758', '0', 'TANAH PERKEBUNAN', '85333333', '48', '2018-10-06', '2022-10-06', 'HARGA JUAL RENDAH', 'PERKEBUNAN KELAPA SAWIT', '0', '0', NULL, 0, NULL),
(1111, '2019-11-28', '2020-02-18', '2020-02-19', 'CABANG PEMBANTU FLAMBOYAN', 'JL. FLAMBOYAN 07 RT 006 RW 003 TANJUNG SAWIT', 'PRODUKTIF (meninggal dunia)', '07.02.17.00285.10.1.12.0', 'TRI WAHONO', '150000000', '45000000', '0.3', '45833325', 'TIDAK ADA', 'TANAH PERKEBUNAN', '192000000', '36', '2017-09-06', '2020-09-06', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '41249992.5', 'IGNA ASIA', 0, NULL),
(1112, '2019-11-25', NULL, NULL, 'KEDAI TANDUN', 'DESA KUMAIN RT 009 RW 002 KEC. TANDUN KAB. ROKAN HULU', 'PRODUKTIF', '07.02.16.00071.04.1.12.0', 'SUDIYONO', '99000000', '74250000', '0.75', '51712398', '0', 'TANAH PERKEBUNAN', '160000000', '60', '2016-04-08', '2021-04-08', 'PRODUKSI MENURUN', 'PERKEBUNAN', '0', '0', '0', 0, NULL),
(1113, '2019-11-22', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'KEPENUHAN BARAT 001/002', 'PRODUKTIF KUR ', '07.02.17.00383.05.4.12.0', 'SISKA INDRAYANI', '50000000', '37500000', '0.75', '32684698', '0', 'TANAH PERUMAHAN', '240000000', '36', '2017-05-18', '2020-05-18', 'HARGA JUAL LEBIH RENDAH', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1114, '2019-11-19', '2020-02-14', '2020-02-18', 'KEDAI DURIAN', 'JL. RAJAWALI NO. 197 RT 005 RW 002 KEL. HANGTUAH KEC. PERHENTIAN RAJA KAB. KAMPAR ', 'PRODUKTIF (meninggal dunia)', '07.02.19.00389.10.1.12.0', 'TUMINAH', '500000000', '250000000', '0.5', '480962924', 'TIDAK ADA', 'TANAH BANGUNAN', '580712500', '60', '2019-09-30', '2024-09-30', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.95', '456914777.8', 'BOARE', 0, NULL),
(1115, '2019-11-18', NULL, '2020-08-31', 'CABANG PANGKALAN KERINCI', 'DESA GABUNG MAKMUR KEC. KKERINCI KANAN KAB. SIAK', 'PRODUKTIF (meninggal dunia)', '07.02.18.00048.02.1.12.0', 'BARIYEM', '50000000', '15000000', '0.3', '21415648', 'TIDAK ADA', 'TANAH PERUMAHAN', '60000000', '36', '2018-02-15', '2021-02-15', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1116, '2019-11-15', '2020-02-06', '2020-02-10', ' KEDAI SEI LALA', 'DESA BATU SAWAR 003/003 KEC. RAKIT KULIM KABUPATEN INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.17.00275.08.1.12.0', 'BOHORI', '25000000', '18750000', '0.75', '7039654', 'TIDAK ADA', 'TANAH PERKEBUNAN', '60000000', '36', '2017-08-25', '2020-08-25', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1117, '2019-08-29', '2020-02-25', '2020-02-26', 'PT ADONAI PIALANG ASURANSI', 'DUSUN SETIA KAWAN KELEMANTAN BKS RT 001 RW 001 KEL. KELEMANTAN KEC. BENGKALIS KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00765.05.1.12.0', 'SAMUJI', '220000000', '220000000', '1', '208576636', 'TIDAK ADA', 'SK', '0', '132', '2018-05-30', '2029-05-30', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '187718972.4', 'APIRE', 0, NULL),
(1118, '2019-08-19', '2020-02-20', '2020-02-24', 'KEDAI RANTAU KASAI', 'SUKA MAKMUR KM 8 RT/RW 004/004 KEL/DESA TANJUNG MEDAN KEC. TAMBUSAI UTARA ROKAN HULU', 'PRODUKTIF (meninggal dunia)', '07.02.19.00135.04.1.12.0', 'M. ARIFIN HASIBUAN', '100000000', '75000000', '0.75', '93236202', 'TIDAK ADA', 'TANAH PERKEBUNAN', '150000000', '48', '2019-03-05', '2023-03-05', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '83912581.8', 'IGNA ASIA', 0, NULL),
(1119, '2019-08-12', '2020-02-25', '2020-02-26', 'CABANG PEMBANTU SOREK', 'DUSUN II (DUA) RT 002 RW 004 DUNDANGAN KEC. PANGKALAN KURAS', 'PRODUKTIF (meninggal dunia)', '07.02.18.00074.02.1.12.0', 'SUGIYO', '350000000', '175000000', '0.5', '256666672', 'TIDAK ADA', 'TANAH PERKEBUNAN', '397699733', '60', '2018-02-27', '2023-02-27', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '231000004.8', 'IGNA ASIA', 0, NULL),
(1120, '2019-07-02', '0000-00-00', '2020-11-30', 'PT GLOBAL RISK MANAGEMENT', 'JL. MAKMUR RT 003 RW 008 KEL. PEMATANG REBA KEC. RENGAT BARAT KAB. INHU', 'KONSUMTIF (phk)', '07.02a.18.00101.05.1.12.0', 'SULASMI', '195000000', '195000000', '1', '189862648', 'TIDAK ADA', 'SK', '0', '180', '2018-05-21', '2033-05-21', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.95', '180369515.6', 'BOARE', 0, NULL),
(1121, '2019-06-25', '2020-02-17', '2020-02-18', 'CABANG PANGKALAN KERINCI', 'RAWANG SARI 006/003 KEC. PANGKALAN LESUNG KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00522.11.1.12.0', 'ZULKIFLI HENDRI', '500000000', '250000000', '0.5', '171762576', '0', 'TANAH BANGUNAN', '167230000', '48', '2018-07-03', '2022-07-03', 'HARGA JUAL MENURUN', 'JUAL BELI KELAPA SAWIT', '0.5', '85881288', NULL, 0, NULL),
(1122, '2019-06-25', '2020-02-17', '2020-02-18', 'CABANG PANGKALAN KERINCI', 'KM 2 MUHIBAH 001/006 DESA SOREK SATU KEC. PANGKALAN KURAS KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00024.01.1.12.0', 'HENDRA PUTRA', '500000000', '250000000', '0.5', '163326394', '0', 'TANAH BANGUNAN', '238608000', '48', '2018-01-29', '2022-01-29', 'HARGA JUAL MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '81663197', NULL, 0, NULL),
(1123, '2019-12-30', NULL, NULL, 'CABANG PEMBANTU DURI', 'JL DELIMA RT 016 RW 005 DESA/KEL KOTA BARU KEC. TAPUNG HILIR KAB. KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.19.00193.05.1.12.0', 'MUNTINGAH', '40000000', '12000000', '0.3', '32487594', '0', 'TANAH PERKEBUNAN', '207792000', '36', '2019-04-09', '2022-04-09', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1124, '2019-12-23', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'KEPENUHAN SEJATI 002/001', 'PRODUKTIF (meninggal dunia)', NULL, 'M. YUSUF ', '100000000', '0', NULL, '88068890', 'TIDAK ADA', NULL, NULL, '96', '2018-02-21', '2026-02-21', 'MENINGGAL DUNIA', NULL, NULL, '0', NULL, 0, NULL),
(1125, '2019-12-23', NULL, NULL, 'PT ADONAI PIALANG ASURANSI', 'CENTER PARK BLOK K NO 19', 'KONSUMTIF (macet)', NULL, 'DEWI KUMALA SARI', '250000000', '250000000', '1', '234416200', 'TIDAK ADA', 'SK', '0', '96', '2018-07-20', '2026-07-20', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI KARYAWAN SWASTA', '0.5', '117208100', 'APIRE', 0, NULL),
(1126, '2019-12-23', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL TUANKU TAMBUSAI RT 009 KEL BUKIT TIMAH KEC. DUMAI SELATAN DUMAI', 'KONSUMTIF (meninggal dunia)', '07.02b.19.06000.09.1.12.0', 'MUS MULYADI', '320000000', '320000000', '1', '320672808', 'TIDAK ADA', 'SK', NULL, '180', '2019-09-24', '2034-09-24', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '304639167.6', 'BOARE', 0, NULL),
(1127, '2019-12-20', NULL, NULL, 'CABANG TELUK KUANTAN', 'JL RAFLESIA NO 34 LK I 001/002 KEL. SUNGAI JERING KAB. KUANSING', 'PRODUKTIF', '07.02.18.00062.02.1.12.0', 'SHAHIRAH RAHMAWATI', '500000000', '250000000', '0.5', '185012497', '0', 'TANAH & PERUMAHAN', '1044875000', '60', '2018-02-07', '2023-02-07', 'PRODUKSI MENURUN', 'PERKEBUNAN SAWIT', '0.5', '92506248.5', 'IGNA ASIA', 0, NULL),
(1128, '2019-12-19', '2019-12-30', '2019-12-31', 'PT ADONAI PIALANG ASURANSI', 'JL. GG KARTINI RT 001 RW 005 KEL. TANJUNG BATU KOTA KEC. KUNDUR KABUPATEN KARIMUN.', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00492.05.1.12.0', 'HERI SUSANTO', '225000000', '225000000', '1', '224768814', 'TIDAK ADA', 'SK', '0', '180', '2018-05-22', '2033-05-22', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.5', '112384407', 'APIRE', 0, NULL),
(1129, '2019-12-19', NULL, NULL, 'PT PROTEKSI JAYA MANDIRI', 'JL KINA GG KINA I NO. 2 PEKANBARU', 'KONSUMTIF', '07.02.17.00115.05.1.12.0', 'YOHANIS', '130000000', '130000000', '1', '56756890', 'TIDAK ADA', 'SK', '0', '48', '2017-05-16', '2021-05-16', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, '0', NULL, 0, NULL),
(1130, '2019-12-18', NULL, NULL, 'CABANG PEMBANTU PERAWANG', 'JL. HANG JEBAT GG KULIT MANIS 009/005 KEL. PERAWANG KEC. TUALANG', 'PRODUKTIF', '07.02.18.00368.08.1.12.0', 'RISLAN MUNANDAR', '100000000', '30000000', '0.3', '27086938', '0', 'TANAH & BANGUNAN', '127499963', '48', '2018-06-08', '2022-06-08', 'KALAH BERSAING', 'TOKO BAHAN BANGUNAN', '0', '0', '0', 0, NULL),
(1131, '2019-12-17', NULL, NULL, 'KEDAI PUJUD', 'NAGARI GADANG KEL. SARIAK LAWEH KEC. AKABILURU', 'PRODUKTIF', '07.02.17.00462.11.1.12.0', 'ARLIO NOSKI', '99000000', '74250000', '0.75', '50481007', '0', 'TANAH PERKEBUNAN', '69750000', '48', '2017-11-21', '2021-11-21', 'KALAH BERSAING', 'USAHA KEDAI KELONTONG', '0', '0', '0', 0, NULL),
(1132, '2019-12-12', NULL, NULL, 'CABANG PEMBANTU PERAWANG', 'JL. HANG NADIM, GG. RUKUN NO. 45 RT 004/RW 005 TUALANG TENGAH', 'PRODUKTIF', '07.02.17.00342.10.1.12.0', 'ZAHARA', '30000000', '9000000', '0.3', '7446639', '0', 'TANAH KOSONG', '25625000', '36', '2017-09-22', '2020-09-22', 'PRODUKSI MENURUN', 'JUAL MINUMAN SUSU KEDELAI', NULL, NULL, NULL, 0, NULL),
(1133, '2019-12-11', NULL, NULL, 'KEDAI PASAR MINAS', 'JL. YOS SUDARSO RT/RW 003/007 KEL.MINAS JAYA KEC. MINAS KAB. SIAK', 'PRODUKTIF', '07.02.18.00374.08.1.12.0', 'MISWARNI', '40000000', '12000000', '0.3', '10002494', '0', 'TANAH & BANGUNAN', '32559750', '60', '2018-08-21', '2023-08-21', 'KALAH BERSAING', 'KEDAI HARIAN', '0', '0', '0', 0, NULL),
(1134, '2019-12-11', NULL, NULL, 'PT PROTEKSI JAYA MANDIRI', 'JL. GURITA GG. KAYANGAN NO. 06 RT 002 RW 007 KEL. TANGKERANG BARAT KEC. MARPOYAN DAMAI', 'KONSUMTIF (meninggal dunia)', '07.02.18.00225.06.1.12.0', 'ALIMUDDIN', '100000000', '100000000', '1', '76750370', 'TIDAK ADA', 'SK', '0', '60', '2018-05-08', '2023-05-08', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '69075333', 'APIRE', 0, NULL),
(1135, '2019-12-11', NULL, NULL, 'CABANG PEMBANTU BASERAH', 'DUSUN II 004/002 KOTO TUO KEC. KUANTAN HILIR KAB. KUANSING', 'PRODUKTIF (meninggal dunia)', NULL, 'DARWIS', '20000000', '15000000', '0.75', '14193434', 'TIDAK ADA', 'TANAH PERUMAHAN', '49935000', '24', '2019-02-07', '2021-02-07', 'MENINGGAL DUNIA', 'WARUNG MAKAN', '0', '0', '0', 0, NULL),
(1136, '2019-12-09', NULL, NULL, 'KEDAI LUBUK JAMBI', 'DESA SEBERANG PANTAI 001/001 KEC. KUANTAN MUDIK', 'PRODUKTIF ', '07.02.18.00304.07.1.12.0', 'YOSE RIZAL', '200000000', '100000000', '0.5', '80425825', '0', 'TANAH & BANGUNAN', '267000000', '48', '2018-05-25', '2022-05-25', 'KALAH BERSAING', 'BENGKEL', '0.5', '40212912.5', 'IGNA ASIA', 0, NULL),
(1137, '2019-12-05', NULL, NULL, 'PT GLOBAL RISK MANAGEMENT', 'JL. IMAM H ISMAIL 003/005 RANAI DARAT KECAMATAN BUNGURAN TIMUR KAB NATUNA', 'KONSUMTIF (meninggal dunia)', '07.02b.19.03075.05.1.12.0', 'SUKUR', '90000000', '90000000', '1', '89476715', 'TIDAK ADA', 'SK', '0', '120', '2019-05-15', '2029-05-15', 'PEMUTUSAN HUBUNGAN KERJA', ' PEGAWAI PDAM TIRTA NUSA KAB. NATUNA', '0.95', '85002879.25', 'BOARE', 0, NULL),
(1138, '2019-12-05', '2019-12-30', '2019-12-31', 'PT GLOBAL RISK MANAGEMENT', 'BTN BUMI LOGO PERMAI JL SAWIT GG SAWIT II NO. 8 001/012 KEL PANGKALAN KERINCI KOTA KEC PANGKALAN KERINCI', 'KONSUMTIF (meninggal dunia)', '07.02b.19.04801.08.1.12.0', 'REZA HARUNSYAH PUTRA', '370000000', '370000000', '1', '370000000', 'TIDAK ADA', NULL, NULL, '144', '2019-08-07', '2031-08-07', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '351500000', 'BOARE', 0, NULL),
(1139, '2019-12-04', NULL, NULL, 'CABANG BAGAN BATU', 'DUSUN SIMPANG PUJUD  KEPENGHULUAN BAHTERA MAKMUR KEC BAGAN SINEMBAH', 'PRODUKTIF KUR', NULL, 'RAMONO', '100000000', '75000000', '0.75', '64535702', '0', 'TANAH PERKEBUNAN', '85333333', '48', '2018-10-06', '2022-10-06', 'HARGA JUAL RENDAH', 'PERKEBUNAN KELAPA SAWIT', '0', '0', NULL, 0, NULL),
(1140, '2019-12-02', '2019-12-30', '2019-12-31', 'PT GLOBAL RISK MANAGEMENT', 'SIMPANG IV BELILAS RT 018 RW 005 KEL. PANGKALAN KASAI KEC. SEBERIDA KAB. INHU', 'KONSUMTIF (PHK)', '07.02a.18.00248.09.1.12.0', 'MASRIAL SH', '295000000', '295000000', '1', '289092251', 'TIDAK ADA', 'SK', '0', '108', '2018-09-18', '2027-09-18', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.95', '274637638.45', 'BOARE', 0, NULL),
(1141, '2019-12-02', '2019-12-30', '2019-12-31', 'PT GLOBAL RISK MANAGEMENT', 'ROKAN KOTO RUANG RT.003/RW.002 KEC. ROKAN IV KOTO KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.05264.08.1.12.0', 'HERPIANTO', '265000000', '265000000', '1', '265000000', 'TIDAK ADA', NULL, NULL, '180', '2019-08-23', '2034-08-23', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '251750000', 'BOARE', 0, NULL),
(1142, '2019-11-28', NULL, NULL, 'CABANG PEMBANTU FLAMBOYAN', 'JL. FLAMBOYAN 07 RT 006 RW 003 TANJUNG SAWIT', 'PRODUKTIF (meninggal dunia)', '07.02.17.00285.10.1.12.0', 'TRI WAHONO', '150000000', '45000000', '0.3', '46333335', 'TIDAK ADA', 'TANAH PERKEBUNAN', '192000000', '36', '2017-09-06', '2020-09-06', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '41700001.5', 'IGNA ASIA', 0, NULL),
(1143, '2019-11-25', NULL, NULL, 'KEDAI TANDUN', 'DESA KUMAIN RT 009 RW 002 KEC. TANDUN KAB. ROKAN HULU', 'PRODUKTIF', '07.02.16.00071.04.1.12.0', 'SUDIYONO', '99000000', '74250000', '0.75', '51712398', '0', 'TANAH PERKEBUNAN', '160000000', '60', '2016-04-08', '2021-04-08', 'PRODUKSI MENURUN', 'PERKEBUNAN', '0', '0', '0', 0, NULL),
(1144, '2019-11-25', NULL, NULL, 'CABANG PEMBANTU DURI', 'RT 008 RW 006 DESA/KEL KOTA BARU KEC. TAPUNG HILIR KAB. KAMPAR', 'PRODUKTIF KUR (meninggal dunia)', '07.02.18.17649.08.4.12.0', 'SUJARWO', '70000000', '52500000', '0.75', '43093484', 'TIDAK ADA', 'TANAH PERKEBUNAN', '63936000', '36', '2018-08-16', '2021-08-16', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1145, '2019-11-22', NULL, NULL, 'CABANG PEMBANTU KOTA TENGAH', 'KEPENUHAN BARAT 001/002', 'PRODUKTIF KUR ', '07.02.17.00383.05.4.12.0', 'SISKA INDRAYANI', '50000000', '37500000', '0.75', '32684698', '0', 'TANAH PERUMAHAN', '240000000', '36', '2017-05-18', '2020-05-18', 'HARGA JUAL LEBIH RENDAH', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1146, '2019-11-21', '2019-12-16', '2019-12-31', 'KEDAI SUNGAI APIT', 'PEBADARAN RT 001 RW 001 KEC. PUSAKO APIT KAB. SIAK', 'PRODUKTIF KUR', '07.02.18.17317.06.4.12.0', 'EDI AZWAR', '25000000', '18750000', '0.75', '12997222', '0', 'TANAH', '24500000', '36', '2018-05-11', '2021-05-11', 'HARGA JUAL LEBIH RENDAH', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1147, '2019-11-19', NULL, NULL, 'KEDAI DURIAN', 'JL. RAJAWALI NO. 197 RT 005 RW 002 KEL. HANGTUAH KEC. PERHENTIAN RAJA KAB. KAMPAR ', 'PRODUKTIF (meninggal dunia)', '07.02.19.00389.10.1.12.0', 'TUMINAH', '500000000', '250000000', '0.5', '493712128', 'TIDAK ADA', 'TANAH BANGUNAN', '580712500', '60', '2019-09-30', '2024-09-30', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.95', '469026521.6', 'BOARE', 0, NULL),
(1148, '2019-11-18', NULL, NULL, 'CABANG PANGKALAN KERINCI', 'DESA GABUNG MAKMUR KEC. KKERINCI KANAN KAB. SIAK', 'PRODUKTIF (meninggal dunia)', '07.02.18.00048.02.1.12.0', 'BARIYEM', '50000000', '15000000', '0.3', '22843184', 'TIDAK ADA', 'TANAH PERUMAHAN', NULL, '36', '2018-02-15', '2021-02-15', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1149, '2019-11-15', NULL, NULL, ' KEDAI SEI LALA', 'DESA BATU SAWAR 003/003 KEC. RAKIT KULIM KABUPATEN INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.17.00275.08.1.12.0', 'BOHORI', '25000000', '18750000', '0.75', '7858122', 'TIDAK ADA', 'TANAH PERKEBUNAN', '60000000', '36', '2017-08-25', '2020-08-25', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1150, '2019-10-30', '2019-12-30', '2019-12-31', 'BPR UNISRITAMA', 'KOMPLEK UIR RT/RW 003/007 KEL. SIMPANG TIGA', 'KONSUMTIF (meninggal dunia)', '07.04.17.00003.03.1.12.0', 'HOLDUN YAZID', '200000000', '200000000', '1', '103081869', 'TIDAK ADA', 'SK', '0', '54', '2017-03-24', '2021-09-24', 'MENINGGAL DUNIA', 'KARYAWAN UNIVERSITAS RIAU', '0.9', '92773682.1', 'IGNA ASIA', 0, NULL),
(1151, '2019-10-23', '2019-12-16', '2019-12-31', 'PT GLOBAL RISK MANAGEMENT', 'KELURAHAN UJUNG BATU 002/010', 'KONSUMTIF (meninggal dunia)', '07.02b.19.03010.05.1.12.0', 'HERNEILIS', '150000000', '150000000', '1', '147551135', 'TIDAK ADA', 'SK', '0', '84', '2019-05-14', '2026-05-14', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '140173578.25', 'BOARE', 0, NULL),
(1152, '2019-10-16', '2019-12-30', '2019-12-31', 'PT ADONAI PIALANG ASURANSI', 'JL. RADEN SALEH RT 001 RW 003 KEL. TAREMPA KEC. SIANTAN KAB. ANAMBAS', 'KONSUMTIF (meninggal dunia)', '07.02b.18.01560.05.1.12.0', 'FEBRIANDI', '230000000', '230000000', '1', '210341831', 'TIDAK ADA', 'SK', '0', '96', '2018-07-24', '2026-07-24', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '189307647.9', 'APIRE', 0, NULL),
(1153, '2019-10-15', NULL, NULL, 'CABANG PASIR PENGARAIAN', 'KOTA TENGAH RT 003 RW 001 DESA KOTA TENGAH KEC. KEPENUHAN KAB. ROKAN DULU', 'PRODUKTIF KUR', '07.02.17.01199.01.4.12.0', 'RIBERMADI', '350000000', '262500000', '0.75', '174918138', '0', 'TANAH PERKEBUNAN', '280280000', '60', '2016-12-28', '2021-12-28', 'HARGA JUAL LEBIH RENDAH DARI PRODUKSI', 'PERKEBUNAN KELAPA SAWIT', '0', '0', NULL, 0, NULL),
(1154, '2019-10-14', '2019-12-30', '2019-12-31', 'KEDAI DURIAN', 'JL. PAHLAWAN KERJA RT 003 RW 005 MAHARATU, MARPOYAN DAMAI', 'PRODUKTIF', '07.02.18.00393.09.1.12.0', 'DANANG WANARSA ', '30000000', '15000000', '0.5', '10024327', '0', 'SEPEDA MOTOR', '17600000', '24', '2018-08-13', '2020-08-13', 'HARGA PRODUKSI TURUN', 'KEDAI NASI', '0', '0', '0', 0, NULL),
(1155, '2019-10-14', '2019-12-30', '2019-12-31', 'CABANG PEMBANTU BASERAH', 'HULU TESO 005/002 KEC. LOGAS TANAH DARAT KAB. KUANSING', 'PRODUKTIF KUR', '07.02.18.17575.08.4.12.0', 'MASTUR', '500000000', '375000000', '0.75', '291556251', '0', 'TANAH PERUMAHAN', '262350000', '180', '2018-03-08', '2033-03-08', 'HARGA PRODUKSI TURUN DAN KEJADIAN DILUAR DUGAAN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1156, '2019-10-09', '2019-12-30', '2019-12-31', 'KEDAI SUKARAMAI', 'SENAMA NENEK RT 002 RW 003 KEC. TAPUNG HULU', 'PRODUKTIF KUR', '07.02.16.00091.10.4.12.0', 'JAMARIS', '25000000', '18750000', '0.75', '4260303', '0', 'TANAH PERKEBUNAN', '65000000', '36', '2016-10-24', '2019-10-24', 'HARGA JUAL LEBIH RENDAH DARI PRODUKSI', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1157, '2019-10-08', NULL, NULL, 'CABANG TELUK KUANTAN', 'PASAR CERENTI 003/002 KEC. CERENTI', 'PRODUKTIF', '07.02.17.00010.01.1.12.0', 'SYAPRILIS', '350000000', '175000000', '0.5', '270994355', '0', 'TANAH & BANGUNAN', '320000000', '96', '2017-01-25', '2025-01-25', 'KALAH BERSAING', 'TOKO ECERAN ATK, OLAHRAGA DAN KOMPUTER', '0.5', '135497177.5', 'IGNA ASIA', 0, NULL),
(1158, '2019-10-08', '2019-12-30', '2019-12-31', 'CABANG TELUK KUANTAN', 'DUSUN SUNGAI RUMBIO KOTO KARI', 'PRODUKTIF', '07.02.18.00563.12.1.12.0', 'MUKTI EFENDI', '250000000', '125000000', '0.5', '118020839', '0', 'TANAH', '357990000', '48', '2018-11-27', '2022-11-27', 'KALAH BERSAING', 'PERIKANAN', '0.5', '59010419.5', 'IGNA ASIA', 0, NULL),
(1159, '2019-10-07', '2019-12-12', '2019-12-13', 'KEDAI DURIAN', 'JL. TIUNG GG. MURAI KEL. TANGKERANG TENGAH KEC. MARPOYAN DAMAI PEKANBARU', 'PRODUKTIF KUR', '07.02.18.17970.09.4.12.0', 'AGUSTIAN DAMANTO', '500000000', '375000000', '0.75', '330687507', '0', 'TANAH & BANGUNAN', '393685867', '60', '2018-09-05', '2023-09-05', 'KUALITAS HASIL PRODUKSI MENURUN', 'PERKEBUNAN KARET', '0', '0', '0', 0, NULL),
(1160, '2019-10-07', NULL, NULL, 'CBANG PEMBANTU DALU-DALU', 'LINGK KUBA 002/001 TAMBUSAI TENGAH', 'PRODUKTIF', '07.02.17.00457.11.1.12.0', 'SUBRANTAS', '500000000', '150000000', '0.3', '198814532', '0', 'TANAH', '606403750', '24', '2017-11-14', '2019-11-14', 'KALAH BERSAING', 'PERDAGANGAN BUAH KELAPA SAWIT', '0.5', '99407266', 'IGNA ASIA', 0, NULL),
(1161, '2019-09-30', NULL, NULL, 'KEDAI TANDUN', 'TANDUN 006/002', 'PRODUKTIF', '07.02.18.00226.06.1.12.0', 'ADRIYANUS', '100000', '75000000', '0.75', '64598805', '0', 'TANAH & RUMAH', '123207500', '48', '2018-05-25', '2022-05-25', 'HARGA JUAL LEBIH RENDAH DARI PRODUKSI', 'PERKEBUNAN SAWIT', '0', '0', '0', 0, NULL),
(1162, '2019-09-27', '2019-12-06', '2019-12-13', 'KEDAI SEI LALA', 'DESA RIMPIAN 003/002 KECAMATAN LUBUK BATU JAYA KABUPATEN INDRAGIRI HULU', 'PRODUKTIF', '07.02.18.00275.08.1.12.0', 'AJRUL HUSNI', '40000000', '20000000', '0.5', '16548064', '0', 'TANAH & BANGUNAN', '70498000', '36', '2018-07-23', '2021-07-23', 'HARGA JUAL LEBIH RENDAH DARI PRODUKSI', 'PERKEBUNAN SAWIT', '0', '0', '0', 0, NULL),
(1163, '2019-09-25', NULL, '2019-12-02', 'KEDAI MERAL', 'GUNTUNG PUNAK RT 002 RW 003 KEL. DARUSSALAM KEC. MERAL BARAT', 'PRODUKTIF KUR', '07.02.18.18428.10.4.12.0', 'AGUS SULARNO', '25000000', '18750000', '0.75', '15104723', '0', 'TANAH', '20250000', '24', '2018-10-18', '2020-10-18', 'MELARIKAN DIRI', 'RUMAH MAKAN', '0', '0', '0', 0, NULL),
(1164, '2019-09-25', '2019-12-04', '2019-12-13', 'CABANG PEMBANTU FLAMBOYAN', 'DUSUN KUSAU MAKMUR RT 002 RW 002 KEL. DANAU LANCANG KEC. TAPUNG HULU KAB. KAMPAR', 'KONSUMTIF (meninggal dunia)', '07.02.18.00112.04.1.12.0', 'JENTI SIAGIAN', '250000000', '250000000', '1', '218478044', 'TIDAK ADA', 'SK', '0', '94', '2018-03-05', '2026-01-05', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.5', '109239022', 'INARE', 0, NULL),
(1165, '2019-09-23', '2019-11-19', '2019-11-28', 'CABANG PEMBANTU PERAWANG', 'JL. GAJAH TUNGGAL GG. PELAJAR RT 012 RW 002 KEL. PERAWANG KEC. TUALANG KAB. SIAK', 'PRODUKTIF KUR', '07.02.18.18240.09.4.12.0', 'UJANG GANDA', '20000000', '15000000', '0.75', '8848440', '0', 'TANAH & BANGUNAN', '135000000', '24', '2018-05-21', '2020-05-21', 'HASIL PANEN DICURI ORANG', 'BUDIDAYA BIOTA AIR TAWAR DAN AIR PAYAU', '0', '0', '0', 0, NULL),
(1166, '2019-09-19', '0000-00-00', '0000-00-00', 'KEDAI AIRTIRIS', 'JL. T. BEY NO. 21 KEL. SIMPANG TIGA ', 'KONSUMTIF (macet)', '07.02.15.00165.09.1.12.0', 'SAPTA FITRISIA', '50000000', '50000000', '1', '12172800', 'TIDAK ADA', 'SK & TANAH KOSONG', '0', '48', '2015-09-29', '2019-09-29', 'MACET', 'PEGAWAI NEGERI SIPIL', '0', '0', '0', 0, NULL),
(1167, '2019-09-17', '2019-11-28', '2019-12-02', 'PT GLOBAL RISK MANAGEMENT', 'TITIAN RESAK 011/003 KEC. SEBERIDA INHU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.04485.07.1.12.0', 'GAUTAMA COLLIN SIHOL', '250000000', '250000000', '1', '250000000', 'TIDAK ADA', 'SK', '0', '108', '2019-07-23', '2028-07-23', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '237500000', 'BOARE', 0, NULL),
(1168, '2019-09-10', '0000-00-00', '0000-00-00', 'PT PROTEKSI JAYA MANDIRI', 'JL. MERAK VILLA BUNGA RAYA D NOMOR 27 RT 002 RW 007 KEL. TANGKERANG LABUAI KEC. BUKIT RAYA, KOTA PEKANBARU', 'KONSUMTIF (macet)', '07.02.17.00054.03.1.12.0', 'RENDY DEPALMA', '205000000', '205000000', '1', '199645990', 'TIDAK ADA', 'SK', '0', '120', '2017-03-24', '2027-03-24', 'TIDAK MEMBAYAR ANGSURAN', 'PEGAWAI NEGERI SIPIL', '0', '0', NULL, 0, NULL),
(1169, '2019-09-05', NULL, NULL, 'KEDAI LUBUK JAMBI', 'DESA PANTAI 002/001 KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.17.00060.03.1.12.0', 'DAHLIUS', '100000000', '30000000', '0.3', '11993711', '0', 'TANAH PERKEBUNAN', '112500000', '36', '2017-03-27', '2020-03-27', 'HARGA PRODUKSI TURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '5996855.5', 'IGNA ASIA', 0, NULL),
(1170, '2019-09-05', NULL, NULL, 'KEDAI LUBUK JAMBI', 'DESA SUNGAI BESAR KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.17.00222.08.1.12.0', 'NOPENDRI', '99000000', '49500000', '0.5', '29873800', '0', 'TANAH PERKEBUNAN', '114481250', '36', '2017-07-27', '2020-07-27', 'HARGA PRODUKSI TURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1171, '2019-09-05', '2019-11-29', '2019-12-02', 'KEDAI LUBUK JAMBI', 'DESA PANTAI KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.17.00219.08.1.12.0', 'HADRIANTO', '95000000', '47500000', '0.5', '31223610', '0', 'TANAH PERKEBUNAN', '111009000', '48', '2017-06-13', '2021-06-13', 'HARGA PRODUKSI TURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1172, '2019-09-05', NULL, '2019-12-02', 'KEDAI LUBUK JAMBI', 'DESA BANJAR PADANG 001/001 KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.15.00209.11.1.12.0', 'RISNAWATI', '42000000', '21000000', '0.5', '6228949', '0', 'TANAH PERKEBUNAN', '46800000', '48', '2015-11-13', '2019-11-13', 'HARGA PRODUKSI TURUN', 'PERKEBUNAN KELAPA SAWIT', '0', '0', '0', 0, NULL),
(1173, '2019-09-05', '0000-00-00', '0000-00-00', 'CABANG SELATPANJANG', 'DUSUN AIR MERAH RT/RW 003/001 MEKONG KEC. TEBING TINGGI BARAT KAB. KEP. MERANTI', 'PRODUKTIF KUR', '07.02.16.01071.12.4.12.0', 'NORIJA', '60000000', '45000000', '0.75', '17855635', '0', 'TANAH KOSONG', '55080000', '36', '2016-10-18', '2019-10-18', 'BANGKRUT', 'USAHA JUAL AYAM POTONG', '0', '0', '0', 0, NULL),
(1174, '2019-09-05', '0000-00-00', '0000-00-00', 'CABANG SELATPANJANG', 'JL. SEMPURNA GG DAMAI SELATPANJANG SELATAN', 'PRODUKTIF', '07.02.16.00118.06.1.12.0', 'MIHRAB PUTRA', '25000000', '18750000', '0.75', '3079878', '0', 'TANAH & BANGUNAN', '57000000', '36', '2016-06-24', '2019-06-24', 'BANGKRUT', 'USAHA KONTER PULSA PONSEL', '0', '0', '0', 0, NULL),
(1175, '2019-09-02', NULL, '2019-12-02', 'KEDAI PUJUD', 'DUSUN TEBING TINGGI RT 001/RW 002 KEL. SEI MERANTI KEC. PUJUD', 'PRODUKTIF', '07.02.17.00348.10.1.12.0', 'ZEPRI', '40000000', '30000000', '0.75', '17523845', '0', 'TANAH PERUMAHAN', '25300000', '36', '2017-09-05', '2020-09-05', 'BANGKRUT', 'BENGKEL LAS', '0', '0', '-', 0, NULL),
(1176, '2019-08-29', '0000-00-00', '0000-00-00', 'PT ADONAI PIALANG ASURANSI', 'DUSUN SETIA KAWAN KELEMANTAN BKS RT 001 RW 001 KEL. KELEMANTAN KEC. BENGKALIS KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00765.05.1.12.0', 'SAMUJI', '220000000', '220000000', '1', '208576636', 'TIDAK ADA', 'SK', '0', '132', '2018-05-30', '2029-05-30', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '187718972.4', 'APIRE', 0, NULL),
(1177, '2019-08-26', '0000-00-00', '0000-00-00', 'KEDAI PASAR LUBUK JAMBI', 'DESA PANTAI 003/003 KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.17.00060.03.1.12.0', 'YULDEDI', '99000000', '29700000', '0.3', '16923979', '0', 'TANAH PERKEBUNAN', '110000000', '36', '2017-03-27', '2020-03-27', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1178, '2019-08-26', '2019-11-13', '2019-11-28', 'PT GLOBAL RISK MANAGEMENT', 'WONOSARI BARAT NO. 11 RT 001 RW 001 KEL. KOTO TINGGI KEC. RAMBAH KAB. ROKAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.00169.01.1.12.0', 'ARMAN AMIR IR', '200000000', '200000000', '1', '193275565', 'TIDAK ADA', 'SK', '0', '84', '2019-01-17', '2026-01-17', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '173948008.5', 'BOARE', 0, NULL),
(1179, '2019-08-19', '0000-00-00', '0000-00-00', 'KEDAI RANTAU KASAI', 'SUKA MAKMUR KM 8 RT/RW 004/004 KEL/DESA TANJUNG MEDAN KEC. TAMBUSAI UTARA ROKAN HULU', 'PRODUKTIF (meninggal dunia)', '07.02.19.00135.04.1.12.0', 'M. ARIFIN HASIBUAN', '100000000', '75000000', '0.75', '93236202', 'TIDAK ADA', 'TANAH PERKEBUNAN', '150000000', '48', '2019-03-05', '2023-03-05', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '83912581.8', 'IGNA ASIA', 0, NULL),
(1180, '2019-08-19', '2019-11-22', '2019-12-02', 'CABANG RANAI', 'SINGGANG BULAN 001/001 CEMAGA UTARA', 'PRODUKTIF KUR', '07.02.16.00894.12.4.12.0', 'ROHANI', '45000000', '33750000', '0.75', '9585960', '0', 'TANAH BANGUNAN', '88300000', '36', '2016-12-22', '2019-12-22', 'PRODUKSI MENURUN', 'PETERNAKAN SAPI', NULL, NULL, NULL, 0, NULL),
(1181, '2019-08-16', '0000-00-00', '0000-00-00', 'KEDAI PUJUD', 'DUSUN SEI TAPAH RT 001/RW 001 KEL. SUNGAI TAPAH KEC. PUJUD', 'PRODUKTIF (meninggal dunia)', '07.02.19.00075.03.1.12.0', 'JOKO PRIADI', '100000000', '75000000', '0.75', '91820900', 'TIDAK ADA', 'TANAH PERKEBUNAN', '115320000', '48', '2019-02-19', '2023-02-19', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '82638810', 'IGNA ASIA', 0, NULL),
(1182, '2019-08-12', '2019-09-02', '2019-09-13', 'KEDAI SUNGAI SEMBILAN', 'JL. NELAYAN LAUT RT 004 KEL. PANGKALAN SESAI', 'PRODUKTIF', '07.02.16.00321.10.1.12.0', 'RAHMAN', '75000000', '56250000', '0.75', '28045269', '0', 'TANAH KOSONG', '63480000', '48', '2016-10-26', '2020-10-26', 'KALAH SAING', 'JUAL AIR KELAPA MUDA DAN PONSEL ', NULL, NULL, NULL, 0, NULL),
(1183, '2019-08-12', NULL, NULL, 'CABANG PEMBANTU SOREK', 'DUSUN II (DUA) RT 002 RW 004 DUNDANGAN KEC. PANGKALAN KURAS', 'PRODUKTIF (meninggal dunia)', '07.02.18.00074.02.1.12.0', 'SUGIYO', '350000000', '175000000', '0.5', '256666672', 'TIDAK ADA', 'TANAH PERKEBUNAN', '397699733', '60', '2018-02-27', '2023-02-27', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '231000004.8', 'IGNA ASIA', 0, NULL),
(1184, '2019-08-09', '2019-09-03', '2019-09-13', 'KEDAI MARPOYAN', 'JL. PAHLAWAN KERJA RT 001 RW 003 KEL. MAHARATU KEC. MARPOYAN', 'PRODUKTIF (meninggal dunia)', '07.02.19.00095.03.1.12.0', 'IRWANTO', '200000000', '100000000', '0.5', '188335515', 'TIDAK ADA', 'TANAH & BANGUNAN', '267400000', '60', '2019-02-18', '2024-02-18', 'MENINGGAL DUNIA', 'GROSIR BARANG HARIAN', '0.9', '169501963.5', 'IGNA ASIA', 0, NULL),
(1185, '2019-08-08', '0000-00-00', '0000-00-00', 'CABANG PEMBANTU JALAN RIAU', 'JL. BELUT RT 004 RW 006 KEL. LABUHBARU BARAT KEC. PAYUNG SEKAKI PEKANBARU', 'KONSUMTIF (PHK)', '07.02.18.00201.06.1.12.0', 'RIAN FALEN', '40000000', '40000000', '1', '34442010', 'TIDAK ADA', 'SK', '0', '48', '2018-04-26', '2022-04-26', 'PEMUTUSAN HUBUNGAN KERJA', 'SECURITY BANK RIAU KEPRI', NULL, '0', NULL, 0, NULL),
(1186, '2019-08-06', '2019-10-14', '2019-10-16', 'PT GLOBAL RISK MANAGEMENT', 'SEI KIJANG RT 002 RW 002 KEL. CIPANG KIRI HULU KEC. ROKAN IV KOTO ROKAN HULU RIAU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.01946.04.1.12.0', 'MASRUL', '250000000', '250000000', '1', '244533391', 'TIDAK ADA', 'SK', '0', '72', '2019-04-11', '2025-04-11', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '220080051.9', 'BOARE', 0, NULL),
(1187, '2019-08-05', '0000-00-00', '0000-00-00', 'KEDAI PANGKALAN KERINCI', 'DUSUN BANJAR TENGAH RT 005 RW 003 KEL. BUKIT HARAPAN KEC. KERINCI KANAN KAB. SIAK', 'PRODUKTIF', '07.02.17.00447.11.1.12.0', '                                                ', '85000000', '42500000', '0.5', '27683211', '0', 'TANAH PERKEBUNAN', '163200000', '36', '2017-11-15', '2020-11-15', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, '0', NULL, 0, NULL),
(1188, '2019-08-02', '2019-12-11', '2019-12-13', 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. DELAILA RT 002/RW 001 KEL. RANTAU KOPAR KEC. RANTAU KOPAR', 'PRODUKTIF KUR', '07.02.18.18341.10.4.12.0', 'DEDI AZMAN', '100000000', '75000000', '0.75', '69980458', '0', 'TANAH PERUMAHAN', '64440000', '48', '2018-10-10', '2022-10-10', 'USAHA TIDAK LANCAR', 'DAGANG ECERAN', NULL, '0', NULL, 0, NULL),
(1189, '2019-08-02', '2019-10-14', '2019-12-31', 'PT GLOBAL RISK MANAGEMENT', 'GG. AMAL NO. 18 BLOK D PERUMNAS PRT 3 RT 002 RW 001 KEL. TEMBILAHAN HULU KEC. TEMBILAHAN HULU', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02972.05.1.12.0', 'YENDRITA', '235000000', '235000000', '1', '232634810', 'TIDAK ADA', 'SK', '0', '114', '2019-05-14', '2028-11-14', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.95', '221003069.5', 'BOARE', 0, NULL),
(1190, '2019-07-29', '2019-09-03', '2019-09-13', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'JL. TAN MALAKA KP. NELAYAN RT 005/RW002 KE/DESA TAGARAJA KEC. KATEMAN KAB. INDRAGIRI HILIR', 'PRODUKTIF', '07.02.17.00414.11.1.12.0', 'AMBOK ALANG', '300000000', '150000000', '0.5', '105246980', '0', 'TANAH & BANGUNAN', '225786667', '48', '2017-10-13', '2021-10-13', 'PRODUKSI MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '52623490', 'IGNA ASIA', 0, NULL),
(1191, '2019-07-23', '2019-09-03', '2019-09-13', 'PT GLOBAL RISK MANAGEMENT', 'JL. ABADI RT 003 RW 001 KEL. SELATPANJANG KEC. TEBING TINGGI KAB. KEP. MERANTI', 'KONSUMTIF (meninggal dunia)', '07.02a.18.00740.12.1.12.0', 'SUNARTI', '165000000', '165000000', '1', '157918340', 'TIDAK ADA', 'SK', '0', '156', '2018-12-05', '2031-12-05', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '142126506', 'BOARE', 0, NULL),
(1192, '2019-07-23', '0000-00-00', '0000-00-00', 'CABANG PANGKALAN KERINCI', 'JL. MAHARAJA INDRA GG. 2000 RT/RW 002/002 KEL. PANGKALAN KERINCI TIMUR KEC. PANGKALAN KERINCI KAB. PELALAWAN ', 'PRODUKTIF', '07.02.18.00305.07.1.12.0', 'ZULHERMAN IR', '300000000', '150000000', '0.5', '138514790', '0', 'TANAH PERKEBUNAN', '303962000', '12', '2018-06-05', '2019-06-05', 'KALAH SAING', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1193, '2019-07-23', '2019-09-02', '2019-09-13', 'CABANG PEMBANTU FLAMBOYAN', 'JLJAMBU I NO. 241 RT 002 RW 002 KENANTAN', 'PRODUKTIF (meninggal dunia)', '07.02.19.00153.04.1.12.0', 'SUJARWO', '350000000', '175000000', '0.5', '338474726', '0', 'TANAH PERKEBUNAN', '400000000', '60', '2019-03-18', '2024-03-18', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '304627253.4', 'IGNA ASIA', 0, NULL),
(1194, '2019-07-18', '2019-07-31', '2019-07-31', 'KEDAI PASAR SAIL', 'JL. II ISMAIL RT 004 RW 005 KEL. SAIL KEC. TENAYAN RAYA, PEKANBARU', 'PRODUKTIF', '07.02.17.00220.08.1.12.0', 'JHON ERIZAL', '100000000', '75000000', '0.75', '55419354', '0', 'TANAH PERUMAHAN', '511116667', '48', '2017-08-11', '2021-08-11', 'KALAH SAING', 'KEDAI KOPI DAN JUALAN BAKSO', '0.5', '27709677', 'IGNA ASIA', 0, NULL),
(1195, '2019-07-16', '2019-07-31', '2019-07-31', 'KEDAI PERANAP', 'SIMPANG TUGU PERANAP 001/008 KEL. PERANAP KEC. PERANAP KAB. INDRAGIRI HULU', 'PRODUKTIF', '07.02.17.00220.08.1.12.0', 'DERIS WANDI', '75000000', '37500000', '0.5', '22318053', '0', 'TANAH KOSONG', '90000000', '36', '2017-08-09', '2020-08-09', 'KALAH SAING', 'PENGEMBANG KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1196, '2019-07-15', '2019-07-31', '2019-07-31', 'KEDAI DURIAN', 'JL. SIAK II RT 005 RW 003 KEL. RUMBAI BUKIT KEC. RUMBAI PEKANBARU ', 'PRODUKTIF ', '07.02.18.00106.04.1.12.0', 'SUDIONO', '80000000', '40000000', '0.5', '29621647', '0', 'TANAH KOSONG', '114670833', '36', '2018-03-05', '2021-03-05', 'KALAH SAING', 'BENGKEL MOBIL', NULL, NULL, NULL, 0, NULL),
(1197, '2019-07-10', '2019-09-03', '2019-09-13', 'PT GLOBAL RISK MANAGEMENT', 'DUSUN LB BERNAI RT 003 RW 001 KEL. LUBUK BESAR KEC. KEMUNING TEMBILAHAN', 'KONSUMTIF (meninggal dunia)', '07.02.a.18.01268.12.1.12.0', 'PAERAN', '120000000', '120000000', '1', '117047652', 'TIDAK ADA', 'SK', '0', '108', '2018-12-27', '2027-12-27', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '105342886.8', 'BOARE', 0, NULL),
(1198, '2019-07-08', '2019-08-26', '2019-09-13', 'KEDAI PANGKALAN KERINCI', 'JL. PKL SEMINAI RT/RW 004/004 PKL. KERINCI KOTA KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.16.00075.04.1.12.0', 'RENI ASTUTI', '95000000', '47500000', '0.5', '48745099', 'TIDAK ADA', 'TANAH PERUMAHAN', '49740000', '60', '2016-04-13', '2021-04-13', 'MENINGGAL DUNIA', 'RUMAH KONTRAKAN', NULL, NULL, NULL, 0, NULL),
(1199, '2019-07-02', '0000-00-00', '0000-00-00', 'PT GLOBAL RISK MANAGEMENT', 'JL. MAKMUR RT 003 RW 008 KEL. PEMATANG REBA KEC. RENGAT BARAT KAB. INHU', 'KONSUMTIF (phk)', '07.02a.18.00101.05.1.12.0', 'SULASMI', '195000000', '195000000', '1', '189862648', 'TIDAK ADA', 'SK', '0', '180', '2018-05-21', '2033-05-21', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1200, '2019-06-27', '2019-08-22', '2019-09-13', 'CABANG RANAI', 'SINGGANG BULAN 001/001 CEMAGA UTARA', 'PRODUKTIF KUR', '07.02.16.00895.12.4.12.0', 'ALIAS', '20000000', '15000000', '0.75', '5233752', '0', 'TANAH ', '39180000', '36', '2016-12-22', '2019-12-22', 'KESULITAN PRODUKSI', 'TERNAK SAPI', NULL, NULL, NULL, 0, NULL),
(1201, '2019-06-25', '2019-07-30', '2019-07-31', 'PT GLOBAL RISK MANAGEMENT', 'JL. JAMBU RT 004 RW 002 KEP. SUKA MAJU KAB. ROHIL', 'KONSUMTIF (meninggal dunia)', '07.02b.19.00209.01.1.12.0', 'JABAR. H', '50000000', '50000000', '0.1', '48769456', 'TIDAK ADA', 'SK', '0', '60', '2019-01-18', '2024-01-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '43892510.4', 'BOARE', 0, NULL),
(1202, '2019-06-25', '2019-07-30', '2019-07-31', 'PT GLOBAL RISK MANAGEMENT', 'JL. DAENG TUANGGEK GG. DAMAI RT 010 KEL. PURNAMA KEC. DUMAI BARAT KOTA DUMAI', 'KONSUMTIF (meninggal dunia)', '07.02b.19.02890.05.1.12.0', 'MUHAMMAD TAUFIK', '370000000', '370000000', '1', '368319499', 'TIDAK ADA', 'SK', '0', '120', '2019-05-13', '2029-05-13', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '331487549.1', 'BOARE', 0, NULL),
(1203, '2019-06-25', '2019-10-31', '2019-10-31', 'PT GLOBAL RISK MANAGEMENT', 'GURUN PANJANG RT 003 RW KEL. BUKIT KAYU KAPUR KEC. BUKIT KAPUR DUMAI', 'KONSUMTIF (PHK)', '07.02b.19.00614.02.1.12.0', 'PRIMA MEYMORY', '270000000', '270000000', '1', '270000000', 'TIDAK ADA', 'SK', '0', '180', '2019-02-12', '2034-02-12', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.5', '135000000', 'BOARE', 0, NULL),
(1204, '2019-06-25', '2019-07-30', '2019-07-31', 'KEDAI LUBUK JAMBI', 'DESA KINALI KEC. KUANTAN MUDIK KAB. KUANTAN SINGINGI', 'PRODUKTIF', '07.02.17.00039.02.1.12.0', 'ERIZON', '45000000', '22500000', '0.5', '9732291', '0', 'TANAH PERKEBUNAN', '31425000', '36', '2017-02-03', '2020-02-03', 'PRODUKSI MENURUN', 'PEDAGANG KARET', NULL, NULL, NULL, 0, NULL),
(1205, '2019-06-25', '2019-07-30', '2019-07-31', 'KEDAI LUBUK JAMBI', 'DESA PANTAI KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.17.00458.11.1.12.0', 'INDRA PUTRA', '95000000', '47500000', '0.5', '36793691', '0', 'TANAH PERKEBUNAN', '106350000', '36', '2017-11-22', '2020-11-22', 'HARGA JUAL MENURUN', 'PERKEBUNAN KELAPA SAWIT & KARET', NULL, NULL, NULL, 0, NULL),
(1206, '2019-06-25', NULL, '0000-00-00', 'CABANG PANGKALAN KERINCI', 'KM 2 MUHIBAH 001/006 DESA SOREK SATU KEC. PANGKALAN KURAS KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00024.01.1.12.0', 'HENDRA PUTRA', '500000000', '250000000', '0.5', '385416663', '0', 'TANAH BANGUNAN', '238608000', '48', '2018-01-29', '2022-01-29', 'HARGA JUAL MENURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1207, '2019-06-25', NULL, '0000-00-00', 'CABANG PANGKALAN KERINCI', 'RAWANG SARI 006/003 KEC. PANGKALAN LESUNG KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00522.11.1.12.0', 'ZULKIFLI HENDRI', '500000000', '250000000', '0.5', '395833330', '0', 'TANAH BANGUNAN ', '167230000', '48', '2018-07-03', '2022-07-03', 'HARGA JUAL MENURUN', 'JUAL BELI KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1208, '2019-06-25', '2019-07-30', '2019-07-31', 'CABANG PEMBANU KOTABARU', 'JL. MELATI DESA PEBENAAN KEC.  KRITANG', 'PRODUKTIF KUR', '07.02.18.19389.11.4.12.0', 'M. ABDILLAH', '20000000', '15000000', '0.75', '14159934', '0', 'TANAH', '18630000', '24', '2018-11-14', '2020-11-14', 'PERDAGANGAN EKSPOR HASIL PERIKANAN', 'PERIKANAN', NULL, NULL, NULL, 0, NULL),
(1209, '2019-06-19', '2019-07-30', '2019-07-31', 'CABANG DUMAI', 'JL. ANGGREK NO.N 20 DUMAI', 'PRODUKTIF', '07.02.17.00525.12.1.12.0', 'AMIRUDDIN', '900000000', '450000000', '0.5', '437022500', '0', 'TANAH', '883500000', '120', '2017-12-13', '2027-12-13', 'KALAH SAING', 'CUCIAN KENDARAAN RODA 4 DAN AIR ISI ULANG', '0.5', '218511250', 'IGNA ASIA', 0, NULL),
(1210, '2019-06-18', '2019-06-26', '2019-06-28', 'KEDAI PASAR PAGI ARENGKA', 'JL. DATUK TUNGGUL PERUM TERATAI INDAH', 'PRODUKTIF', '07.02.18.00065.02.1.12.0', 'ARINAH AMY', '140000000', '70000000', '0.5', '63826301', '0', 'TANAH BANGUNAN', '251000000', '60', '2018-02-23', '2023-02-23', 'PIUTANG MACET', 'JUAL BELI MESIN PHOTOCOPY', '0.5', '31913150.5', 'IGNA ASIA', 0, NULL),
(1211, '2019-06-17', '2019-07-30', '2019-07-31', 'KEDAI MARPOYAN', 'JL. TEROPONG PERUM ALAMAYANG ASRI RT 006 RW 010 KEL. SIDOMULYO BARAT KEC. TAMPAN', 'PRODUKTIF', '07.02.18.00135.04.1.12.0', 'AYODIA SANJAYA', '90000000', '67500000', '0.75', '61956298', '0', 'TANAH PERUMAHAN', '75666667', '60', '2018-02-28', '2023-02-28', 'PIUTANG MACET', 'MAKANAN HARIAN', NULL, NULL, NULL, 0, NULL),
(1212, '2019-06-11', '2019-07-30', '2019-07-31', 'CABANG TELUK KUANTAN', 'JL. DATUK BISAI DUSUN KEMBANG SARI RT/RW 003/002', 'PRODUKTIF', '07.02.17.00089.04.1.12.0', 'LUSIANI', '35000000', '17500000', '0.5', '8558963', '0', 'TANAH & BANGUNAN', '125000000', '36', '2017-04-26', '2020-04-26', 'PIUTANG MACET', 'DAGANG PAKAIAN JADI', NULL, NULL, NULL, 0, NULL),
(1213, '2019-06-11', '2019-07-30', '2019-07-31', 'CABANG TELUK KUANTAN', 'DESA HULU TESO 008/004 KEC. LOGAS TANAH DARAT', 'PRODUKTIF', '07.02.16.00196.09.1.12.0', 'MUHAMMAD ASRORI', '250000000', '125000000', '0.5', '75463187', '0', 'TANAH PERKEBUNAN', '158400000', '60', '2016-09-20', '2021-09-20', 'HARGA JUAL MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '37731593.5', 'IGNA ASIA', 0, NULL),
(1214, '2019-06-11', '2019-07-30', '2019-07-31', 'CABANG TELUK KUANTAN', 'DESA HULU TESO 010/003 KEC. LOGAS TANAH DARAT', 'PRODUKTIF', '07.02.17.00132.06.1.12.0', 'SUPAMI', '500000000', '150000000', '0.3', '111297773', '0', 'TANAH PERKEBUNAN', '548600000', '60', '2017-06-15', '2022-06-15', 'HARGA PRODUKSI TURUN', 'SEWA TENDA & PELAMINAN', '0.5', '55648886.5', 'IGNA ASIA', 0, NULL),
(1215, '2019-06-11', '2019-07-30', '2019-07-31', 'CABANG TELUK KUANTAN', 'PASIR EMAS 011/006 DESA PASIR EMAS KEC. SENGINGI', 'PRODUKTIF', '07.02.17.00276.09.1.12.0', 'SUPRIYANTO', '400000000', '200000000', '0.5', '165285511', '0', 'TANAH PERUMAHAN', '365000000', '60', '2017-08-28', '2022-08-28', 'HARGA JUAL MENURUN', 'PERKEBUNAN KELAPA SAWIT', '0.5', '82642755.5', 'IGNA ASIA', 0, NULL),
(1216, '2019-06-11', '2019-07-30', '2019-07-31', 'CABANG TELUK KUANTAN', 'JL. PROKLAMASI 002/002 SUNGAI JERING KEC. KUANTAN TENGAH KAB. KUANSING', 'PRODUKTIF', '07.02.17.00276.09.1.12.0', 'TUMIJAN', '200000000', '100000000', '0.5', '70124547', '0', 'TANAH PERUMAHAN', '336666667', '48', '2017-08-11', '2021-08-11', 'HARGA PRODUKSI TURUN', 'DAGANG MAKANAN & MINUMAN', '0.5', '35062273.5', 'IGNA ASIA', 0, NULL),
(1217, '2019-05-17', NULL, '2019-06-28', 'KEDAI TANDUN', 'TANDUN 014/005', 'PRODUKTIF (meninggal dunia)', '07.02.18.00447.10.1.12.0', 'HAYATI', '70000000', '52500000', '0.75', '58675980', 'TIDAK ADA', 'TANAH', '77545000', '36', '2018-09-05', '2021-09-05', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1218, '2019-05-17', NULL, '2019-06-28', 'CABANG PEMBANTU DABO SINGKEP', 'BAKONG RT/RW 001/001 SINGKEP BARAT', 'PRODUKTIF KUR', '07.02.17.00251.11.4.12.0', 'NURMAN', '25000000', '18750000', '0.75', '11471289', '0', 'TANAH & BANGUNAN', '9588000', '24', '2017-11-03', '2019-11-03', 'HASIL PANEN BERKURANG', 'KELONG IKAN BILIS', NULL, NULL, NULL, 0, NULL),
(1219, '2019-05-17', '2019-10-31', '2019-10-31', 'PT GLOBAL RISK MANAGEMENT', 'JL. BUNGA TANJUNG ', 'KONSUMTIF (PHK)', '07.02b.19.00810.02.1.12.0', 'ANDY SETIAWAN MARNA', '345000000', '345000000', '1', '172500000', 'TIDAK ADA', 'SK', '0', '180', '2019-02-19', '2034-02-19', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.5', '86250000', 'BOARE', 0, NULL),
(1220, '2019-05-17', NULL, '2019-06-28', 'CABANG PEMBANTU BASERAH', 'JL. PULAU JAMBU 001/001 KEC. CERENTI KAB. KUANSING', 'PRODUKTIF', '07.02.17.00314.09.1.12.0', 'ELMIYETI', '70000000', '52500000', '0.75', '34545407', '0', 'TANAH PERKEBUNAN', '83895000', '36', '2017-09-19', '2020-09-19', 'PROSES PRODUKSI GAGAL', 'PERIKANAN', NULL, NULL, NULL, 0, NULL),
(1221, '2019-05-17', '2019-07-29', '2019-07-31', 'CABANG PEMBANTU RUMBAI', 'JL. PEMBINA RT 001 RW 010 LIMBUNGAN - RUMBAI PESISIR', 'PRODUKTIF', '07.02.18.00661.12.1.12.0', 'LISMAR', '270000000', '135000000', '0.5', '127818312', '0', 'TANAH BANGUNAN', '311494000', '60', '2018-02-28', '2023-02-28', 'PRODUKSI MENURUN', 'RUMAH MAKAN', '0.5', '63909156', 'IGNA ASIA', 0, NULL),
(1222, '2019-05-14', '0000-00-00', '2019-06-28', 'CABANG PEMBANTU TANJUNG UBAN', 'PELITA BARU RT 003/004 KUALA SIMPANG SERI KUALA LOBAM ', 'PRODUKTIF KUR', '07.02.18.00009.01.4.12.0', 'SUBEDI', '35000000', '26250000', '0.75', '19688777', '0', 'TANAH PERUMAHAN', '36679167', '36', '2018-01-19', '2021-01-19', 'ALAT PRODUKSI RUSAK', 'BUDIDAYA BIOTA AIR TAWAR DAN AIR PAYAU', NULL, NULL, NULL, 0, NULL),
(1223, '2019-05-14', '0000-00-00', '2019-06-28', 'KEDAI KUALA KILAN', 'DESA BUKIT LIPAI 017/005 KEC. BATANG CENAKU KAB. INHU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00081.03.1.12.0', 'SITI JUMAIYA', '100000000', '30000000', '0.3', '75917813', 'TIDAK ADA', 'TANAH PERKEBUNAN', '250000000', '48', '2018-02-06', '2022-02-06', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT', '0.9', '68326031.7', 'IGNA ASIA', 0, NULL),
(1224, '2019-05-13', '0000-00-00', '2019-06-27', 'PT ADONAI PIALANG ASURANSI', 'PERUM BAMBU KUNING BLOK C 38 No. 05 RT  005 RW 003 KEL. BUKIT TEMPAYAN KEC. BATU AJI KOTA BATAM', 'KONSUMTIF (PHK)', '07.02b.18.01152.05.1.12.0', 'ANDI MARYADI', '280000000', '280000000', '1', '280000000', 'TIDAK ADA', 'SK', '0', '164', '2018-06-06', '2032-02-06', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.5', '140000000', 'APIRE', 0, NULL),
(1225, '2019-05-08', NULL, '2019-06-28', 'CABANG PEMBANTU TANJUNG BATU', 'JL. KEMBANGAN RT 002 RW 002 KEL/DESA TANJUNG BATU KOTA KEC. KUNDUR', 'PRODUKTIF', '07.02.17.00363.10.1.12.0', 'ZUR PENDI', '400000000', '120000000', '0.3', '94224011', '0', 'TANAH & BANGUNAN', '327072000', '60', '2017-08-20', '2022-08-20', 'PRODUKSI MENURUN', 'PERDAGANGAN SEPATU & PAKAIAN JADI', '0.5', '47112005.5', 'IGNA ASIA', 0, NULL),
(1226, '2019-05-06', NULL, '2019-06-27', 'PT ADONAI PIALANG ASURANSI', 'JL. JEND. SUDIRMAN RT 009 RW 013 KEL. RANTAU PANJANG KIRI KEC. KUBU KAB. ROKAN HILIR', 'KONSUMTIF (PHK)', '07.02b.18.001059.06.1.12.0', 'MAIJON ASRI', '210000000', '210000000', '1', '209934305', 'TIDAK ADA', 'SK', '0', '180', '2018-06-07', '2033-06-07', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.5', '104967152.5', 'APIRE', 0, NULL),
(1227, '2019-05-03', '2019-05-23', '2019-05-24', 'KEDAI LUBUK JAMBI', 'DESA SEBERANG PANTAI 003/003 KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.16.00068.03.1.12.0', 'GAMAL HARSUM', '75000000', '56250000', '0.75', '34834494', '0', 'TANAH', '330000000', '60', '2016-03-04', '2021-03-04', 'HARGA JUAL LEBIH RENDAH PRODUKSI MENURUN', 'PERKEBUNAN SAWIT DAN KARET', NULL, NULL, NULL, 0, NULL),
(1228, '2019-05-03', '2019-05-23', '2019-05-24', 'KEDAI BANDAR SEI KIJANG', 'DESA PANGKALAN GONDAI KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.18.00095.03.1.12.0', 'SULIATI', '99000000', '49500000', '0.5', '81243120', 'TIDAK ADA', 'TANAH PERKEBUNAN', '75014100', '60', '2018-02-14', '2023-02-14', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1229, '2019-05-03', '2019-05-23', '2019-05-24', 'CABANG PEMBANTU UJUNG TANJUNG', 'JL. PAGAR SINTONG HILIR RT/RW 001/001 KEL. SINTONG PUSAKA', 'PRODUKTIF KUR', '07.02.17.00087.06.4.12.0', 'SURATNO', '100000000', '75000000', '0.75', '50455113', '0', 'TANAH PERUMAHAN', '83696000', '48', '2017-06-09', '2021-06-09', 'HARGA PRODUKSI TURUN', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL);
INSERT INTO `tblklaim` (`idKlaim`, `tglmasuk`, `tglberkas`, `tglklaimbayar`, `PPnama`, `PPalamat`, `produk`, `sertifikat`, `nmterjamin`, `plafond`, `nilai_jaminan`, `coverage`, `nominal_klaim`, `subrogasi`, `agunan`, `taksasi_agunan`, `Jkwaktu`, `tglawal`, `tglakhir`, `macet`, `sektor`, `cover_reas`, `klaim_reas`, `broker`, `status`, `no_telp`) VALUES
(1230, '2019-04-30', '2019-05-21', '2019-05-24', 'KEDAI AIRTIRIS', NULL, 'PRODUKTIF', '07.02.18.00157.05.1.12.0', 'YEFRIZAL', '30000000', '15000000', '0.5', '12126663', '0', 'TANAH', '37908000', '24', '2018-04-13', '2020-04-13', 'HARGA PRODUKSI TURUN', NULL, NULL, NULL, NULL, 0, NULL),
(1231, '2019-04-16', '2019-05-14', '2019-05-17', 'CABANG PEMBANTU BASERAH', 'DUSUN PASAR 012/000 PASAR BARU PANGEAN KEC. PANGEAN KAB. KUANTAN SINGINGI', 'PRODUKTIF', '07.02.18.00006.01.1.12.0', 'IDA GUSTINA', '99000000', '74250000', '0.75', '45343554', '0', 'TANAH', '139650000', '24', '2018-01-09', '2020-01-09', 'HARGA PRODUKSI TURUN', 'PERKEBUNAN SAWIT ', NULL, NULL, NULL, 0, NULL),
(1232, '2019-04-16', NULL, '2019-06-28', 'KEDAI PANGKALAN KERINCI', 'SERING RT 010 RW 005 KEL. SERING KEC. PELALAWAN KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00483.12.1.12.0', 'NURAINI', '20000000', '10000000', '0.5', '6837043', '0', 'TANAH PERUMAHAN', '33187000', '24', '2017-12-14', '2019-12-14', 'PRODUK TIDAK LAKU', 'WARUNG HARIAN', NULL, NULL, NULL, 0, NULL),
(1233, '2019-04-16', NULL, '2019-06-28', 'KEDAI PANGKALAN KERINCI', 'DESA KEMANG RT 001 RW 003 KEC. PANGKALAN KURAS KAB. PELALAWAN', 'PRODUKTIF', '07.02.18.00006.01.1.12.0', 'SAHREL', '45000000', '22500000', '0.5', '14543642', '0', 'TANAH PERKEBUNAN', '61256800', '60', '2016-02-05', '2021-02-05', 'HARGA PRODUKSI TURUN', 'PERKEBUNAN SAWIT ', NULL, NULL, NULL, 0, NULL),
(1234, '2019-04-16', '2019-05-22', '2019-05-24', 'KEDAI KUALA KILAN', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.17.00483.12.1.12.0', 'YULIA KADARSIH', '100000000', '75000000', '0.75', '75366872', 'TIDAK ADA', 'TANAH', '75000000', '48', '2018-01-25', '2022-01-25', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT ', '0.5', '37683436', 'IGNA ASIA', 0, NULL),
(1235, '2019-04-12', '2019-05-14', '2019-05-17', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'JL. GAJAH MADA RT 007 RW 002 KEL. TAGARAJA KEC. KATEMAN KAB. INDRAGIRI HILIR', 'PRODUKTIF', '07.02.18.00265.07.1.12.0', 'JASMI', '60000000', '45000000', '0.75', '40226284', '0', 'TANAH & BANGUNAN', '36000000', '24', '2018-06-08', '2020-06-08', 'PIUTANG MACET', 'JUAL PAKAIAN JADI', NULL, NULL, NULL, 0, NULL),
(1236, '2019-04-09', '2019-05-07', '2019-05-17', 'PT PROTEKSI JAYA MANDIRI', 'JL. M. SALEH THALAHA RT 01 RW 03 MANDAH', 'KONSUMTIF (meninggal dunia)', '07.02.17.00145.06.1.12.0', 'MUHAMMAD ISA', '80000000', '80000000', '1', '62714816', 'TIDAK ADA', 'SK', '0', '72', '2017-06-13', '2023-06-13', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI POLRI', NULL, NULL, NULL, 0, NULL),
(1237, '2019-04-09', '2019-05-22', '2019-05-24', 'CABANG PEMBANTU JALAN RIAU', 'JL. FAJAR UJUNG Gg. PONCOSARI RT 02 RW 13 KEL. LABUH BARU BARAT KEC. PAYUNG SEKAKI', 'PRODUKTIF KUR', '07.02.18.00148.03.4.12.0', 'RASKUN', '150000000', '112500000', '0.75', '105600986', '0', 'TANAH PERKEBUNAN', '176000000', '48', '2018-03-05', '2022-03-05', 'PIUTANG MACET', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1238, '2019-04-09', '2019-05-22', '2019-05-24', 'PT ADONAI PIALANG ASURANSI', 'BENGKONG MAHKOTA BLOK C/01 RT 003 RW 004 KEL. BENGKONG LAUT KEC. BENGKONG KOTA BATAM', 'KONSUMTIF (PHK)', '07.02b.18.00742.05.1.12.0', 'MASAGUS IBRAHIM LAKONI', '310000000', '310000000', '1', '306294285', 'TIDAK ADA', 'SK', '0', '156', '2018-05-28', '2031-05-28', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI NEGERI SIPIL', '0.5', '153147142.5', 'APIRE', 0, NULL),
(1239, '2019-04-09', '2019-05-22', '2019-05-24', 'PT PROTEKSI JAYA MANDIRI', 'JL. PANTAI IMPIAN Gg. BELANAK RT 003 RW 006 KEL. KAMPUNG BARU KEC. TANJUNGPINANG BARAT', 'KONSUMTIF (meninggal dunia)', '07.02.16.00082.04.1.12.0', 'JUMONTANG MARPAUNG', '170000000', '170000000', '1', '111828616', 'TIDAK ADA', 'SK', '0', '72', '2016-04-13', '2022-04-13', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1240, '2019-04-02', '2019-05-08', '2019-05-17', 'PT ADONAI PIALANG ASURANSI', 'PERUMAHAN TAMAN PERAWANG INDAH BLOK A NO. 15 RT RW 09/02 KEL. PERAWANG BARAT KEC. TUALANG KAB. SIAK ', 'KONSUMTIF (PHK)', '07.02b.18.01635.05.1.12.0', 'DJOKO POEDJO WIDIYOTOMO', '100000000', '100000000', '1', '95922440', 'TIDAK ADA', 'SK', '0', '60', '2018-07-18', '2023-07-18', 'PEMUTUSAN HUBUNGAN KERJA', 'PEGAWAI SWASTA', '0.5', '47961220', 'APIRE', 0, NULL),
(1241, '2019-03-27', '2019-04-30', '2019-05-02', 'CABANG PEMBANTU DURI', 'JL. PANTI JOMPO RT/RW 003/001 KEL PEMATANG PUDU', 'PRODUKTIF KUR', '07.02.18.17171.05.4.12.0', 'YULIUS SURYA', '40000000', '30000000', '0.75', '25000000', '0', 'TANAH & BANGUNAN', '50000000', '36', '2018-03-20', '2021-03-20', 'HARGA PRODUKSI TURUN', 'BUDIDAYA BIOTA AIR TAWAR', NULL, NULL, NULL, 0, NULL),
(1242, '2019-03-26', '2019-04-23', '2019-04-25', 'KEDAI BANDAR SEI KIJANG', 'RT 002 RW 001 DESA KIYAP JAYA DUSUN KIYAP JAYA', 'PRODUKTIF (meninggal dunia)', '07.02.16.00278.11.1.12.0', 'ASMAN', '80000000', '40000000', '0.5', '23231780', 'TIDAK ADA', 'TANAH PERTANIAN', '120000000', '36', '2016-11-09', '2019-11-09', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1243, '2019-03-25', '2019-04-23', '2019-04-24', 'CABANG PASIR PENGARAIAN', 'KEPALA BONDAR RT 001 RW 004 DESA BANGUN PURBA', 'PRODUKTIF KUR', '07.02.16.00117.10.4.12.0', 'ALI MURNI', '200000000', '150000000', '0.75', '100281905', '0', 'TANAH & BANGUNAN', '220000000', '60', '2016-10-10', '2021-10-10', 'HARGA JUAL LEBIH RENDAH DARI PRODUKSI', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1244, '2019-03-22', '2019-04-23', '2019-04-24', 'PT ADONAI PIALANG ASURANSI', 'JL. IMAM BULIN 004/001 PASIRAN KEC. BANTAN', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00616.05.1.12.0', 'ABDUL NASIR', '50000000', '50000000', '1', '39311453', '0', 'SK PENSIUN', '0', '36', '2018-05-24', '2021-05-24', 'MENINGGAL DUNIA', 'PEGAWAI PENSIUNAN OTONOM BENGKALIS', '0.9', '35380307.7', 'APIRE', 0, NULL),
(1245, '2019-03-19', '0000-00-00', '2019-03-29', 'KEDAI MARPOYAN', 'JL. AIR DINGIN RT 002 RW 2023', 'PRODUKTIF', '07.02.18.00193.05.1.12.0', 'SUTARMI', '200000000', '150000000', '0.75', '144756994', '0', 'TANAH & BANGUNAN', '146559333', '60', '2018-04-27', '2023-04-27', 'USAHA TIDAK LANCAR', 'USAHA MAKAN HARIAN', '0.5', '72378497', 'IGNA ASIA', 0, NULL),
(1246, '2019-03-15', '2019-04-09', '2019-04-12', 'PT GLOBAL RISK MANAGEMENT', 'BANJAR SEMINAL RT 001 RW 005 KEC. DAYUN - SIAK', 'KONSUMTIF (meninggal dunia)', '07.02a.18.01269.12.1.12.0', 'YULIANA DEWI', '250000000', '250000000', '1', '247793854', 'TIDAK ADA', 'SK', '0', '120', '2018-12-27', '2028-12-27', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '223014468.6', 'BOARE', 0, NULL),
(1247, '2019-03-12', '2019-04-11', '2019-04-18', 'KOPKAR', 'JL. TUAH KARYA PERUM ANGGREK REGENCY A-6', 'KONSUMTIF (meninggal dunia)', '07.05.18.00022.05.1.12.0', 'NECY HELMI', '38000000', '38000000', '1', '30874997', 'TIDAK ADA', 'SK KARYAWAN', '-', '48', '2018-05-01', '2022-05-01', 'MENINGGAL DUNIA', 'PEGAWAI BANK RIAU KEPRI', NULL, NULL, NULL, 0, NULL),
(1248, '2019-03-11', '2019-05-03', '2019-05-17', 'CABANG RANAI', 'BATU DUYUNG 001/002 DESA SELADING KEC. PULAU TIGA BARAT', 'PRODUKTIF KUR', '07.02.16.00216.11.4.12.0', 'IJAL', '20000000', '15000000', '0.75', '6063078', '0', 'TANAH', '22500000', '36', '2016-11-23', '2019-11-23', 'KESULITAN BAHAN BAKU ', 'BUDIDAYA IKAN', NULL, NULL, NULL, 0, NULL),
(1249, '2019-03-08', '2019-03-26', '2019-03-29', 'KEDAI PERANAP', 'PDK IV PT INDRI PLANT 005/004 DESA PAUH RANAP KEC. PERANAP KAB. INHU', 'PRODUKTIF', '07.02.17.00418.11.1.12.0', 'JUNTAR SIMAMORA', '95000000', '71250000', '0.75', '60109841', '0', 'TANAH PERKEBUNAN', '160000000', '48', '2017-10-25', '2021-10-25', 'HARGA JUAL LEBIH RENDAH DARI PRODUKSI', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1250, '2019-03-08', '2019-04-04', '2019-04-12', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'JL. HASANUDIN RT 004 RW 002 KEL. TAGARAJA KEC. KATEMAN', 'PRODUKTIF KUR', '07.02.17.00247.10.4.12.0', 'MASTAR', '400000000', '300000000', '0.75', '240915630', '0', 'TANAH PERKEBUNAN', '281566000', '48', '2017-10-26', '2021-10-26', 'PRODUK TIDAK LAKU', 'PERDAGANGAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1251, '2019-03-08', '2019-04-16', '2019-04-18', 'CABANG PEMBANTU DURI', 'SUKA MAJU RT 010 RW 004 DESA/KEL SUKA MAJU KEC. TAPUNG HILIR KAB. KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.17.00497.12.1.12.0', 'MARTUA SITORUS', '100000000', '75000000', '0.75', '65592422', '0', 'TANAH', '159840000', '36', '2017-12-04', '2020-12-04', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', '0.9', '59033179.8', 'IGNA ASIA', 0, NULL),
(1252, '2019-03-04', '2019-03-29', '2019-04-12', 'CABANG SELATPANJANG', 'JL. IMAM BONJOL KEL. SELATPANJANG KOTA KEC. TEBING TINGGI KAB. KEP. MERANTI', 'PRODUKTIF', '07.02.16.00056.03.1.12.0', 'YENDRI', '450000000', '135000000', '0.3', '109266410', '0', 'TANAH & BANGUNAN', '514777778', '120', '2016-03-28', '2026-03-28', 'PEREKONOMIAN MENURUN', 'USAHA HARIAN', '0.5', '54633205', 'IGNA ASIA', 0, NULL),
(1253, '2019-02-26', '2019-03-19', '2019-03-22', 'KEDAI PERANAP', 'DESA SENCANO JAYA KEC. BATANG PERANAP', 'PRODUKTIF (meninggal dunia)', '07.02.18.00454.10.1.12.0', 'M. YUSUF SURATMAN', '85000000', '42500000', '0.5', '79960573', 'TIDAK ADA', 'TANAH', '128000000', '48', '2018-09-13', '2022-09-13', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1254, '2019-02-25', '2019-05-13', '2019-05-17', 'PT GLOBAL RISK MANAGEMENT', NULL, 'KONSUMTIF (PHK)', '07.02a.18.01044.12.1.12.0', 'RONI FAHRIADIE', '200000000', '200000000', '1', '200000000', 'TIDAK ADA', 'SK', '-', '120', '2018-12-18', '2028-12-18', 'PHK', 'PEGAWAI NEGERI SIPIL', '0.5', '100000000', 'BOARE', 0, NULL),
(1255, '2019-02-12', '2019-03-14', '2019-03-22', 'PT GLOBAL RISK MANAGEMENT', 'JL. PERINTIS KEMERDEKAAN SIMPANG TIGA RT 001 RW 001 KEL. SIMPANG TIGA KEC. KUANTAN TENGAH TELUK KUANTAN', 'KONSUMTIF (PHK)', '07.02a.18.01088.12.1.12.0', 'ARIYADI', '310000000', '310000000', '1', '309698945', 'TIDAK ADA', 'SK', '-', '156', '2018-12-19', '2031-12-19', 'PHK', 'PEGAWAI NEGERI SIPIL', '0.9', '278729050.5', 'BOARE', 0, NULL),
(1256, '2019-02-08', '2019-02-27', '2019-02-28', 'KEDAI PASAR SAIL', NULL, 'PRODUKTIF', '07.02.17.00129.06.1.12.0', 'LEO PRADHIPTA', '60000000', '45000000', '0.75', '37727282', '0', 'TANAH PERUMAHAN', '138871000', '120', '2016-12-23', '2026-12-23', 'KALAH SAING', 'USAHA PANGKALAN GAS LPG 3 KG', NULL, NULL, NULL, 0, NULL),
(1257, '2019-02-08', '2019-02-26', '2019-03-06', 'KEDAI TANDUN', 'JL. G. IV DESA KUMAIN', 'PRODUKTIF (meninggal dunia)', '07.02.18.00172.05.1.12.0', 'RIYANTO', '40000000', '30000000', '0.75', '30000000', '0', 'TANAH PERKEBUNAN', '128000000', '36', '2018-04-12', '2021-04-12', 'MENINGGAL DUNIA', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1258, '2019-02-08', '2019-03-22', '2019-03-22', 'PT ADONAI PIALANG ASURANSI', 'JL. YOS SUDARSO NO 275 RT 002 RW 001 KEL. UMBAN SARI KEC. RUMBAI KOTA PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00753.05.1.12.0', 'YUDHI PRAYITNO', '310000000', '310000000', '1', '307541321', 'TIDAK ADA', 'SK', '-', '180', '2018-05-28', '2033-05-28', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '276787188.9', 'APIRE', 0, NULL),
(1259, '2019-02-08', '2019-02-28', '2019-03-06', 'KOPKAR', 'JL. PERINTIS RT 02 KEL. BUMI AYU KEC. DUMAI SELATAN', 'KONSUMTIF (meninggal dunia)', '07.05.15.00004.12.1.12.0', 'DARWIN', '47916666', '47916666', '1', '9374987', 'TIDAK ADA', 'SK', '-', '46', '2015-12-31', '2019-10-31', 'MENINGGAL DUNIA', 'PEGAWAI BANK RIAU KEPRI', NULL, NULL, NULL, 0, NULL),
(1260, '2019-02-08', '2019-02-27', '2019-02-28', 'KEDAI PASAR SAIL', 'JL. KAMPUNG DALAM GG. KOTO II RT 003 RW 005 KEL. KAMPUNG DALAM KEC. SENAPELAN PEKANBARU', 'PRODUKTIF', '07.02.18.00116.04.1.12.0', 'HENDRI', '20000000', '15000000', '0.75', '14361498', '-', 'TANAH PERUMAHAN', '112333333', '36', '2018-03-08', '2021-03-08', 'KALAH SAING', 'TERNAK AYAM KAMPUNG', NULL, NULL, NULL, 0, NULL),
(1261, '2019-01-30', '2019-03-18', '2019-03-22', 'CABANG PEMBANTU AHMAD YANI', 'JL. DT. MAHARAJA KOMP. MAHARAJA BISNIS DAN RESIDENCE BLOK B NO. 12 RT 005 RW 006 KEL. TANGKERANG SELATAN PEKANBARU', 'PRODUKTIF', '07.02.18.00014.01.1.12.0', 'CV. PRIMA MUSTIKA RAYA', '500000000', '150000000', '0.3', '150000000', '0', 'RUKO 2 LANTAI', '794540000', '12', '2018-01-25', '2019-01-25', 'MACET', NULL, '0.5', '75000000', 'IGNA ASIA', 0, NULL),
(1262, '2019-01-25', '2019-03-21', '2019-03-22', 'CABANG BANGKINANG', 'JL. PROKLAMASI NO. 27 RT/RW 002/001 KEL. SALO KEC. SALO KAB. KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.16.00360.12.1.12.0', 'AYI SUPRIATNA', '75000000', '22500000', '0.3', '67281844', '0', 'TANAH PERKEBUNAN', '73000000', '120', '2016-12-23', '2026-12-23', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1263, '2019-01-16', '2019-02-11', '2019-02-15', 'PT GLOBAL RISK MANAGEMENT', 'KAMPUNG BARU RT 003 RW 003 KEL. TEBING KAB. KARIMUN', 'KONSUMTIF (meninggal dunia)', '07.02a.18.00622.11.1.12.0', 'ROSNIWATI', '140000000', '140000000', '1', '139593532', 'TIDAK ADA', 'SK KERJA DINAS', '0', '84', '2018-11-21', '2025-11-21', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '125634178.8', 'BOARE', 0, NULL),
(1264, '2019-01-16', '2019-02-08', '2019-02-15', 'CABANG PEMBANTU DURI', 'JL. TEGAL SARI RT 005 RW 020 DESA / KEL. AIR JAMBAN KEC. MANDAU KAB. BENGKALIS', 'PRODUKTIF', '07.02.18.00105.03.1.12.0', 'AFRIZALMAN', '15000000', '7500000', '0.5', '7424523', '0', 'TANAH', '11500000', '24', '2018-03-15', '2020-03-15', 'KALAH SAING', 'USAHA AYAM POTONG', NULL, NULL, NULL, 0, NULL),
(1265, '2019-01-04', '2019-01-31', '2019-02-01', 'CABANG PEMBANTU UJUNG BATU', 'SELEMAM 001/001 SELEMAM', 'PRODUKTIF (meninggal dunia)', '07.02.18.00436.10.1.12.0', 'JHON HENDRI', '65000000', '32500000', '0.5', '62208041', 'TIDAK ADA', 'TANAH PERUMAHAN', '139200000', '48', '2018-09-07', '2022-09-07', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT ', NULL, NULL, NULL, 0, NULL),
(1266, '2018-12-31', '2019-01-23', '2019-02-01', 'KEDAI BATUPANJANG RUPAT', 'JL. MASJID RT 001 KEL. BATU PANJANG KEC. RUPAT KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02.18.00186.05.1.12.0', 'MUHAMMAD JAIS', '155000000', '155000000', '1', '148356796', 'TIDAK ADA', 'SK', '0', '108', '2018-04-18', '2027-04-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '133521116.4', 'IGNA ASIA', 0, NULL),
(1267, '2018-12-31', '2019-01-31', '2019-02-01', 'KEDAI KUALA KILAN', 'DESA TALANG BERSEMI 001/001 KEC. BATANG CENAKU KAB. INHU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00387.09.1.12.0', 'SUPONO', '100000000', '50000000', '0.5', '98187718', 'TIDAK ADA', 'TANAH PERKEBUNAN', '224000000', '84', '2018-08-27', '2025-08-27', 'MENINGGAL DUNIA', NULL, '0.9', '88368946.2', 'IGNA ASIA', 0, NULL),
(1268, '2018-12-31', '0000-00-00', '0000-00-00', 'CABANG RANAI', 'TANJUNG KUMBINK 001/0041 DESA PULAU TIGA', 'PRODUKTIF KUR', '07.02.17.00002.03.4.12.0', 'BAHTIAR', '15000000', '11250000', '0.75', '10766071', '0', 'TANAH', '16650000', '36', '2017-03-09', '2020-03-09', 'KESULITAN BAHAN BAKU', 'PENANGKAPAN IKAN', NULL, NULL, NULL, 0, NULL),
(1269, '2018-12-31', '2019-01-31', '2019-02-01', 'CABANG RANAI', 'SELEMAM 001/001 SELEMAM', 'PRODUKTIF KUR', '07.02.16.00946.12.4.12.0', 'JUNARDI', '25000000', '18750000', '0.75', '9607477', '0', 'TANAH', '34308000', '36', '2016-12-23', '2019-12-23', 'PROSES PRODUKSI GAGAL', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1270, '2018-12-26', '2019-01-31', '2019-02-01', 'CABANG TELUK KUANTAN', 'DUSUN KOTO TUO RT 001 RW 001 KEL. KOTO TALUK KEC. KUANTAN TENGAH KAB. KUANTAN SENGINGI', 'KONSUMTIF (meninggal dunia)', '07.02.16.00083.04.1.12.0', 'RIDERMAN', '155000000', '155000000', '1', '135100342', '0', 'SK', '0', '120', '2016-04-18', '2026-04-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1271, '2018-12-13', '2019-01-16', '2019-01-25', 'CABANG PEMBANTU JALAN RIAU', 'PERUM. SAKINAH I BLOK D NO. 2 RT 008 RW 003 KEL. SIDOMULYO BARAT', 'KONSUMTIF (meninggal dunia)', '07.02.18.00201.06.1.12.0', 'TETTI RAHMAYANTI', '25000000', '25000000', '1', '21978555', '0', 'SK', '0', '36', '2018-04-19', '2021-04-19', 'MENINGGAL DUNIA', 'GURU BANTU HONORER', NULL, NULL, NULL, 0, NULL),
(1272, '2018-12-10', '2019-01-23', '2019-02-01', 'CABANG PEMBANTU UJUNG BATU', 'RK HARAPAN RAYA RT 002 RW 010 KEC. UJUNG BATU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00413.09.1.12.0', 'SUHARTONO ', '450000000', '135000000', '0.3', '440807500', '0', 'TANAH & BANGUNAN', '99050000', '60', '2018-08-27', '2023-08-27', 'MENINGGAL DUNIA', NULL, '0.9', '396726750', 'IGNA ASIA', 0, NULL),
(1273, '2018-12-03', '2019-01-17', '2019-02-01', 'PT ADONAI PIALANG ASURANSI', 'JL. HOS COKROAMINOTO 002/001 RIMBA SEKAMPUNG BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00354.05.1.12.0', 'ASRO H', '100000000', '100000000', '1', '98983362', '0', 'SK', '0', '120', '2018-05-18', '2028-05-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '89085025.8', 'APIRE', 0, NULL),
(1274, '2018-12-03', '2019-01-10', '2019-01-25', 'KEDAI TELUK BELITUNG', 'JL. RAMBAI RT 01/RW 03 KEL. TELUK BELITUNG KEC. MERBAU', 'KONSUMTIF (meninggal dunia)', '07.02.18.00391.09.1.12.0', 'ABDUL KADIR', '350000000', '350000000', '1', '344880953', '-', 'sk', '-', '108', '2018-08-23', '2027-08-23', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.9', '310392857.7', 'IGNA ASIA', 0, NULL),
(1275, '2018-11-29', '2019-01-17', '2019-01-25', 'VENTURA', 'JL. YOS SUDARSO Gg. UTAMA RT 002 RW 001 UMBAN SARI RUMBAI', 'PRODUKTIF', '07.01.18.00010.03.1.12.0', 'MACHMOED AKIM', '150000000', '24900000', '0.166', '24405558', '0', 'TANAH & BANGUNAN', '166750000', '36', '2018-03-01', '2021-03-01', 'PERMASALAHAN RUMAH TANGGA', 'TOKO BUKU', NULL, NULL, NULL, 0, NULL),
(1276, '2018-11-16', '2018-12-10', '2019-01-16', 'KOPKAR', 'JL. DAMAR GG. SADRAN WONOREJO PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.05.17.00064.12.1.12.0', 'KAFRAWI ', '69967500', '69967500', '1', '55390940', NULL, 'SK', '0', '48', '2017-11-30', '2021-11-30', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1277, '2018-11-16', '2018-12-20', '2019-01-16', 'CABANG PEMBANTU FLAMBOYAN', 'JL. ANGGREK 1C RT. 001 RW. 001 KEL INDRAPURI KLEC TAPUNG ', 'PRODUKTIF (meninggal dunia)', '07.02.18.00359.08.1.12.0', 'SUHARTONO ', '250000000', '75000000', '0.3', '243210954', NULL, 'TANAH ', '270000000', '60', '2018-07-12', '2023-07-12', 'MENINGGAL DUNIA ', 'PERKEBUNAN SAWIT ', '0.9', '218889858.6', 'IGNA ASIA', 0, NULL),
(1278, '2018-10-16', '2018-12-31', '2019-01-25', 'CABANG SELATPANJANG', 'JL. PEMBANGUNAN I SELATPANJANG KOTA KEC. TEBING TINGGI KAB. KEP. MERANTI', 'PRODUKTIF', '07.02.16.00076.04.1.12.0', 'YUSNI', '40000000', '30000000', '0.75', '24989317', '0', 'TANAH & BANGUNAN', '244500000', '36', '2016-04-08', '2019-04-08', 'USAHA DEBITUR TUTUP', 'DAGANG HARIAN', NULL, NULL, NULL, 0, NULL),
(1279, '2017-11-06', '2018-02-01', '2018-02-14', 'CABANG PEMBANTU PANAM', 'JL. KUBANG Gg. ISTIQOMAH RT/RW 003/008  KEL. TUAH KARYA KEC. TAMPAN PEKANBARU', 'KONSUMTIF', '07.02.14.00127.11.1.12.0', 'DARWINSYAH', '200000000', '200000000', '0.75', '111159393', 'TIDAK ADA', 'SK', '-', '84', '2014-11-28', '2021-11-28', 'PHK', 'KARYAWAN', NULL, NULL, NULL, 0, NULL),
(1280, '2018-12-31', '0000-00-00', '0000-00-00', 'KEDAI BATUPANJANG RUPAT', 'JL. MASJID RT 001 KEL. BATU PANJANG KEC. RUPAT KAB. BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02.18.00186.05.1.12.0', 'MUHAMMAD JAIS', '155000000', '155000000', '1', '148356796', 'TIDAK ADA', 'SK', '0', '108', '2018-04-18', '2027-04-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1281, '2018-12-31', '0000-00-00', '0000-00-00', 'KEDAI KUALA KILAN', 'DESA TALANG BERSEMI 001/001 KEC. BATANG CENAKU KAB. INHU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00387.09.1.12.0', 'SUPONO', '100000000', '50000000', '0.5', '98187718', 'TIDAK ADA', 'TANAH PERKEBUNAN', '224000000', '84', '2018-08-27', '2025-08-27', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1282, '2018-12-31', '0000-00-00', '0000-00-00', 'CABANG RANAI', 'TANJUNG KUMBINK 001/0041 DESA PULAU TIGA', 'PRODUKTIF KUR', '07.02.17.00002.03.4.12.0', 'BAHTIAR', '15000000', '11250000', '0.75', '10766071', '0', 'TANAH', '16650000', '36', '2017-03-09', '2020-03-09', 'KESULITAN BAHAN BAKU', 'PENANGKAPAN IKAN', NULL, NULL, NULL, 0, NULL),
(1283, '2018-12-31', '0000-00-00', '0000-00-00', 'CABANG RANAI', 'SELEMAM 001/001 SELEMAM', 'PRODUKTIF KUR', '07.02.16.00946.12.4.12.0', 'JUNARDI', '25000000', '18750000', '0.75', '12809970', '0', 'TANAH', '34308000', '36', '2016-12-23', '2019-12-23', 'PROSES PRODUKSI GAGAL', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1284, '2018-12-26', '0000-00-00', '0000-00-00', 'CABANG TELUK KUANTAN', 'DUSUN KOTO TUO RT 001 RW 001 KEL. KOTO TALUK KEC. KUANTAN TENGAH KAB. KUANTAN SENGINGI', 'KONSUMTIF (meninggal dunia)', '07.02.16.00083.04.1.12.0', 'RIDERMAN', '155000000', '155000000', '1', '135100342', '0', 'SK', '0', '120', '2016-04-18', '2026-04-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1285, '2018-12-21', '2018-12-31', '2018-12-31', 'KEDAI MARPOYAN', 'PANGKALAN BARU BARAT DESA PANGKALAN BARU KEC. SIAK HULU KAB. KAMPAR', 'PRODUKTIF KUR', '07.02.18.001341.02.4.12.0', 'FADILLAH', '20000000', '15000000', '0.75', '13317894', '0', 'TANAH PERKEBUNAN', '17937500', '36', '2018-02-08', '2021-02-08', 'HARGA SAWIT TURUN', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1286, '2018-12-13', '0000-00-00', '0000-00-00', 'CABANG PEMBANTU JALAN RIAU', 'PERUM. SAKINAH I BLOK D NO. 2 RT 008 RW 003 KEL. SIDOMULYO BARAT', 'KONSUMTIF (meninggal dunia)', '07.02.18.00201.06.1.12.0', 'TETTI RAHMAYANTI', '25000000', '25000000', '1', '22490789', '0', 'SK', '0', '36', '2018-04-19', '2021-04-19', 'MENINGGAL DUNIA', 'GURU BANTU HONORER', NULL, NULL, NULL, 0, NULL),
(1287, '2018-12-10', '0000-00-00', '0000-00-00', 'CABANG PEMBANTU UJUNG BATU', 'RK HARAPAN RAYA RT 002 RW 010 KEC. UJUNG BATU', 'PRODUKTIF (meninggal dunia)', '07.02.18.00413.09.1.12.0', 'SUHARTONO ', '450000000', '135000000', '0.3', '440807500', '0', NULL, NULL, '60', '2018-08-27', '2023-08-27', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1288, '2018-12-03', '0000-00-00', '0000-00-00', 'PT ADONAI PIALANG ASURANSI', 'JL. HOS COKROAMINOTO 002/001 RIMBA SEKAMPUNG BENGKALIS', 'KONSUMTIF (meninggal dunia)', '07.02b.18.00354.05.1.12.0', 'ASRO H', '100000000', '100000', '1', '98983362', '0', 'SK', '0', '120', '2018-05-18', '2028-05-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1289, '2018-12-03', '0000-00-00', '0000-00-00', 'KEDAI TELUK BELITUNG', 'JL. RAMBAI RT 01/RW 03 KEL. TELUK BELITUNG KEC. MERBAU', 'KONSUMTIF (meninggal dunia)', '07.02.18.00391.09.1.12.0', 'ABDUL KADIR', '350000000', '350000000', '1', '344880953', '-', 'sk', '-', '108', '2018-08-23', '2027-08-23', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1290, '2018-11-29', '2018-12-20', '2018-12-31', 'CABANG PEMBANTU BASERAH', 'KUANTAN SAKO RT 001 RW 002 KEL. KUANTAN SAKO KEC. LOGAS TANAH DARAT', 'PRODUKTIF', '07.02.15.00084.05.1.12.0', 'WIDI CAHYONO', '250000000', '100000000', '0.4', '23878551', NULL, 'TANAH PERKEBUNAN', '232000000', '48', '2015-05-28', '2019-05-28', 'PENURUNAN OMSET', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1291, '2018-11-29', NULL, NULL, 'VENTURA', 'JL. YOS SUDARSO Gg. UTAMA RT 002 RW 001 UMBAN SARI RUMBAI', 'PRODUKTIF', '07.01.18.00010.03.1.12.0', 'MACHMOED AKIM', '150000000', '24900000', '0.166', '24405558', '0', 'TANAH & BANGUNAN', '166750000', '36', '2018-03-01', '2021-03-01', 'PERMASALAHAN RUMAH TANGGA', 'TOKO BUKU', NULL, NULL, NULL, 0, NULL),
(1292, '2018-11-29', '2018-12-31', '2018-12-31', 'CABANG PEMBANTU RUMBAI', 'JL. SUKA MANTRI RT 002 RW 012 KEL. LEMBAH SARI KEC. RUMBAI PESISIR PEKANBARU', 'PRODUKTIF', '07.02.17.00091.05.1.12.0', 'FAISAL', '20000000', '15000000', '0.75', '8759152', '0', 'TANAH', '99060000', '24', '2017-04-28', '2019-04-28', 'USAHA BANGKRUT', 'BARANG HARIAN', NULL, NULL, NULL, 0, NULL),
(1293, '2018-11-29', '2018-12-31', '2018-12-31', 'CABANG PEMBANTU RUMBAI', 'JL. YOS SUDARSO RT 005 RW 005 MERANTI PANDAK RUMBAI', 'PRODUKTIF', '07.02.16.00063.03.1.12.0', 'LINA PARLINA', '40000000', '30000000', '0.75', '18987614', '0', 'TANAH', '25200000', '48', '2016-03-24', '2020-03-24', 'KEDAI USAHA MIKRO', 'DAGANG BARANG HARIAN', NULL, NULL, NULL, 0, NULL),
(1294, '2018-11-16', '2018-12-26', '2018-12-31', 'KEDAI SUKARAMAI', 'DSN. I SUMBER TANI 002/002 SUMBER SARI TAPUNG HULU KAMPAR', 'PRODUKTIF', '07.02.16.00276.11.1.12.0', 'PARHAN HALOMOAN ', '25000000', '12500000', '0.5', '7710795', NULL, 'LAHAN PERKEBUNAN ', '32500000', '36', '2016-11-18', '2019-11-18', 'MASALAH RUMAH TANGGA', 'PERKEBUNAN KELAPA SAWIT ', NULL, NULL, NULL, 0, NULL),
(1295, '2018-11-16', '2018-12-10', NULL, 'KOPKAR', 'JL. DAMAR GG. SADRAN WONOREJO PEKANBARU', 'KONSUMTIF (meninggal dunia)', '07.05.17.00064.12.1.12.0', 'KAFRAWI ', '69967500', '69967500', '1', '55390940', NULL, 'SK', '0', '48', '2017-11-30', '2021-11-30', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1296, '2018-11-16', '2018-12-20', NULL, 'CABANG PEMBANTU FLAMBOYAN', 'JL. ANGGREK 1C RT. 001 RW. 001 KEL INDRAPURI KLEC TAPUNG ', 'PRODUKTIF (meninggal dunia)', '07.02.18.00359.08.1.12.0', 'SUHARTONO ', '250000000', '75000000', '0.3', '243210954', NULL, 'TANAH ', '270000000', '60', '2018-07-12', '2023-07-12', 'MENINGGAL DUNIA ', 'PERKEBUNAN SAWIT ', NULL, NULL, NULL, 0, NULL),
(1297, '2018-11-16', NULL, NULL, 'KOPKAR', 'PERUM TIARA PERMAI JL. MERDEKA 8 BNLOK D 40 PANDAU ', 'KONSUMTIF', '07.05.17.00054.10.1.12.0', 'NURSIRWAN ', '40000000', '40000000', '1', '29166671', NULL, 'SK', NULL, '48', '2017-09-29', '2021-09-29', 'PHK', 'PENSIUNAN BANK RIAU ', NULL, NULL, NULL, 0, NULL),
(1298, '2018-11-14', '2018-11-29', '2018-11-30', 'KEDAI KABUN', 'DESA ALIANTAN RT 015 RW 008 KEC. KABUN ', 'PRODUKTIF', '07.02.16.00088.05.1.12.0', 'SYUKUR BAGIO', '54000000', '27000000', '0.5', '19334291', '0', 'TANAH PERUMAHAN', '96000000', '60', '2016-03-30', '2021-03-30', 'HARGA KARET ANJLOK', 'PERKEBUNAN KARET ', NULL, NULL, NULL, 0, NULL),
(1299, '2018-11-09', '2018-12-10', '2018-12-27', 'PT ADONAI PIALANG ASURANSI', 'DUSUN TANJUNG BELIT TIMUR RT 002 RW 001 KEC. RAMBAH KAB. ROKAN HULU ', 'KONSUMTIF (meninggal duani)', '07.02b.18.00187.05.1.12.0', 'SARBAINI', '110000000', '110000000', '1', '108722485', NULL, 'SK', '0', '96', '2018-05-16', '2026-05-16', 'MENINGGAL DUNIA', NULL, '0.9', NULL, NULL, 0, NULL),
(1300, '2018-11-09', '2018-12-20', '2018-12-31', 'KEDAI PASAR SAIL ', 'JL. FAJAR UJUNG GG. IKHLAS RT 001 RW 013 LABUH BARU BARAT PAYUNG SEKAKI KOTA PEKANBARU ', 'PRODUKTIF', '07.02.17.00186.07.1.12.0', 'A. RENO ', '50000000', '37500000', '0.75', '29968110', NULL, 'TANAH & BANGUNAN ', '209838000', '36', '2017-07-27', '2020-07-27', 'PRODUKSI GAGAL', 'USAHA BENGKEL LAS R3 TEKNIK ', NULL, NULL, NULL, 0, NULL),
(1301, '2018-11-09', '2018-12-20', '2018-12-31', 'CABANG PASIR PENGARAIAN', 'NEGERI DANAU SATU RT 002 RW 004 DESA RAMBAH SAMO BARAT KEC. RAMBAH SAMO KAB. ROKAN HULU', 'PRODUKTIF KUR', '07.02.17.01191.01.4.12.0', 'NURHAYATI', '25000000', '18750000', '0.75', '11661049', '0', 'TANAH PERKEBUNAN', '19343733', '36', '2016-12-29', '2019-12-29', 'PENURUNAN HARGA', 'PERKEBUNAN KARET DAN PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1302, '2018-11-06', '2018-12-10', '2018-12-27', 'PT ADONAI PIALANG ASURANSI', 'BAGAN MELIBUR RT/RW DESA MAYANG SARI KEC. MERBAU KAB. KEP. MERANTI', 'KONSUMTIF (meninggal dunia)', '07.02b.15.00268.05.1.12.0', 'T SYUFRI', '140000000', '140000000', '1', '139882930', NULL, 'SK', '0', '144', '2018-05-17', '2030-05-17', 'MENINGGAL DUNIA', NULL, '0.9', NULL, NULL, 0, NULL),
(1303, '2018-11-02', '2018-11-29', '2018-11-30', 'KEDAI PASAR PAGI ARENGKA', 'JL. HANDAYANI RT 001 RW 007 SIDOMULYO TIMUR MARPOYAN DAMAI PEKANBARU', 'PRODUKTIF KUR', '07.02.16.00147.11.4.12.0', 'BUDI EKSANUDIN', '30000000', '22500000', '0.75', '5897357', NULL, 'TANAH', '24700000', '24', '2016-11-11', '2018-11-11', 'HARGA JUAL RENDAH', 'PERTANIAN', NULL, NULL, NULL, 0, NULL),
(1304, '2018-10-24', '2018-11-16', '2018-11-30', 'KEDAI SUNGAI SEMBILAN', 'JL. MAMPU JAYA RT 004 KEL. TANJUNG PENYEMBAL KEC. SEI SEMBILAN', 'PRODUKTIF (meninggal dunia)', '07.02.17.00101.04.1.12.0', 'SUPRIYANTO', '40000000', '30000000', '0.75', '23447385', NULL, 'TANAH & BANGUNAN', '0', '36', '2017-04-20', '2020-04-20', 'MENINGGAL DUNIA', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1305, '2018-10-23', '2018-11-16', '2018-11-30', 'KEDAI PASAR LUBUK JAMBI', 'DESA AIR BULUH RT 007 RW 005 KEC. KUANTAN MUDIK KAB. KUANSING', 'PRODUKTIF', '07.02.17.00060.03.1.12.0', 'DUSKI', '99000000', '49500000', '0.5', '36142500', '0', 'TANAH & BANGUNAN', '272470000', '36', '2017-03-13', '2020-03-13', 'USAHA MENURUN', 'DAGANG PAKAIAN JADI, ANGKUTAN SEWA', NULL, NULL, NULL, 0, NULL),
(1306, '2018-10-17', '2018-11-09', '2018-11-19', 'VENTURA', 'JL. GURU KOMPLEK ARENGKA RAYA RESIDENCE D. 11 KAV. 14 PEKANBARU', 'PRODUKTIF', '07.01.18.00001.02.1.12.0', 'BUDI HAMID HASIBUAN', '200000000', '80000000', '0.4', '71111110', '0', 'TANAH & BANGUNAN', '129900000', '36', '2018-01-25', '2021-01-25', 'PRODUK TIDAK LAKU', 'PRODUKSI ANEKA PRODUK GAHARU', NULL, NULL, NULL, 0, NULL),
(1307, '2018-10-16', NULL, NULL, 'CABANG SELATPANJANG', 'JL. PEMBANGUNAN I SELATPANJANG KOTA KEC. TEBING TINGGI KAB. KEP. MERANTI', 'PRODUKTIF', '07.02.16.00076.04.1.12.0', 'YUSNI', '40000000', '30000000', '0.75', '24989317', '0', 'TANAH & BANGUNAN', '244500000', '36', '2016-04-08', '2019-04-08', 'USAHA DEBITUR TUTUP', 'DAGANG HARIAN', NULL, NULL, NULL, 0, NULL),
(1308, '2018-10-16', '2018-11-09', '2018-11-19', 'CABANG SELATPANJANG', 'JL. UTAMA RT 003 RW 001 KEL. SELATPANJANG TIMUR KEC. TEBING TINGGI KAB. KEP. MERANTI', 'PRODUKTIF KUR', '07.02.16.01037.12.4.12.0', 'SUPRIYANTO', '180000000', '135000000', '0.75', '88439895', '0', 'TANAH & BANGUNAN', '168608000', '60', '2016-07-01', '2021-07-01', 'USAHA DEBITUR TUTUP', 'PETERNAKAN SAPI, BUNGA & BIBIT TANAMAN', NULL, NULL, NULL, 0, NULL),
(1309, '2018-10-16', '2018-11-16', '2018-11-30', 'CABANG SELATPANJANG', 'JL. H. SALEH DUSUN BANDUL DESA MEKONG KEC. TEBING TINGGI BARAT', 'PRODUKTIF KUR', '07.02.16.01066.12.4.12.0', 'ABDUL GANI', '100000000', '75000000', '0.75', '59906253', '0', 'TANAH & BANGUNAN', '90950000', '48', '2016-12-22', '2020-12-22', 'SAPI HILANG', 'PETERNAKAN SAPI', NULL, NULL, NULL, 0, NULL),
(1310, '2018-10-16', '2018-11-09', '2018-11-19', 'CABANG SELATPANJANG', 'JL. DORAK NO. 24 B KAB. KEP. MERANTI', 'PRODUKTIF KUR', '07.02.16.01058.12.4.12.0', 'ZULFAHMI', '35000000', '26250000', '0.75', '19633937', '0', 'TANAH & BANGUNAN', '30234000', '60', '2016-11-01', '2021-11-01', 'GAGAL PANEN', 'PERKEBUNAN LADA', NULL, NULL, NULL, 0, NULL),
(1311, '2018-10-12', '2018-11-09', '2018-11-19', 'KEDAI KABUN', 'BENCAH KESUMA RT 006 RW 002 DESA BENCAH KESUMA KEC. KABUN', 'PRODUKTIF', '07.02.16.00088.05.1.12.0', 'M. TIMUR WA', '60000000', '45000000', '0.75', '33185235', '0', 'TANAH PERKEBUNAN', '88900000', '60', '2016-04-19', '2021-04-19', 'HARGA TBS ANJLOK', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1312, '2018-10-01', '2018-11-09', '2018-11-19', 'CABANG TALUK KUANTAN ', 'JL. PROKLAMASI 03/II KEL. SUNGAI JERING KEC. KUANTAN TENGAH', 'PRODUKTIF', '07.02.17.00025.02.1.12.0', 'SRI SUPRAPTI', '135000000', '40500000', '0.3', '29072647', '0', 'TANAH PERUMAHAN', '590000000', '48', '2017-02-22', '2021-02-22', 'OMSET MENURUN', 'JASA ', '0.5', NULL, NULL, 0, NULL),
(1313, '2018-09-26', '2018-10-25', '2018-10-29', 'PT PROTEKSI JAYA MANDIRI', NULL, 'KONSUMTIF', '07.02.16.00151.07.1.12.0', 'MUNAWWIRAH', '100000000', '100000000', '1', '77571450', '0', 'SK', '0', '60', '2016-07-22', '2021-07-22', 'MACET', NULL, NULL, NULL, NULL, 0, NULL),
(1314, '2018-09-26', '2018-11-06', '2018-11-19', 'PT ADONAI PIALANG ASURANSI', NULL, 'KONSUMTIF', '07.02B.18.01471.05.1.12.0', 'ZAKARIA', '170000000', '170000000', '1', '170000000', 'TIDAK ADA', 'SK', '0', '120', '2018-07-17', '2028-07-17', 'MENINGGAL DUNIA', NULL, '0.9', NULL, NULL, 0, NULL),
(1315, '2018-09-17', NULL, NULL, 'CABANG TANJUNG PINANG ', NULL, 'PRODUKTIF KUR', '07.02.17.00154.07.4.12.0', 'HERMAN ', '140000000', '105000000', '0.75', '91000002', 'TIDAK ADA', 'TANAH RUMAH', '90012000', '60', '2017-07-21', '2022-07-21', 'MACET', NULL, NULL, NULL, NULL, 0, NULL),
(1316, '2018-09-14', '2018-10-18', '2018-10-29', 'CABANG TALUK KUANTAN ', NULL, 'PRODUKTIF ', '07.02.17.00025.02.1.12.0', 'NELY ERNIWATI ', '165000000', '82500000', '0.5', '65422457', 'TIDAK ADA', 'TANAH PERKEBUNAN ', '185000000', '36', '2017-02-03', '2020-02-03', 'MACET', NULL, '0.5', NULL, NULL, 0, NULL),
(1317, '2018-09-05', NULL, '2018-10-12', 'KOPKAR', NULL, 'KONSUMTIF (meninggal dunia)', '07.05.17.00002.01.1.12.0', 'AZHAR', '17000000', '17000000', '1', '7555560', 'TIDAK ADA', 'SK', '-', '36', '2016-12-01', '2019-12-01', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1318, '2018-08-30', '2018-10-24', '2018-10-29', 'CABANG PEMBANTU FLAMBOYAN', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.18.00300.07.1.12.0', 'SUKIMUN', '70000000', '21000000', '0.3', '69332902', 'TIDAK ADA', 'TANAH', '176000000', '36', '2018-06-04', '2021-06-04', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1319, '2018-08-30', NULL, '2018-10-12', 'PT PROTEKSI JAYA MANDIRI', NULL, 'KONSUMTIF (meninggal dunia)', '07.02.17.00262.08.1.12.0', 'T. IDA MARWIYAH', '150000000', '150000000', '1', '132494010', 'TIDAK ADA', 'SK KERJA', '0', '60', '2018-08-18', '2023-08-18', 'MENINGGAL DUNIA', NULL, '0.5', NULL, NULL, 0, NULL),
(1320, '2018-08-24', NULL, '2018-10-12', 'PT ADONAI PIALANG ASURANSI', NULL, 'KONSUMTIF (meninggal dunia)', '07.02.15.00195.10.1.12.0', 'SITI AMINAH', '30000000', '30000000', '1', '30000000', 'TIDAK ADA', 'SK', '0', '48', '2018-05-22', '2022-05-22', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1321, '2018-08-20', NULL, '2018-09-19', 'KEDAI KABUN', NULL, 'PRODUKTIF', '07.02.16.00170.07.1.12.0', 'APRIAL M', '20000000', '10000000', '0.5', '6315280', '0', 'TANAH PERKEBUNAN', '81289600', '36', '2016-07-15', '2019-07-15', 'HARGA JUAL MENURUN', NULL, NULL, NULL, NULL, 0, NULL),
(1322, '2018-08-20', NULL, '2018-09-28', 'KEDAI PERANAP', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.18.00055.02.1.12.0', 'ABDUL HARIS', '95000000', '47500000', '0.5', '84121190', 'TIDAK ADA', 'TANAH', '144000000', '36', '2018-02-07', '2021-02-07', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1323, '2018-08-14', NULL, '2018-10-12', 'PT PROTEKSI JAYA MANDIRI', NULL, 'KONSUMTIF (meninggal dunia)', '07.02.17.00158.06.1.12.0', 'M. FUZANDI', '55000000', '55000000', '1', '45900803', 'TIDAK ADA', 'SK KERJA', '0', '60', '2017-06-09', '2022-06-09', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1324, '2018-08-13', NULL, '0000-00-00', 'CABANG PEMBANTU JALAN RIAU', NULL, 'PRODUKTIF', '07.02.15.00195.10.1.12.0', 'JUMINI', '50000000', '37500000', '0.75', '6571928', '0', 'TANAH PERUMAHAN', '58310000', '36', '2015-08-12', '2018-08-12', 'MACET', NULL, NULL, NULL, NULL, 0, NULL),
(1325, '2018-07-31', NULL, '2018-09-19', 'CABANG PANGKALAN KERINCI', NULL, 'PRODUKTIF KUR', '07.02.16.01086.12.4.12.0', 'AFITRI NORITA BTE HISHAM', '400000000', '300000000', '0.75', '231250000', '0', 'LAHAN PERUMAHAN', '241296000', '48', '2016-12-30', '2020-12-30', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(1326, '2018-07-31', NULL, '2018-09-27', 'CABANG PEMBANTU BAGAN BATU', NULL, 'PRODUKTIF (meninggal dunia)', NULL, 'DARMIATI', '75000000', '56250000', '0.75', '74405505', 'TIDAK ADA', 'TANAH', '104000000', '36', '2018-04-24', '2021-04-24', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1327, '2018-07-26', NULL, '2018-09-19', 'CABANG PEMBANTU DURI', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.17.00369.10.1.12.0', 'SUPARDI', '150000000', '112500000', '0.5', '126250000', 'TIDAK ADA', 'TANAH KOSONG', '160000000', '48', '2017-10-24', '2021-10-24', 'MENINGGAL DUNIA', 'PETANI SAWIT', '0.9', NULL, NULL, 0, NULL),
(1328, '2018-07-26', NULL, '2018-09-14', 'KEDAI PERANAP', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.18.00179.05.1.12.0', 'ZAENAL ARIFIN', '95000000', '75000000', '0.75', '90763935', 'TIDAK ADA', 'TANAH', '121175000', '48', '2018-04-13', '2022-04-13', 'MENINGGAL DUNIA', NULL, NULL, NULL, NULL, 0, NULL),
(1329, '2018-07-26', NULL, '2018-09-25', 'CABANG PANGKALAN KERINCI', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.16.00093.05.1.12.0', 'DERITA RATNA WATI SIRAIT', '1000000000', '300000000', '0.3', '659849100', 'TIDAK ADA', 'LAHAN PERUMAHAN', '1164499000', '60', '2016-06-16', '2021-06-16', 'MENINGGAL DUNIA', NULL, '0.5', NULL, NULL, 0, NULL),
(1330, '2018-07-26', NULL, '2018-09-12', 'PT ADONAI PIALANG ASURANSI', NULL, 'KONSUMTIF (meninggal dunia)', NULL, 'IRVANS', '247000000', '247000000', NULL, '247000000', 'TIDAK ADA', 'SK', '0', '132', '2018-05-24', '2029-05-24', 'MENINGGAL DUNIA', NULL, '0.9', NULL, NULL, 0, NULL),
(1331, '2018-07-20', NULL, '2018-08-21', 'KEDAI KABUN', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.17.00280.05.1.12.0', 'INDRA JONI', '266666668', '133333334', '0.5', '227777776', NULL, 'TANAH PERUMAHAN', '267000000', NULL, NULL, NULL, NULL, NULL, '0.9', NULL, NULL, 0, NULL),
(1332, '2018-07-18', NULL, '2018-08-29', 'KOPKAR', 'JL. KUANTAN II Gg PALUH NO 01', 'KONSUMTIF (meninggal dunia)', '07.05.17.00002.01.1.12.0', 'SYAFEI YUSUF', '20000000', '20000000', '1', '4000000', 'TIDAK ADA', 'SK', '0', '20', '2016-12-01', '2018-08-01', 'MENINGGAL DUNIA', 'PENSIUNAN BANK RIAU ', NULL, NULL, NULL, 0, NULL),
(1333, '2018-07-18', NULL, '2018-08-29', 'KOPKAR', 'JL. RONGGOWARSITO II BNO. 17 PEKANBARU', 'KONSUMTIF (meninggal dunia)', NULL, 'T. FAHMI MAKMUN ', '20000000', '20000000', '1', '9999992', 'TIDAK ADA', 'SK ', '0', '20', '2016-12-01', '2018-08-01', 'MENINGGAL DUNIA', 'PENSIUNAN BANK RIAU ', NULL, NULL, NULL, 0, NULL),
(1334, '2018-07-18', NULL, '2018-09-14', 'KEDAI PASAR PANGKALAN KERINCI', NULL, 'PRODUKTIF (meninggal dunia)', '07.02.17.00483.12.1.12.0', 'WIDARTI', '100000000', '50000000', '0.5', '92279518', '0', 'TANAH PERKEBUNAN', NULL, '60', '2017-12-14', '2022-12-14', 'MENINGGAL DUNIA', NULL, '0.9', NULL, NULL, 0, NULL),
(1335, '2018-07-12', NULL, '2018-08-21', 'KEDAI PASAR LUBUK JAMBI', 'DESA MUARO SAKO TOMBANG 002/002 KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.16.;00006.01.1.12.0', 'DARWIS', '75000000', '37500000', '0.5', '14932014', '0', 'TANAH', '151000000', '36', '2016-01-27', '2019-01-27', 'HARGA JUAL LEBIH RENDAH DARI PRODUKSI', ' KOMODITI KARET', NULL, NULL, NULL, 0, NULL),
(1336, '2018-07-12', NULL, '2018-08-21', 'CABANG PEMBANTU BASERAH', 'DESA KUANTAN SAKO 002/001 KEC. LOGAS TANAH DARAT KAB. KUANTAN SENGINGI', 'PRODUKTIF (meninggal dunia)', '07.02.15.0014.06.1.12.0', 'SURONO', '85000000', '25500000', '0.3', '31064430', 'TIDAK ADA', 'TANAH PERKEBUNAN ', '120000000', '48', '2015-06-26', '2019-06-26', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1337, '2018-07-06', NULL, '2018-07-31', 'KEDAI PASAR PAGI ARENGKA', 'JL. ANGGREK NO 59 RT 002 RW 007 TANGKERANG TENGAH BUKIT RAYA', 'PRODUKTIF (meninggal dunia)', '07.02.18.00130.04.1.12.0', 'ERLIDA', '99000000', '29700000', '0.3', '97878656', '0', 'TANAH & BANGUNAN', '538640000', '60', '2018-03-22', '2023-03-22', 'MENINGGAL DUNIA', 'USAHA SANGGAR RIAS', NULL, NULL, NULL, 0, NULL),
(1338, '2018-07-02', NULL, '2018-07-31', 'KEDAI TANDUN', 'TANDUN RT 008 / RW 003 KEC. TANDUN KAB. ROKAN HULU', 'PRODUKTIF', '07.02.16.00119.06.1.12.0', 'ANHAR', '50000000', '37500000', '0.75', '35769928', '0', 'TANAH', '36100000', '60', '2016-06-06', '2021-06-06', 'KALAH BERSAING', 'PEDAGANG', NULL, NULL, NULL, 0, NULL),
(1339, '2018-06-21', NULL, '2018-07-31', 'CABANG PEMBANTU TANJUNGBATU', 'PARIT SYUKUR RT 001 RW 002 KEL. TANJUNG BERLIAN BARAT KEC KUNDUR UTARA KAB KARIMUN', 'KONSUMTIF', '07.02.17.00386.10.1.12.0', 'MAHYUNI', '150000000', '150000000', '1', '146241820', 'TIDAK ADA', 'SK', '-', '120', '2017-10-09', '2027-10-09', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.5', NULL, NULL, 0, NULL),
(1340, '2018-06-07', NULL, '2018-07-31', 'CABANG PANGKALAN KERINCI', 'DESA MUARA SAKO 001/005 KEC LANGGAM KAB PELALAWAN PROV RIAU', 'PRODUKTIF KUR', '07.02.16.01082.12.4.12.0', 'MARLIS', '80000000', '60000000', '0.75', '50381916', '-', 'TANAH PERKEBUNAN', '44268000', '72', '2016-12-25', '2022-12-25', 'HARGA JUAL LEBIH RENDAH DARI PRODUKSI', 'PERKEBUNAN KELAPA SAWIT', NULL, NULL, NULL, 0, NULL),
(1341, '2018-06-06', NULL, '2018-07-31', 'CABANG PANGKALAN KERINCI', 'JL  SEJAHTERA RT 003 RW 016 KEC PKL KERINCI KAB PELALAWAN', 'KONSUMTIF', '07.02.16.00257.10.1.12.0', 'SUAHMADA', '100000000', '100000000', '1', '80865816', 'TIDAK ADA', 'SK', '-', '72', '2016-10-25', '2022-10-25', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1342, '2018-05-28', NULL, '2018-07-23', 'KEDAI TELUK BELITUNG', 'JL. YOS SUDARSO RT/RW 006/001 KEL. TELUK BELITUNG KEC. MERBAU KAB. KEP. MERANTI', 'PRODUKTIF', '07.02.16.00190.08.1.12.0', 'NORINAH', '20000000', '15000000', '0.75', '10185564', NULL, 'TANAH & BANGUNAN', '21052500', '36', '2016-08-26', '2019-08-26', 'PIUTANG MACET', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1343, '2018-05-28', NULL, '2018-07-23', 'CABANG PEMBANTU TANJUNGBATU', 'JL. KEDENCER RT 002 RW 002 KEL BATU LIMAU KEC UNGAR KAB. KARIMUN', 'KONSUMTIF', '07.02.17.00386.10.1.12.0', 'RUSLAN', '150000000', '150000000', '1', '146990190', 'TIDAK ADA', 'TANAH & BANGUNAN', '-', '120', '2017-10-23', '2027-10-23', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.5', NULL, NULL, 0, NULL),
(1344, '2018-05-28', NULL, '2018-07-25', 'KEDAI BANDAR SEI KIJANG', 'DESA LANGKAN RT 002 RW 005 KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.18.00155.05.1.12.0', 'HERMAN RAMBE', '99000000', '49500000', '0.5', '99000000', 'TIDAK ADA', 'TANAH PERKEBUNAN', '75075000', '60', '2018-04-09', '2023-04-09', 'MENINGGAL DUNIA', 'PETANI SAWIT', NULL, NULL, NULL, 0, NULL),
(1345, '2018-05-21', '2018-06-21', '2018-06-25', 'KEDAI PASAR LUBUK JAMBI', 'DESA  PANTAI 002/002 KEC. MUDIK KAB. KUANSING', 'PRODUKTIF', '07.02.16.00186.08.1.12.0', 'EMI SARIANA', '250000000', '187500000', '0.75', '110113422', '-', 'TANAH', '200000000', '36', '2016-08-23', '2019-08-23', 'OMSET MENURUN', 'USAHA DAGANG HARIAN', '0.5', NULL, NULL, 0, NULL),
(1346, '2018-05-21', '2018-06-21', '2018-06-25', 'KEDAI PASAR LUBUK JAMBI', 'DESA PULAU BINJAI 006/003 KEC. MUDIK KAB. KUANSING', 'PRODUKTIF', '07.02.17.00078.04.1.12.0', 'LUKITA NINGSIH', '17000000', '8500000', '0.5', '7257382', NULL, 'TANAH & BANGUNAN', '24000000', '36', '2017-04-26', '2020-04-26', 'PIUTANG MACET', 'USAHA DAGANG HARIAN', NULL, NULL, NULL, 0, NULL),
(1347, '2018-05-15', '2018-07-03', '2018-07-10', 'CABANG RANAI', 'SEPASIR 001/002 DESA SELADING KEC. PULAU TIGA BARAT KAB. NATUNA', 'PRODUKTIF KUR', '07.02.16.00219.11.4.12.0', 'RAJA HARMIZI', '50000000', '37500000', '0.75', '34362590', '-', 'TANAH', '104000000', '48', '2016-11-23', '2020-11-23', 'KESULITAN BAHAN BAKU', 'PENAMPUNGAN IKAN MATI', NULL, NULL, NULL, 0, NULL),
(1348, '2018-05-09', '2018-06-08', '2018-06-25', 'KEDAI PASAR PANGKALAN KERINCI', 'JL. PEMDA Gg WAJIB SENYUM RT 004 RW 009 PANGKALAN KERINCI KOTA KAB. PELALAWAN', 'PRODUKTIF', '07.02.17.00323.09.1.12.O', 'ENDA WATI BR SILALAHI', '25000000', '12500000', '0.5', '12090490', '-', 'TANAH', '35000000', '24', '2017-09-18', '2019-09-18', 'PIUTANG MACET', 'CUCIAN MOTOR', NULL, NULL, NULL, 0, NULL),
(1349, '2018-04-30', '2018-06-08', '2018-06-25', 'CABANG PEMBANTU RUMBAI', NULL, 'PRODUKTIF', '07.02.17.00048.04.1.12.0', 'NOVRIZAL', '130000000', '65000000', '0.5', '62140535', '-', 'TANAH KOSONG', '296100000', '60', '2017-03-29', '2022-03-29', NULL, NULL, '0.5', NULL, NULL, 0, NULL),
(1350, '2018-04-30', '2018-06-08', '2018-06-25', 'CABANG PEMBANTU RUMBAI', NULL, 'PRODUKTIF', '07.02.16.00328.12.1.12.0', 'SITI NURMAYA', '200000000', '100000000', '0.5', '70809723', '-', 'TANAH & BASNGUNAN', '172875556', '60', '2016-04-08', '2021-04-08', NULL, NULL, '0.5', NULL, NULL, 0, NULL),
(1351, '2018-04-18', '2018-05-15', '2018-05-18', 'PROTEKSI JAYA MANDIRI', NULL, 'KONSUMTIF (meninggal dunia)', '07.02.17.00201.07.1.12.0', 'RAJA ALFARID SHABANA', '135000000', '135000000', '1', '125572504', '-', 'SK', '-', '72', '2017-07-19', '2023-07-19', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', '0.5', NULL, NULL, 0, NULL),
(1352, '2018-04-18', '2018-05-22', '2018-05-25', 'CABANG PANGKALAN KERINCI', NULL, 'KONSUMTIF (meninggal dunia)', '07.02.17.00114.05.1.12.0', 'ANUAR R', '170000000', '170000000', '1', '153502350', NULL, '-', '-', '72', '2017-05-30', '2023-05-30', NULL, NULL, '0.9', NULL, NULL, 0, NULL),
(1353, '2018-04-03', '2018-04-10', '2018-04-16', 'CABANG PEMBANTU BELILAS', 'JL. LINTAS SELATAN RT 003 RW 002 KEC. SEBERIDA KAB. INDRAGIRI HULU', 'PRODUKTIF (meninggal dunia)', '07.02.17.00341.10.1.12.0', 'ISKANDAR', '99000000', '74250000', '0.75', '88862898', '-', 'TANAH PERUMAHAN', '200460000', '48', '2017-09-06', '2021-09-06', 'MENINGGAL DUNIA', 'PETANI SAWIT', NULL, NULL, NULL, 0, NULL),
(1354, '2018-03-14', '2018-04-27', '2018-04-30', 'KEDAI KUALA KILAN', 'DESA KUALA KILAN RT 002 RW 002 KECAMATAN BATANG CENAKU KABUPATEN INDRAGIRI HULU', 'PRODUKTIF', '07.02.16.00058.03.1.12.0', 'DENY EKO HARTONO', '40000000', '12000000', '0.3', '9891526', '-', 'TANAH PERKEBUNAN', '99000000', '60', '2016-03-23', '2021-03-23', 'OMSET MENURUN', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1355, '2018-02-26', '2018-04-20', '2018-04-23', 'CABANG PEMBANTU PERAWANG', 'JL. VI NO 15 KOMP. PERUM KOPKAR RT 004/RW 004 KEL. PERAWANG BARAT KEC. TUALANG', 'KONSUMTIF (PHK)', '07.02.15.00041.02.1.12.0', 'DEDI KUMARA', '50000000', '50000000', '1', '19507132', '0', 'TANAH ', '52530000', '60', '2015-02-25', '2020-02-25', 'PHK', 'KARYAWAN KOPERASI', NULL, NULL, NULL, 0, NULL),
(1356, '2018-02-12', '2018-03-23', '2018-03-29', 'CABANG SELATPANJANG', 'JL. PEMBANGUNAN II RT/RW 001/007 SELATPANJANG KOTA KEC. TEBING TINGGI KAB. KEP. MERANTI', 'PRODUKTIF KUR', '07.02.16.01051.12.4.12.0', 'RETNA WATI', '250000000', '187500000', '0.75', '164654365', '0', 'TANAH PERTANIAN', '219366667', '60', '2016-09-28', '2021-09-28', 'MUSIBAH KEBAKARAN', 'PERKEBUNAN CABE', NULL, NULL, NULL, 0, NULL),
(1357, '2018-02-12', '2018-03-19', '2018-03-20', 'KEDAI TELUK BELITUNG', 'DUSUN I BANDUL RT. 02/RW 01 DESA BANDUL KEC. TASIK', 'PRODUKTIF (meninggal dunia)', '07.02.17.00172.07.1.12.0', 'SAIFUL RIZAN', '20000000', '15000000', '0.75', '16279580', '0', 'TANAH PERKEBUNAN', '26785000', '24', '2017-06-15', '2019-06-15', 'MENINGGAL DUNIA', 'PERKEBUNAN CABE', NULL, NULL, NULL, 0, NULL),
(1358, '2018-02-08', '2018-03-19', '2018-04-12', 'KEDAI KUALA KILAN', 'DESA AUR CINA 008/004 KEC. BATANG CENAKU KAB. INHU', 'PRODUKTIF (meninggal dunia)', '07.02.14.00142.12.1.12.0', 'DESTAWATI', '100000000', '30000000', '0.3', '73766726', '-', 'TANAH PERKEBUNAN', '80000000', '96', '2014-12-08', '2022-12-08', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1359, '2018-02-08', '2018-03-23', '2018-04-12', 'CABANG BANGKINANG', 'BUKIT PAYUNG RT/RW 015/004 DESA BUKIT PAYUNG KEC. BANGKINANG SEBERANG KAB. KAMPAR', 'PRODUKTIF (meninggal dunia)', '07.02.16.00360.12.1.12.0', 'KAMIDI', '75000000', '22500000', '0.3', '70497764', '0', 'TANAH PERKEBUNAN', '-', '120', '2016-12-29', '2026-12-29', 'MENINGGAL DUNIA', 'UMKM', NULL, NULL, NULL, 0, NULL),
(1360, '2018-01-30', '2018-02-15', '2018-03-02', 'KEDAI KABUN', 'DESA ALIANTAN RT 007 RW 002 KEC. KABUN KAB. ROKAN HULU', 'PRODUKTIF', '07.02.16.00095.05.1.12.0', 'MAKMUR', '60000000', '30000000', '0.5', '26393586', '0', 'TANAH PERKEBUNAN', '45000000', '48', '2016-05-11', '2020-05-11', 'KESULITANN PEMASARAN', 'PERDAGANGAN ECERAN BAHAN HARIAN', NULL, NULL, NULL, 0, NULL),
(1361, '2018-01-22', '2018-02-15', '2018-03-02', 'KEDAI KUALA KILAN', 'DESA TALANG BERSEMI 008/003 KEC. BATANG CENAKU KAB. INHU', 'PRODUKTIF (meninggal dunia)', '07.02.17.00431.11.1.12.0', 'MURINGAH', '25000000', '7500000', '0.3', '24435352', '0', 'TANAH PERKEBUNAN', '270000000', '60', '2017-11-03', '2022-11-03', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1362, '2018-01-22', '2018-02-15', '2018-02-27', 'KEDAI BANDAR SEI KIJANG', 'LANGKAN RT 002 RW 001 DESA LANGKAN KEC. LANGGAM KAB. PELALAWAN', 'PRODUKTIF (meninggal dunia)', '07.02.17.00088.04.1.12.0', 'AFRINALDI', '100000000', '50000000', '0.5', '81238436', '0', 'TANAH PERKEBUNAN', '140175000', '36', '2017-04-21', '2020-04-21', 'MENINGGAL DUNIA', 'PERKEBUNAN SAWIT', '0.9', NULL, NULL, 0, NULL),
(1363, '2017-12-19', '2018-01-31', '2018-02-15', 'CABANG SELATPANJANG', 'JL. BANGLAS Gg. DULIA RT/RW 001/002 KEC. TEBING TINGGI KAB. KEP. MERANTI', 'PRODUKTIF KUR', '07.02.16.01064.12.4.12.0', 'HASRIZAL', '500000000', '375000000', '0.75', '344634380', '0', 'TANAH & BANGUNAN', '440400000', '60', '2016-12-02', '2021-12-02', 'OMSET MENURUN', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1364, '2017-12-12', '2018-01-30', '2018-02-21', 'CABANG PASIR PENGARAIAN', 'KAMPUNG BUKIT RT 003 RW 002 PASIR PENGARAIAN', 'PRODUKTIF KUR', '07.02.17.01197.01.4.12.0', 'HERI ISMANTO', '300000000', '225000000', '0.75', '211653750', '0', 'TANAH & BANGUNAN', '274648000', '60', '2016-12-09', '2021-12-09', 'OMSET MENURUN', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1365, '2017-11-29', '2018-01-15', '2018-01-30', 'KEDAI AIRTIRIS', 'JL. RAYA PEKANBARU - BANGKINANG K. 50 AIR TIRIS', 'PRODUKTIF', '07.02.16.00353.12.1.12.0', 'ALDI JUMAIDI', '95833331', '28749999', '0.3', '26757188', '0', 'TANAH & BANGUNAN', '199857000', '36', '2014-10-02', '2017-10-02', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1366, '2017-11-21', NULL, '2018-01-30', 'KEDAI TELUK BELITUNG', 'JL. PEDAS RT RW 02/02 DESA BAGAN MELIBUR KEC. MERBAU KAB. KEP. MERANTI', 'KONSUMTIF (meninggal dunia)', '07.02.16.00052.03.1.12.0', 'ERNA DISPITANINGSIH', '200000000', '200000000', '1', '186728329', 'TIDAK ADA', 'SK PNS', '0', '120', '2016-03-18', '2026-03-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL);
INSERT INTO `tblklaim` (`idKlaim`, `tglmasuk`, `tglberkas`, `tglklaimbayar`, `PPnama`, `PPalamat`, `produk`, `sertifikat`, `nmterjamin`, `plafond`, `nilai_jaminan`, `coverage`, `nominal_klaim`, `subrogasi`, `agunan`, `taksasi_agunan`, `Jkwaktu`, `tglawal`, `tglakhir`, `macet`, `sektor`, `cover_reas`, `klaim_reas`, `broker`, `status`, `no_telp`) VALUES
(1367, '2017-11-16', '2017-12-12', '2018-01-12', 'CABANG RANAI', 'SEPASIR 001/002 SELADING', 'PRODUKTIF KUR', '07.02.16.00217.11.4.12.0', 'ZAHARUDIN', '35000000', '26250000', '0.75', '23564464', '0', 'TANAH & BANGUNAN', '27000000', '48', '2016-11-23', '2020-11-23', 'OMSET MENURUN', 'BUDIDAYA IKAN', NULL, NULL, NULL, 0, NULL),
(1368, '2017-12-19', NULL, '0000-00-00', 'CABANG SELATPANJANG', 'JL. BANGLAS Gg. DULIA RT/RW 001/002 KEC. TEBING TINGGI KAB. KEP. MERANTI', 'PRODUKTIF KUR', '07.02.16.01064.12.4.12.0', 'HASRIZAL', '500000000', '375000000', '0.75', '344634380', '0', 'TANAH & BANGUNAN', '440400000', '60', '2016-12-02', '2021-12-02', 'OMSET MENURUN', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1369, '2017-12-12', NULL, '0000-00-00', 'CABANG PASIR PENGARAIAN', 'KAMPUNG BUKIT RT 003 RW 002 PASIR PENGARAIAN', 'PRODUKTIF KUR', '07.02.17.01197.01.4.12.0', 'HERI ISMANTO', '300000000', '225000000', '0.75', '211653750', '0', 'TANAH & BANGUNAN', '274648000', '60', '2016-12-09', '2021-12-09', 'OMSET MENURUN', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1370, '2017-12-11', NULL, '2017-12-29', 'KEDAI UKUI', 'KAMPUNG BARU UKUI PELALAWAN', 'PRODUKTIF', '07.02.16.00070.04.1.12.0', 'ADE SUGIARTO', '80000000', '24000000', '0.3', '19623197', '0', 'TANAH PERKEBUNAN', '92500000', '36', '2016-04-19', '2019-04-19', 'OMSET MENURUN', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1371, '2017-12-11', NULL, '2017-12-29', 'KEDAI TANDUN', 'TANDUN RT 004 RW 001 KEC. TANDUN KAB. ROHUL', 'PRODUKTIF', '07.02.16.00109.05.1.12.0', 'ARSON', '110000000', '82500000', '0.75', '70594680', '0', 'TANAH & BANGUNAN', '264760000', '60', '2016-05-26', '2021-05-26', 'OMSET MENURUN', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1372, '2017-11-29', NULL, '0000-00-00', 'KEDAI AIRTIRIS', 'JL. RAYA PEKANBARU - BANGKINANG K. 50 AIR TIRIS', 'PRODUKTIF', '07.02.16.00353.12.1.12.0', 'ALDI JUMAIDI', '95833331', '28749999', '0.3', '26757188', '0', 'TANAH & BANGUNAN', '199857000', '36', '2014-10-02', '2017-10-02', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1373, '2017-11-24', NULL, '2017-12-29', 'CABANG TELUK KUANTAN', 'LINGKUNGAN PASAR 006/003 KEC. BENAI', 'PRODUKTIF', '07.02.16.00010.09.4.12.0', 'ISKASARI', '50000000', '37500000', '0.75', '32767578', '0', 'TANAH PERKEBUNAN', '20488500', '48', '2016-09-19', '2020-09-19', 'HARGA JUAL RENDAH', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1374, '2017-11-22', NULL, '2017-12-29', 'KEDAI KABUN', 'DESA KABUN RT/RW 010/003 KEC KABUN KAB. ROHUL', 'PRODUKTIF', '07.02.16.00095.05.1.12.0', 'ARDIANTO', '60000000', '30000000', '0.5', '28290863', '0', 'TANAH LAHAN PERUMAHAN', '64500000', '48', '2016-05-11', '2020-05-11', 'OMSET MENURURN', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1375, '2017-11-21', NULL, '0000-00-00', 'KEDAI TELUK BELITUNG', 'JL. PEDAS RT RW 02/02 DESA BAGAN MELIBUR KEC. MERBAU KAB. KEP. MERANTI', 'KONSUMTIF (meninggal dunia)', '07.02.16.00052.03.1.12.0', 'ERNA DISPITANINGSIH', '200000000', '200000000', '1', '186728329', 'TIDAK ADA', 'SK PNS', '0', '120', '2016-03-18', '2026-03-18', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1376, '2017-11-16', NULL, '0000-00-00', 'CABANG RANAI', 'SEPASIR 001/002 SELADING', 'PRODUKTIF KUR', '07.02.16.00217.11.4.12.0', 'ZAHARUDIN', '35000000', '26250000', '0.75', '23564464', '0', 'TANAH & BANGUNAN', '27000000', '48', '2016-11-23', '2020-11-23', 'OMSET MENURUN', 'BUDIDAYA IKAN', NULL, NULL, NULL, 0, NULL),
(1377, '2017-11-06', NULL, '0000-00-00', 'CABANG PEMBANTU PANAM', 'JL. KUBANG Gg. ISTIQOMAH RT/RW 003/008  KEL. TUAH KARYA KEC. TAMPAN PEKANBARU', 'KONSUMTIF', '07.02.14.00127.11.1.12.0', 'DARWINSYAH', '200000000', '2000000', '1', '154978664', 'TIDAK ADA', 'SK', '-', '84', '2014-11-28', '2021-11-28', 'PHK', 'KARYAWAN', NULL, NULL, NULL, 0, NULL),
(1378, '2017-10-24', NULL, '0000-00-00', 'KEDAI TELUK BELITUNG', 'Selat Akar RT 002 RW 005 Kec. Merbau Kab. Kep. Meranti', 'PRODUKTIF', '07.02.16.00089.05.1.12.0', 'YUSUP', '50000000', '37500000', '0.75', '36252221', '0', 'TANAH & BANGUNAN', '41966667', '36', '2016-05-10', '2019-05-10', 'USAHA BANGKRUT', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1379, '2017-10-24', NULL, '2017-11-30', 'KEDAI TELUK BELITUNG', 'Jl. Balak RT 001 RW 008 Desa Bandul Kec. Tasik Putri Puyuh Kab. Kep. Meranti', 'PRODUKTIF', '07.02.16.00122.06.1.12.0', 'YUNITA', '50000000', '37500000', '0.75', '34528891', '0', 'TANAH & BANGUNAN', '59115000', '60', '2016-06-15', '2021-06-15', 'USAHA BANGKRUT', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1380, '2017-10-20', NULL, '2017-10-31', 'KEDAI TANDUN', 'Desa Kumain RT 002 RW 001 Kec. Tandun Kab. Rohul', 'PRODUKTIF', '07.02.15.00198.10.1.12.0', 'SUGENG', '60000000', '54000000', '0.9', '44521069', '0', 'TANAH PERKEBUNAN', '66000000', '48', '2015-10-20', '2019-10-20', 'OMSET MENURUN', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1381, '2017-10-20', NULL, '2017-10-31', 'KEDAI TANDUN', 'Desa Kumain RT 002 RW 001 Kec. Tandun Kab. Rohul', 'PRODUKTIF', '07.02.15.00198.10.1.12.0', 'ACH BAJURI', '60000000', '54000000', '0.9', '44521069', '0', 'TANAH PERKEBUNAN', '66000000', '48', '2015-10-21', '2019-10-21', 'OMSET MENURUN', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1382, '2017-10-05', NULL, '2017-11-30', 'CABANG PEMBANTU JALAN RIAU', 'JL. TUNAS KARYA Gg. MUTIARA RESIDANCE NO. 7 KEL. REJO SARI KEC. TENAYAN RAYA KOTA PEKANBARU', 'KONSUMTIF', '07.02.15.00129.07.1.12.0', 'DIMAS SETIAWAN', '25000000', '25000000', '1', '12244539', 'TIDAK ADA', 'SK ', '-', '36', '2015-07-27', '2018-07-27', 'PEMUTUSAN HUBUNGAN KERJA', 'KARYAWAN', NULL, NULL, NULL, 0, NULL),
(1383, '2017-09-26', NULL, '2017-11-17', 'PROTEKSI JAYA MANDIRI', 'JL. DATUK TABANO NO. 88 RT 002 RW 007 KEL. BANGKINANG KEC. BANGKINANG ', 'KONSUMTIF', '07.02.16.00204.09.1.12.0', 'MAHYUNAR', '80000000', '80000000', '1', '61651999', 'TIDAK ADA', 'SK PNS', '0', '48', '2016-04-29', '2020-04-29', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1384, '2017-09-22', NULL, '2017-10-24', 'PROTEKSI JAYA MANDIRI', 'JL. GURAMI RAYA NO. 04 RT 003 RW 011 KEL. LIMBUNGAN BARU KEC. RUMBAI PESISIR ', 'KONSUMTIF (meninggal dunia)', '07.02.16.00291.11.1.12.0', 'SUHARJO', '50000000', '50000000', '1', '31019963', 'TIDAK ADA', 'SK PNS', '0', '22', '2016-11-07', '2018-09-07', 'MENINGGAL DUNIA', 'PEGAWAI NEGERI SIPIL', NULL, NULL, NULL, 0, NULL),
(1385, '2017-09-18', NULL, '2017-10-24', 'KEDAI SUKARAMAI', 'DUSUN I SENAMA NENEK RT 004 RW 001 DESA SENAMA NENEK KEC. TAPUNG HULU', 'PRODUKTIF', '07.02.16.00355.12.1.12.0', 'JAMHOR', '75000000', '37500000', '0.5', '37109692', '-', 'TANAH PERKEBUNAN', '80500000', '36', '2016-12-22', '2019-12-22', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1386, '2017-09-18', NULL, '2017-10-24', 'KEDAI SUKARAMAI', 'DESA SENAMA NENEK RT 001 RW 001 KEC. TAPUNG HULU', 'PRODUKTIF', '07.02.16.00355.12.1.12.1', 'PARMAN', '75000000', '37500000', '0.5', '37109692', '-', 'TANAH PERKEBUNAN', '75000000', '36', '2016-12-22', '2019-12-22', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1387, '2017-09-11', NULL, '2017-10-04', 'KEDAI TANDUN', 'DESA KUMAIN RT 03 RW 01 KEC. TANDUN', 'PRODUKTIF', '07.02.15.00117.07.1.12.0', 'SAMUDIN SAHUD', '70000000', '63000000', '0.9', '55562499', '0', 'TANAH PERKEBUNAN', '78000000', '48', '2015-07-03', '2019-07-03', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1388, '2017-09-11', NULL, '0000-00-00', 'KEDAI TANDUN', 'DESA KUMAIN RT 03 RW 01 KEC. TANDUN', 'PRODUKTIF', '07.02.15.00117.07.1.12.1', 'PURNOMO', '50000000', '45000000', '0.9', '33663999', 'TIDAK ADA', 'TANAH KOSONG', '57000000', '48', '2015-07-14', '2019-07-14', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1389, '2017-09-05', NULL, '2017-10-04', 'KEDAI PASAR LUBUK JAMBI', 'DESA PANTAI 001/001 KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.16.00271.10.1.12.0', 'PARDI JUANTONI', '80000000', '60000000', '0.75', '58567126', '0', 'TANAH KOSONG', '157400000', '60', '2016-10-17', '2021-10-17', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1390, '2017-09-05', NULL, '2017-10-04', 'KEDAI PASAR LUBUK JAMBI', 'DESA BANJAR PADANG 003/003 KEC. KUANTAN MUDIK', 'PRODUKTIF', '07.02.16.00271.10.1.12.1', 'SUMAINI', '15000000', '7500000', '0.5', '4138577', '0', 'TANAH KOSONG', '76300000', '36', '2015-04-22', '2018-04-22', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1391, '2017-09-04', NULL, '2017-09-28', 'CABANG TANJUNG PINANG', 'KP. NOSARI TIMUR 02/15 KIJANG KOTA', 'PRODUKTIF', '07.02.16.00124.09.4.12.0', 'IIS SURYANI', '70000000', '52500000', '0.75', '49275073', '0', 'TANAH KOSONG', '30653333', '48', '2016-09-06', '2020-09-06', 'DEBITUR MACET', 'PERTANIAN HOLTIKULTURA', NULL, NULL, NULL, 0, NULL),
(1392, '2017-08-25', NULL, '0000-00-00', 'KEDAI KABUN', 'Kota Ranah RT 011 RW 004 Desa Koto Ranah Kec. Kabun', 'PRODUKTIF', '07.02.16.00095.05.1.12.0', 'SYAMSUL BAHRI', '40000000', '20000000', '0.5', '10217356', '0', 'TANAH KOSONG', '24000000', '36', '2016-05-11', '2019-05-11', 'USAHA MACET', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1393, '2017-08-23', NULL, '2017-10-04', 'CABANG PASIR PENGARAIAN', 'LENGGOPAN RT 02 RW 03 KEL. PASIR PENGARAIAN KEC. RAMBAH KAB. ROHUL', 'PRODUKTIF KUR', '07.02.16.00975.12.4.12.0', 'ARI SYAFRIANTO', '40000000', '30000000', '0.75', '29767018', '0', 'TANAH PERKEBUNAN', '36288000', '36', '2016-11-22', '2019-11-22', 'PIUTANG MACET', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1394, '2017-08-23', NULL, '2017-09-20', 'KEDAI DURIAN', 'JL. SEROJA PERUM BUMI MEGA LESTARI D. 12', 'PRODUKTIF', '07.02.14.00102.10.1.12.0', 'IRWANSYAH DALIMUNTHE', '70000000', '21000000', '0.3', '6489229', '0', 'TANAH & BANGUNAN', '85920000', '36', '2014-10-23', '2017-10-23', 'KALAH BERSAING', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1395, '2017-08-07', NULL, NULL, 'PROTEKSI JAYA MANDIRI', 'JL TAMAN KARYA KOMP. RIAU INDAH LESTARI BLOK A.14 RT 05 RW 06 KEL. TUAH KARYA KEC. TAMPAN KOTA PEKANBARU', 'KONSUMTIF', '-', 'SYAMSUL RAKHMAT', '430000000', '430000000', '1', '406808880', 'TIDAK ADA', 'TANAH & BANGUNAN', '-', '120', '2014-09-26', '2024-09-26', 'MENGUNDURKAN DIRI', 'KARYAWAN PT PER', NULL, NULL, NULL, 0, NULL),
(1396, '2017-08-03', NULL, '2017-09-29', 'KEDAI TELUK BELITUNG', 'Jl. Wan Husin RT/RW 01/02, Mengkirau, Kec Tasik Putri Puyuh, Kep. Meranti', 'PRODUKTIF', '07.02.16.00051.03.1.12.0', 'SAMBURI', '95000000', '71250000', '0.75', '62362374', '0', 'TANAH & BANGUNAN', '99450000', '36', '2016-03-10', '2019-03-10', 'USAHA TUTUP', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1397, '2017-07-26', NULL, '0000-00-00', 'KEDAI SUKARAMAI', 'PASAR LAMA SUKARAMAI', 'PRODUKTIF', '07.02.14.00029.04.1.12.0 ', 'KARDEL', '25000000', '18750000', '0.75', '10851990', 'TIDAK ADA', 'TANAH KOSONG', '22500000', '36', '2014-01-20', '2017-01-20', 'USAHA MACET', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1398, '2017-07-19', NULL, '2017-08-30', 'KOPKAR', 'Jl. Kelapa Sawit Gang Dolog I No. 12 B Pekanbaru', 'KONSUMTIF', '07.05.17.00024.02.1.12.0', 'BILLY FRANSESCOLI', '10000000', '10000000', '1', '9166666', 'TIDAK ADA', 'SK', '-', '24', '2017-01-01', '2019-01-01', 'PHK', 'PEGAWAI', NULL, NULL, NULL, 0, NULL),
(1399, '2017-06-28', NULL, '2017-08-30', 'KEDAI KUALA KILAN', 'Desa Talang Mulya 004/007 Kec. Batang Cenaku Kab. Inhu', 'PRODUKTIF (meninggal dunia)', '07.02.17.00049.03.1.12.0 ', 'HASIM ASNGARI', '50000000', '37500000', '0.75', '48061140', 'TIDAK ADA', 'TANAH', '35000000', '72', '2017-03-02', '2023-03-02', 'MENINGGAL DUNIA', 'PERTANIAN', NULL, NULL, NULL, 0, NULL),
(1400, '2017-06-13', NULL, '2017-07-14', 'CABANG SELATPANJANG', 'JL. SIDOHARJO DUSUN SIDOHARJO DESA KUNDUR KECAMATAN TEBING TINGGI', 'PRODUKTIF', '07.02.14.00026.04.1.12.0', 'MUSTAKIM', '30000000', '15000000', '0.5', '1766625', '0', 'TANAH & BANGUNAN', '31230000', '36', '2014-04-23', '2017-04-23', 'USAHA BANGKRUT', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1401, '2017-06-13', NULL, '0000-00-00', 'CABANG SELATPANJANG', 'JL PELAJAR RT 01 RW 04 ALAH AIR', 'PRODUKTIF', '07.02.14.00051.06.1.12.0', 'SUPIAN', '120000000', '120000000', '1', '91371627', '0', 'TANAH & BANGUNAN', '197108500', '120', '2014-06-06', '2024-06-06', 'USAHA BANGKRUT', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1402, '2017-05-16', NULL, '2017-06-21', 'KEDAI PASAR PANGKALAN KERINCI', 'JL. LINTAS TIMUR RT/RW 005/002 MEKAR JAYA KEC. PKL KERINCI', 'PRODUKTIF', '07.02.14.00140.12.1.12.0', 'MARATUAH LUBIS', '65000000', '19500000', '0.3', '7855818', '0', 'TANAH & BANGUNAN', '60000000', '36', '2014-12-17', '2017-12-17', 'USAHA TIDAK JALAN', 'JASA ( BENGKEL LAS)', NULL, NULL, NULL, 0, NULL),
(1403, '2017-05-02', NULL, '2017-06-07', 'KEDAI TELUK BELITUNG', 'JL. NELAYAN RT/RW 05/01 KEL. TELUK BELITUNG KEC. MERBAU', 'KONSUMTIF (meninggal dunia)', '07.02.14.00105.10.1.12.0', 'MUSLIANI', '210000000', '210000000', '1', '185095900', 'TIDAK ADA', 'PENGHASILAN DEBITUR DARI INSTANSI ', '-', '120', '2014-10-27', '2024-10-27', 'MENINGGAL DUNIA', 'PEGAWAI', NULL, NULL, NULL, 0, NULL),
(1404, '2017-04-25', NULL, '2017-06-07', 'KEDAI TELUK BELITUNG', 'JL. KONDUR KEL. TELUK BELITUNG. KEC. MERBAU, KEP. MERANTI', 'PRODUKTIF (meninggal dunia)', '07.02.16.00089.05.1.12.0', 'HARISAH', '30000000', '22500000', '0.75', '18295838', 'TIDAK ADA', 'TANAH & BANGUNAN', '271800000', '36', '2016-05-19', '2019-05-19', 'MENINGGAL DUNIA', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1405, '2017-04-18', NULL, '2017-05-22', 'CABANG PEMBANTU TANJUNG BATU', 'JL. RENGKUM RT 02 RW 01 KEL. TANJUNGBATU BARAT ', 'PRODUKTIF (meninggal dunia)', '07.02.17.00020.01.1.12.0', 'M. TOHA', '25000000', '18750000', '0.75', '24185284', 'TIDAK ADA', 'TANAH & BANGUNAN', '82290000', '24', '2016-01-20', '2018-01-20', 'MENINGGAL DUNIA', 'SOPIR JASA TRANSPORTASI', NULL, NULL, NULL, 0, NULL),
(1406, '2017-04-12', NULL, '2017-05-09', 'KEDAI KUALA KILAN', 'DESA ALIM RT 03 RW 02 KEC. BATANG CENAKU KAB. INHU', 'PRODUKTIF', '07.02.14.00020.03.1.12.0', 'TARMIZI', '40000000', '12000000', '0.3', '2780013', '444000', 'TANAH KOSONG &SEPEDA MOTOR', '56344667', '36', '2014-03-25', '2017-03-25', 'OMSET MENURUN', 'JUAL BELI', NULL, NULL, NULL, 0, NULL),
(1407, '2017-04-03', NULL, '2017-07-11', 'CABANG PASAR PUSAT', 'JL. RAJAWALI SAKTI Gg. SYAMSUL ALIMIN NO. 59 KEC. TAMPAN PEKANBARU', 'BANK GARANSI', '07.02.15.00071.05.2.PB.12.0', 'PT. PAGAR ALAM PERKASA', '652350000', '652350000', '1', '521800000', 'TIDAK ADA', 'CASH COLLATERAL 20%', '-', '620 (HARI)', '2016-05-18', NULL, 'PUTUS KONTRAK', 'JASA KONSTRUKSI', NULL, NULL, NULL, 0, NULL),
(1408, '2017-03-31', NULL, '2017-05-31', 'CABANG PEMBANTU SOREK', 'JL. LINTAS TIMUR SOREK SATU KEC. PKL. KURAS KAB. PELALAWAN', 'PRODUKTIF', '07.02.16.00067.03.1.12.0', 'M. NUR', '180000000', '135000000', '0.75', '143951168', '-', 'TANAH & BANGUNAN', '336000000', '12', '2016-03-18', '2017-03-18', 'KALAH BERSAING', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1409, '2017-03-30', NULL, '0000-00-00', 'KEDAI MARPOYAN', 'JL. UNGGAS Gg. DELIMA KEL. SIMPANG TIGA, BUKIT RAYA', 'PRODUKTIF', '07.02.14.00073.08.1.12.0', 'SARIAMAN', '25000000', '12500000', '0.5', '6062101', '-', 'Q', '258635000', '36', '2014-08-14', '2017-08-14', 'KALAH BERSAING', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1410, '2017-03-23', NULL, '2017-05-22', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'PASAR SUNGAI GUNTUNG RT 002 RW 002 KEC. KATEMAN KAB. INDRAGIRI HILIR', 'PRODUKTIF', '07.02.14.00012.02.1.12.0', 'SUCIPTO', '150000000', '87000000', '0.7', '46859057', '0', 'TANAH & BANGUNAN', '144729500', '48', '2014-02-06', '2018-02-06', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1411, '2017-03-20', NULL, '2017-04-07', 'KEDAI PASAR LUBUK JAMBI', 'DESA SANGAU 001/001 KEC. KUANTAN MUDIK', 'PRODUKTIF (meninggal dunia)', '07.02.16.00186.08.1.12.0', 'KARTINI', '80000000', '60000000', '0.75', '72305240', '0', 'TANAH & BANGUNAN', '89000000', '36', '2016-08-28', '2019-08-28', 'MENINGGAL DUNIA', 'BENGKEL MOTOR DAN BARANG HARIAN', NULL, NULL, NULL, 0, NULL),
(1412, '2017-02-27', NULL, '0000-00-00', 'KEDAI PASAR PANGKALAN KERINCI', 'Gg. MERANTI RT 05 RW 05 PANGKALAN KERINCI KAB. PELALAWAN', 'PRODUKTIF', '07.02.15.00054.03.1.12.0', 'SRI WAHYUNI', '50000000', '25000000', '0.5', '20457292', '0', 'TANAH KOSONG &SEPEDA MOTOR', '30300000', '36', '2015-03-03', '2018-03-03', 'DEBITUR PINDAH DIKARENAKAN MASALAH KELUARGA', 'WARNET', NULL, NULL, NULL, 0, NULL),
(1413, '2017-02-27', NULL, '0000-00-00', 'KEDAI PASAR PANGKALAN KERINCI', 'JL LINTAS TIMUIR PANGKALAN KERINCI Gg. 2000 KAB. PELALAWAN', 'PRODUKTIF', '07.02.15.00065.04.1.12.0', 'NURASMA', '15000000', '4500000', '0.3', '3150531', '0', 'SEPEDA MOTOR', '7500000', '24', '2015-04-07', '2017-04-07', 'OMSET MENURUN', 'JUALAN MARTABAK & ES CENDOL', NULL, NULL, NULL, 0, NULL),
(1414, '2017-02-27', NULL, '2017-03-31', 'CABANG SELATPANJANG', 'JL SIDOMULYO KEL. SELATPANJANG TIMUR', 'PRODUKTIF', '07.02.14.00050.06.1.12.0', 'HENDRI YOHANES', '50000000', '15000000', '0.3', '5023781', '0', 'TANAH & BANGUNAN', '225360000', '36', '2014-06-11', '2017-06-11', 'OMSET MENURUN', 'PAKAIAN JADI', NULL, NULL, NULL, 0, NULL),
(1415, '2017-02-22', NULL, '0000-00-00', 'CABANG PEMBANTU TANGKERANG', 'PERUM CENDANA TAHAP III BLOK D KEL. TANGKERANG TIMUR', 'PRODUKTIF', '07.02.14.00138.12.1.12.0', 'POSMAN', '25000000', '12500000', '0.5', '10111939', 'TIDAK ADA', 'TANAH & BANGUNAN', '43136400', '36', '2014-12-03', '2017-12-03', 'OMSET MENURUN', 'BENGKEL SEPEDA MOTOR & WARUNG MAKAN', NULL, NULL, NULL, 0, NULL),
(1416, '2017-01-18', NULL, '2017-03-06', 'CABANG SELATPANJANG', 'JL RINTIS RT 04 RW 08 SELATPANJANG SELATAN', 'PRODUKTIF', '07.02.15.00156.09.1.12.0', 'HAIRUNA', '20000000', '18000000', '0.9', '14398539', '2900000', 'TANAH & BANGUNAN', '83194000', '24', '2015-09-11', '2017-09-11', 'DEBITUR SERING SAKIT & OMSET MENURUN', 'USAHA DAGANG HARIAN', NULL, NULL, NULL, 0, NULL),
(1417, '2017-01-04', NULL, '2017-02-22', 'KEDAI TANDUN', 'Desa Kumain RT 019 RW 005 Kec Tandun Kab. Rohul', 'PRODUKTIF (meninggal dunia)', '07.02.16.00042.02.1.12.0', 'DARMI', '90000000', '81000000', '0.9', '79248060', 'TIDAK ADA', 'TANAH PERKEBUNAN', '-', '60', '2016-02-25', '2021-02-25', 'MENINGGAL DUNIA', 'PERKEBUNAN', NULL, NULL, NULL, 0, NULL),
(1418, '2016-12-30', NULL, '2017-12-21', 'CABANG PEMBANTU RUMBAI', 'JL CENDRAWASIH NO. 05', 'KONSUMTIF (PHK)', '07.02.15.00038.02.1.12.0', 'ENGRIANI', '196889868', '196889868', '1', '30000000', 'TIDAK ADA', 'SELURUH HARTA TERJAMIN DAN GAJI', '-', '24', '2015-02-05', '2017-02-05', 'PHK', 'PEGAWAI PT BANK RIAU KEPRI', NULL, NULL, NULL, 0, NULL),
(1419, '2016-12-21', NULL, '2017-01-17', 'KOPKAR', 'JL. Prof. M. YAMIN BANGKINANG KOTA RT 01 RW 04', 'KONSUMTIF (meninggal dunia)', '07.05.16.00013.05.1.12.0', 'HASANUDDIN', '50000000', '50000000', '1', '43749998', 'TIDAK ADA', 'TANAH & BANGUNAN', '0', '48', '2016-04-30', '2020-04-30', 'MENINGGAL DUNIA', 'PEGAWAI PT BANK RIAU KEPRI', NULL, NULL, NULL, 0, NULL),
(1420, '2016-12-14', NULL, '2017-02-16', 'KEDAI AIRTIRIS', 'Dusun Sopang Lereng RT. 06/02 Desa Merangin Kec. Bangkinang Barat', 'PRODUKTIF', '07.02.14.00057.03.1.12.0', 'ROSMAWATI', '150000000', '45000000', '0.3', '29996186', '0', 'TANAH & BANGUNAN', '28000000', '48', '2015-03-23', '2019-03-23', 'GAGAL PANEN KARNA BANJIR', 'PERTANIAN', NULL, NULL, NULL, 0, NULL),
(1421, '2016-11-22', NULL, '2017-01-17', 'KEDAI PERANAP', 'DESA SEMELINANG TEBING 02/01 KEC. PERANAP KAB. INHU', 'PRODUKTIF', '07.02.15.00026.02.1.12.0', 'LUDIA SASTRA', '25000000', '18750000', '0.75', '10175125', '8392300', 'TANAH & BANGUNAN', '66837167', '24', '2015-02-20', '2017-02-20', 'PRODUKSI GAGAL', 'PERKEBUNAN SAWIT', NULL, NULL, NULL, 0, NULL),
(1422, '2016-04-11', NULL, '2017-04-26', 'BPR UNISRITAMA', 'JL RIAU Gg NURI No. 08', 'KONSUMTIF (PHK)', '07.04.16.00001.01.1.12.0', 'SAIDINA UMAR', '100000000', '100000000', '1', '40103224', 'TIDAK ADA', 'SK YLPI Nomor 112/KEP.B/YLPI-IX/2012', '-', '60', '2016-01-08', '2021-01-08', 'PHK', 'PEGAWAI YLPI', NULL, NULL, NULL, 0, NULL),
(1423, '2017-12-28', NULL, '2016-01-29', 'KEDAI TANDUN', 'DESA KUMAIN RT 016 RW 003 KEC. TANDUN KAB. ROHUL', 'PRODUKTIF (meninggal)', '07.02.15.00098.06.1.12.0', 'SALIAH', '75000000', '67500000', '1', '68793864', '0', 'TANAH & BANGUNAN', '131184000', '48 BLN', '2015-06-19', '2019-06-19', 'DEBITUR MENINGGAL DUNIA', 'PERKEBUNAN (SAWIT)', NULL, NULL, NULL, 0, 'Bank: 0828-83039191'),
(1424, '2016-12-28', NULL, '2016-12-30', 'KEDAI LUBUK JAMBI', 'Desa Lubuk Ramo Kec. Kuantan Mudik Kab. Kuansing', 'PRODUKTIF', '07.02.15.00130.07.1.12.0', 'BUSTANI', '13000000', '6500000', '0.5', '3607461', '1050000', 'TANAH', '35000000', '24 BLN', '2015-07-09', '2017-07-09', 'KEBUN SAWIT RUSAK KARENA ASAP', 'PERKEBUNAN (SAWIT)', NULL, NULL, NULL, 0, '085272181626 Bank: 0811-7535951'),
(1425, '2016-12-15', NULL, '2016-12-30', 'KEDAI AIR TIRIS', 'Dusun IV Tanjung Rambutan RT 002 RW 001', 'PRODUKTIF', '07.02.14.00055.06.1.12.0', 'NAILAT HIDAYATI', '50000000', '25000000', '0.5', '9040729', '2840000', 'TANAH & PERKEBUNAN', '(1) 27160000 & (2) 28000000', '36 BLN', '2014-06-23', '2017-06-23', 'OMSET MENURUN KARENA BANJIR BESAR', 'PERTANIAN (Kebun Karet & Kebun Sayur)', NULL, NULL, NULL, 0, '082288183508 Bank: 0762-21631'),
(1426, '2016-11-11', NULL, '2016-12-30', 'KEDAI PASAR TANDUN', 'Desa Tandun RT 020 RW 07', 'KONSUMTIF', '07.02.15.00141.08.1.12.0', 'NGATIMIN', '60000000', '60000000', '1', '49365846', '0', 'SKGK No. 131.8/SKGK/TDN/V/2012', '63900000', '60 BLN', '2015-08-11', '2020-08-11', 'PHK', 'PEGAWAI BUMN', NULL, NULL, NULL, 0, 'Bank: 0828-83039191'),
(1427, '2016-10-19', NULL, '0000-00-00', 'CABANG PEMBANTU PANAM', 'JL. Delima Komp. Delima Puri blok Q 10', 'PRODUKTIF', '07.02.14.00045.05.1.12.0', 'HERLINA', '70000000', '35000000', '0.35', '33257382', 'TIDAK ADA', 'TANAH', '21000000', '48 BLN', '2014-05-26', '2018-05-26', 'OMSET MENURUN', 'PERDAGANGAN', NULL, NULL, NULL, 0, NULL),
(1428, '2016-09-30', NULL, '2016-10-27', 'KEDAI PASAR PANGKALAN KERINCI', NULL, 'PRODUKTIF', '07.02.15.00065.04.1.12.0', 'ZUBIR', '40000000', '20000000', '0.5', '17676679', '3700000', 'TANAH & BANGUNAN', '31250000', '36 BLN', '2015-04-23', '2015-04-23', 'OMSET MENURUN', 'JASA (BENGKEL)', NULL, NULL, NULL, 0, '081268843499 Bank: 0761-493365'),
(1429, '2016-09-30', NULL, '2016-10-28', 'KEDAI PASAR PANGKALAN KERINCI', NULL, 'PRODUKTIF', '07.02.15.00006.01.1.12.0', 'MANSUR', '50000000', '15000000', '0.3', '12761769', '3810000', 'TANAH & PERKEBUNAN', '100000000', '36 BLN', '2015-01-20', '2018-01-20', 'OMSET MENURUN', 'PERKEBUNAN', NULL, NULL, NULL, 0, '081268843499 Bank: 0761-493366'),
(1430, '2016-09-23', NULL, '2016-10-26', 'KEDAI TELUK BELITUNG', NULL, 'KONSUMTIF (meninggal dunia)', '07.02.15.00127.07.1.12.0', 'ROPIANTO', '60000000', '60000000', '1', '41539849', 'TIDAK ADA', 'SK TERAKHIR III/c No. Kpts. 832.3BKPP-PM/2004/007 Tanggal 08-09-2014', '0', '36 BLN', '2015-07-10', '2015-07-10', 'MENINGGAL DUNIA', 'PEGAWAI', NULL, NULL, NULL, 0, '085374573338 Bank: 0822-88279696'),
(1431, '2016-09-22', NULL, '2016-09-30', 'CABANG PEMBANTU BASERAH', 'Dusun Penghijauan Desa Pasarbaru Kec. Pangean kab. Kuantan Sengingi', 'PRODUKTIF', '07.02.15.00084.05.1.12.0', 'SUHARDI', '50000000', '25000000', '0.5', '19444444', '0', 'TANAH & BANGUNAN', '37500000', '36 BLN', '2015-05-18', '2016-05-18', 'USAHA TUTUP KARENA TAMBAK IKAN TERKENA BANJIR', 'PETERNAKAN (BUDI DAYA IKAN AIR TAWAR)', NULL, NULL, NULL, 0, 'Bank: 0761-21077/21073'),
(1432, '2016-09-21', NULL, '0000-00-00', 'BPR UNISRITAMA', NULL, 'KONSUMTIF', '07.04.15.00001.11.1.12.0', 'ANDY HIDAYAH', '100000000', '100000000', '1', '88533923', 'TIDAK ADA', 'SK YLPI 088/KEP.B/YLPI-VIII/2015', '-', '60 BLN', '2016-10-23', '2020-10-23', 'MENINGGAL DUNIA', 'PEGAWAI', NULL, NULL, NULL, 0, 'Bank : 0761-63381'),
(1433, '2016-06-08', NULL, '2016-07-01', 'CABANG SELAT PANJANG', 'JL. PARIT SENANG KEDABU RAPAT RANGSANG BARAT', 'PRODUKTIF', '07.02.15.00126.07.1.12.0', 'AL HAKIM', '50000000', '45000000', '0.9', '40839599', '4000000', 'TANAH PERKEBUNAN', '58000000', '36 BLN', '2015-07-10', '2018-07-10', 'OMSET MENURUN DRASTIS DAN PIUTANG TIDAK TERTAGIH', 'PERTANIAN (PERKEBUNAN TANAMAN KOPI)', NULL, NULL, NULL, 0, '081378409378 Bank: 0763-31079/32704'),
(1434, '2016-06-08', NULL, '2016-07-01', 'CABANG SELAT PANJANG', 'JL. KANDIS RT/RW. 004/002 RENAK DUNGUN KAB. KEPULAUAN MERANTI', 'PRODUKTIF', '07.02.14.00005.01.1.12.1', 'NASIRAN', '30000000', '15000000', '-0.5', '6135895', '0', 'TANAH PERKEBUNAN', '38849999', '35 BLN', '2014-01-24', '2017-01-24', 'USAHA TUTUP, OMSET MENURUN DRASTIS', 'PEDAGANG (ECERAN KOMIDITI/DAGANG SEMBAKO)', NULL, NULL, NULL, 0, '082389738776 Bank: 0763-31079/32703'),
(1435, '2016-06-03', NULL, '2016-06-21', 'KEDAI MARPOYAN', 'JL. PEPAYA NO.32 KEL. JADIREJO KEC.SUKAJADI', 'PRODUKTIF', '07.02.14.00052.06.1.12.0', 'FAUZAN', '15000000', '11250000', '0.75', '5469505', '0', 'SEPEDA MOTOR', '10000000', '24 BLN', '2014-06-25', '2016-06-25', 'USAHA TIDAK LANCAR, KALAH SAING DAN OMSET MENURUN', 'PERDAGANGAN (PERCETAKAN DAN FOTOKOPI)', NULL, NULL, NULL, 0, '081275399034 Bank: 0761-674179'),
(1436, '2016-05-26', NULL, '2016-07-25', 'KOPKAR', 'JL. ASRAMA TRIBRATA GG. ALAMANDA DURI', 'KONSUMTIF', '07.05.15.00008.12.1.12.0', 'IRMA AGUSRINI', '37499996', '37499996', '1', '34374995', '0', '-', '0', '36 BLN', '2015-12-31', '2018-12-31', 'PHK', 'PEGAWAI (PINJAMAN MULTIGUNA/PEMBELIAN ALAT RUMAH TANGGA)', NULL, NULL, NULL, 0, '081371319139 (YULI)'),
(1437, '2016-05-16', NULL, '2016-06-06', 'CABANG PEMBANTU JALAN RIAU', 'JL. PERUM PONDOK MAYANG NO. 09 KEL. SAIL PEKANBARU', 'PRODUKTIF (meninggal)', '07.02.14.00151.12.1.12.0', 'HASBULLAH SANI', '40000000', '30000000', '0.75', '25107522', '0', 'TANAH & BANGUNAN', '156000000', '36 BLN', '2014-12-16', '2017-12-16', 'DEBITUR MENINGGAL DUNIA', 'JASA (BENGKEL CAT DAN MODIFIKASI MOBIL)', NULL, NULL, NULL, 0, 'Bank: 0761-39448/39450'),
(1438, '2016-04-26', NULL, '2016-06-06', 'CABANG SELAT PANJANG', 'JL. TENGKU UMAR SELAT PANJANG KEL. SELATPANJANG KOTA', 'PRODUKTIF', '07.02.14.00139.12.1.12.0', 'CV. AISYAH NUR SYAMS', '100000000', '50000000', '0.5', '47703292', '0', 'TANAH & BANGUNAN', '146625000', '48 BLN', '2014-12-02', '2018-12-02', 'OMSET MENURUN DRASTIS (ADANYA KOMPETITOR)', 'PERDAGANGAN (AIR MINUM ISI ULANG \"AQUANAS\")', NULL, NULL, NULL, 0, '085356808517 Bank: 0763-31079/32704'),
(1439, '2016-04-25', NULL, '2016-06-06', 'CABANG SELAT PANJANG', 'JL. RINTIS RT. 01/08 SELAT PANJANG', 'PRODUKTIF', '07.02.14.00110.10.1.12.0', 'IRSYAD', '150000000', '75000000', '0.5', '61752651', '0', 'TANAH & BANGUNAN', '159000000', '60 BLN', '2014-10-14', '2019-10-14', 'OMSET MENURUN DRASTIS', 'PERDAGANGAN (ECERAN/DAGANG SENDAL DAN SEPATU)', NULL, NULL, NULL, 0, '081268866817 Bank: 0763-31079/32704'),
(1440, '2016-04-25', NULL, '2016-06-06', 'CABANG SELAT PANJANG', 'JL. PENGARAM KEC. TEBING TINGGI KAB. KEP. MERANTI', 'PRODUKTIF', '07.02.15.00044.02.1.12.0', 'RUDI YANTO', '30000000', '15000000', '0.5', '13145944', '0', 'TANAH & BANGUNAN', '33000000', '36 BLN', '2015-02-23', '2018-02-23', 'OMSET MENURUN DRASTIS DAN PIUTANG TIDAK TERTAGIH', 'PERDAGANGAN (ECERAN KOMIDITI/BERJUALAN TAS)', NULL, NULL, NULL, 0, '081378659595 Bank: 0763-31079/32704'),
(1441, '2016-04-22', NULL, '2016-06-30', 'CABANG PEMBANTU JALAN RIAU', 'JL. BANGUN KARYA NO. 87 KEC. TAMPAN PEKANBARU', 'PRODUKTIF', '07.02.15.00239.01.1.12.0', 'BAMBANG UTAMA RIKO', '160000000', '80000000', '0.5', '66666668', '0', 'TANAH & BANGUNAN', '180164444', '48 BLN', '2015-01-26', '2019-01-26', 'OMSET MENURUN', 'PERDAGANGAN (RUMAH MAKAN)', NULL, NULL, NULL, 0, '081371441088 Bank: 0761-39448/39450'),
(1442, '2016-03-22', NULL, '2016-05-03', 'KEDAI KABUN', 'KOTO RANAH RT 006 RW 003 KEC. KABUN', 'PRODUKTIF', '07.02.15.00151.09.1.12.0', 'HEDI', '100000000', '30000000', '0.3', '29806696', '2206696', 'TANAH & BANGUNAN', '103950000', '36 BLN', '2015-06-23', '2018-06-23', 'OMSET MENURUN', 'PERDAGANGAN (JUAL BELI GETAH KARET)', NULL, NULL, NULL, 0, '082883039155 Bank: 0828-83039155'),
(1443, '2016-02-23', NULL, '2016-03-29', 'KEDAI TELUK BELITUNG', 'JL. A. YANI RT/RW 003/001 TELUK BELITUNG', 'PRODUKTIF', '07.02.14.00104.10.1.12.0 ', 'TAMSIR', '60000000', '45000000', '0.75', '42816037', '3000000', 'TANAH & BANGUNAN', '187987500', '48 BLN', '2014-10-10', '2018-10-10', 'USAHA TUTUP', 'JASA (BENGKEL DAN CUCIAN MOTOR)', NULL, NULL, NULL, 0, '085374573338 Bank: 0822-88279696'),
(1444, '2016-02-21', NULL, '2016-03-14', 'KEDAI PASAR PANGKALAN KERINCI', 'JL. PEMDA GG. BERANGIN RT 04 RW 07 PANGKALAN KERINCI', 'PRODUKTIF', '07.02.15.00054.03.1.12.0', 'DARUSALAM', '60000000', '30000000', '0.5', '28572303', '3425000', 'TANAH & BANGUNAN', '153800000', '36 BLN', '2015-04-03', '2018-05-03', 'USAHA TUTUP (PRODUK TIDAK LAKU)', 'PERDAGANGAN (DAGANG PAKAIAN()', NULL, NULL, NULL, 0, '081268843499 Bank: 0761-493365'),
(1445, '2016-02-16', NULL, '2016-03-08', 'CABANG SELAT PANJANG', 'JL. BELUKAP SELAT AKAR', 'PRODUKTIF', '07.02.14.00018.03.1.12.0', 'INDRA SAPUTRA', '30000000', '15000000', '0.5', '11511258', '0', 'TANAH & BANGUNAN', '38000000', '48 BLN', '2014-11-03', '2018-11-03', 'USAHA TUTUP (OMSET MENURUN)', 'PERDAGANGAN (PULSA PONSEL)', NULL, NULL, NULL, 0, '081277953789 Bank: 0763-31079/32704');

-- --------------------------------------------------------

--
-- Table structure for table `tblkol`
--

CREATE TABLE `tblkol` (
  `KOLid` int(11) NOT NULL,
  `KOLnama` varchar(255) DEFAULT NULL,
  `KOLproduktif` varchar(255) DEFAULT NULL,
  `KOLnonproduktif` varchar(255) DEFAULT NULL,
  `KOLjumlah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblkpp`
--

CREATE TABLE `tblkpp` (
  `KPPid` int(11) NOT NULL,
  `KPPnama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkpp`
--

INSERT INTO `tblkpp` (`KPPid`, `KPPnama`) VALUES
(1, 'BANK'),
(2, 'LEMBAGA KEUANGAN BUKAN BANK');

-- --------------------------------------------------------

--
-- Table structure for table `tblkur`
--

CREATE TABLE `tblkur` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `nomor_akad` varchar(225) NOT NULL,
  `tanggal_akad` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `nilai_akad` bigint(11) NOT NULL,
  `nomor_penjaminan` varchar(225) NOT NULL,
  `kode_cabang` int(11) DEFAULT NULL,
  `nama_cabang` varchar(255) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkur`
--

INSERT INTO `tblkur` (`id`, `nama`, `alamat`, `nomor_akad`, `tanggal_akad`, `tgl_jatuh_tempo`, `nilai_akad`, `nomor_penjaminan`, `kode_cabang`, `nama_cabang`, `bulan`, `date_created`, `date_modified`, `tanggal_terbit`, `tanggal_selesai`, `status`) VALUES
(13923, 'LIA KURNIAWATI', 'BERUMBUNG BARU RT 1 RW 2 Kel. BERUMBUNG BARU Kec. DAYUN Kab. SIAK', '1132015.290.1.2.21.163   ', '2021-02-22', '2024-02-22', 60000000, '07.02.21.28354.02.4.12.0', NULL, 'KEDAI DAYUN', 'Januari', 1620611518, 1620611518, '2021-04-28', '2024-02-28', 1),
(13924, 'IRMA JUWITA ', 'RANTAU KASAI RT 6 RW 2 Kel. TAMBUSAI UTARA Kec. TAMBUSAI UTARA Kab. ROKAN HULU ', '11321150132012021179', '2021-02-19', '2026-02-19', 150000000, '07.02.21.28355.02.4.12.0', NULL, 'KEDAI RANTAU KASAI', 'Januari', 1620611518, 1620611518, '2021-04-28', '2026-02-28', 1),
(13925, 'ABDUL MAJID ', 'DUSUN CEMPAKA RT 1 RW 1 Kel. BURUK BAKUL Kec. BUKIT BATU Kab. BENGKALIS ', '014.1.06.2021.124        ', '2021-02-22', '2024-02-22', 12000000, '07.02.21.28356.02.4.12.0', NULL, 'CAPEM SEI PAKNING', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13926, 'ISWANTO ', 'JL. KESUMA GG REZEKI RT 10 RW  Kel. JAYA MUKTI Kec. DUMAI TIMUR Kab. KOTA DUMAI ', '06.1.58.2021.104         ', '2021-02-18', '2024-02-18', 80000000, '07.02.21.28357.02.4.12.0', NULL, 'CABANG DUMAI', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13927, 'MAHATMA NIRWANA', 'JL. MERANTI RT/RW 001/008 DS. MANDI ANGIN KEC. MINAS', '009.1.01.2021.147        ', '2021-02-22', '2024-02-22', 150000000, '07.02.21.28358.02.4.12.0', NULL, 'KEDAI PASAR MINAS', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13928, 'ABDUL RAHMAN', 'JALUR II DUSUN I RT 3 RW 1 Kel. KIJANG MAKMUR Kec. TAPUNG HILIR Kab. KAMPAR', '0018.1.01.2021.178       ', '2021-02-22', '2025-02-22', 100000000, '07.02.21.28359.02.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13929, 'MAWANG TRANGGONO', 'JL.ANGGREK VIII RT 008 RW 004 DESA INDRA PURI KEC.TAPUNG', '0008.2.01.2021.178       ', '2021-02-22', '2026-02-22', 200000000, '07.02.21.28360.02.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611518, 1620611518, '2021-03-28', '2026-02-28', 1),
(13930, 'AL KHODRI', 'DESA SEKIJANG RT 2 RW 1 Kel. SEKIJANG Kec. TAPUNG HILIR Kab. KAMPAR', '0019.1.01.2021.178       ', '2021-02-22', '2025-02-22', 100000000, '07.02.21.28361.02.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13931, 'SARMINI', 'SUNGAI KUNING RT 13 RW 4 Kel. SUNGAIKUNING Kec. SINGINGI Kab. KUANTAN SINGINGI', '00009.58.01.2021.173     ', '2021-02-22', '2025-02-22', 100000000, '07.02.21.28362.02.4.12.0', NULL, 'KEDAI PASAR MUARA LEMBU', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13932, 'YANHERI', 'JL. DT BANDARO RT 2 RW 3 Kel. MUARA LEMBU Kec. SINGINGI Kab. KUANTAN SINGINGI', '00001.58.01.2021.173     ', '2021-02-22', '2024-02-22', 50000000, '07.02.21.28363.02.4.12.0', NULL, 'KEDAI PASAR MUARA LEMBU', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13933, 'KARDI', 'SUKA DAMAI RT 2 RW 1 Kel. SUKA DAMAI Kec. SINGINGI HILIR Kab. KUANTAN SINGINGI', '00011.58.01.2021.173     ', '2021-02-22', '2025-02-22', 100000000, '07.02.21.28364.02.4.12.0', NULL, 'KEDAI PASAR MUARA LEMBU', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13934, 'DARISMAN', 'DUSUN SANTUL RT 4 RW 2 Kel. SUNGAI JALAU Kec. KAMPAR UTARA Kab. KAMPAR', '0007.1.06.2021.142       ', '2021-02-22', '2024-02-22', 50000000, '07.02.21.28365.02.4.12.0', NULL, 'KEDAI PASAR AIR TIRIS', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13935, 'SUDI SAPUTRA ', 'JL.GELATIK RT 3 RW  Kel. GURUN PANJANG Kec. BUKIT KAPUR Kab. KOTA DUMAI ', '1132113.028.1.2021.151   ', '2021-02-18', '2024-02-18', 25000000, '07.02.21.28366.02.4.12.0', NULL, 'KEDAI PASAR BUKIT KAPUR', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13936, 'ASROFI HIDAYATH', 'BTN BUKIT KAPUR INDAH RT 4 RW  Kel. BUKIT NANAS Kec. BUKIT KAPUR Kab. KOTA DUMAI', '1132113.029.1.2021.151   ', '2021-02-18', '2024-02-18', 50000000, '07.02.21.28367.02.4.12.0', NULL, 'KEDAI PASAR BUKIT KAPUR', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13937, 'TOGI HAMONANGAN SIANTURI', 'JL.SOEKARNO HATTA RT 25 RW  Kel. KAYU KAPUR Kec. BUKIT KAPUR Kab. KOTA DUMAI', '1132113.030.1.2021.151   ', '2021-02-19', '2024-02-19', 100000000, '07.02.21.28368.02.4.12.0', NULL, 'KEDAI PASAR BUKIT KAPUR', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13938, 'ASIKIN ', 'BIDA AYU BLK V NO.72 RT 3 RW 12 Kel. MANGSANG Kec. SEI BEDUK Kab. KOTA BATAM ', '010.1.06.2021.132        ', '2021-02-22', '2025-02-22', 150000000, '07.02.21.28369.02.4.12.0', NULL, 'CAPEM LUBUK BAJA', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13939, 'SUPRIYANTO', 'JL. SEGAR RT 3 RW 26 Kel. REJOSARI Kec. TENAYAN RAYA Kab. KOTA PEKANBARU', '011.01.06.2021.140       ', '2021-02-22', '2024-02-22', 25000000, '07.02.21.28370.02.4.12.0', NULL, 'KEDAI PASAR SAIL', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13940, 'JUMINO', 'DUSUN SRI BANGUN RT 5 RW 3 Kel. SEPOTONG Kec. SIAK KECIL Kab. BENGKALIS', '0016.1.06.2021.124       ', '2021-02-22', '2025-02-22', 60000000, '07.02.21.28371.02.4.12.0', NULL, 'CAPEM SEI PAKNING', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13941, 'ROSTINI NOVIYANA', 'JL.MERAK II RT 3 RW 4 Kel. TANJUNG HARAPAN Kec. SINGKEP Kab. LINGGA', '006.1.06.2021.125        ', '2021-02-19', '2024-02-19', 30000000, '07.02.21.28372.02.4.12.0', NULL, 'CAPEM DABO SINGKEP', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13942, 'PESTA HUTA BALIAN', 'DUSUN BUKIT RINDANG.DESA MARGA MULYA RT 3 RW 1 Kel. MARGA MULYA Kec. RAMBAH SAMO Kab. ROKAN HULU', '72.0010.2021.115         ', '2021-02-22', '2024-02-22', 100000000, '07.02.21.28373.02.4.12.0', NULL, 'CABANG PASIR PANGARAIAN', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13943, 'YATIYEM', 'DUSUN MANGGA MAKMUR RT 6 RW 2 Kel. SINTONG MAKMUR Kec. TANAH PUTIH Kab. ROKAN HILIR', '11320150061012021169     ', '2021-02-22', '2025-02-22', 150000000, '07.02.21.28374.02.4.12.0', NULL, 'CAPEM UJUNG TANJUNG', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13944, 'SUPIANTA BANGUN', 'LUBUK KEBUN RT 2 RW 2 Kel. LUBUK KEBUN Kec. LOGAS TANAH DARAT Kab. KUANTAN SINGINGI', '021.2.72.2021.155        ', '2021-02-22', '2025-02-22', 80000000, '07.02.21.28375.02.4.12.0', NULL, 'CAPEM BASERAH', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13945, 'SITI SADIAH', 'JL. SIMPANG LATIF RT 11 RW  Kel. BASILAM BARU Kec. SUNGAI SEMBILAN Kab. KOTA DUMAI', '010.58.1.01.2021.190     ', '2021-02-22', '2024-02-22', 30000000, '07.02.21.28376.02.4.12.0', NULL, 'KEDAI SUNGAI SEMBILAN', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13946, 'SETIONO', 'Jl.Hutan Lindung No.48 RT.003 Rw.005 Kel.Tanjungpinang Timur Kec.Bukit Bestari Kota Tanjungpinang', '0006.2.08.2021.162       ', '2021-02-19', '2025-02-19', 140000000, '07.02.21.28377.02.4.12.0', NULL, 'KEDAI PASAR TANJUNG PINANG', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13947, 'OMRI', 'JL.BARU RT 3 RW 1 Kel. RANTAU BAIS Kec. TANAH PUTIH Kab. ROKAN HILIR', '11320150071012021169     ', '2021-02-23', '2025-02-23', 115000000, '07.02.21.28378.02.4.12.0', NULL, 'CAPEM UJUNG TANJUNG', 'Januari', 1620611518, 1620611518, '2021-03-28', '2025-02-28', 1),
(13948, 'SRI WIDIARTI', 'JL. YOS SUDARSO RT 1 RW 11 Kel. MINAS JAYA Kec. MINAS Kab. SIAK', '010.1.01.2021.147        ', '2021-02-23', '2024-02-23', 50000000, '07.02.21.28379.02.4.12.0', NULL, 'KEDAI PASAR MINAS', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13949, 'TITIN AGUSTINA', 'KM. 14 SINTONG RT 6 RW 2 Kel. SINTONG Kec. TANAH PUTIH Kab. ROKAN HILIR', '11320150081012021169     ', '2021-02-23', '2024-02-23', 50000000, '07.02.21.28380.02.4.12.0', NULL, 'CAPEM UJUNG TANJUNG', 'Januari', 1620611518, 1620611518, '2021-03-28', '2024-02-28', 1),
(13950, 'SUSI INDRAYANI', 'SRI GADING RT 7 RW 3 Kel. SRI GADING Kec. LUBUK DALAM Kab. SIAK', '1132115.006.2.01.2021.160', '2021-02-23', '2026-02-23', 400000000, '07.02.21.28381.02.4.12.0', NULL, 'CAPEM LUBUK DALAM', 'Januari', 1620611518, 1620611518, '2021-03-28', '2026-02-28', 1),
(13951, 'SIDIQ HARYANTO ', 'BERUMBUNG BARU RT 6 RW 2 Kel. BERUMBUNG BARU Kec. DAYUN Kab. SIAK ', '1132015.291.1.2.21.163   ', '2021-02-23', '2024-02-23', 200000000, '07.02.21.28382.02.4.12.0', NULL, 'KEDAI DAYUN', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13952, 'SRI LESTARI', 'JL. JENDRAL A. YANI RT 1 RW 1 Kel. SIALANG SAKTI Kec. DAYUN Kab. SIAK', '1132015.289.1.2.21.163   ', '2021-02-23', '2025-02-23', 100000000, '07.02.21.28383.02.4.12.0', NULL, 'KEDAI DAYUN', 'Januari', 1620611519, 1620611519, '2021-03-28', '2025-02-28', 1),
(13953, 'MUHAMMAD RUSTAM NST. ', 'JL. KAMPUNG BARU RT 3 RW 4 Desa MUARA BASUNG Kec. PINGGIR Kab. BENGKALIS ', '00015.58.01.2021.158     ', '2021-02-23', '2024-02-23', 50000000, '07.02.21.28384.02.4.12.0', NULL, 'KEDAI PASAR PINGGIR', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13954, 'HERMAN', 'JL. DAMAI RT 14 RW  Kel. LUBUK GAUNG Kec. SUNGAI SEMBILAN Kab. KOTA DUMAI', '011.58.1.01.2021.190     ', '2021-02-23', '2024-02-23', 150000000, '07.02.21.28385.02.4.12.0', NULL, 'KEDAI SUNGAI SEMBILAN', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13955, 'JUMIRAN', 'TITIAN RESAK RT 004 RW 001 KEC. SEBERIDA KAB. INHU', '4022.1.01.2021.133       ', '2021-02-23', '2024-02-23', 100000000, '07.02.21.28386.02.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13956, 'FITRIADI', 'PONDOK INTI PT. MNIS INDRASAKTI ESTATE RT 009 RW 004 DESA BANDAR PADANG KEC.SEBERIDA KAB.INHU', '4023.1.01.2021.133       ', '2021-02-23', '2024-02-23', 60000000, '07.02.21.28387.02.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13957, 'BANGUN SOLIKIN ', 'TALANG MULYA RT 17 RW 8 Kel. TALANG MULYA Kec. BATANG CENAKU Kab. INDRAGIRI HULU ', '4021.1.01.2021.133       ', '2021-02-22', '2024-02-22', 50000000, '07.02.21.28388.02.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13958, 'SUNARTO', 'LUBUK RAMO RT 3 RW 2 Kel. LUBUK RAMO Kec. KUANTAN MUDIK Kab. KUANTAN SINGINGI', '010.1.01.2021.168        ', '2021-02-23', '2024-02-23', 50000000, '07.02.21.28389.02.4.12.0', NULL, 'KEDAI PASAR LUBUK JAMBI', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13959, 'YATINEM', 'TITIAN RESAK RT 7 RW 2 Kel. TITIAN RESAK Kec. SIBERIDA Kab. INDRAGIRI HULU', '4024.1.01.2021.133       ', '2021-02-23', '2023-02-23', 25000000, '07.02.21.28390.02.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611519, 1620611519, '2021-03-28', '2023-02-28', 1),
(13960, 'MHD. KARYOTO', 'HIBRIDA JAYA RT 11 RW 6 Kel. HIBRIDA JAYA Kec. TELUK BELENGKONG Kab. INDRAGIRI HILIR', '9031.1.06.2021.148       ', '2021-02-23', '2023-02-23', 50000000, '07.02.21.28391.02.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611519, 1620611519, '2021-03-28', '2023-02-28', 1),
(13961, 'SYAFAATIN NURROHMAH', 'DESA HIBRIDA JAYA RT 12 RW 6 Kel. HIBRIDA JAYA Kec. TELUK BELENGKONG Kab. INDRAGIRI HILIR', '9034.1.06.2021.148       ', '2021-02-23', '2024-02-23', 50000000, '07.02.21.28392.02.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13962, 'RESFAUZI', 'DESA KINALI RT 3 RW 3 Kel. KINALI Kec. KUANTAN MUDIK Kab. KUANTAN SINGINGI', '011.1.01.2021.168        ', '2021-02-23', '2024-02-23', 50000000, '07.02.21.28393.02.4.12.0', NULL, 'KEDAI PASAR LUBUK JAMBI', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13963, 'ANDI SURYADI', 'JALUR 8 RT 12 RW 6 Kel. SRI DAMAI Kec. PULAU BURUNG Kab. INDRAGIRI HILIR', '9030.1.06.2021.148       ', '2021-02-23', '2024-02-23', 50000000, '07.02.21.28394.02.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13964, 'MUKMINAH', 'DESA HIBRIDA MULYA RT 5 RW 2 Kel. HIBRIDA MULIA Kec. TELUK BELENGKONG Kab. INDRAGIRI HILIR', '9033.1.06.2021.148       ', '2021-02-23', '2024-02-23', 50000000, '07.02.21.28395.02.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13965, 'ARIF SUDARWANTO', 'DESA HIBRIDA JAYA RT.009 RW.005 KEC.TELUK BELENGKONG KAB.INDRAGIRI HILIR RIAU', '9032.1.06.2021.148       ', '2021-02-23', '2024-02-23', 25000000, '07.02.21.28396.02.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13966, 'ZULKOFRI', 'JL. LINTAS DURI-PEKANBARU RT 2 RW 1 Kel. PINGGIR Kec. PINGGIR Kab. BENGKALIS', '00016.58.01.2021.158     ', '2021-02-23', '2023-02-23', 25000000, '07.02.21.28397.02.4.12.0', NULL, 'KEDAI PASAR PINGGIR', 'Januari', 1620611519, 1620611519, '2021-03-28', '2023-02-28', 1),
(13967, 'FAHRUL ATHORI', 'TANDUN RT 5 RW 2 Kel. TANDUN Kec. TANDUN Kab. ROKAN HULU', '58.003.1.2021.177        ', '2021-02-23', '2024-02-23', 40000000, '07.02.21.28398.02.4.12.0', NULL, 'KEDAI PASAR TANDUN', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13968, 'UJANG GENTI', 'JL.UMBAN SARI GG.RANTAU SARI NO.14 RT 1 RW 8 Kel. UMBAN SARI Kec. RUMBAI Kab. KOTA PEKANBARU', '0002.1.06.2021.165       ', '2021-02-22', '2025-02-22', 60000000, '07.02.21.28399.02.4.12.0', NULL, 'CAPEM AHMAD YANI PEKANBARU', 'Januari', 1620611519, 1620611519, '2021-03-28', '2025-02-28', 1),
(13969, 'MERRY', 'SUNGAI PANCUR BLK.A RT 1 RW 1 Kel. TANJUNG PIAYU Kec. SEI BEDUK Kab. KOTA BATAM', '012.1.06.2021.132        ', '2021-02-23', '2023-02-23', 50000000, '07.02.21.28400.02.4.12.0', NULL, 'CAPEM LUBUK BAJA', 'Januari', 1620611519, 1620611519, '2021-03-28', '2023-02-28', 1),
(13970, 'MARZUKI', 'JL. JEND. SUDIRMAN RT 1 RW 1 Kel. TENGGAYUN Kec. BANDAR LAKSAMANA Kab. BENGKALIS', '015.1.06.2021.124        ', '2021-02-23', '2025-02-23', 300000000, '07.02.21.28401.02.4.12.0', NULL, 'CAPEM SEI PAKNING', 'Januari', 1620611519, 1620611519, '2021-03-28', '2025-02-28', 1),
(13971, 'ANSAR YUSUF ', 'BESIKA JAYA RT 2 RW 1 Kel. PULAUBURUNG Kec. PULAU BURUNG Kab. INDRAGIRI HILIR ', '9036.1.06.2021.148       ', '2021-02-23', '2024-02-23', 150000000, '07.02.21.28408.02.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13972, 'NURDIN SOLIH SIREGAR', 'DUSUN LEMBAH SUBUR RT 4 RW 2 Kel. BUKIT KEMUNING Kec. TAPUNG HULU Kab. KAMPAR', '0008.1.01.2021.159       ', '2021-02-23', '2025-02-23', 100000000, '07.02.21.28409.02.4.12.0', NULL, 'KEDAI PASAR SUKARAMAI', 'Januari', 1620611519, 1620611519, '2021-03-28', '2025-02-28', 1),
(13973, 'RATNA SUSANTI', 'JL. BATU TAMBUN TENGAH RT 5 RW 2 Kel. TAREMPA SELATAN Kec. SIANTAN Kab. KEPULAUAN ANAMBAS', '002.1.05.2021.170        ', '2021-02-23', '2025-02-23', 150000000, '07.02.21.28410.02.4.12.0', NULL, 'CAPEM TAREMPA', 'Januari', 1620611519, 1620611519, '2021-03-28', '2025-02-28', 1),
(13974, 'MARZILAH', 'SEBELE RT 2 RW 3 Kel. SEBELE Kec. BELAT Kab. KARIMUN', '  7009.1.06.2021.123     ', '2021-02-22', '2024-02-22', 50000000, '07.02.21.28411.02.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13975, 'SIPTANIA PUTRI ', 'SEBELE RT 1 RW 4 Kel. SEBELE Kec. BELAT Kab. KARIMUN ', '  7010.1.06.2021.123     ', '2021-02-22', '2024-02-22', 50000000, '07.02.21.28412.02.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13976, 'MOHD. MUHTAROM', 'JL. PARIT BARU RT 5 RW 1 Kel. SEI SEBESI Kec. KUNDUR Kab. KARIMUN', '  7011.1.06.2021.123     ', '2021-02-23', '2024-02-23', 30000000, '07.02.21.28413.02.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13977, 'TOFIK RAHMAT ', 'JALAN.A.MANAF TG.BATU KOTA RT 3 RW 5 Kel. TANJUNGBATU KOTA Kec. KUNDUR Kab. KARIMUN ', '  7012.1.06.2021.123     ', '2021-02-23', '2022-02-23', 20000000, '07.02.21.28414.02.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611519, 1620611519, '2021-03-28', '2022-02-28', 1),
(13978, 'RINTAMI BUCIKAMIIS', 'JALUR 3 B DUSUN SUKA MAJU RT 12 RW 4 Kel. SUNGAIKUNING Kec. SINGINGI Kab. KUANTAN SINGINGI', '00012.58.01.2021.173     ', '2021-02-23', '2025-02-23', 200000000, '07.02.21.28415.02.4.12.0', NULL, 'KEDAI PASAR MUARA LEMBU', 'Januari', 1620611519, 1620611519, '2021-03-28', '2025-02-28', 1),
(13979, 'CIOU LIANG / LIYANTO', 'JL. H. UNGAR LR. MURSALA NO.63 RT 3 RW 2 Kel. TANJUNG AYUN SAKTI Kec. BUKIT BESTARI Kab. KOTA TANJUNG PINANG', '0007.2.06.2021.162       ', '2021-02-23', '2026-02-23', 150000000, '07.02.21.28416.02.4.12.0', NULL, 'KEDAI PASAR TANJUNG PINANG', 'Januari', 1620611519, 1620611519, '2021-03-28', '2026-02-28', 1),
(13980, 'RUDI PUTRA', 'DESA KOTA BARU RT 21 RW 8 Kel. KOTA BARU Kec. TAPUNG HILIR Kab. KAMPAR', '0016.1.06.2021.122       ', '2021-02-24', '2024-02-24', 100000000, '07.02.21.28417.02.4.12.0', NULL, 'CAPEM DURI', 'Januari', 1620611519, 1620611519, '2021-03-28', '2024-02-28', 1),
(13981, 'ALRIN CHANDRA', 'JL. PROYEK RT 1 RW 3 Kel. BATU PANJANG Kec. RUPAT Kab. BENGKALIS', '475.58.1.01.2021.181     ', '2021-02-24', '2025-02-24', 150000000, '07.02.21.28420.02.4.12.0', NULL, 'KEDAI BATUPANJANG RUPAT', 'Januari', 1620611519, 1620611519, '2021-03-28', '2025-02-28', 1),
(13982, 'RIRI FEBRINA', 'PETAPAHAN RT 1 RW 3 Kel. PETAPAHAN Kec. GUNUNGTOAR Kab. KUANTAN SINGINGI', '013.1.01.2021.168        ', '2021-02-24', '2025-02-24', 60000000, '07.02.21.28421.02.4.12.0', NULL, 'KEDAI PASAR LUBUK JAMBI', 'Januari', 1620611520, 1620611520, '2021-03-28', '2025-02-28', 1),
(13983, 'KIKI FITRIA', 'AIR BULUH RT 1 RW 1 Kel. AIR BULUH Kec. KUANTAN MUDIK Kab. KUANTAN SINGINGI', '012.1.01.2021.168        ', '2021-02-24', '2024-02-24', 130000000, '07.02.21.28422.02.4.12.0', NULL, 'KEDAI PASAR LUBUK JAMBI', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(13984, 'PRISTON GULTOM', 'DUSUN IV LADING TINGGAL RT 4 RW 3 Kel. SENAMA NENEK Kec. TAPUNG HULU Kab. KAMPAR', '0009.101.2021.159        ', '2021-02-24', '2024-02-24', 150000000, '07.02.21.28423.02.4.12.0', NULL, 'KEDAI PASAR SUKARAMAI', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(13985, 'IRFAN RINALDI', 'PANTAI RT 1 RW 1 Kel. PANTAI Kec. KUANTAN MUDIK Kab. KUANTAN SINGINGI', '015.1.01.2021.168        ', '2021-02-24', '2024-02-24', 150000000, '07.02.21.28424.02.4.12.0', NULL, 'KEDAI PASAR LUBUK JAMBI', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(13986, 'MUFIL HIDAYAH', 'PANTAI RT 1 RW 2 Kel. PANTAI Kec. KUANTAN MUDIK Kab. KUANTAN SINGINGI', '014.1.01.2021.168        ', '2021-02-24', '2024-02-24', 100000000, '07.02.21.28425.02.4.12.0', NULL, 'KEDAI PASAR LUBUK JAMBI', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(13987, 'ANANDA PRAYOGI', 'JL.UTAMA RT 5 RW  Kel. KAMPUNG BARU Kec. BUKIT KAPUR Kab. KOTA DUMAI', '1132113.033.1.2021.151   ', '2021-02-24', '2023-02-24', 50000000, '07.02.21.28426.02.4.12.0', NULL, 'KEDAI PASAR BUKIT KAPUR', 'Januari', 1620611520, 1620611520, '2021-03-28', '2023-02-28', 1),
(13988, 'TITI AYU PANGESTI', 'TIBAN LAMA RT 1 RW 4 Kel. TIBAN LAMA Kec. SEKUPANG Kab. KOTA BATAM', '002.2.05.2021.146        ', '2021-02-24', '2026-02-24', 150000000, '07.02.21.28427.02.4.12.0', NULL, 'CAPEM TANJUNG UBAN', 'Januari', 1620611520, 1620611520, '2021-03-28', '2026-02-28', 1),
(13989, 'ALFIAN', 'SIMP. IV. BELILAS RT 12 RW 3 Kel. PANGKALAN KASAI Kec. SIBERIDA Kab. INDRAGIRI HULU', '0004.58.02.2021.176      ', '2021-02-23', '2024-02-23', 130000000, '07.02.21.28428.02.4.12.0', NULL, 'KEDAI KUALA KILAN', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(13990, 'YUDHI PRATAMA', 'BUKIT INDAH RT 7 RW 4 Kel. BUKIT INDAH Kec. RAKIT KULIM Kab. INDRAGIRI HULU', '0006.58.02.2021.176      ', '2021-02-24', '2025-02-24', 85000000, '07.02.21.28429.02.4.12.0', NULL, 'KEDAI KUALA KILAN', 'Januari', 1620611520, 1620611520, '2021-03-28', '2025-02-28', 1),
(13991, 'DARYONO ', 'TANJUNG PIAYU LAUT RT 1 RW 10 Kel. TANJUNG PIAYU Kec. SEI BEDUK Kab. KOTA BATAM ', '013.1.06.2021.132        ', '2021-02-24', '2024-02-24', 50000000, '07.02.21.28430.02.4.12.0', NULL, 'CAPEM LUBUK BAJA', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(13992, 'SITI KHOLIJAH', 'DUSUN BAGANSINEMBAH RT 1 RW 1 Kel. BAGAN SINEMBAH Kec. BAGAN SINEMBAH Kab.  ROKAN HILIR', '006.1.58.2021.129        ', '2021-02-24', '2025-02-24', 150000000, '07.02.21.28431.02.4.12.0', NULL, 'CAPEM BAGAN BATU', 'Januari', 1620611520, 1620611520, '2021-03-28', '2025-02-28', 1),
(13993, 'JESAYAS EDDY PARSAORAN MEHA ', 'PETAPAHAN RT 29 RW 6 Kel. PETAPAHAN Kec. TAPUNG Kab. KAMPAR ', '0020.1.06.2021.178       ', '2021-02-24', '2025-02-24', 500000000, '07.02.21.28432.02.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611520, 1620611520, '2021-03-28', '2025-02-28', 1),
(13994, 'MULFAIZAH', 'JL. DIPONEGORO RT 2 RW 2 Kel. TANJUNGBATU KOTA Kec. KUNDUR Kab. KARIMUN', '  7014.1.06.2021.123     ', '2021-02-24', '2025-02-24', 150000000, '07.02.21.28433.02.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611520, 1620611520, '2021-03-28', '2025-02-28', 1),
(13995, 'SUNJAYA', 'DUSUN III BATU TUMBANG RT 2 RW 2 Kel. SAWANG SELATAN Kec. KUNDUR BARAT Kab. KARIMUN', '  7013.1.06.2021.123     ', '2021-02-24', '2025-02-24', 100000000, '07.02.21.28434.02.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611520, 1620611520, '2021-03-28', '2025-02-28', 1),
(13996, 'SRI DEWI PRATIWI', 'JL. M. SALIM RT 3 RW 1 DESA PINGGIR Kec. PINGGIR Kab. BENGKALIS', '00018.58.06.2021.158     ', '2021-02-24', '2023-02-24', 25000000, '07.02.21.28435.02.4.12.0', NULL, 'KEDAI PASAR PINGGIR', 'Januari', 1620611520, 1620611520, '2021-03-28', '2023-02-28', 1),
(13997, 'AMRAN', 'UJUNG GURAB RT 1 RW 2 Kel. RAMBAH HILIR TIMUR Kec. RAMBAH HILIR Kab. ROKAN HULU', '72.0011.2021.115         ', '2021-02-24', '2026-02-24', 200000000, '07.02.21.28436.02.4.12.0', NULL, 'CABANG PASIR PANGARAIAN', 'Januari', 1620611520, 1620611520, '2021-03-28', '2026-02-28', 1),
(13998, 'JULISTINA', 'JL. JEND. SUDIRMAN RT 2 RW 6 Kel. BATANG DUKU Kec. BUKIT BATU Kab. BENGKALIS', '0017.1.01.2021.124       ', '2021-02-24', '2024-02-24', 50000000, '07.02.21.28437.02.4.12.0', NULL, 'CAPEM SEI PAKNING', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(13999, 'JUMAAN', 'JL. BERINGIN RT.022 RW.006 DESA HARAPAN BARU KEC. MANDAU - DURI', '0014.1.06.2021.122       ', '2021-02-23', '2024-02-23', 150000000, '07.02.21.28438.02.4.12.0', NULL, 'CAPEM DURI', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(14000, 'SURIANA', 'JL. BANGUN SARI RT 3 RW 2 Kel. BATHIN BETUAH Kec. MANDAU Kab. BENGKALIS', '0015.1.06.2021.122       ', '2021-02-23', '2024-02-23', 150000000, '07.02.21.28439.02.4.12.0', NULL, 'CAPEM DURI', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(14001, 'MUSRINGAIDAH', 'DUSUN MUARA RT 1 RW 4 Kel. SELAT GUNTUNG Kec. SABAK AUH Kab. SIAK', '009.1.01.2021.189        ', '2021-02-24', '2024-02-24', 30000000, '07.02.21.28440.02.4.12.0', NULL, 'KEDAI SABAK AUH', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(14002, 'ISMAN', 'DUSUN HARAPAN JAYA RT 2 RW 1 Kel. SUNGAINIBUNG Kec. SIAK KECIL Kab. BENGKALIS', '010.1.01.2021.189        ', '2021-02-24', '2024-02-24', 100000000, '07.02.21.28441.02.4.12.0', NULL, 'KEDAI SABAK AUH', 'Januari', 1620611520, 1620611520, '2021-03-28', '2024-02-28', 1),
(14003, 'RIKKI FAUZI', 'Parit Mentel Desa Kembang Mekar Sari', '9004.1.06.2021.175       ', '2021-02-23', '2024-02-23', 100000000, '07.02.21.28442.02.4.12.0', NULL, 'CAPEM KOTA BARU', 'Januari', 1620611521, 1620611521, '2021-03-28', '2024-02-28', 1),
(14004, 'WIRMAN', 'Telaga Tujuh RT.001 RW.001 Desa Telaga Tujuh Kecamatan Durai Kabupaten Karimun', '  017.1.06.2021.111      ', '2021-02-24', '2024-02-24', 50000000, '07.02.21.28443.02.4.12.0', NULL, 'CABANG TANJUNG BALAI KARIMUN', 'Januari', 1620611521, 1620611521, '2021-03-28', '2024-02-28', 1),
(14005, 'NAHARUDDIN', 'KOMP. PERMATA ANDALAN BLOK C NO. 5 RT 5 RW 8 Kel. PANGKALAN KERINCI TIMUR Kec. PANGKALAN KERINCI Kab. PELALAWAN', '0009.1.06.2021.156       ', '2021-02-24', '2025-02-24', 150000000, '07.02.21.28444.02.4.12.0', NULL, 'KEDAI PASAR PANGKALAN KERINCI', 'Januari', 1620611521, 1620611521, '2021-03-28', '2025-02-28', 1),
(14006, 'SURYA SYAHPUTRA', 'PERUM PELITA INDAH PERMAI RT 7 RW 6 Kel. PANGKALAN KERINCI TIMUR Kec. PANGKALAN KERINCI Kab. PELALAWAN', '0010.1.01.2021.156       ', '2021-02-24', '2025-02-24', 200000000, '07.02.21.28446.02.4.12.0', NULL, 'KEDAI PASAR PANGKALAN KERINCI', 'Januari', 1620611521, 1620611521, '2021-03-28', '2025-02-28', 1),
(14007, 'BASRI', 'BUKIT BATU RT 005/003', '0018.1.06.2021.124       ', '2021-02-25', '2023-02-25', 35000000, '07.02.21.28450.02.4.12.0', NULL, 'CAPEM SEI PAKNING', 'Januari', 1620611521, 1620611521, '2021-03-28', '2023-02-28', 1),
(14008, 'RINIA PRIANTI', 'SUMBER SARI DESA MAYANG SARI RT.001 RW.001 KEC. PANGKALAN LESUNG KAB, PELALAWAN', '049.2.01.2021.130        ', '2021-02-25', '2026-02-25', 180000000, '07.02.21.28451.02.4.12.0', NULL, 'CAPEM SOREK', 'Januari', 1620611521, 1620611521, '2021-03-28', '2026-02-28', 1),
(14009, 'SUTINO', 'DESA BERINGIN INDAH RT.002 RW.003 KEC. PANGKALAN KURAS KAB. PELALAWAN', '050.2.01.2021.130        ', '2021-02-25', '2026-02-25', 200000000, '07.02.21.28452.02.4.12.0', NULL, 'CAPEM SOREK', 'Januari', 1620611521, 1620611521, '2021-03-28', '2026-02-28', 1),
(14010, 'HELFERI', 'JL.YOSSUDARSO KM.23 RT 1 RW 1 Kel. MUARAFAJAR TIMUR Kec. RUMBAI Kab. KOTA PEKANBARU', '011.1.01.2021.147        ', '2021-02-25', '2024-02-25', 150000000, '07.02.21.28453.02.4.12.0', NULL, 'KEDAI PASAR MINAS', 'Januari', 1620611521, 1620611521, '2021-03-28', '2024-02-28', 1),
(14011, 'ISHAK YUSAR', 'ALIANTAN RT 6 RW 2 Kel. ALIANTAN Kec. KABUN Kab. ROKAN HULU', '006.1.01.2021.164        ', '2021-02-25', '2024-02-25', 150000000, '07.02.21.28454.02.4.12.0', NULL, 'KEDAI KABUN', 'Januari', 1620611521, 1620611521, '2021-03-28', '2024-02-28', 1),
(14012, 'IRWANSYAH', 'Jl Kinanti KM II RT.004 RW.001 Desa Pinggir', '00017.58.01.2021.158     ', '2021-02-25', '2024-02-25', 100000000, '07.02.21.28455.02.4.12.0', NULL, 'KEDAI PASAR PINGGIR', 'Januari', 1620611521, 1620611521, '2021-03-28', '2024-02-28', 1),
(14013, 'ERNA WAHYUNI ', 'RANTAU SAKTI RT 18 RW 5 Kel. RANTAU SAKTI Kec. TAMBUSAI UTARA Kab. ROKAN HULU ', '022.58.1.01.2021.179', '2021-02-26', '2024-02-26', 100000000, '07.02.21.28456.02.4.12.0', NULL, 'KEDAI RANTAU KASAI', 'Januari', 1620611521, 1620611521, '2021-03-28', '2024-02-28', 1),
(14014, 'DEWI YANTI ', 'AIR MOLEK I RT 3 RW 3 Kel. AIR MOLEK Kec. PASIR PENYU Kab. INDRAGIRI HULU ', '5002.1.06.2021.110       ', '2021-02-25', '2025-02-25', 500000000, '07.02.21.28457.02.4.12.0', NULL, 'CABANG AIR MOLEK', 'Januari', 1620611521, 1620611521, '2021-03-28', '2025-02-28', 1),
(14015, 'ADE JENI PUTRA', 'JL.MELUR NO.30 RT 1 RW 2 Kel. KEDUNGSARI Kec. SUKAJADI Kab. KOTA PEKANBARU', '002.1.06.2021.145        ', '2021-02-26', '2025-02-26', 150000000, '07.02.21.28458.02.4.12.0', NULL, 'KEDAI JALAN DURIAN', 'Januari', 1620611521, 1620611521, '2021-03-28', '2025-02-28', 1),
(14016, 'ILOT', 'DUSUN TUO RT 2 RW 1 Kel. DUSUN TUO Kec. KUANTAN HILIR Kab. KUANTAN SINGINGI', '022.1.58.2021.155        ', '2021-02-25', '2024-02-25', 30000000, '07.02.21.28459.02.4.12.0', NULL, 'CAPEM BASERAH', 'Januari', 1620611521, 1620611521, '2021-03-28', '2024-02-28', 1),
(14017, 'SUHADI', 'Jl. Mawar 3 RT 005 RW 002 Desa Batang Batindih Kec Rumbio Jaya Kab Kampar', '0008.1.01.2021.142       ', '2021-02-25', '2025-02-25', 150000000, '07.02.21.28460.02.4.12.0', NULL, 'KEDAI PASAR AIR TIRIS', 'Januari', 1620611521, 1620611521, '2021-03-28', '2025-02-28', 1),
(14018, 'ERLANGGA ABDI NEGARA', 'PASAR BARU BASERAH RT 5 RW 2 Kel. PASAR BARU Kec. KUANTAN HILIR Kab. KUANTAN SINGINGI', '023.1.58.2021.155        ', '2021-02-26', '2025-02-26', 120000000, '07.02.21.28461.02.4.12.0', NULL, 'CAPEM BASERAH', 'Januari', 1620611521, 1620611521, '2021-03-28', '2025-02-28', 1),
(14019, 'EKO SEPTIAWAN', 'JLN. ALAMANDA XII RT 5 RW 3 Kel. INDRA SAKTI Kec. TAPUNG Kab. KAMPAR', '0009.2.01.2021.178       ', '2021-02-26', '2026-02-26', 400000000, '07.02.21.28462.02.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611522, 1620611522, '2021-03-28', '2026-02-28', 1),
(14020, 'Evi Rianis', 'Desa Pembatang Kec. Pangean', '008.1.58.2021.155        ', '2021-02-10', '2024-02-10', 50000000, '07.02.21.28463.02.4.12.0', NULL, 'CAPEM BASERAH', 'Januari', 1620611522, 1620611522, '2021-03-28', '2024-02-28', 1),
(14021, 'NASIB. W', 'JL. ALAMANDA 13 RT006 RW003 DESA INDRASAKTI KEC.TAPUNG', '0022.1.01.2021.178       ', '2021-02-26', '2024-02-26', 60000000, '07.02.21.28464.02.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611522, 1620611522, '2021-03-28', '2024-02-28', 1),
(14022, 'BUDI HARYONO', 'JALUR III RT 10 RW 3 Kel. KIJANG MAKMUR Kec. TAPUNG HILIR Kab. KAMPAR', '0021.1.01.2021.178       ', '2021-02-26', '2024-02-26', 150000000, '07.02.21.28465.02.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611522, 1620611522, '2021-03-28', '2024-02-28', 1),
(14023, 'JANUARMAN ', 'DUSUN III BENCAH PUDU PERMAI RT 3 RW 3 Kel. KUBANG JAYA Kec. SIAK HULU Kab. KAMPAR ', '0005.1.06.2021.144       ', '2021-02-25', '2023-02-25', 300000000, '07.02.21.28466.03.4.12.0', NULL, 'CAPEM TUANKU TAMBUSAI', 'Januari', 1620611522, 1620611522, '2021-03-28', '2023-02-28', 1),
(14024, 'KAMAN', 'JL. KUALA ASAM RT 1 RW 5 Kel. TELUK BELITUNG Kec. MERBAU Kab. KEPULAUAN MERANTI', '0004.1.06.2021.144       ', '2021-03-01', '2022-09-01', 25000000, '07.02.21.28474.03.4.12.0', NULL, 'CAPEM TUANKU TAMBUSAI', 'Januari', 1620611522, 1620611522, '2021-03-28', '2022-08-28', 1),
(14025, 'ABDUL KHOIRI', 'Jalan Jenderal Sudirman  Bagan Batu', '005.1.58.2021.129        ', '2021-02-25', '2025-02-25', 150000000, '07.02.21.28475.03.4.12.0', NULL, 'CAPEM BAGAN BATU', 'Januari', 1620611522, 1620611522, '2021-03-28', '2025-02-28', 1),
(14026, 'RIAU UNTORO', 'KP. BANJAR AIR RAJA RT.02 RW.VI', '0006.2.06.2021.103       ', '2021-03-01', '2025-03-01', 100000000, '07.02.21.28477.03.4.12.0', NULL, 'CABANG TANJUNG PINANG', 'Januari', 1620611522, 1620611522, '2021-03-28', '2025-02-28', 1),
(14027, 'PARINO', 'MAHATO  RT 1 RW 1 Kel. MAHATO Kec. TAMBUSAI UTARA Kab. ROKAN HULU', '014.72.2.01.2021.179     ', '2021-02-25', '2024-02-25', 200000000, '07.02.21.28478.03.4.12.0', NULL, 'KEDAI RANTAU KASAI', 'Januari', 1620611522, 1620611522, '2021-03-28', '2024-02-28', 1),
(14028, 'MUGIMUN ', 'DUSUN I BANDAR RUKUN SUKA JAYA RT 2 RW 1 Kel. MAHATO Kec. TAMBUSAI UTARA Kab. ROKAN HULU ', '012.72.2.01.2021.179     ', '2021-02-16', '2026-02-16', 100000000, '07.02.21.28479.03.4.12.0', NULL, 'KEDAI RANTAU KASAI', 'Januari', 1620611522, 1620611522, '2021-03-28', '2026-02-28', 1),
(14029, 'DEDI YONO', 'JL. GAJAH MADA KM. 32 RT 2 RW 7 Kel. TASIKSERAI Kec. TALANG MUANDAU Kab. BENGKALIS', '00019.58.01.2021.158     ', '2021-03-02', '2024-03-02', 30000000, '07.02.21.28481.03.4.12.0', NULL, 'KEDAI PASAR PINGGIR', 'Januari', 1620611522, 1620611522, '2021-03-28', '2024-02-28', 1),
(14030, 'MUHAMMAD BADRI', 'JL. STADION RT 2 RW 25 Kel. AIR JAMBAN Kec. MANDAU Kab. BENGKALIS', '0017.1.06.2021.122       ', '2021-03-02', '2023-03-02', 250000000, '07.02.21.28482.03.4.12.0', NULL, 'CAPEM DURI', 'Januari', 1620611522, 1620611522, '2021-03-28', '2023-02-28', 1),
(14031, 'SUKAISIH.Y ', 'DUSUN DURIAN RT 1 RW 1 Kel. LUBUK MUDA Kec. SIAK KECIL Kab. BENGKALIS ', '0019.1.01.2021.124       ', '2021-03-02', '2023-03-02', 10000000, '07.02.21.28484.03.4.12.0', NULL, 'CAPEM SEI PAKNING', 'Januari', 1620611522, 1620611522, '2021-03-28', '2023-02-28', 1),
(14032, 'ZEPI PRAYUGO', 'JL. TELADAN RT 2 RW 15 Kel. MENGGALA SAKTI Kec. TANAH PUTIH Kab. ROKAN HILIR', '11320150101012021169     ', '2021-03-02', '2025-03-02', 150000000, '07.02.21.28485.03.4.12.0', NULL, 'CAPEM UJUNG TANJUNG', 'Januari', 1620611522, 1620611522, '2021-03-28', '2025-02-28', 1),
(14033, 'SYAM SUTRISNO', 'KM. 04 SINTONG BAKTI RT 2 RW 3 Kel. SINTONG BAKTI Kec. TANAH PUTIH Kab. ROKAN HILIR', '11320150091012021169     ', '2021-03-02', '2025-03-02', 80000000, '07.02.21.28486.03.4.12.0', NULL, 'CAPEM UJUNG TANJUNG', 'Januari', 1620611522, 1620611522, '2021-03-28', '2025-02-28', 1),
(14034, 'KUSWANTORO', 'DESA TITIAN RESAK RT.010.RW.003 KEC.SEBERIDA KAB.INDRAGIRI HULU', '4005.1.01.2018.133', '2018-01-19', '2022-01-19', 150000000, '07.02.19.22359.08.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611522, 1620611522, '2021-03-28', '2025-02-28', 1),
(14035, 'SITI ASMANA ', 'DESA BUKIT MERANTI RT 013 RW 004 BUKIT MERANTI KEC.SEBERIDA KAB.INHU ', '4019.2.01.2018.133', '2018-03-23', '2023-03-23', 160000000, '07.02.19.22236.08.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611522, 1620611522, '2021-03-28', '2026-02-28', 1),
(14036, 'SUNARYANTO', 'BUKIT BATU RT 2 RW 1 Kel. BUKIT BATU Kec. BUKIT BATU Kab. BENGKALIS', '0020.1.01.2021.124       ', '2021-03-03', '2024-03-03', 50000000, '07.02.21.28487.03.4.12.0', NULL, 'CAPEM SEI PAKNING', 'Januari', 1620611522, 1620611522, '2021-03-28', '2024-02-28', 1),
(14037, 'PONIMAN SITUMORANG', 'AFDELING II PT.HUTAHAEAN RT 6 RW 1 Kel. BATANG KUMU Kec. TAMBUSAI Kab. ROKAN HULU', '015.1.58.2021.153        ', '2021-03-03', '2025-03-03', 150000000, '07.02.21.28488.03.4.12.0', NULL, 'CAPEM DALU-DALU', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14038, 'AGUNG WIBOWO', 'TRI MANUNGGAL RT 12 RW 4 Kel. TRI MANUNGGAL Kec. TAPUNG Kab. KAMPAR', '0010.2.01.2021.178       ', '2021-03-03', '2026-03-03', 250000000, '07.02.21.28489.03.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2026-02-28', 1),
(14039, 'SUWANDI ', 'JLN. ANGGREK I. B RT 1 RW 1 Kel. INDRAPURI Kec. TAPUNG Kab. KAMPAR ', '0023.1.01.2021.178       ', '2021-03-03', '2025-03-03', 350000000, '07.02.21.28490.03.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14040, 'MOHD.RICKY FEBRIAWAN', 'JL.TELAPAK SAKTI RT 1 RW  Kel. PELINTUNG Kec. MEDANG KAMPAI Kab. KOTA DUMAI', '02.2.72.2021.104         ', '2021-03-02', '2026-03-02', 300000000, '07.02.21.28491.03.4.12.0', NULL, 'CABANG DUMAI', 'Januari', 1620611523, 1620611523, '2021-03-28', '2026-02-28', 1),
(14041, 'NOFRIANTO ', 'DESA RANTAU SAKTI RT 015 RW 006 RANTAU SAKTI KEC. TAMBUSAI UTARA KAB.ROKAN HULU - RIAU ', '016.72.2.01.2021.179     ', '2021-03-04', '2024-03-04', 100000000, '07.02.21.28492.03.4.12.0', NULL, 'KEDAI RANTAU KASAI', 'Januari', 1620611523, 1620611523, '2021-03-28', '2024-02-28', 1),
(14042, 'SUWARNO ', 'BANGUN SARI RT 02 RW 01 DESA RANTAU SAKTI KEC. TAMBUSAI UTARA KAB. ROHUL ', '015.72.2.01.2021.179     ', '2021-03-04', '2024-03-04', 100000000, '07.02.21.28493.03.4.12.0', NULL, 'KEDAI RANTAU KASAI', 'Januari', 1620611523, 1620611523, '2021-03-28', '2024-02-28', 1),
(14043, 'RODIMAN', 'DESA RANTAU SAKTI KEC. TAMBUSAI UTARA', '017.72.2.01.2021.179     ', '2021-03-05', '2024-03-05', 100000000, '07.02.21.28494.03.4.12.0', NULL, 'KEDAI RANTAU KASAI', 'Januari', 1620611523, 1620611523, '2021-03-28', '2024-02-28', 1),
(14044, 'TUNGGAL SARIAT', 'JL. DURIAN RT 13 RW  Kel. LUBUK GAUNG Kec. SUNGAI SEMBILAN Kab. KOTA DUMAI', '07.1.58.2021.104         ', '2021-03-04', '2025-03-04', 350000000, '07.02.21.28495.03.4.12.0', NULL, 'CABANG DUMAI', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14045, 'AFRINAL', 'JL. MANSYOERDIN NO.23 RT 2 RW 5 Kel. SEDINGINAN Kec. TANAH PUTIH Kab. ROKAN HILIR', '11320150111012021169     ', '2021-03-05', '2025-03-05', 100000000, '07.02.21.28497.03.4.12.0', NULL, 'CAPEM UJUNG TANJUNG', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14046, 'RISCE', 'JL. BOGENVILLE NO.10 RT 3 RW 3 Kel. SUKAMAJU Kec. SAIL Kab. KOTA PEKANBARU', '003.1.06.2021.165        ', '2021-03-05', '2025-03-05', 375000000, '07.02.21.28498.03.4.12.0', NULL, 'CAPEM AHMAD YANI PEKANBARU', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14047, 'ANTON', 'JL. LINTAS RT 10 RW 4 Kel. SEBERIDA Kec. BATANG GANGSAL Kab. INDRAGIRI HULU', '4025.2.01.2021.133       ', '2021-03-05', '2024-03-05', 110000000, '07.02.21.28499.03.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611523, 1620611523, '2021-03-28', '2024-02-28', 1),
(14048, 'SUNARYO ', 'DESA SUNGAI AUR RT 2 RW 1 Kel. SUNGAI AUR Kec. BATANG PERANAP Kab. INDRAGIRI HULU ', '0005.1.01.2021.157       ', '2021-03-04', '2025-03-04', 100000000, '07.02.21.28500.03.4.12.0', NULL, 'KEDAI PASAR PERANAP', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14049, 'NUR SIDIQ', 'SUMBER MAKMUR RT 1 RW 1 Kel. SUMBER MAKMUR Kec. TAPUNG Kab. KAMPAR', '0025.1.01.2021.178       ', '2021-03-05', '2025-03-05', 150000000, '07.02.21.28501.03.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14050, 'M. IDRUS', 'DESA SUKA MAJU RT 7 RW 3 Kel. SUKA MAJU Kec. TAPUNG HILIR Kab. KAMPAR', '0024.1.01.2021.178       ', '2021-03-05', '2025-03-05', 150000000, '07.02.21.28502.03.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14051, 'JEKI JUNAIDI', 'KABUN RT 12 RW 4 Kel. KABUN Kec. KABUN Kab. ROKAN HULU', '007.1.01.2021.164        ', '2021-03-05', '2025-03-05', 450000000, '07.02.21.28503.03.4.12.0', NULL, 'KEDAI KABUN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14052, 'JASON SIAGIAN ', 'JL. MERANTI KM.12 RT 2 RW 9 Kel. TALANG MANDI Kec. MANDAU Kab. BENGKALIS ', '0018.1.06.2021.122       ', '2021-03-03', '2025-03-03', 150000000, '07.02.21.28504.03.4.12.0', NULL, 'CAPEM DURI', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14053, 'SUNARDI ', 'PARIT SENGGARANG RT 001 RW 001 DESA SUNGAI UNGAR UTARA KEC KUNDUR UTARA ', '  7015.1.06.2021.123     ', '2021-03-05', '2023-03-05', 75000000, '07.02.21.28505.03.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611523, 1620611523, '2021-03-28', '2023-02-28', 1),
(14054, 'EVA ELVIANA', 'SENANGGAI RT 2 RW 1 Kel. PANCUR Kec. LINGGA UTARA Kab. LINGGA', '001.1.06.2021.174        ', '2021-03-04', '2024-03-04', 15000000, '07.02.21.28506.03.4.12.0', NULL, 'CAPEM DAIK LINGGA', 'Januari', 1620611523, 1620611523, '2021-03-28', '2024-02-28', 1),
(14055, 'ROHIMAH', 'PONTIAN MEKAR RT 4 RW 2 Kel. PONTIAN MEKAR Kec. LUBUK BATU JAYA Kab. INDRAGIRI HULU', '0004.58.08.2021.172      ', '2021-03-05', '2025-03-05', 150000000, '07.02.21.28507.03.4.12.0', NULL, 'KEDAI SUNGAI LALA', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14056, 'SUTAN GUNUNG', 'JL. PT. EXPAN RT 7 RW 4 Kel. KUALA LALA Kec. SUNGAI LALA Kab. INDRAGIRI HULU', '0005.58.08.2021.172      ', '2021-03-05', '2024-03-05', 100000000, '07.02.21.28508.03.4.12.0', NULL, 'KEDAI SUNGAI LALA', 'Januari', 1620611523, 1620611523, '2021-03-28', '2024-02-28', 1),
(14057, 'RAHMAD MUZAKI', 'DESA RAMBAH MUDA RT 022 RW 005 DESA RAMBAH MUDA KEC. RAMBAH HILIR', '72.0012.2021.115         ', '2021-03-04', '2025-03-04', 150000000, '07.02.21.28509.03.4.12.0', NULL, 'CABANG PASIR PANGARAIAN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14058, 'TENGKU INDRAYANA', 'KOMP. BINTAN CENTRE BLOK. D NO. 54 RT 2 RW 3 Kel. AIR RAJA Kec. TANJUNG PINANG TIMUR Kab. KOTA TANJUNG PINANG', '5003.2.05.2021.135       ', '2021-03-05', '2026-03-05', 150000000, '07.02.21.28510.03.4.12.0', NULL, 'CABANG BINTAN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2026-02-28', 1),
(14059, 'PRAYETNO', 'DUSUN SIDO MULYO RT 8 RW 4 Kel. LANGKAT Kec. SIAK KECIL Kab. BENGKALIS', '011.1.01.2021.189        ', '2021-03-04', '2025-03-04', 50000000, '07.02.21.28512.03.4.12.0', NULL, 'KEDAI SABAK AUH', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14060, 'M. ALI MAARUP', 'JLN. RAMBUTAN RT 2 RW 1 Kel. MUKTI SARI Kec. TAPUNG Kab. KAMPAR', '0042.1.01.2020.178       ', '2020-03-23', '2024-03-23', 80000000, '07.02.21.28513.03.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2025-02-28', 1),
(14061, 'JAMAALI ', 'SUMBER MAKMUR RT 22 RW 10 Kel. SUMBER MAKMUR Kec. TAPUNG Kab. KAMPAR ', '0019.2.01.2020.178       ', '2020-07-17', '2025-07-17', 300000000, '07.02.21.28514.03.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611523, 1620611523, '2021-03-28', '2026-02-28', 1),
(14062, 'SULASTRI ', 'PERUM. SARI PADJADJARAN BLOK C/19 RT 1 RW 8 Kel. TEMBESI Kec. SAGULUNG Kab. KOTA BATAM ', '003.1.3.2021.161         ', '2021-03-05', '2025-03-05', 100000000, '07.02.21.28518.03.4.12.0', NULL, 'CAPEM BATU AJI BATAM', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14063, 'DWI PURWANTO', 'TALANG MULYA RT 1 RW 3 Kel. TALANG MULYA Kec. BATANG CENAKU Kab. INDRAGIRI HULU', '0005.58.03.2021.176      ', '2021-03-08', '2025-03-08', 150000000, '07.02.21.28519.03.4.12.0', NULL, 'KEDAI KUALA KILAN', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14064, 'SUPRIANTO', 'DUSUN I SEI INTAN RT 3 RW 2 Kel. TALIKUMAIN Kec. TAMBUSAI Kab. ROKAN HULU', '016.1.58.2021.153        ', '2021-03-08', '2025-03-08', 100000000, '07.02.21.28520.03.4.12.0', NULL, 'CAPEM DALU-DALU', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14065, 'HERLIZA ANDRIANE SITORUS', 'SUKA MAJU RT 11 RW 4 Kel. SUKA MAJU Kec. TAPUNG HILIR Kab. KAMPAR', '0011.2.01.2021.178       ', '2021-03-08', '2026-03-08', 100000000, '07.02.21.28521.03.4.12.0', NULL, 'CAPEM FLAMBOYAN', 'Januari', 1620611524, 1620611524, '2021-03-28', '2026-02-28', 1),
(14066, 'ADE CANDRA ', 'SEBERIDA RT 1 RW 1 Kel. SEBERIDA Kec. BATANG GANGSAL Kab. INDRAGIRI HULU ', '4026.1.06.2021.133       ', '2021-03-08', '2024-03-08', 150000000, '07.02.21.28522.03.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14067, 'ASTUTIK', ' RT  RW  Kel. REMPAK Kec. SABAK AUH Kab. SIAK', '012.1.01.2021.189        ', '2021-03-08', '2025-03-08', 150000000, '07.02.21.28523.03.4.12.0', NULL, 'KEDAI SABAK AUH', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14068, 'JASMI', 'JALUR LIMA DESA SUNGAI KUNING RT 5 RW 2 Kel. SUNGAIKUNING Kec. SINGINGI Kab. KUANTAN SINGINGI', '00013.58.01.2021.173     ', '2021-03-08', '2025-03-08', 85000000, '07.02.21.28524.03.4.12.0', NULL, 'KEDAI PASAR MUARA LEMBU', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14069, 'TARMIZI', 'JL SULTAN MAHMUD MUZAFARSYAH KP. PAHANG RT 1 RW 1 Kel. DAIK Kec. LINGGA Kab. LINGGA', '003.1.06.2021.174        ', '2021-03-08', '2024-03-08', 50000000, '07.02.21.28525.03.4.12.0', NULL, 'CAPEM DAIK LINGGA', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14070, 'SUPIAN ', 'PARIT MESJID RT 1 RW 3 Kel. SUNGAITERITIP Kec. KATEMAN Kab. INDRAGIRI HILIR ', '9037.1.06.2021.148       ', '2021-03-09', '2023-03-09', 15000000, '07.02.21.28526.03.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611524, 1620611524, '2021-03-28', '2023-02-28', 1),
(14071, 'RUBIANTO ', 'DUSUN KARYAJADI  RT 15 RW 4 Kel. PETALA BUMI Kec. SIBERIDA Kab. INDRAGIRI HULU ', '4027.1.01.2021.133       ', '2021-03-08', '2025-03-08', 150000000, '07.02.21.28527.03.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14072, 'ANDRE PRATAMA', 'JL. TUNAS HARAPAN RT 8 RW 1 Kel. TEGARAJA Kec. KATEMAN Kab. INDRAGIRI HILIR', '9038.1.06.2021.148       ', '2021-03-09', '2023-03-09', 55000000, '07.02.21.28528.03.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611524, 1620611524, '2021-03-28', '2023-02-28', 1),
(14073, 'A LEM', 'JL KOBEL DARAT RT 003 RW 002 KEL SAWANG LAUT KEC KUNDUR BARAT', '  7016.1.06.2021.123     ', '2021-03-09', '2023-03-09', 200000000, '07.02.21.28529.03.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611524, 1620611524, '2021-03-28', '2023-02-28', 1),
(14074, 'DASRIZAL', 'DUSUN III PADANG TARAP RT 4 RW 9 Kel. MUARA JALAI Kec. KAMPAR UTARA Kab. KAMPAR', '0058.1.01.2020.142       ', '2020-12-16', '2023-12-16', 100000000, '07.02.21.28530.03.4.12.0', NULL, 'KEDAI PASAR AIR TIRIS', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14075, 'YUDIONO', 'DS IV DABIT SIDOMULYO RT 008 RW 001 DESA SAWANG SELATAN KEC KUNDUR BARAT', '  7017.1.06.2021.123     ', '2021-03-09', '2025-03-09', 250000000, '07.02.21.28531.03.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14076, 'DEWI RAHMAWATI', 'JL.BESAR LAYANG RT 1 RW 2 Kel. SAWANG Kec. KUNDUR BARAT Kab. KARIMUN', '  7018.1.06.2021.123     ', '2021-03-09', '2024-03-09', 20000000, '07.02.21.28533.03.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14077, 'BUSTANIL ARIFIN', 'DUSUN 01 RT 1 RW 2 Kel. DANAU LANCANG Kec. TAPUNG HULU Kab. KAMPAR', '0010.1.01.2021.159       ', '2021-03-09', '2025-03-09', 60000000, '07.02.21.28534.03.4.12.0', NULL, 'KEDAI PASAR SUKARAMAI', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14078, 'SYAFRIDON SANDRA', 'DESA PEMATANG BERANGAN KEC.RAMBAH KAB.ROKAN HULU', '72.0013.2021.115         ', '2021-03-08', '2026-03-08', 150000000, '07.02.21.28535.03.4.12.0', NULL, 'CABANG PASIR PANGARAIAN', 'Januari', 1620611524, 1620611524, '2021-03-28', '2026-02-28', 1),
(14079, 'SEDIANTO SILALAHI', 'BATU LANGKAH BESAR RT 9 RW 4 Kel. BATU LANGKAH BESAR Kec. KABUN Kab. ROKAN HULU', '008.1.01.2021.164        ', '2021-03-09', '2024-03-09', 25000000, '07.02.21.28536.03.4.12.0', NULL, 'KEDAI KABUN', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14080, 'SUKAYAH', 'KABUN RT 16 RW 5 Kel. KABUN Kec. KABUN Kab. ROKAN HULU', '009.1.01.2021.164        ', '2021-03-09', '2024-03-09', 50000000, '07.02.21.28537.03.4.12.0', NULL, 'KEDAI KABUN', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14081, 'PARDI UTOMO', 'SUKA DAMAI RT 3 RW 1 Kel. SUKA DAMAI Kec. SINGINGI HILIR Kab. KUANTAN SINGINGI', '00015.58.01.2021.173     ', '2021-03-09', '2024-03-09', 85000000, '07.02.21.28538.03.4.12.0', NULL, 'KEDAI PASAR MUARA LEMBU', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14082, 'PRIANTINI', 'DUSUN SUMBER MULYA RT 7 RW 2 Kel. SUKA DAMAI Kec. SINGINGI HILIR Kab. KUANTAN SINGINGI', '00014.58.01.2021.173     ', '2021-03-09', '2025-03-09', 150000000, '07.02.21.28539.03.4.12.0', NULL, 'KEDAI PASAR MUARA LEMBU', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14083, 'HENG KING U', 'JL DATUK LAKSEMANA RT 2 RW 2 Kel. DAIK Kec. LINGGA Kab. LINGGA', '002.1.06.2021.174        ', '2021-03-09', '2023-03-09', 500000000, '07.02.21.28540.03.4.12.0', NULL, 'CAPEM DAIK LINGGA', 'Januari', 1620611524, 1620611524, '2021-03-28', '2023-02-28', 1),
(14084, 'RULIANTA DAMANIK ', 'JL.GARUDA RT 1 RW  Kel. KAMPUNG BARU Kec. BUKIT KAPUR Kab. KOTA DUMAI ', '1132113.035.1.2021.151   ', '2021-03-05', '2024-03-05', 150000000, '07.02.21.28541.03.4.12.0', NULL, 'KEDAI PASAR BUKIT KAPUR', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14085, 'YORPENDI', 'DESA TANDUN RT 11 RW 4 Kel. TANDUN Kec. TANDUN Kab.  ROKAN HULU', '58.004.1.2021.177        ', '2021-03-10', '2025-03-10', 100000000, '07.02.21.28542.03.4.12.0', NULL, 'KEDAI PASAR TANDUN', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14086, 'MUSLIM', 'KOTA BANGUN RT 9 RW 3 Kel. KOTA BANGUN Kec. TAPUNG HILIR Kab. KAMPAR', '0019.1.06.2021.122       ', '2021-03-09', '2024-03-09', 70000000, '07.02.21.28543.03.4.12.0', NULL, 'CAPEM DURI', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14087, 'IRWANSYAH', 'DESA KOTA BANGUN RT 14 RW 2 Kel. KOTA BANGUN Kec. TAPUNG HILIR Kab. KAMPAR', '0020.1.06.2021.122       ', '2021-03-09', '2024-03-09', 150000000, '07.02.21.28544.03.4.12.0', NULL, 'CAPEM DURI', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14088, 'SRI NINGSIH', 'DESA SURYA INDAH JALUR X RT.004 RW.006 KEC. PANGKALAN KURAS KAB. PELALAWAN', '052.2.01.2021.130        ', '2021-03-10', '2026-03-10', 400000000, '07.02.21.28547.03.4.12.0', NULL, 'CAPEM SOREK', 'Januari', 1620611524, 1620611524, '2021-03-28', '2026-02-28', 1),
(14089, 'SUMANTRI', 'DESA BERINGIN INDAH RT.004 RW.004 KEC. PANGKALAN KURAS KAB. PELALAWAN', '051.2.01.2021.130        ', '2021-03-10', '2026-03-10', 150000000, '07.02.21.28548.03.4.12.0', NULL, 'CAPEM SOREK', 'Januari', 1620611524, 1620611524, '2021-03-28', '2026-02-28', 1),
(14090, 'SRI NUR ISYAM', 'JL.H.ARIFIN AHMAD GG.UTAMA RT 2 RW  Kel. JAYA MUKTI Kec. DUMAI TIMUR Kab. KOTA DUMAI', '17.1.58.2020.104         ', '2020-08-24', '2024-08-24', 300000000, '07.02.21.28549.03.4.12.0', NULL, 'CABANG DUMAI', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14091, 'YUNIARTI', 'JL. NURI GG.KUTILANG RT 18 RW  Kel. PURNAMA Kec. DUMAI BARAT Kab. KOTA DUMAI', '16.1.58.2020.104         ', '2020-08-04', '2022-08-04', 20000000, '07.02.21.28550.03.4.12.0', NULL, 'CABANG DUMAI', 'Januari', 1620611524, 1620611524, '2021-03-28', '2023-02-28', 1),
(14092, 'TAITOBES', 'BANJAR GUNTUNG RT 1 RW 3 Kel. BANJAR GUNTUNG Kec. KUANTAN MUDIK Kab. KUANTAN SINGINGI', '017.1.01.2021.168        ', '2021-03-10', '2024-03-10', 50000000, '07.02.21.28553.03.4.12.0', NULL, 'KEDAI PASAR LUBUK JAMBI', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14093, 'GAPIS AMRULLAH', 'LUBUK RAMO RT 3 RW 3 Kel. LUBUK RAMO Kec. KUANTAN MUDIK Kab. KUANTAN SINGINGI', '016.1.01.2021.168        ', '2021-03-10', '2024-03-10', 100000000, '07.02.21.28554.03.4.12.0', NULL, 'KEDAI PASAR LUBUK JAMBI', 'Januari', 1620611524, 1620611524, '2021-03-28', '2024-02-28', 1),
(14094, 'ASTUR', 'JL LINTAS SELATAN BANDAR PADANG RT 6 RW 3 Kel. BANDAR PADANG Kec. SIBERIDA Kab. INDRAGIRI HULU', '4028.1.01.2021.133       ', '2021-03-10', '2025-03-10', 150000000, '07.02.21.28555.03.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1);
INSERT INTO `tblkur` (`id`, `nama`, `alamat`, `nomor_akad`, `tanggal_akad`, `tgl_jatuh_tempo`, `nilai_akad`, `nomor_penjaminan`, `kode_cabang`, `nama_cabang`, `bulan`, `date_created`, `date_modified`, `tanggal_terbit`, `tanggal_selesai`, `status`) VALUES
(14095, 'GILANG AMOURA WINANGUN', 'SIMP IV BELILAS RT 16 RW 4 Kel. PANGKALAN KASAI Kec. SIBERIDA Kab. INDRAGIRI HULU', '4029.1.01.2021.133       ', '2021-03-10', '2025-03-10', 150000000, '07.02.21.28556.03.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611524, 1620611524, '2021-03-28', '2025-02-28', 1),
(14096, 'KARIM', 'BAKAU BETEMU RT 1 RW 4 Kel. SUNGAITERITIP Kec. KATEMAN Kab. INDRAGIRI HILIR', '9040.2.06.2021.148       ', '2021-03-10', '2023-03-10', 25000000, '07.02.21.28557.03.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611524, 1620611524, '2021-03-28', '2023-02-28', 1),
(14097, 'ISMAIL MARZUKI', 'JALUR 02 RT 2 RW 1 Kel. SUMBER MAKMUR JAYA Kec. TELUK BELENGKONG Kab. INDRAGIRI HILIR', '9039.1.06.2021.148       ', '2021-03-10', '2023-03-10', 25000000, '07.02.21.28558.03.4.12.0', NULL, 'CAPEM SUNGAI GUNTUNG', 'Januari', 1620611525, 1620611525, '2021-03-28', '2023-02-28', 1),
(14098, 'UTARI RAHAYU', 'JL. JAWA NO. 166 A RT 3 RW 1 Kel. TANJUNG PINANG BARAT Kec. TANJUNG PINANG BARAT Kab. KOTA TANJUNG PINANG', '0007.1.06.2021.103       ', '2021-03-03', '2024-03-03', 120000000, '07.02.21.28559.03.4.12.0', NULL, 'CABANG TANJUNG PINANG', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14099, 'HADI SUNAPSIH', ' JL.BATU KUCING GG. TERATAI NO. 08 RT 1 RW 3 Kel. KAMPUNG BULANG Kec. TANJUNG PINANG TIMUR Kab. KOTA TANJUNG PINANG', '0008.2.06.2021.103       ', '2021-03-09', '2026-03-09', 100000000, '07.02.21.28560.03.4.12.0', NULL, 'CABANG TANJUNG PINANG', 'Januari', 1620611525, 1620611525, '2021-03-28', '2026-02-28', 1),
(14100, 'EFENDI ', 'JL.SULTAN SULAIMAN BADRUL ALAMSYAH II RT.001/RW.001 DESA PANGGAK LAUT KEC.LINGGA ', '004.1.06.2021.174        ', '2021-03-08', '2024-03-08', 100000000, '07.02.21.28562.03.4.12.0', NULL, 'CAPEM DAIK LINGGA', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14101, 'ATIN REGI PUTRA', 'JL. NUR IKHLAS RT 5 RW 3 Kel. PALAS Kec. PANGKALAN KURAS Kab. PELALAWAN', '0012.1.01.2021.156       ', '2021-03-10', '2025-03-10', 100000000, '07.02.21.28563.03.4.12.0', NULL, 'KEDAI PASAR PANGKALAN KERINCI', 'Januari', 1620611525, 1620611525, '2021-03-28', '2025-02-28', 1),
(14102, 'SRI SUSILAWATI', 'JL. SEI TERAS GG. JATI SARANA RT 4 RW  Kel. SIMAPANG TETAP DARUL ICHSAN Kec. DUMAI BARAT Kab. KOTA DUMAI', '08.1.58.2021.104         ', '2021-03-08', '2025-03-08', 170000000, '07.02.21.28564.03.4.12.0', NULL, 'CABANG DUMAI', 'Januari', 1620611525, 1620611525, '2021-03-28', '2025-02-28', 1),
(14103, 'BAITUL ANWAR', 'JL. KEPODANG RT 20 RW 5 Kel. BULUH RAMPAI Kec. SIBERIDA Kab. INDRAGIRI HULU', '4128.1.01.2020.133       ', '2020-10-16', '2023-10-16', 50000000, '07.02.21.28566.03.4.12.0', NULL, 'CAPEM BELILAS', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14104, 'HOTMAN SINURAT', 'JL. PANTANG MUNDUR RT 6 RW  Kel. BASILAM BARU Kec. SUNGAI SEMBILAN Kab. KOTA DUMAI', '012.58.1.01.2021.190     ', '2021-03-10', '2025-03-10', 150000000, '07.02.21.28567.03.4.12.0', NULL, 'KEDAI SUNGAI SEMBILAN', 'Januari', 1620611525, 1620611525, '2021-03-28', '2025-02-28', 1),
(14105, 'RIZAI ANGGARA', 'JL. RAYA LUBUK GAUNG RT 3 RW 0 Kel. LUBUK GAUNG Kec. SUNGAI SEMBILAN Kab. KOTA DUMAI', '013.58.1.01.2021.190     ', '2021-03-10', '2025-03-10', 100000000, '07.02.21.28568.03.4.12.0', NULL, 'KEDAI SUNGAI SEMBILAN', 'Januari', 1620611525, 1620611525, '2021-03-28', '2025-02-28', 1),
(14106, 'MASDEWANA SIMANJUNTAK ', 'DUSUN III SEI PABASO RT 4 RW 5 Kel. DANAU LANCANG Kec. TAPUNG HULU Kab. KAMPAR ', '0011.1.01.2021.159       ', '2021-03-10', '2025-03-10', 150000000, '07.02.21.28569.03.4.12.0', NULL, 'KEDAI PASAR SUKARAMAI', 'Januari', 1620611525, 1620611525, '2021-03-28', '2025-02-28', 1),
(14107, 'SUGITO', 'DUSUN MULYA RT 21 RW 5 Kel. KERANJI GUGUH Kec. KOTO GASIB Kab. SIAK', '1132015.292.1.3.21.163   ', '2021-03-12', '2024-03-12', 60000000, '07.02.21.28570.03.4.12.0', NULL, 'KEDAI DAYUN', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14108, 'PURWANTO', 'KRABAT RT 2 RW 1 Kel. SRI BINTAN Kec. TELOK SEBONG Kab. BINTAN', '005.1.05.2021.180        ', '2021-03-12', '2025-03-12', 150000000, '07.02.21.28571.03.4.12.0', NULL, 'CAPEM BINTAN CENTER', 'Januari', 1620611525, 1620611525, '2021-03-28', '2025-02-28', 1),
(14109, 'RENO USNI', 'JL.PELITA NO.70 RT 11 RW  Kel. BUKIT DATUK Kec. DUMAI SELATAN Kab. KOTA DUMAI', '010.1.58.2021.104        ', '2021-03-10', '2023-03-10', 50000000, '07.02.21.28572.03.4.12.0', NULL, 'CABANG DUMAI', 'Januari', 1620611525, 1620611525, '2021-03-28', '2023-02-28', 1),
(14110, 'HARSAPRINA', 'DUSUN DURIAN RT 2 RW 1 Kel. LUBUK MUDA Kec. SIAK KECIL Kab. BENGKALIS', '0021.1.01.2021.124       ', '2021-03-12', '2024-03-12', 40000000, '07.02.21.28573.03.4.12.0', NULL, 'CAPEM SEI PAKNING', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14111, 'ANDI SUHENDRA', 'BANGUN SARI RT 25 RW 9 Kel. SUNGAI AGUNG Kec. TAPUNG Kab. KAMPAR', '0012.1.01.2021.159       ', '2021-03-12', '2024-03-12', 150000000, '07.02.21.28574.03.4.12.0', NULL, 'KEDAI PASAR SUKARAMAI', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14112, 'ROSMITA', 'PERUM BUANA BUKIT PERMATA BLOK RUBY NO. 06 RT 5 RW 17 Kel. TEMBESI Kec. SAGULUNG Kab. KOTA BATAM', '005.1.3.2021.161         ', '2021-03-10', '2023-03-10', 30000000, '07.02.21.28575.03.4.12.0', NULL, 'CAPEM BATU AJI BATAM', 'Januari', 1620611525, 1620611525, '2021-03-28', '2023-02-28', 1),
(14113, 'SODIQIN ', 'DUSUN III BATU TUMBANG RT 17 RW 7 Kel. SAWANG SELATAN Kec. KUNDUR BARAT Kab. KARIMUN ', '  7021.2.06.2021.123     ', '2021-03-12', '2026-03-12', 150000000, '07.02.21.28580.03.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611525, 1620611525, '2021-03-28', '2026-02-28', 1),
(14114, 'MARICE MAGDALENA ', 'KAV SUNGAI LEKOP BLOK D NO.234 RT 2 RW 11 Kel. SUNGAI LEKOP Kec. SAGULUNG Kab. KOTA BATAM ', '006.1.3.2021.161         ', '2021-03-10', '2024-03-10', 50000000, '07.02.21.28581.03.4.12.0', NULL, 'CAPEM BATU AJI BATAM', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14115, 'RIKA NOVITA', 'PERUM DEVIN PREMIERE BLOK E1 NO 56 RT 3 RW 18 Kel. TANJUNG RIAU Kec. SEKUPANG Kab. KOTA BATAM', '004.1.3.2021.161         ', '2021-03-10', '2023-03-10', 30000000, '07.02.21.28582.03.4.12.0', NULL, 'CAPEM BATU AJI BATAM', 'Januari', 1620611525, 1620611525, '2021-03-28', '2023-02-28', 1),
(14116, 'ISKANDAR.K', 'JALAN.SUNARYO KM 2 RT 3 RW 2 Kel. TANJUNG BATU BARAT Kec. KUNDUR Kab. KARIMUN', '  7019.1.06.2021.123     ', '2021-03-10', '2024-03-10', 55000000, '07.02.21.28583.03.4.12.0', NULL, 'CAPEM TANJUNG BATU', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14117, 'TATI LISTIANI', 'MAMPU JAYA RT 22 RW  Kel. LUBUK GAUNG Kec. SUNGAI SEMBILAN Kab. KOTA DUMAI', '09.1.58.2021.104         ', '2021-03-12', '2025-03-12', 500000000, '07.02.21.28584.03.4.12.0', NULL, 'CABANG DUMAI', 'Januari', 1620611525, 1620611525, '2021-03-28', '2025-02-28', 1),
(14118, 'BAMBANG BUDIRAHARJO ', 'KAMP. DAMNAH SETAJAM RT/RW 002/011 KEL. DABO KEC. SINGKEP KAB. LINGGA ', '007.1.06.2021.125        ', '2021-03-04', '2025-03-04', 150000000, '07.02.21.28585.03.4.12.0', NULL, 'CAPEM DABO SINGKEP', 'Januari', 1620611525, 1620611525, '2021-03-28', '2025-02-28', 1),
(14119, 'ABDUL AJIS ', 'PULAU MAS BANGSAL RT 1 RW 2 Kel. POSEK Kec. KEPULAUAN POSEK Kab. LINGGA ', '0012.3.10.2021.125       ', '2021-03-04', '2024-03-04', 30000000, '07.02.21.28586.03.4.12.0', NULL, 'CAPEM DABO SINGKEP', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1),
(14120, 'DENNI SARIATI PURBA', 'JL. USAHA MAJU RT 2 RW 6 Kel. BENCAHLESUNG Kec. TENAYAN RAYA Kab. KOTA PEKANBARU', '013.01.06.2021.140       ', '2021-03-09', '2024-03-09', 30000000, '07.02.21.28587.03.4.12.0', NULL, 'KEDAI PASAR SAIL', 'Januari', 1620611525, 1620611525, '2021-03-28', '2024-02-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmenu`
--

CREATE TABLE `tblmenu` (
  `MENUid` int(11) NOT NULL,
  `MENUnama` varchar(255) DEFAULT NULL,
  `USERid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblopk`
--

CREATE TABLE `tblopk` (
  `OPKid` int(11) NOT NULL,
  `OPKjenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblopk`
--

INSERT INTO `tblopk` (`OPKid`, `OPKjenis`) VALUES
(1, 'Produktif (Kredit)'),
(2, 'Produktif (Kredit + Jiwa)'),
(3, 'Konsumtif (Kredit)'),
(4, 'Konsumftif (Kredit + Jiwa)');

-- --------------------------------------------------------

--
-- Table structure for table `tblpd`
--

CREATE TABLE `tblpd` (
  `PDid` int(11) NOT NULL,
  `PDnama` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblpkrj`
--

CREATE TABLE `tblpkrj` (
  `PKRJid` int(11) NOT NULL,
  `PKRJnama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpkrj`
--

INSERT INTO `tblpkrj` (`PKRJid`, `PKRJnama`) VALUES
(1, 'Pegawai Swasta, BUMN & BUMD'),
(2, 'ASN, TNI & POLRI'),
(3, 'DPRD'),
(4, 'Pegawai Bank Riau Kepri'),
(5, 'Honorer, PTT, GTT & Perangkat Desa');

-- --------------------------------------------------------

--
-- Table structure for table `tblpks`
--

CREATE TABLE `tblpks` (
  `PKSid` int(11) NOT NULL,
  `PKSno1` varchar(255) NOT NULL,
  `PKSno2` varchar(255) NOT NULL,
  `PKStanggal` date NOT NULL,
  `PKSjenis` varchar(255) DEFAULT NULL,
  `PKSmincbc` varchar(255) DEFAULT NULL,
  `PKSmaterai` varchar(255) DEFAULT NULL,
  `PKSratefee` varchar(255) DEFAULT NULL,
  `BPid` int(11) DEFAULT NULL,
  `GPPid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpks`
--

INSERT INTO `tblpks` (`PKSid`, `PKSno1`, `PKSno2`, `PKStanggal`, `PKSjenis`, `PKSmincbc`, `PKSmaterai`, `PKSratefee`, `BPid`, `GPPid`) VALUES
(1, '001/PKS-PK/JR/VI-2013', '229A/SRV-DIR/VI/2013', '2013-06-27', 'PK', '500.000.000.000', '6000', '10%', 1, 2),
(2, '002/PKS-PK/VII-2013', '63/PKS/2013', '2013-08-07', 'PK', '750.000.000', '6000', '10%', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpp`
--

CREATE TABLE `tblpp` (
  `PPid` int(11) NOT NULL,
  `kode` int(50) NOT NULL,
  `PPnama` varchar(255) DEFAULT NULL,
  `PPalamat` varchar(255) DEFAULT NULL,
  `PPtelpon` varchar(255) DEFAULT NULL,
  `PPfax` varchar(255) DEFAULT NULL,
  `RSid` int(11) NOT NULL,
  `GPPid` int(255) NOT NULL,
  `DAERAHid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpp`
--

INSERT INTO `tblpp` (`PPid`, `kode`, `PPnama`, `PPalamat`, `PPtelpon`, `PPfax`, `RSid`, `GPPid`, `DAERAHid`) VALUES
(1, 101, 'Bank Riau Kepri Cabang Utama', 'Jl. Jend. Sudirman No.377 Pekanbaru 28116', 'Telp. : 0761-37050 (Hunting 5 Lines), ', 'Fax. : 0761-26483', 1, 2, 1),
(2, 102, 'Bank Riau Kepri Cabang Tembilahan', 'Jl. Hang Tuah No. 1 Tembilahan', 'Telp. : 0768-22525/21334', 'Fax. : 0768-22324', 1, 1, 8),
(3, 103, 'Bank Riau Kepri Cabang Tanjung Pinang', 'Jl. Teuku Umar No. 21 Tanjung Pinang', 'Telp. : 0771-21276/24334/24329', 'Fax. : 0771-311370', 1, 1, 12),
(4, 104, 'Bank Riau Kepri Cabang Dumai', 'Jl. S. Syarif Kasim No. 111-112 Dumai', 'Telp. : 0765-31079/32704/3261', 'Fax. : 0765-36837', 1, 1, 9),
(5, 105, 'Bank Riau Kepri Cabang Selat Panjang', 'Jl. Diponegoro No. 58 Selat Panjang', 'Telp. : 0763-31249/31719/31250', 'Fax. : 0763-31307', 1, 1, 16),
(6, 106, 'Bank Riau Kepri Cabang Batam', 'Jl. Laksamana Bintan-Sei Panas Komp. Tana Mas Blok C No. 14 Batam', 'Telp. : 0778-460264/460269/460277', 'Fax. : 0778-460288', 1, 1, 11),
(7, 107, 'Bank Riau Kepri Cabang Pasar Pusat', 'Jl. Jend. Sudirman Plaza Sukaramai Lt.1 Blok TA 04, Pekanbaru', 'Telp. : 0761-23947/38801/32872/848711', 'Fax. : 0761-32872', 1, 1, 1),
(8, 108, 'Bank Riau Kepri Cabang Bengkalis', 'Jl. Pahlawan No. 15A Bengkalis', 'Telp. : 0766-21569/22541/22549', 'Fax. : 0766-21784', 1, 1, 10),
(9, 109, 'Bank Riau Kepri Cabang Bangkinang', 'Jl. Prof. M. Yamin, SH No. 29 Bangkinang', 'Telp. : 0762-20027/20433/20432', 'Fax. : 0762-20137', 1, 1, 2),
(10, 110, 'Bank Riau Kepri Cabang Air Molek', 'Jl. Jend. Sudirman, Air Molek', 'Telp. : 0769-41435/41436/41438/41363', 'Fax. : 0769-41437', 1, 1, 7),
(11, 111, 'Bank Riau Kepri Cabang Tanjung Balai Karimun', 'Jl. Pertambangan No. 23A Tj. Balai Karimun', 'Telp. : 0777-31900/22900/23623', 'Fax. : 0777-22012', 1, 1, 13),
(12, 112, 'Bank Riau Kepri Cabang Pangkalan Kerinci', 'Jl. Maharaja Indra No. 490', 'Telp. : 0761-95731/95732', 'Fax. : 0761-95735', 1, 1, 3),
(13, 113, 'Bank Riau Kepri Cabang Bagan Siapi-Api', 'Jl. Perniagaan Bagan Siapi-Api', 'Telp. : 0767-24369/24370/22860', 'Fax. : 0767-24368', 1, 1, 6),
(14, 114, 'Bank Riau Kepri Cabang Taluk Kuantan', 'Jl. Imam Munandar, Desa Beringin, Taluk Kuantan', 'Telp. : 0760-561651/ 561652', 'Fax. : 0760-561653', 1, 1, 4),
(15, 115, 'Bank Riau Kepri Cabang Pasir Pangarayan', 'Jl. Pasar Senen Pasir Pangarayan', 'Telp. : 0762-91260', 'Fax. : 0762-91151/91301', 1, 1, 5),
(16, 116, 'Bank Riau Kepri Cabang Siak Sri Indrapura', 'Jl. Sultan Ismail No. 72 Siak Sri Indrapura', 'Telp. : 0764-20461/20462/320770', 'Fax. : 0764-20463', 1, 1, 14),
(17, 117, 'Bank Riau Kepri Cabang Ranai', 'Jl. Datuk Kaya Wan Muhammad Benteng Natuna', 'Telp. : 0773-31532/31077', 'Fax. : 0773-31533', 1, 1, 15),
(18, 118, 'Bank Riau Kepri Cabang Syariah Pekanbaru', 'Jl. Jend. Sudirman No.628 Pekanbaru', 'Telp. : 0761-32826', 'Fax. : 0761-856356', 1, 1, 1),
(19, 119, 'Bank Riau Kepri Cabang Syariah Tanjung Pinang', 'Jl. Raja Ali Haji Komplek Pamedan No. 1-2, Tanjung Pinang', 'Telp. : 0771-317970', 'Fax. : 0771-317971', 1, 1, 12),
(20, 120, 'Bank Riau Kepri Cabang Pembantu Senapelan', 'Jl. Senapelan No. 19 Pasar Bawah Pekanbaru', 'Telp. : 0761-857412', 'Fax. : 0761-857415', 1, 1, 1),
(21, 121, 'Bank Riau Kepri Cabang Pembantu Perawang', 'Jl. Raya Perawang KM. 5', 'Telp. : 0761-693753/693755', 'Fax. : 0761-693754', 1, 1, 14),
(22, 122, 'Bank Riau Kepri Cabang Pembantu Duri', 'Jl. Hang Tuah No. 21-22 Duri', 'Telp. : 0765-597675/597677', 'Fax. : 0765-596808', 1, 1, 10),
(23, 123, 'Bank Riau Kepri Cabang Pembantu Tanjung Batu', 'Jl. Merdeka No. 14 Tanjung Batu', 'Telp. : 0779-431555/431629', 'Fax. : 0779-431630', 1, 1, 13),
(24, 124, 'Bank Riau Kepri Cabang Pembantu Ujung Batu', 'Jl. Jend. Sudirman No. 86 Ujung Batu', 'Telp. : 0762-62109/62103', 'Fax. : 0762-61444', 1, 1, 5),
(25, 125, 'Bank Riau Kepri Cabang Pembantu Bagan Batu', 'Jl. Jend. Sudirman Bagan Sinembah', 'Telp. : 0765-51290', 'Fax. : 0765-51441', 1, 1, 6),
(26, 126, 'Bank Riau Kepri Cabang Pembantu Sorek', 'Jl. Raya Lintas Timur No. 105 Pangkalan Kuras', 'Telp. : 0761-492395/492396', 'Fax. : 0761-492164', 1, 1, 7),
(27, 127, 'Bank Riau Kepri Cabang Pembantu Lubuk Baja', 'Jl. Pembangunan No. 1 Nagoya Lubuk Baja Batam', 'Telp. : 0778-458343/458433/459015', 'Fax. : 0778-455073', 1, 1, 1),
(28, 128, 'Bank Riau Kepri Cabang Pembantu Dabo Singkep', 'Jl. Perusahaan, Dabo Singkep', 'Telp. : 0776-322072/322279', 'Fax. : 0776-322278', 1, 1, 17),
(29, 129, 'Bank Riau Kepri Cabang Bintan', 'Jl. WR. Supratman/ Jl. Raja Tanjung Uban KM 16 No 3,4 & 5 Kec Toapaya Kab. Bintan', 'Telp. : 0771-463445/463446', 'Fax. : 0771-463451', 1, 1, 18),
(30, 130, 'Bank Riau Kepri Cabang Pembantu Kandis', 'Jl. Lintas Pekanbaru-Duri', 'Telp. : 0761-598314/598302', 'Fax. : 0761-598312', 1, 1, 14),
(31, 131, 'Bank Riau Kepri Cabang Pembantu Lipat Kain', 'Jl. Raya Lipat Kain Taluk Kuantan, Kampar Kiri', 'Telp. : 0761-676531/676532', 'Fax. : 0761-676530', 1, 1, 2),
(32, 132, 'Bank Riau Kepri Cabang Pembantu Tuanku Tambusai', 'Jl. Tuanku Tambusai No. 135 B Pekanbaru', 'Telp. : 0761-39915/39914', 'Fax. : 0761-39913', 1, 1, 1),
(33, 133, 'Bank Riau Kepri Cabang Pembantu Tanjung Uban', 'Jl. Permaisuri Blok A No. 2, Kec. Bintan Utara', 'Telp. : 0771-483400', 'Fax. : 0771-483403', 1, 1, 18),
(34, 134, 'Bank Riau Kepri Cabang Pembantu Syariah Tembilahan', 'JL. Jend Sudirman - Pasar Baru, Tembilahan, Inhil', 'Telp. : 0768-325715/325716', 'Fax. : 0768-325717', 1, 1, 8),
(35, 135, 'Bank Riau Kepri Cabang Pembantu Syariah Duri', 'Jl. Sudirman 158 A Kel. Air Jamban - Mandau Duri.', 'Telp. : 0765-94800/94801', 'Fax. : 0765-94802', 1, 1, 10),
(36, 136, 'Bank Riau Kepri Cabang Pembantu Dalu-Dalu', 'Jl. Lintas Prov. Riau - SUMUT, Desa Talikumain, Tambusai Rohul', 'Telp. : 0812 7067 3337', 'Fax. : 0762-7392445', 1, 1, 5),
(37, 137, 'Bank Riau Kepri Cabang Pembantu Kota Tengah', 'RT 02/02 Gelugur Kota Tengah Kel. Kepenuhan – Rohul', 'Telp. : 0762-7392300', 'Fax. : 0762-7392300', 1, 1, 5),
(38, 138, 'Bank Riau Kepri Cabang Pembantu Lubuk Dalam', 'Jl. Pertamina, Desa Rawang Kao Kec. Lubuk Dalam Siak Sri Indrapura', 'Telp. : 0761-7816616/7816617', 'Fax. : 0761-7816618', 1, 1, 14),
(39, 139, 'Bank Riau Kepri Cabang Pembantu Batu Aji', 'Ruko Perumnas Fanindo Blok E/3 Tanjung Uncang Batu Aji - Batam.', 'Telp. : 0778-3581262/3581263', 'Fax. : 0778-3581265', 1, 1, 11),
(40, 140, 'Bank Riau Kepri Cabang Pembantu Ujung Tanjung', 'Jl. Riau, Bagansiapi-api, Ujung Tanjung, Kec. Tanah Putih, Kab.Rokan Hilir', 'Telp. : 0765-7011850/7011851', 'Fax. : 0765-7011852', 1, 1, 6),
(41, 141, 'Bank Riau Kepri Cabang Pembantu Jalan Ahmad Yani', 'Jl. Jend. Ahmad Yani No.60, Pekanbaru', 'Telp. : 0761-37486/37094', 'Fax. : 0761-37201', 1, 1, 1),
(42, 142, 'Bank Riau Kepri Cabang Pembantu Syariah Batam', 'Komp. Ruko Tiban Impian Blok A.2 No. 1 Tiban-Sekupang Batam', 'Telp. : 0778-326360', 'Fax. : 0778-326359', 1, 1, 11),
(43, 143, 'Bank Riau Kepri Cabang Pembantu Tarempa', 'Jl. Hang Tuah, Tarempa, Kab. Anambas', 'Telp. : 0772-31044', 'Fax. : 0722-31083', 1, 1, 19),
(44, 144, 'Bank Riau Kepri Cabang Pembantu Daik Lingga', 'Jl. Istana Robat Daik, Kec. Lingga, Kab. Lingga Kepri', 'Telp. : 08127061174', 'Fax. : -', 1, 1, 12),
(45, 145, 'Bank Riau Kepri Cabang Pembantu Kota Baru', 'Pasar Kota Baru Kec. Batang Gansal Kab. Inhil', 'Telp. : 085356611175', 'Fax. : -', 1, 1, 8),
(46, 146, 'Bank Riau Kepri Cabang Pembantu Flamboyan', 'Jl. Raya Petapahan – Kota Garo No. 48-49 RT/RW 16/06 Desa Tanjung Sawit, Kec. Tapung, Kampar', 'Telp. : 0828-83039152/ 0828-83039154', 'Fax. : 0828-83039151/ 0828-83039153', 1, 1, 2),
(47, 147, 'Bank Riau Kepri Kedai Marpoyan', 'Jl. Kaharudin Nasution No. 56 B Pekanbaru', 'Telp. : 0761-674179', 'Fax. : 0761- 679057', 1, 1, 1),
(48, 148, 'Bank Riau Kepri Kedai Sei Apit', 'Jl. Hangtuah, Pasar Sei Apit', 'Telp. : 0766-51112/51222', 'Fax. : 0766-51157', 1, 1, 14),
(49, 149, 'Bank Riau Kepri Kedai Pasar Kuok', 'Jl. Raya Bangkinang-Padang', 'Telp. : 0762-323721', 'Fax. : 0762-323722', 1, 1, 2),
(50, 150, 'Bank Riau Kepri Kedai Minas', 'Jl. Yos Sudarso Kel. Minas Raya Minas', 'Telp. : 0761-598901', 'Fax. : 0761-598900', 1, 1, 14),
(51, 151, 'Bank Riau Kepri Kedai Ukui', 'Jl. Lintas Timur RT 02/01 Pasar Ukui Kec. Ukui Kab. Pelalawan', 'Telp. : 0769-7445244', 'Fax. : 0769-7445245', 1, 1, 3),
(52, 152, 'Bank Riau Kepri Kedai Bukit Kapur', 'Jl. Sukarno Hatta, Bukit Kapur - Dumai', 'Telp. : 0765-7011325', 'Fax. : 0765-7011326', 1, 1, 9),
(53, 153, 'Bank Riau Kepri Kedai Sedanau', 'Jl. Pelontar II (NATO) Kabupaten Natuna', 'Telp. : 0811 7047 008', 'Fax.: -', 1, 1, 15),
(54, 154, 'Bank Riau Kepri Kedai Pasar Pinggir', 'Jl. Lintas Duri Pekanbaru RT 02/RW 01 Desa Pinggir Dumai', 'Telp. : 0765-561500', 'Fax. : 0765-561501', 1, 1, 9),
(55, 155, 'Bank Riau Kepri Kedai Pasar Sukaramai (Suram)', 'Pasar Sukramai, Desa Sukaramai-Tapung Hulu, Kampar', 'Telp. : 0762-61731', 'Fax. : 0762-61730', 1, 1, 2),
(56, 156, 'Bank Riau Kepri Kedai Pasar Tanjung Pinang', 'Jl. Lorong Pelontar II Kel. Tanjung Pinang Kota', 'Telp. : 0771-312690', 'Fax. : 0771-312690', 1, 1, 12),
(57, 157, 'Bank Riau Kepri Kedai Dayun', 'Pasar Dayun, Jl. Perawang – Siak', 'Telp. : 0764-7804261', 'Fax. : -0764-7002253', 1, 1, 14),
(58, 158, 'Bank Riau Kepri Kedai Kabun', 'Jl. Lintas Pekanbaru-Pasir Pangarayan Kec. Kabun Rohul', 'Telp. : 0828-83039155/ 0828-83039156', 'Fax. : 0828-83039157', 1, 1, 5),
(59, 159, 'Bank Riau Kepri Kedai Tanjung Samak', 'Jl. A. Yani, Tanjung Samak', '', 'Fax. : -', 1, 1, 16),
(60, 160, 'Bank Riau Kepri Kedai Lubuk Jambi', 'Pasar Lubuk Jambi, Jl. Lintas Timur Kec. Kuantan Mudik', 'Telp. : 08117535951', 'Fax. : -', 1, 1, 4),
(61, 161, 'Bank Riau Kepri Kedai Rengat', 'Jl. Yos Sudarso No 44 Kel. Pasar Kota Kec. Rengat Inhu', 'Telp. : 0769-21495', 'Fax. : 0769-21496', 1, 1, 7),
(62, 162, 'Bank Riau Kepri Kedai Sei Lala', 'Jl. Lintas air Molek-Taluk Kuantan, Desa Sei Lala Perkebunan, Kec. Sei Lala, Kab Inhu', 'Telp. : 0769-7017666', 'Fax. : 0769-7020183', 1, 1, 7),
(63, 163, 'Bank Riau Kepri Kedai Muara Lembu', 'Jl. Jend Sudirman, Kel. Muara Lembu, Kec. Singingi, Kab. Kuansing', '', '', 1, 1, 4),
(64, 164, 'Bank Riau Kepri Kedai Pasar Tandun', 'Jl. Raya Tandun- Ujung Batu, Kec. Tandun, Kab, Rokan Hulu', 'Telp. : 0828-83039191', 'Fax. : 0828-83039200', 1, 1, 5),
(65, 165, 'Bank Riau Kepri  Capem Petapahan', 'Jl. Raya Petapahan, Kec. Tapung', 'Telp. : 0828-83039177', 'Fax. : 0828-83039147/0828-83039148', 1, 1, 2),
(66, 166, 'Bank Riau Kepri Kedai Rantau Kasai', 'Jl. Sultan Zainal Abidin, Rantau Kasai Kec. Tambusai Utara, Kab. Rokan Hulu', 'Telp. : 0828-830038160, Fax : -', '', 1, 1, 5),
(67, 167, 'Bank Riau Kepri Kantor Kas RSUD Arifin Ahmad', 'RSUD Arifin Ahmad Jl. Diponegoro No. 2 Pekanbaru', 'Telp. : 0761-44930', '', 1, 1, 1),
(68, 168, 'Bank Riau Kepri Kantor Kas Samsat Provinsi Riau', 'Kantor Samsat Provinsi Riau Jl. Jendral Sudirman No. 6 Pekanbaru', 'Telp. : 0761-439427', '', 1, 1, 1),
(69, 169, 'Bank Riau Kepri Kantor Kas Walikota Pekanbaru', 'Kantor Walikota Pekanbaru Unit Layanan Terpadu Jl. Jend. Sudirman 464, Pekanbaru', 'Telp. : 0761-839868', '', 1, 1, 1),
(70, 170, 'Bank Riau Kepri Kantor Kas Walikota Dumai', 'Kantor Walikota Dumai Jl. Perwira, Bagan Besar Dumai', 'Telp. : 0765-440100', '', 1, 1, 9),
(71, 171, 'Bank Riau Kepri Kantor Kas Bupati Karimun', 'Komplek Perkantoran Poros Jl. Jend Sudirman, Tanjung Balai Karimun', 'Telp. : 0777-323859', '', 1, 1, 13),
(72, 172, 'Bank Riau Kepri Kantor Kas Pematang Reba', 'Jl. Raya Pematang Rebah', 'Telp. : 0769-341678/341679', '', 1, 1, 7),
(73, 173, 'Bank Riau Kepri Kantor Kas Bank Riau Kepri Kantor Kas Walikota Batam', 'Kantor Walikota Batam Lantai 1 Jl. Engku Puatri No. 1 Batam Center', 'Telp. : 0778-465034', '', 1, 1, 11),
(74, 174, 'Bank Riau Kepri Kantor Kas RSUD Karimun RSUD Karimun', 'Jl. Poros No. 1 Tanjung Balai Karimun', 'Telp. : 0777-328625', '', 1, 1, 13),
(75, 175, 'Bank Riau Kepri Kantor Kas Bupati Siak', 'Kantor Bupati Siak Jl. Sultan Ismail, Siak Sri Indrapura', '', '', 1, 1, 14),
(76, 176, 'Bank Riau Kepri Kantor Kas Bupati Natuna', 'Kompleks Kantor Bupati Natuna  Jl. Batu Sisir - Bukit Arai, Ranai.', '', '', 1, 1, 15),
(77, 177, 'Bank Riau Kepri Kantor Kas Walikota Tj. Pinang', 'Kompleks Kantor Walikota Tj. Pinang Jl. Raya Sebauk – Senggarang', '', '', 1, 1, 12),
(78, 178, 'Bank Riau Kepri Kantor Kas Bupati Kampar', 'Kantor Bupati Kampar Jl. H.R. Soebrantas, Bangkinang', '', '', 1, 1, 2),
(79, 179, 'Bank Riau Kepri Kantor Kas Unilak', 'Universitas Lancang Kuning Jl. DI. Panjaitan KM 8 Rumbai Pekanbaru', '', '', 1, 1, 1),
(80, 180, 'Bank Riau Kepri Kantor Kas Bupati Pelalawan', 'Kantor Bupati Pelalawan Lt. 1 Jl. Lintas Timur Pkl. Kerinci, Pelalawan', '', '', 1, 1, 3),
(81, 181, 'Bank Riau Kepri Kantor Kas Bupati Bengkalis', 'Kantor Bupati Bengkalis Jl. Jend. A. Yani, Bengkalis', '', '', 1, 1, 10),
(82, 182, 'Bank Riau Kepri Kantor Kas Chevron Rumbai', 'Bank Office Chevron Rumbai', '', '', 1, 1, 1),
(83, 183, 'Bank Riau Kepri Kantor Kas Bupati Kuansing', 'Komplek Perkantoran Bupati Kuansing Jl. Senambek Sungai Jering Taluk Kuantan', '', '', 1, 1, 4),
(84, 184, 'Bank Riau Kepri Kantor Kas Gubernur Riau', 'Kantor Gubernur Riau, Menara LancangKuning/Gedung 9 Lantai 1 Jl. Jend. Sudirman 460', '', '', 1, 1, 1),
(85, 0, 'Bank Riau Kepri Kantor Kas Bupati Rokan Hilir', 'Jl. Merdeka No. 58, Bagan Siapi-api, Rohil', '', '', 1, 1, 6),
(86, 0, 'Bank Riau Kepri Kantor Kas Dispenda Kota Pekanbaru', 'Jl. Teratai No. 81 Pekanbaru', '', '', 1, 1, 2),
(87, 0, 'Bank Riau Kepri Kantor Kas Bupati Bintan', 'Kantor Bupati Bintan, Bandar Seri Bentan KM 42, Bintan Bunyu, Kec. Teluk Bintan, Kab. Bintan, Provinsi Kepulauan Riau', '', '', 1, 1, 12),
(88, 0, 'Bank Riau Kepri Kantor Kas BPTPM Kota Dumai', 'Gedung Badan Pelayanan Terpadu Dan Penanaman Modal Kota Dumai Jl. HR. Soebrantas No. 135 Dumai', '', '', 1, 1, 9),
(89, 0, 'Bank Riau Kepri Kantor Kas UPT SPC Batam', 'Gedung Sumatera Promotion Centre Batam Lt. 2 Batam Centre.', '', '', 1, 1, 11),
(90, 0, 'Bank Riau Kepri Kantor Kas BPTP2M Rokan Hulu', 'Gedung BPTP2M Rokan Hulu, Komplek Perkantoran Bupati Rokan Hulu', '', '', 1, 1, 5),
(91, 0, 'Bank Riau Kepri Butik Mall SKA', 'Mall SKA Lt. 2 Pekanbaru Jl. Soekarno Hatta', 'Telp. : 0761-854756', '', 1, 1, 1),
(92, 0, 'Bank Riau Kepri Butik Mall Ciputra Seraya', 'Mall Ciputra Seraya Lt. 2 Jl. Riau, Pekanbaru', 'Telp. : 0761- 8568977', 'Fax. : 0761- 8568955', 1, 1, 1),
(93, 0, 'Bank Riau Kepri Butik Mall Nagoya Hill', 'Mall Nagoya Hill Lt. Dasar SM-Q9 Jl. Imam Bonjol, Lubuk Baja, Batam', 'Telp. : 0778-7493677', 'Fax. : 0778-7493676', 1, 1, 11),
(94, 0, 'Bank Riau Kepri Butik Mega Mall', 'Mega Mall Batam center Lt. 1/F 255 Jl. Engku Putri Batam.', 'Telp. : 0778-470816', 'Fax. : 0778-470217', 1, 1, 11),
(95, 0, 'Bank Riau Kepri Kedai Meral', 'Jl. A. Yani No. 12 Kel. Meral Kota Kec. Meral Kab. Karimun Kepri', '0777-361611-361911', '--', 1, 1, 13),
(96, 0, 'Bank Riau Kepri Kedai Bandar Sei Kijang', 'JL. Lintas Timur KM 34 Kel. Sei Kijang Kec. Bandar Sei Kijang Pelalawan', '--', '--', 1, 1, 3),
(97, 0, 'Bank Riau Kepri Cabang Pembantu Bintan Center', 'Jl. DI. Panjaitan KM 9 No. 5-6 Kec. Tanjung Pinang Timur, Tanjung Pinang', '0771-442799', '0771-441600', 1, 1, 18),
(98, 0, 'Bank Riau Kepri Kedai Batupanjang Rupat', '\"Jl. Pelajar RT/RW 02/02 Kec. Batupanjang Rupat', NULL, NULL, 1, 1, 10),
(99, 0, 'Bank Riau Kepri Kedai Sungai Sembilan', 'Kab. Bengkalis\"', '--', '--', 1, 1, 9),
(100, 0, 'Bank Riau Kepri Cabang Pembantu Botania', 'Kec. Sungai Sembilan Kota Dumai', '--', '--', 1, 1, 11),
(101, 0, 'Bank Riau Kepri Kedai Pujud', '\"Komplek Graha Nusa Permai Blok C1 No. 1-3', NULL, NULL, 1, 1, 6),
(102, 0, 'Bank Riau Kepri Cabang Pekanbaru', 'Cikitsu Botania', NULL, NULL, 1, 1, 1),
(103, 0, 'PT. Bank Perkreditan Rakyat Harta Mandiri', 'Kota Batam\"', '--', '--', 1, 7, 1),
(104, 0, 'PT. Bank Perkreditan Rakyat Arsham Sejahtera', '\"Jl. Lintas Pujud - Mahato', NULL, NULL, 1, 8, 1),
(105, 0, 'PT. Bank Perkreditan Rakyat Anugrah Bintang Sejahtera', 'Pujud', NULL, NULL, 1, 9, 1),
(106, 0, 'PT. Bank Perkreditan Rakyat Tunas Mitra Mandiri', 'Kab. Rokan Hilir\"', '--', '--', 1, 10, 1),
(107, 0, 'PT. Bank Perkreditan Rakyat Cempaka Wadah Sejahtera', 'Jl. Jend. Sudirman No. 377 Pekanbaru', '0761-848711/848712', '0761-32872', 1, 11, 1),
(108, 0, 'PT. Bank Perkreditan Rakyat Indra Arta', 'Jl. Ir. H. Juanda No.11, Kel. Kampung Dalam, Kec. Senapelan, Pekanbaru, Riau', '0761-32656', '0761-32656', 1, 12, 1),
(109, 0, 'PT. Bank Perkreditan Rakyat Payung Negeri Bestari', 'Jl. Durian No. 99 B, Kp. Melayu Kec. Sukajadi, Pekanbaru, Riau', '0761-859384', '0761-859384', 1, 13, 1),
(110, 0, 'PT. Bank Perkreditan Rakyat Duta Perdana', 'Jl. Jenderal Sudirman No. 125 Kel. Tangkerang Selatan, Kec. Bukit Raya, Pekanbaru, Riau 28128', '0761-38949', '0761-38949', 1, 14, 1),
(111, 0, 'PT. Bank Perkreditan Rakyat Artha Margahayu', 'Jl. Jend. Ahmad Yani No. 15, Kel. Senapelan, Kec. Padang Terubuk, Pekanbaru, Riau 28155', '0761-29880', '0761-29880', 1, 15, 1),
(112, 0, 'PT. Bank Perkreditan Rakyat Universal Karya Mandiri', 'Jl. Jend. Sudirman No. 83, RT 002/011 Kel. Tangkerang Tengah, Kec. Marpoyan Damai, Pekanbaru, Riau, 28128', '--', '--', 1, 16, 1),
(113, 0, 'KOPERASI KARYAWAN PT. BANK RIAU', 'Jl. Bupati Tulus, No. 07, Rengat, Kab. Indragiri Hulu, Riau', '0769-323006', '0769-323006', 1, 5, 1),
(114, 0, 'PT. PERMODALAN EKONOMI RAKYAT', 'Jl. Tuanku Tambusai No. 35 B RT 001/RW 001 Kel. Wonorejo, Kec. Marpoyan Damai', '0761-859384', '0761-859384', 1, 6, 1),
(115, 0, 'Bank Riau Kepri Cabang Pembantu Sungai Pakning', 'Jl. Jend. Sudirman No. 149, Sungai Pakning', 'Telp. : 0766-391657/391603', 'Fax. : 0766-391654', 19, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblrs`
--

CREATE TABLE `tblrs` (
  `RSid` int(11) NOT NULL,
  `RSrekening` varchar(255) DEFAULT NULL,
  `RSbank` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrs`
--

INSERT INTO `tblrs` (`RSid`, `RSrekening`, `RSbank`) VALUES
(1, '101.20.03064', 'Bank Riau Kepri Cabang Utama'),
(2, '118.20.04732', 'Bank Riau Kepri Cabang Pembantu Tangkerang'),
(3, '116.20.00187', 'Bank Riau Kepri Kedai Arengka'),
(4, '148.20.00327', 'Bank Riau Kepri Cabang Pembantu Sungai Guntung'),
(5, '133.06.00007', 'Bank Riau Kepri Cabang Pembantu  Belilas'),
(6, '119.06.00004', 'Bank Riau Kepri Cabang Pembantu Rumbai'),
(8, '0900000812', 'PT. Bank Yudha Bhakti'),
(9, '00103000289', 'PT. Bank Perkreditan Rakyat Unisritama'),
(11, '187.20.00001', 'Bank Riau Kepri Kedai Bandar Sei Kijang'),
(12, '176.20.00090', 'Bank Riau Kepri Kedai Kuala Kilan'),
(14, '134.20.01040', 'Bank Riau Kepri Cabang Pembantu Panam'),
(15, '140.20.00434', 'Bank Riau Kepri Kedai Sail'),
(16, '156.20.00309', 'Bank Riau Kepri Kedai Pasar Pangkaan Kerinci'),
(17, '185.20.00030', 'Bank Riau Kepri Kedai Teluk Belitung'),
(18, '149.20.00212', 'Bank Riau Kepri Cabang Pembantu Jalan Riau'),
(19, '124.20.02822', 'Bank Riau Kepri Cabang Pembantu Sungai Pakning'),
(20, '145.20.00184', 'Bank Riau Kepri Kedai Durian'),
(21, '155.20.01846', 'Bank Riau Kepri Cabang Pembantu Baserah'),
(22, '157.20.00553', 'Bank Riau Kepri Kedai Peranap'),
(23, '153.20.00195', 'Bank Riau Kepri Kedai Midai'),
(24, '142.20.01246', 'Bank Riau Kepri Kedai Air Tiris'),
(25, '114.20.10469', 'Bank Riau Kepri Cabang Taluk Kuantan'),
(26, '189.20.0002', 'Bank Riau Kepri Kedai Sabak Auh');

-- --------------------------------------------------------

--
-- Table structure for table `tblspj`
--

CREATE TABLE `tblspj` (
  `SPJid` int(11) NOT NULL,
  `SPJnama` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblspj`
--

INSERT INTO `tblspj` (`SPJid`, `SPJnama`) VALUES
(1, 'Baru'),
(2, 'Endorsement');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubrogasi`
--

CREATE TABLE `tblsubrogasi` (
  `idSubro` int(255) NOT NULL,
  `sub_tglbayarklaim` varchar(255) DEFAULT NULL,
  `subPPnama` varchar(255) DEFAULT NULL,
  `subproduk` varchar(255) DEFAULT NULL,
  `subnmterjamin` varchar(255) DEFAULT NULL,
  `subplafond` varchar(255) DEFAULT NULL,
  `subnilai_jaminan` varchar(255) DEFAULT NULL,
  `subcoverage` varchar(255) DEFAULT NULL,
  `subnominal_klaim` varchar(255) DEFAULT NULL,
  `sub_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubrogasi`
--

INSERT INTO `tblsubrogasi` (`idSubro`, `sub_tglbayarklaim`, `subPPnama`, `subproduk`, `subnmterjamin`, `subplafond`, `subnilai_jaminan`, `subcoverage`, `subnominal_klaim`, `sub_status`) VALUES
(1, '2017-12-29', 'KEDAI UKUI', 'PRODUKTIF', 'ADE SUGIARTO', '80000000', '24000000', '0.3', '19623197', 'DIBAYAR'),
(2, '2015-02-13', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'M. LUBIS', '75000000', '37500000', '0.5', '36552703', 'DIBAYAR'),
(3, '2015-05-27', 'CABANG PEMBANTU UJUNG TANJUNG', 'PRODUKTIF KUR', 'MARDIANTO', '500000000', '375000000', '0.75', '327656247', 'DIBAYAR'),
(4, '2015-07-31', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'SUTRI MARHENI', '85000000', '42500000', '0.5', '10101886', 'DIBAYAR'),
(5, '2015-11-30', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF KUR', 'IDRUS SYAM', '500000000', '375000000', '0.75', '93263885', 'DIBAYAR'),
(6, '2015-12-22', 'CABANG PEMBANTU TANJUNG UBAN', 'PRODUKTIF', 'YANCE OKTAVIANO', '105000000', '105000000', '1', '78641790', 'DIBAYAR'),
(7, '2015-12-22', 'KEDAI AIR TIRIS', 'PRODUKTIF', 'ZAINAL ANDRI', '100000000', '30000000', '0.3', '23667136', 'DIBAYAR'),
(8, '2016-02-23', 'CABANG RANAI', 'PRODUKTIF KUR', 'ADNAN', '50000000', '37500000', '0.75', '7917970', 'DIBAYAR'),
(9, '2016-03-08', 'KEDAI PUJUD', 'PRODUKTIF', 'SUGIANTI', '55000000', '41250000', '0.75', '37346616', 'DIBAYAR'),
(10, '2016-03-14', 'KEDAI MARPOYAN', 'PRODUKTIF', 'LA ODE ASRUN', '25000000', '18750000', '0.75', '13934280', 'DIBAYAR'),
(11, '2016-03-29', 'CABANG PEMBANTU RUMBAI', 'PRODUKTIF KUR', 'RITA ANTHONY', '300000000', '225000000', '0.75', '215671871', 'DIBAYAR'),
(12, '2016-05-03', 'KEDAI TANJUNG SAMAK', 'PRODUKTIF', 'SUWANDI', '25000000', '18750000', '0.75', '9181279', 'DIBAYAR'),
(13, '2016-06-06', 'CABANG PEMBANTU KOTA TENGAH', 'PRODUKTIF', 'ISMANTO', '100000000', '30000000', '0.3', '22327221', 'DIBAYAR'),
(14, '2016-06-06', 'CABANG PEMBANTU PERAWANG', 'PRODUKTIF KUR', 'SRI DAHLIANA SIAHAAN', '99000000', '74250000', '0.75', '79720826', 'DIBAYAR'),
(15, '2016-06-06', 'KEDAI PASAR PAGI ARENGKA', 'PRODUKTIF', 'AMINAN', '60000000', '45000000', '0.75', '31365562', 'DIBAYAR'),
(16, '2016-06-21', 'CABANG PEMBANTU PERAWANG', 'PRODUKTIF KUR', 'SYAFRI CAN', '30000000', '22500000', '0.75', '27132246', 'DIBAYAR'),
(17, '2016-06-30', 'CABANG PEMBANTU UJUNG TANJUNG', 'PRODUKTIF KUR', 'ANDESWAN', '100000000', '75000000', '0.75', '29494781', 'DIBAYAR'),
(18, '2016-07-01', 'CABANG PEMBANTU TAREMPA', 'PRODUKTIF KUR', 'HERMAN', '100000000', '75000000', '0.75', '32464466', 'DIBAYAR'),
(19, '2016-07-01', 'KEDAI PASAR SAIL', 'PRODUKTIF KUR', 'SITI NURBAYA', '50000000', '37500000', '0.75', '26091146.25', 'DIBAYAR'),
(20, '2016-09-30', 'KEDAI BATU PANJANG RUPAT', 'PRODUKTIF KUR', 'SYAIPUL AMRI', '100000000', '75000000', '0.75', '35854154', 'DIBAYAR'),
(21, '2016-10-27', 'KEDAI BATU PANJANG RUPAT', 'PRODUKTIF', 'MUHAMMAD JHONI. S', '50000000', '25000000', '0.5', '16712765', 'DIBAYAR'),
(22, '2016-10-28', 'KEDAI PASAR SAIL', 'PRODUKTIF', 'WARNI', '50000000', '37500000', '0.75', '12954697', 'DIBAYAR'),
(23, '2016-12-30', 'KEDAI SUNGAI SEMBILAN', 'PRODUKTIF', 'ASRUL', '100000000', '50000000', '0.5', '47694274', 'DIBAYAR'),
(24, '2016-12-30', 'KEDAI PASAR PAGI ARENGKA', 'PRODUKTIF', 'KASLAN TAMPUBOLON', '200000000', '100000000', '0.5', '124999994', 'DIBAYAR'),
(25, '2017-01-17', 'KEDAI DURIAN', 'PRODUKTIF', 'JOHNNY HANNY TOMPUNU', '100000000', '50000000', '0.5', '91167395', 'DIBAYAR'),
(26, '2017-02-16', 'KEDAI PUJUD', 'PRODUKTIF', 'ROMADONI', '50000000', '37500000', '0.75', '27103020', 'DIBAYAR'),
(27, '2017-03-06', 'CABANG PEMBANTU BASERAH', 'PRODUKTIF KUR', 'JHON HELDANIS', '50000000', '37500000', '0.75', '23171723', 'DIBAYAR'),
(28, '2017-03-31', 'KEDAI MUARA LEMBU', 'PRODUKTIF', 'EGI YUNDA SULISTIO', '80000000', '40000000', '0.5', '18323821', 'DIBAYAR'),
(29, '2017-05-09', 'CABANG PEMBANTU UJUNG TANJUNG', 'PRODUKTIF', 'PONIMIN', '100000000', '50000000', '0.5', '27280017', 'DIBAYAR'),
(30, '2017-05-22', 'CABANG PEMBANTU RUMBAI', 'PRODUKTIF', 'PT. BUDI PERKASA PANCA', '250000000', '125000000', '0.5', '46968605', 'DIBAYAR'),
(31, '2017-05-31', 'CABANG SIAK SRI INDRAPURA ', 'PRODUKTIF KUR', 'NGATMINI EKA PRATIWI', '125000000', '93750000', '0.75', '57460925', 'DIBAYAR'),
(32, '2017-06-21', 'CABANG PEMBANTU BASERAH', 'PRODUKTIF', 'NURLELI', '250000000', '125000000', '0.5', '75115358', 'DIBAYAR'),
(33, '2017-07-11', 'KEDAI SEI LALA', 'PRODUKTIF', 'MASNIANTO', '99000000', '49500000', '0.5', '40283745', 'DIBAYAR'),
(34, '2017-07-14', 'KEDAI PERANAP', 'PRODUKTIF', 'HASBUN', '100000000', '75000000', '0.75', '29625336', 'DIBAYAR'),
(35, '2017-09-20', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'SYAMSURI', '500000000', '375000000', '0.75', '103608597', 'DIBAYAR'),
(36, '2017-09-28', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'MARIO ARDI', '35000000', '26250000', '0.75', '6698684', 'DIBAYAR'),
(37, '2017-09-29', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'PRODUKTIF', 'ABDUL HAFID', '95000000', '47500000', '0.5', '35603235', 'DIBAYAR'),
(38, '2017-10-04', 'CABANG PEMBANTU BELILAS', 'PRODUKTIF', 'ABDUL MURSYID YANTO', '70000000', '52500000', '0.75', '35406278', 'DIBAYAR'),
(39, '2017-10-04', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'ALAINA', '90000000', '45000000', '0.5', '11751038', 'DIBAYAR'),
(40, '2017-10-04', 'CABANG PEMBANTU BAGAN BATU', 'PRODUKTIF KUR', 'JULIONO', '100000000', '75000000', '0.75', '41737501', 'DIBAYAR'),
(41, '2017-10-04', 'CABANG PEMBANTU BAGAN BATU', 'PRODUKTIF', 'ANGGI NOVIANTO', '200000000', '60000000', '0.3', '51012501', 'DIBAYAR'),
(42, '2017-10-24', 'KEDAI SUNGAI SEMBILAN', 'PRODUKTIF', 'MISLIYADI', '40000000', '30000000', '0.75', '21851393', 'DIBAYAR'),
(43, '2017-10-24', 'KEDAI PERANAP', 'PRODUKTIF', 'SATIYO RIKUH', '80000000', '60000000', '0.75', '42663350', 'DIBAYAR'),
(44, '2017-10-31', 'KEDAI PASAR PAGI ARENGKA', 'PRODUKTIF KUR', 'RIZKY HERIANTO', '130000000', '97500000', '0.75', '72160163', 'DIBAYAR'),
(45, '2017-10-31', 'CABANG PEMBANTU BASERAH', 'PRODUKTIF KUR', 'PAUZI', '25000000', '18750000', '0.75', '16026577', 'DIBAYAR'),
(46, '2017-11-30', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'ZULFERI', '100000000', '50000000', '0.5', '31942003', 'DIBAYAR'),
(47, '2017-12-29', 'KEDAI DURIAN', 'PRODUKTIF', 'DIMAS RIYANTO', '65000000', '48750000', '0.75', '33979348', 'DIBAYAR'),
(48, '2017-12-29', 'CABANG TALUK KUANTAN', 'PRODUKTIF', 'ABRORI', '500000000', '150000000', '0.3', '79612500', 'DIBAYAR'),
(49, '2017-12-29', 'KEDAI PASAR SAIL', 'PRODUKTIF', 'FITRIYAH', '40000000', '30000000', '0.75', '22150158', 'DIBAYAR'),
(50, '2018-01-12', 'KEDAI PASAR PAGI ARENGKA', 'PRODUKTIF', 'PARLINDUNGAN SIHITE', '200000000', '100000000', '0.5', '83197913', 'DIBAYAR'),
(51, '2018-01-30', 'CABANG PEMBANTU UJUNG TANJUNG', 'PRODUKTIF', 'AZIMAR', '200000000', '150000000', '0.75', '125683672', 'DIBAYAR'),
(52, '2018-02-15', 'CABANG PEMBANTU UJUNG TANJUNG', 'PRODUKTIF KUR', 'EFENDI', '100000000', '75000000', '0.75', '52232295', 'DIBAYAR'),
(53, '2018-02-21', 'KEDAI MERAL', 'PRODUKTIF', 'SUHELMI SAHLI', '50000000', '25000000', '0.5', '20596311', 'DIBAYAR'),
(54, '2018-03-02', 'KEDAI BATU PANJANG RUPAT', 'PRODUKTIF KUR', 'ANDIKA', '100000000', '75000000', '0.75', '54498809', 'DIBAYAR'),
(55, '2018-03-29', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'AHMAD ZAKI', '100000000', '50000000', '0.5', '21014075', 'DIBAYAR'),
(56, '2018-04-30', 'CABANG SIAK SRI INDRAPURA ', 'PRODUKTIF KUR', 'RASIM ', '150000000', '112500000', '0.75', '73722660', 'DIBAYAR'),
(57, '2018-06-25', 'CABANG PEMBANTU BELILAS', 'PRODUKTIF', 'DIAN RAHMI', '350000000', '175000000', '0.5', '145846954', 'DIBAYAR'),
(58, '2018-06-25', 'CABANG PEMBANTU BASERAH ', 'PRODUKTIF KUR', 'NGAMIMAH', '250000000', '187500000', '0.75', '44731873', 'DIBAYAR'),
(59, '2018-06-25', 'CABANG PEMBANTU BASERAH ', 'PRODUKTIF KUR', 'JHONI HERIANTO', '30000000', '22500000', '0.75', '9967182', 'DIBAYAR'),
(60, '2018-06-25', 'KEDAI PASAR SAIL', 'PRODUKTIF', 'SUPARMAN', '75000000', '37500000', '0.5', '16659985', 'DIBAYAR'),
(61, '2018-06-25', 'KEDAI PASAR SAIL', 'PRODUKTIF KUR', 'HENDRI YANTO', '15000000', '11250000', '0.75', '5205480', 'DIBAYAR'),
(62, '2018-07-10', 'CABANG TALUK KUANTAN ', 'PRODUKTIF KUR', 'RADEN', '500000000', '375000000', '0.75', '213945317', 'DIBAYAR'),
(63, '2018-07-23', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'SUSI ANGGRAINI', '300000000', '90000000', '0.3', '66067503', 'DIBAYAR'),
(64, '2018-07-31', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'SULASTRI', '300000000', '225000000', '0.75', '95468758', 'DIBAYAR'),
(65, '2018-07-31', 'KEDAI TANDUN', 'PRODUKTIF', 'SRI RAHAYU', '99000000', '74250000', '0.75', '52931043', 'DIBAYAR'),
(66, '2018-08-21', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'YEYET SUSMIATI', '55000000', '27500000', '0.5', '17187673', 'DIBAYAR'),
(67, '2018-09-19', 'CABANG PEMBANTU KANDIS', 'PRODUKTIF KUR', 'YUNI PERWITA SARI', '300000000', '225000000', '0.75', '137908986', 'DIBAYAR'),
(68, '2018-09-19', 'CABANG PEMBANTU KANDIS', 'PRODUKTIF KUR', 'DARIS', '400000000', '300000000', '0.75', '183878657', 'DIBAYAR'),
(69, '2018-10-29', 'CABANG PEMBANTU BELILAS', 'PRODUKTIF', 'SISKA IRMAYANI', '51000000', '15300000', '0.3', '6005192', 'DIBAYAR'),
(70, '2018-11-19', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'AHMAD MASKUM', '250000000', '125000000', '0.5', '47511369', 'DIBAYAR'),
(71, '2018-11-19', 'KEDAI KUALA KILAN', 'PRODUKTIF', 'TAUFIQ KUROHMAN', '100000000', '75000000', '0.75', '54818518', 'DIBAYAR'),
(72, '2018-11-19', 'KEDAI SUNGAI SEMBILAN', 'PRODUKTIF', 'MASITA', '200000000', '100000000', '0.5', '93645868', 'DIBAYAR'),
(73, '2018-11-19', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'RUSDI', '1100000000', '330000000', '0.3', '231440002', 'DIBAYAR'),
(74, '2018-11-30', 'CABANG PEMBANTU SUNGAI PAKNING', 'PRODUKTIF KUR', 'HADI PURWANTO', '150000000', '112500000', '0.75', '97595260', 'DIBAYAR'),
(75, '2018-11-30', 'CABANG PEMBANTU KOTA BARU', 'PRODUKTIF KUR', 'TAPSIRUDDIN', '150000000', '112500000', '0.75', '73497660', 'DIBAYAR'),
(76, '2018-11-30', 'CABANG PEMBANTU UJUNG BATU', 'PRODUKTIF KUR', 'NOVARI MURENA', '300000000', '225000000', '0.75', '152953125', 'DIBAYAR'),
(77, '2018-11-30', 'KEDAI PERANAP', 'PRODUKTIF', 'HERNATAL SITANGGANG', '75000000', '56250000', '0.75', '45480946', 'DIBAYAR'),
(78, '2018-12-31', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'A H BAKRI', '100000000', '30000000', '0.3', '15701248', 'DIBAYAR'),
(79, '2018-12-31', 'KEDAI AIR TIRIS', 'PRODUKTIF', 'MURSALIN', '350000000', '105000000', '0.3', '80514585', 'DIBAYAR'),
(80, '2018-12-31', 'KEDAI PUJUD', 'PRODUKTIF', 'ARLIO NOSKI', '99000000', '74250000', '0.75', '50256795', 'DIBAYAR'),
(81, '2018-12-31', 'KEDAI PASAR MINAS', 'PRODUKTIF', 'MISWARNI', '40000000', '12000000', '0.3', '10179875', 'DIBAYAR'),
(82, '2018-12-31', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'YOSE RIZAL', '200000000', '100000000', '0.5', '80425825', 'DIBAYAR'),
(83, '2018-12-31', 'CABANG PANGKALAN KERINCI', 'PRODUKTIF', 'HENDRA PUTRA', '500000000', '250000000', '0.5', '163326394', 'DIBAYAR'),
(84, '2018-12-31', 'CABANG PANGKALAN KERINCI', 'PRODUKTIF', 'ZULKIFLI HENDRI', '500000000', '250000000', '0.5', '171762576', 'DIBAYAR'),
(85, '2019-01-25', 'CABANG PEMBANTU BAGAN BATU', 'PRODUKTIF KUR', 'RAMONO', '100000000', '75000000', '0.75', '67445758', 'DIBAYAR'),
(86, '2019-02-01', 'KEDAI SUNGAI APIT', 'PRODUKTIF KUR', 'EDI AZWAR', '25000000', '18750000', '0.75', '12997222', 'DIBAYAR'),
(87, '2019-02-15', 'KEDAI SUKARAMAI', 'PRODUKTIF KUR', 'JAMARIS', '25000000', '18750000', '0.75', '4260303', 'DIBAYAR'),
(88, '2019-02-28', 'KEDAI DURIAN', 'PRODUKTIF', 'DANANG WANARSA', '30000000', '15000000', '0.5', '10024327', 'DIBAYAR'),
(89, '2019-02-28', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'MUKTI EFENDI', '250000000', '125000000', '0.5', '118020839', 'DIBAYAR'),
(90, '2019-03-22', 'CABANG PEMBANTU BASERAH', 'PRODUKTIF KUR', 'MASTUR', '500000000', '375000000', '0.75', '291556251', 'DIBAYAR'),
(91, '2019-03-29', 'KEDAI SEI LALA', 'PRODUKTIF', 'AJRUL HUSNI', '40000000', '20000000', '0.5', '16548064', 'DIBAYAR'),
(92, '2019-03-29', 'KEDAI DURIAN', 'PRODUKTIF KUR', 'AGUSTIAN DAMANTO', '500000000', '375000000', '0.75', '330687507', 'DIBAYAR'),
(93, '2019-04-12', 'CABANG PEMBANTU UJUNG TANJUNG', 'PRODUKTIF KUR', 'DEDI AZMAN', '100000000', '75000000', '0.75', '69980458', 'DIBAYAR'),
(94, '2019-04-12', 'KEDAI PUJUD', 'PRODUKTIF', 'ZEPRI', '40000000', '30000000', '0.75', '17523845', 'DIBAYAR'),
(95, '2019-04-24', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'HADRIANTO', '95000000', '47500000', '0.5', '31223610', 'DIBAYAR'),
(96, '2019-05-02', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'RISNAWATI', '42000000', '21000000', '0.5', '6228949', 'DIBAYAR'),
(97, '2019-05-17', 'KEDAI MERAL', 'PRODUKTIF KUR', 'AGUS SULARNO', '25000000', '18750000', '0.75', '15104723', 'DIBAYAR'),
(98, '2019-05-17', 'CABANG RANAI', 'PRODUKTIF KUR', 'ROHANI', '45000000', '33750000', '0.75', '9585960', 'DIBAYAR'),
(99, '2019-05-17', 'CABANG PEMBANTU PERAWANG', 'PRODUKTIF KUR', 'UJANG GANDA', '20000000', '15000000', '0.75', '8848440', 'DIBAYAR'),
(100, '2019-05-24', 'KEDAI SUNGAI SEMBILAN', 'PRODUKTIF', 'RAHMAN', '75000000', '56250000', '0.75', '28045269', 'DIBAYAR'),
(101, '2019-05-24', 'CABANG RANAI', 'PRODUKTIF KUR', 'ALIAS', '20000000', '15000000', '0.75', '5233752', 'DIBAYAR'),
(102, '2019-05-24', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'PRODUKTIF', 'AMBOK ALANG', '300000000', '150000000', '0.5', '105246980', 'DIBAYAR'),
(103, '2019-05-24', 'KEDAI PERANAP', 'PRODUKTIF', 'DERIS WANDI', '75000000', '37500000', '0.5', '22318053', 'DIBAYAR'),
(104, '2019-06-28', 'KEDAI PASAR SAIL', 'PRODUKTIF', 'JHON ERIZAL', '100000000', '75000000', '0.75', '55419354', 'DIBAYAR'),
(105, '2019-06-28', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'ERIZON', '45000000', '22500000', '0.5', '9732291', 'DIBAYAR'),
(106, '2019-06-28', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'INDRA PUTRA', '95000000', '47500000', '0.5', '36793691', 'DIBAYAR'),
(107, '2019-06-28', 'KEDAI MARPOYAN', 'PRODUKTIF', 'AYODIA SANJAYA', '90000000', '67500000', '0.75', '61956298', 'DIBAYAR'),
(108, '2019-06-28', 'KEDAI DURIAN', 'PRODUKTIF ', 'SUDIONO', '80000000', '40000000', '0.5', '29621647', 'DIBAYAR'),
(109, '2019-06-28', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'LUSIANI', '35000000', '17500000', '0.5', '8558963', 'DIBAYAR'),
(110, '2019-06-28', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'MUHAMMAD ASRORI', '250000000', '125000000', '0.5', '75463187', 'DIBAYAR'),
(111, '2019-07-31', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'SUPAMI', '500000000', '150000000', '0.3', '111297773', 'DIBAYAR'),
(112, '2019-07-31', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'SUPRIYANTO', '400000000', '200000000', '0.5', '165285511', 'DIBAYAR'),
(113, '2019-07-31', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'TUMIJAN', '200000000', '100000000', '0.5', '70124547', 'DIBAYAR'),
(114, '2019-07-31', 'CABANG PEMBANTU RUMBAI', 'PRODUKTIF', 'LISMAR', '270000000', '135000000', '0.5', '127818312', 'DIBAYAR'),
(115, '2019-07-31', 'CABANG PEMBANTU KOTA BARU', 'PRODUKTIF KUR', 'M. ABDILLAH', '20000000', '15000000', '0.75', '14159934', 'DIBAYAR'),
(116, '2019-07-31', 'CABANG DUMAI', 'PRODUKTIF', 'AMIRUDDIN', '900000000', '450000000', '0.5', '437022500', 'DIBAYAR'),
(117, '2019-07-31', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'NURAINI', '20000000', '10000000', '0.5', '6837043', 'DIBAYAR'),
(118, '2019-07-31', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'SAHREL', '45000000', '22500000', '0.5', '14543642', 'DIBAYAR'),
(119, '2019-07-31', 'KEDAI PASAR PAGI ARENGKA', 'PRODUKTIF', 'ARINAH AMY', '140000000', '70000000', '0.5', '63826301', 'DIBAYAR'),
(120, '2019-07-31', 'CABANG PEMBANTU TANJUNG BATU', 'PRODUKTIF', 'ZUR PENDI', '400000000', '120000000', '0.3', '94224011', 'DIBAYAR'),
(121, '2019-07-31', 'CABANG PEMBANTU DABO SINGKEP', 'PRODUKTIF KUR', 'NURMAN', '25000000', '18750000', '0.75', '11471289', 'DIBAYAR'),
(122, '2019-07-31', 'CABANG PEMBANTU BASERAH', 'PRODUKTIF', 'ELMIYETI', '70000000', '52500000', '0.75', '34545407', 'DIBAYAR'),
(123, '2019-07-31', ' CABANG PEMBANTU TANJUNG UBAN', 'PRODUKTIF KUR', 'SUBEDI', '35000000', '26250000', '0.75', '19688777', 'DIBAYAR'),
(124, '2019-07-31', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF KUR', 'GAMAL HARSUM', '75000000', '56250000', '0.75', '34834494', 'DIBAYAR'),
(125, '2019-09-13', 'KEDAI AIR TIRIS', 'PRODUKTIF', 'YEFRIZAL', '30000000', '15000000', '0.5', '12126663', 'DIBAYAR'),
(126, '2019-09-13', 'CABANG PEMBANTU UJUNG TANJUNG', 'PRODUKTIF KUR', 'SURATNO', '100000000', '75000000', '0.75', '50455113', 'DIBAYAR'),
(127, '2019-09-13', 'CABANG PEMBANTU JALAN RIAU', 'PRODUKTIF KUR', 'RASKUN', '150000000', '112500000', '0.75', '105600986', 'DIBAYAR'),
(128, '2019-11-28', 'CABANG RANAI', 'PRODUKTIF KUR', 'IJAL', '20000000', '15000000', '0.75', '6063078', 'DIBAYAR'),
(129, '2019-12-02', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'PRODUKTIF', 'JASMI', '60000000', '45000000', '0.75', '40226284', 'DIBAYAR'),
(130, '2019-12-02', 'CABANG PEMBANTU BASERAH', 'PRODUKTIF', 'IDA GUSTINA', '99000000', '74250000', '0.75', '45343554', 'DIBAYAR'),
(131, '2019-12-02', 'CABANG PEMBANTU DURI', 'PRODUKTIF KUR', 'YULIUS SURYA', '40000000', '30000000', '0.75', '25000000', 'DIBAYAR'),
(132, '2019-12-02', 'CABANG PASIR PENGARAIAN', 'PRODUKTIF KUR', 'ALI MURNI', '200000000', '150000000', '0.75', '100281905', 'DIBAYAR'),
(133, '2019-12-02', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'YENDRI', '450000000', '135000000', '0.3', '109266410', 'DIBAYAR'),
(134, '2019-12-13', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'PRODUKTIF KUR', 'MASTAR', '400000000', '300000000', '0.75', '240915630', 'DIBAYAR'),
(135, '2019-12-13', 'KEDAI PERANAP', 'PRODUKTIF', 'JUNTAR SIMAMORA', '95000000', '71250000', '0.75', '60109841', 'DIBAYAR'),
(136, '2019-12-13', 'KEDAI MARPOYAN', 'PRODUKTIF', 'SUTARMI', '200000000', '150000000', '0.75', '144756994', 'DIBAYAR'),
(137, '2019-12-31', 'CABANG PEMBANTU AHMAD YANI', 'PRODUKTIF', 'CV. PRIMA MUSTIKA RAYA', '500000000', '150000000', '0.3', '150000000', 'DIBAYAR'),
(138, '2019-12-31', 'KEDAI PASAR SAIL', 'PRODUKTIF', 'LEO PRADHIPTA', '60000000', '45000000', '0.75', '37727282', 'DIBAYAR'),
(139, '2019-12-31', 'KEDAI PASAR SAIL', 'PRODUKTIF', 'HENDRI', '20000000', '15000000', '0.75', '14361498', 'DIBAYAR'),
(140, '2019-12-31', 'CABANG PEMBANTU DURI', 'PRODUKTIF', 'AFRIZALMAN', '15000000', '7500000', '0.5', '7424523', 'DIBAYAR'),
(141, '2019-12-31', 'CABANG RANAI', 'PRODUKTIF KUR', 'JUNARDI', '25000000', '18750000', '0.75', '9607477', 'DIBAYAR'),
(142, '2020-02-10', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'YUSNI', '40000000', '30000000', '0.75', '24989317', 'DIBAYAR'),
(143, '2020-02-18', 'KEDAI SUKARAMAI', 'PRODUKTIF', 'PARHAN HALOMOAN', '25000000', '12500000', '0.5', '7710795', 'DIBAYAR'),
(144, '2020-02-18', 'KEDAI PASAR SAIL ', 'PRODUKTIF', 'A. RENO ', '50000000', '37500000', '0.75', '29968110', 'DIBAYAR'),
(145, '2020-02-24', 'KEDAI MARPOYAN', 'PRODUKTIF KUR', 'FADILLAH', '20000000', '15000000', '0.75', '13317894', 'DIBAYAR'),
(146, '2020-02-26', 'CABANG PEMBANTU RUMBAI', 'PRODUKTIF', 'FAISAL', '20000000', '15000000', '0.75', '8759152', 'DIBAYAR'),
(147, '2020-02-26', 'CABANG PEMBANTU RUMBAI', 'PRODUKTIF', 'LINA PARLINA', '40000000', '30000000', '0.75', '18987614', 'DIBAYAR'),
(148, '2020-03-31', 'CABANG PEMBANTU BASERAH', 'PRODUKTIF', 'WIDI CAHYONO', '250000000', '100000000', '0.4', '23878551', 'DIBAYAR'),
(149, '2020-03-31', 'CABANG PASIR PENGARAIAN', 'PRODUKTIF KUR', 'NURHAYATI', '25000000', '18750000', '0.75', '11661049', 'DIBAYAR'),
(150, '2020-03-31', 'KEDAI PASAR PAGI ARENGKA', 'PRODUKTIF KUR', 'BUDI EKSANUDIN', '30000000', '22500000', '0.75', '5897357', 'DIBAYAR'),
(151, '2020-04-24', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'DUSKI', '99000000', '49500000', '0.5', '36142500', 'DIBAYAR'),
(152, '2020-04-30', 'KEDAI KABUN', 'PRODUKTIF', 'SYUKUR BAGIO', '54000000', '27000000', '0.5', '19334291', 'DIBAYAR'),
(153, '2020-04-30', 'CABANG SELAT PANJANG', 'PRODUKTIF KUR', 'ABDUL GANI', '100000000', '75000000', '0.75', '59906253', 'DIBAYAR'),
(154, '2020-04-30', 'KEDAI KABUN', 'PRODUKTIF', 'M. TIMUR WA', '60000000', '45000000', '0.75', '33185235', 'DIBAYAR'),
(155, '2020-04-30', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'SRI SUPRAPTI', '135000000', '40500000', '0.3', '29072647', 'DIBAYAR'),
(156, '2020-05-19', 'CABANG SELAT PANJANG', 'PRODUKTIF KUR', 'SUPRIYANTO', '180000000', '135000000', '0.75', '88439895', 'DIBAYAR'),
(157, '2020-05-19', 'CABANG SELAT PANJANG', 'PRODUKTIF KUR', 'ZULFAHMI', '35000000', '26250000', '0.75', '19633937', 'DIBAYAR'),
(158, '2020-05-29', 'CABANG TALUK KUANTAN ', 'PRODUKTIF ', 'NELY ERNIWATI ', '165000000', '82500000', '0.5', '65422457', 'DIBAYAR'),
(159, '2020-05-29', 'KEDAI KABUN', 'PRODUKTIF', 'APRIAL M', '20000000', '10000000', '0.5', '6315280', 'DIBAYAR'),
(160, '2020-05-29', 'CABANG PANGKALAN KERINCI', 'PRODUKTIF KUR', 'AFITRI NORITA BTE HISHAM', '400000000', '300000000', '0.75', '231250000', 'DIBAYAR'),
(161, '2020-05-29', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'DARWIS', '75000000', '37500000', '0.5', '14932014', 'DIBAYAR'),
(162, '2020-05-29', 'KEDAI TANDUN', 'PRODUKTIF', 'ANHAR', '50000000', '37500000', '0.75', '35769928', 'DIBAYAR'),
(163, '2020-06-19', 'CABANG PANGKALAN KERINCI', 'PRODUKTIF KUR', 'MARLIS', '80000000', '60000000', '0.75', '50381916', 'DIBAYAR'),
(164, '2020-06-19', 'KEDAI TELUK BELITUNG', 'PRODUKTIF', 'NORINAH', '20000000', '15000000', '0.75', '10185564', 'DIBAYAR'),
(165, '2020-06-19', 'CABANG RANAI', 'PRODUKTIF KUR', 'RAJA HARMIZI', '50000000', '37500000', '0.75', '34362590', 'DIBAYAR'),
(166, '2020-06-19', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'ENDA WATI BR SILALAHI', '25000000', '12500000', '0.5', '12090490', 'DIBAYAR'),
(167, '2020-06-19', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'EMI SARIANA', '250000000', '187500000', '0.75', '110113422', 'DIBAYAR'),
(168, '2020-06-26', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'LUKITA NINGSIH', '17000000', '8500000', '0.5', '7257382', 'DIBAYAR'),
(169, '2020-06-26', 'CABANG PEMBANTU RUMBAI', 'PRODUKTIF', 'NOVRIZAL', '130000000', '65000000', '0.5', '62140535', 'DIBAYAR'),
(170, '2020-06-26', 'CABANG PEMBANTU RUMBAI', 'PRODUKTIF', 'SITI NURMAYA', '200000000', '100000000', '1', '70809723', 'DIBAYAR'),
(171, '2020-06-26', 'KEDAI KUALA KILAN', 'PRODUKTIF', 'DENY EKO HARTONO', '40000000', '12000000', '0.3', '9891526', 'DIBAYAR'),
(172, '2020-06-26', 'CABANG SELAT PANJANG', 'PRODUKTIF KUR', 'RETNA WATI', '250000000', '187500000', '0.75', '164654365', 'DIBAYAR'),
(173, '2020-06-26', 'KEDAI KABUN', 'PRODUKTIF', 'MAKMUR', '60000000', '30000000', '0.5', '26393586', 'DIBAYAR'),
(174, '2020-06-26', 'CABANG PASIR PENGARAIAN', 'PRODUKTIF KUR', 'HERI ISMANTO', '300000000', '225000000', '0.75', '211653750', 'DIBAYAR'),
(175, '2020-06-30', 'CABANG SELAT PANJANG', 'PRODUKTIF KUR', 'HASRIZAL', '500000000', '375000000', '0.75', '344634380', 'DIBAYAR'),
(176, '2020-06-30', 'KEDAI AIR TIRIS', 'PRODUKTIF', 'ALDI JUMAIDI', '95833331', '28749999', '0.3', '26757188', 'DIBAYAR'),
(177, '2020-06-30', 'CABANG RANAI', 'PRODUKTIF KUR', 'ZAHARUDIN', '35000000', '26250000', '0.75', '23564464', 'DIBAYAR'),
(178, '2020-06-30', 'KEDAI TANDUN', 'PRODUKTIF', 'ARSON', '110000000', '82500000', '0.75', '70594680', 'DIBAYAR'),
(179, '2020-07-24', 'KEDAI KABUN', 'PRODUKTIF', 'ARDIANTO', '60000000', '30000000', '0.5', '28290863', 'DIBAYAR'),
(180, '2020-07-24', 'CABANG TALUK KUANTAN ', 'PRODUKTIF', 'ISKASARI', '50000000', '37500000', '0.75', '32767578', 'DIBAYAR'),
(181, '2020-07-24', 'KEDAI TELUK BELITUNG', 'PRODUKTIF', 'YUNITA', '50000000', '37500000', '0.75', '34528891', 'DIBAYAR'),
(182, '2020-07-30', 'KEDAI TANDUN', 'PRODUKTIF', 'SUGENG', '60000000', '54000000', '0.9', '44521069', 'DIBAYAR'),
(183, '2020-08-14', 'KEDAI TANDUN', 'PRODUKTIF', 'ACH BAJURI', '60000000', '54000000', '0.9', '44521069', 'DIBAYAR'),
(184, '2020-08-25', 'KEDAI SUKARAMAI', 'PRODUKTIF', 'JAMHOR', '75000000', '37500000', '0.5', '37109692', 'DIBAYAR'),
(185, '2020-08-26', 'KEDAI SUKARAMAI', 'PRODUKTIF', 'PARMAN', '75000000', '37500000', '0.5', '37109692', 'DIBAYAR'),
(186, '2020-08-31', 'KEDAI TANDUN', 'PRODUKTIF', 'SAMUDIN SAHUD', '70000000', '63000000', '0.9', '55562499', 'DIBAYAR'),
(187, '2020-08-31', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'PARDI JUANTONI', '80000000', '60000000', '0.75', '58567126', 'DIBAYAR'),
(188, '2020-08-31', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'SUMAINI', '15000000', '7500000', '0.5', '4138577', 'DIBAYAR'),
(189, '2020-10-19', 'CABANG PASIR PENGARAIAN', 'PRODUKTIF KUR', 'ARI SYAFRIANTO', '40000000', '30000000', '0.75', '29767018', 'DIBAYAR'),
(190, '2020-10-19', 'KEDAI TELUK BELITUNG', 'PRODUKTIF', 'SAMBURI', '95000000', '71250000', '0.75', '62362374', 'DIBAYAR'),
(191, '2020-10-20', 'CABANG TANJUNG PINANG', 'PRODUKTIF', 'IIS SURYANI', '70000000', '52500000', '0.75', '49275073', 'DIBAYAR'),
(192, '2020-10-26', 'KEDAI DURIAN', 'PRODUKTIF', 'IRWANSYAH DALIMUNTHE', '70000000', '21000000', '0.3', '6489229', 'DIBAYAR'),
(193, '2020-10-26', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'MUSTAKIM', '30000000', '15000000', '0.5', '1766625', 'DIBAYAR'),
(194, '2020-10-26', 'CABANG PEKANBARU ', 'PRODUKTIF', 'PT. PAGAR ALAM PERKASA', '652350000', '652350000', '1', '521800000', 'DIBAYAR'),
(195, '2020-10-27', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'MARATUAH LUBIS', '65000000', '19500000', '0.3', '7855818', 'DIBAYAR'),
(196, '2020-10-27', 'CABANG PEMBANTU SOREK', 'PRODUKTIF', 'M. NUR', '180000000', '135000000', '0.75', '143951168', 'DIBAYAR'),
(197, '2020-10-27', 'CABANG PEMBANTU SUNGAI GUNTUNG', 'PRODUKTIF', 'SUCIPTO', '150000000', '87000000', '0.7', '46859057', 'DIBAYAR'),
(198, '2020-11-30', 'KEDAI KUALA KILAN', 'PRODUKTIF', 'TARMIZI', '40000000', '12000000', '0.3', '2780013', 'DIBAYAR'),
(199, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'HENDRI YOHANES', '50000000', '15000000', '0.3', '5023781', 'DIBAYAR'),
(200, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'HAIRUNA', '20000000', '18000000', '0.9', '14398539', 'DIBAYAR'),
(201, '2020-12-23', 'KEDAI AIR TIRIS', 'PRODUKTIF', 'ROSMAWATI', '150000000', '45000000', '0.3', '29996186', 'DIBAYAR'),
(202, '2020-12-23', 'KEDAI PERANAP', 'PRODUKTIF', 'LUDIA SASTRA', '25000000', '18750000', '0.75', '10175125', 'DIBAYAR'),
(203, '2020-12-23', 'KEDAI PASAR LUBUK JAMBI', 'PRODUKTIF', 'BUSTANI', '13000000', '6500000', '0.5', '3607461', 'DIBAYAR'),
(204, '2020-12-23', 'KEDAI AIR TIRIS', 'PRODUKTIF', 'NAILAT HIDAYATI', '50000000', '25000000', '0.5', '9040729', 'DIBAYAR'),
(205, '2020-12-23', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'MANSUR', '50000000', '15000000', '0.3', '12761769', 'DIBAYAR'),
(206, '2020-12-23', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'ZUBIR', '40000000', '20000000', '0.5', '17676679', 'DIBAYAR'),
(207, '2020-12-23', 'CABANG PEMBANTU BASERAH', 'PRODUKTIF', 'SUHARDI', '50000000', '25000000', '0.5', '19444444', 'DIBAYAR'),
(208, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'AL HAKIM', '50000000', '45000000', '0.9', '40839599', 'DIBAYAR'),
(209, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'NASIRAN', '30000000', '15000000', '0.5', '6135895', 'DIBAYAR'),
(210, '2020-12-23', 'CABANG PEMBANTU JALAN RIAU', 'PRODUKTIF', 'BAMBANG UTAMA RIKO', '160000000', '80000000', '0.5', '66666668', 'DIBAYAR'),
(211, '2020-12-23', 'KEDAI MARPOYAN', 'PRODUKTIF', 'FAUZAN', '15000000', '11250000', '0.75', '5469505', 'DIBAYAR'),
(212, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'IRSYAD', '150000000', '75000000', '0.5', '61752651', 'DIBAYAR'),
(213, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'CV. AISYAH NUR SYAMS', '100000000', '50000000', '0.5', '47703292', 'DIBAYAR'),
(214, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'RUDI YANTO', '30000000', '15000000', '0.5', '13145944', 'DIBAYAR'),
(215, '2020-12-23', 'KEDAI KABUN', 'PRODUKTIF', 'HEDI', '100000000', '30000000', '0.3', '29806696', 'DIBAYAR'),
(216, '2020-12-23', 'KEDAI TELUK BELITUNG', 'PRODUKTIF', 'TAMSIR', '60000000', '45000000', '0.75', '42816037', 'DIBAYAR'),
(217, '2020-12-23', 'KEDAI PASAR PANGKALAN KERINCI', 'PRODUKTIF', 'DARUSALAM', '60000000', '30000000', '0.5', '28572303', 'DIBAYAR'),
(218, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'INDRA SAPUTRA', '30000000', '15000000', '0.5', '11511258', 'DIBAYAR'),
(219, '2020-12-23', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'ARMAN', '550000000', '165000000', '0.3', '151250001', 'DIBAYAR'),
(220, '2020-12-23', 'KEDAI TELUK BELITUNG', 'PRODUKTIF', 'DHARMA ADRIANTO', '70000000', '52500000', '0.75', '48181656', 'DIBAYAR'),
(221, '2020-12-30', 'KEDAI PASAR PAGI ARENGKA', 'PRODUKTIF', 'HOLMES DOZZER', '12000000', '6000000', '0.5', '3601888', 'DIBAYAR'),
(222, '2021-01-29', 'KEDAI AIR TIRIS', 'PRODUKTIF', 'EMI ROSITA', '40000000', '20000000', '0.5', '19704677', 'DIBAYAR'),
(223, '2021-01-29', 'KEDAI AIR TIRIS', 'PRODUKTIF', 'RUSDIANTO', '75000000', '37500000', '0.5', '37500000', 'DIBAYAR'),
(224, '2021-01-29', 'CABANG SELAT PANJANG', 'PRODUKTIF', 'NURLIANIS', '120000000', '60000000', '0.5', '56488315', 'DIBAYAR'),
(225, '14-DES-15', 'CABANG UTAMA', 'PRODUKTIF', 'PT. DION DINAMIKA SEMESTA', '2000000000', '1400000000', '0.75', '1378806653', 'DIBAYAR'),
(226, NULL, 'CABANG PEMBANTU TUANKU TAMBUSAI', 'KONSUMTIF', 'MUNAWIRO', '100000000', '100000000', NULL, NULL, 'DIBAYAR');

-- --------------------------------------------------------

--
-- Table structure for table `tbltrjm`
--

CREATE TABLE `tbltrjm` (
  `TRJMid` int(11) NOT NULL,
  `TRJMnama` varchar(255) DEFAULT NULL,
  `TRJMalamat` varchar(255) DEFAULT NULL,
  `TRJMttl` varchar(255) NOT NULL,
  `TRJMusia` decimal(3,0) DEFAULT NULL,
  `TRJMsiup` varchar(255) DEFAULT NULL,
  `TRJMktp` int(17) DEFAULT NULL,
  `TRJMnpwp` varchar(255) DEFAULT NULL,
  `TRJMalamatsaatini` varchar(255) NOT NULL,
  `TRJMstatuspernikahan` varchar(255) NOT NULL,
  `TRJMpekerjaan` varchar(255) NOT NULL,
  `TRJMusaha` varchar(255) NOT NULL,
  `TRJMstatus` varchar(15) NOT NULL,
  `TRJMpasangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltrjm`
--

INSERT INTO `tbltrjm` (`TRJMid`, `TRJMnama`, `TRJMalamat`, `TRJMttl`, `TRJMusia`, `TRJMsiup`, `TRJMktp`, `TRJMnpwp`, `TRJMalamatsaatini`, `TRJMstatuspernikahan`, `TRJMpekerjaan`, `TRJMusaha`, `TRJMstatus`, `TRJMpasangan`) VALUES
(94, 'Lisa Novianti', 'Jl Ahmad Yani 20', '', '25', '1238589129', 2147483647, '1235121234', '', '', '', '', '', ''),
(106, 'Suharno', 'Jl Gaada 20', '', '22', '1238589129', 2147483647, '21848921', '', '', '', '', '', ''),
(107, 'Sukijan', 'Jl Kuini 20', '', '22', '1246485939', 2147483647, '1288828181', '', '', '', '', '', ''),
(108, 'Ponjian', 'Jl Ahmad Yani 20', '', '25', '14710987', 2147483647, '1245782382', '', '', '', '', '', ''),
(110, 'Saprizal', 'Jl Hangtuah Dumai, No. 111-113', '', '45', '1423232', 2147483647, '1235121234', '', '', '', '', '', ''),
(139, 'Reza Hendra', 'Jl Ahmad Yani 20', '', '22', '1238589129', 2147483647, '1288828181', '', '', '', '', '', ''),
(140, 'Suharno', 'Jl Gaada 20', '', '36', '1238589129', 2147483647, '1245782382', '', '', '', '', '', ''),
(141, 'Lisa Novianti', 'Jl Hangtuah Dumai, No. 111-113', '', '45', '14710987', 2147483647, '234637', '', '', '', '', '', ''),
(143, 'Reza Hendra', 'Jl Ahmad Yani 20', '', '22', '1246485939', 2147483647, '1288828181', '', '', '', '', '', ''),
(144, 'Sinar', 'Jl Hangtuah ', '', '22', '1471010507980021', 2147483647, '4402198239482189', '', '', '', '', '', ''),
(145, 'JURIBAH', 'Jl Hangtuah ', '', '27', '1471010507980021', 2147483647, '4402198239482189', '', '', '', '', '', ''),
(146, 'SODIKIN', 'Jl Hangtuah ', '', '22', '1471010507980021', 2147483647, '4402198239482189', '', '', '', '', '', ''),
(149, 'Reza Hendra', 'Jl Ahmad Yani 20', '', '22', '1246485939', 2147483647, '1288828181', '', '', '', '', '', ''),
(174, 'Tri Gunawans', 'Simpang Badaks   ', 'Alabama, 11 November 1996 (26 Tahun)', NULL, NULL, 2147483647, NULL, '', '', 'Staff Penjaminan Syariah   ', '', '', ''),
(175, 'T. Kiki Rosnika Wanti', 'JL. Seminai RT/RW 003/005 Kel. Pangkalan Kerinci Kota Kec. Pangkalan Kerinci, Kab. Pelelawan', '', NULL, NULL, NULL, NULL, 'JL. Seminai RT/RW 003/005 Kel. Pangkalan Kerinci Kota Kec. Pangkalan Kerinci, Kab. Pelelawan', '', 'Pegawai Negeri Sipil (PNS) ', '', '', ''),
(176, 'Budi Artiful', 'JL. Seminai RT/RW 003/005 Kel. Pangkalan Kerinci Kota Kec. Pangkalan Kerinci, Kab. Pelelawan', ' Pekanbaru, 24 Juli 1974', NULL, '1297000442199', 2147483647, '06.997.963.1-211.000', 'JL. Seminai RT/RW 003/005 Kel. Pangkalan Kerinci Kota Kec. Pangkalan Kerinci, Kab. Pelelawan', 'Menikah', 'Wiraswasta', 'Perdagangan Besar Buah Yang Mengandung Minyak', '', '175'),
(177, 'Reza Hendra', 'Jl Ahmad Yani 20', '', '12', '1238589129', 2147483647, '1288828181', '', '', '', '', '', ''),
(178, 'Reza Hendra', 'Jl Ahmad Yani 20', '', '22', '1246485939', 2147483647, '1288828181', '', '', '', '', '', ''),
(179, 'Tri Gunawans', 'Simpang Badaks', 'Alabama, 11 November 1996 (25Tahun)', NULL, NULL, 2147483647, NULL, '', '', '2147483648', '', '', ''),
(180, 'Reza Hendra', 'Jl Ahmad Yani 20', '', '22', '1246485939', 2147483647, '1288828181', '', '', '', '', '', ''),
(181, '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', ''),
(182, 'SUPARMI', 'Jln Alpokat No 385', '', '34', '1401104312870003', 2147483647, '051.1.01.2021.139', '', '', '', '', '', ''),
(183, 'Brocu', 'Jl Perdamaian, GG Selamat No 10', '', '27', '1', 0, '--', '', '', '', '', '', ''),
(184, 'Brocu', 'Jl Perdamaian, GG Selamat No 10', '', '27', '1', 0, '--', '', '', '', '', '', ''),
(185, 'Brocu', 'Jl Perdamaian, Gg Selamat', '', '27', '1465723819', 0, '--', '', '', '', '', '', ''),
(186, 'Brocu', 'Jl Perdamaian, Gg Selamat', '', '27', '1465723819', 0, '--', '', '', '', '', '', ''),
(187, 'TAMARUDDIN', 'JL. SEPAT No 95 RT 003 RW 009 Kel LIMBUNGAN BARU', '', '51', '1471091109700001', 0, '--', '', '', '', '', '', ''),
(188, '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', ''),
(189, 'Brocu', 'Jl Perdamaian, Gg Selamat', '', '27', '1471091109700001', 0, '--', '', '', '', '', '', ''),
(190, 'Sashimi', 'Jl Perdamaian, Gg Selamat', '', '27', '1471091109700001', 0, '--', '', '', '', '', '', ''),
(191, 'Samsurizal', 'Terangtang Manuk Kec. Pangkalan Kuras', '', '35', '--', 0, '--', '', '', '', '', '', ''),
(192, 'Satria Sandy Dharma Kusuma', 'Sido Mukti Kec Pangkalan Kuras ', '', '35', '--', 0, '--', '', '', '', '', '', ''),
(193, 'M. Anwaruddin', 'Bagan Lima Kec. UKUI', '', '35', '--', 0, '--', '', '', '', '', '', ''),
(194, 'Siswanto', 'Beringin Indah Kec. Pangkalan Kuras', '', '35', '--', 0, '--', '', '', '', '', '', ''),
(195, 'Jumari', 'Beringin Indah Kec. Pangkala Kuras', '', '35', '--', 0, '--', '', '', '', '', '', ''),
(196, 'Samsurizal', 'Jl Perdamaian, Gg Selamat', '', '27', '--', 0, '--', '', '', '', '', '', ''),
(197, 'Brocu', 'Jl Perdamaian, Gg Selamat', '', '27', '1471091109700001', 0, '--', '', '', '', '', '', ''),
(198, 'Lisa Novianti', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(199, 'Suharno', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(200, 'Sukijan', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(201, 'Ponjian', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(202, 'Herman', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(203, 'Fitriani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(204, 'Jumadiyono', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(205, 'Herman', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(206, 'Daryanto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(207, 'Suparyandi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(208, 'Nepfri Rupika', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(209, 'Joko Suherdi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(210, 'Jasman', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(211, 'Abdul Aziz Hasan', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(212, 'Suarno', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(213, 'Darlina Br Lbn Batu', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(214, 'Muhayah', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(215, 'Sudirman', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(216, 'Untung Bangun', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(217, 'Imron Rosidi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(218, 'Tukiman', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(219, 'Rahman AL-Qodar', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(220, 'Rudi Hartono', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(221, 'Juardi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(222, 'Dian Aprilia', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(223, 'Risma Fitri Yanti', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(224, 'Wardison', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(225, 'Giri Saroyo', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(226, 'Sismadi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(227, 'Riado Pardouan Manik', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(228, 'Hanna H Hermanus', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(229, 'Inus', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(230, 'Wowon', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(231, 'Ella Anjelianna', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(232, 'Nanda Selvia', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(233, 'Novia Indrawanis', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(234, 'Mugi Ahmad Mustofa', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(235, 'Hariati', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(236, 'Tiurma Barita Br Silalahi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(237, 'Angga Eko Sulistyanto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(238, 'Nazaruddin', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(239, 'Yulikah', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(240, 'Samini', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(241, 'Risti Setiyani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(242, 'Sutijo', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(243, 'Haryanto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(244, 'Yusuf Hariadi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(245, 'Puti Wulandari', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(246, 'Adisman Irawan', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(247, 'Tribowo H', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(248, 'Katno', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(249, 'Endang Sucipto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(250, 'Muhammad Imam Subkhi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(251, 'Andi Lala Riadi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(252, 'Sugeng', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(253, 'Siti Cholizah Sitorus', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(254, 'Darussamin', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(255, 'Sriani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(256, 'Dian Pramana Putra', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(257, 'Kasunarto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(258, 'Pono', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(259, 'Salman', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(260, 'Maryadi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(261, 'Murni Astuti', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(262, 'Rahmad Samudra Kusuma', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(263, 'Ratna Indriani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(264, 'Fitri Wahyuni', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(265, 'Sumilah', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(266, 'Sarniatik', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(267, 'Aly Syahputra', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(268, 'Mekarina Br Nainggolan', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(269, 'Efrianto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(270, 'Darman', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(271, 'Rubini', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(272, 'Sarjono', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(273, 'Jumari ', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(274, 'Yopi Nopriadi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(275, 'Erlita', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(276, 'Azman Hadi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(277, 'Annisa Harni Lestari', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(278, 'Darwis', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(279, 'Dwiyono', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(280, 'Tanesa Jaya Pratama', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(281, 'Mastiri', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(282, 'Abdullah', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(283, 'Sarinah', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(284, 'Suwito', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(285, 'Sampe Hadamean Harahap', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(286, 'ERVINA EKOWATI WAHYUNINGSIH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(287, 'SYADRIWANYONO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(288, 'FAULINA ULFA NASUTION', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(289, 'MINARSIH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(290, 'YULI SUWARTO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(291, 'RIAMAN ELVANTO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(292, 'ALI ZAKIR', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(293, 'ERVINA EKOWATI WAHYUNINGSIH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(294, 'SYADRIWANYONO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(295, 'FAULINA ULFA NASUTION', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(296, 'MINARSIH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(297, 'YULI SUWARTO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(298, 'RIAMAN ELVANTO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(299, 'ALI ZAKIR', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(300, 'Reza', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(301, 'Marini', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(302, 'JUFRI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(303, 'SISWO EKO UTRO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(304, 'ENTONI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(305, 'BOYMEN', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(306, 'SUYITNO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(307, 'SUBARIYANTO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(308, 'IRWAN SYAH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(309, 'AZLINA', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(310, 'JUNI ISKANDAR', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(311, 'Asmadi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(312, 'Amiyati', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(313, 'Siti Hafsah', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(314, 'KASI ANING', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(315, 'Teguh Sulistiono', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(316, 'Mansur', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(317, 'Hadi Prayitno', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(318, 'Sukardi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(319, 'Peri Putra', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(320, 'Tamrin', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(321, 'NORMA', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(322, 'ARI SUGIATRO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(323, 'Marini', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(324, 'Mukhtar Lubis', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(325, 'AINAL FAHRI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(326, 'NURHAYATI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(327, 'SAMSIR', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(328, 'AMINAH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(329, 'SUPARDI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(330, 'SUPARJONO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(331, 'RANDI ASRIADI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(332, 'SUMARNI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(333, 'YUSRA HAYATI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(334, 'ARDI TIAR', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(335, 'ERITA', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(336, 'FREDDI PASARIBU', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(337, 'YUNINGSIH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(338, 'DILA WARTINI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(339, 'SARINA', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(340, 'MAK\'RUF', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(341, 'SRI DEVI SAFITRI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(342, 'SAMSUL', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(343, 'YASNI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(344, 'SUHARTATI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(345, 'SYAHRIL', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(346, 'YULIANI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(347, 'ANDI MULIANAH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(348, 'HARDANI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(349, 'PURNOMO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(350, 'CV. PUTRI SIAK KECIL', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(351, 'ABDUL HALIM', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(352, 'Tentrem Suprihatin', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(353, 'Zaenal Saputra', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(354, 'Samsul Bahri', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(355, 'Doni Sinso', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(356, 'Partini', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(357, 'Lizayani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(358, 'DAMTO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(359, 'MARTINIS', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(360, 'SABRAN', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(361, 'SUZI KURNIASARI', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(362, 'Abdul Basri', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(363, 'Eddi Yanto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(364, 'Ondrianto', '---', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(365, 'Mangaraja Nasaruddin Siregar', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(366, 'Jurianto', '--', '', '0', '---', 0, '--', '', '', '', '', '', ''),
(367, 'Mesni', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(368, 'Muhammad Rafni', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(369, 'Suryani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(370, 'Zuheri Tambusai', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(371, 'Iwan Kusnadi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(372, 'Dahlia', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(373, 'Ahmad Sohir Hutami', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(374, 'Zainatun', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(375, 'Julianto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(376, 'Suhermanto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(377, 'Moh Rifa\'i', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(378, 'Zainal Abidin', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(379, 'Helmi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(380, 'Sri Narulita Br Tarigan', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(381, 'Syahputra', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(382, 'Ririn Arianti', '--', '', '0', '---', 0, '--', '', '', '', '', '', ''),
(383, 'Amat', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(384, 'Satrimo', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(385, 'Herlina', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(386, 'Zamri Efrizon', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(387, 'Mujiono', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(388, 'ERVINA EKOWATI WAHYUNINGSIH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(389, 'SYADRIWANYONO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(390, 'FAULINA ULFA NASUTION', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(391, 'MINARSIH', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(392, 'YULI SUWARTO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(393, 'RIAMAN ELVANTO', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(394, 'ALI ZAKIR', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(395, 'Kartina', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(396, 'Susi Susanti', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(397, 'Rohayati', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(398, 'Nani Nuraily', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(399, 'Yuni Astuti', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(400, 'Andy Wiryanto', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(401, 'Sersanti Lamsarito', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(402, 'Gustini', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(403, 'Aryani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(404, 'Edi Bambang Triyono', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(405, 'Jailani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(406, 'Indra', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(407, 'Riston Simatupang', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(408, 'Lio Agustian', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(409, 'Demi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(410, 'Ilhamuddin', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(411, 'Amrizal Malik', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(412, ' Siswo Prihatin', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(413, 'Ahmad Khoiri', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(414, 'Yulia Apriani', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(415, 'Amir Syafawi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(416, 'Hendrawati', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(417, 'Nurhayati', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(418, 'Riyaldi', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(419, 'Azmi Sandoro', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(420, 'Ardonal', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(421, 'Nurhayati', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(422, 'M.Sahid', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(423, 'Misman', '--', '', '0', '--', 0, '--', '', '', '', '', '', ''),
(424, 'Sefrinaldi', '--', '', '0', '--', 0, '---', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblupload`
--

CREATE TABLE `tblupload` (
  `UPLDid` int(11) NOT NULL,
  `UPLDnama` varchar(255) NOT NULL,
  `CBCid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblupload`
--

INSERT INTO `tblupload` (`UPLDid`, `UPLDnama`, `CBCid`) VALUES
(1, 'Doc1.pdf', 1),
(2, 'Doc1.pdf', 1),
(3, 'Doc1.pdf', 1),
(4, 'Doc1.pdf', 1),
(5, 'Doc1.pdf', 1),
(6, 'Doc1.pdf', 1),
(7, 'Doc1.pdf', 1),
(8, 'Doc1.pdf', 1),
(9, '6976-1-48951-1-10-20200417.pdf', 2),
(10, 'SKMBT_28321072910020.pdf', 2),
(11, 'SOP.pdf', 2),
(12, 'SOP.pdf', 2),
(13, 'Lapbul_juni.pdf', 2),
(14, 'Undangan_Rapat_Kerja_Aspenda.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbluploadcbcp`
--

CREATE TABLE `tbluploadcbcp` (
  `UPLDPid` int(11) NOT NULL,
  `UPLDPnama` varchar(255) NOT NULL,
  `CBCPid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluploadcbcp`
--

INSERT INTO `tbluploadcbcp` (`UPLDPid`, `UPLDPnama`, `CBCPid`) VALUES
(1, 'BS_pasca_baru.pdf', 5),
(2, 'BS_pasca_baru.pdf', 5),
(3, 'Undangan_Rapat_Kerja_Aspenda.pdf', 5),
(4, 'SP2K.pdf', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `roleId_sender` int(11) NOT NULL,
  `roleId_receiver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `roleId_sender`, `roleId_receiver`) VALUES
(6, 'Data Case By Case Konsumtif', 'SP2K A.n Tri Gunawans Siap Dicetak', 1, 4, 2),
(7, 'Cek Data Terjamin', 'CBC Konsumtif A.n Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(8, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(9, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(10, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Kedai Kabun', 1, 2, 2),
(11, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Kedai Kabun', 1, 2, 2),
(12, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Kedai Kabun', 1, 2, 2),
(13, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Butik Mall Ciputra Seraya', 1, 2, 2),
(14, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Kedai Kabun', 1, 2, 2),
(15, 'Keputusan CBC Produktif', 'CBC Produktif A.n Budi Artiful', 1, 7, 8),
(16, 'Keputusan CBC Produktif', 'CBC Produktif A.n Budi Artiful', 1, 8, 4),
(17, 'Data Case By Case Produktif', 'SP2K A.n Budi Artiful Siap Dicetak', 1, 4, 2),
(18, 'Keputusan CBC Konsumtif', 'CBC Konsumtif A.n Tri Gunawans', 1, 7, 8),
(19, 'Keputusan CBC Konsumtif', 'CBC Konsumtif A.n Tri Gunawans', 1, 8, 4),
(20, 'Data Case By Case Konsumtif', 'SP2K A.n Tri Gunawans Siap Dicetak', 1, 4, 2),
(21, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Kedai Kabun', 1, 2, 2),
(22, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Kedai Kabun', 1, 2, 2),
(23, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(24, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(25, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(26, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(27, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(28, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(29, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(30, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(31, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Kedai Kabun', 1, 2, 2),
(32, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(33, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(34, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Jalan Ahmad Yani', 1, 2, 2),
(35, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Jalan Ahmad Yani', 1, 2, 2),
(36, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Jalan Ahmad Yani', 1, 2, 2),
(37, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sungai Pakning', 1, 2, 2),
(38, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(39, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Jalan Ahmad Yani', 1, 2, 2),
(40, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Jalan Ahmad Yani', 1, 2, 2),
(41, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(42, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(43, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(44, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(45, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(46, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(47, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(48, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(49, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Cabang Pembantu Sorek', 1, 2, 2),
(50, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Butik Mall Ciputra Seraya', 1, 2, 2),
(51, 'Cek Sertifikat', 'Sertifikat Bank Riau Kepri Kantor Kas Bupati Bintan', 1, 2, 2),
(52, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(53, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(54, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(55, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(56, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(57, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(58, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(59, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(60, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(61, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(62, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(63, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(64, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(65, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(66, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(67, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(68, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(69, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(70, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(71, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(72, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(73, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(74, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(75, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(76, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(77, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(78, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(79, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(80, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(81, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(82, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(83, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(84, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(85, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(86, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(87, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(88, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(89, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(90, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(91, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(92, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(93, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(94, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(95, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(96, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(97, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(98, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(99, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(100, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(101, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(102, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(103, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(104, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(105, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(106, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(107, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(108, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(109, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(110, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(111, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(112, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(113, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(114, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(115, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(116, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(117, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(118, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(119, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(120, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(121, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(122, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(123, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(124, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(125, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(126, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(127, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(128, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(129, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(130, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(131, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(132, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(133, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(134, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(135, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(136, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(137, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(138, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(139, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(140, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(141, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(142, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(143, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(144, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(145, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(146, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(147, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(148, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(149, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(150, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(151, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(152, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(153, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(154, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(155, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(156, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(157, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(158, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(159, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(160, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(161, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(162, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(163, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(164, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(165, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(166, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(167, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(168, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(169, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(170, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(171, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(172, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(173, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(174, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(175, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(176, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(177, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(178, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(179, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(180, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(181, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(182, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(183, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(184, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(185, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(186, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(187, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(188, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(189, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(190, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(191, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(192, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(193, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(194, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(195, 'Data CAC', 'Data CAC Baru', 1, 2, 3),
(196, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(197, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(198, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(199, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(200, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(201, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(202, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(203, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(204, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(205, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(206, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(207, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(208, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(209, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(210, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(211, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(212, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(213, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(214, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(215, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(216, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(217, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(218, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(219, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(220, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(221, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(222, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(223, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(224, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(225, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(226, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(227, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(228, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(229, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(230, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(231, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(232, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(233, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(234, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(235, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(236, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(237, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(238, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(239, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(240, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(241, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(242, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(243, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(244, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(245, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(246, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(247, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(248, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(249, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(250, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(251, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(252, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(253, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(254, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(255, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(256, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(257, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(258, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(259, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(260, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(261, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(262, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(263, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(264, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(265, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(266, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(267, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(268, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(269, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(270, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(271, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(272, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(273, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(274, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(275, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(276, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(277, 'Data CAC', 'Data CAC Baru', 0, 2, 3),
(278, 'Data CAC', 'Data CAC Baru', 0, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `USER_ROLE_id` int(11) NOT NULL,
  `USERid` int(11) NOT NULL,
  `ROLEid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`USER_ROLE_id`, `USERid`, `ROLEid`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `user_status` varchar(10) NOT NULL,
  `last_logout` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `image`, `password`, `role_id`, `is_active`, `date_created`, `user_email`, `bio`, `dob`, `phone`, `address`, `user_status`, `last_logout`) VALUES
(3, 'Rani', 'default.jpg', '$2y$10$qFjQ5d.2Nptb0YTjLijDUOnCjBjM9Vk5fv9sNMEP9sDkR3vs0QiZS', 2, 1, 1611909937, '', '', '', '', '', 'active', ''),
(4, 'Admin', 'default.jpg', '$2y$10$BK7PpL4k6viXK6UIMlY36Oapj5W84mA1GZN6zrnH.HfZyE9KN2XLi', 1, 1, 1612149003, '', '', '', '', '', 'active', ''),
(5, 'Berry', 'default.jpg', '$2y$10$iu1sJy0vvZZx2Tmdt/geuuTHWAhZLMNE5KiUERcX7ZOhVulDLvQ2O', 4, 1, 1613466128, '', '', '', '', '', '', ''),
(6, 'Akbar', 'default.jpg', '$2y$10$Gq8BArOzef4a58YQQPna1uGM48WThbweruri7691K1wZWpKJg0XkW', 1, 1, 1614331758, 'makbaragungtp@gmail.com', 'Sampe Message\n', '05-07-1998', '0812345678', 'HAHAHIHIHIHI', 'active', ''),
(7, 'Hendra', 'default.jpg', '$2y$10$i7zoD0JU0E6uLfEXbWMtdeSgY76YPENn7pLOaTFUnqGz1TwSCsEba', 1, 1, 1617154740, '', '', '', '', '', '', ''),
(8, 'Reza', 'default.jpg', '$2y$10$RWO.qXs.w6NHHTEVmxa6Ce9UaqxtgzDTB2QZNDbzwtM5O0Bwv9Gjy', 3, 1, 1621908907, '', '', '', '', '', '', ''),
(9, 'Rhani', 'default.jpg', '$2y$10$5qfYFvbDG3dzOTc1Yrr9kOCxGs118UInLXhG0HXSiuZqRCSZM3.7S', 2, 1, 1621912078, '', '', '', '', '', 'active', ''),
(10, 'Tes', 'default.jpg', '$2y$10$LSG.B706LwlCJEH1AQuIXeBb0PIzW0lg6ofamsUopQjZ8QaWzL0mW', 1, 1, 1621912166, '', '', '', '', '', '', ''),
(11, 'Bronardhe', 'default.jpg', '$2y$10$r4Yc.M1xrjuvhVN0bohudeHhpP2.Nyw.LJt7lFIub4qeYUiWgvfMu', 4, 1, 1622191200, '', '', '', '', '', '', ''),
(12, 'Purwo', 'default.jpg', '$2y$10$B8jkbPQqirkq86ELT8JSB.WvHLqgywarREAOJ5tDOB11qhn45Ru1W', 6, 1, 1623227052, '', '', '', '', '', '', ''),
(13, 'Agung', 'default.jpg', '$2y$10$q/Gc5DVbEA9pUQusV7LoNOqd8L3zhSN4SI1GW48/D9MoRCDBP3fv2', 3, 1, 1638776642, '', '', '', '', '', '', ''),
(14, 'Brocan', 'default.jpg', '$2y$10$n8dVhDwRaCgvmLar51bj0ukUjh3yCcAuSTEp.NwbgOMxtxYa2WNNe', 7, 1, 1638938315, '', '', '', '', '', '', ''),
(15, 'Brok', 'default.jpg', '$2y$10$.jggOQPlLWYAbLwtPWJeB.CEZh/zvusff1HV4aTR1pCMRAzNG9XGa', 6, 1, 1638938393, '', '', '', '', '', '', ''),
(16, 'Coba', 'default.jpg', '$2y$10$AFX986q7TdtLHkoOpux9ceDq/0vX8EfEOCPUYOoQHhtN0SNM.eWIm', 8, 1, 1640580429, '', '', '', '', '', '', ''),
(17, 'Rhani', 'default.jpg', '$2y$10$vSUzhTTC3oUBSFZVcx/g8eoXbOtxyuKJpSUb8Eg0slx9SuYfedbgy', 1, 1, 1645425988, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user-sub_menu`
--

CREATE TABLE `user-sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-sub_menu`
--

INSERT INTO `user-sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(4, 2, 'Profil Saya', 'user', 'fas fa-fw fa-user-edit', 1),
(5, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(7, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Pengguna', 'admin/pengguna', 'fas fa-fw fa-user-plus', 1),
(9, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(10, 5, 'Data Penjaminan', 'table', 'fas fa-fw fa-user-shield', 1),
(11, 5, 'Tambah Data Penjaminan', 'kredit', 'fas fa-fw fa-database', 1),
(12, 6, 'Accrual', 'accrual_option', 'fas fa-fw fa-calculator', 1),
(13, 6, 'Outstanding', 'outstanding', 'fas fa-fw fa-calculator', 1),
(14, 6, 'Laporan Bulanan', 'rekap', 'fas fa-fw fa-calculator', 1),
(17, 6, 'Fee', 'Fee_option', 'fas fa-fw fa-calculator', 1),
(18, 7, 'Tambah Klaim', 'klaim', 'fas fa-fw fa-calculator', 1),
(19, 7, 'Data Klaim', 'data_klaim', 'fas fa-fw fa-calculator', 1),
(20, 8, 'Subrogasi', 'subrogasi', 'fas fa-fw fa-calculator', 1),
(21, 1, 'Tabel Management', 'tabel', 'fas fa-fw fa-database', 0),
(22, 9, 'Rekap Lapbul Bulan', 'kur/lapbul_bulan', 'fas fa-fw fa-calculator', 1),
(23, 9, 'Rekap Lapbul', 'kur/lapbul', 'fas fa-fw fa-calculator', 1),
(24, 9, 'Rekap Outstanding', 'kur/outstanding', 'fas fa-fw fa-calculator', 1),
(25, 9, 'Rekap Accrual', 'kur/accrual', 'fas fa-fw fa-calculator', 1),
(26, 9, 'Laporan Klaim OJK', 'kur/klaim_ojk', 'fas fa-fw fa-calculator', 0),
(27, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(28, 5, 'Tambah Data Case By Case', 'casebc', 'fas fa-fw fa-database', 1),
(29, 5, 'Data Case By Case', 'casebc/datacbc', 'fas fa-fw fa-tachometer-alt', 1),
(31, 10, 'Beranda', 'direktur', 'fas fa-fw fa-file', 1),
(32, 10, 'Case By Case', 'direktur/casebycase', 'fas fa-fw fa-file', 1),
(33, 11, 'Beranda', 'legal', 'fas fa-fw fa-file', 1),
(34, 12, 'Beranda', 'risk', 'fas fa-fw fa-file', 1),
(35, 11, 'Case By Case', 'legal/casebycaseoption', 'fas fa-fw fa-file', 1),
(36, 12, 'Case By Case', 'risk/casebycaseoption', 'fas fa-fw fa-calculator', 1),
(40, 13, 'Akbar', 'akbar', 'fa-fas', 1),
(44, 19, 'Kirim Pesan', 'Message', 'fa fa-envelope', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_,messages`
--

CREATE TABLE `user_,messages` (
  `time` datetime(6) NOT NULL,
  `sender_message_id` varchar(20) NOT NULL,
  `reciever_message_id` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 4),
(9, 1, 6),
(10, 2, 5),
(11, 3, 6),
(20, 1, 5),
(21, 1, 7),
(22, 1, 8),
(23, 1, 9),
(24, 6, 2),
(32, 7, 3),
(35, 1, 10),
(36, 5, 10),
(38, 5, 2),
(39, 4, 2),
(40, 7, 2),
(41, 3, 2),
(43, 4, 10),
(44, 7, 12),
(45, 1, 11),
(47, 8, 2),
(48, 8, 3),
(49, 8, 11),
(50, 1, 3),
(52, 1, 13),
(53, 1, 12),
(55, 1, 2),
(56, 12, 2),
(57, 12, 11),
(58, 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `logo`) VALUES
(1, 'Admin', 'micon dw dw-house-1'),
(2, 'User', 'micon dw dw-user1'),
(3, 'Menu', 'micon dw dw-folder1'),
(5, 'Penjaminan', 'micon dw dw-analytics-21'),
(6, 'Operasional', 'micon dw dw-apartment'),
(7, 'Klaim', 'micon dw dw-right-arrow1'),
(8, 'Subrogasi', 'micon dw dw-invoice'),
(9, 'KUR', 'micon dw dw-edit-2'),
(10, 'Direksi', 'micon dw dw-right-arrow1'),
(11, 'Legal', 'micon dw dw-paint-brush'),
(12, 'Manajemen Resiko', 'micon dw dw-calendar1'),
(19, 'Message', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Divisi Penjaminan'),
(3, 'Divisi Operasional'),
(4, 'Direktur Utama'),
(6, 'Divisi Keuangan'),
(7, 'Manajemen Risiko'),
(8, 'Legal'),
(12, 'Coba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbp`
--
ALTER TABLE `tblbp`
  ADD PRIMARY KEY (`BPid`);

--
-- Indexes for table `tblcabmitra`
--
ALTER TABLE `tblcabmitra`
  ADD PRIMARY KEY (`mitraID`);

--
-- Indexes for table `tblcbc`
--
ALTER TABLE `tblcbc`
  ADD PRIMARY KEY (`CBCid`);

--
-- Indexes for table `tblcbcp`
--
ALTER TABLE `tblcbcp`
  ADD PRIMARY KEY (`CBCPid`);

--
-- Indexes for table `tblcbcpojk`
--
ALTER TABLE `tblcbcpojk`
  ADD PRIMARY KEY (`CBCPojkid`);

--
-- Indexes for table `tblcbcppendapatan`
--
ALTER TABLE `tblcbcppendapatan`
  ADD PRIMARY KEY (`CBCPpendapatanid`);

--
-- Indexes for table `tblcbcppengeluaran`
--
ALTER TABLE `tblcbcppengeluaran`
  ADD PRIMARY KEY (`CBCPpengeluaranid`);

--
-- Indexes for table `tblcvr`
--
ALTER TABLE `tblcvr`
  ADD PRIMARY KEY (`CVRid`);

--
-- Indexes for table `tbldaerah`
--
ALTER TABLE `tbldaerah`
  ADD PRIMARY KEY (`DAERAHid`);

--
-- Indexes for table `tbldjpd`
--
ALTER TABLE `tbldjpd`
  ADD PRIMARY KEY (`DJPDid`),
  ADD KEY `TRJMid` (`TRJMid`);

--
-- Indexes for table `tbldjph`
--
ALTER TABLE `tbldjph`
  ADD PRIMARY KEY (`DJPid`),
  ADD KEY `GPPid` (`GPPid`),
  ADD KEY `PKSid` (`PKSid`),
  ADD KEY `OPKid` (`OPKid`),
  ADD KEY `SPJid` (`SPJid`),
  ADD KEY `JSPid` (`JSPid`),
  ADD KEY `PPid` (`PPid`),
  ADD KEY `BPid` (`BPid`);

--
-- Indexes for table `tblgpp`
--
ALTER TABLE `tblgpp`
  ADD PRIMARY KEY (`GPPid`),
  ADD KEY `KPPid` (`KPPid`);

--
-- Indexes for table `tblijp`
--
ALTER TABLE `tblijp`
  ADD PRIMARY KEY (`IJPid`),
  ADD KEY `CVRid` (`CVRid`),
  ADD KEY `OPKid` (`OPKid`),
  ADD KEY `PKSid` (`PKSid`),
  ADD KEY `PKRJid` (`PKRJid`),
  ADD KEY `fk_ijp_jwk` (`JWKid`);

--
-- Indexes for table `tblja`
--
ALTER TABLE `tblja`
  ADD PRIMARY KEY (`JAid`);

--
-- Indexes for table `tbljsp`
--
ALTER TABLE `tbljsp`
  ADD PRIMARY KEY (`JSPid`);

--
-- Indexes for table `tbljwk`
--
ALTER TABLE `tbljwk`
  ADD PRIMARY KEY (`JWKid`);

--
-- Indexes for table `tblklaim`
--
ALTER TABLE `tblklaim`
  ADD PRIMARY KEY (`idKlaim`);

--
-- Indexes for table `tblkol`
--
ALTER TABLE `tblkol`
  ADD PRIMARY KEY (`KOLid`);

--
-- Indexes for table `tblkpp`
--
ALTER TABLE `tblkpp`
  ADD PRIMARY KEY (`KPPid`);

--
-- Indexes for table `tblkur`
--
ALTER TABLE `tblkur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`MENUid`),
  ADD KEY `USERid` (`USERid`);

--
-- Indexes for table `tblopk`
--
ALTER TABLE `tblopk`
  ADD PRIMARY KEY (`OPKid`);

--
-- Indexes for table `tblpd`
--
ALTER TABLE `tblpd`
  ADD PRIMARY KEY (`PDid`);

--
-- Indexes for table `tblpkrj`
--
ALTER TABLE `tblpkrj`
  ADD PRIMARY KEY (`PKRJid`);

--
-- Indexes for table `tblpks`
--
ALTER TABLE `tblpks`
  ADD PRIMARY KEY (`PKSid`),
  ADD KEY `BPid` (`BPid`),
  ADD KEY `fk_pks_gpp` (`GPPid`);

--
-- Indexes for table `tblpp`
--
ALTER TABLE `tblpp`
  ADD PRIMARY KEY (`PPid`),
  ADD KEY `RSid` (`RSid`),
  ADD KEY `GPPid` (`GPPid`),
  ADD KEY `DAERAHid` (`DAERAHid`);

--
-- Indexes for table `tblrs`
--
ALTER TABLE `tblrs`
  ADD PRIMARY KEY (`RSid`);

--
-- Indexes for table `tblspj`
--
ALTER TABLE `tblspj`
  ADD PRIMARY KEY (`SPJid`);

--
-- Indexes for table `tblsubrogasi`
--
ALTER TABLE `tblsubrogasi`
  ADD PRIMARY KEY (`idSubro`);

--
-- Indexes for table `tbltrjm`
--
ALTER TABLE `tbltrjm`
  ADD PRIMARY KEY (`TRJMid`);

--
-- Indexes for table `tblupload`
--
ALTER TABLE `tblupload`
  ADD PRIMARY KEY (`UPLDid`);

--
-- Indexes for table `tbluploadcbcp`
--
ALTER TABLE `tbluploadcbcp`
  ADD PRIMARY KEY (`UPLDPid`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`USER_ROLE_id`),
  ADD KEY `USERid` (`USERid`),
  ADD KEY `ROLEid` (`ROLEid`),
  ADD KEY `ROLEid_2` (`ROLEid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-sub_menu`
--
ALTER TABLE `user-sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcabmitra`
--
ALTER TABLE `tblcabmitra`
  MODIFY `mitraID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `tblcbc`
--
ALTER TABLE `tblcbc`
  MODIFY `CBCid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcbcp`
--
ALTER TABLE `tblcbcp`
  MODIFY `CBCPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcbcpojk`
--
ALTER TABLE `tblcbcpojk`
  MODIFY `CBCPojkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcbcppendapatan`
--
ALTER TABLE `tblcbcppendapatan`
  MODIFY `CBCPpendapatanid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcbcppengeluaran`
--
ALTER TABLE `tblcbcppengeluaran`
  MODIFY `CBCPpengeluaranid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbldjpd`
--
ALTER TABLE `tbldjpd`
  MODIFY `DJPDid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `tbldjph`
--
ALTER TABLE `tbldjph`
  MODIFY `DJPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tblijp`
--
ALTER TABLE `tblijp`
  MODIFY `IJPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tblja`
--
ALTER TABLE `tblja`
  MODIFY `JAid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbljwk`
--
ALTER TABLE `tbljwk`
  MODIFY `JWKid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblklaim`
--
ALTER TABLE `tblklaim`
  MODIFY `idKlaim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1449;

--
-- AUTO_INCREMENT for table `tblkur`
--
ALTER TABLE `tblkur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14192;

--
-- AUTO_INCREMENT for table `tbltrjm`
--
ALTER TABLE `tbltrjm`
  MODIFY `TRJMid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT for table `tblupload`
--
ALTER TABLE `tblupload`
  MODIFY `UPLDid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbluploadcbcp`
--
ALTER TABLE `tbluploadcbcp`
  MODIFY `UPLDPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user-sub_menu`
--
ALTER TABLE `user-sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbldjpd`
--
ALTER TABLE `tbldjpd`
  ADD CONSTRAINT `fk_djpd_trjm` FOREIGN KEY (`TRJMid`) REFERENCES `tbltrjm` (`TRJMid`);

--
-- Constraints for table `tbldjph`
--
ALTER TABLE `tbldjph`
  ADD CONSTRAINT `fk_djph_bp` FOREIGN KEY (`BPid`) REFERENCES `tblbp` (`BPid`),
  ADD CONSTRAINT `fk_djph_gpp` FOREIGN KEY (`GPPid`) REFERENCES `tblgpp` (`GPPid`),
  ADD CONSTRAINT `fk_djph_jsp` FOREIGN KEY (`JSPid`) REFERENCES `tbljsp` (`JSPid`),
  ADD CONSTRAINT `fk_djph_opk` FOREIGN KEY (`OPKid`) REFERENCES `tblopk` (`OPKid`),
  ADD CONSTRAINT `fk_djph_pks` FOREIGN KEY (`PKSid`) REFERENCES `tblpks` (`PKSid`),
  ADD CONSTRAINT `fk_djph_pp` FOREIGN KEY (`PPid`) REFERENCES `tblpp` (`PPid`),
  ADD CONSTRAINT `fk_djph_sp` FOREIGN KEY (`SPJid`) REFERENCES `tblspj` (`SPJid`);

--
-- Constraints for table `tblgpp`
--
ALTER TABLE `tblgpp`
  ADD CONSTRAINT `fk_gpp_kpp` FOREIGN KEY (`KPPid`) REFERENCES `tblkpp` (`KPPid`);

--
-- Constraints for table `tblijp`
--
ALTER TABLE `tblijp`
  ADD CONSTRAINT `fk_ijp_cvr` FOREIGN KEY (`CVRid`) REFERENCES `tblcvr` (`CVRid`),
  ADD CONSTRAINT `fk_ijp_jwk` FOREIGN KEY (`JWKid`) REFERENCES `tbljwk` (`JWKid`),
  ADD CONSTRAINT `fk_ijp_opk` FOREIGN KEY (`OPKid`) REFERENCES `tblopk` (`OPKid`),
  ADD CONSTRAINT `fk_ijp_pkrj` FOREIGN KEY (`PKRJid`) REFERENCES `tblpkrj` (`PKRJid`),
  ADD CONSTRAINT `fk_ijp_pks` FOREIGN KEY (`PKSid`) REFERENCES `tblpks` (`PKSid`);

--
-- Constraints for table `tblpks`
--
ALTER TABLE `tblpks`
  ADD CONSTRAINT `fk_pks_bp` FOREIGN KEY (`BPid`) REFERENCES `tblbp` (`BPid`),
  ADD CONSTRAINT `fk_pks_gpp` FOREIGN KEY (`GPPid`) REFERENCES `tblgpp` (`GPPid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
