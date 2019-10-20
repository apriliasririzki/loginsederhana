<?php
//koneksi database
include "koneksi_tabel.php";

//mengangkap data
$nama_kecamatan=$_POST['nama_kecamatan'];
$padi=$_POST['padi'];
$jagung=$_POST['jagung'];
$kacang_tanah=$_POST['kacang_tanah'];
$kedelai=$_POST['kedelai'];

//input database
mysqli_query($konek, "insert into kecamatan values('','$nama_kecamatan','$padi','$jagung','$kacang_tanah','$kedelai')");
//mengalihkan kembali
header("location:basic-table.php");
?>