-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 05:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok3`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `nama`) VALUES
(101, 'Jazz'),
(102, 'Kpop'),
(104, 'Klasik'),
(105, 'Reggae'),
(106, 'Koplo'),
(107, 'Blues'),
(108, 'Soul'),
(109, 'Religi'),
(110, 'Keroncong'),
(111, 'R & B'),
(112, 'Dangdut'),
(113, 'Electronic Dance Mus'),
(114, 'modern'),
(115, 'Klasik'),
(116, 'Jadul'),
(117, 'Inggris'),
(118, 'ArabSaudi'),
(119, 'Chines'),
(120, 'ThailandPop'),
(121, 'IndianPop'),
(122, 'CanadaPop'),
(123, 'Hip-Hop'),
(124, 'KoreanPop'),
(125, 'Punk Rock'),
(126, 'Alternative Rock'),
(127, 'Indie Rock'),
(128, 'Progressive Rock'),
(129, 'Sadly'),
(130, 'Melankolis'),
(131, 'Metal'),
(132, 'Dj'),
(133, 'Dj Remix'),
(134, 'Remix'),
(135, 'Remix Koplo'),
(288, 'Rock');

-- --------------------------------------------------------

--
-- Table structure for table `genre_musik`
--

CREATE TABLE `genre_musik` (
  `id` int(20) NOT NULL,
  `id_musik` int(30) NOT NULL,
  `id_genre` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre_musik`
--

INSERT INTO `genre_musik` (`id`, `id_musik`, `id_genre`) VALUES
(17, 909, 117),
(18, 231, 112),
(27, 2424, 106),
(32, 113, 101),
(35, 101, 102),
(101, 101, 102),
(111, 101, 101),
(112, 101, 109),
(127, 103, 117),
(208, 112, 122),
(213, 102, 104);

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `penyanyi_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`id`, `nama`, `alamat`, `penyanyi_id`) VALUES
(101, 'Universal Music Grop', 'Universal Music Publishing Indonesia Jl. Jend. Sudirman Kav. 32. Jakarta 10220. Indonesia.', '101'),
(102, 'Za Entertain', 'jln derawan', '102'),
(109, 'suka suka', 'jl. bahagia no 19', '182'),
(126, 'Graley', 'jl. bagus banget', '174'),
(277, 'Meurenn', 'jl. kadrie oening', '176'),
(288, 'Vaz Ent', 'Jln Tarakan', '288'),
(299, 'flowers', 'jl. anggrel putih no. 18', '181'),
(344, 'juni records', 'jl. jakarta n0 88', '179'),
(551, 'VIN InterGo', 'Rapak Indah Pride jln. Jakarta', '100'),
(566, 'Qozz', 'jl. mawar no 18', '178'),
(567, 'musik esgot', 'jl. apa aja cuy', '172'),
(666, 'klip merah', 'jl. M Said no. 20', '177'),
(678, 'falamboya', 'jl. Flamboyan no 89', '173'),
(789, 'musik kristal', 'Jalan Kesuma Bangsa No. 82', '171'),
(876, 'musik nextbit', 'jl. nextbit no 19', '175'),
(883, 'SM Ent', 'Korean, Indonesia, Canada, China', '111'),
(901, 'serros', 'jl. damai terus no 70', '170'),
(902, 'hyperra', 'jl. gunung fuji no. 56', '169'),
(903, 'musik blurrbox', 'jl. antar jemput no. 85', '168'),
(904, 'musik audonix', 'jl. buah manggis no.78', '167'),
(905, 'musik soundberry', 'jl. duku no.16', '166'),
(906, 'musik orbin', 'jl. anggur no.54', '165'),
(907, 'audio biola', 'jl. biola no.90', '163'),
(908, 'audio statis', 'jl. angkringan no. 90', '164'),
(909, 'suara abadi', 'jl. abadi selalu no.70', '162'),
(910, 'buat musik', 'jl. maluku no.70', '161'),
(911, 'presonus', 'jl. planet bumi no.55', '110'),
(912, 'produksi indah', 'jl. planet mars no.44', '105'),
(913, 'membungkam', 'jl. venus no.90', '104'),
(914, 'woltrenn', 'jl. venus no.78', '180');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_06_082149_add_foreignkey_label', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `id` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `label_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`id`, `nama`, `label_id`) VALUES
(101, 'Berdamai', 101),
(102, 'Evaluasi', 102),
(103, 'BrunoMars', 101),
(112, 'NCT Dream', 101),
(201, 'Sinta Jojo', 102),
(2425, 'menyesal', 109),
(2426, 'komang', 126),
(2427, 'sial', 277),
(2428, 'mengejar matahari', 288),
(2429, 'lupakan cinta', 299),
(2430, 'jalan pulang', 344),
(2431, 'bohongi hati', 551),
(2432, 'tak segampang itu', 566),
(2433, 'muak', 567),
(2434, 'saat kau telah mengerti', 666),
(2435, 'lantas', 678),
(2436, 'rumah singgah', 789),
(2437, 'hati', 876),
(2438, 'tampar', 883),
(2439, 'mesin waktu', 901),
(2440, 'pesan terakhir', 902),
(2441, 'asmalibrasi', 903),
(2442, 'kau rumahku', 904),
(2443, 'resah jadi luka', 905),
(2444, 'semata karenamu', 906);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyanyi`
--

CREATE TABLE `penyanyi` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyanyi`
--

