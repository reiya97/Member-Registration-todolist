<?php

require_once 'config.php';

// 接続
// hostはコンテナ名を記載する
function connect() {
    $dsn = 'mysql:dbname=test_db;host=run-php-db;';
    $user = 'test';
    $password = 'test';
    
    try {
        $pdo = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $pdo;
    } catch (PDOException $e) {
        print('Error:'.$e->getMessage());
        exit;
    }
}