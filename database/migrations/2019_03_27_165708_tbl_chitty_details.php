<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblChittyDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {Schema::create('tbl_chitty_details', function (Blueprint $table) {
       
            $table->bigIncrements('chitty_id');
           
            $table->string('chitty_det_amount');
            $table->integer('chitty_det_pay_no');
            $table->date('chitty_det_sdate');
            $table->date('chitty_det_edate');
            $table->string('chitty_details');
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
