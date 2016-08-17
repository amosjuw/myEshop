<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
//    protected $table = "products";
//    protected $primaryKey = "user_id";
//    protected $timestamps = false;
//    protected $fillable = ["name","title"];
    protected $fillable = array('name', 'title', 'description','price','category_id','brand_id','created_at_ip', 'updated_at_ip');
}
