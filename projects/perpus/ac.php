<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <!-- sesuaikan dengan path jqueryui yang kamu punya -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
</head>
<body>
<form action="" method="post">
	Kode: <input type="text" name="kode" id="kode"/>
	Nama: <input type="text" name="nama" id="nama"/>
</form> 
<script>
    $(function() {
        $( "#kode" ).autocomplete({
            source: "getj.php",
            minLength: 2,
            select: function( event, ui ) {
		$('#nama').val(ui.item.nama_brg);
            }
        });
    });
</script>
</body>
</html>