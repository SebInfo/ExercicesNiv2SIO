<?php
/* =========================
   Exercice 4 — outils.php
   ========================= */
function afficherListe($tab) {
    echo "<ul>";
    foreach ($tab as $element) {
        echo "<li>" . $element . "</li>";
    }
    echo "</ul>";
}
?>
