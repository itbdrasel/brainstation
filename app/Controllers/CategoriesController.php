<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{

    protected $data;
    protected $title = "Category";
    protected $model;

    public function __construct(){
        $this->model = Category::class;
    }


    protected function layout($pathName){
        return $this->view( "categories/{$pathName}", $this->data);
    }



    public function index(){
        $this->data=[
            'title'         => $this->title." Manager",
            'categories'    => $this->model::with('items')->get()->sortByDesc(function($categories)
            {
                return $categories->items->count();
            }),
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