<?php
$cantidadVotos=array(
    "p1"=>0,
    "p2"=>0,
    "p3"=>0
);
function votar ($Votos,$lista)
{
    if($lista=="p1")
    {
        $Votos["p1"]++;
    }
    elseif ($lista=="p2")
    {
        $Votos["p2"]++;
    }
    elseif($lista=="p3")
    {
        $Votos["p3"]++;
    }
    return $Votos;
}
function listarVotos($cantidadVotos){
    foreach ($cantidadVotos as $indice=>$valor)
    {
       echo $indice.":".$valor;
       echo "<br>";
    }
}

$cantidadVotos=votar($cantidadVotos,"p2");
$cantidadVotos=votar($cantidadVotos,"p2");
$cantidadVotos=votar($cantidadVotos,"p2");
$cantidadVotos=votar($cantidadVotos,"p1");
$cantidadVotos=votar($cantidadVotos,"p1");
$cantidadVotos=votar($cantidadVotos,"p1");
$cantidadVotos=votar($cantidadVotos,"p1");
$cantidadVotos=votar($cantidadVotos,"p1");

listarVotos($cantidadVotos);