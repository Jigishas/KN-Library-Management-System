<?php 
include 'Header.php';
?>
<?php

session_destroy();
header("Location: Login.php");
exit();
?>
