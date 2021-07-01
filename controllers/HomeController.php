<?php

class HomeController
{
    public function actionMain()
    {
        // $categories = Category::getCategories();

        require_once(ROOT . '\views\home\index.php');

        return true;
    }
}