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
	$nombres = $_POST['nombre'];
	$apellidos = $_POST['apellido'];
	$correo = $_POST['correo'];
	$pass = $_POST['pass'];
	$telefono = $_POST['telefono'];
	$query = "INSERT INTO clientes VALUES ('0', '$nombres', '$apellidos', '$correo', '$pass', '$telefono')";
	if ($conn->query($query) === TRUE) {
		echo "<script>alert('Registrado, por favor inicia sesión')</script>";
		echo "<script>window.location = '../login.php'</script>";
		header('location: ../login.php');
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	}
?>