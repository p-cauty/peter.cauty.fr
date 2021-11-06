<?php

use PitouFW\Model\Admin;

Admin::rejectUnauthorizedUsers();

unset($_SESSION['uid']);
header('location: ' . WEBROOT . 'admin/login');
die;
