<?php
use \App\Product;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', "myController@index");

Route::get('/contact-us', "myController@contact_us");

Route::get('/login', "myController@login");

Route::get('/logout', "myController@logout");

Route::get('/products', "myController@products");

Route::get('/products/category', "myController@products_category");

Route::get('/products/brands', "myController@products_brands");

Route::get('/products/details/{id}', "myController@products_details");

Route::get('/blog', "myController@blog");
Route::get('/blog-single', "myController@blog_single");

Route::get('/blog/post/{id}', "myController@blog_post");//

Route::get('/search/{keyword}', "myController@search");

Route::get('/cart', "myController@cart");

Route::get('/checkout', "myController@checkout");

Route::get('/product-details', "myController@p_details");

Route::get('/shop', "myController@shop");

//Route::post("/cart/add", "myController@cart_add");
Route::post("/cart/add", "myController@cart");
Route::post("/cart", "myController@cart");




Route::get('/test/write', function (){
    $product = new \App\Product();
    $product->create(["name"=>"ghj", "title"=>"lkjh"]);
});

Route::get('/test/read', function (){
    $product = new \App\Product();
    $product_datas = $product->all(["brand_id","name"]);

    foreach($product_datas as $product_data)
    {
        echo "$product_data->brand_id, $product_data->name, $product_data->title <br>";
    }
});

Route::get('/test/update/{id}', function ($id){
    $product = \App\Product::find($id);
    $product->name = "更新測試";
    $product->save();
    return redirect("/test/read");
});

Route::get('/test/delete/{id}', function ($id){
    $product = \App\Product::find($id);
    $product->delete();
    return redirect("/test/read");
});