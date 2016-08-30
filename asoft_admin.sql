-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2016 pada 14.22
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `asoft_admin`
--
CREATE DATABASE IF NOT EXISTS `asoft_admin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `asoft_admin`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_activity_log`
--

CREATE TABLE IF NOT EXISTS `tb_activity_log` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `users` varchar(25) NOT NULL,
  `activity` varchar(65) NOT NULL,
  `to` varchar(65) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1327 ;

--
-- Dumping data untuk tabel `tb_activity_log`
--

INSERT INTO `tb_activity_log` (`id`, `users`, `activity`, `to`, `date`) VALUES
(847, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:54:01'),
(848, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:57:16'),
(849, 'herla', 'Resend Verifikasi Email', 'Sponsor meminta mengirimkan verifikasi ulang ke emailnya..', '2016-02-02 21:57:20'),
(850, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:58:05'),
(851, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:58:07'),
(852, 'herla', 'Resend Verifikasi Email', 'Sponsor meminta mengirimkan verifikasi ulang ke emailnya..', '2016-02-02 21:58:09'),
(853, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:58:53'),
(854, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:58:54'),
(855, 'herla', 'Resend Verifikasi Email', 'Sponsor meminta mengirimkan verifikasi ulang ke emailnya..', '2016-02-02 21:58:57'),
(856, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:59:39'),
(857, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:59:41'),
(858, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 21:59:49'),
(859, 'herla', 'Resend Verifikasi Email', 'Sponsor meminta mengirimkan verifikasi ulang ke emailnya..', '2016-02-02 21:59:54'),
(860, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:00:28'),
(861, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:00:30'),
(862, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:00:46'),
(863, 'herla', 'Resend Verifikasi Email', 'Sponsor meminta mengirimkan verifikasi ulang ke emailnya..', '2016-02-02 22:00:59'),
(864, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:02:20'),
(865, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:02:22'),
(866, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:02:23'),
(867, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:02:52'),
(868, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:02:54'),
(869, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:02:55'),
(870, 'herla', 'Resend Verifikasi Email', 'Sponsor meminta mengirimkan verifikasi ulang ke emailnya..', '2016-02-02 22:02:57'),
(871, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:03:46'),
(872, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:03:47'),
(873, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:04:29'),
(874, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:04:30'),
(875, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:05:06'),
(876, 'herla', 'Verifikasi Akun Via Website', 'Sponsor mengakses halaman verifikasi akun di website DANAdidik.', '2016-02-02 22:05:23'),
(877, 'herla', 'Resend Verifikasi Email', 'Sponsor meminta mengirimkan verifikasi ulang ke emailnya..', '2016-02-02 22:05:35'),
(878, 'herla', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-02 22:06:03'),
(879, 'herla', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui ba', '2016-02-02 22:06:35'),
(880, 'herla', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-02 22:06:35'),
(881, 'herla', 'Login Berhasil', 'Login from 202.62.17.34', '2016-02-02 22:06:49'),
(882, 'admin', 'Login success', 'Admin Index Page', '2016-02-03 01:12:53'),
(883, 'admin', 'Sponsor Approved', 'Berhasil mengkonfirmasi sponsor.', '2016-02-03 01:13:14'),
(884, 'admin', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-03 01:14:33'),
(885, 'herla', 'DOKU Payment Success', 'Pembayaran invoice saldo balance dengan DOKU berhasil', '2016-02-03 01:16:44'),
(886, 'admin', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-03 02:33:09'),
(887, 'herla', 'Sponsor Refund Loan Request', 'Sponsor ini mengirimkan permohonan refund pinjaman tetapi gagal k', '2016-02-03 02:33:54'),
(888, 'joko', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-03 02:36:01'),
(889, 'joko', 'DOKU Payment Failure', 'User membatalkan pembayaran melalui DOKU.', '2016-02-03 02:36:41'),
(890, 'joko', 'DOKU Payment Success', 'Pembayaran invoice registrasi dengan DOKU berhasil', '2016-02-03 02:39:57'),
(891, 'joko', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui DO', '2016-02-03 02:43:44'),
(892, 'joko', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-03 02:43:45'),
(893, 'joko', 'Login Berhasil', 'Login from 202.62.16.88', '2016-02-03 02:44:04'),
(894, 'joko', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-03 02:44:25'),
(895, 'joko', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-03 02:44:44'),
(896, 'admin', 'Login success', 'Admin Index Page', '2016-02-03 02:44:59'),
(897, 'admin', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-03 02:45:13'),
(898, 'admin', 'Sponsor Cancel Saldo', 'Berhasil membatalkan penambahan saldo.', '2016-02-03 02:45:38'),
(899, 'admin', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-03 02:49:22'),
(900, 'admin', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-03 02:49:37'),
(901, 'admin', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-03 02:49:57'),
(902, 'admin', 'Login success', 'Admin Index Page', '2016-02-03 02:53:21'),
(903, 'joko', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-03 02:54:35'),
(904, 'joko', 'DOKU Payment Success', 'Pembayaran invoice registrasi dengan DOKU berhasil', '2016-02-03 02:55:28'),
(905, 'joko', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui DO', '2016-02-03 02:56:09'),
(906, 'joko', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-03 02:56:09'),
(907, 'herla', 'Login Berhasil', 'Login from 202.62.16.88', '2016-02-03 02:56:19'),
(908, 'joko', 'Login Berhasil', 'Login from 202.62.16.88', '2016-02-03 02:56:38'),
(909, 'joko', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-03 02:56:46'),
(910, 'joko', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-03 02:57:02'),
(911, 'admin', 'Login success', 'Admin Index Page', '2016-02-03 02:57:11'),
(912, 'admin', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-03 02:57:24'),
(913, 'admin', 'Sponsor Cancel Saldo', 'Berhasil membatalkan penambahan saldo.', '2016-02-03 02:57:40'),
(914, 'joko', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-03 03:00:01'),
(915, 'joko', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui ba', '2016-02-03 03:00:18'),
(916, 'joko', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-03 03:00:19'),
(917, 'admin', 'Login success', 'Admin Index Page', '2016-02-03 03:00:28'),
(918, 'admin', 'Sponsor Approved', 'Berhasil mengkonfirmasi sponsor.', '2016-02-03 03:00:40'),
(919, 'joko', 'Login Berhasil', 'Login from 202.62.16.88', '2016-02-03 03:00:54'),
(920, 'joko', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-03 03:01:00'),
(921, 'joko', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-03 03:01:14'),
(922, 'joko', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-03 03:01:26'),
(923, 'joko', 'Sponsor Cancel Saldo', 'Berhasil membatalkan penambahan saldo.', '2016-02-03 03:01:35'),
(924, 'joko', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-03 03:01:54'),
(925, 'joko', 'DOKU Payment Success', 'Pembayaran invoice saldo balance dengan DOKU berhasil', '2016-02-03 03:02:31'),
(926, 'joko', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-03 03:03:11'),
(927, 'joko', 'Sponsor Refund Loan Request', 'Sponsor ini mengirimkan permohonan refund pinjaman tetapi gagal k', '2016-02-03 03:04:18'),
(928, 'joko', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah diterima.', '2016-02-03 03:04:55'),
(929, 'joko', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-03 03:05:11'),
(930, 'joko', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-03 03:13:07'),
(931, 'joko', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah selesai.', '2016-02-03 03:14:06'),
(932, 'herla', 'Login Berhasil', 'Login from 202.62.16.88', '2016-02-03 03:16:49'),
(933, 'joko', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-03 03:38:31'),
(934, 'herla', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-03 03:38:39'),
(935, 'joko', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah diterima.', '2016-02-03 03:39:35'),
(936, 'joko', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-03 03:39:41'),
(937, 'joko', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-03 03:40:28'),
(938, 'joko', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah selesai.', '2016-02-03 03:40:50'),
(939, 'herla', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-03 03:49:35'),
(940, 'joko', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-03 03:50:02'),
(941, 'joko', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah diterima.', '2016-02-03 03:50:31'),
(942, 'joko', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-03 03:50:37'),
(943, 'joko', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-03 03:50:41'),
(944, 'joko', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah selesai.', '2016-02-03 03:51:42'),
(945, 'admin', 'Login success', 'Admin Index Page', '2016-02-04 20:34:18'),
(946, '-', 'Login Gagal - dipo', 'Try Login from 139.192.100.234', '2016-02-04 20:35:24'),
(947, 'dipo', 'Sponsor Blocked', 'Sponsor ini tidak memenuhi syarat minimum dalam registrasi.', '2016-02-04 20:35:50'),
(948, 'dipotest4', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-04 20:40:13'),
(949, 'dipotest4', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui ba', '2016-02-04 20:40:51'),
(950, 'dipotest4', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-04 20:40:51'),
(951, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-04 20:40:58'),
(952, 'dipotest4', 'Sponsor Approved', 'Berhasil mengkonfirmasi sponsor.', '2016-02-04 20:41:28'),
(953, 'dipotest4', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-04 20:46:47'),
(954, 'dipotest4', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-04 20:47:14'),
(955, 'dipotest4', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-04 20:47:36'),
(956, 'dipotest4', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-04 20:48:31'),
(957, 'dipotest4', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-04 20:48:50'),
(958, 'dipotest4', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-04 20:49:05'),
(959, 'dipotest4', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-04 20:49:49'),
(960, 'dipotest4', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-04 20:50:05'),
(961, 'dipotest4', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-04 20:50:24'),
(962, 'dipotest4', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-04 20:50:54'),
(963, 'dipotest4', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-04 20:54:13'),
(964, 'dipotest4', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-04 20:55:49'),
(965, 'admin', 'Login success', 'Admin Index Page', '2016-02-04 21:10:58'),
(966, 'admin', 'Login success', 'Admin Index Page', '2016-02-04 22:35:29'),
(967, '-', 'Login Gagal - herla', 'Try Login from 202.62.16.208', '2016-02-04 23:22:28'),
(968, 'herla', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-04 23:29:35'),
(969, 'herla', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui ba', '2016-02-04 23:31:57'),
(970, 'herla', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-04 23:31:57'),
(971, 'admin', 'Login success', 'Admin Index Page', '2016-02-04 23:47:44'),
(972, 'admin', 'Sponsor Approved', 'Berhasil mengkonfirmasi sponsor.', '2016-02-04 23:47:56'),
(973, 'herla', 'Login Berhasil', 'Login from 202.62.16.208', '2016-02-04 23:48:09'),
(974, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-04 23:54:13'),
(975, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-04 23:54:33'),
(976, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-04 23:57:54'),
(977, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-04 23:58:00'),
(978, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-04 23:58:05'),
(979, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-04 23:59:06'),
(980, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-05 00:01:34'),
(981, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-05 00:43:59'),
(982, 'admin', 'Login success', 'Admin Index Page', '2016-02-05 00:44:04'),
(983, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:24:30'),
(984, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:25:20'),
(985, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:25:29'),
(986, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:25:34'),
(987, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:45:51'),
(988, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:45:59'),
(989, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:46:05'),
(990, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:46:10'),
(991, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:48:19'),
(992, 'herla', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 01:48:25'),
(993, 'admin', 'Login success', 'Admin Index Page', '2016-02-05 03:40:20'),
(994, 'admin', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah diterima.', '2016-02-05 04:06:23'),
(995, 'admin', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-05 04:06:31'),
(996, 'admin', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-05 04:06:58'),
(997, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-05 04:07:15'),
(998, 'admin', 'Login success', 'Admin Index Page', '2016-02-05 05:47:04'),
(999, 'admin', 'Login success', 'Admin Index Page', '2016-02-05 19:47:47'),
(1000, 'admin', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-05 19:49:00'),
(1001, 'herla', 'Login Berhasil', 'Login from 202.62.16.1', '2016-02-05 19:53:43'),
(1002, 'herla', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-05 20:03:53'),
(1003, 'herla', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-05 20:04:11'),
(1004, 'herla', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-05 20:04:25'),
(1005, 'herla', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-05 20:04:49'),
(1006, 'herla', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah diterima.', '2016-02-05 20:05:12'),
(1007, 'herla', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-05 20:05:22'),
(1008, 'herla', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-05 20:05:26'),
(1009, 'herla', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah selesai.', '2016-02-05 20:06:12'),
(1010, 'admin', 'Login success', 'Admin Index Page', '2016-02-05 21:42:53'),
(1011, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 21:43:46'),
(1012, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-05 21:43:59'),
(1013, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-05 21:47:52'),
(1014, 'joko', 'Login Berhasil', 'Login from 202.62.16.1', '2016-02-05 22:49:29'),
(1015, 'joko', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-05 22:49:45'),
(1016, 'joko', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui ba', '2016-02-05 22:50:05'),
(1017, 'joko', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-05 22:50:05'),
(1018, 'admin', 'Login success', 'Admin Index Page', '2016-02-05 22:50:40'),
(1019, 'admin', 'Sponsor Approved', 'Berhasil mengkonfirmasi sponsor.', '2016-02-05 22:50:52'),
(1020, 'admin', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-05 23:11:22'),
(1021, 'admin', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-05 23:11:36'),
(1022, 'admin', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-05 23:11:46'),
(1023, 'admin', 'Login success', 'Admin Index Page', '2016-02-06 06:33:49'),
(1024, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:35:57'),
(1025, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:36:14'),
(1026, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:36:39'),
(1027, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:36:48'),
(1028, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:37:02'),
(1029, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:37:20'),
(1030, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:37:32'),
(1031, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:37:41'),
(1032, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:37:52'),
(1033, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:38:00'),
(1034, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:38:17'),
(1035, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:38:31'),
(1036, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:38:42'),
(1037, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:38:52'),
(1038, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:39:03'),
(1039, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:39:16'),
(1040, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:39:38'),
(1041, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:39:49'),
(1042, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:40:03'),
(1043, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:40:11'),
(1044, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:40:23'),
(1045, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:40:34'),
(1046, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:40:42'),
(1047, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:40:49'),
(1048, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:41:09'),
(1049, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:41:18'),
(1050, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:41:26'),
(1051, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:41:33'),
(1052, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:41:45'),
(1053, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:41:56'),
(1054, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:42:14'),
(1055, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:42:26'),
(1056, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:42:35'),
(1057, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:42:54'),
(1058, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:43:05'),
(1059, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:43:13'),
(1060, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:43:22'),
(1061, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:43:31'),
(1062, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:43:39'),
(1063, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:43:49'),
(1064, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:43:58'),
(1065, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:44:06'),
(1066, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:44:15'),
(1067, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:45:03'),
(1068, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:45:11'),
(1069, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:45:21'),
(1070, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:45:28'),
(1071, 'admin', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-06 06:45:54'),
(1072, 'Joko Herlambang', 'Edit Company Detail', 'Edit Company Detail Administration', '2016-02-06 06:51:18'),
(1073, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 06:54:39'),
(1074, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 06:55:55'),
(1075, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 06:57:22'),
(1076, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-06 07:06:13'),
(1077, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 07:08:50'),
(1078, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 07:09:54'),
(1079, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 07:10:30'),
(1080, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 07:10:56'),
(1081, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 07:12:06'),
(1082, 'dipotest4', 'New Partners Added', 'Berhasil menambahkan partners baru.', '2016-02-06 07:14:39'),
(1083, 'dipotest4', 'New Partners Added', 'Berhasil menambahkan partners baru.', '2016-02-06 07:15:26'),
(1084, 'dipotest4', 'New Partners Added', 'Berhasil menambahkan partners baru.', '2016-02-06 07:16:02'),
(1085, 'dipotest4', 'New Partners Added', 'Berhasil menambahkan partners baru.', '2016-02-06 07:16:18'),
(1086, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:17:35'),
(1087, 'dipotest4', 'Delete Content', 'Berhasil, content telah dihapus dari database.', '2016-02-06 07:19:29'),
(1088, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:20:28'),
(1089, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:20:58'),
(1090, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:21:17'),
(1091, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:22:15'),
(1092, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:22:29'),
(1093, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:22:53'),
(1094, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:23:13'),
(1095, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:25:09'),
(1096, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:26:15'),
(1097, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:27:57'),
(1098, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:28:16'),
(1099, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:28:34'),
(1100, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:28:52'),
(1101, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:29:36'),
(1102, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:29:47'),
(1103, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:30:30'),
(1104, 'dipotest4', 'Edit Content ', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 07:31:12'),
(1105, 'dipotest4', 'Edit Content ', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 07:33:08'),
(1106, 'dipotest4', 'Edit Content ', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 07:33:28'),
(1107, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:34:14'),
(1108, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:34:26'),
(1109, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:34:37'),
(1110, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:35:38'),
(1111, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:35:57'),
(1112, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:37:10'),
(1113, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:37:21'),
(1114, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:37:29'),
(1115, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:37:41'),
(1116, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 07:38:04'),
(1117, 'dipotest4', 'Edit Content ', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 07:39:20'),
(1118, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 07:49:10'),
(1119, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-06 07:49:29'),
(1120, 'dipotest4', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-06 07:50:24'),
(1121, 'admin', 'Login success', 'Admin Index Page', '2016-02-06 19:22:07'),
(1122, 'admin', 'Login success', 'Admin Index Page', '2016-02-06 19:43:13'),
(1123, 'admin', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-06 19:44:24'),
(1124, 'admin', 'Delete Content', 'Berhasil, content telah dihapus dari database.', '2016-02-06 19:45:06'),
(1125, 'admin', 'Edit Content ', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 19:55:47'),
(1126, 'admin', 'Edit Content ', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 19:56:11'),
(1127, 'admin', 'Edit Content ', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 19:57:15'),
(1128, 'admin', 'Edit Content ', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 19:58:17'),
(1129, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-06 19:59:24'),
(1130, 'admin', 'Login success', 'Admin Index Page', '2016-02-07 03:35:23'),
(1131, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-07 03:38:11'),
(1132, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-07 03:38:36'),
(1133, 'dipotest5', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-07 04:03:09'),
(1134, 'dipotest5', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui ba', '2016-02-07 04:03:29'),
(1135, 'dipotest5', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-07 04:03:31'),
(1136, 'admin', 'Login success', 'Admin Index Page', '2016-02-07 04:04:41'),
(1137, 'admin', 'Sponsor Approved', 'Berhasil mengkonfirmasi sponsor.', '2016-02-07 04:05:05'),
(1138, 'dipotest5', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-07 04:05:41'),
(1139, 'Joko Herlambang', 'Edit Company Detail', 'Edit Company Detail Administration', '2016-02-07 04:10:35'),
(1140, '202.62.17.70', 'Login success', 'Admin Index Page', '2016-02-07 14:16:51'),
(1141, 'admin', 'Login success', 'Admin Index Page', '2016-02-07 14:16:56'),
(1142, 'Joko Herlambang', 'Edit Company Detail', 'Edit Company Detail Administration', '2016-02-07 14:17:16'),
(1143, 'herla', 'Login Berhasil', 'Login from 202.62.17.70', '2016-02-07 14:17:38'),
(1144, 'herla', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-07 14:17:59'),
(1145, 'admin', 'Login success', 'Admin Index Page', '2016-02-07 21:13:31'),
(1146, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 21:20:45'),
(1147, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 21:22:14'),
(1148, 'admin', 'Login success', 'Admin Index Page', '2016-02-07 21:32:27'),
(1149, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 21:34:18'),
(1150, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-07 21:35:39'),
(1151, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-07 21:35:49'),
(1152, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-07 21:36:39'),
(1153, 'Joko Herlambang', 'Update About us Page', 'About Administration', '2016-02-07 21:36:51'),
(1154, 'admin', 'Login success', 'Admin Index Page', '2016-02-07 21:37:34'),
(1155, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 21:38:11'),
(1156, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 21:39:37'),
(1157, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 21:40:15'),
(1158, 'admin', 'Login success', 'Admin Index Page', '2016-02-07 22:02:56'),
(1159, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 22:12:05'),
(1160, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 22:14:29'),
(1161, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-07 22:14:50'),
(1162, 'admin', 'Login success', 'Admin Index Page', '2016-02-08 18:35:49'),
(1163, 'herla', 'Login Berhasil', 'Login from 202.62.17.170', '2016-02-09 01:06:47'),
(1164, 'admin', 'Login success', 'Admin Index Page', '2016-02-09 02:16:22'),
(1165, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-09 02:21:15'),
(1166, 'dipotest4', 'Add New Content FAQ', 'Berhasil, content telah ditambahkan kedalam database.', '2016-02-09 02:23:01'),
(1167, 'herla', 'Add Saldo', 'Deposit saldo sponsor tidak mencukupi minimal first deposit.', '2016-02-09 02:37:54'),
(1168, 'herla', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-09 02:38:01'),
(1169, 'herla', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-09 02:44:11'),
(1170, 'herla', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-09 02:47:23'),
(1171, 'herla', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-09 02:51:51'),
(1172, 'admin', 'Login success', 'Admin Index Page', '2016-02-09 02:54:27'),
(1173, 'admin', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-09 02:54:37'),
(1174, 'admin', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-09 02:54:54'),
(1175, 'admin', 'Permintaan penarikan saldo sponsor', 'Sponsor telah mengirimkan permohonan penarikan dana', '2016-02-09 03:05:24'),
(1176, 'admin', 'Login success', 'Admin Index Page', '2016-02-09 04:06:06'),
(1177, 'final_testing', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-09 04:06:32'),
(1178, 'final_testing', 'Verifikasi Akun Via Website', 'Sponsor ini telah berhasil melakukan verifikasi akun.', '2016-02-09 04:13:39'),
(1179, 'final_testing', 'Confirm Registration Payment', 'Sponsor ini melakukan konfirmasi pembayaran registrasi melalui ba', '2016-02-09 04:16:51'),
(1180, 'final_testing', 'Konfirmasi Pembayaran', 'Pembayaran invoice registrasi telah berhasil.', '2016-02-09 04:16:51'),
(1181, 'admin', 'Sponsor Approved', 'Berhasil mengkonfirmasi sponsor.', '2016-02-09 04:18:57'),
(1182, 'final_testing', 'Login Berhasil', 'Login from 202.62.17.170', '2016-02-09 04:19:38'),
(1183, 'final_testing', 'Add Saldo', 'Deposit saldo sponsor tidak mencukupi minimal first deposit.', '2016-02-09 04:20:05'),
(1184, 'final_testing', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-09 04:20:38'),
(1185, 'final_testing', 'DOKU Payment Failure', 'User membatalkan pembayaran melalui DOKU.', '2016-02-09 04:21:02'),
(1186, 'final_testing', 'Confirm Payment Saldo', 'Konfirmasi pembayaran saldo', '2016-02-09 04:21:20'),
(1187, 'final_testing', 'Sponsor Add Saldo', 'Berhasil menambahkan saldo sponsor.', '2016-02-09 04:21:33'),
(1188, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:25:40'),
(1189, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:26:49'),
(1190, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:31:44'),
(1191, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:32:35'),
(1192, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:40:16'),
(1193, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:42:15'),
(1194, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:46:59'),
(1195, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:50:41'),
(1196, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:52:14'),
(1197, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:53:56'),
(1198, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:55:23'),
(1199, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:55:50'),
(1200, 'final_testing', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-09 05:57:07'),
(1201, 'Joko Herlambang', 'Edit Company Detail', 'Edit Company Detail Administration', '2016-02-09 05:58:05'),
(1202, 'Joko Herlambang', 'Edit Company Detail', 'Edit Company Detail Administration', '2016-02-09 05:58:40'),
(1203, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-09 06:52:50'),
(1204, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-09 07:05:05'),
(1205, 'admin', 'Login success', 'Admin Index Page', '2016-02-09 07:34:58'),
(1206, 'admin', 'Login success', 'Admin Index Page', '2016-02-09 23:21:15'),
(1207, 'admin', 'Login success', 'Admin Index Page', '2016-02-09 23:23:39'),
(1208, 'admin', 'Login success', 'Admin Index Page', '2016-02-10 01:07:34'),
(1209, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-10 01:10:05'),
(1210, 'admin', 'Edit Content', 'Berhasil, content telah dirubah kedalam database.', '2016-02-10 01:13:07'),
(1211, 'joko', 'Login Berhasil', 'Login from 202.62.17.129', '2016-02-10 01:14:59'),
(1212, 'joko', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-10 01:15:59'),
(1213, 'joko', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-10 01:16:09'),
(1214, 'joko', 'Pinjaman Add to Cart', 'Pinjaman telah ditambahkan kedalam keranjang belanja.', '2016-02-10 01:16:45'),
(1215, 'joko', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah diterima.', '2016-02-10 01:17:47'),
(1216, 'joko', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-10 01:17:53'),
(1217, 'joko', 'Update Sponsor Loan Status', 'Berhasil, data pinjaman dari sponsor sudah diterima.', '2016-02-10 01:18:31'),
(1218, 'joko', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-10 01:18:36'),
(1219, 'joko', 'Edit Settings', 'Berhasil, setting data telah berhasil diupdate.', '2016-02-10 01:24:20'),
(1220, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-10 06:38:29'),
(1221, 'dipotest4', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-10 06:39:13'),
(1222, 'admin', 'Login success', 'Admin Index Page', '2016-02-10 06:39:34'),
(1223, 'admin', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-10 06:42:41'),
(1224, 'admin', 'Login success', 'Admin Index Page', '2016-02-10 07:35:10'),
(1225, 'admin', 'Pembayaran Pinjaman Mahasiswa', 'Berhasil, pembayaran pinjaman sudah diproses.', '2016-02-10 07:36:05'),
(1226, 'joko', 'Login Berhasil', 'Login from 202.62.17.190', '2016-02-10 17:13:56'),
(1227, 'admin', 'Login success', 'Admin Index Page', '2016-02-10 17:27:03'),
(1228, 'admin', 'Add New Bank Account', 'Berhasil, informasi bank sudah ditambahkan.', '2016-02-10 17:51:45'),
(1229, 'admin', 'Delete Bank Account', 'Berhasil, informasi bank sudah dihapus.', '2016-02-10 17:52:13'),
(1230, 'admin', 'Delete Bank Account', 'Berhasil, informasi bank sudah dihapus.', '2016-02-10 17:52:17'),
(1231, 'dipotest4', 'Login Berhasil', 'Login from 139.192.100.234', '2016-02-10 18:01:22'),
(1232, 'dipotest4', 'Add Saldo', 'Deposit saldo sponsor', '2016-02-10 18:01:38'),
(1233, 'admin', 'Login success', 'Admin Index Page', '2016-02-12 10:36:46'),
(1234, 'admin', 'Login success', 'Admin Index Page', '2016-02-12 10:43:23'),
(1235, 'admin', 'Login success', 'Admin Index Page', '2016-02-12 10:43:42'),
(1236, 'admin', 'Login success', 'Admin Index Page', '2016-02-12 10:44:43'),
(1237, 'admin', 'Login success', 'Admin Index Page', '2016-02-12 10:47:18'),
(1238, 'admin', 'Login success', 'Admin Index Page', '2016-02-12 10:49:55'),
(1239, 'admin', 'Login success', 'Admin Index Page', '2016-02-12 10:50:06'),
(1240, 'admin', 'Login success', 'Admin Index Page', '2016-02-14 02:41:01'),
(1241, 'admin', 'Login success', 'Admin Index Page', '2016-02-14 02:56:30'),
(1242, 'admin', 'Login success', 'Admin Index Page', '2016-02-14 06:07:47'),
(1243, 'admin', 'Edit Company Detail', 'Success, Company Detail has been saved.', '2016-02-14 07:31:15'),
(1244, 'admin', 'Edit Company Detail', 'Success, Company Detail has been saved.', '2016-02-14 07:31:32'),
(1245, 'admin', 'Login success', 'Admin Index Page', '2016-02-14 20:50:54'),
(1246, 'admin', 'Add New Post Category', 'Success, Post category has been inserted to database.', '2016-02-15 02:26:05'),
(1247, 'admin', 'Add New Post Tag', 'Success, Post tag has been inserted to database.', '2016-02-15 02:38:30'),
(1248, 'admin', 'Add New Post', 'Success, Post has been inserted to database.', '2016-02-15 02:54:40'),
(1249, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-15 07:35:45'),
(1250, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-15 07:37:00'),
(1251, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-15 07:37:06'),
(1252, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-15 07:39:17'),
(1253, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-15 07:39:39'),
(1254, 'admin', 'Edit Company Detail', 'Success, Company Detail has been saved.', '2016-02-15 07:40:20'),
(1255, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-15 07:41:18'),
(1256, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-15 07:41:27'),
(1257, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-15 07:41:48'),
(1258, 'admin', 'Login success', 'Admin Index Page', '2016-02-19 02:00:41'),
(1259, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:01:28'),
(1260, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:01:47'),
(1261, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:01:53'),
(1262, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:02:59'),
(1263, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:03:42'),
(1264, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:04:48'),
(1265, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:05:18'),
(1266, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:06:09'),
(1267, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:06:49'),
(1268, 'admin', 'Edit Post Detail', 'Success, Post Detail has been saved.', '2016-02-19 02:07:01'),
(1269, 'admin', 'Edit Post Category', 'Success, Post category has been edited to database.', '2016-02-19 02:22:37'),
(1270, 'admin', 'Edit Post Category', 'Success, Post category has been edited to database.', '2016-02-19 02:22:56'),
(1271, 'admin', 'Edit Post Category', 'Success, Post category has been edited to database.', '2016-02-19 02:25:37'),
(1272, 'admin', 'Delete Post Category', 'Success, Post category has been unactivate from database.', '2016-02-19 02:32:27'),
(1273, 'admin', 'Edit Post Category', 'Success, Post category has been edited to database.', '2016-02-19 02:32:36'),
(1274, 'admin', 'Delete Post Category', 'Success, Post category has been unactivate from database.', '2016-02-19 02:32:44'),
(1275, 'admin', 'Add New Post Tag', 'Success, Post tag has been inserted to database.', '2016-02-19 03:11:27'),
(1276, 'admin', 'Edit Post Tag', 'Success, Post tag has been edited to database.', '2016-02-19 03:11:51'),
(1277, 'admin', 'Delete Post Tag', 'Success, Post tag has been unactivate from database.', '2016-02-19 03:12:10'),
(1278, 'admin', 'Delete Post Tag', 'Success, Post tag has been unactivate from database.', '2016-02-19 03:12:16'),
(1279, 'admin', 'Delete Post Tag', 'Success, Post tag has been unactivate from database.', '2016-02-19 03:12:22'),
(1280, 'admin', 'Delete Post Tag', 'Success, Post tag has been unactivate from database.', '2016-02-19 03:12:26'),
(1281, 'admin', 'Delete Post Tag', 'Success, Post tag has been unactivate from database.', '2016-02-19 03:14:14'),
(1282, 'admin', 'Delete Post Category', 'Success, Post category has been unactivate from database.', '2016-02-19 03:14:56'),
(1283, 'admin', 'Update Post Comment', 'Success, Post comment has been updated.', '2016-02-19 03:27:29'),
(1284, 'admin', 'Update Post Comment', 'Success, Post comment has been updated.', '2016-02-19 03:28:18'),
(1285, 'admin', 'Update Post Comment', 'Success, Post comment has been updated.', '2016-02-19 03:28:23'),
(1286, 'admin', 'Login success', 'Admin Index Page', '2016-02-19 22:29:15'),
(1287, 'admin', 'Add New Portfolio', 'Success, Portfolio has been inserted to database.', '2016-02-19 23:18:31'),
(1288, 'admin', 'Login success', 'Admin Index Page', '2016-02-21 05:35:29'),
(1289, 'admin', 'Edit Portfolio Detail', 'Success, Portfolio Detail has been saved.', '2016-02-21 05:50:46'),
(1290, 'admin', 'Edit Portfolio Detail', 'Success, Portfolio Detail has been saved.', '2016-02-21 05:50:55'),
(1291, 'admin', 'Edit Portfolio Detail', 'Success, Portfolio Detail has been saved.', '2016-02-21 05:51:11'),
(1292, 'admin', 'Edit Portfolio Detail', 'Success, Portfolio Detail has been saved.', '2016-02-21 05:52:01'),
(1293, 'admin', 'Add New Portfolio Image', 'Success, Portfolio Image has been added.', '2016-02-21 06:28:25'),
(1294, 'admin', 'Add New Portfolio Image', 'Success, Portfolio Image has been added.', '2016-02-21 06:38:47'),
(1295, 'admin', 'Delete Portfolio Image', 'Success, Portfolio Image has been deleted.', '2016-02-21 06:41:59'),
(1296, 'admin', 'Add New Portfolio Image', 'Success, Portfolio Image has been added.', '2016-02-21 06:42:07'),
(1297, 'admin', 'Add New Portfolio Image', 'Success, Portfolio Image has been added.', '2016-02-21 06:42:14'),
(1298, 'admin', 'Add New Portfolio Category', 'Success, Portfolio category has been inserted to database.', '2016-02-21 06:46:19'),
(1299, 'admin', 'Edit Portfolio Category', 'Success, Portfolio category has been edited to database.', '2016-02-21 07:50:19'),
(1300, 'admin', 'Delete Portfolio Category', 'Success, Portfolio category has been unactivate from database.', '2016-02-21 07:51:40'),
(1301, 'admin', 'Delete Portfolio Category', 'Success, Portfolio category has been unactivate from database.', '2016-02-21 07:51:44'),
(1302, 'admin', 'Delete Portfolio', 'Success, Portfolio has been deleted.', '2016-02-21 07:56:00'),
(1303, 'admin', 'Login success', 'Admin Index Page', '2016-02-25 05:55:06'),
(1304, 'admin', 'Update User Status', 'Success, user status has been updated.', '2016-02-25 07:16:53'),
(1305, 'admin', 'Update User Status', 'Success, user status has been updated.', '2016-02-25 07:16:59'),
(1306, 'admin', 'Edit User Profile', 'Success, User Profile has been added.', '2016-02-25 07:43:18'),
(1307, 'admin', 'Edit User Profile', 'Success, User Profile has been added.', '2016-02-25 07:43:57'),
(1308, 'admin', 'Edit User Profile', 'Success, User Profile has been added.', '2016-02-25 07:45:04'),
(1309, 'admin', 'Edit User Profile', 'Success, User Profile has been added.', '2016-02-25 07:45:41'),
(1310, 'admin', 'Edit User Profile', 'Success, User Profile has been added.', '2016-02-25 07:45:49'),
(1311, 'admin', 'Edit User Profile', 'Success, User Profile has been added.', '2016-02-25 07:46:59'),
(1312, 'admin', 'Login success', 'Admin Index Page', '2016-02-25 07:47:10'),
(1313, 'admin', 'Add New User', 'Success, User has been added.', '2016-02-25 07:56:51'),
(1314, 'admin', 'Login success', 'Admin Index Page', '2016-02-25 08:00:50'),
(1315, '::1', 'Login error', 'Back to login page', '2016-02-25 22:16:52'),
(1316, 'admin', 'Login success', 'Admin Index Page', '2016-02-25 22:16:58'),
(1317, '::1', 'Login error', 'Back to login page', '2016-02-29 20:52:49'),
(1318, '::1', 'Login error', 'Back to login page', '2016-02-29 20:52:59'),
(1319, 'admin', 'Login success', 'Admin Index Page', '2016-02-29 20:53:06'),
(1320, 'admin', 'Login success', 'Admin Index Page', '2016-03-01 20:54:43'),
(1321, 'admin', 'Login success', 'Admin Index Page', '2016-03-01 21:02:30'),
(1322, 'admin', 'Add New Portfolio', 'Success, Portfolio has been inserted to database.', '2016-03-01 21:05:32');
INSERT INTO `tb_activity_log` (`id`, `users`, `activity`, `to`, `date`) VALUES
(1323, 'admin', 'Add New Portfolio Image', 'Success, Portfolio Image has been added.', '2016-03-01 21:09:02'),
(1324, 'admin', 'Delete Portfolio Image', 'Success, Portfolio Image has been deleted.', '2016-03-01 21:09:49'),
(1325, 'admin', 'Add New Portfolio Image', 'Success, Portfolio Image has been added.', '2016-03-01 21:11:18'),
(1326, 'admin', 'Delete Portfolio Image', 'Success, Portfolio Image has been deleted.', '2016-03-01 21:11:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category_portfolio`
--

CREATE TABLE IF NOT EXISTS `tb_category_portfolio` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `name` varchar(65) NOT NULL,
  `description` varchar(150) NOT NULL,
  `is_active` int(2) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tb_category_portfolio`
--

INSERT INTO `tb_category_portfolio` (`id`, `user_id`, `name`, `description`, `is_active`, `last_update`) VALUES
(1, 4, 'E-Commerce', 'Website ecommerce', 1, '2016-02-20 05:09:14'),
(2, 4, 'Company Profiles', 'Company Profile', 1, '2016-02-21 13:51:44'),
(4, 4, 'Test', 'Test', 1, '2016-02-21 12:46:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category_post`
--

CREATE TABLE IF NOT EXISTS `tb_category_post` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL,
  `description` text NOT NULL,
  `is_active` int(2) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_category_post`
--

INSERT INTO `tb_category_post` (`id`, `name`, `description`, `is_active`, `last_update`) VALUES
(1, 'Code', 'This category for all post base on code writing like php, jquery, html and other.', 1, '2016-02-19 09:14:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_company`
--

CREATE TABLE IF NOT EXISTS `tb_company` (
  `id_company` int(1) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(65) NOT NULL,
  `company_about` text NOT NULL,
  `company_address` text NOT NULL,
  `company_city` varchar(45) NOT NULL,
  `company_state` varchar(65) NOT NULL,
  `company_country` varchar(45) NOT NULL,
  `company_phone` varchar(65) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `sales_email` varchar(65) NOT NULL,
  `info_email` varchar(65) NOT NULL,
  `support_email` varchar(65) NOT NULL,
  `company_postcode` varchar(8) NOT NULL,
  `company_logo` varchar(65) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `twitter` varchar(151) NOT NULL,
  `google_plus` varchar(150) NOT NULL,
  `linkedin` varchar(150) NOT NULL,
  `rss` varchar(150) NOT NULL,
  `youtube` varchar(150) NOT NULL,
  `path` varchar(150) NOT NULL,
  `skype` varchar(150) NOT NULL,
  `bbm` varchar(15) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_company`
--

INSERT INTO `tb_company` (`id_company`, `company_name`, `company_about`, `company_address`, `company_city`, `company_state`, `company_country`, `company_phone`, `company_email`, `sales_email`, `info_email`, `support_email`, `company_postcode`, `company_logo`, `facebook`, `twitter`, `google_plus`, `linkedin`, `rss`, `youtube`, `path`, `skype`, `bbm`, `updated`) VALUES
(1, 'Your Company Name ', 'You can write any short description about your company here.', 'One Pacific Place. Sudirman Central Business District. Jl. Jend. Sudirman Kav. 52-53        ', 'Jakarta Selatan ', 'Jakarta', 'Indonesia', '+6281293779958', 'info@danadidik.com', 'sales@lokatela.com', 'info@lokatela.com', 'care@lokatela.com', '12190', '9bfc386c129c3fa8b4d5403b7b65a05f.png', 'https://www.facebook.com/danadidikID', 'https://twitter.com/danadidik', 'https://plus.google.com/+DanadidikID/posts', 'https://www.linkedin.com/company/danadidik', '', '', '', '', '57990AB0', '2016-02-14 13:31:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_portfolio`
--

CREATE TABLE IF NOT EXISTS `tb_portfolio` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `users_id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `client` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `image` varchar(65) NOT NULL,
  `status` int(2) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_portfolio`
--

INSERT INTO `tb_portfolio` (`id`, `users_id`, `category_id`, `slug`, `title`, `description`, `client`, `start_date`, `end_date`, `image`, `status`, `last_update`) VALUES
(1, 4, 1, 'asdfsdf', 'asdfsdf', 'fdsfsd', 'dsfsdf', '2016-03-10', '2016-03-30', '6576ad2aee0a6057b63a7dd721d3e823.png', 1, '2016-03-02 03:05:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_portfolio_images`
--

CREATE TABLE IF NOT EXISTS `tb_portfolio_images` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `portfolio_id` int(10) NOT NULL,
  `image` varchar(65) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `portfolio_id` (`portfolio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE IF NOT EXISTS `tb_post` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `admin_id` int(2) NOT NULL,
  `category_id` int(5) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `add_date` date NOT NULL,
  `small_images` varchar(65) NOT NULL,
  `large_images` varchar(65) NOT NULL,
  `view` int(15) NOT NULL,
  `seo_title` varchar(180) NOT NULL,
  `seo_keyword` varchar(180) NOT NULL,
  `seo_description` varchar(250) NOT NULL,
  `status` int(2) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_user` (`admin_id`),
  KEY `admin_id` (`admin_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id`, `admin_id`, `category_id`, `slug`, `title`, `content`, `add_date`, `small_images`, `large_images`, `view`, `seo_title`, `seo_keyword`, `seo_description`, `status`, `last_update`) VALUES
(3, 4, 1, 'testing-coba-lihat', 'Testing Coba lihat', '<p>afasfasfTesting Coba lihat</p>', '2016-02-19', 'c938e677971c99a713724f3444bc3b01.gif', 'c09eb124552c75a874e43ce610369ba0.gif', 0, 'saf', 'saf', 'asfsaf', 1, '2016-02-19 08:05:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post_comments`
--

CREATE TABLE IF NOT EXISTS `tb_post_comments` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `post_id` int(15) NOT NULL,
  `visitor_ip` varchar(25) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `is_active` int(2) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `added_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `post_id_2` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_post_comments`
--

INSERT INTO `tb_post_comments` (`id`, `post_id`, `visitor_ip`, `name`, `email`, `is_active`, `comment`, `added_date`) VALUES
(1, 3, '128.128.168.12', 'fsasf', 'asfsafasf', 1, 'asfasfasfsafasf', '2016-02-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post_tag`
--

CREATE TABLE IF NOT EXISTS `tb_post_tag` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `post_id` int(15) NOT NULL,
  `tag_id` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data untuk tabel `tb_post_tag`
--

INSERT INTO `tb_post_tag` (`id`, `post_id`, `tag_id`) VALUES
(72, 3, 5),
(73, 3, 6),
(74, 3, 4),
(75, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tag`
--

CREATE TABLE IF NOT EXISTS `tb_tag` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  `is_active` int(2) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_tag`
--

INSERT INTO `tb_tag` (`id`, `name`, `description`, `is_active`, `update`) VALUES
(1, 'NEWS', 'Merupakan berita terhangats', 1, '2016-02-19 09:12:16'),
(3, 'TEKNOLOGI', 'Merupakan berita teknologi', 0, '2014-02-27 08:33:27'),
(4, 'PROMO', 'promo produk alarm, autocare clifford, vector, meguiars', 1, '2016-02-19 09:12:22'),
(5, 'PEMROGRAMAN', 'Kumpulan tutorial bahasa pemrograman website dengan php', 1, '2016-02-19 09:12:26'),
(6, 'PHP', 'A popular web base code in ther world.', 1, '2016-02-15 08:38:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(6) DEFAULT NULL,
  `style` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `avatar` varchar(65) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL DEFAULT '0',
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `login_attempt` tinyint(2) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `group_id`, `style`, `username`, `avatar`, `password`, `email`, `phone`, `first_name`, `last_name`, `ip_address`, `active`, `login_attempt`, `last_login`, `updated_at`) VALUES
(4, 1, 'blue', 'admin', '28624a953e875ada08a2704a7152ce54.gif', '827ccb0eea8a706c4c34a16891f84e7b', 'jokoherlambang368@yahoo.com', '081322077231', 'Joko', 'Herlambang', '::1', 1, 5, '2016-03-02 04:02:30', '2016-03-02 03:02:30'),
(5, 1, '', 'jokoherlambang368@yahoo.com', 'b762f353e3252efd97796ded6e0bd0a6.gif', 'de0adfb23f103fbf9100f98e83a40b6e', 'jokoherlambang368@yahoo.com', '081322077231', 'Test', 'Herlambang', '', 1, 0, NULL, '2016-02-25 14:01:42');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_category_portfolio`
--
ALTER TABLE `tb_category_portfolio`
  ADD CONSTRAINT `tb_category_portfolio_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_portfolio`
--
ALTER TABLE `tb_portfolio`
  ADD CONSTRAINT `tb_portfolio_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_portfolio_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tb_category_portfolio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_portfolio_images`
--
ALTER TABLE `tb_portfolio_images`
  ADD CONSTRAINT `tb_portfolio_images_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_portfolio_images_ibfk_2` FOREIGN KEY (`portfolio_id`) REFERENCES `tb_portfolio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_post_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tb_category_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_post_comments`
--
ALTER TABLE `tb_post_comments`
  ADD CONSTRAINT `tb_post_comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `tb_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_post_tag`
--
ALTER TABLE `tb_post_tag`
  ADD CONSTRAINT `tb_post_tag_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `tb_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_post_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tb_tag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
