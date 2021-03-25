-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2019 pada 09.29
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penomoran_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelsurat`
--

CREATE TABLE `tabelsurat` (
  `id` varchar(40) NOT NULL,
  `tgl` date NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `perihal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabelsurat`
--

INSERT INTO `tabelsurat` (`id`, `tgl`, `tujuan`, `perihal`) VALUES
('001/UPT.BKL/BKN/I/2019', '2019-01-15', 'Kepala Dinas Perhubungan (u.p. Bidang Sarana dan Prasarana Perhubungan Kota Bengkulu)', 'Permohonan Penerangan Jalan di depan Kantor UPT BKN Bengkulu\r\n'),
('002/UPT.BKL/BKN/I/2019', '2019-01-31', 'Kepala Kantor Regional VII BKN Palembang', 'Ijin Melaksanakan Simulasi CAT BKN\r\n(Kamis, 14 Februari 2019 jam 14.00 WIB s.d. Selesai di UPT BKN Bengkulu)'),
('003/UPT.BKL/BKN/I/2019', '2019-01-31', 'Kepala Pusat Pengembangan Sistem Rekrutmen ASN BKN di Jakarta', 'Ijin Melaksanakan Simulasi CAT BKN\r\n(Kamis, 14 Februari 2019 jam 14.00 WIB s.d. Selesai di UPT BKN Bengkulu)'),
('004/UPT.BKL/BKN/I/2019', '2019-01-31', 'Warga di Sekitar Batas Tanah Kantor UPT BKN Bengkulu', 'Pemberitahuan batas tanah dan pembangunan pagar yang rusak di Kantor UPT BKN Bengkulu'),
('005/UPT.BKL/BKN/I/2019', '2019-02-04', 'Kepala Unit PT. PLN (Persero) WS2JB Rayon Teluk Segara Bengkulu', 'Pengajuan Tidak Pemadaman Listrik, untuk simulasi CAT BKN di UPT BKN Bengkulu tanggal 14 Februari 2019 dan 15 Februari 2019 dari jam 08.00 s.d. 18.00 '),
('006/UPT.BKL/BKN/II/2019', '2019-02-19', 'PT Bank Rakyat Indonesia (BRI) Unit Padang Jati Kanca Bengkulu', 'Pengajuan Pinjaman BRIGUNA a.n. Ikhwan'),
('007/UPT.BKL/BKN/II/2019', '2019-02-26', 'Deputi Sinka BKN Pusat', 'Pengajuan subdomain dan hosting web UPT BKN Bengkulu'),
('008/UPT.BKL/BKN/III/2019', '2019-03-01', 'Kepala Biro Kepegawaian - Badan Kepegawaian Negara', 'Penyampaian berkas lamaran PNS pengajuan pindah ke UPT BKN di Bengkulu'),
('009/UPT.BKL/BKN/III/2019', '2019-03-05', 'Kepala Biro Kepegawaian - Badan Kepegawaian Negara', 'Penyampaian berkas lamaran PNS pengajuan pindah ke UPT BKN di Bengkulu\r\n(dari PNS Kab. Bengkulu Tengah = 3 orang yaitu 2 calon assessor, 1 Analis data'),
('010/UPT.BKL/BKN/III/2019', '2019-03-13', 'Ketua Badan Pengurus  Yayasan Pendidikan Merangin (YPM) di Bangko', 'Pengembalian Surat Permohonan Pembatalan Calon PNS a.n. Welly Fictoria Tika (CPNS Provinsi Bengkulu)');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabelsurat`
--
ALTER TABLE `tabelsurat`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
