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
<br>

<!-- Exercice 3.1 – Calcul du carré -->

<?php
function carre($nombre) {
    return sqrt ($nombre);
};
$valeur = carre(10);
echo "La valeur de 10 est : $valeur";
?>
<br>

<!-- Exercice 3.2 – Année de naissance -->

<?php
function anneeNaissance($age) {
    $annee = date("2026");
    return $annee - $age;
};
$votreAge = 34;
$anneeEstime = anneeNaissance($votreAge);
echo "Si vous avez $votreAge, vous êtes né en $anneeEstime";
?>
<br>

<!-- Exercice 4.1 – Majeur ou mineur -->

<?php
function estMajeur($age) { 
    if ($age < 18) {
        echo "Vous êtes mineur";
        return false;
        
    }
    else {
        echo "Vous êtes majeur";
        return true;
        
    }
}
estMajeur(17);
?>
<br>

<!-- Exercice 4.2 – Nombre pair -->

<?php
function estPair($nombre) {
    if ($nombre % 2 === 0) {
        echo "Votre nombre ou chiffre est ";
        return "Pair";
    } else {
        echo "Votre nombre ou chiffre est ";
        return "Impair";
    }
}
echo estPair(12);
?>
<br>

<!-- Exercice 5.1 – Générateur de phrase complète -->

<?php
function presentation($prenom, $nom, $age) {
    return "Je m'appelle $prenom $nom et j'ai $age";
};
echo presentation("Alain", "Dupont", "32");
?>
<br>

<!-- Exercice 5.2 – Calculatrice simple -->

<?php
function calculer($a, $b, $operation) {
    if ($operation === "+") {
        return $a + $b;
    } elseif ($operation === "-") {
        return $a - $b;
    } elseif ($operation === "*") {
        return $a * $b;
    } elseif ($operation === "/") {
        return $a / $b;
    } else {
        return "Erreur d'operation";
    }
}
echo calculer(35, 35, "-");
?>
<br>

<!-- Exercice 5.3 – Génération de lignes numérotées -->

<?php
function afficherLignes($n) {
    for ($i = 1; $i <= $n; $i++) { 
        echo "Ceci est la ligne numéro $i" . "<br>";
        
    }
}
afficherLignes(3);
?>