<?php
session_start();
?>
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
    <link rel="stylesheet" href="css/custom.css">
    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <div class="our-link">
                        <ul>
                            <li><a href="./contact-us.php"><i class="fas fa-headset"></i> Contacto</a></li>
                            <li><a href="./admin.html"><i class="fas fa-store"></i> Administrador</a></li>
                        </ul>
                    </div>

                    <?php

                    if (isset($_SESSION['nombre'])) {
                        echo "
                        <div class='our-link' style='float:right;'>
                            <ul>
                                <li><a href='./#'><i class='fa'></i>Bienvenid@, ".$_SESSION['nombre']."</a></li>
                                <li><form action='php/cerrar_sesion.php' method='post'>
                                    <input type='submit' value='Cerrar sesión' />
                                </form></li>
                            </ul>
                        </div>
                        ";
                    }else{
                        echo "
                        <div class='our-link' style='float:right;'>
                            <ul>
                                <li><a href='./login.php'><i class='fa fa-id-card'></i>Iniciar Sesión</a></li>
                                <li><a href='./login.php'><i class='fas fa-child'></i> Registrarse</a></li>
                            </ul>
                        </div>
                        ";
                    }
                    ?>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" width="150" height="150"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a href="shop.php" class="nav-link" >Comprar</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contacto</a></li>
                        <li class="nav-item active"><a href="cart.php"><i class="fa fa-shopping-bag"></i><p>Carrito</p></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Carrito</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">Carrito</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Get data -->

    <?php
    $sever = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'cianmx';
    if (isset($_SESSION['id_prenda'])) {
        $id = $_SESSION['id_prenda'];
        $conn = mysqli_connect($sever, $username, $password, $dbname);
        $query = "SELECT * FROM prendas WHERE id_prenda = '$id';";
        $result = $conn->query($query);
    }
    
    ?>

    <!-- End Get data -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Imagenes</th>
                                    <th>Nombre del Producto</th>
                                    <th>Talla</th>
                                    <th>Precio</th>
                                    <th>Quitar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row1 = mysqli_fetch_array($result)):;?>
                                <tr>
                                    <td class="thumbnail-img">
                                    <img class="img-fluid" src="<?php echo $row1[5];?>" alt="" />
                                    </td>
                                    <td class="name-pr">
                                        <h2><?php echo $row1[1];?></h2>
                                    </td>
                                    <td class="name-pr">
                                        <h2><?php echo $row1[2];?></h2>
                                    </td>
                                    <td class="price-pr">
                                        <p>$ <?php 
                                        $total = $row1[3];
                                        echo $row1[3]
                                        ;?>
                                        </p>
                                    </td>
                                    <td class="remove-pr">
                                        <form action="php/delete_cart.php" method="post">
                                            <input type="hidden" name="id_delete" value="$id">
                                            <input type="submit" name="submit" id="submit" value="Quitar">
                                        </form>
                                    </td>
                                </tr>
                                <?php endwhile;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Resumen del pedido</h3>
                        <div class="d-flex gr-total">
                            <h5>Total</h5>
                            <div class="ml-auto h5">$ 
                                <?php 
                                if (isset($total)) {
                                    echo $total;
                                }
                                ?> </div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.php" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Acerca de Cian MX</h3>
                            <p>1ST & 2ND HAND🌙</p> 
                            <p>Entregas personales Toluca-Metepec 🌘</p>  
                            <p>Envíos MX por $60</p>
                            <p>Envíos a domicilio costo extra</p>
                            <p>NO hay cambios ni devoluciones</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contacto</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Correo: <a href="mailto:cian.mx@hotmail.com">cian.mx@hotmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Siguenos en nuestras redes sociales.</p>
                            <ul>
                                <li><a href="http://instagram.com/cianxmx"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="http://instagram.com/cianxmx"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                                                    
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">Todos los derechos reservados. &copy; 2021 Melissa García
    </div>
    <!-- End copyright  -->

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
</body>

</html>