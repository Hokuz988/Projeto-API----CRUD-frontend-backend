<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$uri = strtok($_SERVER['REQUEST_URI'], '?');

match ($uri) {
    '/api/users'        => require __DIR__ . '/../api.php',
    '/docs'             => serveView(__DIR__ . '/../views/docs.html'),
    default             => notFound(),
};

function serveView(string $file): void
{
    if (!file_exists($file)) {
        http_response_code(404);
        echo 'Documentation page not found';
        return;
    }
    header('Content-Type: text/html');
    echo file_get_contents($file);
}

function notFound(): void
{
    http_response_code(404);
    echo json_encode(['error' => 'Not found']);
}
