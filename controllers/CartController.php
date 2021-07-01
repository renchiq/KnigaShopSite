<?php
class CartController
{
    public function actionMain()
    {
        $booksInCart = Cart::getBooksInCart();

        $totalPrice = 0;

        $booksInCartInfo = array();
        if ($booksInCart) {

            $i = 0;
            foreach ($booksInCart as $bookId => $bookCount) {
                $booksInCartInfo[$i] = Book::getBookByID($bookId);
                $booksInCartInfo[$i]['count'] = $bookCount;
                $i++;
            }

            $totalPrice = Cart::getTotalPrice();
        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }

    public function actionPurchase()
    {
        $booksInCart = Cart::getBooksInCart();

        if ($booksInCart == false) {
            header("Location: /");
        }

        // Для формы
        $totalPrice = Cart::getTotalPrice();
        $totalCount = Cart::countBooksInCart();

        $result = false;

        $purchase = array();

        $purchase['customer_name'] = false;
        $purchase['address'] = false;
        $purchase['phone'] = false;
        $purchase['comment'] = false;
        $purchase['payment_type'] = false;
        $purchase['book_list'] = $booksInCart;

        if (!User::isGuest()) {
            $customerID = User::isLoggedIn();
            $customer = User::getUserById($customerID);
            $purchase['customer_name'] = $customer['name'];
            $purchase['phone'] = $customer['phone'];
        } else $customerID = false;

        if (isset($_POST['submit'])) {
            $purchase['customer_name'] = $_POST['customer_name'];
            $purchase['customer_id'] = $customerID;
            $purchase['address'] = $_POST['address'];
            $purchase['comment'] = $_POST['comment'];
            $purchase['phone'] = $_POST['phone'];
            $purchase['payment_type'] = $_POST['payment_type'];

            $errors = false;

            if (!User::checkName($purchase['customer_name'])) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkPhoneNumber($purchase['phone'])) {
                $errors[] = 'Неправильный номер телефона. Вводите его в формате +7(XXXXXXXXX)';
            }

            // print_r($errors);

            if ($errors == false) {
                $result = Purchase::saveToDb($purchase);

                if ($result) unset($_SESSION['books']);
            }
        }

        require_once(ROOT . '/views/cart/purchase.php');

        return true;
    }

    public function actionAdd($id)
    {
        Cart::addBookToCart($id);

        // чтобы вернуть пользователя на страницу
        $backToPage = $_SERVER['HTTP_REFERER'];
        header("Location: $backToPage");
    }

    public function actionDelete($id)
    {
        cart::deleteBooksFromCart($id);

        $backToPage = $_SERVER['HTTP_REFERER'];
        header("Location: $backToPage");
    }
}