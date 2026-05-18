<?php

class Mahasiswa {
    //properti
    public $nama; //nama mahasiswa
    public $nilai; ///nilai mahasiswa

    // constructor, otomatis dibuat saat objek dijalankan
    public function __construct($nama, $nilai) {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    // method hitung grade
    public function hitungGrade() {
        // lebih dari sama dengan 85
        if ($this->nilai >= 85) {
            return "A";
        //lebih dari sama dengan 70
        } elseif ($this->nilai >= 70) {
            return "B";
        //lebih dari sama dengan 60
        } elseif ($this->nilai >= 60) {
            return "C";
        } else {
            return "D";
        }
    }   

        // destructor, dijalankan saat objek dihapus
        public function __destruct() {
        echo "Objek nama {$this->nama} telah dihapus.\n";
    }
}


// data awal mahasiswa
$dataMahasiswa = [
    new Mahasiswa("Ainaya", 90),
    new Mahasiswa("Artha", 75),
    new Mahasiswa("Sky", 60),
    
];

// loop menu
do {
    echo "\n===== MENU NILAI =====\n";
    echo "1. Tampilkan Data Nilai\n";
    echo "2. Tambah Data\n";
    echo "3. Update Nilai\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu : ";

    $menu = trim(fgets(STDIN));

    switch ($menu) {

        // tampilkan data
        case 1:
            echo "\nTampilan Data Nilai\n";
            echo "No | Nama | Nilai | Grade\n";
 
            foreach ($dataMahasiswa as $index => $mhs) {
                echo ($index + 1) . " | "
                    . $mhs->nama . " | "
                    . $mhs->nilai . " | "
                    . $mhs->hitungGrade() . "\n";
            }
            break;

        // tambah data
        case 2:
            echo "\nTambah Data\n";

            echo "Masukkan nama : ";
            $nama = trim(fgets(STDIN));

            echo "Masukkan nilai : ";
            $nilai = trim(fgets(STDIN));
            //mengganti data lama dengan data baru
            $dataMahasiswa[] = new Mahasiswa($nama, $nilai);

            echo "Data berhasil ditambahkan!\n";
            break;

        // update nilai
        case 3:
            echo "\nUpdate Data\n";

            foreach ($dataMahasiswa as $index => $mhs) {
                echo ($index + 1) . ". " . $mhs->nama . "\n";
            }

            echo "Pilih nomor mahasiswa : ";
            $pilih = trim(fgets(STDIN));

            //mengecek apakah data ada
            //$hapus - 1, karena  dimulai dari 1, indeks array dimulai dari 0
            if (isset($dataMahasiswa[$pilih - 1])) {

                echo "Masukkan nilai baru : ";
                $nilaiBaru = trim(fgets(STDIN));
                
                //nilai baru
                $dataMahasiswa[$pilih - 1]->nilai = $nilaiBaru;

                echo "Nilai berhasil diupdate!\n";

            } else {
                echo "Nomor tidak ditemukan!\n";
            }
            break;  
            
        // hapus data
        case 4:
            echo "\nHapus Data\n";

            foreach ($dataMahasiswa as $index => $mhs) {
                echo ($index + 1) . ". " . $mhs->nama . "\n";
            }

            echo "Pilih nomor mahasiswa : ";
            $hapus = trim(fgets(STDIN));

            //cek apakah data ada
            if (isset($dataMahasiswa[$hapus - 1])) {

                // Menghapus objek dari array
                unset($dataMahasiswa[$hapus - 1]);

                //merapikan data 
                $dataMahasiswa = array_values($dataMahasiswa);

                echo "Data berhasil dihapus!\n";

            } else {
                echo "Nomor tidak ditemukan!\n";
            }
            break;

        // keluar
        case 5:
            echo "Program selesai.\n";
            break;

        default:
            echo "Menu tidak tersedia!\n";
    }

//perulangan berhenti jika menu = 5
} while ($menu != 5);

?>
