<?php

use Slim\App;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class)->setName('home');
    $app->post('/users', \App\Action\UserCreateAction::class);
    $app->get('/fiche', \App\Action\FicheReadAction::class)->setName('fiche');
};