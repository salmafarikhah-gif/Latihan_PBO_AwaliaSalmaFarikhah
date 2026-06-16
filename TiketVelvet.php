<?php
// TiketVelvet.php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    // Fungsi tambahan untuk mendapatkan jenis kelas studio
    public function getJenisStudio() {
        return "Tiket Velvet";
    }

    public function hitungTotalHarga() {
        // Biasanya Velvet kelas premium, misalnya harga dasar dikali 2 atau ada biaya tambahan besar
        $biayaPremium = 50000;
        return ($this->hargaDasarTiket + $biayaPremium) * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas Velvet: Sofa Bed, Pack Bantal/Selimut: " . $this->bantalSelimutPack . ", Pelayanan Butler: " . $this->layananButler;
    }
}
?>