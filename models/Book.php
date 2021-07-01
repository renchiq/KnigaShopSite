<?php

class Book
{
    // книги по транслитерации категории
    public static function getBooksByCategory($category)
    {
        $db = Db::getConnection();
        $booksByCategory = array();

        $config = ROOT . '/config/categories_name.php';
        $categories_name = include($config);

        if ($id = Category::isItParentCategory($category)) {
            // print_r($id);
            $result = $db->query('SELECT * FROM book WHERE category_id IN (SELECT id FROM category WHERE parent_id = ' . $id . ')');
        } else {
            // print_r("не парент");
            $result = $db->query('SELECT book.*
                                FROM book, category 
                                WHERE book.category_id = category.id and category.name=' . '\'' . $categories_name[$category] . '\'');
        }

        $i = 0;
        while ($row = $result->fetch()) {
            $booksByCategory[$i] = $row;
            // $booksByCategory[$i]['id'] = $row['id'];
            // $booksByCategory[$i]['nazvanie'] = $row['nazvanie'];
            // $booksByCategory[$i]['category_id'] = $row['category_id'];
            // $booksByCategory[$i]['cena'] = $row['cena'];
            // $booksByCategory[$i]['izd_id'] = $row['izd_id'];
            $i++;
        }

        return $booksByCategory;
    }


    public static function getBookByID($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM book WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $bookById = $result->fetch();

            return $bookById;
        }
    }

    public static function isBookInDb($id)
    {
        $id = intval($id);

        $bookIds = array();

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT id FROM book');

            $result->setFetchMode(PDO::FETCH_ASSOC);

            while ($bookId = $result->fetch()) {
                array_push($bookIds, $bookId);
            };
        }

        return in_array($id, $bookIds);
    }

    public static function getBooksList()
    {
        $db = Db::getConnection();
        $booksList = array();

        $result = $db->query('SELECT * FROM book');

        /* [0] => Array ([id] => --, [brand] => --, [category] => --, [model] => --, [price] => --) */
        $result->setFetchMode(PDO::FETCH_ASSOC);


        $i = 0;
        while ($row = $result->fetch()) {
            $booksList[$i] = $row;
            $i++;
        }

        return $booksList;
    }

    public static function addBookToDb($attributes)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO book '
            . '(nazvanie, category_id, god_izd, cena, author, format,'
            . 'isbn, stranitsy, izd_id, oblozh, tirazh, ves, vozrast)'
            . 'VALUES '
            . '(:nazvanie, :category_id, :god_izd, :cena, :author, :format,'
            . ':isbn, :stranitsy, :izd_id, :oblozh, :tirazh, :ves, :vozrast)';

        $result = $db->prepare($sql);
        $result->bindParam(':nazvanie', $attributes['nazvanie'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $attributes['category_id'], PDO::PARAM_INT);
        $result->bindParam(':god_izd', $attributes['god_izd'], PDO::PARAM_STR);
        $result->bindParam(':cena', $attributes['cena'], PDO::PARAM_STR);
        $result->bindParam(':author', $attributes['author'], PDO::PARAM_STR);
        $result->bindParam(':format', $attributes['format'], PDO::PARAM_STR);
        $result->bindParam(':isbn', $attributes['isbn'], PDO::PARAM_STR);
        $result->bindParam(':stranitsy', $attributes['stranitsy'], PDO::PARAM_STR);
        $result->bindParam(':izd_id', $attributes['izd_id'], PDO::PARAM_INT);
        $result->bindParam(':oblozh', $attributes['oblozh'], PDO::PARAM_STR);
        $result->bindParam(':tirazh', $attributes['tirazh'], PDO::PARAM_STR);
        $result->bindParam(':ves', $attributes['ves'], PDO::PARAM_STR);
        $result->bindParam(':vozrast', $attributes['vozrast'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }

    public static function editBook($attributes)
    {
        $db = Db::getConnection();

        $sql = 'UPDATE book SET nazvanie = :nazvanie, 
                                category_id = :category_id, 
                                god_izd = :god_izd, 
                                cena = :cena, 
                                author = :author, 
                                format = :format, 
                                isbn = :isbn, 
                                stranitsy = :stranitsy, 
                                izd_id = :izd_id, 
                                oblozh = :oblozh, 
                                tirazh = :tirazh, 
                                ves = :ves,
                                vozrast = :vozrast 
                WHERE id = :id';

        $result = $db->prepare($sql);

        $result->bindParam(':id', $attributes['id'], PDO::PARAM_INT);
        $result->bindParam(':nazvanie', $attributes['nazvanie'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $attributes['category_id'], PDO::PARAM_INT);
        $result->bindParam(':god_izd', $attributes['god_izd'], PDO::PARAM_STR);
        $result->bindParam(':cena', $attributes['cena'], PDO::PARAM_STR);
        $result->bindParam(':author', $attributes['author'], PDO::PARAM_STR);
        $result->bindParam(':format', $attributes['format'], PDO::PARAM_STR);
        $result->bindParam(':isbn', $attributes['isbn'], PDO::PARAM_STR);
        $result->bindParam(':stranitsy', $attributes['stranitsy'], PDO::PARAM_STR);
        $result->bindParam(':izd_id', $attributes['izd_id'], PDO::PARAM_INT);
        $result->bindParam(':oblozh', $attributes['oblozh'], PDO::PARAM_STR);
        $result->bindParam(':tirazh', $attributes['tirazh'], PDO::PARAM_STR);
        $result->bindParam(':ves', $attributes['ves'], PDO::PARAM_STR);
        $result->bindParam(':vozrast', $attributes['vozrast'], PDO::PARAM_STR);

        if ($result->execute()) {
            // print_r($result->rowCount());
            return true;
        }
        // print_r($result->rowCount());
        return false;
    }

    public static function deleteBookByID($id)
    {
        $db = Db::getConnection();

        $sql = ('DELETE FROM book WHERE id = :id');

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

    public static function setImagePathById($id, $image)
    {
        $db = Db::getConnection();

        $sql = ('UPDATE book SET image = :image WHERE id = :id');

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':image', $image, PDO::PARAM_STR);

        return $result->execute();
    }
}