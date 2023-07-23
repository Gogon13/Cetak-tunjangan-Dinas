-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 08:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eskum`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `pangkat` varchar(40) NOT NULL,
  `pangkat2` varchar(40) NOT NULL,
  `tpt_tgl` varchar(30) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `statuskw` varchar(20) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `tmtcapeg` date NOT NULL,
  `statuspegawai` varchar(10) NOT NULL,
  `gajim` varchar(30) NOT NULL,
  `penghasilan` int(30) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `jkt` varchar(30) NOT NULL,
  `skakhir` varchar(60) NOT NULL,
  `mkg` varchar(25) NOT NULL,
  `mkk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nama`, `nip`, `pangkat`, `pangkat2`, `tpt_tgl`, `jekel`, `statuskw`, `agama`, `alamat`, `tmtcapeg`, `statuspegawai`, `gajim`, `penghasilan`, `jabatan`, `jkt`, `skakhir`, `mkg`, `mkk`) VALUES
(6, 'SUTIYONO, S.H', '196510261986031012', 'Penata Tingkat I I', '(III/d) Tmt. 1 Oktober 2014', 'Kudus, 26 Oktober 1965', 'Laki-laki', ' Kawin', 'Islam / Indonesia', 'Desa Gondoharum RT 05 RW 04 Jekulo Kudus', '1986-03-01', 'PNS', 'PP No. 30 TAHUN 2015', 4035800, 'Pengelola Kepegawaian', '1 (satu)', 'No. 823.3/175/2014 Tgl.15 September 2014', '24 Tahun 02 Bulan', '30 Tahun 01 Bulan'),
(10, 'Drs. ADI  SADHONO MURWANTO, MM.', '196812021988031002', 'Pembina  Tk I ', '( IV/b ) /  01  April  2016.', 'Kudus, 02 Desember 1968.', 'Laki-laki', ' Kawin', 'Islam / Indonesia', 'Desa Kedungdowo Rt. 01/Rw.06 Kecamatan Kaliwungu  ', '1988-03-01', 'PNS', 'PP. 30 Tahun 2015', 4384400, 'Kepala Dinas Pemberdayaan Masyarakat dan', '1 (satu)', 'No. 823.4/392/2016  tanggal  21 Maret 2016.', '24   Tahun  01  Bula', '26   Tahun  00  Bula'),
(11, 'ADNAN WIDODO, SIP', '197505292008011004', 'Penata Muda ', '( III/a ) /  01  Oktober   2018.', 'Rembang,  29 Mei 1975.', 'Laki-laki', ' Kawin', 'Islam / Indonesia', 'Desa Dersalam RT. 005 RW. 001 Kecamatan Bae Kabupaten Kudus', '2008-01-01', 'PNS', 'PP. 30 Tahun 2015', 2868700, 'Pelaksana', '3 (tiga)', 'No. 823.3/2271/26.00/2018', '11   Tahun  00  Bula', ''),
(12, 'AMALIA NUR AINI, S.STP', '199205032014062003', 'Penata  Muda Tk I ', '( III/b ) /  01  Oktober   2018', 'Demak,  3 Mei 1992.', 'Perempuan', ' Kawin', 'Islam / Indonesia', 'Griya Bhakti Praja RT06/RW 07 Mangunjiwan Demak', '2014-06-01', 'PNS', 'PP. 30 Tahun 2015', 2724400, 'Pelaksana', '3 (tiga)', 'No. 823.3/2063/26.00/2018, Tanggal  20 Agustus 2018', '04   Tahun  00  Bula', '04   Tahun  04  Bula'),
(13, 'ANDHIASTUTI  MARNANINGRUM, S.STP', '199203312014062002', 'Penata Muda Tk I ', '( III/b) /  01  Oktober  2018.', 'Kudus,  31 Maret 1992.', 'Perempuan', ' Kawin', 'Islam / Indonesia', 'Desa Tambaharjo Rt.04/Rw.04  Kec.Pati  Kab. Pati', '2014-06-01', 'PNS', 'PP. 30 Tahun 2015', 2724400, 'Pelaksana', '2 (dua)', 'No. 823.3/2063/26.00,  tanggal  20 Agstus  2018.', '04   Tahun  00  Bula', '04   Tahun  04  Bula'),
(14, 'ARIEF BUDI SISWANTO,  ST', '197212071998031002', 'Pembina Tk I   ', '( IV/b ) /  01  April   2017', 'Kudus,  07 Desember 1972.', 'Laki-laki', ' Kawin', 'Islam / Indonesia', 'Desa Garunglor Rt. 11 / Rw. 11 Kecamatan Kaliwungu', '1998-03-01', 'PNS', 'PP. 30 Tahun 2015', 4120600, 'Sekretaris Dinas PMD Kabupaten Kudus ', '3 (tiga)', 'No. 823.4/050/2017,  Tanggal  17 Maret 2017.', '19  Tahun  01  Bulan', '20   Tahun  10  Bula'),
(15, 'DARTIK KURNINGSIH', '196108311986082001', 'Penata Muda TK I  ', '( III/b ) /  01  Oktober   2006.', 'Kudus,  31 Agustus 1961.', 'Perempuan', 'Janda', 'Islam / Indonesia', 'Desa Burikan Rt.03/Rw 03 Kecamatan Kota Kudus', '1986-08-01', 'PNS', 'PP No. 30 TAHUN 2015', 4077000, 'Staff', '', 'No. 823.3/374/2006,  Tanggal  06 September 2006.', '18  Tahun  00  Bulan', '30   Tahun  00  Bula'),
(16, 'DIAN NOOR TAMZIS HANAFI, S.STP, M.P.', '197610261996021001', 'Pembina  ', '( IV/a ) /  01  Oktober   2015.', 'Jepara,  26 Oktober 1976.', 'Laki-laki', ' Kawin', 'Islam / Indonesia', 'Jl. Dwarawati VII No.5 RT 10 RW 06  Desa Gondangmanis Kecamatan Bae Kab. Kudus', '1996-02-01', 'PNS', 'PP No. 30 TAHUN 2015', 3832800, 'Kepala Seksi Pemerintah Desa dan BPD ', '3 (tiga)', 'No. 823.4/3972015,  tanggal  11 September 2015.', '17   Tahun  00  Bulan', '21   Tahun  00  Bulan'),
(17, 'DUL ROKHIM, S.IP', '198701062007011001', 'Penata ', '( III/c ) /  01  Oktober   2017', 'Kudus,  6 Januari 1987.', 'Laki-laki', ' Kawin', 'Islam / Indonesia', 'Desa Kutuk Rt.09/Rw.03 Kec.Undaan  Kab. Kudus', '2007-01-01', 'PNS', 'PP No. 30 TAHUN 2015', 3021300, 'Kasi Keuangan dan Aset Desa', '3 (tiga)', 'No. 823.3/178/17/2017,  tanggal  29 September 2017.', '08   Tahun  00  Bula', '12   Tahun  00  Bula'),
(18, 'ENNY MURDIYANTI', '196605102007012015', 'Pengatur ', '( II/c ) /  1  April   2015.', 'Kudus,  10 Mei 1966.', 'Perempuan', ' Kawin', 'Islam / Indonesia', 'Desa Getas Pejaten Rt 04 / Rw 01 Kecamatan Jati, Kab Kudus.', '2007-01-01', 'PNS', 'PP No. 30 TAHUN 2015', 2640600, 'Pelaksana', '3 (tiga)', 'No. 823.2/0775/17/2015,  Tanggal  31 Maret 2015.', '13   Tahun 03  Bulan', '16   Tahun 00  Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `kawinsyah`
--

CREATE TABLE `kawinsyah` (
  `id` int(15) NOT NULL,
  `id_kk` int(100) NOT NULL,
  `nmisterisuami` varchar(50) NOT NULL,
  `tempat_tgl` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tunjangan` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tglkw` date NOT NULL,
  `isteri/suami_ke` varchar(15) NOT NULL,
  `penghasilan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kawinsyah`
--

INSERT INTO `kawinsyah` (`id`, `id_kk`, `nmisterisuami`, `tempat_tgl`, `nip`, `tunjangan`, `pekerjaan`, `tglkw`, `isteri/suami_ke`, `penghasilan`) VALUES
(1, 6, 'ENDANG KHAYATI', 'Pati, 27 Juli 1967', '3319066707670002', 'Dapat', 'Ibu Rumah Tangga', '1989-09-15', '1 (satu)', 0),
(11, 10, 'MURTININGSIH', 'Bogor,31 Maret 1969 ', '', 'Dapat', '', '1998-08-28', '1 (satu)', 0),
(12, 11, 'SRI DWI NURHANI', 'Pati, 23 -05-1989', '', 'Dapat', 'Karyawati Honorer', '2009-06-21', '1 (satu)', 0),
(13, 12, 'GILANG BINTANG RAMADHAN', 'Demak, 27 -3-1992', '3321112703920001', 'Dapat', 'PEGAWAI BUMN', '2015-05-07', '1 (satu)', 5000000),
(14, 13, 'LUCKY SEPTIAN PRATAMA', 'Pati, 07 -09-1992', '3318100709920003', 'Dapat', 'Swasta', '2011-05-24', '1 (satu)', 3462000),
(15, 14, 'WIDOWATI NINGSIH', 'Kudus, 07 -09-1973', '', 'Dapat', 'RSI Sunan Kudus ', '1998-06-17', '1 (satu)', 0),
(16, 16, 'IRA YULISTIANA, A.Md.Keb', 'Cirebon, 3 -07-1982', '198206032010012032', 'Dapat', 'PNS', '2006-07-04', '1 (satu)', 2752300),
(17, 17, 'RESI FIDIANTINI', 'Sidoarjo, 21 -08-1988', '33515135308880009', 'Dapat', 'Swasta', '2010-12-02', '1 (satu)', 0),
(18, 18, 'SAPTONO', 'Kudus, 27 -07-1965', '', 'Dapat', 'Swasta', '1999-10-12', '1 (satu)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` char(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `level`, `status`) VALUES
(15, 'fandil', '123', 'admin', 1),
(18, 'fandi', '123', 'admin', 1),
(19, 'faris', '123', 'admin', 1),
(21, '196510261986031012', '196510261986031012', 'pegawai', 1),
(23, '196812021988031002', '196812021988031002', 'pegawai', 1),
(24, '197505292008011004', '197505292008011004', 'pegawai', 1),
(25, '199205032014062003', '199205032014062003', 'pegawai', 1),
(26, '199203312014062002', '199203312014062002', 'pegawai', 1),
(27, '197212071998031002', '197212071998031002', 'pegawai', 1),
(28, '196108311986082001', '196108311986082001', 'pegawai', 1),
(29, '197610261996021001', '197610261996021001', 'pegawai', 1),
(30, '198701062007011001', '198701062007011001', 'pegawai', 1),
(31, '196605102007012015', '196605102007012015', 'pegawai', 1),
(32, 'admin', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tanggungan`
--

CREATE TABLE `tanggungan` (
  `id` int(15) NOT NULL,
  `id_kk` int(100) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `kota` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `isk` varchar(15) NOT NULL,
  `tunjangan` varchar(15) NOT NULL,
  `kawin` varchar(15) NOT NULL,
  `bekerja` varchar(15) NOT NULL,
  `sekolah/kuliah` varchar(20) NOT NULL,
  `pengadilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggungan`
--

INSERT INTO `tanggungan` (`id`, `id_kk`, `nama_anak`, `kota`, `tgl`, `jekel`, `status`, `isk`, `tunjangan`, `kawin`, `bekerja`, `sekolah/kuliah`, `pengadilan`) VALUES
(2, 6, 'ESTY UQLIA ERVINA', 'Kudus', '1992-04-15', 'Perempuan', 'Ak', '1 (Satu)', 'Tidak Dapat', 'Belum', 'Belum', 'Sudah Lulus', '-'),
(3, 6, 'ESTY WILDA ARVITA SARI', 'Kudus', '1998-07-17', 'Perempuan', 'Ak', '1 (Satu)', 'Dapat', 'Belum', 'Belum', 'Masih Sekolah', ''),
(11, 11, 'FIRMAN AKBAR DHIYAULHAQ ', 'Kudus', '2011-09-26', 'Laki-laki', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Masih Sekolah', ''),
(12, 11, 'HIDAYAH AZMI AULIANY', 'Kudus', '2013-05-16', 'Perempuan', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Masih Sekolah', ''),
(13, 12, 'IBRAHIM GIBRAN RAMADHAN', 'DEMAK', '2016-06-14', 'Laki-laki', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Tidak Sekolah', ''),
(14, 12, 'ALSHAMIRA SILMIKAFFAH RAMADHAN ', 'DEMAK', '2018-10-07', 'Perempuan', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Tidak Sekolah', ''),
(15, 13, 'ZAKIYYAH  RUBY AZZAHRA', 'PATI', '2018-07-18', 'Perempuan', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Tidak Sekolah', ''),
(16, 14, 'ILHAM  ZAIDAN ASSHIDDIQIE', 'Kudus', '2000-04-10', 'Laki-laki', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Masih Sekolah', ''),
(17, 14, 'FAYYADH ATHALLA TSANI ', 'Kudus', '2013-02-13', 'Laki-laki', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Masih Sekolah', ''),
(18, 16, 'NAJMI AZIRA RIFA HANAFI', 'Cirebon', '2007-07-05', 'Perempuan', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Masih Sekolah', ''),
(19, 16, 'NAJYA AZIRA RANIA HANAFI', 'Jepara', '2015-11-07', 'Perempuan', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Tidak Sekolah', ''),
(20, 17, 'GHADI ABRISAM ZHAFRANDIO IBNU ROKHIM ', 'Kudus', '2016-08-03', 'Laki-laki', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Tidak Sekolah', ''),
(21, 18, 'DHEA SAPHIRA PERMATA SARI', 'Kudus', '2001-04-02', 'Perempuan', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Masih Sekolah', ''),
(22, 18, 'INNE MARTINA PUSPITA SARI  ', 'Kudus', '2002-03-25', 'Perempuan', 'Ak', '1 (Satu)', 'Dapat', 'Belum Kawin', 'Tidak Bekerja', 'Masih Sekolah', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kawinsyah`
--
ALTER TABLE `kawinsyah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tanggungan`
--
ALTER TABLE `tanggungan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `kawinsyah`
--
ALTER TABLE `kawinsyah`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tanggungan`
--
ALTER TABLE `tanggungan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
