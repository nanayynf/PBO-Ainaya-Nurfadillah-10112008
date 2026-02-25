<?php

function formatRupiah($angka) {
    return "Rp " . number_format((float)$angka, 0, ",", ".");
}

class  Belanja {
    //properties
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    //method
    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungTotalDenganDiskon ($persenDiskon){
        $subtotal = $this->hitungSubtotal();
        $diskon = $persenDiskon / 100 * $subtotal;
        return $subtotal - $diskon;


    }

}

//membuat array data pembelian
$data = [
    'namaPembeli' => 'Miftah',
    'namaBarang' => 'Mie Ayam',
    'hargaBarang' => 12000,
    'jumlahBeli' => 12
];

//instansi object belanja dari class belanja
$belanja = new Belanja ();
$belanja->namaPembeli = $data["namaPembeli"];
$belanja->namaBarang = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli =$data["jumlahBeli"];

//output
echo "<h2>STRUK BELANJA WARUNG A </h2>";
echo "Pembeli : " . $belanja->namaPembeli . "<br>";
echo "Barang: " . $belanja->namaBarang . "<br>";
echo "Subtotal: Rp " . formatRupiah($belanja->hitungSubtotal()). "<br>";
echo "Total (Diskon 10%): " . formatRupiah($belanja->hitungTotalDenganDiskon(10)) . "<br>";


?>