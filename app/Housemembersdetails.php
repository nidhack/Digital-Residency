<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Housemembersdetails extends Model
{
    protected $table='tbl_housemembers_datails';
    protected $fillable=['home_mem_houseno','home_mem_name','home_mem_occupation','home_mem_d_o_b','home_mem_image'];
 
}
