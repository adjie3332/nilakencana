<?php
session_start();
session_destroy();
?>
<script language script="JavaScript">
    alert('Anda Telah Logout');
    document.location='login.php';
</script>