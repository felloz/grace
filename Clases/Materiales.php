<?php

class Materiales
{
    public $rines = "acero";
    public $asientos = "Cuero";
    public $ventanas = "vidrio templado";

    public function fabricarRin()
    {
        return "Rin fabricado";
    }

    public function fabricarVentana()
    {
        return "Fabricando ventana";
    }
}
