<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    protected $table = 'ukuran';

    protected $fillable = ['cat_id','sub_cat_id','type_id','size','panjang','lebar','usia','lingkar-dada','keterangan'];

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
    public function productDetail()
    {
       return $this->hasMany(ProductDetail::class,'ukuran_id','id');
    }
}
