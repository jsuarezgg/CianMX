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

    if (isset($_SESSION['nombre'])) {
        $id_cliente = $_SESSION['id_cliente'];
        $id_prenda = $_SESSION['id_prenda'];

        $conn = mysqli_connect($sever, $username, $password, $dbname);
        
        $query_prendas = "SELECT * FROM prendas WHERE id_prenda = '$id_prenda';";
        $result_prendas = $conn->query($query_prendas);

        $query_clientes = "SELECT * FROM clientes WHERE id_cliente = '$id_cliente';";
        $result_clientes = $conn->query($query_clientes);
    }
    
    ?>

    <!-- End Get data -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="">
                <div class="">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Datos de Entrega</h3>
                        </div>
                        <form method="post" action="php/comprar.php">
                            <div class="mb-3">
                                <label for="address">Dirección *</label>
                                <input type="text" class="form-control" name="direccion" placeholder="Ingresa tu dirección">
                                <div class="invalid-feedback"> Por favor ingresa una dirección válida. </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="punto-medio">Punto Medio (Presencial)</label>
                                    <select class="wide w-100" name="punto_medio">
                                        <option value="NA">Seleccione uno...</option>
                                        <option value="Galerías Toluca">Galerías Toluca</option>
                                        <option value="Galerías Metepec">Galerías Metepec</option>
                                        <option value="Patio Toluca">Patio Toluca</option>
                                        <option value="Ciudad Universitaria">Ciudad Universitaria</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Estado (Envío)</label>
                                    <select class="wide w-100" name="estado">
    									<option value="NA">Seleccione uno...</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="CDMX">Ciudad de México</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Estado de México">Estado de México</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacán">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
								    </select>
                                    <div class="invalid-feedback"> Por favor seleccione un estado. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Código Postal (Envío)</label>
                                    <input type="number" value=00000 class="form-control" name="cp" placeholder="" required>
                                    <div class="invalid-feedback"> Ingresa un código postal válido. </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Método de Entrega</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="tipo_entrega" value="Presencial" class="custom-control-input" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Presencial</label> <span class="float-right font-weight-bold">GRATIS</span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 días)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="tipo_entrega" value="Envío" class="custom-control-input" type="radio">
                                        <label class="custom-control-label" for="shippingOption2">Envío</label><span class="float-right font-weight-bold"><del>$69 </del>GRATIS</span></div>
                                    <div class="ml-4 mb-2 small">(12-16 días)</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div>
                                <div class="title-left">
                                    <h3>Fecha y hora</h3>
                                </div>
                                <div class="mb-4">
                                    <div>
                                        <h3>Fecha</h3>
                                        <input name="fecha" type="date" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div>
                                        <h3>Hora</h3>
                                        <input name="hora" type="time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Carrito</h3>
                                </div>
                                    <?php while($row1 = mysqli_fetch_array($result_prendas)):;?>
                                        <div class="rounded p-2 bg-light">
                                            <div class="media mb-2 border-bottom">
                                                <div class="media-body"> <h3> <?php echo $row1[1];?></h3>
                                                    <div class="small text-muted">Precio: $ <?php 
                                                                                        $total = $row1[3];
                                                                                        echo $row1[3]
                                                                                    ;?> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Tu orden</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Producto</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> $ <?php 
                                                                                if (isset($total)) {
                                                                                    echo $total;
                                                                                }
                                                                            ?> 
                                    </div>
                                </div>
                                
                                <div class="d-flex">
                                    <h4>Costo de envio</h4>
                                    <div class="ml-auto font-weight-bold"> Gratis</div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5> Compra Total</h5>
                                    <div class="ml-auto h5"> $ <?php 
                                                                if (isset($total)) {
                                                                    echo $total;
                                                                }
                                                            ?>
                                    </div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="submit-button text-center">
                            <button type="submit" name="submitBtn" id="submitBtn" value="submit" class="btn hvr-hover">Comprar</button>
                            <div class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
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