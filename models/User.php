<?php

class User
{
    public static function registerUser($name, $login, $pass, $email, $phone)
    {
        if ($phone == '') $phone = null;

        $db = Db::getConnection();

        $sql = 'INSERT INTO customer (login, pass, name, email, phone) VALUES (:login, :pass, :name, :email, :phone)';

        $result = $db->prepare($sql);

        $md5 = md5($pass);

        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':pass', $md5, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);



        return $result->execute();
    }

    public static function editUserProfile($id, $login, $pass, $name, $email, $phone)
    {
        $db = Db::getConnection();

        $sql = 'UPDATE customer 
            SET login = :login, pass = :pass,  name = :name, email = :email, phone = :phone WHERE id = :id';

        $md5 = md5($pass);

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':pass', $md5, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        return $result->execute();
    }

    // Возвращает айди если пользователь найден, возвращает ложь если не найден
    public static function checkUserData($login, $pass)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM customer WHERE login = :login AND pass = :pass';

        $md5 = md5($pass);

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':pass', $md5, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }

        return false;
    }

    public static function authUser($userId)
    {
        $_SESSION['user'] = $userId;
        $cartInfo = Cart::getCartFromDB($userId);
        if ($cartInfo) {
            $_SESSION['books'] = json_decode($cartInfo['book_list'], true);
        }
    }

    public static function isLoggedIn()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM customer WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    // Имя должно быть длиньше двух символов
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    // Логин должен быть длиньше трех символов
    public static function checkLogin($login)
    {
        if (strlen($login) >= 3) {
            return true;
        }
        return false;
    }

    // Пароль не меньше 6 символов
    public static function checkPassword($pass)
    {
        if (strlen($pass) >= 6) {
            return true;
        }
        return false;
    }

    // Проверяем емейл при помощи функции filter_var и константы FILTER_VALIDATE_EMAIL
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    // Проверяем телефон на соответствие форме +7(ХХХХХХХХХХ) с помощью RegExp
    public static function checkPhoneNumber($phone)
    {
        if (preg_match('(^[+][7][0-9]{10}$)', $phone)) {
            return true;
        }
        return false;
    }


    public static function checkEmailExists($email)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM customer WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    public static function isUserAdmin()
    {
        $userId = User::isLoggedIn();
        $user = User::getUserById($userId);

        if ($user['is_admin']) {
            return true;
        }
        header("Location: /");
    }
}