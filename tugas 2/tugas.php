<?php

include 'mhs.php';

$mhsTI = new Mhs();

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $_nama = $_POST['nama'];
    $_nim = $_POST['nim'];

    $mhsTI->setData($_nama, $_nim);

    echo "<h1>Data Mahasiswa</h1>";
    $mhsTI->printData($mhsTI->getData());

    exit();
}
?>