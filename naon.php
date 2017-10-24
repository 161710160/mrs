<?php 
include_once 'index.php';

$iden1 = new identitas();
$iden2 = new identitas();
$iden3 = new identitas();
$iden4 = new identitas();
$iden5 = new identitas();

echo "Identitas Siswa".'<br>'.
'______________________________'.'<br>';

$iden1->set_nama('Angga Nur Aprizal');
$iden1->set_tl('Bandung');
$iden1->set_kelas('XI RPL 2');
$iden1->set_status('Turun Bro');

echo "Nama Siswa : ".$iden1-> get_nama().'<br>'.
'Tempat Lahir : '.$iden1-> get_tl().'<br>'.
'Kelas : '.$iden1-> get_kelas().'<br>'.
'Status : '.$iden1-> get_status().'<br>'.
'______________________________'.'<br>';


$iden2->set_nama('Kodir');
$iden2->set_tl('Bandung');
$iden2->set_kelas('XI RPL 2');
$iden2->set_status('Turun Bro');

echo "Nama Siswa : ".$iden2-> get_nama().'<br>'.
'Tempat Lahir : '.$iden2-> get_tl().'<br>'.
'Kelas : '.$iden2-> get_kelas().'<br>'.
'Status : '.$iden2-> get_status().'<br>'.
'______________________________'.'<br>';


$iden3->set_nama('Kisut');
$iden3->set_tl('Bandung');
$iden3->set_kelas('XI RPL 2');
$iden3->set_status('Turun Bro');

echo "Nama Siswa : ".$iden3-> get_nama().'<br>'.
'Tempat Lahir : '.$iden3-> get_tl().'<br>'.
'Kelas : '.$iden3-> get_kelas().'<br>'.
'Status : '.$iden3-> get_status().'<br>'.
'______________________________'.'<br>';


$iden4->set_nama('karman');
$iden4->set_tl('Bandung');
$iden4->set_kelas('XI RPL 2');
$iden4->set_status('Turun Bro');

echo "Nama Siswa : ".$iden4-> get_nama().'<br>'.
'Tempat Lahir : '.$iden4-> get_tl().'<br>'.
'Kelas : '.$iden4-> get_kelas().'<br>'.
'Status : '.$iden4-> get_status().'<br>'.
'______________________________'.'<br>';


$iden5->set_nama('Iman');
$iden5->set_tl('Bandung');
$iden5->set_kelas('XI RPL 2');
$iden5->set_status('Turun Bro');

echo "Nama Siswa : ".$iden5-> get_nama().'<br>'.
'Tempat Lahir : '.$iden5-> get_tl().'<br>'.
'Kelas : '.$iden5-> get_kelas().'<br>'.
'Status : '.$iden5-> get_status().'<br>'.
'______________________________'.'<br>';

?>