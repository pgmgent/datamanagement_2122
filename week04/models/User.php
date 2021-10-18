<?php

class User {

    public function emailExists($email) {
        global $db;
        $sql = "SELECT COUNT(email) FROM users WHERE email = ?";
        $stmnt = $db->prepare($sql);
        $stmnt->execute( [ $email ] );
        $numberOfUsers = (int) $stmnt->fetchColumn();
        return ( $numberOfUsers > 0 ) ;
    }

    public function getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getAge() {
        return $this->calculateAge() . ' jaar';
    }

    private function calculateAge() {
        return 21;
    }

    public function getById($user_id) {
        global $db;
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmnt = $db->prepare($sql);
        $stmnt->execute( [ $user_id ] );
        $obj = $stmnt->fetchObject();

        $this->firstname = $obj->firstname;
        $this->lastname = $obj->lastname;
        $this->email = $obj->email;
    
    }
}