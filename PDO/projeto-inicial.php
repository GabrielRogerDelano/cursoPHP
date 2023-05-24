<?php 
 
use PDO\Domain\Model\Student;
require_once 'vendor/autoload.php';

$student = new Student(
    id:null,
    name:'rafael',
    new \DateTimeImmutable(time:'2007-05-22')
);

echo $student->age();
?>