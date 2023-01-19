-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2023 pada 18.33
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digiifsu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(57, '2022-12-14-081106', 'App\\Database\\Migrations\\Users', 'default', 'App', 1671878220, 1),
(58, '2022-12-14-112910', 'App\\Database\\Migrations\\KompetensiKeahlian', 'default', 'App', 1671878224, 1),
(59, '2022-12-14-113502', 'App\\Database\\Migrations\\Ekstrakurikuler', 'default', 'App', 1671878226, 1),
(60, '2022-12-15-054520', 'App\\Database\\Migrations\\TbSiswa', 'default', 'App', 1671878229, 1),
(61, '2022-12-15-060807', 'App\\Database\\Migrations\\TbMessage', 'default', 'App', 1671878231, 1),
(62, '2022-12-15-064724', 'App\\Database\\Migrations\\Fasilitas', 'default', 'App', 1671878233, 1),
(63, '2022-12-15-074024', 'App\\Database\\Migrations\\TbLembaga', 'default', 'App', 1671878234, 1),
(64, '2022-12-15-074924', 'App\\Database\\Migrations\\Tbpage', 'default', 'App', 1671878235, 1),
(65, '2022-12-15-083053', 'App\\Database\\Migrations\\Tbpost', 'default', 'App', 1671878237, 1),
(66, '2022-12-15-090346', 'App\\Database\\Migrations\\TbSetting', 'default', 'App', 1671878238, 1),
(67, '2022-12-15-215741', 'App\\Database\\Migrations\\TbimgFasilitas', 'default', 'App', 1671878239, 1),
(68, '2022-12-16-040235', 'App\\Database\\Migrations\\TbKelas', 'default', 'App', 1671878240, 1),
(69, '2022-12-16-041345', 'App\\Database\\Migrations\\TbPagesCategories', 'default', 'App', 1671878241, 1),
(70, '2022-12-16-060352', 'App\\Database\\Migrations\\TbPostCategories', 'default', 'App', 1671878242, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekstrakurikuler`
--

CREATE TABLE `tb_ekstrakurikuler` (
  `id` int(14) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `foto` varchar(121) NOT NULL,
  `sambutan_pembina` text DEFAULT NULL,
  `ketua` int(11) NOT NULL,
  `wakil1` varchar(121) NOT NULL,
  `wakil2` varchar(12) NOT NULL,
  `pembina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id` int(14) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_imgfasilitas`
--

CREATE TABLE `tb_imgfasilitas` (
  `id` int(14) NOT NULL,
  `id_fasilitas` int(14) DEFAULT NULL,
  `image_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(14) NOT NULL,
  `nama_kelas` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nama_kelas`) VALUES
(1, 'dada'),
(2, 'dadadada'),
(3, 'XI-R-10'),
(4, 'X-RPL-10'),
(5, 'XII-RPL-4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kompetensi_keahlian`
--

CREATE TABLE `tb_kompetensi_keahlian` (
  `id` int(22) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `nama_komli` varchar(80) NOT NULL,
  `deskripsi` text NOT NULL,
  `video_profile` varchar(122) NOT NULL,
  `misi` text NOT NULL,
  `kepala_jurusan` int(10) UNSIGNED NOT NULL,
  `kata_ajakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_kompetensi_keahlian`
--

INSERT INTO `tb_kompetensi_keahlian` (`id`, `slug`, `nama_komli`, `deskripsi`, `video_profile`, `misi`, `kepala_jurusan`, `kata_ajakan`) VALUES
(1, 'Pemerograman-Perangkat-Gim', 'Pemerograman Perangkat Gim', '<p>Jurusan yang mempelajari cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>\r\n<p><strong>VISI</strong></p>\r\n<p>&ldquo;Menghasilkan lulusan program keahlian Teknologi Pengembangan Perangkat lunak &nbsp;yang unggul dan berakhlak mulia&rdquo;</p>\r\n<p><strong>MISI</strong></p>\r\n<ol>\r\n<li>Membekali peserta didik dengan nilai karakter dan budaya kerja PPLG</li>\r\n<li>Membekali peserta didik dengan pengetahuan dan keterampilan sesuai bidang teknologi perangakat lunak dan Informatika</li>\r\n<li>Membekali peserta didik untuk memiliki jiwa wirausaha sesuai bidang Perangkat Lunak.</li>\r\n</ol>\r\n<p><strong>3.TUJUAN</strong></p>\r\n<p>&ldquo;Menyiapkan tenaga pelaksana pada PPLG yang memiliki pengetahuan, keterampilan dan sikap sebagai manusia yang bertanggung jawab dan mencintai profesi pekerjaannya&rdquo;.</p>\r\n<p><strong>APA&nbsp; YANG DI PELAJARI?</strong></p>\r\n<ol>\r\n<li>Dasar Desain Grafis</li>\r\n<li>Pemrograman Dasar</li>\r\n<li>Sistem Komputer</li>\r\n<li>Komputer dan Jaringan Dasar</li>\r\n<li>Basis Data</li>\r\n<li>Produk Kreatif Dan Kewirausahaan</li>\r\n<li>Pemodelan Perangkat Lunak</li>\r\n<li>Pemrograman Web dan Perangkat Bergerak</li>\r\n</ol>', 'https://youyube.com/video?2', 'PPLG ADALAH KEAHLIAN YANG ADA DI', 8, 'Ayo bergabung bersama kami?'),
(2, 'desain-komunikasi-visual-dkv', 'desain komunikasi visual(dkv)', '<p>Desain Komunikasi Visual (DKV) adalah cabang ilmu desain yang mempelajari konsep komunikasi dan ungkapan kreatif, teknik dan media dengan memanfaatkan elemen-elemen visual ataupun rupa untuk menyampaikan pesan untuk tujuan tertentu (tujuan informasi ataupun tujuan persuasi yaitu mempengaruhi perilaku). Jadi, DKV ini bisa disebut adalah perpaduan seni desain tradisional yang menggunakan pensil dan kertas dengan teknologi digital.</p>\r\n<p>Lantas, apa saja kegunaan dari mempelajari dan menguasai Desain Komunikasi Visual ini? DKV dapat menjadi sarana identifikasi. Dengan membuat desain tentang seseorang atau sebuah produk, maka akan membuatnya menjadi lebih mudah dikenali. Terlebih bagi produk yang dijual, akan lebih mudah untuk dikenali dan menarik minat konsumen. Kemudian yang kedua adalah sebagai sarana instruksi dan informasi. Sebagai sarana instruksi dan informasi, desain komunikasi visual bertujuan menunjukkan hubungan antara suatu hal dengan hal lainnya dalam petunjuk, arah, skala, dan posisi. Kemudian fungsi lainnya adalah sebagai sarana promosi dan presentasi. Tujuan dari DKV adalah untuk menyampaikan pesan, mendapat perhatian (atensi) secara visual sehingga mudah diingat.</p>\r\n<p>Sejarah Singkat SMK Negeri 9 Kota Bekasi</p>\r\n<p>SMK Negeri 9 Kota Bekasi didirikan pada tahun 2011 dengan rekomendasi pendirian dari Kepala Dinas Pendidikan Kota Bekasi nomor 421/Kep.1190.Dik.2 tertanggal 21 April 2011 dengan nama USB SMK Negeri 9 Kota Bekasi, sebagai sekolah di bawah kendali instruksi dari SMK Negeri 1 Kota Bekasi.</p>\r\n<p>Pada saat berdirinya USB SMKN 9 Kota Bekasi, membuka jurusan DKV dan Perbankan dengan 4 rombel dan menumpang di SDN Pekayon Jaya V di Jl. Damar Bekasi Selatan Selanjutnya pada tahun 2014 status USB SMK Negeri 9 resmi menjadi SMK Negeri berdasarkan Surat Keputusan Walikota Nomor &nbsp;421/Kep.823-Disdik/VI/2014.</p>\r\n<p>Pada tahun 2014, SMK Negeri 9 Kota Bekasi mendapatkan Akreditasi dengan hasil Memuaskan (A) berdasarkan SK Penetapan Hasil Akreditasi BAP-S/M nomor 02.00/313/BAP-SM/SK/X/2014 tertanggal 15 Oktober 2014. SMK Negeri 9 beralamat di Jl. Cikunir Raya Gg. H. Abbas RT 01/RW 02 Kelurahan Jakamulya Kecamatan Bekasi Selatan Kota Bekasi kode pos 17146 nomer telpon (021) 82436175</p>\r\n<p>Selayang pandang Jurusan DKV SMK Negeri 9 Kota Bekasi</p>\r\n<p>Kompetensi Keahlian Desain komunikasi visual di SMK Negeri 9 Kota Bekasi merupakan satu-satunya jurusan yang ada di Kota Bekasi. Dengan keterbatasan ruangan dan sarana prasarana yang ada, perlahan Kompetensi Keahlian Desain Komunikasi Visual mulai mengembangkan diri.&nbsp; Dimulai dari pembelian perangkat desain berupa komputer, perangkat fotografi, studio foto, hingga mesin cetak.</p>\r\n<p>Pada saat ini sudah memiliki ruang RPS (Ruang Praktik Siswa) dan ruang studio foto,</p>\r\n<p>Setiap akhir semester ganjil, peserta didik kelas XII selalu mengadakan acara pameran karya seni rupa/bazar seni yang digelar di SMKN 9Kota Bekasi.</p>\r\n<p>Beberapa peserta didik meraih kejuaraan dalam berbagai perlombaan di bidang DKV baik secara lokal maupun nasional.</p>\r\n<p>Visi dan Misi Kompetensi Keahlian Desain Komunikasi Visual SMKN 9 Kota Bekasi</p>\r\n<p>Visi :</p>\r\n<p>Menjadikan peserta didik yang unggul, kreatif, berkarakter, dan berkompeten di bidang Desain Komunikasi Visual yang bertumpu pada budaya Indonesia.</p>\r\n<p>Misi :</p>\r\n<ul>\r\n<li>Mengembangkan keilmuan dan SDM di bidang Keahlian Desain Komunikasi Visual.</li>\r\n<li>Melaksanakan program pendidikan berkarakter yang kreatif, dan inovatif dengan bertumpu pada eksplorasi budaya visual Nusantara dengan metode pembelajaran berbasis pemecahan masalah (problem salving).</li>\r\n<li>Melaksanakan pengembangan keahlian di industri bidang desain komunikasi visual.</li>\r\n</ul>\r\n<p>Tujuan Kompetensi Keahlian Desain Komunikasi Visual&nbsp;</p>\r\n<p>Menghasilkan tamatan yang mempunyai keunggulan kompetitif untuk menjadi desainer graphic dan photografer, berakhlak mulia yang sesuai dengan tuntutan dunia usaha/ dunia industri</p>\r\n<ul>\r\n<li>Mendidik peserta diklat dengan keahlian dan keterampilan dalam bidang kompetensi keahlian Desain komunikasi Visual agar dapat bekerja baik secara mandiri dan kompetitif atau mengisi lowongan pekerjaan yang ada di dunia usaha dan dunia industri maupun menciptakan dunia usaha secara mandiri</li>\r\n<li>Mendidik peserta diklat agar mampu memilih karir, berkompetisi dan mengembangkan sikap profesional dalam bidang kompetensi keahlian Desain Komunikasi Visual.</li>\r\n<li>Membentuk peserta didik yang kreatif dan kompetitif di bidang Desain Komunikasi Visual dalam persaingan global.</li>\r\n<li>Membekali siswa dengan ilmu pengetahuan dan keterampilan kewirausahaan dalam bidang Desain Komunikasi Visual yang terampil, mandiri, profesional, berdaya saing global dan unggul dalam Dunia Usaha/Dunia Industri.</li>\r\n</ul>\r\n<p>Lingkup pekerjaan&nbsp;Kompetensi&nbsp;Keahlian Desain Komunikasi Visual</p>\r\n<ul>\r\n<li>Gambar dan sketsa</li>\r\n<li>Melaksanakan Fotografi</li>\r\n<li>Komputer grafis ( mendesain)</li>\r\n<li>Melaksanakan videografi</li>\r\n</ul>\r\n<p>Alat Praktik Kompetensi Keahlian Desain Komunikasi Visual</p>\r\n<ol type=\"1\">\r\n<li>Pensil/bolpoin</li>\r\n<li>Kertas gambar</li>\r\n<li>Pewarna/cat</li>\r\n<li>PC Server</li>\r\n<li>PC Lenovo</li>\r\n<li>scaner</li>\r\n<li>Camera Canon 7 D</li>\r\n<li>Camera Canon 60 D</li>\r\n<li>Camera Canon 500 D</li>\r\n<li>Camera Canon 600 D</li>\r\n<li>Camera Canon 750 D</li>\r\n<li>Kamera GoPRO</li>\r\n<li>Kamera HD Panasonic</li>\r\n<li>Tripod</li>\r\n<li>Triger</li>\r\n<li>Lensa Fix 50mm</li>\r\n<li>Flash Canon/godog</li>\r\n<li>wacom</li>\r\n<li>Berbagai lensa kamera digital</li>\r\n<li>printer</li>\r\n<li>panel pameran</li>\r\n<li>lampu sorot pameran</li>\r\n<li>perangkat alat sablon</li>\r\n<li>Drone DJI</li>\r\n<li>Perangkat lunak/shoftware desain (Photoshop, Adobe Ilustrator, CorelDraw)</li>\r\n</ol>\r\n<p>Praktik Kerja industri</p>\r\n<p>Perwujudan kebijaksanaan Kementerian Pendidikan Dasar dan Menengah, link and match pada Sekolah Menengah kejuruan (SMK) ialah penyelenggara dimana mulai dari proses perencanaan, pelaksanaan/proses belajar mengajar, evaluasi hasil belajar sampai pada pemasaran tamatan menjadi tanggung jawab bersama antara SMK dan Industri pasangannya.</p>\r\n<p>Penyelenggaraan Praktik Kerja Industri adalah penyelenggaraan berdasarkan kurikulum yang disusun atas perpaduan program pendidikan di sekolah dan program penguasaan keahlian yang diperoleh melalui kegiatan bekerja langsung di lini produksi Dunia Usaha/Dunia Industri secara terarah untuk mencapai suatu tingkat keahlian yang disepakati oleh kedua belah pihak.</p>\r\n<p>Adapun MOU yang sudah disahkan dan ditandatangani oleh DU/DI antara lain :</p>\r\n<ol type=\"1\">\r\n<li>PT. Holomoc Indonesia</li>\r\n<li>Kiki Photo Studio</li>\r\n<li>Photographer Lounge</li>\r\n<li>Laundesign</li>\r\n<li>CV. Puspita Adhi Pratama</li>\r\n<li>PT. Serum</li>\r\n</ol>\r\n<p>Kunjungan Industri</p>\r\n<p>Selain meningkatkan sarana prasarana, SMK juga dituntut agar siswa-siswi paham pembelajaran di luar sekolah yaitu dengan adanya kegiatan Kunjungan Industri.</p>\r\n<p>Adapun Kunjungan Industri yang sudah dilakukan antara lain ke DKV ITB, DKV Institute Kesenian Jakarta, Museum Batik Jakarta, Museum Seni Rupa, Kaos C59 Bandung, dan sebagainya.</p>\r\n<p>Prestasi</p>\r\n<p>Peserta didik bidang keahlian DKV telah beberapa kali ikut dalam perlombaan di kancah regional maupun nasional, diantaranya adalah :</p>\r\n<ul>\r\n<li>4 Peserta didik yang dikirim dalam workshop seni rupa yang diadakan oleh Kemendikbud pada tahun 2019, 2 karya menjadi salah satu 15 karya terbaik.</li>\r\n<li>Mendapatkan juara2 dalam lomba fotografi yang diadakan oleh Asosiasi Fotografi Indonesia dalam rangka HUT Kota Bekasi Tahun 2020.</li>\r\n</ul>', 'https://youyube.com/video?1', 'dada', 7, 'dada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lembaga`
--

CREATE TABLE `tb_lembaga` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(225) NOT NULL,
  `pekerjaan` varchar(120) DEFAULT NULL,
  `kategori` varchar(223) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `agama` varchar(120) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL DEFAULT 'L',
  `image` varchar(128) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL,
  `ig_link` varchar(10) NOT NULL,
  `tiktok_link` varchar(10) NOT NULL,
  `yt_link` varchar(10) NOT NULL,
  `fb_link` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_lembaga`
--

INSERT INTO `tb_lembaga` (`id`, `nama`, `pekerjaan`, `kategori`, `email`, `agama`, `jenis_kelamin`, `image`, `status`, `ig_link`, `tiktok_link`, `yt_link`, `fb_link`) VALUES
(5, 'Tatang Suryana', NULL, 'Guru Adaftif', 'dadan@dadan.com', 'Islam', 'L', '', 'aktif', '', '', '', ''),
(7, 'Dadan Hidayat, S.Crud, S.Com,S.Ch.id', NULL, 'Kesiswaan', 'dadan@dadan.com', 'Islam', 'L', '', 'aktif', '', '', '', ''),
(8, 'Anwar Maulna, S.Kom', NULL, 'Guru Produktif', 'aw@gmail.com', 'Islam', 'L', '/storage/post/teaching-factory-app.JPG', 'aktif', '', '', '', ''),
(9, 'Dadan Hdyt, S.Crud,S.Php', NULL, 'Guru Normatif', 'dadanhidyt@gmail.com', 'Islam', 'L', '/storage/foto_siswa/IMG_20221202_171732.jpg', 'aktif', '', 'https://ig', 'https://ig', 'https://ig');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_message`
--

CREATE TABLE `tb_message` (
  `id` int(14) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pages`
--

CREATE TABLE `tb_pages` (
  `id` int(14) NOT NULL,
  `slug` varchar(40) NOT NULL,
  `id_kategori` int(33) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `isi` varchar(225) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `publish_at` varchar(200) NOT NULL,
  `update_at` varchar(200) NOT NULL,
  `thumbnail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pages_categories`
--

CREATE TABLE `tb_pages_categories` (
  `id` int(14) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `title` varchar(43) NOT NULL,
  `keywords` varchar(121) NOT NULL,
  `profile_sekolah` text NOT NULL,
  `favicon` varchar(221) NOT NULL,
  `video_profile` text NOT NULL,
  `budaya_sekolah` text NOT NULL,
  `email` varchar(121) NOT NULL,
  `sambutan_kepala_sekolah` text NOT NULL,
  `visi_misi` text NOT NULL,
  `yt_link` varchar(100) NOT NULL,
  `tiktok_link` varchar(100) NOT NULL,
  `fb_link` varchar(100) NOT NULL,
  `ig_link` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `head_script` text NOT NULL,
  `footer_script` text NOT NULL,
  `head_style` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengaturan`
--

INSERT INTO `tb_pengaturan` (`title`, `keywords`, `profile_sekolah`, `favicon`, `video_profile`, `budaya_sekolah`, `email`, `sambutan_kepala_sekolah`, `visi_misi`, `yt_link`, `tiktok_link`, `fb_link`, `ig_link`, `alamat_sekolah`, `head_script`, `footer_script`, `head_style`) VALUES
('SMK INFORMATIKA SUMEDANG', '', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.</p>', '', 'https://youyube.com/video?2', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.</p>', '', '', '<h4>VISI</h4>\r\n<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.</p>\r\n<p>&nbsp;</p>\r\n<h4>MISI</h4>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque&nbsp;</li>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.</li>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.</li>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque tempore iste suscipit nesciunt, nostrum itaque voluptas, officiis debitis unde totam. Quaerat hic ipsam quos ad earum, ab atque totam possimus.</li>\r\n</ul>', 'https://ig.com/smkifsu', 'https://ig.com/smkifsu', 'https://ig.com/smkifsu', 'https://ig.com/smkifsu', 'Jl angkrek situ', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `id` int(14) UNSIGNED NOT NULL,
  `slug` varchar(225) NOT NULL,
  `title` varchar(40) NOT NULL,
  `keywords` varchar(225) DEFAULT NULL,
  `deskripsi_singkat` text DEFAULT NULL,
  `thumbnail` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `id_tag` int(15) UNSIGNED DEFAULT NULL,
  `id_category` int(15) UNSIGNED DEFAULT NULL,
  `create_at` varchar(200) NOT NULL,
  `update_at` varchar(200) NOT NULL,
  `author` int(15) UNSIGNED NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` enum('draft','publish','unpublish') NOT NULL DEFAULT 'unpublish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id`, `slug`, `title`, `keywords`, `deskripsi_singkat`, `thumbnail`, `isi`, `id_tag`, `id_category`, `create_at`, `update_at`, `author`, `views`, `status`) VALUES
(1, 'smk-informatika-sumedang', 'smk informatika sumedang', 'dada', 'sugoiii', '/storage/post/teaching-factory-app.JPG', '<p><img src=\"http://localhost/smkifsu.sch.id/storage/post/teaching-factory-app.JPG\" alt=\"teaching-factory-app.JPG (19 KB)\" width=\"357\" height=\"201\" /></p>\r\n<p>Teaching factory adalah</p>\r\n<pre class=\"language-php\"><code>&lt;?php\r\n\r\nerror_reporting(0); // Set E_ALL for debuging\r\n\r\n// // Optional exec path settings (Default is called with command name only)\r\n// define(\'ELFINDER_TAR_PATH\',      \'/PATH/TO/tar\');\r\n// define(\'ELFINDER_GZIP_PATH\',     \'/PATH/TO/gzip\');\r\n// define(\'ELFINDER_BZIP2_PATH\',    \'/PATH/TO/bzip2\');\r\n// define(\'ELFINDER_XZ_PATH\',       \'/PATH/TO/xz\');\r\n// define(\'ELFINDER_ZIP_PATH\',      \'/PATH/TO/zip\');\r\n// define(\'ELFINDER_UNZIP_PATH\',    \'/PATH/TO/unzip\');\r\n// define(\'ELFINDER_RAR_PATH\',      \'/PATH/TO/rar\');\r\n// define(\'ELFINDER_UNRAR_PATH\',    \'/PATH/TO/unrar\');\r\n// define(\'ELFINDER_7Z_PATH\',       \'/PATH/TO/7za\');\r\n// define(\'ELFINDER_CONVERT_PATH\',  \'/PATH/TO/convert\');\r\n// define(\'ELFINDER_IDENTIFY_PATH\', \'/PATH/TO/identify\');\r\n// define(\'ELFINDER_EXIFTRAN_PATH\', \'/PATH/TO/exiftran\');\r\n// define(\'ELFINDER_JPEGTRAN_PATH\', \'/PATH/TO/jpegtran\');\r\n// define(\'ELFINDER_FFMPEG_PATH\',   \'/PATH/TO/ffmpeg\');\r\n\r\n// define(\'ELFINDER_CONNECTOR_URL\', \'URL to this connector script\');  // see elFinder::getConnectorUrl()\r\n\r\n// define(\'ELFINDER_DEBUG_ERRORLEVEL\', -1); // Error reporting level of debug mode\r\n\r\n// // To Enable(true) handling of PostScript files by ImageMagick\r\n// // It is disabled by default as a countermeasure \r\n// // of Ghostscript multiple -dSAFER sandbox bypass vulnerabilities\r\n// // see https://www.kb.cert.org/vuls/id/332928\r\n// define(\'ELFINDER_IMAGEMAGICK_PS\', true);\r\n// ===============================================\r\n\r\n// // load composer autoload before load elFinder autoload If you need composer\r\n// // You need to run the composer command in the php directory.\r\ndefine(\'DIR\', __DIR__ . DIRECTORY_SEPARATOR);\r\nis_readable(DIR.\'vendor/autoload.php\') &amp;&amp; require DIR.\'vendor/autoload.php\';\r\n\r\n// // elFinder autoload\r\nrequire DIR.\'autoload.php\';\r\n// ===============================================\r\n\r\n// // Enable FTP connector netmount\r\nelFinder::$netDrivers[\'ftp\'] = \'FTP\';\r\n// ===============================================\r\n\r\n// // Required for Dropbox network mount\r\n// // Installation by composer\r\n// // `composer require kunalvarma05/dropbox-php-sdk` on php directory\r\n// // Enable network mount\r\n// elFinder::$netDrivers[\'dropbox2\'] = \'Dropbox2\';\r\n// // Dropbox2 Netmount driver need next two settings. You can get at https://www.dropbox.com/developers/apps\r\n// // AND require register redirect url to \"YOUR_CONNECTOR_URL?cmd=netmount&amp;protocol=dropbox2&amp;host=1\"\r\n// // If the elFinder HTML element ID is not \"elfinder\", you need to change \"host=1\" to \"host=ElementID\"\r\n// define(\'ELFINDER_DROPBOX_APPKEY\',    \'\');\r\n// define(\'ELFINDER_DROPBOX_APPSECRET\', \'\');\r\n// ===============================================\r\n\r\n// // Required for Google Drive network mount\r\n// // Installation by composer\r\n// // `composer require google/apiclient:^2.0` on php directory\r\n// // Enable network mount\r\n// elFinder::$netDrivers[\'googledrive\'] = \'GoogleDrive\';\r\n// // GoogleDrive Netmount driver need next two settings. You can get at https://console.developers.google.com\r\n// // AND require register redirect url to \"YOUR_CONNECTOR_URL?cmd=netmount&amp;protocol=googledrive&amp;host=1\"\r\n// // If the elFinder HTML element ID is not \"elfinder\", you need to change \"host=1\" to \"host=ElementID\"\r\n// define(\'ELFINDER_GOOGLEDRIVE_CLIENTID\',     \'\');\r\n// define(\'ELFINDER_GOOGLEDRIVE_CLIENTSECRET\', \'\');\r\n// // Required case when Google API is NOT added via composer\r\n// define(\'ELFINDER_GOOGLEDRIVE_GOOGLEAPICLIENT\', \'/path/to/google-api-php-client/vendor/autoload.php\');\r\n// ===============================================\r\n\r\n// // Required for Google Drive network mount with Flysystem\r\n// // Installation by composer\r\n// // `composer require nao-pon/flysystem-google-drive:~1.1 nao-pon/elfinder-flysystem-driver-ext` on php directory\r\n// // Enable network mount\r\n// elFinder::$netDrivers[\'googledrive\'] = \'FlysystemGoogleDriveNetmount\';\r\n// // GoogleDrive Netmount driver need next two settings. You can get at https://console.developers.google.com\r\n// // AND require register redirect url to \"YOUR_CONNECTOR_URL?cmd=netmount&amp;protocol=googledrive&amp;host=1\"\r\n// // If the elFinder HTML element ID is not \"elfinder\", you need to change \"host=1\" to \"host=ElementID\"\r\n// define(\'ELFINDER_GOOGLEDRIVE_CLIENTID\',     \'\');\r\n// define(\'ELFINDER_GOOGLEDRIVE_CLIENTSECRET\', \'\');\r\n// // And \"php/.tmp\" directory must exist and be writable by PHP.\r\n// ===============================================\r\n\r\n// // Required for One Drive network mount\r\n// //  * cURL PHP extension required\r\n// //  * HTTP server PATH_INFO supports required\r\n// // Enable network mount\r\n// elFinder::$netDrivers[\'onedrive\'] = \'OneDrive\';\r\n// // OneDrive Netmount driver need next two settings. You can get at\r\n// // https://portal.azure.com/#blade/Microsoft_AAD_IAM/ActiveDirectoryMenuBlade/RegisteredApps\r\n// // AND require register redirect url to \"YOUR_CONNECTOR_URL/netmount/onedrive/1\"\r\n// // If the elFinder HTML element ID is not \"elfinder\", you need to change \"/1\" to \"/ElementID\"\r\n// define(\'ELFINDER_ONEDRIVE_CLIENTID\',     \'\');\r\n// define(\'ELFINDER_ONEDRIVE_CLIENTSECRET\', \'\');\r\n// ===============================================\r\n\r\n// // Required for Box network mount\r\n// //  * cURL PHP extension required\r\n// // Enable network mount\r\n// elFinder::$netDrivers[\'box\'] = \'Box\';\r\n// // Box Netmount driver need next two settings. You can get at https://developer.box.com\r\n// // AND require register redirect url to \"YOUR_CONNECTOR_URL?cmd=netmount&amp;protocol=box&amp;host=1\"\r\n// // If the elFinder HTML element ID is not \"elfinder\", you need to change \"host=1\" to \"host=ElementID\"\r\n// define(\'ELFINDER_BOX_CLIENTID\',     \'\');\r\n// define(\'ELFINDER_BOX_CLIENTSECRET\', \'\');\r\n// ===============================================\r\n\r\n\r\n// // Zoho Office Editor APIKey\r\n// // https://www.zoho.com/docs/help/office-apis.html\r\n// define(\'ELFINDER_ZOHO_OFFICE_APIKEY\', \'\');\r\n// ===============================================\r\n\r\n// // Online converter (online-convert.com) APIKey\r\n// // https://apiv2.online-convert.com/docs/getting_started/api_key.html\r\n// define(\'ELFINDER_ONLINE_CONVERT_APIKEY\', \'\');\r\n// ===============================================\r\n\r\n// // Zip Archive editor\r\n// // Installation by composer\r\n// // `composer require nao-pon/elfinder-flysystem-ziparchive-netmount` on php directory\r\n// define(\'ELFINDER_DISABLE_ZIPEDITOR\', false); // set `true` to disable zip editor\r\n// ===============================================\r\n\r\n/**\r\n * Simple function to demonstrate how to control file access using \"accessControl\" callback.\r\n * This method will disable accessing files/folders starting from \'.\' (dot)\r\n *\r\n * @param  string    $attr    attribute name (read|write|locked|hidden)\r\n * @param  string    $path    absolute file path\r\n * @param  string    $data    value of volume option `accessControlData`\r\n * @param  object    $volume  elFinder volume driver object\r\n * @param  bool|null $isDir   path is directory (true: directory, false: file, null: unknown)\r\n * @param  string    $relpath file path relative to volume root directory started with directory separator\r\n * @return bool|null\r\n **/\r\nfunction access($attr, $path, $data, $volume, $isDir, $relpath) {\r\n  $basename = basename($path);\r\n  return $basename[0] === \'.\'                  // if file/folder begins with \'.\' (dot)\r\n       &amp;&amp; strlen($relpath) !== 1           // but with out volume root\r\n    ? !($attr == \'read\' || $attr == \'write\') // set read+write to false, other (locked+hidden) set to true\r\n    :  null;                                 // else elFinder decide it itself\r\n}\r\n\r\n// Documentation for connector options:\r\n// https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options\r\n$opts = array(\r\n // \'debug\' =&gt; true,\r\n  \'roots\' =&gt; array(\r\n    // Items volume\r\n   array(\r\n      \'driver\'        =&gt; \'LocalFileSystem\',           // driver for accessing file system (REQUIRED)\r\n     \'path\'          =&gt; FCPATH .DIRECTORY_SEPARATOR. \'storage\'.DIRECTORY_SEPARATOR,                 // path to files (REQUIRED)\r\n     \'URL\'           =&gt; base_url(\'storage\'), // URL to files (REQUIRED)\r\n     \'trashHash\'     =&gt; \'t1_Lw\',                     // elFinder\'s hash of trash folder\r\n      \'winHashFix\'    =&gt; DIRECTORY_SEPARATOR !== \'/\', // to make hash same to Linux one on windows too\r\n     \'uploadDeny\'    =&gt; array(\'all\'),                // All Mimetypes not allowed to upload\r\n     \'uploadAllow\'   =&gt; array(\'image/x-ms-bmp\', \'image/gif\', \'image/jpeg\', \'image/png\', \'image/x-icon\', \'text/plain\'), // Mimetype `image` and `text/plain` allowed to upload\r\n     \'uploadOrder\'   =&gt; array(\'deny\', \'allow\'),      // allowed Mimetype `image` and `text/plain` only\r\n      \'accessControl\' =&gt; \'access\'                     // disable and hide dot starting files (OPTIONAL)\r\n    ),\r\n    // Trash volume\r\n   array(\r\n      \'id\'            =&gt; \'1\',\r\n      \'driver\'        =&gt; \'Trash\',\r\n      \'path\'          =&gt; FCPATH .DIRECTORY_SEPARATOR. \'storage\'.DIRECTORY_SEPARATOR.\'.trash\'.DIRECTORY_SEPARATOR,\r\n      \'tmbURL\'        =&gt; base_url(\'.trash/.tmb/\'),\r\n     \'winHashFix\'    =&gt; DIRECTORY_SEPARATOR !== \'/\', // to make hash same to Linux one on windows too\r\n     \'uploadDeny\'    =&gt; array(\'all\'),                // Recomend the same settings as the original volume that uses the trash\r\n     \'uploadAllow\'   =&gt; array(\'image/x-ms-bmp\', \'image/gif\', \'image/jpeg\', \'image/png\', \'image/x-icon\', \'text/plain\'), // Same as above\r\n     \'uploadOrder\'   =&gt; array(\'deny\', \'allow\'),      // Same as above\r\n     \'accessControl\' =&gt; \'access\',                    // Same as above\r\n   ),\r\n  )\r\n);\r\n\r\n// run elFinder\r\n$connector = new elFinderConnector(new elFinder($opts));\r\n$connector-&gt;run();\r\n\r\n</code></pre>\r\n<p>&nbsp;</p>', NULL, 2, '2023-01-02T10:57:18', '', 4, 0, 'publish'),
(3, 'kenapa-orang-orang-didunia-wkwkw-yang-addan-saya-suka', 'kenapa orang orang didunia wkwkw yang ad', 'baik', 'dada', '/storage/post/teaching-factory-app.JPG', '<p>dada</p>', NULL, 2, '2023-01-06T09:42:37', '', 4, 0, 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post_categories`
--

CREATE TABLE `tb_post_categories` (
  `id` int(14) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_post_categories`
--

INSERT INTO `tb_post_categories` (`id`, `slug`, `nama`) VALUES
(2, 'Pendidkan-Indonesia', 'Pendidikan'),
(3, 'pelajaran', 'pelajaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id` int(14) NOT NULL,
  `favicon` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `kata_kunci` varchar(122) NOT NULL,
  `deskripsi` text NOT NULL,
  `tag` varchar(225) NOT NULL,
  `copyright` varchar(225) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nis` int(8) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `kelas` varchar(87) NOT NULL,
  `status` enum('ya','tidak') NOT NULL DEFAULT 'ya',
  `agama` varchar(221) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_komli` int(11) DEFAULT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nis`, `nama`, `kelas`, `status`, `agama`, `jenis_kelamin`, `id_komli`, `gambar`) VALUES
(13, 20211324, 'Abdulah Dadan', 'XII-40', 'ya', 'Islam', 'L', 2, '/storage/post/IMG_20221202_170449.jpg'),
(14, 782464234, 'Asep Suharto', 'XII-40', 'ya', 'Islam', 'L', 1, '/storage/post/IMG_20221202_170449.jpg'),
(15, 23423423, 'dada', 'XII-RPL-10', 'ya', 'Islam', 'L', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(23) NOT NULL,
  `level` enum('super_admin','admin','user') NOT NULL DEFAULT 'admin',
  `create_at` varchar(200) NOT NULL,
  `avatar` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ekstrakurikuler`
--
ALTER TABLE `tb_ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_imgfasilitas`
--
ALTER TABLE `tb_imgfasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kompetensi_keahlian`
--
ALTER TABLE `tb_kompetensi_keahlian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indeks untuk tabel `tb_lembaga`
--
ALTER TABLE `tb_lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pages`
--
ALTER TABLE `tb_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pages_categories`
--
ALTER TABLE `tb_pages_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_post_categories`
--
ALTER TABLE `tb_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `tb_ekstrakurikuler`
--
ALTER TABLE `tb_ekstrakurikuler`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_imgfasilitas`
--
ALTER TABLE `tb_imgfasilitas`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kompetensi_keahlian`
--
ALTER TABLE `tb_kompetensi_keahlian`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_lembaga`
--
ALTER TABLE `tb_lembaga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pages`
--
ALTER TABLE `tb_pages`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pages_categories`
--
ALTER TABLE `tb_pages_categories`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` int(14) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_post_categories`
--
ALTER TABLE `tb_post_categories`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
