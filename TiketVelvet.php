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

    // FUNGSI TAMBAHAN: Mengambil data khusus tipe Velvet dari database
    public function ambilDataTiket($koneksi) {
        // Query SQL select * from dengan kondisi spesifik kelas Velvet
        $query = "SELECT * FROM tabel_tiket WHERE jenis_studio = 'Velvet'";
        return mysqli_query($koneksi, $query);
    }

    public function hitungTotalHarga() {
        // Sesuai soal: (jumlah_kursi * hargaDasarTiket) * 1.50
        return ($this->jumlah_kursi * $this->hargaDasarTiket) * 1.50;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas Velvet: Sofa Bed, Pack Bantal/Selimut: " . $this->bantalSelimutPack . ", Pelayanan Butler: " . $this->layananButler;
    }
}
?>