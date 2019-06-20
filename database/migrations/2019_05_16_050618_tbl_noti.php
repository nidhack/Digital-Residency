<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblNoti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  Schema::create('tbl_noti', function (Blueprint $table) {
            $table->increments('noti_id');
            $table->string('notification_category');
            $table->string('chittyid');
            $table->string('status');
            $table->sting('date');
            $table->timestamps();
       

            $table->foreign('chittyid')->references('chitty_id')->on('Chittydetails')->onDelete('cascade');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
