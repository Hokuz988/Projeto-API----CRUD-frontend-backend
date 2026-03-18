<?php
// Router para o servidor PHP built-in
$requested = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Se é um arquivo ou diretório, serve normalmente
if (file_exists(__DIR__ . '/src/public' . $requested)) {
    return false;
}

// Serve arquivos da pasta views
$viewsPath = __DIR__ . '/src/views' . $requested;
if (file_exists($viewsPath)) {
    if (is_dir($viewsPath)) {
        return false; // Deixa o PHP servir o diretório
    }
    // Serve o arquivo diretamente
    $mimeType = mime_content_type($viewsPath);
    header("Content-Type: $mimeType");
    readfile($viewsPath);
    exit;
}

// Caso contrário, passa para o index.php
require __DIR__ . '/src/public/index.php';
