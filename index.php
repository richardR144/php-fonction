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
echo $articles[0]['title'];
echo $articles[0]['content'];   









?>