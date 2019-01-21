<?php 

require 'vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,

        'db' => [
            // Eloquent configuration
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'clk',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
    ],   
]);

require("app/container.php");

$app->get('/', \App\Controllers\PagesController::class . ':home')->setName('home');
$app->get('/gallery', \App\Controllers\PagesController::class . ':getGallery');
$app->get('/atelier', \App\Controllers\PagesController::class . ':getAtelier');
$app->get('/faq', \App\Controllers\PagesController::class . ':getFaq')->setName('faq');
$app->get('/contact', \App\Controllers\PagesController::class . ':getContact')->setName('contact');

$app->run();

