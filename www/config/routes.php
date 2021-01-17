<?php
declare(strict_types=1);
use Slim\App;
use App\controller\HomePageController;

return function (App $app) {
    $app->get('/css/main', [HomePageController::class, 'css']);
    $app->get('/', [HomePageController::class, 'index'])->setName('home');
};
