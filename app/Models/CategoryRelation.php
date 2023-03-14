<?php


namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class CategoryRelation extends Model
{
    protected $table = 'catetory_relations';


    public function Category(){
        return $this->hasOne(Category::class, 'id','categoryId');
    }

    public function items(){
        return $this->hasMany(ItemCategory::class, 'categoryId','categoryId');
    }

}