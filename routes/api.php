<?php

use Illuminate\Routing\Router;

/** @var $router Illuminate\Routing\Router */

// @formatter:off

$router->namespace('Api')->prefix('api')->group(function (Router $router) {
    $router->namespace('Password')->prefix('password')->name('password.')->group(function (Router $router) {
        $router->post('reset', 'Reset')->name('reset')->middleware('guest');
        $router->post('forgotten', 'Forgotten')->name('reset')->middleware('guest');
    });

    $router->post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken')->name('passport.token');
});

// @formatter:on
