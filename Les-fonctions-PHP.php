<!-- Exercice 1.1 – Message simple -->

<?php
function saluer() {
echo "Bonjour et Bienvenue.";
};
saluer();
saluer();
?>
<br>

<!-- Exercice 1.2 – Ligne séparatrice -->

<?php
function ligne() {
    echo "----------------";
};
function bonjour() {
echo "Bonjour et Bienvenue.";
};
ligne();
bonjour();
ligne();
?>
<br>

<!-- Exercice 2.1 – Bonjour personnalisé -->

<?php
function direBonjour($prenom) {
    echo "Bonjour, $prenom !" . "<br>";
};
direBonjour("Alice");
direBonjour("Bernard");
direBonjour("Alain");
?>
<br>

<!-- Exercice 2.2 – Multiplication -->

<?php
function multiplier($a, $b) {
    $produit = $a * $b;
    echo "Le produit de $a et de $b est : $produit";
    return $produit;
};
multiplier(3,4);
?>