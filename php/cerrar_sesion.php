<?php
session_start();
$_SESSION = array();
session_destroy();
header('Location: http://localhost/cian/index.php');
exit();
?>