<?php
function __autoload($class_name)
{
    # Список директорий где лежат классы, используемые для работы
    $array_paths = array(
        '/models/',
        '/components/'
    );

    # Если нашли нужный класс то подключаем
    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}