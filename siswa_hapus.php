<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smk1";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hapus'])) {
    $nis = $_POST['nis'];
    
    // Ambil data sebelum dihapus
    $sql = "SELECT * FROM siswa WHERE nis = '$nis'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Konfirmasi Penghapusan Data</h2>";
        echo "<p>NIS: " . $row['nis'] . "</p>";
        echo "<p>Nama: " . $row['nama_siswa'] . "</p>";
        echo "<p>Tanggal Lahir: " . $row['tgl_lahir'] . "</p>";
        echo "<p>Alamat: " . $row['alamat'] . "</p>";
        echo "<p>No WA: " . $row['no_wa'] . "</p>";
        
        echo "<form method='post'>";
        echo "<input type='hidden' name='nis' value='$nis'>";
        echo "<input type='submit' name='confirm' value='Ya'>";
        echo "<input type='submit' name='cancel' value='Tidak'>";
        echo "</form>";
    } else {
        echo "<p>Data tidak ditemukan.</p>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm'])) {
    $nis = $_POST['nis'];
    $sql = "DELETE FROM siswa WHERE nis = '$nis'";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Data berhasil dihapus.</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancel'])) {
    echo "<p>Penghapusan dibatalkan.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data Siswa</title>
</head>
<body>
    <h2>Hapus Data Siswa</h2>
    <form method="post">
        <label for="nis">Masukkan NIS:</label>
        <input type="text" id="nis" name="nis" required>
        <input type="submit" name="hapus" value="Cari & Hapus">
    </form>
</body>
</html>
