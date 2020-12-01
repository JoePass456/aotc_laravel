<?php
use App\Http\Controllers;
use Illuminate\Http\Request;

/** @var \Laravel\Lumen\Routing\Router $router */
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

$router->group(['middleware' => 'auth'], function () use ($router) {

    $router->get('/api/user', function(Request $request) {
        $user = $request->user();
        return $user->toArray();
    });

});

$router->get('/posts/all', 'PostController@viewAll');

$router->get('/likes/all', 'LikeController@viewAll');


$router->get('/', function () use ($router) {
    return $router->app->version();    
});

$router->post('/register','UsersController@register');
