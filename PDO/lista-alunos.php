<?php

use Gabrielrogerdelano\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students;');

/*
método usado para quando quer pegar todos os valores de um bd com muitos usuario sem usar tanto a memoria

while($studentData = $statement->fetch(pdo::FETCH_ASSOC)){
    $student = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
    echo $student->age() . PHP_EOL;
}
exit();
*/


$studentDataList = $statement->fetchAll(pdo::FETCH_ASSOC);
$studentList = [];

foreach($studentDataList as $studentData){
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);
?>