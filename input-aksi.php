<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

try {

    $query = mysqli_query($koneksi,
        "INSERT INTO user (nama, alamat, pekerjaan)
        VALUES ('$nama', '$alamat', '$pekerjaan')"
    );

    if(!$query){
        throw new Exception("Input data gagal");
    }

} catch(Exception $e){

    echo "Error : " . $e->getMessage();
}

header("location:index.php?pesan=input");
?>