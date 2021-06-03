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
    session_start();

    if (isset($_POST['submit'])) {
        $_SESSION['id_prenda'] = $_POST['id_prenda'];
        header('location: ../cart.php');
    }else{
        echo "error";
    }
    ?>