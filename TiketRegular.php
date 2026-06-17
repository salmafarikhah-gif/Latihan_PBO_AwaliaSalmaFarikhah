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

    // FUNGSI TAMBAHAN: Mengambil data khusus tipe Reguler dari database
    public function ambilDataTiket($koneksi) {
        // Query SQL select * from dengan kondisi spesifik kelas reguler
        $query = "SELECT * FROM tabel_tiket WHERE jenis_studio = 'Reguler'";
        return mysqli_query($koneksi, $query);
    }

    public function hitungTotalHarga() {
         return $this->jumlah_kursi * $this->hargaDasarTiket;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas Reguler: Kursi Standar, Audio " . $this->tipeAudio . " di Baris " . $this->lokasiBaris;
    }
}
?>