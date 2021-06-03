<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Unknown -->    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CIAN mx</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/login.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start Cart  -->
    <div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="php/register.php" method="post">
            <h1>Crea una nueva cuenta</h1>
            <input type="text" name ='nombre' placeholder="Nombres" required/>
            <input type="text" name ='apellido' placeholder="Apellidos" required/>
            <input type="text" name = 'telefono' placeholder="Teléfono" required/>
            <input type="email" name="correo" placeholder="Correo electrónico" required/>
            <input type="password" name="pass" placeholder="Contraseña" required/>
            <button type="submit" name="submit">Registrarme</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="" method="post">
            <h1>Iniciar sesión</h1>
            <input type="email" name="correo" placeholder="Correo electrónico" class="form-control" required/>
            <input type="password" name="pass" placeholder="Contraseña" class="form-control" required/>
            <button type="submit" name="submit">Inicia Sesión</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bienvenido de nuevo!</h1>
                <p>Para continuar, por favor ingresa los siguientes datos</p>
                <button class="ghost" id="signIn">Iniciar Sesión</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>No estás registrado?</h1>
                <p>Ingresa algunos datos y registrate con nosotras</p>
                <button class="ghost" id="signUp">Registrarme</button>
            </div>
        </div>
    </div>
</div>

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

    session_start();

    $row  = mysqli_fetch_array($result);
    $_SESSION["id_cliente"] = $row['id_cliente'];
    $_SESSION["nombre"] = $row['nombre'];

    if ($filas) {
        header('location: http://localhost/cian/index.php');
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos')</script>";
        echo "<script>window.location = 'login.php'</script>";
    }
}
?>



    <!-- End Cart -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>

</html>