<?php

require_once('bootstrap.php');

include("src/manager/AuthorManager.php");
include("src/model/Author.php");

use Manager\AuthorManager;
use Manager\ArticleManager;

$smarty->assign("authors", AuthorManager::getAllAuthors($entityManager));
$smarty->assign("articles", ArticleManager::getAllArticles($entityManager));
$smarty->display('index.tpl');

?>
