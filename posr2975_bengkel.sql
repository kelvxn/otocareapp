-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Bulan Mei 2023 pada 17.07
-- Versi server: 10.2.44-MariaDB-cll-lve
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posr2975_bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bengkel`
--

CREATE TABLE `bengkel` (
  `id_bengkel` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_owner` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bengkel`
--

INSERT INTO `bengkel` (`id_bengkel`, `nama`, `alamat`, `latitude`, `longitude`, `deskripsi`, `gambar`, `id_owner`) VALUES
(1, 'Bengkel Borobudur', 'Jl. Zainal Zakse No. 64 Malang', '-7.988100', '112.637900', 'Direkomendasikan untuk melakukan servis terhadap kendaraan Anda. Dijamin cepat dan tepat.', 'IMG-20230502-WA0027.jpg', 1),
(2, 'Bengkel Kalpataru', 'Jl. A. Yani No. 18-D Malang', '-7.590470', '111.431290', 'Bengkel ini menjadi pilihan yang tepat untuk Anda kunjungi. Memiliki layanan yang bagus.', '0020.jpg', 2),
(3, 'AS Motor bengkel', 'Jl. S Parman No. 141 Malang', '-7.950150', '112.639540', 'Pengerjaan service kendaraan dilakukan dengan cepat dan memiliki hasil yang sangat baik.', '17.jpg', 3),
(4, 'Enjoynering garage 2', 'Jl. Letjen Sutoyo No. 43 Malang', '-6.326510', '108.323890', 'Dapat dipercaya untuk memperbaiki kendaraan Anda jika kendaraan Anda memiliki masalah.', '19.jpg', 4),
(5, 'Bengkel Sujoyo', 'Jalan Karangasem no 12 Batu', '-488525225', '-4289527972', 'Pengerjaan service cepat untuk segala kendala yang dialami kendaraan Anda', 'bengkel1.jpg', 5),
(26, 'Bengkel Multi Brand', 'Jl Bendungan Wonogiri No 10', '-52525242443', '-7248582680', 'Rekomendasi bengkel terpercaya, cepat, dan menjadi pilihan untuk dikunjungi', 'bengkel2.jpg', 16),
(30, 'Bengkel MotorPlus', 'Jalan Danau Buyan G7', '-525252424425', '-72485826896', 'Rekomendasi bengkel cepat, layanan lengkap, dan harga yang terjangkau', 'bengkel3.jpg', 14),
(35, 'Bengkel Sakti Jaya', 'Jalan Raya Ciputra', '-525252424425', '-72485826896', 'Service untuk motor anda sangat cepat, terpercaya, dan bergaransi', 'bengkel4.jpg', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_bengkel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `nama`, `harga`, `deskripsi`, `id_bengkel`) VALUES
(1, 'Ganti oli', 38000, 'Servis mengganti oli untuk kendaraanmu agar mesinnya lebih terpacu dan performanya semakin baik.', 1),
(2, 'Ganti Aki', 145000, 'Servis mengganti aki untuk kendaraanmu agar mesinnya lebih terpacu dan performanya semakin baik.', 1),
(3, 'Ganti ban', 125000, 'Servis mengganti ban untuk kendaraanmu agar mesinnya lebih terpacu dan performanya semakin baik.', 1),
(4, 'Ganti Busi', 13000, 'Servis mengganti rem untuk kendaraanmu agar mesinnya lebih terpacu dan performanya semakin baik.', 1),
(11, 'Ganti Filter Udara', 59000, 'Servis mengganti filter udara untuk kendaraanmu agar mesinnya lebih terpacu dan performanya semakin baik.', 1),
(13, 'Ganti Kampas Rem', 45000, 'Servis mengganti kampas rem untuk kendaraanmu agar mesinnya lebih terpacu dan performanya semakin baik.', 2),
(18, 'Tune Up Motor', 85000, 'Untuk biaya Tune Up Motor tersebut sudah mencakup pengecekan tekanan ban, kondisi lampu motor, kondisi saringan udara, dan pengecekan lampu sen', 4),
(19, 'Ganti Oli Gardan', 23000, 'Oli gardan memiliki fungsi sebagai pelumas gir-gir yang terdapat di dalam CVT. Oli ini cukup awet jika dibandingkan dengan oli mesin', 26),
(22, '1', 1, '1', 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `status` enum('menunggu','diservis','selesai') NOT NULL,
  `id_bengkel` int(100) NOT NULL,
  `id_servis` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `tipe`, `merk`, `status`, `id_bengkel`, `id_servis`) VALUES
(1, 'motor', 'yamaha', 'selesai', 1, 1),
(3, 'motor', 'vario', 'selesai', 3, 3),
(4, 'motor', 'beat', 'diservis', 4, 4),
(5, 'motor', 'vario', 'menunggu', 5, 5),
(25, 'mobil', 'inova', 'menunggu', 1, 22),
(29, 'motor', 'yamahaaaaa', 'menunggu', 1, 23),
(30, 'motor', 'yamaha', 'selesai', 4, 25),
(31, 'motor', 'honda', 'menunggu', 1, 34),
(32, 'motor', 'supra', 'selesai', 26, 26),
(39, '1', '1', 'selesai', 38, 32),
(40, 'vario', 'vario', 'menunggu', 1, NULL),
(41, 'Matic', 'Vario', 'selesai', 1, NULL),
(42, 'matic', 'beat', 'diservis', 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `servis`
--

CREATE TABLE `servis` (
  `id_servis` int(100) NOT NULL,
  `id_bengkel` int(100) NOT NULL,
  `id_kendaraan` int(100) NOT NULL,
  `id_customer` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya` int(255) NOT NULL,
  `status` enum('order','belum dibayar','sudah dibayar') NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `servis`
