<?php

namespace Manager;

class PublicationManager {

    public function createPublication($publication, $entityManager) {
        $entityManager->persist($publication);
        $entityManager->flush();
    }

    public function getAllPublications($entityManager) {
        $records = $entityManager->getRepository("Model\Publication")->findAll();
        return $records;
    }

    function getPublication($id, $entityManager) {
        return $entityManager->find('Model\Publication', $id);
    }

    public function updatePublication($publication, $entityManager) {
        $entityManager->merge($publication);
        $entityManager->flush();
    }
}

?>
