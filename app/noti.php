<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noti extends Model
{
    
    protected $table='tbl_noti';
    protected $fillable=['noti_id','notification_category','chittyid','status','date'];
 
}
