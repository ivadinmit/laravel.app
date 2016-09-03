<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Home page

Route::get('/', function () {
    return view('shop.index');
});

// eCommerce page

Route::get('/shop', function () {
    return view('shop.shop');
});

// Products pages

Route::get('/shop/m-tshirts', [
    'uses' => 'MensTshirtsController@getIndex',
    'as' => 'menstshirts.index'
]);

Route::get('/shop/m-jeans', [
    'uses' => 'MensJeansController@getIndex',
    'as' => 'mensjeans.index'
]);

Route::get('/shop/m-jackets', [
    'uses' => 'MensJacketsController@getIndex',
    'as' => 'mensjackets.index'
]);

Route::get('/shop/w-coats', [
    'uses' => 'WomensCoatsController@getIndex',
    'as' => 'womenscoats.index'
]);

Route::get('/shop/w-jeans', [
    'uses' => 'WomensJeansController@getIndex',
    'as' => 'womensjeans.index'
]);

Route::get('/shop/w-shoes', [
    'uses' => 'WomensShoesController@getIndex',
    'as' => 'womensshoes.index'
]);
