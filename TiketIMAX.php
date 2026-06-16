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

    // Fungsi tambahan untuk mendapatkan jenis kelas studio
    public function getJenisStudio() {
        return "Tiket IMAX";
    }

    public function hitungTotalHarga() {
        // Biasanya IMAX ada biaya tambahan, misalnya ditambah 25000 per kursi
        $biayaTambahan = 25000;
        return ($this->hargaDasarTiket + $biayaTambahan) * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas IMAX: Layar Lebar 3D, Kacamata ID: " . $this->kacamata3dId . ", Efek Gerak: " . $this->efekGerakFitur;
    }
}
?>