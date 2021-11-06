<?php


namespace PitouFW\Entity;


use PitouFW\Core\Resourceable;

class Admin implements Resourceable {
    private $id;
    private $username;
    private $passwd;
    private $display_name;
    private $jam_id;

    public function __construct($id = 0, $username = '', $passwd = '', $display_name = '', $jam_id = '') {
        $this->id = $id;
        $this->username = $username;
        $this->passwd = $passwd;
    }

    public static function getTableName(): string {
        return 'admin';
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function getPasswd(): string {
        return $this->passwd;
    }

    public function setPasswd(string $passwd): void {
        $this->passwd = $passwd;
    }

    public function getDisplayName(): string {
        return $this->display_name;
    }

    public function setDisplayName(string $display_name): void {
        $this->display_name = $display_name;
    }

    public function getJamId(): string {
        return $this->jam_id;
    }

    public function setJamId(string $jam_id): void {
        $this->jam_id = $jam_id;
    }
}