<?php
    session_start();
	include "../config/koneksi.php";
		$qr=mysqli_query($connect,"SELECT * FROM tb_petugas WHERE username='$_POST[username]' AND password=md5('$_POST[password]')");
		if($qr){
			$r=mysqli_fetch_array($qr,MYSQLI_ASSOC);
			
			$_SESSION[username]=$r[username];
			$_SESSION[nm_petugas]=$r[fullname];
			$_SESSION[nickname]=$r[nickname];
			$_SESSION[level]=$r[level];
			$_SESSION[id]=$r[id];			
			header('location:../admin.php');		
		}
		else
		{					
			echo "<script>alert('username atau password salah!!!')</script>";
			echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
		}

?>