<?php

class Pegadaian {

    public $nama;
    public $pinjaman;
    public $bungaPersen = 10; 
    public $lamaAngsuran;
    public $dendaPersenPerHari = 0.0015; 
    public $keterlambatanHari;

    public function hitungBunga()
    {
        $bunga = $this->pinjaman * ($this->bungaPersen / 100);
        return $bunga;
    }

    
    public function totalPinjamanSetelahBunga()
    {
        $total = $this->pinjaman + $this->hitungBunga();
        return $total;
    }

   
    public function angsuranPerBulan()
    {
        $angsuran = $this->totalPinjamanSetelahBunga() / $this->lamaAngsuran;
        return $angsuran;
    }

    public function dendaKeterlambatan()
    {
        $denda = $this->angsuranPerBulan() * $this->dendaPersenPerHari * $this->keterlambatanHari;
        return $denda;
   }

    
    public function totalBayar()
    {
        $totalBayar = $this->angsuranPerBulan() +  $this->dendaKeterlambatan();
        return $totalBayar;
    }
}

$Pegadaian = new Pegadaian();

$Pegadaian->nama = htmlspecialchars($_POST['nama']);
$Pegadaian->pinjaman = (int) $_POST['pinjaman'];
$Pegadaian->lamaAngsuran = (int) $_POST['lama'];
$Pegadaian->keterlambatanHari = (int) $_POST['terlambat'];


echo "<h2>Toko Pegadaian Syariah</h2>";
echo "<h3>Jl. Keadilan No.16</h3>";
echo "<h3>Telp. 72353459</h3>";
echo "<hr>";


echo "Nama Nasabah : " . $Pegadaian->nama . "<br><br>";

echo "Besar Pinjaman : Rp. " . $Pegadaian->pinjaman . "<br><br>";

echo "Bunga : " . $Pegadaian->bungaPersen . "%<br><br>";

echo "Total Pinjaman : Rp. " . $Pegadaian->totalPinjamanSetelahBunga() . "<br><br>";

echo "Lama Angsuran : " . $Pegadaian->lamaAngsuran . " bulan<br><br>";

echo "Besaran Angsuran : Rp. " . $Pegadaian->angsuranPerBulan() . "<br><br>";

echo "Keterlambatan : " . $Pegadaian->keterlambatanHari . " hari<br><br>";

echo "Denda Keterlambatan : Rp. " . $Pegadaian->dendaKeterlambatan() . "<br><br>";

echo "<hr>";

echo "<b>Total Pembayaran : Rp. " . $Pegadaian->totalBayar() . "</b>";



?>
