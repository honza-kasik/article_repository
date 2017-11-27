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

    public function getArticle($id, $entityManager) {
        return $entityManager->find('Model\Article', $id);
    }

    public function updateArticle($article, $entityManager) {
        $entityManager->merge($article);
        $entityManager->flush();
    }

    public function removeArticle($article, $entityManager) {
        $entityManager->remove($article);
        $entityManager->flush();
    }

}

?>
