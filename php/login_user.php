<?php 

$sever = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cianmx';

$conn = mysqli_connect($sever, $username, $password, $dbname);

if($conn === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
        }

if (isset($_POST['submit'])) {
	$correo = $_POST['correo'];
	$pass = $_POST['pass'];
	$query = "SELECT * FROM clientes WHERE correo = '$correo' AND contraseña = '$pass'";
	$result = mysqli_query($conn, $query);
	$filas = mysqli_num_rows($result);
	if ($filas) {
		$result = mysqli_query($conn, $query);
		$row  = mysqli_fetch_array($result);
		$_SESSION["id_cliente"] = $row['id_cliente'];
	    $_SESSION["nombre"] = $row['nombre'];
		header('location: http://localhost/cian/index.php');
	} else {
		echo "<script>alert('Usuario o contraseña incorrectos')</script>";
		echo "<script>window.location = '../login.php'</script>";
	}
}
?>