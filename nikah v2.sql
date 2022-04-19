-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 01:00 PM
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
-- Database: `nikah2`
--

-- --------------------------------------------------------

--
-- Table structure for table `akad`
--

CREATE TABLE `akad` (
  `id` int(1) NOT NULL,
  `tanggal_akad` varchar(50) NOT NULL,
  `tanggal_resepsi` varchar(50) NOT NULL,
  `waktu_akad` varchar(50) NOT NULL,
  `waktu_resepsi` varchar(50) NOT NULL,
  `tempat_akad` varchar(50) NOT NULL,
  `tempat_resepsi` varchar(50) NOT NULL,
  `alamat_akad` varchar(200) NOT NULL,
  `alamat_resepsi` varchar(200) NOT NULL,
  `maps_akad` text NOT NULL,
  `maps_resepsi` text NOT NULL,
  `url_maps_akad` varchar(100) NOT NULL,
  `url_maps_resepsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akad`
--

INSERT INTO `akad` (`id`, `tanggal_akad`, `tanggal_resepsi`, `waktu_akad`, `waktu_resepsi`, `tempat_akad`, `tempat_resepsi`, `alamat_akad`, `alamat_resepsi`, `maps_akad`, `maps_resepsi`, `url_maps_akad`, `url_maps_resepsi`) VALUES
(1, 'Sabtu, 26 Desember 2021', 'Sabtu, 26 Desember 2021', 'Pukul 08.00 WIB s.d 10.00 WIB', 'Pukul 08.00 WIB s.d 10.00 WIB', 'AUDITORIUM MASJID ASSALAM', 'GRAHA SABA PERMANA', 'Jalan A dekat Rumah Makan B Gedung C', 'Jalan A dekat Rumah Makan B Gedung C', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.181795482777!2d110.37548401368856!3d-7.770538079231408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584b387308b7%3A0xea2ce4460a11afdb!2sGrha%20Sabha%20Pramana%20(GSP)%20UGM!5e0!3m2!1sid!2sid!4v1619975562060!5m2!1sid!2sid', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.181795482777!2d110.37548401368856!3d-7.770538079231408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584b387308b7%3A0xea2ce4460a11afdb!2sGrha%20Sabha%20Pramana%20(GSP)%20UGM!5e0!3m2!1sid!2sid!4v1619975562060!5m2!1sid!2sid', 'https://goo.gl/maps/61eQiSvhXRzD49iA7', 'https://goo.gl/maps/61eQiSvhXRzD49iA7');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(1) NOT NULL,
  `nama_panggilan_pria` varchar(50) NOT NULL,
  `nama_panggilan_wanita` varchar(50) NOT NULL,
  `nama_lengkap_pria` varchar(50) NOT NULL,
  `nama_lengkap_wanita` varchar(50) NOT NULL,
  `nama_orangtua_mempelai_pria` varchar(50) NOT NULL,
  `nama_orangtua_mempelai_wanita` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `photo_pria` varchar(100) NOT NULL,
  `photo_wanita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_panggilan_pria`, `nama_panggilan_wanita`, `nama_lengkap_pria`, `nama_lengkap_wanita`, `nama_orangtua_mempelai_pria`, `nama_orangtua_mempelai_wanita`, `photo`, `photo_pria`, `photo_wanita`) VALUES
