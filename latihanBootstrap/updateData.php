<?php

include('koneksi.php');

$nim     = $_POST['nim'];
$nama    = $_POST['nama'];
$telepon = $_POST['telepon'];
$alamat  = $_POST['alamat'];

$query = "UPDATE user SET nama = '$nama', telepon = '$telepon', alamat = '$alamat'  WHERE nim = '$nim'";

if($connect->query($query)) {
    header("location: tampilData.php");
} else {
    echo "Data Gagal Diupate!";
}

?>
