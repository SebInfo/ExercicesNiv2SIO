<?php
/* =========================
   Exercice 5 — scope.php
   ========================= */
$message = "Bonjour BTS SIO";

function afficherSansGlobal() {
    // echo $message; // NE MARCHE PAS : $message n'existe pas dans la fonction
    echo "Dans la fonction (sans global) : variable inaccessible<br>";
}

function afficherAvecGlobal() {
    global $message;
    echo "Avec global : " . $message . "<br>";
}

function afficherAvecParametre($msg) {
    echo "Avec paramètre : " . $msg . "<br>";
}

echo "<h1>Test portée des variables</h1>";

afficherSansGlobal();
afficherAvecGlobal();
afficherAvecParametre($message);
?>

