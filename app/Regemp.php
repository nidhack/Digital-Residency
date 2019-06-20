<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regemp extends Model
{
    protected $table='tbl_emp_reg';
    protected $fillable=['id','emp_reg_fname','emp_reg_lname','emp_reg_job','emp_reg_phone','photo' ];

}
  