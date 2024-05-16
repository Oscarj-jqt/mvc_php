<?php

require_once __DIR__ . '/../models/ArticleModel.php';

class ArticleController {

    static function afficherListeArticles() {
        $model = new ArticleModel;
        $articles = $model->recupererTousLesArticles(); // Mon modèle va me chercher les articles

        include __DIR__ .'/../views/liste-articles.php'; // J'appelle ma vue
    }


    function ajouterArticle() {
        if (
            !empty($_POST['contenu'])
            // etc
        ) {
            
        }
    }


}