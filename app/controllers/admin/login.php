<?php

use PitouFW\Core\Alert;
use PitouFW\Core\Controller;
use PitouFW\Model\Admin;

if (POST) {
    if (isset($_POST['username'], $_POST['passwd']) && $_POST['username'] !== '' && $_POST['passwd'] !== '') {
        if (Admin::checkCreds($_POST['username'], $_POST['passwd'])) {
            Admin::login($_POST['username']);
            Alert::success('Welcome back!');
            header('location: ' . WEBROOT . 'admin');
            die;
        } else {
            Alert::error('Wrong username or password.');
        }
    } else {
        Alert::error('All fields must be filled.');
    }
}

Controller::renderView('admin/login', false);
