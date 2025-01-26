<?php

// Mendefinisikan class Buku
class Buku {
    // Atribut (properties) untuk class Buku
    public $judul;
    public $pengarang;
    public $tahunTerbit;

    // Konstruktor untuk menginisialisasi objek Buku
    public function __construct($judul, $pengarang, $tahunTerbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
    }

    // Method untuk menampilkan informasi buku
    public function tampilkanInfo() {
        echo "Judul: " . $this->judul . "<br>";
        echo "Pengarang: " . $this->pengarang . "<br>";
        echo "Tahun Terbit: " . $this->tahunTerbit . "<br><br>";
    }
}

// Membuat objek dari class Buku
$buku1 = new Buku("Belajar PHP untuk Pemula", "Budi Santoso", 2023);
$buku2 = new Buku("Dasar-Dasar Pemrograman PHP", "Joko Widodo", 2022);

// Menampilkan informasi buku
$buku1->tampilkanInfo();
$buku2->tampilkanInfo();

?>