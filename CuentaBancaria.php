<?php
/*Crea una clase "CuentaBancaria" que tenga las propiedades "titular", "saldo" y "tipo de cuenta". A
continuación, crea dos métodos dentro de la clase: "depositar" y "retirar". Estos métodos deberían
permitir al usuario agregar o quitar dinero de la cuenta. Luego, crea una instancia/objeto de esa clase
y prueba los métodos. */

class CuentaBancaria {
    private $titular;
    private $saldo;
    private $tipoCuenta;

    public function __construct($titular,$saldo,$tipoCuenta){
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->tipoCuenta = $tipoCuenta;
    }
    public function depositar(){
        $this->saldo = $this->saldo + 100;
        echo "A depositado "$saldo "de su cuenta";
    }
    public function retirar(){
        $this->saldo = $this->saldo - 100;
        echo "A retirado ""."$saldo"." "de su cuenta";
    }
}