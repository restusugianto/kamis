<?php
// Array asosiatif tentang buah
$buah = [
    "apel" => ["warna" => "merah", "rasa" => "manis", "harga_per_kg" => 25000],
    "pisang" => ["warna" => "kuning", "rasa" => "manis", "harga_per_kg" => 15000],
    "jeruk" => ["warna" => "oranye", "rasa" => "asam", "harga_per_kg" => 20000]
];

// Menampilkan informasi buah
foreach ($buah as $nama => $info) {
    echo "Buah: $nama\n";
    echo "Warna: {$info['warna']}\n";
    echo "Rasa: {$info['rasa']}\n";
    echo "Harga per kg: Rp " . number_format($info['harga_per_kg'], 0, ',', '.') . "\n";
    echo "<br> . <br>";
}
?>