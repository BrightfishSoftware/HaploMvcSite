<?php
define('APP_BASE', dirname(__DIR__));
require APP_BASE.'/vendor/autoload.php';

use HaploMvc\HaploApp;

$app = new HaploApp(APP_BASE);
$app->router->addRoute('/', 'Home');
$app->run();
