<?php

class AdminController
{
    public function actionMain()
    {
        User::isUserAdmin();

        require_once(ROOT . '/views/admin/index.php');

        return true;
    }
}