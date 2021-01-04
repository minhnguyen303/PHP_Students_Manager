<?php
include_once 'Manager.php';
include_once 'Student.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Get action //
    $action = $_POST['action'];

    // Get other value //
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $subject = $_POST['subject'];
    $from = $_POST['from'];

    // Create Manager //
    $manager = new Manager();

    switch ($action){
        case 'create':
            $student = new Student($name, $gender, $birth, $subject, $from);
            $manager->add($student);
            unset($student);
            break;
        case 'update':
            break;
    }
}
elseif ($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo 2;
}

