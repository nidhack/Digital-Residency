<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    protected $table='tbl_bank';
    protected $fillable=['id','bank_accno','ifsc','bank','balance'];
}
