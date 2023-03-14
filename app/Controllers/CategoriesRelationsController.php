<?php

namespace App\Controllers;

use App\Core\Controller;

use App\Models\Category;

class CategoriesRelationsController extends Controller
{

    protected $data;
    protected $title = "Category Relations";
    protected $model;

    public function __construct(){
        $this->model = Category::class;
    }


    protected function layout($pathName){

        return $this->view( "categories_relations/{$pathName}", $this->data);

    }



    public function index(){
        $this->data=[
            'title'         => $this->title." Manager",
            'categories'    => $this->model::with('items', 'childCategory')->get(),
        ];

        $this->layout('index');
    }

    protected static $instance;

    static function getInstance(){
        if (!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
}