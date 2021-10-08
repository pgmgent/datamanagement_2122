<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Management</h1>

<?php

/*
if(key_exists('name', $_GET)) {
    $name = $_GET['name'];

} else {
    $name = 'Ghost';
}
*/

$name = $_POST['firstname'] ?? false;

//var_dump($_GET);
print_r($_POST);

//phpinfo();

?>

<?php if($name) : ?>
    <h3>Hello <?= $name; ?></h3>
<?php else : ?>
    <form method="POST">
        <label>
            Wie ben jij?
            <input type="text" name="firstname">
        </label>
        <button type="submit">Verstuur</button>
    </form>
<?php endif; ?>

</body>
</html>