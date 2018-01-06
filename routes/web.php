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

use Illuminate\Http\Request;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('members', 'MembersController@getAll');

$router->get('member/{id:[0-9]+}', 'MembersController@getById', function ($id) {

});

$router->get('direction/{id:[0-9]+}', 'MembersController@getByDirection');

$router->get('status/{status}', 'MembersController@getByStatus');
