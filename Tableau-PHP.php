<!-- Exercice 1.1 – Création et affichage -->

<?php
$fruits = [ "pomme","banane", "orange"];
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
<br>

<!-- Exercice 1.2 – Accès par index -->

<?php
$fruits = ["pomme","banane", "orange"];
echo $fruits [0]; 
echo "<br>";
echo $fruits [2];
?>
<br>

<!-- Exercice 1.3 – Ajout d’éléments -->

<?php
$fruits = ["pomme","banane", "orange"];
array_push($fruits, "fraise", "framboise");
echo $fruits;
var_dump($fruits);
?>