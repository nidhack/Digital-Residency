<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chittyjoin extends Model
{
    protected $table='tbl_chitty_join';
    protected $fillable=['chitty_id','id','chitty_join_date','chitty_months','chitty_join_accno','chitty_join_ifsc','chitty_join_branch','chitty_join_bank','chitty_paid_status','chitty_result_status'];
 
}
