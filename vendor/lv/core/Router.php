<?php


namespace lv;


class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add ($regexp, $rout = [])
    {
        self::$routes[$regexp] = $rout;
    }

    public static function getRoutes ()
    {
        return self::$routes;
    }

    public static function getRoute ()
    {
        return self::$route;
    }

    public static function dispatche ($url)
    {
        if (self::mathRoute($url))
        {
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            if (class_exists($controller)){
                $controllerObject = new $controller(self::$route);
                $action = self::lowerCamelCase( self::$route['action'] ) . 'Action';
                if (method_exists($controllerObject, $action)){
                    $controllerObject->$action();

                }
                else {
                    throw new \Exception("Контроллер $controller::$action не найден", 404);
                }
            }
            else {
                throw new \Exception("Контроллер $controller не найден", 404);
            }
        }
        else
        {
            throw new \Exception("Страница не найдена", 404);
        }
    }

    public static function mathRoute ($url)
    {
        foreach ( self::$routes as $patern => $route )
        {
            if (preg_match("#$patern#", $url, $matches)){

                foreach ($matches as $k => $v) {
                    if (is_string($k))
                    {
                        $route[$k] = $v;
                    }
                }
                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }
                $route["controller"] = self::upperCamelCase($route["controller"]);
                self::$route = $route;
                return true;

            }
        }
        return false;
    }

    protected static function upperCamelCase ($name) {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }

    protected static function lowerCamelCase ($name) {
        return lcfirst(self::upperCamelCase($name));
    }

}