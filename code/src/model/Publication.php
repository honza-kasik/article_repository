<?php

namespace Model;

/**
 * @Entity
 **/
class Publication {

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $name;

    /** @Column(type="string") **/
    private $issue;

    /** @Column(type="string") **/
    private $year;

    /** @Column(type="string") **/
    private $issuer;

    /** @Column(type="string", nullable=true) **/
    private $place;

    /** @Column(type="string") **/
    private $issn;

    /** @Column(type="string", nullable=true) **/
    private $doi;

    /** @Column(type="string") **/
    private $pages;

    /** @Column(type="string", nullable=true) **/
    private $link;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getIssue() {
        return $this->issue;
    }

    public function setIssue($issue) {
        $this->issue = $issue;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getIssuer() {
        return $this->issuer;
    }

    public function setIssuer($issuer) {
        $this->issuer = $issuer;
    }

    public function getPlace() {
        return $this->place;
    }

    public function setPlace($place) {
        $this->place = $place;
    }

    public function getIssn() {
        return $this->issn;
    }

    public function setIssn($issn) {
        $this->issn = $issn;
    }

    public function getDoi() {
        return $this->doi;
    }

    public function setDoi($doi) {
        $this->doi = $doi;
    }

    public function getPages() {
        return $this->pages;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }
}
