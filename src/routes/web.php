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
    //echo "I can do job whis lumen!<br> Version:";
    return $app->version();
});
$app->get('/adminer/', function () {
    //echo "I can do job whis lumen!<br> Version:";
    return view('adminer');
});
