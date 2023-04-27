-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2023 pada 11.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tumbuhan`
--

CREATE TABLE `tumbuhan` (
  `id_tumbuhan` int(11) NOT NULL,
  `jenis_tumbuhan` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nama_biologi` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tumbuhan`
--

INSERT INTO `tumbuhan` (`id_tumbuhan`, `jenis_tumbuhan`, `nama`, `nama_biologi`, `deskripsi`, `gambar`) VALUES
(15, 'monokotil', 'Jahe', 'Zingiber Officinale', 'tumbuhan Jahe adalah tumbuhan yang rimpangnya sering                     digunakan sebagai rempah-rempah dan bahan baku pengobatan tradisional. Rimpangnya berbentuk jemari                     yang menggembung di ruas-ruas tengah. Rasa dominan pedas yang dirasakan dari jahe disebabkan oleh                     senyawa keton bernama zingeron.', 'jahe.jpg'),
(16, 'monokotil', 'Timun', 'Cucumis Sativus L', 'Mentimun Adalahtumbuhan Yang Menghasilkan Buah Yang Dapat Dimakan. Buahnya Biasanya Dipanen Ketika Belum Masak Benar Untuk Dijadikan Sayuran Atau Penyegar, Tergantung Jenisnya. Mentimun Dapat Ditemukan Di Berbagai Hidangan Dari Seluruh Dunia Dan Memiliki Kandungan Air Cukup Banyak Di Dalamnya Sehingga Berfungsi Menyejukkan. Potongan Buah Mentimun Juga Digunakan Untuk Membantu Melembabkan Wajah Serta Banyak Dipercaya Dapat Menurunkan Tekanan Darah Tinggi.', 'timun.jfif'),
(17, 'dikotil', 'Ubi Jalar', 'Ipomoea Batatas', 'Ubi Jalar Adalah Sejenis Tanaman Budidaya. Bagian Yang Dimanfaatkan Adalah Akarnya Yang Membentuk Umbi Dengan Kadar Gizi (Karbohidrat) Yang Tinggi. Di Afrika, Umbi Dari Ubi Jalar Menjadi Salah Satu Sumber Makanan Pokok Yang Penting. Di Asia, Selain Dimanfaatkan Umbinya, Daun Muda Ubi Jalar Juga Dibuat Sayuran. Terdapat Pula Ubi Jalar Yang Dijadikan Tanaman Hias Karena Keindahan Daunnya.', 'ubijalar.jfif'),
(18, 'dikotil', 'Pepaya', 'Cacarica Papaya L.', 'Tumbuhan Pepaya Adalah Tumbuhan Yang Diperkirakan Berasal Dari Meksiko Bagian Selatan Dan Bagian Utara Dari Amerika Selatan.[1] Pepaya Kini Telah Menyebar Luas Dan Banyak Ditanam Di Seluruh Daerah Tropis Untuk Diambil Buahnya. C. Papaya Adalah Satu-Satunya Jenis Dalam Genus Carica. Nama Pepaya Dalam Bahasa Indonesia Diambil Dari Bahasa Belanda, \"Papaja\", Yang Pada Gilirannya Juga Mengambil Dari Nama Bahasa Arawak, \"Papaya\".', 'pepaya.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(6, 'alief', '$2y$10$FhQFOs0UnGOSwnE.nJlV3./n6wMtv6ggck8bkxIzm3hAp7LHdehb2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tumbuhan`
--
ALTER TABLE `tumbuhan`
  ADD PRIMARY KEY (`id_tumbuhan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tumbuhan`
--
ALTER TABLE `tumbuhan`
  MODIFY `id_tumbuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
