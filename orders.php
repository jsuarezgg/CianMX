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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/fh-3.1.8/kt-2.6.1/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.css"/>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="./admin_index.html"><i class="fa fa-id-card"></i> Administrador</a></li>
                        </ul>
                    </div>
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
                        <li class="nav-item"><a class="nav-link" href="admin_index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="clients.php">Clientes</a></li>
                        <li class="nav-item active"><a class="nav-link" href="orders.php">Pedidos</a></li>
                        <li class="nav-item"><a class="nav-link" href="clothes.php">Prendas</a></li>
                        <li class="nav-item"><a class="nav-link" href="finance.php">Finanzas</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Main Top -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Administrador</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin_index.html">Administrador</a></li>
                        <li class="breadcrumb-item active">Pedidos</li>
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

    $conn = mysqli_connect($sever, $username, $password, $dbname);
    $query = "SELECT pedidos.id_pedido, pedidos.tipo_entrega, pedidos.direccion, pedidos.fecha, clientes.correo, clientes.telefono, prendas.precio FROM
                pedidos INNER JOIN clientes ON (pedidos.id_cliente = clientes.id_cliente)
                INNER JOIN prendas ON (pedidos.id_prenda = prendas.id_prenda);";
    $result = $conn->query($query);
    ?>

    <!-- End Get data -->

    <!-- Start Clients  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>PEDIDOS</h2>
                    <div class="table-main table-responsive">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id Pedido</th>
                                    <th>Tipo de Entrega</th>
                                    <th>Dirección</th>
                                    <th>Fecha</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row1 = mysqli_fetch_array($result)):;?>
                                <tr>
                                    <td class="name-pr">
                                        <h2><?php echo $row1[0];?></h2>
                                    </td>
                                    <td class="name-pr">
                                        <h2><?php echo $row1[1];?></h2>
                                    </td>
                                    <td class="name-pr">
                                        <h2><?php echo $row1[2];?></h2>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo $row1[3];?></p>
                                    </td>
                                    <td class="total-pr">
                                        <p><?php echo $row1[4];?></p>
                                    </td>
                                    <td class="total-pr">
                                        <p><?php echo $row1[5];?></p>
                                    </td>
                                    <td class="total-pr">
                                        <p><?php echo $row1[6];?></p>
                                    </td>
                                </tr>
                                <?php endwhile;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients -->


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
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/fh-3.1.8/kt-2.6.1/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.js"></script>
    <script> $(document).ready(function() {
        $('#example').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        } );
    } );</script>
</body>

</html>