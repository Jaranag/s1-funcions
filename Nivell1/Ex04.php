<!-- Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" 
establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte. -->

<?php

$numCompte;

function amagatall($numCompte = 10) {

    for ($i = 0; $i <= $numCompte; $i += 2) {
        echo "Número: $i <br>";
    }
}

echo amagatall($numCompte);
?>