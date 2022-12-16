-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Des 2022 pada 17.59
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

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
  `id` int NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `email`, `password`, `foto`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(22, 'Admin E-KTG', 'Admin', 'adminektg@gmail.com', '$2y$10$jayVdtunn/XTYMaAkcGkzu5n9aC7zh5HlcNrNzVpfAnT7wFDwSeku', 'app/images/admin/22-1669647839-Ph3ii.jpg', NULL, NULL, '2022-10-13 06:20:32', '2022-11-28 08:03:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `atraksi_wisata`
--

CREATE TABLE `atraksi_wisata` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `kategori` enum('Wisata Alam','Wisata Budaya','Wisata Buatan','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `atraksi` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `nama_pengelola` varchar(255) DEFAULT NULL,
  `no_pengelola` varchar(15) DEFAULT NULL,
  `hari_buka` varchar(255) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sumber_foto` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `atraksi_wisata`
--

INSERT INTO `atraksi_wisata` (`id`, `id_user`, `kategori`, `nama`, `alamat`, `atraksi`, `deskripsi`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto`, `sumber_foto`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(33, 22, 'Wisata Alam', 'Bukit Batu Menanti', 'Desa Jelayan, Kec. Tumbang Titi', '-', 'Objek Wisata Bukit Batu Menanti  Terletak di Desa Jelayan Kecamatan Tumbang Titi Kabupaten Ketapang Propinsi Kalimantan Barat  yang dikelola langsung oleh Pemerintah Desa Jelayan dan Pokdarwis. Menawarkan Wahana Permainan Sepeda Air; Wisatawan dapat bekeliling di Danau seluas 5.625 meter persegi, Wisata Alam; Wisatawan dapat mendaki bukit dan dapat menikmati pemandangan alam sekitar ketika berada di puncak, Wisata Budaya; Wisatawan dapat melihat, menikmati dan mengikuti kegiatan Adat, seni dan budaya-Susur Sungai-Pengrajin-kuliner, dls. Objek wisata ini berjarak 2 KM dari pusat kecamatan, 98 KM dari Kabupaten', '-', '-', 'senin - minggu', '07:00:00', '16:50:00', 'app/images/atraksi wisata/33-1671163032-CLdCs.jpg', 'Masata', '-1.8095074274977305', '110.62673456014325', '2022-12-15 20:57:12', '2022-12-16 04:27:30'),
(34, 22, 'Wisata Buatan', 'Taman Batu Menanti', 'Desa Jelayan, Kec. Tumbang Titi', '-', 'Objek Wisata TamanBatu Menanti  Terletak di Desa Jelayan Kecamatan Tumbang Titi Kabupaten Ketapang Propinsi Kalimantan Barat  yang dikelola langsung oleh Pemerintah Desa Jelayan dan Pokdarwis. Menawarkan Wahana Permainan Sepeda Air; Wisatawan dapat bekeliling di Danau seluas 5.625 meter persegi, Wisata Alam; Wisatawan dapat mendaki bukit dan dapat menikmati pemandangan alam sekitar ketika berada di puncak, Wisata Budaya; Wisatawan dapat melihat, menikmati dan mengikuti kegiatan Adat, seni dan budaya-Susur Sungai-Pengrajin-kuliner, dls. Objek wisata ini berjarak 2 KM dari pusat kecamatan, 98 KM dari Kabupaten', '-', '-', 'senin - minggu', '08:00:00', '17:00:00', 'app/images/atraksi wisata/34-1671163287-lBwwP.jpg', 'Masata', '-1.8112969318946333', '110.62717457322107', '2022-12-15 21:01:27', '2022-12-16 04:32:48'),
(35, 22, 'Wisata Budaya', 'Hutan Desa Jelayan', 'Desa Jelayan, Kec. Tumbang Titi', '-', 'Desa Sungai Jelayan merupakan salah satu Desa yang ada di Kecamatan Kendawangan Kabupaten Ketapang yang masih mempunyai potensi untuk dilakukan pengelolaan berkelanjutan. Evaluasi Kemampuan lahan merupakan salah satu upaya untuk mengatasi penurunan degradasi lahan. Kemampuan lahan adalah penilaian atas satuan lahan untuk penggunaan tertentu yang dinilai dari masing-masing faktor penghambat. Penelitian ini bertujuan untuk mengetahui karakteristik lahan sesuai parameter kemampuan lahan, menilai sub kelas kemampuan lahan dan memberikan saran penggunaan lahan berdasarkan sub kelas kemampuan lahan di Desa Sungai Jelayan. Tahapan penelitian dimulai dari persiapan, survei pendahuluan, penentuan lokasi penelitian berdasarkan satuan lahan yang terdiri dari jenis tanah, kelas lereng, penggunaan lahan dan terdapat 9 satuan lahan, dan  penentuan titik pengamatan, serta pengamatan dilapangan dan pengambilan sampel tanah, analisis laboratorium, pengolahan data dan penyajian hasil. Hasil penelitian diperoleh 2 ordo tanah yaitu Entisols dan Inceptisols. Hasil evaluasi kemampuan lahan terbagi menjadi lima kelas kemampuan lahan dan sub kelas yaitu kelas II-s, III-s, IV-w, V-w dan VIII-es. Usaha perbaikan atau upaya penggunaan lahan secara lestari dapat dilakukan dengan 5 upaya yaitu garapan intensif, garapan sedang, garapan terbatas, cagar alam/hutan lindung, dan pengembalaan intensif.', '-', '-', 'senin - minggu', '07:00:00', '17:00:00', 'app/images/atraksi wisata/35-1671181157-S1P0k.webp', 'The Palm Scribe', '-1.809247930310821', '110.62470621834788', '2022-12-16 01:59:17', '2022-12-16 01:59:17'),
(36, 22, 'Wisata Alam', 'Pantai Kinjil Pesisir', 'Desa Kinjil Pesisir, Kec. Benua Kayong', '-', 'Pantai Sungai Kinjil Desa Kinjil Pesisir Kecamatan Benua Kayong Ketapang. Jarak ke lokasi ini sekitar puluhan kilometer dari Ibu Kota Ketapang dengan waktu tempuh ½ atau 1  jam menggunakan sepeda motor atau mobil.\r\n\r\nPantai ini menjadi salah satu objek wisata untuk weekend, karena tempatnya yang strategis tidak jauh dari kota Ketapang. Membawa keluarga, kerabat, pacar dan teman-teman berakhir pekan sangat cocok sekali ditempat ini. Matahari terbenam yang menawarkan panorama alam yang indah serta deburan ombaknya membuat pengunjung betah berlama-lama menikmatinya. Pantai ini juga sangat cocok untuk berpoto.', '-', '-', 'senin - minggu', '07:00:00', '17:00:00', 'app/images/atraksi wisata/36-1671181390-kXuYc.jpg', 'Masata', '-1.8744193685663437', '109.96228017428729', '2022-12-16 02:03:10', '2022-12-16 02:05:35'),
(37, 22, 'Wisata Alam', 'Sawah Kinjil', 'Desa Kinjil Pesisir, Kec. Benua Kayong', '-', 'Pantai Sungai Kinjil Desa Kinjil Pesisir Kecamatan Benua Kayong Ketapang. Jarak ke lokasi ini sekitar puluhan kilometer dari Ibu Kota Ketapang dengan waktu tempuh ½ atau 1  jam menggunakan sepeda motor atau mobil.\r\n\r\nPantai ini menjadi salah satu objek wisata untuk weekend, karena tempatnya yang strategis tidak jauh dari kota Ketapang. Membawa keluarga, kerabat, pacar dan teman-teman berakhir pekan sangat cocok sekali ditempat ini. Matahari terbenam yang menawarkan panorama alam yang indah serta deburan ombaknya membuat pengunjung betah berlama-lama menikmatinya. Pantai ini juga sangat cocok untuk berpoto.', '-', '-', 'senin - minggu', '06:00:00', '17:00:00', 'app/images/atraksi wisata/37-1671182031-NHyiX.jpg', 'Masata', '-1.8733437268630242', '109.96284853699393', '2022-12-16 02:13:51', '2022-12-16 02:13:51'),
(38, 22, 'Wisata Alam', 'Laman Besolek', 'Desa Laman Satong, Kec. MHU', 'Hiking, jungle tracking, tubing', 'Berwisata di dalam taman nasional Gunung Palung, menikmati beragam tantangan alam mulai dari hiking, camping, tubie rafting (tubing) dan pengamatan satwa liar', '-', '-', 'senin - minggu', '06:00:00', '17:15:00', 'app/images/atraksi wisata/38-1671182174-ARL9Q.jpg', 'Masata', '-1.3712731565827647', '110.22614651023154', '2022-12-16 02:16:14', '2022-12-16 02:16:14'),
(39, 22, 'Wisata Alam', 'Kalas Kumpang', 'Desa Laman Satong, Kec. MHU', 'Jungle tracking, camping', NULL, '-', '-', 'senin - minggu', '07:01:00', '17:00:00', 'app/images/atraksi wisata/39-1671184373-lFcXY.jpg', 'Masata', '-1.3969213340349593', '110.17723864241378', '2022-12-16 02:52:53', '2022-12-16 02:52:53'),
(40, 22, 'Wisata Alam', 'Tanjung Sekunting', 'Desa Laman Satong, Kec. MHU', 'Pengamatan orang utan, jungle tracking', 'Ilustrasi!!!!!!', '-', '-', 'senin - minggu', '07:00:00', '17:00:00', 'app/images/atraksi wisata/40-1671184674-T01r0.jpg', 'Web Girinesia', '-1.4101678166891038', '110.17288152997058', '2022-12-16 02:57:54', '2022-12-16 02:57:54'),
(41, 22, 'Wisata Budaya', 'Laman Randu', 'Desa Laman Satong, Kec. MHU', '-', 'Desa Wisata Laman Satong adalah kawasan wisata perdesaan yang berada di Kecamatan Matan Hilir Utara, Kab. Ketapang - Kalimantan Barat, yang memiliki lebih dari 7 destinasi wisata alam-budaya yang dikelola bersama oleh masyarakat desa, taman nasional, sektor swasta dan pemerintah daerah.\r\nDengan jarak relatif dekat dari kota dan mengangkat tema wisata rimba dan budaya, desa Laman Satong menawarkan petualangan penuh pengalaman baru di Kabupaten Ketapang.', '-', '-', 'senin - minggu', '08:00:00', '18:00:00', 'app/images/atraksi wisata/41-1671184904-vnknO.jpg', 'Jadesta', '-1.423812938709199', '110.24775793844907', '2022-12-16 03:01:44', '2022-12-16 03:01:44'),
(42, 22, 'Wisata Budaya', 'Gua Maria Kederon', 'Desa Laman Satong, Kec. MHU', '-', 'Gua Maria menjadi salah satu destinasi primadona bukan hanya bagi umat Kristiani namun juga masyarakat umum lainnya. Karena memiliki nuansa alam yang sejuk dan rindang. Lebih dari 1000 pengunjung yang mendatangi tempat ini setiap tahunnya.', '-', '-', 'senin - minggu', '08:02:00', '17:02:00', 'app/images/atraksi wisata/42-1671185286-fWpOt.jpg', 'Jadesta', '-1.3880199580954775', '110.18124379848508', '2022-12-16 03:08:06', '2022-12-16 03:08:06'),
(43, 22, 'Wisata Alam', 'Batu Besampak', 'Desa Laman Satong, Kec. MHU', '-', 'Menikmati pemandangan hampir 360 derajat di atas puncak desa Laman Satong.', '-', '-', 'senin - minggu', '07:09:00', '17:09:00', 'app/images/atraksi wisata/43-1671185478-ngAhD.jpg', 'Jadesta', '-1.3903025806566431', '110.17835021936591', '2022-12-16 03:11:18', '2022-12-16 03:11:18'),
(44, 22, 'Wisata Alam', 'Riam Selinsing', 'Desa Laman Satong, Kec. MHU', '-', 'Selinsing, Belitung Timur (Antaranews Babel) - Badan Usaha Milik Desa Selinsing mengajukan pengelolaan 62 hektare lahan untuk penambangan bijih timah kepada pemerintah desa, karena minat masyarakat untuk menambang di daerah itu tinggi.\r\n\r\nGambar hanya ilustrasi', '-', '-', 'senin - minggu', '08:12:00', '17:12:00', 'app/images/atraksi wisata/44-1671185932-975oC.jpg', 'Wiktionary', '-1.3649407986157378', '110.25971009263081', '2022-12-16 03:18:52', '2022-12-16 03:19:49'),
(45, 22, 'Wisata Alam', 'Riam Jerunjung', 'Desa Laman Satong, Kec. MHU', '-', 'Riam Jerunjung adalah kawasan yang berada dalam kawasan TNGP, secara administratif masuk dalam kawasan Desa Laman Satong. Riam Jerunjung berada di Zona Pemanfaatan TNGP. Oleh pihak desa, kawasan ini dijadikan daerah tujuan baru (tempat wisata baru) berbasis alam.', '-', '-', 'senin - minggu', '07:22:00', '17:22:00', 'app/images/atraksi wisata/45-1671186192-TjoxO.jpg', 'Jadesta', '-1.344567254022313', '110.1902298222293', '2022-12-16 03:23:12', '2022-12-16 03:23:12'),
(46, 22, 'Wisata Alam', 'Pulau Sawi', 'Desa Mekar Utama, Kec. Kendawangan', 'Konservasi Mangrove, Snorkeling, Diving, Hiking, Camping', 'Di pulau ini kamu tidak akan hanya melihat keindahan alam saja, namun juga bisa menemukan wisata pendidikan cinta bahari yang telah dikelola oleh masyarakat dan Pemerintah setempat. Di sini terdapat pula cagar alam dan areal konservasi yang bisa menjadi tujuan wisata menarik. Pulau Sawi ini berlokasi di desa Sungai Tengar, Kecamatan Kendawangan, sekitar 70 Km dari Kota Ketapang.\r\n\r\nKemudian melanjutkan perjalanan dari Sungai Tengar menggunakan kapal bermotor atau biasa disebut oleh warga kapal klotok menuju ke Pulau Sawi yang berjarak 45 menit perjalanan laut. Lagi-lagi, di sini kamu bisa snorkling dan melihat pemandangan bawah laut yang sangat menarik. (int)', '-', '-', 'senin - minggu', '06:24:00', '16:12:00', 'app/images/atraksi wisata/46-1671186474-YVEED.jpg', 'Masata', '-2.3720878718844887', '110.07118792589013', '2022-12-16 03:27:13', '2022-12-16 03:27:54'),
(47, 22, 'Wisata Alam', 'Pantai Pasir Putih', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Kawasan wisata di dusun Sungai Gantang ini menawarkan suasana yang nyaman dan fasilitas yang lengkap untuk berkumpul bersama keluarga.', '-', '-', 'senin - minggu', '06:30:00', '17:00:00', 'app/images/atraksi wisata/47-1671186881-cFMVg.jpg', 'teraju.id', '-2.4062221476218966', '110.15310263956736', '2022-12-16 03:34:41', '2022-12-16 03:34:41'),
(48, 22, 'Wisata Alam', 'Pantai Sisik', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Pantai Pasir Sisik Kendawangan terletak di Kabupaten Ketapang, Indonesia. Peringkat Pantai Pasir Sisik Kendawangan adalah 4,3 bintang dari 5 bintang, berdasarkan 7 ulasan pada profil bisnis mereka di Google Maps.', '-', '-', 'senin - minggu', '07:00:00', '18:00:00', 'app/images/atraksi wisata/48-1671197982-seXFS.jpg', 'Instagram @dumpdump.jpg', '-2.4311374672272166', '110.15328820537745', '2022-12-16 06:39:42', '2022-12-16 06:39:42'),
(49, 22, 'Wisata Alam', 'Pantai Mutiara', 'Desa Mekar Utama, Kec. Kendawangan', '-', NULL, '-', '-', 'senin - minggu', '00:00:00', '00:00:00', 'app/images/atraksi wisata/49-1671198429-4Homd.jpg', 'pontianak.post', '-2.3627180660135854', '110.14674448625624', '2022-12-16 06:47:09', '2022-12-16 06:47:09'),
(50, 22, 'Wisata Alam', 'Sungai Tengar', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Menjadi salahs atu destinasi wisata yang cukup wajib ketika kamu mengunjungi Kabupaten Ketapang, yakni Sungai Tengar. Kamu bisa menyusuri Sungai Tengar dengan menggunakan perahu nelayan sembari menikmati keindahan pinggiran sungai. Ada salah satu aktifitas yang dilakukan wisatawan di tempat wisata di Kalbar ini, yakni memancing. Buat kamu yang memiliki hobi memancing, Sungai Tengar bisa menjadi spot terbaik untuk menyaurkan hobi memancing, terutam lebih ke arah hulu Sungai Tengar. Atau kamu juga bisa di muara Sungai Tengar yang begitu banyak pondokan yang menyajikan kuliner khas Kabupaten Ketapang.', '-', '-', 'senin - minggu', '00:00:00', '00:00:00', 'app/images/atraksi wisata/50-1671201017-xPzDA.jpg', 'Direktori Pariwisata', '-2.3562159860030456', '110.14727708191084', '2022-12-16 07:30:17', '2022-12-16 07:30:17'),
(51, 22, 'Wisata Alam', 'Air Terjun Kelukup Blantak', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Kecamatan Kendawangan yang terletak paling selatan Kabupaten Ketapang, merupakan Kecamatan yang banyak menawarkan beragam keindahan alam menakjubkan. Selain pasir putih disepanjang pantai, kali ini muncul Destinasi tujuan wisata yang tidak kalah menarik. Distinasi yang dimaksud adalah Air Terjun Tujuh Tingkat.\r\n\r\nAir Terjun Tujuh Tingkat yang terletak di Dusun Kelukup Belantak Desa Mekar Utama tersebut hampir terlupakan. Jarak yang cukup jauh dari jangkauan kota ketapang itu tentu sulit untuk dijangkau. Selain bernama Air Terjun Tujuh Tingkat, tempat itu lebih dikenal dengan sebutan Air Terjun Batu Arang.\r\nDengan jarak kurang lebih 95 Km dari Kota Ketapang menuju arah Manismata, tempat ini masuk dalam wilayah Konsesi PT Hutan Ketapang Industri (HKI). Tepatnya lebih 3 Km dari poros jalan utama Kelukup Belantak.\r\n\r\nCerita yang berkembang dari orang yang pernah berkunjung, objek wisata itu memiliki air terjun yang cukup menarik karena diapit oleh bebatuan jenis batu arang. Banyak para pengunjung mempercayai tempat itu sebagai terapi kesehatan. Selain airnya jernih dan sejuk, suasana alamnya cukup asri. Sehingga banyak orang menjadikan tempat itu sebagai destinasi tujuan wisata keluarga.', '-', '-', 'senin - minggu', '00:00:00', '00:00:00', 'app/images/atraksi wisata/51-1671201378-44r97.jpg', 'Instagram @ernaktp1608', '-2.35439529092276', '110.28703913940468', '2022-12-16 07:36:18', '2022-12-16 07:36:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa_wisata`
--

CREATE TABLE `desa_wisata` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `nama_desa_wisata` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `link_jadesta` varchar(255) DEFAULT NULL,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `desa_wisata`
--

INSERT INTO `desa_wisata` (`id`, `id_user`, `nama_desa_wisata`, `deskripsi`, `link_jadesta`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(18, 22, 'Desa Kendawangan Kiri', 'Petualangan 100-pantai', 'https://jadesta.kemenparekraf.go.id/desa/cempedak_jaya', 'app/images/desa wisata/18-1666229406-CeBfy.jpg', 'app/images/desa wisata/18-1666229406-aM0xY.jpg', 'app/images/desa wisata/18-1666229406-Z2ku0.jpg', 'app/images/desa wisata/18-1666229406-Felx1.jpg', '-2.516090028897877', '110.19905363875796', '2022-10-16 06:24:44', '2022-12-16 03:06:08'),
(25, 22, 'Laman Satong', 'Jelajah rimba & budaya', 'https://jadesta.kemenparekraf.go.id/desa/laman_satong', 'app/images/desa wisata/25-1666241067-cbwVv.jpg', 'app/images/desa wisata/25-1666241067-9u2n8.jpg', 'app/images/desa wisata/25-1666241067-ETmiN.jpg', 'app/images/desa wisata/25-1666241067-Wnx80.jpg', '-1.387746527108794', '110.16901156806455', '2022-10-19 21:43:17', '2022-12-16 03:06:18'),
(26, 22, 'Mekar Utama', 'Petualangan Pulau Sawi', 'https://jadesta.kemenparekraf.go.id/desa/mekar_utama', 'app/images/desa wisata/26-1666247311-QSWIV.jpg', 'app/images/desa wisata/26-1666247311-LotVy.jpg', 'app/images/desa wisata/26-1666247311-ugrqv.jpg', 'app/images/desa wisata/26-1666247311-SyeWm.png', '-2.3583044689783392', '110.14772646913491', '2022-10-19 23:06:51', '2022-12-16 03:06:22'),
(31, 22, 'Sinar Kuri', 'Jelajah rimba Kuri', 'https://jadesta.kemenparekraf.go.id/desa/sinar_kuri', 'app/images/desa wisata/31-1669259354-l95Nv.jpg', 'app/images/desa wisata/31-1669259355-B0gDN.jpg', 'app/images/desa wisata/31-1669259355-vdZdf.jpg', 'app/images/desa wisata/31-1669259355-S4Ix2.jpg', '-0.9444381245910761', '110.45705985249035', '2022-11-23 20:09:14', '2022-12-16 03:06:26'),
(32, 22, 'Suka Baru', 'Hutan Wisata Mangrove Celincing', 'https://jadesta.kemenparekraf.go.id/desa/celincing_suka_baru', 'app/images/desa wisata/32-1669260051-QAxA6.jpg', 'app/images/desa wisata/32-1669260051-MFIcw.jpg', 'app/images/desa wisata/32-1669260051-JPvVW.jpg', 'app/images/desa wisata/32-1669260051-1rhGS.jpg', '-1.856364584850278', '109.93984480758998', '2022-11-23 20:20:51', '2022-12-16 03:06:29'),
(33, 22, 'Sungai Awan Kanan', 'Wisata Pantai', 'https://jadesta.kemenparekraf.go.id/desa/sungai_awan_kanan', 'app/images/desa wisata/33-1669260447-I75oC.jpg', 'app/images/desa wisata/33-1669260447-4FfZJ.jpg', 'app/images/desa wisata/33-1669260447-5aaMV.jpg', 'app/images/desa wisata/33-1669260447-rHVzA.jpg', '-1.7554778427162019', '109.99443183372664', '2022-11-23 20:27:27', '2022-12-16 03:06:33'),
(34, 22, 'Kinjil Pesisir', 'Wisata Santai Pantai Pecal', 'https://jadesta.kemenparekraf.go.id/desa/kinjil_pesisir', 'app/images/desa wisata/34-1669260705-0p28f.jpg', 'app/images/desa wisata/34-1669260705-JUl93.jpg', 'app/images/desa wisata/34-1669260705-K8KIv.jpg', 'app/images/desa wisata/34-1669260705-lGcGf.jpg', '-1.869747094306019', '109.9645630580743', '2022-11-23 20:31:45', '2022-12-16 03:06:36'),
(35, 22, 'Jelayan', 'Jelajah budaya Jelayan', 'https://jadesta.kemenparekraf.go.id/desa/jelayan', 'app/images/desa wisata/35-1669260810-be7ST.jpg', 'app/images/desa wisata/35-1669260810-uLOiZ.jpg', 'app/images/desa wisata/35-1669260810-ZYUih.jpg', 'app/images/desa wisata/35-1669260810-yH2oV.jpg', '-1.8096965844979593', '110.63524333597859', '2022-11-23 20:33:30', '2022-12-16 03:09:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_wisata`
--

CREATE TABLE `kalender_wisata` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `isi` text,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `bulan` set('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` enum('Wisata Alam','Wisata Budaya','Wisata Buatan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_atraksi_wisata` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Indeks untuk tabel `kalender_wisata`
--
ALTER TABLE `kalender_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `atraksi_wisata`
--
ALTER TABLE `atraksi_wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `desa_wisata`
--
ALTER TABLE `desa_wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `kalender_wisata`
--
ALTER TABLE `kalender_wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
