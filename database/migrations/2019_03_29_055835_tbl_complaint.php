<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblComplaint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {Schema::create('tbl_complaint', function (Blueprint $table) {
       
            $table->bigIncrements('complaint_id');
            $table->integer('id');
            $table->date('complaint_date');
             $table->string('complaint_complaint');
            $table->string('compaint_response');
            $table->timestamps();
        });
    }}
    

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
