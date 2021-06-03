<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cianmx';

$conn = mysqli_connect($server, $username, $password, $dbname);

if($conn === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
        }

if (isset($_POST['submit'])) {
	$id = $_POST['id_delete'];
	$table = $_POST['table_delete'];
	if ($table == 'clientes') {
		$query = "DELETE FROM $table WHERE id_cliente = '$id'";
		if ($conn->query($query) === TRUE) {
		  header('location: ../clients.php');
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	}elseif ($table == 'prendas') {
		$query = "DELETE FROM $table WHERE id_prenda = '$id'";
		if ($conn->query($query) === TRUE) {
		  header('location: ../clothes.php');
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	}elseif ($table == 'pedidos') {
		$query = "DELETE FROM $table WHERE id_pedido = '$id'";
		if ($conn->query($query) === TRUE) {
		  header('location: ../orders.php');
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	}

	
	
	}



$conn->close();
?>