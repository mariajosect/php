<?php
/*
Una función que reciba como parámetros el valor del radio de la base y la altura de un cilindro y
devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como
Volumen = númeroPi * radio * radio * Altura, siendo númeroPi = 3.1416 aproximadamente o usa la
constante de <PI class=""></PI>
*/
function Cilindro($radio, $altura){
    $volumen = 3.1416 * pow($radio, 2) * $altura;
    return $volumen;
    echo "El volumen del cilindro es : $volumen";
}

