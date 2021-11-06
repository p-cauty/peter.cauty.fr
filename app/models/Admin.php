<?php


namespace PitouFW\Model;


use PitouFW\Core\Persist;

class Admin {
    public static $admin = null;

    public static function rejectUnauthorizedUsers(): void {
        if (!self::isLogged()) {
            header('location: ' . WEBROOT . 'admin/login');
            die;
        }
    }

    public static function isLogged(): bool {
        return isset($_SESSION['uid']);
    }

    public static function checkCreds($username, $passwd): bool {
        $username = strtolower($username);

        if (!Persist::exists('Admin', 'username', $username)) {
            return false;
        }

        /** @var \PitouFW\Entity\Admin $admin */
        $admin = Persist::readBy('Admin', 'username', $username);

        return password_verify($passwd, $admin->getPasswd());
    }

    public static function login($username): void {
        /** @var \PitouFW\Entity\Admin $admin */
        $admin = Persist::readBy('Admin', 'username', $username);
        $_SESSION['uid'] = $admin->getId();
    }

    public static function get(): ?\PitouFW\Entity\Admin {
        if (!isset($_SESSION['uid'])) {
            return null;
        }

        if (self::$admin === null) {
            /** @var \PitouFW\Entity\Admin $admin */
            $admin = Persist::read('Admin', $_SESSION['uid']);
            self::$admin = $admin;
        }

        return self::$admin;
    }
}