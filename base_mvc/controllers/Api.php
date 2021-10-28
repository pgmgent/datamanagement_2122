<?php

class ApiController {

    public function get_articles ($page = 0) {
        //change content-type of the ooutput
        header('Content-Type: application/json; charset=utf-8');

        $articles =  Article::getAll();

        //echo json to the output
        echo json_encode($articles);
        exit;
    }

}