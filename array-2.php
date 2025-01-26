<?php
// Array asosiatif tentang bunga
$bunga = [
    "mawar" => [
        "warna" => "Merah",
        "harga" => 25000
    ],
    "melati" => [
        "warna" => "Putih",
        "harga" => 15000
    ],
    "anggrek" => [
        "warna" => "Ungu",
        "harga" => 30000
    ],
    "tulip" => [
        "warna" => "Kuning",
        "harga" => 35000
    ]
];

// Menampilkan informasi bunga
echo "<h2>Daftar Bunga</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Warna</th><th>Harga (IDR)</th></tr>";

foreach ($bunga as $nama => $detail) {
    echo "<tr>";
    echo "<td>{$nama}</td>";
    echo "<td>{$detail['warna']}</td>";
    echo "<td>" . number_format($detail['harga'], 0, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
