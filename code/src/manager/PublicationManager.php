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

}

?>
