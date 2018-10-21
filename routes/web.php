<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api/v1'], function ($app)
{
    $app->get('/',                  'PassengerController@home');
    $app->get('/passengers',        'PassengerController@index');
    $app->post('/passenger',        'PassengerController@create');
    $app->get('/passenger/{id}',    'PassengerController@show');
    $app->put('/passenger/{id}',    'PassengerController@update');
    $app->delete('/passenger/{id}', 'PassengerController@destroy');
});
