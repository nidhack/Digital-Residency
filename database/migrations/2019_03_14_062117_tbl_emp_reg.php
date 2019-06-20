<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblEmpReg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('tbl_emp_reg', function (Blueprint $table) {
            $table->bigIncrements('emp_reg_id');
            $table->integer('id');
           // $table->timestamps();
            $table->string('emp_reg_fname');
            $table->string('emp_reg_lname');
            $table->string('emp_reg_job');
            $table->string('emp_reg_phone');
            $table->string('photo');
    
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