--

INSERT INTO `servis` (`id_servis`, `id_bengkel`, `id_kendaraan`, `id_customer`, `tanggal`, `biaya`, `status`, `deskripsi`) VALUES
(1, 1, 1, 6, '2023-03-31', 22, 'sudah dibayar', 'ganti ban'),
(3, 3, 3, 6, '2023-03-09', 200000, 'sudah dibayar', 'ganti aki'),
(4, 4, 4, 6, '2023-03-09', 200000, 'sudah dibayar', 'ganti oli'),
(5, 5, 5, 6, '2023-03-10', 400000, 'belum dibayar', ''),
(22, 1, 25, 6, '2023-03-25', 400000, 'sudah dibayar', 'wbwbbwb'),
(23, 1, 29, 6, '2023-03-15', 400000, 'sudah dibayar', 'ddd'),
(25, 4, 30, 7, '2023-03-22', 400000, 'sudah dibayar', 'gwrwhh'),
(26, 26, 32, 6, '2023-03-26', 500000, 'sudah dibayar', 'iya'),
(32, 38, 39, 23, '2023-04-10', 1, 'sudah dibayar', '1'),
(33, 1, 0, 39, '2023-05-05', 20000, 'belum dibayar', 'Ganti oli'),
(34, 1, 31, 40, '2023-05-05', 10000, 'sudah dibayar', 'Ganti ban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `role` enum('customer','owner','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `telp`, `alamat`, `img`, `role`) VALUES
(1, 'Bengkel  Borobudur', 'admin@gmail.com', 'admin', '087653124211', 'Jl. Zainal Zakse No. 64 Malang', '02.jpg', 'owner'),
(2, 'Dhea Fanny Putri', 'weh', 'weh', '0889789796', 'Jalan danau ranau 1 G2b NO 12 ', '', 'owner'),
(3, 'userrr', 'user1', 'user1', '0829482343124', 'fsda fdaadfaadsv', '', 'owner'),
(4, 'Enjoynering Garage ', 'joko', '123', '085786770987', 'Jl. Letjen Sutoyo No. 43 Malang', '', 'owner'),
(5, 'user3', 'user3', '', '0787797', 'gkthktuyukyu', '23.jpeg', 'owner'),
(6, 'Budi Suciptooooo', 'user', 'user', '0758278265287528', 'Jl Rancake No 12 Batu', '22.jpeg', 'customer'),
(7, 'admin', 'halo', '123', '063465226', 'hdhahahahrtr', '1.jpg', 'customer'),
(8, 'Dhea Fanny Putri', 'hai', '123', '07318744912', '', '1.png', 'admin'),
(9, 'haha', 'haha', '123', '04729572', 'fvdvba', 'gege', 'owner'),
(12, 'adminz', 'adminz', 'adminz', '0524252466', 'jklsdshadlyalhlkdahllkda', NULL, 'admin'),
(14, 'Betelgeuse Vilmo', 'betelgeuse', '12345678', '08957383718134', 'Jl Pamekasan', '4.png', 'owner'),
(15, 'Percobaan User', 'usercoba', '12345678', '07429797429', 'Jl jfkajfkjke', '6.jpg', 'customer'),
(16, 'Bengkel Multi Brand', 'ownercoba', '12345678', '089749279500', 'Jl Bendungan Wonogiri No 10', '7.jpg', 'owner'),
(17, 'Percobaan Admin', 'admincoba', '12345678', '08958249727', 'Jl fwhfhiowgwsabnnnr', NULL, 'admin'),
(19, 'dada', '44252', '5252452', '2522', '25524', NULL, 'owner'),
(22, 'ewvebw', 'brw', '123', '3134141', 'jklsdshadlyalhlkdahllkda', NULL, 'owner'),
(23, '1', '1', '1', '123', '1', '', 'customer'),
(24, '2', '2', '2', '2', '2', '', 'owner'),
(25, '3', '3', '3', '3', '3', '', 'admin'),
(28, 'Erli', 'Erli', '123', '085546455099', 'wonogiri', NULL, 'customer'),
(31, 'melisa', 'melmel', '123', '12345678', 'dheafanny@gmail.com', NULL, 'customer'),
(33, 'p', 'p', 'p', '1', 'p', NULL, 'customer'),
(34, 'aurell', 'aurell@gmail.com', '123456789', '089685857935', 'malang', NULL, 'customer'),
(39, 'Erliana Fajarwatiii', 'Erlia', '12345', '085546608955', 'Jl. Danau Ranau Sawojajar Malang', NULL, 'customer'),
(40, 'Aulia Jena', 'aulia', '123', '12345678', 'jember', NULL, 'customer'),
(41, 'Dinda', 'dindarahma', '17Juni2003', '081231132506', 'Malang', NULL, 'customer'),
(42, 'Rohma', 'Rohma', '07September2002', '085659012904', 'Jl. Bendungan sutami', NULL, 'customer'),
(43, 'Dania Eka Ayuningtyas', 'daniaatyas', 'daniacantik20', '082131860528', 'Jl. Kawi ', NULL, 'customer'),
(44, 'Adiftya Bayu Prihandicha', 'Adfbyu', 'adf14byu1202', '081456103595', 'Pakisreji', NULL, 'customer'),
(45, 'f', 'gg@gmail.com', '11111111', '0987654321', 'blabla', NULL, 'admin'),
(46, 'f', 'blabla@gmail.com', '11111111', '372719294848', 'wu', NULL, 'admin'),
(47, 'Elfonda', 'Altair2105', 'assassin', '08231', 'P', 'IMG_20230505_124959.jpg', 'customer'),
(48, 'MUHAMMAD ZAKY RAHMATSYAH', 'zaky123', '123123', '0813458164689', 'Malang', NULL, 'owner'),
(50, 'Zaky 123', 'Hehehe', '234234', '08646738164', 'Malang', NULL, 'customer'),
(51, 'Victory Kuriakos Abednego', 'Victory', 'vicy', '082228947708', 'Jl. Terusan Surabaya', NULL, 'customer'),
(52, 'Owner', 'Owner', 'owmee', '08123456789', 'Owner', NULL, 'owner'),
(53, 'Azarya', 'Azarya', 'aza', '0823', 'Aza', NULL, 'admin'),
(56, 'alv', 'alv@gmail.com', '12345678', '092707337464', 'pasuruan', 'BANNER PSIII-01.png', 'customer'),
(57, 'faradhila', 'saffa', 'faradhila', '085855025060', 'jl danau kelimutu', NULL, 'customer'),
(58, 'Waduh', 'aku@mail.com', 'qwerty123', '087970878', 'Kediri', NULL, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bengkel`
--
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id_bengkel`),
  ADD UNIQUE KEY `id_owner` (`id_owner`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD UNIQUE KEY `id_servis` (`id_servis`),
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indeks untuk tabel `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id_servis`),
  ADD UNIQUE KEY `id_kendaraan` (`id_kendaraan`),
  ADD KEY `id_user` (`id_customer`),
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id_bengkel` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `servis`
--
ALTER TABLE `servis`
  MODIFY `id_servis` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bengkel`
--
ALTER TABLE `bengkel`
  ADD CONSTRAINT `bengkel_ibfk_1` FOREIGN KEY (`id_owner`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_bengkel`) REFERENCES `bengkel` (`id_bengkel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
