<?php
class kendaraan
{
    var $jumlahRoda ;
    var $warna;
    var $bahanBakar;
    var $harga ;
    var $merek;
    var $tahunPembuatan;

    function statusHarga () 
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }

    function statusBBM()
    { 
        if ($this->bahanBakar) $bahanBakar = 'Pertamax';
        else $bahanBakar = 'Pertalite' ;
        return $bahanBakar;
    }

    function hargaBekas()
    {
        $hargaBekas = $this->harga - ($this->harga * 0.10);
        return $hargaBekas;
    }
}

    $objekKendaraan1 = new kendaraan ();
    $objekKendaraan1->merek="Yamaha MIO";
    $objekKendaraan1->jumlahRoda="2";
    $objekKendaraan1->warna="Putih";
    $objekKendaraan1->harga="10000000";
    $objekKendaraan1->bahanBakar="Pertalite";
    $objekKendaraan1->tahunPembuatan="2007";



    $objekKendaraan2 = new kendaraan ();
    $objekKendaraan2->merek="Toyota Avanza";
    $objekKendaraan2->jumlahRoda="4";
    $objekKendaraan2->warna="Hitam";
    $objekKendaraan2->harga="100000000";
    $objekKendaraan2->bahanBakar="Pertamax";
    $objekKendaraan2->tahunPembuatan="2007";

    echo "Merek: " . $objekKendaraan1->merek;
    echo "<br>";
    echo " Jenis Roda Kendaraan: " . $objekKendaraan1->jumlahRoda;
    echo "<br>";
    echo "Warna Kendaraan: " . $objekKendaraan1->warna;
    echo "<br>";
    echo "Nominal Harga: " . $objekKendaraan1->harga;
    echo "<br>";
    echo "Status Harga Kendaraan: " . $objekKendaraan1->statusHarga();
    echo "<br>";
    echo "Status BBM: " . $objekKendaraan1->statusBBM();
    echo "<br>";
    echo "Harga Bekas (Turun 10%): " . $objekKendaraan1->hargaBekas();
    echo "<br>";
    echo "Tahun Pembuatan Kendaraan: " . $objekKendaraan1->tahunPembuatan;
    echo "<br>";
    echo "<br>";
    echo "Merek: " . $objekKendaraan2->merek;
    echo "<br>";
    echo " Jenis Roda Kendaraan: " . $objekKendaraan2->jumlahRoda;
    echo "<br>";
    echo "Nominal Harga: " . $objekKendaraan2->harga;
    echo "<br>";
    echo "Warna Kendaraan: " . $objekKendaraan2->warna;
    echo "<br>";
    echo "Status Harga Kendaraan: " . $objekKendaraan2->statusHarga();
    echo "<br>";
    echo "Status BBM: " . $objekKendaraan2->statusBBM();
    echo "<br>";
    echo "Harga Bekas (Turun 10%): " . $objekKendaraan2->hargaBekas();
    echo "<br>";
    echo "Tahun Pembuatan Kendaraan: " . $objekKendaraan2->tahunPembuatan;

    ?>


   



