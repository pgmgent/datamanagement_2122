<?php

class HomeController extends BaseController {

    protected function index () {
        $this->viewParams['articles'] = Article::getAll();

        $this->loadView();
    }

    
}