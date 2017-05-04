<?php
include "../config/koneksi.php";
$nm_pengarang 	= stripslashes($_POST['nm_pengarang']);

$sql	= 'INSERT INTO tb_pengarang values (null,"'.$nm_pengarang.'")';
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_pengarang'>";
}
?>