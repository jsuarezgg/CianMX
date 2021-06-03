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
	$monto = $_POST['monto'];
	$query = "INSERT INTO gastos VALUES ('0', NULL, '$monto')";
	if ($conn->query($query) === TRUE) {
		  header('location: ../finance.php');
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	}

$conn->close();
?>