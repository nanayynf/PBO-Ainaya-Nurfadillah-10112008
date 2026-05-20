<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "si_gudang";

// isi nama host, username mysql, dan password mysql anda
try {

    $koneksi = mysqli_connect($host, $username, $password, $database);

    if(!$koneksi){
        throw new Exception("Koneksi database gagal");
    }

} catch(Exception $e){

    die("Error : " . $e->getMessage());
}

?>