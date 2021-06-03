<?php 

$sever = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cianmx';

$conn = mysqli_connect($sever, $username, $password, $dbname);

session_start();

if($conn === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
        }

if (isset($_POST['submitBtn'])) {
	echo "record";

	$id_prenda = $_SESSION['id_prenda'];
	$id_cliente = $_SESSION['id_cliente'];
	$tipo_entrega = $_POST['tipo_entrega'];
	$direccion = $_POST['direccion'];
	$punto_medio = $_POST['punto_medio'];
	$estado = $_POST['estado'];
	$cp = $_POST['cp'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$query = "INSERT INTO pedidos VALUES (0, '$id_prenda', '$id_cliente', '$tipo_entrega', '$direccion', '$punto_medio', '$estado', '$cp', '$fecha', '$hora')";

	if (mysqli_query($conn, $query)) {
			header('location: ../comprado.php');
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	}

$conn->close();
?>