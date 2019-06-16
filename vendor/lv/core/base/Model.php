<?php


namespace lv\base;


use lv\Db;

class Model
{
    public $atributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }
}