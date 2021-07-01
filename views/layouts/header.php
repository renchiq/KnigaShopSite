<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/template/css/style.css">
    <link rel="stylesheet" href="/template/css/auth-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <title>Books</title>
</head>

<body>
    <div id="app">
        <!-- начало хедера -->
        <section class="mini-header">
            <div class="container">
                <div class="mini-header__wrapper">
                    <div class="mini-header__location header-location">
                        <p class="header-location__text">Москва</p>
                        <img src="/assets/pin.svg" alt="location" class="header-location__icon">
                    </div>
                    <div class="mini-header__menu">
                        <ul class="mini-header__list">
                            <!-- <li class="mini-header__item"><a href="#" class="mini-header__link">О нас</a></li>
                            <li class="mini-header__item"><a href="#" class="mini-header__link">Розничные покупатели</a>
                            </li>
                            <li class="mini-header__item"><a href="#" class="mini-header__link">Для бизнеса</a></li>
                            <li class="mini-header__item"><a href="#" class="mini-header__link">Доставка</a></li>
                            <li class="mini-header__item"><a href="#" class="mini-header__link">Оплата</a></li>
                            <li class="mini-header__item"><a href="#" class="mini-header__link">Бонусная программа</a>
                            </li>
                            <li class="mini-header__item"><a href="#" class="mini-header__link">Вакансии</a></li> -->
                        </ul>
                    </div>
                    <div class="mini-header__contact">
                        <a href="tel:8 351 775-46-81" class="mini-header__tel">8 351 775-46-81</a>
                        <a href="#" class="mini-header__time">Пн-Пт с 9:00 до 18:00</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-header">
            <div class="main-header__wrapper">
                <div class="main-header__logo">
                    <p>Книгга</p>
                    <!-- <p><img src="/template/images/logo.png" alt=""></p> -->
                </div>
                <div class="main-header__search">
                    <button id="main-header__btn">
                        <img src="/assets/free-icon-loupe-622669.svg">
                    </button>
                    <input type="text" id="main-header__input" placeholder="Поиск...">
                </div>
                <div class="main-header__login">
                    <?php if (!isset($_SESSION['user'])) : ?>
                    <a href="/user/entry/">Войти|Зарегистрироваться</a>
                    <?php else : ?>
                    <a href="/user/entry/">Личный кабинет</a>
                    <?php endif; ?>
                </div>
                <div class="main-header__likes">
                    <a href="#">
                        <img src="/assets/heart.svg" alt="like">
                    </a>
                </div>
                <div class="main-header__cart header-cart">
                    <a href="/cart/">
                        <img src="/assets/shopping-cart.svg" alt="like" class="header-cart__icon">
                    </a>
                    <div class="header-cart__sum"><?php echo Cart::countBooksInCart(); ?> книги на
                        <?php echo Cart::getTotalPrice(); ?> &#8381;</div>
                </div>
            </div>
        </section>
        <section class="category-header">
            <div class="category-header__wrapper">
                <ul class="category-header__list">
                    <li class="category-header__item"><a href="/books-list/" class="category-header__link">Книги</a>
                    </li>
                    <li class="category-header__item"><a href="" class="category-header__link">О нас</a></li>
                    <!-- <li class="category-header__item"><a href="" class="category-header__link">Канцтовары</a></li>
                    <li class="category-header__item"><a href="" class="category-header__link">Творчество</a></li>
                    <li class="category-header__item"><a href="" class="category-header__link">Игры и игрушки</a></li>
                    <li class="category-header__item"><a href="" class="category-header__link">Праздник</a></li> -->
                    <li class="category-header__item">
                        <a href="" class="category-header__link category-header__link--sale">
                            <img src="/assets/discount.svg" alt="" class="category-header__icon">
                            <p class="category-header__text">Акции и новости</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- конец хедера -->