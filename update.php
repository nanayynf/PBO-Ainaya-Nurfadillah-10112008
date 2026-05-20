<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

try {

    $query = mysqli_query($koneksi,
        "UPDATE user SET
        nama='$nama',
        alamat='$alamat',
        pekerjaan='$pekerjaan'
        WHERE id='$id'"
    );

    if(!$query){
        throw new Exception("Update data gagal");
    }

} catch(Exception $e){

    echo "Error : " . $e->getMessage();
}

header("location:index.php?pesan=update");
?>