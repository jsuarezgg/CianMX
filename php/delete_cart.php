<?php
session_start();
if (isset($_POST['submit'])) {
	unset($_SESSION['id_prenda']);
	header('location: ../shop.php');
}else{
}
?>