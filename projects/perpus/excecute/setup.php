<?php
include "../config/koneksi.php";

if(isset($_POST['app'])){
$app_title 	= stripslashes($_POST['app_title']);
$app_version  = stripslashes($_POST['app_version']);
$app_description     = stripslashes($_POST['app_description']);
$app_footer  	= stripslashes($_POST['app_footer']);
$app_theme  	= stripslashes($_POST['app_theme']);

$updateapp	= "UPDATE setup SET app_title='$app_title',app_footer='$app_footer',app_description='$app_description',app_version='$app_version',app_theme='$app_theme'";
$qupdateapp	= mysqli_query($connect,$updateapp);
if ($qupdateapp){
echo"<meta http-equiv='refresh' content='0; url=../admin.php'>";
}
}
elseif(isset($_POST['user'])){
$password  	= stripslashes($_POST['password']);
$repassword  	= stripslashes($_POST['repassword']);
if($password != $repassword || $repassword != $password){
	echo "<script>alert('Password harus sama!')</script>";
	echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=setup'>";
}else{
$sql	= "UPDATE tb_petugas SET password='md5($password)'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php'>";
}
}
}
?>