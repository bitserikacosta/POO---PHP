<?php

abstract class Transporte
{
    public function getTipo()
    {
        return "Aéreo";
    }
    abstract public function setMedio($MedioDeTransporte);
    abstract public function getMedio();
}
class viaAire extends Transporte
{
    public $Vehiculo = 'globo aerostático';
    protected $MedioDeTransporte;
    public function setMedio($MedioDeTransporte)
    {
        $this->MedioDeTransporte = $MedioDeTransporte;
    }
    public function getMedio()
    {
        return $this->MedioDeTransporte;
    }
}
$viaAire = new viaAire;
$Tipo = $viaAire->getTipo();
$viaAire->setMedio("Turistico.");
$MedioDeTransporte = $viaAire->getMedio();


echo "El " . $viaAire->Vehiculo . " es un medio de transporte " . $Tipo  . " y " . $MedioDeTransporte;
?>