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
    return "Sistemas Distribuidos";
});

/***   Usuarios ***/
$router->get('users', 'UserController@index');
$router->get('users/{id}', 'UserController@showOneUser');
$router->post('users', 'UserController@createUser');


/*** Peliculas ***/
$router->get('movies', 'MovieController@index');
$router->get('movies/{id}', 'MovieController@showOneMovie');
$router->post('movies', 'MovieController@createMovie');
