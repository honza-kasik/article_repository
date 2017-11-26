<?php

require_once('bootstrap.php');

include("src/manager/AuthorManager.php");
include("src/model/Author.php");

use Manager\AuthorManager;
use Manager\ArticleManager;

$articles = ArticleManager::getAllArticles($entityManager);

/*foreach ($articles as $article) {
    $authors = $article->getAuthors();
    echo "Fetched authors!";
    foreach ($authors as $author) {
        echo "Accessing author!";
        echo "Author:" . $author->getFirstName();
    }
}*/

$smarty->assign("authors", AuthorManager::getAllAuthors($entityManager));
$smarty->assign("articles", ArticleManager::getAllArticles($entityManager));
$smarty->display('index.tpl');
?>
