<?php

/*Desarrollar una función que calcule el IVA aplicable a un producto, la función debe recibir el total del
producto y el IVA para aplicar, sino no se pasa un IVA, por defecto deberá tener 10% */

function IvaProducto($valorproduct, $iva = 0.10){
    $productoIva = $valorproduct * $iva;
    $total = $productoIva + $valorproduct;
    echo "El Iva del  producto es: ", $productoIva, ". su total a pagar es: ", $total, ".";
}


