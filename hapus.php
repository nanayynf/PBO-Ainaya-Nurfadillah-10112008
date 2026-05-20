<?php
include 'koneksi.php';
$id = $_GET['id'];
try {

    $query = mysqli_query($koneksi,
        "DELETE FROM user WHERE id='$id'"
    );

    if(!$query){
        throw new Exception("Hapus data gagal");
    }

} catch(Exception $e){

    echo "Error : " . $e->getMessage();
}

header("location:index.php?pesan=hapus");
?>