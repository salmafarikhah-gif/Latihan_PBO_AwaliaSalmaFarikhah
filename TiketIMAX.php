<?php
// TiketIMAX.php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    private $kacamata3dId;
    private $efekGerakFitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    // FUNGSI TAMBAHAN: Mengambil data khusus tipe IMAX dari database
    public function ambilDataTiket($koneksi) {
        // Query SQL select * from dengan kondisi spesifik kelas IMAX
        $query = "SELECT * FROM tabel_tiket WHERE jenis_studio = 'IMAX'";
        return mysqli_query($koneksi, $query);
    }

    public function hitungTotalHarga() {
        $biayaTambahan = 25000; 
        return ($this->hargaDasarTiket + $biayaTambahan) * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas IMAX: Layar Lebar 3D, Kacamata ID: " . $this->kacamata3dId . ", Efek Gerak: " . $this->efekGerakFitur;
    }
}
?>