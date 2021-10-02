-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 01:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `formtracer`
--

CREATE TABLE `formtracer` (
  `id` int(11) UNSIGNED NOT NULL,
  `nomor_mahasiswa` int(7) NOT NULL,
  `kode_pt` varchar(6) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nomor_telephone_handphone` int(11) NOT NULL,
  `alamat_email` varchar(225) NOT NULL,
  `waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan` text NOT NULL,
  `sebutkan_sumberdana_dalam_pembiayaan_kuliah_` text NOT NULL,
  `sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_` varchar(225) NOT NULL,
  `hubungan_antara_bidang_studi_dengan_pekerjaan_anda_` text NOT NULL,
  `tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_` text NOT NULL,
  `kira_kira_berapa_pendapatan_anda_setiap_bulannya_` varchar(225) NOT NULL,
  `perkuliahan` text NOT NULL,
  `desmonstrasi` text NOT NULL,
  `partisipasi_dalam_proyek_riset` text NOT NULL,
  `magang` text NOT NULL,
  `praktikum` text NOT NULL,
  `kerja_lapangan` text NOT NULL,
  `diskusi` text NOT NULL,
  `mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_` text NOT NULL,
  `bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu` text NOT NULL,
  `berapa_perusahaan_yang_dilamar_lewat_surat_email_` int(11) NOT NULL,
  `_jumlah_perusahaan_yang_merespons_lamaran_anda_` int(11) NOT NULL,
  `jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_` int(11) NOT NULL,
  `bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu` text NOT NULL,
  `apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_` text NOT NULL,
  `apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_` text NOT NULL,
  `jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_` text NOT NULL,
  `pengetahuan_di_bidang_atau_disiplin_ilmu_anda` text NOT NULL,
  `pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda` text NOT NULL,
  `pengetahuan_umum` text NOT NULL,
  `bahasa_inggris` text NOT NULL,
  `ketrampilan_internet_` text NOT NULL,
  `ketrampilan_komputer` text NOT NULL,
  `berpikir_kritis_` text NOT NULL,
  `ketrampilan_riset` text NOT NULL,
  `kemampuan_belajar` text NOT NULL,
  `kemampuan_berkomunikasi` text NOT NULL,
  `bekerja_di_bawah_tekanan` text NOT NULL,
  `manajemen_waktu` text NOT NULL,
  `bekerja_secara_mandiri` text NOT NULL,
  `bekerja_dalam_tim_bekerjasama_dengan_orang_lain` text NOT NULL,
  `kemampuan_dalam_memecahkan_masalah` text NOT NULL,
  `negosiasi_` text NOT NULL,
  `kemampuan_untuk_terus_belajar_sepanjang_hayat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jemaat`
--

CREATE TABLE `jemaat` (
  `id` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_baptis` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `golongan_darah` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jemaat`
--

INSERT INTO `jemaat` (`id`, `nik`, `no_kk`, `nama_lengkap`, `nama_baptis`, `tempat_lahir`, `jenis_kelamin`, `golongan_darah`, `pekerjaan`, `alamat`, `no_hp`) VALUES
(1, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(2, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(3, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(4, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(5, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(6, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(7, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(8, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(9, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(10, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(11, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(12, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(13, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(14, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(15, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(16, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(17, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(18, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(19, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(20, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(21, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(22, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(23, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(24, '1406130406960003', '1406130406960007', 'jun', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(25, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(26, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(27, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(28, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(29, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(30, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(31, '1406130406960003', '1406130406960007', 'parlin', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(32, '1406130406960003', '1406130406960007', 'Andi', 'yosef', 'nias, 9-2-3', 'laki-laki', 'B', 'Programer', 'Jakarta', '09879008766'),
(33, '1801044502970013', '1801044502970019', 'Blesing', 'yakub', 'nias, 09 juni 1998', 'Laki-Laki', 'A', 'gamer', 'jl. sasak 2 dalam no.37', '0857-7480-1683');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_alumni` char(128) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` decimal(13,0) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tahun_lulus` varchar(4) DEFAULT NULL,
  `jurusan` varchar(182) DEFAULT NULL,
  `status_pekerjaan` varchar(20) DEFAULT NULL,
  `bagian` char(128) DEFAULT NULL,
  `alamat_kantor` varchar(128) DEFAULT NULL,
  `no_telepon_kantor` varchar(128) DEFAULT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`id`, `user_id`, `nama_alumni`, `alamat`, `no_telepon`, `email`, `jenis_kelamin`, `tahun_lulus`, `jurusan`, `status_pekerjaan`, `bagian`, `alamat_kantor`, `no_telepon_kantor`, `foto`) VALUES
