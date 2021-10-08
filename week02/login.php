<?php
    print_r($_POST);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="POST">
        <label>
            Username: 
            <input type="text" name="username" placeholder="Username">
        </label>
        <label>
            Password: 
            <input type="password" name="password" placeholder="Password">
        </label>
        <button type="submit">Inloggen</button>
    </form>
</body>
</html>