<?php

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

$app->get('/', 'PagesController:index')->setName('home');
$app->get('/gallery', \App\Controllers\PagesController::class . ':getGallery');
$app->get('/atelier', \App\Controllers\PagesController::class . ':getAtelier');
$app->get('/faq', \App\Controllers\PagesController::class . ':getFaq')->setName('faq');
$app->get('/contact', \App\Controllers\PagesController::class . ':getContact')->setName('contact');
$app->post('/contact', \App\Controllers\PagesController::class . ':postContact');
$app->get('/eagle', \App\Controllers\PagesController::class . ':getEagle');
$app->get('/arbre', \App\Controllers\PagesController::class . ':getArbre');
$app->get('/arbre2', \App\Controllers\PagesController::class . ':getArbre2');
$app->get('/cerf', \App\Controllers\PagesController::class . ':getCerf');
$app->get('/cerfhead', \App\Controllers\PagesController::class . ':getCerfHead');
$app->get('/cerfhead2', \App\Controllers\PagesController::class . ':getCerfHead2');
$app->get('/cerfmini', \App\Controllers\PagesController::class . ':getCerfMini');
$app->get('/cheval', \App\Controllers\PagesController::class . ':getCheval');
$app->get('/colibri', \App\Controllers\PagesController::class . ':getColibri');
$app->get('/feuilles', \App\Controllers\PagesController::class . ':getFeuilles');
$app->get('/feuilles2', \App\Controllers\PagesController::class . ':getFeuilles2');
$app->get('/feuillesbranche', \App\Controllers\PagesController::class . ':getFeuillesBranche');
$app->get('/autruche', \App\Controllers\PagesController::class . ':getAutruche');
$app->get('/heron', \App\Controllers\PagesController::class . ':getHeron');
$app->get('/hibou', \App\Controllers\PagesController::class . ':getHibou');
$app->get('/licorne', \App\Controllers\PagesController::class . ':getLicorne');
$app->get('/multibirds', \App\Controllers\PagesController::class . ':getMultiBirds');
$app->get('/oiseauxbranche', \App\Controllers\PagesController::class . ':getOiseauxBranche');
$app->get('/ours', \App\Controllers\PagesController::class . ':getOurs');
$app->get('/sapin', \App\Controllers\PagesController::class . ':getSapin');
$app->get('/1a', \App\Controllers\PagesController::class . ':get1a');

$app->group('', function () {
    $this->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup');
    $this->post('/auth/signup', 'AuthController:postSignUp');

    $this->get('/auth/signin', 'AuthController:getSignIn')->setName('auth.signin');
    $this->post('/auth/signin', 'AuthController:postSignIn');
})->add(new GuestMiddleware($container));

$app->group('', function () {
    $this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout');

    $this->get('/auth/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change');
    $this->post('/auth/password/change', 'PasswordController:postChangePassword');
})->add(new AuthMiddleware($container));
