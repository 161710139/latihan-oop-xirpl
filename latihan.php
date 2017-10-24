<?php
require_once 'penjumlahan.php';

$operation=new operation;
$operation->set_bilangan(21,3);
echo "<br>=========================";
echo "<br>Perhitungan Bilangan 21 dengan 3";
echo "<br>=========================";
echo "<br>Penjumlahan = ".$operation->get_penjumlahan();
echo "<br>Pengurangan = ".$operation->get_pengurangan();
echo "<br>Pembagian = ".$operation->get_pembagian();
echo "<br>Perkalian = ".$operation->get_perkalian();
?>