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

<div id="app">
    <section class="auth">
        <div class="container">
            <div class="auth__wrapper">
                <h1 class="auth__title">
                    Зарегистрируйтесь или авторизуйтесь, что бы
                    <span class="auth__title--bold">стать частью</span> нашего сообщества книголюбителей!
                </h1>
                <div class="auth__form-container form-container">
                    <div class="form-container__titles">
                        <h2 class="form-container__title form-title-login active">Авторизация</h2>
                        <h2 class="form-container__title form-title-signup">Регистрация</h2>
                    </div>

                    <?php if ($result) : ?>
                    <p style='margin: 30px; color: green;'>Вы зарегистрированы!</p>
                    <?php else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <form method="POST" class="auth__form auth-form-login active">
                        <div class="auth-form__item">
                            <label class="auth-form__label" for="login_login">Логин</label>
                            <input type='text' name='login_login' class="auth-form__input" id="login_login"
                                placeholder="Логин">
                            <label class="auth-form__label" for="pass_login">Пароль</label>
                            <input type='password' name='pass_login' class="auth-form__input" id="pass_login"
                                placeholder="Пароль">
                        </div>
                        <button type='submit' name='submit_login' class="auth__btn auth-form-login__btn">Войти</button>

                    </form>

                    <form method="POST" class="auth__form auth-form-sign">
                        <div class="auth-form__item">
                            <label for="name_signup" class="auth-form__label">Имя<sup>*</sup></label>
                            <input type='text' id="name_signup" name="name_signup" class="auth-form__input">

                            <label for="login_signup" class="auth-form__label">Логин<sup>*</sup></label>
                            <input type='text' id="login_signup" name="login_signup" class="auth-form__input">

                            <label for="pass_signup" class="auth-form__label">Пароль<sup>*</sup></label>
                            <input type='password' id="pass_signup" name="pass_signup" class="auth-form__input">

                            <label for="email_signup" class="auth-form__label">E-mail<sup>*</sup></label>
                            <input type='email' id="email_signup" name="email_signup" class="auth-form__input">

                            <label for="phone_signup" class="auth-form__label">Телефонный номер</label>
                            <input type='phone' id="phone_signup" name="phone_signup" class="auth-form__input">
                        </div>
                        <button type='submit' name='submit_signup'
                            class="auth__btn auth-form-sign__btn">Зарегестрироваться</button>
                    </form>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="/template/auth.js"></script>
<?php include ROOT . '/views/layouts/footer.php'; ?>