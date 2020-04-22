<?php

class generic  implements iMostrar
{
    public function mostrarPaisContinente($continente,$restCountries){
        $paises = $restCountries->byRegion($continente);
        echo "Countries from ". $continente.":"."\n";
        foreach ($paises as $key => $value) {
            echo $value->name ."\n";
        }
    }
}
