<?php


namespace app\controllers;


use lv\App;

class MainController extends AppController
{
    public function indexAction () {
        $this->setMeta(App::$app->getProperty('shop_name'), 'my Discription this Site', 'php cms study');
        $name = 'Serhii';
        $age = 32;
        $this->set(compact('name', 'age'));
    }
}