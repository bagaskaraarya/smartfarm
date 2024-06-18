<?php 
    include 'koneksi.php';
    $idTanaman = $_POST['idTanaman'];
    $namaTanaman = $_POST['namaTanaman'];
    $pmNutrisi = $_POST['pmNutrisi'];
    $pmPh = $_POST['pmPh'];
    $pmSuhu = $_POST['pmSuhu'];

    $query = mysqli_query($konek, "UPDATE controlling SET namaTanaman = '$namaTanaman', pmNutrisi = '$pmNutrisi', pmPh = '$pmPh', pmSuhu = '$pmSuhu'
    WHERE idTanaman='$idTanaman'") OR die(mysqli_error($konek));

if ($query) {
    header('location: index.php');
}else{
    echo 'Proses Edit Gagal !';
}
?>