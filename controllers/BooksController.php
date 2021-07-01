<?php

class BooksController
{
	public function actionCategory($category)
	{
		$booksByCategory = Book::getBooksByCategory($category);
		$categories = Category::getCategories();

		require_once(ROOT . '\views\books\category_view.php');

		return true;
	}

	public function actionList()
	{
		$booksAll = Book::getBooksList();
		$categories = Category::getCategories();

		require_once(ROOT . '\views\books\index.php');

		return true;
	}

	public function actionView($category, $id)
	{
		$bookItem = Book::getBookByID($id);

		require_once(ROOT . '\views\books\view.php');

		return true;
	}
}