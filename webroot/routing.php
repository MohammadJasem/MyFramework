<?php
//------------------------------------------------------------------//
$router = new Router();
$router->get('/','MainController@index');
$router->post('/getStatistics','MainController@getStatistics');
$router->notFound_404();