<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 21.11.18
 * Time: 13:26
 */
$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/web.php';
})