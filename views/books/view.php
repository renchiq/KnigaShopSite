<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Экземпляр книги</h1>
    <?php foreach ($bookItem as $bookFeatureName => $bookFeatureValue) : ?>
    <p>
        <?php if (isset($bookFeatureValue)) echo "$bookFeatureName === $bookFeatureValue"; ?>
    </p>
    <?php endforeach; ?>
</body>

</html>