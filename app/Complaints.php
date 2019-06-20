<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    protected $table='tbl_complaint';
    protected $fillable=['complaint_id','id','complaint_date','complaint_complaint','compaint_response'];
 
}
