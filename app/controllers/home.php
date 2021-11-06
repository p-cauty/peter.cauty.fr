<?php

use PitouFW\Core\Controller;
use PitouFW\Core\Data;
use PitouFW\Core\Persist;

Data::get()->add('projects', Persist::fetchAll('Project', "ORDER BY ordr DESC"));
Controller::renderView('home/home');