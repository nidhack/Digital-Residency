<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblHousemembersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {Schema::create('tbl_housemembers_datails', function (Blueprint $table) {
       
            $table->bigIncrements('home_mem_id');
            $table->string('home_mem_houseno');
           $table->string('home_mem_name');
            $table->string('home_mem_occupation');
            $table->date('home_mem_d_o_b');
            $table->string('home_mem_image');
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
