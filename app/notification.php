<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    protected $table='tbl_notification';
    protected $fillable=['notification_id','notification','notification_category','chittyid','status','date'];
}