(4, 17411061, 'bless', 'jl jalan ryaa gg raya, jakarta', '81297447036', 'bless@bless.com', 'Perempuan', '2020', 'Teknik Informatika', 'Ya', 'Staff', 'jl jalan ryaa gg raya, jakarta', '1234567890', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id_jawaban` varchar(10) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `id_kuisioner` varchar(10) DEFAULT NULL,
  `id_pertanyaan` varchar(10) DEFAULT NULL,
  `jawaban` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuisioner`
--

CREATE TABLE `tbl_kuisioner` (
  `id_kuisioner` int(10) NOT NULL,
  `judul` varchar(56) NOT NULL,
  `kuisioner` varchar(182) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kuisioner`
--

INSERT INTO `tbl_kuisioner` (`id_kuisioner`, `judul`, `kuisioner`) VALUES
(2, 'Kusioner 2022', 'Mahasiswa TI'),
(3, 'Kusioner 2021', 'Mahasiswa SI'),
(4, 'Kusioner 2018', 'SI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `id` int(10) NOT NULL,
  `Nama_PT` varchar(225) DEFAULT NULL,
  `bagian` varchar(128) DEFAULT NULL,
  `nama_narahubung` varchar(128) DEFAULT NULL,
  `no_narahubung` varchar(14) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`id`, `Nama_PT`, `bagian`, `nama_narahubung`, `no_narahubung`, `keterangan`) VALUES
(6, 'PT Interatlas Murni', 'Admin', 'jack', '085312567898', 'Urgently Needed!\r\nPT Muliaraya Agrijaya sedang mencari \"E-Commerce Manager\" dengan kualifikasi sebagai berikut\r\n\r\nKualifikasi :\r\n1. Pendidikan minimal S1 Semua Jurusan denagn IPK min'),
(7, 'PT Interatlas Murni', 'Finance', 'jack', '085312567898', 'Urgently Needed!\r\nPT Muliaraya Agrijaya sedang mencari \"E-Commerce Manager\" dengan kualifikasi sebagai berikut\r\n\r\nKualifikasi :\r\n1. Pendidikan minimal S1 Semua Jurusan denagn IPK min'),
(8, 'PT Interatlas Murni', 'Operator', 'jack', '085312567898', 'Urgently Needed!\r\nPT Muliaraya Agrijaya sedang mencari \"E-Commerce Manager\" dengan kualifikasi sebagai berikut\r\n\r\nKualifikasi :\r\n1. Pendidikan minimal S1 Semua Jurusan denagn IPK min'),
(9, 'PT Interatlas Murni', 'Sales', 'jack', '085312567898', 'Urgently Needed!\r\nPT Muliaraya Agrijaya sedang mencari \"E-Commerce Manager\" dengan kualifikasi sebagai berikut\r\n\r\nKualifikasi :\r\n1. Pendidikan minimal S1 Semua Jurusan denagn IPK min'),
(10, 'PT Interatlas Murni', 'Admin', 'jack', '085312567898', 'Urgently Needed!\r\nPT Muliaraya Agrijaya sedang mencari \"E-Commerce Manager\" dengan kualifikasi sebagai berikut\r\n\r\nKualifikasi :\r\n1. Pendidikan minimal S1 Semua Jurusan denagn IPK min'),
(11, 'PT Interatlas Murni', 'Finance', 'jack', '085312567898', 'Urgently Needed!\r\nPT Muliaraya Agrijaya sedang mencari \"E-Commerce Manager\" dengan kualifikasi sebagai berikut\r\n\r\nKualifikasi :\r\n1. Pendidikan minimal S1 Semua Jurusan denagn IPK min'),
(12, 'PT Interatlas Murni', 'Operator', 'jack', '085312567898', 'Urgently Needed!\r\nPT Muliaraya Agrijaya sedang mencari \"E-Commerce Manager\" dengan kualifikasi sebagai berikut\r\n\r\nKualifikasi :\r\n1. Pendidikan minimal S1 Semua Jurusan denagn IPK min'),
(13, 'PT Interatlas Murni', 'Sales', 'jack', '085312567898', 'Urgently Needed!\r\nPT Muliaraya Agrijaya sedang mencari \"E-Commerce Manager\" dengan kualifikasi sebagai berikut\r\n\r\nKualifikasi :\r\n1. Pendidikan minimal S1 Semua Jurusan denagn IPK min');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id_pertanyaan` int(10) NOT NULL,
  `id_kuisioner` int(10) DEFAULT NULL,
  `pertanyaan` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id_pertanyaan`, `id_kuisioner`, `pertanyaan`) VALUES
(1, 2, 'Apakah anda sudah lulus ?'),
(2, 2, 'Apakah anda sudah lulus 2?'),
(3, 2, 'Apakah anda sudah lulus 3?'),
(4, 2, 'Apakah anda sudah lulus 4?'),
(5, 2, 'Apakah anda sudah lulus 5?'),
(6, 2, 'Apakah anda sudah lulus 6?'),
(7, 2, 'Apakah anda sudah lulus 7?'),
(8, 2, 'Apakah anda sudah lulus 8?'),
(9, 3, 'Apakah anda sudah lulus ?'),
(10, 3, 'Apakah anda sudah lulus 2?'),
(11, 3, 'Apakah anda sudah lulus 3?'),
(12, 3, 'Apakah anda sudah lulus 4?'),
(13, 3, 'Apakah anda sudah lulus 5?'),
(14, 3, 'Apakah anda sudah lulus 6?'),
(15, 3, 'Apakah anda sudah lulus 7?'),
(16, 3, 'Apakah anda sudah lulus 8?'),
(17, 2, 'Warna Mobil Biru'),
(18, 3, 'Warna Motor Kuning'),
(19, 4, 'Apakah anda ber-umur 21 tahun ?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracer`
--

CREATE TABLE `tbl_tracer` (
  `id` int(11) NOT NULL,
  `nim` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `pertanyaan_1` varchar(225) NOT NULL,
  `pertanyaan_2` varchar(225) NOT NULL,
  `pertanyaan_3` varchar(225) NOT NULL,
  `pertanyaan_4` varchar(225) NOT NULL,
  `pertanyaan_5` varchar(225) NOT NULL,
  `pertanyaan_6` varchar(225) NOT NULL,
  `pertanyaan_7` varchar(225) NOT NULL,
  `pertanyaan_8` varchar(225) NOT NULL,
  `pertanyaan_9` varchar(225) NOT NULL,
  `pertanyaan_10` varchar(225) NOT NULL,
  `pertanyaan_11` varchar(225) NOT NULL,
  `pertanyaan_12` varchar(225) NOT NULL,
  `pertanyaan_13` varchar(225) NOT NULL,
  `pertanyaan_14` varchar(225) NOT NULL,
  `pertanyaan_15` varchar(225) NOT NULL,
  `pertanyaan_16` varchar(225) NOT NULL,
  `pertanyaan_17` varchar(225) NOT NULL,
  `pertanyaan_18` varchar(225) NOT NULL,
  `pertanyaan_19` varchar(225) NOT NULL,
  `pertanyaan_20` varchar(225) NOT NULL,
  `pertanyaan_21` varchar(225) NOT NULL,
  `pertanyaan_22` varchar(225) NOT NULL,
  `pertanyaan_23` varchar(225) NOT NULL,
  `pertanyaan_24` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nim`, `nama`, `email`, `username`, `password`, `role_id`) VALUES
(35, 0, 'admin', 'admin@admin.com', 'admin', 'admin', 1),
(38, 17411061, 'Yeris Nehe', 'yeris@gmail.com', '17411061', '17411061', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_visi`
--

CREATE TABLE `tb_visi` (
  `id_visi` int(11) NOT NULL,
  `visi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `tbl_tracer`
--
ALTER TABLE `tbl_tracer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_visi`
--
ALTER TABLE `tb_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jemaat`
--
ALTER TABLE `jemaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  MODIFY `id_kuisioner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id_pertanyaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_tracer`
--
ALTER TABLE `tbl_tracer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_visi`
--
ALTER TABLE `tb_visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
