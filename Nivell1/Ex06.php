<!-- Charlie em va mossegar el dit!
Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari. -->

<?php

$isBitten = rand(true, false);



if ($isBitten == true) {
    echo "Charlie mossega";
}else {
    echo "Charlie no mossega";
}

?>