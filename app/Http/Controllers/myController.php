<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
    public function index()
    {
        return view("home");
    }

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
    public function cart()
    {
        return view("cart");
    }
    public function checkout()
    {
        return view("checkout");
    }
    public function shop()
    {
        return view("shop");
    }
}
