<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM user WHERE nim = '$id'";

if($connect->query($query)) {
    header("location: tampilData.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>