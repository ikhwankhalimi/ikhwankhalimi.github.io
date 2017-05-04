<?php
include "../config/koneksi.php";
$kd_pinjam 	= $_POST['kd_pinjam'];
$lama_pinjam  		= stripslashes($_POST['lama_pinjam']);
$denda     		= stripslashes($_POST['denda']);
$skrg 	= date('Y-m-d');

$updatepinjam	= "UPDATE tb_peminjaman SET tgl_kembali='$skrg',lama_pinjam='$lama_pinjam',denda='$denda' WHERE kd_pinjam='$kd_pinjam'";
$excecute_update	= mysqli_query($connect,$updatepinjam);

$sql	= "INSERT INTO tb_pengembalian SELECT kd_pinjam,tgl_pinjam,tgl_kembali,lama_pinjam,denda,kd_buku,id_anggota FROM tb_peminjaman WHERE kd_pinjam='$kd_pinjam'";
$query	= mysqli_query($connect,$sql);

//$deletepinjam	= "DELETE FROM tb_peminjaman WHERE kd_pinjam='$kd_pinjam'";
//$delpinjam	= mysqli_query($connect,$deletepinjam);

if ($excecute_update && $query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_pengembalian'>";
}else{
	die(mysqli_error($connect));
}
?>