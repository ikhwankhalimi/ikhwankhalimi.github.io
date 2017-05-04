<?php
$kode = $_GET['term'];
$conn = mysql_connect("localhost","root","");
mysql_select_db("perpus");
 
$sql = "select * from t_buku where judul like '$kode%'";
$hs = mysql_query($sql);
$json = array();
while($rs = mysql_fetch_array($hs)){
	$json[] = array(
		'label' => $rs['kode'],
		'value' => $rs['kd_buku'],
		'nama_brg' => $rs['judul']
	);
}
header("Content-Type: application/json");
echo json_encode($json);