<?php
echo "Hello the team!";

echo "<br>";

$article1 = [
    'title' => 'Article 1',
    'content' => 'This is the content of article 1'
];

$article2 = [
    'title' => 'Article 2',
    'content' => 'This is the content of article 2'
];


$articles = [$article1, $article2];
foreach ($articles as $article) {
    echo "<h2>" . $article['title'] . "</h2>";
    echo "<p>" . $article['content'] . "</p>";
    echo "<hr>"; 
}

//ou foreach ($articles as $article) {
 //   if (!empty($article['title']) && !empty($article['content'])) { si on veut afficher que les articles qui ont un titre et un contenu
 //       echo "<h2>" . $article['title'] . "</h2>";                  et qu'il n'y a pas de titre ou de contenu vide
 //       echo "<p>" . $article['content'] . "</p>";
  //      echo "<hr>"; 
  //  }
//}
 //for ($i = 0; $i < count($articles); $i++) {
  //  echo "<h2>" . $articles[$i]['title'] . "</h2>";
   // echo "<p>" . $articles[$i]['content'] . "</p>";
    //echo "<hr>";
//}









?>