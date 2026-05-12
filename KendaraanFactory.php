<?php

require_once "Kendaraan.php";

class KendaraanFactory {

    public static function buat($merek, $roda, $harga, $warna, $bbm){
        return new Kendaraan($merek, $roda, $harga, $warna, $bbm);
    }
}