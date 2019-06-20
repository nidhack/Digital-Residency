<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblEmpbooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {Schema::create('tbl_Empbooking', function (Blueprint $table) {
       
            $table->bigIncrements('empbooking_id');
            $table->integer('id');
            $table->string('empjob');
            $table->string('empname');
            $table->date('bookingdate');
            $table->string('bookingstatus');
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
