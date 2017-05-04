<?php
include "../config/koneksi.php";
$kd_buku 	= stripslashes($_POST['kd_buku']);
$judul_buku  = stripslashes($_POST['judul_buku']);
$id_pengarang     = stripslashes($_POST['id_pengarang']);
$id_penerbit  	= stripslashes($_POST['id_penerbit']);
$jumlah  	= stripslashes($_POST['jumlah']);
$tahun  	= stripslashes($_POST['tahun']);
$rak  	= stripslashes($_POST['rak']);

$sql	= "UPDATE tb_buku SET judul_buku='$judul_buku',id_pengarang='$id_pengarang',id_penerbit='$id_penerbit',jml_buku='$jumlah',tahun_terbit='$tahun',no_rak='$rak' WHERE kd_buku='$kd_buku'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_buku'>";
}
?>