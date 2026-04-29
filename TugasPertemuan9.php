<?php

// class induk
class Tabungan {

    // properti saldo dibuat protected (encapsulation)
    // agar tidak bisa diakses langsung dari luar class
    protected $saldo;

    // constructor untuk mengisi saldo awal
    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    // method untuk menambah saldo (setor)
    protected function setor($jumlah) {
    // saldo baru = saldo lama + jumlah setor
       $this->saldo = $this->saldo + $jumlah;

    }

    // method untuk mengurangi saldo (tarik)
    protected function tarik($jumlah) {
        if ($jumlah <= $this->saldo) {
        // saldo baru = saldo lama - jumlah tarik
            $this->saldo = $this->saldo - $jumlah;
     } else {
             echo "Saldo tidak cukup!\n";
    }
}

    // getter untuk melihat saldo
    public function getSaldo() {
        return $this->saldo;
    }
}


// class anak 1
class Siswa1 extends Tabungan {

    // method untuk setor (mengakses method parent)
    public function setorUang($jumlah) {
        if ($jumlah > 0) {
            $this->setor($jumlah);
            echo "Siswa 1 berhasil setor\n";
        } else {
            echo "Jumlah harus lebih dari 0\n";
        }
    }

    // method untuk tarik
    public function tarikUang($jumlah) {
        if ($jumlah > 0) {
            $this->tarik($jumlah);
        } else {
            echo "Jumlah harus lebih dari 0\n";
        }
    }

    // method tampil saldo
    public function tampil() {
        echo "Siswa 1 : Rp " . $this->saldo . "\n";
    }
}

// class anak 2
class Siswa2 extends Tabungan {

    public function setorUang($jumlah) {
        if ($jumlah > 0) {
            $this->setor($jumlah);
            echo "Siswa 2 berhasil setor\n";
        } else {
            echo "Jumlah harus lebih dari 0\n";
        }
    }

    public function tarikUang($jumlah) {
        if ($jumlah > 0) {
            $this->tarik($jumlah);
        } else {
            echo "Jumlah harus lebih dari 0\n";
        }
    }

    public function tampil() {
        echo "Siswa 2 : Rp " . $this->saldo . "\n";
    }
}

// class anak 3
class Siswa3 extends Tabungan {

    public function setorUang($jumlah) {
        if ($jumlah > 0) {
            $this->setor($jumlah);
            echo "Siswa 3 berhasil setor\n";
        } else {
            echo "Jumlah harus lebih dari 0\n";
        }
    }

    public function tarikUang($jumlah) {
        if ($jumlah > 0) {
            $this->tarik($jumlah);
        } else {
            echo "Jumlah harus lebih dari 0\n";
        }
    }

    public function tampil() {
        echo "Siswa 3 : Rp " . $this->saldo . "\n";
    }
}

// membuat objek dari masing-masing class
$s1 = new Siswa1(1000000);
$s2 = new Siswa2(2000000);
$s3 = new Siswa3(3000000);


// menyimpan semua objek ke dalam array
$data = [
    1 => $s1,
    2 => $s2,
    3 => $s3
];

// menu tabungan
do {
    echo "\n===== MENU TABUNGAN =====\n";
    echo "1. Tampilkan Saldo\n";
    echo "2. Setor\n";
    echo "3. Tarik\n";
    echo "4. Keluar\n";
    echo "Pilih: ";

    // mengambil input dari user
    $menu = trim(fgets(STDIN));

    switch ($menu) {

        //menampilkan data
        case 1:
            echo "\n=== DATA SALDO ===\n";

            // looping untuk menampilkan semua saldo
            // i=index  s=objek siswa
            foreach ($data as $i => $s) {
                echo $i . ". Rp " . $s->getSaldo() . "\n";
            }
            break;

        // setor
        case 2:
            echo "Pilih siswa (1-3): ";
            $pilih = trim(fgets(STDIN));

            echo "Jumlah setor: ";
            $jumlah = trim(fgets(STDIN));

            // validasi input
            if (!isset($data[$pilih]) || !is_numeric($jumlah)) {
                echo "Input tidak valid!\n";
                break;
            }

            // memanggil method setor sesuai siswa
            $data[$pilih]->setorUang((int)$jumlah);
            break;

        // tarik
        case 3:
            echo "Pilih siswa (1-3): ";
            $pilih = trim(fgets(STDIN));

            echo "Jumlah tarik: ";
            $jumlah = trim(fgets(STDIN));

            // validasi input
            if (!isset($data[$pilih]) || !is_numeric($jumlah)) {
                echo "Input tidak valid!\n";
                break;
            }

            // memanggil method tarik
            $data[$pilih]->tarikUang((int)$jumlah);
            break;

        // keluar
        case 4:
            echo "Program selesai.\n";
            break;

        // default
        default:
            echo "Menu tidak valid!\n";
    }

} while ($menu != 4);

?>