<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_news_ads', function (Blueprint $table) {
            $table->bigIncrements('newsads_id');
            $table->integer('id');
            $table->string('newsads_image');
            $table->string('newsads_heading');
            $table->string('newsads_description');
            $table->string('newsads_status');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_ads');
    }
}
