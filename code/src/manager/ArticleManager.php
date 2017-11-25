<?php

namespace Manager;

class ArticleManager {

    public function createArticle($article, $entityManager) {
        $entityManager->persist($article);
        $entityManager->flush();
    }

    public function getAllArticles($entityManager) {
        $records = $entityManager->getRepository("Model\Article")->findAll();
        return $records;
    }

}

?>
