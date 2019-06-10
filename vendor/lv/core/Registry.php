<?php


namespace lv;

use lv\traits\TSingletone;

class Registry
{
    use TSingletone;

    private static $properties = [];

    public function setProperty ($name, $value) // добавить / изменить проперти
    {
        self::$properties[$name] = $value;
    }

    public function getProperty ($name) // получить значение проперити по ключу
    {
        if (isset(self::$properties[$name])) return self::$properties[$name];
        else return null;
    }

    public  function  getProperties () // получить все значения проперти
    {
        return self::$properties;
    }


}