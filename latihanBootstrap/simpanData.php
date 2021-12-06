<?php

include('koneksi.php');

$nim          = $_POST['nim'];
$nama         = $_POST['nama'];
$telepon      = $_POST['telepon'];
$alamat       = $_POST['alamat'];

$query = "INSERT INTO user (nim, nama, telepon, alamat) VALUES ('$nim', '$nama', '$telepon','$alamat')";

if($connect->query($query)) {

    header("location: tampilData.php");

} else {

    echo "Data Gagal Disimpan!";

}

?>