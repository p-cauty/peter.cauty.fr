<?php


namespace PitouFW\Entity;


use PitouFW\Core\Resourceable;

class Banned implements Resourceable {
    private $id;
    private $ip;

    public function __construct($id = 0, $ip = '') {
        $this->id = $id;
        $this->ip = $ip;
    }

    public static function getTableName(): string {
        return 'banned';
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getIp(): string {
        return $this->ip;
    }

    public function setIp(string $ip): void {
        $this->ip = $ip;
    }
}