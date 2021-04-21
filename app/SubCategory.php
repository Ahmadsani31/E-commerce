<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_category';

    protected $fillable = ['category_id','sub_category_nama'];

    public function category()
    {
       return $this->hasOne(Category::class,'id','category_id');
    }
}
