<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='tbl_product';
    protected $fillable=['category_id','id','subcategory_id','product_name','product_price','product_stock','product_description','product_image','product_status'];
}
