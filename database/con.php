<?php
$hostname = 'localhost';
$database = 'to_do_php';
$username = 'postgres';
$password = '123456';

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage(); 
}

