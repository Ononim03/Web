<?php

use Classes\MVC\Request;
use Classes\MVC\UserController;
require_once  "./routes.php";
require_once './autoload.php';
$tpl = file_get_contents('tasks/task3/base.html');
$html = str_replace('{form}', '', $tpl);
print($html);

$router = \Classes\MVC\Router::$routes;
$parts = explode('?', $_SERVER['REQUEST_URI']);
$path = $parts[0];

if (isset($router[$path])) {
    $handler = $router[$path];
    $controller = new $router[$path]['controller'];
    $method = $handler[$_SERVER["REQUEST_METHOD"]];
    if (method_exists($controller, $method)) {
        $request = new Request();
        $result = $controller->$method($request);
        echo $result;
        exit();
    }
}
http_response_code(404);

