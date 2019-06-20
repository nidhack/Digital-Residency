<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCtegory extends Model
{
    protected $table='tbl_subcategory';
    protected $fillable=[ 'subcategory_id','category_id','subcategory_subcategory'];
 
}
