<?php

// Tableau des articles
$article1 = [
    'title' => 'Article 1',
    'content' => 'This is the content of article 1'
];

$article2 = [
    'title' => 'Article 2',
    'content' => 'This is the content of article 2'
];

// Titre principal et sous-titre
echo "<h1>Bienvenue sur le blog</h1>";              // Titre principal affiché en h1
echo "<h2>Découvrez nos derniers articles</h2>";    // Sous-titre affiché en h2

// Déclaration de ma fonction cutText 
function cutText($textToCut) {                              // Fonction qui coupe le texte si il est trop long
    if (strlen($textToCut) > 30) {                          // Si la longueur du texte est supérieure à 30 caractères
        echo substr($textToCut, 0, 30) . "...";             // Alors on affiche les 30 premiers caractères du texte
    } else {                                                // Sinon
        echo $textToCut;                                    // On affiche le texte en entier
    }
}

$articles = [$article1, $article2];                 // Tableau qui contient les articles

// Affichage des articles
foreach ($articles as $article) {                   // Pour chaque article dans le tableau
    echo "<h2>";                                    // j'affiche le titre de l'article h2
    cutText($article['title']);                     // j'affiche le contenu de l'article
    echo "</h2>";                   
    echo "<p>" . $article['content'] . "</p>";      // j'affiche le contenu de l'article
    echo "<hr>"; 
}
?>

