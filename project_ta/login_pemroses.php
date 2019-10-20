<?php
	session_start();
	include 'koneksi.php';
	$user=$_POST['username'];
	$pass=$_POST['password'];
	//echo $username."<br>";
	//echo $password."<br>";
	if ($user=="" OR $pass=="") {//salah satu kosong
		//echo "KOSONG, Jangan diproses";
		header('Location:login.php');
	} else if ($user==!(NULL) AND $pass==!(NULL)) {//kalau semuanya diisi
		//koneksi database
		//(server, user_db, password_db, nama_db)
		//cek u dan p dengan data di tabel user
		$ceklogin=mysqli_query($konek,"select * from user WHERE username='$user' AND password='$pass'");
		$hasil=mysqli_num_rows($ceklogin);
		//kemungkinan kalau u dan p benar
		if ($hasil==1){
			header('Location:dasboard.php');
			//buat session
		}
		//kemungkinan kalau u dan p salah
		else{
			echo "U dan P salah";
		}
	}
?>