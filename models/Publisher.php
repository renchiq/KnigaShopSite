<?php

class Publisher
{
    public static function getAllPublishers()
    {
        $db = Db::getConnection();
        $publishers = array();

        $result = $db->query('SELECT * FROM izdatelstvo');

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $publishers[$i] = $row;
            $i++;
        }
        return $publishers;
    }
}