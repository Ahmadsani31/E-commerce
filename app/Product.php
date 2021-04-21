<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = ['user_id','cat_id','sub_cat_id','type_id','product_nama','bahan','warna','description','kode_product','status_product'];

    public function category()
    {
       return $this->hasOne(Category::class,'id','cat_id');
    }

    public function subCategory()
    {
       return $this->hasOne(SubCategory::class,'id','sub_cat_id');
    }

        public function type()
    {
       return $this->hasOne(Type::class,'id','type_id');
    }

    public function productImage()
    {
       return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function productDetail()
    {
       return $this->hasMany(ProductDetail::class,'product_id','id');
    }
}
