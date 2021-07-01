<?php

// FRONT COTROLLER

// Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Старт сессии здесь, чтобы не дублировать запись везде
session_start();

// Переменная ROOT для удобства подключения файлов
define('ROOT', dirname(__FILE__));
define('CAT_DICT', include(ROOT . '/config/categories_name.php'));

// Для автоматической подгрузки класов
require_once(ROOT . '/components/Autoload.php');

// Вызов Router
$router = new Router();
$router->run();