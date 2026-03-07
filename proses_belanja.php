<?php

$nama = $_POST['nama'];
$member = $_POST['member'];
$total = $_POST['total'];

$errors = [];

// Validasi nama
if (empty($nama)) {
    $errors[] = "Nama pembeli tidak boleh kosong.";
}

// Validasi member
if ($member !== "Memiliki" && $member !== "Tidak Memiliki") {
    $errors[] = "Status member tidak valid! Harus 'Memiliki' atau 'Tidak Memiliki'.";
}

// Validasi total belanja
if ($total <= 0) {
    $errors[] = "Total belanja harus lebih dari 0.";
}

if (!empty($errors)) {
    echo "<h2>Terjadi Kesalahan:</h2>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
    echo "<a href='form_belanja.php'>Kembali ke Form</a>";
    exit();  
}



$diskon = 0;

switch($member){

    case "Memiliki":

        if($total > 500000){
            $diskon = 50000;
        }
        else if($total > 100000){
            $diskon = 15000;
        }
        else{
            $diskon = 0;
        }

    break;


    case "Tidak Memiliki":

        if($total > 100000){
            $diskon = 5000;
        }
        else{
            $diskon = 0;
        }

    break;

}

$total_bayar = $total - $diskon;

echo "<h2>Hasil Pembelian</h2>";

echo "Nama Pembeli : ".$nama."<br>";
echo "Status Kartu Member: ".$member."<br>";
echo "Total Belanja : Rp ".$total."<br>";
echo "Diskon : Rp ".$diskon."<br>";
echo "Total Bayar : Rp ".$total_bayar."<br>";

?>