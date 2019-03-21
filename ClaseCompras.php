<?php

require 'valorPago.php';
require 'valorVenta.php';


$CuentaAmericas = new Deposito("Pesos", 70000, "Minorista", 0.19);
echo $CuentaAmericas . '<br/>';
echo 'Iva es: ' . $CuentaAmericas->calculoIva() .
    ' ' . $CuentaAmericas->getDivisa() . '<br/>';
$CuentaAmericas->calculoIva(true);
echo $CuentaAmericas . '<hr/>';

$CuentaBits = new Deposito("Pesos", 3210000, "Mayorista", 0.05);
echo $CuentaBits . '<br/>';
echo 'Iva es: ' . $CuentaBits->calculoIva() .
    ' ' . $CuentaBits->getDivisa() . '<br/>';
$CuentaBits->calculoIva(true);
echo $CuentaBits . '<hr/>';

$CuentaEmpresa = new Deposito("Pesos", 51000, "Empleado", 0.08);
echo $CuentaEmpresa . '<br/>';
echo 'Iva es: ' . $CuentaEmpresa->calculoIva() .
    ' ' . $CuentaEmpresa->getDivisa() . '<br/>';
$CuentaEmpresa->calculoIva(true);
echo $CuentaEmpresa . '<br/>';
