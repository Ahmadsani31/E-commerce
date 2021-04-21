<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_image';

    protected $fillable = ['product_id','image'];

    public function product()
    {
       return $this->hasOne(Product::class,'id','product_id');
    }
}
