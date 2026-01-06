<!-- Exercice 1.1 – Longueur d'une chaîne -->

<?php
$texte = "Il neige actuellement";
$nombre = strlen($texte);
echo "La phrase à $nombre caratères dans la chaîne";
?>
<br>

<!-- Exercice 1.2 – Mise en majuscules et minuscules -->

<?php
$texte = "Il neige dehors actuellement";
$majuscule = strtoupper($texte);
echo $majuscule . "<br>";
$minuscule = strtolower($texte);
echo $minuscule;
?>
<br>

<!-- Exercice 1.3 – Rechercher un mot -->

<?php
$phrase = "Le HTML est un langage puissant.";
$position = strpos($phrase, "PHP");
if ($position !== false) {
    echo "PHP à été trouvé à la position : $position";
} else {
    echo "Le mot PHP n'a pas été trouvé";
}
?>
<br>

<!-- Exercice 1.4 – Remplacer un mot -->

<?php
$phrase = "Le PHP est difficile";
$newPhrase = str_replace("difficile", "facile", $phrase);
echo $newPhrase;
?>
<br>

<!-- Exercice 2.1 – Arrondi d’un nombre -->

<?php
$nombre = 3.75;
echo "arrondi mathématique" . round($nombre) . "<br>";
echo "arrondi inferieur" . floor($nombre) . "<br>";
echo "arrondi superieur" . ceil($nombre) . "<br>";
?>
<br>

<!-- Exercice 2.2 – Nombre aléatoire -->

<?php
$nombre = rand(1, 100);
echo "Le nombre est : $nombre"
?>
<br>

<!-- Exercice 2.3 – Formater un prix -->

<?php
$nombre = 6333.89;
echo number_format($nombre, 2);
?>
<br>

<!-- Exercice 3.1 – Tester une variable vide -->

<?php
$valeur = "0";
if (empty($valeur)) {
    echo "La valeur est vide";
}
?>
<br>

<!-- Exercice 3.2 – Tester si une variable existe -->

<?php
