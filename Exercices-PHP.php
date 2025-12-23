<!-- Exercice 1.1 – Affichage d’un prénom -->

<?php
$prenom = "Réginald";
echo "Bonjour $prenom !";
?>
<br>

<!-- Exercice 1.2 – Addition de deux nombres -->

<?php
$a = 4;
$b = 7;
$somme = $a + $b;
echo "La somme de 4 et de 7 est $somme";
?>
<br>

<!-- Exercice 1.3 – Présentation personnelle -->

<?php
$prenom = "Reginald";
$nom = "Mornet";
$age = "33 ans";
echo "Je m'appelle $prenom $nom et j'ai $age";
?>
<br>

<!-- Exercice 2.1 – Majeur ou mineur -->

<?php
$age = 33;
if ($age <= 17) {
    echo "Vous êtes mineur.";
}
else {
    echo "Vous êtes majeur.";
}
?>
<br>

<!-- Exercice 2.2 – Pair ou impair -->

<?php
$nombre = 15;
if ($nombre % 2 === 0) {
    echo "Le nombre est pair";
}
else {
    echo "Le nombre est impair";
}
?>
<br>

<!-- Exercice 2.3 – Appréciation d’une note -->

<?php
$note = 1.5;
if ($note <= 9) {
    echo "Insuffisant !";
}
elseif ($note <= 13) {
    echo "Passable";
}
elseif ($note <= 16) {
    echo "Bien";
}
else {
    echo "Très bien";
}
?>
<br>

<!-- Exercice 3.1 – Compter de 1 à 10 -->

<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>


<!-- Exercice 3.2 – Nombres pairs jusqu’à 20 -->

<?php
$i = 0;
while ($i <= 20) {
    if ($i % 2 === 0) {
    echo $i . " ";
}
$i++;
}
?>
<br>

<!-- Exercice 3.3 – Table de multiplication d’un nombre -->

<?php
$n = 5;
for ($i = 1; $i <= 10; $i++) {
    $resultat = $n * $i;
    echo $n . " " . "x" . " " . $i . " " . "=" . " " . $resultat . "<br>";
}
?>


<!-- Exercice 4.1 – Corriger les erreurs de syntaxe -->

<?php
$nombre1 = 5;
$nombre2 = 3;
$somme = $nombre1 + $nombre2;
echo "La somme est : $somme";
var_dump($nombre2);
?>
<br>

<!-- Exercice 4.2 – Problème de condition -->

<?php
$age = 18;
if($age == 21) {
    echo "Vous avez 21 ans.";
} else {
    echo "Vous n'avez pas 21 ans.";
}
var_dump($age)
?>
<br>

<!-- Exercice 5.1 – Générateur de mot de passe simplifié -->

<?php
// 1. On initialise la variable vide
$motDePasse = "";

// 2. On lance la boucle pour 8 tours
for ($i = 0; $i < 8; $i++) {

    // 3. On tire à pile ou face : Chiffre (1) ou Lettre (2) ?
    $type = rand(1, 2);

    if ($type == 1) {
        // CAS : CHIFFRE (0-9)
        // En ASCII, le chiffre '0' commence à 48.
        // On tire un nombre entre 0 et 9 et on l'ajoute à 48.
        $valeurAscii = 48 + rand(0, 9);
        $motDePasse .= chr($valeurAscii);
    } 
    else {
        // CAS : LETTRE (a-z)
        // En ASCII, la lettre 'a' commence à 97.
        // On tire un nombre entre 0 et 25 (l'alphabet) et on l'ajoute à 97.
        $valeurAscii = 97 + rand(0, 25);
        $motDePasse .= chr($valeurAscii);
    }
}

echo "Mot de passe généré : " . $motDePasse;
?>
<br>

<!-- Exercice 5.2 – Calculatrice simple -->

<?php
$a = 2;
$b = 4;
$operation = "+";
if ($operation == "+") {
    $resultat = $a + $b;
}
elseif ($operation == "/") {
    $resultat = $a / $b;
}
echo "Le resultat est $resultat";
?>