<h1>Корзина</h1>
<table border='1px'>
    <tr>
        <th>Название</th>
        <th>Автор</th>
        <th>Стоимость</th>
        <th>Количество</th>
    </tr>
    <?php foreach ($booksInCartInfo as $key => $bookInfo) : ?>
    <tr>
        <td><?php echo $bookInfo['nazvanie']; ?></td>
        <td><?php echo $bookInfo['author']; ?></td>
        <td><?php echo $bookInfo['cena']; ?></td>
        <td><?php echo $bookInfo['count']; ?></td>
        <td><a href="/cart/delete/<?php echo $bookInfo['id'] ?>">Удалить</a></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="4">Общая стоимость: <?php echo $totalPrice; ?> р.</td>
    </tr>
</table>
<p><a href="/cart/purchase/">Оформить покупку</a></p>