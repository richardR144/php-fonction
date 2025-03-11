<?php
function addNumbers($number1, $number2) {
    // Je déclare une variable $result qui va contenir le résultat de l'addition des deux nombres
    // J'affiche le résultat en utilisant la concaténation
    echo "<p>Le résultat de l'addition de " . $number1 . " et " . $number2 . " est : " .$number1 + $number2. "</p>";
}

// J'appelle la fonction avec différentes valeurs sans le $ devant la fonction
addNumbers(5, 3); // Résultat attendu : Le résultat de l'addition de 5 et 3 est : 8 

?>

<?php
function substractNumbers($number1, $number2) {
    // Je déclare une variable $result qui va contenir le résultat de la soustraction des deux nombres
    // J'affiche le résultat en utilisant la concaténation
    echo "<p>Le résultat de la soustraction de " . $number1 . " et " . $number2 . " est : " .$number1 - $number2. "</p>";
}

// J'appelle la fonction avec différentes valeurs
substractNumbers(15, 3); // Résultat attendu : Le résultat de la soustraction de 15 et 3 est : 12
?>

<?php
function multiplyNumbers($number1, $number2) {
    // Je déclare une variable $result qui va contenir le résultat de la multiplication des deux nombres
    // J'affiche le résultat en utilisant la concaténation
    echo "<p>Le résultat de la multiplication de " . $number1 . " et " . $number2 . " est : " .$number1 * $number2. "</p>";
}

multiplyNumbers(5, 3); // Résultat attendu : Le résultat de la multiplication de 5 et 3 est : 15
?>  

<?php
function divideNumbers($number1, $number2) {
    // Je déclare une variable $result qui va contenir le résultat de la division des deux nombres
    // J'affiche le résultat en utilisant la concaténation
    echo "<p>Le résultat de la division de " . $number1 . " et " . $number2 . " est : " .$number1 / $number2. "</p>";
}

divideNumbers(15, 3); // Résultat attendu : Le résultat de la division de 15 et 3 est : 5

?>

<?php
function racineNumbers($number1) {
    // Je déclare une variable $result qui va contenir le résultat de la racine carrée du nombre
    // J'affiche le résultat en utilisant la concaténation
    echo "<p>La racine carrée de " . $number1 . " est : " . sqrt($number1) . "</p>";
}

racineNumbers(25); // Résultat attendu : La racine carrée de 25 est : 5

?>
