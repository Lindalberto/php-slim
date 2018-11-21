<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

/**
 * Exemplos de env (pode ser setado de outras formas).
 */
putenv("APPLICATION_ENV=development");
putenv("DB_HOST=");
putenv("DB_USERNAME=");
putenv("DB_PASSWORD=");
putenv("DB_NAME=");
putenv("DB_CHARSET=");

define('DEFAULT_EXCEPTION', 'Houve uma falha na requisição. Favor tentar novamente.');
define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

session_start();

(new \Src\Main\Project())->run();
