<?php

use App\Cart;
use App\Product;
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
    $product = Product::limit(4)->get();
    return view('home-costumer',compact('product'));
});

// Route::get('/', function () {
//     $costumer_id = Auth::guard('costumer')->user()->id;
//     $cart = Cart::where('costumer_id', $costumer_id)->limit(2)->get();
//     return view('layouts.master',compact('cart'));
// });

Route::group(['prefix' => 'admin'], function(){
    Auth::routes();

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/product/edit', function () {
            return view('admin.product.edit');
        });
        Route::get('/home', 'HomeController@index')->name('admin.home');

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
        Route::get('product/{id}/edit','ProductController@edit')->name('product.edit');

        Route::get('product/{id}/show','ProductController@show')->name('product.show');
        Route::post('product/image','ProductController@image')->name('product.image');
        Route::post('product/storeImage','ProductController@storeImage')->name('product.storeImage');
        Route::post('product/deleteImage/', 'ProductController@deteleImage')->name('product.deleteImage');
        Route::delete('product/{id}/destroy','ProductController@destroy')->name('product.destroy');

        Route::get('product/{id}/selectSubCat','TypeController@selectSubCat');
        Route::get('product/{id}/selectCat','SubCategoryController@selectCat');
        Route::get('product/{id}/selectType','UkuranController@selectType');

        Route::get('image/','ViewImageController@index')->name('image');

        Route::post('upload/','ViewImageController@store')->name('image.store');
        Route::post('upload/delete/', 'ViewImageController@deteleImage')->name('image.delete');
        Route::get('upload/view', 'ViewImageController@imageView')->name('image.view');

        Route::get('costumer/index','DataCostumerController@index')->name('dataCostumer.index');


    });
});

Route::group(['middleware' => 'auth:costumer'], function () {
    Route::get('/home-costumer', 'CostumerController@index')->name('home-costumer');
    Route::get('/detail-product/{id}','DetailProductController@index')->name('detail-product');
    Route::get('/detail-product/{id}/detailUkuran','DetailProductController@detailUkuran');
    Route::post('cart','CartController@cart')->name('cart');
    Route::get('cart/{id}/cartDelete','CartController@cartDelete')->name('cartDelete');

    Route::get('checkout','CheckoutController@index')->name('checkout');
    Route::get('shopping-cart','CartController@index')->name('shopping-cart');

    Route::get('/cities/{id}', 'CartController@getCities');
    Route::post('/ongkir', 'CartController@check_ongkir')->name('cekOngkir');

});


Route::get('singin','AuthCostumer\LoginController@index')->name('singin');
Route::get('singup','AuthCostumer\RegisterController@index')->name('singup');
Route::post('singupStore','AuthCostumer\RegisterController@singupStore')->name('singupStore');
Route::post('singinStore','AuthCostumer\LoginController@singinStore')->name('singinStore');



Route::post('singout','AuthCostumer\LoginController@singout')->name('costumer.logout');

Route::group(['prefix' => 'frontend'], function(){
});