INSERT INTO `penyanyi` (`id`, `nama`, `tanggal_lahir`, `jenis_kelamin`) VALUES
('100', 'okin', '2010-05-19', 'laki-laki'),
('101', 'Raisa', '1990-06-06', 'perempuan'),
('102', 'Bunga citra Lestari', '1983-03-22', 'perempuan'),
('104', 'Rizky Febian', '1998-02-25', 'laki-laki'),
('105', 'Tulus', '1987-08-20', 'laki-laki'),
('110', 'BrunoMars', '2015-01-01', 'laki-laki'),
('111', 'NCT Dream', '2016-08-25', 'laki-laki'),
('161', 'Kim Taehyung', '1995-12-30', 'laki-laki'),
('162', 'Sung Hanbin', '2001-07-20', 'laki-laki'),
('163', 'Tiara Andini', '2001-05-08', 'perempuan'),
('164', 'Lyodra', '2001-10-16', 'perempuan'),
('165', 'Karina', '2001-10-04', 'perempuan'),
('166', 'Winter', '2002-06-25', 'perempuan'),
('167', 'Aliando', '1996-10-24', 'laki-laki'),
('168', 'Zhang Hao', '2000-09-04', 'laki-laki'),
('169', 'Nicholas', '1997-04-09', 'laki-laki'),
('170', 'Gabriel', '1999-01-17', 'laki-laki'),
('171', 'Noah', '2003-12-18', 'perempuan'),
('172', 'Huh Yunjin', '2002-11-10', 'perempuan'),
('173', 'Zhou Lousi', '2000-06-05', 'perempuan'),
('174', 'Mark Lee', '1999-08-02', 'laki-laki'),
('175', 'Lucas', '1999-01-25', 'laki-laki'),
('176', 'Jeon Jungkook', '1998-09-01', 'laki-laki'),
('178', 'Ziva Magnolya', '2001-06-18', 'perempuan'),
('179', 'Mahalini', '1996-03-14', 'perempuan'),
('180', 'Park Jimin', '1995-10-17', 'laki-laki'),
('181', 'Rizky Febian', '1996-09-22', 'laki-laki'),
('182', 'Zayn Malik', '1990-10-21', 'laki-laki'),
('288', 'Iqbaal ramadhan', '2001-09-17', 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `no_tlp`, `jenis_kelamin`, `alamat`, `password`, `level`) VALUES
(1, 'sopie', 823455, 'perempuan', 'kadrie onieng', '123123', 'admin'),
(111, 'dini', 876894528, 'perempuan', 'jalan grogot', 'dinicu', 'customer'),
(123, 'zahraaa', 12466, 'pr', 'tegarr', 'cintaku', 'admin'),
(288, 'pinaa', 897658976, 'perempuan', 'korean', 'pinamark', 'admin'),
(444, 'dio', 12798, 'laki', 'gelatuk', 'jlk', 'customer'),
(3123, 'nisa', 823455, 'pr', 'lbk', 'cape', 'customer'),
(9090, 'sofie', 387638763, 'perempuan', 'jl kadrie', 'sofie', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Alvinalia', '2111102441140@umkt.ac.id', NULL, '$2y$10$VkjhEeEtWHc2ORVBVm1Q3uBfNGivUQBnw5YRMk0nVAsjHa8HygbC2', NULL, '2023-06-09 07:56:00', '2023-06-09 07:56:00'),
(3, 'io', 'dio.ferdinan5@gmail.com', NULL, '$2y$10$nL7iIqp4ovzwl93mLw3onOV4lK4iVqUuYupr49Tjsv0xf8m15NNeK', NULL, '2023-06-10 05:22:32', '2023-06-10 05:22:32'),
(4, 'sofiejojo', 'sofieeeee123@gmail.com', NULL, '$2y$10$4Ir/YHsAqIPf2RVm4AnWEu9VQG3Tw8YMwEe5HbTMQsVB.NXPca7sS', NULL, '2023-06-10 05:23:29', '2023-06-10 05:44:16'),
(7, 'bismilahyey', 'iiii@gmail.com', NULL, '$2y$10$68YOeVUGN.uoEfABjR/7MudWtKnqmFo.lNwY7JSC/o9Sp..2eFv0i', NULL, NULL, '2023-06-25 02:03:35'),
(8, 'nisaaa', 'rud959@umkt.ac.id', NULL, '$2y$10$7.l6Qpp3cwPkzLbSN.f5juu2wQWIG.csjk21/YvRv23tCjtpJExru', NULL, '2023-06-21 06:05:34', '2023-06-21 06:05:34'),
(9, 'Alvinalia', '2111102441140@gmail.com', NULL, '$2y$10$L3EEPPdKBG6Vmu3kCVbmkuaqeD0fihDTcrssO7D4Jk4hxnQbKSBnu', NULL, '2023-06-22 01:55:14', '2023-06-22 01:55:14'),
(10, 'pinael', 'pinae123l@gmail.com', NULL, '$2y$10$YfE.B08F75Yw3X7hQaH9MuRcLJWJPkvomZGe/gfy8ANNJ4WcR55R.', NULL, '2023-06-23 04:21:42', '2023-06-23 04:21:42'),
(11, 'dio', '2111102441127@umkt.ac.id', NULL, '$2y$10$76.typYKhUVckV4rpfWcJOiNqo2GCpvBye1R/eNQJ2tMZVW2HMpOC', NULL, '2023-06-25 00:05:53', '2023-06-25 00:05:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre_musik`
--
ALTER TABLE `genre_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penyanyi_id` (`penyanyi_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `label_id` (`label_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penyanyi`
--
ALTER TABLE `penyanyi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2445;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `musik`
--
ALTER TABLE `musik`
  ADD CONSTRAINT `musik_ibfk_1` FOREIGN KEY (`label_id`) REFERENCES `label` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
