<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Gabungan</title>
</head>
<body>
    <h1>Menu Utama</h1>
    <nav>
        <a href="?page=masuk">Masuk Data</a> |
        <a href="?page=ubah">Ubah Data</a> |
        <a href="?page=hapus">Hapus Data</a> |
        <a href="?page=cetak">Cetak Data</a>
    </nav>
    <hr>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        
        switch ($page) {
            case 'masuk':
                include 'siswa_masuk.php';
                break;
             case 'ubah':
                include 'siswa_edit.php';
                break;
            case 'hapus':
                include 'siswa_hapus.php';
                break;
            case 'cetak':
                include 'siswa_tampil.php';
                break;
            default:
                echo "<p>Halaman tidak ditemukan!</p>";
        }
    } else {
        echo "<p>Selamat datang di Aplikasi Gabungan!</p>";
    }
    ?>
</body>
</html>