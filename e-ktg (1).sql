-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220820.c36dd24b59
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2022 pada 15.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-ktg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `email`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(22, 'Admin E-KTG', 'Admin', 'adminektg@gmail.com', '$2y$10$jayVdtunn/XTYMaAkcGkzu5n9aC7zh5HlcNrNzVpfAnT7wFDwSeku', 'app/images/admin/22-1666248987-eiCZt.jpg', NULL, '2022-10-13 06:20:32', '2022-10-19 23:56:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `atraksi_wisata`
--

CREATE TABLE `atraksi_wisata` (
  `id` int(11) NOT NULL,
  `nama_atraksi_wisata` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa_wisata`
--

CREATE TABLE `desa_wisata` (
  `id` int(11) NOT NULL,
  `nama_desa_wisata` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `link_jadesta` varchar(255) DEFAULT NULL,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desa_wisata`
--

INSERT INTO `desa_wisata` (`id`, `nama_desa_wisata`, `deskripsi`, `link_jadesta`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `created_at`, `updated_at`) VALUES
(17, 'Sungai Awan Kanan', 'Wisata Pantai', 'https://jadesta.kemenparekraf.go.id/desa/sungai_awan_kanan', 'app/images/desa wisata/17-1666228981-HnX42.jpg', 'app/images/desa wisata/17-1666228981-rybku.jpg', 'app/images/desa wisata/17-1666228981-e3FM0.jpg', 'app/images/desa wisata/17-1666228981-et4CR.jpg', '2022-10-14 05:06:36', '2022-10-19 18:23:01'),
(18, 'Desa Kendawangan Kiri', 'Petualangan 100-pantai', 'https://jadesta.kemenparekraf.go.id/desa/cempedak_jaya', 'app/images/desa wisata/18-1666229406-CeBfy.jpg', 'app/images/desa wisata/18-1666229406-aM0xY.jpg', 'app/images/desa wisata/18-1666229406-Z2ku0.jpg', 'app/images/desa wisata/18-1666229406-Felx1.jpg', '2022-10-16 06:24:44', '2022-10-19 18:30:06'),
(23, 'Sinar Kuri', 'Jelajah rimba Kuri', 'https://jadesta.kemenparekraf.go.id/desa/sinar_kuri', 'app/images/desa wisata/23-1666229758-ZBENV.jpg', 'app/images/desa wisata/23-1666229759-eyNyt.jpg', 'app/images/desa wisata/23-1666229759-UVePV.jpg', 'app/images/desa wisata/23-1666229759-RruFa.jpg', '2022-10-16 08:29:21', '2022-10-19 18:35:59'),
(25, 'Laman Satong', 'Jelajah rimba & budaya', 'https://jadesta.kemenparekraf.go.id/desa/laman_satong', 'app/images/desa wisata/25-1666241067-cbwVv.jpg', 'app/images/desa wisata/25-1666241067-9u2n8.jpg', 'app/images/desa wisata/25-1666241067-ETmiN.jpg', 'app/images/desa wisata/25-1666241067-Wnx80.jpg', '2022-10-19 21:43:17', '2022-10-19 21:44:27'),
(26, 'Mekar Utama', 'Petualangan Pulau Sawi', 'https://jadesta.kemenparekraf.go.id/desa/mekar_utama', 'app/images/desa wisata/26-1666247311-QSWIV.jpg', 'app/images/desa wisata/26-1666247311-LotVy.jpg', 'app/images/desa wisata/26-1666247311-ugrqv.jpg', 'app/images/desa wisata/26-1666247311-SyeWm.png', '2022-10-19 23:06:51', '2022-10-19 23:28:31'),
(28, 'Suka Baru', 'Hutan Wisata Mangrove Celincing', 'https://jadesta.kemenparekraf.go.id/desa/celincing_suka_baru', 'app/images/desa wisata/28-1666263954-7VD4E.jpg', 'app/images/desa wisata/28-1666263954-ZNn94.jpg', 'app/images/desa wisata/28-1666263954-nH2Jk.jpg', 'app/images/desa wisata/28-1666263954-wOwBb.jpg', '2022-10-20 04:05:54', '2022-10-20 04:05:54'),
(29, 'Kinjil Pesisir', 'Wisata Santai Pantai Pecal', 'https://jadesta.kemenparekraf.go.id/desa/kinjil_pesisir', 'app/images/desa wisata/29-1666266162-1FGX7.jpg', 'app/images/desa wisata/29-1666266162-OHHNx.jpg', 'app/images/desa wisata/29-1666266162-NM8Fv.jpg', 'app/images/desa wisata/29-1666266162-4v65n.jpg', '2022-10-20 04:42:42', '2022-10-20 04:42:42'),
(30, 'Jelayan', 'Jelajah budaya Jelayan', 'https://jadesta.kemenparekraf.go.id/desa/jelayan', 'app/images/desa wisata/30-1666272880-xuwCg.jpg', 'app/images/desa wisata/30-1666272880-ADlgf.jpg', 'app/images/desa wisata/30-1666272880-HfqtV.jpg', 'app/images/desa wisata/30-1666272880-qAMCJ.jpg', '2022-10-20 06:31:56', '2022-10-20 06:34:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata_bahari`
--

CREATE TABLE `wisata_bahari` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata_bahari`
--

INSERT INTO `wisata_bahari` (`id`, `nama`, `kategori`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'snorkeling', 'Wisata Bahari', 'Snorkeling sendiri bisa diartikan sebagai kegiatan menyelam pada kedalamam lima meter yang dikategorikan sebagai permukaan dangkal.Jika pernah melihat kegiatan menyelam dalam rangka melihat keindahan bawah laut seperti terumbu karang dan berbagai makhluk di dalam sana, hal tersebut bisa dikategorikan sebagai kegiatan snorkeling.Snorkeling bisa dilakukan oleh semua orang, termasuk yang tidak mahir berenang. Kegiatan menyelam di permukaan ini biasanya akan dipandu bagi para pemula sehingga keamanannya terjamin.', 'app/images/wisata bahari/1-1666353553-rV9Od.jpg', '2022-10-21 02:05:10', '2022-10-21 04:59:13'),
(2, 'Kepulauan Padaido Papua', 'Wisata Bahari', 'Gugusan pulau padaido adalah salah satu destinasi wisata bahari yang ada di kabupaten biak numfor. Pada gugusan kepulauan ini ada puluhan titik selam dengan keindahan terumbu karang hingga 95 spesies dengan ratusan 155 an spesies ikan.\r\n\r\nBukan hanya itu, kepulauan ini juga mempunyai 48 spesies pohon, 26 spesies burung yang akan diminati oleh banyak para pengunjung atau wisatawan. Kemudian disana juga terdapat 14 spesies reptil dan 7 spesies mamalia yang bisa menyambut dan memanjakan para pecinta hewan.', 'app/images/wisata bahari/2-1666344623-q84qr.jpg', '2022-10-21 02:30:23', '2022-10-21 02:30:24'),
(3, 'Pantai Pink Pulau Komodo', 'Wisata Bahari', 'Nah pantai yang berwarna pink ini berasal dari hewan yang berukuran sangat kecil bernama Foraminifera yang kemudian memberikan pigmen merah pada koral. Kemudian, koral - koral tersebut terbawa oleh ombak menuju ke pesisir.\r\nLalu hancur menjadi serpihan dan butiran - butiran halus yang kini menjadi pasir pantai yang berwarna pink. Cantik banget!', 'app/images/wisata bahari/3-1666357434-UUzKI.jpg', '2022-10-21 06:03:54', '2022-10-21 06:03:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata_budaya`
--

CREATE TABLE `wisata_budaya` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata_budaya`
--

INSERT INTO `wisata_budaya` (`id`, `nama`, `kategori`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Desa Adat Ratenggaro', 'Wisata Budaya', 'Desa Adat Ratenggaro ini terletak di Umbu Ngedo, Kodi Bangedo, Sumba Barat Daya, Nusa Tenggara Timur. Kampung adat ini berjarak sekitar 56 km dari ibukota Kabupaten Sumba Barat Daya yakni Tambolaka. Untuk menuju ke kawasan ini, wisatawan bisa menyewa kendaraan atau menggunakan jasa travel dari Tambolaka. Karena memang belum ada akomodasi umum yang bisa digunakan wisatawan untuk berkunjung ke Desa Adat Ratenggaro.Dari Tambolaka, Anda akan menempuh waktu sekitar 1,5 jam hingga 2 jam melalui jalur darat yang beraspal. Namun jangan khawatir, akses menuju ke desa adat ini dipelihara dengan baik jadi kondisi jalannya juga baik. Di kampung adat ini Anda akan melihat sejarah peninggalan dari manusia di zaman megalitikum. Di sini terdapat 304 kubur batu megalitikum yang umurnya sudah mencapai ribuan tahun.', 'app/images/wisata budaya/1-1666525757-FNLWn.jpg', '2022-10-23 04:49:17', '2022-10-23 04:49:17'),
(2, 'Desa Dayak Pampang', 'Wisata Budaya', 'Destinasi wisata budaya selanjutnya ialah Desa Dayak Pampang yang berlokasi di Jl. Wisata Budaya Pampang, No.32, RT.03, Kota Samarinda. Untuk Anda yang ingin menuju ke tempat ini aksesnya cukup mudah, karena hanya berjarak sekitar 23 km dari pusat Kota Samarinda. Di sini wisatawan bisa mempelajari mengenai suku Dayak yang menarik. Anda bisa melihat pertunjukan seni tari tradisional khas suku Dayak kenyah setiap hari Minggu siang.', 'app/images/wisata budaya/2-1666526120-1BH53.jpg', '2022-10-23 04:55:20', '2022-10-23 04:55:20'),
(3, 'Candi Prambanan', 'Wisata Budaya', 'Candi Prambanan merupakan kompleks candi Hindu yang terbesar di Indonesia dan dibangun pada abad ke 9 masehi. Lokasi dari Candi Prambanan ini berada di perbatasan dari 2 kabupaten yakni Kabupaten Sleman, Daerah Istimewa Yogyakarta dan Kabupaten Klaten, Jawa Tengah. Terlepas dari itu semua, untuk Anda yang ingin mengunjungi tempat ini aksesnya cukup mudah. Karena sudah dapat dijangkau oleh transportasi umum.', 'app/images/wisata budaya/3-1666526171-tJ5Wn.jpg', '2022-10-23 04:56:11', '2022-10-23 04:56:11'),
(4, 'Desa Penglipuran', 'Wisata Budaya', 'Destinasi wisata budaya berikutnya terletak di Kabupaten Bangli, Bali. Desa Penglipuran terkenal akan masyarakatnya yang masih menjalankan serta melestarikan budaya Bali di dalam kehidupan mereka. Desa adat ini banyak didatangi wisatawan baik itu wisatawan domestik maupun wisatawan mancanegara karena arsitektur rumahnya yang menarik. Apabila Anda pergi ke Bali, jangan lupa untuk datang berkunjung ke Desa Penglipuran ini ya.', 'app/images/wisata budaya/4-1666526319-hlbuD.jpg', '2022-10-23 04:58:39', '2022-10-23 04:58:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata_kuliner`
--

CREATE TABLE `wisata_kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata_kuliner`
--

INSERT INTO `wisata_kuliner` (`id`, `nama`, `kategori`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Kawasan Glodok di Jakarta', 'Wisata Kuliner', 'Kedai Seni Djakarte, misalnya. Kedai yang berlokasi di Jalan Pintu Besar Utara, Jakarta Barat, ini menghadirkan soto Betawi, sate ayam, bandrek, dan es toples sebagai menu andalannya. Di samping rasa hidangannya yang istimewa, Kedai Seni Djakarte juga menyuguhkan suasana Jakarta tempo dulu.', 'app/images/wisata kuliner/1-1666527574-ol3yv.jpg', '2022-10-23 05:19:34', '2022-10-23 05:19:34'),
(2, 'Jalan Suryakencana di Bogorrr', 'Wisata Kuliner', 'Tak jauh dari kedai tersebut, ada Laksa Bogor Gang Aut yang juga terkenal dengan kelezatannya. Bayangkan, di saat lapar, kamu menyantap potongan ketupat dicampur dengan bihun, tauge, oncom, tahu, dan telur dengan nikmat.', 'app/images/wisata kuliner/2-1666529010-pEGKd.jpg', '2022-10-23 05:43:01', '2022-10-23 05:43:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `atraksi_wisata`
--
ALTER TABLE `atraksi_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa_wisata`
--
ALTER TABLE `desa_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata_bahari`
--
ALTER TABLE `wisata_bahari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata_budaya`
--
ALTER TABLE `wisata_budaya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata_kuliner`
--
ALTER TABLE `wisata_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `atraksi_wisata`
--
ALTER TABLE `atraksi_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `desa_wisata`
--
ALTER TABLE `desa_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `wisata_bahari`
--
ALTER TABLE `wisata_bahari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `wisata_budaya`
--
ALTER TABLE `wisata_budaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `wisata_kuliner`
--
ALTER TABLE `wisata_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
