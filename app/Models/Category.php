<?php


namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function items(){
        return $this->hasMany(ItemCategory::class, 'categoryId','Id');
    }

    public function Parent(){
        return $this->hasMany(CategoryRelation::class, 'categoryId','Id');
    }

    public function childCategory(){
        return $this->hasMany(CategoryRelation::class, 'ParentcategoryId','Id');
    }
}