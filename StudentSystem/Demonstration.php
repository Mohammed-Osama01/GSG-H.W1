<?php
use Classes\Student\Student;
use Classes\Courses\Courses;
use Classes\Manager\Manager;
// include('./Classes/Manager.php');
// include('./Classes/Student.php');

include __DIR__ . '/autoload.php';
$manager = new Manager();

$std1 = new Student('Mohammed Osama', 'mohammed@gmail.com');
$manager->addStd($std1);

$std2 = new Student('Ibrahim Jalal', 'ibrahim@gmail.com');
$manager->addStd($std2);


$manager->updateStudent($std2, 'Ahmed', 'ahmed@gmail.com');


$manager->deleteStudent($std1);
