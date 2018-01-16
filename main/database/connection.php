<?php
$dsn = 'mysql:host=localhost;dbname=temp123';
$user = 'root';
$password = 'jamiejamie';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection error! ' . $e->getMessage();
}