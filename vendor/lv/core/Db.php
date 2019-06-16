<?php


namespace lv;


use lv\traits\TSingletone;

class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        \R::debug( TRUE, 1 ); //select mode 1 to suppress screen output

        if (! \R::testConnection() ) throw new \Exception('Нет соеденения с базой данных', 500);
        \R::freeze(true); // запретить изменение базы данных без ведома

    }

}