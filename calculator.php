<?php
//Déclaration de ma fonction
function addNumbers($number1, $number2) { //je lui passe en paramètres deux nombres
    //je déclare une variable $result qui va contenir le résultat de l'addition des deux nombres
    $result = $number1 + $number2;
    echo "Le résultat de l'addition de $number1 et $number2 est : $result\n"; 
    //j'affiche le résultat et les deux nombres passés en paramètres et \n pour un espacement entre les résultats sur la même ligne
}

// J'appelle la fonction avec différentes valeurs
addNumbers(5, 3);       // Résultat attendu : 8 
echo "<br>"; //pour un retour à la ligne
addNumbers(10, 20);     // Résultat attendu : 30
echo "<br>";
addNumbers(-7, 7);      // Résultat attendu : 0
echo "<br>";
addNumbers(2.5, 3.5);   // Résultat attendu : 6.0


function substractNumbers($number1, $number2) {
    $result = $number1 - $number2;
    echo "Le résultat de la soustraction de $number1 et $number2 est : $result\n";
}

$substractNumbers(15, 3);       // Résultat attendu : 12
echo "<br>";    

function multiplyNumbers($number1, $number2) {
    $result = $number1 * $number2;
    echo "Le résultat de la multiplication de $number1 et $number2 est : $result\n";
}

echo "<br>";
$multiplyNumbers(5, 3);       // Résultat attendu : 15

function divideNumbers($number1, $number2) {
    $result = $number1 / $number2;
    echo "Le résultat de la division de $number1 et $number2 est : $result\n";
}
$divideNumbers(15, 3);       // Résultat attendu : 5 

echo "<br>";    
function racineNumbers($number1) {
    $result = sqrt($number1);
    echo "La racine carrée de $number1 est : $result\n";
}
echo "<br>";
$racineNumbers(25);       // Résultat attendu : 5   
?>