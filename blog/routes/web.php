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

$router->group(['prefix' => '/api'], function() use($router){
 
$router->get('/users', 'UserController@index');
$router->post('/user', 'UserController@create');
$router->put('/user/{id}', 'UserController@update');
$router->delete('/user/{id}', 'UserController@destroy');
$router->get('/user/{id}','UserController@show');
});

// $router->get('/', function(){
//     return view('View');
// }
// });
$router->get('/','UserController@sendView');

?>