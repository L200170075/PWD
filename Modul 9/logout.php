<?php
    session_start();
    session_destroy();
?>
<script>
    alert('Anda Telah Logout');
    document.location = 'loginn.php';
</script>