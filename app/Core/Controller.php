<?php

namespace App\Core;

class Controller
{
    public function __construct()
    {

    }

    protected static $instance;

    static function getInstance(){
        if (!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected $view;

    protected function view($template,$params=[])
    {
        $this->view = new View($template,$params);
        return $this->view;
    }





}
