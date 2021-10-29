<?php

class ArticleController extends BaseController {

    protected function index () {
        $this->viewParams['articles'] = Article::getAll();

        $this->loadView();
    }

    protected function detail ($slug) {
        $this->viewParams['article'] = Article::getBySlug($slug);
        
        $this->loadView();
    }

}