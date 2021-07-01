<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class='content'>
        <p>
        <h1>Manage books</h1>
        </p>
        <p class='add'><a href="/admin/manage_books/add">Добавить книгу</a></p>
        <div>
            <table>
                <tr>
                    <th>ID книги</th>
                    <th>ISBN</th>
                    <th>Название книги</th>
                    <th>Автор</th>
                    <th>Цена</th>
                </tr>
                <?php if (count($booksList) != 0) : ?>
                <?php foreach ($booksList as $num => $bookItem) : ?>
                <tr>
                    <td><?php echo $bookItem['id']; ?></td>
                    <td><?php echo $bookItem['isbn']; ?></td>
                    <td width='600px'><?php echo $bookItem['nazvanie']; ?></td>
                    <td><?php echo $bookItem['author']; ?></td>
                    <td><?php echo $bookItem['cena']; ?> руб.</td>
                    <td><a href="/admin/manage_books/edit/<?php echo $bookItem['id']; ?>"
                            class='action-button-edit'>Редактировать</a></td>
                    <td><a href="/admin/manage_books/delete/<?php echo $bookItem['id']; ?>"
                            class='action-button-delete'>Удалить</a></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>