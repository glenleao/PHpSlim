<?php

$app->get('/', 'HomeController:index')->setName('home');

$app->group('/usuario', function($app) {
    $app->map(['GET', 'POST'], '/avatar', 'UserController:avatar')->setName('user.avatar');
});

$app->group('/auth', function($app){
    $app->map(['GET','POST'],'/login','AuthController:login')->setName('auth.login');
    $app->map(['GET','POST'],'/register','AuthController:register')->setName('auth.register');
    $app->get('/logout', 'AuthController:logout')->setName('auth.logout');
});


    