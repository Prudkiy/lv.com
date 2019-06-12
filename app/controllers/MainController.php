<?php


namespace app\controllers;


use lv\base\Controller;

class MainController extends Controller
{
    public function indexAction () {
        debug($this->route);
    }
}