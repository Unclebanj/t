
<?php
session_start();
echo "Logged Out";
header('Location: accesslogin.php');
session_destroy();
?>