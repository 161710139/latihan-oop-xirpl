<?php
require_once 'construct.php';

$bio= new biodata('Rafy Lewandowski','Warsawa,Poland','XI-RPL1','Aya');
echo 'Namanya...'.$bio->get_nama(). '<br>';
echo 'Tempat Lahir...'.$bio->get_tempat(). '<br>';
echo 'Kelasnya...'.$bio->get_kelas(). '<br>';
echo 'Status...'.$bio->get_status(). '<br>';
?>