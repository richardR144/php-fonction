<?php
//Déclaration de ma fonction
function addNumbers($number1, $number2) {
    $result = $number1 + $number2;
    echo "Le résultat de l'addition de $number1 et $number2 est : $result";
}

// J'appelle la fonction avec différentes valeurs
addNumbers(5, 3);       // Résultat attendu : 8  
echo "<br>";
addNumbers(10, 20);     // Résultat attendu : 30
echo "<br>";
addNumbers(-7, 7);      // Résultat attendu : 0
echo "<br>";
addNumbers(2.5, 3.5);   // Résultat attendu : 6.0

?>