<?php 

namespace  Gabrielrogerdelano\Pdo\Domain\Repository;
use  Gabrielrogerdelano\Pdo\Domain\Model\Student;

interface StudentRepository
{
    public function allStudents(): array;
    public function stundentsBirthAt(\DateTimeInterface $birthDate): array;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;
}
?>