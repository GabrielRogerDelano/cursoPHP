<?php 
 
use Gabrielrogerdelano\Pdo\Domain\Model\Student;
require 'vendor/autoload.php';

$student = new Student(
    null,
    'rafael',
    new \DateTimeImmutable('2007-05-22')
);

echo $student->age();
?>