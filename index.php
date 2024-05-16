<?php

session_start();

require_once __DIR__ . '/controllers/ArticleController.php';

require_once __DIR__ . '/fonctions.php';

$route = $_GET['route'] ?? 'accueil';

try {
    switch ($route) {
        case 'accueil':
            // AccueilController::afficherAccueil();
            echo 'Not yet implemented';
            break;

        case 'liste-articles':
            ArticleController::afficherListeArticles();
            break;

        case 'random':
            if (rand(0, 1)) {
                throw new Exception('La tristitude...');
            }
            break;

        default:
            include __DIR__ . '/views/errors/404.php';
    }
} catch (Exception $e) {
    include __DIR__ . '/views/errors/500.php';
}
