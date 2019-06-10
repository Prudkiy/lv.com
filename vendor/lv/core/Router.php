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
            echo 'Ok';
        }
        else
        {
            echo 'Not1Ok';
        }
    }

    public static function mathRoute ($url)
    {
        foreach ( self::$routes as $patern => $route )
        {
            if (preg_match("#$patern#", $url, $matches)){

                foreach ($matches as $k => $v)

                {
                    if (is_string($k))
                    {
                        $route[$k] = $v;
                    }
                }
                if (empty($route['action']))
                {
                    $route['action'] = 'index';
                }
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] = '\\';
                }

                debug($route);
                return true;

            }
        }
        return false;
    }

}