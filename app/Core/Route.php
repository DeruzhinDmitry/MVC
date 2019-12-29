<?php
namespace App\Core;

/**
 * Class Route
 * @package Application\Core
 */
class Route
{
    /**
     * Route execute
     */
    public static function execute()
    {
        $route = [
            'controller' => 'Index',
            'action' => 'Index'
        ];

        $routeArray = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routeArray[1]) && $routeArray[1][0] != '?') {
            $route['controller'] = str_replace('_', '', ucwords($routeArray[1], '_'));
        }

        if (!empty($routeArray[2]) && $routeArray[2][0] != '?') {
            $route['action'] = str_replace('_', '', ucwords($routeArray[2], '_'));
        }

        $actionName = 'action' . $route['action'];

        $controllerNamespace = 'App\Controller\\' . $route['controller'];
        if (!class_exists($controllerNamespace)) {
            header('Location: /not_fount');
            exit;
        }

        $controller = new $controllerNamespace();
        $controller->$actionName();
    }
}
