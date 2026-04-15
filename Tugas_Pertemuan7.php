<?php

//  Class Parent
class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja){
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function getInfo(){
        return "Nama: $this->nama - Gaji: Rp " . number_format($this->gaji,0,",",".");
    }
}

// Programmer
class Programmer extends Employee {

    public function getInfo(){
        if($this->lamaKerja < 1){
            $total = $this->gaji;
        } elseif($this->lamaKerja <= 10){
            $bonus = 0.01 * $this->lamaKerja * $this->gaji;
            $total = $this->gaji + $bonus;
        } else {
            $bonus = 0.02 * $this->lamaKerja * $this->gaji;
            $total = $this->gaji + $bonus;
        }

        return "Programmer: $this->nama - Gaji: Rp " . number_format($total,0,",",".");
    }
}

//  Direktur
class Direktur extends Employee {

    public function getInfo(){
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;
        $total = $this->gaji + $bonus + $tunjangan;

        return "Direktur: $this->nama - Gaji: Rp " . number_format($total,0,",",".");
    }
}

// Pegawai Mingguan
class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stok;
    public $terjual;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stok, $terjual){
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
        $this->terjual = $terjual;
    }

    public function getInfo(){
        $persen = $this->terjual / $this->stok;

        if($persen > 0.7){
            $bonusPerItem = 0.10 * $this->hargaBarang;
        } else {
            $bonusPerItem = 0.03 * $this->hargaBarang;
        }

        $bonus = $bonusPerItem * $this->terjual;
        $total = $this->gaji + $bonus;

        return "Pegawai Mingguan: $this->nama - Gaji: Rp " . number_format($total,0,",",".");
    }
}

// Pemanggilan (tanpa array)
$p1 = new Programmer("Ainaya",5000000,5);
$p2 = new Direktur("Budi",10000000,12);
$p3 = new PegawaiMingguan("Citra",2000000,1,50000,100,80);

echo $p1->getInfo();
echo "<br>";
echo $p2->getInfo();
echo "<br>";
echo $p3->getInfo();

?>


