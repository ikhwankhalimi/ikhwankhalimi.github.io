<?php
include "../config/koneksi.php";
$id_anggota 	= stripslashes($_POST['id_anggota']);
$nm_anggota  		= stripslashes($_POST['nm_anggota']);
$alamat_anggota     		= stripslashes($_POST['alamat_anggota']);
$jenis_kelamin     		= stripslashes($_POST['jenis_kelamin']);

$sql	= "UPDATE tb_anggota SET nm_anggota='$nm_anggota',jenis_kelamin='$jenis_kelamin',alamat='$alamat_anggota' WHERE id_anggota='$id_anggota'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_anggota'>";
}
?>