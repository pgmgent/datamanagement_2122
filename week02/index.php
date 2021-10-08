<?php
require_once 'includes/app.php';

$search_str = $_GET['vak'] ?? '';

$data = getCourses($search_str);

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
    <h1>Vakken PGM <?= $search_str; ?></h1>
    <form>
        <input type="text" name="vak" placeholder="zoekterm">
        <button type="submit">Zoeken</button>
    </form>
    <?php
        foreach($data as $vak) {
            require 'views/course_block.php';
        }
    ?>
    De rest van mijn website <div class=""></div>
</body>
</html>