<?php

    session_start();
    
    include("koneksi.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $proses = mysqli_query($konek, "SELECT * FROM akun WHERE username='$username' AND password='$password'") 
    OR die (mysqli_error($konek));
    
    $cek = mysqli_num_rows($proses);

    if($cek > 0){
        $data = mysqli_fetch_array($proses);
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data['idUser'];
        header('location: index.php');
    }else{
        header("location:login.php?pesan=gagal");
    }
?>