<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'accounting'], function () use ($router) {
    $router->group(['prefix' => 'vouchers'], function () use ($router) {
        $router->get('/get', ['uses' => 'TempVoucherController@index']);
        $router->post('/store', ['uses' => 'TempVoucherController@store']);
    });


});
