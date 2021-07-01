<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Это кабинет, пользователя <?php echo $user['name']; ?></h1>
    <p><a href="/cabinet/edit/">Редактировать данные профиля</a></p>
    <p><a href="/cart/">Список покупок</a></p>
    <p><a href="/user/logout/">Выйти из профиля</a></p>
</body>

</html>