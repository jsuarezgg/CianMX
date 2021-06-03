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
                        <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a href="shop.php" class="nav-link" >Comprar</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contacto</a></li>
                        <li class="nav-item"><a href="cart.php"><i class="fa fa-shopping-bag"></i><p>Carrito</p></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenida a <br> CIAN mx</strong></h1>
                            <p class="m-b-40">Somos una micro empresa Mexicana, apoya local.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Catálogo</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenida a <br> CIAN mx</strong></h1>
                            <p class="m-b-40">Somos una micro empresa Mexicana, apoya local.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Catálogo</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenida a <br> CIAN mx</strong></h1>
                            <p class="m-b-40">Somos una micro empresa Mexicana, apoya local.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Catálogo</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_01.jpeg" alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_02.jpeg" alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_03.jpeg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Nuestros Productos</h1>
                        <p>Ten la libertad de usar lo que te haga sentir única.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Destacados</button>
                            <button data-filter=".top-featured">Nuevos</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Destacado</p>
                            </div>
                            <img src="images/img-pro-01.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="shop.php">Ver Más</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $199</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Destacado</p>
                            </div>
                            <img src="images/img-pro-02.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="shop.php">Ver Más</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $199</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Nuevo</p>
                            </div>
                            <img src="images/img-pro-03.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="shop.php">Ver Más</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $199</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Nuevo</p>
                            </div>
                            <img src="images/img-pro-04.jpeg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="shop.php">Ver Más</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $199</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpeg" alt="" class="box box1"/>
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpeg" alt="" class="box box1"/>
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="http://instagram.com/cianxmx"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


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