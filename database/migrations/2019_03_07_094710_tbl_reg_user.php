<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblRegUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('tbl_reg_user', function (Blueprint $table) {
        $table->bigIncrements('u_reg_id');
        $table->integer('id');
        // $table->timestamps();
        $table->string('u_reg_fname');
        $table->string('u_reg_lname');
        $table->string('u_reg_job');
        $table->string('u_reg_phone');
        $table->string('u_reg_hno')->unique();
        $table->string('u_reg_image');

   
        
        $table->rememberToken();
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
        //
    }
}
