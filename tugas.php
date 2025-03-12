<?php

include 'mhs.php';
include 'matkul.php';

$mhsTI = new Mhs();
$matkul1 = new Matakuliah();

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $_nama = $_POST['nama'];
    $_nim = $_POST['nim'];

    $mhsTI->setData($_nama, $_nim);
    $matkul1->setData("A11.2023.12345","PWL",2,$_nim);
    $mhsTI->dataMatkul($matkul1->nama,$matkul1->sks,'A');

    echo "<h1>Data Mahasiswa</h1>";
    $mhsTI->printData($mhsTI->getData());
    echo "<h1>Data Matkul</h1>";
    $mhsTI->printData($mhsTI->dataMatkul($matkul1->nama,$matkul1->sks,'A'));

    exit();
}
?>