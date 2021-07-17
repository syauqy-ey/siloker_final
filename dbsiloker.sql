-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2021 pada 22.49
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiloker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_usaha`
--

CREATE TABLE `bidang_usaha` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bidang_usaha`
--

INSERT INTO `bidang_usaha` (`id`, `nama`) VALUES
(1, 'Teknologi Informasi dan Komunikasi'),
(2, 'Perbankan'),
(3, 'Pendidikan'),
(4, 'Transporasi'),
(5, 'Industri Nasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keahlian`
--

INSERT INTO `keahlian` (`id`, `nama`) VALUES
(1, 'Programmer'),
(2, 'Infrastruktur & Jaringan'),
(3, 'Accounting'),
(4, 'Bahasa Inggris'),
(5, 'Database'),
(6, 'Web Design');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_session`
--

CREATE TABLE `login_session` (
  `uid` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_session`
--

INSERT INTO `login_session` (`uid`, `username`, `password`, `level`) VALUES
(1, 'admin', '1534b76d325a8f591b52d302e7181331', 'admin'),
(2, 'member', '4c56ff4ce4aaf9573aa5dff913df997a', 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL,
  `deskripsi_pekerjaan` text DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `mitra_id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `deskripsi_pekerjaan`, `tanggal_akhir`, `mitra_id`, `email`) VALUES
(1, 'Dibutuhkan tenaga programmer/analyst', '2021-04-05', 1, 'hrd@bukalapak.go.id'),
(3, 'Dibutuhkan designer ', '2021-02-11', 1, 'designertanahair@gmail.go.id'),
(4, 'Dibutuhkan data analyst', '2021-04-02', 1, 'Indotecom@gmail.com'),
(5, 'Dibutuhkan digital marketing', '2021-01-25', 1, 'hrdbukalapak@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_keahlian`
--

CREATE TABLE `lowongan_keahlian` (
  `id` int(11) NOT NULL,
  `keahlian_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lowongan_keahlian`
--

INSERT INTO `lowongan_keahlian` (`id`, `keahlian_id`, `lowongan_id`) VALUES
(1, 1, 1),
(2, 5, 1),
(3, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `bidang_usaha_id` int(11) NOT NULL,
  `sektor_usaha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `alamat`, `kontak`, `telpon`, `email`, `web`, `bidang_usaha_id`, `sektor_usaha_id`) VALUES
(1, 'PT Rekayasa Industri', 'Jl Makam Pahlawan xbata No 182', 'Aries P', '081286823295', 'hrdrekin@gmail.com', 'https://rekin.co.id', 5, 2),
(4, 'Indo Tech Company', 'Jl Bunga Harapan No 16 ', 'Sudirman', '085678909704', 'indotecom@gmail.com', 'https://indotecom.co.id', 5, 3),
(5, 'PT Techlit Indonesia', 'Jl mawar raya No 35', 'Nova', '081367348938', 'techlit@gmail.com', 'https://techlit.co.id', 1, 4),
(6, 'PT Bukalapak', 'Jl Kemang No. 12', 'Zaki F', '085942029745', 'hrdbukalapak@gmail.com', 'https://bukalapak.co.id', 5, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminat_lowongan`
--

CREATE TABLE `peminat_lowongan` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `prodi_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `peminat_lowongan`
--

INSERT INTO `peminat_lowongan` (`id`, `nim`, `nama`, `alasan`, `prodi_id`, `lowongan_id`) VALUES
(1, '02201107', 'Dinda', 'Saya merasa pantas dan mampu menanggung amanah dalam pekerjaan tersebut ', 2, 1),
(2, '02201150', 'Mbayang', 'Saya berminat dan merasa mampu menanggung amanah dalam pekerjaan tersebut ', 2, 4),
(3, '02201117', 'Khairul', 'Saya berkeinginan dan merasa mampu menanggung amanah dalam pekerjaan ini ', 3, 5),
(4, '02201124', 'Yukito', 'Saya memiliki cita-cita yaitu bekerja dalam bidang ini ', 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `kode` varchar(2) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `kode`, `nama`) VALUES
(1, 'SI', 'Sistem Informasi'),
(2, 'TI', 'Teknik Informatika'),
(3, 'BD', 'Bisnis Digital');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sektor_usaha`
--

CREATE TABLE `sektor_usaha` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sektor_usaha`
--

INSERT INTO `sektor_usaha` (`id`, `nama`) VALUES
(1, 'Pemerintahan'),
(2, 'BUMN'),
(3, 'Swasta'),
(4, 'Startup');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang_usaha`
--
ALTER TABLE `bidang_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_session`
--
ALTER TABLE `login_session`
  ADD PRIMARY KEY (`uid`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lowongan_mitra1_idx` (`mitra_id`);

--
-- Indeks untuk tabel `lowongan_keahlian`
--
ALTER TABLE `lowongan_keahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lowongan_keahlian_keahlian1_idx` (`keahlian_id`),
  ADD KEY `fk_lowongan_keahlian_lowongan1_idx` (`lowongan_id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mitra_bidang_usaha_idx` (`bidang_usaha_id`),
  ADD KEY `fk_mitra_sektor_usaha1_idx` (`sektor_usaha_id`);

--
-- Indeks untuk tabel `peminat_lowongan`
--
ALTER TABLE `peminat_lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peminat_lowongan_prodi1_idx` (`prodi_id`),
  ADD KEY `fk_peminat_lowongan_lowongan1_idx` (`lowongan_id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sektor_usaha`
--
ALTER TABLE `sektor_usaha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang_usaha`
--
ALTER TABLE `bidang_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login_session`
--
ALTER TABLE `login_session`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lowongan_keahlian`
--
ALTER TABLE `lowongan_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `peminat_lowongan`
--
ALTER TABLE `peminat_lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sektor_usaha`
--
ALTER TABLE `sektor_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `fk_lowongan_mitra1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `lowongan_keahlian`
--
ALTER TABLE `lowongan_keahlian`
  ADD CONSTRAINT `fk_lowongan_keahlian_keahlian1` FOREIGN KEY (`keahlian_id`) REFERENCES `keahlian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lowongan_keahlian_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `fk_mitra_bidang_usaha` FOREIGN KEY (`bidang_usaha_id`) REFERENCES `bidang_usaha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mitra_sektor_usaha1` FOREIGN KEY (`sektor_usaha_id`) REFERENCES `sektor_usaha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `peminat_lowongan`
--
ALTER TABLE `peminat_lowongan`
  ADD CONSTRAINT `fk_peminat_lowongan_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peminat_lowongan_prodi1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
