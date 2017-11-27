<?php

namespace Manager;

class AuthorManager {

    function createAuthor($author, $entityManager) {
        $entityManager->persist($author);
        $entityManager->flush();
    }

    function removeAuthor($author, $entityManager) {
        $entityManager->remove($author);
        $entityManager->flush();
    }

    function getAuthor($authorId, $entityManager) {
        return $entityManager->find('Model\Author', $authorId);
    }

    function getAllAuthors($entityManager) {
        $records = $entityManager->getRepository('Model\Author')->findAll();
        return $records;
    }

    function updateAuthor($author, $entityManager) {
        $entityManager->merge($author);
        $entityManager->flush();
    }

    function getAuthorsContaining($word, $entityManager) {
        $qb = $entityManager->createQueryBuilder();
        return $qb->select('a')
            ->from('Model\Author', 'a')
            ->where($qb->expr()->like('a.firstName', ':word'))
            ->orWhere($qb->expr()->like('a.lastName', ':word'))
            ->orWhere($qb->expr()->like('a.titleBefore', ':word'))
            ->orWhere($qb->expr()->like('a.titleAfter', ':word'))
            ->setParameter('word', '%'.$word.'%')
            ->getQuery()
            ->getResult();
    }

}

?>
