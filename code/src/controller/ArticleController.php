<?php
require_once("/code/bootstrap.php");

use Model\Publication;
use Manager\PublicationManager;
use Model\Article;
use Manager\ArticleManager;
use Manager\AuthorManager;

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    //todo form validation

    if ($action == "create") {
        $article = new Article();
        $article->setName($_POST['articleName']);
        $article->setPublication(createNewPublication($entityManager));
        foreach ( $_POST['articleAuthors'] as $authorId) {
            $author = AuthorManager::getAuthor($authorId, $entityManager);
            $article->addAuthor($author);
        }
        ArticleManager::createArticle($article, $entityManager);
        header('Location: /index.php');
    } else if ($action == "edit") {
        $id = $_GET['id'];
        $article = ArticleManager::getArticle($id, $entityManager);
        $article->setName($_POST['articleName']);
        $article->setPublication(updatePublication($article->getPublication()->getId(), $entityManager));
        processAuthorUpdates($entityManager);
        ArticleManager::updateArticle($article, $entityManager);
        header('Location: /index.php');
    } else  {
        echo "Unknown action '" . $action . "' !";
        //unknown action
    }
}

/**
 * Add or remove author according to POST state
**/
function processAuthorUpdates($entityManager) {
    $authorIdsSaved = array();
    foreach ($article->getAuthors() as $author) {
        $authorIdsSaved[] = $author->getId();
    }
    $authorIdsFromPost = array_map(intval, $_POST['articleAuthors']);
    $authorIdsToCreate = array_diff($authorIdsFromPost, $authorIdsSaved);
    $authorIdsToDelete = array_diff($authorIdsSaved, $authorIdsFromPost);
    foreach ($authorIdsToCreate as $authorId) {
        $author = AuthorManager::getAuthor($authorId, $entityManager);
        $article->addAuthor($author);
    }
    foreach ($authorIdsToDelete as $authorId) {
        $author = AuthorManager::getAuthor($authorId, $entityManager);
        $article->removeAuthor($author);
    }
}

function updatePublication($id, $entityManager) {
    $publication = PublicationManager::getPublication($id, $entityManager);
    setPubPropertiesFromPost($publication);
    PublicationManager::updatePublication($publication, $entityManager);
    return $publication;
}

function createNewPublication($entityManager) {
    $publication = new Publication();
    setPubPropertiesFromPost($publication);
    //todo escape and validate
    PublicationManager::createPublication($publication, $entityManager);
    return $publication;
}

function setPubPropertiesFromPost($publication) {
    $publication->setName($_POST['articlePublicationName']);
    $publication->setIssuer($_POST['articlePublicationIssuer']);
    $publication->setIssue($_POST['articlePublicationIssue']);
    $publication->setPlace($_POST['articlePublicationPlace']);
    $publication->setYear($_POST['articlePublicationYear']);
    $publication->setPages($_POST['articlePublicationPages']);
    $publication->setIssn($_POST['articlePublicationISSN']);
    $publication->setDoi($_POST['articlePublicationDOI']);
    $publication->setLink($_POST['articlePublicationLink']);
    return $publication;
}

?>
