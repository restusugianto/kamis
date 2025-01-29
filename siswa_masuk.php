<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan username database Anda
$pass = ""; // Sesuaikan dengan password database Anda
$db = "smk1";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST["nis"];
    $nama_siswa = $_POST["nama_siswa"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $no_wa = $_POST["no_wa"];

    $sql = "INSERT INTO siswa (nis, nama_siswa, tgl_lahir, alamat, no_wa) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nis, $nama_siswa, $tgl_lahir, $alamat, $no_wa);
    
    if ($stmt->execute()) {
        echo "<p>Data siswa berhasil ditambahkan!</p>";
    } else {
        echo "<p>Terjadi kesalahan: " . $stmt->error . "</p>";
    }
    
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form method="post" action="">
        <label>NIS:</label>
        <input type="text" name="nis" required><br>
        <label>Nama Siswa:</label>
        <input type="text" name="nama_siswa" required><br>
        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" required><br>
        <label>Alamat:</label>
        <textarea name="alamat" required></textarea><br>
        <label>No WA:</label>
        <input type="text" name="no_wa" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>