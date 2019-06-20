<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblBank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {Schema::create('tbl_Bank', function (Blueprint $table) {
       
            $table->bigIncrements('userbank_id');
            $table->integer('id');
            $table->integer('bank_accno');
           $table->string('ifsc');
            $table->string('bank');
            $table->integer('balance');
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
