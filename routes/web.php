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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/key', function () {
    return str_random(32);
});

$app->get('/todo', 'TodoController@index');
$app->get('/todo/priority', 'TodoController@priority');
$app->get('/todo/done', 'TodoController@done');
$app->post('/todo', 'TodoController@store');
$app->put('/todo/{id}/update', 'TodoController@update');
$app->delete('/todo/{id}/delete', 'TodoController@delete');