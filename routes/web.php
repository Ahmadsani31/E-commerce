<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();


Route::group(['prefix' => 'admin'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('category/index','CategoryController@index')->name('category.index');
    Route::post('category/store','CategoryController@store')->name('category.store');
    Route::get('category/datatable','CategoryController@datatable')->name('category.datatable');
    Route::delete('category/{id}/destroy','CategoryController@destroy')->name('category.destroy');


    Route::post('category/subStore','SubCategoryController@store')->name('category.subStore');
    Route::get('category/subDatatable','SubCategoryController@datatable')->name('category.subDatatable');
    Route::delete('category/{id}/subDestroy','SubCategoryController@destroy')->name('category.subDestroy');
    Route::get('category/{id}/selectCat','SubCategoryController@selectCat')->name('category.selectCat');


    Route::get('type/datatable','TypeController@datatable')->name('type.datatable');
    Route::post('type/store','TypeController@store')->name('type.store');
    Route::delete('category/{id}/typeDestroy','TypeController@destroy')->name('type.destroy');
    Route::get('type/{id}/selectSubCat','TypeController@selectSubCat')->name('type.selectSubCat');


    Route::get('ukuran/index','UkuranController@index')->name('ukuran.index');
    Route::get('ukuran/datatable','UkuranController@datatable')->name('ukuran.datatable');
    Route::post('ukuran/store','UkuranController@store')->name('ukuran.store');
    Route::delete('ukuran/{id}/destroy','UkuranController@destroy')->name('ukuran.destroy');

    Route::get('ukuran/{id}/selectSubCat','TypeController@selectSubCat');
    Route::get('ukuran/{id}/selectCat','SubCategoryController@selectCat');


    Route::get('product/index','ProductController@index')->name('product.index');
    Route::get('product/{id}/view','ProductController@view')->name('product.view');
    Route::get('product/create','ProductController@create')->name('product.create');
    Route::post('product/store','ProductController@store')->name('product.store');

    Route::get('product/{id}/show','ProductController@show')->name('product.show');
    Route::post('product/image','ProductController@image')->name('product.image');
    Route::post('product/storeImage','ProductController@storeImage')->name('product.storeImage');
    Route::post('product/deleteImage/', 'ProductController@deteleImage')->name('product.deleteImage');
    Route::delete('product/{id}/destroy','ProductController@destroy')->name('product.destroy');

    Route::get('product/{id}/selectSubCat','TypeController@selectSubCat');
    Route::get('product/{id}/selectCat','SubCategoryController@selectCat');
    Route::get('product/{id}/selectType','UkuranController@selectType');

    Route::get('image/','ViewImageController@index')->name('image');
    Route::get('frontend/productDetail/product/{id}/detailUkuran','ProductController@detailUkuran');

    Route::post('upload/','ViewImageController@store')->name('image.store');
    Route::post('upload/delete/', 'ViewImageController@deteleImage')->name('image.delete');
    Route::get('upload/view', 'ViewImageController@imageView')->name('image.view');

});


Route::get('singin','SingInCostumerContoller@index')->name('singin');
Route::get('singup','SingUpCostumerContoller@index')->name('singup');
Route::post('singupStore','SingUpCostumerContoller@singupStore')->name('singupStore');

Route::get('productDetail','DetailProductController@index')->name('detail');

Route::group(['prefix' => 'frontend'], function(){
});
