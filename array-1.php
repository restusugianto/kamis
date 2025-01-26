<?php
// Membuat array asosiatif
$mahasiswa = array(
    "nama" => "Budi",
    "umur" => 21,
    "jurusan" => "Informatika",
    "alamat" => "Jl. Raya No. 10",
    "kota" => "Malang",
    "kodePos" => "65121"
);

// Menampilkan nilai dari array asosiatif
echo "Nama: " . $mahasiswa["nama"] . "<br>";
echo "Umur: " . $mahasiswa["umur"] . "<br>";
echo "Jurusan: " . $mahasiswa["jurusan"] . "<br>";
echo "Alamat: " . $mahasiswa["alamat"] . "<br>";
echo "Kota: " . $mahasiswa["kota"] . "<br>";
echo "Kode Pos :" . $mahasiswa["kodePos"] . "<br>";
?>