<?php
/* =========================
   Exercice 3 — fonctions.php
   ========================= */
function estPair($n) {
    return ($n % 2 == 0);
}

$valeurs = [0, 1, 2, 7, 10, 15, 18];

foreach ($valeurs as $v) {
    if (estPair($v)) {
        echo $v . " est pair<br>";
    } else {
        echo $v . " est impair<br>";
    }
}
?>
