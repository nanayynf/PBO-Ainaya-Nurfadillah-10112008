<?php

function formatRupiah($angka) {
    return "Rp " . number_format((float)$angka, 0, ",", ".");
}

class BelanjaMarket {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungDiskon($subtotal): float|int {
        if ($subtotal > 100000) {
            return $subtotal * 0.1;
        }
        return 0;
    }

    public function hitungTotal(): float|int {
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->hitungDiskon(subtotal: $subtotal);
        return $subtotal - $diskon;
    }
}

// array data pembelian
$data = [
    [
        'namaPembeli' => 'Budi',
        'namaBarang' => 'Gula 1 Kg',
        'hargaBarang' => 6500,
        'jumlahBeli' => 2
    ],
    [
        'namaPembeli' => 'Sinta',
        'namaBarang' => 'Minyak 1 L',
        'hargaBarang' => 14000,
        'jumlahBeli' => 4
    ],
];

echo "<h2> DATA TRANSAKSI 1 </h2>";

$errors1 = []; 

$nama = $data[0]["namaPembeli"];
$barang = $data[0]["namaBarang"];
$harga = $data[0]["hargaBarang"];
$jumlah = $data[0]["jumlahBeli"]; 

if (empty($nama)) {
    $errors1[] = "Nama pembeli tidak boleh kosong.";
}

if ($harga <= 0) {
    $errors1[] = "Harga harus lebih dari 0.";
}

if ($jumlah <= 0) {
    $errors1[] = "Jumlah beli harus lebih dari 0.";
}

if (!empty($errors1)) {

    foreach ($errors1 as $error) {
        echo $error . "<br>";
    }

} else {

    $belanja1 = new BelanjaMarket();
    $belanja1->namaPembeli = $nama;
    $belanja1->namaBarang = $barang;
    $belanja1->hargaBarang = $harga;
    $belanja1->jumlahBeli = $jumlah;

    $subtotal = $belanja1->hitungSubtotal();
    $diskon = $belanja1->hitungDiskon(subtotal: $subtotal);
    $total = $belanja1->hitungTotal();

    echo "Pembeli : $belanja1->namaPembeli<br>";
    echo "Barang  : $belanja1->namaBarang<br>";
    echo "Subtotal: " . formatRupiah($subtotal) . "<br>";
    echo "Diskon  : " . formatRupiah($diskon) . "<br>";
    echo "<b>Total Bayar: " . formatRupiah($total) . "</b><br><br>";
}

echo "<h2>DATATRANSAKSI 2</h2>";

$errors2 = [];

$nama   = $data[1]["namaPembeli"];   
$barang = $data[1]["namaBarang"];
$harga  = $data[1]["hargaBarang"];
$jumlah = $data[1]["jumlahBeli"];

if (empty($nama)) {
    $errors2[] = "Nama pembeli tidak boleh kosong.";
}

if ($harga <= 0) {
    $errors2[] = "Harga harus lebih dari 0.";
}

if ($jumlah <= 0) {
    $errors2[] = "Jumlah beli harus lebih dari 0.";
}

if (!empty($errors2)) {

    foreach ($errors2 as $error) {
        echo $error . "<br>";
    }

} else {

    $belanja2 = new BelanjaMarket();
    $belanja2->namaPembeli = $nama;
    $belanja2->namaBarang = $barang;
    $belanja2->hargaBarang = $harga;
    $belanja2->jumlahBeli = $jumlah;

    $subtotal = $belanja2->hitungSubtotal();
    $diskon   = $belanja2->hitungDiskon(subtotal: $subtotal);
    $total    = $belanja2->hitungTotal();

    echo "Pembeli : $belanja2->namaPembeli<br>";
    echo "Barang  : $belanja2->namaBarang<br>";
    echo "Subtotal: " . formatRupiah($subtotal) . "<br>";
    echo "Diskon  : " . formatRupiah($diskon) . "<br>";
    echo "<b>Total Bayar: " . formatRupiah($total) . "</b><br><br>";
}

?>