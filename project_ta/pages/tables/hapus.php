<?php
//koneksi database
include "koneksi_tabel.php";

//menangkap data
$id_kecamatan=$_GET['id_kecamatan'];

//menghapus data
mysqli_query($konek, "delete from kecamatan where id_kecamatan='$id_kecamatan'");

//mengalihkan halaman
header("location:basic-table.php");
?>