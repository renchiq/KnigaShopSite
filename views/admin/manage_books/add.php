<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class='content'>
        <p>
        <h1>Adding book</h1>
        </p>
        <?php if (isset($errors) && is_array($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>
            <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <div>
            <form action="#" method="POST" class='adding-form' enctype="multipart/form-data">
                <p>Название книги:</p>
                <input type="text" name="nazvanie" placeholder="" value="">

                <p>Автор книги:</p>
                <input type="text" name="author" placeholder="" value="">

                <p>Категория:</p>
                <select name="category_id">
                    <?php foreach ($categories as $num => $categoryInfo) : ?>
                    <option value="<?php echo $categoryInfo['id']; ?>"><?php echo $categoryInfo['name']; ?></option>
                    <?php endforeach; ?>
                </select>

                <p>Цена:</p>
                <input type="text" name="cena" placeholder="" value="">

                <p>Год издания:</p>
                <input type="text" name="god_izd" placeholder="" value="">

                <p>Издательство:</p>
                <select name="izd_id">
                    <?php foreach ($publishers as $num => $publisherInfo) : ?>
                    <option value="<?php echo $publisherInfo['id']; ?>"><?php echo $publisherInfo['name']; ?></option>
                    <?php endforeach; ?>
                </select>

                <p>Изображение:</p>
                <input type="file" name="image" placeholder="" value="">

                <p>Тип обложки:</p>
                <select name="oblozh">
                    <option value="Мягкая бумажная" selected>Мягкая бумажная</option>
                    <option value="Твердая бумажная">Твердая бумажная</option>
                </select>

                <p>Количество страниц:</p>
                <input type="text" name="stranitsy" placeholder="" value="">

                <p>ISBN:</p>
                <input type="text" name="isbn" placeholder="" value="">

                <p>Формат:</p>
                <input type="text" name="format" placeholder="" value="">

                <p>Возрастное ограничение:</p>
                <select name="vozrast">
                    <option value="0+" selected>0+</option>
                    <option value="3+">3+</option>
                    <option value="6+">6+</option>
                    <option value="12+">12+</option>
                    <option value="16+">16+</option>
                    <option value="18+">18+</option>
                </select>

                <p>Тираж:</p>
                <input type="text" name="tirazh" placeholder="" value="">

                <p>Вес, г:</p>
                <input type="text" name="ves" placeholder="" value="">

                <p>
                    <input type="submit" name="submit" class="" value="Добавить">
                </p>

            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>