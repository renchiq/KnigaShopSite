<?php
class Cart
{
    public static function addBookToCart($id)
    {
        $id = intval($id);
        $booksInCart = array();

        // Данные о книгах в корзине хранятся в виде:
        // $_SESSION['books'] = {
        //     айди книги => количество,
        //     айди книги => количество,
        //     айди книги => количество,
        //     ...
        // }
        if (isset($_SESSION['books'])) {
            $booksInCart = $_SESSION['books'];
        }

        if (array_key_exists($id, $booksInCart)) $booksInCart[$id]++;
        else $booksInCart[$id] = 1;

        $_SESSION['books'] = $booksInCart;

        // return self::countBooksInCart();
        return true;
    }

    public static function deleteBooksFromCart($id)
    {
        $id = intval($id);
        $booksInCart = array();
        if (isset($_SESSION['books'])) {
            $booksInCart = $_SESSION['books'];
        }

        if (array_key_exists($id, $booksInCart)) unset($booksInCart[$id]);
        $_SESSION['books'] = $booksInCart;

        // return self::countBooksInCart();
        return true;
    }

    public static function countBooksInCart()
    {
        $totalCount = 0;
        if (isset($_SESSION['books'])) {
            foreach ($_SESSION['books'] as $id => $bookItemCount) {
                $totalCount = $totalCount + $bookItemCount;
            }
            return $totalCount;
        } else return 0;
    }

    public static function saveCartToDB()
    {
        if (isset($_SESSION['books']) && self::countBooksInCart() != 0) {
            $db = Db::getConnection();

            $sql = 'INSERT INTO saved_carts (customer_id, book_list) VALUES (:customer_id, :book_list)';

            $jsoned_books = json_encode($_SESSION['books']);

            $result = $db->prepare($sql);
            $result->bindParam(':customer_id', $_SESSION['user'], PDO::PARAM_INT);
            $result->bindParam(':book_list', $jsoned_books, PDO::PARAM_STR);
            return $result->execute();
        }

        return false;
    }

    public static function getCartFromDB($userId)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM saved_carts WHERE customer_id = :customer_id ORDER BY add_date DESC LIMIT 1';

        $result = $db->prepare($sql);
        $result->bindParam(':customer_id', $userId, PDO::PARAM_INT);
        $result->execute();
        $cartInfo = $result->fetch();

        if ($cartInfo) {
            return $cartInfo;
        }

        return false;
    }

    public static function clearCart()
    {
        unset($_SESSION['books']);

        return true;
    }

    public static function getBooksInCart()
    {
        if (isset($_SESSION['books'])) {
            return $_SESSION['books'];
        }
        return false;
    }

    // сделать чтобы подсчитывалось без аргумента $books
    public static function getTotalPrice()
    {
        $booksInCart = self::getBooksInCart();
        $total = 0;

        if ($booksInCart) {
            foreach ($booksInCart as $bookId => $booksCount) {
                $bookInfo = Book::getBookByID($bookId);
                $total += $bookInfo['cena'] * $booksCount;
            }
        }

        return $total;
    }
}