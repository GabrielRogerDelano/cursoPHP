<?php

use Gabrielrogerdelano\Pdo\Domain\Model\Student;
use Gabrielrogerdelano\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Gabrielrogerdelano\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();
$repository= new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

var_dump($studentList);
?>