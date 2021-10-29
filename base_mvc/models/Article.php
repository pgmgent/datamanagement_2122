<?php

class Article extends BaseModel {

    protected $table = 'articles';
    protected $pk = 'id';

    protected function getBySlug( string $slug ) {
        global $db;

        $sql = 'SELECT * FROM `articles` WHERE `slug` = :slug';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ ':slug' => $slug ] );

        $db_item = $pdo_statement->fetchObject();

        return $this->castDbObjectToModel($db_item);
    }

    public function getShortContent () {
        return substr($this->content, 0, 100);
    }
}