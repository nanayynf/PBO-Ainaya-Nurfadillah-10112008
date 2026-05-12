<?php

class Kendaraan {

    private $merek, $roda, $harga, $warna, $bbm;

    public function __construct($merek, $roda, $harga, $warna, $bbm){
        $this->merek = $merek;
        $this->roda = $roda;
        $this->harga = $harga;
        $this->warna = $warna;
        $this->bbm = $bbm;
    }

    public function getMerek(){ return $this->merek; }
    public function getRoda(){ return $this->roda; }
    public function getHarga(){ return $this->harga; }
    public function getWarna(){ return $this->warna; }
    public function getBbm(){ return $this->bbm; }
}