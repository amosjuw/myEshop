<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;

class myController extends Controller
{
    var $products;
    var $categories;
    var $brands;

    public function __construct()
    {
        $this->products = \App\Product::all(["id", "name", "price"]);
        $this->categories = \App\Category::all(["name"]);
        $this->brands = \App\Brand::all(["name"]);
    }

    public function index()
    {
        return view("home", ["title" => "Home", "products" => $this->products, "categories" => $this->categories, "brands" => $this->brands]);
    }
    
//    public function index()
//    {
//        return view("home");
//    }

    public function contact_us()
    {
        return view("contact-us");
    }
    
    public function login()
    {
        return view("login");
    }
    
    public function logout()
    {
        return "登出";
    }
    
    public function products()
    {
        return "產品";
    }
    public function products_category()
    {
        return "產品目錄";
    }
    public function products_brands()
    {
        return "產品品牌";
    }
    public function p_details()
    {
        return view("product-details");
    }
    public function blog()
    {
        return view("blog");
    }
    public function blog_single()
    {
        return view("blog-single");
    }
    public function blog_post()
    {
        return "部落格信箱";
    }
    public function search()
    {
        return "搜尋";
    }
    public function cart(Request $request)
    {
//        if($request->isMethod("POST"))
//            return view("cart");
        if(session()->has('cart_from_server'))
            $cart = session("cart_from_server");

        return view("cart", ["title" => "Cart", "description" => "網頁說明", "cart" => $cart]);
    }
    public function checkout()
    {
        return view("checkout");
    }
    public function shop()
    {
        return view("shop",["title" => "Home", "products" => $this->products, "categories" => $this->categories, "brands" => $this->brands]);
    } 
    public function cart_add(Request $request)
    {
        $product_id = $request->get("product_id");
        $product = \App\Product::find($product_id);

        Cart::add(["id" => $product_id,
                            "name" => $product->name,
                            "qty" => 1,
                            "price" => $product->price]);

        $cart = Cart::content();

//        return view("cart", ["cart" => $cart,
//                                "title" => "Cart", "description" => "網頁說明"]);
        
        return Redirect::to("cart")->with(["cart_from_server" => $cart, "title" => "Cart", "description" => "網頁說明"]);
    }
   
}
