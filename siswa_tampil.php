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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      
      <!-- {{-- DATATABLE --}} -->
      <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
      <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
</head>
<body>
    
    <h2>Daftar Siswa</h2>
    <a href="/kamis/siswa_masuk.php"><button>Tambah</button></a>
    <table id="tabelku">
        <thead>
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No WA</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["nis"]; ?></td>
                    <td><?php echo $row["nama_siswa"]; ?></td>
                    <td><?php echo $row["tgl_lahir"]; ?></td>
                    <td><?php echo $row["alamat"]; ?></td>
                    <td><?php echo $row["no_wa"]; ?></td>
                    <td><a href="/kamis/siswa_edit.php"><button>edit</button></a> <button>hapus</button></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data siswa</td>
            </tr>
        <?php endif; ?>
        </tbody>
        
    </table>
    <script>
        let table2 = new DataTable('#tabelku');
    </script>
</body>
</html>

<?php
// Tutup koneksi database
$conn->close();


?>