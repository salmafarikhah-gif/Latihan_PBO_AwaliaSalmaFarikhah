<?php
// TiketRegular.php
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    private $tipeAudio;
    private $lokasiBaris;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $tipeAudio, $lokasiBaris) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Fungsi tambahan untuk mendapatkan jenis kelas studio
    public function getJenisStudio() {
        return "Tiket Reguler";
    }

    public function hitungTotalHarga() {
        // Mengembalikan harga dasar untuk kelas reguler
        return $this->hargaDasarTiket * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas Reguler: Kursi Standar, Audio " . $this->tipeAudio . " di Baris " . $this->lokasiBaris;
    }
}
?>