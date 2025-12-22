<!-- Exercice 1.1 – Affichage d’un prénom -->

<?php
$prenom = "Réginald";
echo "Bonjour $prenom !";
?>


<!-- Exercice 1.2 – Addition de deux nombres -->

<?php
$a = 4;
$b = 7;
$somme = $a + $b;
echo "La somme de 4 et de 7 est $somme";
?>


<!-- Exercice 1.3 – Présentation personnelle -->

<?php
$prenom = "Reginald";
$nom = "Mornet";
$age = "33 ans";
echo "Je m'appelle $prenom $nom et j'ai $age";
?>


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
    $i++;
}
if ($i % 2 === 0) {
    echo $i;
}
?>