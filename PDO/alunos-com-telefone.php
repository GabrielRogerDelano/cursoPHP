<?php

use Gabrielrogerdelano\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Gabrielrogerdelano\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

$studentList = $repository->studentsWithPhones();

var_dump($studentList);
?>