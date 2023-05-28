<?php 

namespace  Gabrielrogerdelano\Pdo\Infrastructure\Repository;

use DateTimeInterface;
use Gabrielrogerdelano\Pdo\Domain\Model\Student;
use  Gabrielrogerdelano\Pdo\Domain\Repository\StudentRepository;
use Gabrielrogerdelano\Pdo\Infrastructure\Persistence\ConnectionCreator;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private PDO $connection;    
    public function __construct()
    {
        $this->connection=ConnectionCreator::createConnection();
    }
    public function allStudents():array
    {
        //q
    }
    public function stundentsBirth(DateTimeInterface $birthDate): array
    {
        //q
    }
    public function save(Student $student): bool
    {
        //q
    }
    public function remove(Student $student): bool
    {
        //q
    }
};
?>