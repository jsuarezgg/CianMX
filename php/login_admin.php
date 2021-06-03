<?php 

if (isset($_POST['submit'])) {
	$id_admin = $_POST['id_admin'];
	$pass_admin = $_POST['pass_admin'];
	
	if (($id_admin == 2937163)&($pass_admin == 'HolaMundo')) {
		  header('location: ../admin_index.html');
		} else {
		  header('location: ../admin.html');
		}
	}
?>