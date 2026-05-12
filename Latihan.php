<?php

// Class Produk
class Produk {

    // Properti untuk menyimpan data produk
    public $namaProduk;   // menyimpan nama produk
    public $harga;        // menyimpan harga produk
    public $stok;         // menyimpan jumlah stok produk

    
    // Constructor otomatis dijalankan saat objek dibuat
    public function __construct($namaProduk, $harga, $stok) {

        // Mengisi properti dengan data input
        $this->namaProduk = $namaProduk;
        $this->harga = (int)$harga; // dikonversi ke integer
        $this->stok = (int)$stok;   // dikonversi ke integer
    }

    
    // Destructor dijalankan saat objek dihapus
    public function __destruct() {
        echo "Objek produk {$this->namaProduk} telah dihapus.\n";
    }
}


// Array untuk menyimpan banyak objek produk
$data = [];

// Data awal produk (3 produk)
$data[] = new Produk("Buku Tulis", 5000, 20);
$data[] = new Produk("Pensil", 3000, 15);
$data[] = new Produk("Penghapus", 2000, 10);


// Menu program
// Perulangan agar menu terus tampil sampai user memilih keluar
do {

    // Menampilkan menu
    echo "\n===== MENU TOKO =====\n";
    echo "1. Tampilkan Data Produk\n";
    echo "2. Tambah Produk\n";
    echo "3. Update Produk\n";
    echo "4. Hapus Produk\n";
    echo "5. Keluar\n";
    echo "Pilih menu : ";

    // Mengambil input user
    $menu = trim(fgets(STDIN));

    
    // Percabangan menu
    switch ($menu) {

        // READ (MENAMPILKAN DATA)
        case 1:

            echo "\n===== DATA PRODUK =====\n";
            echo "No | Nama Produk | Harga | Stok\n";
            echo "----------------------------------------\n";

            // Jika data kosong
            if (empty($data)) {

                echo "Data produk masih kosong!\n";

            } else {

                // Looping menampilkan data
                foreach ($data as $i => $p) {

                    echo ($i + 1) . " | " .
                         $p->namaProduk . " | Rp " .
                         number_format($p->harga, 0, ",", ".") . " | " .
                         $p->stok . "\n";
                }
            }

            break;


        // CREATE (TAMBAH PRODUK)
        case 2:

            echo "Masukkan nama produk : ";
            $nama = trim(fgets(STDIN));

            echo "Masukkan harga : ";
            $harga = trim(fgets(STDIN));

            echo "Masukkan stok : ";
            $stok = trim(fgets(STDIN));

            // Validasi harga dan stok harus angka
            if (!is_numeric($harga) || !is_numeric($stok)) {

                echo "Harga dan stok harus berupa angka!\n";
                break;
            }

            // Membuat objek baru lalu dimasukkan ke array
            $data[] = new Produk($nama, $harga, $stok);

            echo "Produk berhasil ditambahkan!\n";

            break;


        // UPDATE (UBAH PRODUK)
        case 3:

            echo "Pilih nomor produk yang akan diupdate : ";
            $index = trim(fgets(STDIN)) - 1;

            // Cek apakah data ada
            if (!isset($data[$index])) {

                echo "Produk tidak ditemukan!\n";
                break;
            }

            echo "Nama baru : ";
            $nama = trim(fgets(STDIN));

            echo "Harga baru : ";
            $harga = trim(fgets(STDIN));

            echo "Stok baru : ";
            $stok = trim(fgets(STDIN));

            // Validasi angka
            if (!is_numeric($harga) || !is_numeric($stok)) {

                echo "Harga dan stok harus angka!\n";
                break;
            }

            // Mengganti data lama dengan objek baru
            $data[$index] = new Produk($nama, $harga, $stok);

            echo "Produk berhasil diupdate!\n";

            break;


        // DELETE (HAPUS PRODUK)
        case 4:

            echo "Pilih nomor produk yang akan dihapus : ";
            $index = trim(fgets(STDIN)) - 1;

            // Cek apakah data ada
            if (isset($data[$index])) {

                // Menghapus data dari array
                unset($data[$index]);

                // Merapikan index array
                $data = array_values($data);

                echo "Produk berhasil dihapus!\n";

            } else {

                echo "Produk tidak ditemukan!\n";
            }

            break;


        // EXIT
        case 5:

            echo "Program selesai.\n";

            break;


        // Jika input menu salah
        default:

            echo "Menu tidak valid!\n";
    }

    
// Program berhenti jika menu = 5
} while ($menu != 5);

?>