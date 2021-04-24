<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
                            'costumer_id',
                            'product_id',
                            'productDetail_id',
                            'ukuran_id',
                            'qty',
                            'stock',
                            'harga'
                        ];

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }

    public function productDetail()
    {
        return $this->hasOne(ProductDetail::class,'id','productDetail_id');
    }

    public function ukuran()
    {
        return $this->hasOne(Ukuran::class,'id','ukuran_id');
    }
}
