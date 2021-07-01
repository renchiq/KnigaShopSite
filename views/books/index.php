<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- путь -->
<div class="headPage">
    <div class="container">
        <div class="headPage__wrapper">
            <div class="headPage__breadcrumbs breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="/" class="breadcrumbs__link">Главная</a></li>
                    <li class="breadcrumbs__item">Книги</li>
                </ul>
            </div>
            <h2 class="headPage__title">Книги</h2>
        </div>
    </div>
</div>
<!-- конец пути -->

<!-- центр -->
<section class="main_books">
    <!-- навигация по категориям -->
    <div class="main_books__categories">
        <?php foreach ($categories as $number => $categoryItem) : ?>
        <div class="main_books__category category">
            <div class="category__visible">
                <a href="/books-list/<?php echo array_search($categoryItem['name'], CAT_DICT); ?>"
                    class="category__text"><?php echo $categoryItem['name']; ?></a>
                <img class="category__icon" src="/assets/plus.svg">
            </div>
            <div class="category__hidden category-hidden">
                <ul class="category-hidden__list">
                    <?php
                        $subcategories = Category::getCategories($categoryItem['id']);
                        for ($i = 0; $i < count($subcategories); $i++) : ?>
                    <li class="category-hidden__element">
                        <a href="/books-list/<?php echo $subcategories[$i]['trans_name'] ?>/"
                            class="category-hidden__link">
                            <span class="category-hidden__text"><?php echo $subcategories[$i]['name']; ?></span>
                        </a>
                    </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <!-- конец навигации по категориям -->

    <!-- список книг -->
    <div class="main_books__book-list book-list">
        <div class="book-list__content book-list-content">
            <!--Когда не выбрана первая категория-->
            <!-- <div class="book-list-content__title content-title">
                        <h2 class="content-title__subtitle">ВАС ЗАИНТЕРЕСУЮТ</h2>
                        <h2 class="content-title__title">Популярные товары</h2>
                    </div>-->
            <div class="book-list-content__filters content-filters">
                <div class="content-filters__filter content-filter content-filters__filter--price">
                    <p class="content-filter__title">По цене</p>
                </div>
                <div class="content-filters__filter content-filter">
                    <p class="content-filter__title">По популярности</p>
                    <img src="/assets/down-arrow.svg" alt="" class="content-filter__icon">
                </div>
                <div class="content-filters__filter content-filter">
                    <p class="content-filter__title">По дате выхода</p>
                    <img src="/assets/down-arrow.svg" alt="" class="content-filter__icon">
                </div>
                <div class="content-filters__filter content-filter">
                    <p class="content-filter__title">Только в наличии</p>
                    <img src="/assets/down-arrow.svg" alt="" class="content-filter__icon">
                </div>
            </div>
        </div>


        <div class="book-list__books books">
            <!--Карточки книг-->
            <?php foreach ($booksAll as $num => $bookItem) : ?>
            <?php $categoryName = Category::getCategoryById($bookItem['category_id']); ?>
            <a
                href="/books-list/<?php echo array_search($categoryName['name'], CAT_DICT); ?>/<?php echo $bookItem['id']; ?>">
                <div class="books__card book-card">
                    <div class="book-card__tag"></div>
                    <div class="book-card__img">
                        <img src="<?php echo $bookItem['image']; ?>" alt="">
                    </div>
                    <div class="book-card__rating">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <a class="book-card__name"><?php echo $bookItem['nazvanie']; ?></a>
                    <div class="book-card__author"><?php echo $bookItem['author']; ?></div>
                    <div class="book-card__price"><?php echo $bookItem['cena']; ?> &#8381;</div>
                    <div class="book-card__btns">
                        <button class="book-card__like-btn">
                            <img src="/assets/heart.svg" alt="">
                        </button>
                        <button class="book-card__cart-btn">
                            <a href="/cart/add/<?php echo $bookItem['id']; ?>" alt=""><img
                                    src="/assets/shopping-cart.svg" alt=""></a>
                        </button>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- конец списка книг -->
</section>
<!-- конец центра -->

<?php include ROOT . '/views/layouts/footer.php'; ?>