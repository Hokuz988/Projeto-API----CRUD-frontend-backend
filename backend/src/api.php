<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/controllers.php';

$method = $_SERVER['REQUEST_METHOD'];

// Versão SIMPLES e CORRETA do match
match ($method) {
    'GET' => handleGet($dataFile),
    'POST' => handlePost($dataFile),
    'PUT' => handlePut($dataFile),
    'PATCH' => handlePatch($dataFile),
    'DELETE' => handleDelete($dataFile),
    default => handleMethodNotAllowed(),
};