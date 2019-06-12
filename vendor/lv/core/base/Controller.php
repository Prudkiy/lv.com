<?php


namespace lv\base;


abstract class Controller
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $data = [];
    public $meta = [];

    public function __construct($route){
         $this->route = $route;
         $this->controller = $route['controller'];
         $this->view = $route['action'];
         $this->prefix = $route['prefix'];
         $this->model = $route['controller'];
    }

}