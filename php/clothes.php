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
	$nombre_prenda = $_POST['nombre_prenda'];
	$talla = $_POST['talla'];
	$precio = $_POST['precio'];
	$descripcion = $_POST['descripcion'];
	$query = "INSERT INTO prendas VALUES ('0', '$nombre_prenda', '$talla', '$precio', '$descripcion')";
	if ($conn->query($query) === TRUE) {
		  header('location: ../clothes.php');
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	}

$conn->close();
?>