<?php


namespace PitouFW\Entity;


use PitouFW\Core\Persist;
use PitouFW\Core\Resourceable;

class Project implements Resourceable {
    private $id;
    private $name;
    private $descr;
    private $url;
    private $image;
    private $ordr;

    public function __construct($id = null, $name = '', $descr = '', $url = '', $image = '') {
        $this->id = $id;
        $this->name = $name;
        $this->descr = $descr;
        $this->url = $url;
        $this->image = $image;

        $last_order = Persist::count('Project') + 1;
        $this->ordr = $last_order;
    }

    public static function getTableName(): string {
        return 'project';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id) {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getDescr(): string {
        return $this->descr;
    }

    public function setDescr(string $descr) {
        $this->descr = $descr;
    }

    public function getUrl(): string {
        return $this->url;
    }


    public function setUrl(string $url) {
        $this->url = $url;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function setImage(string $image) {
        $this->image = $image;
    }

    public function getOrdr(): int {
        return $this->ordr;
    }

    public function setOrdr(int $ordr) {
        $this->ordr = $ordr;
    }
}