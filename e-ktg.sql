-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Des 2022 pada 23.32
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
  `kategori` enum('Wisata Alam','Wisata Budaya','Wisata Buatan','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `nama_pengelola` varchar(255) DEFAULT NULL,
  `no_pengelola` varchar(15) DEFAULT NULL,
  `hari_buka` varchar(255) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `atraksi_wisata`
--

INSERT INTO `atraksi_wisata` (`id`, `kategori`, `nama`, `deskripsi`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(19, 'Wisata Buatan', 'Taman Merdeka Ketapang', 'Semakin lengkap setelah Pemerintah Kabupaten Ketapang menggagas Jalan Merdeka menjadi pusat kuliner. Kini taman yang berada di pusat Kota Ketapang ini tidak pernah sepi pengunjung khususnya pada malam hari.\r\nJefri (36), salah satu pengunjung Taman Merdeka, mengaku senang menghabiskan waktu bersama keluarga di Taman Merdeka. Sembari menikmati jajanan kuliner, dirinya dapat bersantai dan foto-foto bersama keluarga.\r\nRespon positif juga diungkapkan Machrum (67), warga Kelurahan Mulia Baru Ketapang yang merupakan koordinator pedagang di Pusat Kuliner Jalan Merdeka. Dirinya mengaku dengan adanya pusat kuliner yang ditata ulang lewat program TJSL PLN yang berkolaborasi dengan Pemkab Ketapang ini keberadaan Taman Merdeka dapat meningkatkan perekonomian masyarakat khususnya para pedagang di Pusat Kuliner Jalan Merdeka.', '-', '-', 'senin - minggu', '08:16:00', '12:20:00', 'app/images/atraksi wisata/19-1669166189-z5P21.jpg', '-1.849779873219472', '109.9702852966864', '2022-11-22 18:16:29', '2022-11-28 08:30:52'),
(20, 'Wisata Alam', 'snorkeling', 'Pulau yang teretak di daerah Probolinggo, Jawa Timur ini adalah pulau yang mempunyai keindahan warna-warni di bawah laut nya. Karena keindahannya itu, banyak sekali spot snorkeling yang akan membuat kamu ingin terus menyelam. Perjalanan ke pulau ini sama seperti pulau-pulau lain, harus menaiki peraha yang disediakan. Setelah sampai, kamu bisa langsung menyelam lho, karena ada spot snorkeling yang hanya berjarak 50 meter dari bibir pantai. Di sana menawarkan foto di bawah laut juga, siapkan gaya terbaikmu ya kalau berniat kesana.', '-', '-', 'senin - minggu', '11:58:00', '16:03:00', 'app/images/atraksi wisata/20-1669179732-aPqzt.jpg', '-2.3583044689783392', '110.14772479747859', '2022-11-22 22:02:12', '2022-12-07 00:45:42'),
(21, 'Wisata Budaya', 'Rumah Keraton', 'Selayang Pandang\r\nKetapang merupakan salah satu kabupaten di Provinsi Kalimantan Barat yang menyimpan banyak potensi wisata. Selain pantai, keraton, dan makam, di Ketapang juga berdiri Rumah Adat Melayu sebagai salah satu obyek wisata minat khusus.\r\nDilihat secara fisik, Rumah Adat Melayu Ketapang terdiri dari tiga bangunan utama, yaitu bangunan induk yang berukuran 20 x 30 meter, bangunan Balai Rung Sari yang berukuran 9 x 15 meter dan Balai Peranginan yang berukuran 6 x 30 meter. Ketiga bangunan tersebut didirikan di atas tanah seluas 2 hektar.\r\nRumah Adat Melayu Ketapang adalah saksi bisu sejarah perkembangan kebudayaan Melayu. Di tempat inilah, pada tanggal 29 Mei 2009 dilakukan pendeklarasian dan pelantikan pengurus Lembaga Adat Melayu Serantau (LAMS).\r\nRumah Adat Melayu Ketapang didirikan dengan tujuan untuk melestarikan nilai-nilai budaya yang ada dan sekaligus untuk menghidupkan kembali nilai-nilai adat budaya Melayu Ketapang. Selain itu, tujuan dari dibangunnya Rumah Adat Melayu Ketapang ini adalah untuk memberikan pengetahuan kepada generasi muda tentang adat budaya Melayu Ketapang yang sebenarnya.\r\nTujuan tersebut memiliki dua sisi, yaitu sisi budaya dan pariwisata. Dilihat dari sisi budaya, upaya untuk melestarikan dan memberikan pengetahuan kepada generasi muda praktis bisa tercapai dengan dibangunnya Rumah adat Melayu Ketapang yang mencirikan arsitektur Melayu Islam.\r\nDari sisi pariwisata, Rumah Adat Melayu Ketapang menawarkan daya tarik sebagai tujuan wisata di Kabupaten Ketapang. Buktinya, banyak anak muda yang berkunjung ke tempat ini. Selain menikmati keindahan panorama dan kemegahan Rumah Adat Melayu Ketapang, banyak anak muda yang memanfaatkan tanah di sekitar Rumah Adat Melayu Ketapang untuk menyalurkan hobi mereka.\r\nBeberapa sarana olahraga akhirnya dibangun di tempat ini. Sebut saja lapangan voli dan tempat pembuatan sekaligus penyimpanan (garasi) sampan yang biasanya digunakan untuk lomba sampan.', '-', '-', 'senin - minggu', '12:09:00', '12:09:00', 'app/images/atraksi wisata/21-1669180203-Qg8sQ.jpg', '-1.8607734706813837', '109.98072805654418', '2022-11-22 22:10:03', '2022-11-28 08:30:07'),
(22, 'Wisata Alam', 'Bukit Kuri', 'Tidak hanya Bukit Batu Daya saja yang memiliki potensi untuk olahraga panjat tebing, namun Bukit Kuri yang begitu terjal dan mungkin masih perawan juga tebingnya belum pernah dipanjat. Memiliki ketinggian lebih dari 100 mdpl membuat kamu bisa merasakan sensasi berada di atas awan. Bahkan hamparan lautan awan begitu jelas di depan mata ketika kamu berada di puncak Bukit Kuri. Membutuhkan stamina yang cukup prima mema jika kamu ingin mengunjungi tempat wisata di Kalimantan Barat yang satu ini. Tapi pesona indahnya alam Kabupaten Ketapang sangat jelas ketika kamu berada di Bukit Kuri. Kamu pun juga bisa mendirikan kemah di atas bukit sembari menunggu datangnya sunrise yang begitu menawan. Untuk loksi Bukit Kuri ini secara administratif masih terletak di dalam wilayah Kecamatan Sungai Laur.', '-', '-', 'senin - minggu', '12:15:00', '18:21:00', 'app/images/atraksi wisata/22-1669180531-fBjCz.jpg', '-0.9362693153300614', '110.47222728643264', '2022-11-22 22:15:31', '2022-11-28 08:29:02'),
(25, 'Wisata Alam', 'Goa Maria Manjau', 'Selain menjadi tempat peribadahan bagi umat Katolik, Goa Maria Manjau ini justru sekarang menjadi tempat wisata di Kalbar, tepatnya di Kabupaten Ketapang. Karena di kawasan Goa Maria terdsebut udaranya begitu sejuk dengan dihiasi pepohonan yang begitu besar. Bagi traveler non Katolik-pun juga diperbolehkan untuk masuk serta menikmati keindahan alam  yang ada di Goa Maria Manjau. Dan sudah pasti Goa Maria Manjau juga bisa kamu jadikan sebagai lokasi spot selfie yang cukup keren. Untuk lokasinya sendiri terletak di Desa Laman Satong yang masih di dalam wilayah Kecamatan Matan Hilir Utara.', '-', '-', 'senin - minggu', '19:22:00', '23:26:00', 'app/images/atraksi wisata/25-1669206174-qa30L.jpg', '-1.387685482450728', '110.18114481017474', '2022-11-23 05:22:54', '2022-11-28 08:28:08'),
(26, 'Wisata Alam', 'Sungai Tengar', 'Menjadi salahs atu destinasi wisata yang cukup wajib ketika kamu mengunjungi Kabupaten Ketapang, yakni Sungai Tengar. Kamu bisa menyusuri Sungai Tengar dengan menggunakan perahu nelayan sembari menikmati keindahan pinggiran sungai. Ada salah satu aktifitas yang dilakukan wisatawan di tempat wisata di Kalbar ini, yakni memancing. Buat kamu yang memiliki hobi memancing, Sungai Tengar bisa menjadi spot terbaik untuk menyaurkan hobi memancing, terutam lebih ke arah hulu Sungai Tengar. Atau kamu juga bisa di muara Sungai Tengar yang begitu banyak pondokan yang menyajikan kuliner khas Kabupaten Ketapang.', '-', '-', 'senin - minggu', '09:25:00', '19:23:00', 'app/images/atraksi wisata/26-1669206230-SOoJu.jpg', '-2.3519452305869195', '110.14396796147749', '2022-11-23 05:23:50', '2022-12-07 07:19:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa_wisata`
--

CREATE TABLE `desa_wisata` (
  `id` int NOT NULL,
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

INSERT INTO `desa_wisata` (`id`, `nama_desa_wisata`, `deskripsi`, `link_jadesta`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(18, 'Desa Kendawangan Kiri', 'Petualangan 100-pantai', 'https://jadesta.kemenparekraf.go.id/desa/cempedak_jaya', 'app/images/desa wisata/18-1666229406-CeBfy.jpg', 'app/images/desa wisata/18-1666229406-aM0xY.jpg', 'app/images/desa wisata/18-1666229406-Z2ku0.jpg', 'app/images/desa wisata/18-1666229406-Felx1.jpg', '-2.516090028897877', '110.19905363875796', '2022-10-16 06:24:44', '2022-12-07 00:56:11'),
(25, 'Laman Satong', 'Jelajah rimba & budaya', 'https://jadesta.kemenparekraf.go.id/desa/laman_satong', 'app/images/desa wisata/25-1666241067-cbwVv.jpg', 'app/images/desa wisata/25-1666241067-9u2n8.jpg', 'app/images/desa wisata/25-1666241067-ETmiN.jpg', 'app/images/desa wisata/25-1666241067-Wnx80.jpg', '-1.387746527108794', '110.16901156806455', '2022-10-19 21:43:17', '2022-12-07 00:56:46'),
(26, 'Mekar Utama', 'Petualangan Pulau Sawi', 'https://jadesta.kemenparekraf.go.id/desa/mekar_utama', 'app/images/desa wisata/26-1666247311-QSWIV.jpg', 'app/images/desa wisata/26-1666247311-LotVy.jpg', 'app/images/desa wisata/26-1666247311-ugrqv.jpg', 'app/images/desa wisata/26-1666247311-SyeWm.png', '-2.3583044689783392', '110.14772646913491', '2022-10-19 23:06:51', '2022-12-07 00:57:10'),
(31, 'Sinar Kuri', 'Jelajah rimba Kuri', 'https://jadesta.kemenparekraf.go.id/desa/sinar_kuri', 'app/images/desa wisata/31-1669259354-l95Nv.jpg', 'app/images/desa wisata/31-1669259355-B0gDN.jpg', 'app/images/desa wisata/31-1669259355-vdZdf.jpg', 'app/images/desa wisata/31-1669259355-S4Ix2.jpg', '-0.9444381245910761', '110.45705985249035', '2022-11-23 20:09:14', '2022-12-07 00:57:33'),
(32, 'Suka Baru', 'Hutan Wisata Mangrove Celincing', 'https://jadesta.kemenparekraf.go.id/desa/celincing_suka_baru', 'app/images/desa wisata/32-1669260051-QAxA6.jpg', 'app/images/desa wisata/32-1669260051-MFIcw.jpg', 'app/images/desa wisata/32-1669260051-JPvVW.jpg', 'app/images/desa wisata/32-1669260051-1rhGS.jpg', '-1.856364584850278', '109.93984480758998', '2022-11-23 20:20:51', '2022-12-07 00:57:54'),
(33, 'Sungai Awan Kanan', 'Wisata Pantai', 'https://jadesta.kemenparekraf.go.id/desa/sungai_awan_kanan', 'app/images/desa wisata/33-1669260447-I75oC.jpg', 'app/images/desa wisata/33-1669260447-4FfZJ.jpg', 'app/images/desa wisata/33-1669260447-5aaMV.jpg', 'app/images/desa wisata/33-1669260447-rHVzA.jpg', '-1.7554778427162019', '109.99443183372664', '2022-11-23 20:27:27', '2022-12-07 00:58:21'),
(34, 'Kinjil Pesisir', 'Wisata Santai Pantai Pecal', 'https://jadesta.kemenparekraf.go.id/desa/kinjil_pesisir', 'app/images/desa wisata/34-1669260705-0p28f.jpg', 'app/images/desa wisata/34-1669260705-JUl93.jpg', 'app/images/desa wisata/34-1669260705-K8KIv.jpg', 'app/images/desa wisata/34-1669260705-lGcGf.jpg', '-1.869747094306019', '109.9645630580743', '2022-11-23 20:31:45', '2022-12-07 00:58:43'),
(35, 'Jelayan', 'Jelajah budaya Jelayan', 'https://jadesta.kemenparekraf.go.id/desa/jelayan', 'app/images/desa wisata/35-1669260810-be7ST.jpg', 'app/images/desa wisata/35-1669260810-uLOiZ.jpg', 'app/images/desa wisata/35-1669260810-ZYUih.jpg', 'app/images/desa wisata/35-1669260810-yH2oV.jpg', '-1.8096965844979593', '110.63524333597859', '2022-11-23 20:33:30', '2022-12-07 00:59:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_wisata`
--

CREATE TABLE `kalender_wisata` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `isi` text,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kalender_wisata`
--

INSERT INTO `kalender_wisata` (`id`, `nama`, `isi`, `tempat`, `tanggal`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'PUTRI HIJAB', 'Putri Hijab Indonesia (Bahasa Inggris: Princess of Hijab Indonesia) adalah sebuah kontes kecantikan untuk wanita muslimah di seluruh Indonesia sejak tahun 2015 yang diketuai oleh Lidya Agustin. Organisasi ini langsung ditangani oleh CV Putri Hijab Indonesia sebagai management resmi. Selain sebagai wadah untuk menampung bakat dan prestasi, kontes kecantikan ini juga menginspirasi wanita muslimah di seluruh Indonesia.', 'ketapang', '2023-03-09 17:00:00', 'app/images/kalender wisata/4-1669087562-XpmHX.png', '2022-11-21 20:26:02', '2022-11-21 20:26:02'),
(5, 'HARI JADI KETAPANG', 'Kota ketapang yang terletak disebelah selatan provinsi Kalbar, Hari ini tanggal 11 Maret 2021 genap berusia 603 tahun, Upacara Memperingati Hari jadi ketapang tahun 2021 ini mengusung tema “Melanjutkan Ketapang Maju Menuju Masyarakat Sejahtera “. yang berlangsung dihalaman kantor Bupati Jl. Jenderal Sudirman no. 37 Kabupaten Ketapang, Kamis (11/03/2021).', 'ketapang', '2023-03-10 17:00:00', 'app/images/kalender wisata/5-1669087870-94Kln.jpg', '2022-11-21 20:31:10', '2022-11-21 20:31:10'),
(6, 'FESTIVAL DENDANG MELAYU', 'Delta Pawan (Suara Ketapang) - Wakil Bupati Ketapang yang diwakili Asisten I Sekda bidang Pemerintahan dan Kesra Edy Radiansyah, SH.,MH hadiri Grand Final Festival Dendang Melayu Kabupaten Ketapang Tahun 2022, Rabu (22/06/2022) bertempat City Mall Ketapang.\r\nAsisten I Setda dalam kesempatan tersebut berharap dengan dilaksanakannya kegiatan ini dapat menumbuh kembangkan minat, bakat serta kemampuan putra putri terbaik daerah dalam karya seni musik.\r\n\"Disisi lain kita juga berusaha melestarikan nilai seni dan budaya, membina nilai keanekaragaman sosial masyarakat dan toleransi pendidikan, kepemudaan membangun sumber daya manusia yang semuanya itu tertuang lewat kreatifitas seni, terutama seni musik melayu,\" ujarnya.\r\nLebih lanjut ia juga menyampaikan bahwa Pemda Ketapang melalui dinas pariwisata dan kebudayaan telah merancang kegiatan ini sedemikian rupa agar masyarakat di Kabupaten Ketapang dapat ikut berpatisipasi dalam memeriahkan acara festival dendang melayu ini.\r\n\r\n\"Saya berharap acara festival dendang melayu ini akan tetap eksis pelaksanaan setiap tahunnya, usaha ini dilakukan agar seni budaya lokal yang ada di Kabupaten Ketapang tidak hilang ditelan jaman,\" harapnya.\r\nSelain itu ia juga menyampaikan bahwa Pemerintah Kabupaten Ketapang telah berkomitmen mendorong dan memperdayakan potensi seni dan budaya agar tetap lestari dan terus berkembang.\r\n\"Sebagai wujud dari kepedulian itu melalui dinas pariwisata dan kebudayaan pemerintah Kabupaten Ketapang setiap tahun mengalokasikan anggaran festival dendang melayu ini,\" Katanya.', 'ketapang', '2022-11-11 17:00:00', 'app/images/kalender wisata/6-1669088027-0sGJ0.jpg', '2022-11-21 20:33:47', '2022-11-21 20:33:47'),
(7, 'LOMBA MASAK MAKANAN KHAS KETAPANG', '“Seperti yang kita ketahui, banyak sekali cara untuk mengolah ikan menjadi masakan khususnya masakan Khas Ketapang.” katanya saat membacakan sambutan Bupati Ketapang\r\n\r\nSelanjut nya Beliau mengatakan bahwa di Kabupaten Ketapang memiliki banyak sekali jenis ikan yang bisa dimanfaatkan untuk menjadi barang konsumsi masyarakat sehari – hari, misalnya ikan baong, ikan gabus, ikan pari, ikan gembung dan masih banyak lagi.\r\n\r\n“Minimnya keikutsertaan para masyarakat dan pelaku usaha dalam melestarikan kuliner lokal membuat masakan – masakan Khas Ketapang kurang dikenal oleh khalayak ramat.” ujarnya\r\n\r\nMaka dari itu, perlu adanya pembinaan khusus dalam rangka menjaga warisan dan budaya kuliner yang sudah ada turun temurun ini.\r\n\r\nSelain itu, beliau berharap untuk para kaum milenial dapat ikut aktif berpartisipasi memperkenalkan kuliner lokal hingga ke kancah internasional.\r\n\r\n“Melalui acara ini kita di ajak untuk mengingat akan pentingnya warisan kuliner para leluhur kita, agar apa yang telah ada tetap terjaga dan terus eksis sampai pada generasi selanjutnya. Mengingat bahwa sekarang ini kaum milenial.” tuturnya.\r\n\r\nDengan diadakannya lomba masakan ikan “Khas Ketapang” tahun 2021 bisa menumbuhkan kreativitas dari masyarakat untuk terus mengembangkan kuliner nusantara.\r\n\r\n“Saya berharap, acara ini akan tetap eksis setiap tahunnya mengikuti perkembangan zaman. Usaha ini dilakukan agar kuliner lokal yang ada di Kabupaten Ketapang tidak hilang ditelan zaman.” harapnya\r\n\r\nLebih lanjut beliau juga berpesan kepada masyarakat selain berkreasi dengan kreativitas masing – masing, masyarakat juga dapat mendukung para penggiat kuliner dan pelaku usaha mikro kecil menengah di Kabupaten Ketapang.\r\n\r\n“Dengan demikian, para masyarakat tidak hanya memberikan kesejahteraan bagi para pelaku usaha tetapi sekaligus untuk membantu kuliner – kuliner yang ada di Kabupaten Ketapang tetap bertahan dan terus ada demi menunjang masyarakat perekonomian setempat.” Pungkasnya.\r\n\r\nHadir juga dalam acara tersebut Ibu Ketua tim penggerak PKK Ketapang, Manager Asana Nevada, Kadis DISPARBUD, undangan dan lainnya.', 'ketapang', '2023-03-08 17:00:00', 'app/images/kalender wisata/7-1669088237-vISCl.jpg', '2022-11-21 20:37:17', '2022-11-21 20:37:17');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `desa_wisata`
--
ALTER TABLE `desa_wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `kalender_wisata`
--
ALTER TABLE `kalender_wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
