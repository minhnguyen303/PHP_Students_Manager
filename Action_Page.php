<?php
include_once 'Manager.php';
include_once 'Student.php';

// Create Manager //
$manager = new Manager();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Get action //
    $action = $_POST['action'];

    // Get other value //
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $subject = $_POST['subject'];
    $from = $_POST['from'];

    switch ($action){
        case 'create':
            $student = new Student($name, $gender, $birth, $subject, $from);
            $manager->add($student);
            unset($student);
            break;
        case 'update':
            break;
        case 'edit':

            break;
        case 'delete':
            $index = $_POST['index'];
            $manager->delete($index);
            break;
    }
    header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo 222;
}

