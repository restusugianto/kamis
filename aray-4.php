<?php
// Mendefinisikan array asosiatif
$mahasiswa = [
    "nama" => "Budi Santoso",
    "nim" => "12345678",
    "jurusan" => "Informatika",
    "angkatan" => 2022
];

// Menampilkan data mahasiswa
foreach ($mahasiswa as $key => $value) {
    echo "$key: $value\n";
}
?>
