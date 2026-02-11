<?php

class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $diskon;
    public $uangDibayar;
    public static $pajak = 0.02;

    public function __construct($namaPembeli, $namaBarang, $hargaBarang, $jumlahBarang, $diskon, $uangDibayar){
        $this->namaPembeli = $namaPembeli;
        $this->namaBarang = $namaBarang;
        $this->hargaBarang = $hargaBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->diskon = $diskon;
        $this->uangDibayar = $uangDibayar;
    }

    public function subtotal(){
        return $this->hargaBarang * $this->jumlahBarang;
    }

    public function diskonRp(){
        return $this->subtotal() * $this->diskon;
    }

    public function pajakRp(){
        return ($this->subtotal() - $this->diskonRp()) * self::$pajak;
    }

    public function totalBayar(){
        return ($this->subtotal() - $this->diskonRp()) + $this->pajakRp();
    }

    public function kembalian(){
        return $this->uangDibayar - $this->totalBayar();
    }
}

$belanja1 = new Belanja("Naya", "Coklat", 15000, 2, 0.10, 50000);

echo "<pre>";
echo "================ WARUNG AINAYA ==================\n";
echo "Kasir   : SISTEM\n";
echo "Pembeli : " . $belanja1->namaPembeli . "\n";
echo "------------------------------------------------\n";
echo $belanja1->namaBarang . " x " . $belanja1->jumlahBarang . " @ " . number_format($belanja1->hargaBarang,0,",",".") . "\n";
echo "------------------------------------------------\n";
echo "SUBTOTAL   : Rp " . number_format($belanja1->subtotal(),0,",",".") . "\n";
echo "DISKON     : Rp " . number_format($belanja1->diskonRp(),0,",",".") . "\n";
echo "PAJAK 2%   : Rp " . number_format($belanja1->pajakRp(),0,",",".") . "\n";
echo "------------------------------------------------\n";
echo "TOTAL BAYAR: Rp " . number_format($belanja1->totalBayar(),0,",",".") . "\n";
echo "UANG BAYAR : Rp " . number_format($belanja1->uangDibayar,0,",",".") . "\n";
echo "KEMBALIAN  : Rp " . number_format($belanja1->kembalian(),0,",",".") . "\n";
echo "================================================\n";
echo "</pre>";

?>
