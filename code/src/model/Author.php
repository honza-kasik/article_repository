<?php

namespace Model;

/**
 * @Entity()
 * @Table(name="author")
 **/
class Author {

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     **/
    private $id;

    /** @Column(type="string") **/
    private $firstName;

    /** @Column(type="string") **/
    private $lastName;

    /** @Column(type="string", nullable=true) **/
    private $titleBefore;

    /** @Column(type="string", nullable=true) **/
    private $titleAfter;

    /**
     * @ManyToMany(targetEntity="Article", inversedBy="authors")
     * @JoinTable(name="authors_articles")
    **/
    private $articles;

    public function __construct() {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getTitleBefore() {
        return $this->titleBefore;
    }

    public function setTitleBefore($titleBefore) {
        $this->titleBefore = $titleBefore;
    }

    public function getTitleAfter() {
        return $this->titleAfter;
    }

    public function setTitleAfter($titleAfter) {
        $this->titleAfter = $titleAfter;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getArticles() {
        return $this->articles;
    }

    public function addArticle($article) {
        $this->articles->add($article);
    }

    public function asString() {
        $string = "$this->titleBefore";
        if (!is_null($this->titleBefore)) {
            $string .= " ";
        }
        $string .= "$this->firstName $this->lastName";
        if (!is_null($this->titleAfter) && $this->titleAfter != "") {
            $string .= ", $this->titleAfter";
        }
        return $string;
    }

    public function asJSArray() {
        $string = $this->asString();
        return "{\"value\": $this->id, \"label\": \"$string\"}";
    }

    public function asSuggestionJSON() {
        return "{\"value\": \"". $this->asString() . "\", \"suggestion\": " . $this->asJSArray() . "}";
    }
}

?>
