<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    <a href="user.php">Create new user</a><br>
    <?php

    require_once 'app.php';
    $sql = 'select * from users';
    $stmnt = $db->prepare($sql);
    $stmnt->execute([]);
    $users = $stmnt->fetchAll();

    foreach($users as $user) {
        $user = (object) $user;
        echo '<a href="user.php?id=' . $user->id . '">' . $user->firstname . '</a><br>';
    }

    ?>
</body>
</html>