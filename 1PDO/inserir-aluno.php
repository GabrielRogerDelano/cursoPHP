<?php 

use Gabrielrogerdelano\Pdo\Domain\Model\Student;
use Gabrielrogerdelano\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(
    null, 
    'Antonio', 
    new \DateTimeImmutable('2002-09-15')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
/*a chamada 'prepare()' faz com que o php se prepare para receber os bin value que eu coloquei, fando com que fique mais seguro e evite o SQL Inject */
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()){
    echo "Aluno incluido";
}
else{
    echo "erro";
}

?>