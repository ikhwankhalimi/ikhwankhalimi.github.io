<?php
include "../config/koneksi.php";
$id_pengarang 	= stripslashes($_POST['id_pengarang']);
$nm_pengarang 	= stripslashes($_POST['nm_pengarang']);

$sql	= "UPDATE tb_pengarang SET nm_pengarang='$nm_pengarang' WHERE id_pengarang='$id_pengarang'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_pengarang'>";
}
?>