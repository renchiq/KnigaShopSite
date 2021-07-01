<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class='content'>
        <p>
        <h1>Editing book</h1>
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
                <input type="text" name="nazvanie" placeholder="" value="<?php echo $book['nazvanie']; ?>">

                <p>Автор книги:</p>
                <input type="text" name="author" placeholder="" value="<?php echo $book['author']; ?>">

                <p>Категория:</p>
                <select name="category_id">
                    <?php foreach ($categories as $num => $categoryInfo) : ?>
                    <option <?php if ($book['category_id'] == $categoryInfo['id']) echo 'selected'; ?>
                        value="<?php echo $categoryInfo['id']; ?>"><?php echo $categoryInfo['name']; ?></option>
                    <?php endforeach; ?>
                </select>

                <p>Цена:</p>
                <input type="text" name="cena" placeholder="" value="<?php echo $book['cena']; ?>">

                <p>Год издания:</p>
                <input type="text" name="god_izd" placeholder="" value="<?php echo $book['god_izd']; ?>">

                <p>Издательство:</p>
                <select name="izd_id">
                    <?php foreach ($publishers as $num => $publisherInfo) : ?>
                    <option <?php if ($book['izd_id'] == $publisherInfo['id']) echo 'selected'; ?>
                        value="<?php echo $publisherInfo['id']; ?>"><?php echo $publisherInfo['name']; ?></option>
                    <?php endforeach; ?>
                </select>

                <p>Изображение:</p>
                <img class='image' src="<?php echo $book['image']; ?>" alt="">
                <input type="file" name="image" placeholder="" value="<?php echo $book['nazvanie']; ?>">

                <p>Тип обложки:</p>
                <select name="oblozh">
                    <option value="Мягкая бумажная" <?php if ($book['oblozh'] == "Мягкая бумажная") echo 'selected'; ?>>
                        Мягкая
                        бумажная</option>
                    <option value="Твердая бумажная"
                        <?php if ($book['oblozh'] == "Твердая бумажная") echo 'selected'; ?>>
                        Твердая бумажная</option>
                </select>

                <p>Количество страниц:</p>
                <input type="text" name="stranitsy" placeholder="" value="<?php echo $book['stranitsy']; ?>">

                <p>ISBN:</p>
                <input type="text" name="isbn" placeholder="" value="<?php echo $book['isbn']; ?>">

                <p>Формат:</p>
                <input type="text" name="format" placeholder="" value="<?php echo $book['format']; ?>">

                <p>Возрастное ограничение:</p>
                <select name="vozrast">
                    <option value="0+" <?php if ($book['vozrast'] == "0+") echo 'selected'; ?>>0+</option>
                    <option value="3+" <?php if ($book['vozrast'] == "3+") echo 'selected'; ?>>3+</option>
                    <option value="6+" <?php if ($book['vozrast'] == "6+") echo 'selected'; ?>>6+</option>
                    <option value="12+" <?php if ($book['vozrast'] == "12+") echo 'selected'; ?>>12+</option>
                    <option value="16+" <?php if ($book['vozrast'] == "16+") echo 'selected'; ?>>16+</option>
                    <option value="18+" <?php if ($book['vozrast'] == "18+") echo 'selected'; ?>>18+</option>
                </select>

                <p>Тираж:</p>
                <input type="text" name="tirazh" placeholder="" value="<?php echo $book['tirazh']; ?>">

                <p>Вес, г:</p>
                <input type="text" name="ves" placeholder="" value="<?php echo $book['ves']; ?>">

                <p>
                    <input type="submit" name="submit" class="" value="Добавить">
                </p>

            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>