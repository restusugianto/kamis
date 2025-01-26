<?php
// Mendefinisikan class Buah
class Buah {
    // Properti (atribut)
    public $nama;
    public $warna;
    public $rasa;

    // Konstruktor untuk menginisialisasi properti
    public function __construct($nama, $warna, $rasa) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }

    // Method untuk menampilkan informasi tentang buah
    public function deskripsi() {
        return "Buah ini adalah $this->nama dan warnanya $this->warna dan rasanya $this->rasa.";
    }
}

// Membuat objek dari class Buah
$apel = new Buah("Apel", "Merah", "Manis");
$jeruk = new Buah("Jeruk", "Oranye", "Asam");
$salak = new Buah("Salak", "Coklat", "Sepet");


// Menampilkan deskripsi dari objek buah
echo $apel->deskripsi() . "<br>";
echo $jeruk->deskripsi() . "<br>";
echo $salak->deskripsi() . "<br>";

?>