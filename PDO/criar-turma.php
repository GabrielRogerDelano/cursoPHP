<?php

use Gabrielrogerdelano\Pdo\Domain\Model\Student;
use Gabrielrogerdelano\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Gabrielrogerdelano\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

$aStudent = new Student(
    null,
    'Nico',
    new DateTimeImmutable('1999-02-08')
);
$studentRepository->save($aStudent);

$anotherStudent = new Student(
    null,
    'John',
    new DateTimeImmutable('1999-04-08')
);
$studentRepository->save($anotherStudent);

$connection->commit();
?>