<?php


namespace lv\base;


abstract class Controller
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];

    public function __construct($route){
         $this->route = $route;
         $this->controller = $route['controller'];
         $this->view = $route['action'];
         $this->prefix = $route['prefix'];
         $this->model = $route['controller'];
    }

    public function set ($data) {
        $this->data = $data;
    }

    public function setMeta ($title = '', $discription = '', $keywords = '') {
        $this->meta['title'] = $title;
        $this->meta['discription'] = $discription;
        $this->meta['keywords'] = $keywords;
    }

    public function getView () {
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObject->render($this->data);
    }

}