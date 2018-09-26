-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2018 pada 17.50
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `remember_token`) VALUES
(1, 'admin', '$2y$10$hGg02aSLIpMkAAXngodN8Om2PeOw4jvNPKNP6AVZz3gPdmQ0I1Fx2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_pages`
--

CREATE TABLE `info_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `public` tinyint(4) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `info_pages`
--

INSERT INTO `info_pages` (`id`, `title`, `url`, `public`, `content`) VALUES
(1, 'Contact', 'contact', 1, 'Add your Contact information'),
(2, 'About', 'about', 1, 'Add your About information');

-- --------------------------------------------------------

--
-- Struktur dari tabel `search_limit`
--

CREATE TABLE `search_limit` (
  `ip` varchar(39) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `search_limit`
--

INSERT INTO `search_limit` (`ip`, `count`, `updated_at`) VALUES
('::1', 3, '2018-09-26 15:31:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`name`, `value`) VALUES
('ads_1', ''),
('ads_2', ''),
('ads_3', ''),
('ads_safe', '0'),
('images_per_page', '100'),
('news_per_page', '10'),
('search_answers', '1'),
('search_api_key', ''),
('search_market', 'en-US'),
('search_per_ip', '100'),
('search_related', '1'),
('search_sites', ''),
('search_suggestions', '1'),
('search_time', '86400'),
('site_language', 'english'),
('site_tagline', 'Lorem ipsum dolor sit amet'),
('site_theme', 'search'),
('site_title', 'tadao'),
('suggestions_per_ip', '300'),
('timezone', ''),
('tracking_code', ''),
('videos_per_page', '30'),
('web_per_page', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suggestions_limit`
--

CREATE TABLE `suggestions_limit` (
  `ip` varchar(39) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `telp`, `password`) VALUES
(1, 'umar', 'satrio', 'umarsatrio@gmail.com', '081217233693', 'umar'),
(2, ' n', 'n', 'nn', 'nn', 'nn'),
(3, 't', 't', 't', 't', 't'),
(4, '?', '?', '?', '?', '?'),
(5, 'asdad', 'sds', 'sdsd', 'sdsd', 'sdsds'),
(6, 'yoha', 'sds', 'sdsd', 'sdsd', 'sdsds'),
(7, 'yoha', 'cahya', 'sdsd', 'sdsd', 'sdsds'),
(8, 'willy', 'dr', 'willy@mail.com', '', '1234'),
(9, 'willy', 'dr', 'willy@mail.com', '', '111'),
(10, 'willy', 'dr', 'willy@mail.com', '1313131', '1313'),
(11, 'willy', 'dr', 'willy@mail.com', '1313131', 'mn'),
(12, 'asdad', 'adaw', 'willy@mail.com', '1313131', 'mn'),
(13, 'asdad', 'adaw', 'willy@mail.com', '1313131', 'mn'),
(14, 'asdad', 'adaw', 'willy@mail.com', '1313131', 'mn'),
(15, 'asa', 'asa', 'willy@mail.com', '8988', 'sd'),
(16, 'asdad', 'adaw', 'sdadaffafjafja', '1313131', 'mn'),
(17, 'asdad', 'adaw', 'umar@mail.com', '1233', 'as'),
(18, '', '', '', '', ''),
(19, 'cindy', 'kartika', 'cindykart10@mail.com', '082143573083', 'cindy'),
(20, 'ririn', 'cakep', 'ririn@mail.com', '099999', 'qwe'),
(21, 'asd', 'asd', 'asdvvv', '123', '123'),
(22, 'adada', 'aa', 'awdss', '13113', 'qwe'),
(23, 'aaaa', 'aaaa', 'uams@mail.com', '123', 'mol'),
(24, 'bbbbb', 'aaaa', 'uamsd@mail.com', '123', 'sss'),
(25, 'andine', 'ceul', 'cnudl@mail.com', '090900808021', '123'),
(26, 'ssusu', 'ssslow', 'slow@mail.com', '0999191', '123'),
(27, 'rehan', 'aa', 'multazamsd@gmail.com', '09090909', '123'),
(28, 'umarrrr', 'cakepp', 'umarsw@mail.com', '081359115099', '1234'),
(29, 'asdad', 'mm', 'mnmnmm', '1313131', 'refef'),
(30, 'wiwid', 'www', 'wiwid@mail.com', '0101010', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info_pages`
--
ALTER TABLE `info_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `search_limit`
--
ALTER TABLE `search_limit`
  ADD PRIMARY KEY (`ip`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`name`);

--
-- Indeks untuk tabel `suggestions_limit`
--
ALTER TABLE `suggestions_limit`
  ADD PRIMARY KEY (`ip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `info_pages`
--
ALTER TABLE `info_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
