<?php

class AdminBooksController
{
    public function actionMain()
    {
        User::isUserAdmin();

        $booksList = Book::getBooksList();

        require_once(ROOT . '/views/admin/manage_books/index.php');

        return true;
    }

    public function actionAddBook()
    {
        User::isUserAdmin();
        $categories = Category::getAllChildCategories();
        $publishers = Publisher::getAllPublishers();

        if (isset($_POST['submit'])) {
            $errors = false;

            $attributes['nazvanie'] = $_POST['nazvanie'];
            $attributes['category_id'] = $_POST['category_id'];
            $attributes['god_izd'] = $_POST['god_izd'];
            $attributes['cena'] = $_POST['cena'];
            $attributes['author'] = $_POST['author'];
            $attributes['format'] = $_POST['format'];
            $attributes['isbn'] = $_POST['isbn'];
            $attributes['stranitsy'] = $_POST['stranitsy'];
            $attributes['izd_id'] = $_POST['izd_id'];
            $attributes['oblozh'] = $_POST['oblozh'];
            $attributes['tirazh'] = $_POST['tirazh'];
            $attributes['ves'] = $_POST['ves'];
            $attributes['vozrast'] = $_POST['vozrast'];

            if (!isset($attributes['nazvanie']) || empty($attributes['nazvanie'])) {
                $errors[] = 'Поле названия должно быть заполнено обязательно!';
            }

            if ($errors == false) {
                $id = Book::addBookToDb($attributes);
                if ($id) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        move_uploaded_file(
                            $_FILES["image"]["tmp_name"],
                            $_SERVER['DOCUMENT_ROOT'] . "/template/images/{$id}book.jpg"
                        );
                        Book::setImagePathById($id, "/template/images/{$id}book.jpg");
                    } else {
                        Book::setImagePathById($id, "/template/images/no-image.jpg");
                    }
                };

                header("Location: /admin/manage_books");
            }
        }

        require_once(ROOT . '/views/admin/manage_books/add.php');

        return true;
    }

    public function actionEditBook($id)
    {
        User::isUserAdmin();

        $id = intval($id);

        $book = Book::getBookByID($id);
        $categories = Category::getAllChildCategories();
        $publishers = Publisher::getAllPublishers();

        if (isset($_POST['submit'])) {
            $errors = false;

            $attributes['id'] = $id;
            $attributes['nazvanie'] = $_POST['nazvanie'];
            $attributes['category_id'] = $_POST['category_id'];
            $attributes['god_izd'] = $_POST['god_izd'];
            $attributes['cena'] = $_POST['cena'];
            $attributes['author'] = $_POST['author'];
            $attributes['format'] = $_POST['format'];
            $attributes['isbn'] = $_POST['isbn'];
            $attributes['stranitsy'] = $_POST['stranitsy'];
            $attributes['izd_id'] = $_POST['izd_id'];
            $attributes['oblozh'] = $_POST['oblozh'];
            $attributes['tirazh'] = $_POST['tirazh'];
            $attributes['ves'] = $_POST['ves'];
            $attributes['vozrast'] = $_POST['vozrast'];

            // print_r(count($attributes));

            if (!isset($attributes['nazvanie']) || empty($attributes['nazvanie'])) {
                $errors[] = 'Поле названия должно быть заполнено обязательно!';
            }

            if ($errors == false) {
                if (Book::editBook($attributes)) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        move_uploaded_file(
                            $_FILES["image"]["tmp_name"],
                            $_SERVER['DOCUMENT_ROOT'] . "/template/images/{$id}book.jpg"
                        );
                        Book::setImagePathById($id, "/template/images/{$id}book.jpg");
                    }
                };

                header("Location: /admin/manage_books");
            }
        }

        require_once(ROOT . '/views/admin/manage_books/edit.php');

        return true;
    }

    public function actionDeleteBook($id)
    {
        User::isUserAdmin();

        $id = intval($id);

        Book::deleteBookByID($id);

        $backToPage = $_SERVER['HTTP_REFERER'];
        header("Location: $backToPage");
    }
}