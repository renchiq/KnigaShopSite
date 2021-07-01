<?php

class Category
{

    public static function isItParentCategory($category)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT id, parent_id
        FROM category 
        WHERE category.name=' . '\'' . CAT_DICT[$category] . '\'');

        $info = $result->fetch();

        if ($info['parent_id'] == 0) {
            return $info['id'];
        }

        return false;
    }

    public static function getCategoryById($id)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM category WHERE id=' . $id);

        $categoryInfo = $result->fetch();

        return $categoryInfo;
    }

    // возврат категорий в формате categories = (0 => ('trans_name' => trans_name, 'name' => name))
    // если передать айди родителя метод возвратит все его дочерние категории
    public static function getCategories($parent_id = 0)
    {
        $db = Db::getConnection();
        $categories = array();

        $result = $db->query('SELECT * FROM category WHERE parent_id=' . $parent_id);

        $i = 0;
        while ($row = $result->fetch()) {
            $categories[$i]['id'] = $row['id'];
            $categories[$i]['trans_name'] = array_search($row['name'], CAT_DICT);
            $categories[$i]['name'] = $row['name'];
            $i++;
        }

        return $categories;
    }

    public static function getAllChildCategories()
    {
        $db = Db::getConnection();
        $categories = array();

        $result = $db->query('SELECT * FROM category where parent_id != 0');

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $categories[$i] = $row;
            $i++;
        }
        return $categories;
    }
}