<?php

echo 'Connectie met DB maken';

$dsn = 'mysql:dbname=pgm;host=127.0.0.1;port=3306';
$user = 'pgm';
$password = 'PGMidm4x!';


$db = new PDO($dsn, $user, $password);
