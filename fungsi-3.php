<?php
// membuat fungsi
function hitungUmur($tahun_Lahir, $tahun_Sekarang){
$umur = $tahun_Sekarang - $tahun_Lahir;
return $umur;
}

echo "Umur saya adalah : ". hitungUmur(1966, 2025);
?>