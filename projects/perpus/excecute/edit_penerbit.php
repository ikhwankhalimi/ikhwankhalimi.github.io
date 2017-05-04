<?php
include "../config/koneksi.php";
$id_penerbit 	= stripslashes($_POST['id_penerbit']);
$nm_penerbit 	= stripslashes($_POST['nm_penerbit']);

$sql	= "UPDATE tb_penerbit SET nm_penerbit='$nm_penerbit' WHERE id_penerbit='$id_penerbit'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_penerbit'>";
}
?>