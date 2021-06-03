<?php
function prenda_list($id, $nombre, $talla, $precio, $descripcion, $imagen){
    $descuento = doubleval($precio)+50;
    $element = "
    <form method = 'post', action = 'php/add_to_cart.php'>
    <div class=\"list-view-box\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-4\">
            <div class=\"products-single fix\">
                <div class=\"box-img-hover\">
                <img src=\"$imagen\" class=\"img-fluid\" alt=\"Image\">
                <div class=\"mask-icon\">
                    <ul>
                        <li><a href=\"$imagen\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Ver\" class=\"image-link\"><i class=\"fas fa-eye\"></i></a></li>
                    </ul>
                    <button type=\"submit\" name=\"submit\" class=\"btn hvr-hover\"><i class=\"fas fa-shopping-cart\"></i></button>
                    <input type='hidden' name='id_prenda' value='$id'>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-8 col-xl-8\">
            <div class=\"why-text full-width\">
                <h4>$nombre</h4>
                <p>Talla: $talla</p>
                <h5> <del>$ $descuento</del> $$precio</h5>
                <p>$descripcion</p>
                <button type=\"submit\" name=\"submit\" class=\"btn hvr-hover\"><i class=\"fas fa-shopping-cart\"></i></button>
                <input type='hidden' name='id_prenda' value='$id'>
            </div>
        </div>
    </div>
    </div>
    </form>
    ";
    echo $element;
}