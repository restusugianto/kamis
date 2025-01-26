<?php
// Mendefinisikan sebuah class
class Mobil {
    // Properti
    public $merk;
    public $warna;

    // Konstruktor untuk inisialisasi properti
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Metode untuk menampilkan informasi mobil
    public function tampilkanInfo() {
        echo "Mobil ini adalah $this->merk dengan warna $this->warna.";
    }
}

// Membuat objek dari class Mobil
$mobilSaya = new Mobil("Toyota", "Merah");

// Menampilkan informasi mobil
$mobilSaya->tampilkanInfo();
?>