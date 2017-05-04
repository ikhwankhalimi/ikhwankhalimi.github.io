<?php
include "../config/koneksi.php";
$nm_penerbit 	= stripslashes($_POST['nm_penerbit']);

$sql	= 'INSERT INTO tb_penerbit values (null,"'.$nm_penerbit.'")';
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_penerbit'>";
}
?>