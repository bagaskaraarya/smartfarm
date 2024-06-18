<?php

    include "koneksi.php";
    $namaTanaman = $_POST['namaTanaman'];
    $namaIOT = $_POST['namaIOT'];
    $pmNutrisi = $_POST['pmNutrisi'];
    $pmPh = $_POST['pmPh'];
    $pmSuhu = $_POST['pmSuhu'];
    $nutrisi = $_POST['nutrisi'];
    $ph = $_POST['ph'];
    $suhu = $_POST['suhu'];
    $idUser = $_POST['iduser'];

    $query = mysqli_query($konek, "INSERT INTO controlling
                                    VALUES('', '$namaTanaman', '$namaIOT', '$pmNutrisi', '$pmPh', '$pmSuhu', '$nutrisi', '$ph', '$suhu', '$idUser')") 
                                    or die (mysqli_error($konek));

    if($query){
        header('location: index.php');
    } else{
        echo 'Proses Input Gagal !';
    }
?>