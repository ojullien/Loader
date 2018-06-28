<?php
// -------------------------------
// Defines application constants -
// -------------------------------
define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));
define('APPLICATION_NAME', 'ophp-loader');
define('APPLICATION_VERSION', '2015.06.03');
define('APPLICATION_PATH', dirname(__DIR__));

// -------------------------------
// Autoload                      -
// -------------------------------
$autoloader = APPLICATION_PATH . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';
if (!file_exists($autoloader)) {
    echo "Composer autoloader not found: $autoloader" . PHP_EOL;
    echo "Please issue 'composer install' and try again." . PHP_EOL;
    exit(1);
}
require $autoloader;
