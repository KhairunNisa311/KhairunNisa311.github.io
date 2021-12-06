<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5($_POST['password']);

    
   
    $user_valid = mysqli_fetch_array($cek_user)

    if($user_valid) {
        session_start();
       
        $_SESSION['nama']= $user_valid['nama'];
        ?>
       