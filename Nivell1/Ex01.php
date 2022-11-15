<!-- Programa una funció que, donat un número qualsevol (per exemple, la teva edat)
 ens digui si és parell o imparell mitjançant un missatge per pantalla. -->

<?php

$edat = 43;

if(($edat % 2) == 0) {
    echo "El número és parell.";
}   else {
    echo "El número no és parell.";
}

?>