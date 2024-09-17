<?php

try {
    $db = new PDO('sqlite:'.dirname(__FILE__).'/database.db');

    $items = $db->query('SELECT * FROM message')
    ->fetchAll();

    echo json_encode($items);
} catch (Exception $exception) {
    http_response_code(400);

    echo json_encode(['error' => $exception->pdo->query('SELECT * FROM message')
    ->fetchAll()]);
}