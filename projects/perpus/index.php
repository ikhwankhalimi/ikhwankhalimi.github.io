<?php
session_start(); 
if(!isset($_SESSION['username'])){?>
<script>
window.location.replace("login.php");
</script>
<?php }else{ ?>
<script>
window.location.replace("admin.php");
</script>
<?php }?>