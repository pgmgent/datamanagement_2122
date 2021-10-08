<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wie ben jij?</h1>

<?php
session_start();


$name = false;

if( isset($_POST['firstname']) ) {
    setcookie('username', $_POST['firstname'], time()+3600 );
}

$name = $_COOKIE['username'] ?? false;


/*
if($name) {
    $_SESSION['username'] = $name;
} elseif ( isset($_SESSION['username']) ) {
    $name = $_SESSION['username'];
}*/

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