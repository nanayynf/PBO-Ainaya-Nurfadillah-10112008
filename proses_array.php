<?php

class Mahasiswa {

    public $nama;
    public $kelas;
    public $nilai;
    public $matkul;

    public function cekKelulusan() {

        if ($this->nilai >= 80) {
            return "Status : Lulus Kuis " ;

        } elseif ($this->nilai >= 70) {
            return "Status : Lulus Kuis";

        } elseif ($this->nilai >= 60) {
            return "Status : Lulus Kuis ";

        } elseif ($this->nilai <=55) {
            return "Status : Tidak Lulus Kuis";

        } else {
            return "Status : Tidak Lulus Kuis";
        }
    }
}


//array
$data = [
    'nama'  => 'Aditya',
    'kelas' => 'SI 2',
    'nilai' => 80,
    'matkul' => 'Pemrograman Berorientasi Objek',
];

$data1 = [
    'nama'  => 'Shinta',
    'kelas' => 'SI 2',
    'nilai' => 70,
    'matkul' => 'Pemrograman Berorientasi Objek',
];

$data2 = [
    'nama'  => 'Ineu',
    'kelas' => 'SI 2',
    'nilai' => 55,
    'matkul' => 'Pemrograman Berorientasi Objek',
];

// object
$mhs = new Mahasiswa();
$mhs->nama  = $data["nama"];
$mhs->kelas = $data["kelas"];
$mhs->nilai = $data["nilai"];
$mhs->matkul = $data["matkul"];

$mhs1 = new Mahasiswa();
$mhs1->nama  = $data1["nama"];
$mhs1->kelas = $data1["kelas"];
$mhs1->nilai = $data1["nilai"];
$mhs1->matkul = $data["matkul"];

$mhs2 = new Mahasiswa();
$mhs2->nama  = $data2["nama"];
$mhs2->kelas = $data2["kelas"];
$mhs2->nilai = $data2["nilai"];
$mhs2->matkul = $data["matkul"];


//output
echo "<h2>DATA MAHASISWA 1</h2>";
echo "Nama : " . $mhs->nama . "<br>";
echo "Kelas : " . $mhs->kelas . "<br>";
echo "Mata Kuliah : " . $mhs->matkul . "<br>";
echo "Nilai : " . $mhs->nilai . "<br>";
echo $mhs->cekKelulusan();
echo "<br><br>";
echo "<hr>";

echo "<h2>DATA MAHASISWA 2</h2>";
echo "Nama : " . $mhs1->nama . "<br>";
echo "Kelas : " . $mhs1->kelas . "<br>";
echo "Mata Kuliah : " . $mhs1->matkul . "<br>";
echo "Nilai : " . $mhs1->nilai . "<br>";
echo $mhs1->cekKelulusan();
echo "<br><br>";
echo "<hr>";

echo "<h2>DATA MAHASISWA 3</h2>";
echo "Nama : " . $mhs2->nama . "<br>";
echo "Kelas : " . $mhs2->kelas . "<br>";
echo "Mata Kuliah : " . $mhs2->matkul . "<br>";
echo "Nilai : " . $mhs2->nilai . "<br>";
echo $mhs2->cekKelulusan();
echo "<hr>";

?>