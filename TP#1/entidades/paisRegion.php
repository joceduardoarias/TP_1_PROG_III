<?php

class paisRegion extends pais 
{   
    public $subRegion;

    function __construct($nombre,$capital,$continente,$idioma,$subRegion)
    {   parent::__construct($nombre,$continente,$idioma);
        $this->subRegion=$subRegion;
    }

    public function getSubRegion()
    {
        return $this->subRegion;
    }

    public function mostrar()
    {
        return $this->subRegion;
    }
    public static function mostrarPaisRegion($paisRegion)
    {
        return $paisRegion->mostrar();
    }
}
