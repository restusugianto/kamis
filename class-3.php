<?php
$objOrang = new Orang('Hasan', 'Abdullah,45');

echo $objEmployee->getNamaDepan(); // Mencetak 'Hasan'
echo $objEmployee->getNamaBelakang; // Mencetak 'Abdullah'
echo $objEmployee->getUmur; // Menteka '45'
?>