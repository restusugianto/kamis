<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "smk1";

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data siswa
$sql = "SELECT nis, nama_siswa, tgl_lahir, alamat, no_wa FROM siswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Daftar Siswa</h2>
    <table>
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No WA</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["nis"]; ?></td>
                    <td><?php echo $row["nama_siswa"]; ?></td>
                    <td><?php echo $row["tgl_lahir"]; ?></td>
                    <td><?php echo $row["alamat"]; ?></td>
                    <td><?php echo $row["no_wa"]; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data siswa</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php
// Tutup koneksi database
$conn->close();
?>