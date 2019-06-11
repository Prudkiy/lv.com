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
            echo $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
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
                self::$route = $route;
                return true;

            }
        }
        return false;
    }

}