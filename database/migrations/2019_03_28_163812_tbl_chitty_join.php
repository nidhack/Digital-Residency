<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblChittyJoin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {Schema::create('tbl_chitty_join', function (Blueprint $table) {
       
            $table->bigIncrements('chittyjoin_id');
            $table->string('chitty_id');
            $table->integer('id');
            $table->date('chitty_join_date');

            $table->integer('chitty_join_cardno');
            $table->string('chitty_join_ifsc');
            $table->string('chitty_join_branch');
            $table->string('chitty_join_bank');
            $table->integer('chitty_paid_status');
            $table->integer('chitty_result_status');
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
