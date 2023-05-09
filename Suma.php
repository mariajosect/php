<?php
/*Crear una función que permita recibir un arreglo de 20 números como parámetro. En dicha función,
mostrar la suma de todos los números.
*/

$numeros = [1,1,1,1,1,1,1,1,1,1,1,1,1,5,1,1,1,1,1,1];

function sumaNumeros($numeros){
    $suma = 0;
    for ($i=0; $i <= $numeros; $i++) { 
        
        $suma += $numeros[$i];
    };
    echo $suma;

}
sumaNumeros($numeros);
