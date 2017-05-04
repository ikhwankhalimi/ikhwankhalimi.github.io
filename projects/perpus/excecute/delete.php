<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$get_dl = $_GET['dlt'];


if($get_dl == 'dlbuku'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_buku WHERE kd_buku='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_buku'>";
}
}
elseif($get_dl == 'dlanggota'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_anggota WHERE id_anggota='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_anggota'>";
}
}
elseif($get_dl == 'dlpengarang'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_pengarang WHERE id_pengarang='$id'");
if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_pengarang'>";
}
}
elseif($get_dl == 'dlpenerbit'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_penerbit WHERE id_penerbit='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_penerbit'>";
}
}
elseif($get_dl == 'dlpeminjaman'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_peminjaman WHERE kd_pinjam='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_peminjaman'>";
}
}
?>