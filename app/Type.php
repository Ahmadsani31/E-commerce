<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type_baju';

    protected $fillable = ['cat_id','sub_cat_id','type_nama'];

    public function category()
    {
       return $this->hasOne(Category::class,'id','cat_id');
    }

    public function subCategory()
    {
       return $this->hasOne(SubCategory::class,'id','sub_cat_id');
    }
}
