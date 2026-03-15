<?php
//class
class BangunRuang{

 //properties
    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;


    //method
    public function volume(){

    // case
        switch($this->jenis){

            case "Bola":
                return 4/3 * 3.14 * $this->jari * $this->jari * $this->jari;
            break;

            case "Kerucut":
                return 1/3 * 3.14 * $this->jari * $this->jari * $this->tinggi;
            break;

            case "Limas Segi Empat":
                return 1/3 * $this->sisi * $this->sisi * $this->tinggi;
            break;

            case "Kubus":
                return $this->sisi * $this->sisi * $this->sisi;
            break;

            case "Tabung":
                return 3.14 * $this->jari * $this->jari * $this->tinggi;
            break;

        }

    }

}
 
//array data bangun
$dataBangun = [

    [
        "jenis"=>"Bola",
        "sisi"=>0,
        "jari"=>7,
        "tinggi"=>0
    ],

    [
        "jenis"=>"Kerucut",
        "sisi"=>0,
        "jari"=>14,
        "tinggi"=>10
    ],

    [
        "jenis"=>"Limas Segi Empat",
        "sisi"=>8,
        "jari"=>0,
        "tinggi"=>24
    ],

    [
        "jenis"=>"Kubus",
        "sisi"=>30,
        "jari"=>0,
        "tinggi"=>0
    ],

    [
        "jenis"=>"Tabung",
        "sisi"=>0,
        "jari"=>7,
        "tinggi"=>10
    ]

];

//tabel html
echo "<table border='1' cellpadding='6'>";

//header tabel
echo "<tr>
<th>No</th>
<th>Jenis Bangun</th>
<th>Sisi</th>
<th>Jari-jari</th>
<th>Tinggi</th>
<th>Volume</th>
</tr>";

//var no urut
$no = 1;

//perulangan
foreach($dataBangun as $d){

    //obejct
    $bangun = new BangunRuang();

    //nilai
    $bangun->jenis = $d["jenis"];
    $bangun->sisi = $d["sisi"];
    $bangun->jari = $d["jari"];
    $bangun->tinggi = $d["tinggi"];

    //manggil method
    $volume = $bangun->volume();

    //menampilkan data
    echo "<tr>";

    echo "<td>".$no."</td>";
    echo "<td>".$bangun->jenis."</td>";
    echo "<td>".$bangun->sisi."</td>";
    echo "<td>".$bangun->jari."</td>";
    echo "<td>".$bangun->tinggi."</td>";
    echo "<td>".$volume."</td>";

    echo "</tr>";


    //menambah no perulangan
    $no++;

}

echo "</table>";

?>