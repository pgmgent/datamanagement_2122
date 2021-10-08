<?php
require_once 'includes/app.php';


$id = $_GET['id'] ?? '';

$data = getCourseById($id);

//print_r($data);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($data as $vak) {
            ?>

            <div class="course">
                <h1><?= $vak['name']; ?></h1>
                <div><?= $vak['description']; ?></div>
                <div>Periode <?= $vak['periode']; ?></div>
                <div><?= $vak['firstname']; ?> <?= $vak['lastname']; ?></div>
            </div>

            <?php
        }
    ?>
</body>
</html>