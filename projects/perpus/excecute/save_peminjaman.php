<?php
include "../config/koneksi.php";
$kd_pinjam 	= $_POST['kd_pinjam'];
$id_anggota  		= stripslashes($_POST['id_anggota']);
$kd_buku     		= stripslashes($_POST['kd_buku']);
$skrg 	= date('Y-m-d');
$oneweekfromnow =  date('Y-m-d', strtotime('+7 days') );

$sql	= 'INSERT INTO tb_peminjaman(kd_pinjam,id_anggota,kd_buku,tgl_pinjam,tgl_kembali) values ("'.$kd_pinjam.'","'.$id_anggota.'","'.$kd_buku.'","'.$skrg.'","'.$oneweekfromnow.'")';
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_peminjaman'>";
}
?>