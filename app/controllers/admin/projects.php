<?php

use PitouFW\Core\Alert;
use PitouFW\Core\Controller;
use PitouFW\Core\Data;
use PitouFW\Core\Persist;
use PitouFW\Core\Request;
use PitouFW\Model\Admin;
use PitouFW\Model\Project;

Admin::rejectUnauthorizedUsers();

switch (Request::get()->getArg(2)) {
    case 'new':
        if (POST) {
            if ($_POST['name'] !== '' && $_POST['desc'] !== '' && $_POST['url'] !== '' && isset($_FILES['image'])) {
                if (filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
                    if (in_array(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION), Project::ALLOWED_EXTENSIONS)) {
                        $project = new \PitouFW\Entity\Project(
                            null,
                            $_POST['name'],
                            $_POST['desc'],
                            $_POST['url'],
                            Project::uploadImage('image')
                        );
                        Persist::create($project);
                        Alert::success('Project ajouté avec succès !');

                        header('location: ' . WEBROOT . 'admin/projects');
                        die;
                    } else {
                        Alert::error('Logo extension must be one the following: ' . implode(', ', Project::ALLOWED_EXTENSIONS));
                    }
                } else {
                    Alert::error('The URL field must contains an URL.');
                }
            } else {
                Alert::error('All fields must be filled.');
            }
        }

        Data::get()->add('TITLE', 'New project');
        Controller::renderView('admin/projects/new', ADMIN_LAYOUT);
        break;

    case 'edit':
        if (!Persist::exists('Project', 'id', Request::get()->getArg(3))) {
            Controller::http404NotFound();
        }

        /** @var \PitouFW\Entity\Project $project */
        $project = Persist::read('Project', Request::get()->getArg(3));

        if (POST) {
            if ($_POST['name'] !== '' && $_POST['desc'] !== '' && $_POST['url'] !== '') {
                $project->setName($_POST['name']);
                $project->setDescr($_POST['desc']);
                Alert::success('Project successfully updated.');

                if (filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
                    $project->setUrl($_POST['url']);

                    if ($_FILES['image']['size'] > 0) {
                        if (in_array(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION), Project::ALLOWED_EXTENSIONS)) {
                            $old_image = $project->getImage();
                            $project->setImage(Project::uploadImage('image'));
                            unlink(ROOT . $old_image);
                        } else {
                            Alert::error('Logo extension must be one the following: ' . implode(', ', Project::ALLOWED_EXTENSIONS));
                        }
                    }
                } else {
                    Alert::error('The URL field must contains an URL.');
                }

                Persist::update($project);
            }
        }

        Data::get()->add('TITLE', 'Edit ' . $project->getName());
        Data::get()->add('project', $project);
        Controller::renderView('admin/projects/edit', ADMIN_LAYOUT);
        break;

    case 'delete':
        if (!Persist::exists('Project', 'id', Request::get()->getArg(3))) {
            Controller::http404NotFound();
        }

        Persist::deleteById('Project', Request::get()->getArg(3));
        Alert::success('Project deleted successfully');
        header('location: ' . WEBROOT . 'admin/projects');
        die;

    case 'up':
        if (!Persist::exists('Project', 'id', Request::get()->getArg(3))) {
            Controller::http404NotFound();
        }

        Project::moveUp(Request::get()->getArg(3));
        header('location: ' . WEBROOT . 'admin/projects');
        die;

    case 'down':
        if (!Persist::exists('Project', 'id', Request::get()->getArg(3))) {
            Controller::http404NotFound();
        }

        Project::moveDown(Request::get()->getArg(3));
        header('location: ' . WEBROOT . 'admin/projects');
        die;

    default:
        Data::get()->add('TITLE', 'Projects');
        Data::get()->add('projects', Persist::fetchAll('Project', "ORDER BY ordr DESC"));
        Controller::renderView('admin/projects/list', ADMIN_LAYOUT);
}