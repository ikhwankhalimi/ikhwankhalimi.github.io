<?php
session_start(); 
if(!isset($_SESSION['username'])){?>
<script>
window.location.replace("login.php");
</script>
<?php }else{
include "head.php";
include "content/search.php";
include "footer.php";
}
?>