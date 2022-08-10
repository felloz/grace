<?php

namespace Clases;

class Vehiculo
{
    public $color = "Blanco";
    private $cilindros;
    public $ruedas;
    public $marca;
    public $puertas;

    public function __construct(int $arg1)
    {
        $this->cilindros = $arg1;
    }

    public function acelerar(): string
    {
        return "Acelerando";
    }

    public function frenar()
    {
        return "Frenando";
    }

    public function consultarCilindrada()
    {
        $mensaje = "Tiene: ";
        return $mensaje . $this->cilindros;
    }

    public function setCilindro($arg1)
    {
        $this->cilindros = $arg1;
    }

    public function getCilindro()
    {
        return $this->cilindros;
    }

    public function validarColor()
    {
        return "El color del vehiculo es " . $this->color;
    }
}
