<?php
include "../config/koneksi.php";
$id_anggota 	= stripslashes($_POST['id_anggota']);
$nm_anggota  		= stripslashes($_POST['nm_anggota']);
$alamat_anggota     		= stripslashes($_POST['alamat_anggota']);
$jenis_kelamin     		= stripslashes($_POST['jenis_kelamin']);

$sql	= 'INSERT INTO tb_anggota values ("'.$id_anggota.'","'.$nm_anggota.'","'.$jenis_kelamin.'","'.$alamat_anggota.'")';
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_anggota'>";
}
?>