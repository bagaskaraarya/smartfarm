<?php
    include 'koneksi.php';
    $idTanaman = $_GET['idTanaman'];
	$query = mysqli_query($konek, "DELETE FROM controlling WHERE idTanaman=$idTanaman");

    if($query){
		header('location: index.php');
	}else{
		echo 'Proses Hapus Gagal ! ';
	}
?>