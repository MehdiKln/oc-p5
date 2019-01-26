<?php

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

$app->get('/', 'HomeController:index')->setName('home');
$app->get('/gallery', \App\Controllers\HomeController::class . ':getGallery');
$app->get('/atelier', \App\Controllers\HomeController::class . ':getAtelier');
$app->get('/faq', \App\Controllers\HomeController::class . ':getFaq')->setName('faq');
$app->get('/contact', \App\Controllers\HomeController::class . ':getContact')->setName('contact');
$app->post('/submit-form', \App\Controllers\HomeController::class . ':submitForm')->setName('submit-form');

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
