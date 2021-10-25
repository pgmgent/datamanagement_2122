<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Default title' ?></title>
</head>
<body>
    <div class="brand">BrandName</div>

    <?php include_once BASE_DIR . '/views/_templates/_partials/nav.php'; ?>

    <main>
        <?= $content; ?>
    </main>
    
    <?php include_once BASE_DIR . '/views/_templates/_partials/footer.php'; ?>

</body>
</html>