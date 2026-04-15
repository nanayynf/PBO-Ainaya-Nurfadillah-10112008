<?php

class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;
    public $totalGaji;

    // Constructor
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = (int)$jamLembur;

        // Gaji pokok
        $gaji = [
            "Ib"=>1250000, "Ic"=>1300000, "Id"=>1350000,
            "IIa"=>2000000, "IIb"=>2100000, "IIc"=>2200000, "IId"=>2300000,
            "IIIa"=>2400000, "IIIb"=>2500000, "IIIc"=>2600000, "IIId"=>2700000,
            "IVa"=>2800000, "IVb"=>2900000, "IVc"=>3000000, "IVd"=>3100000
        ];

        $gajiPokok = $gaji[$this->golongan] ?? 0;
        $lembur = 15000 * $this->jamLembur;

        // Total gaji
        $this->totalGaji = $gajiPokok + $lembur;
    }

    // Destructor
    public function __destruct() {
        // optional (biar tidak terlalu ramai output)
    }
}

// ==============================
// DATA (ARRAY seperti studi kasus)
// ==============================
$data = [];

// ==============================
// MENU PROGRAM
// ==============================
do {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";

    $menu = trim(fgets(STDIN));

    switch ($menu) {

        // ======================
        // READ
        // ======================
        case 1:
            echo "\n==== DATA GAJI KARYAWAN ====\n";
            echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";

            foreach ($data as $i => $k) {
                echo ($i+1) . " | $k->nama | $k->golongan | $k->jamLembur | Rp "
                    . number_format($k->totalGaji,0,",",".") . "\n";
            }

            if (empty($data)) {
                echo "Data masih kosong!\n";
            }
            break;

        // ======================
        // CREATE
        // ======================
        case 2:
            echo "Nama: ";
            $nama = trim(fgets(STDIN));

            echo "Golongan: ";
            $gol = trim(fgets(STDIN));

            echo "Jam Lembur: ";
            $jam = trim(fgets(STDIN));

            if (!is_numeric($jam)) {
                echo "Jam lembur tidak valid!\n";
                break;
            }

            $data[] = new Karyawan($nama, $gol, $jam);
            echo "Data berhasil ditambahkan!\n";
            break;

        // ======================
        // UPDATE
        // ======================
        case 3:
            echo "Masukkan nomor data: ";
            $index = trim(fgets(STDIN)) - 1;

            if (!isset($data[$index])) {
                echo "Data tidak ditemukan!\n";
                break;
            }

            echo "Nama baru: ";
            $nama = trim(fgets(STDIN));

            echo "Golongan baru: ";
            $gol = trim(fgets(STDIN));

            echo "Jam lembur baru: ";
            $jam = trim(fgets(STDIN));

            $data[$index] = new Karyawan($nama, $gol, $jam);
            echo "Data berhasil diupdate!\n";
            break;

        // ======================
        // DELETE
        // ======================
        case 4:
            echo "Masukkan nomor data: ";
            $index = trim(fgets(STDIN)) - 1;

            if (isset($data[$index])) {
                unset($data[$index]);
                echo "Data berhasil dihapus!\n";
            } else {
                echo "Data tidak ditemukan!\n";
            }
            break;

        case 5:
            echo "Program selesai.\n";
            break;

        default:
            echo "Menu tidak valid!\n";
    }

} while ($menu != 5);

?>