-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2026 at 06:11 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_ti1c_awalia salma farikhah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` varchar(50) NOT NULL,
  `nama_film` varchar(150) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(12,2) NOT NULL,
  `jenis_studio` enum('reguler','IMAX','velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(30) DEFAULT NULL,
  `kacamata_3d_id` varchar(50) DEFAULT NULL,
  `efek_gerak_fitur` varchar(50) DEFAULT NULL,
  `bantal_selimut_pack` varchar(50) DEFAULT NULL,
  `layanan_butler` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
('TKT-IMX-001', 'Avatar 3 (3D)', '2026-05-01 12:00:00', 2, '100000.00', 'IMAX', 'IMAX 12-Channel', 'Baris H', 'GOGGLE-3D-A12', NULL, NULL, NULL),
('TKT-IMX-002', 'Avatar 3 (3D)', '2026-05-01 12:00:00', 2, '100000.00', 'IMAX', 'IMAX 12-Channel', 'Baris H', 'GOGGLE-3D-A13', NULL, NULL, NULL),
('TKT-IMX-003', 'Oppenheimer: Director Cut', '2026-05-01 16:00:00', 1, '85000.00', 'IMAX', 'IMAX 6-Track', 'Baris J', NULL, NULL, NULL, NULL),
('TKT-IMX-004', 'Oppenheimer: Director Cut', '2026-05-01 16:00:00', 3, '85000.00', 'IMAX', 'IMAX 6-Track', 'Baris K', NULL, NULL, NULL, NULL),
('TKT-IMX-005', 'Interstellar Re-Release', '2026-05-03 13:00:00', 2, '90000.00', 'IMAX', 'IMAX 12-Channel', 'Baris L', NULL, 'Laser-Vibe', NULL, NULL),
('TKT-IMX-006', 'Interstellar Re-Release', '2026-05-03 13:00:00', 2, '90000.00', 'IMAX', 'IMAX 12-Channel', 'Baris M', NULL, 'Laser-Vibe', NULL, NULL),
('TKT-IMX-007', 'Dune: Part Three', '2026-05-03 20:00:00', 1, '110000.00', 'IMAX', 'IMAX 12-Channel', 'Baris G', 'GOGGLE-3D-B01', NULL, NULL, NULL),
('TKT-REG-001', 'Avengers: Secret Wars', '2026-05-01 13:00:00', 2, '50000.00', 'reguler', 'Dolby Atmos 7.1', 'Baris E', NULL, NULL, NULL, NULL),
('TKT-REG-002', 'Avengers: Secret Wars', '2026-05-01 13:00:00', 1, '50000.00', 'reguler', 'Dolby Atmos 7.1', 'Baris F', NULL, NULL, NULL, NULL),
('TKT-REG-003', 'KKN di Desa Penari 2', '2026-05-01 14:30:00', 4, '45000.00', 'reguler', 'Standard Stereo', 'Baris C', NULL, NULL, NULL, NULL),
('TKT-REG-004', 'KKN di Desa Penari 2', '2026-05-01 14:30:00', 2, '45000.00', 'reguler', 'Standard Stereo', 'Baris D', NULL, NULL, NULL, NULL),
('TKT-REG-005', 'Avatar 3', '2026-05-02 10:00:00', 2, '60000.00', 'reguler', 'Dolby Atmos', 'Baris G', NULL, '4DX-Motion', NULL, NULL),
('TKT-REG-006', 'Avatar 3', '2026-05-02 10:00:00', 1, '60000.00', 'reguler', 'Dolby Atmos', 'Baris G', NULL, '4DX-Motion', NULL, NULL),
('TKT-REG-007', 'Batman: Resurgence', '2026-05-02 19:00:00', 2, '50000.00', 'reguler', 'Dolby Atmos 7.1', 'Baris B', NULL, NULL, NULL, NULL),
('TKT-VLV-001', 'Love in Paris', '2026-05-01 15:00:00', 2, '250000.00', 'velvet', NULL, 'Baris A (Bed)', NULL, NULL, 'Premium Pack 01', 'Standard Butler'),
('TKT-VLV-002', 'Love in Paris', '2026-05-01 15:00:00', 2, '250000.00', 'velvet', NULL, 'Baris A (Bed)', NULL, NULL, 'Premium Pack 02', 'Standard Butler'),
('TKT-VLV-003', 'The Conjuring: Last Rites', '2026-05-01 21:00:00', 2, '300000.00', 'velvet', NULL, 'Baris B (Bed)', NULL, NULL, 'VIP Pack 05', 'VIP Butler-Call'),
('TKT-VLV-004', 'The Conjuring: Last Rites', '2026-05-01 21:00:00', 2, '300000.00', 'velvet', NULL, 'Baris B (Bed)', NULL, NULL, 'VIP Pack 06', 'VIP Butler-Call'),
('TKT-VLV-005', 'Gladiator III', '2026-05-02 18:00:00', 2, '250000.00', 'velvet', NULL, 'Baris C (Bed)', NULL, NULL, 'Premium Pack 09', 'Standard Butler'),
('TKT-VLV-006', 'Gladiator III', '2026-05-02 18:00:00', 2, '250000.00', 'velvet', NULL, 'Baris C (Bed)', NULL, NULL, 'Premium Pack 10', 'Standard Butler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
