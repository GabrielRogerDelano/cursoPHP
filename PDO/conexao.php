<?php

use Gabrielrogerdelano\Pdo\Infrastructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();

echo 'Conectei';

$pdo->exec('CREATE TABLE students(id INTEGER PRIMARY kEY, name TEXT, birth_date TEXT);');