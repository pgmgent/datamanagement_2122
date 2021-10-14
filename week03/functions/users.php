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

function emailExists($email) {
    global $db;
    $sql = "SELECT COUNT(email) FROM users WHERE email = ?";
    $stmnt = $db->prepare($sql);
    $stmnt->execute( [ $email ] );
    $numberOfUsers = (int) $stmnt->fetchColumn();
    return ( $numberOfUsers > 0 ) ;
}