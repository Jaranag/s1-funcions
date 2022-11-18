<!-- Programa una funció que, donat un número qualsevol (per exemple, la teva edat)
 ens digui si és parell o imparell mitjançant un missatge per pantalla. -->

<?php

$edat = 43;

function parell($edat) {
    $resposta = "";
    
    if(($edat % 2) == 0) {
        $resposta = "El número és parell.";
    }   else {
        $resposta =  "El número no és parell.";
    }
    
    return $resposta;
}

echo parell($edat);

?>