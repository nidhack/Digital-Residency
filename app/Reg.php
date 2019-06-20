<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg extends Model
{
    protected $table='tbl_reg_user';
    protected $fillable=['u_reg_id','id','u_reg_fname','u_reg_lname','u_reg_job','u_reg_phone','u_reg_hno', 'u_reg_image'];

}
