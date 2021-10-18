<?php

class UserController {

    public function detail ($id) {
        $user = new User();
        $user->getById($id);

        include 'views/UserDetail.php';
    }

    public function delete ($id) {
    
        return 'Delete ' . $id;
    }

}