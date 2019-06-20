<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chittydetails extends Model
{
    protected $table='tbl_chitty_details';
    protected $fillable=['
    ','chitty_name','chitty_det_amount','chitty_det_pay_no','chitty_oneterm_payment','chitty_det_sdate','chitty_det_edate','chitty_details'];
 
}
