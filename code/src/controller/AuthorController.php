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
        //for response format see https://select2.org/data-sources/formats
        $resultArray = array();
        $authors = AuthorManager::getAuthorsContaining($_GET['query'], $entityManager);
        foreach ($authors as $author) {
            $authorArray = array();
            $authorArray['id'] = $author->getId();
            $authorArray['text'] = $author->asString();
            $resultArray[] = $authorArray;
        }
        $resultWrapper = array('results' => $resultArray);
        echo json_encode($resultWrapper);

    } else  {
        echo "Unknown action '" . $action . "' !";
        //unknown action
    }

}


?>
