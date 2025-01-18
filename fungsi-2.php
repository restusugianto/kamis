<?php
// membuat fungsi
function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya " .$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Muhaimin", "Hi");

echo "<hr>";

$saya = "Widiastuti";
$ucapanSalam = "Selamat Pagi";

// memanggil lagi
perkenalan($saya, $ucapanSalam);
?>
