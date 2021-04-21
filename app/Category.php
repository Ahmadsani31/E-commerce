<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['category_nama'];

    public function catSub()
    {
       return $this->hasMany(SubCategory::class);
    }
}
