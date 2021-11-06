<?php


namespace PitouFW\Model;


use PitouFW\Core\DB;
use PitouFW\Core\Persist;

class Project {
    const ALLOWED_EXTENSIONS = [
        'jpg',
        'jpeg',
        'png'
    ];

    public static function uploadImage($filename) {
        $name = md5(uniqid()) . '.' . pathinfo($_FILES[$filename]['name'], PATHINFO_EXTENSION);
        $dest = UPLOADS_DIR . $name;
        move_uploaded_file($_FILES[$filename]['tmp_name'], ROOT . $dest);

        return $dest;
    }

    public static function moveUp($id) {
        /** @var \PitouFW\Entity\Project $project */
        $project = Persist::read('Project', $id);
        $project->setOrdr($project->getOrdr() + 1);

        /** @var \PitouFW\Entity\Project $up_project */
        $up_project = Persist::readBy('Project', 'ordr', $project->getOrdr());
        $up_project->setOrdr($up_project->getOrdr() - 1);

        Persist::update($project);
        Persist::update($up_project);
    }

    public static function moveDown($id) {
        /** @var \PitouFW\Entity\Project $project */
        $project = Persist::read('Project', $id);
        $project->setOrdr($project->getOrdr() - 1);

        /** @var \PitouFW\Entity\Project $up_project */
        $down_project = Persist::readBy('Project', 'ordr', $project->getOrdr());
        $down_project->setOrdr($down_project->getOrdr() + 1);

        Persist::update($project);
        Persist::update($down_project);
    }
}