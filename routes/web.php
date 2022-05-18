<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'accounting'], function () use ($router) {
    $router->group(['prefix' => 'vouchers'], function () use ($router) {
        $router->get('/get', ['uses' => 'TempVoucherController@index']);
        $router->post('/store', ['uses' => 'TempVoucherController@store']);
        $router->get('/{temp_voucher_id}', ['uses' => 'TempVoucherController@detail']);
        $router->delete('/{temp_voucher_id}/delete', ['uses' => 'TempVoucherController@delete']);

        $router->group(['prefix' => '/{temp_voucher_id}/rows'], function () use ($router) {
            $router->get('/get', ['uses' => 'TempVoucherRowController@index']);
            $router->post('/store', ['uses' => 'TempVoucherRowController@store']);
            $router->get('/{row_id}', ['uses' => 'TempVoucherRowController@detail']);
            $router->delete('/{row_id}/delete', ['uses' => 'TempVoucherRowController@delete']);


        });
    });

    $router->group(['prefix' => 'banks'], function () use ($router) {
        $router->get('/get', ['uses' => 'BankController@index']);
        $router->post('/store', ['uses' => 'BankController@store']);
        $router->get('/{bank_id}', ['uses' => 'BankController@detail']);
        $router->delete('/{bank_id}/delete', ['uses' => 'BankController@delete']);

        $router->group(['prefix' => '{bank}/accounts'], function () use ($router) {
            $router->get('/get', ['uses' => 'BankAccountController@index']);
            $router->post('/store', ['uses' => 'BankAccountController@store']);
            $router->get('/{account_id}', ['uses' => 'BankAccountController@detail']);
            $router->delete('/{account_id}/delete', ['uses' => 'BankAccountController@delete']);
        });

    });

    $router->group(['prefix' => 'accounts'], function () use ($router) {
        $router->group(['prefix' => 'general'], function () use ($router) {

            $router->get('/get', ['uses' => 'GeneralAccountController@index']);
            $router->post('/store', ['uses' => 'GeneralAccountController@store']);
            $router->get('/{general_account_id}', ['uses' => 'GeneralAccountController@detail']);
            $router->delete('/{general_account_id}/delete', ['uses' => 'GeneralAccountController@delete']);

            $router->group(['prefix' => '{general_account_id}/subsidiary'], function () use ($router) {
                $router->get('/get', ['uses' => 'SubsidiaryAccountController@index']);
                $router->post('/store', ['uses' => 'SubsidiaryAccountController@store']);
                $router->get('/{general_account_id}', ['uses' => 'SubsidiaryAccountController@detail']);
                $router->delete('/{general_account_id}/delete', ['uses' => 'SubsidiaryAccountController@delete']);

                $router->group(['prefix' => '{subsidiary_account_id}/detail'], function () use ($router) {
                    $router->get('/get', ['uses' => 'DetailAccountController@index']);
                    $router->post('/store', ['uses' => 'DetailAccountController@store']);
                    $router->get('/{subsidiary_account_id}', ['uses' => 'DetailAccountController@detail']);
                    $router->delete('/{subsidiary_account_id}/delete', ['uses' => 'DetailAccountController@delete']);
                });
            });
        });
    });

});
