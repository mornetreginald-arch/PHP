<!-- Exercice 1.1 – Création et affichage -->

<?php
$fruits = ["pomme", "banane", "orange"];
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
<br>

<!-- Exercice 1.2 – Accès par index -->

<?php
$fruits = ["pomme", "banane", "orange"];
echo $fruits[0];
echo "<br>";
echo $fruits[2];
?>
<br>

<!-- Exercice 1.3 – Ajout d’éléments -->

<?php
$fruits = ["pomme", "banane", "orange"];
array_push($fruits, "fraise", "framboise");
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
<br>

<!-- Exercice 1.4 – Compter les élément -->

<?php
$fruits = ["pomme", "banane", "orange"];
$longueur = count($fruits);
echo $longueur;
?>
<br>

<!-- Exercice 2.1 – Création et lecture -->

<?php
$personnes = ["nom" => "Durand", "prenom" => "Alice", "age" => "28"];
echo $personnes["prenom"] . " " . $personnes["nom"] . " " . "a" . " " . $personnes["age"] . " " . "ans";
?>
<br>

<!-- Exercice 2.2 – Boucle sur tableau associatif -->

<?php
$personnes = ["nom" => "Durand", "prenom" => "Alice", "age" => "28"];
foreach ($personnes as $cle => $valeur){
echo $cle . " " . ":" . " " . $valeur;
}
?>
<br>

<!-- Exercice 2.3 – Modification de valeur -->

<?php
$personnes = ["nom" => "Durand", "prenom" => "Alice", "age" => "28"];
$personnes ["age"] = 30;
echo $personnes["prenom"] . " " . $personnes["nom"] . " " . "a" . " " . $personnes["age"] . " " . "ans";
?>
<br>

<!-- Exercice 2.4 – Ajout de nouvelle entrée -->

<?php
$personnes = ["nom" => "Durand", "prenom" => "Alice", "age" => "28"];
$personnes["ville"] = "Paris";
echo $personnes["prenom"] . " " . $personnes["nom"] . " " . "a" . " " . $personnes["age"] . " " . "ans" . " " . "et" . " " . "habite" . " " . "a" . " " . $personnes["ville"];
?>
<br>

<!-- Exercice 3.1 – Liste de prénoms -->

<?php
$prenoms = ["Alice", "Durand", "Bernard", "Bianca", "Ernest"];
foreach ($prenoms as $prenom) {
echo "Bonjour , $prenom !";
echo "<br>";
}
?>
<br>

<!-- Exercice 3.2 – Afficher une fiche utilisateur -->

<?php
$utilisateur = ["nom" => "Durand", "prenom" => "Alice", "email" => "durand.alice@exemple.com", "age" => "28"];
echo "Nom : " . $utilisateur['nom'] . "<br>";
echo "Prenom : " . $utilisateur['prenom'] . "<br>";
echo "Email : " . $utilisateur['email'] . "<br>";
echo "Age : " . $utilisateur['age'] . "<br>";
?>
<br>

<!-- Exercice 3.3 – Déboguer un tableau -->

<?php
$livre = ["titre" => "1984", "auteur" => "George Orwell", "annee" => "1949"];
echo "<pre>";
var_dump($livre);
echo "</pre>";
?>
