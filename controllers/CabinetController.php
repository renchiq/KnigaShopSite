<?php

class CabinetController
{
    public function actionMain()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::isLoggedIn();

        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }

    public function actionEdit()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::isLoggedIn();


        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        $login = $user['login'];
        $pass = $user['pass'];
        $name = $user['name'];
        $email = $user['email'];
        $phone = $user['phone'];

        $result = false;

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $errors = false;

            if (!User::checkLogin($login)) {
                $errors[] = 'Логин должен быть длиньше трех символов';
            }

            if (!User::checkPassword($pass)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильно введен E-mail. Он должен быть вида xxx@xxx.xxx';
            }

            if ($phone != '' && !User::checkPhoneNumber($phone)) {
                $errors[] = 'Номер телефона должен быть задан в форме +7(ХХХХХХХХХХ)';
            }

            if ($errors == false) {
                $result = User::editUserProfile($userId, $login, $pass, $name, $email, $phone);
            }
        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true;
    }
}