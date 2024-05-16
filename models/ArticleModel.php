<?php

require_once __DIR__ . '/Model.php';

class ArticleModel extends Model {
    function recupererTousLesArticles(): array {
        return $this->bdd
            ->query('SELECT * FROM article')
            ->fetchAll();
    }
}
