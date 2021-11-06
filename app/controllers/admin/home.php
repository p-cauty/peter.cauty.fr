<?php

use PitouFW\Core\Controller;
use PitouFW\Model\Admin;

Admin::rejectUnauthorizedUsers();


Controller::renderView('admin/home/dashboard', ADMIN_LAYOUT);