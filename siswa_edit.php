<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "smk1";
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Inisialisasi variabel
$nis = "";
$nama_siswa = "";
$tgl_lahir = "";
$alamat = "";
$no_wa = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cari"])) {
        // Pencarian data berdasarkan NIS
        $nis = $_POST["nis"];
        $sql = "SELECT * FROM siswa WHERE nis = '$nis'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nama_siswa = $row["nama_siswa"];
            $tgl_lahir = $row["tgl_lahir"];
            $alamat = $row["alamat"];
            $no_wa = $row["no_wa"];
        } else {
            echo "<p>Data tidak ditemukan.</p>";
        }
    } elseif (isset($_POST["update"])) {
        // Update data siswa
        $nis = $_POST["nis"];
        $nama_siswa = $_POST["nama_siswa"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $alamat = $_POST["alamat"];
        $no_wa = $_POST["no_wa"];

        $sql = "UPDATE siswa SET nama_siswa='$nama_siswa', tgl_lahir='$tgl_lahir', alamat='$alamat', no_wa='$no_wa' WHERE nis='$nis'";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Data berhasil diperbarui.</p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="post" action="">
        <label>NIS:</label>
        <input type="text" name="nis" value="<?php echo $nis; ?>" required>
        <button type="submit" name="cari">Cari</button>
        <br><br>

        <label>Nama Siswa:</label>
        <input type="text" name="nama_siswa" value="<?php echo $nama_siswa; ?>">
        <br><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
        <br><br>

        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $alamat; ?>">
        <br><br>

        <label>No. WA:</label>
        <input type="text" name="no_wa" value="<?php echo $no_wa; ?>">
        <br><br>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>