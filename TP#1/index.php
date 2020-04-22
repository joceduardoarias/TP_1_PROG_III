<?php

require_once __DIR__ . '/vendor/autoload.php';
include ("./entidades/pais.php");
include ("./entidades/paisRegion.php");
include ("./entidades/paisCapital.php");
include ("./entidades/interfase.php");
include ("./entidades/generic.php");
use NNV\RestCountries;

$restCountries = new RestCountries();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    switch ($_SERVER['PATH_INFO']) {
        case '/paisRegion':
                if ($restCountries->byName($_GET['pais'], true)!= null) {
                    
                 $pais = $restCountries->byName($_GET['pais']);
                 foreach ($pais as $key => $value) {
                    $capital = $value->capital;
                    $nombre = $value->name;
                    $idioma = $value->languages;
                    $subRegion = $value->subregion;
                    $continente = $value->region;
                 }
                 $paisRegion = new paisRegion ($nombre,$capital,$continente,$idioma[0]->nativeName,$subRegion);
                }
               echo $paisRegion->nombre ." esta ubicado en la subregión ". $paisRegion->subRegion;
            break;
        case '/paisCapital':
            
           $pais = $restCountries->byCapitalCity($_GET['capital']);
            foreach ($pais as $key => $value) {
                    $capital = $value->capital;
                    $nombre = $value->name;
                    $idioma = $value->languages;
                    $continente = $value->region;
            }
            $paisCapital = new paisCapital($nombre,$capital,$continente,$idioma[0]->nativeName);
            echo  $paisCapital->capital ." es la capital de ". $paisCapital->nombre. " cuyo idioma oficial es el ". $paisCapital->idioma. " y esta ubicado en las ".$paisCapital->continente;
            break;
        case '/paisContinentes':
                    $paisContinentes = new generic();
                    
                     $paisContinentes->mostrarPaisContinente($_GET['continente'],$restCountries);
            break;
        default:
            # code...
            break;
    }
}