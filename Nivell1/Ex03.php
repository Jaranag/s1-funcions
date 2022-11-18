<!-- Imagina't que volem que compti fins a un nombre diferent de 10. 
Programa la funció perquè el final del compte estigui parametritzat. -->

<?php

$numCompte = 16;

function amagatall($numCompte) {
    for ($i = 0; $i <= $numCompte; $i += 2) {
        echo "Número: $i <br>";
    }
}

echo amagatall($numCompte);

?>