<section>
    <div>
        <div>
            <div>
                <?php if ($result) : ?>
                <p>Данные отредактированы!</p>
                <?php else : ?>
                <?php if (isset($errors) && is_array($errors)) : ?>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                    <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <div>
                    <h2>Редактирование данных</h2>
                    <form action="#" method="POST">
                        <p>Логин:</p>
                        <input type="text" name="login" placeholder="Логин" value="<?php echo $login; ?>" />
                        <p>Пароль:</p>
                        <input type="password" name="pass" placeholder="Пароль" value="<?php echo $pass; ?>" />
                        <p>Имя:</p>
                        <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" />
                        <p>E-mail:</p>
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" />
                        <p>Номер телефона:</p>
                        <input type="phone" name="phone" placeholder="Телефонный номер" value="<?php echo $phone; ?>" />
                        <br />
                        <input type="submit" name="submit" value="Сохранить" />
                    </form>
                </div>
                <?php endif; ?>
                <br />
                <br />
            </div>
        </div>
    </div>
</section>