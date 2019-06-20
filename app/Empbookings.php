<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empbookings extends Model
{
    protected $table='tbl_empbooking';
    protected $fillable=['empbooking_id','userid','empjob','empname','bookingdate','bookingstatus'];
}
