<?php

namespace Model;

/**
 * @Entity()
 * @Table(name="article")
 **/
class Article {

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $name;

    /** @OneToOne(targetEntity="Model\Publication") **/
    private $publication;

    /**
     * @ManyToMany(targetEntity="Model\Author", mappedBy="articles")
     */
    private $authors;

    public function __construct() {
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPublication() {
        return $this->publication;
    }

    public function setPublication($publication) {
        $this->publication = $publication;
    }

    public function getAuthors() {
        return $this->authors;
    }

    public function addAuthor($author) {
        $this->authors->add($author);
        $author->addArticle($this);
    }

    public function setAuthors($authors) {
        $this->authors = $authors;
    }
}
