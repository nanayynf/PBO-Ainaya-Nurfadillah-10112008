<?php

// ================= MODEL =================
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


// ================= FACTORY =================
class KendaraanFactory {

    public static function buat($merek, $roda, $harga, $warna, $bbm){
        return new Kendaraan($merek, $roda, $harga, $warna, $bbm);
    }
}


// ================= CONTROLLER =================
class KendaraanController {

    public function getData(){

        $data = [
            ["merek"=>"Yamaha Mio","roda"=>2,"harga"=>10000000,"warna"=>"Merah","bbm"=>"Premium"],
            ["merek"=>"Toyota Yaris","roda"=>4,"harga"=>160000000,"warna"=>"Merah","bbm"=>"Premium"],
            ["merek"=>"Honda Scoopy","roda"=>2,"harga"=>13000000,"warna"=>"Putih","bbm"=>"Premium"],
            ["merek"=>"Isuzu Panther","roda"=>4,"harga"=>170000000,"warna"=>"Hitam","bbm"=>"Solar"]
        ];

        $hasil = [];

        foreach($data as $d){
            $hasil[] = KendaraanFactory::buat(
                $d["merek"],
                $d["roda"],
                $d["harga"],
                $d["warna"],
                $d["bbm"]
            );
        }

        return $hasil;
    }
}


// ================= VIEW =================
$controller = new KendaraanController();
$data = $controller->getData();

echo "<h2>DATA KENDARAAN</h2>";

echo "<table border='1' cellpadding='6'>";
echo "<tr>
<th>No</th>
<th>Merek</th>
<th>Roda</th>
<th>Harga</th>
<th>Warna</th>
<th>BBM</th>
</tr>";

$no = 1;

foreach($data as $obj){
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$obj->getMerek()."</td>";
    echo "<td>".$obj->getRoda()."</td>";
    echo "<td>Rp " . number_format($obj->getHarga(),0,',','.') . "</td>";
    echo "<td>".$obj->getWarna()."</td>";
    echo "<td>".$obj->getBbm()."</td>";
    echo "</tr>";
}

echo "</table>";

?>