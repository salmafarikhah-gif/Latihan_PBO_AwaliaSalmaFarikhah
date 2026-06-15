<?php
// TiketRegular.php
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan khusus kelas reguler
    private $tipeAudio;
    private $lokasiBaris;

    // Constructor untuk menginisialisasi properti induk dan properti baru
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $tipeAudio, $lokasiBaris) {
        // Memanggil constructor dari class induk (Tiket)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Mengimplementasikan method abstrak dari induk (kosongan dulu untuk tahap ini)
    public function hitungTotalHarga() {
        // Akan diimplementasikan di tahap Polimorfisme berikutnya
    }

    public function tampilkanInfoFasilitas() {
        // Akan diimplementasikan di tahap Polimorfisme berikutnya
    }
}
?>