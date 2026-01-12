<?php
/* =========================
   Exercice 1 — notes.php
   ========================= */
$notes = [12, 15, 9, 18, 14];

echo "<h1>Notes</h1>";

foreach ($notes as $note) {
    echo $note . "<br>";
}

$nbNotes = count($notes);
$somme = array_sum($notes);
$moyenne = $somme / $nbNotes;

echo "<hr>";
echo "Nombre de notes : " . $nbNotes . "<br>";
echo "Somme : " . $somme . "<br>";
echo "Moyenne : " . round($moyenne, 2) . "<br>";
?>
