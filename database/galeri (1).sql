-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 05:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeri`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama_album`, `deskripsi`, `tanggal`) VALUES
(1, 'Mobil Ferari', 'Ferrari adalah sebuah produsen mobil super dan mobil balap asal Italia berperforma tinggi yang berbasis di Maranello, Italia. Ferrari didirikan oleh Enzo Ferrari pada tahun 1929, sebagai \"Scuderia Ferrari\", perusahaan yang mensponsori para pembalap dan membuat mobil balap sebelum pindah ke produksi kendaraan komersial yang dikenali sebagai Ferrari pada tahun 1947. Sepanjang sejarahnya, perusahaan ini telah berpartisipasi paling lama dalam dunia balap, terutama di Formula Satu, di mana telah sukses besar.', '2024-02-29'),
(2, 'Mobil BMW', 'BMW (singkatan untuk Bayerische Motoren Werke, atau dalam Bahasa Inggris, Bavarian Motor Works), adalah sebuah perusahaan otomotif Jerman yang memproduksi mobil dan sepeda motor. BMW didirikan pada tahun 1916 oleh Franz Josef Popp. BMW AG adalah perusahaan induk dari merk mobil MINI dan Rolls-Royce, dan, dulunya Rover. BMW dikenal sebagai salah satu perusahaan mobil mewah dengan performa tinggi, dan juga salah satu perusahaan mobil pertama yang menggunakan teknologi ABS.', '2024-02-28'),
(3, 'Mobil Honda', 'Honda Motor Company, Ltd. (Jepang: 本田技研工業株式会社, Hepburn: Honda Giken Kōgyō KK, IPA: [honda] ( simak); /ˈhɒndə/; atau biasa dikenal sebagai Honda) adalah sebuah konglomerat multinasional publik asal Jepang yang memproduksi mobil, sepeda motor, dan peralatan daya. Perusahaan ini berkantor pusat di Minato, Tokyo, Jepang.', '2024-02-28'),
(4, 'Mobil Toyota', 'Toyota adalah salah satu produsen mobil terbesar di dunia. Perusahaan yang bermarkas di Tokyo (Jepang) ini didirikan pada 28 Agustus 1937, 82 tahun lalu. Pendirinya adalah Kiichiro Toyoda, anak tertua dari Sakichi Toyoda sang pencetus industri Toyota yang semula membuat mesin jahit pada awal 1900-an.', '2024-02-28'),
(5, 'Mobil Mazda', 'Mazda memulai sejarahnya sebagai sebuah produsen sumbat yang didirikan di Hiroshima, Jepang pada tanggal 30 Januari 1920 dengan nama Toyo Cork Kogyo Co., Ltd,. Pada tahun 1927, Toyo Cork Kogyo mengubah namanya menjadi Toyo Kogyo Co., Ltd. Pada akhir dekade 1920-an, perusahaan ini diselamatkan dari kebangkrutan oleh Hiroshima Saving Bank dan sejumlah pebisnis lain di Hiroshima. Pada tahun 1931, Toyo Kogyo beralih dari produksi peralatan ke produksi kendaraan dengan memperkenalkan bajaj Mazda-Go. Toyo Kogyo juga memproduksi senjata untuk militer Jepang selama Perang Dunia II, terutama senapan tipe 99 seri 30 hingga 35. Pada tahun 1984, perusahaan ini resmi mengadopsi nama Mazda, walaupun semua kendaraan buatannya telah dijual dengan nama Mazda sejak perusahaan ini didirikan. Pada tahun 1960, Mazda R360 diperkenalkan, dan dua tahun kemudian, Mazda Carol juga diperkenalkan.', '2024-02-28'),
(6, 'Mobil Porsche', 'Insiyur Austria, Ferdinand Porsche mendirikan \"Dr. Ing. h. c. F. Porsche GmbH\" di Austria pada tahun 1931, dan kemudian memindahkan kantor pusatnya ke pusat kota Stuttgart. Awalnya, perusahaan ini bergerak di bidang konsultasi pengembangan dan pengerjaan mobil, dan tidak merakit mobil dibawah namanya sendiri. Salah satu tugas pertama perusahaan ini, datang dari pemerintah Jerman yang ingin memproduksi mobil rakyat berjuluk \"Volkswagen\". Perusahaan ini kemudian menghasilkan Volkswagen Beetle, yang merupakan salah satu desain mobil tersukses sepanjang sejarah. Porsche 64 yang dikembangkan pada tahun 1939 pun menggunakan banyak komponen dari Beetle.', '2024-02-28'),
(7, 'Mobil Daihatsu', 'Daihatsu dibentuk pada tanggal 1 Maret 1951 sebagai bagian dari restrukturisasi besar-besaran terhadap Hatsudoki Seizo Co. Ltd yang didirikan pada tahun 1907. Pendirian Hatsudoki sangat dipengaruhi oleh civitas dari Departemen Teknik Universitas Osaka, yang ingin mengembangkan mesin berbahan bakar solar untuk kendaraan kecil. Sejak pertama kali didirikan hingga tahun 1930, saat sebuah purwarupa truk tiga roda diajukan, fokus Hatsudoki terutama adalah mesin uap dan kereta untuk Japanese National Railways. Hatsudoki lalu fokus pada mesin diesel perkeretaapian, melalui kerja sama dengan Niigata Engineering dan Shinko Engineering. Sebelum mulai memproduksi mobil, kompetitor utama perusahaan ini di Jepang adalah Yanmar yang juga memproduksi mesin diesel stasioner.', '2024-02-28'),
(8, 'Mobil Nissan', 'Nissan Motor Co., Ltd. (bahasa Jepang: 日産自動車株式会社, Nissan Jidōsha Kabushiki-gaisha) (TYO: 7201), biasanya disingkat sebagai Nissan (US /ˈniːsɑːn/ atau UK /ˈnɪsæn/; bahasa Jepang: [nisːaɴ]) adalah sebuah produsen otomotif multinasional asal Jepang. Merek ini merupakan divisi utama dari Grup Nissan. Nissan dulunya dipasarkan dengan merek Datsun sampai tahun 1983. Kantor utamanya terletak di wilayah Ginza dari Chūō-ku, Tokyo tetapi Nissan merencanakan akan memindahkan kantor utama mereka ke Yokohama, Kanagawa pada 2010, di mana konstruksi sudah dimulai pada 2007. Pada tahun 2011, mereka resmi memindahkan kantor pusat ke Nishi-ku, Yokohama.', '2024-02-28'),
(9, 'Mobil lexus', 'Lexus (Jepang: レクサス) adalah sebuah merek mobil mewah yang digunakan oleh Toyota Motor Corporation di Amerika Utara, Timur Tengah, Eropa, Australia, Asia (dipasarkan di Jepang pada 2005) dan Selandia Baru. Lexus pertama kali diperkenalkan tahun 1989 di Amerika Serikat, dan sekarang menjadi merek dengan penjualan mobil mewah terbesar dari Jepang. Pada tahun 2006, Lexus dijual di 70 negara di seluruh dunia. Kantor Pusat Lexus berada di Toyota, Aichi, Jepang.', '2024-02-28'),
(10, 'Mobil Wuling', 'Wuling Motors (Hanzi: 五菱汽车) adalah sebuah merek kendaraan asal Liuzhou, Guangxi, Tiongkok. Merek ini dijalankan oleh perusahaan Liuzhou Wuling Automobile Industry Co., Ltd., sebuah perusahaan patungan oleh Wuling Group dan Dragon Hill Holdings Limited (HK0305).Wuling Motors memproduksi kendaraan seperti mobil MPV; mesin kendaraan; dan suku cadang kendaraan. Wuling Motors kemudian melakukan join ventures bersama dengan SAIC (Shanghai Automotive Industry Corporation) dan GM (General Motors) membentuk SAIC-GM-Wuling atau SGMW asal Tiongkok yang lahir pada tanggal 11 November 1982. SGMW berhasil mencapai volume penjualan hingga 2,13 juta unit di tahun 2016 dan mendapatkan pengakuan global.', '2024-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `foto`, `judul`, `deskripsi`, `tanggal`, `lokasi`, `id_album`) VALUES
(3, '', '123', 'Toyota Raize memiliki 16 gambar eksterior, diantaranya Tampak Depan Bawah, Tampak Samping, Tampak belakang serong, Tampak Depan, Tampak belakang, Tampak Grille, Fog lamp depan, Lampu depan, lampu belakang, Drivers Side Mirror Front Angle, handle pintu, Pelek, Tampak wiper, Tampak belakang, Branding, Tampak kanan.', '2024-02-28', '123', 5);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_foto`, `id_user`, `isi`, `tanggal`) VALUES
(4, 3, 0, 'Foto ini sangat bagus', '2024-02-29'),
(5, 3, 0, 'Foto ini sangat bagus dan keren', '2024-02-29'),
(6, 3, 0, 'Foto ini sangat bagus', '2024-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id_like` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(4) NOT NULL,
  `id_user_user` int(4) NOT NULL,
  `nama` varchar(2555) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(151) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_user_user`, `nama`, `email`, `jk`, `alamat`) VALUES
(1, 3, 'jessy', 'jessy@gmail.com', 'Perempuan', 'Puri Loka'),
(2, 4, 'Ferdi', 'ferdiok@gmail.com', 'Laki-Laki', 'Glory Home Blok b2 2b'),
(3, 5, 'rizki', 'rizky23@gmail.com', 'Laki-Laki', 'batam centre ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(3, 'jessy', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(4, 'ferdi', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(5, 'rizki', 'c4ca4238a0b923820dcc509a6f75849b', 3),
(6, '1', 'c4ca4238a0b923820dcc509a6f75849b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id_like`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
