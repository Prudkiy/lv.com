<?php


namespace app\controllers;


use lv\App;

class MainController extends AppController
{
    public function indexAction () {

        $posts = \R::findAll('table');
        $post = \R::findOne('table', 'id = ?', [2]);
        $this->setMeta(App::$app->getProperty('shop_name'), 'my Discription this Site', 'php cms study');
        $name = 'Serhii';
        $age = 32;
        $this->set(compact('name', 'age', 'posts'));
    }
}