<?php
class Pagos
{
    private $Divisa;
    private $Compra;
    private $Cliente;

    public function __construct($Divisa, $Compra, $Cliente)
    {
        $this->Divisa = $Divisa;
        $this->Compra = $Compra;
        $this->Cliente = $Cliente;
    }

    public function getDivisa()
    {
        return $this->Divisa;
    }

    public function getCompra()
    {
        return $this->Compra;
    }

    protected function setCompra($Compra)
    {
        $this->Compra = $Compra;
    }

    public function getCliente()
    {
        return $this->Cliente;
    }

    public function Pago($total)
    {
        $this->Compra += $total ;
    }

    public function __toString()
    {
        return "La compra de $this->Cliente es de " .
            $this->Compra . " " . $this->Divisa;
    }
}
