<?php

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

echo 'Conectei';

$pdo->exec('CREATE TABLE students(id INTEGER PRIMARY kEY, name TEXT, birth_date TEXT);');