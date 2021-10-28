<?php

class Article extends BaseModel {

    protected $table = 'articles';
    protected $pk = 'id';

    public function getShortContent () {
        return substr($this->content, 0, 100);
    }
}