<?php
class Produk {

    public $nama;
    public $pinjaman;

    public $bungaPersen = 10;          
    public $lamaAngsuran = 5;          
    public $dendaPersenPerHari = 0.15 / 100; 
    public $keterlambatanHari = 40;    

    public function hitungBunga() {
        return $this->pinjaman * ($this->bungaPersen / 100);
    }

    public function totalPinjaman() {
        return $this->pinjaman + $this->hitungBunga();
    }

    public function angsuranPerBulan() {
        return $this->totalPinjaman() / $this->lamaAngsuran;
    }

    public function dendaKeterlambatan() {
        return $this->angsuranPerBulan() * $this->dendaPersenPerHari * $this->keterlambatanHari;
    }

    public function totalBayar() {
        return $this->angsuranPerBulan() + $this->dendaKeterlambatan();
    }
}


$produk1 = new Produk();
$produk1->nama = htmlspecialchars($_POST['nama']);
$produk1->pinjaman = htmlspecialchars($_POST['pinjaman']);


echo "<h2>Toko Pegadaian Syariah</h2>";
echo "<h3>Jl Keadilan No 16</h3>";
echo "<h4>Telp. 72353459</h4><hr>";

echo "Nama: $produk1->nama<br>";
echo "Besaran Pinjaman: $produk1->pinjaman<br>";
echo "Besar Bunga (10%): " . $produk1->hitungBunga() . "<br>";
echo "Total Pinjaman: " . $produk1->totalPinjaman() . "<br>";
echo "Lama Angsuran (Bulan): $produk1->lamaAngsuran<br>";
echo "Besar Angsuran / Bulan: " . $produk1->angsuranPerBulan() . "<br>";
echo "Keterlambatan Angsuran (Hari): $produk1->keterlambatanHari<br>";
echo "Denda Keterlambatan: " . $produk1->dendaKeterlambatan() . "<br>";
echo "Besaran Pembayaran: " . $produk1->totalBayar() . "<br>";

?>

