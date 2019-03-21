<?php
require_once 'valorPago.php';
class Deposito extends Pagos
{
    private $Iva;
    public function __construct($Divisa, $Compra, $Cliente, $Iva)
    {
        parent::__construct($Divisa, $Compra, $Cliente);
        $this->Iva = $Iva;
    }
    public function getIva()
    {
        return $this->Iva;
    }
    public function calculoIva($Saldo = false)
    {
        $Intereses = $this->getCompra() * $this->Iva;
        if ($Saldo == true) {
            $this->setCompra($this->getCompra() + $Intereses);
        }
        return $Intereses;
    }
    public function __toString()
    {
        return parent::__toString() . ' con IVA de: ' . $this->Iva * 100 . '%.';
    }
}
