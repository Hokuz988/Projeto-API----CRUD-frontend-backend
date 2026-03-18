<?php
// Router para o servidor PHP built-in
$requested = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Se é um arquivo ou diretório, serve normalmente
if (file_exists(__DIR__ . '/src/public' . $requested)) {
    return false;
}

// Caso contrário, passa para o index.php
require __DIR__ . '/src/public/index.php';
