<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChittyResult extends Model
{
    protected $table='tbl_chitty_result';
    protected $fillable=['id','chitty_id','lot_count','c_result_recieve_status',];
 
}
