<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'product_detail';

    protected $fillable = ['product_id','ukuran_id','harga','stock'];

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }

    public function ukuran()
    {
       return $this->hasOne(Ukuran::class,'id','ukuran_id');
    }

}
