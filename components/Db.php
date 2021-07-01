<?php

class Db
{

    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        $host = $params['host'];
        $dbname = $params['dbname'];
        $user = $params['user'];
        $password = $params['password'];

        $db = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
        // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //dfsdsfdsf

        $db->exec("set names utf8");

        return $db;
    }
}