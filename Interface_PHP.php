<?php

interface VideoJuegos
{
    public function getNombreJuego();

    public function setNombreJuego($NombreJuego);

    public function Detalles();
}

class Arcade implements VideoJuegos
{
    private $NombreJuego = null;

    public function getNombreJuego()
    {
        return $this->NombreJuego;
    }

    public function setNombreJuego($NombreJuego)
    {
        $this->NombreJuego = $NombreJuego;
    }

    private $categoria = null;

    public function getcategoria()
    {
        return $this->categoria;
    }

    public function setcategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    private $Consola = null;

    public function getConsola()
    {
        return $this->Consola;
    }

    public function setConsola($Consola)
    {
        $this->Consola = $Consola;
    }

    public function Detalles()
    {
        return sprintf("Un video Juego popular es: %s %s", $this->getNombreJuego(), " , el cual es " .  get_class($this). " de categoria " . $this->getcategoria() . " y disponible en " . $this->getConsola());
    }
}

$Arcade = new Arcade();
$Arcade->setNombreJuego('Zelda');
$Arcade->setcategoria('Infantil');
$Arcade->setConsola('Nintendo Wii');
print $Arcade->Detalles();
?>