-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2023 pada 09.15
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siormawa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ajukan_proposal`
--

CREATE TABLE `tb_ajukan_proposal` (
  `id` int(11) NOT NULL,
  `halaman` text NOT NULL,
  `file_pdf` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ajukan_proposal`
--

INSERT INTO `tb_ajukan_proposal` (`id`, `halaman`, `file_pdf`, `tanggal`, `id_user`, `status`) VALUES
(2, '                                                                                               <table width=\"100%\">\r\n    <tbody><tr>\r\n        <td nowrap=\"\" width=\"40%\">1. Nama Kegiatan</td>\r\n        <td>: <i>iSI MANUAL</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">2. Nama Organisasi Pelaksana</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">3. Ketua Pelaksana</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; NIM</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Fakultas / Prodi </td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP </td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">4. Sekertaris Pelaksana</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; NIM</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Fakultas / Prodi </td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP </td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">5. Jumlah Anggota</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">6. Pembina Organisasi</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Nama Lengkap</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP </td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Tempat Kegiatan </td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n    <tr>\r\n        <td nowrap=\"\" width=\"40%\">7. Jumlah Total</td>\r\n        <td>: <i>Diisi Manual</i></td>\r\n    </tr>\r\n</tbody></table>', 'Hasna_Azifatun_Najwa_K1320039_Penerapan_Graf_Proyek_Matdis1.pdf', '2023-07-17 08:57:39', 6, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dana`
--

CREATE TABLE `tb_dana` (
  `id` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `total_dana` int(11) NOT NULL,
  `total_dana_disetujui` int(11) NOT NULL,
  `status` text NOT NULL,
  `persentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dana`
--

INSERT INTO `tb_dana` (`id`, `id_proposal`, `total_dana`, `total_dana_disetujui`, `status`, `persentase`) VALUES
(3, 3, 1000000, 10000000, '', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_histori_catatan`
--

CREATE TABLE `tb_histori_catatan` (
  `id` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `status` text NOT NULL,
  `catatan` text NOT NULL,
  `tgl_kirim` datetime NOT NULL,
  `file` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_histori_catatan`
--

INSERT INTO `tb_histori_catatan` (`id`, `id_proposal`, `status`, `catatan`, `tgl_kirim`, `file`, `username`) VALUES
(9, 2, '1', 'Ok', '2023-07-17 09:02:45', 'Hasna_Azifatun_Najwa_K1320039_Penerapan_Graf_Proyek_Matdis2.pdf', 'tari'),
(10, 2, '2', 'Ok', '2023-07-17 09:08:35', 'Hasna_Azifatun_Najwa_K1320039_Penerapan_Graf_Proyek_Matdis2.pdf', 'bakm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_proposal`
--

CREATE TABLE `tb_proposal` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `acara` text NOT NULL,
  `no_surat` text NOT NULL,
  `hal` varchar(20) NOT NULL,
  `kepada` text NOT NULL,
  `tgl_acara` date NOT NULL,
  `tempat` text NOT NULL,
  `ketua` text NOT NULL,
  `sekertaris` text NOT NULL,
  `tgl_surat` date NOT NULL,
  `mengetahui_1` text NOT NULL,
  `mengetahui_2` text NOT NULL,
  `halaman_pengesahan` text NOT NULL,
  `halaman_proposal` text NOT NULL,
  `status` text NOT NULL,
  `halaman_agenda` text NOT NULL,
  `halaman_anggaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_proposal`
--

INSERT INTO `tb_proposal` (`id`, `id_user`, `acara`, `no_surat`, `hal`, `kepada`, `tgl_acara`, `tempat`, `ketua`, `sekertaris`, `tgl_surat`, `mengetahui_1`, `mengetahui_2`, `halaman_pengesahan`, `halaman_proposal`, `status`, `halaman_agenda`, `halaman_anggaran`) VALUES
(1, 1, 'TOSS (Togetherness in Solidarity)', '100/102/N2/2022', 'Permohonan Dana', 'Rektor Universitas Pesantren Tinggi Darul ’Ulum Jombang | Cq. Wakil Rektor Bidang SDM, Keuangan dan Umum', '2023-06-16', 'Gor ', 'Muhammad|4331212', 'Aisyah|4331212', '2023-06-06', 'Aisyah|ketua BEM | 4331212', 'Aisyah|sekertaris BEM | 4331212', '                                    \r\n<table width=\"100%\">\r\n	<tbody><tr>\r\n		<td nowrap=\"\" width=\"40%\">1. Nama Kegiatan</td>\r\n		<td width=\"60%\">: <b>TOSS (Togetherness in Solidarity)</b></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">2. Nama Organisasi Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">3. Ketua Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; NIM</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Fakultas / Prodi </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">4. Sekertaris Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; NIM</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Fakultas / Prodi </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">5. Jumlah Anggota</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">6. Pembina Organisasi</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Nama Lengkap</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Tempat Kegiatan </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">7. Jumlah Total</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n</tbody></table>', '                                    <br><label style=\"font-weight: bold; font-size: 13px\">A. DASAR PEMIKIRAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">B. NAMA DAN TEMA KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">C. TUJUAN KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">D. LANDASAN KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">A. BENTUK KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">B. PESERTA KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">C. WAKTU KEGIATAN</label>\r\n<p style=\"text-align: justify;\">Hari : <i>Diisi Manual</i> <br> Tanggal : <i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">D. SUMBER DANA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">E. SUSUNAN KEPANITIAN</label>\r\n<p style=\"text-align: justify; padding-left: 20px\">\r\n	<label style=\"font-weight: bold; font-size: 13px\">1. Pelindung : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">2. Penanggung Jawab  : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">3. Organizing Committee   : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">4. Seksi - seksi   : </label>\r\n</p>\r\n<label style=\"font-weight: bold; font-size: 13px\">F. AGENDA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">G. ANGGARAN DANA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">H. PENUTUP</label>\r\n<p style=\"text-align: justify;\">Demikian proposal kegiatan ini kami buat, semoga dapat digunakan sebagai bahan acuan awal dan pertimbangan untuk memberikan bantuan dana. Dan semoga agenda ini dapat berjalan sesuai rencana.</p>\r\n\r\n	', '', '', ''),
(3, 6, 'Acara istigosah', '100/102/N.BT23/2023', 'Permohonan Dana', 'Rektor', '2023-06-13', 'Gelora', 'Muhammad|4331212', 'Siti Asyiah|4331212', '2023-06-13', 'Ahmad Ali|ketua BEM | 4331212', 'Aisyah Bisyaroh|ketua BEM | 4331212', '                                                                                                            \r\n<table width=\"100%\">\r\n	<tbody><tr>\r\n		<td nowrap=\"\" width=\"40%\">1. Nama Kegiatan</td>\r\n		<td width=\"60%\">: <b>Acara Istigosah</b></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">2. Nama Organisasi Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">3. Ketua Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; NIM</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Fakultas / Prodi </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">4. Sekertaris Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; NIM</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Fakultas / Prodi </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">5. Jumlah Anggota</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">6. Pembina Organisasi</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Nama Lengkap</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Tempat Kegiatan </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">7. Jumlah Total</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n</tbody></table>', '                                                                                                            <br><label style=\"font-weight: bold; font-size: 13px\">A. DASAR PEMIKIRAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">B. NAMA DAN TEMA KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">C. TUJUAN KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">D. LANDASAN KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">A. BENTUK KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">B. PESERTA KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">C. WAKTU KEGIATAN</label>\r\n<p style=\"text-align: justify;\">Hari : <i>Diisi Manual</i> <br> Tanggal : <i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">D. SUMBER DANA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">E. SUSUNAN KEPANITIAN</label>\r\n<p style=\"text-align: justify; padding-left: 20px\">\r\n	<label style=\"font-weight: bold; font-size: 13px\">1. Pelindung : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">2. Penanggung Jawab  : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">3. Organizing Committee   : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">4. Seksi - seksi   : </label>\r\n</p>\r\n<label style=\"font-weight: bold; font-size: 13px\">F. AGENDA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">G. ANGGARAN DANA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">H. PENUTUP</label>\r\n<p style=\"text-align: justify;\">Demikian proposal kegiatan ini kami buat, semoga dapat digunakan sebagai bahan acuan awal dan pertimbangan untuk memberikan bantuan dana. Dan semoga agenda ini dapat berjalan sesuai rencana.</p>\r\n\r\n	', '', '<figure class=\"table\"><table><tbody><tr><td>No</td><td>Acara</td><td>Jam</td><td>Penanggung Jawa</td></tr><tr><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td></tr></tbody></table></figure><p><br><br><br>&nbsp;</p>', '<figure class=\"table\"><table><tbody><tr><td>No</td><td>Jenis Kebutuhan</td><td>Vol</td><td>Satuan</td><td>Unit</td><td>Jumlah</td></tr><tr><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td></tr><tr><td>coba</td><td>coba</td><td>coba</td><td>coba</td><td>coba</td><td>coba</td></tr></tbody></table></figure><p><br><br><br>&nbsp;</p>'),
(4, 8, 'TOSS (Togetherness in Solidarity)', '100/102/N.BT23/2023', 'Permohonan Dana', 'Rektor Universitas Pesantren Tinggi Darul ’Ulum Jombang', '2023-06-14', 'Gelora', 'Arif|299394', 'Arif|299394', '2023-06-13', 'Ahmad Ali|Wakil Dekan|4331212', 'Ahmad Ali|Ketua BEM|4331212', '                  \r\n<table width=\"100%\">\r\n	<tbody><tr>\r\n		<td nowrap=\"\" width=\"40%\">1. Nama Kegiatan</td>\r\n		<td width=\"60%\">: <b>Contoh</b></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">2. Nama Organisasi Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">3. Ketua Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; NIM</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Fakultas / Prodi </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">4. Sekertaris Pelaksana</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; NIM</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Fakultas / Prodi </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">5. Jumlah Anggota</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">6. Pembina Organisasi</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Nama Lengkap</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; No. Telp / HP  </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">&nbsp; &nbsp; &nbsp; &nbsp; Tempat Kegiatan </td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n	<tr>\r\n		<td nowrap=\"\" width=\"40%\">7. Jumlah Total</td>\r\n		<td>: <i>Diisi Manual</i></td>\r\n	</tr>\r\n</tbody></table>', '                  <br><label style=\"font-weight: bold; font-size: 13px\">A. DASAR PEMIKIRAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">B. NAMA DAN TEMA KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">C. TUJUAN KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">D. LANDASAN KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">A. BENTUK KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">B. PESERTA KEGIATAN</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">C. WAKTU KEGIATAN</label>\r\n<p style=\"text-align: justify;\">Hari : <i>Diisi Manual</i> <br> Tanggal : <i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">D. SUMBER DANA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">E. SUSUNAN KEPANITIAN</label>\r\n<p style=\"text-align: justify; padding-left: 20px\">\r\n	<label style=\"font-weight: bold; font-size: 13px\">1. Pelindung : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">2. Penanggung Jawab  : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">3. Organizing Committee   : </label> <br> <i>Diisi Manual</i> <br>\r\n	<label style=\"font-weight: bold; font-size: 13px\">4. Seksi - seksi   : </label>\r\n</p>\r\n<label style=\"font-weight: bold; font-size: 13px\">F. AGENDA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">G. ANGGARAN DANA</label>\r\n<p style=\"text-align: justify;\"><i>Diisi Manual</i></p>\r\n<label style=\"font-weight: bold; font-size: 13px\">H. PENUTUP</label>\r\n<p style=\"text-align: justify;\">Demikian proposal kegiatan ini kami buat, semoga dapat digunakan sebagai bahan acuan awal dan pertimbangan untuk memberikan bantuan dana. Dan semoga agenda ini dapat berjalan sesuai rencana.</p>\r\n\r\n	', '', '<figure class=\"table\"><table><tbody><tr><td>No</td><td>Acara</td><td>Jam</td><td>Penanggung Jawab</td></tr><tr><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td></tr></tbody></table></figure><p><br><br><br>&nbsp;</p>', '<figure class=\"table\"><table><tbody><tr><td>No</td><td>Jenis Kebutuhan</td><td>Vol</td><td>Satuan</td><td>Unit</td><td>Jumlah</td></tr><tr><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td><td>Disi manual</td></tr></tbody></table></figure><p><br><br><br>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `fakultas` text NOT NULL,
  `logo` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `organisasi`, `fakultas`, `logo`, `username`, `password`, `level`, `alamat`) VALUES
(1, 'ADMIN BAKM', 'Nama Badan Organisasi', 'Nama Fakultas', 'logo2.png', 'admin', '202cb962ac59075b964b07152d234b70', '1', 'Pusat ORMAWA Unipdu, Gor'),
(6, 'TIM PANITIA ACARA ITIGHOSAH', 'UKM TARI', 'Fakultas teknik', 'logo1.png', 'tari', '202cb962ac59075b964b07152d234b70', '4', 'Pusat jombang jawa timur'),
(7, 'BAK', 'BAGIAN ADMINISTRASI KEUANGAN', '-', 'logo111.png', 'bak', '202cb962ac59075b964b07152d234b70', '3', 'Jombang'),
(8, 'UKM PSHT', 'BADAN EKSEKUTIF MAHASISWA', 'Fakultas teknik', 'logo1111.png', 'psht', '202cb962ac59075b964b07152d234b70', '4', 'Jombang'),
(9, 'BAKM', 'BAKM', 'BAKM', 'logo_mulur_jaya.jpg', 'bakm', '202cb962ac59075b964b07152d234b70', '2', 'BAKM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ajukan_proposal`
--
ALTER TABLE `tb_ajukan_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dana`
--
ALTER TABLE `tb_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_histori_catatan`
--
ALTER TABLE `tb_histori_catatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_proposal`
--
ALTER TABLE `tb_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_ajukan_proposal`
--
ALTER TABLE `tb_ajukan_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_dana`
--
ALTER TABLE `tb_dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_histori_catatan`
--
ALTER TABLE `tb_histori_catatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_proposal`
--
ALTER TABLE `tb_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
