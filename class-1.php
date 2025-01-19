<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php
class Buah {
    // Properti
    public $nama;
    public $warna;

    // Fungsi
    function set_name($nama) {
        $this->nama = $nama;
    }
    function get_name() {
        return $this->nama;
    }
}

$apel = new Buah();
$pisang = new Buah();
$apel->set_name("apel");
$pisang->set_name("pisang");

echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
?>

</body>
</html>