(1, 'Cnk', 'Pelangi', 'Cnk Cahya Pagi, S.Tr.Ds', 'Pelangi Dwi Putri, S.Tr.Ds', 'Putra dari Bapak Semesta<br> & Ibu Embun Bening', 'Putri dari Bapak Derajat<br> & Ibu Sagriya Putri', '0e98010590a8560c17e6be67632fb560.jpg', 'ee88a31b08e56fbffd83ea50a0b2bb1b.jpeg', 'e98c7e2aea737aa3b71e7fde41a867df.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(1) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `nama`, `foto`) VALUES
(1, 'Foto 1', '1619980855291.jpeg'),
(2, 'Foto 2', '1620042680515.jpeg'),
(3, 'Foto 3', '1620042705217.jpeg'),
(4, 'Foto 4', '1620042716233.jpeg'),
(5, 'Foto 5', '1620042724593.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_status`
--

CREATE TABLE `gallery_status` (
  `id` int(1) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_status`
--

INSERT INTO `gallery_status` (`id`, `status`) VALUES
(1, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jam_operasional` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `no_telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat` text NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `maps` text NOT NULL,
  `whatsapp` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `jam_operasional`, `rekening`, `no_telp`, `alamat`, `meta_deskripsi`, `meta_keyword`, `favicon`, `maps`, `whatsapp`) VALUES
(1, 'WEDDINGCNK', 'cnkponcol@gmail.com', 'https://www.cnkponcol.com/', '#', '#', '#', '#', '#', '#', 'logo4.png', '#', '6289667771377');

-- --------------------------------------------------------

--
-- Table structure for table `love_gift`
--

CREATE TABLE `love_gift` (
  `id` int(1) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `nama_rekening` varchar(20) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `love_gift`
--

INSERT INTO `love_gift` (`id`, `nama_bank`, `no_rekening`, `nama_rekening`, `status`) VALUES
(1, 'Bank BCA', '123 123 123', 'Awan Cahya Pagi', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `username`, `link`, `gambar`, `aktif`, `urutan`) VALUES
(1, 'Identitas', 'admin', 'identitas', 'fas fa-fw fa-cogs\r\n', 'Y', 1),
(2, 'Story', 'admin', 'story', 'far fa-circle', 'Y', 13),
(5, 'Role Access', 'admin', 'role', 'fas fa-fw fa-user-lock', 'Y', 2),
(6, 'Users Management', 'admin', 'users', 'fas fa-fw fa-users', 'Y', 3),
(8, 'Bio Mempelai', 'admin', 'biodata', 'far fa-circle', 'Y', 6),
(9, 'Photo Mempelai Pria', 'admin', 'photo_pria', 'far fa-circle', 'Y', 7),
(10, 'Photo Mempelai Wanita', 'admin', 'photo_wanita', 'far fa-circle', 'Y', 8),
(11, 'Akad & Resepsi', 'admin', 'akad', 'far fa-circle', 'Y', 9),
(12, 'Waktu Acara', 'admin', 'waktu_acara', 'far fa-circle', 'Y', 10),
(13, 'Wedding Online', 'admin', 'wedding_online', 'far fa-circle', 'Y', 11),
(14, 'Protokol Kesehatan', 'admin', 'prokes', 'far fa-circle', 'Y', 12),
(15, 'Love Gift', 'admin', 'love_gift', 'far fa-circle', 'Y', 13),
(16, 'RSVP', 'admin', 'rsvp', 'far fa-circle', 'Y', 14),
(17, 'Gallery', 'admin', 'gallery', 'far fa-circle', 'Y', 13),
(18, 'Musik', 'admin', 'musik', 'far fa-circle', 'Y', 14);

--
-- Triggers `modul`
--
DELIMITER $$
CREATE TRIGGER `TdeleteModule` BEFORE DELETE ON `modul` FOR EACH ROW DELETE FROM user_modul WHERE id_modul = OLD.id_modul
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `id` int(1) NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`id`, `judul`) VALUES
(1, '891dbbe2d5712de6699164209fb7ebe0.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `prokes`
--

CREATE TABLE `prokes` (
  `id` int(1) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prokes`
--

INSERT INTO `prokes` (`id`, `status`) VALUES
(1, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(1) NOT NULL,
  `nm_role` varchar(100) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nm_role`, `status`) VALUES
(1, 'Super Admin', 'Y'),
(2, 'cnk', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `rsvp`
--

CREATE TABLE `rsvp` (
  `id` int(1) NOT NULL,
  `wa_pria` varchar(20) NOT NULL,
  `wa_wanita` varchar(20) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsvp`
--

INSERT INTO `rsvp` (`id`, `wa_pria`, `wa_wanita`, `status`) VALUES
(1, '6289667771377', '089667771377', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id_story` int(1) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `nm_story` varchar(500) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id_story`, `tahun`, `nm_story`, `status`) VALUES
(3, '2020', 'Momen spesial kami akan dimulai dari titik ini, momen kebahagiaan kami bersama membangun keluarga kecil kami. Semoga Allah SWT memberikan keberkahan untuk pernikahan kami.', 'Y'),
(4, '2019', 'Salah satu momen yang tidak disangka, Awan melamar saya dengan langsung menyatakan keinginannya kepada ayah saya. Kami pun bersiap dengan petualangan baru.', 'Y'),
(5, '2017', 'Setelah lama tidak bertemu akhirnya kami bertemu kembali di sebuah acara seminar profesional. Kebetulan kami berada di bidang yang sama.', 'Y'),
(6, '2015', 'Kami pertama kali bertemu satu sama lain di sebuah acara peminatan di kampus. Kami berkenalan karena kami menjadi perwakilan masing-masing divisi kegiatan yang kami selenggarakan.', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `story_status`
--

CREATE TABLE `story_status` (
  `id` int(1) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story_status`
--

INSERT INTO `story_status` (`id`, `photo`, `status`) VALUES
(1, '4786e85a1fedd076217bccce5e55b11d.jpeg', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '1024px-User_icon_2_svg.png',
  `level` int(1) NOT NULL,
  `blokir` enum('Y','N','Deleted') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`, `blokir`, `id_session`) VALUES
(0, 'cnkponcol', '4d12be618312bf48c678a84ba4a7fb936d9b2d16b79ec58953e54e0f3c689d58b081ea86aea698dcc14d311713ffe791c108c39ab02c891749d04e23ba6290d8', 'ryan apriansyah', 'cnkponcol01@gmail.com', '', '1631591339393.jpg', 2, 'N', ''),
(1, 'admin', 'edbd881f1ee2f76ba0bd70fd184f87711be991a0401fd07ccd4b199665f00761afc91731d8d8ba6cbb188b2ed5bfb465b9f3d30231eb0430b9f90fe91d136648', 'admin', 'admin@gmail.com', '123', '1631596884993.png', 1, 'N', '');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `Before_Insert_User` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
  IF (EXISTS(SELECT 1 FROM users WHERE username = NEW.username)) THEN
    SIGNAL SQLSTATE VALUE '45000' SET MESSAGE_TEXT = 'INSERT failed due to duplicate username';
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_modul`
--

CREATE TABLE `user_modul` (
  `id_umod` int(5) NOT NULL,
  `id_user` varchar(300) NOT NULL,
  `id_modul` int(5) NOT NULL,
  `tampil` int(5) NOT NULL,
  `tambah` int(5) NOT NULL,
  `ubah` int(5) NOT NULL,
  `hapus` int(5) NOT NULL,
  `posting` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_modul`
--

INSERT INTO `user_modul` (`id_umod`, `id_user`, `id_modul`, `tampil`, `tambah`, `ubah`, `hapus`, `posting`) VALUES
(144, '1', 2, 1, 1, 1, 1, 0),
(147, '1', 5, 1, 1, 1, 1, 0),
(149, '1', 6, 1, 1, 1, 1, 0),
(150, '1', 1, 1, 0, 0, 0, 0),
(152, '1', 8, 1, 0, 0, 0, 0),
(153, '1', 9, 1, 0, 0, 0, 0),
(154, '1', 10, 1, 0, 0, 0, 0),
(155, '1', 11, 1, 0, 0, 0, 0),
(156, '1', 12, 1, 0, 0, 0, 0),
(157, '1', 13, 1, 0, 0, 0, 0),
(158, '1', 14, 1, 0, 0, 0, 0),
(159, '1', 15, 1, 0, 0, 0, 0),
(160, '1', 16, 1, 0, 0, 0, 0),
(161, '1', 17, 1, 1, 1, 1, 0),
(162, '1', 18, 1, 0, 0, 0, 0),
(163, '2', 1, 1, 0, 0, 0, 0),
(164, '2', 2, 1, 1, 0, 0, 0),
(165, '2', 5, 1, 1, 0, 0, 0),
(166, '2', 6, 1, 1, 0, 0, 0),
(167, '2', 8, 1, 0, 0, 0, 0),
(168, '2', 9, 1, 0, 0, 0, 0),
(169, '2', 10, 1, 0, 0, 0, 0),
(170, '2', 11, 1, 0, 0, 0, 0),
(171, '2', 12, 1, 0, 0, 0, 0),
(172, '2', 13, 1, 0, 0, 0, 0),
(173, '2', 14, 1, 0, 0, 0, 0),
(174, '2', 15, 1, 0, 0, 0, 0),
(175, '2', 16, 1, 0, 0, 0, 0),
(176, '2', 17, 1, 1, 0, 0, 0),
(177, '2', 18, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `waktu_acara`
--

CREATE TABLE `waktu_acara` (
  `id` int(1) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `waktu` varchar(5) NOT NULL,
  `format_waktu` varchar(2) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu_acara`
--

INSERT INTO `waktu_acara` (`id`, `tanggal`, `waktu`, `format_waktu`, `status`) VALUES
(1, '12/26/2021', '09:00', 'AM', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_online`
--

CREATE TABLE `wedding_online` (
  `id` int(1) NOT NULL,
  `zoom_url` text NOT NULL,
  `status` enum('aktif','tidak') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding_online`
--

INSERT INTO `wedding_online` (`id`, `zoom_url`, `status`) VALUES
(1, 'https://zoom.us/signin', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akad`
--
ALTER TABLE `akad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `gallery_status`
--
ALTER TABLE `gallery_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `love_gift`
--
ALTER TABLE `love_gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prokes`
--
ALTER TABLE `prokes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `rsvp`
--
ALTER TABLE `rsvp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id_story`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `story_status`
--
ALTER TABLE `story_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `user_modul`
--
ALTER TABLE `user_modul`
  ADD PRIMARY KEY (`id_umod`);

--
-- Indexes for table `waktu_acara`
--
ALTER TABLE `waktu_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_online`
--
ALTER TABLE `wedding_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akad`
--
ALTER TABLE `akad`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_status`
--
ALTER TABLE `gallery_status`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id_story` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `story_status`
--
ALTER TABLE `story_status`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_modul`
--
ALTER TABLE `user_modul`
  MODIFY `id_umod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `waktu_acara`
--
ALTER TABLE `waktu_acara`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
