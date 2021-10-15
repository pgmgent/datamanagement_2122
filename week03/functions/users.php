<?php 

function createUser($user) {
    global $db;

    foreach($user as $property => &$value) {
        //Transform special chars to html entities 
        //to prevent XSS attack
        if($property != ':pwd') {
            $value = htmlspecialchars($value);
        }
    }

    $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`)
    VALUES (:firstname, :lastname, :email, :pwd)";

    $stmnt = $db->prepare($sql);
    $stmnt->execute( 
        [
            ':firstname' => $user->firstname,
            ':lastname' => $user->lastname,
            ':email' => $user->email,
            ':pwd' => $user->password,
        ]
     );

    return $db->lastInsertId();
}

function updateUser($user) {
    global $db;

    foreach($user as $property => &$value) {
        //Transform special chars to html entities 
        //to prevent XSS attack
        if($property != ':pwd') {
            $value = htmlspecialchars($value);
        }
    }

    $sql = "UPDATE `users` 
            SET `firstname` = :firstname, 
            `lastname` = :lastname,
            `email` = :email
            WHERE `id` = :id";

    $stmnt = $db->prepare($sql);
    return $stmnt->execute( 
        [
            ':firstname' => $user->firstname,
            ':lastname' => $user->lastname,
            ':email' => $user->email,
            ':id' => $user->id,
        ]
     );
}

function emailExists($email) {
    global $db;
    $sql = "SELECT COUNT(email) FROM users WHERE email = ?";
    $stmnt = $db->prepare($sql);
    $stmnt->execute( [ $email ] );
    $numberOfUsers = (int) $stmnt->fetchColumn();
    return ( $numberOfUsers > 0 ) ;
}

function getUserById($user_id) {
    global $db;
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmnt = $db->prepare($sql);
    $stmnt->execute( [ $user_id ] );
    return $stmnt->fetchObject();

}