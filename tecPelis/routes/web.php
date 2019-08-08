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


$router->get('/', function () use ($router) {
    return $router->app->version();
});
*/

/**
 * Routes for resource peliculas
 */
$router->get('/', 'PeliculasController@index');
$router->get('peliculas', 'PeliculasController@all');
$router->get('peliculas/{id}', 'PeliculasController@get');
$router->get('peliculas/byname/{name}', 'PeliculasController@getByName');
$router->post('peliculas', 'PeliculasController@create');
$router->put('peliculas/{id}', 'PeliculasController@put');
$router->delete('peliculas/{id}', 'PeliculasController@remove');
