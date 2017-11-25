<?php

//todo form validation

require_once("/code/bootstrap.php");

use Model\Publication;
use Manager\PublicationManager;
use Model\Article;
use Manager\ArticleManager;
use Manager\AuthorManager;

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == "create") {
        $article = new Article();
        $article->setName($_POST['articleName']);
        $article->setPublication(extractPublicationFromPost($entityManager));
        $idArray = preg_split('/[^a-z0-9.\']+/i', $_POST['articleAuthors']);
        foreach ($idArray as $authorId) {
            $article->addAuthor(AuthorManager::getAuthor($authorId, $entityManager));
        }
        ArticleManager::createArticle($article, $entityManager);
        header('Location: /index.php');
    } else  {
        echo "Unknown action '" . $action . "' !";
        //unknown action
    }
}

function extractPublicationFromPost($entityManager) {
    $publication = new Publication();
    $publication->setName($_POST['publicationName']);
    $publication->setIssuer($_POST['publicationIssuer']);
    $publication->setIssue($_POST['publicationIssue']);
    $publication->setPlace($_POST['publicationPlace']);
    $publication->setYear($_POST['publicationYear']);
    $publication->setPages($_POST['publicationPages']);
    $publication->setIssn($_POST['publicationISSN']);
    $publication->setDoi($_POST['publicationDOI']);
    $publication->setLink($_POST['publicationLink']);
    //todo escape and validate
    PublicationManager::createPublication($publication, $entityManager);
    return $publication;
}

?>
