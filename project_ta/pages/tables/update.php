<?php
//koneksi database
include "koneksi_tabel.php";

//menanglap data yang di kirim
$id_kecamatan=$_POST['id_kecamatan'];
$nama_kecamatan=$_POST['nama_kecamatan'];
$padi=$_POST['padi'];
$jagung=$_POST['jagung'];
$kacang_tanah=$_POST['kacang_tanah'];
$kedelai=$_POST['kedelai'];

//update ke database
mysqli_query($konek,"update kecamatan set nama_kecamatan='$nama_kecamatan', padi='$padi', jagung='$jagung', kacang_tanah='$kacang_tanah', kedelai='$kedelai' where id_kecamatan='$id_kecamatan'");

//mengalihkan
header("location:basic-table.php");
?>