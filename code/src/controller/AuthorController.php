<?php

//todo form validation

require_once("/code/bootstrap.php");

use Model\Author;
use Manager\AuthorManager;

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == "create") {
        $author = new Author();
        $author->setTitleBefore($_POST['titleBefore']);
        $author->setFirstName($_POST['firstName']);
        $author->setLastName($_POST['lastName']);
        $author->setTitleAfter($_POST['titleAfter']);
        AuthorManager::createAuthor($author, $entityManager);
        header('Location: /index.php');
    } else if ($action == "suggest") {
        $authors = AuthorManager::getAuthorsContaining($_GET['query'], $entityManager);
        echo implode(",", array_map(function($obj){
            return $obj->asSuggestionJSON();
        }, $authors));
    } else  {
        echo "Unknown action '" . $action . "' !";
        //unknown action
    }

}


?>
