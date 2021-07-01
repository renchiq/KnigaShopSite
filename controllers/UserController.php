<?php

class UserController
{
    public static function actionHash()
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM customer';

        $result = $db->prepare($sql);
        $result->execute();

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $users = $result->fetchAll();

        foreach ($users as $num => $userInfo) {
            User::editUserProfile($userInfo['id'], $userInfo['login'], md5($userInfo['pass']), $userInfo['name'], $userInfo['email'], $userInfo['phone']);
        }

        print_r("Done");

        return true;
    }

    public function actionEntry()
    {
        if (!User::isGuest()) {
            header("Location: /cabinet/");
        }

        $result = false;
        if (isset($_POST['submit_login'])) {
            $login = $_POST['login_login'];
            $pass = $_POST['pass_login'];

            $errors = false;

            // Валидация полей
            if (!User::checkLogin($login)) {
                $errors[] = 'Неправильно введен логин (у вас меньше 3-х символов!)';
            }
            if (!User::checkPassword($pass)) {
                $errors[] = 'Неправильно введен пароль (не меньше 6-ти символов!)';
            }

            // Проверяем существует ли пользователь, если да - вернем его айди
            $userId = User::checkUserData($login, $pass);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::authUser($userId);
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /cabinet/");
            }
        }

        if (isset($_POST['submit_signup'])) {
            $name = $_POST['name_signup'];
            $login = $_POST['login_signup'];
            $pass = $_POST['pass_signup'];
            $email = $_POST['email_signup'];
            $phone = $_POST['phone_signup'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkLogin($login)) {
                $errors[] = 'Логин должен быть от 3-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if ($phone != '' && !User::checkPhoneNumber($phone)) {
                $errors[] = 'Неправильный номер телефона. Вводите его в формате +7(XXXXXXXXX)';
            }

            if (!User::checkPassword($pass)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }


            if ($errors == false) {
                $result = User::registerUser($name, $login, $pass, $email, $phone);
                $userId = User::checkUserData($login, $pass);

                User::authUser($userId);
            }
        }

        require_once(ROOT . '/views/user/sign_up_in.php');

        return true;
    }

    public function actionRegister()
    {
        if (!User::isGuest()) {
            header("Location: /cabinet/");
        }

        $name = '';
        $login = '';
        $pass = '';
        $email = '';
        $phone = '';

        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkLogin($login)) {
                $errors[] = 'Логин должен быть от 3-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if ($phone != '' && !User::checkPhoneNumber($phone)) {
                $errors[] = 'Неправильный номер телефона. Вводите его в формате +7(XXXXXXXXX)';
            }

            if (!User::checkPassword($pass)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }


            if ($errors == false) {
                $result = User::registerUser($name, $login, $pass, $email, $phone);
                $userId = User::checkUserData($login, $pass);

                User::authUser($userId);
            }
        }


        require_once(ROOT . '/views/user/sign_up_in.php');

        return true;
    }

    public function actionLogin()
    {
        if (!User::isGuest()) {
            header("Location: /cabinet/");
        }

        $login = '';
        $pass = '';

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            $errors = false;

            // Валидация полей
            if (!User::checkLogin($login)) {
                $errors[] = 'Неправильно введен логин (у вас меньше 3-х символов!)';
            }
            if (!User::checkPassword($pass)) {
                $errors[] = 'Неправильно введен пароль (не меньше 6-ти символов!)';
            }

            // Проверяем существует ли пользователь, если да - вернем его айди
            $userId = User::checkUserData($login, $pass);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::authUser($userId);
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /cabinet/");
            }
        }

        require_once(ROOT . '/views/user/sign_up_in.php');

        return true;
    }

    public function actionLogout()
    {
        if (isset($_SESSION['user'])) {
            Cart::saveCartToDB();
            Cart::clearCart();
            unset($_SESSION["user"]);
        }
        // unset($_SESSION["user"]);
        header("Location: /");
    }
}