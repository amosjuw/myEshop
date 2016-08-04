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
        return "聯絡我們";
    }
    
    public function login()
    {
        return "登入";
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
        return "部落格";
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
        return "購物車";
    }
    public function checkout()
    {
        return "簽出";
    }
    public function shop()
    {
        return view("shop");
    }
}
