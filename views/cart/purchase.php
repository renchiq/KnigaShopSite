<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Оформление заказа</h1>
        <p style='color: green;'>
            <?php if ($result) echo 'Ваш заказ принят. В течении 5 минут вам позвонит наш менеджер для уточнения деталей заказа.'; ?>
        </p>
        <?php if (isset($errors) && is_array($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>
            <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        </p>
        <p>В вашей корзине <?php echo $totalCount; ?> товаров на <?php echo $totalPrice; ?> руб.</p>
        <p>Чтобы оформить покупку заполните поля ниже.</p>
        <form action="#" method="POST">
            <p>Ваше имя:</p>
            <p><input type="text" name="customer_name" required value="<?php echo $purchase['customer_name']; ?>"></p>
            <p>Адрес доставки:</p>
            <p><input type="text" name="address" required></p>
            <p>Контактный номер телефона:</p>
            <p><input type="text" name="phone" required value="<?php echo $purchase['phone']; ?>"></p>
            <p>Комментарий</p>
            <p><textarea type="text" name="comment"></textarea></p>
            <p>Способ оплаты:</p>
            <p><select name="payment_type">
                    <option value="Картой онлайн на сайте">Картой онлайн на сайте</option>
                    <option value="Наличными при получении">Наличными при получении</option>
                    <option value="Картой при получении">Картой при получении</option>
                </select></p>
            <p><input type="submit" name="submit" value="Оформить покупку"></p>
        </form>
    </div>
</body>

</html>