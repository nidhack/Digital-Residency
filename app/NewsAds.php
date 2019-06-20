<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsAds extends Model
{
    protected $table='tbl_news_ads';
    protected $fillable=['id','newsads_image','newsads_heading','newsads_description','newsads_status'];
}
