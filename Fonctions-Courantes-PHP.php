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
if (isset($nom)) {
    echo "La varible est définie";
} else {
    echo "La variable n'est pas définie";
}
?>
<br>

<!-- Exercice 3.3 – Forcer un type booléen -->

<?php
$chainePleine = "Hello";
$zero         = 0;
$un           = 1;
$chaineVide   = "";

echo "<pre>"; 

echo "Chaîne 'Hello' : ";
var_dump( (bool) $chainePleine );

echo "Le nombre 0    : ";
var_dump( boolval($zero) );

echo "Le nombre 1    : ";
var_dump( (bool) $un );

echo "Chaîne vide    : ";
var_dump( boolval($chaineVide) );

echo "</pre>";
?>
<br>

<!-- Exercice 4.1 – Compter les éléments -->

<?php
$tableau = ["Jerry", "James", "Peter", "Pan", "Alice"];
echo count($tableau);
?>
<br>

<!-- Exercice 4.2 – Ajouter et supprimer -->

<?php
$prenom = ["Jerry", "James", "Peter", "Pan", "Alice"];
array_push($prenom, "Alan");
echo "<pre>";
print_r($prenom);
echo "</pre>";

array_pop($prenom);
echo "<pre>";
print_r($prenom);
echo "</pre>";
?>
<br>

<!-- Exercice 4.3 – Trier un tableau -->

<?php
$prenom = ["Jerry", "James", "Peter", "Pan", "Alice"];
sort($prenom);
echo "<pre>";
print_r($prenom);
echo "</pre>";
?>
<br>

<!-- Exercice 4.4 – Rechercher dans un tableau -->

<?php
$prenom = ["Jerry", "James", "Peter", "Pan", "Alice"];
if (in_array("Marie", $prenom)) {
    echo "Marie se trouve bien dans le tableau";
} else {
    echo "Marie ne se trouve pas dans le tableau";
}
?>