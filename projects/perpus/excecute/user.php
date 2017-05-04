<?php
session_start();
include "../config/koneksi.php";

if(isset($_POST['changeuser'])){
$fullname 	= stripslashes($_POST['fullname']);
$nickname  = stripslashes($_POST['nickname']);

$updateapp	= "UPDATE tb_petugas SET fullname='$fullname',nickname='$nickname' WHERE username='$_SESSION[username]'";
$qupdateapp	= mysqli_query($connect,$updateapp);
if ($qupdateapp){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=user'>";
}
}elseif(isset($_POST['adduser'])){
$fname 	= stripslashes($_POST['fname']);
$nname  = stripslashes($_POST['nname']);
$username  = stripslashes($_POST['username']);
$level  = stripslashes($_POST['level']);
$password  = md5($_POST['password']);

$sql	= 'INSERT INTO tb_petugas(fullname,nickname,username,password,level) values ("'.$fname.'","'.$nname.'","'.$username.'","'.$password.'","'.$level.'")';
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php'>";
}
}
?>