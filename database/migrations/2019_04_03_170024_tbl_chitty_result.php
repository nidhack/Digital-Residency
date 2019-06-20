<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblChittyResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {Schema::create('tbl_chitty_result', function (Blueprint $table) {
       
            $table->bigIncrements('c_result_id');
            $table->integer('chitty_id');
            $table->integer('id');
            $table->integer('c_result_recieve_status');
            $table->timestamps();
        });
    }
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
