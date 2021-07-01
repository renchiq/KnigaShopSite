<?php
return array(

	// 'news' => 'news/index', // actionIndex in NewsController
	'books-list/([a-z-]+)/([0-9]+)' => 'books/view/$1/$2', // actionView in BooksController
	'books-list/([a-z-]+)' => 'books/category/$1', //actinoCategory in BooksController 
	'books-list' => 'books/list', // actionList in BooksController

	// 'user/register' => 'user/register', //actionRegister in UserController
	// 'user/login' => 'user/login', //actionLogin in UserController
	'user/entry' => 'user/entry', //actionEntry in UserController
	'user/logout' => 'user/logout', //actionLogout in UserController

	'cabinet/edit' => 'cabinet/edit', //actionEdit in CabinetController
	'cabinet' => 'cabinet/main', //actionMain in CabinetController

	'cart/add/([0-9]+)' => 'cart/add/$1', //actionAdd in CartController
	'cart/delete/([0-9]+)' => 'cart/delete/$1', //actionDelete in CartController
	'cart/purchase' => 'cart/purchase', //actionPurchase in CartController
	'cart' => 'cart/main', //actionMain in CartController

	'admin/manage_books/add' => 'adminBooks/addBook', //actionAddBook in AdminBooksController
	'admin/manage_books/edit/([0-9]+)' => 'adminBooks/editBook/$1', //actionEditBook in AdminBooksController
	'admin/manage_books/delete/([0-9]+)' => 'adminBooks/deleteBook/$1', //actionDeleteBook in AdminBooksController
	'admin/manage_books' => 'adminBooks/main', //actionMain in AdminBooksController
	'admin' => 'admin/main', //actionMain in AdminController

	'' => 'home/main', //actionMain in HomeController
);