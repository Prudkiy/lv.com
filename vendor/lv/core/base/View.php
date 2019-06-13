<?php


namespace lv\base;


class View
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];

    public function __construct($route, $layout = '', $view = '', $meta){
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->model = $route['controller'];
        $this->meta = $meta;

        if ($layout === false) {
            $this->layout = false;
        }
        else $this->layout = LAYOUT;

    }

    public function render ($data) {

        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        $meta = $this->getMeta($this->meta);

        if (is_file($viewFile)){
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        }
        else throw new \Exception("Не найден вид - {$this->view}", 500);

        if (false !== $this->layout) $layoutFile = APP . "/views/layouts/{$this->layout}.php";

        if (is_file($layoutFile)) {
            require_once $layoutFile;
        }
        else throw new \Exception("Шаблон не найден - {$layoutFile}", 500);

    }

    private function getMeta ($data) {

        $meta = "
    <meta charset=\"UTF-8\">
    <meta name=\"keywords\" content=\"{$data['keywords']}\" />
    <meta name=\"description\" content=\"{$data['discription']}\" />
    <title>{$data['title']}</title>
    
        ";
        return $meta;
    }

}