<?php

use App\Core\Router;
use App\Controllers\CategoriesController;
use App\Controllers\CategoriesRelationsController;

Router::get('/', [CategoriesController::class, 'index']);
Router::get('/categories', [CategoriesController::class, 'index']);
Router::get('/categories-relations', [CategoriesRelationsController::class, 'index']);

