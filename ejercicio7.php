<?php

require_once('CuentaBancaria.php');

$CuentaMarcos = new CuentaBancaria ("marcos",1000,"Ahorro");

$CuentaMarcos->depositar();
$CuentaMarcos->retirar();
