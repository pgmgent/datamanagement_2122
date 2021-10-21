<?php

class ArticleController extends BaseController {

    protected function index () {
        $this->viewParams['articles'] = Article::getAll();

        $this->loadView();
    }

    protected function detail ($params) {
        $this->viewParams['article'] = Article::getById($params[0]);
        
        $this->loadView();
    }

    
}